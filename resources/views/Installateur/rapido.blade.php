@extends('layout.app')

@section('main')
<!-- <style>
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

  /* ✅ Image equal to content (no fixed height) */
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

  /* ✅ Promo banner minimal styles (kept so it renders correctly) */
  .promo-banner{margin-top:18px;}
  .promo-banner__inner{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    border:1px solid rgba(255,255,255,.18);
    background:rgba(255,255,255,.08);
    padding:16px;
  }
  .promo-banner__content{position:relative; z-index:1; display:flex;flex-direction:column; align-items:center; justify-content:space-between; gap:14px; flex-wrap:wrap;}
  .promo-banner__title{margin:0; font-size:18px; font-weight:900; color:#fff;}
  .promo-banner__price{margin:0; font-weight:900; font-size:18px; color:#fff;}
  .promo-banner__btn{
    display:inline-flex; align-items:center; justify-content:center;
    padding:10px 14px;
    border-radius:999px;
    background:var(--accent);
    color:#1a1a1a;
    font-weight:900;
  }

  /* =========================
     ✅ TOC (after hero, full width)
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
</style> -->

@push('meta')
  <title>Rapido Installateur Wien | Wartung, Reparatur & Notdienst</title>
  <meta name="description" content="Rapido Installateur Wien für Rapido Thermenwartung, Reparatur & 24 Stunden Notdienst. Service in Wien, Niederösterreich & Burgenland. Jetzt Termin sichern.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Rapido Installateur Wien</p>

      <h1>
        Rapido Installateur Wien<br>
        <em>Wartung, Reparatur &amp; Notdienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Als Rapido Installateur Wien bieten wir professionelle Rapido Thermenwartung, Reparatur und 24 Stunden Notdienst für Rapido Therme und Gasgeräte in Wien.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1rapido.jpeg') }}" alt="Rapido Installateur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">24h Notdienst</span>
        <span class="wolf-pill">ÖVGW Standards</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Termin sichern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#ablauf-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="rapido-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Rapido Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>

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
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#intro-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Intro</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Partner Wien</span></a></li>
            <li class="toc-item"><a href="#service-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Installation & Service</span></a></li>
            <li class="toc-item"><a href="#heizung-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Heizung & System</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro -->
  <section class="service-section service-section--soft" id="intro-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Installateur Wien</h2>
            <p>
              Als Rapido Installateur Wien bieten wir professionelle Rapido Thermenwartung, Reparatur und 24 Stunden Notdienst für Rapido Therme und Gasgeräte in Wien.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/rapido.jpeg') }}" alt="Rapido Installateur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partner -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Partner in Wien</h2>
            <p>
              Als erfahrener Installateur und zuverlässiger Partner für Rapido in Wien stehen wir für Qualität, Sicherheit und nachhaltigen Service.
              Unser Techniker Team betreut Rapido Therme, Rapido Gastherme und moderne Heizsysteme mit umfassendem Know how.
            </p>
            <p>
              Wir arbeiten nach aktuellen Richtlinien sowie ÖVGW-Standards und betreuen Kunden in Wien und Umgebung, Wien Niederösterreich sowie im Burgenland.
              Dank langjähriger Erfahrung kennen wir die meisten Rapido Modelle und bieten individuelle Lösungen für jedes Heizsystem.
              Unser Fokus liegt auf Effizienz, Sicherheit und stabiler Funktion Ihrer Heizanlage – alles aus einer Hand durch unser eingespieltes Team.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Rapido Partner in Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Installation, Wartung und Service -->
  <section class="service-section service-section--soft" id="service-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>
          Unsere Dienstleistungen umfassen Installationstechnik, regelmäßige Wartung und professionelles Rapido Thermenservice – transparent, sicher und zuverlässig.
        </p>
      </div>

      <div class="card-box" style="margin-bottom:14px;">
        <p>
          Unsere Dienstleistungen umfassen Installationstechnik, regelmäßige Wartung und professionelles Rapido Thermenservice für alle Rapido Produkte.
          Eine sorgfältige Überprüfung, Reinigung und Abgasmessung sichern die optimale Funktion Ihrer Rapido Therme oder Rapido Gastherme.
        </p>
        <p>
          Durch regelmäßige Rapido Thermenwartung reduzieren Sie Energiekosten und erhöhen die Effizienz Ihrer Heizung.
          Unser Rapido Kundendienst steht bei Problemen, Reparatur oder Notfall schnell zur Verfügung.
          Unsere Mitarbeiter führen Montage, Austausch und Reparatur fachgerecht durch und gewährleisten sicheren Betrieb – rund um die Uhr auch an Feiertagen.
          Kunden in Wien und Umgebung profitieren von transparenten Preisen und verlässlicher Betreuung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧱</div>
          <div>
            <h3>Rapido Therme Installation</h3>
            <p>Wir übernehmen Montage und Installation Ihrer Rapido Therme inklusive Anschluss an Gastherme, Heizsystem und fachgerechter Inbetriebnahme vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Rapido Thermenwartung Service</h3>
            <p>Unsere Rapido Thermenwartung umfasst Wartung, Überprüfung, Reinigung und Kontrolle aller sicherheitsrelevanten Komponenten Ihrer Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Reparatur und Austausch</h3>
            <p>Bei Reparatur oder Rapido Gasgerätetausch analysieren unsere Experten Probleme und führen notwendigen Austausch effizient durch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕒</div>
          <div>
            <h3>24 Stunden Notdienst</h3>
            <p>Unser Notdienst ist 24 Stunden rund um die Uhr in Wien Niederösterreich und Burgenland im Einsatz – auch an Feiertagen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Heizung, Gasgeräte und Heizsystem -->
  <section class="service-section" id="heizung-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung, Gasgeräte und Heizsystem</h2>
            <p>
              Wir betreuen Rapido Heizung, Gasgeräte, Gastherme und komplette Heizsysteme mit moderner Installationstechnik.
              Unsere Experten prüfen Funktion, Sicherheit und Brennwert-Komponenten sorgfältig.
            </p>
            <p>
              Durch regelmäßige Wartung und professionelle Überprüfung bleiben Rapido Geräte im optimalen Betrieb.
              Neben Rapido betreuen wir auch ausgewählte Marken wie Saunier Duval, De Dietrich und Viessmann.
              So bieten wir eine breite Palette an Lösungen für Heizanlage, Klimaanlagen und Sanitärsysteme.
              Unser Service deckt alles von Planung bis Montage ab und sorgt für nachhaltige Effizienz.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Heizung, Gasgeräte und Heizsystem" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise, Planung und Betreuung -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Planung und Betreuung</h2>
            <p>
              Transparente Preise, klarer Pauschalpreis und individuelle Planung sind Teil unseres Rapido Service in Wien.
              Vor Beginn aller Arbeiten erhalten Kunden einen genauen Überblick über Kosten, Leistungen und mögliche Lösungen.
            </p>
            <p>
              Unser Team steht für Beratung, Betreuung und kompetente Terminvergabe zur Verfügung.
              Als erfahrener Installateurbetrieb setzen wir auf Qualität, Erfahrung und langfristige Partnerschaft.
              Unser Ziel ist es, alles rund um Ihre Rapido Therme effizient, sicher und zuverlässig umzusetzen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klarer Pauschalpreis</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Individuelle Planung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Starke Betreuung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Preise, Planung und Betreuung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ablauf von Anfrage bis Termin</h2>
        <p>Klare Schritte – von Terminvergabe bis Umsetzung, inklusive Sicherheits- und Effizienz-Check.</p>
      </div>

      <div class="card-box">
        <p>
          Nach Ihrer Kontaktaufnahme per Telefon oder über diese Seite erfolgt eine rasche Terminvergabe für Wien und Umgebung.
          Unser Rapido Installateur Wien verschafft sich vor Ort einen genauen Überblick über Ihre Rapido Therme, Rapido Gastherme oder gesamte Heizanlage.
        </p>
        <p>
          Unsere Experten führen eine sorgfältige Überprüfung, Abgasmessung und technische Kontrolle durch.
          Anschließend erhalten Sie transparente Informationen zu Wartung, Reparatur oder notwendigem Austausch.
          Bei einem Notfall steht unser Rapido Kundendienst sofort zur Verfügung.
        </p>
        <p>
          Alle Arbeiten erfolgen nach gültigen Richtlinien, mit Fokus auf Sicherheit, Effizienz und nachhaltigen Betrieb Ihrer Heizung in Wien Niederösterreich und Burgenland.
        </p>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien, Niederösterreich und Burgenland</h2>
            <p>
              Unser Rapido Service ist in Wien und Umgebung sowie in Niederösterreich, NÖ und Burgenland im Einsatz.
              Dank kurzer Wege reagieren wir schnell bei Notdienst, Reparatur oder geplanter Rapido Thermenwartung.
            </p>
            <p>
              Unsere Einsatzgebiete umfassen private Haushalte ebenso wie gewerbliche Kunden.
              Unser Team steht rund um die Uhr zur Verfügung und betreut alle Rapido Geräte zuverlässig.
              Durch regionale Nähe sichern wir schnelle Hilfe im Notfall, transparente Betreuung und effiziente Lösungen für Heizung, Gastherme und Heizsystem.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Region Wien, Niederösterreich und Burgenland" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch -->
  <section class="service-section service-section--dark" id="tausch-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Thermentausch und Modernisierung</h2>
        <p>
          Ein Thermentausch ist sinnvoll, wenn Ihre Rapido Therme wiederholt Probleme verursacht oder nicht mehr effizient arbeitet.
          Unsere Experten beraten zu modernen Rapido Gastherme Modellen, Brennwert-Technik und energieeffizienten Heizsystemen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Der Austausch erfolgt fachgerecht inklusive Demontage, Montage und sicherer Inbetriebnahme.
          Mit Rapido Gasgerätetausch reduzieren Sie Energiekosten und steigern die Effizienz Ihrer Anlage deutlich.
          Wir sorgen dafür, dass alles optimal funktioniert und langfristig im stabilen Betrieb bleibt.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Beratung anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Mehr Effizienz durch Brennwert-Technik</li>
            <li>Weniger Energiekosten</li>
            <li>Sichere Montage & Inbetriebnahme</li>
            <li>Langfristig stabiler Betrieb</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Rapido</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Rapido Thermenwartung erfolgen?</summary>
          <p>Eine jährliche Rapido Thermenwartung erhöht Effizienz, Sicherheit und verlängert die Lebensdauer Ihrer Rapido Therme.</p>
        </details>

        <details>
          <summary>Gibt es einen 24 Stunden Notdienst?</summary>
          <p>Ja, unser 24 Stunden Notdienst ist rund um die Uhr in Wien Niederösterreich und Burgenland verfügbar.</p>
        </details>

        <details>
          <summary>Was umfasst das Rapido Thermenservice?</summary>
          <p>Das Rapido Thermenservice beinhaltet Überprüfung, Reinigung, Wartung und technische Kontrolle aller Komponenten.</p>
        </details>

        <details>
          <summary>Bieten Sie auch Reparatur bei Gastherme Problemen?</summary>
          <p>Ja, unser Rapido Kundendienst übernimmt Reparatur und Austausch bei Problemen mit Rapido Gastherme oder anderen Gasgeräte.</p>
        </details>

        <details>
          <summary>Welche Marken betreuen Sie zusätzlich?</summary>
          <p>Neben Rapido betreuen wir auch Marken wie Saunier Duval, De Dietrich und Viessmann.</p>
        </details>

        <details>
          <summary>Wie schnell erhalte ich einen Termin?</summary>
          <p>Nach Ihrer Anfrage erfolgt eine rasche Terminvergabe – unser Team reagiert flexibel und kundenorientiert.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt zum Installateur</h2>
        <p>
          Für professionelle Rapido Thermenwartung, Reparatur oder Installation steht Ihnen unser Rapido Installateur Wien jederzeit zur Verfügung.
          Unser erfahrenes Techniker Team betreut Rapido Therme, Rapido Gastherme, Gasgeräte und komplette Heizsysteme zuverlässig.
        </p>
        <p style="margin-top:10px;">
          Über Telefon oder direkt über diese Seite erreichen Sie uns schnell und unkompliziert.
          Unser Service ist rund um die Uhr verfügbar – auch an Feiertagen – damit Ihre Heizung jederzeit sicher funktioniert.
          Vertrauen Sie auf Rapido als kompetenten Partner für Heizung und Installationstechnik in Wien, Niederösterreich und Burgenland.
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
          <textarea name="message" rows="4" placeholder="Gerät/Modell, Ort, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>
</main>

@endsection
