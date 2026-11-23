<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('site.meta.title') }}</title>
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta property="og:title" content="{{ __('site.meta.og_title') }}">
    <meta property="og:description" content="{{ __('site.meta.og_description') }}">
    <meta property="og:image" content="{{ asset('images/og.png') }}">
    <link rel="icon" href="{{ asset('images/astro3d-hitam.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/geist@1.3.1/dist/fonts/geist-sans/style.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="astro-body">
    @php
        $locale = app()->getLocale();
        $waConsult = 'https://wa.me/6282297065801?text=' . rawurlencode(__('site.wa.consult'));
        $waFile = 'https://wa.me/6282297065801?text=' . rawurlencode(__('site.wa.file'));
        $locales = [
            'id' => __('site.lang.id'),
            'en' => __('site.lang.en'),
            'zh' => __('site.lang.zh'),
        ];
    @endphp

    <header class="site-header" data-header>
        <div class="header-inner">
            <a href="{{ route('home') }}" class="brand" aria-label="{{ __('site.nav.home') }}">
                <img src="{{ asset('images/astro3d-hitam.png') }}" alt="Astro3D" class="brand-logo" width="140" height="90">
            </a>

            <div class="header-right">
                <nav class="lang-switch" aria-label="{{ __('site.lang.label') }}">
                    @foreach ($locales as $code => $label)
                        <a
                            href="{{ route('locale.switch', $code) }}"
                            class="lang-switch__link{{ $locale === $code ? ' is-active' : '' }}"
                            hreflang="{{ $code }}"
                            @if ($locale === $code) aria-current="true" @endif
                        >{{ $label }}</a>
                    @endforeach
                </nav>

                <nav class="site-nav" id="site-nav" aria-label="{{ __('site.nav.label') }}">
                    <a href="#material">{{ __('site.nav.batch') }}</a>
                    <a href="#hasil-cetak">{{ __('site.nav.gallery') }}</a>
                    <a class="nav-order" href="{{ $waConsult }}" target="_blank" rel="noreferrer">
                        {{ __('site.nav.order') }} <span aria-hidden="true">↗</span>
                    </a>
                </nav>
                <button class="nav-toggle" type="button" aria-label="{{ __('site.nav.open_menu') }}" aria-expanded="false" aria-controls="site-nav" data-nav-toggle>
                    <span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        {{-- Video hero - match astro3d.id overlay --}}
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
                        {{ __('site.hero.title') }}<br>
                        <em>{{ __('site.hero.title_em') }}</em>
                    </h1>
                    <p class="hero-lead">
                        {{ __('site.hero.lead') }}
                    </p>
                    <div class="hero-actions">
                        <a class="btn-hero" href="{{ $waFile }}" target="_blank" rel="noreferrer">
                            {{ __('site.hero.cta_file') }} <span aria-hidden="true">↗</span>
                        </a>
                        <a class="hero-secondary" href="#hasil-cetak">
                            {{ __('site.hero.cta_gallery') }} <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>
            </div>

            <a class="hero-scroll" href="#keunggulan" aria-label="{{ __('site.hero.scroll_label') }}">
                <span>{{ __('site.hero.scroll') }}</span>
                <i aria-hidden="true">↓</i>
            </a>
        </section>

        {{-- Glass advantage cards --}}
        <section class="section" id="keunggulan" aria-labelledby="adv-title">
            <div class="shell">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">{{ __('site.advantages.eyebrow') }}</p>
                        <h2 id="adv-title">
                            {{ __('site.advantages.title_before') }}<span class="text-gradient">{{ __('site.advantages.title_highlight') }}</span>
                        </h2>
                        <p class="section-lead">
                            {{ __('site.advantages.lead') }}
                        </p>
                    </div>
                </div>

                <div class="glass-grid">
                    @foreach (['refund', 'fast', 'material', 'batch'] as $key)
                        <article class="glass-card" data-tilt>
                            <div class="glass-orb" aria-hidden="true">
                                @if ($key === 'refund')
                                    <svg viewBox="0 0 24 24" focusable="false">
                                        <path d="M12 2.5 4.5 5.2v6.1c0 4.7 3.1 8.9 7.5 10.2 4.4-1.3 7.5-5.5 7.5-10.2V5.2L12 2.5zm-1.1 13.2-3.4-3.4 1.4-1.4 2 2 4.1-4.1 1.4 1.4-5.5 5.5z"/>
                                    </svg>
                                @elseif ($key === 'fast')
                                    <svg viewBox="0 0 24 24" focusable="false">
                                        <path d="M11.2 2.2 4.4 13.1h6.1l-1.1 8.7 8.4-12.6h-6.2l1.6-7z"/>
                                    </svg>
                                @elseif ($key === 'material')
                                    <svg viewBox="0 0 24 24" focusable="false">
                                        <path d="M12 2.2 2.8 7.2v9.6L12 21.8l9.2-5V7.2L12 2.2zm0 2.3 6.4 3.5L12 11.5 5.6 8 12 4.5zM4.6 9.7l6.4 3.5v6.7l-6.4-3.5V9.7zm14.8 0v6.7l-6.4 3.5v-6.7l6.4-3.5z"/>
                                    </svg>
                                @else
                                    <svg viewBox="0 0 24 24" focusable="false">
                                        <path d="M4 5.5h16v3.2H4V5.5zm0 4.8h16v3.2H4V10.3zm0 4.8h16V18.3H4v-3.2z"/>
                                    </svg>
                                @endif
                            </div>
                            <h3>{{ __('site.advantages.items.'.$key.'.title') }}</h3>
                            <p>{{ __('site.advantages.items.'.$key.'.body') }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Materials --}}
        <section class="section" id="material" aria-labelledby="material-title">
            <div class="shell">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">{{ __('site.materials.eyebrow') }}</p>
                        <h2 id="material-title">
                            {{ __('site.materials.title_before') }}<span class="text-gradient">{{ __('site.materials.title_highlight') }}</span>
                        </h2>
                        <p class="section-lead">
                            {{ __('site.materials.lead') }}
                        </p>
                    </div>
                    <a class="btn-glow" href="{{ $waConsult }}" target="_blank" rel="noreferrer">{{ __('site.materials.cta') }}</a>
                </div>

                <div class="material-guide">
                    @foreach ([
                        'pla' => ['file' => 'PLA.jpg', 'name' => 'PLA'],
                        'petg' => ['file' => 'PETG.jpg', 'name' => 'PETG'],
                        'abs' => ['file' => 'ABS.jpg', 'name' => 'ABS'],
                    ] as $key => $meta)
                        <article class="material-card glass-card" data-tilt>
                            <div class="material-card-media">
                                <img src="{{ asset('images/Material/'.$meta['file']) }}" alt="{{ __('site.materials.'.$key.'.alt') }}" width="600" height="800" loading="lazy">
                            </div>
                            <div class="material-card-body">
                                <p class="material-tag">{{ __('site.materials.'.$key.'.tag') }}</p>
                                <h3>{{ $meta['name'] }}</h3>
                                <p class="material-desc">
                                    {{ __('site.materials.'.$key.'.desc') }}
                                </p>
                                <ul class="material-pros">
                                    @foreach (__('site.materials.'.$key.'.pros') as $pro)
                                        <li>{{ $pro }}</li>
                                    @endforeach
                                </ul>
                                <p class="material-note"><strong>{{ __('site.materials.'.$key.'.note_label') }}</strong> {{ __('site.materials.'.$key.'.note') }}</p>
                                <p class="material-use"><strong>{{ __('site.materials.'.$key.'.use_label') }}</strong> {{ __('site.materials.'.$key.'.use') }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="material-tips glass-card">
                    <h3>{{ __('site.materials.tips_title') }}</h3>
                    <ol>
                        @foreach (__('site.materials.tips') as $tip)
                            <li><strong>{{ $tip['label'] }}</strong> {{ $tip['text'] }}</li>
                        @endforeach
                    </ol>
                    <p>{{ __('site.materials.tips_footer') }}</p>
                </div>
            </div>
        </section>

        {{-- Gallery slider --}}
        <section class="section" id="hasil-cetak" aria-labelledby="gallery-title">
            <div class="shell">
                <div class="section-head gallery-head">
                    <div class="gallery-copy">
                        <p class="eyebrow">{{ __('site.gallery.eyebrow') }}</p>
                        <h2 id="gallery-title">
                            {{ __('site.gallery.title_before') }}<span class="text-gradient">{{ __('site.gallery.title_highlight') }}</span>
                        </h2>
                        <p class="section-lead">{{ __('site.gallery.lead') }}</p>
                    </div>

                    <div class="slider-nav">
                        <button type="button" class="slider-btn" data-slider-prev aria-label="{{ __('site.gallery.prev') }}">
                            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false">
                                <path d="M15 6 9 12l6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button type="button" class="slider-btn" data-slider-next aria-label="{{ __('site.gallery.next') }}">
                            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false">
                                <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="gallery-slider" data-slider>
                    @foreach ([
                        ['src' => '1.jpg', 'i' => 0],
                        ['src' => '2.jpg', 'i' => 1],
                        ['src' => '3.jpeg', 'i' => 2],
                    ] as $slide)
                        <figure class="gallery-slide{{ $slide['i'] === 0 ? ' is-active' : '' }} glass-card" data-tilt>
                            <img src="{{ asset('images/Galeri/'.$slide['src']) }}" alt="{{ __('site.gallery.slides.'.$slide['i']) }}" loading="lazy">
                            <figcaption>{{ __('site.gallery.slides.'.$slide['i']) }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section class="section" id="alur" aria-labelledby="alur-title">
            <div class="shell">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">{{ __('site.process.eyebrow') }}</p>
                        <h2 id="alur-title">
                            {{ __('site.process.title_before') }}<span class="text-gradient">{{ __('site.process.title_highlight') }}</span>
                        </h2>
                        <p class="section-lead">{{ __('site.process.lead') }}</p>
                    </div>
                </div>
                <ol class="process-grid">
                    @foreach (__('site.process.steps') as $index => $step)
                        <li class="glass-card" data-tilt>
                            <span class="step-num">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        {{-- Reviews --}}
        <section class="section" id="ulasan" aria-labelledby="reviews-title">
            <div class="shell">
                <div class="section-head section-head-row">
                    <div>
                        <p class="eyebrow">{{ __('site.reviews.eyebrow') }}</p>
                        <h2 id="reviews-title">
                            {{ __('site.reviews.title_before') }}<span class="text-gradient">{{ __('site.reviews.title_highlight') }}</span>
                        </h2>
                        <p class="section-lead">{{ __('site.reviews.lead') }}</p>
                    </div>
                    <a class="btn-ghost" href="https://shopee.co.id/astro_3d" target="_blank" rel="noopener noreferrer">{{ __('site.reviews.shopee') }}</a>
                </div>
                <div class="review-grid">
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="{{ __('site.reviews.rating') }}">★★★★★</p>
                        <p>Pemesanan kali kedua, dan pasti akan langganan disini hasil mantap, proses cepat, harga termurah</p>
                        <footer>f***f</footer>
                    </blockquote>
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="{{ __('site.reviews.rating') }}">★★★★★</p>
                        <p>Kualitas barang baru, Harga yang ditawarkan bersaing, pemrosesan penjualan sampai packing sangat cepat, packing aman dan rapi. Profesional dan Recommended Seller !</p>
                        <footer>s***e</footer>
                    </blockquote>
                    <blockquote class="glass-card" data-tilt>
                        <p class="stars" aria-label="{{ __('site.reviews.rating') }}">★★★★★</p>
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
                        <p class="eyebrow">{{ __('site.faq.eyebrow') }}</p>
                        <h2 id="faq-title">{{ __('site.faq.title') }}</h2>
                    </div>
                </div>
                <div class="faq-list">
                    @foreach (__('site.faq.items') as $index => $item)
                        <details class="faq-item glass-card" @if ($index === 0) open @endif>
                            <summary>{{ $item['q'] }}</summary>
                            <p>{{ $item['a'] }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="cta-band">
            <div class="shell cta-inner glass-card" data-tilt>
                <div>
                    <h2>{{ __('site.cta.title') }}</h2>
                    <p>{{ __('site.cta.body') }}</p>
                </div>
                <a class="btn-glow btn-glow-lg" href="{{ $waFile }}" target="_blank" rel="noreferrer">
                    {{ __('site.cta.button') }} <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="shell footer-grid">
            <div class="footer-brand">
                <img src="{{ asset('images/astro3d-hitam.png') }}" alt="Astro3D" class="footer-logo" width="120" height="77">
                <p><strong>{{ __('site.footer.tagline') }}</strong></p>
                <p>{{ __('site.footer.about') }}</p>
            </div>
            <div class="footer-links">
                <a href="#material">{{ __('site.footer.material') }}</a>
                <a href="#hasil-cetak">{{ __('site.footer.gallery') }}</a>
                <a href="#alur">{{ __('site.footer.process') }}</a>
                <a href="#faq">{{ __('site.footer.faq') }}</a>
            </div>
            <div class="footer-contact">
                <a href="{{ $waFile }}" target="_blank" rel="noreferrer">WhatsApp: +62 822-9706-5801</a>
                <a href="mailto:astro3d.id@gmail.com">astro3d.id@gmail.com</a>
                <a href="https://shopee.co.id/astro_3d" target="_blank" rel="noopener noreferrer">{{ __('site.footer.shopee') }}</a>
            </div>
        </div>
        <div class="shell footer-bottom">
            <p>© {{ date('Y') }} Astro3D</p>
        </div>
    </footer>
</body>
</html>
