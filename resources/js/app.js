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
