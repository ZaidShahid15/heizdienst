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
     ;
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
    .promo-banner__inner::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                url("{{ asset('img/final.png') }}") right center / cover no-repeat;
            z-index: 0;
        }
</style>

<main>
  <!-- HERO -->
  <!-- HERO (same style as previous “wolf-hero”, same Ocean content) -->
<section class="wolf-hero" id="hero-services">
  <div class="wolf-hero__inner">
    <p class="wolf-hero__kicker">Zertifizierter Fachbetrieb • Wien & Umgebung</p>

    <h1>
      Ocean Thermenwartung Wien<br>
      <em>Rund um die Uhr Service vom Fachbetrieb</em>
    </h1>

    <p class="wolf-hero__sub">
      Zuverlässige Ocean Thermenwartung Wien durch erfahrene Fachleute – professionell, effizient und rund um die Uhr verfügbar
      für Thermenwartung, Service, Reparatur und Notdienst in Wien, Niederösterreich, Wien NÖ und der gesamten Umgebung.
    </p>
<div class="wolf-hero__logo">
      <img src="{{ asset('img/1oceanbaxi.jpeg') }}" alt="Ocean Partner Wien" loading="lazy" decoding="async">
    </div>

    <div class="wolf-hero__bullets" aria-label="Highlights">
      <span class="wolf-pill">Wartung & Service</span>
      <span class="wolf-pill">Reparatur & Notdienst</span>
      <span class="wolf-pill">Transparente Leistungen</span>
      <span class="wolf-pill">Geprüfter Fachbetrieb</span>
    </div>

    <div class="wolf-hero__actions">
      <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
      <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
    </div>


     <section class="promo-banner" id="wolf-aktion">
                    <div class="promo-banner__inner">
                        <div class="promo-banner__content">
                            <h2 class="promo-banner__title"><em>Ocean Thermenwartung Aktion</em></h2>
                            <p class="promo-banner__price"><strong>ab  €95</strong></p>

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

  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wartung, Reparatur & Notdienst für Ihre Ocean Therme</h2>
        <p>Schneller Ocean Kundendienst, fixer Servicetermin und klare Abläufe.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Schneller Kundendienst</h3>
          <p>Fixer Servicetermin und schnelle Hilfe – direkt vor Ort in Wien & Umgebung.</p>
          <ul class="service-checklist">
            <li>Schneller Ocean Kundendienst</li>
            <li>Fixer Servicetermin</li>
            <li>Lösungsorientiert</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Klare Abläufe</h3>
          <p>Hohe Professionalität und transparente Leistungen – verständlich erklärt.</p>
          <ul class="service-checklist">
            <li>Klare Schritte</li>
            <li>Transparente Leistungen</li>
            <li>Saubere Umsetzung</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Erfahrenes Team</h3>
          <p>Erfahrene Techniker, eingespieltes Team und geprüfter Fachbetrieb.</p>
          <ul class="service-checklist">
            <li>Erfahrene Techniker</li>
            <li>Geprüfter Fachbetrieb</li>
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
        <h2>Ihr Ocean Partner in Wien & Umgebung</h2>
        <p>
          Als verlässlicher Partner für Ocean Thermenwartung und professionellen Thermenservice stehen wir unseren Kunden mit Erfahrung,
          Fachwissen und persönlicher Betreuung zur Seite. Ziel: höchste Kundenzufriedenheit – vom Erstkontakt bis zur laufenden Wartung.
        </p>
        <p style="margin-top:10px;">
          Wir betreuen Ocean Heizungsanlagen, Ocean Gasgeräte und moderne Ocean Heizung-Systeme. Als erfahrener Installateur sind wir in Wien,
          Niederösterreich, Burgenland und der gesamten Region im Einsatz – zuverlässig, sicher und lösungsorientiert.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Persönliche Betreuung</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien, NÖ & Burgenland</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sicher & effizient</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/oceanbaxi.jpeg') }}" alt="Ocean Partner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Ocean Therme</h2>
        <p>Alles rund um Ocean Therme, Gastherme und komplette Heizungsanlagen – für Sicherheit, Komfort und Effizienz.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Ocean Thermenwartung</h3>
            <p>Zuverlässige Funktion sichern, Effizienz erhöhen und Energie-Verbrauch senken – schützt vor Defekten und verlängert die Lebensdauer.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Ocean Thermenservice</h3>
            <p>Wartungen, technische Prüfungen und Optimierungen aller relevanten Geräte – inklusive Ocean Heizungsanlagen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Ocean Kundendienst Wien</h3>
            <p>Fixer Ansprechpartner bei Fragen, Anliegen oder Problemen – schnell und lösungsorientiert direkt vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Ocean Thermenreparatur</h3>
            <p>Fehlerbehebung, Fehlermeldungen auslesen und Defekte beheben – für sicheren Weiterbetrieb Ihrer Gasthermen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Ocean Thermenstörung & Notfälle</h3>
            <p>Bei Ocean-Störungen, Ausfällen oder akuten Notfällen ist unser Ocean Notdienst rund um die Uhr erreichbar.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & neue Geräte</h3>
            <p>Beratung zu Ocean Thermentausch, Austausch veralteter Modelle und neue Anlagen – inkl. Planung & Installation.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Warum eine Ocean Thermenwartung unverzichtbar ist</h2>
        <p>
          Eine regelmäßige Thermenwartung Wien ist entscheidend für Sicherheit, Komfort und die langfristige Zuverlässigkeit Ihrer Anlage.
          Sie schützt vor Problemen, erhöht die Effizienz und sorgt für ein sicheres Zuhause.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Warum Ocean Thermenwartung wichtig ist" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für welche Geräte & Systeme?</h2>
        <p>Wir warten alle Ocean Geräte – von der klassischen Therme bis zur kompletten Heizungsanlage.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Ocean Therme</span>
        <span class="service-chip">Ocean Gastherme</span>
        <span class="service-chip">Ocean Heizungsanlagen</span>
        <span class="service-chip">Gasgeräte</span>
        <span class="service-chip">Gasthermen</span>
        <span class="service-chip">Heizkörper</span>
        <span class="service-chip">Verbundene Anlagen</span>
        <span class="service-chip">Saunier Duval (markenübergreifend)</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Als erfahrener Installateur mit fundiertem Fachwissen betreuen wir Ocean (und auf Wunsch weitere Marken).
          Unsere Techniker sorgen für sicheren Betrieb in Wien, Niederösterreich, NÖ und im Burgenland.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>So läuft die Ocean Thermenwartung ab</h2>
        <ol class="service-steps">
          <li>
            <strong>Terminvergabe</strong>
            <span>Wir koordinieren einen passenden Servicetermin – schnell und flexibel.</span>
          </li>
          <li>
            <strong>Prüfung & Sicherheitscheck</strong>
            <span>Umfassende Prüfung der Therme inkl. sicherheitsrelevanter Punkte und technischem Zustand.</span>
          </li>
          <li>
            <strong>Wartung & Funktionskontrollen</strong>
            <span>Wartungs-Arbeiten, Funktionskontrollen und Fehlerbehebung (falls nötig).</span>
          </li>
          <li>
            <strong>Optimierung</strong>
            <span>Einstellungen optimieren für mehr Effizienz und geringeren Energieverbrauch.</span>
          </li>
          <li>
            <strong>Transparente Rückmeldung</strong>
            <span>Wir informieren klar über Zustand und empfohlene Maßnahmen.</span>
          </li>
        </ol>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-1.jpg') }}" alt="Ablauf der Ocean Thermenwartung" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Ocean Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>
          Bei akuten Problemen, plötzlichen Ausfällen oder dringenden Notfällen steht Ihnen unser Ocean Notdienst rund um die Uhr zur Verfügung.
          Wir reagieren schnell – unabhängig von Uhrzeit oder Wochentag.
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
            <li>Therme startet nicht / Fehlermeldung</li>
            <li>Kein Warmwasser</li>
            <li>Heizung bleibt kalt</li>
            <li>Plötzlicher Ausfall</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Unsere Experten sind rasch vor Ort in Wien, Niederösterreich und im Burgenland – um Schäden zu minimieren und Wärme wiederherzustellen.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten, Preise & MwSt</h2>
        <p>Transparente Preise und klare Kosten – fair, nachvollziehbar und ohne Überraschungen.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Leistungen</h3>
          <p>Alle Leistungen werden verständlich erklärt – klare Abläufe und saubere Dokumentation.</p>
        </div>
        <div class="service-pricecard">
          <h3>Langfristig sparen</h3>
          <p>Regelmäßige Wartung senkt langfristig Kosten, verbessert die Effizienz und erhöht die Lebensdauer.</p>
        </div>
        <div class="service-pricecard">
          <h3>Individuelles Angebot</h3>
          <p>Auf Wunsch erstellen wir ein individuelles Angebot – passend zu Gerät und Aufwand.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="warumwir-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Fachmann für Ocean Thermen in Wien</h2>
        <p>
          Als erfahrener Partner für Ocean Thermenservice, Ocean Kundendienst Wien und technische Betreuung stehen wir für Qualität,
          Zuverlässigkeit und nachhaltige Lösungen. Unser Team arbeitet serviceorientiert und kundennahe.
        </p>
        <p style="margin-top:10px;">
          Wir begleiten unsere Kunden langfristig – von der Wartung über Thermentausch bis zur laufenden Betreuung – mit klarem Fokus
          auf Sicherheit und Kundenzufriedenheit.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Zuverlässig</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kundenorientiert</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Lösungen</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Ocean Thermenservice Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Ocean Thermenwartung</h2>
        <p>Die wichtigsten Antworten – kurz und verständlich.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung durchgeführt werden?</summary>
          <p>Eine regelmäßige Thermenwartung wird empfohlen, um Sicherheit und Effizienz zu gewährleisten.</p>
        </details>

        <details>
          <summary>Welche Regionen werden betreut?</summary>
          <p>Wir sind in Wien, Niederösterreich, NÖ und im Burgenland tätig.</p>
        </details>

        <details>
          <summary>Was tun bei Störungen oder Fehlermeldungen?</summary>
          <p>Kontaktieren Sie unseren Ocean Kundendienst – wir kümmern uns um schnelle Fehlerbehebung.</p>
        </details>

        <details>
          <summary>Ist ein Thermentausch sinnvoll?</summary>
          <p>Bei veralteten Anlagen oder häufigen Problemen ist ein Ocean Thermentausch empfehlenswert.</p>
        </details>

        <details>
          <summary>Wie vereinbare ich einen Termin?</summary>
          <p>Über unsere Seite oder telefonisch – wir sind flexibel für Sie da.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
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
  (function(){
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
