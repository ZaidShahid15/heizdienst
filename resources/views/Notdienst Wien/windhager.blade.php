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

  /* ✅ UPDATED: hero inner width = same as other sections */
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
     ✅ Promo Banner (Aktion) — UPDATED to match your image
     ✅ UPDATED: takes full hero width (same as other sections)
     ====================================================== */
  .promo-banner{
    margin-top:22px;
    width:100%;
  }
  .promo-banner__inner{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    border:1px solid rgba(255,255,255,.22);
    background:#fff;
    box-shadow: var(--shadow2);
    width:100%;
  }

  /* right-side photo */
  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:
      url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
  }

  /* fade so text is readable on the left */
  .promo-banner__inner::before{
    content:"";
    position:absolute;
    inset:0;
    background:
      linear-gradient(90deg,
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
    display:flex;
    align-items:center;
    justify-content:center;
    gap:14px;
    flex-wrap:wrap;
    text-align:left;
    min-height:120px; /* ✅ stable height like screenshot */
  }

  .promo-banner__left{
    display:flex;
    justify-content:center;
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
    text-align:center;
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
  }
  .promo-banner__btn:hover{
    transform:translateY(-1px);
    box-shadow:0 14px 40px rgba(0,0,0,.18);
  }
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

  /* ===== Mobile / iPhone 17 Pro Max friendly ===== */
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

    /* ✅ promo banner stacking */
    /* .promo-banner__content{align-items:flex-start;} */
    .promo-banner__btn{border-radius:12px;}
  }

  /* Extra tuning for ~430px */
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
  <title>Windhager Notdienst Wien – Thermenservice & Reparatur</title>
  <meta name="description" content="Windhager Notdienst Wien ✔ Thermenservice, Reparatur & Thermenwartung ✔ Hilfe bei Fehlercode, Gasgeruch & Ausfall in Wien, NÖ & Burgenland.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Schnelle Hilfe im Notfall</p>

      <h1>
        Windhager Notdienst Wien<br>
        <em>Thermenservice & Reparatur</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störung, Fehlercode oder Ausfall der Therme – Ihr Windhager Notdienst Wien ist sofort zur Stelle.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/Windhager.png') }}" alt="Windhager Notdienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Hilfe bei Fehlercode</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt anfragen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <!-- ✅ PROMO BANNER (FULL WIDTH LIKE OTHER SECTIONS) -->
      <section class="promo-banner" id="wolf-aktion" aria-label="Aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <div class="promo-banner__left">
              <h2 class="promo-banner__title"><em>Viessmann Thermenwartung</em><br>Aktion</h2>
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
              <svg viewBox="0 0 448 512" aria-hidden="true" id="tocChevron" style="transform: rotate(0deg); transition: transform 0.18s;">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Meisterbetrieb</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Thermenwartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Einsatzgebiet</span></a></li>
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
            <h2>Windhager Kundendienst für Therme und Heizung</h2>
            <p>
              Der Windhager Kundendienst betreut Kunden in Wien, Niederösterreich und Burgenland bei allen Anliegen rund um Windhager Therme,
              Gastherme und moderne Heizungssysteme. Ob im privaten Haus oder im gewerblichen Betrieb – unsere erfahrenen Installateure und qualifizierten Techniker sorgen für sichere Betreuung.
            </p>
            <p>
              Jede Windhager Therme wird sorgfältig geprüft, um Probleme, sinkenden Wasserdruck, fehlendes Warmwasser oder ungewöhnliche Geräusche frühzeitig zu erkennen.
              Unser Ziel ist eine nachhaltige Lösung, die Sicherheit, Effizienz und lange Lebensdauer garantiert.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Reparatur & Thermenservice</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wartung aus einer Hand</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Rasche Hilfe im Notfall</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien, NÖ & Burgenland</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1Windhager.jpeg') }}" alt="Windhager Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Meisterbetrieb -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Meisterbetrieb mit Erfahrung und Fachwissen</h2>
            <p>
              Als zertifizierter Meisterbetrieb arbeiten wir nach höchsten Standards. Unsere erfahrenen Installateure kümmern sich mit Fachwissen und präzisem Umgang um jede Windhager Therme.
            </p>
            <p>
              Regelmäßige Schulungen sichern aktuelles Know-how bei Elektronik, Gasgeräte, Steuerung und Sensorik.
              Die Kombination aus Erfahrung, technischem Verständnis und strukturierten Abläufen sorgt für maximale Sicherheit und nachhaltige Ergebnisse.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Meisterbetrieb</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Erfahrene Installateure</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachwissen & Schulungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Abläufe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Meisterbetrieb & Techniker" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen: Service, Wartung & Reparatur</h2>
        <p>Thermenservice, Thermenwartung, Reparatur, Diagnose und Thermentausch – zuverlässig für Wien, NÖ & Burgenland.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧯</div>
          <div>
            <h3>Notdienst bei Ausfall</h3>
            <p>Soforthilfe bei Ausfall der Windhager Therme oder Gastherme – rasch vor Ort und mit klaren Sofortmaßnahmen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Fehlercode & Diagnose</h3>
            <p>Gezielte Fehlersuche bei Fehlercode, Elektronik oder Sensorik – inkl. Kontrolle von Parametern, Thermostaten und Heizkreislauf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Reparatur & Behebung</h3>
            <p>Fachgerechte Reparaturen bei Störung, ungewöhnlichen Geräuschen, Warmwasser-Ausfall oder Druckproblemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Thermenservice & Reinigung</h3>
            <p>Gründliche Überprüfung, Reinigung und Kontrolle aller relevanten Komponenten für sicheren, stabilen Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Ersatzteile</h3>
            <p>Geprüfte Ersatzteile und saubere Montage – transparent dokumentiert und auf Ihr Gerät abgestimmt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Windhager Thermentausch</h3>
            <p>Wenn eine Reparatur nicht mehr sinnvoll ist: Beratung, Austausch, Installation und sichere Inbetriebnahme.</p>
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
            <h2>Windhager Thermenservice und Thermenwartung</h2>
            <p>
              Regelmäßige Thermenwartung und professioneller Windhager Thermenservice sind entscheidend für einen sicheren Betrieb.
              Unsere Windhager Thermenwartung umfasst Überprüfung, Reinigung, Kontrolle aller relevanten Komponenten und Einstellung wichtiger Werte.
            </p>
            <p>
              Durch strukturierte Wartungsarbeiten lassen sich größere Schäden vermeiden und der effiziente Umgang mit Energie sicherstellen.
              Eine gewartete Therme arbeitet zuverlässiger, verbraucht weniger Gas und schützt vor unnötigen Reparaturen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sicherer Betrieb</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Windhager Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Ersatzteile und Windhager Thermentausch</h2>
            <p>
              Bei Defekten führen wir fachgerechte Reparaturarbeiten durch und verwenden geprüfte Ersatzteile.
              Unsere Techniker analysieren Fehler, prüfen Bauteile und sorgen für eine sichere Behebung – sauber dokumentiert und verständlich erklärt.
            </p>
            <p>
              Wenn eine Reparatur nicht mehr wirtschaftlich sinnvoll ist, beraten wir transparent zum Windhager Thermentausch.
              Als Meisterbetrieb übernehmen wir Austausch, Installation und sichere Inbetriebnahme und prüfen, ob einzelne Komponenten oder das gesamte System erneuert werden sollten.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geprüfte Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Saubere Montage</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Beratung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Inbetriebnahme</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Windhager Reparatur" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Windhager Notdienst bei Fehlercode und Notfall</h2>
        <p>
          Ein plötzlicher Fehlercode oder ein kompletter Ausfall kann auf ernsthafte Fehler hinweisen.
          Der Windhager Notdienst reagiert rasch im akuten Notfall und organisiert schnelle Hilfe vor Ort.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Spezialisten führen eine gezielte Fehlersuche durch, überprüfen Elektronik, Parameter, Thermostate, Heizkreislauf und relevante Bauteile.
          Auch bei Gasgeruch, Wasserverlust oder kompletter Störung steht der Notdienst bereit.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQs ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3 style="margin:0 0 10px;">Typische Einsätze im Notdienst</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Ausfall der Windhager Therme oder Gastherme</li>
            <li>Fehlermeldung / Fehlercode (z. B. E02, E110, E133, E131, E125, E161, E164, E21/E22, E97/E99)</li>
            <li>Fehlfunktion durch Elektronik oder Sensorik</li>
            <li>Störung im Heizkörper oder Wassersystem</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Sicherheit, Kontrolle und schnelle Behebung – in Wien, Niederösterreich und Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Kosten und transparente Beratung</h2>
            <p>
              Transparente Kosten und faire Preise sind für unseren Kundendienst selbstverständlich.
              Vor Beginn aller Arbeiten erhalten Kunden einen klaren Überblick über Aufwand, benötigte Ersatzteile und mögliche Alternativen.
            </p>
            <p>
              Ob Reparatur, Wartung oder Windhager Thermentausch – wir beraten offen zu jeder Möglichkeit.
              So behalten Sie jederzeit die Kontrolle und investieren gezielt in Qualität.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Kostenübersicht</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Faire Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Alternativen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Planbare Abläufe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Preise & transparente Beratung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Einsatzgebiet -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiet Wien, Niederösterreich und Burgenland</h2>
            <p>
              Der Windhager Notdienst Wien ist nicht nur direkt in Wien, sondern auch in ganz Niederösterreich und im Burgenland im Einsatz.
              Unsere Techniker sind rasch vor Ort, prüfen die Windhager Therme, analysieren Fehler und sorgen für eine sichere Behebung.
            </p>
            <p>
              Auch bei akuten Problemen im Heizkreislauf, bei sinkendem Wasserdruck oder fehlendem Warmwasser reagieren wir schnell.
              Der Windhager Notdienst unterstützt private Haushalte ebenso wie Betriebe zuverlässig.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Niederösterreich</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Burgenland</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Rasch vor Ort</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Einsatzgebiet Wien, Niederösterreich und Burgenland" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Windhager Notdienst & Thermenservice Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Windhager Notdienst kontaktieren?</summary>
          <p>Den Windhager Notdienst rufen Sie bei Ausfall der Windhager Therme, Gasgeruch, starkem Druckverlust oder akutem Fehlercode – besonders in Wien und Niederösterreich.</p>
        </details>

        <details>
          <summary>2. Was umfasst der Windhager Thermenservice?</summary>
          <p>Der Windhager Thermenservice beinhaltet Thermenwartung, gründliche Überprüfung, Kontrolle sicherheitsrelevanter Komponenten und professionelle Reparatur.</p>
        </details>

        <details>
          <summary>3. Was bedeutet der Fehlercode E02 Überhitzungsschutz?</summary>
          <p>Der Fehlercode E02 Überhitzungsschutz weist auf eine Störung im Heizsystem hin. Unser Windhager Notdienst prüft Thermistor, Sensorik und Bauteile.</p>
        </details>

        <details>
          <summary>4. Wird auch eine Windhager Gastherme repariert?</summary>
          <p>Ja, jede Gastherme und Windhager Gastherme wird von erfahrenen Technikern und Installateuren fachgerecht repariert.</p>
        </details>

        <details>
          <summary>5. Ist der Kundendienst auch außerhalb von Wien verfügbar?</summary>
          <p>Der Kundendienst betreut Kunden in Wien, Niederösterreich und Burgenland zuverlässig im laufenden Betrieb.</p>
        </details>

        <details>
          <summary>6. Warum ist Thermenwartung wichtig?</summary>
          <p>Regelmäßige Thermenwartung und Windhager Thermenwartung erhöhen Sicherheit, senken Risiken und verlängern die Lebensdauer der Therme.</p>
        </details>

        <details>
          <summary>7. Was tun bei Wasserdruck-Problemen?</summary>
          <p>Sinkender Wasserdruck oder fehlendes Warmwasser erfordern rasche Hilfe durch den Windhager Notdienst.</p>
        </details>

        <details>
          <summary>8. Wie transparent sind Kosten und Reparaturen?</summary>
          <p>Vor jeder Reparatur erhalten Kunden einen klaren Überblick über Aufwand, Wartung und mögliche Lösungen.</p>
        </details>

        <details>
          <summary>9. Wer führt die Arbeiten durch?</summary>
          <p>Ein zertifizierter Installateur und geschulte Techniker kümmern sich mit Erfahrung um Ihre Windhager Therme.</p>
        </details>

        <details>
          <summary>10. Warum Windhager wählen?</summary>
          <p>Mit Windhager setzen Sie auf Qualität, Sicherheit und professionelle Betreuung – alles in sicheren Händen.</p>
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
          Bei Fragen, konkretem Anliegen oder im akuten Notfall erreichen Sie unseren Windhager Kundendienst unkompliziert über diese Seite.
          Wir koordinieren rasch den Einsatz unserer Techniker und stehen für persönliche Beratung zur Verfügung.
        </p>
        <p style="margin-top:10px;">
          Ihre Anlage ist bei uns in sicheren Händen – vom ersten Kontakt bis zur abschließenden Funktionsprüfung.
          Verlassen Sie sich auf den Windhager Notdienst, wenn es um Thermenservice, Windhager Thermenwartung, Reparatur oder Austausch geht.
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
      // avoid double toggle when clicking button
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

    // close TOC on link click (mobile friendly)
    document.querySelectorAll('.toc-link').forEach(function(link){
      link.addEventListener('click', function(){
        setExpanded(false);
      });
    })
  })();
</script>

@endsection
