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

  /* ===== ✅ Card split (EQUAL HEIGHT like your previous site) ===== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* ✅ stretch for equal height */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex; /* ✅ make children fill height */
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

  /* ✅ Image box = equal height with content (fills full) */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:100%;            /* ✅ same height as text card */
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

  /* =========================
     ✅ TOC (after hero, full width)
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

    .service-stats{grid-template-columns:1fr;} /* stats 1 per row on mobile */

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}

    .card-split__text,
    .card-split__media{display:block;}

    .service-media__box{min-height:220px; height:auto;} /* ✅ nice on mobile */
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Windhager Kundendienst Wien | Thermenwartung, Reparatur & Notdienst</title>
  <meta name="description" content="Windhager Kundendienst Wien für Gastherme & Heizung. Thermenwartung, Reparatur, Fehlercode-Diagnose und Notdienst rund um die uhr in Wien, NÖ & Burgenland.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">service rund um die uhr</p>

      <h1>
        Windhager Kundendienst Wien<br>
        <em>service rund um die uhr</em>
      </h1>

      <p class="wolf-hero__sub">
        Professioneller Windhager Kundendienst Wien für Gastherme, Heizung und Thermenwartung inklusive Reparatur und Notdienst.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1wolf.jpeg') }}" alt="Windhager Kundendienst Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Fehlercode-Diagnose</span>
        <span class="wolf-pill">Notdienst rund um die uhr</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Windhager Kundendienst Aktion</em></h2>
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

  <!-- Service -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Windhager Service in Wien</h2>
            <p>
              Der Windhager Kundendienst Wien bietet zuverlässigen Service für Windhager Gastherme, Thermen und moderne Heizsysteme direkt am Ort.
              Kunden in Wien und Niederösterreich profitieren von schneller Hilfe, persönlicher Beratung und professioneller Betreuung.
            </p>
            <p>
              Als Meisterbetrieb arbeiten wir nach höchsten Standards und betreuen unterschiedliche Modelle der Marke Windhager.
              Unser Service umfasst Thermenwartung, Wartung, Reparatur und umfassende Überprüfung aller Komponenten.
              Ziel unseres Unternehmens ist es, Sicherheit, Effizienz und langfristigen Betrieb Ihrer Heizung zu gewährleisten.
              Auch im Burgenland stehen unsere Profis für kompetente Unterstützung zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/wolf.jpeg') }}" alt="Windhager Service in Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Techniker, Meisterbetrieb & Profis</h2>
            <p>
              Unser Windhager Kundendienst wird von erfahrenen Technikern, Installateur-Fachkräften und Profis durchgeführt.
              Mit fundierter Erfahrung, Diagnose-Kompetenz und präziser Arbeit sorgen wir für schnelle Behebung jedes Problems.
            </p>
            <p>
              Unsere Experten analysieren Fehlercode-Anzeigen wie E02 Überhitzungsschutz, E110 Kessel, E133 Zündungsfehler,
              E161 Lüfterfehler oder E164 Lüfterfehler sorgfältig. Auch komplexe Fehlermeldungen wie E21 E22 oder E97 E99
              werden fachgerecht überprüft. Durch strukturierte Fehlersuche, Überprüfung und Reinigung sichern wir einen stabilen
              Betrieb Ihrer Windhager Therme. Zuverlässigkeit und professionelle Betreuung stehen dabei im Mittelpunkt.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Diagnose-Kompetenz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Strukturierte Fehlersuche</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Professionelle Betreuung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Techniker, Meisterbetrieb & Profis" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen unseres Kundendienstes</h2>
        <p>Thermenservice, Thermenwartung, Reparatur, Diagnose und Thermentausch – professionell betreut.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Windhager Thermenservice</h3>
            <p>Professioneller Windhager Thermenservice für Wartung, Überprüfung und sicheren Betrieb Ihrer Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Thermenwartung & Überprüfen</h3>
            <p>Gründliche Thermenwartung inklusive Überprüfen aller sicherheitsrelevanten Komponenten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur & Behebung</h3>
            <p>Schnelle Reparatur und Behebung bei Störungen oder angezeigtem Fehlercode.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Windhager Notdienst Einsatz</h3>
            <p>Zuverlässiger Windhager Notdienst im Einsatz bei Notfällen oder akuten Problemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Diagnose & Fehlersuche</h3>
            <p>Präzise Diagnose und Fehlersuche bei elektronischen oder mechanischen Fehlern.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Windhager Thermentausch</h3>
            <p>Beratung und Windhager Thermentausch bei veralteten oder irreparablen Geräten.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Thermenwartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Windhager Thermenwartung & Wartungsarbeiten</h2>
            <p>
              Eine regelmäßige Windhager Thermenwartung erhöht die Lebensdauer Ihrer Gastherme und sorgt für sicheren Betrieb.
              Unsere Windhager Thermenwartung umfasst Überprüfung von Brenner, Heizkreislauf, Thermostats und Elektronik.
              Auch Parameter-Einstellungen, Reinigung sowie Kontrolle des Heizungsthermistor Thermistor gehören dazu.
            </p>
            <p>
              Thermenwartung reduziert Störungen, verbessert Effizienz und schützt vor teuren Reparaturen.
              Unsere Wartungsarbeiten sichern zuverlässige Funktion von Kessel, Heizkörper und dem gesamten System.
              Kunden erhalten transparente Beratung zu Intervallen und Vorteilen einer regelmäßigen Wartung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sicherer Betrieb</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Windhager Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparaturen -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur & Ersatzteile</h2>
            <p>
              Der Windhager Kundendienst Wien übernimmt fachgerechte Reparaturarbeiten an Gastherme, Therme und Heizung.
              Unsere Techniker prüfen die Ursache, führen eine präzise Diagnose durch und beheben Störungen zuverlässig.
              Dabei berücksichtigen wir Fehler, Fehlermeldungen und typische Fehlercode-Hinweise wie E02 Überhitzungsschutz,
              E133 Zündungsfehler oder E161 Lüfterfehler.
            </p>
            <p>
              Wenn Bauteile getauscht werden müssen, setzen wir passende Ersatzteile ein und sorgen für saubere Arbeit am System.
              Bei wiederkehrenden Problemen beraten wir transparent zu Windhager Thermentausch, Austausch oder einer sinnvollen Lösung.
              Ziel ist ein sicherer Betrieb, stabile Wärme und langfristige Zuverlässigkeit.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Passende Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Präzise Diagnose</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Stabile Wärme</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Windhager Reparatur & Ersatzteile" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Windhager Notdienst rund um die uhr</h2>
        <p>
          Der Windhager Notdienst steht rund um die uhr bereit, auch bei dringenden Anliegen außerhalb der üblichen Zeiten.
          Bei Ausfall der Heizung, Störungen an der Gastherme oder akuten Problemen mit Wasser und Brenner reagieren wir rasch.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Profis sind im Einsatz in Wien und unterstützen ebenso in Niederösterreich und dem Burgenland.
          Sicherheit hat Priorität, daher prüfen wir System, Elektronik, Heizkreislauf und relevante Parameter sorgfältig.
          Im Notfall leiten wir Sofortmaßnahmen ein und stellen die Funktion der Therme schnellstmöglich wieder her.
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
            <li>Ausfall der Heizung</li>
            <li>Störungen an der Gastherme</li>
            <li>Fehlermeldungen / Fehlercode</li>
            <li>Akute Probleme mit Wasser oder Brenner</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die uhr im Einsatz – schnelle Hilfe vor Ort in Wien, Niederösterreich und dem Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preis, Angebot & MwSt</h2>
            <p>
              Transparenz bei Preis und Angebot ist ein zentraler Bestandteil unseres Kundendienstes.
              Vor Beginn der Arbeit informieren wir klar über Leistungen, Preise und mögliche Kostenfaktoren.
              Kunden erhalten auf Wunsch ein konkretes Angebot, abgestimmt auf Wartung, Reparatur oder Windhager Thermentausch.
            </p>
            <p>
              Auch bei Notdienst-Einsätzen kommunizieren wir nachvollziehbar und fair.
              Unser Meisterbetrieb legt Wert auf saubere Dokumentation, klare Beratung und planbare Abläufe.
              So behalten Kunden jederzeit den Überblick – von der Diagnose bis zur Behebung – und können Entscheidungen sicher und informiert treffen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Preis, Angebot & MwSt" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Lokale Abdeckung</h2>
            <p>
              Wir betreuen alle relevanten Orte in Wien sowie Niederösterreich und das Burgenland.
              Kurze Wege sichern schnelle Hilfe, zum Beispiel auch in Liesing und der Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Lokale Abdeckung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Fragen zum Kundendienst</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Was umfasst der Windhager Kundendienst Wien?</summary>
          <p>Unser Kundendienst umfasst Thermenservice, Wartung, Thermenwartung, Reparatur, Diagnose und Notdienst für Windhager Geräte.</p>
        </details>

        <details>
          <summary>Wie oft sollte eine Thermenwartung durchgeführt werden?</summary>
          <p>Eine regelmäßige Thermenwartung erhöht Sicherheit, senkt Störungen und verlängert die Lebensdauer Ihrer Gastherme.</p>
        </details>

        <details>
          <summary>Welche Fehlercodes werden häufig geprüft?</summary>
          <p>Wir prüfen unter anderem Fehlercode-Hinweise wie E02 Überhitzungsschutz, E110 Kessel, E133 Zündungsfehler, E161 Lüfterfehler und E164 Lüfterfehler.</p>
        </details>

        <details>
          <summary>Was passiert bei Störungen oder Fehlermeldungen?</summary>
          <p>Unsere Techniker führen Fehlersuche, Überprüfung und Behebung durch, inklusive Kontrolle von Elektronik, Brenner und Heizkreislauf.</p>
        </details>

        <details>
          <summary>Bietet ihr auch Thermentausch an?</summary>
          <p>Ja, wir beraten zu Windhager Thermentausch und übernehmen Austausch sowie fachgerechte Umsetzung.</p>
        </details>

        <details>
          <summary>In welchen Regionen seid ihr im Einsatz?</summary>
          <p>Wir sind in Wien sowie in Niederösterreich und dem Burgenland für Kunden im Einsatz.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt & Hotline</h2>
        <p>
          Für Anliegen, Fragen und Terminabstimmung stehen mehrere Kontaktmöglichkeiten zur Verfügung.
          Ein Anruf über Telefon ist der schnellste Weg, um Einsatz, Wartung oder Reparatur zu planen.
        </p>
        <p style="margin-top:10px;">
          Alternativ können Kunden die Kontaktmöglichkeiten auf dieser Seite nutzen; Pflichtfelder sorgen für eine zügige Bearbeitung.
          Unser Team nimmt jedes Problem ernst, berät verständlich und koordiniert rasch einen Techniker vor Ort.
          Ob Thermenservice, Windhager Thermenwartung oder Notdienst – wir stehen zuverlässig zur Verfügung und kümmern uns um einen sicheren Betrieb Ihrer Heizung.
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

@endsection
