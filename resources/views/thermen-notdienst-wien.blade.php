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
    .card-split__text,
    .card-split__media{display:block;}
    .service-media__box{min-height:220px; height:auto;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Thermen Notdienst Wien | 24h Notdienst Wien & Umgebung</title>
  <meta name="description" content="Thermen Notdienst Wien ✓ 24h Notdienst Wien bei Thermenausfall, Gasgeruch & Heizungsausfall. Installateur in Wien & Umgebung. Jetzt anrufen oder E Mail senden!">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">24h Notdienst – Ihr schneller Helfer</p>

      <h1>
        Thermen Notdienst Wien<br>
        <em>– rund um die Uhr für Sie da</em>
      </h1>

      <p class="wolf-hero__sub">
        Ein plötzlicher Thermenausfall, kein Warmwasser oder eine akute Thermenstörung? Unser Thermen Notdienst Wien ist Ihr schneller und zuverlässiger Ansprechpartner bei jedem Notfall rund um Ihre Therme.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/nordgas.png') }}" alt="Thermen Notdienst Wien – Logo" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">24h Notdienst</span>
        <span class="wolf-pill">Schnelle Hilfe</span>
        <span class="wolf-pill">Installateur vor Ort</span>
        <span class="wolf-pill">Alle Bezirke</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Unsere Leistungen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Notfall? Sofort helfen wir!</em></h2>
            <p class="promo-banner__price"><strong>Rufen Sie an</strong></p>
            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
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
            <button class="toc-iconbtn" type="button" id="tocToggle" aria-expanded="false" aria-controls="tocBody" aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true" style="transform: rotate(0deg); transition: transform 0.18s;">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Notdienst Wien</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">24h erreichbar</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Schnelle Hilfe</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Sicherheit</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparatur & Austausch</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Full Service</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Fragen & Antworten</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermen Notdienst Wien (Einleitung) -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermen Notdienst Wien – Ihr schneller Helfer</h2>
            <p>
              Ein plötzlicher Thermenausfall, kein Warmwasser oder eine akute Thermenstörung? Unser Thermen Notdienst Wien ist Ihr schneller und zuverlässiger Ansprechpartner bei jedem Notfall rund um Ihre Therme. Als erfahrener Thermen Notdienst in Wien sind wir in ganz Wien und Umgebung sowie in Wien und Niederösterreich rasch vor Ort. Ob defekte Gastherme, Heizungsausfall, Gasgeruch oder ein angezeigter Fehlercode – unser Notdienst Wien steht Ihnen sofort zur Verfügung.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Rasch vor Ort</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Alle Bezirke</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Erfahrene Techniker</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1NordGas.png') }}" alt="Thermen Notdienst Wien – Team im Einsatz" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 24h Thermen Notdienst – rund um die Uhr -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>24h Thermen Notdienst in Wien – Rund um die Uhr erreichbar</h2>
            <p>
              Unser Thermen Notdienst ist rund um die Uhr, auch an Wochenenden und Feiertagen, für Sie im Einsatz. Gerade bei einem plötzlichen Thermenausfall oder bei Heizungsausfällen zählt jede Minute.
              Als professioneller Installateur in Wien reagieren wir mit kurzer Reaktionszeit und bieten sofortige Hilfe. Unsere geschulten Mitarbeiter prüfen Ihre Therme, analysieren den Fehlercode, beheben technische Fehler und führen eine fachgerechte Reparatur durch.
              Der Installateur Notdienst in Wien ist in allen Bezirken aktiv – schnell, strukturiert und zuverlässig.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="24h Notdienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Schnelle Hilfe bei Thermenausfall & Heizungsproblemen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Schnelle Hilfe bei Thermenausfall & Heizungsproblemen</h2>
        <p>Unser spezialisierter Thermen Notdienst Wien sorgt dafür, dass Ihre Heizung und Ihr Warmwasser rasch wieder funktionieren.</p>
      </div>
      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Thermenausfall / Heizungsausfall</h3>
            <p>Kompletter Ausfall? Wir diagnostizieren die Ursache und bringen Ihre Anlage schnell wieder in Betrieb.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">💧</div>
          <div>
            <h3>Kein Warmwasser</h3>
            <p>Ob defekte Gastherme oder Störung – wir sorgen für sofortige Wiederherstellung Ihrer Warmwasserversorgung.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔊</div>
          <div>
            <h3>Ungewöhnliche Geräusche</h3>
            <p>Klopfen, Pfeifen oder Rauschen? Unsere Techniker orten die Quelle und beheben das Problem.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📟</div>
          <div>
            <h3>Fehlercode-Analyse</h3>
            <p>Ihre Therme zeigt einen Fehlercode? Wir entschlüsseln die Meldung und reparieren fachgerecht.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Gastherme & Sicherheit im Notfall (dark panel) -->
  <section class="service-section service-section--dark" id="warum-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Gastherme & Sicherheit im Notfall</h2>
        <p>
          Bei einem Defekt an Ihrer Gastherme ist besondere Vorsicht geboten. Ein wahrnehmbarer Gasgeruch oder möglicher Gasaustritt stellt einen akuten Notfall dar. Unser Thermen Notdienst in Wien ist in solchen Situationen sofort zur Stelle.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere erfahrenen Installateur kontrollieren die gesamte Installation, prüfen Leitungen für Gas und Wasser und stellen sicher, dass keine Gefahr besteht. Bei technischer Unsicherheit sollten Sie nicht selbst handeln – kontaktieren Sie direkt unseren Notdienst Wien. Schnelle Hilfe, professionelle Reparatur und maximale Sicherheit stehen bei uns im Mittelpunkt.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notfall melden</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">Sicherheitstipps</a>
        </div>
      </div>
      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Notfall-Checkliste</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Gasgeruch? Nicht zündeln, lüften, Notdienst rufen</li>
            <li>Therme ausgeschaltet? Nicht selbst öffnen</li>
            <li>Wasser austritt? Haupthahn schließen</li>
            <li>Unsicher? Sofort Profi kontaktieren</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur, Austausch und Installation von Gasthermen -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Austausch und Installation von Gasthermen</h2>
            <p>
              Nicht jeder Thermenausfall lässt sich kurzfristig beheben. In manchen Fällen ist ein Austausch sinnvoll. Unser Thermen Notdienst Wien berät Sie transparent zu jeder Option.
              Wir übernehmen die fachgerechte Installation, präzise Montage und den Austausch Ihrer alten Gastherme gegen ein modernes, effizientes Modell. Unser Team kennt alle gängigen Marken und sorgt für eine saubere Umsetzung.
              Auch ältere Heizkessel oder komplexe Heizsystem-Lösungen werden von unserem Installateur professionell betreut. Als verlässlicher Partner für Kunden in Wien und Niederösterreich stehen wir dauerhaft zur Verfügung.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachgerechte Installation</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Alle Marken</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Beratung</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Gasthermen Austausch und Installation" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermenwartung & langfristiger Service -->
  <section class="service-section service-section--soft" id="notdienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermenwartung & langfristiger Service</h2>
            <p>
              Neben dem akuten Thermen Notdienst bieten wir professionelle Thermenwartung, regelmäßige Wartung und umfassenden Thermenservice. Eine gepflegte Gastherme reduziert das Risiko von Heizungsausfällen und verlängert die Lebensdauer Ihrer Therme deutlich.
              Unser Service umfasst Kontrolle von Gas, Wasser, sicherheitsrelevanten Komponenten sowie die Optimierung Ihres Heizsystem für ein stabiles Klima und angenehmes Raumklima.
              Von der Planung bis zur Umsetzung begleiten wir unsere Kunden als kompetenter Ansprechpartner mit klarem Anspruch an Qualität und Zuverlässigkeit.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Regelmäßige Wartung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Lebensdauer</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Optimiertes Heizsystem</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Thermenwartung Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Full Service für Sanitär, Heizung und Klima -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Full Service für Sanitär, Heizung und Klima</h2>
            <p>
              Unser erweitertes Leistungsspektrum deckt alle Bereiche rund um Sanitär, Heizung, Wasser und moderne Klimaanlagen ab. Ob Badsanierung, Optimierung Ihrer bestehenden Installation oder Anpassung neuer Geräte – wir bieten professionellen Service aus einer Hand.
              Als erfahrener Installateur in Wien kümmern wir uns um sämtliche Anliegen in Wien und Umgebung sowie in Wien und Niederösterreich. Unser strukturierter Kundenservice sorgt für transparente Abläufe und klare Kommunikation.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Sanitär und Heizung Full Service" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Thermen Notdienst Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Thermen Notdienst Wien kontaktieren?</summary>
          <p>Bei einem Thermenausfall, Heizungsausfall, fehlendem Warmwasser, starkem Gasgeruch oder bei Unsicherheit kontaktieren Sie sofort unseren Thermen Notdienst Wien.</p>
        </details>
        <details>
          <summary>2. Ist der Thermen Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Thermen Notdienst ist rund um die Uhr, auch an Wochenenden und Feiertagen, für Sie erreichbar.</p>
        </details>
        <details>
          <summary>3. Reparieren Sie alle Marken und Modelle?</summary>
          <p>Ja, unser Thermen Notdienst Wien betreut alle gängigen Marken und jedes Modell moderner Gastherme-Systeme.</p>
        </details>
        <details>
          <summary>4. Arbeiten Sie auch außerhalb von Wien?</summary>
          <p>Wir sind in ganz Wien, in der Umgebung sowie in Wien und Niederösterreich für unsere Kunden im Einsatz.</p>
        </details>
        <details>
          <summary>5. Was tun bei Gasgeruch oder Gasaustritt?</summary>
          <p>Bei Gasgeruch oder Verdacht auf Gasaustritt sofort unseren Notdienst Wien kontaktieren und keine eigenen Reparaturversuche durchführen.</p>
        </details>
        <details>
          <summary>6. Bieten Sie auch Wartung und Service an?</summary>
          <p>Ja, neben dem Thermen Notdienst bieten wir regelmäßige Thermenwartung, Wartung und umfassenden Service für Ihre Therme.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT / Jetzt Thermen Notdienst kontaktieren -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

<script>
  // Simple toggle for TOC (optional)
  document.addEventListener('DOMContentLoaded', function() {
    const tocCard = document.getElementById('tocCard');
    const tocToggle = document.getElementById('tocToggle');
    const tocHead = document.getElementById('tocHead');
    const svg = tocToggle?.querySelector('svg');

    function toggleToc() {
      tocCard.classList.toggle('is-collapsed');
      const expanded = !tocCard.classList.contains('is-collapsed');
      tocToggle.setAttribute('aria-expanded', expanded);
      if (svg) {
        svg.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
      }
    }

    if (tocToggle) {
      tocToggle.addEventListener('click', toggleToc);
    }
    if (tocHead) {
      tocHead.addEventListener('click', toggleToc);
    }
  });
</script>
@endsection