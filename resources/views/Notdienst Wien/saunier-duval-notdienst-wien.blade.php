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
  .service-panel h3{margin:0 0 10px; color:#fff}
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

  /* Card split */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:center;
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-box{
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
  .card-split .service-media__box{height:320px;}

  /* HERO */
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

  /* Promo banner */
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
  .promo-banner__title{margin:0; color:#fff; font-size:20px}
  .promo-banner__price{margin:0; color:#fff; font-size:18px}
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

  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-media__box{height:220px;}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split .service-media__box{height:220px;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Saunier Duval Thermenwartung Wien – Kundendienst & Service</title>
  <meta name="description" content="Saunier Duval Thermenwartung Wien ✔ Kundendienst, Wartung & Service für Saunier Duval Therme und Gastherme ✔ Beratung & Terminvereinbarung.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">service auch am wochenende</p>

      <h1>
        Saunier Duval Thermenwartung Wien<br>
        <em>Kundendienst &amp; Service</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Defekt oder Ausfall – der Saunier Duval Notdienst Wien ist zuverlässig für Sie da.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant-1.jpg') }}" alt="Saunier Duval Thermenwartung Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">Notdienst 24h</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="duval-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Saunier Duval Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>
            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">AKTION</a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- Quick tabs -->
  <section class="service-quicktabs" id="quicktabs-services">
    <div class="service-container">
      <div class="service-tabs">
        <a class="service-tab" href="#vorteile-services">Service</a>
        <a class="service-tab" href="#kundendienst-services">Kundendienst</a>
        <a class="service-tab" href="#notdienst-services">Notdienst</a>
        <a class="service-tab" href="#leistungen-services">Leistungen</a>
        <a class="service-tab" href="#wartung-services">Wartung</a>
        <a class="service-tab" href="#reparatur-services">Reparatur</a>
        <a class="service-tab" href="#region-services">Region</a>
        <a class="service-tab" href="#team-services">Team</a>
        <a class="service-tab" href="#vorteile2-services">Vorteile</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- Vorteile -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Saunier Duval Notdienst und Kundendienst in Wien</h2>
        <p>Thermenwartung, Reparatur und Thermenservice aus einer Hand – erfahrene Techniker, geprüfte Lösungen und rasch vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Thermenwartung &amp; Service</h3>
            <p>Regelmäßige Wartung und Thermenservice Wien für effiziente Funktion, lange Lebensdauer und weniger Störungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Fachpartner &amp; Know-how</h3>
            <p>Installateur, Fachpartner und erfahrenes Team mit Know-how, Fachwissen und Praxis für Saunier Duval Systeme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Geprüfte Lösungen</h3>
            <p>Strukturierte Analyse, klare Abläufe und nachhaltige Behebung – transparent und lösungsorientiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Auch am Wochenende</h3>
            <p>Service auch an Wochenenden – schnelle Unterstützung bei Defekt, Ausfall oder Störung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Kundendienst mit Know-how</h2>
            <p>
              Der Saunier Duval Kundendienst unterstützt Kunden in Wien und der Umgebung bei allen Anliegen rund um Saunier Duval Thermen,
              Duval Therme und moderne Gasgeräte. Als spezialisierter Installateur, Fachpartner und Partner der Marke Saunier Duval arbeiten wir
              strukturiert, transparent und lösungsorientiert.
            </p>
            <p>
              Unser geschultes Team bringt umfassendes Know-how, fundiertes Fachwissen und langjährige Erfahrung mit.
              Ziel ist es, individuelle Bedürfnisse zu verstehen, Probleme nachhaltig zu lösen und die sichere Funktion Ihrer Anlage im Betrieb zu gewährleisten.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Saunier Duval Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst und Werkskundendienst für Saunier Duval</h2>
        <p>
          Bei akuten Störungen, sicherheitsrelevanten Schäden oder einem plötzlichen Defekt steht unser Notdienst rasch zur Verfügung.
          Wir arbeiten eng mit dem Werkskundendienst und dem Saunier Duval Werkskundendienst zusammen, um Reparaturen fachgerecht umzusetzen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Techniker prüfen Geräte, Gastherme und Therme sorgfältig, analysieren Ursachen und sorgen für eine sichere Behebung.
          Gerade im Notfall ist schnelles Handeln entscheidend, um Folgeschäden zu vermeiden und die Sicherheit im Haushalt zu gewährleisten.
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
            <li>Störungen an Saunier Duval Therme oder Duval Gastherme</li>
            <li>Ausfall von Heizung oder Warmwasser</li>
            <li>Fehler, die sofortige Reparatur erfordern</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rasch vor Ort – in Wien und Niederösterreich.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen im Überblick</h2>
        <p>Thermenwartung, Thermenservice Wien, Reparatur, Thermentausch und Installation – alles aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Thermenwartung</h3>
            <p>Überprüfung, Reinigung, Einstellung, Kontrolle und Abgasmessung aller relevanten Komponenten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♨️</div>
          <div>
            <h3>Thermenservice Wien</h3>
            <p>Thermenservice Wien &amp; Duval Thermenservice für mehr Effizienz, weniger Energieverbrauch und mehr Wohnkomfort zuhause.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur</h3>
            <p>Fachgerechte Reparatur mit geprüften Ersatzteilen – klare Diagnose, sichere Behebung und nachhaltige Lösung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch</h3>
            <p>Transparente Beratung zu Austausch, neuen Produkten und passenden Lösungen – wirtschaftlich und verständlich.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Installation &amp; Inbetriebnahme</h3>
            <p>Installation, Inbetriebnahme und Feinjustierung – abgestimmt auf Bedarf, Gegebenheiten und aktuelle Standards.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Angebot &amp; Garantie</h3>
            <p>Bei Bedarf erstellen wir ein transparentes Angebot und klären Garantie-Fragen offen und verständlich.</p>
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
            <h2>Wartung, Thermenwartung und Thermenservice Wien</h2>
            <p>
              Regelmäßige Wartung, professionelle Thermenwartung und gezielte Saunier Duval Thermenwartung sichern die Effizienz,
              Funktionalität und Lebensdauer Ihrer Anlage.
            </p>
            <p>
              Unser Thermenservice Wien sowie der Duval Thermenservice umfassen Überprüfung, Reinigung, Einstellung, Kontrolle und Abgasmessung.
              So lassen sich Probleme frühzeitig erkennen und teure Reparaturen vermeiden.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Energie</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Wohnkomfort</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Saunier Duval Thermenwartung Wien" loading="lazy" decoding="async">
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
            <h2>Reparatur, Thermentausch und Installation</h2>
            <p>
              Bei Defekten führen wir eine fachgerechte Reparatur mit geprüften Ersatzteilen durch.
              Ist ein Thermentausch wirtschaftlich sinnvoller, beraten unsere Spezialisten transparent zu Austausch, neuen Produkten und passenden Lösungen.
            </p>
            <p>
              Wir begleiten Installation, Inbetriebnahme und Feinjustierung zuverlässig und berücksichtigen Bedarf, bauliche Gegebenheiten und aktuelle Standards.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Saunier Duval Reparatur & Thermentausch" loading="lazy" decoding="async">
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
            <h2>Einsatzgebiet Wien und Niederösterreich</h2>
            <p>
              Der Saunier Duval Notdienst Wien ist nicht nur direkt in Wien, sondern auch in Niederösterreich zuverlässig im Einsatz.
              Durch kurze Wege und effiziente Einsatzplanung sind unsere Techniker rasch am Ort und kümmern sich um Störungen, Wartung oder Reparatur.
            </p>
            <p>
              Auch in der näheren Umgebung profitieren Kunden von schneller Unterstützung und klaren Abläufen.
              Unser Service steht Haushalten und Betrieben gleichermaßen zur Verfügung, um Ausfälle zu minimieren und den laufenden Betrieb sicherzustellen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Einsatzgebiet Wien und Niederösterreich" loading="lazy" decoding="async">
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
            <h2>Team, Weiterbildung und Expertise</h2>
            <p>
              Unser erfahrenes Team besteht aus qualifizierten Installateuren, spezialisierten Technikern und echten Experten für Saunier Duval Systeme.
              Regelmäßige Weiterbildung stellt sicher, dass wir stets auf dem neuesten Stand der Technik arbeiten und neue Produkte sowie Entwicklungen
              der Marke sicher beherrschen.
            </p>
            <p>
              Diese Kombination aus Praxis, Erfahrung und laufender Schulung garantiert hohe Qualität, Sicherheit und nachhaltige Ergebnisse bei jedem Einsatz.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Experten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weiterbildung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Qualität</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Saunier Duval Team & Weiterbildung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile / Beratung -->
  <section class="service-section service-section--soft" id="vorteile2-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Leistungen, Vorteile und individuelle Beratung</h2>
            <p>
              Unsere Leistungen decken alles rund um Thermenservice, Wartung, Reparatur und Austausch ab.
              Kunden profitieren von klaren Vorteilen: höhere Effizienz, geringere Störanfälligkeit und langfristige Betriebssicherheit.
            </p>
            <p>
              Eine persönliche Beratung hilft dabei, die passende Lösung für Ihre Saunier Duval Therme zu finden – abgestimmt auf Bedarf, Nutzung und Budget.
              Bei Bedarf erstellen wir ein transparentes Angebot, verständlich und ohne Überraschungen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-7.jpg') }}" alt="Vorteile & Beratung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Saunier Duval Thermenservice Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Warum ist eine Saunier Duval Thermenwartung wichtig?</summary>
          <p>Eine regelmäßige Saunier Duval Thermenwartung erhöht die Sicherheit, verhindert Schäden und sorgt für einen effizienten Betrieb der Therme.</p>
        </details>

        <details>
          <summary>2. Wann sollte ich den Saunier Duval Kundendienst kontaktieren?</summary>
          <p>Der Saunier Duval Kundendienst hilft bei Problemen, Defekt oder geplanter Wartung Ihrer Saunier Duval Therme in Wien und Umgebung.</p>
        </details>

        <details>
          <summary>3. Wie läuft eine Thermenwartung in Wien ab?</summary>
          <p>Die Thermenwartung Wien umfasst Überprüfung, Reinigung, Abgasmessung und Einstellung aller relevanten Komponenten der Duval Therme.</p>
        </details>

        <details>
          <summary>4. Werden auch Gasgeräte und Gasthermen betreut?</summary>
          <p>Ja, unser Service deckt Gasgeräte, Gasthermen und alle gängigen Produkte von Saunier und Duval ab.</p>
        </details>

        <details>
          <summary>5. Was tun bei einem Defekt an der Therme?</summary>
          <p>Bei einem Defekt analysiert der Installateur das Problem vor Ort und sorgt für eine sichere Behebung ohne Folgeschäden.</p>
        </details>

        <details>
          <summary>6. Ist der Service auch in der Umgebung verfügbar?</summary>
          <p>Ja, unser Service ist in Wien und der Umgebung rasch verfügbar – zuverlässig und termingerecht.</p>
        </details>

        <details>
          <summary>7. Welche Rolle spielt die Überprüfung?</summary>
          <p>Die regelmäßige Überprüfung erkennt Probleme frühzeitig und schützt die Therme vor größeren Schäden.</p>
        </details>

        <details>
          <summary>8. Gibt es persönliche Beratung?</summary>
          <p>Ja, wir bieten individuelle Beratung zu Wartung, Nutzung und optimalem Betrieb Ihrer Saunier Duval Therme.</p>
        </details>

        <details>
          <summary>9. Wie erfolgt die Terminvereinbarung?</summary>
          <p>Die Terminvereinbarung erfolgt einfach über den Kundendienst oder direkt über diese Seite – schnell und unkompliziert.</p>
        </details>

        <details>
          <summary>10. Warum einen Fachpartner wählen?</summary>
          <p>Als erfahrener Partner mit langjähriger Erfahrung kennen wir Saunier- und Duval-Systeme im Detail und liefern nachhaltige Lösungen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt, Termin und Rückrufservice</h2>
        <p>
          Für Fragen, Anliegen oder eine Terminvereinbarung erreichen Sie unseren Kundendienst unkompliziert über den Kontakt auf dieser Seite.
          Wir vergeben rasch einen passenden Termin und bieten auf Wunsch einen Rückrufservice.
        </p>
        <p style="margin-top:10px;">
          Unser Ziel ist eine einfache Kommunikation, kurze Reaktionszeiten und verlässliche Unterstützung – auch an Wochenenden.
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
  (function(){
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(function(a){
      a.addEventListener('click', function(e){
        var id = a.getAttribute('href');
        if (!id || id === '#') return;
        var el = document.querySelector(id);
        if (!el) return;
        e.preventDefault();
        el.scrollIntoView({behavior:'smooth', block:'start'});
      });
    });

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
