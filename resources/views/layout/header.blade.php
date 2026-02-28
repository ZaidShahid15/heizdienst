<!-- =========================================================
FULL UPDATED HEADER (MOBILE + DESKTOP + TABLET)
✅ Mobile = BOOTSTRAP OFFCANVAS (left) with internal scroll
✅ Link click FIX: close then navigate/scroll (#kontakt works)
✅ Outside click + ESC close (Bootstrap default)
✅ Mobile dropdowns = Bootstrap accordion
✅ Desktop header + dropdowns unchanged
✅ Tablet menuPanel toggle unchanged
✅ Installateur (Vaillant..Nordgas) added PROPERLY in:
   - Mobile Accordion ✅
   - Desktop Dropdown ✅
   - Tablet Panel ✅
✅ #kontakt links fixed to #kontakt-services (your page id)
✅ ALL service links use NAMED ROUTES (route('brand.service'))
========================================================= -->

<!-- =========================
  MOBILE FIXED HEADER
========================= -->
<div class="mobile-fixed-header d-lg-none">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between py-2">
      <a class="brand d-flex align-items-center gap-2" href="{{ url('/') }}" aria-label="Thermendienst Startseite">
        <img src="{{ asset('img/mobile-logo.jpeg') }}" class="mobile-logo" width="160" alt="Thermendienst Logo">
      </a>

      <!-- ✅ Burger (inline SVG) -->
      <button
        type="button"
        class="btn mm-burger"
        aria-label="Menü öffnen"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileMenuCanvas"
        aria-controls="mobileMenuCanvas"
      >
        <svg class="mm-ico" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M4 6.5h16M4 12h16M4 17.5h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- =========================
  MOBILE MENU (OFFCANVAS)
========================= -->
<div class="offcanvas offcanvas-start mm-offcanvas" tabindex="-1" id="mobileMenuCanvas" aria-labelledby="mobileMenuCanvasLabel">

  <div class="offcanvas-header mm-head">
    <div class="d-flex align-items-center gap-2">
      <span class="mm-badge">MENU</span>
      <span class="mm-subtitle" id="mobileMenuCanvasLabel">Thermendienst</span>
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Schließen"></button>
  </div>

  <!-- ✅ Single scroll area -->
  <div class="offcanvas-body p-0 mm-body">
    <div class="mm-scroll" id="mmScroll">

      <!-- Quick link -->
      <div class="px-3 pt-3">
        <a class="mm-link mm-navlink" href="{{ url('/') }}">
          <span>Startseite</span>
          <span class="mm-arrow">›</span>
        </a>
      </div>

      <div class="mm-divider"></div>

      <!-- Accordion Nav -->
      <div class="accordion mm-acc px-3 pb-3" id="mobileNavAccordion">

        <!-- MARKENÜBERSICHT (excluded – keep old url) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accBrandsH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accBrands"
                    aria-expanded="false" aria-controls="accBrands">
              Markenübersicht
            </button>
          </h2>
          <div id="accBrands" class="accordion-collapse collapse" aria-labelledby="accBrandsH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ url('/vaillant') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/buderus') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/baxi') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/junkers') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/viessmann') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/saunier-duval') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/wolf') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/löblich') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/ocean') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/rapido') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/windhager') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ url('/nordgas') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

        <!-- KUNDENDIENST (use named routes) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accServiceH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accService"
                    aria-expanded="false" aria-controls="accService">
              Kundendienst
            </button>
          </h2>
          <div id="accService" class="accordion-collapse collapse" aria-labelledby="accServiceH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ route('vaillant.kundendienst') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('buderus.kundendienst') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('baxi.kundendienst') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('junkers.kundendienst') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('viessmann.kundendienst') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('saunier-duval.kundendienst') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('wolf.kundendienst') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('löblich.kundendienst') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('ocean.kundendienst') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('rapido.kundendienst') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('windhager.kundendienst') }}"><img src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('nordgas.kundendienst') }}"><img src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

        <!-- NOTDIENST WIEN (use named routes) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accEmergencyH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accEmergency"
                    aria-expanded="false" aria-controls="accEmergency">
              Notdienst Wien
            </button>
          </h2>
          <div id="accEmergency" class="accordion-collapse collapse" aria-labelledby="accEmergencyH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ route('vaillant.notdienst') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('buderus.notdienst') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('baxi.notdienst') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('junkers.notdienst') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('viessmann.notdienst') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('saunier-duval.notdienst') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('wolf.notdienst') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('löblich.notdienst') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('ocean.notdienst') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('rapido.notdienst') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('windhager.notdienst') }}"><img src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('nordgas.notdienst') }}"><img src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

        <!-- THERMENTAUSCH (use named routes) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accSwapH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accSwap"
                    aria-expanded="false" aria-controls="accSwap">
              Thermentausch
            </button>
          </h2>
          <div id="accSwap" class="accordion-collapse collapse" aria-labelledby="accSwapH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ route('vaillant.thermentausch') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('buderus.thermentausch') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('baxi.thermentausch') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('junkers.thermentausch') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('viessmann.thermentausch') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('wolf.thermentausch') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('saunier-duval.thermentausch') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('löblich.thermentausch') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('ocean.thermentausch') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('rapido.thermentausch') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('windhager.thermentausch') }}"><img src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('nordgas.thermentausch') }}"><img src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

        <!-- THERMENREPARATUR (use named routes) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accRepairH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accRepair"
                    aria-expanded="false" aria-controls="accRepair">
              Thermenreparatur
            </button>
          </h2>
          <div id="accRepair" class="accordion-collapse collapse" aria-labelledby="accRepairH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ route('vaillant.thermenreparatur') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('buderus.thermenreparatur') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('baxi.thermenreparatur') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('junkers.thermenreparatur') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('viessmann.thermenreparatur') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('saunier-duval.thermenreparatur') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('löblich.thermenreparatur') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('ocean.thermenreparatur') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('wolf.thermenreparatur') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('rapido.thermenreparatur') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('windhager.thermenreparatur') }}"><img src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('nordgas.thermenreparatur') }}"><img src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

        <!-- ✅ INSTALLATEUR (use named routes) -->
        <div class="accordion-item mm-acc-item">
          <h2 class="accordion-header" id="accInstallH">
            <button class="accordion-button collapsed mm-acc-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accInstall"
                    aria-expanded="false" aria-controls="accInstall">
              Installateur
            </button>
          </h2>
          <div id="accInstall" class="accordion-collapse collapse" aria-labelledby="accInstallH" data-bs-parent="#mobileNavAccordion">
            <div class="accordion-body mm-acc-body">
              <a class="mm-dd-item mm-navlink" href="{{ route('vaillant.installateur') }}"><img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('buderus.installateur') }}"><img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('baxi.installateur') }}"><img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('junkers.installateur') }}"><img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('viessmann.installateur') }}"><img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('saunier-duval.installateur') }}"><img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('wolf.installateur') }}"><img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('löblich.installateur') }}"><img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('ocean.installateur') }}"><img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('rapido.installateur') }}"><img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('windhager.installateur') }}"><img src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="mm-dd-item mm-navlink" href="{{ route('nordgas.installateur') }}"><img src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>
        </div>

      </div><!-- /accordion -->

      <!-- Footer links (inside scroll) -->
      <div class="mm-divider"></div>
      <div class="px-3 pb-3">
        <!-- ✅ fixed id -->
        <a class="mm-footer-link mm-navlink" href="#kontakt-services">Kontakt</a>
        <a class="mm-footer-link mm-navlink mt-2" href="{{ route('datenschutzerklaerung') }}">Datenschutzerklärung</a>
        <a class="mm-footer-link mm-navlink mt-2" href="{{ route('impressum') }}">Impressum</a>
      </div>

    </div><!-- /mm-scroll -->
  </div><!-- /offcanvas-body -->
