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
    /* object-fit:cover; */
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

  /* ===== Card split ===== */
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
    text-transform:lowercase;
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
  <title>Rapido Notdienst Wien – Thermenservice & Gastherme 24h</title>
  <meta name="description" content="Rapido Notdienst Wien ✔ Thermenservice, Thermenwartung & Reparatur ✔ Gastherme, Heizung & Kundendienst rund um die Uhr in Wien & NÖ.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">notdienst rund um die uhr</p>

      <h1>
        Rapido Notdienst Wien<br>
        <em>Thermenservice &amp; Gastherme 24h</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe bei Störungen, Ausfall oder Problemen mit der Gastherme – der Rapido Notdienst Wien ist zuverlässig für Sie da.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1rapido.jpeg') }}" alt="Rapido Notdienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Notdienst 24h</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Rapido Notdienst Aktion</em></h2>
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

  <!-- Quick tabs -->
  <section class="service-quicktabs" id="quicktabs-services">
    <div class="service-container">
      <div class="service-tabs">
        <a class="service-tab" href="#vorteile-services">Service</a>
        <a class="service-tab" href="#kundendienst-services">Kundendienst</a>
        <a class="service-tab" href="#leistungen-services">Leistungen</a>
        <a class="service-tab" href="#wartung-services">Wartung</a>
        <a class="service-tab" href="#reparatur-services">Reparatur</a>
        <a class="service-tab" href="#notdienst-services">Notdienst</a>
        <a class="service-tab" href="#preise-services">Kosten</a>
        <a class="service-tab" href="#region-services">Region</a>
        <a class="service-tab" href="#team-services">Team</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- Vorteile / Intro bullets -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Notdienst und Kundendienst in Wien und Umgebung</h2>
            <p>
             Thermenwartung, Reparatur und Rapido Thermenservice aus einer Hand – erfahrenes Techniker Team mit Know-how. Service rund um die Uhr, auch im Winter und in jeder Jahreszeit.

