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

  /* =====================================================
     ✅ CARD SPLIT (equal height columns)
     ===================================================== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch;
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}
  .card-split__text,
  .card-split__media{display:flex; align-items:stretch;}

  .card-box{
    width:100%;
    background:#fff;
    border:1px solid var(--line);
    border-radius:var(--radius2);
    padding:18px;
    height:100%;
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
  .service-media{width:100%; display:flex; align-items:stretch;}
  .service-media__box{
    width:100%;
    height:100%;
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
    display:flex;
    align-items:stretch;
  }
  .service-media__img{
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    object-position:center;
    flex:1;
  }

  /* Stats pills */
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
  .service-checklist li{margin:8px 0}
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
  .service-faq summary{cursor:pointer; font-weight:900; color:var(--ink);}
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

  /* ===== HERO ===== */
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

  /* Promo */
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
  .promo-banner__title{margin:0; font-size:20px;}
  .promo-banner__price{margin:0; font-size:18px;}
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

  /* ✅ TOC like previous site (collapsed default) */
  .toc-wrap{
    padding:18px 0 8px;
    background:linear-gradient(180deg, #fff, rgba(24,64,72,.03));
  }
  .toc-card{
    border:1px solid var(--line);
    border-radius:20px;
    background:#fff;
    box-shadow:0 12px 34px rgba(0,0,0,.06);
    overflow:hidden;
  }
  .toc-card.is-collapsed .toc-body{display:none;}
  .toc-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    padding:14px 16px;
    cursor:pointer;
    user-select:none;
  }
  .toc-head:hover{background:rgba(24,64,72,.03)}
  .toc-head h4{
    margin:0;
    color:var(--ink);
    font-size:16px;
    font-weight:900;
    letter-spacing:-.01em;
  }
  .toc-iconbtn{
    width:40px; height:40px;
    border-radius:12px;
    border:1px solid var(--line);
    background:#fff;
    display:grid; place-items:center;
    cursor:pointer;
    transition:.15s ease;
  }
  .toc-iconbtn:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.10)}
  .toc-iconbtn svg{width:18px; height:18px; fill:var(--ink); transition:transform .18s ease}

  .toc-body{
    border-top:1px solid var(--line);
    padding:12px 12px 14px;
  }
  .toc-list{list-style:none; margin:0; padding:0;}
  .toc-item + .toc-item{margin-top:10px}
  .toc-item a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 12px;
    border-radius:16px;
    border:1px solid rgba(24,64,72,.10);
    background:#fff;
    transition:.15s ease;
  }
  .toc-item a:hover{
    transform:translateY(-1px);
    box-shadow:0 10px 26px rgba(0,0,0,.08);
    border-color:rgba(24,64,72,.18);
  }
  .toc-badge{
    width:32px;
    height:32px;
    border-radius:999px;
    display:grid;
    place-items:center;
    font-weight:900;
    color:#b76500;
    border:1px solid rgba(251,154,27,.35);
    background:rgba(251,154,27,.14);
    flex:0 0 auto;
  }
  .toc-text{
    font-weight:900;
    color:var(--ink);
    letter-spacing:-.01em;
  }

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}
    .service-emergency{grid-template-columns:1fr}

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text, .card-split__media{display:block;}
    .service-media__box{min-height:220px; height:auto;}

    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Rapido Thermenreparatur Wien – Rapido Kundendienst &amp; Thermenwartung Wien</title>
  <meta name="description" content="Rapido Thermenreparatur Wien vom Installateur. Rapido Thermenwartung, Notdienst rund um die Uhr, Kundendienst Wien Niederösterreich &amp; Burgenland.">
