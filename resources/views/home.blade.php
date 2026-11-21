<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astro3D — Jasa 3D Print Satuan hingga Produksi Batch</title>
    <meta name="description" content="Jasa 3D printing satuan atau produksi jumlah banyak. Kirim file 3D Anda ke Astro3D untuk konsultasi material dan penawaran harga.">
    <meta property="og:title" content="Astro3D — Wujudkan Ide Anda, Lapis Demi Lapis.">
    <meta property="og:description" content="Jasa 3D printing satuan hingga produksi batch untuk personal, bisnis, dan brand.">
    <meta property="og:image" content="{{ asset('images/og.png') }}">
    <link rel="icon" href="{{ asset('images/astro3d-hitam.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/geist@1.3.1/dist/fonts/geist-sans/style.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="astro-body">
    <header class="site-header">
        <a href="{{ url('/') }}" class="brand" aria-label="Astro3D home">
            <img src="{{ asset('images/astro3d-hitam.png') }}" alt="Astro3D" class="brand-logo" width="160" height="103">
        </a>
        <a
            class="header-cta"
            href="https://wa.me/6282297065801?text=Halo%20Astro3D%2C%20saya%20ingin%20konsultasi."
            target="_blank"
            rel="noreferrer"
        >
            Mulai Cetak <span aria-hidden="true">↗</span>
        </a>
    </header>

    <main>
        <section class="home-hero" aria-labelledby="hero-brand">
            <div class="home-hero-media" aria-hidden="true">
                <video autoplay loop muted playsinline preload="metadata" poster="{{ asset('images/Material/PETG.jpg') }}">
                    <source src="{{ asset('videos/ProsesCetak.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="home-hero-veil" aria-hidden="true"></div>

            <div class="home-hero-inner">
                <img
                    src="{{ asset('images/astro3d-hitam.png') }}"
                    alt="Astro3D"
                    class="hero-brand-logo"
                    id="hero-brand"
                    width="320"
                    height="205"
                >

                <h1 class="hero-title">
                    Jasa 3D Print
                    <em>Satuan hingga Produksi Batch</em>
                </h1>

                <p class="hero-lead">
                    Kirim file 3D Anda untuk konsultasi material dan penawaran harga.
                </p>

                <div class="hero-actions">
                    <a
                        class="btn-primary"
                        href="https://wa.me/6282297065801?text=Halo%20Astro3D%2C%20saya%20akan%20mengirim%20file%203D."
                        target="_blank"
                        rel="noreferrer"
                    >
                        Kirim File via WhatsApp <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p><strong>Astro3D</strong> — Partner Produksimu · Surabaya, Jawa Timur</p>
        <p class="footer-meta">© {{ date('Y') }} Astro3D</p>
    </footer>
</body>
</html>