</p>
            
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/rapido.jpeg') }}" alt="Rapido Kundendienst Wien" loading="lazy" decoding="async">
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
            <p>Regelmäßige Wartung verbessert Sicherheit, senkt Verbrauch und reduziert Ausfälle im Heizbetrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur &amp; Störungsbehebung</h3>
            <p>Schnelle Hilfe bei Fehlfunktionen, Druckproblemen oder Störungen – sauber, strukturiert und zuverlässig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Techniker mit Know-how</h3>
            <p>Qualifizierte Techniker und Installateure mit Erfahrung – praxisnah, professionell und lösungsorientiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕒</div>
          <div>
            <h3>24h erreichbar</h3>
            <p>Notdienst rund um die Uhr – auch an Wochenenden, Feiertagen und in der kalten Jahreszeit.</p>
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
            <h2>Rapido Kundendienst für Therme und Heizung</h2>
            <p>
              Der Rapido Kundendienst unterstützt Kunden bei allen Anliegen rund um Rapido Therme, Rapido Gastherme und moderne Heizungssysteme.
              Ob Wohnung oder Haus, Wien oder Umgebung – wir stehen als verlässlicher Partner zur Seite.
            </p>
            <p>
              Unser Team aus qualifizierten Technikern und Installateuren bringt umfassendes Fachwissen, langjährige Erfahrung und praxisnahes Know-how mit.
              Jede Überprüfung erfolgt strukturiert, damit Probleme frühzeitig erkannt und eine passende Lösung umgesetzt wird.
              Ziel ist Sicherheit, Komfort und eine stabile Funktion Ihrer Anlage.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Rapido Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Rapido Notdienst rund um die Uhr</h2>
        <p>
          Ein plötzlicher Ausfall der Gastherme, Gasgeruch oder wiederkehrende Störungen erfordern rasches Handeln.
          Der Notdienst von Rapido ist rund um die Uhr erreichbar und hilft im akuten Notfall schnell weiter.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Auch nachts, an Wochenenden oder Feiertagen sind wir im Einsatz und organisieren eine rasche Anfahrt direkt zum Ort.
          Unsere Experten prüfen Rapido Gasgeräte, Gasgeräte und Heizsysteme sorgfältig, um Risiken zu minimieren und Sicherheit zu gewährleisten –
          in Wien, Niederösterreich (NÖ) und Burgenland.
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
            <li>Ausfall der Gastherme oder Heizung</li>
            <li>Fehlfunktionen, Störungen oder Druckprobleme</li>
            <li>Sicherheitsrelevante Auffälligkeiten an Gasgeräten</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            24h erreichbar – schnelle Hilfe in Wien &amp; NÖ.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen rund um Thermenservice</h2>
        <p>Thermenwartung, Reparatur, geprüfte Ersatzteile und Thermentausch – alles aus einer Hand, sauber und nachvollziehbar.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Rapido Thermenservice</h3>
            <p>Reinigung, Überprüfung, Einstellung und Funktionskontrolle – für einen zuverlässigen Heizbetrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧪</div>
          <div>
            <h3>Thermenwartung</h3>
            <p>Regelmäßige Wartung steigert Effizienz, senkt Energiekosten und verlängert die Lebensdauer Ihrer Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur &amp; Thermenreparatur</h3>
            <p>Fachgerechte Reparatur bei Ausfällen – wir setzen auf geprüfte Ersatzteile und nachhaltige Lösungen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Gastherme &amp; Gasgeräte</h3>
            <p>Prüfung von Rapido Gastherme, Gasgeräten und Heizsystem – inklusive Sicherheitscheck bei Bedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch</h3>
            <p>Wenn Reparatur nicht sinnvoll ist: Beratung zum Rapido Thermentausch oder Rapido Gasgerätetausch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧯</div>
          <div>
            <h3>Sicherheit &amp; Abgasmessung</h3>
            <p>Reinigung, Abgasmessung und Kontrolle – für sicheren Betrieb und stabile Funktion, besonders im Winter.</p>
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
            <h2>Thermenwartung, Rapido Thermenservice und Reparatur</h2>
            <p>
              Regelmäßige Thermenwartung ist ein wichtiger Bestandteil eines zuverlässigen Heizbetriebs.
              Unsere Rapido Thermenwartung umfasst Reinigung, Überprüfung, Einstellung und Funktionskontrolle aller relevanten Geräte.
            </p>
            <p>
              Bei Bedarf führen wir eine fachgerechte Reparatur oder Rapido Thermenreparatur durch und setzen auf geprüfte Ersatzteile.
              So lassen sich Ausfälle vermeiden, Effizienz steigern und Energiekosten reduzieren – besonders in der kalten Jahreszeit.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Ausfälle</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Komfort</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Rapido Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Montage, Planung und Rapido Thermentausch</h2>
            <p>
              Wenn eine Reparatur nicht mehr sinnvoll ist, beraten wir transparent zum Rapido Thermentausch oder Rapido Gasgerätetausch.
              Unsere Dienstleistungen umfassen Planung, Montage, Durchführung und Inbetriebnahme neuer Systeme.
            </p>
            <p>
              Dabei berücksichtigen wir unterschiedliche Modelle, passende Marken und den tatsächlichen Bedarf Ihres Haushalts.
              Auch Neuinstallation oder Austausch einzelner Komponenten werden professionell umgesetzt – alles aus einer Hand.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Kundenservice und Expertise</h2>
            <p>
              Unser engagiertes Team besteht aus qualifizierten Technikern, Installateuren und echten Experten.
              Der Kundenservice legt Wert auf klare Kommunikation, feste Ansprechpartner und hohe Kundenzufriedenheit.
            </p>
            <p>
              Durch regelmäßige Schulungen sichern wir aktuelles Fachwissen und arbeiten herstellerkonform.
              Diese Kombination aus Erfahrung und Know-how ermöglicht präzise Diagnosen und nachhaltige Lösungen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">klare Abläufe</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">fixe Ansprechpartner</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schulungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Rapido Team" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Kosten und transparente Abrechnung</h2>
            <p>
              Faire Preise und nachvollziehbare Kosten sind ein zentraler Bestandteil unseres Services.
              Vor Beginn jeder Arbeit informieren wir offen über Umfang, mögliche Ersatzteile und den Aufwand.
            </p>
            <p>
              Auf Wunsch erhalten Kunden ein klares Angebot – auch per E-Mail.
              So behalten Sie jederzeit den Überblick und können Entscheidungen ruhig treffen, ohne Überraschungen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Rapido Preise und Kosten" loading="lazy" decoding="async">
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
              Der Rapido Notdienst Wien ist in ganz Wien, Niederösterreich (NÖ) sowie im Burgenland im Einsatz.
              Dank effizienter Einsatzplanung und kurzer Anfahrt sind unsere Techniker rasch vor Ort – auch in der weiteren Umgebung.
            </p>
            <p>
              Unser Notdienst steht Kunden jederzeit zur Verfügung – zuverlässig in jeder Jahreszeit, besonders im Winter.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Rapido Einsatzgebiet" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Rapido Notdienst &amp; Thermenservice Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Rapido Notdienst kontaktieren?</summary>
          <p>Bei akuten Problemen mit Gastherme oder Heizung – rund um die Uhr in Wien und Niederösterreich.</p>
        </details>

        <details>
          <summary>2. Was umfasst der Rapido Thermenservice?</summary>
          <p>Thermenwartung, Überprüfung, Reinigung, Abgasmessung und bei Bedarf Reparatur.</p>
        </details>

        <details>
          <summary>3. Gibt es Rapido Thermenwartung in Wien und Niederösterreich?</summary>
          <p>Ja, wir sind in Wien, Wien Niederösterreich, Niederösterreich (NÖ) und Umgebung im Einsatz.</p>
        </details>

        <details>
          <summary>4. Wer führt die Arbeiten durch?</summary>
          <p>Ein erfahrenes Techniker Team mit geprüften Technikern und viel Know-how übernimmt alle Einsätze.</p>
        </details>

        <details>
          <summary>5. Betreut Rapido auch Gasgeräte?</summary>
          <p>Ja, wir warten Rapido Gasgeräte, andere Gasgeräte und jede Rapido Gastherme fachgerecht.</p>
        </details>

        <details>
          <summary>6. Ist der Rapido Kundendienst auch im Winter verfügbar?</summary>
          <p>Ja, der Rapido Kundendienst ist besonders im Winter und in jeder Jahreszeit im Einsatz.</p>
        </details>

        <details>
          <summary>7. Was tun bei Gasgeruch oder Notfall?</summary>
          <p>Bei Gasgeruch sofort den Notdienst kontaktieren – wir sorgen für Sicherheit und schnelle Hilfe.</p>
        </details>

        <details>
          <summary>8. Bietet Rapido auch Thermentausch an?</summary>
          <p>Ja, Rapido Thermentausch und Rapido Gasgerätetausch inklusive Montage, Neuinstallation und Planung.</p>
        </details>

        <details>
          <summary>9. Wie transparent sind Preise und Kosten?</summary>
          <p>Preise und Kosten werden vorab klar erklärt – inklusive möglicher Ersatzteile und Aufwand.</p>
        </details>

        <details>
          <summary>10. Wie erreiche ich den Kundenservice?</summary>
          <p>Über Kundendienst, per E-Mail oder direkt über diese Seite – für alle Anliegen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM ALWAYS LAST -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt, Fragen und schnelle Hilfe</h2>
        <p>
          Bei Fragen, Störungen oder im akuten Notfall erreichen Sie den Rapido Kundendienst schnell und unkompliziert.
          Über den Kontakt auf dieser Seite koordinieren wir rasch einen Einsatz.
        </p>
        <p style="margin-top:10px;">
          Ihr Rapido Notdienst Wien: Thermenservice, Wartung, Reparatur und Thermentausch – zuverlässig in Wien, Niederösterreich und Burgenland.
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
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