@endpush

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Rapido Thermenreparatur Wien</p>

      <h1>
        Rapido Thermenreparatur<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Rapido Thermenreparatur Wien für Ihre Rapido Therme – Thermenservice, Notdienst und Wartung in Wien und Umgebung.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1rapido.jpeg') }}" alt="Rapido Thermenreparatur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Rapido Kundendienst</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Notdienst 24/7</span>
        <span class="wolf-pill">Wien &amp; Umgebung</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
        <a class="wolf-btn wolf-btn--ghost" href="#kundendienst-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="rapido-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Rapido Service</em></h2>
            <p class="promo-banner__price"><strong>Notdienst rund um die Uhr</strong></p>
            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="Anrufen">ANRUFEN</a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ✅ TOC -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <button class="toc-iconbtn" type="button" id="tocToggle"
            aria-expanded="false" aria-controls="tocBody"
            aria-label="Inhaltsverzeichnis umschalten">
            <svg viewBox="0 0 448 512" aria-hidden="true">
              <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg>
          </button>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#kundendienst-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#hilfe-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Soforthilfe</span></a></li>
            <li class="toc-item"><a href="#wartung-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Warum Rapido</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 1) Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Thermenreparatur Wien und Rapido Kundendienst</h2>
            <p>
              Unsere Rapido Thermenreparatur Wien steht für professionelle Reparatur, zuverlässigen Rapido Kundendienst und umfassenden Rapido Thermenservice.
              Als erfahrener Installateur betreuen wir Rapido Thermen, Rapido Gasgeräte und moderne Gasthermen in Wien, Niederösterreich und Umgebung.
            </p>
            <p>
              Ob Rapido Gastherme, Durchlauferhitzer oder komplettes Heizsystem – unser Techniker Team analysiert Probleme präzise und sorgt für sichere Lösungen.
              Der Rapido Kundendienst Wien übernimmt Überprüfung, Reinigung und fachgerechte Arbeiten direkt bei Ihnen zuhause.
              Mit Know-how, Berufserfahrung und klarer Terminvergabe garantieren wir effiziente Reparatur und nachhaltige Betreuung.
              Auch im Burgenland und NÖ stehen wir als verlässlicher Partner zur Verfügung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kundendienst Wien</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien, NÖ &amp; Burgenland</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Reinigung &amp; Überprüfung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Terminvergabe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/rapido.jpeg') }}" alt="Rapido Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2) Reparatur -->
  <section class="service-section service-section--soft" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur Ihrer Rapido Gastherme bei Problemen</h2>
            <p>
              Wenn Ihre Rapido Gastherme nicht mehr korrekt im Betrieb läuft oder Gasgeruch auftritt, ist rascher Einsatz entscheidend.
              Unsere Servicetechniker führen Abgasmessung, gründliche Überprüfung und gezielte Reparatur durch.
            </p>
            <p>
              Ob einzelne Ersatzteile, komplette Geräte oder Störungsdienst – wir stellen die sichere Funktion Ihrer Therme wieder her.
              Der Rapido Thermenservice kümmert sich um Gasthermen aller Modelle und arbeitet mit hochwertigen Ersatzteilen direkt vom Hersteller.
              Unsere Mitarbeiter sorgen für fachgerechte Montage, Reinigung und nachhaltige Lösungen.
              So erhöhen wir Effizienz, senken Energiekosten und sichern die Heizanlage langfristig ab.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Rapido Thermenreparatur" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3) Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Rapido Notdienst Wien rund um die Uhr</h2>
        <p>
          Bei einem Notfall steht unser Rapido Notdienst in Wien und Wien Niederösterreich rund um die Uhr zur Verfügung.
          Der Notdienst reagiert schnell bei Ausfall der Heizung, Defekt an Rapido Thermen oder akuten Gas Problemen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unser Team ist in Wien, Niederösterreich (NÖ) und Burgenland im Einsatz.
          Besonders in kalter Jahreszeit zählt jede Stunde.
          Wir sorgen für schnelle Reparatur, sichere Montage und zuverlässige Wiederherstellung Ihrer Gasthermen.
          Mit professionellem Kundenservice, hoher Kompetenz und klarer Kommunikation garantieren wir Sicherheit und effiziente Lösungen – jederzeit verfügbar.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3 style="margin:0 0 10px;">Sicherheit im Notfall</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Ausfall der Heizung oder Gastherme</li>
            <li>Akute Störung / Fehlermeldung</li>
            <li>Gasgeruch oder Sicherheitsproblem</li>
            <li>Störungsdienst &amp; Sofortmaßnahmen</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 4) Soforthilfe -->
  <section class="service-section" id="hilfe-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Soforthilfe, Störungsdienst und Einsatzgebiet</h2>
        <p>Bei Störung oder Notfall reagieren wir schnell – Techniker in Wien, Niederösterreich und Umgebung sind rasch vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Techniker in Wien, Niederösterreich und Umgebung</h3>
            <p>Unser Techniker Team betreut Wien, Umgebung, Niederösterreich und Burgenland mit schneller Terminvergabe, fachgerechter Arbeit und persönlicher Betreuung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧯</div>
          <div>
            <h3>Sicherheit und Störungsdienst bei Notfall</h3>
            <p>Bei Notfall mit Gasgeräten oder Heizsystem reagieren unsere Servicetechniker sofort und stellen durch professionelle Reparatur die sichere Funktion wieder her.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 5) Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Thermenwartung Wien für langfristige Effizienz</h2>
            <p>
              Eine regelmäßige Rapido Thermenwartung ist entscheidend für Sicherheit, Effizienz und einen stabilen Betrieb Ihrer Therme.
              Unsere professionelle Thermenwartung in Wien umfasst gründliche Überprüfung aller Gasgeräte, sorgfältige Reinigung und präzise Einstellung der Anlage.
            </p>
            <p>
              Mit strukturierter Wartung sichern wir die optimale Funktion Ihrer Rapido Thermen und verlängern die Lebensdauer deutlich.
              Unsere Techniker prüfen Gasthermen, Brennwert Systeme und komplette Heizanlage auf mögliche Probleme.
              So senken Sie Energiekosten und vermeiden teure Reparaturen – in jeder Jahreszeit.
              Der Rapido Thermenservice steht Kunden in Wien, Niederösterreich (NÖ) und Burgenland zuverlässig zur Verfügung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Reinigung &amp; Einstellung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sicherheitscheck</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Energiekosten senken</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Lebensdauer erhöhen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Rapido Thermenwartung Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6) Thermentausch -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Thermentausch und moderne Lösungen</h2>
            <p>
              Wenn wiederholte Reparaturen oder steigende Probleme auftreten, empfehlen wir einen Rapido Thermentausch.
              Der Austausch alter Rapido Thermen gegen moderne Produkte verbessert Effizienz und spart Energie.
            </p>
            <p>
              Unsere Installateure übernehmen Planung, Montage und fachgerechte Installation Ihrer neuen Rapido Gastherme.
              Dabei achten wir auf optimale Anpassung an Ihr Heizsystem sowie nachhaltige Lösungen für Ihr Zuhause.
              Wir betreuen Wien, Niederösterreich (NÖ) und Burgenland mit transparenter Terminvergabe und klarer Kostenübersicht.
              Auf Wunsch beraten wir auch zu Klimaanlagen, Badsanierung und weiteren Dienstleistungen – alles aus einer Hand.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7) Warum wir -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum Rapido Ihr Partner in Wien ist</h2>
        <p>Kompetenz, Erfahrung und professioneller Kundenservice – für Reparatur, Wartung und Notdienst aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧠</div>
          <div>
            <h3>Know-how &amp; Erfahrung</h3>
            <p>Unser Team verfügt über umfassendes Know-how im Umgang mit Rapido Gasgeräten, Gasthermen und Heizsystemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Transparente Betreuung</h3>
            <p>Klare Kommunikation, faire Kosten und saubere Arbeit – damit Sie jederzeit den Überblick behalten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Hochwertige Ersatzteile</h3>
            <p>Wir arbeiten mit hochwertigen Ersatzteilen und achten auf fachgerechte Montage und nachhaltige Lösungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🤝</div>
          <div>
            <h3>Langfristige Betreuung</h3>
            <p>Sicherheit, Effizienz und langfristige Betreuung stehen im Fokus – in Wien, NÖ und Burgenland.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 8) FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Rapido Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wie oft sollte eine Rapido Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung erhöht Sicherheit, Effizienz und verlängert die Lebensdauer Ihrer Rapido Therme.</p>
        </details>

        <details>
          <summary>2. Ist der Rapido Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Notdienst ist rund um die Uhr in Wien, Niederösterreich (NÖ) und Burgenland verfügbar.</p>
        </details>

        <details>
          <summary>3. Was umfasst der Rapido Thermenservice?</summary>
          <p>Reparatur, Wartung, Überprüfung, Reinigung, Montage und Austausch von Ersatzteilen – je nach Bedarf.</p>
        </details>

        <details>
          <summary>4. Wann ist ein Rapido Thermentausch sinnvoll?</summary>
          <p>Bei häufigem Defekt, steigenden Energiekosten oder ineffizientem Betrieb empfehlen wir einen Thermentausch.</p>
        </details>

        <details>
          <summary>5. Arbeiten Sie auch an Gasthermen anderer Hersteller?</summary>
          <p>Ja, wir betreuen neben Rapido auch weitere Marken im Bereich Gas und Heizsystem.</p>
        </details>

        <details>
          <summary>6. Wie kann ich einen Termin vereinbaren?</summary>
          <p>Kontaktieren Sie uns telefonisch oder über diese Seite zur schnellen Terminvergabe für Service oder Notfall.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 9) Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Rapido Thermenservice in Wien sichern</h2>
        <p>
          Ob Rapido Thermenreparatur Wien, Rapido Thermenwartung oder schneller Rapido Notdienst – wir stehen Ihnen rund um die Uhr zur Verfügung.
          Unser Installateur Team sorgt für professionelle Reparatur, sichere Montage und nachhaltige Lösungen für Ihre Heizung.
        </p>
        <p style="margin-top:10px;">
          Vereinbaren Sie jetzt einen Termin und profitieren Sie von transparenter Betreuung, fairen Kosten und zuverlässiger Arbeit in Wien und Umgebung.
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
          <textarea name="message" rows="4" placeholder="Gerät/Modell, Ort, Problem, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>

</main>


@endsection
