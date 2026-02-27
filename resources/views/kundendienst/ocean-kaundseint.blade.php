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

  .service-card{
    background:#fff;
    border:1px solid var(--line);
    border-radius: var(--radius);
    padding:16px;
  }

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

  /* =========================
     ✅ IMAGE = CONTENT HEIGHT
     ========================= */
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
    display:flex; /* ✅ allow children to stretch */
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
    height:100%;           /* ✅ match text height */
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
  }
  .service-media__img{
    width:100%;
    height:100%;           /* ✅ fill box */
    display:block;
    object-fit:cover;      /* ✅ no distortion */
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

  /* =========================
     ✅ TOC (AFTER HERO)
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
</style>

@push('meta')
  <title>Ocean Thermenservice Wien – Notdienst & Thermenwartung 24h</title>
  <meta name="description" content="Ocean Thermenservice Wien ✔ Notdienst rund um die Uhr ✔ Thermenwartung, Ocean Gastherme & Heizung ✔ Kundendienst Wien mit Erfahrung.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">notdienst rund um die uhr</p>

      <h1>
        Ocean Thermenservice Wien<br>
        <em>Notdienst &amp; Wartung 24h</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Defekt oder Ausfall der Therme – der Ocean Notdienst Wien ist zuverlässig für Sie da.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1oceanbaxi.jpeg') }}" alt="Ocean Thermenservice Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Kundendienst</span>
        <span class="wolf-pill">Notdienst 24h</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Ocean Service Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
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



  <!-- Vorteile / bullets -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <section class="service-section" id="kundendienst-services">
        <div class="service-container">
          <div class="card-split">
            <div class="card-split__text">
              <div class="card-box">
                <h2>Ocean Notdienst und Kundendienst Wien rund um die Uhr</h2>
                <p>
                  Thermenwartung, Reparatur und Thermenservice aus einer Hand – erfahrene Techniker, klare Lösungen und Service für Wien, Niederösterreich und Umgebung.
                </p>
              </div>
            </div>

            <div class="card-split__media service-media">
              <div class="service-media__box">
                <img class="service-media__img" src="{{ asset('img/oceanbaxi.jpeg') }}" alt="Ocean Kundendienst Wien" loading="lazy" decoding="async">
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Thermenwartung &amp; Service</h3>
            <p>Regelmäßige Wartung erhöht Sicherheit, senkt Verbrauch und reduziert Störungen im laufenden Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur &amp; Fehlerbehebung</h3>
            <p>Schnelle Hilfe bei Fehlermeldungen, Ausfällen oder wiederkehrenden Ocean Störungen – effizient und dokumentiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrene Fachleute</h3>
            <p>Geschulte Techniker und Installateure prüfen jede Therme sorgfältig und liefern nachhaltige Lösungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📍</div>
          <div>
            <h3>Regional schnell vor Ort</h3>
            <p>Kurze Wege in Wien, Niederösterreich (NÖ) und Burgenland – flexibel, zuverlässig und rasch am Einsatzort.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Ocean Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>

        <div class="card-split__text">
          <div class="card-box">
            <h2>Ocean Kundendienst Wien für Therme und Heizung</h2>
            <p>
              Der Ocean Kundendienst Wien unterstützt Kunden bei allen Anliegen rund um Ocean Therme, Ocean Heizung und moderne Gasgeräte.
              Ob privates Zuhause oder laufender Betrieb – wir bieten professionellen Service für Heizung, Gastherme und komplette Heizungsanlagen.
            </p>
            <p>
              Als erfahrener Installateur und verlässlicher Partner arbeiten wir strukturiert, transparent und lösungsorientiert.
              Unser Team prüft jede Therme sorgfältig, erkennt Probleme frühzeitig und sorgt für nachhaltige Lösungen.
              Ziel ist Komfort, Sicherheit und Effizienz – in Wien, Niederösterreich und der gesamten Umgebung.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Ocean Notdienst rund um die Uhr</h2>
        <p>
          Ein Ausfall der Ocean Gastherme, Fehlermeldungen oder plötzliche Störungen erfordern sofortiges Handeln.
          Unser Ocean Notdienst ist rund um die Uhr erreichbar – auch nachts, an Wochenenden oder Feiertagen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Wir organisieren gezielte Fehlerbehebung direkt vor Ort. Durch kurze Wege in Wien, Niederösterreich (NÖ) und Burgenland
          begrenzen wir Schäden und sorgen dafür, dass Heizung und Warmwasser rasch wieder funktionieren.
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
            <li>Ausfall der Therme oder Ocean Gasgeräte</li>
            <li>Wiederkehrende Störungen, Fehler oder Fehlermeldungen</li>
            <li>Sicherheitsrelevante Auffälligkeiten an Gastherme und Heizkörper</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            24h erreichbar – schnelle Hilfe in Wien &amp; Umgebung.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen und Vorteile auf einen Blick</h2>
        <p>Ocean Kundendienst, Thermenservice, Wartung, Reparatur und Thermentausch – klare Abläufe, transparente Betreuung und hohe Sicherheit.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Ocean Thermenwartung</h3>
            <p>Überprüfung, Reinigung, Einstellung und Funktionskontrolle nach klaren Abläufen – für sicheren Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧪</div>
          <div>
            <h3>Thermenservice Wien</h3>
            <p>Planbare Wartungen und Service-Termine zur Sicherung der Langlebigkeit Ihrer Ocean Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur &amp; Ocean Thermenreparatur</h3>
            <p>Effiziente Fehlerbehebung, dokumentiert und nachhaltig – um Folgeschäden zu vermeiden.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Ocean Gasgeräte &amp; Gastherme</h3>
            <p>Professioneller Gasgeräte-Kundendienst für Ocean Gasgeräte – sicher, sauber und nachvollziehbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Installation &amp; Thermentausch</h3>
            <p>Beratung, Installation und Inbetriebnahme – inklusive Ocean Thermentausch bei Bedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Sicherheit &amp; Effizienz</h3>
            <p>Prüfung von Gasgeräten, Abgasführung und Anlage – für effizienten Betrieb und mehr Wohlbefinden.</p>
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
            <h2>Thermenwartung, Ocean Thermenservice und Reparatur</h2>
            <p>
              Regelmäßige Thermenwartung ist ein zentraler Bestandteil für den sicheren Betrieb Ihrer Anlage.
              Unsere Ocean Thermenwartung folgt klaren Abläufen: Zustandsprüfung, Reinigung, Einstellung und Funktionskontrolle.
            </p>
            <p>
              Bei einer Reparatur arbeiten unsere Fachkräfte effizient und dokumentiert. So lassen sich Folgeschäden vermeiden,
              die Effizienz steigern und Energiekosten senken – gut für Komfort, Umwelt und Wohlbefinden.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Sicherheit</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Ocean Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur / Austausch -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Installation, Thermentausch und Ocean Thermentausch</h2>
            <p>
              Wenn Reparaturen nicht mehr sinnvoll sind, beraten wir transparent zum Thermentausch oder Ocean Thermentausch.
              Unsere Fachleute erklären Unterschiede zwischen Modellen, zeigen Alternativen auf und begleiten Installation sowie Inbetriebnahme.
            </p>
            <p>
              Dabei berücksichtigen wir den tatsächlichen Bedarf, den Zustand der Anlage und Ihre individuellen Anliegen.
              Ziel ist eine Lösung, die langfristig zuverlässig arbeitet und Ihre Anlage wieder in Bestform bringt.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Ocean Thermentausch" loading="lazy" decoding="async">
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
            <h2>Einsatzgebiet Wien, Niederösterreich und Burgenland</h2>
            <p>
              Der Ocean Notdienst Wien ist in ganz Wien, Niederösterreich (NÖ) sowie im Burgenland im Einsatz.
              Durch kurze Anfahrtszeiten und regionale Planung sind unsere Techniker rasch am Ort – auch in der Umgebung reagieren wir flexibel.
            </p>
            <p>
              Unser Notdienst steht Kunden jederzeit zur Verfügung, damit Ausfälle nicht zu größeren Schäden führen und Heizung sowie Warmwasser
              schnell wieder funktionieren.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Einsatzgebiet Ocean" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Erfahrung und Fachwissen</h2>
            <p>
              Unser erfahrenes Team besteht aus qualifizierten Installateuren, spezialisierten Technikern und engagierten Ansprechpartnern.
              Mit fundiertem Fachwissen, langjähriger Erfahrung und regelmäßiger Weiterbildung betreuen wir Ocean Anlagen aller gängigen Modelle.
            </p>
            <p>
              Diese Kombination ermöglicht präzise Diagnose, nachhaltige Reparatur und hohe Servicequalität – vom ersten Kontakt bis zur erfolgreichen Behebung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachwissen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weiterbildung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Servicequalität</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Ocean Team" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile 2 -->
  <section class="service-section service-section--soft" id="vorteile2-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kontakt, Service und persönliche Betreuung</h2>
            <p>
              Bei Fragen oder im Notfall erreichen Sie unseren Kundendienst jederzeit. Über den Kontakt auf dieser Seite koordinieren wir rasch den passenden Einsatz.
              Unsere Ansprechpartner beraten verständlich und sorgen für schnelle Unterstützung.
            </p>
            <p>
              Ob Wartung, Reparatur oder Notdienst – wir stehen unseren Kunden zuverlässig zur Seite und halten Ihre Anlage dauerhaft in Bestform.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size9.jpeg') }}" alt="Ocean Service Vorteile" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Ocean Thermenservice &amp; Notdienst Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann ist eine Ocean Thermenwartung notwendig?</summary>
          <p>Eine regelmäßige Ocean Thermenwartung sichert die Effizienz, verlängert die Lebensdauer der Therme und reduziert das Risiko von Störungen.</p>
        </details>
        <details>
          <summary>2. Gibt es eine Ocean Thermenwartung in Wien?</summary>
          <p>Ja, wir bieten Ocean Thermenwartung Wien sowie Thermenwartung Wien zuverlässig für Kunden direkt vor Ort an.</p>
        </details>
        <details>
          <summary>3. Ist der Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Notdienst ist rund um die Uhr verfügbar – auch außerhalb normaler Zeiten erhalten Kunden schnelle Hilfe.</p>
        </details>
        <details>
          <summary>4. Welche Leistungen umfasst der Thermenservice?</summary>
          <p>Der Thermenservice beinhaltet Überprüfung, Reinigung, Einstellung und Funktionskontrolle jeder Ocean Therme.</p>
        </details>
        <details>
          <summary>5. Wer ist mein Ansprechpartner im Kundendienst Wien?</summary>
          <p>Im Kundendienst Wien steht Ihnen ein fixer Ansprechpartner zur Verfügung, der Service, Termin und Ablauf koordiniert.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM ALWAYS LAST -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

@endsection
