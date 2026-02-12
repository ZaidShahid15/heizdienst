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

  /* Buttons */
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

  /* =========================
     HERO (same as yours)
     ========================= */
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
  .wolf-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: url("img/hero-scetion.jpeg");
    background-size: cover;
    background-position: left center;
    transform: scale(1.02);
    z-index: 0;
  }
  .wolf-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, .55);
    z-index: 1;
  }
  .wolf-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin-top: 40px;
  }
  .wolf-hero h1 {
    margin: 0 0 10px;
    font-size: clamp(32px, 3.5vw, 54px);
    line-height: 1.08;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.02em;
  }
  .wolf-hero h1 em { font-style: italic; font-weight: 800; }
  .wolf-hero__sub {
    margin: 0 auto 48px;
    max-width: 780px;
    font-size: 16px;
    color: rgba(255, 255, 255, .9);
  }
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
    padding: 15px 28px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 14px;
    border: 1px solid transparent;
    transition: .15s ease;
  }
  .wolf-btn--red {
    background: var(--accent);
    color: #1a1a1a;
  }
  .wolf-btn--red:hover { transform: translateY(-1px); }
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
  .service-kicker{
    display:inline-flex;
    padding:6px 10px;
    border-radius:999px;
    background:rgba(255,255,255,.10);
    border:1px solid rgba(255,255,255,.18);
    font-weight:800;
    color:#fff;
    margin:0 0 12px;
  }

  /* Diagonal bottom */
  .wolf-hero .wolf-hero__inner::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -120px;
    width: 303vw;
    height: 2100px;
    background: linear-gradient(90deg, rgba(10, 66, 75, 0.92));
    clip-path: polygon(0 40%, 100% 0, 100% 100%, 0 100%);
    z-index: -1;
    opacity: .9;
  }

  /* Promo banner bg image (yours) */
  .promo-banner__inner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index: 0;
  }

  /* =========================
     ✅ TOC like screenshot
     ========================= */
  .toc-wrap{
    padding:16px 0 0;
    background:#fff;
  }
  .toc-card{
    width:100%;
    background:#fff;
    border:1px solid rgba(24,64,72,.18);
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 18px 50px rgba(0,0,0,.12);
  }
  .toc-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    padding:12px 14px;
    background:linear-gradient(0deg, #f7fbfb, #fff);
    border-bottom:1px solid rgba(24,64,72,.12);
    cursor:pointer;
  }
  .toc-head h4{
    margin:0;
    font-size:15px;
    font-weight:900;
    color:var(--ink);
  }
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
  .toc-iconbtn svg{width:16px; height:16px; fill:var(--ink); opacity:.9; transition: transform .18s ease;}

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

  /* row style like screenshot */
  .toc-link{
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 14px;
    border-radius:14px;
    border:1px solid rgba(24,64,72,.12);
    background:#fff;
    transition:.15s ease;
  }
  .toc-link:hover{background:#f2f7f7; border-color:rgba(24,64,72,.18);}
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
  .toc-text{
    font-weight:900;
    color:#0f3a40;
    font-size:14px;
    line-height:1.2;
  }

  /* collapsed */
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 12px;
    overflow:hidden;
  }

  /* =========================
     Sections (your existing)
     ========================= */
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
  .service-grid--3{grid-template-columns: repeat(3, 1fr)}
  .service-grid--2{grid-template-columns: repeat(2, 1fr)}

  .service-card{
    background:#fff;
    border:1px solid var(--line);
    border-radius: var(--radius);
    padding:16px;
  }
  .service-card--service h3{margin:0 0 8px; color:var(--ink)}
  .service-card--service p{margin:0 0 10px}

  .service-checklist{margin:0 0 14px; padding-left:18px}
  .service-checklist li{margin:8px 0}
  .service-checklist--on-dark{color:rgba(255,255,255,.92)}
  .service-checklist--on-dark li{margin:10px 0}

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

  .service-split{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:18px;
    align-items:center;
  }
  .service-split--reverse .service-split__text{order:2}
  .service-split--reverse .service-split__media{order:1}

  .service-media__box{
    width:100%;
    height:367px;
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

  .service-chips{display:flex; flex-wrap:wrap; gap:10px}
  .service-chip{
    padding:10px 12px;
    border-radius:999px;
    background:#fff;
    border:1px solid var(--line);
    font-weight:800;
  }

  .service-steps{margin:0; padding-left:18px;}
  .service-steps li{margin:12px 0}
  .service-steps strong{display:block; color:var(--ink)}
  .service-steps span{display:block}

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

  .service-pricecard{
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding:16px;
    background:#fff;
  }
  .service-pricecard h3{margin:0 0 6px; color:var(--ink)}
  .service-pricecard p{margin:0}

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
  .service-formrow{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:10px;
  }
  textarea{resize:vertical}
  .service-fineprint{margin:10px 0 0; font-size:.9rem; opacity:.8}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--3{grid-template-columns: 1fr}
    .service-grid--2{grid-template-columns: 1fr}
    .service-split{grid-template-columns: 1fr}
    .service-split--reverse .service-split__text{order:1}
    .service-split--reverse .service-split__media{order:2}
    .service-emergency{grid-template-columns: 1fr}
    .service-cta__inner{grid-template-columns: 1fr}
    .service-formrow{grid-template-columns: 1fr}
    .wolf-hero { padding: 120px 14px 86px; min-height: 480px; }
    .wolf-hero__sub { font-size: 14px }
  }
