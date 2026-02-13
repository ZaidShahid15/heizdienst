<!-- =========================
     MOBILE FIXED HEADER
========================= -->
<div class="mobile-fixed-header">
    <div class="container">
        <div class="header-inner">
            <a class="brand" href="{{ url('/') }}" aria-label="Thermendienst Startseite">
                <img src="{{ asset('img/mobile-logo.jpeg') }}" class="mobile-logo" width="140" alt="Thermendienst Logo">
                <img src="{{ asset('img/logo.jpeg') }}" class="desktop-logo" width="140" alt="Thermendienst Logo">
            </a>

            <button class="burger" aria-label="Menü öffnen" onclick="toggleMobileMenu()">
                <svg><use href="#i-menu"></use></svg>
            </button>
        </div>
    </div>

    <!-- MOBILE MENU PANEL -->
    <div id="mobileMenuPanel" class="mobile-menu-panel">
        <a href="{{ url('/') }}" onclick="closeMobileMenu()">Startseite</a>

        <!-- MARKENÜBERSICHT -->
        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false"
               onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Markenübersicht <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                <div class="dd-title">Markenübersicht</div>
                <a class="dd-item" href="{{ url('/vaillant') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                <a class="dd-item" href="{{ url('/buderus') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                <a class="dd-item" href="{{ url('/baxi') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                <a class="dd-item" href="{{ url('/junkers') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                <a class="dd-item" href="{{ url('/viessmann') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                <a class="dd-item" href="{{ url('/saunier-duval') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                <a class="dd-item" href="{{ url('/wolf') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                <a class="dd-item" href="{{ url('/löblich') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                <a class="dd-item" href="{{ url('/ocean') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                <a class="dd-item" href="{{ url('/rapido') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
            </div>
        </div>

        <!-- KUNDENDIENST -->
        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false"
               onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Kundendienst <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Kundendienst">
                <div class="dd-title">Kundendienst</div>
                <a class="dd-item" href="{{ url('/kundendienst/vaillant') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                <a class="dd-item" href="{{ url('/kundendienst/buderus') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                <a class="dd-item" href="{{ url('/kundendienst/baxi') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                <a class="dd-item" href="{{ url('/kundendienst/junkers') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                <a class="dd-item" href="{{ url('/kundendienst/viessmann') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                <a class="dd-item" href="{{ url('/kundendienst/saunier-duval') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                <a class="dd-item" href="{{ url('/kundendienst/wolf') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                <a class="dd-item" href="{{ url('/kundendienst/löblich') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                <a class="dd-item" href="{{ url('/kundendienst/ocean') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                <a class="dd-item" href="{{ url('/kundendienst/rapido') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
            </div>
        </div>

        <!-- NOTDIENST WIEN -->
        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false"
               onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Notdienst Wien <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Notdienst Wien">
                <div class="dd-title">Notdienst Wien</div>
                <a class="dd-item" href="{{ url('/notdienstwien/vaillant') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                <a class="dd-item" href="{{ url('/notdienstwien/buderus') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                <a class="dd-item" href="{{ url('/notdienstwien/baxi') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                <a class="dd-item" href="{{ url('/notdienstwien/junkers') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                <a class="dd-item" href="{{ url('/notdienstwien/viessmann') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                <a class="dd-item" href="{{ url('/notdienstwien/saunier-duval') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                <a class="dd-item" href="{{ url('/notdienstwien/wolf') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                <a class="dd-item" href="{{ url('/notdienstwien/löblich') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                <a class="dd-item" href="{{ url('/notdienstwien/ocean') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                <a class="dd-item" href="{{ url('/notdienstwien/rapido') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
            </div>
        </div>

        <!-- THERMENTAUSCH (NEW) -->
        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false"
               onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Thermentausch <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Thermentausch">
                <div class="dd-title">Thermentausch</div>
                <a class="dd-item" href="{{ url('/Thermentausch/vaillant') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                <a class="dd-item" href="{{ url('/Thermentausch/buderus') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                <a class="dd-item" href="{{ url('/Thermentausch/baxi') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                <a class="dd-item" href="{{ url('/Thermentausch/junkers') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                <a class="dd-item" href="{{ url('/Thermentausch/viessmann') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                <a class="dd-item" href="{{ url('/Thermentausch/wolf') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                <a class="dd-item" href="{{ url('/Thermentausch/saunier') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                <a class="dd-item" href="{{ url('/Thermentausch/löblich') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                <a class="dd-item" href="{{ url('/Thermentausch/ocean') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                <a class="dd-item" href="{{ url('/Thermentausch/rapido') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
            </div>
        </div>

        <!-- THERMENREPARATUR (NEW) -->
        <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false"
               onclick="event.preventDefault(); this.parentElement.classList.toggle('open');">
                Thermenreparatur <span class="chev">▾</span>
            </a>

            <div class="nav-dropdown-panel" role="menu" aria-label="Thermenreparatur">
                <div class="dd-title">Thermenreparatur</div>
                <a class="dd-item" href="{{ url('/Thermenreparatur/vaillant') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/buderus') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/baxi') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/junkers') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/viessmann') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/wolf') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/saunier') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/löblich') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/ocean') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                <a class="dd-item" href="{{ url('/Thermenreparatur/rapido') }}" onclick="closeMobileMenu()"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
            </div>
        </div>

        <a href="#kontakt" onclick="closeMobileMenu()">Kontakt</a>
    </div>
</div>

<!-- MOBILE DROPDOWN CSS (same style, opens upwards) -->
<style>
    .mobile-menu-panel{ position: relative; padding-bottom: 8px; }
    .mobile-menu-panel .nav-dropdown{ position: relative; }

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
        background: #114359;
        color: #fff;
    }
    .mobile-menu-panel .nav-dropdown.open .nav-dropdown-panel{ display:block; }

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

    @media (max-width:768px){
        .mobile-menu-panel .nav-dropdown .chev{ float:right; }
        .mobile-menu-panel .nav-dropdown .dd-title{ padding:12px 14px; font-weight:800; }
    }
</style>


<!-- =========================
     DESKTOP FIXED HEADER
========================= -->
<div class="fixed-header">
    <!-- TOP STRIP -->
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

    <!-- MAIN HEADER -->
    <div class="main-header">
        <div class="container-fluid px-5">
            <div class="header-inner">
                <a class="brand" href="{{ url('/') }}" aria-label="Thermendienst Startseite">
                    <img src="{{ asset('img/logo.jpeg') }}" width="140" alt="Thermendienst Logo">
                </a>

                <nav aria-label="Hauptmenü">
                    <a class="active" href="{{ url('/') }}">Startseite</a>

                    <!-- MARKENÜBERSICHT -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Markenübersicht <span class="chev">▾</span>
                        </a>
                        <div class="nav-dropdown-panel" role="menu" aria-label="Markenübersicht">
                            <div class="dd-title">Markenübersicht</div>
                            <a class="dd-item" href="{{ url('/vaillant') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                            <a class="dd-item" href="{{ url('/buderus') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                            <a class="dd-item" href="{{ url('/baxi') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                            <a class="dd-item" href="{{ url('/junkers') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                            <a class="dd-item" href="{{ url('/viessmann') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                            <a class="dd-item" href="{{ url('/saunier-duval') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                            <a class="dd-item" href="{{ url('/wolf') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                            <a class="dd-item" href="{{ url('/löblich') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                            <a class="dd-item" href="{{ url('/ocean') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                            <a class="dd-item" href="{{ url('/rapido') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
                        </div>
                    </div>

                    <!-- KUNDENDIENST -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Kundendienst <span class="chev">▾</span>
                        </a>
                        <div class="nav-dropdown-panel" role="menu" aria-label="Kundendienst">
                            <div class="dd-title">Kundendienst</div>
                            <a class="dd-item" href="{{ url('/kundendienst/vaillant') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                            <a class="dd-item" href="{{ url('/kundendienst/buderus') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                            <a class="dd-item" href="{{ url('/kundendienst/baxi') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                            <a class="dd-item" href="{{ url('/kundendienst/junkers') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                            <a class="dd-item" href="{{ url('/kundendienst/viessmann') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                            <a class="dd-item" href="{{ url('/kundendienst/saunier-duval') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                            <a class="dd-item" href="{{ url('/kundendienst/wolf') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                            <a class="dd-item" href="{{ url('/kundendienst/löblich') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                            <a class="dd-item" href="{{ url('/kundendienst/ocean') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                            <a class="dd-item" href="{{ url('/kundendienst/rapido') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
                        </div>
                    </div>

                    <!-- NOTDIENST WIEN -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Notdienst Wien <span class="chev">▾</span>
                        </a>
                        <div class="nav-dropdown-panel" role="menu" aria-label="Notdienst Wien">
                            <div class="dd-title">Notdienst Wien</div>
                            <a class="dd-item" href="{{ url('/notdienstwien/vaillant') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/buderus') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/baxi') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/junkers') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/viessmann') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/saunier-duval') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/wolf') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/löblich') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/ocean') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                            <a class="dd-item" href="{{ url('/notdienstwien/rapido') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
                        </div>
                    </div>

                    <!-- THERMENTAUSCH (NEW) -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Thermentausch <span class="chev">▾</span>
                        </a>
                        <div class="nav-dropdown-panel" role="menu" aria-label="Thermentausch">
                            <div class="dd-title">Thermentausch</div>
                            <a class="dd-item" href="{{ url('/Thermentausch/vaillant') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/buderus') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/baxi') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/junkers') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/viessmann') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/wolf') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/saunier') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/löblich') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/ocean') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                            <a class="dd-item" href="{{ url('/Thermentausch/rapido') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
                        </div>
                    </div>

                    <!-- THERMENREPARATUR (NEW) -->
                    <div class="nav-dropdown">
                        <a href="#" aria-haspopup="true" aria-expanded="false">
                            Thermenreparatur <span class="chev">▾</span>
                        </a>
                        <div class="nav-dropdown-panel" role="menu" aria-label="Thermenreparatur">
                            <div class="dd-title">Thermenreparatur</div>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/vaillant') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/buderus') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/baxi') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/junkers') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/viessmann') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/wolf') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/saunier') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/löblich') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/ocean') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
                            <a class="dd-item" href="{{ url('/Thermenreparatur/rapido') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
                        </div>
                    </div>

                    <a href="#kontakt">Kontakt</a>
                </nav>

                <button class="burger" aria-label="Menü öffnen" onclick="toggleDesktopMenu()">
                    <svg><use href="#i-menu"></use></svg>
                </button>
            </div>
        </div>

        <!-- =========================
             TABLET DROPDOWN PANEL
        ========================= -->
        <div id="menuPanel" style="display:none; border-top:1px solid var(--line); background:#fff">
            <div class="container" style="padding:10px 0 14px">
                <div style="display:grid; gap:10px; font-weight:800">
                    <a href="{{ url('/') }}">Startseite</a>

                    <!-- MARKENÜBERSICHT block -->
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

                    <!-- KUNDENDIENST block -->
                    <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                        <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                            Kundendienst
                        </div>
                        <div style="background:#122a57; padding:6px 0;">
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/vaillant') }}">Vaillant</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/buderus') }}">Buderus</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/baxi') }}">Baxi</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/junkers') }}">Junkers</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/viessmann') }}">Viessmann</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/saunier-duval') }}">Saunier Duval</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/wolf') }}">Wolf</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/löblich') }}">Löblich</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/ocean') }}">Ocean</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/kundendienst/rapido') }}">Rapido</a>
                        </div>
                    </div>

                    <!-- NOTDIENST WIEN block -->
                    <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                        <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                            Notdienst Wien
                        </div>
                        <div style="background:#122a57; padding:6px 0;">
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/vaillant') }}">Vaillant</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/buderus') }}">Buderus</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/baxi') }}">Baxi</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/junkers') }}">Junkers</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/viessmann') }}">Viessmann</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/saunier-duval') }}">Saunier Duval</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/wolf') }}">Wolf</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/löblich') }}">Löblich</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/ocean') }}">Ocean</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/notdienstwien/rapido') }}">Rapido</a>
                        </div>
                    </div>

                    <!-- THERMENTAUSCH block (NEW) -->
                    <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                        <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                            Thermentausch
                        </div>
                        <div style="background:#122a57; padding:6px 0;">
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/vaillant') }}">Vaillant</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/buderus') }}">Buderus</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/baxi') }}">Baxi</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/junkers') }}">Junkers</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/viessmann') }}">Viessmann</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/wolf') }}">Wolf</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/saunier') }}">Saunier Duval</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/löblich') }}">Löblich</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/ocean') }}">Ocean</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermentausch/rapido') }}">Rapido</a>
                        </div>
                    </div>

                    <!-- THERMENREPARATUR block (NEW) -->
                    <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
                        <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
                            Thermenreparatur
                        </div>
                        <div style="background:#122a57; padding:6px 0;">
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/vaillant') }}">Vaillant</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/buderus') }}">Buderus</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/baxi') }}">Baxi</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/junkers') }}">Junkers</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/viessmann') }}">Viessmann</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/wolf') }}">Wolf</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/saunier') }}">Saunier Duval</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/löblich') }}">Löblich</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/ocean') }}">Ocean</a>
                            <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/Thermenreparatur/rapido') }}">Rapido</a>
                        </div>
                    </div>

                    <a href="#kontakt">Kontakt</a>
                </div>
            </div>
        </div>

    </div>
</div>
