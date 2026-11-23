# Astro3D

Website jasa 3D printing Astro3D — partner produksi dari satuan hingga batch. Dibangun dengan Laravel, Vite, dan Tailwind CSS, dengan konten multibahasa (Indonesia, English, 中文).

Live brand: [astro3d.id](https://astro3d.id)

## Fitur utama

- Landing page produksi: hero video, keunggulan, material (PLA / PETG / ABS), galeri, alur, ulasan, FAQ, CTA
- Bahasa: ID / EN / 中文 (disimpan di session)
- Link WhatsApp & email di-obfuscate (anti-scrape sederhana)
- UI dark glass / gradient, responsive

## Yang perlu diinstall

| Tool | Versi | Catatan |
|------|--------|---------|
| PHP | 8.3+ (disarankan 8.4) | Extensi umum Laravel: `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `fileinfo` |
| Composer | 2.x | Dependency PHP |
| Node.js | 20+ LTS | Bundling Vite |
| npm | ikut Node | Dependency frontend |

Opsional (Windows): [Laragon](https://laragon.org/) — PHP, Composer, dan virtual host sudah siap.

## Setup lokal

Dari root project:

```bash
# 1) Dependency PHP
composer install

# 2) Environment
cp .env.example .env
php artisan key:generate

# 3) Database (default: SQLite)
# Pastikan file database ada, lalu migrate (dibutuhkan untuk session)
touch database/database.sqlite   # macOS / Linux
# Windows PowerShell:
# New-Item -ItemType File -Force database/database.sqlite

php artisan migrate

# 4) Frontend
npm install
npm run build
```

Atau sekali jalan (script bawaan Laravel):

```bash
composer setup
```

> `composer setup` akan `composer install`, salin `.env` jika belum ada, generate key, migrate, `npm install`, dan `npm run build`.

### Catatan `.env`

Minimal yang relevan untuk preview:

```env
APP_NAME=Astro3D
APP_URL=http://localhost:8000
APP_LOCALE=id
APP_FALLBACK_LOCALE=id
DB_CONNECTION=sqlite
SESSION_DRIVER=database
```

Untuk Laragon virtual host, sesuaikan misalnya:

```env
APP_URL=http://astro3d.test
```

## Preview di lokal

### Opsi A — paling sederhana (PHP + Vite)

Terminal 1:

```bash
php artisan serve
```

Terminal 2 (hot reload CSS/JS):

```bash
npm run dev
```

Buka: [http://127.0.0.1:8000](http://127.0.0.1:8000)

### Opsi B — satu perintah

```bash
composer run dev
```

Menjalankan server Laravel + Vite (dan proses terkait) bersamaan.

### Opsi C — Laragon

1. Letakkan project di `C:\laragon\www\astro3d` (atau path www Laragon Anda)
2. Start Laragon (Apache/Nginx + PHP)
3. Akses `http://astro3d.test` (atau host yang Laragon buat)
4. Jalankan `npm run dev` saat mengembangkan CSS/JS, atau `npm run build` untuk asset production

## Perintah berguna

```bash
# Build asset production
npm run build

# Jalankan test
php artisan test
# atau
composer test

# Format PHP (Pint)
vendor/bin/pint
```

## Struktur singkat

```text
app/                  # Middleware locale, controller ganti bahasa
lang/{id,en,zh}/      # Terjemahan halaman
resources/views/      # Blade (home)
resources/css/        # Tailwind + custom UI
resources/js/         # Nav, slider, carousel ulasan, protect contact
public/images/        # Logo, material, galeri
public/videos/        # Video hero
routes/web.php        # / dan /locale/{locale}
```

## Ganti bahasa

Switcher **ID · EN · 中文** di header. Route: `/locale/{id|en|zh}` (menyimpan pilihan di session).

## Kontak di kode

Nomor WhatsApp & email tidak ditulis plain sebagai `href` siap-scrape; di-encode dan di-unlock saat interaksi user. Update nomor/email di `resources/views/home.blade.php` (variabel `$waConsult`, `$waFile`, `$email`).

## Lisensi

Kode berbasis skeleton Laravel (MIT). Konten brand & aset Astro3D milik pemilik proyek.
