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
                </svg>+43 1 928 4374</a>
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
