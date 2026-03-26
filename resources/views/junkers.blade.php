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

  /* Grids */
  .service-grid{display:grid; gap:14px}
  .service-grid--2{grid-template-columns: repeat(2, 1fr)}
  .service-grid--3{grid-template-columns: repeat(3, 1fr)}

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

  /* Feature card (used in Leistungen) */
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

  /* Stats pills (2 in a row) */
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

  /* Dark section emergency */
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

  /* CTA (from first code) */
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

  /* ===== CARD SPLIT (equal height) ===== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch;
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex;
  }

  .card-box{
    width:100%;
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

  /* Image box (fills height) */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:100%;
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

  /* ===== HERO (Junkers specific, from second code) ===== */
  .wolf-hero {
    position: relative;
    min-height: 560px;
    display: flex;
    align-items: center;
    justify-content: start;
    text-align: center;
    padding: 160px 20px 110px;
    overflow: hidden;
  }

  .wolf-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: url("{{ asset('img/hero-scetion.jpeg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transform: scale(1.02);
    z-index: 0;
  }

  .wolf-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
      90deg,
      rgba(15,66,74,0.98) 0%,
      rgba(15,66,74,0.95) 40%,
      rgba(15,66,74,0.75) 46%,
      rgba(15,66,74,0.35) 80%,
      rgba(15,66,74,0.05) 90%
    );
    z-index: 1;
  }

  .wolf-hero__inner {
    position: relative;
    z-index: 2;
    text-align: start;
  }

  .wolf-hero h1 {
    margin: 0 0 14px;
    text-align: center;
    font-size: clamp(30px, 3.5vw, 54px);
    line-height: 1.1;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.02em;
  }

  .wolf-hero__sub {
    font-size: 16px;
    color: rgba(255,255,255,.92);
    margin: 0;
  }

  .wolf-hero__actions {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
  }

  .wolf-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 24px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 14px;
    transition: .2s ease;
  }

  .wolf-btn--red {
    background: var(--accent);
    color: #1a1a1a;
  }

  .wolf-btn-outline {
    border: 1px solid rgba(255,255,255,.5);
    color: #fff;
    background: transparent;
  }

  .wolf-hero__logo {
    margin: 36px 0;
    display: flex;
    justify-content: center;
  }

  .wolf-hero__logo img {
    width: 170px;
    max-width: 60vw;
    transform: rotate(-6deg);
  }

  .hero-trust {
    display: flex;
    justify-content: center;
    gap: 40px;
    color: white;
  }

  .hero-trust .stars {
    color: #ffc107;
  }

  .badges {
    white-space: nowrap;
  }

  /* ===== TOC (from second code) ===== */
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

  /* ===== MOBILE ===== */
  @media (max-width: 980px){
    .service-grid--2,
    .service-grid--3{grid-template-columns:1fr}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}
    .service-media__box{min-height:220px; height:auto;}
  }

  @media (max-width: 768px){
    .wolf-hero{
      text-align:left;
      align-items:flex-start;
      padding:110px 20px 70px;
      min-height:520px;
    }
    .wolf-hero::before{
      background-position:right center;
    }
    .wolf-hero__inner{
      max-width:420px;
      margin-top:20px;
    }
    .wolf-hero h1{
      text-align:left;
      font-size:28px;
      line-height:1.15;
    }
    .wolf-hero__sub{
      font-size:14px;
      margin-bottom:22px;
    }
    .wolf-hero__actions{
      justify-content:flex-start;
      flex-direction:column;
    }
    .wolf-btn{
      width:100%;
    }
    .wolf-hero__logo{
      justify-content:start;
    }
    .wolf-hero__logo img{
      width:120px;
      transform:none;
    }
    .hero-trust{
      display:block;
      margin-top:18px;
    }
  }

  .promo-banner__inner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index: 0;
  }
</style>

@php
$metaTitle = " Junkers Thermenwartung Wien | 24h Notdienst & Meisterbetrieb";
$metaDescription = " Professionelle Junkers Thermenwartung in Wien vom Meisterbetrieb. 24h Notdienst, Standard & Premium Wartung, transparente Preise inkl. MwSt – zuverlässig & sicher.";
@endphp

