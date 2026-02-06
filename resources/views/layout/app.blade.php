<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thermendienst – Thermenwartung Wien & NÖ</title>
<meta name="title" content="{{ $metaTitle ?? 'Default Site Title' }}">

<meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">

    <!-- Font close to Elementor kit used (Raleway) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/services.css') }}">


   

</head>

<body>
    <style>
        input, textarea
 {
    margin-top: 10px
 }
 .service-tab {
        border: 1px solid #848484 !important;
 }
    </style>
    <style>
        .wolf-hero {
            position: relative;
            min-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            padding: 180px 16px 120px;
            background: #111;
        }

        /* background image */
        .wolf-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("img/hero-scetion.jpeg");
            background-size: cover;
            background-position: left center;
            /* ✅ keep image left exactly */
            transform: scale(1.02);
            z-index: 0;
        }

        /* dark overlay like screenshot (NOT left-gradient) */
        .wolf-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            /* ✅ even dark overlay */
            z-index: 1;
        }

        /* content wrapper */
        .wolf-hero__inner {
            position: relative;
            z-index: 2;
            max-width: 1132px !important;
            margin-top: 40px;
        }

        /* H1 */
        .wolf-hero h1 {
            margin: 0 0 10px;
            font-size: clamp(32px, 3.5vw, 54px);
            line-height: 1.08;
            font-weight: 800;
            color: #fff;
            letter-spacing: -.02em;
        }

        .wolf-hero h1 em {
            font-style: italic;
            font-weight: 800;
        }

        /* subtitle */
        .wolf-hero__sub {
            margin: 0 auto 48px;
            max-width: 780px;
            font-size: 16px;
            color: rgba(255, 255, 255, .9);
        }

        /* buttons row */
        .wolf-hero__actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .wolf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--orange-600);
            color: white;
            padding: 15px 28px;
            border-radius: 6px;
            /* ✅ like screenshot */
            font-weight: 700;
            font-size: 14px;
            border: 1px solid transparent;
            transition: .15s ease;
        }

        .wolf-btn--red {
            background: var(--orange-600);
            /* ✅ Wolf red */
            color: #fff;
        }

        .wolf-btn--red:hover {
            transform: translateY(-1px);
        }

        /* logo under buttons */
        .wolf-hero__logo {
            margin: 45px 0;
            display: flex;
            justify-content: center;
        }

        .wolf-hero__logo img {
            width: 170px;
            max-width: 60vw;
            transform: rotate(-6deg);
        }

        /* ✅ diagonal grey bottom shape */
        .wolf-hero .wolf-hero__inner::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -120px;
            width: 303vw;
            height: 3100px;
            background: linear-gradient(90deg, rgba(10, 66, 75, 0.92));
            clip-path: polygon(0 40%, 100% 0, 100% 100%, 0 100%);
            z-index: -1;
            opacity: .9;
        }

        /* mobile */
        @media (max-width: 700px) {
            .wolf-hero {
                padding: 100px 14px 86px;
                min-height: 480px;
            }

            .wolf-hero__sub {
                font-size: 14px
            }
        }
        .wolf-hero__kicker{
            color: white;
        }
        .wolf-hero__bullets{
            color: white;
        }
    </style>
    <style>
        /* Promo banner (like screenshot) */
.promo-banner{
  /* width: min(1120px, 92%); */
  margin: 86px auto 18px;
  
}

.promo-banner__inner{
  position: relative;
  overflow: hidden;
  border-radius: 14px;
  min-height: 120px;
background: radial-gradient(900px 320px at 10% 10%, rgba(251, 154, 27, .22), transparent 60%), radial-gradient(800px 260px at 90% 20%, rgba(24, 64, 72, .16), transparent 60%), #fff;  border: 1px solid rgba(0,0,0,.06);
}

/* Right side image */


/* White fade from left -> right (like screenshot) */
.promo-banner__inner::before{
  content:"";
  position:absolute;
  inset:0;
  background: linear-gradient(90deg,
    rgba(255,255,255,1) 0%,
    rgba(255,255,255,.98) 38%,
    rgba(255,255,255,.80) 55%,
    rgba(255,255,255,.00) 75%
  );
  z-index:1;
}

.promo-banner__content{
  position: relative;
  z-index:2;
  padding: 22px 26px;
  max-width: 430px;
}

.promo-banner__title{
  margin:0 0 6px;
  font-size: 22px;
  line-height: 1.1;
  color:#143D42; /* red */
  font-weight: 800;
}

.promo-banner__price{
  margin:0 0 12px;
  font-size: 34px;
  line-height: 1;
  color:#143D42;
  font-weight: 900;
}

