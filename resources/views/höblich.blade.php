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

  /* HERO */
  .service-hero{
    padding:145px 0 48px;
    position:relative;
    overflow:hidden;
    border-bottom:1px solid var(--line);
    background:#0f2f34;
  }
  .service-hero::before{
    content:"";
    position:absolute; inset:0;
    background-image:url('img/hero-scetion.jpeg');
    background-size:cover;
    background-position:center;
    transform:scale(1.02);
    z-index:0;
  }
  .service-hero::after{
    content:"";
    position:absolute; inset:0;
    background:
      linear-gradient(90deg,
        rgba(15,47,52,.92) 0%,
        rgba(15,47,52,.86) 35%,
        rgba(15,47,52,.45) 55%,
        rgba(15,47,52,0) 72%
      );
    z-index:1;
  }
  .service-hero__grid{
    position:relative;
    z-index:2;
    display:grid;
    grid-template-columns:1fr;
    gap:18px;
    align-items:center;
  }
  .service-hero__content{max-width:58ch; color:#fff;}

  .service-kicker{
    display:inline-flex;
    padding:6px 10px;
    border-radius:999px;
    background:rgba(255,255,255,.10);
    border:1px solid rgba(255,255,255,.18);
    font-weight:800;
    color:#fff;
    margin:0 0 12px;
  }
  .service-hero h1{
    margin:0 0 10px;
    font-size: clamp(30px, 3.2vw, 52px);
    line-height:1.05;
    letter-spacing:-.02em;
    color:#fff;
  }
  .service-hero h1 .service-highlight{color:var(--accent)}
  .service-hero__lead{
    margin:0 0 14px;
    font-size:1.05rem;
    max-width:60ch;
    color:rgba(255,255,255,.92);
  }

  .service-hero__bullets{display:flex; flex-wrap:wrap; gap:10px; margin:16px 0 18px;}
  .service-pill{
    padding:8px 10px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,.22);
    background:rgba(255,255,255,.10);
    font-weight:800;
    font-size:.92rem;
    color:#fff;
  }
  .service-hero__actions{display:flex; gap:10px; flex-wrap:wrap}

  /* Quick tabs */
  .service-quicktabs{padding:10px 0 20px}
  .service-tabs{
    display:flex; gap:10px; flex-wrap:wrap;
    padding:10px;
    border:1px solid var(--line);
    border-radius:19px;
    background:#fff;
    justify-content: space-between
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
  .service-grid--3{grid-template-columns: repeat(3, 1fr)}
  .service-grid--2{grid-template-columns: repeat(2, 1fr)}

  .service-card{
    background:#fff;
    border:1px solid var(--line);
    border-radius: var(--radius);
    padding:16px;
  }
  .service-card--service h3{margin:0 0 8px; color:var(--ink)}
  .service-card--service p{margin:0 0 10px}

  .service-checklist{margin:0 0 14px; padding-left:18px}
  .service-checklist li{margin:8px 0}
  .service-checklist--on-dark{color:rgba(255,255,255,.92)}
  .service-checklist--on-dark li{margin:10px 0}

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

  .service-split{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:18px;
    align-items:center;
  }
  .service-split--reverse .service-split__text{order:2}
  .service-split--reverse .service-split__media{order:1}

  /* Image box */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:367px;
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
    object-fit: contain;
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

  .service-chips{display:flex; flex-wrap:wrap; gap:10px}
  .service-chip{
    padding:10px 12px;
    border-radius:999px;
    background:#fff;
    border:1px solid var(--line);
    font-weight:800;
  }

  .service-steps{margin:0; padding-left:18px;}
  .service-steps li{margin:12px 0}
  .service-steps strong{display:block; color:var(--ink)}
  .service-steps span{display:block}

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

  .service-pricecard{
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding:16px;
    background:#fff;
  }
  .service-pricecard h3{margin:0 0 6px; color:var(--ink)}
  .service-pricecard p{margin:0}

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
  .service-formrow{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:10px;
  }
  textarea{resize:vertical}
  .service-fineprint{margin:10px 0 0; font-size:.9rem; opacity:.8}

  .service-footer{
    border-top:1px solid var(--line);
    padding:18px 0;
    background:#fff;
  }
  .service-footer__inner{display:flex; justify-content:space-between; gap:12px; flex-wrap:wrap}
  .service-footer__links{display:flex; gap:12px}
  .service-footer a:hover{text-decoration:underline}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--3{grid-template-columns: 1fr}
    .service-grid--2{grid-template-columns: 1fr}
    .service-split{grid-template-columns: 1fr}
    .service-split--reverse .service-split__text{order:1}
    .service-split--reverse .service-split__media{order:2}
    .service-emergency{grid-template-columns: 1fr}
    .service-cta__inner{grid-template-columns: 1fr}
    .service-formrow{grid-template-columns: 1fr}

    .service-hero{padding:120px 0 40px}
    .service-hero::after{
      background:linear-gradient(180deg, rgba(15,47,52,.92) 0%, rgba(15,47,52,.75) 55%, rgba(15,47,52,.25) 100%);
    }
    .service-hero__content{max-width:64ch}
    .service-media__box{height:220px;}
  }
