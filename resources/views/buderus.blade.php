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

  /* HERO (service-hero not used below, kept as-is) */
  .service-hero{
    padding:145px 0 48px;
    position:relative;
    overflow:hidden;
    border-bottom:1px solid var(--line);
    background:#0f2f34;
  }
  .service-hero::before{
    content:"";
    position:absolute; inset:0;
    background-image:url('img/hero-scetion.jpeg');
    background-size:cover;
    background-position:center;
    transform:scale(1.02);
    z-index:0;
  }
  .service-hero::after{
    content:"";
    position:absolute; inset:0;
    background:
      linear-gradient(90deg,
        rgba(15,47,52,.92) 0%,
        rgba(15,47,52,.86) 35%,
        rgba(15,47,52,.45) 55%,
        rgba(15,47,52,0) 72%
      );
    z-index:1;
  }
  .service-hero__grid{
    position:relative;
    z-index:2;
    display:grid;
    grid-template-columns:1fr;
    gap:18px;
    align-items:center;
  }
  .service-hero__content{max-width:58ch; color:#fff;}

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

  /* Image box */
  .service-media{width:100%;}
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

  /* =========================
     ✅ TOC (collapsible)
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
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 12px;
    overflow:hidden;
  }

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

    .service-hero{padding:120px 0 40px}
    .service-hero::after{
      background:linear-gradient(180deg, rgba(15,47,52,.92) 0%, rgba(15,47,52,.75) 55%, rgba(15,47,52,.25) 100%);
    }
    .service-hero__content{max-width:64ch}
    .service-media__box{height:220px;}
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

  .wolf-hero h1 em {
    font-style: italic;
    font-weight: 800;
  }

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

  /* ✅ fixed: use --accent (your theme variable) */
  .wolf-btn--accent {
    background: var(--accent);
    color: #1a1a1a;
  }
  .wolf-btn--accent:hover { transform: translateY(-1px); }

  .wolf-btn--ghost{
    background: transparent;
    border-color: rgba(255,255,255,.35);
    color: #fff;
  }
  .wolf-btn--ghost:hover{ transform: translateY(-1px); }

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

  .wolf-hero .wolf-hero__inner::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -220px;
    width: 303vw;
    height: 2100px;
    background: linear-gradient(90deg, rgba(10, 66, 75, 0.92));
    clip-path: polygon(0 40%, 100% 0, 100% 100%, 0 100%);
    z-index: -1;
    opacity: .9;
  }

  @media (max-width: 700px) {
    .wolf-hero {
      padding: 100px 14px 86px;
      min-height: 480px;
    }
    .wolf-hero__sub { font-size: 14px; }
  }

  .promo-banner__inner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index: 0;
  }
