<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @if (!isset($allowIndex))
        <meta name="robots" content="noindex, nofollow">
    @endif
    <meta name="title" content="{{ $metaTitle ?? 'Default Site Title' }}">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    @stack('meta')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

    <style>
        /* ===== GLOBAL & UTILITIES ===== */
        input, textarea {
            margin-top: 10px;
        }
        .service-tab {
            border: 1px solid #848484 !important;
        }
        .hero-checklist-center {
            list-style: none;
            padding: 0;
            margin: 0 auto;
            max-width: 561px;
            color: white;
        }
        .hero-checklist-center li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 10px;
        }
        .hero-checklist-center i {
            color: orange;
            font-size: 18px;
            margin-top: 4px;
        }

        /* ===== HERO SECTION ===== */
        .wolf-hero {
            position: relative;
            min-height: 560px;
            display: flex;
            align-items: center;
            justify-content: start;
            text-align: center;
            padding: 160px 20px 110px;
            overflow: hidden;
        }
        .wolf-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("{{ asset('img/hero-scetion.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transform: scale(1.02);
            z-index: 0;
        }
        .wolf-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(15, 66, 74, 0.98) 0%, rgba(15, 66, 74, 0.95) 40%, rgba(15, 66, 74, 0.75) 46%, rgba(15, 66, 74, 0.35) 80%, rgba(15, 66, 74, 0.05) 90%) !important;
            z-index: 1;
        }
        .wolf-hero__inner {
            text-align: start;
            position: relative;
            z-index: 2;
        }
        .wolf-hero h1 {
            margin: 0 0 14px;
            text-align: center;
            font-size: clamp(30px, 3.5vw, 54px);
            line-height: 1.1;
            font-weight: 800;
            color: #fff;
            letter-spacing: -.02em;
        }
        .wolf-hero h1 em {
            font-style: italic;
            font-weight: 800;
        }
        .wolf-hero__sub {
            margin: 0;
            font-size: 16px;
            color: rgba(255,255,255,.92);
        }
        .service-kicker {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.25);
            font-weight: 800;
            color: #fff;
            margin-bottom: 14px;
        }
        .wolf-hero__actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        .hero-trust {
            justify-content: center;
            align-items: center;
            gap: 40px;
            display: flex;
        }
        .hero-trust .stars {
            color: #ffc107;
            margin: 4px 0;
        }
        .rating strong, .rating {
            color: white;
        }
        .badges {
            color: white;
            white-space: nowrap;
        }
        .wolf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 14px;
            transition: .2s ease;
        }
        .wolf-btn--red {
            background: var(--accent, #f90);
            color: #1a1a1a;
        }
        .wolf-btn--red:hover {
            transform: translateY(-2px);
        }
        .wolf-hero__logo {
            margin: 36px 0;
            justify-content: center;
        }
        .wolf-hero__logo img {
            width: 170px;
            max-width: 60vw;
            transform: rotate(-6deg);
        }

        /* mobile hero */
        @media (max-width: 768px) {
            .wolf-hero {
                text-align: left;
                align-items: flex-start;
                padding: 110px 20px 70px;
                min-height: 520px;
            }
            .wolf-hero::after {
                background: linear-gradient(90deg, rgba(16,66,75,0.98) 0%, rgba(16,66,75,0.92) 35%, rgba(16,66,75,0.65) 55%, rgba(16,66,75,0.25) 75%, rgba(16,66,75,0) 100%) !important;
            }
            .wolf-hero::before {
                background-position: right center;
            }
            .wolf-hero__inner {
                max-width: 420px;
                margin-top: 20px;
            }
            .wolf-hero h1 {
                font-size: 28px;
                line-height: 1.15;
                margin-bottom: 10px;
            }
            .wolf-hero h1 em {
                display: block;
                font-style: normal;
                font-weight: 700;
                color: var(--accent);
                margin-top: 6px;
            }
            .wolf-hero__sub {
                font-size: 14px;
                margin-bottom: 22px;
                color: rgba(255,255,255,.88);
            }
            .wolf-hero__actions {
                justify-content: flex-start;
                gap: 10px;
            }
            .wolf-btn {
                padding: 14px;
                font-size: 13px;
                border-radius: 6px;
            }
            .wolf-hero__logo {
                margin: 22px 0;
                justify-content: start;
            }
            .wolf-hero__logo img {
                width: 120px;
                transform: none;
            }
        }

        /* ===== PROMO BANNER ===== */
        .promo-banner {
            margin: 86px auto 18px;
        }
        .promo-banner__inner {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            min-height: 120px;
            background: radial-gradient(900px 320px at 10% 10%, rgba(251, 154, 27, .22), transparent 60%), radial-gradient(800px 260px at 90% 20%, rgba(24, 64, 72, .16), transparent 60%), #fff;
            border: 1px solid rgba(0,0,0,.06);
        }
        .promo-banner__inner::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,.98) 38%, rgba(255,255,255,.80) 55%, rgba(255,255,255,.00) 75%);
            z-index: 1;
        }
        .promo-banner__content {
            position: relative;
            z-index: 2;
            padding: 22px 26px;
            max-width: 430px;
        }
        .promo-banner__title {
            margin: 0 0 6px;
            font-size: 22px;
            line-height: 1.1;
            color: #143D42;
            font-weight: 800;
        }
        .promo-banner__price {
            margin: 0 0 12px;
            font-size: 34px;
            line-height: 1;
            color: #143D42;
            font-weight: 900;
        }
        .promo-banner__btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background: #143D42;
            color: #fff;
            font-weight: 900;
            border-radius: 6px;
            text-decoration: none;
            box-shadow: 0 10px 24px rgba(224,0,0,.18);
            transition: .18s ease;
            letter-spacing: .02em;
        }
        .promo-banner__btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 14px 30px rgba(224,0,0,.22);
        }
        .promo-banner__btn-ico {
            font-size: 14px;
            line-height: 1;
        }
        @media (max-width: 720px) {
            .promo-banner__inner {
                min-height: 150px;
            }
            .promo-banner__inner::before {
                background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,.94) 55%, rgba(255,255,255,.25) 100%);
            }
            .promo-banner__content {
                max-width: 100%;
                padding: 18px 18px;
            }
            .promo-banner__price {
                font-size: 30px;
            }
        }

        /* ===== BRAND GRID ===== */
        .brand-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
            margin-top: 30px;
        }
        .brand-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px;
            background: #fff;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            transition: 0.25s;
        }
        .brand-card img {
            max-width: 140px;
            height: auto;
            margin-bottom: 10px;
        }
        .brand-card span {
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }
        .brand-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }
        @media (max-width: 900px) {
            .brand-grid {
                grid-template-columns: repeat(2,1fr);
            }
        }
        @media (max-width: 500px) {
            .brand-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ===== BADGES ===== */
        .m-hero-badges {
            position: absolute !important;
            left: 12px;
            right: 12px;
            bottom: -84px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            z-index: 3;
            max-width: 360px;
            padding: 10px;
            pointer-events: none;
        }
        .hero-badge {
            min-width: 180px !important;
        }
    </style>
</head>
<body>

<!-- Hidden SVG sprite -->
<div style="display:none">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="i-phone" viewBox="0 0 24 24"><path d="M6.6 10.8c1.7 3.4 3.2 4.9 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6.6 0 1 .4 1 1V21c0 .6-.4 1-1 1C10.7 22 2 13.3 2 2c0-.6.4-1 1-1h3.8c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1L6.6 10.8z"/></symbol>
        <symbol id="i-mail" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5L4 8V6l8 5 8-5v2z"/></symbol>
        <symbol id="i-whatsapp" viewBox="0 0 24 24"><path d="M20.5 3.5A11 11 0 0 0 3.6 20.1L2 22l2.1-.6A11 11 0 0 0 20.5 3.5zm-8.4 18A9 9 0 0 1 5.4 19l-.3-.2-1.2.3.3-1.1-.2-.3A9 9 0 1 1 12.1 21.5zm5.2-6.6c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1-.2.2-.4.2-.7.1a7.4 7.4 0 0 1-2.2-1.4 8.4 8.4 0 0 1-1.6-2c-.2-.3 0-.5.1-.6l.5-.6c.2-.2.2-.4.3-.6.1-.2 0-.4 0-.6 0-.1-.7-1.6-1-2.2-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.7s1.1 3.1 1.2 3.3c.1.2 2.2 3.4 5.4 4.8.8.3 1.4.5 1.9.6.8.2 1.5.2 2 .1.6-.1 1.7-.7 1.9-1.4.2-.7.2-1.3.1-1.4-.1-.1-.3-.2-.6-.3z"/></symbol>
        <symbol id="i-check" viewBox="0 0 24 24"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></symbol>
        <symbol id="i-tools" viewBox="0 0 24 24"><path d="M21.7 18.3 13 9.6a5 5 0 0 1-6.5-6.5l3 3 2-2-3-3A5 5 0 0 1 13.4 7L22 15.7l-3.3 2.6zM2 22l6.6-6.6 1.4 1.4L3.4 23H2v-1z"/></symbol>
        <symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5l-8-3zm0 18c-3.1-1.1-6-4.6-6-9V6.3L12 4l6 2.3V11c0 4.4-2.9 7.9-6 9z"/></symbol>
        <symbol id="i-menu" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"/></symbol>
    </svg>
</div>

@include('layout.header')

@yield('main')

@include('layout.footer')

<!-- Mobile sticky bar -->
<div class="mobilebar" role="navigation" aria-label="Schnellaktionen">
    <div class="inner">
        <a class="m-iconbtn" href="tel:+4314420617" aria-label="Anrufen"><svg><use href="#i-phone"/></svg></a>
        <a class="m-iconbtn" href="mailto:office@heizdienst.at" aria-label="E-Mail"><svg><use href="#i-mail"/></svg></a>
        <a class="m-iconbtn" href="https://wa.me/436677711881" aria-label="WhatsApp"><i class="ri-whatsapp-fill" style="color:white;font-size:28px;"></i></a>
        <a class="m-callbtn" href="tel:+4314420617"><svg><use href="#i-phone"/></svg>+4314420617</a>
    </div>
</div>

<!-- Combined JavaScript -->
<script>
    (function() {
        // ===== MOBILE MENU =====
        window.toggleMobileMenu = function() {
            const panel = document.getElementById('mobileMenuPanel');
            if (panel) panel.style.display = (panel.style.display === 'none' || panel.style.display === '') ? 'block' : 'none';
        };
        window.closeMobileMenu = function() {
            const panel = document.getElementById('mobileMenuPanel');
            if (panel) panel.style.display = 'none';
            const brands = document.getElementById('brandsMobilePanel');
            if (brands) brands.style.display = 'none';
        };
        window.toggleDesktopMenu = function() {
            const panel = document.getElementById('menuPanel');
            if (panel) panel.style.display = (panel.style.display === 'none' || panel.style.display === '') ? 'block' : 'none';
        };
        window.toggleBrandsMobile = function() {
            const panel = document.getElementById('brandsMobilePanel');
            if (panel) panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
        };
        window.fakeSubmit = function(e) {
            e.preventDefault();
            alert('Vielen Dank für Ihre Anfrage! Wir werden uns in Kürze bei Ihnen melden.');
            return false;
        };

        // ===== CLOSE MENUS WHEN CLICKING OUTSIDE =====
        document.addEventListener('click', function(e) {
            const mobilePanel = document.getElementById('mobileMenuPanel');
            const mobileHeader = document.querySelector('.mobile-fixed-header');
            if (mobilePanel && mobileHeader && mobilePanel.style.display === 'block' && !mobileHeader.contains(e.target)) {
                mobilePanel.style.display = 'none';
            }
            const desktopPanel = document.getElementById('menuPanel');
            const desktopHeader = document.querySelector('.fixed-header');
            if (desktopPanel && desktopHeader && desktopPanel.style.display === 'block' && !desktopHeader.contains(e.target)) {
                desktopPanel.style.display = 'none';
            }
        });

        // ===== BRAND SLIDER (AUTO) =====
        function initBrandSlider() {
            const track = document.querySelector('.brand-slider-track');
            if (!track) return;
            const items = track.querySelectorAll('img');
            const prev = document.querySelector('.brand-slider-prev');
            const next = document.querySelector('.brand-slider-next');
            const viewport = document.querySelector('.brand-slider-viewport');
            if (!prev || !next || !viewport || items.length === 0) return;

            let index = 0;
            let autoSlideInterval;

            function getItemWidth() {
                const style = getComputedStyle(track);
                const gap = parseInt(style.gap || 40);
                return items[0].offsetWidth + gap;
            }
            function getVisibleItems() {
                return Math.floor(viewport.offsetWidth / getItemWidth());
            }
            function update() {
                track.style.transform = `translateX(-${index * getItemWidth()}px)`;
            }
            function slideNext() {
                const maxIndex = items.length - getVisibleItems();
                index = (index >= maxIndex) ? 0 : index + 1;
                update();
            }
            function slidePrev() {
                const maxIndex = items.length - getVisibleItems();
                index = (index <= 0) ? maxIndex : index - 1;
                update();
            }
            function startAutoSlide() {
                autoSlideInterval = setInterval(slideNext, 3000);
            }
            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            next.addEventListener('click', () => { slideNext(); resetAutoSlide(); });
            prev.addEventListener('click', () => { slidePrev(); resetAutoSlide(); });
            viewport.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
            viewport.addEventListener('mouseleave', startAutoSlide);
            window.addEventListener('resize', update);
            update();
            startAutoSlide();
        }

        // ===== TOC COLLAPSE & SMOOTH SCROLL =====
        function initToc() {
            const card = document.getElementById('tocCard');
            const toggle = document.getElementById('tocToggle');
            const head = document.getElementById('tocHead');
            if (card && toggle && head) {
                const svg = toggle.querySelector('svg');
                function setExpanded(exp) {
                    head.setAttribute('aria-expanded', exp ? 'true' : 'false');
                    toggle.setAttribute('aria-expanded', exp ? 'true' : 'false');
                    card.classList.toggle('is-collapsed', !exp);
                    if (svg) svg.style.transform = exp ? 'rotate(180deg)' : 'rotate(0deg)';
                }
                setExpanded(false);
                head.addEventListener('click', () => setExpanded(card.classList.contains('is-collapsed')));
                head.addEventListener('keydown', (e) => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); setExpanded(card.classList.contains('is-collapsed')); } });
            }

            // Update TOC labels with section H2 text
            document.querySelectorAll('#tocList a[href^="#"]').forEach(link => {
                const target = document.querySelector(link.getAttribute('href'));
                if (!target) return;
                const h2 = target.querySelector('h2');
                if (!h2) return;
                const textEl = link.querySelector('.toc-text');
                if (textEl) textEl.textContent = h2.textContent.trim().replace(/\s+/g, ' ');
            });

            // Smooth scroll for same-page anchors
            document.addEventListener('click', e => {
                const a = e.target.closest('a');
                if (!a) return;
                const href = a.getAttribute('href') || '';
                if (!href.startsWith('#')) return;
                const target = document.querySelector(href);
                if (!target) return;
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                history.pushState(null, '', href);
            });
        }

        // Run initializers after DOM ready
        document.addEventListener('DOMContentLoaded', function() {
            initBrandSlider();
            initToc();
        });
    })();
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
