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

  /* ✅ Stats pills (2 in a row) */
  .service-stats{
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap:10px;
    margin-top:14px;
  }
  .service-stat{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background:#eef3f3;
    border:1px solid rgba(24,64,72,.22);
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

  /* ✅ Card split: equal height columns */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* equal height columns */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{display:flex;}

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

  /* ✅ Image wrapper (inner div controls size, img is 100% both ways) */
  .img-wrap{
    width:100%;
    height:100%; /* match text height */
    display:flex;
  }
  .img-wrap__inner{
    width:100%;
    height:100%; /* match text height */
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
  }
  .img-wrap__inner img{
    width:100%;
    height:100%;
    /* object-fit:cover; */
    object-position:center;
    display:block;
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
  .wolf-hero__inner{
    position:relative; z-index:2;
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
    opacity:.5;
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

  /* ✅ TOC (FINAL LIKE YOUR PREVIOUS SITE) */
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
  .toc-card:not(.is-collapsed) .toc-body{display:block;}

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
    letter-spacing:-.01em;
    font-weight:900;
  }
  .toc-iconbtn{
    width:40px; height:40px;
    display:grid; place-items:center;
    border-radius:12px;
    border:1px solid var(--line);
    background:#fff;
    cursor:pointer;
    flex:0 0 auto;
  }
  .toc-iconbtn svg{width:18px; height:18px; fill:var(--ink); transition:transform .18s ease}

  .toc-body{
    border-top:1px solid var(--line);
    padding:12px 12px 14px;
    /* no fixed height, no overflow => no scrollbar */
  }

  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
    /* no max-height, no overflow => no empty space */
  }

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
    color:var(--accent);
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
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text,.card-split__media{display:block;}

    .img-wrap,
    .img-wrap__inner{min-height:240px;}

    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Viessmann Thermenreparatur Wien – Notdienst &amp; Thermenwartung Wien</title>
  <meta name="description" content="Viessmann Thermenreparatur Wien vom Fachmann. Notdienst rund um die Uhr, Viessmann Thermenwartung, Thermenservice &amp; Thermentausch in Wien, Niederösterreich und Burgenland.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">notdienst • service • reparatur</p>

      <h1>
        Viessmann Thermenreparatur<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe für Ihre Viessmann Therme in Wien – Reparatur, Thermenservice und Notdienst rund um die Uhr.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1viesman.jpeg') }}" alt="Viessmann Thermenreparatur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparaturen</span>
        <span class="wolf-pill">Notdienst 24/7</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#service-services">Service ansehen</a>
      </div>

      <section class="promo-banner" id="viessmann-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Viessmann Kundendienst</em></h2>
            <p class="promo-banner__price"><strong>rund um die Uhr</strong></p>

            <a class="promo-banner__btn" href="#kontakt-services" aria-label="Kontakt">
              Kontakt
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC (AFTER HERO) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
            <button class="toc-iconbtn" type="button" id="tocToggle"
              aria-expanded="false" aria-controls="tocBody"
              aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#service-services"><span class="toc-badge">01</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#reparatur-services"><span class="toc-badge">02</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#hilfe-services"><span class="toc-badge">04</span><span class="toc-text">Soforthilfe</span></a></li>
            <li class="toc-item"><a href="#wartung-services"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#tausch-services"><span class="toc-badge">06</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#team-services"><span class="toc-badge">07</span><span class="toc-text">Warum wir</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Service -->
  <section class="service-section" id="service-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Viessmann Thermenreparatur und Service in Wien</h2>
            <p>
              Eine funktionierende Viessmann Therme ist entscheidend für zuverlässige Heizung, warmes Wasser und einen sicheren Betrieb im Hause.
              Unsere Viessmann Thermenreparatur Wien bietet professionelle Reparatur und umfassenden Viessmann Thermenservice für alle gängigen Geräte und Gasgeräte der Marke Viessmann.
            </p>
            <p>
              Ob Wohnung, Einfamilienhaus oder gewerblicher Standort – wir betreuen Kunden in Wien und Umgebung mit fachgerechtem Service.
              Als erfahrener Installateur und Partner für moderne Heiztechnik kümmern wir uns um Störungen, Schäden und jedes technische Problem rasch und effizient.
              Durch gezielte Überprüfung aller relevanten Punkte sichern wir Funktion, Effizienz und Langlebigkeit Ihrer Heizsysteme – zuverlässig direkt vor Ort.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/viesman.jpeg') }}" alt="Viessmann Thermenservice Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section service-section--soft" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur Ihrer Viessmann Therme bei Störungen</h2>
            <p>
              Wenn Ihre Viessmann Therme ein Problem zeigt oder die Gastherme nicht mehr richtig arbeitet, ist schnelle Thermenreparatur gefragt.
              Unsere Techniker führen eine präzise Überprüfung durch und analysieren Störungen strukturiert.
            </p>
            <p>
              Die Reparatur erfolgt nach Herstellervorgaben, damit Sicherheit und Leistung Ihrer Heizungsanlage gewährleistet bleiben.
              Wir kümmern uns um Gastherme, Thermenservice und notwendige Montage einzelner Komponenten.
              Bei Bedarf beraten wir auch zu Thermentausch oder effizienteren Systemen.
              Unser Ziel ist es, die Energieeffizienz zu verbessern, Energiekosten zu senken und Ihre Viessmann Therme langfristig in Betrieb zu halten.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Präzise Überprüfung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Reparatur</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Effizienz verbessern</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Langlebiger Betrieb</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-3.jpg') }}" alt="Viessmann Reparatur Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Viessmann Notdienst Wien rund um die Uhr</h2>
        <p>
          Bei einem Notfall steht unser Viessmann Notdienst in Wien rund um die Uhr zur Verfügung.
          Egal ob plötzlicher Ausfall der Heizung, kein warmes Wasser oder sicherheitsrelevante Störungen – unser Team reagiert sofort.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Der Notdienst ist in Wien, Niederösterreich und auch im Burgenland aktiv.
          Unsere Experten sind rasch am Ort und sorgen für eine schnelle Lösung, damit Sie sich zuhause wieder wohlfühlen.
          Besonders in kalten Monaten zählt jede Uhr. Wir stellen die Funktion Ihrer Viessmann Therme zuverlässig wieder her und minimieren mögliche Schäden.
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
            <li>Heizungsausfall</li>
            <li>Kein warmes Wasser</li>
            <li>Sicherheitsrelevante Störung</li>
            <li>Fehlermeldung / Ausfall</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr verfügbar – Wien, Niederösterreich &amp; Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Soforthilfe -->
  <section class="service-section" id="hilfe-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Soforthilfe bei Heizung und Wasser Problem</h2>
        <p>Bei akuten Störungen oder Notfall mit Ihrer Gastherme reagieren unsere Techniker schnell und sorgen für sichere Funktion und effiziente Heizleistung.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Schnelle Störungsbehebung</h3>
            <p>Wir reagieren sofort auf Störungen, Ausfall oder Fehlermeldung und stellen Warmwasser und Heizung zuverlässig wieder her.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Techniker in Wien, Niederösterreich und Umgebung</h3>
            <p>Unsere erfahrenen Mitarbeiter betreuen Wien, Niederösterreich und Burgenland mit Know-how, moderner Heiztechnik und hoher Effizienz.</p>
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
            <h2>Viessmann Thermenwartung Wien für Effizienz und Langlebigkeit</h2>
            <p>
              Eine regelmäßige Viessmann Thermenwartung ist einer der wichtigsten Punkte für die Sicherheit und Effizienz Ihrer Heizung.
              Unsere professionelle Thermenwartung Wien umfasst gründliche Wartung, sorgfältige Reinigung sowie detaillierte Überprüfung aller sicherheitsrelevanten Komponenten.
            </p>
            <p>
              Die Wartung Ihrer Viessmann sorgt dafür, dass Abgaswerte stimmen, die Heizleistung konstant bleibt und keine unnötigen Energiekosten entstehen.
              Mit strukturierter Thermenwartung und modernem Viessmann Thermenservice verlängern wir die Langlebigkeit Ihrer Therme deutlich.
              So sparen Sie Geld, erhöhen die Energieeffizienz und sichern den störungsfreien Betrieb Ihrer Viessmann Therme im Hause.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Energiekosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Saubere Abgaswerte</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-4.jpg') }}" alt="Viessmann Thermenwartung Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch und Installation moderner Viessmann Systeme</h2>
            <p>
              Wenn Reparatur und wiederholte Wartung nicht mehr wirtschaftlich sind, beraten wir Sie umfassend zum Thermentausch.
              Moderne Viessmann Systeme bieten höhere Effizienz, bessere Leistung und geringere Kosten im laufenden Betrieb.
            </p>
            <p>
              Wir analysieren Ihre bestehende Heizungsanlage und empfehlen passende Lösungen aus dem Bereich Viessmann Heiztechnik.
              Unsere Installateur übernehmen Installation, Montage und fachgerechte Inbetriebnahme direkt bei Ihnen zuhause.
              Selbstverständlich erstellen wir ein transparentes Angebot inklusive MwSt und klarer Kostenübersicht.
            </p>

            <ul class="service-checklist">
              <li>Analyse Ihrer Heizungsanlage</li>
              <li>Beratung &amp; transparente Kosten</li>
              <li>Installation &amp; Inbetriebnahme</li>
              <li>Effiziente, moderne Systeme</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-2.jpg') }}" alt="Viessmann Thermentausch Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum wir Ihr Viessmann Partner in Wien sind</h2>
        <p>Service aus einer Hand – Thermenservice, Wartung, Reparatur und Notdienst mit erfahrenen Experten und klaren Abläufen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Erfahrene Experten</h3>
            <p>Unser Team bringt langjährige Praxis im Bereich Heiztechnik und Viessmann Thermenservice mit – zuverlässig in Wien und Umgebung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧠</div>
          <div>
            <h3>Fachwissen &amp; Schulungen</h3>
            <p>Durch regelmäßige Schulungen bleiben unsere Mitarbeiter technisch am neuesten Stand der Marken und Systeme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Transparente Dienstleistungen</h3>
            <p>Klare Angebote, saubere Terminvergabe und nachvollziehbare Kosten – inklusive MwSt und abgestimmten Leistungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕒</div>
          <div>
            <h3>Regionale Betreuung</h3>
            <p>Wir betreuen Wien, Niederösterreich und Burgenland persönlich – inklusive Notdienst und regelmäßiger Wartung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Viessmann Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Viessmann Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung erhöht Effizienz, Sicherheit und Langlebigkeit Ihrer Viessmann Therme deutlich.</p>
        </details>

        <details>
          <summary>Bieten Sie einen Notdienst rund um die Uhr an?</summary>
          <p>Ja, unser Viessmann Notdienst ist rund um die Uhr in Wien, Niederösterreich und Burgenland verfügbar.</p>
        </details>

        <details>
          <summary>Was umfasst die Wartung Ihrer Viessmann Therme?</summary>
          <p>Reinigung, Überprüfung aller Komponenten, Kontrolle der Abgaswerte und Optimierung der Heizleistung.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Störungen, steigenden Energiekosten oder nachlassender Effizienz empfehlen wir einen Thermentausch.</p>
        </details>

        <details>
          <summary>Sind die Kosten transparent ausgewiesen?</summary>
          <p>Ja, Sie erhalten ein klares Angebot inklusive MwSt, damit alle Kosten nachvollziehbar bleiben.</p>
        </details>

        <details>
          <summary>In welchen Regionen sind Sie tätig?</summary>
          <p>Wir betreuen Wien, Niederösterreich, Burgenland und weitere Umgebung zuverlässig vor Ort.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
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
</script> -->

@endsection