</style>

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">

      <!-- ✅ fixed: use service-kicker (CSS exists) -->
      <p class="service-kicker">Fachbetrieb • Wien, NÖ & Burgenland</p>

      <h1>
        Buderus Thermenwartung Wien<br>
        <em>Rund Um Die Uhr Service Vom Fachbetrieb.</em>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1buderus.jpeg') }}" alt="Buderus Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Buderus Thermenwartung, Service, Reparatur & Notdienst – 24/7 verfügbar in Wien und Umgebung.
      </p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Termin vereinbaren</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Baxi Thermenwartung Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
              <span class="promo-banner__btn-ico"></span>
              AKTION
            </a>
          </div>
        </div>
      </section>

    </div>
  </section>


  <!-- ✅ TOC (collapsed by default) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">

        <div class="toc-head"
             id="tocHead"
             role="button"
             tabindex="0"
             aria-controls="tocBody"
             aria-expanded="false">

          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
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
            <li class="toc-item">
              <a href="#vorteile-services" class="toc-link">
                <span class="toc-badge">01</span><span class="toc-text">Vorteile</span>
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
        <p>Schnell vor Ort. Klar kalkuliert. Fachgerecht umgesetzt.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Wartung, Reparatur & Notdienst</h3>
          <p>Komplettservice für Ihre Buderus Therme – sicher, zuverlässig und professionell.</p>
          <ul class="service-checklist">
            <li>Thermenwartung Buderus</li>
            <li>Thermenservice & Reparatur</li>
            <li>Notfälle & Störungen</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>24/7 erreichbar</h3>
          <p>Rund um die Uhr erreichbar – auch nachts, am Wochenende & an Feiertagen.</p>
          <ul class="service-checklist">
            <li>Schnelle Reaktion</li>
            <li>Hilfe bei Ausfall & Kälte</li>
            <li>Zuverlässig in Wien & Umgebung</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Transparente Kosten</h3>
          <p>Klare Preise inkl. MwSt – ohne versteckte Zusatzkosten.</p>
          <ul class="service-checklist">
            <li>Nachvollziehbare Angebote</li>
            <li>Zusatzarbeiten nur nach Rücksprache</li>
            <li>Fair & verständlich</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Partner / Markenstärke -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Buderus Partner in Wien & Umgebung</h2>
        <p>
          Als zuverlässiger Partner für Buderus Thermenwartung in Wien, Thermenwartung Wien und Buderus Thermenservice
          betreuen wir unsere Kunden mit Erfahrung, Fachkompetenz und persönlicher Beratung.
        </p>
        <p style="margin-top:10px;">
          Wir arbeiten nach Herstellervorgaben von Buderus, verwenden geprüfte Geräte, moderne Gasgeräte und hochwertige Bauteile.
          Als erfahrener Installateur sind wir in Wien, Niederösterreich (NÖ) und im Burgenland im Einsatz – sicher und professionell.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Herstellervorgaben</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Geprüfte Geräte & Bauteile</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Wien, NÖ & Burgenland</div>
          </div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/buderus.jpeg') }}" alt="Buderus Partner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen Für Ihre Buderus Therme</h2>
        <p>Wartung, Service, Reparatur, Notdienst & Thermentausch – alles aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Buderus Thermenwartung</h3>
            <p>Regelmäßige Wartung verlängert die Lebensdauer, senkt Ausfallrisiken und verbessert die Energieeffizienz.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Buderus Thermenservice</h3>
            <p>Überprüfung, gründliche Reinigung, Abgasmessung, Kontrolle der Abgaswerte und sicherheitsrelevanter Komponenten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Buderus Kundendienst Wien</h3>
            <p>Schnell erreichbar, lösungsorientiert und direkt vor Ort – bei Fragen, Problemen oder dringender Hilfe.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Buderus Thermenreparatur</h3>
            <p>Rasche und nachhaltige Reparaturen – bei defekten Geräten, verschlissenen Bauteilen oder akuten Störungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Thermenstörung & Notfälle</h3>
            <p>Bei Notfall, Ausfällen oder sicherheitsrelevanten Störungen ist unser Notdienst rund um die Uhr für Sie da.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & Neue Geräte</h3>
            <p>Beratung, Austausch, Installation & Inbetriebnahme – passende Buderus Lösungen für Ihre Bedürfnisse.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Warum Eine Buderus Thermenwartung Unverzichtbar Ist</h2>
        <p>
          Eine regelmäßige Buderus Thermenwartung Wien ist entscheidend für Sicherheit, zuverlässigen Betrieb und den Werterhalt Ihrer Therme.
          Durch professionelle Gasthermenwartung lassen sich Risiken, Störungen und hohe Folgekosten vermeiden.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Mehr Sicherheit</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">↓</div>
            <div class="service-stat__label">Bessere Effizienz</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">⏱</div>
            <div class="service-stat__label">Weniger Ausfälle</div>
          </div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Warum Buderus Thermenwartung wichtig ist" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte & Systeme -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für Welche Geräte & Systeme?</h2>
        <p>Wir warten alle gängigen Buderus Geräte & Systeme – sicher, effizient und langlebig.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Buderus Therme</span>
        <span class="service-chip">Buderus Gastherme</span>
        <span class="service-chip">Gastherme</span>
        <span class="service-chip">Gasgeräte</span>
        <span class="service-chip">Durchlauferhitzer</span>
        <span class="service-chip">Warmwasser</span>
        <span class="service-chip">Heizungsanlage</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Unsere Techniker arbeiten strikt nach Herstellervorgaben von Buderus und sorgen dafür,
          dass Ihre Geräte sicher, effizient und zuverlässig betrieben werden – in Wien, Niederösterreich (NÖ) und im Burgenland.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>So Läuft Die Thermenwartung Ab</h2>
        <ol class="service-steps">
          <li>
            <strong>Terminvereinbarung</strong>
            <span>Wir stimmen den Termin individuell ab – schnell, unkompliziert und kundenorientiert.</span>
          </li>
          <li>
            <strong>Überprüfung & Prüfung</strong>
            <span>Gründliche Überprüfung aller relevanten Funktionen und Komponenten.</span>
          </li>
          <li>
            <strong>Reinigung & Kontrolle</strong>
            <span>Reinigung, Kontrolle der Wärmetauscher, Sichtprüfung und Kontrolle der Bauteile.</span>
          </li>
          <li>
            <strong>Abgasmessung</strong>
            <span>Abgasmessung inkl. Kontrolle der Abgaswerte und sicherheitsrelevanter Teile.</span>
          </li>
          <li>
            <strong>Optimierung & Transparenz</strong>
            <span>Optimierung der Einstellungen und klare Info über Zustand & empfohlene Maßnahmen.</span>
          </li>
        </ol>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Ablauf der Buderus Thermenwartung" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Buderus Notdienst Wien – 24 Stunden Verfügbar</h2>
        <p>
          Bei akuten Notfällen, sicherheitsrelevanten Problemen oder kompletten Ausfällen ist unser Notdienst rund um die Uhr erreichbar.
          Unser Kundendienst ist schnell bei Ihnen vor Ort und sorgt für eine sichere Lösung.
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
            <li>Sicherheitsrelevante Störung</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Egal ob Nacht, Wochenende oder Feiertag – wir helfen zuverlässig in Wien und der gesamten Umgebung.
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
        <p>Klare Kosten, faire Preise und volle Transparenz inklusive MwSt.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Wartungskosten</h3>
          <p>Alle Leistungen werden verständlich erklärt – ohne versteckte Zusatzkosten.</p>
        </div>
        <div class="service-pricecard">
          <h3>Reparatur & Zusatzleistungen</h3>
          <p>Benötigte Teile und Zusatzarbeiten nur nach vorheriger Rücksprache.</p>
        </div>
        <div class="service-pricecard">
          <h3>Wartungsvertrag (optional)</h3>
          <p>Planungssicherheit, fixe Abläufe und langfristig weniger Folgekosten.</p>
        </div>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Regelmäßige Wartung reduziert Risiken, steigert die Lebensdauer und sorgt für effizienten Betrieb Ihrer Gas-Heizung.
          Die MwSt ist selbstverständlich vollständig ausgewiesen.
        </p>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="warumwir-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Warum Wir Der Richtige Fachpartner Sind</h2>
        <p>
          Als spezialisierter Betrieb mit hoher Fachkompetenz sind wir Ihr verlässlicher Ansprechpartner für Buderus Thermenwartung,
          Thermenservice und Thermenreparatur. Präzise Arbeit, klare Kommunikation und zuverlässiger Kundenservice.
        </p>
        <p style="margin-top:10px;">
          Wir verbinden technische Qualität mit persönlicher Betreuung und stehen Ihnen langfristig zur Seite –
          von der ersten Wartung bis zum Thermentausch.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Fachkompetenz</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Zuverlässiger Service</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Langfristige Betreuung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Fachpartner für Buderus Thermen" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen Zur Buderus Thermenwartung</h2>
        <p>Die wichtigsten Antworten auf einen Blick.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Wartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit und Effizienz zu gewährleisten.</p>
        </details>

        <details>
          <summary>Warum ist die Wartung wichtig?</summary>
          <p>Sie senkt das Risiko von Störungen, erhöht die Langlebigkeit und spart langfristig Geld.</p>
        </details>

        <details>
          <summary>Was passiert bei einem Notfall?</summary>
          <p>Unser Notdienst ist sofort erreichbar und leistet schnelle Hilfe – rund um die Uhr.</p>
        </details>

        <details>
          <summary>Welche Regionen werden betreut?</summary>
          <p>Wir sind in Wien, Niederösterreich (NÖ) und im Burgenland tätig – sowie in der gesamten Umgebung.</p>
        </details>

        <details>
          <summary>Ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Problemen oder veralteten Geräten ist ein Buderus Thermentausch empfehlenswert.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <!--
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
]) -->
 @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
    'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner für Buderus Thermen in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

<script>
  // Year
  (function(){
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
<!-- 
<script>
(function(){
  // ✅ Make sure HTML exists before running (fixes “not collapsing” issues)
  document.addEventListener('DOMContentLoaded', function(){

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

  });
})();
</script> -->

@endsection