</div>

<!-- =========================
     DESKTOP FIXED HEADER
========================= -->
<div class="fixed-header d-none d-lg-block">
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

          <!-- MARKENÜBERSICHT (excluded – keep old url) -->
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
              <a class="dd-item" href="{{ url('/windhager') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ url('/nordgas') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- KUNDENDIENST (use named routes) -->
          <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false">
              Kundendienst <span class="chev">▾</span>
            </a>
            <div class="nav-dropdown-panel" role="menu" aria-label="Kundendienst">
              <div class="dd-title">Kundendienst</div>
              <a class="dd-item" href="{{ route('vaillant.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="dd-item" href="{{ route('buderus.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="dd-item" href="{{ route('baxi.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="dd-item" href="{{ route('junkers.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="dd-item" href="{{ route('viessmann.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="dd-item" href="{{ route('saunier-duval.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="dd-item" href="{{ route('wolf.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="dd-item" href="{{ route('löblich.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="dd-item" href="{{ route('ocean.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="dd-item" href="{{ route('rapido.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="dd-item" href="{{ route('windhager.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ route('nordgas.kundendienst') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- NOTDIENST WIEN (use named routes) -->
          <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false">
              Notdienst Wien <span class="chev">▾</span>
            </a>
            <div class="nav-dropdown-panel" role="menu" aria-label="Notdienst Wien">
              <div class="dd-title">Notdienst Wien</div>
              <a class="dd-item" href="{{ route('vaillant.notdienst') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="dd-item" href="{{ route('buderus.notdienst') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="dd-item" href="{{ route('baxi.notdienst') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="dd-item" href="{{ route('junkers.notdienst') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="dd-item" href="{{ route('viessmann.notdienst') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="dd-item" href="{{ route('saunier-duval.notdienst') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="dd-item" href="{{ route('wolf.notdienst') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="dd-item" href="{{ route('löblich.notdienst') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="dd-item" href="{{ route('ocean.notdienst') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="dd-item" href="{{ route('rapido.notdienst') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="dd-item" href="{{ route('windhager.notdienst') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ route('nordgas.notdienst') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- THERMENTAUSCH (use named routes) -->
          <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false">
              Thermentausch <span class="chev">▾</span>
            </a>
            <div class="nav-dropdown-panel" role="menu" aria-label="Thermentausch">
              <div class="dd-title">Thermentausch</div>
              <a class="dd-item" href="{{ route('vaillant.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="dd-item" href="{{ route('buderus.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="dd-item" href="{{ route('baxi.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="dd-item" href="{{ route('junkers.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="dd-item" href="{{ route('viessmann.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="dd-item" href="{{ route('wolf.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="dd-item" href="{{ route('saunier-duval.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="dd-item" href="{{ route('löblich.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="dd-item" href="{{ route('ocean.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="dd-item" href="{{ route('rapido.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="dd-item" href="{{ route('windhager.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ route('nordgas.thermentausch') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- THERMENREPARATUR (use named routes) -->
          <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false">
              Thermenreparatur <span class="chev">▾</span>
            </a>
            <div class="nav-dropdown-panel" role="menu" aria-label="Thermenreparatur">
              <div class="dd-title">Thermenreparatur</div>
              <a class="dd-item" href="{{ route('vaillant.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="dd-item" href="{{ route('buderus.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="dd-item" href="{{ route('baxi.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="dd-item" href="{{ route('junkers.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="dd-item" href="{{ route('viessmann.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="dd-item" href="{{ route('saunier-duval.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="dd-item" href="{{ route('löblich.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="dd-item" href="{{ route('ocean.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="dd-item" href="{{ route('wolf.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="dd-item" href="{{ route('rapido.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="dd-item" href="{{ route('windhager.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ route('nordgas.thermenreparatur') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- ✅ INSTALLATEUR (DESKTOP DROPDOWN) (use named routes) -->
          <div class="nav-dropdown">
            <a href="#" aria-haspopup="true" aria-expanded="false">
              Installateur <span class="chev">▾</span>
            </a>
            <div class="nav-dropdown-panel" role="menu" aria-label="Installateur">
              <div class="dd-title">Installateur</div>
              <a class="dd-item" href="{{ route('vaillant.installateur') }}"><img class="dd-logo" src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">Vaillant</a>
              <a class="dd-item" href="{{ route('buderus.installateur') }}"><img class="dd-logo" src="{{ asset('img/buderus.jpg') }}" alt="Buderus">Buderus</a>
              <a class="dd-item" href="{{ route('baxi.installateur') }}"><img class="dd-logo" src="{{ asset('img/baxi.jpg') }}" alt="Baxi">Baxi</a>
              <a class="dd-item" href="{{ route('junkers.installateur') }}"><img class="dd-logo" src="{{ asset('img/junkers.jpg') }}" alt="Junkers">Junkers</a>
              <a class="dd-item" href="{{ route('viessmann.installateur') }}"><img class="dd-logo" src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">Viessmann</a>
              <a class="dd-item" href="{{ route('saunier-duval.installateur') }}"><img class="dd-logo" src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">Saunier Duval</a>
              <a class="dd-item" href="{{ route('wolf.installateur') }}"><img class="dd-logo" src="{{ asset('img/wolf.jpg') }}" alt="Wolf">Wolf</a>
              <a class="dd-item" href="{{ route('löblich.installateur') }}"><img class="dd-logo" src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">Löblich</a>
              <a class="dd-item" href="{{ route('ocean.installateur') }}"><img class="dd-logo" src="{{ asset('img/ocean.jpg') }}" alt="Ocean">Ocean</a>
              <a class="dd-item" href="{{ route('rapido.installateur') }}"><img class="dd-logo" src="{{ asset('img/rapido.jpg') }}" alt="Rapido">Rapido</a>
              <a class="dd-item" href="{{ route('windhager.installateur') }}"><img class="dd-logo" src="{{ asset('img/Windhager.png') }}" alt="Windhager">Windhager</a>
              <a class="dd-item" href="{{ route('nordgas.installateur') }}"><img class="dd-logo" src="{{ asset('img/NordGas.png') }}" alt="Nordgas">Nordgas</a>
            </div>
          </div>

          <!-- <a href="{{ route('impressum') }}">Impressum</a>
          <a href="{{ route('datenschutzerklaerung') }}">Datenschutzerklärung</a> -->
          <!-- ✅ fixed id -->
          <a href="#kontakt-services">Kontakt</a>
        </nav>

        <button type="button" class="burger" aria-label="Menü öffnen" onclick="toggleDesktopMenu()">
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

          <!-- MARKENÜBERSICHT block (excluded) -->
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
              <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/windhager') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ url('/nordgas') }}">Nordgas</a>
            </div>
          </div>

          <!-- KUNDENDIENST block (use named routes) -->
          <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
              Kundendienst
            </div>
            <div style="background:#122a57; padding:6px 0;">
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('vaillant.kundendienst') }}">Vaillant</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('buderus.kundendienst') }}">Buderus</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('baxi.kundendienst') }}">Baxi</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('junkers.kundendienst') }}">Junkers</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('viessmann.kundendienst') }}">Viessmann</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('saunier-duval.kundendienst') }}">Saunier Duval</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('wolf.kundendienst') }}">Wolf</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('löblich.kundendienst') }}">Löblich</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('ocean.kundendienst') }}">Ocean</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('rapido.kundendienst') }}">Rapido</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('windhager.kundendienst') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('nordgas.kundendienst') }}">Nordgas</a>
            </div>
          </div>

          <!-- NOTDIENST WIEN block (use named routes) -->
          <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
              Notdienst Wien
            </div>
            <div style="background:#122a57; padding:6px 0;">
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('vaillant.notdienst') }}">Vaillant</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('buderus.notdienst') }}">Buderus</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('baxi.notdienst') }}">Baxi</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('junkers.notdienst') }}">Junkers</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('viessmann.notdienst') }}">Viessmann</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('saunier-duval.notdienst') }}">Saunier Duval</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('wolf.notdienst') }}">Wolf</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('löblich.notdienst') }}">Löblich</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('ocean.notdienst') }}">Ocean</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('rapido.notdienst') }}">Rapido</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('windhager.notdienst') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('nordgas.notdienst') }}">Nordgas</a>
            </div>
          </div>

          <!-- THERMENTAUSCH block (use named routes) -->
          <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
              Thermentausch
            </div>
            <div style="background:#122a57; padding:6px 0;">
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('vaillant.thermentausch') }}">Vaillant</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('buderus.thermentausch') }}">Buderus</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('baxi.thermentausch') }}">Baxi</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('junkers.thermentausch') }}">Junkers</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('viessmann.thermentausch') }}">Viessmann</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('wolf.thermentausch') }}">Wolf</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('saunier-duval.thermentausch') }}">Saunier Duval</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('löblich.thermentausch') }}">Löblich</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('ocean.thermentausch') }}">Ocean</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('rapido.thermentausch') }}">Rapido</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('windhager.thermentausch') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('nordgas.thermentausch') }}">Nordgas</a>
            </div>
          </div>

          <!-- THERMENREPARATUR block (use named routes) -->
          <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
              Thermenreparatur
            </div>
            <div style="background:#122a57; padding:6px 0;">
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('vaillant.thermenreparatur') }}">Vaillant</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('buderus.thermenreparatur') }}">Buderus</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('baxi.thermenreparatur') }}">Baxi</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('junkers.thermenreparatur') }}">Junkers</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('viessmann.thermenreparatur') }}">Viessmann</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('saunier-duval.thermenreparatur') }}">Saunier Duval</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('wolf.thermenreparatur') }}">Wolf</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('löblich.thermenreparatur') }}">Löblich</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('ocean.thermenreparatur') }}">Ocean</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('rapido.thermenreparatur') }}">Rapido</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('windhager.thermenreparatur') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('nordgas.thermenreparatur') }}">Nordgas</a>
            </div>
          </div>

          <!-- ✅ INSTALLATEUR block (TABLET PANEL) (use named routes) -->
          <div style="margin-top:10px; border-radius:12px; overflow:hidden; border:1px solid var(--line);">
            <div style="padding:12px 14px; font-weight:900; background:#122a57; color:#fff;">
              Installateur
            </div>
            <div style="background:#122a57; padding:6px 0;">
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('vaillant.installateur') }}">Vaillant</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('buderus.installateur') }}">Buderus</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('baxi.installateur') }}">Baxi</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('junkers.installateur') }}">Junkers</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('viessmann.installateur') }}">Viessmann</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('saunier-duval.installateur') }}">Saunier Duval</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('wolf.installateur') }}">Wolf</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('löblich.installateur') }}">Löblich</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('ocean.installateur') }}">Ocean</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('rapido.installateur') }}">Rapido</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('windhager.installateur') }}">Windhager</a>
              <a class="dd-item" style="text-transform:uppercase;" href="{{ route('nordgas.installateur') }}">Nordgas</a>
            </div>
          </div>

          <!-- ✅ fixed id -->
          <a href="#kontakt-services">Kontakt</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- =========================
  CSS (Mobile Offcanvas Styling)
