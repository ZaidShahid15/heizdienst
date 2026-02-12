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

  /* Quick tabs */
  .service-quicktabs{padding:10px 0 20px}
  .service-tabs{
    display:flex; gap:10px; flex-wrap:wrap;
    padding:10px;
    border:1px solid var(--line);
    border-radius:19px;
    background:#fff;
    justify-content: space-between;
  }
  .service-tab{
    padding:10px 12px;
    border-radius:999px;
    font-weight:800;
    color:var(--ink);
    border:1px solid transparent;
  }
  .service-tab:hover{border-color:var(--line); background:rgba(24,64,72,.05)}

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

  .service-stats{display:flex; gap:10px; flex-wrap:wrap; margin-top:14px;}
  .service-stat{
    display:flex; align-items:center; gap:10px;
    padding:10px 12px;
    border-radius:999px;
    background:rgba(24,64,72,.06);
    border:1px solid var(--line);
  }
  .service-stat__num{font-weight:900; color:var(--ink)}
  .service-stat__label{font-weight:800}

  .service-checklist{margin:0; padding-left:18px}
  .service-checklist li{margin:8px 0}

  /* ====== IMAGE BOX (UPDATED: image equals content height) ====== */
  .service-media{width:100%; height:100%;}
  .service-media__box{
    width:100%;
    height:100%;
    min-height:320px;
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
  .service-panel h3{margin:0 0 10px; color:#fff;}
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

  /* CTA / Contact form */
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

  /* HERO (wolf) - keep as-is */
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
    position:absolute; inset:0;
    background-image:url("img/hero-scetion.jpeg");
    background-size:cover;
    background-position:left center;
    transform:scale(1.02);
    z-index:0;
  }
  .wolf-hero::after{
    content:"";
    position:absolute; inset:0;
    background:rgba(0,0,0,.55);
    z-index:1;
  }
  .wolf-hero__inner{position:relative; z-index:2; max-width:900px; margin-top:40px;}
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
    line-height: 1.08;
    font-weight: 800;
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
  .wolf-btn--ghost{background:rgba(255,255,255,.08); border-color:rgba(255,255,255,.28); color:#fff;}
  .wolf-btn--ghost:hover, .wolf-btn--accent:hover{transform:translateY(-1px);}

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

  /* Promo banner (kept minimal, but fixed positioning) */
  .promo-banner{margin-top:22px}
  .promo-banner__inner{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    border:1px solid rgba(255,255,255,.18);
    background:rgba(255,255,255,.06);
    padding:16px;
  }
  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
    opacity:.55;
  }
  .promo-banner__content{
    position:relative;
    z-index:1;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .promo-banner__title{margin:0; color:#fff; font-size:20px}
  .promo-banner__price{margin:0; color:#fff; font-size:18px}
  .promo-banner__btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:12px 16px;
    border-radius:999px;
    background:var(--accent);
    color:#1a1a1a;
    font-weight:900;
  }

  /* ====== TOC (ADDED + placed after hero) ====== */
  .toc-wrap{padding:14px 0 6px; background:#fff;}
  .toc-card{
    border:1px solid var(--line);
    border-radius:var(--radius2);
    background:#fff;
    box-shadow:0 10px 28px rgba(0,0,0,.06);
    overflow:hidden;
  }
  .toc-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    padding:12px 14px;
    background:linear-gradient(0deg, rgba(24,64,72,.05), #fff);
  }
  .toc-head h4{
    margin:0;
    color:var(--ink);
    font-weight:900;
    letter-spacing:-.01em;
  }
  .toc-iconbtn{
    width:40px;
    height:40px;
    display:grid;
    place-items:center;
    border-radius:12px;
    border:1px solid var(--line);
    background:#fff;
    cursor:pointer;
    transition:.16s ease;
  }
  .toc-iconbtn:hover{transform:translateY(-1px); box-shadow:0 10px 24px rgba(0,0,0,.08)}
  .toc-iconbtn svg{width:18px; height:18px; fill:var(--ink); transition:.18s ease}
  .toc-body{padding:10px 14px 14px}
  .toc-body.is-collapsed{display:none;}
  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap:8px 10px;
  }
  .toc-item a{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 10px;
    border-radius:14px;
    border:1px solid transparent;
    background:rgba(24,64,72,.03);
    transition:.16s ease;
  }
  .toc-item a:hover{
    border-color:var(--line);
    background:rgba(24,64,72,.06);
    transform:translateY(-1px);
  }
  .toc-badge{
    width:34px;
    height:34px;
    border-radius:12px;
    display:grid;
    place-items:center;
    font-weight:900;
    color:var(--ink);
    background:rgba(251,154,27,.20);
    border:1px solid rgba(251,154,27,.35);
    flex:0 0 auto;
  }
  .toc-text{font-weight:900; color:var(--ink);}

  /* Card split (UPDATED: stretch + image equals content height) */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch;
  }
  .card-split__text,
  .card-split__media{height:100%;}
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}
  .card-box{
    background:#fff;
    border:1px solid var(--line);
    border-radius:var(--radius2);
    padding:18px;
    height:100%;
  }

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns: 1fr}
    .service-emergency{grid-template-columns: 1fr}
    .service-cta__inner{grid-template-columns: 1fr}
    .service-formrow{grid-template-columns: 1fr}
    .service-media__box{min-height:220px;}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .toc-list{grid-template-columns:1fr;}
  }
