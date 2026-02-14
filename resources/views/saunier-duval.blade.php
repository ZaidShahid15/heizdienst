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
 <!-- HERO (same layout/style as the previous wolf-hero, with Saunier Duval content) -->
<section class="wolf-hero" id="hero-services">
  <div class="wolf-hero__inner">
    <p class="wolf-hero__kicker">Zertifizierter Fachbetrieb • Wien &amp; Umgebung</p>

    <h1>
      Saunier Duval Thermenwartung Wien<br>
      <em>Rund um die Uhr Service vom Fachbetrieb</em>
    </h1>

    <p class="wolf-hero__sub">
      Professionelle Saunier Duval Thermenwartung Wien durch erfahrene Spezialisten – zuverlässig, effizient und rund um die Uhr verfügbar.
    </p>
    <!-- optional logo / image -->
    <div class="wolf-hero__logo">
      <img src="{{ asset('img/1sauneri.jpeg') }}" alt="Saunier Duval Thermenservice Wien" loading="lazy" decoding="async">
    </div>

    <div class="wolf-hero__bullets" aria-label="Highlights">
      <span class="wolf-pill">Wartung &amp; Service</span>
      <span class="wolf-pill">Reparatur &amp; Notdienst</span>
      <span class="wolf-pill">Preise inkl. MwSt</span>
      <span class="wolf-pill">Qualifizierte Techniker</span>
    </div>

    <div class="wolf-hero__actions">
      <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
      <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
    </div>

    

     <section class="promo-banner" id="wolf-aktion">
                    <div class="promo-banner__inner">
                        <div class="promo-banner__content">
                            <h2 class="promo-banner__title"><em>Saunier Duval Thermenwartung Aktion</em></h2>
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

 <!-- Partner -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Saunier Duval Partner in Wien & Umgebung</h2>
        <p>
          Als verlässlicher Partner für Saunier Duval Thermenwartung, Thermenwartung Wien und professionellen Thermenservice
          stehen wir Ihnen mit Erfahrung, Kompetenz und persönlichem Service zur Seite.
        </p>
        <p style="margin-top:10px;">
          Wir arbeiten streng nach Vorgaben der Marke Saunier Duval, verwenden hochwertige Materialien und moderne Gasgeräte.
          Als erfahrener Installateur und zuverlässiger Kundendienst sind wir in Wien, NÖ, Niederösterreich und der gesamten Umgebung für Sie im Einsatz.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hersteller-Vorgaben</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geschultes Team</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien & NÖ</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/sauneri.jpeg') }}" alt="Saunier Duval Partner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wartung, Reparatur & Notdienst für Ihre Saunier Duval Therme</h2>
        <p>Schneller Kundendienst, transparente Preise und ein geschultes Team – in Wien & Umgebung.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Flexibel nach Terminvereinbarung</h3>
          <p>Schneller Kundendienst – flexibel und zuverlässig, abgestimmt auf Ihren Termin.</p>
          <ul class="service-checklist">
            <li>Schnelle Rückmeldung</li>
            <li>Flexible Terminplanung</li>
            <li>Direkt vor Ort in Wien</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Transparente Preise inkl. MwSt</h3>
          <p>Klare Angebote, verständlich erklärt – ohne versteckte Zusatzkosten.</p>
          <ul class="service-checklist">
            <li>Faire Preisstruktur</li>
            <li>Leistungen offen kommuniziert</li>
            <li>MwSt selbstverständlich inkludiert</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Zertifizierter Fachmann</h3>
          <p>Qualifizierte Techniker, geschultes Team und zuverlässiger Fachbetrieb.</p>
          <ul class="service-checklist">
            <li>Erfahrene Spezialisten</li>
            <li>Saunier Duval Know-how</li>
            <li>Sicher & effizient</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

 

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Saunier Duval Therme</h2>
        <p>Wartung, Service, Reparatur und Thermentausch – zuverlässig aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Saunier Duval Thermenwartung</h3>
            <p>Erhöht die Lebensdauer, schützt vor Schäden und sorgt für einen sicheren Betrieb Ihrer Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Saunier Duval Thermenservice</h3>
            <p>Überprüfung, gründliche Reinigung, Kontrolle relevanter Bauteile und Messung der Abgaswerte.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Saunier Duval Kundendienst Wien</h3>
            <p>Schnelle Hilfe bei Problemen, Fragen oder dringenden Anliegen – zuverlässig vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Saunier Duval Thermenreparatur</h3>
            <p>Fachgerechte Reparaturen bei Defekten oder Störungen – rasch wieder volle Funktion.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Thermenstörung & Notfälle</h3>
            <p>Bei Ausfall oder Notfall: Notdienst erreichbar – schnell, sicher und zuverlässig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & neue Geräte</h3>
            <p>Beratung, Planung, Installation und Umsetzung – Duval Gastherme oder Durchlauferhitzer.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Warum eine Saunier Duval Thermenwartung unverzichtbar ist</h2>
        <p>
          Eine regelmäßige Saunier Duval Thermenwartung Wien ist entscheidend für Sicherheit, stabile Funktionalität und den
          langfristigen Werterhalt Ihres Heizsystems. Sie schützt vor Folgeschäden, senkt Risiken und sorgt für zuverlässigen Betrieb.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Ausfälle</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Warum Thermenwartung wichtig ist" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für welche Geräte & Systeme?</h2>
        <p>Wir warten alle Saunier Duval Geräte – in Wien, NÖ und der gesamten Umgebung.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Saunier Duval Therme</span>
        <span class="service-chip">Duval Gastherme</span>
        <span class="service-chip">Gastherme</span>
        <span class="service-chip">Durchlauferhitzer</span>
        <span class="service-chip">Heizkörper</span>
        <span class="service-chip">Heizsystem</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Als spezialisierter Fachmann betreuen wir sämtliche Gasgeräte nach Herstellervorgaben.
          Unsere Techniker sorgen für einen sicheren Betrieb Ihrer Anlage – zuverlässig und professionell.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ablauf der Saunier Duval Thermenwartung</h2>
        <ol class="service-steps">
          <li>
            <strong>Prüfung & Funktionsprüfung</strong>
            <span>Gründliche Kontrolle aller sicherheitsrelevanten Punkte und Gerätezustand.</span>
          </li>
          <li>
            <strong>Reinigung & Kontrolle</strong>
            <span>Reinigung, Kontrolle der Bauteile und Messung der Abgaswerte.</span>
          </li>
          <li>
            <strong>Gezielte Arbeiten</strong>
            <span>Nachfüllen, Entlüftung und Einstellung der Anlage (falls erforderlich).</span>
          </li>
          <li>
            <strong>Info & Empfehlungen</strong>
            <span>Transparente Rückmeldung zum Zustand und empfohlene Maßnahmen.</span>
          </li>
        </ol>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Ablauf der Thermenwartung" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Saunier Duval Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>
          Bei akuten Problemen, plötzlichen Ausfällen oder sicherheitsrelevanten Notfällen steht Ihnen unser Notdienst rund um die Uhr zur Verfügung.
          Egal ob Tag oder Uhrzeit – wir helfen schnell und zuverlässig.
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
            <li>Therme fällt aus</li>
            <li>Kein Warmwasser</li>
            <li>Heizung bleibt kalt</li>
            <li>Störung / Fehlermeldung</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Unsere Experten sind rasch bei Ihnen vor Ort in Wien, NÖ und der umliegenden Region.
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
        <p>Transparente Preise, klare Angebote – inkl. MwSt.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Angebote</h3>
          <p>Alle Leistungen werden offen kommuniziert – ohne versteckte Zusatzkosten.</p>
        </div>
        <div class="service-pricecard">
          <h3>Optional: Wartungsvertrag</h3>
          <p>Mehr Planungssicherheit und langfristig reduzierte Kosten durch regelmäßige Wartung.</p>
        </div>
        <div class="service-pricecard">
          <h3>Mehr Lebensdauer</h3>
          <p>Regelmäßige Wartung erhöht die Lebensdauer Ihrer Anlage und sorgt für maximale Zuverlässigkeit.</p>
        </div>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">Die MwSt ist selbstverständlich inkludiert und vollständig ausgewiesen.</p>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="warumwir-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Warum wir der richtige Fachpartner sind</h2>
        <p>
          Als erfahrener Partner für Saunier Duval, Duval Thermenwartung und Gasgeräteservice stehen wir für Qualität,
          Kompetenz und nachhaltige Lösungen. Unser Team arbeitet präzise, kundenorientiert und zuverlässig.
        </p>
        <p style="margin-top:10px;">
          Wir verbinden technische Expertise mit persönlichem Service und begleiten Sie bei Wartung, Thermentausch und laufender Betreuung.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kompetent</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparent</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Zuverlässig</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/vaillant-1.jpg') }}" alt="Fachpartner für Saunier Duval Thermen" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Saunier Duval Thermenwartung</h2>
        <p>Die wichtigsten Antworten – kurz und verständlich.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit und Effizienz dauerhaft zu gewährleisten.</p>
        </details>

        <details>
          <summary>Was passiert bei einer Wartung genau?</summary>
          <p>Es erfolgen Überprüfung, Reinigung, Funktionsprüfung und Kontrolle aller relevanten Bauteile.</p>
        </details>

        <details>
          <summary>Welche Regionen werden betreut?</summary>
          <p>Wir sind in Wien, NÖ, Niederösterreich und der gesamten Umgebung im Einsatz.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Störungen oder veralteten Geräten ist ein Thermentausch empfehlenswert.</p>
        </details>

        <details>
          <summary>Wie erreiche ich den Service?</summary>
          <p>Kontaktieren Sie uns telefonisch oder über Ihre E-Mail-Adresse – wir helfen rasch weiter.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Saunier Duval Thermenwartung in Wien sichern</h2>
        <p>Sicherheit, Effizienz und langfristige Qualität – kompetent, transparent und zuverlässig.</p>
        <p style="margin-top:10px;">📞 Jetzt Kontakt aufnehmen – Ihr Spezialist für Saunier Duval Thermen in Wien.</p>
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
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
