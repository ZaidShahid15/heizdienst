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
    --shadow2: 0 18px 50px rgba(0,0,0,.18);
    --radius: 18px;
    --radius2: 22px;
  }

  *{box-sizing:border-box}
  html,body{margin:0;padding:0}
  html{scroll-behavior:smooth}
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
    cursor:pointer;
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
    list-style:none;
  }
  .service-faq summary::-webkit-details-marker{display:none;}
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

  /* ===== ✅ Card split (EQUAL HEIGHT) ===== */
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
    height:100%;
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
    /* object-fit:cover; */
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
    background-image:url("{{ asset('img/hero-scetion.jpeg') }}");
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

  /* ✅ HERO width same as other sections (this is the "previous size" you wanted) */
  .wolf-hero__inner{
    position:relative;
    z-index:2;
    width:min(1120px, 92%);
    margin-inline:auto;
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
    letter-spacing:.06em;
    font-size:.78rem;
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
    margin:0 auto 20px;
    max-width:780px;
    font-size:16px;
    color:rgba(255,255,255,.9);
  }
  .wolf-hero__logo{margin:16px 0 18px; display:flex; justify-content:center;}
  .wolf-hero__logo img{width:170px; max-width:60vw; transform: rotate(-6deg);}

  .wolf-hero__bullets{display:flex; gap:10px; justify-content:center; flex-wrap:wrap; margin:0 0 8px;}
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
    border-radius:10px;
    font-weight:800;
    font-size:14px;
    border:1px solid transparent;
    transition:.15s ease;
  }
  .wolf-btn--accent{background:var(--accent); color:#1a1a1a;}
  .wolf-btn--ghost{background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.28); color:#fff;}
  .wolf-btn--ghost:hover, .wolf-btn--accent:hover{transform:translateY(-1px);}

  /* ======================================================
     ✅ Promo Banner (Aktion) — like your image
     ====================================================== */
  .promo-banner{margin-top:22px; width:100%;}
  .promo-banner__inner{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    border:1px solid rgba(255,255,255,.22);
    background:#fff;
    box-shadow: var(--shadow2);
    width:100%;
  }
  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
  }
  .promo-banner__inner::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(90deg,
      rgba(255,255,255,1) 0%,
      rgba(255,255,255,1) 52%,
      rgba(255,255,255,.25) 78%,
      rgba(255,255,255,0) 100%
    );
    z-index:1;
  }
  .promo-banner__content{
    position:relative;
    z-index:2;
    padding:18px 18px;
    /* display:flex; */
    align-items:center;
    justify-content:space-between;
    gap:14px;
    flex-wrap:wrap;
    text-align:center;
    min-height:120px;
  }
  .promo-banner__left{
    display:flex;
    flex-direction:column;
    gap:4px;
    min-width:220px;
  }
  .promo-banner__title{
    margin:0;
    color:var(--ink);
    font-size:18px;
    font-weight:900;
    letter-spacing:-.01em;
    line-height:1.15;
  }
  .promo-banner__price{
    margin:0;
    color:var(--ink);
    font-weight:900;
    font-size:22px;
    line-height:1.1;
  }
  .promo-banner__btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    padding:12px 18px;
    border-radius:10px;
    background: #0f2f35;
    color:#fff;
    font-weight:900;
    border:1px solid rgba(0,0,0,.12);
    white-space:nowrap;
    min-width:130px;
    transition:.15s ease;
  }
  .promo-banner__btn:hover{transform:translateY(-1px); box-shadow:0 14px 40px rgba(0,0,0,.18);}
  .promo-banner__btn-ico{
    width:10px; height:10px;
    border-radius:999px;
    background:#fff;
    display:inline-block;
    opacity:.85;
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
    -webkit-overflow-scrolling:touch;
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

  /* ===== Mobile ===== */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text,
    .card-split__media{display:block;}
    .service-media__box{min-height:220px; height:auto;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .promo-banner__content{align-items:flex-start;}
    .promo-banner__btn{border-radius:12px;}
  }
  @media (max-width: 520px){
    .wolf-hero{padding:110px 12px 86px; min-height:460px;}
    .wolf-hero__inner{margin-top:22px;}
    .wolf-hero h1{font-size: clamp(30px, 9vw, 44px);}
    .wolf-hero__sub{max-width:36ch;}
    .wolf-btn{width:100%; padding:14px 16px;}
    .promo-banner__content{gap:10px; padding:14px;}
    .promo-banner__title{font-size:16px;}
    .promo-banner__price{font-size:18px;}
    .promo-banner__btn{width:100%;}
    .toc-body{max-height:360px;}
  }
  @media (prefers-reduced-motion: reduce){
    *{scroll-behavior:auto}
    .service-btn, .wolf-btn, .toc-iconbtn, .promo-banner__btn{transition:none}
  }
</style>

@push('meta')
  <title>Nordgas Notdienst Wien – Thermenservice & Gastherme Reparaturen</title>
  <meta name="description" content="Nordgas Notdienst Wien ✔ Thermenservice, Reparaturen & Thermenwartung ✔ Gastherme & Heizung Service in Wien, NÖ & Niederösterreich.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Schnelle Hilfe im Notfall</p>

      <h1>
        Nordgas Notdienst Wien<br>
        <em>Thermenservice & Reparaturen</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Fehlermeldungen oder Ausfall der Gastherme – Ihr Nordgas Notdienst Wien ist zuverlässig für Sie da.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/NordGas.png') }}" alt="Nordgas Notdienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Nordgas Thermenservice</span>
        <span class="wolf-pill">Reparaturen und Wartung</span>
        <span class="wolf-pill">Erfahrene Techniker</span>
        <span class="wolf-pill">Rasche Anfahrt</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <!-- PROMO -->
      <section class="promo-banner" id="wolf-aktion" aria-label="Aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <div class="promo-banner__left">
              <h2 class="promo-banner__title"><em>Nordgas Thermenwartung</em><br>Aktion</h2>
              <p class="promo-banner__price"><strong>ab €95</strong></p>
            </div>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION anrufen">
              <span class="promo-banner__btn-ico" aria-hidden="true"></span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
            <button class="toc-iconbtn" type="button" id="tocToggle"
              aria-expanded="false" aria-controls="tocBody"
              aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true" id="tocChevron" style="transform: rotate(0deg); transition: transform 0.18s;">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Thermenwartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparaturen</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Einsatzgebiet</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#team-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Team</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQs</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Kundendienst -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Nordgas Kundendienst für Therme und Gastherme</h2>
            <p>
              Der Nordgas Kundendienst betreut Kunden in Wien, Niederösterreich, NÖ und Wien NÖ bei allen Anliegen rund um Nordgas Therme, Nordgas Gastherme und moderne Gasgeräte.
              Als spezialisierter Installateur und verlässlicher Partner bieten wir professionelle Dienstleistungen für Heizung, Heizungsanlage und effiziente Heizsysteme.
            </p>
            <p>
              Unser Team aus geschulten Technikern arbeitet strukturiert und lösungsorientiert.
              Ob ungewöhnliche Geräusche, schwankender Wasserdruck, fehlendes Warmwasser oder ein angezeigter Fehlercode am Display –
              wir analysieren das Problem präzise und entwickeln nachhaltige Lösungen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Thermenservice, Reparaturen & Wartung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien, NÖ & Niederösterreich</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fehlercode & Diagnose</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schnelle Hilfe im Notfall</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1NordGas.png') }}" alt="Nordgas Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Nordgas Notdienst bei Störungen und Notfall</h2>
        <p>
          Ein plötzlicher Ausfall der Gastherme oder wiederkehrende Störungen können besonders im Fall niedriger Temperaturen zum Problem werden.
          Der Nordgas Notdienst reagiert rasch und organisiert eine schnelle Anfahrt zum Einsatzort.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Im akuten Notfall prüfen unsere Experten alle relevanten Bauteile, führen eine sorgfältige Überprüfung durch und sorgen für sichere Wiederherstellung des Betriebs.
          Besonders bei sicherheitsrelevanten Themen wie Wasser, Gas oder Abgasmessung steht Ihre Sicherheit im Mittelpunkt.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQs ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3 style="margin:0 0 10px;">Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Fehlercode oder Fehlermeldungen auf dem Display</li>
            <li>Ausfall von Heizung oder Warmwasser</li>
            <li>Probleme mit Gasgeräten oder Nordgas Gastherme</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rasche Hilfe vor Ort – in Wien, NÖ und Niederösterreich.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen: Thermenservice, Wartung & Reparaturen</h2>
        <p>Nordgas Thermenservice, Thermenwartung, Reparaturen, Inbetriebnahme und Systemlösungen – professionell betreut.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Nordgas Thermenservice</h3>
            <p>Professioneller Thermenservice für Nordgas Therme inklusive Überprüfung, Reinigung und Abgasmessung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Thermenwartung & Wartung</h3>
            <p>Gründliche Wartung für sichere Funktion, höhere Effizienz und lange Lebensdauer der Gastherme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Fehlercode & Diagnose</h3>
            <p>Analyse von Fehlercode, Fehlermeldung und Störungen – präzise Überprüfung aller relevanten Bauteile.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparaturen</h3>
            <p>Fachgerechte Reparaturen mit geprüften Ersatzteilen – sauber dokumentiert und verständlich erklärt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Austausch & Alternative</h3>
            <p>Wenn Reparatur nicht mehr sinnvoll ist: transparente Beratung zu Austausch und passenden Alternativen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Heizungsanlage & Systeme</h3>
            <p>Betreuung kompletter Heizungsanlage, Heizung und angeschlossener Gasgeräte – nach Stand der Technik.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Thermenwartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Nordgas Thermenservice und Nordgas Thermenwartung</h2>
            <p>
              Regelmäßige Thermenwartung ist entscheidend für Effizienz, Sicherheit und lange Lebensdauer.
              Unsere Nordgas Thermenwartung und der Nordgas Thermenservice umfassen Reinigung, Einstellung, Funktionskontrolle und sorgfältige Überprüfung aller wichtigen Komponenten.
            </p>
            <p>
              Durch präventive Wartung lassen sich größere Reparaturen vermeiden und unnötige Kosten reduzieren.
              Auch der allgemeine Thermenservice trägt dazu bei, den Wohnkomfort zu sichern und langfristig Geld zu sparen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit & Kontrolle</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Reparaturen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Lange Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Nordgas Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparaturen -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparaturen, Ersatzteile und Austausch</h2>
            <p>
              Wenn Defekte auftreten, führen wir fachgerechte Reparaturen durch und verwenden geprüfte Ersatzteile.
              Sollte eine Reparatur wirtschaftlich nicht mehr sinnvoll sein, beraten wir transparent zu Austausch oder möglicher Alternative.
            </p>
            <p>
              Unsere Spezialisten erklären verständlich alle Optionen und berücksichtigen Zustand, Alter und Effizienz der Geräte.
              Ziel ist eine nachhaltige Lösung mit hoher Qualität und klarer Kostenstruktur.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geprüfte Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Optionen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Lösung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Kostenstruktur</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Nordgas Reparaturen" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Einsatzgebiet -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiet Wien und Niederösterreich</h2>
            <p>
              Der Nordgas Notdienst Wien ist nicht nur direkt in Wien, sondern auch in ganz Niederösterreich und NÖ im Einsatz.
              Dank strukturierter Planung und kurzer Wege sind unsere Techniker rasch vor Ort.
            </p>
            <p>
              Ob Innenstadt, Randbezirk oder ländliche Region – wir sorgen für schnelle Hilfe bei akuten Problemen mit Gastherme, Therme oder kompletter Heizungsanlage.
              Auch im Fall größerer Defekte reagieren wir flexibel und zuverlässig.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">NÖ</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Niederösterreich</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Rasch vor Ort</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Einsatzgebiet Wien und Niederösterreich" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Kosten und transparente Beratung</h2>
            <p>
              Faire Preise und nachvollziehbare Kosten sind für uns selbstverständlich.
              Vor Beginn jeder Arbeit informieren wir klar über den Umfang der Leistungen, mögliche Reparaturen, benötigte Ersatzteile und den zu erwartenden Aufwand.
            </p>
            <p>
              So behalten Sie stets den Überblick und können sicher entscheiden.
              Eine ehrliche Beratung hilft dabei, unnötige Ausgaben zu vermeiden und langfristig Geld zu sparen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Vorab-Info</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Vermeidet unnötige Ausgaben</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Planbare Entscheidungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Preise und Kosten" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team / Qualität / Garantie -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Erfahrung, Qualität und Garantie</h2>
            <p>
              Als verlässlicher Partner legen wir großen Wert auf Qualität, saubere Arbeit und nachhaltige Ergebnisse.
              Unsere Arbeit erfolgt nach Hersteller-Vorgaben und in enger Abstimmung mit dem offiziellen Werkskundendienst.
              Dadurch bleibt Ihre Garantie erhalten und die Sicherheit Ihrer Anlage gewährleistet.
            </p>
            <p>
              Unser eingespieltes Team aus qualifizierten Technikern und erfahrenen Installateuren verfügt über langjährige Erfahrung im Umgang mit Nordgas, Nordgas Therme und unterschiedlichen Geräten.
              Kontinuierliche Weiterbildung und echtes Engagement garantieren schnelle und nachhaltige Lösungen – vom ersten Kontakt bis zur erfolgreichen Umsetzung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hersteller-Vorgaben</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Garantie bleibt erhalten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Erfahrung & Know-how</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Lösungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Team und Qualität" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Nordgas Notdienst & Thermenservice Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Nordgas Notdienst kontaktieren?</summary>
          <p>Den Notdienst von Nordgas kontaktieren Sie bei akuten Störungen, Ausfall der Gastherme oder wenn ein Fehlercode auf dem Display erscheint – in Wien und Wien NÖ.</p>
        </details>

        <details>
          <summary>2. Was umfasst der Nordgas Thermenservice?</summary>
          <p>Der Nordgas Thermenservice beinhaltet Thermenwartung, gründliche Wartung, Kontrolle der Bauteile und sichere Einstellung der Therme.</p>
        </details>

        <details>
          <summary>3. Wird auch eine Nordgas Therme repariert?</summary>
          <p>Ja, unsere Experten führen professionelle Reparaturen an jeder Nordgas Therme und Nordgas Gastherme durch.</p>
        </details>

        <details>
          <summary>4. Gibt es Service in Wien und Niederösterreich?</summary>
          <p>Ja, der Kundendienst ist in Wien, NÖ und ganz Niederösterreich im Einsatz.</p>
        </details>

        <details>
          <summary>5. Was tun bei Fehlermeldungen am Display?</summary>
          <p>Bei Fehlermeldungen oder erneutem Fehlercode sollte sofort der Notdienst verständigt werden, um Folgeschäden zu vermeiden.</p>
        </details>

        <details>
          <summary>6. Werden auch Heizungsanlagen betreut?</summary>
          <p>Ja, wir prüfen komplette Heizungsanlage, Heizung und angeschlossene Gasgeräte fachgerecht.</p>
        </details>

        <details>
          <summary>7. Wie transparent sind Preise und Kosten?</summary>
          <p>Unsere Preise und Kosten werden vorab klar erklärt – inklusive möglichem Austausch von Komponenten.</p>
        </details>

        <details>
          <summary>8. Was beinhaltet eine Thermenwartung?</summary>
          <p>Die Thermenwartung erhöht die Lebensdauer, verbessert die Sicherheit und schützt vor teuren Reparaturen.</p>
        </details>

        <details>
          <summary>9. Wer führt Reparaturen durch?</summary>
          <p>Ein erfahrener Installateur und das geschulte Team von Nordgas übernehmen alle Arbeiten zuverlässig.</p>
        </details>

        <details>
          <summary>10. Warum Nordgas wählen?</summary>
          <p>Als verlässlicher Partner mit viel Erfahrung bieten wir nachhaltige Lösungen, hohe Sicherheit und optimalen Wohnkomfort für Kunden in Wien.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt und schnelle Hilfe</h2>
        <p>
          Bei Fragen, konkretem Anliegen oder im akuten Notfall erreichen Sie uns unkompliziert per E-Mail oder telefonisch.
          Unser Kundendienst steht Ihnen jederzeit unterstützend zur Seite und koordiniert rasch den nächsten Einsatz.
        </p>
        <p style="margin-top:10px;">
          Ihr Nordgas Notdienst Wien: Vertrauen Sie auf Thermenservice, Nordgas Thermenwartung, Reparaturen oder Austausch.
          Mit Fachwissen, Qualität und klarer Kostenstruktur sorgen wir für Sicherheit, effiziente Heizung, stabiles Warmwasser und langfristigen Wohnkomfort.
        </p>
        <p style="margin-top:10px; font-weight:900; color:var(--ink);">
          Hotline: <a href="tel:+4369981243996" style="text-decoration:underline;">+43 699 812 439 96</a>
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
          <textarea name="message" rows="4" placeholder="Gerät/Modell, Problem, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>
</main>

<script>
  (function () {
    const tocCard = document.getElementById('tocCard');
    const tocHead = document.getElementById('tocHead');
    const tocToggle = document.getElementById('tocToggle');
    const tocBody = document.getElementById('tocBody');
    const chevron = document.getElementById('tocChevron');

    function setExpanded(isExpanded){
      tocCard.classList.toggle('is-collapsed', !isExpanded);
      tocHead.setAttribute('aria-expanded', String(isExpanded));
      tocToggle.setAttribute('aria-expanded', String(isExpanded));
      if (chevron) chevron.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
      if (!isExpanded) tocBody.scrollTop = 0;
    }

    // default collapsed
    setExpanded(false);

    function toggle(){
      const expanded = tocHead.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    }

    tocHead.addEventListener('click', function (e) {
      if (e.target === tocToggle || tocToggle.contains(e.target)) return;
      toggle();
    });

    tocToggle.addEventListener('click', function (e) {
      e.preventDefault();
      toggle();
    });

    tocHead.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggle();
      }
    });

    document.querySelectorAll('.toc-link').forEach(function(link){
      link.addEventListener('click', function(){
        setExpanded(false);
      });
    });
  })();
</script>

@endsection