/* Button */
.promo-banner__btn{
  display:inline-flex;
  align-items:center;
  gap:8px;
  padding: 10px 16px;
  background:#143D42;
  color:#fff;
  font-weight: 900;
  border-radius: 6px;
  text-decoration:none;
  box-shadow: 0 10px 24px rgba(224,0,0,.18);
  transition: .18s ease;
  letter-spacing:.02em;
}

.promo-banner__btn:hover{
  transform: translateY(-1px);
  box-shadow: 0 14px 30px rgba(224,0,0,.22);
}

.promo-banner__btn-ico{
  font-size: 14px;
  line-height: 1;
}

/* Mobile */
@media (max-width: 720px){
  .promo-banner__inner{
    min-height: 150px;
  }
  .promo-banner__inner::before{
    background: linear-gradient(180deg,
      rgba(255,255,255,1) 0%,
      rgba(255,255,255,.94) 55%,
      rgba(255,255,255,.25) 100%
    );
  }
  .promo-banner__content{
    max-width: 100%;
    padding: 18px 18px;
  }
  .promo-banner__price{
    font-size: 30px;
  }
}

    </style>
    <!-- SVG icons -->
    <div aria-hidden="true"><?php /* keep HTML valid in WP; harmless elsewhere */ ?></div>
    <div style="display:none">
        <!-- inline sprite (also available in assets/icons.svg) -->
        <!-- (duplicated for single-file use) -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol id="i-phone" viewBox="0 0 24 24">
                <path
                    d="M6.6 10.8c1.7 3.4 3.2 4.9 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6.6 0 1 .4 1 1V21c0 .6-.4 1-1 1C10.7 22 2 13.3 2 2c0-.6.4-1 1-1h3.8c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1L6.6 10.8z" />
            </symbol>
            <symbol id="i-mail" viewBox="0 0 24 24">
                <path
                    d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5L4 8V6l8 5 8-5v2z" />
            </symbol>
            <symbol id="i-whatsapp" viewBox="0 0 24 24">
                <path
                    d="M20.5 3.5A11 11 0 0 0 3.6 20.1L2 22l2.1-.6A11 11 0 0 0 20.5 3.5zm-8.4 18A9 9 0 0 1 5.4 19l-.3-.2-1.2.3.3-1.1-.2-.3A9 9 0 1 1 12.1 21.5zm5.2-6.6c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1-.2.2-.4.2-.7.1a7.4 7.4 0 0 1-2.2-1.4 8.4 8.4 0 0 1-1.6-2c-.2-.3 0-.5.1-.6l.5-.6c.2-.2.2-.4.3-.6.1-.2 0-.4 0-.6 0-.1-.7-1.6-1-2.2-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.7s1.1 3.1 1.2 3.3c.1.2 2.2 3.4 5.4 4.8.8.3 1.4.5 1.9.6.8.2 1.5.2 2 .1.6-.1 1.7-.7 1.9-1.4.2-.7.2-1.3.1-1.4-.1-.1-.3-.2-.6-.3z" />
            </symbol>
            <symbol id="i-check" viewBox="0 0 24 24">
                <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
            </symbol>
            <symbol id="i-tools" viewBox="0 0 24 24">
                <path
                    d="M21.7 18.3 13 9.6a5 5 0 0 1-6.5-6.5l3 3 2-2-3-3A5 5 0 0 1 13.4 7L22 15.7l-3.3 2.6zM2 22l6.6-6.6 1.4 1.4L3.4 23H2v-1z" />
            </symbol>
            <symbol id="i-shield" viewBox="0 0 24 24">
                <path
                    d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5l-8-3zm0 18c-3.1-1.1-6-4.6-6-9V6.3L12 4l6 2.3V11c0 4.4-2.9 7.9-6 9z" />
            </symbol>
            <symbol id="i-menu" viewBox="0 0 24 24">
                <path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z" />
            </symbol>
        </svg>
    </div>

  @include('layout.header')
    <!-- MOBILE HERO -->
    <!-- MOBILE HERO -->
   

  
    <!-- MAIN CONTENT -->
    @yield('main')