</style>
<style>
    .promo-banner__inner::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                url("{{ asset('img/final.png') }}") right center / cover no-repeat;
            z-index: 0;
        }
        .wolf-hero {
            position: relative;
            min-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            padding: 180px 16px 120px;
            background: #111;
        }

        /* background image */
        .wolf-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("img/hero-scetion.jpeg");
            background-size: cover;
            background-position: left center;
            /* ✅ keep image left exactly */
            transform: scale(1.02);
            z-index: 0;
        }

        /* dark overlay like screenshot (NOT left-gradient) */
        .wolf-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            /* ✅ even dark overlay */
            z-index: 1;
        }

        

        /* content wrapper */
        .wolf-hero__inner {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin-top: 40px;
        }

        /* H1 */
        .wolf-hero h1 {
            margin: 0 0 10px;
            font-size: clamp(32px, 3.5vw, 54px);
            line-height: 1.08;
            font-weight: 800;
            color: #fff;
            letter-spacing: -.02em;
        }

        .wolf-hero h1 em {
            font-style: italic;
            font-weight: 800;
        }

        /* subtitle */
        .wolf-hero__sub {
            margin: 0 auto 48px;
            max-width: 780px;
            font-size: 16px;
            color: rgba(255, 255, 255, .9);
        }

        /* buttons row */
        .wolf-hero__actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .wolf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--orange-600);
            color: white;
            padding: 15px 28px;
            border-radius: 6px;
            /* ✅ like screenshot */
            font-weight: 700;
            font-size: 14px;
            border: 1px solid transparent;
            transition: .15s ease;
        }

        .wolf-btn--red {
            background: var(--orange-600);
            /* ✅ Wolf red */
            color: #fff;
        }

        .wolf-btn--red:hover {
            transform: translateY(-1px);
        }

        /* logo under buttons */
        .wolf-hero__logo {
            margin-top: 45px;
            display: flex;
            justify-content: center;
        }

        .wolf-hero__logo img {
            width: 170px;
            max-width: 60vw;
            transform: rotate(-6deg);
        }

        /* ✅ diagonal grey bottom shape */
        .wolf-hero .wolf-hero__inner::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -220px;
            width: 303vw;
            height: 1100px;
            background: linear-gradient(90deg, rgba(10, 66, 75, 0.92));
            clip-path: polygon(0 40%, 100% 0, 100% 100%, 0 100%);
            z-index: -1;
            opacity: .9;
        }

        /* mobile */
        @media (max-width: 700px) {
            .wolf-hero {
                padding: 100px 14px 86px;
                min-height: 480px;
            }

            .wolf-hero__sub {
                font-size: 14px
            }
        }
    </style>

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
  <div class="wolf-hero__inner">
    <p class="wolf-hero__kicker">Zertifizierter Fachbetrieb • Wien &amp; Umgebung</p>

    <h1>
      Höblich Thermenwartung Wien<br>
      <em>Rund um die Uhr Service vom Fachbetrieb</em>
    </h1>

    <p class="wolf-hero__sub">
      Zuverlässige Höblich Thermenwartung Wien durch erfahrene Profis – fachgerecht, effizient und rund um die Uhr verfügbar
      für Thermenwartung, Service, Reparatur und Notdienst in Wien, NÖ und der gesamten Umgebung.
    </p>

    <div class="wolf-hero__bullets">
      <span class="wolf-pill">Wartung &amp; Service</span>
      <span class="wolf-pill">Reparatur &amp; Notdienst</span>
      <span class="wolf-pill">Faire Preise</span>
      <span class="wolf-pill">Geprüfter Betrieb</span>
    </div>

    <div class="wolf-hero__actions">
      <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
      <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
    </div>

    <div class="wolf-hero__logo">
      <img src="img/final.png" alt="Höblich Logo">
    </div>
  </div>