</style>

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">

      <p class="service-kicker">Zertifizierter Fachbetrieb • Wien & Umgebung</p>

      <h1>
        Baxi Thermenwartung Wien<br>
        <em>Rund um die Uhr Service vom Fachbetrieb.</em>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1baxi.jpeg') }}" alt="Baxi Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Baxi Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Baxi Therme,
        Thermenservice, Reparatur und Notdienst in Wien und Umgebung.
      </p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--red" href="#kontakt-services">Jetzt Termin vereinbaren</a>
        <a class="wolf-btn wolf-btn--red" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Baxi Thermenwartung Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              <span class="promo-banner__btn-ico"></span>
              AKTION
            </a>
          </div>
        </div>
      </section>

    </div>
  </section>

  <!-- ✅ TOC EXACT LIKE IMAGE -->
<section class="toc-wrap" aria-label="Inhaltsverzeichnis">
  <div class="service-container">
    <!-- ✅ collapsed by default -->
    <div class="toc-card is-collapsed" id="tocCard">

      <!-- ✅ aria-expanded false by default -->
      <div class="toc-head"
           id="tocHead"
           role="button"
           tabindex="0"
           aria-controls="tocBody"
           aria-expanded="false">

        <h4 id="tocTitle">Inhaltsverzeichnis</h4>

        <div class="toc-actions">
          <!-- ✅ aria-expanded false by default -->
          <button class="toc-iconbtn"
                  type="button"
                  id="tocToggle"
                  aria-expanded="false"
                  aria-controls="tocBody"
                  aria-label="Inhaltsverzeichnis umschalten">
            <svg id="tocChevron" viewBox="0 0 448 512" aria-hidden="true">
              <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg>
          </button>
        </div>
      </div>

      <div class="toc-body" id="tocBody">
        <ul class="toc-list" id="tocList">
          <!-- ✅ keep short labels, JS will auto-replace with section H2 text -->
          <li class="toc-item">
            <a href="#vorteile-services" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Service</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#partner-services" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Fachbetrieb</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#leistungen-services" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Leistungen</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#warum-services" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Wartung</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#geraete-services" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Geräte</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#ablauf-services" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Ablauf</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#notdienst-services" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Notdienst</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#preise-services" class="toc-link">
              <span class="toc-badge">08</span><span class="toc-text">Kosten</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#faq-services" class="toc-link">
              <span class="toc-badge">09</span><span class="toc-text">FAQ</span>
            </a>
          </li>

          <li class="toc-item">
            <a href="#kontakt-services" class="toc-link">
              <span class="toc-badge">10</span><span class="toc-text">Kontakt</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ihre Vorteile</h2>
        <p>Rund um die Uhr erreichbar. Transparent. Zuverlässig in Wien & Umgebung.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Wartung, Reparatur & Notdienst</h3>
          <p>Komplettservice für Ihre Baxi Therme – Wartung, Reparatur und Hilfe bei Notfällen.</p>
          <ul class="service-checklist">
            <li>Baxi Thermenwartung</li>
            <li>Thermenservice & Reparatur</li>
            <li>Notdienst bei Ausfall</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>24/7 Service</h3>
          <p>Rund um die Uhr erreichbar – unabhängig von Uhrzeit, Wochentag oder Saison.</p>
          <ul class="service-checklist">
            <li>Schnelle Reaktion</li>
            <li>Hilfe bei Kälte & fehlendem Warmwasser</li>
            <li>Rasch vor Ort</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Faire Preise inkl. MwSt</h3>
          <p>Klare Kosten, verständlich erklärt – zusätzliche Arbeiten nur nach Rücksprache.</p>
          <ul class="service-checklist">
            <li>Transparente Wartungskosten</li>
            <li>Ersatzteile vorab besprochen</li>
            <li>Keine versteckten Gebühren</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Partner -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Baxi Partner in Wien & Umgebung</h2>
        <p>
          Als zuverlässiger Partner für Baxi Thermenwartung, Thermenwartung Wien und Baxi Thermenservice betreuen wir unsere Kunden
          mit Erfahrung, Know-how und höchster Qualität. Unser Installateurbetrieb steht für professionelle Leistungen,
          schnelle Termine und persönliche Betreuung durch geschulte Experten.
        </p>
        <p style="margin-top:10px;">
          Wir arbeiten nach Herstellerrichtlinie, mit modernen Geräten, originalen Komponenten und einem eigenen Ersatzteillager.
          Als erfahrener Installateur, Fachmann und Baxi Kundendienst sind wir in Wien, NÖ und der gesamten Umgebung im Einsatz –
          zuverlässig, sicher und effizient.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Originale Komponenten</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Ersatzteillager</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Wien & NÖ</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/baxi.jpeg') }}" alt="Baxi Partner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Baxi Therme</h2>
        <p>Wartung, Thermenservice, Reparatur, Notdienst & Thermentausch – professionell aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Baxi Thermenwartung</h3>
            <p>Optimale Heizleistung, geringere Energiekosten und ein sicherer Betrieb – Störungen und Ausfälle werden gezielt vermieden.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Baxi Thermenservice</h3>
            <p>Überprüfung, Reinigung, Einstellung und Optimierung inkl. Wärmetauscher, Brennraum, Abgaswerte und Sicherheitsbauteile.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Baxi Kundendienst Wien</h3>
            <p>Ihr Ansprechpartner bei Fragen und dringenden Anliegen – schnell, zuverlässig und lösungsorientiert, auch kurzfristig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Baxi Thermenreparatur</h3>
            <p>Fachgerechte Reparatur und Austausch defekter Komponenten – minimiert Kosten, vermeidet Folgeschäden und stellt Betrieb rasch wieder her.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Thermenstörung & Notfälle</h3>
            <p>Bei Störungen, Ausfällen oder Notfällen sind wir 24/7 erreichbar – schnell vor Ort in Wien, NÖ und Umgebung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & neue Geräte</h3>
            <p>Planung, Montage, Installation und Inbetriebnahme moderner Brennwertgerät-Lösungen – professionell umgesetzt.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Warum eine Baxi Thermenwartung unverzichtbar ist</h2>
        <p>
          Eine regelmäßige Baxi Thermenwartung Wien ist entscheidend für die Sicherheit, Effizienz und Zuverlässigkeit Ihrer Heizung.
          Durch professionelle Instandhaltung reduzieren Sie das Risiko von Störungen, senken Folgekosten und steigern den täglichen Komfort.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Mehr Sicherheit</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">↓</div>
            <div class="service-stat__label">Weniger Energiekosten</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">⏱</div>
            <div class="service-stat__label">Weniger Ausfälle</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Warum Baxi Thermenwartung wichtig ist" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für welche Geräte & Systeme?</h2>
        <p>Wir warten alle Baxi Geräte – privat und gewerblich, zuverlässig und richtlinienkonform.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Baxi Gastherme</span>
        <span class="service-chip">Baxi Thermen</span>
        <span class="service-chip">Brennwertgerät</span>
        <span class="service-chip">Luna Duo Tec</span>
        <span class="service-chip">Kombitherme</span>
        <span class="service-chip">Gasgeräte</span>
        <span class="service-chip">Warmwasser</span>
        <span class="service-chip">Heizung</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Als zertifizierter Fachbetrieb arbeiten wir strikt nach geltender Richtlinie. Unsere Techniker verfügen über aktuelles Know-how
          und sorgen dafür, dass Ihre Geräte zuverlässig, sicher und leistungsstark betrieben werden – in Wien, NÖ und der gesamten Umgebung.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>So läuft die Thermenwartung ab</h2>
        <ol class="service-steps">
          <li>
            <strong>Terminvereinbarung & Planung</strong>
            <span>Individuelle Planung passend zu Ihrer Therme und Ihrem Bedarf.</span>
          </li>
          <li>
            <strong>Überprüfung & Sicherheitscheck</strong>
            <span>Gründliche Überprüfung inklusive Sicherheits- und Funktionscheck.</span>
          </li>
          <li>
            <strong>Reinigung & Kontrolle</strong>
            <span>Reinigung, Kontrolle des Wärmetauschers und Prüfung aller relevanten Komponenten.</span>
          </li>
          <li>
            <strong>Optimierung</strong>
            <span>Einstellungen optimieren für bessere Heizleistung und geringeren Energieverbrauch.</span>
          </li>
          <li>
            <strong>Info & Empfehlungen</strong>
            <span>Klare Informationen, Empfehlungen und Antworten auf offene Fragen.</span>
          </li>
        </ol>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Ablauf der Baxi Thermenwartung" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Baxi Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>
          Bei akuten Notfällen, plötzlichen Problemen oder kompletten Ausfällen steht Ihnen unser Baxi Notdienst Wien rund um die Uhr zur Verfügung.
          Egal ob Nacht, Wochenende oder Feiertag – unser Kundendienst reagiert schnell und zuverlässig.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Sofort Hilfe anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Therme startet nicht / Störung</li>
            <li>Kein Warmwasser</li>
            <li>Heizung bleibt kalt</li>
            <li>Plötzlicher Ausfall</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Gerade bei Kälte oder fehlendem Warmwasser zählt jede Uhr – wir sorgen für schnelle und sichere Lösungen.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten, Preise & MwSt</h2>
        <p>Faire Preise, klare Kosten und vollständige Transparenz – MwSt selbstverständlich inkludiert.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Klare Wartungskosten</h3>
          <p>Alle Leistungen werden verständlich erklärt – ohne versteckte Zusatzkosten.</p>
        </div>
        <div class="service-pricecard">
          <h3>Ersatzteile & Reparatur</h3>
          <p>Zusätzliche Reparatur-Arbeiten oder Ersatzteile besprechen wir immer vorab.</p>
        </div>
        <div class="service-pricecard">
          <h3>Wartungsvertrag (optional)</h3>
          <p>Fixe Kosten, Planungssicherheit und langfristige Entlastung durch regelmäßige Termine.</p>
        </div>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Regelmäßige Wartung reduziert Folgekosten, verbessert die Zuverlässigkeit Ihrer Therme und verlängert die Lebensdauer der Anlage.
          So behalten Sie Ihre Energiekosten langfristig im Griff.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Baxi Thermenwartung</h2>
        <p>Die wichtigsten Antworten zur Baxi Thermenwartung in Wien.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Wartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit und Effizienz dauerhaft zu gewährleisten.</p>
        </details>

        <details>
          <summary>Gibt es gesetzliche Vorschriften?</summary>
          <p>Ein fixes Gesetz besteht nicht, jedoch sind regelmäßige Kontrollen zur Risikominimierung sinnvoll.</p>
        </details>

        <details>
          <summary>Wie viel Energie kann man sparen?</summary>
          <p>Eine gut gewartete Baxi Gastherme arbeitet effizienter und spart spürbar Energie.</p>
        </details>

        <details>
          <summary>Wann lohnt sich ein Thermentausch?</summary>
          <p>Bei häufigen Störungen, hohem Verbrauch oder veralteten Geräten ist ein Thermentausch empfehlenswert.</p>
        </details>

        <details>
          <summary>Was tun bei Notfällen?</summary>
          <p>Kontaktieren Sie sofort unseren Notdienst – wir helfen schnell und zuverlässig.</p>
        </details>

        <details>
          <summary>Ist ein Wartungsvertrag sinnvoll?</summary>
          <p>Ja, er bietet fixe Kosten, Planungssicherheit und langfristige Entlastung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Baxi Thermenwartung in Wien sichern</h2>
        <p>Setzen Sie auf Sicherheit, Effizienz und dauerhafte Qualität mit einer professionellen Baxi Thermenwartung Wien.</p>
        <p style="margin-top:10px;">
          📞 Jetzt Termin vereinbaren oder schreiben Sie uns per E-Mail Adresse – wir kümmern uns um Ihre Therme.
        </p>
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