@include('layout.footer')


    <!-- MOBILE STICKY BAR -->
    <div class="mobilebar" role="navigation" aria-label="Schnellaktionen">
        <div class="inner">
            <a class="m-iconbtn" href="tel:+4319284374" aria-label="Anrufen"><svg>
                    <use href="#i-phone"></use>
                </svg></a>
            <a class="m-iconbtn" href="mailto:office@thermendienst.at" aria-label="E-Mail"><svg>
                    <use href="#i-mail"></use>
                </svg></a>
            <a class="m-iconbtn" href="https://wa.me/436677711881" aria-label="WhatsApp">
                <i class="ri-whatsapp-fill" style="color: white;font-size:28px"></i>
            </a>
            <a class="m-callbtn" href="tel:+4319284374"><svg>
                    <use href="#i-phone"></use>
                </svg>+43 0 000000</a>
        </div>
    </div>

    <script>
        // Mobile menu functions
        function toggleMobileMenu() {
            const panel = document.getElementById('mobileMenuPanel');
            const isHidden = panel.style.display === 'none' || panel.style.display === '';
            panel.style.display = isHidden ? 'block' : 'none';
        }

        function closeMobileMenu() {
            const panel = document.getElementById('mobileMenuPanel');
            if (panel) panel.style.display = 'none';

            const brands = document.getElementById('brandsMobilePanel');
            if (brands) brands.style.display = 'none';
        }

        // Desktop menu functions for tablets
        function toggleDesktopMenu() {
            const panel = document.getElementById('menuPanel');
            const isHidden = panel.style.display === 'none' || panel.style.display === '';
            panel.style.display = isHidden ? 'block' : 'none';
        }

        // Close mobile/desktop menu when clicking outside
        document.addEventListener('click', function(e) {
            const mobilePanel = document.getElementById('mobileMenuPanel');
            const mobileHeader = document.querySelector('.mobile-fixed-header');

            if (mobilePanel && mobileHeader && mobilePanel.style.display === 'block') {
                if (!mobileHeader.contains(e.target)) {
                    mobilePanel.style.display = 'none';
                }
            }

            const desktopPanel = document.getElementById('menuPanel');
            const desktopHeader = document.querySelector('.fixed-header');

            if (desktopPanel && desktopHeader && desktopPanel.style.display === 'block') {
                if (!desktopHeader.contains(e.target)) {
                    desktopPanel.style.display = 'none';
                }
            }
        });

        // Fake form submission
        function fakeSubmit(event) {
            event.preventDefault();
            alert('Vielen Dank für Ihre Anfrage! Wir werden uns in Kürze bei Ihnen melden.');
            return false;
        }
    </script>

    <script>
        // Brand slider
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.brand-slider-track');
            const items = track.querySelectorAll('img');
            const prev = document.querySelector('.brand-slider-prev');
            const next = document.querySelector('.brand-slider-next');
            const viewport = document.querySelector('.brand-slider-viewport');

            let index = 0;

            function getItemWidth() {
                const style = getComputedStyle(track);
                const gap = parseInt(style.columnGap || style.gap || 0);
                return items[0].offsetWidth + gap;
            }

            function getVisibleItems() {
                return Math.floor(viewport.offsetWidth / getItemWidth());
            }

            function update() {
                const itemWidth = getItemWidth();
                track.style.transform = `translateX(-${index * itemWidth}px)`;
            }

            next.addEventListener('click', () => {
                const maxIndex = items.length - getVisibleItems();
                if (index < maxIndex) {
                    index++;
                    update();
                }
            });

            prev.addEventListener('click', () => {
                if (index > 0) {
                    index--;
                    update();
                }
            });

            window.addEventListener('resize', update);
        });
    </script>

    <script>
        // (You had this function, but there's no #brandsMobilePanel toggle button in HTML currently)
        function toggleBrandsMobile() {
            const panel = document.getElementById('brandsMobilePanel');
            if (!panel) return;
            panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.brand-slider-track');
            const items = track.querySelectorAll('img');
            const prev = document.querySelector('.brand-slider-prev');
            const next = document.querySelector('.brand-slider-next');
            const viewport = document.querySelector('.brand-slider-viewport');

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
                const itemWidth = getItemWidth();
                track.style.transform = `translateX(-${index * itemWidth}px)`;
            }

            function slideNext() {
                const maxIndex = items.length - getVisibleItems();
                if (index >= maxIndex) {
                    index = 0; // loop back
                } else {
                    index++;
                }
                update();
            }

            function slidePrev() {
                if (index <= 0) {
                    index = items.length - getVisibleItems();
                } else {
                    index--;
                }
                update();
            }

            // Buttons
            next.addEventListener('click', () => {
                slideNext();
                resetAutoSlide();
            });

            prev.addEventListener('click', () => {
                slidePrev();
                resetAutoSlide();
            });

            // Auto slide
            function startAutoSlide() {
                autoSlideInterval = setInterval(slideNext, 3000); // ⏱ 3 seconds
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            // Pause on hover (desktop UX polish)
            viewport.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
            viewport.addEventListener('mouseleave', startAutoSlide);

            window.addEventListener('resize', update);

            update();
            startAutoSlide();
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>


</body>

</html>
