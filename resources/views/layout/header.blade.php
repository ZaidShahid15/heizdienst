  <!-- MOBILE FIXED HEADER -->
    <div class="mobile-fixed-header">
        <div class="container">
            <div class="header-inner">
                <a class="brand" href="#top" aria-label="Thermendienst Startseite">
                    <!-- Mobile logo -->
                    <img src="{{ asset('img/mobile-logo.jpeg') }}" class="mobile-logo" width="140"
                        alt="Thermendienst Logo">
                    <!-- Desktop logo (hidden on mobile) -->
                    <img src="{{ asset('img/logo.jpeg') }}" class="desktop-logo" width="140"
                        alt="Thermendienst Logo">
                </a>

                <button class="burger" aria-label="Menü öffnen" onclick="toggleMobileMenu()">
                    <svg>
                        <use href="#i-menu"></use>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile dropdown panel -->
        <div id="mobileMenuPanel" class="mobile-menu-panel">
            <a href="#top" onclick="closeMobileMenu()">Startseite</a>
            <a href="#reparatur" onclick="closeMobileMenu()">Reparatur</a>
            <a href="#service" onclick="closeMobileMenu()">Service</a>
            <a href="#verkauf" onclick="closeMobileMenu()">Verkauf</a>

            <!-- Markenübersicht (mobile dropdown) -->
            <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                <div class="dd-title">Markenübersicht</div>

                <div class="dd-scroll">
                    <a class="dd-item" href="#vaillant"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}"
                            alt="">Vaillant</a>
                    <a class="dd-item" href="#buderus"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}"
                            alt="">Buderus</a>
                    <a class="dd-item" href="#baxi"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}"
                            alt="">Baxi</a>
                    <a class="dd-item" href="#junkers"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}"
                            alt="">Junkers</a>
                    <a class="dd-item" href="#viessmann"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}"
                            alt="">Viessmann</a>
                    <a class="dd-item" href="#saunier-duval"><img class="dd-logo"
                            src="{{ asset('img/saunier-duval.jpg') }}" alt="">Saunier Duval</a>
                    <a class="dd-item" href="#wolf"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}"
                            alt="">Wolf</a>
                    <a class="dd-item" href="#loeblich"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}"
                            alt="">Löblich</a>
                    <a class="dd-item" href="#ocean"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}"
                            alt="">Ocean</a>
                    <a class="dd-item" href="#rapido"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}"
                            alt="">Rapido</a>
                </div>
            </div>


            <a href="#kontakt" onclick="closeMobileMenu()">Kontakt</a>

            <a href="#kontakt" onclick="closeMobileMenu()">Kontakt</a>
        </div>
    </div>
    </div>

    <!-- DESKTOP FIXED HEADER -->
    <div class="fixed-header">
        <!-- DESKTOP TOP STRIP -->
        <div class="topstrip">
            <div class="container">
                <div class="pill">
                    <svg>
                        <use href="#i-phone"></use>
                    </svg>
                    <span>Soforthilfe: <a href="tel:+4319284374">+43 1 9284374</a></span>
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
                    <a class="brand" href="#top" aria-label="Thermendienst Startseite">
                        <!-- Desktop logo only -->
                        <img src="{{ asset('img/logo.jpeg') }}" width="140" alt="Thermendienst Logo">
                    </a>

                    <nav aria-label="Hauptmenü">
                        <a class="active" href="#top">Startseite</a>
                        <a href="#reparatur">Reparatur</a>
                        <a href="#service">Service</a>
                        <a href="#verkauf">Verkauf</a>

                        <!-- Markenübersicht dropdown -->
                        <div class="nav-dropdown">
                            <a href="#marken" aria-haspopup="true" aria-expanded="false">
                                Markenübersicht <span class="chev">▾</span>
                            </a>

                            <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                                <!-- first child -->
                                <div class="dd-title">Markenübersicht</div>

                                <!-- items (with logos) -->
                                <a class="dd-item" href="#vaillant">
                                    <img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="">
                                    Vaillant
                                </a>
                                <a class="dd-item" href="#buderus">
                                    <img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="">
                                    Buderus
                                </a>
                                <a class="dd-item" href="#baxi">
                                    <img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="">
                                    Baxi
                                </a>
                                <a class="dd-item" href="#junkers">
                                    <img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="">
                                    Junkers
                                </a>
                                <a class="dd-item" href="#viessmann">
                                    <img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="">
                                    Viessmann
                                </a>
                                <a class="dd-item" href="#saunier-duval">
                                    <img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="">
                                    Saunier Duval
                                </a>
                                <a class="dd-item" href="#wolf">
                                    <img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="">
                                    Wolf
                                </a>
                                <a class="dd-item" href="#loeblich">
                                    <img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="">
                                    Löblich
                                </a>
                                <a class="dd-item" href="#ocean">
                                    <img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="">
                                    Ocean
                                </a>
                                <a class="dd-item" href="#rapido">
                                    <img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="">
                                    Rapido
                                </a>
                            </div>
                        </div>

                        <a href="#kontakt">Kontakt</a>
                    </nav>


                    <button class="burger" aria-label="Menü öffnen" onclick="toggleDesktopMenu()">
                        <svg>
                            <use href="#i-menu"></use>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- simple dropdown for tablets -->
            {{-- <div id="menuPanel" style="display:none; border-top:1px solid var(--line); background:#fff">
                <div class="container" style="padding:10px 0 14px">
                    <div style="display:grid; gap:10px; font-weight:800">
                        <a href="#top">Startseite</a>
                        <a href="#reparatur">Reparatur</a>
                        <a href="#service">Service</a>
                        <a href="#verkauf">Verkauf</a>
                        <a href="#kontakt">Kontakt</a>
                    </div>
                </div>
            </div> --}}
            <div id="menuPanel" style="display:none; border-top:1px solid var(--line); background:#fff">
                <div class="container" style="padding:10px 0 14px">
                    <div style="display:grid; gap:10px; font-weight:800">
                        <a href="#top">Startseite</a>
                        <a href="#reparatur">Reparatur</a>
                        <a href="#service">Service</a>
                        <a href="#verkauf">Verkauf</a>

                        <!-- Markenübersicht block -->
                        <div
                            style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                                Markenübersicht
                            </div>
                            <div style="background:#122a57; padding:6px 0;">
                                <a class="dd-item" style="text-transform:uppercase;" href="#vaillant">Vaillant</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#buderus">Buderus</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#baxi">Baxi</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#junkers">Junkers</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#viessmann">Viessmann</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#saunier-duval">Saunier
                                    Duval</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#wolf">Wolf</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#loeblich">Löblich</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#ocean">Ocean</a>
                                <a class="dd-item" style="text-transform:uppercase;" href="#rapido">Rapido</a>
                            </div>
                        </div>

                        <a href="#kontakt">Kontakt</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
