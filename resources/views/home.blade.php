<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astro3D — Partner Produksi 3D Printing Satuan hingga Batch</title>
    <meta name="description" content="Astro3D membantu mewujudkan ide menjadi produk nyata. Jasa 3D printing satuan hingga produksi batch, dengan rekomendasi material dan penawaran yang jelas.">
    <meta property="og:title" content="Astro3D — Wujudkan Ide Anda, Lapis Demi Lapis.">
    <meta property="og:description" content="Partner produksi 3D printing untuk personal, bisnis, dan brand. Dari file ke produk siap pakai.">
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
                        Dari file ke produk siap pakai. Kami bantu rekomendasi material, estimasi biaya, dan jadwal produksi.
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
                    <div>
                        <p class="eyebrow">Kenapa Astro3D</p>
                        <h2 id="adv-title">Partner produksi yang <span class="text-gradient">bisa diandalkan</span></h2>
                        <p class="section-lead">
                            Astro3D mendampingi Anda mengubah ide menjadi objek nyata—lapis demi lapis.
                            Mulai dari prototipe satuan hingga produksi batch, dengan proses jelas, material yang tepat, dan hasil yang konsisten.
                        </p>
                    </div>
                </div>

                <div class="glass-grid">
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M12 2.5 4.5 5.2v6.1c0 4.7 3.1 8.9 7.5 10.2 4.4-1.3 7.5-5.5 7.5-10.2V5.2L12 2.5zm-1.1 13.2-3.4-3.4 1.4-1.4 2 2 4.1-4.1 1.4 1.4-5.5 5.5z"/>
                            </svg>
                        </div>
                        <h3>Jaminan Uang Kembali</h3>
                        <p>Kami bertanggung jawab atas hasil cetak. Jika tidak sesuai pesanan, rusak, atau cacat produksi, dana Anda dikembalikan.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M11.2 2.2 4.4 13.1h6.1l-1.1 8.7 8.4-12.6h-6.2l1.6-7z"/>
                            </svg>
                        </div>
                        <h3>Pengerjaan Cepat</h3>
                        <p>Alur produksi ringkas dan terukur: validasi file, cetak, quality control, lalu pengiriman. Estimasi umum 1–3 hari kerja.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M12 2.2 2.8 7.2v9.6L12 21.8l9.2-5V7.2L12 2.2zm0 2.3 6.4 3.5L12 11.5 5.6 8 12 4.5zM4.6 9.7l6.4 3.5v6.7l-6.4-3.5V9.7zm14.8 0v6.7l-6.4 3.5v-6.7l6.4-3.5z"/>
                            </svg>
                        </div>
                        <h3>Rekomendasi Material</h3>
                        <p>Setiap part punya kebutuhan berbeda. Kami bantu memilih PLA, PETG, atau ABS sesuai fungsi, beban, suhu, dan anggaran Anda.</p>
                    </article>
                    <article class="glass-card" data-tilt>
                        <div class="glass-orb" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M4 5.5h16v3.2H4V5.5zm0 4.8h16v3.2H4V10.3zm0 4.8h16V18.3H4v-3.2z"/>
                            </svg>
                        </div>
                        <h3>Tarif Produksi Batch</h3>
                        <p>Siap untuk satuan maupun skala lebih besar. Untuk volume tinggi dengan file yang sama, tersedia tarif khusus produksi batch.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Materials --}}
        <section class="section" id="material" aria-labelledby="material-title">
            <div class="shell">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">Pilihan Material</p>
                        <h2 id="material-title">Material tepat untuk <span class="text-gradient">hasil yang tepat</span></h2>
                        <p class="section-lead">
                            Material menentukan kekuatan, ketahanan panas, dan kualitas permukaan.
                            Astro3D membantu Anda memilih opsi paling masuk akal untuk fungsi part dan anggaran produksi.
                        </p>
                    </div>
                    <a class="btn-glow" href="{{ $waConsult }}" target="_blank" rel="noreferrer">Konsultasi Material</a>
                </div>

                <div class="material-guide">
                    <article class="material-card glass-card" data-tilt>
                        <div class="material-card-media">
                            <img src="{{ asset('images/Material/PLA.jpg') }}" alt="Hasil cetak material PLA" width="600" height="800" loading="lazy">
                        </div>
                        <div class="material-card-body">
                            <p class="material-tag">Paling rapi</p>
                            <h3>PLA</h3>
                            <p class="material-desc">
                                Material paling umum untuk cetak 3D. Mudah dibentuk, detail tajam, dan hasil permukaan lebih rapi. Cocok untuk dekorasi, maket, miniatur, dan prototipe tampilan.
                            </p>
                            <ul class="material-pros">
                                <li>Detail dan permukaan halus</li>
                                <li>Warping rendah, hasil stabil</li>
                                <li>Banyak pilihan warna</li>
                                <li>Harga relatif lebih hemat</li>
                            </ul>
                            <p class="material-note"><strong>Kurang cocok:</strong> part yang kena panas tinggi (misalnya dalam mobil terik) atau benturan berat.</p>
                            <p class="material-use"><strong>Contoh pakai:</strong> pajangan, maket arsitektur, prototype visual, organizer meja.</p>
                        </div>
                    </article>

                    <article class="material-card glass-card" data-tilt>
                        <div class="material-card-media">
                            <img src="{{ asset('images/Material/PETG.jpg') }}" alt="Hasil cetak material PETG" width="600" height="800" loading="lazy">
                        </div>
                        <div class="material-card-body">
                            <p class="material-tag">Paling serbaguna</p>
                            <h3>PETG</h3>
                            <p class="material-desc">
                                Lebih tangguh dari PLA dan lebih tahan kelembapan. Cocok untuk part yang dipakai sehari-hari: dudukan, klip, casing, dan komponen fungsional yang butuh daya tahan.
                            </p>
                            <ul class="material-pros">
                                <li>Lebih tahan benturan daripada PLA</li>
                                <li>Tahan air dan kelembapan lebih baik</li>
                                <li>Lebih tahan panas ringan (~70–80°C)</li>
                                <li>Cocok untuk part fungsional</li>
                            </ul>
                            <p class="material-note"><strong>Catatan:</strong> permukaan biasanya kurang tajam dibanding PLA; cocok bila kekuatan lebih penting dari estetika detail.</p>
                            <p class="material-use"><strong>Contoh pakai:</strong> bracket, klip, housing, dudukan alat, spare part ringan.</p>
                        </div>
                    </article>

                    <article class="material-card glass-card" data-tilt>
                        <div class="material-card-media">
                            <img src="{{ asset('images/Material/ABS.jpg') }}" alt="Hasil cetak material ABS" width="600" height="800" loading="lazy">
                        </div>
                        <div class="material-card-body">
                            <p class="material-tag">Tahan panas</p>
                            <h3>ABS</h3>
                            <p class="material-desc">
                                Material teknis yang lebih tahan panas dan lebih kaku. Dipakai untuk part yang bekerja di suhu lebih tinggi atau butuh ketahanan mekanis lebih baik.
                            </p>
                            <ul class="material-pros">
                                <li>Tahan panas lebih tinggi (~90–100°C)</li>
                                <li>Lebih tangguh untuk part teknis</li>
                                <li>Bisa diproses lanjut (mis. smoothing)</li>
                                <li>Cocok untuk lingkungan kerja lebih keras</li>
                            </ul>
                            <p class="material-note"><strong>Kurang cocok:</strong> paparan matahari terus-menerus (UV). Untuk outdoor jangka panjang, konsultasikan alternatif seperti ASA.</p>
                            <p class="material-use"><strong>Contoh pakai:</strong> housing elektronik, jig/fixture, part otomotif indoor, komponen teknis.</p>
                        </div>
                    </article>
                </div>

                <div class="material-tips glass-card">
                    <h3>Panduan singkat memilih material</h3>
                    <ol>
                        <li><strong>Prioritas detail & tampilan?</strong> Mulai dari PLA.</li>
                        <li><strong>Part fungsional yang dipakai sehari-hari?</strong> Pilih PETG.</li>
                        <li><strong>Butuh ketahanan panas lebih tinggi?</strong> Pertimbangkan ABS.</li>
                    </ol>
                    <p>Masih ragu? Kirim file beserta fungsi part-nya. Tim Astro3D akan merekomendasikan material yang paling sesuai untuk kebutuhan dan anggaran Anda.</p>
                </div>
            </div>
        </section>

        {{-- Gallery slider --}}
        <section class="section" id="hasil-cetak" aria-labelledby="gallery-title">
            <div class="shell">
                <div class="section-head gallery-head">
                    <div class="gallery-copy">
                        <p class="eyebrow">Hasil Cetak</p>
                        <h2 id="gallery-title">Bukti kualitas dari <span class="text-gradient">setiap lapisan</span></h2>
                        <p class="section-lead">Dari dekorasi hingga komponen fungsional dan produksi batch—hasil yang rapi, konsisten, dan siap dipakai.</p>
                    </div>

                    <div class="slider-nav">
                        <button type="button" class="slider-btn" data-slider-prev aria-label="Sebelumnya">
                            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false">
                                <path d="M15 6 9 12l6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button type="button" class="slider-btn" data-slider-next aria-label="Berikutnya">
                            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false">
                                <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
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
                    <div>
                        <p class="eyebrow">Alur Produksi</p>
                        <h2 id="alur-title">Dari file ke produk, <span class="text-gradient">tanpa ribet</span></h2>
                        <p class="section-lead">Proses transparan dari awal—Anda tahu material, biaya, dan jadwal sebelum produksi dimulai.</p>
                    </div>
                </div>
                <ol class="process-grid">
                    <li class="glass-card" data-tilt>
                        <span class="step-num">01</span>
                        <h3>Kirim file 3D</h3>
                        <p>Kirim STL, OBJ, STEP, STP, 3MF, atau format lain via WhatsApp. Kami cek kelayakan cetak sejak awal.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">02</span>
                        <h3>Konsultasi & penawaran</h3>
                        <p>Tentukan material, warna, dan jumlah. Anda menerima estimasi harga sebelum produksi berjalan.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">03</span>
                        <h3>Cetak & quality control</h3>
                        <p>Setiap hasil diperiksa agar sesuai spesifikasi pesanan sebelum masuk tahap pengiriman.</p>
                    </li>
                    <li class="glass-card" data-tilt>
                        <span class="step-num">04</span>
                        <h3>Terima produk</h3>
                        <p>Dikemas rapi dan dikirim ke seluruh Indonesia—siap dipakai atau langsung masuk proses bisnis Anda.</p>
                    </li>
                </ol>
            </div>
        </section>

        {{-- Reviews --}}
        <section class="section" id="ulasan" aria-labelledby="reviews-title">
            <div class="shell">
                <div class="section-head section-head-row">
                    <div>
                        <p class="eyebrow">Ulasan Klien</p>
                        <h2 id="reviews-title">Dipercaya karena hasil yang <span class="text-gradient">konsisten</span></h2>
                        <p class="section-lead">Klien kembali karena pengerjaan cepat, packing rapi, dan kualitas yang bisa diandalkan.</p>
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
                    <div>
                        <p class="eyebrow">FAQ</p>
                        <h2 id="faq-title">Semua yang perlu Anda ketahui sebelum produksi</h2>
                    </div>
                </div>
                <div class="faq-list">
                    <details class="faq-item glass-card" open>
                        <summary>Berapa biaya jasa 3D printing di Astro3D?</summary>
                        <p>Biaya dihitung dari berat hasil cetak, jenis material, dan tingkat kerumitan model. Untuk produksi batch, tarif dapat lebih efisien dan selalu dikonfirmasi sebelum cetak dimulai.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Belum punya file 3D, apakah tetap bisa pesan?</summary>
                        <p>Bisa. Kami dapat membantu memodelkan dari sketsa atau referensi menjadi file 3D siap cetak. Sertakan ukuran yang jelas agar hasil sesuai kebutuhan.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Berapa lama proses pengerjaannya?</summary>
                        <p>Umumnya 1–3 hari kerja, tergantung ukuran, jumlah, dan antrian produksi. Estimasi pasti kami konfirmasikan saat penawaran.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Apakah bisa cetak satuan? Ada minimum order?</summary>
                        <p>Bisa cetak satuan. Minimum pemesanan saat ini 20 gram—cocok untuk prototipe maupun kebutuhan personal.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Bagaimana memilih material yang tepat?</summary>
                        <p>PLA untuk detail dan tampilan, PETG untuk part fungsional, ABS untuk ketahanan panas lebih tinggi. Masih ragu? Konsultasi gratis via WhatsApp.</p>
                    </details>
                    <details class="faq-item glass-card">
                        <summary>Format file apa saja yang diterima?</summary>
                        <p>STL, OBJ, STEP, STP, 3MF, dan format 3D umum lainnya. Kirim file Anda—kami cek kelayakan cetaknya sebelum produksi.</p>
                    </details>
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="cta-band">
            <div class="shell cta-inner glass-card" data-tilt>
                <div>
                    <h2>Wujudkan ide Anda, lapis demi lapis.</h2>
                    <p>Kirim file 3D Anda hari ini. Kami bantu rekomendasi material, estimasi biaya, dan jadwal produksi.</p>
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
                <p><strong>Astro3D — Partner Produksi Anda</strong></p>
                <p>Wujudkan ide menjadi produk nyata. Surabaya, Jawa Timur — melayani seluruh Indonesia.</p>
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
