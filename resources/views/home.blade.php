<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasa 3D Print Satuan hingga Produksi Batch | Astro3D</title>
    <meta name="description" content="Jasa 3D printing satuan atau produksi jumlah banyak. Kirim file 3D Anda ke Astro3D untuk konsultasi material dan penawaran harga.">
    <meta property="og:title" content="Astro3D — Wujudkan Ide Anda, Lapis Demi Lapis.">
    <meta property="og:description" content="Jasa 3D printing satuan hingga produksi batch untuk personal, bisnis, dan brand.">
    <meta property="og:image" content="{{ asset('images/og.png') }}">
    <link rel="icon" href="{{ asset('images/astro3d-hitam.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/geist@1.3.1/dist/fonts/geist-sans/style.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="astro-body">
    @php
        $waConsult = 'https://wa.me/6282297065801?text=' . rawurlencode('Halo Astro3D, saya ingin konsultasi.');
        $waFile = 'https://wa.me/6282297065801?text=' . rawurlencode('Halo Astro3D, saya akan mengirim file 3D.');
    @endphp

    <header class="site-header" data-header>
        <div class="header-inner">
            <a href="{{ url('/') }}" class="brand" aria-label="Astro3D home">
                <img src="{{ asset('images/astro3d-hitam.png') }}" alt="Astro3D" class="brand-logo" width="140" height="90">
            </a>

            <div class="header-right">
                <nav class="site-nav" id="site-nav" aria-label="Navigasi utama">
                    <a href="#material">Produksi Batch</a>
                    <a href="#hasil-cetak">Galeri</a>
                    <a class="nav-order" href="{{ $waConsult }}" target="_blank" rel="noreferrer">
                        Mulai Cetak <span aria-hidden="true">↗</span>
                    </a>
                </nav>
                <button class="nav-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="site-nav" data-nav-toggle>
                    <span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        {{-- Video hero — match astro3d.id overlay --}}
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-media" aria-hidden="true">
                <video autoplay loop muted playsinline preload="metadata" poster="{{ asset('images/Material/PETG.jpg') }}" data-hero-video>
                    <source src="{{ asset('videos/ProsesCetak.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-grid" aria-hidden="true"></div>

            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 id="hero-title" class="hero-title">
                        Jasa 3D Print<br>
                        <em>Satuan hingga Produksi Batch</em>
                    </h1>
                    <p class="hero-lead">
                        Kirim file 3D Anda untuk konsultasi material dan penawaran harga.
                    </p>
                    <div class="hero-actions">
                        <a class="btn-hero" href="{{ $waFile }}" target="_blank" rel="noreferrer">
                            Kirim File via WhatsApp <span aria-hidden="true">↗</span>
                        </a>
                        <a class="hero-secondary" href="#hasil-cetak">
                            Lihat Hasil Cetak <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>
            </div>

            <a class="hero-scroll" href="#keunggulan" aria-label="Lihat keunggulan Astro3D">
                <span>Selengkapnya</span>
                <i aria-hidden="true">↓</i>
            </a>
        </section>

        {{-- Glass advantage cards --}}
        <section class="section" id="keunggulan" aria-labelledby="adv-title">
            <div class="shell">
                <div class="section-head">
                    <p class="eyebrow">Kenapa Astro3D</p>
                    <h2 id="adv-title">Keunggulan produksi yang <span class="text-gradient">siap dipakai</span></h2>
                </div>

                <div class="glass-grid">
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true"></div>
                        <h3>Garansi Refund</h3>
                        <p>Refund jika model tidak sesuai pesanan, rusak, atau mengalami cacat produksi.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true"></div>
                        <h3>Proses Cepat</h3>
                        <p>Alur kerja ringkas dari pengecekan file hingga quality control.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true"></div>
                        <h3>Konsultasi Material</h3>
                        <p>Kami membantu memilih material sesuai fungsi, kebutuhan, dan anggaran.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true"></div>
                        <h3>Harga Batch</h3>
                        <p>Dapatkan harga grosir untuk pencetakan file yang sama dalam jumlah besar.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Materials + ambient panel --}}
        <section class="section section-ambient" id="material" aria-labelledby="material-title">
            <div class="ambient-bg" aria-hidden="true">
                <img src="{{ asset('images/Material/PETG.jpg') }}" alt="">
            </div>
            <div class="shell ambient-layout">
                <div class="ambient-copy">
                    <p class="eyebrow">Pilihan Material</p>
                    <h2 id="material-title">Material tepat untuk setiap fungsi</h2>
                    <p>Belum yakin? Kami bantu memilih material.</p>
                    <a class="btn-glow" href="{{ $waConsult }}" target="_blank" rel="noreferrer">Konsultasi Material</a>
                </div>

                <div class="material-panels">
                    <a class="glass-panel" href="{{ $waFile }}" target="_blank" rel="noreferrer" data-tilt>
                        <img src="{{ asset('images/Material/PLA.jpg') }}" alt="PLA" loading="lazy">
                        <div>
                            <strong>PLA</strong>
                            <span>Detail tajam · general print</span>
                        </div>
                    </a>
                    <a class="glass-panel" href="{{ $waFile }}" target="_blank" rel="noreferrer" data-tilt>
                        <img src="{{ asset('images/Material/PETG.jpg') }}" alt="PETG" loading="lazy">
                        <div>
                            <strong>PETG</strong>
                            <span>Kuat · part fungsional</span>
                        </div>
                    </a>
                    <a class="glass-panel" href="{{ $waFile }}" target="_blank" rel="noreferrer" data-tilt>
                        <img src="{{ asset('images/Material/ABS.jpg') }}" alt="ABS" loading="lazy">
                        <div>
                            <strong>ABS</strong>
                            <span>Tahan panas · part teknis</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Gallery slider --}}
        <section class="section" id="hasil-cetak" aria-labelledby="gallery-title">
            <div class="shell">
                <div class="section-head section-head-row">
                    <div>
                        <p class="eyebrow">Hasil Cetak</p>
                        <h2 id="gallery-title">Hasil cetak <span class="text-gradient">Astro3D</span></h2>
                    </div>
                    <div class="slider-nav">
                        <button type="button" class="slider-btn" data-slider-prev aria-label="Sebelumnya">←</button>
                        <button type="button" class="slider-btn" data-slider-next aria-label="Berikutnya">→</button>
                    </div>
                </div>

                <div class="gallery-slider" data-slider>
                    <figure class="gallery-slide is-active glass-card" data-tilt>
                        <img src="{{ asset('images/Galeri/1.jpg') }}" alt="Dekorasi" loading="lazy">
                        <figcaption>Dekorasi</figcaption>
                    </figure>
                    <figure class="gallery-slide glass-card" data-tilt>
                        <img src="{{ asset('images/Galeri/2.jpg') }}" alt="Komponen fungsional" loading="lazy">
                        <figcaption>Komponen fungsional</figcaption>
                    </figure>
                    <figure class="gallery-slide glass-card" data-tilt>
                        <img src="{{ asset('images/Galeri/3.jpeg') }}" alt="Produksi batch" loading="lazy">
                        <figcaption>Produksi batch</figcaption>
                    </figure>
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section class="section" id="alur" aria-labelledby="alur-title">
            <div class="shell">
                <div class="section-head">
                    <p class="eyebrow">Alur Pemesanan</p>
                    <h2 id="alur-title">Dari file ke produk dalam <span class="text-gradient">4 langkah</span></h2>
                </div>
                <ol class="process-grid">
                    <li class="glass-card" data-tilt>
                        <span class="step-num">01</span>
                        <h3>Kirim file 3D</h3>
                        <p>Kirim STL, OBJ, STEP, STP, 3MF, atau format lainnya ke WhatsApp kami.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">02</span>
                        <h3>Konsultasi & penawaran</h3>
                        <p>Tentukan material, warna, dan jumlah untuk mendapatkan penawaran harga.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">03</span>
                        <h3>Cetak & quality control</h3>
                        <p>Kami memproduksi pesanan lalu memeriksa hasilnya sebelum dikirim.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">04</span>
                        <h3>Terima barang</h3>
                        <p>Pesanan dikemas dan dikirim ke alamat Anda di seluruh Indonesia.</p>
                    </li>
                </ol>
            </div>
        </section>

        {{-- Reviews --}}
        <section class="section" id="ulasan" aria-labelledby="reviews-title">
            <div class="shell">
                <div class="section-head section-head-row">
                    <div>
                        <p class="eyebrow">Ulasan</p>
                        <h2 id="reviews-title">Kata mereka tentang Astro3D</h2>
                    </div>
                    <a class="btn-ghost" href="https://shopee.co.id/astro_3d" target="_blank" rel="noopener noreferrer">Lihat di Shopee →</a>
                </div>
                <div class="review-grid">
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="Rating 5 dari 5">★★★★★</p>
                        <p>Pemesanan kali kedua, dan pasti akan langganan disini hasil mantap, proses cepat, harga termurah</p>
                        <footer>f***f</footer>
                    </blockquote>
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="Rating 5 dari 5">★★★★★</p>
                        <p>Kualitas barang baru, Harga yang ditawarkan bersaing, pemrosesan penjualan sampai packing sangat cepat, packing aman dan rapi. Profesional dan Recommended Seller !</p>
                        <footer>s***e</footer>
                    </blockquote>
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="Rating 5 dari 5">★★★★★</p>
                        <p>Rapi, cepet, responsif</p>
                        <footer>l***c</footer>
                    </blockquote>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="section" id="faq" aria-labelledby="faq-title">
            <div class="shell faq-shell">
                <div class="section-head">
                    <p class="eyebrow">FAQ</p>
                    <h2 id="faq-title">Pertanyaan yang sering ditanyakan</h2>
                </div>
                <div class="faq-list">
                    <details class="faq-item glass-card" open>
                        <summary>Berapa biaya jasa 3D printing?</summary>
                        <p>Biaya cetak satuan tergantung berat dan material yang dipilih. Untuk produksi jumlah banyak, tersedia harga khusus yang didiskusikan terlebih dahulu sesuai kerumitan model.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Belum punya file 3D, apakah tetap bisa pesan?</summary>
                        <p>Bisa. Kami menyediakan jasa desain dari sketsa menjadi model 3D. Pastikan sketsa dilengkapi ukuran yang jelas agar desain sesuai kebutuhan Anda.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Berapa lama proses pengerjaannya?</summary>
                        <p>Umumnya proses pengerjaan membutuhkan waktu 1–3 hari. Silakan konfirmasi terlebih dahulu untuk memastikan estimasi waktu pesanan Anda.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Apakah bisa cetak satuan atau ada minimum pemesanan?</summary>
                        <p>Bisa cetak satuan, dengan minimum pemesanan hanya 20 gram.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Bagaimana memilih material yang sesuai kebutuhan saya?</summary>
                        <p>Jika masih bingung, kami siap membantu melalui konsultasi untuk memilih material yang sesuai kebutuhan Anda.</p>
                    </details>
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="cta-band">
            <div class="shell cta-inner glass-card" data-tilt>
                <div>
                    <h2>Sudah punya file 3D?</h2>
                    <p>Kirim sekarang untuk konsultasi material dan penawaran harga.</p>
                </div>
                <a class="btn-glow btn-glow-lg" href="{{ $waFile }}" target="_blank" rel="noreferrer">
                    Kirim File via WhatsApp <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="shell footer-grid">
            <div class="footer-brand">
                <img src="{{ asset('images/astro3d-hitam.png') }}" alt="Astro3D" class="footer-logo" width="120" height="77">
                <p><strong>Astro3D — Partner Produksimu</strong></p>
                <p>Surabaya, Jawa Timur, Indonesia</p>
            </div>
            <div class="footer-links">
                <a href="#material">Material</a>
                <a href="#hasil-cetak">Galeri</a>
                <a href="#alur">Alur</a>
                <a href="#faq">FAQ</a>
            </div>
            <div class="footer-contact">
                <a href="{{ $waFile }}" target="_blank" rel="noreferrer">WhatsApp: +62 822-9706-5801</a>
                <a href="mailto:astro3d.id@gmail.com">astro3d.id@gmail.com</a>
                <a href="https://shopee.co.id/astro_3d" target="_blank" rel="noopener noreferrer">Shopee Astro3D</a>
            </div>
        </div>
        <div class="shell footer-bottom">
            <p>© {{ date('Y') }} Astro3D</p>
        </div>
    </footer>
</body>
</html>