========================= -->
<style>
  @media (min-width: 992px){ .mobile-fixed-header{ display:none !important; } }
  @media (max-width: 991px){ .fixed-header{ display:none !important; } }

  .mobile-fixed-header{
    background:#0f2f3f;
    border-bottom:1px solid rgba(255,255,255,.08);
    top: 0;
    z-index: 999;
  }

  .mm-burger{
    width:44px; height:44px;
    border-radius:14px;
    display:flex; align-items:center; justify-content:center;
    border:1px solid rgba(255,255,255,.14);
    background: rgba(255,255,255,.06);
    color:#fff;
  }
  .mm-ico{ width:24px; height:24px; display:block; }

  .mm-offcanvas{
    width: min(88vw, 380px) !important;
    background: #0f2f3f;
    color:#fff;
    border-right: 1px solid rgba(255,255,255,.08);
  }

  .mm-head{
    padding: 14px 16px;
    background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,0));
    border-bottom: 1px solid rgba(255,255,255,.10);
  }
  .mm-badge{
    font-weight: 900;
    letter-spacing: .12em;
    font-size: .75rem;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.10);
  }
  .mm-subtitle{ opacity:.85; font-weight:700; font-size:.95rem; }

  .mm-scroll{
    overflow:auto;
    -webkit-overflow-scrolling: touch;
    height: calc(100vh - 72px);
    padding-bottom: 14px;
  }

  .mm-divider{
    height:1px;
    background: rgba(255,255,255,.08);
    margin: 14px 0;
  }

  .mm-link{
    display:flex; align-items:center; justify-content:space-between;
    padding: 12px 12px;
    color:#fff; text-decoration:none;
    border-radius: 14px;
    font-weight: 900;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.08);
  }
  .mm-link:active{ background: rgba(255,255,255,.08); }
  .mm-arrow{ opacity:.75; font-size: 18px; }

  .mm-acc-item{
    background: transparent;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 16px;
    overflow:hidden;
    margin-top: 12px;
  }
  .mm-acc-btn{
    background: rgba(255,255,255,.05) !important;
    color:#fff !important;
    font-weight: 900;
    border:0 !important;
    box-shadow:none !important;
    padding: 14px 14px;
  }
  .mm-acc-btn::after{ filter: invert(1); opacity:.9; }

  .mm-acc-body{
    background: rgba(255,255,255,.04);
    padding: 10px;
  }

  .mm-dd-item{
    display:flex; align-items:center; gap:10px;
    padding: 12px 10px;
    color:#fff; text-decoration:none;
    border-radius: 14px;
    font-weight: 800;
  }
  .mm-dd-item:hover{ color:#fff; }
  .mm-dd-item:active{ background: rgba(255,255,255,.08); }
  .mm-dd-item img{
    height: 38px;
    border-radius: 12px;
    object-fit: cover;
    border: 1px solid rgba(255,255,255,.08);
  }

  .mm-footer-link{
    display:flex; align-items:center; justify-content:space-between;
    padding: 12px 12px;
    color:#fff; text-decoration:none;
    border-radius: 14px;
    font-weight: 900;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.08);
  }
  .mm-footer-link:active{ background: rgba(255,255,255,.08); }

  /* Accordion button active state */
  .accordion-button:not(.collapsed) { color: #fff !important; }
</style>

<!-- =========================
  JS
  ✅ Mobile offcanvas: close then navigate/scroll (100% reliable)
  ✅ Tablet menuPanel toggle unchanged
========================= -->
<script>
  (function () {
    const canvasEl = document.getElementById('mobileMenuCanvas');
    if (!canvasEl || typeof bootstrap === 'undefined') return;

    const canvas = bootstrap.Offcanvas.getOrCreateInstance(canvasEl);

    // ✅ Any nav link: close menu then navigate/scroll
    canvasEl.addEventListener('click', function (e) {
      const a = e.target.closest('a.mm-navlink');
      if (!a) return;

      const href = a.getAttribute('href') || '';
      if (!href) return;

      // allow ctrl/cmd click etc.
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

      // Hash link -> close then scroll
      if (href.startsWith('#')) {
        e.preventDefault();
        canvas.hide();

        setTimeout(() => {
          const target = document.querySelector(href);
          if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          else window.location.hash = href;
        }, 220);
        return;
      }

      // Normal page nav -> close then redirect
      e.preventDefault();
      canvas.hide();
      setTimeout(() => { window.location.href = href; }, 220);
    });
  })();

  // TABLET MENU (Burger in desktop header)
  function toggleDesktopMenu(){
    const panel = document.getElementById('menuPanel');
    if(!panel) return;
    const isOpen = panel.style.display === 'block';
    panel.style.display = isOpen ? 'none' : 'block';
  }

  function closeDesktopMenu(){
    const panel = document.getElementById('menuPanel');
    if(panel) panel.style.display = 'none';
  }

  // ESC close (desktop panel)
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape') closeDesktopMenu();
  });

  // Close tablet menu when clicking outside
  document.addEventListener('click', function(e){
    const panel = document.getElementById('menuPanel');
    if(!panel) return;

    const burgerBtn = document.querySelector('.fixed-header .burger');
    const clickedInsidePanel = panel.contains(e.target);
    const clickedBurger = burgerBtn && burgerBtn.contains(e.target);

    if(panel.style.display === 'block' && !clickedInsidePanel && !clickedBurger){
      closeDesktopMenu();
    }
  });
</script>

<!-- =========================================================
REQUIRED:
Bootstrap 5 bundle (includes Offcanvas + Collapse):
<script src=".../bootstrap.bundle.min.js"></script>
========================================================= -->