@push('meta')
<title>{{ $metaTitle }}</title>
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Junkers Thermenwartung Wien <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1junkers.jpeg') }}" alt="Junkers Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Junkers Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Junkers Therme,
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

  <!-- TOC (Inhaltsverzeichnis) -->
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
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Vorteile</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Fachbetrieb</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#geraete-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Geräte</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#warumwir-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Warum wir</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile (grid of three) -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ihre Vorteile</h2>
        <p>Klare Leistung, klare Kosten – und schnelle Hilfe in Wien & Umgebung.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Wartung, Reparatur & Notdienst</h3>
          <p>Alles rund um Ihre Junkers Therme – Thermenwartung, Service und Reparaturen bis zum Notdienst.</p>
          <ul class="service-checklist">
            <li>Thermenwartung & Thermenservice</li>
            <li>Reparaturen mit Originalteilen</li>
            <li>Notdienst rund um die Uhr</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Standard & Premium Wartung</h3>
          <p>Wählen Sie Standard Wartung oder Premium Wartung – passend zu Anlage, Alter und Bedarf.</p>
          <ul class="service-checklist">
            <li>Standard: Basis-Checks & Reinigung</li>
            <li>Premium: tiefere Reinigung & Kontrollen</li>
            <li>Transparent erklärt</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Transparenter Preis inkl. MwSt</h3>
          <p>Klare Preis-Strukturen und volle Transparenz – ohne versteckte Zusatzkosten.</p>
          <ul class="service-checklist">
            <li>Preis inkl. MwSt</li>
            <li>Leistungen offen kommuniziert</li>
            <li>Faire Angebote</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Partner (split) -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Junkers Partner in Wien & Umgebung</h2>
            <p>
              Als verlässlicher Partner für Junkers Thermenwartung,<a href="{{ route('baxi.thermenwartung') }}"> Thermenwartung </a> Junkers und Thermenservice stehen wir unseren Kunden mit Erfahrung,
              Kompetenz und technischem Know-how zur Seite. Unser Kundendienst ist Ihr fixer Ansprechpartner für alles rund um Ihre Junkers Therme.
            </p>
            <p>
              Wir arbeiten nach Vorgaben des Herstellers, setzen auf originale Ersatzteile und moderne Gasgeräte.
              Als spezialisierter Fachbetrieb betreuen wir Wien, NÖ, Burgenland und die gesamte Umgebung – zuverlässig, sicher und lösungsorientiert.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Originale Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geschultes Team</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien, NÖ & Burgenland</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers.jpeg') }}" alt="Junkers Partner Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen (grid of features) -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Junkers Therme</h2>
        <p>Thermenwartung, Thermenservice, Kundendienst, Reparaturen, Notdienst und Thermentausch – alles aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Junkers Thermenwartung</h3>
            <p>Optimale Funktion, hohe Sicherheit und verlängerte Lebensdauer – Probleme, Energiekosten und Ausfälle werden reduziert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Junkers Thermenservice</h3>
            <p>Umfassende Überprüfung, Reinigung, Zerlegung relevanter Bauteile und Kontrolle der Abgaswerte – für sicheren Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Junkers Kundendienst Wien</h3>
            <p>Schnelle Hilfe bei Anliegen, Fragen oder akuten Störungen – zuverlässig direkt vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Junkers Thermenreparatur</h3>
            <p>Fachgerechte Reparaturen von kleinen Defekten bis zu komplexen Heizsystem-Problemen – mit originalen Ersatzteilen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Thermenstörung & Notfälle</h3>
            <p>Bei Störungen, Ausfällen oder sicherheitsrelevanten Fällen ist unser Notdienst 24/7 erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & neue Geräte</h3>
            <p>Thermentausch inkl. Beratung, Planung und Umsetzung – auch für Geräte wie Junkers, Bosch oder Buderus.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung (split reverse) -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum eine Junkers Thermenwartung unverzichtbar ist</h2>
            <p>
              Eine regelmäßige Junkers Thermenwartung Wien ist entscheidend für die Sicherheit Ihrer Heizung, einen effizienten Gas-Verbrauch
              und zuverlässigen Betrieb. Sie minimiert Risiken, erhöht den Komfort und sorgt für dauerhaft stabile Leistung.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">↓</div><div class="service-stat__label">Effizienter Verbrauch</div></div>
              <div class="service-stat"><div class="service-stat__num">⏱</div><div class="service-stat__label">Zuverlässiger Betrieb</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Warum Junkers Thermenwartung wichtig ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte & Systeme (special layout, keep as is) -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für welche Geräte & Systeme?</h2>
        <p>Wir warten alle Junkers Geräte – Gasthermen, Heizsysteme und komplette Anlagen.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Junkers Therme</span>
        <span class="service-chip">Gasthermen</span>
        <span class="service-chip">Heizsystem</span>
        <span class="service-chip">Wasser-Erwärmung</span>
        <span class="service-chip">Heizkörper</span>
        <span class="service-chip">Heizungsanlage</span>
        <span class="service-chip">Moderne Gasgeräte</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Unsere Thermenwartung Junkers umfasst sämtliche Modelle und moderne Gasthermen – mit aktuellem Know-how,
          strikt nach Herstellervorgaben. Wir betreuen Wien, NÖ, Burgenland und die gesamte Umgebung.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf (split) -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>So läuft die Thermenwartung ab</h2>
            <ol class="service-steps">
              <li><strong>Terminvergabe</strong> – Wir vereinbaren einen passenden Termin – schnell und flexibel.</li>
              <li><strong>Überprüfung & Funktionskontrolle</strong> – Prüfung sicherheitsrelevanter Punkte, Gas-Zufuhr und allgemeine Funktion.</li>
              <li><strong>Reinigung & Zerlegung</strong> – Reinigung, Zerlegung ausgewählter Bauteile und gründliche Kontrolle.</li>
              <li><strong>Abgaswerte & Prüfprotokoll</strong> – Kontrolle der Abgaswerte und Erstellung eines Prüfprotokolls.</li>
              <li><strong>Optimierung & Empfehlungen</strong> – Optimierte Einstellungen für mehr Effizienz, geringere Energiekosten und längere Lebensdauer.</li>
            </ol>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Ablauf der Junkers Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark emergency) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Junkers Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>
  Bei akuten Problemen, plötzlichen Ausfällen oder sicherheitsrelevanten Notfällen ist unser Notdienst rund um die Uhr erreichbar. Egal ob Tag oder Uhrzeit – wir sind sofort zur Stelle. Für mehr Sicherheit im Alltag empfehlen wir zudem unseren
  <a href="{{ route('home') }}" style="text-decoration:underline; color:inherit;">
    Thermenservice Wien & Niederösterreich
  </a>, um Störungen frühzeitig vorzubeugen.
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
            <li>Sicherheitsrelevante Auffälligkeiten</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Unsere Experten helfen schnell, zuverlässig und direkt vor Ort – in Wien, NÖ und im Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten (grid of three) -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten, Preise & MwSt</h2>
        <p>Transparente Preis-Strukturen und klare Kosten inklusive MwSt – ohne versteckte Zusatzkosten.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Standard Wartung</h3>
          <p>Basis-Checks, Reinigung und Funktionskontrolle – ideal für regelmäßig gewartete Anlagen.</p>
        </div>
        <div class="service-pricecard">
          <h3>Premium Wartung</h3>
          <p>Zusätzliche Prüfungen, tiefere Reinigung und erweiterte Kontrollen – für maximale Sicherheit.</p>
        </div>
        <div class="service-pricecard">
          <h3>Individuelles Angebot</h3>
          <p>Ein faires Angebot – abgestimmt auf Ihre Anlage, Zustand und Leistungspaket.</p>
        </div>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Regelmäßige Wartung schützt vor teuren Reparaturen und erhält die Qualität Ihrer Heizung – inkl. klarer Kommunikation aller Leistungen.
        </p>
      </div>
    </div>
  </section>

  <!-- Warum wir (split) -->
  <section class="service-section service-section--soft" id="warumwir-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum wir der richtige Fachpartner sind</h2>
            <p>
              Als zuverlässiger Partner und erfahrener Meisterbetrieb stehen wir für Qualität, Kompetenz und nachhaltige Lösungen.
              Unser eingespieltes Team betreut Kunden persönlich und lösungsorientiert – vom ersten Kontakt bis zur laufenden Wartung.
            </p>
            <p>
              Wir verbinden technische Präzision mit persönlicher Hilfe und stehen Ihnen bei allen Sachen rund um Ihre Therme zur Seite.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Meisterbetrieb</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schnell & lösungsorientiert</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Langfristige Betreuung</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Meisterbetrieb Junkers Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Junkers Thermenwartung</h2>
        <p>Die wichtigsten Antworten zur Thermenwartung Junkers in Wien, NÖ & Burgenland.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Wartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit und Effizienz zu gewährleisten.</p>
        </details>
        <details>
          <summary>Was ist der Unterschied zwischen Standard und Premium Wartung?</summary>
          <p>Die Premium Wartung umfasst zusätzliche Prüfungen, tiefere Reinigung und erweiterte Kontrollen.</p>
        </details>
        <details>
          <summary>Welche Regionen werden betreut?</summary>
          <p>Wir sind in Wien, NÖ, Burgenland und der gesamten Umgebung im Einsatz.</p>
        </details>
        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Störungen oder veralteten Geräten ist ein Thermentausch empfehlenswert.</p>
        </details>
        <details>
          <summary>Wie erreiche ich den Service?</summary>
          <p>Kontaktieren Sie uns telefonisch oder über unsere E-Mail Adresse – wir helfen sofort.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA (contact) -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
    'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])
</main>

{{-- <script>
(function(){
  // Smooth scroll (works for TOC + tabs)
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

  // TOC toggle
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

  // Replace TOC labels with FULL section <h2> text
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

  // INIT (collapsed)
  setExpanded(false);
  updateTocHeadings();

  if (tocToggle){
    tocToggle.addEventListener('click', function(e){
      e.stopPropagation();
      var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    });
  }

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

  // year
  var y = document.getElementById("year");
  if (y) y.textContent = new Date().getFullYear();
})();
</script> --}}
@endsection

