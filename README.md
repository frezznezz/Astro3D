# Astro3D

Website jasa 3D printing Astro3D: partner produksi dari satuan hingga batch. Dibangun dengan Laravel, Vite, dan Tailwind CSS, dengan konten multibahasa (Indonesia, English, 中文).

Brand: [astro3d.id](https://astro3d.id)

## Daftar isi

- [Fitur](#fitur)
- [Requirement](#requirement)
- [Setup lokal](#setup-lokal)
- [Preview di lokal](#preview-di-lokal)
- [Deploy ke production](#deploy-ke-production)
- [Cloudflare](#cloudflare)
- [Checklist sebelum launch](#checklist-sebelum-launch)
- [Troubleshooting](#troubleshooting)
- [Struktur project](#struktur-project)

## Fitur

- Landing page produksi: hero video, keunggulan, material (PLA / PETG / ABS), galeri, alur, ulasan (carousel auto-slide), FAQ, CTA
- Bahasa ID / EN / 中文, pilihan disimpan di session (`/locale/{id|en|zh}`)
- Link WhatsApp dan email di-obfuscate (anti-scrape sederhana)
- Meta SEO dan social: canonical, Open Graph, Twitter card
- UI dark glass / gradient, responsive

## Requirement

### Software

| Tool | Versi | Catatan |
|------|-------|---------|
| PHP | 8.3+ (disarankan 8.4) | Sesuai `composer.json` (`^8.3`) |
| Composer | 2.x | Dependency PHP |
| Node.js | 20.19+ atau 22.12+ | Dibutuhkan Vite 8 (lokal diuji dengan Node 24) |
| npm | ikut Node | Pakai `npm ci` agar sesuai `package-lock.json` |
| Git | terbaru | Untuk clone dan update |

### Ekstensi PHP

`ctype`, `curl`, `dom`, `fileinfo`, `filter`, `hash`, `mbstring`, `openssl`, `pcre`, `pdo`, `session`, `tokenizer`, `xml`, serta driver database: `pdo_mysql` (production) atau `pdo_sqlite` (lokal).

### Database

- Lokal: SQLite (default `.env.example`)
- Production: MySQL / MariaDB (disarankan)

Database dipakai untuk **session** (menyimpan pilihan bahasa), cache, dan queue. Tabel dibuat lewat `php artisan migrate`.

### Server production

- Web server: Nginx (PHP-FPM) atau Apache dengan `public/.htaccess`
- Document root harus mengarah ke folder `public/`
- Folder `storage/` dan `bootstrap/cache/` harus writable oleh user PHP
- HTTPS aktif (via Cloudflare atau sertifikat sendiri)
- Disarankan: minimal 512 MB RAM, ruang disk sekitar 200 MB (vendor + aset)

Opsional di Windows: [Laragon](https://laragon.org/) sudah berisi PHP, Composer, dan virtual host.

## Setup lokal

```bash
# 1) Dependency PHP
composer install

# 2) Environment
cp .env.example .env
php artisan key:generate

# 3) Database (default SQLite)
touch database/database.sqlite
# Windows PowerShell: New-Item -ItemType File -Force database/database.sqlite
php artisan migrate

# 4) Frontend
npm ci
npm run build
```

Atau sekali jalan:

```bash
composer setup
```

Variabel `.env` minimal untuk preview:

```env
APP_NAME=Astro3D
APP_URL=http://localhost:8000
APP_LOCALE=id
APP_FALLBACK_LOCALE=id
DB_CONNECTION=sqlite
SESSION_DRIVER=database
```

Untuk virtual host Laragon, sesuaikan misalnya `APP_URL=http://astro3d.test`.

## Preview di lokal

**Opsi A: dua terminal**

```bash
php artisan serve   # terminal 1
npm run dev         # terminal 2 (hot reload CSS/JS)
```

Buka [http://127.0.0.1:8000](http://127.0.0.1:8000).

**Opsi B: satu perintah**

```bash
composer run dev
```

**Opsi C: Laragon**

1. Letakkan project di `C:\laragon\www\astro3d`
2. Start Laragon
3. Buka `http://astro3d.test`
4. Jalankan `npm run dev` saat mengubah CSS/JS, atau `npm run build` untuk aset final

Perintah berguna:

```bash
php artisan test        # jalankan test
vendor/bin/pint         # format PHP
npm run build           # build aset production
```

## Deploy ke production

> `public/build` tidak ikut git (ada di `.gitignore`). Aset frontend harus di-build di server, atau di-build lokal lalu diunggah.

### 1. Siapkan server

1. Install PHP 8.3+ (dengan ekstensi di atas), Composer, dan Git. Node.js hanya perlu jika build di server.
2. Buat database MySQL dan user khusus.
3. Arahkan document root domain ke `<path-project>/public`.

### 2. Ambil kode

```bash
git clone <url-repo> astro3d
cd astro3d
```

### 3. Konfigurasi environment

```bash
cp .env.production.example .env
php artisan key:generate
```

Lalu edit `.env`:

| Variabel | Nilai production |
|----------|------------------|
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` (wajib) |
| `APP_URL` | `https://astro3d.id` (atau domain staging) |
| `APP_LOCALE` / `APP_FALLBACK_LOCALE` | `id` |
| `DB_*` | Kredensial MySQL |
| `SESSION_DRIVER` | `database` |
| `SESSION_SECURE_COOKIE` | `true` (setelah HTTPS aktif) |
| `LOG_LEVEL` | `warning` |

Template lengkap ada di `.env.production.example`. Jangan commit file `.env`.

### 4. Install, build, dan cache

```bash
composer install --no-dev --optimize-autoloader

npm ci
npm run build

php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Pastikan folder bisa ditulis:

```bash
chmod -R ug+rw storage bootstrap/cache
```

### 5. Update berikutnya

```bash
git pull
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan migrate --force
php artisan config:cache && php artisan route:cache && php artisan view:cache
```

Jika build dilakukan di komputer lokal, unggah folder `public/build` ke server setelah `git pull`.

### Contoh Nginx

```nginx
server {
    listen 80;
    server_name astro3d.id www.astro3d.id;
    root /var/www/astro3d/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.4-fpm.sock;
    }

    location /build/ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }

    location ~* \.(jpg|jpeg|png|webp|mp4|ico)$ {
        expires 30d;
        add_header Cache-Control "public";
    }

    location ~ /\.(?!well-known) {
        deny all;
    }
}
```

Untuk Apache, pastikan `mod_rewrite` aktif dan `AllowOverride All` agar `public/.htaccess` terbaca.

## Cloudflare

Cloudflare tidak menjalankan PHP/Laravel langsung. Project ini butuh server PHP sebagai origin; Cloudflare dipakai sebagai DNS, SSL, proxy, dan cache aset statis.

1. Tambahkan domain ke Cloudflare dan arahkan nameserver sesuai instruksi.
2. Buat record DNS `A` / `CNAME` ke origin server dengan status **Proxied** (awan oranye).
3. **SSL/TLS**: mode **Full (strict)**, aktifkan **Always Use HTTPS**.
4. **Jangan** pakai "Cache Everything" untuk halaman HTML. Bahasa dipilih lewat session cookie di URL yang sama (`/`), sehingga cache HTML akan menampilkan bahasa yang salah.
5. Cache aman untuk aset statis: `/build/*`, `/images/*`, `/videos/*` (Cache Rule dengan Edge TTL panjang).
6. Aktifkan Brotli dan Auto Minify sesuai kebutuhan.
7. Di `.env` set `APP_URL` ke domain HTTPS. Aplikasi sudah mempercayai header proxy (`X-Forwarded-*`), jadi URL dan HTTPS terdeteksi dengan benar di belakang Cloudflare.
8. Opsional: batasi firewall origin agar hanya menerima trafik dari [IP Cloudflare](https://www.cloudflare.com/ips/).

## Checklist sebelum launch

- [ ] `APP_DEBUG=false` dan `APP_ENV=production`
- [ ] `APP_KEY` di-generate di server (bukan salinan lokal)
- [ ] `APP_URL` memakai `https://`
- [ ] `php artisan migrate --force` sukses (tabel `sessions` ada)
- [ ] `npm run build` sudah jalan dan `public/build` ada
- [ ] Cache config/route/view sudah dibuat
- [ ] Document root mengarah ke `public/`
- [ ] Ganti bahasa ID / EN / 中文 berfungsi
- [ ] Tombol WhatsApp dan email membuka link yang benar
- [ ] Link preview (WhatsApp / sosial media) menampilkan gambar OG
- [ ] Hero video terputar dan halaman tidak lambat di mobile

## Troubleshooting

| Masalah | Solusi |
|---------|--------|
| `Unable to locate file in Vite manifest` | Jalankan `npm run build` |
| Halaman 500 setelah deploy | Cek `storage/logs/laravel.log`, permission `storage/`, dan `APP_KEY` |
| Bahasa tidak berubah | Pastikan migrate sudah jalan (tabel `sessions`) dan HTML tidak di-cache oleh CDN |
| CSS/JS tidak update | Build ulang, lalu `php artisan view:clear` dan purge cache Cloudflare |
| Perubahan `.env` tidak terbaca | `php artisan config:clear` lalu `config:cache` lagi |
| Link `http://` di belakang proxy | Pastikan `APP_URL` HTTPS dan proxy mengirim `X-Forwarded-Proto` |

## Struktur project

```text
app/Http/Controllers/   # LocaleController (ganti bahasa)
app/Http/Middleware/    # SetLocale
lang/{id,en,zh}/        # Terjemahan halaman (site.php)
resources/views/        # Blade (home)
resources/css/          # Tailwind + custom UI
resources/js/           # Nav, slider, carousel ulasan, protect contact
public/images/          # Logo, material, galeri, OG image (sudah dikompres)
public/videos/          # Video hero
routes/web.php          # / dan /locale/{locale}
tests/Feature/          # Test locale, proteksi kontak, kesiapan production
```

## Mengubah kontak

Nomor WhatsApp dan email ada di `resources/views/home.blade.php` (variabel `$waConsult`, `$waFile`, `$email`). Link di-encode dan baru dibuka saat user berinteraksi.

## Lisensi

Kode berbasis skeleton Laravel (MIT). Konten brand dan aset Astro3D milik pemilik proyek.
