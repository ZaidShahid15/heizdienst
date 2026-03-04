@extends('layout.app')

@section('main')
<style>
  :root{
    --ink:#184048;
    --bg:#ffffff;
    --accent:#FB9A1B;
    --muted:#f4f7f7;
    --muted2:#e9f0f0;
    --text:#12373c;
    --line:rgba(24,64,72,.14);
    --shadow: 0 14px 40px rgba(0,0,0,.10);
    --radius: 18px;
    --radius2: 22px;
  }

  *{box-sizing:border-box}
  html,body{margin:0;padding:0}
  body{
    font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    color:var(--text);
    background:var(--bg);
    line-height:1.6;
  }

  a{color:inherit;text-decoration:none}
  .service-container{width:min(1120px, 92%); margin-inline:auto}

  .service-btn{
    display:inline-flex; align-items:center; justify-content:center;
    gap:.5rem;
    padding:12px 16px;
    border-radius:999px;
    font-weight:700;
    border:1px solid transparent;
    transition:.18s ease;
    white-space:nowrap;
  }
  .service-btn--primary{background:var(--ink); color:#fff;}
  .service-btn--primary:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
  .service-btn--accent{background:var(--accent); color:#1a1a1a;}
  .service-btn--accent:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
  .service-btn--ghost{background:#fff; border-color:var(--line);}
  .service-btn--ghost:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.08)}
  .service-btn--ghost-on-dark{
    background:transparent;
    border-color:rgba(255,255,255,.25);
    color:#fff;
  }
  .service-btn--ghost-on-dark:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.22)}
  .service-btn--full{width:100%}

  /* Sections */
  .service-section{padding:54px 0}
  .service-section--soft{background:linear-gradient(0deg, var(--muted), #fff)}
  .service-section__head{margin-bottom:18px;}
  .service-section__head h2{
    margin:0 0 6px;
    color:var(--ink);
    font-size: clamp(22px, 2.2vw, 32px);
    letter-spacing:-.02em;
  }
  .service-section__head p{margin:0; max-width:70ch}

  .service-grid{display:grid; gap:14px}
  .service-grid--2{grid-template-columns: repeat(2, 1fr)}

  .service-feature{
    display:flex; gap:12px;
    padding:16px;
    border:1px solid var(--line);
    border-radius:var(--radius);
    background:#fff;
  }
  .service-feature__icon{
    width:40px; height:40px;
    border-radius:14px;
    display:grid; place-items:center;
    background:rgba(251,154,27,.22);
    border:1px solid rgba(251,154,27,.35);
    font-size:18px;
    flex:0 0 auto;
  }
  .service-feature h3{margin:0 0 4px; color:var(--ink)}
  .service-feature p{margin:0}

  /* ✅ stats pills (2 in a row) */
  .service-stats{
    display:grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap:10px;
    margin-top:14px;
  }
  .service-stat{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background:rgba(24,64,72,.06);
    border:1px solid rgba(24,64,72,.18);
  }
  .service-stat__num{
    width:22px; height:22px;
    border-radius:999px;
    display:grid; place-items:center;
    background:#fff;
    border:1px solid rgba(24,64,72,.22);
    font-weight:900;
    color:var(--ink);
    line-height:1;
    flex:0 0 auto;
  }
  .service-stat__label{font-weight:800; color:var(--ink)}

  /* Dark section */
  .service-section--dark{
    background:linear-gradient(135deg, var(--ink), rgba(24,64,72,.92));
    color:#fff;
  }
  .service-emergency{
    display:grid;
    grid-template-columns: 1.2fr .8fr;
    gap:16px;
    align-items:stretch;
  }
  .service-emergency__text h2{color:#fff; margin:0 0 10px}
  .service-emergency__text p{margin:0 0 14px; color:rgba(255,255,255,.9)}
  .service-emergency__actions{display:flex; gap:10px; flex-wrap:wrap}
  .service-panel{
    height:100%;
    background:rgba(255,255,255,.08);
    border:1px solid rgba(255,255,255,.18);
    border-radius:var(--radius);
    padding:16px;
  }
  .service-checklist{margin:0; padding-left:18px}
  .service-checklist--on-dark{color:rgba(255,255,255,.92)}
  .service-checklist--on-dark li{margin:10px 0}

  /* FAQ */
  .service-faq details{
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding:14px 16px;
    background:#fff;
  }
  .service-faq details + details{margin-top:10px}
  .service-faq summary{
    cursor:pointer;
    font-weight:900;
    color:var(--ink);
  }
  .service-faq p{margin:10px 0 0}

  /* CTA */
  .service-cta{
    padding:54px 0;
    background:
      radial-gradient(900px 320px at 10% 10%, rgba(251,154,27,.22), transparent 60%),
      radial-gradient(800px 260px at 90% 20%, rgba(24,64,72,.16), transparent 60%),
      #fff;
  }
  .service-cta__inner{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:16px;
    align-items:start;
    border:1px solid var(--line);
    border-radius:var(--radius2);
    padding:18px;
    background:#fff;
    box-shadow:0 12px 34px rgba(0,0,0,.08);
  }
  .service-cta h2{margin:0 0 6px; color:var(--ink)}
  .service-cta p{margin:0; max-width:60ch}

  .service-cta__form{
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding:14px;
    background:var(--muted);
  }
  label{display:block}
  label span{display:block; font-weight:800; color:var(--ink); margin:0 0 6px}
  input, textarea{
    width:100%;
    border-radius:14px;
    border:1px solid var(--line);
    padding:12px 12px;
    font:inherit;
    outline:none;
    background:#fff;
  }
  input:focus, textarea:focus{border-color:rgba(251,154,27,.7); box-shadow:0 0 0 4px rgba(251,154,27,.18)}
  .service-formrow{display:grid; grid-template-columns: 1fr 1fr; gap:10px;}
  textarea{resize:vertical}
  .service-fineprint{margin:10px 0 0; font-size:.9rem; opacity:.8}

  /* ===== ✅ Card split (EQUAL HEIGHT like your previous site) ===== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* ✅ stretch for equal height */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex; /* ✅ make children fill height */
  }

  .card-box{
    width:100%;
   /* height:100%; */
    background:#fff;
    border:1px solid var(--line);
    border-radius:var(--radius2);
    padding:18px;
  }
  .card-box h2{
    margin:0 0 8px;
    color:var(--ink);
    font-size: clamp(22px, 2.2vw, 30px);
    letter-spacing:-.02em;
  }
  .card-box p{margin:0}
  .card-box p + p{margin-top:10px}

  /* ✅ Image box = equal height with content (fills full) */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:100%;            /* ✅ same height as text card */
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
  }
  .service-media__img{
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    object-position:center;
  }

  /* ===== HERO (wolf) ===== */
  .wolf-hero{
    position:relative;
    min-height:520px;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    overflow:hidden;
    padding:180px 16px 120px;
    background:#111;
  }
  .wolf-hero::before{
    content:"";
    position:absolute;
    inset:0;
    background-image:url("img/hero-scetion.jpeg");
    background-size:cover;
    background-position:left center;
    transform:scale(1.02);
    z-index:0;
  }
  .wolf-hero::after{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.55);
    z-index:1;
  }
  .wolf-hero__inner{
    position:relative;
    z-index:2;
    max-width:900px;
    margin-top:40px;
  }
  .wolf-hero .wolf-hero__inner::after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-120px;
    width:303vw;
    height:2100px;
    background:linear-gradient(90deg, rgba(10,66,75,0.92));
    clip-path: polygon(0 40%, 100% 0, 100% 100%, 0 100%);
    z-index:-1;
    opacity:.9;
  }

  .wolf-hero__kicker{
    display:inline-flex;
    padding:6px 10px;
    border-radius:999px;
    background:rgba(255,255,255,.10);
    border:1px solid rgba(255,255,255,.18);
    font-weight:800;
    color:#fff;
    margin:0 0 12px;
  }
  .wolf-hero h1{
    margin:0 0 10px;
    font-size: clamp(32px, 3.5vw, 54px);
    line-height:1.08;
    font-weight:800;
    color:#fff;
    letter-spacing:-.02em;
  }
  .wolf-hero h1 em{font-style:italic; font-weight:800;}
  .wolf-hero__sub{
    margin:0 auto 28px;
    max-width:780px;
    font-size:16px;
    color:rgba(255,255,255,.9);
  }
  .wolf-hero__logo{margin:22px 0 20px; display:flex; justify-content:center;}
  .wolf-hero__logo img{width:170px; max-width:60vw; transform: rotate(-6deg);}

  .wolf-hero__bullets{display:flex; gap:10px; justify-content:center; flex-wrap:wrap; margin:0 0 6px;}
  .wolf-pill{
    padding:8px 10px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,.22);
    background:rgba(255,255,255,.10);
    font-weight:800;
    font-size:.92rem;
    color:#fff;
  }

  .wolf-hero__actions{
    display:flex;
    justify-content:center;
    gap:12px;
    flex-wrap:wrap;
    margin-top:10px;
  }
  .wolf-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    padding:15px 28px;
    border-radius:6px;
    font-weight:700;
    font-size:14px;
    border:1px solid transparent;
    transition:.15s ease;
  }
  .wolf-btn--accent{background:var(--accent); color:#1a1a1a;}
  .wolf-btn--ghost{background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.28); color:#fff;}
  .wolf-btn--ghost:hover, .wolf-btn--accent:hover{transform:translateY(-1px);}

  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
  }

  /* =========================
     ✅ TOC (after hero, full width)
     ========================= */
  .toc-wrap{padding:16px 0 0; background:#fff;}
  .toc-card{
    width:100%;
    background:#fff;
    border:1px solid rgba(24,64,72,.18);
    border-radius:18px;
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
  }
  .toc-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    padding:12px 14px;
    background:linear-gradient(0deg, #f7fbfb, #fff);
    border-bottom:1px solid rgba(24,64,72,.12);
  }
  .toc-head h4{margin:0; font-size:15px; font-weight:900; color:var(--ink);}
  .toc-actions{display:flex; gap:8px; align-items:center;}
  .toc-iconbtn{
    width:34px; height:34px;
    border-radius:10px;
    border:1px solid rgba(24,64,72,.18);
    background:#fff;
    display:grid; place-items:center;
    cursor:pointer;
    transition:.15s ease;
  }
  .toc-iconbtn:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.10)}
  .toc-iconbtn svg{width:16px; height:16px; fill:var(--ink); opacity:.9}

  .toc-body{
    padding:12px;
    transition:max-height .22s ease, padding .22s ease;
    overflow:auto;
  }
  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
    display:grid;
    gap:10px;
  }
  .toc-item a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 14px;
    border-radius:14px;
    border:1px solid rgba(24,64,72,.12);
    background:#fff;
    transition:.15s ease;
  }
  .toc-item a:hover{background:#f2f7f7; border-color:rgba(24,64,72,.18);}
  .toc-badge{
    width:26px; height:26px;
    border-radius:999px;
    display:grid; place-items:center;
    background:rgba(251,154,27,.18);
    border:1px solid rgba(251,154,27,.35);
    font-size:12px;
    font-weight:900;
    color:#b76500;
    flex:0 0 auto;
  }
  .toc-text{font-weight:900; color:#0f3a40; font-size:14px; line-height:1.2;}
  .toc-card.is-collapsed .toc-body{max-height:0; padding:0 12px; overflow:hidden;}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}

    .service-stats{grid-template-columns:1fr;} /* stats 1 per row on mobile */

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}

    .card-split__text,
    .card-split__media{display:block;}

    .service-media__box{min-height:220px; height:auto;} /* ✅ nice on mobile */
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Nordgas Thermenwartung Wien – 24h Service vom Fachbetrieb</title>
  <meta name="description" content="Professionelle Nordgas Thermenwartung Wien durch erfahrene Techniker – zuverlässig, sicher und rund um die Uhr. 24h Notdienst, transparente Preise, Original Nordgas Teile.">
