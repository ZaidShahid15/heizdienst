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
  .card-split__media{display:flex;}

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
  .service-media{width:100%; display:flex;}
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

  /* ===== HERO (kept same class names) ===== */
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

  /* TOC */
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
  .toc-card.is-collapsed .toc-body{max-height:0; padding:0 12px; overflow:hidden;}

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
  <title>Baxi Installateur Wien | Wartung, Reparatur &amp; Notdienst</title>
  <meta name="description" content="Ihr Baxi Installateur Wien für Baxi Thermenwartung, Reparatur &amp; 24/7 Baxi Notdienst. Baxi Kundendienst Wien mit fairen Preisen. Jetzt Termin sichern.">
@endpush

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Baxi Installateur Wien</p>

      <h1>
        Baxi Installateur Wien<br>
        <em>Wartung, Reparatur &amp; Notdienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Als erfahrener Baxi Installateur Wien bieten wir professionelle Installation, Wartung und Reparatur für Baxi Thermen, Gasgeräte und Heizsysteme in Wien und Umgebung.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1baxi.jpeg') }}" alt="Baxi Installateur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Baxi Kundendienst</span>
        <span class="wolf-pill">24/7 Notdienst</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Termin sichern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="baxi-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Baxi Service &amp; Notdienst</em></h2>
            <p class="promo-banner__price"><strong>Wien • Umgebung • NÖ</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="HOTLINE">
              Hotline
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card" id="tocCard">
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
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Fachpartner</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#anlage-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Heizung &amp; Gasgeräte</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Wien &amp; Umgebung</span></a></li>
            <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Baxi Fachpartner -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Baxi Fachpartner in Wien</h2>
            <p>
              Als zertifizierter Baxi Fachpartner in Wien stehen wir für Kompetenz, Erfahrung und zuverlässigen Service rund um Baxi Thermen und moderne Heizungsanlagen.
              Unser Installateurbetrieb betreut sämtliche Baxi Produkte gemäß Vorgaben des Herstellers und arbeitet ausschließlich mit geprüften Original Ersatzteilen.
            </p>
            <p>
              Unsere Techniker verfügen über umfassendes Know how und regelmäßige Schulungen im Bereich Baxi Gasgeräte, Heizsysteme und Baxi Heizung.
              Wir betreuen Kunden in Wien und Umgebung sowie in NÖ und legen großen Wert auf langfristige Betreuung, transparente Kommunikation und nachhaltige Lösungen.
              Dank strukturierter Arbeitsweise und hoher Kompetenz gewährleisten wir sichere Installation, zuverlässige Wartung und professionellen Baxi Kundendienst.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/baxi.jpeg') }}" alt="Baxi Fachpartner in Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section service-section--soft" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>
          Unser Baxi Installateur Service umfasst die fachgerechte Installation, regelmäßige Wartung und professionelle Reparatur Ihrer Baxi Therme oder Baxi Gastherme – alles aus einer Hand.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Baxi Therme Installation</h3>
            <p>Wir übernehmen die fachgerechte Installation Ihrer Baxi Therme inklusive Anschluss an Heizung, Warmwasser und Gas sowie sichere Inbetriebnahme der Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Baxi Thermenwartung Service</h3>
            <p>Unsere Baxi Thermenwartung sowie Thermenservice und Baxi Gasgeräte Wartung sichern die Funktion, erhöhen die Heizleistung und verhindern Störung oder Defekten frühzeitig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur mit Original Ersatzteilen</h3>
            <p>Bei Reparatur verwenden wir ausschließlich Original Ersatzteilen des Herstellers, beheben Fehlercodes effizient und stellen den sicheren Betrieb Ihrer Baxi Geräte wieder her.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Baxi Notdienst rund um Uhr</h3>
            <p>Unser Baxi Notdienst sowie 24 7 Baxi Notdienst ist rund um die Uhr verfügbar und hilft bei Notfällen schnell in Wien und Umgebung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Heizung, Gasgeräte und Anlage -->
  <section class="service-section" id="anlage-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung, Gasgeräte und Anlage</h2>
            <p>
              Wir betreuen Baxi Heizung, Baxi Gasgeräte und komplette Heizungsanlage mit höchstem Fachwissen.
              Ob Baxi Gastherme, Wärmetauscher, Brenner oder komplexe Heizsysteme – unsere Techniker prüfen jedes Modell sorgfältig.
            </p>
            <p>
              Durch regelmäßige Wartung, gründliche Überprüfung und professionelle Reinigung sichern wir Effizienz, Sicherheit und stabile Warmwasser-Versorgung.
              Moderne Baxi Thermen bieten hohe Energieeffizienz und zuverlässige Heizleistung im Alltag.
              Unser Baxi Kundendienst Wien sorgt dafür, dass Ihre Anlage optimal arbeitet und langfristig einsatzbereit bleibt.
              Auch Sanitäranlagen und angrenzende Systeme werden bei Bedarf überprüft.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Effizienz &amp; Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Stabile Warmwasser-Versorgung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Gründliche Überprüfung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Professionelle Reinigung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Heizung, Gasgeräte und Anlage" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Service und Kompetenz</h2>
            <p>
              Faire Preise und transparenter Service sind fester Bestandteil unseres Installateurbetrieb.
              Vor Beginn aller Arbeiten informieren wir klar über Kosten, Leistungen und notwendigen Austausch.
            </p>
            <p>
              Kunden profitieren von nachvollziehbarer Preisstruktur, kompetenter Beratung und persönlichem Kundenservice.
              Unser Team steht für Kompetenz, Erfahrung und strukturierte Abläufe – vom ersten Termin bis zum laufenden Betrieb Ihrer Baxi Therme.
              Vertrauen, Qualität und nachhaltige Betreuung stehen dabei im Mittelpunkt unseres täglichen Einsatzes in Wien.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Faire Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kompetente Beratung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Strukturierte Abläufe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Preise, Service und Kompetenz" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf von Anfrage bis Termin</h2>
            <p>
              Der Ablauf bei unserem Baxi Installateur Wien ist klar strukturiert und kundenorientiert.
              Nach Ihrer Kontaktaufnahme über diese Seite vereinbaren wir rasch einen Termin für Wien und Umgebung oder NÖ.
            </p>
            <p>
              Unser Baxi Kundendienst Wien analysiert vor Ort Ihre Baxi Therme, Baxi Gastherme oder gesamte Heizungsanlage und führt eine sorgfältige Überprüfung durch.
              Anschließend erhalten Sie eine transparente Einschätzung zu Wartung, Reparatur oder notwendigem Austausch.
              Unsere Techniker erklären mögliche Fehlercodes, zeigen Lösungen auf und setzen alle Arbeiten fachgerecht um.
              Dank Erfahrung, Kompetenz und effizienter Organisation stellen wir einen sicheren Betrieb Ihrer Anlage sicher – schnell, zuverlässig und professionell.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Ablauf von Anfrage bis Termin" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wien und Umgebung -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien und Umgebung</h2>
            <p>
              Unser Baxi Installateur Service ist in ganz Wien und Umgebung sowie in NÖ im Einsatz.
              Durch kurze Anfahrtswege reagieren wir flexibel auf Terminwünsche, Notfällen oder akute Störung.
            </p>
            <p>
              Unser Baxi Kundendienst steht rund um die Uhr zur Verfügung und betreut Wohnungen, Häuser und kleinere Betriebe gleichermaßen.
              Kunden schätzen unsere Verlässlichkeit, klare Kommunikation und schnelle Reaktionszeiten.
              Als regionaler Fachpartner kennen wir die technischen Gegebenheiten vor Ort und bieten nachhaltige Lösungen für Heizung, Gasgeräte und Warmwasser-Systeme.
              Unser Servicepartner-Team sorgt dafür, dass Ihre Baxi Thermen dauerhaft effizient arbeiten.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Wien und Umgebung" loading="lazy" decoding="async">
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
            <h2>Thermentausch und Austausch</h2>
            <p>
              Ein Thermentausch ist sinnvoll, wenn Ihre Baxi Therme häufige Defekten oder wiederkehrende Störung aufweist.
              Unser Baxi Installateur prüft das bestehende Modell, analysiert Energieeffizienz und Heizleistung und empfiehlt bei Bedarf einen modernen Ersatz.
            </p>
            <p>
              Der Austausch erfolgt fachgerecht inklusive Demontage, Installation und Inbetriebnahme der neuen Anlage.
              Wir beraten zur Wahl passender Baxi Produkte und sorgen für optimale Anpassung an Ihr Heizsystem.
              Durch moderne Technik, hochwertige Komponenten und geprüfte Original Ersatzteilen wird die Lebensdauer deutlich verlängert.
              So profitieren Kunden von stabilem Betrieb, niedrigeren Kosten und langfristiger Sicherheit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Thermentausch und Austausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Baxi</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Baxi Thermenwartung notwendig?</summary>
          <p>Eine regelmäßige Wartung einmal jährlich wird empfohlen. Die Wartung Ihrer Baxi Therme erhöht Lebensdauer, Effizienz und reduziert Störung.</p>
        </details>

        <details>
          <summary>Gibt es einen Baxi Notdienst?</summary>
          <p>Ja, unser Baxi Notdienst sowie 24 7 Baxi Notdienst ist rund um die Uhr erreichbar – auch bei akuten Notfällen.</p>
        </details>

        <details>
          <summary>Was macht der Baxi Kundendienst Wien?</summary>
          <p>Der Baxi Kundendienst Wien übernimmt Wartung, Reparatur, Thermenservice und Behebung von Fehlercodes.</p>
        </details>

        <details>
          <summary>Verwenden Sie Original Ersatzteilen?</summary>
          <p>Ja, wir arbeiten ausschließlich mit Original Ersatzteilen des Herstellers für maximale Sicherheit.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Wien und Umgebung?</summary>
          <p>Unser Baxi Installateur Service ist in Wien und Umgebung sowie NÖ zuverlässig im Einsatz.</p>
        </details>

        <details>
          <summary>Wie schnell bekomme ich einen Termin?</summary>
          <p>Nach Ihrer Anfrage erhalten Sie rasch einen Termin – unser Team reagiert flexibel und kundenorientiert.</p>
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
          Für professionelle Wartung, Reparatur oder Installation steht Ihnen unser Baxi Installateur Wien jederzeit zur Verfügung.
          Unser Team aus erfahrenen Technikern und qualifizierten Fachkräften betreut Baxi Thermen, Baxi Gasgeräte und komplette Heizungsanlage zuverlässig.
        </p>
        <p style="margin-top:10px;">
          Über diese Seite können Sie unkompliziert Kontakt aufnehmen und einen Termin vereinbaren.
          Unser Baxi Kundendienst Wien steht rund um die Uhr bereit, um Probleme schnell zu lösen.
          Vertrauen Sie auf Erfahrung, Fachwissen und einen Installateurbetrieb, der Service, Kompetenz und langfristige Betreuung in den Mittelpunkt stellt.
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
          <textarea name="message" rows="4" placeholder="Therme/Anlage, Ort, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>

</main>

@endsection