<script>
(function(){

  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click', function(e){
      var id = a.getAttribute('href');
      if (!id || id === '#') return;
      var el = document.querySelector(id);
      if (!el) return;
      e.preventDefault();
      var offset = 16;
      var top = el.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

  var tocCard   = document.getElementById('tocCard');
  var tocToggle = document.getElementById('tocToggle');
  var tocHead   = document.getElementById('tocHead');

  function setExpanded(isExpanded){
    if (!tocCard || !tocToggle) return;

    tocCard.classList.toggle('is-collapsed', !isExpanded);
    tocToggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    if (tocHead) tocHead.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

    var svg = tocToggle.querySelector('svg');
    if (svg){
      svg.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  // ✅ Replace TOC labels with FULL section <h2> text
  function updateTocHeadings(){
    var links = document.querySelectorAll('#tocList a[href^="#"]');

    links.forEach(function(link){
      var target = link.getAttribute('href');
      if (!target) return;

      var section = document.querySelector(target);
      if (!section) return;

      // Find the first H2 in that section
      var h2 = section.querySelector('h2');
      if (!h2) return;

      var full = (h2.textContent || '').trim().replace(/\s+/g,' ');
      if (!full) return;

      var textEl = link.querySelector('.toc-text');
      if (textEl) textEl.textContent = full;
    });
  }

  // ✅ INIT: collapsed by default + headings update
  setExpanded(false);
  updateTocHeadings();

  // Toggle on button click
  if (tocToggle){
    tocToggle.addEventListener('click', function(e){
      e.stopPropagation();
      var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    });
  }

  // Toggle when clicking header area
  if (tocHead && tocToggle){
    tocHead.addEventListener('click', function(e){
      if (e.target.closest('#tocToggle')) return;
      tocToggle.click();
    });

    tocHead.addEventListener('keydown', function(e){
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        tocToggle.click();
      }
    });
  }

})();
</script>

<!-- <script>
  (function(){
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script> -->
@endsection