@endpush

<main>
  <!-- HERO -->
  
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Nordgas Thermenwartung Wien <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/NordGas.png') }}" alt="Nordgas Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Nordgas Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Nordgas Therme,
        Thermenservice, Reparatur und Notdienst in Wien und Umgebung.
      </p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--red" href="tel:+4314420617">
          <i class="bi bi-telephone-fill"></i>
          JETZT ANRUFEN: +431 442 0617
        </a>

        <a class="wolf-btn wolf-btn-outline" href="#kontakt-services">
          <i class="bi bi-arrow-right"></i>
          Anfrage senden
        </a>
      </div>

      <div class="hero-trust">
        <div class="hero-first-block">
          <div class="rating d-flex gap-3">
            <strong class="d-flex gap-3 align-items-center">
              <img src="{{ asset('img/google-icon.svg') }}" style="width:20px" alt=""> Google
            </strong>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>

          <div class="rating">
            4,9/5 (160+ Bewertungen)
          </div>
        </div>

        <div class="badges">
          <div>
            <i class="bi bi-patch-check-fill text-warning"></i>
            Geprüfte Experten
          </div>
          <div>
            <i class="bi bi-shield-check text-warning"></i>
            100% Zufrieden
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ✅ TOC AFTER HERO -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
            <button class="toc-iconbtn" type="button" id="tocToggle"
              aria-expanded="false" aria-controls="tocBody"
              aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true" style="transform: rotate(0deg); transition: transform 0.18s;">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Fachbetrieb</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Geräte & Systeme</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Wichtigkeit der Wartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf der Wartung</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Preise & Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Partner in Wien</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Ihr Nordgas Fachbetrieb in Wien & Umgebung -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Nordgas Fachbetrieb in Wien & Umgebung</h2>
            <p>
              Als spezialisierter Fachbetrieb für Nordgas Thermenwartung Wien betreuen wir private Haushalte und Unternehmen in Wien, Niederösterreich und Burgenland mit höchster Kompetenz. Unsere Erfahrung mit Nordgas Geräten, Gasgeräte-Systemen und modernen Heizungsanlagen ermöglicht maßgeschneiderte Lösungen für jede Nordgas Therme.
            </p>
            <p>
              Unser Techniker Team arbeitet nach Herstellervorgaben und koordiniert jede Wartung, Reparatur oder Überprüfung sorgfältig vor Ort. Wir verwenden ausschließlich geprüfte Bauteile und Original Teilen vom Hersteller Nordgas, um Sicherheit, Qualität und langfristige Funktion zu gewährleisten. Als Installateur und offizieller Werkskundendienst stehen wir unseren Kunden zuverlässig zur Seite – ob im Herzen von Wien oder in NÖ und Niederösterreich.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1NordGas.png') }}" alt="Nordgas Fachbetrieb in Wien – Team vor Ort" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Für welche Nordgas Geräte & Systeme? -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Für welche Nordgas Geräte & Systeme?</h2>
            <p>
              <strong>Alle Nordgas Thermen im Überblick</strong><br>
              Unsere Nordgas Thermenwartung Wien umfasst sämtliche Nordgas Geräte im privaten und gewerblichen Bereich. Dazu zählen klassische Gastherme Modelle, moderne Thermen mit digitaler Steuerung sowie leistungsstarke Heizungsanlagen für Mehrparteienhäuser in Wien und Niederösterreich.
            </p>
            <p>
              Wir betreuen Gasgeräte, einzelne Heizkörper-Anbindungen und komplette Heizungssysteme inklusive Überprüfung der Bauteile. Als erfahrener Installateur prüfen wir Funktion, Sicherheit und Energieeffizienz jeder Nordgas Therme. Auch bei speziellen Anforderungen in NÖ oder Burgenland bieten wir passende Lösungen direkt vor Ort. Unser Techniker Team arbeitet herstellerkonform und sorgt dafür, dass alle Geräte langfristig zuverlässig im Betrieb bleiben.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Nordgas Geräte und Systeme – Übersicht" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen rund um Ihre Nordgas Therme (Grid) -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen rund um Ihre Nordgas Therme</h2>
        <p>Unsere Leistungen umfassen professionelle Nordgas Thermenwartung, Thermenservice, Reparatur, Austausch und umfassenden Kundendienst für alle Nordgas Thermen und Gastherme Modelle.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Nordgas Thermenwartung Wien</h3>
            <p>Die regelmäßige Nordgas Thermenwartung Wien erhöht Sicherheit, Energieeffizienz und Lebensdauer Ihrer Heizung. Durch gründliche Wartung, Reinigung und Überprüfung verhindern wir Schäden und teure Ausfällen nachhaltig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Nordgas Thermenservice & Kontrolle</h3>
            <p>Unser Thermenservice beinhaltet Abgasmessung, Kontrolle der Dichtheit, Entlüftung der Heizkörper sowie präzise Einstellungen und Nachjustierung aller relevanten Geräte und Gasgeräte.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Nordgas Kundendienst Wien</h3>
            <p>Als erfahrener Kundendienst in Wien bieten wir schnelle Hilfe bei Fragen, Störungen oder im Notfall. Unser Team ist per Telefon oder E Mail erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Nordgas Reparatur & Austausch</h3>
            <p>Bei Defekten führen unsere Techniker fachgerechte Reparatur durch und tauschen Verschleißteile oder Bauteile effizient aus. Schäden an Gastherme oder Heizung beheben wir direkt vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Nordgas Notdienst bei Störungen</h3>
            <p>Im Fall plötzlicher Störungen oder Ausfällen steht unser Nordgas Notdienst rund um die Uhr bereit. Schneller Einsatz in Wien, Niederösterreich und Burgenland garantiert Sicherheit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔄</div>
          <div>
            <h3>Thermentausch & moderne Lösungen</h3>
            <p>Wenn Ihre Nordgas Therme veraltet ist, beraten wir Sie zu Austausch, Alternative Geräten und energieeffizienten Lösungen für mehr Wohnkomfort und geringeren Gasverbrauch.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Nordgas Thermenwartung so wichtig ist -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum Nordgas Thermenwartung so wichtig ist</h2>
            <p>
              Eine regelmäßige Nordgas Thermenwartung ist entscheidend für den sicheren Betrieb Ihrer Nordgas Therme in Wien. Durch professionelle Wartung werden Gasgeräte, Gastherme und sämtliche Geräte gründlich überprüft, gereinigt und optimal eingestellt. Das reduziert Schäden, erhöht die Sicherheit und verhindert kostspielige Reparatur oder unerwartete Ausfällen.
            </p>
            <p>
              Unsere Techniker prüfen Verschmutzungsgrad, Dichtheit und Funktion aller Bauteile, führen Abgasmessung durch und optimieren Einstellungen für geringeren Gasverbrauch. Dadurch sparen Sie langfristig Geld, schonen Energie und verlängern die Lebensdauer Ihrer Heizung erheblich. Ein Wartungsvertrag bietet zusätzliche Möglichkeit, Kosten besser zu planen und Ihr Konto zu entlasten. So bleibt Ihr Zuhause in Wien dauerhaft warm und sicher.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geringerer Gasverbrauch</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Nordgas Thermenwartung – Sicherheit und Effizienz" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf der Nordgas Thermenwartung -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf der Nordgas Thermenwartung</h2>
            <p>
              <strong>So funktioniert unsere Wartung</strong><br>
              Die Nordgas Thermenwartung Wien beginnt mit einer Terminvereinbarung per Telefon oder E Mail. Danach erfolgt die strukturierte Überprüfung Ihrer Nordgas Therme direkt bei Ihnen zuhause in Wien.
            </p>
            <p>
              Unsere Techniker kontrollieren alle sicherheitsrelevanten Komponenten, prüfen Dichtheit, führen eine Abgasmessung durch und beurteilen den Verschmutzungsgrad der Geräte. Anschließend erfolgt die gründliche Reinigung, Nachjustierung wichtiger Einstellungen sowie die Kontrolle möglicher Verschleißteile.
            </p>
            <p>
              Zum Abschluss erhalten Kunden eine transparente Beratung zu Zustand, Lebensdauer und möglichen Reparatur Maßnahmen. Bei Bedarf organisieren wir sofortige Hilfe oder planen weitere Arbeiten. So stellen wir sicher, dass Ihre Heizung effizient arbeitet und langfristig Energie spart.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Terminvereinbarung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Gründliche Prüfung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Beratung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Ablauf der Nordgas Thermenwartung – Techniker bei der Arbeit" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nordgas Notdienst – jederzeit erreichbar (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Nordgas Notdienst – jederzeit erreichbar</h2>
        <p>
          Bei einem Notfall oder plötzlichen Ausfällen Ihrer Nordgas Therme steht unser Notdienst in Wien rund um die Uhr bereit. Unser Techniker Team ist schnell im Einsatz – auch in Niederösterreich und Burgenland.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Gerade bei Störungen der Gastherme oder Problemen mit Gasgeräten ist rasche Hilfe entscheidend für Sicherheit und Wohnkomfort. Unser Kundendienst reagiert sofort und sorgt für eine zuverlässige Reparatur direkt vor Ort. Sie erreichen uns jederzeit telefonisch über unsere Telefon­nummer – wir lassen Sie im Ernstfall nicht allein.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Ausfall der Gastherme / Heizung</li>
            <li>Gasgeruch oder akute Schäden</li>
            <li>Störungen, Fehlermeldungen, Probleme im Betrieb</li>
            <li>Notfall in kalter Jahreszeit</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr im Einsatz – Wien, Niederösterreich, NÖ und Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise, Kosten & Transparenz -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Kosten & Transparenz</h2>
            <p>
              Die Nordgas Thermenwartung Wien bieten wir zu transparenten Preisen an. Sämtliche Kosten werden klar kommuniziert, inklusive MwSt und ohne versteckte Gebühren.
            </p>
            <p>
              Ob einfache Wartung, umfassender Thermenservice oder Reparatur – wir informieren Sie vorab über alle anfallenden Kosten. Durch regelmäßige Wartung vermeiden Sie hohe Folgekosten, schützen Ihre Geräte vor Schäden und sparen langfristig viel Geld. Ein optionaler Wartungsvertrag sorgt zusätzlich für Planungssicherheit und gleichbleibende Qualität.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Transparente Preise für Nordgas Service" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ihr Nordgas Partner in Wien (vorher Region) -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Nordgas Partner in Wien</h2>
            <p>
              Als spezialisierter Fachbetrieb für Nordgas Thermenwartung Wien stehen wir für Kompetenz, Erfahrung und nachhaltige Lösungen. Unsere Experten und Techniker arbeiten nach strengen Hersteller-Vorgaben und garantieren höchste Qualität bei jedem Einsatz.
            </p>
            <p>
              Wir betreuen Kunden persönlich – vom ersten Telefon Kontakt bis zur laufenden Wartung Ihrer Nordgas Therme. Ob in Wien, Niederösterreich oder Burgenland: Unser Team sorgt für sicheren Betrieb, optimale Funktion und maximale Lebensdauer Ihrer Heizung.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kompetenz & Erfahrung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hersteller-Vorgaben</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Persönliche Betreuung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Nordgas Partner in Wien – Techniker Team" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Nordgas Thermenwartung</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wie oft sollte eine Nordgas Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Nordgas Thermenwartung wird empfohlen, um Sicherheit, Funktion und Energieeffizienz dauerhaft sicherzustellen.</p>
        </details>

        <details>
          <summary>2. Gibt es gesetzliche Vorgaben für Thermen in Wien?</summary>
          <p>Direkte Verpflichtungen variieren, dennoch schreiben viele Vorschriften regelmäßige Überprüfung und Wartung von Gasgeräten vor.</p>
        </details>

        <details>
          <summary>3. Wann ist eine Reparatur sinnvoll?</summary>
          <p>Bei wiederkehrenden Störungen, ungewöhnlichem Gasverbrauch oder sichtbaren Schäden sollte rasch eine Reparatur erfolgen.</p>
        </details>

        <details>
          <summary>4. Was tun im Notfall?</summary>
          <p>Kontaktieren Sie sofort unseren Notdienst per Telefon. Unser Techniker Team ist im Fall eines Problems schnell im Einsatz.</p>
        </details>

        <details>
          <summary>5. Lohnt sich ein Wartungsvertrag?</summary>
          <p>Ja, ein Wartungsvertrag reduziert Kosten, verlängert die Lebensdauer und bietet langfristige Sicherheit für Ihre Nordgas Therme.</p>
        </details>

        <details>
          <summary>6. Werden auch andere Marken betreut?</summary>
          <p>Neben Nordgas betreuen wir auf Anfrage auch andere Marken und Hersteller von Thermen und Heizungsanlagen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT / Jetzt Nordgas Thermenwartung Wien sichern -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

@endsection