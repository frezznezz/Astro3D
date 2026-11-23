const header = document.querySelector('[data-header]');
const nav = document.getElementById('site-nav');
const toggle = document.querySelector('[data-nav-toggle]');
const tiltCards = document.querySelectorAll('[data-tilt]');
const slides = [...document.querySelectorAll('.gallery-slide')];
const prevBtn = document.querySelector('[data-slider-prev]');
const nextBtn = document.querySelector('[data-slider-next]');

let slideIndex = Math.max(
    0,
    slides.findIndex((slide) => slide.classList.contains('is-active')),
);

const syncHeader = () => {
    header?.classList.toggle('is-scrolled', window.scrollY > 24);
};

const setSlide = (index) => {
    if (!slides.length) return;
    slideIndex = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => {
        slide.classList.toggle('is-active', i === slideIndex);
    });
};

toggle?.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', String(!open));
    nav?.classList.toggle('is-open', !open);
});

nav?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        toggle?.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
    });
});

prevBtn?.addEventListener('click', () => setSlide(slideIndex - 1));
nextBtn?.addEventListener('click', () => setSlide(slideIndex + 1));

tiltCards.forEach((card) => {
    card.addEventListener('pointermove', (event) => {
        const rect = card.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width) * 100;
        const y = ((event.clientY - rect.top) / rect.height) * 100;
        card.style.setProperty('--mx', `${x}%`);
        card.style.setProperty('--my', `${y}%`);
    });

    card.addEventListener('pointerleave', () => {
        card.style.setProperty('--mx', '50%');
        card.style.setProperty('--my', '50%');
    });
});

const heroVideo = document.querySelector('[data-hero-video]');
let scrollResumeTimer;

const onScroll = () => {
    syncHeader();

    if (!heroVideo) return;
    if (!heroVideo.paused) heroVideo.pause();
    clearTimeout(scrollResumeTimer);
    scrollResumeTimer = setTimeout(() => {
        if (window.scrollY < window.innerHeight * 0.85) {
            heroVideo.play().catch(() => {});
        }
    }, 180);
};

window.addEventListener('scroll', onScroll, { passive: true });
syncHeader();

const revealProtectedContact = (el) => {
    if (el.dataset.contactReady === '1') {
        return true;
    }

    try {
        const url = atob(el.dataset.protectContact || '');
        if (!url) {
            return false;
        }

        el.setAttribute('href', url);
        el.dataset.contactReady = '1';
        return true;
    } catch {
        return false;
    }
};

document.querySelectorAll('[data-protect-contact]').forEach((el) => {
    const unlock = () => revealProtectedContact(el);

    el.addEventListener('pointerdown', unlock, { passive: true });
    el.addEventListener('touchstart', unlock, { passive: true });
    el.addEventListener('focus', unlock);

    el.addEventListener('click', (event) => {
        if (!revealProtectedContact(el) || el.getAttribute('href') === '#') {
            event.preventDefault();
        }
    });
});

const reviewCarousel = document.querySelector('[data-review-carousel]');
const reviewSlides = [...document.querySelectorAll('.review-slide')];
const reviewPrev = document.querySelector('[data-review-prev]');
const reviewNext = document.querySelector('[data-review-next]');
let reviewPage = 0;
let reviewTimer;

const reviewPageSize = () => {
    if (window.matchMedia('(max-width: 640px)').matches) {
        return 1;
    }

    if (window.matchMedia('(max-width: 1100px)').matches) {
        return 2;
    }

    return 3;
};

const reviewPageCount = () => Math.max(1, Math.ceil(reviewSlides.length / reviewPageSize()));

const renderReviewPage = (page) => {
    if (!reviewSlides.length) {
        return;
    }

    const size = reviewPageSize();
    const total = reviewPageCount();
    reviewPage = ((page % total) + total) % total;
    const start = reviewPage * size;

    reviewSlides.forEach((slide, index) => {
        slide.classList.toggle('is-active', index >= start && index < start + size);
    });
};

const stopReviewAutoplay = () => {
    clearInterval(reviewTimer);
    reviewTimer = undefined;
};

const startReviewAutoplay = () => {
    if (!reviewSlides.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    stopReviewAutoplay();
    reviewTimer = setInterval(() => {
        renderReviewPage(reviewPage + 1);
    }, 4500);
};

reviewPrev?.addEventListener('click', () => {
    renderReviewPage(reviewPage - 1);
    startReviewAutoplay();
});

reviewNext?.addEventListener('click', () => {
    renderReviewPage(reviewPage + 1);
    startReviewAutoplay();
});

reviewCarousel?.addEventListener('pointerenter', stopReviewAutoplay);
reviewCarousel?.addEventListener('pointerleave', startReviewAutoplay);

window.addEventListener('resize', () => {
    renderReviewPage(reviewPage);
});

renderReviewPage(0);
startReviewAutoplay();
