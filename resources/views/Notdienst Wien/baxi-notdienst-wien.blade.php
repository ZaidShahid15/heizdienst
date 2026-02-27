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

  .service-checklist{margin:0; padding-left:18px}
  .service-checklist li{margin:8px 0}

  /* =====================================================
     ✅ IMAGES EQUAL HEIGHT AS CONTENT (CARD-SPLIT)
     ===================================================== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* ✅ equal height columns */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex; /* ✅ allow child to stretch */
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

  /* Image box */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:100%;       /* ✅ match text height */
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
    object-fit:cover;  /* ✅ fill nicely */
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
  .service-panel h3{margin:0 0 10px; color:#fff}
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

  /* HERO */
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
    text-transform:uppercase;
    letter-spacing:.04em;
    font-size:.82rem;
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

  /* Promo banner */
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
    flex-direction:column;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .promo-banner__title{margin:0; font-size:20px; color:#09383F}
  .promo-banner__price{margin:0; font-size:18px; color:#09383F}
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

  /* =========================
     ✅ TOC (AFTER HERO)
     ========================= */
  .toc-wrap{padding:14px 0 0; background:#fff;}
  .toc-card{
    width:100%;
    background:#fff;
    border:1px solid rgba(24,64,72,.18);
    border-radius:18px;
    box-shadow:0 18px 50px rgba(0,0,0,.10);
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
  .toc-head h4{
    margin:0;
    font-size:15px;
    font-weight:900;
    color:var(--ink);
  }
  .toc-iconbtn{
    width:36px; height:36px;
    border-radius:10px;
    border:1px solid rgba(24,64,72,.18);
    background:#fff;
    display:grid; place-items:center;
    cursor:pointer;
    transition:.15s ease;
  }
  .toc-iconbtn:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.10)}
  .toc-iconbtn svg{width:16px; height:16px; fill:var(--ink); opacity:.9; transition:transform .18s ease}

  .toc-body{
    padding:12px;
   
    overflow:auto;
    transition:max-height .22s ease, padding .22s ease;
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
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 12px;
    overflow:hidden;
  }

  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Baxi Kundendienst Wien – Thermenwartung & Gastherme Service</title>
  <meta name="description" content="Baxi Kundendienst Wien ✔ Thermenwartung, Service & Reparatur für Baxi Gastherme ✔ Fachpartner & Installateur für sichere Lösungen.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">service rund um die uhr</p>

      <h1>
        Baxi Kundendienst Wien<br>
        <em>Thermenwartung &amp; Service</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Ausfällen oder Problemen mit der Gastherme – der Baxi Notdienst Wien ist rund um die Uhr erreichbar.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1baxi.jpeg') }}" alt="Baxi Kundendienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Gastherme Service</span>
        <span class="wolf-pill">Notdienst 24h</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="baxi-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Baxi Kundendienst Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>
            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">AKTION</a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ✅ TOC AFTER HERO
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card" id="tocCard">
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
          <ul class="toc-list">
            <li class="toc-item"><a href="#kundendienst-services"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
            <li class="toc-item"><a href="#vorteile-services"><span class="toc-badge">02</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#notdienst-services"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#leistungen-services"><span class="toc-badge">04</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#wartung-services"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#installation-services"><span class="toc-badge">06</span><span class="toc-text">Austausch</span></a></li>
            <li class="toc-item"><a href="#region-services"><span class="toc-badge">07</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#partner-services"><span class="toc-badge">08</span><span class="toc-text">Fachpartner</span></a></li>
            <li class="toc-item"><a href="#kosten-services"><span class="toc-badge">09</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section> -->

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


  <!-- Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Baxi Kundendienst Wien mit Kompetenz</h2>
            <p>
              Der Baxi Kundendienst Wien betreut Kunden zuverlässig bei allen Anliegen rund um Baxi Thermen, Baxi Gastherme
              und moderne Heizungsanlagen. Als spezialisierter Baxi Installateur und erfahrener Fachpartner bieten wir
              professionellen Service, transparente Beratung und nachhaltige Lösungen.
            </p>
            <p>
              Unsere Techniker analysieren Probleme strukturiert, übernehmen Wartung und Reparatur und sorgen für eine sichere Funktion Ihrer Anlage.
              Ziel ist es, Heizung, Warmwasser und Warmwasserversorgung rasch wiederherzustellen – zuverlässig in Wien, Wien NÖ und der Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/baxi.jpeg') }}" alt="Baxi Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro / Vorteile -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Baxi Notdienst und Kundendienst in Wien und Umgebung</h2>
        <p>Thermenwartung, Reparatur und Soforthilfe aus einer Hand – klar organisiert, schnell vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Wartung &amp; Reparatur</h3>
            <p>Thermenwartung, Service und Reparatur für Baxi Thermen und Baxi Gastherme – sicher, effizient und zuverlässig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Notdienst 24h</h3>
            <p>Service rund um die Uhr, auch an Wochenenden und Feiertagen – schnelle Hilfe bei akuten Problemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrene Techniker</h3>
            <p>Erfahrene Techniker, geprüfte Lösungen und klare Abläufe – von der Diagnose bis zur Behebung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Sichere Lösungen</h3>
            <p>Als Fachpartner &amp; Installateur arbeiten wir strukturiert, sauber und nach Herstellervorgaben.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Baxi Notdienst rund um die Uhr</h2>
        <p>
          Ein Ausfall der Gastherme, plötzliche Störungen oder fehlende Wärme erfordern schnelle Reaktion.
          Der Baxi Notdienst in Wien steht rund um die Uhr zur Verfügung und bietet schnelle Hilfe bei akuten Problemen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Ob spätabends, an Wochenenden oder Feiertagen – unser Notdienst organisiert Soforthilfe direkt vor Ort.
          Durch kurze Wege in Wien und Niederösterreich sowie NÖ und Bgld begrenzen wir Schäden und stellen die Versorgung rasch sicher.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Einsätze im Notdienst</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Störungsbehebung an Baxi Gasthermen und Gasgeräte(n)</li>
            <li>Kein Warmwasser oder Ausfall der Heizung</li>
            <li>Wiederkehrende Störungen oder komplette Thermenreparatur</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            365 Tage im Jahr erreichbar – schnelle Hilfe in Wien, NÖ und Umgebung.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Thermenwartung, Service &amp; Reparatur</h2>
        <p>Von der Wartung bis zur Soforthilfe – Baxi Thermenservice aus einer Hand, mit klaren Abläufen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Thermenwartung &amp; Prüfung</h3>
            <p>Überprüfung aller relevanten Geräte, Reinigung und Funktionskontrolle – für Sicherheit, Effizienz und Langlebigkeit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Störungsbehebung</h3>
            <p>Schnelle Diagnose, strukturierte Fehleranalyse und gezielte Behebung – auch bei wiederkehrenden Störungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Thermenreparatur</h3>
            <p>Reparatur und Baxi Thermenreparatur mit geprüften Ersatzteilen und fachgerechter Umsetzung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Gastherme Service</h3>
            <p>Service für Baxi Gastherme – stabile Wärme, zuverlässige Warmwasserversorgung und weniger Energieverluste.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📦</div>
          <div>
            <h3>Geprüfte Ersatzteile</h3>
            <p>Einsatz geprüfter Ersatzteile reduziert Folgeschäden, schützt die Anlage und erhält die Funktion langfristig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Fachpartner &amp; Installateur</h3>
            <p>Als Fachpartner liefern wir klare Lösungen – sauber, strukturiert und kundenorientiert.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermenwartung, Reparatur und Baxi Thermenservice</h2>
            <p>
              Regelmäßige Thermenwartung und professionelle Baxi Thermenwartung sind entscheidend für Sicherheit, Effizienz
              und Langlebigkeit Ihrer Anlage. Unser Baxi Thermenservice umfasst Instandhaltung, Überprüfung, Reinigung und Funktionskontrolle.
            </p>
            <p>
              Bei einer Reparatur oder Baxi Thermenreparatur setzen wir auf geprüfte Ersatzteile und fachgerechte Umsetzung.
              So lassen sich hohe Kosten, Energieverluste und Folgeschäden vermeiden. Eine gut gewartete Gastherme arbeitet effizienter,
              spart Energie und sorgt für stabile Wärme.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Verbrauch</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Sicherheit</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Baxi Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Austausch / Installation -->
  <section class="service-section" id="installation-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Installation, Thermentausch und Austausch</h2>
            <p>
              Wenn eine Reparatur nicht mehr sinnvoll ist, beraten unsere Experten transparent zum Thermentausch bzw. Baxi Thermentausch.
              Wir erklären Vorteile, mögliche Alternativen und begleiten Installation, Austausch und Inbetriebnahme Schritt für Schritt.
            </p>
            <p>
              Als verlässlicher Partner sorgen wir dafür, dass neue Baxi Geräte optimal auf Ihre Heizsystemen abgestimmt sind –
              alles aus einer Hand, mit Fokus auf Qualität und Zuverlässigkeit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size4.jpeg') }}" alt="Thermentausch & Austausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiet Wien, NÖ und Umgebung</h2>
            <p>
              Der Baxi Notdienst Wien ist in allen Bezirken von Wien sowie in NÖ, Wien und Niederösterreich, im Bgld und der gesamten Umgebung im Einsatz.
              Dank regionaler Organisation und kurzer Anfahrtszeiten sind unsere Techniker schnell vor Ort – auch bei dringenden Einsätzen.
            </p>
            <p>
              Unser Notdienst steht Kunden 365 Tage im Jahr zur Verfügung, um Ausfälle rasch zu beheben und die Versorgung im Haushalt sicherzustellen.
              Ob Wohnung, Haus oder laufender Betrieb – wir sorgen für verlässliche Unterstützung in Wien und Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Einsatzgebiet Wien & Umgebung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fachpartner / Team -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Firma und Fachpartner</h2>
            <p>
              Unser erfahrenes Team besteht aus qualifizierten Installateuren, geschulten Technikern und engagierten Mitarbeitern mit hoher Kompetenz.
              Als spezialisierte Firma und zertifizierter Fachpartner für Baxi arbeiten wir strukturiert, sauber und kundenorientiert.
            </p>
            <p>
              Persönlicher Kontakt, klare Zuständigkeiten und echte Verlässlichkeit sind für uns selbstverständlich.
              Unsere Erfahrung im Umgang mit Baxi Thermen, Baxi Gasthermen und Baxi Geräten sorgt für nachhaltige Ergebnisse und hohe Zuverlässigkeit.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">klare Abläufe</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">saubere Arbeit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">verlässlicher Partner</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Baxi Fachpartner" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Werkskundendienst / Qualität -->
  <section class="service-section" id="werkskundendienst-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Werkskundendienst, Garantie und Qualität</h2>
        <p>Herstellervorgaben, geprüfte Teile und transparente Abläufe – für langfristige Funktion Ihrer Anlage.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏭</div>
          <div>
            <h3>Zusammenarbeit Werkskundendienst</h3>
            <p>Bei komplexen Fällen arbeiten wir eng mit dem Baxi Werkskundendienst zusammen – sicher und nach Vorgabe.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Garantie &amp; geprüfte Ersatzteile</h3>
            <p>Der Einsatz geprüfter Ersatzteile erhält die Garantie und sorgt für langfristige Funktion Ihrer Heizungsanlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Qualität &amp; Sicherheit</h3>
            <p>Unsere Arbeitsweise kombiniert Fachwissen, Qualität und klare Kommunikation – für Sicherheit und dauerhafte Leistung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Nachhaltige Lösungen</h3>
            <p>Wir vermeiden Folgeschäden und setzen auf Lösungen, die langfristig überzeugen – technisch und wirtschaftlich.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section service-section--soft" id="kosten-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Leistung und Vorteile</h2>
            <p>
              Transparente Kosten und nachvollziehbare Leistung stehen im Mittelpunkt unseres Kundendienstes.
              Vor jeder Arbeit informieren wir klar über Umfang, mögliche Optionen und empfohlene Schritte.
            </p>
            <p>
              Kunden profitieren von fairen Preisen, professioneller Ausführung und messbaren Vorteilen:
              weniger Störungen, geringerer Energieverbrauch und höhere Lebensdauer der Anlage.
              Unser Ziel ist es, wirtschaftliche Lösungen zu bieten, die langfristig überzeugen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Kosten & Vorteile" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Termin / Kontakt -->
  <section class="service-section" id="termin-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Termin, Kundendienst und Kontakt</h2>
        <p>Schnelle Termin-Vergabe für Wartung, Reparatur oder akuten Notdienst – wir koordinieren effizient.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📅</div>
          <div>
            <h3>Schnelle Terminvergabe</h3>
            <p>Ob geplanter Service oder dringende Hilfe – wir nehmen jedes Anliegen ernst und sorgen für rasche Unterstützung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">☎️</div>
          <div>
            <h3>Direkter Kontakt</h3>
            <p>Der direkte Kontakt ermöglicht kurze Wege, klare Absprachen und eine zuverlässige Umsetzung vor Ort.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Abschluss -->
  <section class="service-section service-section--soft" id="abschluss-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ihr Baxi Notdienst Wien</h2>
        <p>Wartung, Reparatur, Installation und Austausch – ein Partner, der liefert: zuverlässig in Wien, NÖ und der Region.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Alles aus einer Hand</h3>
            <p>Wir kümmern uns um alles – von Wartung und Reparatur bis hin zu Installation und Austausch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♨️</div>
          <div>
            <h3>Stabile Versorgung</h3>
            <p>Mit Erfahrung, Qualität und starkem Team sichern wir Wärme, Warmwasser und ein funktionierendes Heizsystem.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Baxi Kundendienst &amp; Thermenservice</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Baxi Kundendienst Wien kontaktieren?</summary>
          <p>Den Baxi Kundendienst Wien kontaktieren Sie bei Problemen mit Baxi Thermen, Gastherme oder wenn eine fachgerechte Thermenwartung notwendig ist.</p>
        </details>

        <details>
          <summary>2. Warum ist Baxi Thermenwartung wichtig?</summary>
          <p>Regelmäßige Baxi Thermenwartung erhöht die Sicherheit, senkt Ausfallrisiken und sorgt für eine effiziente Gastherme im Alltag.</p>
        </details>

        <details>
          <summary>3. Welche Thermen betreut der Baxi Kundendienst?</summary>
          <p>Der Baxi Kundendienst betreut alle Baxi Thermen, moderne Thermen und zugehörige Geräte fachgerecht.</p>
        </details>

        <details>
          <summary>4. Wird auch eine Baxi Gastherme gewartet?</summary>
          <p>Ja, jede Baxi Gastherme wird im Rahmen von Thermenwartung geprüft und optimal eingestellt.</p>
        </details>

        <details>
          <summary>5. Wer führt Service und Reparaturen durch?</summary>
          <p>Ein zertifizierter Baxi Installateur bzw. erfahrener Installateur übernimmt Service, Wartung und Reparaturen.</p>
        </details>

        <details>
          <summary>6. Arbeiten Sie als Fachpartner?</summary>
          <p>Ja, wir sind geprüfter Fachpartner und arbeiten nach Herstellervorgaben von Baxi.</p>
        </details>

        <details>
          <summary>7. Gibt es spezielle Aktionen für Kunden?</summary>
          <p>Zeitweise bieten wir eine Aktion für Wartung oder Service an – Details erhalten Sie beim Kundendienst.</p>
        </details>

        <details>
          <summary>8. Welche Vorteile bietet der Baxi Service?</summary>
          <p>Der Service sorgt für weniger Probleme, längere Lebensdauer der Geräte und zuverlässigen Betrieb.</p>
        </details>

        <details>
          <summary>9. Wird auch außerhalb Wiens geholfen?</summary>
          <p>Ja, der Baxi Kundendienst Wien unterstützt Kunden auch in der Umgebung durch flexible Einsätze.</p>
        </details>

        <details>
          <summary>10. Warum Baxi Experten beauftragen?</summary>
          <p>Unsere Experten verfügen über Erfahrung mit Baxi, erkennen Probleme früh und liefern nachhaltige Lösungen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

<!-- <script>
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

    // TOC collapse
    var tocCard = document.getElementById('tocCard');
    var tocToggle = document.getElementById('tocToggle');

    function setExpanded(isExpanded){
      if (!tocCard || !tocToggle) return;
      tocToggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      tocCard.classList.toggle('is-collapsed', !isExpanded);

      var svg = tocToggle.querySelector('svg');
      if (svg){
        svg.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
      }
    }

    setExpanded(true);
    if (tocToggle){
      tocToggle.addEventListener('click', function(){
        var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
        setExpanded(!expanded);
      });
    }

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script> -->

<!-- <script>
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

    // TOC collapse
    var tocCard = document.getElementById('tocCard');
    var tocToggle = document.getElementById('tocToggle');

    function setExpanded(isExpanded){
      if (!tocCard || !tocToggle) return;
      tocToggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      tocCard.classList.toggle('is-collapsed', !isExpanded);

      var svg = tocToggle.querySelector('svg');
      if (svg){
        svg.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
      }
    }

    // ✅ Auto replace TOC text with FULL section headings (H2)
    function updateTocHeadings(){
      var tocLinks = document.querySelectorAll('#tocList a[href^="#"]');
      tocLinks.forEach(function(link){
        var targetId = link.getAttribute('href');
        if (!targetId) return;

        var section = document.querySelector(targetId);
        if (!section) return;

        // Prefer section's H2 (works with your structure)
        var h2 = section.querySelector('h2');
        if (!h2) return;

        var fullHeading = (h2.textContent || '').trim();
        if (!fullHeading) return;

        var textEl = link.querySelector('.toc-text');
        if (textEl) textEl.textContent = fullHeading;
      });
    }

    // Init
    setExpanded(true);
    updateTocHeadings();

    if (tocToggle){
      tocToggle.addEventListener('click', function(){
        var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
        setExpanded(!expanded);
      });
    }

    // Optional: click head also toggles
    var tocHead = document.getElementById('tocHead');
    if (tocHead && tocToggle){
      tocHead.addEventListener('click', function(e){
        // prevent double-trigger if clicking button itself
        if (e.target && (e.target.id === 'tocToggle' || e.target.closest('#tocToggle'))) return;
        tocToggle.click();
      });
      tocHead.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          tocToggle.click();
        }
      });
    }

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script> -->
@endsection