</style>

@push('meta')
  <title>Vaillant Notdienst Wien – 24h Kundendienst, Reparatur & Service</title>
  <meta name="description" content="Zuverlässiger Vaillant Notdienst Wien ✔ Rund um die Uhr erreichbar ✔ Kundendienst, Reparatur, Wartung & Thermenservice in Wien & Niederösterreich inkl. MwSt.">
@endpush

<main>
  <!-- HERO (KEEP AS-IS) -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">rund um die uhr erreichbar</p>

      <h1>
        Vaillant Notdienst Wien 24/7<br>
        <em>rund um die uhr erreichbar</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Ausfall oder kalter Heizung: Ihr Vaillant Notdienst Wien ist sofort für Sie da.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant1-1.jpg') }}" alt="Vaillant Kundendienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Service</span>
        <span class="wolf-pill">Wartung</span>
        <span class="wolf-pill">Reparatur &amp; Ersatzteile</span>
        <span class="wolf-pill">Notdienst</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Vaillant Kundendienst Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
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
          <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Service</span></a></li>
          <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Team</span></a></li>
          <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
          <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Wartung</span></a></li>
          <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparaturen</span></a></li>
          <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
          <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Kosten</span></a></li>
          <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Region</span></a></li>
          <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
          <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


  <!-- Quick tabs (kept) -->
  <section class="service-quicktabs" id="quicktabs-services">
    <div class="service-container">
      <div class="service-tabs">
        <a class="service-tab" href="#notdienst24-services">24/7</a>
        <a class="service-tab" href="#kundendienst-services">Kundendienst</a>
        <a class="service-tab" href="#notdienst-services">Notdienst</a>
        <a class="service-tab" href="#wartung-services">Wartung</a>
        <a class="service-tab" href="#leistungen-services">Leistungen</a>
        <a class="service-tab" href="#preise-services">Preise</a>
        <a class="service-tab" href="#gebiet-services">Einsatzgebiet</a>
        <a class="service-tab" href="#sicherheit-services">Sicherheit</a>
        <a class="service-tab" href="#vertrauen-services">Vertrauen</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- 1) Vaillant Notdienst Wien 24/7 (benefits) -->
  <section class="service-section service-section--soft" id="notdienst24-services">
    <div class="service-container">
      <div class="card-split mb-5">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Notdienst Wien 24/7</h2>
            <p>
              Schnelle Hilfe bei Störungen, Ausfall oder kalter Heizung: Ihr Vaillant Notdienst Wien ist sofort für Sie da.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/viliant.jpeg') }}" alt="Vaillant Kundendienst Wien für Zuhause" loading="lazy" decoding="async">
          </div>
        </div>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Rund um die Uhr erreichbar</h3>
            <p>Auch außerhalb der Geschäftszeiten – nachts, am Wochenende und an Feiertagen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚗</div>
          <div>
            <h3>Schnell am Ort</h3>
            <p>Kundendienst Techniker sind in Wien und Umgebung kurzfristig einsatzbereit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Transparente Preise inkl. MwSt</h3>
            <p>Klare Abrechnung – auf Wunsch vorab mit Angebot für Reparatur, Wartung oder Thermentausch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Alles aus einer Hand</h3>
            <p>Reparatur, Wartung, Thermenwartung und Ersatzteile – effizient organisiert.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 2) Kundendienst für Zuhause -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Kundendienst Wien für Zuhause</h2>
            <p>
              Wenn Ihre Vaillant Therme streikt, Warmwasser fehlt oder die Heizung nicht mehr startet, zählt eine klare Lösung.
              Unser Kundendienst unterstützt privat und im Betrieb – zuverlässig, strukturiert und mit Blick auf Sicherheit und Komfort.
            </p>
            <p>
              Als Installateur-Service arbeiten wir mit erfahrenem Fachpersonal, geschulten Technikern und Experten.
              Wir prüfen Geräte, erkennen Ursachen von Störungen früh und setzen Reparatur oder Wartung fachgerecht um.
            </p>

            <p style="margin-top:10px; font-weight:900; color:var(--ink);">Darauf können Sie sich verlassen:</p>
            <ul class="service-checklist">
              <li>Persönliches Team mit festen Ansprechpartnern</li>
              <li>Saubere Arbeit vor Ort, klare Schritte, verständliche Infos</li>
              <li>Service für Gasgeräte, Gastherme und moderne Vaillant Produkte</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-2.jpg') }}" alt="Vaillant Kundendienst Wien für Zuhause" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3) Notdienst + typische Notfälle (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst für Vaillant Therme</h2>
        <p>
          Ein Notfall kommt selten passend: Wenn die Gastherme ausfällt, ungewöhnliche Geräusche auftreten oder der Druck abfällt,
          ist unser Notdienst in Wien sofort zur Verfügung. Wir reagieren rasch und kümmern uns um eine sichere Wiederherstellung.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Im akuten Fall zählt Kompetenz: Unsere Kundendienst Techniker prüfen Gasgeräte, Ventile und Abgaswerte sorgfältig,
          damit Risiken reduziert werden – 365 Tage im Jahr.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>

        <div style="margin-top:14px;">
          <p style="margin:0 0 6px; font-weight:900; color:#fff;">Schnelle Hilfe am Ort</p>
          <p style="margin:0; color:rgba(255,255,255,.9);">
            Wir priorisieren Notfälle, planen Anfahrt und Ersatzteile effizient und sind rasch am Ort – ohne unnötige Verzögerung.
          </p>

          <p style="margin:12px 0 6px; font-weight:900; color:#fff;">Rundum Service für Kunden</p>
          <p style="margin:0; color:rgba(255,255,255,.9);">
            Erstprüfung, sichere Übergangslösung und – wenn möglich – sofortige Reparatur. Sie erhalten klare Infos zu nächsten Schritten.
          </p>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Heizungsausfall, kein Warmwasser, kompletter Ausfall der Therme</li>
            <li>Wiederkehrende Störungen, Fehlercodes, Druckverlust, Zündprobleme</li>
            <li>Sicherheitsrelevante Auffälligkeiten an Vaillant Gasgeräte(n)</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Wien & Niederösterreich – schnelle Hilfe direkt am Ort.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4) Reparatur, Wartung und Thermenwartung -->
  <section class="service-section" id="wartung-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Wartung und Thermenwartung</h2>
            <p>
              Regelmäßige Thermenwartung ist der beste Schutz vor Störungen und teurem Ausfall.
              Unsere Wartung folgt einem strukturierten Ablauf: Sichtprüfung, Reinigung, Einstellungen, Sicherheitscheck und Funktionskontrolle.
            </p>
            <p>
              Das senkt Verbrauch, verbessert den Komfort und unterstützt Garantie sowie Gewährleistung,
              weil Wartungsintervalle eingehalten werden. Bei Reparaturen dokumentieren wir nachvollziehbar, was gemacht wurde.
            </p>

            <p style="margin-top:10px; font-weight:900; color:var(--ink);">Unsere Leistungen im Überblick:</p>
            <ul class="service-checklist">
              <li>Wartung, Thermenwartung und Service für Vaillant Geräte</li>
              <li>Reparatur bei Störungen, Ausfall, Fehlermeldungen und Druckproblemen</li>
              <li>Ersatzteile, Einstellungen, Sicherheitsprüfung und Inbetriebnahme</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Wartung & Thermenwartung Vaillant" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5) Leistungen (grid) -->
  <section class="service-section service-section--soft" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Service, Wartung & Reparatur</h2>
        <p>Wir verbinden schnelle Hilfe mit sauberer Arbeit – für Therme, Gastherme und Vaillant Gasgeräte.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧪</div>
          <div>
            <h3>Sichtprüfung & Messwerte</h3>
            <p>Kontrolle von Abgaswerten, Komponenten und Funktionen – für mehr Sicherheit im Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Reinigung & Einstellungen</h3>
            <p>Reinigung, Feinjustierung und Optimierung – für effizienteren Verbrauch und stabilen Komfort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur bei Störungen</h3>
            <p>Fehlercodes, Druckverlust, Zündprobleme: Wir analysieren Ursachen und beheben sie fachgerecht.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔩</div>
          <div>
            <h3>Ersatzteile & Inbetriebnahme</h3>
            <p>Geprüfte Ersatzteile, Austausch und sichere Inbetriebnahme – nachvollziehbar dokumentiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & Einbau</h3>
            <p>Wenn ein Tausch sinnvoller ist, beraten wir transparent zu Alternative, Einbau und passenden Geräten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📋</div>
          <div>
            <h3>Klare Schritte</h3>
            <p>Sie erhalten verständliche Infos zu nächsten Schritten, Terminen und Kosten – ohne Überraschungen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 6) Preise, Angebot und MwSt -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Angebot und MwSt</h2>
            <p>
              Faire Preise und transparente Abrechnung sind selbstverständlich. Vor Beginn informieren wir klar über Umfang,
              mögliche Ersatzteile und die anfallende MwSt.
            </p>
            <p>
              Auf Wunsch erhalten Kunden ein verbindliches Angebot – abgestimmt auf Reparatur, Wartung oder Thermentausch.
              Durch effiziente Planung und gut ausgestattete Fahrzeuge vermeiden wir unnötige Zusatzkosten.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">inkl. MwSt</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">auf Wunsch Angebot</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">klare Abrechnung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Preise & MwSt Vaillant Notdienst" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7) Einsatzgebiet -->
  <section class="service-section service-section--soft" id="gebiet-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiet Wien und Niederösterreich</h2>
            <p>
              Wir betreuen ganz Wien sowie Niederösterreich zuverlässig. Kurze Anfahrten, klare Routenplanung und realistische Zeitfenster
              sorgen für schnelle Hilfe am Ort.
            </p>
            <p>
              Auch bei Wegzeit Niederösterreich kalkulieren wir transparent und fair. Ob Wohnung, Haus oder Betrieb –
              unser Team ist flexibel, damit Heizung und Warmwasser rasch wieder funktionieren.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size1.jpeg') }}" alt="Einsatzgebiet Wien & Niederösterreich" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8) Garantie / Gewährleistung / Sicherheit -->
  <section class="service-section" id="sicherheit-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Garantie, Gewährleistung und Sicherheit</h2>
        <p>Fachgerechte Arbeit nach Herstellervorgaben schützt Ihre Sicherheit und erhält Garantie sowie Gewährleistung.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Herstellervorgaben</h3>
            <p>Unsere Techniker arbeiten nach Vorgaben und setzen auf geprüfte Vaillant Produkte.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧯</div>
          <div>
            <h3>Präzision bei Gasgeräten</h3>
            <p>Wir prüfen alle relevanten Punkte sorgfältig und erklären verständlich – Sicherheit steht an erster Stelle.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Dokumentierte Abläufe</h3>
            <p>Regelmäßige Wartung, saubere Reparaturen und klare Dokumentation geben langfristige Sicherheit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Längeres Geräteleben</h3>
            <p>Durch fachgerechte Arbeit bleibt das Geräteleben Ihrer Therme erhalten und Risiken werden minimiert.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 9) Warum Kunden vertrauen -->
  <section class="service-section service-section--soft" id="vertrauen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum Kunden uns vertrauen</h2>
        <p>Als Vaillant Fachpartner verbinden wir technische Kompetenz mit persönlichem Service – zuverlässig und nachhaltig.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">👨‍🔧</div>
          <div>
            <h3>Qualifiziertes Team</h3>
            <p>Erfahrene Mitarbeiter und echte Experten, die Verantwortung übernehmen und lösungsorientiert handeln.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">💬</div>
          <div>
            <h3>Klare Kommunikation</h3>
            <p>Strukturierte Abläufe, verständliche Infos und ehrliche Empfehlungen – ohne Druck.</p>
          </div>
        </article>
      </div>

      <div style="margin-top:14px;">
        <p style="margin:0 0 8px; font-weight:900; color:var(--ink);">Ihre Vorteile auf einen Blick:</p>
        <ul class="service-checklist">
          <li>Erreichbar rund um die Uhr, auch außerhalb der Geschäftszeiten</li>
          <li>Schnelle Terminvergabe und kurze Reaktionszeiten</li>
          <li>Service, Wartung, Reparatur und Einbau aus einer Hand</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 10) FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Kundendienst kontaktieren?</summary>
          <p>Wenn Therme, Gastherme oder Heizung nicht richtig funktioniert. In Wien steht unser Notdienst schnell zur Verfügung, um eine sichere Lösung zu finden.</p>
        </details>

        <details>
          <summary>2. Gibt es einen Notdienst für Vaillant in Wien?</summary>
          <p>Ja, unser Notdienst für Vaillant ist in Wien rund um die Uhr erreichbar. Der Vaillant Kundendienst hilft bei Störungen, Ausfall oder akuten Problemen.</p>
        </details>

        <details>
          <summary>3. Welche Vaillant Gasgeräte werden betreut?</summary>
          <p>Wir servicieren alle Vaillant Gasgeräte und Vaillant Geräte – neue und ältere Modelle – fachgerecht und zuverlässig.</p>
        </details>

        <details>
          <summary>4. Wie schnell ist der Notdienst vor Ort?</summary>
          <p>Unser Notdienst ist in Wien meist rasch beim Kunden. Ein erfahrener Installateur analysiert das Problem direkt und leitet alles Weitere ein.</p>
        </details>

        <details>
          <summary>5. Bieten Sie auch Thermenwartung an?</summary>
          <p>Ja, neben dem Notdienst übernehmen wir Wartung für Therme und Gastherme, um Ausfälle zu vermeiden und die Heizung effizient zu halten.</p>
        </details>

        <details>
          <summary>6. Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Ein Thermentausch ist sinnvoll bei häufigen Störungen oder hohem Verbrauch. Wir beraten transparent zu Tausch, Preisen und passenden Vaillant Geräten.</p>
        </details>

        <details>
          <summary>7. Sind Preise und MwSt transparent?</summary>
          <p>Ja, unsere Preise sind klar strukturiert und die MwSt ist immer ausgewiesen. Vor Beginn erklären wir alles, damit Sie Sicherheit haben.</p>
        </details>

        <details>
          <summary>8. Arbeitet der Vaillant Kundendienst auch nachts?</summary>
          <p>Ja, als Notdienst sind wir rund um die Uhr erreichbar – auch nachts, am Wochenende und an Feiertagen in Wien.</p>
        </details>

        <details>
          <summary>9. Wird auch bei Heizungsproblemen geholfen?</summary>
          <p>Ja, wir unterstützen bei Problemen mit Heizung, Therme und Gastherme. Ziel ist immer eine sichere und schnelle Lösung.</p>
        </details>

        <details>
          <summary>10. Warum einen Fachbetrieb in Wien wählen?</summary>
          <p>Ein lokaler Kundendienst kennt die Anlagen vor Ort, reagiert schneller und bietet zuverlässige Lösungen mit fairen Preisen und korrekter MwSt.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 11) Contact -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt und schnelle Terminvergabe</h2>
        <p>
          Bei Fragen, Störungen oder im Notfall erreichen Sie unseren Vaillant Notdienst jederzeit.
          Über den Kontakt auf dieser Seite oder telefonisch koordinieren wir Termine schnell und unkompliziert.
        </p>
        <p style="margin-top:10px;">
          Unsere Mitarbeiter nehmen Ihr Problem ernst, klären Details und sorgen für rasche Hilfe –
          kompetent, freundlich und effizient.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">24/7 erreichbar</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien & NÖ</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">inkl. MwSt</div></div>
        </div>
      </div>

      <form class="service-cta__form" action="#" method="post">
        @csrf
        <div class="service-formrow">
          <label>
            <span>Name</span>
            <input type="text" name="name" placeholder="Ihr Name" required>
          </label>
          <label>
            <span>Telefon</span>
            <input type="tel" name="phone" placeholder="+43 ..." required>
          </label>
        </div>

        <label style="margin-top:10px;">
          <span>Nachricht</span>
          <textarea name="message" rows="4" placeholder="Thermenmodell, Problem, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>
</main>


@endsection
