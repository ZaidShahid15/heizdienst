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

  /* HERO (keep as-is) */
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
  .wolf-hero__inner{position:relative; z-index:2; max-width:900px; margin-top:40px;}
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
    line-height: 1.08;
    font-weight: 800;
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
  .wolf-btn--ghost{background:rgba(255,255,255,.08); border-color:rgba(255,255,255,.28); color:#fff;}
  .wolf-btn--ghost:hover, .wolf-btn--accent:hover{transform:translateY(-1px);}

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

  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
  }

  @media (max-width: 980px){
    .service-grid--2{grid-template-columns: 1fr}
    .service-emergency{grid-template-columns: 1fr}
    .service-cta__inner{grid-template-columns: 1fr}
    .service-formrow{grid-template-columns: 1fr}
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
  <title>Junkers Notdienst Wien – 24h Service, Kundendienst & Reparatur</title>
  <meta name="description" content="Junkers Notdienst Wien ✔ Rund um die Uhr erreichbar ✔ Kundendienst, Wartung & Reparatur für Junkers Therme und Gasgeräte in Wien, NÖ & Bgld.">
@endpush

<main>
  <!-- HERO (keep your existing hero as-is) -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">rund um die uhr erreichbar</p>

      <h1>
        Junkers Notdienst Wien<br>
        <em>24h Service &amp; Kundendienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Ausfällen oder Heizungsproblemen – Ihr Junkers Notdienst Wien ist rund um die Uhr erreichbar.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant-9.jpg') }}" alt="Junkers Notdienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">24h Notdienst</span>
        <span class="wolf-pill">Wartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Thermenservice</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt anrufen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Junkers Service Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- Quick tabs (like previous site) -->
  <section class="service-quicktabs" id="quicktabs-services">
    <div class="service-container">
      <div class="service-tabs">
        <a class="service-tab" href="#notdienst24-services">24/7</a>
        <a class="service-tab" href="#kundendienst-services">Kundendienst</a>
        <a class="service-tab" href="#notdienst-services">Notdienst</a>
        <a class="service-tab" href="#wartung-services">Thermenservice</a>
        <a class="service-tab" href="#tausch-services">Thermentausch</a>
        <a class="service-tab" href="#gebiet-services">Einsatzgebiet</a>
        <a class="service-tab" href="#preise-services">Preise</a>
        <a class="service-tab" href="#technik-services">Fehlercodes</a>
        <a class="service-tab" href="#team-services">Team</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- 1) Junkers Notdienst Wien (highlights) -->
  <section class="service-section service-section--soft" id="notdienst24-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Junkers Notdienst Wien</h2>
        <p>Schnelle Hilfe bei Störungen, Ausfällen oder Heizungsproblemen – rund um die Uhr erreichbar.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📍</div>
          <div>
            <h3>Wien &amp; Niederösterreich</h3>
            <p>Notdienst für Junkers in Wien und Niederösterreich – schnelle Unterstützung in der Umgebung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕘</div>
          <div>
            <h3>24 Stunden Service</h3>
            <p>Auch an Wochenenden und Feiertagen – wenn Sie Hilfe brauchen, sind wir erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Rundum Service</h3>
            <p>Kundendienst, Reparatur, Wartung und Thermenservice – klar organisiert aus einer Hand.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">👨‍🔧</div>
          <div>
            <h3>Geprüfte Expertise</h3>
            <p>Erfahrenes Team, saubere Arbeit und klare Kommunikation – Sicherheit steht im Mittelpunkt.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 2) Kundendienst Wien mit Rundum Service -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Junkers Kundendienst Wien mit Rundum Service</h2>
            <p>
              Der Junkers Kundendienst in Wien unterstützt Haushalte und Betriebe bei akuten Problemen ebenso wie bei planbarer Wartung.
              Wir helfen bei Junkers Therme, Gastherme und anderen Gasgeräten – schnell, sicher und strukturiert.
            </p>
            <p>
              Unsere Techniker prüfen Geräte sorgfältig, analysieren das Problem und setzen Reparatur oder Inbetriebnahme fachgerecht um.
              Ziel ist die rasche Behebung, die Wiederherstellung von Warmwasser und Heizung sowie eine lange Lebensdauer der Geräte.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-2.jpg') }}" alt="Junkers Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3) Notdienst rund um die Uhr (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst für Junkers rund um die Uhr</h2>
        <p>
          Ein plötzlicher Ausfall der Junkers Therme, Fehlermeldungen oder Störungen an der Gastherme erfordern Soforthilfe.
          Unser Notdienst ist rund um die Uhr erreichbar – unter der Woche, am Wochenende und an Feiertagen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Durch kurze Reaktionszeiten in Wien und Niederösterreich (NÖ) begrenzen wir Schäden und beheben Ausfälle rasch.
          Sicherheit, saubere Arbeit und klare Kommunikation stehen dabei im Mittelpunkt.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Einsätze</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Heizungsgebrechen und komplette Ausfälle</li>
            <li>Kein Warmwasser, Druckprobleme oder Fehlermeldungen</li>
            <li>Akute Störungen an Gasgeräte(n) und Therme</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Schnelle Hilfe in Wien, NÖ und Umgebung.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4) Reparatur, Wartung & Thermenservice -->
  <section class="service-section" id="wartung-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Wartung und Thermenservice Wien</h2>
            <p>
              Regelmäßige Thermenwartung und fachgerechter Thermenservice reduzieren Störungen und verlängern die Lebensdauer Ihrer Anlage.
              Unsere Leistungen umfassen Überprüfung, Reinigung, Einstellung und sicherheitsrelevante Kontrollen.
            </p>
            <p>
              Bei Reparaturen verwenden wir geprüfte Ersatzteile und berücksichtigen die Vorgaben von Junkers und Bosch.
              Unsere Erfahrung mit unterschiedlichen Modellen ermöglicht schnelle Fehlerbehebung – nachhaltig und nachvollziehbar.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-3.jpg') }}" alt="Thermenservice & Wartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5) Thermentausch -->
  <section class="service-section service-section--soft" id="tausch-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Junkers Thermentausch</h2>
            <p>
              Wenn Reparaturen wirtschaftlich nicht mehr sinnvoll sind, beraten wir transparent zum Thermentausch.
              Wir erklären Unterschiede zwischen aktuellen Produkten, klären Fragen zu Garantie und empfehlen einen passenden Austausch.
            </p>
            <p>
              Der Einbau erfolgt inklusive Inbetriebnahme, Überprüfung und Übergabe – damit Ihre neue Therme zuverlässig läuft
              und Sie langfristig Komfort haben.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-11.jpg') }}" alt="Junkers Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6) Einsatzgebiet -->
  <section class="service-section" id="gebiet-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiet Wien, Niederösterreich und Bgld</h2>
            <p>
              Unser Junkers Notdienst ist in Wien, Niederösterreich (NÖ) und im Burgenland (Bgld) im Einsatz.
              Durch regionale Planung, kurze Wege und ein eingespieltes Team sind wir schnell vor Ort – Wohnung, Haus oder Betrieb.
            </p>
            <p>
              Auch außerhalb von Wien bieten wir zuverlässige Unterstützung, damit Heizungsprobleme rasch gelöst werden.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-2.jpg') }}" alt="Einsatzgebiet Wien NÖ Bgld" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7) Preise -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Leistungen und transparente Abwicklung</h2>
            <p>
              Klare Preise und nachvollziehbare Leistungen sind zentral. Vor jeder Arbeit informieren wir über Umfang,
              mögliche Ersatzteile und den empfohlenen Lösungsweg.
            </p>
            <p>
              Ziel ist eine wirtschaftlich sinnvolle Lösung – Reparatur, Wartung oder Austausch.
              Sie erhalten eine verständliche Erklärung zu Aufwand, Dauer und Optionen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">klare Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">faire Abrechnung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">verständliche Infos</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-3.jpg') }}" alt="Transparente Preise" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8) Technik / Fehlercodes / Ersatzteile -->
  <section class="service-section" id="technik-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ersatzteile, Fehlercodes und technische Expertise</h2>
        <p>Gezielte Analyse statt unnötiger Austausch – wir kennen typische Fehlerbilder und Bauteile im Detail.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Sensoren &amp; NTC</h3>
            <p>Vorlauf NTC, Brenner NTC, Warmwasser NTC, Speicher NTC, AD Speicher NTC, A7 Warmwasser NTC, E7 Brenner NTC.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔌</div>
          <div>
            <h3>Kontakte &amp; Bauteile</h3>
            <p>TA 211 E, C1 Druckdosenkontakt, C4 Druckdosenkontakt, D3 Brücke 8 9 – fachgerecht geprüft und ersetzt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧠</div>
          <div>
            <h3>Strukturierte Diagnose</h3>
            <p>Wir lesen Fehlercodes, prüfen Komponenten und beheben Ursachen – effizient, sicher und nachvollziehbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Geprüfte Ersatzteile</h3>
            <p>Wir arbeiten mit geprüften Ersatzteilen und beachten technische Vorgaben von Junkers/Bosch.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 9) Team / Partner -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Partner und laufende Unterstützung</h2>
            <p>
              Unser Team besteht aus erfahrenen Installateuren, Technikern und Ansprechpartnern im Kundendienst.
              Als verlässlicher Partner begleiten wir Kunden nicht nur im Notfall, sondern auch langfristig.
            </p>
            <p>
              Von Beratung über Wartung bis Austausch: Wir beantworten Fragen, geben Empfehlungen und unterstützen bei
              zukünftigen Entscheidungen rund um Heizung und Warmwasser.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/junkers-11.jpg') }}" alt="Team & Partner" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10) FAQ (use your full FAQ content) -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Junkers Notdienst Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Notdienst kontaktieren?</summary>
          <p>Bei einem akuten Problem mit Ihrer Junkers Therme oder anderen Geräten. In Wien ist schnelle Hilfe entscheidend.</p>
        </details>

        <details>
          <summary>2. Gibt es einen Junkers Notdienst in Wien?</summary>
          <p>Ja, unser Junkers Notdienst ist in Wien rund um die Uhr verfügbar und hilft bei Ausfällen, Störungen und Sicherheitsproblemen.</p>
        </details>

        <details>
          <summary>3. Arbeitet der Junkers Kundendienst auch außerhalb Wiens?</summary>
          <p>Ja, wir sind in Wien, NÖ und im Bgld im Einsatz. Auch außerhalb der Stadt steht der Notdienst zuverlässig zur Verfügung.</p>
        </details>

        <details>
          <summary>4. Welche Junkers Geräte werden betreut?</summary>
          <p>Wir betreuen alle Junkers Modelle: Gasgeräte, Thermen und moderne Heizsysteme – sicher und fachgerecht.</p>
        </details>

        <details>
          <summary>5. Ist regelmäßige Wartung wirklich notwendig?</summary>
          <p>Ja, regelmäßige Wartung reduziert Störungen, verlängert die Lebensdauer und beugt Problemen frühzeitig vor.</p>
        </details>

        <details>
          <summary>6. Wie läuft eine Überprüfung ab?</summary>
          <p>Der Installateur kontrolliert alle sicherheitsrelevanten Komponenten und stellt den ordnungsgemäßen Betrieb sicher.</p>
        </details>

        <details>
          <summary>7. Wird auch bei speziellen Fehlern geholfen?</summary>
          <p>Ja, wir kennen typische Fehler wie TA 211 E und andere technische Ursachen bei Junkers Anlagen.</p>
        </details>

        <details>
          <summary>8. Wie schnell ist der Notdienst vor Ort?</summary>
          <p>In Wien meist rasch vor Ort. Einsätze in NÖ und Bgld erfolgen ebenfalls zeitnah.</p>
        </details>

        <details>
          <summary>9. Bietet der Junkers Notdienst auch Wartung an?</summary>
          <p>Ja, neben dem Notdienst übernimmt der Kundendienst auch planbare Wartung für Ihre Therme.</p>
        </details>

        <details>
          <summary>10. Warum einen Fachbetrieb wählen?</summary>
          <p>Ein erfahrener Installateur mit Fokus auf Junkers erkennt Probleme schneller und liefert eine nachhaltige Lösung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 11) Contact (last) -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Junkers Notdienst Wien kontaktieren</h2>
        <p>
          Benötigen Sie sofortige Hilfe oder haben Sie ein akutes Problem mit Ihrer Junkers Therme oder Gastherme?
          Unser Notdienst für Junkers ist rund um die Uhr erreichbar – auch an Wochenenden und Feiertagen.
        </p>
        <p style="margin-top:10px;">
          Über den Kundendienst auf dieser Seite erhalten Sie rasch Unterstützung, klare Antworten und eine zuverlässige Lösung –
          in Wien, NÖ und im Bgld.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">24/7 erreichbar</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien • NÖ • Bgld</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">schnelle Hilfe</div></div>
        </div>
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
          <textarea name="message" rows="4" placeholder="Thermenmodell, Problem, Wunschzeit..." required></textarea>
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
