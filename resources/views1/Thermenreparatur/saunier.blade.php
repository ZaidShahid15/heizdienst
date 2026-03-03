Saunier-Duval.html






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
    /* object-fit:cover;  ✅ fill nicely */
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

  /* Mobile */
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
  <title>Saunier Duval Thermenreparatur Wien – Notdienst & Thermenwartung Wien</title>
  <meta name="description" content="Saunier Duval Thermenreparatur Wien vom Fachbetrieb. Thermenwartung Wien, Duval Thermenservice, Notdienst rund um die Uhr in Wien und Niederösterreich.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Saunier Duval Notdienst rund um die Uhr</p>

      <h1>
        Saunier Duval Thermenreparatur Wien<br>
        <em>Notdienst & Thermenwartung Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe für Ihre Saunier Duval Therme in Wien – Reparatur, Thermenwartung und Notdienst rund um die Uhr.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1sauneri.jpeg') }}" alt="Saunier Duval Thermenreparatur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenreparatur</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Notdienst</span>
        <span class="wolf-pill">Thermentausch</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Saunier Duval Thermenreparatur Aktion</em></h2>
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
          <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Saunier Duval Service</span></a></li>
          <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Experten</span></a></li>
          <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
          <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Thermenwartung</span></a></li>
          <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparatur</span></a></li>
          <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
          <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Thermentausch</span></a></li>
          <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Region</span></a></li>
          <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
          <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <!-- ✅ UPDATED: card box left + image right -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Thermenreparatur Wien und Kundendienst</h2>
            <p>
              Unsere Saunier Duval Thermenreparatur Wien bietet professionelle Thermenreparatur, zuverlässigen Kundendienst und umfassenden Service für alle Saunier Duval Gasgeräte. Als erfahrener Installateur betreuen wir jede Saunier Duval Therme, moderne Duval Therme sowie effiziente Gastherme Modelle direkt vor Ort in Wien und Umgebung.
            </p>
            <p>
              Unsere Techniker analysieren Probleme rasch und führen jede Reparatur nach Vorgaben vom Hersteller durch. Ob Thermenstörung, Heizungsausfall oder allgemeine Probleme im Betrieb – unser Team sorgt für eine nachhaltige Lösung. Durch regelmäßige Thermenwartung erhöhen wir Sicherheit, Effizienz und Langlebigkeit Ihrer Anlage. Wir betreuen Wien, Niederösterreich und stehen als verlässlicher Partner jederzeit zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/sauneri.jpeg') }}" alt="Saunier Duval Thermenreparatur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left, content right) -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Thermenreparatur Wien Experten</h2>
            <p>
              Unser Team besteht aus erfahrenen Servicetechnikern und Installateuren mit umfassendem Know-how im Umgang mit Saunier Duval Gasthermen und Duval Thermen. Jeder Techniker arbeitet nach hohen Qualitätsstandards und führt Reparaturen mit höchster Professionalität durch.
            </p>
            <p>
              Durch laufende Schulungen sichern wir eine kompetente Betreuung aller Systeme. Klare Abläufe, Zuverlässigkeit und persönliche Betreuung schaffen Vertrauen und langfristige Kundenzufriedenheit. Unsere Spezialisten prüfen Heizsysteme, Heizkörper und komplette Anlagen, um maximale Wärme und Komfort sicherzustellen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Herstellerzertifiziert</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Laufende Schulungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Persönliche Betreuung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size3.jpegs.jpeg') }}" alt="Saunier Duval Experten" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen (kept as grid) -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen unseres Saunier Duval Kundendienstes</h2>
        <p>Reparatur Ihrer Saunier Duval Gastherme, Thermenwartung und Notdienst – professionell betreut.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Saunier Duval Gasgeräte Service</h3>
            <p>Service für alle Saunier Duval Gasgeräte inklusive Überprüfung, Wartung und sicherer Funktion im gesamten Zuhause.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Duval Thermenservice Wien</h3>
            <p>Professioneller Duval Thermenservice Wien mit gründlicher Kontrolle, Reinigung und Wartung aller Komponenten für Effizienz und Sicherheit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Saunier Duval Gastherme Reparatur</h3>
            <p>Wenn Ihre Saunier Duval Gastherme nicht mehr korrekt funktioniert, führen unsere Experten eine präzise Kontrolle durch und beheben jede Thermenstörung fachgerecht.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Soforthilfe bei Heizungsausfall</h3>
            <p>Bei dringenden Problemen mit Ihrer Saunier Duval Therme reagieren unsere Profis sofort und stellen durch fachgerechte Reparatur die sichere Funktion wieder her.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Abgasmessung & Reinigung</h3>
            <p>Mit gezielter Reinigung und sorgfältiger Wartung sichern wir die optimale Funktion Ihrer Saunier Duval Therme und erhöhen die Lebensdauer deutlich.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Saunier Duval Thermentausch</h3>
            <p>Wenn wiederholte Reparaturen oder steigende Probleme auftreten, beraten wir Sie umfassend zum Saunier Duval Thermentausch für mehr Effizienz und Komfort.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: card split (image right) -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Thermenwartung Wien für Sicherheit und Effizienz</h2>
            <p>
              Eine regelmäßige Thermenwartung ist entscheidend für die Sicherheit und langfristige Funktion Ihrer Saunier Duval Therme. Unsere professionelle Thermenwartung Wien sowie spezialisierte Saunier Duval Thermenwartung umfasst gründliche Kontrolle aller Gasgeräte, sorgfältige Reinigung wichtiger Komponenten und präzise Überprüfung der gesamten Anlage.
            </p>
            <p>
              Durch konsequente Wartung Ihrer Saunier Duval Gasgeräte erhöhen wir Effizienz, reduzieren Probleme und vermeiden teure Ausfälle. Unsere Techniker arbeiten nach Vorgaben vom Hersteller und sorgen für optimale Performance Ihrer Duval Therme. Mit einem individuellen Wartungsvertrag sichern Sie dauerhafte Lebensdauer, stabile Wärme und zuverlässigen Betrieb.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Ausfälle</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Saunier Duval Thermenwartung Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left) -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur Ihrer Saunier Duval Gastherme bei Störung</h2>
            <p>
              Wenn Ihre Saunier Duval Gastherme nicht mehr korrekt funktioniert oder Ihre Duval Gastherme Ausfälle zeigt, ist rasche Hilfe entscheidend. Unsere Experten führen eine präzise Kontrolle aller Gasgeräte durch und beheben jede Thermenstörung fachgerecht. Die Reparatur erfolgt mit hochwertigen Materialien und professioneller Technik.
            </p>
            <p>
              Ob kleinere Probleme oder komplexe Schäden – wir kümmern uns um Ihr Gerät zuverlässig. Unsere Spezialisten prüfen Heizsysteme, Heizkörper und komplette Anlagen, um maximale Wärme und Komfort sicherzustellen. Mit gezielter Reinigung und sorgfältiger Wartung sichern wir die optimale Funktion Ihrer Saunier Duval Therme.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hochwertige Materialien</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Präzise Diagnose</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Lösungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Reparatur Saunier Duval Gastherme" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (kept dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Saunier Duval Notdienst Wien rund um die Uhr</h2>
        <p>
          Bei akuten Ausfällen steht unser Saunier Duval Notdienst in Wien rund um die Uhr zur Verfügung. Ob Heizungsausfall, Defekt an der Duval Therme oder sicherheitsrelevantes Problem – unsere Techniker sind schnell am Ort. Der Notdienst betreut Wien und Niederösterreich zuverlässig.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Besonders in kalten Monaten zählt jede Stunde, um Wärme und Komfort zuhause wiederherzustellen. Unser Duval Thermenservice Wien sorgt für schnelle Reparatur und sichere Inbetriebnahme Ihrer Gasthermen. Als erfahrener Spezialist bieten wir professionelle Leistungen mit transparenten Preisen und klarer Terminvereinbarung.
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
            <li>Defekt an der Duval Therme</li>
            <li>Sicherheitsrelevante Probleme</li>
            <li>Keine Warmwasserversorgung</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr erreichbar – schnelle Hilfe vor Ort in Wien und Niederösterreich.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: card split (image right) -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Thermentausch und moderne Installation</h2>
            <p>
              Wenn wiederholte Reparaturen oder steigende Probleme auftreten, kann ein Thermentausch sinnvoll sein. Unser Spezialistenteam berät Sie umfassend zum Saunier Duval Thermentausch sowie Duval Thermentausch moderner Modelle. Wir analysieren Ihre bestehende Anlage und empfehlen eine passende Lösung für mehr Effizienz und Komfort.
            </p>
            <p>
              Die Installation erfolgt fachgerecht durch erfahrene Installateure und Techniker direkt vor Ort in Wien und Umgebung. Auch die fachgerechte Entsorgung alter Geräte übernehmen wir zuverlässig. Mit moderner Technik, hochwertigen Materialien und professioneller Montage steigern wir die Leistung Ihrer Heizung nachhaltig. Selbstverständlich erhalten Sie ein transparentes Angebot mit klaren Preisen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Saunier Duval Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left) -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Techniker in Wien und Niederösterreich im Einsatz</h2>
            <p>
              Unser Team betreut Wien, Umgebung und Niederösterreich mit schneller Unterstützung, kompetenter Installation und persönlichem Ansprechpartner vor Ort. Kurze Wege und regionale Nähe sichern schnellen Service in allen Regionen.
            </p>
            <p>
              Wir sind in Wien und Niederösterreich zuverlässig im Einsatz und bieten persönliche Betreuung vor Ort. Ob Thermenreparatur, Wartung oder Notdienst – wir sind jederzeit zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Techniker Wien Niederösterreich" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Saunier Duval Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung erhöht Effizienz, Sicherheit und Lebensdauer Ihrer Saunier Duval Therme deutlich.</p>
        </details>

        <details>
          <summary>Ist der Saunier Duval Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Notdienst ist rund um die Uhr in Wien und Niederösterreich verfügbar.</p>
        </details>

        <details>
          <summary>Was umfasst der Duval Thermenservice Wien?</summary>
          <p>Der Duval Thermenservice Wien beinhaltet Reparatur, Kontrolle, Reinigung, Installation und umfassende Leistungen für alle Saunier Duval Gasgeräte.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Ausfällen, steigenden Problemen oder verminderter Effizienz empfehlen wir einen Thermentausch.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Kunden außerhalb von Wien?</summary>
          <p>Wir sind in Wien, Umgebung und Niederösterreich zuverlässig im Einsatz.</p>
        </details>

        <details>
          <summary>Wie kann ich Kontakt aufnehmen?</summary>
          <p>Sie erreichen uns über diese Seite oder telefonisch zur Terminvereinbarung für Service oder Beratung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ✅ CONTACT FORM ALWAYS LAST -->
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