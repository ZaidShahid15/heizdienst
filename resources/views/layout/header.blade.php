<!-- MOBILE FIXED HEADER -->
<div class="mobile-fixed-header">
    <div class="container">
        <div class="header-inner">
            <a class="brand" href="{{ url('/') }}" aria-label="Thermendienst Startseite">
                <!-- Mobile logo -->
                <img src="{{ asset('img/mobile-logo.jpeg') }}" class="mobile-logo" width="140" alt="Thermendienst Logo">
                <!-- Desktop logo (hidden on mobile) -->
                <img src="{{ asset('img/logo.jpeg') }}" class="desktop-logo" width="140" alt="Thermendienst Logo">
            </a>

            <button class="burger" aria-label="Menü öffnen" onclick="toggleMobileMenu()">
                <svg><use href="#i-menu"></use></svg>
            </button>
        </div>
    </div>

    <!-- Mobile dropdown panel: match desktop nav (Startseite, Markenübersicht dropdown, Kontakt) -->
    <div id="mobileMenuPanel" class="mobile-menu-panel">
        <a href="{{ url('/') }}" onclick="closeMobileMenu()">Startseite</a>

        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false" onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Markenübersicht <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                <div class="dd-title">Markenübersicht</div>

                <a class="dd-item" href="{{ url('/vaillant') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant
                </a>
                <a class="dd-item" href="{{ url('/buderus') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus
                </a>
                <a class="dd-item" href="{{ url('/baxi') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi
                </a>
                <a class="dd-item" href="{{ url('/junkers') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers
                </a>
                <a class="dd-item" href="{{ url('/viessmann') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann
                </a>
                <a class="dd-item" href="{{ url('/saunier-duval') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval
                </a>
                <a class="dd-item" href="{{ url('/wolf') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf
                </a>
                <a class="dd-item" href="{{ url('/löblich') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich
                </a>
                <a class="dd-item" href="{{ url('/ocean') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean
                </a>
                <a class="dd-item" href="{{ url('/rapido') }}" onclick="closeMobileMenu()">
                    <img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido
                </a>
            </div>
        </div>

        <a href="#kontakt" onclick="closeMobileMenu()">Kontakt</a>
    </div>
</div>

    <!-- Mobile menu tweaks: make Markenübersicht open upwards on small screens -->
    <style>
    /* ensure panel positioning context */
    .mobile-menu-panel{ position: relative; padding-bottom: 8px; }
    .mobile-menu-panel .nav-dropdown{ position: relative; }

    /* position the dropdown panel above the trigger */
    .mobile-menu-panel .nav-dropdown .nav-dropdown-panel{
        position: absolute;
        right: 12px;
        bottom: calc(100% + 8px);
        width: 260px;
        height: 340px;
        overflow: auto;
        display: none;
        z-index: 1200;
        box-shadow: 0 10px 30px rgba(0,0,0,.25);
        border-radius: 12px;
        background: #114359; /* match site header color */
        color: #fff;
    }
    .mobile-menu-panel .nav-dropdown.open .nav-dropdown-panel{ display:block; }

    /* mobile list items */
    .mobile-menu-panel .dd-item{
        display:flex;
        align-items:center;
        gap:10px;
        padding:10px 14px;
        color:#fff;
        text-decoration:none;
        border-bottom:1px solid rgba(255,255,255,.04);
    }
    .mobile-menu-panel .dd-logo{ width:36px; height:36px; object-fit:cover; border-radius:8px; }

    /* small-screen adjustments */
    @media (max-width:768px){
        .mobile-menu-panel .nav-dropdown .chev{ float:right; }
        .mobile-menu-panel .nav-dropdown .dd-title{ padding:12px 14px; font-weight:800; }
    }
    </style>

    <!-- DESKTOP FIXED HEADER -->
<div class="fixed-header">
    <!-- DESKTOP TOP STRIP -->
    <div class="topstrip">
        <div class="container">
            <div class="pill">
                <svg><use href="#i-phone"></use></svg>
                <span>Soforthilfe: <a href="tel:+0000000">+43 0 000000</a></span>
            </div>
            <div class="pill">
                <svg></svg>
                <span>Notdienst auch an Wochenenden</span>
            </div>
        </div>
    </div>

    <!-- DESKTOP MAIN HEADER -->
    <div class="main-header">
        <div class="container">
            <div class="header-inner">
                <a class="brand" href="{{ url('/') }}" aria-label="Thermendienst Startseite">
                    <img src="{{ asset('img/logo.jpeg') }}" width="140" alt="Thermendienst Logo">
                </a>

                <nav aria-label="Hauptmenü">
                    <a class="active" href="{{ url('/') }}">Startseite</a>
                 

                    <!-- Markenübersicht dropdown -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Markenübersicht <span class="chev">▾</span>
                        </a>

                        <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                            <div class="dd-title">Markenübersicht</div>

                            <a class="dd-item" href="{{ url('/vaillant') }}">
                                <img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">
                                Vaillant
                            </a>

                            <a class="dd-item" href="{{ url('/buderus') }}">
                                <img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">
                                Buderus
                            </a>

                            <a class="dd-item" href="{{ url('/baxi') }}">
                                <img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">
                                Baxi
                            </a>

                            <a class="dd-item" href="{{ url('/junkers') }}">
                                <img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">
                                Junkers
                            </a>

                            <a class="dd-item" href="{{ url('/viessmann') }}">
                                <img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">
                                Viessmann
                            </a>

                            <a class="dd-item" href="{{ url('/saunier-duval') }}">
                                <img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">
                                Saunier Duval
                            </a>

                            <a class="dd-item" href="{{ url('/wolf') }}">
                                <img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">
                                Wolf
                            </a>

                            <a class="dd-item" href="{{ url('/löblich') }}">
                                <img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">
                                Löblich
                            </a>

                            <a class="dd-item" href="{{ url('/ocean') }}">
                                <img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">
                                Ocean
                            </a>

                            <a class="dd-item" href="{{ url('/rapido') }}">
                                <img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">
                                Rapido
                            </a>
                        </div>
                    </div>

                    <a href="#kontakt">Kontakt</a>
                </nav>

                <button class="burger" aria-label="Menü öffnen" onclick="toggleDesktopMenu()">
                    <svg><use href="#i-menu"></use></svg>
                </button>
            </div>
        </div>

        <!-- Tablet dropdown -->
        <div id="menuPanel" style="display:none; border-top:1px solid var(--line); background:#fff">
            <div class="container" style="padding:10px 0 14px">
                <div style="display:grid; gap:10px; font-weight:800">
                    <a href="{{ url('/') }}">Startseite</a>
                    <a href="#reparatur">Reparatur</a>
                    <a href="#service">Service</a>
                    <a href="#verkauf">Verkauf</a>

                    <!-- Markenübersicht block -->
                    <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                        <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                            Markenübersicht
                        </div>

                        <div style="background:#122a57; padding:6px 0;">
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/vaillant') }}">Vaillant</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/buderus') }}">Buderus</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/baxi') }}">Baxi</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/junkers') }}">Junkers</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/viessmann') }}">Viessmann</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/saunier-duval') }}">Saunier Duval</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/wolf') }}">Wolf</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/löblich') }}">Löblich</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/ocean') }}">Ocean</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/rapido') }}">Rapido</a>
                        </div>
                    </div>

                    <a href="#kontakt">Kontakt</a>
                </div>
            </div>
        </div>

    </div>
</div>