</section>

  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wartung, Reparatur & Notdienst für Ihre Höblich Therme</h2>
        <p>Flexible Terminvergabe, direkter Kundendienst und transparente Preise.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Flexible Termine</h3>
          <p>Terminvergabe abgestimmt auf Ihren Bedarf – schnell & zuverlässig.</p>
          <ul class="service-checklist">
            <li>Flexible Terminvergabe</li>
            <li>Direkter Kundendienst</li>
            <li>Persönliche Betreuung</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Transparente Preise</h3>
          <p>Faire Kosten, klare Kommunikation und keine Überraschungen.</p>
          <ul class="service-checklist">
            <li>Klare Preise</li>
            <li>Nachvollziehbare Leistungen</li>
            <li>Optionale Wartungsverträge</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Erfahrene Techniker</h3>
          <p>Strukturierte Arbeitsschritte & geprüfter Fachbetrieb.</p>
          <ul class="service-checklist">
            <li>Erfahrene Profis</li>
            <li>Sichere Arbeitsweise</li>
            <li>Langfristige Betreuung</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Partner -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Höblich Partner in Wien & Umgebung</h2>
        <p>
          Als verlässlicher Partner für Löblich Thermenwartung und professionellen Thermenservice betreuen wir unsere Kunden
          persönlich und lösungsorientiert. Unser Ziel ist der sichere und effiziente Betrieb jeder Therme.
        </p>
        <p>
          Wir arbeiten mit modernen Gasgeräten, hochwertigen Ersatzteilen und betreuen unterschiedliche Gasthermen.
          Als erfahrener Dienstleister sind wir in Wien, NÖ und der gesamten Umgebung im Einsatz.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Persönlich</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sauber & sicher</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien & NÖ</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Höblich Thermenservice Wien">
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Höblich Therme</h2>
        <p>Thermenwartung, Service, Reparatur & neue Geräte – alles aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon">🛠️</div>
          <div>
            <h3>Höblich Thermenwartung</h3>
            <p>Erhöht Lebensdauer, senkt Verbrauch und schützt vor Schäden.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon">🔍</div>
          <div>
            <h3>Höblich Thermenservice</h3>
            <p>Überprüfung, Abgasmessung, Reinigung & Kontrolle aller Bauteile.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon">📞</div>
          <div>
            <h3>Höblich Kundendienst Wien</h3>
            <p>Direkter Ansprechpartner für Eigentümer, Vermieter & Betriebe.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon">⚙️</div>
          <div>
            <h3>Höblich Thermenreparatur</h3>
            <p>Fachgerechte Reparaturen bei Defekten & Störungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon">🚨</div>
          <div>
            <h3>Notdienst & Störungen</h3>
            <p>Bei Gasgeruch, CO-Warnung oder Ausfall – sofort erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon">🔁</div>
          <div>
            <h3>Thermentausch</h3>
            <p>Beratung, Montage & neue Kombithermen – komplett umgesetzt.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ablauf der Höblich Thermenwartung</h2>
        <ol class="service-steps">
          <li><strong>Terminvergabe</strong><span>Flexible Planung nach Ihrem Bedarf.</span></li>
          <li><strong>Überprüfung</strong><span>Sicherheit, Zustand & Funktion.</span></li>
          <li><strong>Reinigung & Messung</strong><span>Abgasmessung & Wärmetauscher.</span></li>
          <li><strong>Einstellungen</strong><span>Optimierung für Effizienz.</span></li>
          <li><strong>Beratung</strong><span>Empfehlungen & Kostenvoranschlag.</span></li>
        </ol>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Ablauf Höblich Thermenwartung">
        </div>
      </div>
    </div>
  </section>

  <!-- NOTDIENST -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Höblich Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>Bei Notfall, Gasgeruch oder Ausfall sind wir jederzeit erreichbar.</p>
        <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Höblich Thermenwartung</h2>
      </div>

      <div class="service-faq">
        <details><summary>Wie oft sollte eine Wartung erfolgen?</summary><p>Regelmäßig, um Sicherheit & Funktion zu gewährleisten.</p></details>
        <details><summary>Was wird gemacht?</summary><p>Überprüfung, Reinigung, Abgasmessung & Kontrolle.</p></details>
        <details><summary>Auch für Vermieter?</summary><p>Ja – Vermieter, Haushalte & Betriebe.</p></details>
        <details><summary>Notfall?</summary><p>Sofort unseren Notdienst kontaktieren.</p></details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Höblich Thermenwartung in Wien sichern</h2>
        <p>📞 Ihr Ansprechpartner für Löblich & Höblich Thermenservice in Wien.</p>
      </div>

      <form class="service-cta__form" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="tel" name="phone" placeholder="+43 ..." required>
        <textarea name="message" placeholder="Therme, Problem, Terminwunsch" required></textarea>
        <button class="service-btn service-btn--accent service-btn--full">Anfrage senden</button>
      </form>
    </div>
  </section>
</main>
@endsection
