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
  .service-panel h3{margin:0 0 10px; color:#fff;}
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
  <title>Wolf Notdienst Wien – 24h Service, Kundendienst & Reparatur</title>
  <meta name="description" content="Wolf Notdienst Wien ✔ Rund um die Uhr ✔ Reparatur, Wartung & Wolf Kundendienst für Heizung, Therme und Gastherme in Wien & Niederösterreich.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">service rund um die uhr</p>

      <h1>
        Wolf Notdienst Wien<br>
        <em>24h service</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Ausfällen oder Heizungsausfall – der Wolf Notdienst Wien ist rund um die Uhr für Sie verfügbar.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant-10.jpg') }}" alt="Wolf Notdienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Wartung</span>
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">auch an Feiertagen</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Wolf Kundendienst Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              AKTION
            </a>
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
        <a class="service-tab" href="#leistungen-services">Leistungen</a>
        <a class="service-tab" href="#wartung-services">Wartung</a>
        <a class="service-tab" href="#installation-services">Installation</a>
        <a class="service-tab" href="#region-services">Region</a>
        <a class="service-tab" href="#team-services">Team</a>
        <a class="service-tab" href="#ersatzteile-services">Ersatzteile</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- Intro / Vorteile -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wolf Notdienst und Kundendienst in Wien und Umgebung</h2>
        <p>Reparatur, Wartung, Thermenservice und Soforthilfe – zuverlässig, klar organisiert und schnell vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Reparatur &amp; Wartung</h3>
            <p>Reparatur, Wartung, Thermenservice und Soforthilfe für Wolf Heizung, Therme und Gastherme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrenes Team</h3>
            <p>Erfahrene Techniker, Fachpersonal und klare Lösungen – mit strukturiertem Vorgehen bei jedem Problem.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>24h Erreichbarkeit</h3>
            <p>Service rund um die Uhr – auch an Wochenenden und Feiertagen, wenn schnelle Hilfe zählt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Sicherheit &amp; Qualität</h3>
            <p>Saubere Behebung, klare Kommunikation und Fokus auf Sicherheit – für einen stabilen Betrieb Ihrer Anlage.</p>
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
            <h2>Wolf Kundendienst Wien mit Erfahrung</h2>
            <p>
              Der Wolf Kundendienst in Wien unterstützt private Kunden und Betriebe zuverlässig bei jedem Problem rund um Wolf Heizung,
              Wolf Thermen und moderne Wolf Anlagen. Unser Service ist auf Sicherheit, Effizienz und ein stabiles Raumklima ausgerichtet.
            </p>
            <p>
              Als erfahrener Installateur und Partner von Wolf betreuen wir Wolf Geräte, Gasthermen und komplette Heizungsanlagen direkt vor Ort.
              Unsere Mitarbeiter und Techniker analysieren Störungen strukturiert, führen eine gründliche Überprüfung durch und setzen eine passende Lösung um.
              Ziel ist es, Wärme, Komfort und Betriebssicherheit dauerhaft sicherzustellen – in Wien und Niederösterreich.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-2.jpg') }}" alt="Wolf Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Wolf Notdienst rund um die Uhr</h2>
        <p>
          Ein plötzlicher Heizungsausfall, ungewöhnliche Geräusche oder ein Fehlercode an der Therme erfordern sofortige Hilfe.
          Der Wolf Notdienst ist rund um die Uhr erreichbar und bietet schnelle Soforthilfe bei akuten Notfällen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unser Notdienst steht Kunden auch an Feiertagen und außerhalb regulärer Zeiten zur Verfügung.
          Durch kurze Reaktionszeiten in Wien, Niederösterreich und NÖ begrenzen wir Schäden und verhindern weitere Ausfällen.
          Sicherheit, strukturierter Umgang mit Fehlern und saubere Behebung stehen dabei im Fokus.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notdienst-Einsätze</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Störungen an Wolf Gastherme oder Heizsystem</li>
            <li>Fehlermeldungen, Fehlercode oder Ausfall der Anlage</li>
            <li>Heizungsprobleme, kein Warmwasser oder Energieverlust</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen: Reparatur, Wartung &amp; Thermenservice</h2>
        <p>Alles aus einer Hand – vom Notdienst bis zur langfristigen Betreuung Ihrer Wolf Heizungsanlage.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Soforthilfe im Notfall</h3>
            <p>Schnelle Hilfe bei Störungen, Ausfällen und Heizungsausfall – rund um die Uhr erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Überprüfung &amp; Diagnose</h3>
            <p>Strukturierte Überprüfung, Fehleranalyse und klare Lösung – auch bei Fehlercodes und Fehlermeldungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur &amp; Thermenreparatur</h3>
            <p>Geprüfte Gasgeräte, fachgerechte Durchführung und saubere Behebung für zuverlässige Funktion.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Wartung &amp; Thermenwartung</h3>
            <p>Reinigung, Einstellung und Funktionskontrolle – reduziert Störungen und erhöht die Lebensdauer.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">💡</div>
          <div>
            <h3>Effizienz &amp; Energie</h3>
            <p>Eine gut gewartete Anlage arbeitet zuverlässiger, spart Energie und sorgt für konstante Wärme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📦</div>
          <div>
            <h3>Ersatzteile</h3>
            <p>Passende Ersatzteile für Wolf Geräte – Qualität, Sicherheit und nachhaltige Lösungen.</p>
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
            <h2>Reparatur, Wartung und Wolf Thermenservice</h2>
            <p>
              Regelmäßige Wartung und professioneller Wolf Thermenservice sind entscheidend für die Lebensdauer Ihrer Wolf Heizung.
              Unsere Serviceleistungen umfassen Überprüfung, Reinigung, Einstellung und Funktionskontrolle aller relevanten Geräte.
            </p>
            <p>
              Auch Wolf Thermenwartung und Thermenreparatur werden effizient umgesetzt.
              So lassen sich Fehler, wiederkehrende Störungen und hohe Energiekosten vermeiden.
              Eine gut gewartete Anlage arbeitet zuverlässiger, spart Energie und sorgt für konstante Wärme.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Effizienz</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-3.jpg') }}" alt="Wolf Thermenservice" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Installation -->
  <section class="service-section" id="installation-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Installation, Planung und Thermentausch</h2>
            <p>
              Unsere Beratung unterstützt Kunden bei Planung, Installation, Montage und Einbau neuer Wolf Heizsysteme.
              Wenn ein Thermentausch sinnvoll ist, erklären wir Optionen, vergleichen Wolf Heizgeräte und begleiten den Austausch bis zur Inbetriebnahme.
            </p>
            <p>
              Als erfahrener Partner stellen wir sicher, dass jede Anlage optimal auf den tatsächlichen Bedarf abgestimmt ist.
              Das steigert Effizienz, Qualität und langfristige Zuverlässigkeit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-11.jpg') }}" alt="Thermentausch & Installation" loading="lazy" decoding="async">
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
              Der Wolf Notdienst Wien ist in allen Bezirken von Wien sowie in Niederösterreich, NÖ und der gesamten Umgebung im Einsatz.
              Dank regionaler Einsatzplanung sind unsere Techniker schnell vor Ort und können bei Notfällen, Störungen oder Heizungsausfall rasch reagieren.
            </p>
            <p>
              Auch außerhalb der Stadt profitieren Kunden von kurzen Wegen, klarer Organisation und zuverlässiger Unterstützung.
              Unser Notdienst steht Haushalten und Betrieben in Wien und Niederösterreich jederzeit zur Verfügung, um Schäden zu begrenzen
              und den Betrieb der Heizungsanlage sicherzustellen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-2.jpg') }}" alt="Einsatzgebiet Wien & Niederösterreich" loading="lazy" decoding="async">
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
            <h2>Kundenservice, Team und Ansprechpartner</h2>
            <p>
              Ein strukturierter Kundenservice ist die Basis unserer Arbeit. Unser erfahrenes Team besteht aus geschultem Fachpersonal,
              qualifizierten Installateuren und spezialisierten Technikern mit umfassendem Fachwissen.
            </p>
            <p>
              Jeder Kunde erhält einen festen Ansprechpartner, der Anliegen koordiniert und für klare Kommunikation sorgt.
              Unsere Mitarbeiter legen Wert auf professionellen Umgang, transparente Abläufe und verlässliche Lösungen.
              So schaffen wir Vertrauen und hohe Zufriedenheit bei unseren Kunden.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">fester Ansprechpartner</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">transparente Abläufe</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">verlässliche Lösungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-3.jpg') }}" alt="Team & Ansprechpartner" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ersatzteile -->
  <section class="service-section" id="ersatzteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ersatzteile, Fehleranalyse und Qualität</h2>
        <p>Gezielte Analyse statt Rätselraten – geprüfte Teile, saubere Arbeit und nachhaltige Lösungen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Gezielte Fehleranalyse</h3>
            <p>Unsere Techniker analysieren Fehler, Fehlercodes und Störungen gezielt, um die Ursache schnell zu erkennen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📦</div>
          <div>
            <h3>Passende Ersatzteile</h3>
            <p>Bei Reparaturen setzen wir auf geprüfte Wolf Geräte und passende Ersatzteile – für langfristige Funktion.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Qualität &amp; Sicherheit</h3>
            <p>Sorgfältige Überprüfung und fachgerechte Durchführung – Qualität, Sicherheit und saubere Behebung im Mittelpunkt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♻️</div>
          <div>
            <h3>Nachhaltige Lösung</h3>
            <p>Wir stellen sicher, dass jede Anlage zuverlässig funktioniert – mit Fokus auf dauerhafte Ergebnisse.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Termin / Unterstützung -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Termin, Terminvergabe und Unterstützung</h2>
            <p>
              Für Hilfe, Wartung oder Reparatur bieten wir eine schnelle Terminvergabe. Ob geplanter Termin oder akute Soforthilfe im Notdienst –
              unser Kundendienst organisiert Einsätze effizient und kundenorientiert.
            </p>
            <p>
              Wir unterstützen Sie bei allen Fragen rund um Wolf Heizung, Therme, Heizsystem und Service.
              Unsere Unterstützung endet nicht nach der Reparatur: Wir beraten zu optimaler Nutzung, Wartungsintervallen und langfristiger Betriebssicherheit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf-11.jpg') }}" alt="Termin & Unterstützung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Abschluss -->
  <section class="service-section" id="abschluss-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ihr Wolf Notdienst Wien</h2>
        <p>Kompetent, erreichbar und zuverlässig – wir kümmern uns um Wartung, Reparatur, Installation und Thermentausch.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Alles aus einer Hand</h3>
            <p>Wir kümmern uns um alles – von Wartung und Reparatur bis hin zu Installation und Thermentausch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Für Wien &amp; Region</h3>
            <p>Mit Kompetenz und starkem Team sorgen wir für zuverlässige Wärme in Wien, Niederösterreich und Umgebung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Wolf Notdienst Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Wolf Notdienst kontaktieren?</summary>
          <p>Den Wolf Notdienst sollten Sie bei jedem Problem mit Wolf Heizung, Therme oder Gastherme kontaktieren. In Wien ist schnelle Hilfe entscheidend.</p>
        </details>

        <details>
          <summary>2. Ist der Wolf Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Wolf Notdienst ist rund um die Uhr erreichbar. Der Notdienst steht Kunden in Wien und Niederösterreich jederzeit zur Verfügung.</p>
        </details>

        <details>
          <summary>3. Welche Leistungen bietet der Wolf Kundendienst?</summary>
          <p>Der Wolf Kundendienst bietet Service, Reparatur, Wartung, Überprüfung und Wolf Thermenservice für alle Wolf Geräte.</p>
        </details>

        <details>
          <summary>4. Werden auch Wolf Thermen gewartet?</summary>
          <p>Ja, Wolf Thermenwartung und Thermenwartung gehören zu unseren wichtigsten Serviceleistungen für Sicherheit und lange Lebensdauer.</p>
        </details>

        <details>
          <summary>5. Was tun bei einem Fehlercode an der Therme?</summary>
          <p>Ein Fehlercode weist auf einen Fehler hin. Unsere Techniker analysieren die Heizungsanlage und liefern eine passende Lösung.</p>
        </details>

        <details>
          <summary>6. Arbeitet der Notdienst auch außerhalb von Wien?</summary>
          <p>Ja, der Notdienst ist in Wien, Niederösterreich, NÖ und der Umgebung im Einsatz.</p>
        </details>

        <details>
          <summary>7. Welche Anlagen betreut der Wolf Service?</summary>
          <p>Der Wolf Service betreut Wolf Anlagen, Wolf Gastherme, moderne Heizsysteme und komplette Heizungen.</p>
        </details>

        <details>
          <summary>8. Wer führt Reparaturen durch?</summary>
          <p>Ein erfahrener Installateur mit fundiertem Fachwissen übernimmt jede Reparatur direkt vor Ort.</p>
        </details>

        <details>
          <summary>9. Warum ist regelmäßige Wartung wichtig?</summary>
          <p>Regelmäßige Wartung reduziert Störungen, schützt die Heiztechnik und verhindert teure Ausfälle der Heizung.</p>
        </details>

        <details>
          <summary>10. Wie läuft die Terminvereinbarung ab?</summary>
          <p>Über unseren Kundenservice vereinbaren Kunden schnell einen Termin. Unser Team koordiniert den Einsatz effizient.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt aufnehmen</h2>
        <p>
          Benötigen Sie Hilfe bei Störung oder Ausfall? Kontaktieren Sie unseren Wolf Notdienst Wien – wir koordinieren den Einsatz schnell und zuverlässig.
        </p>
        <p style="margin-top:10px;">
          Ob Notdienst, Wartung, Reparatur oder Thermentausch: Wir liefern klare Antworten, saubere Arbeit und eine nachhaltige Lösung.
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
    // Smooth scroll for quick tabs
    document.querySelectorAll('a[href^="#"]').forEach(function(link){
      link.addEventListener('click', function(e){
        var id = this.getAttribute('href');
        if (!id || id === '#') return;
        var el = document.querySelector(id);
        if (!el) return;
        e.preventDefault();
        el.scrollIntoView({ behavior:'smooth', block:'start' });
      });
    });

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
