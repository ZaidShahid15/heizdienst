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

  /* Image box (box gets size, image fills 100%) */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:367px;              /* box size */
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
    align-items:stretch; /* so image equals content height */
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

  /* IMPORTANT: image equals content size in card-split */
  .card-split__media{height:100%;}
  .card-split .service-media__box{
    height:100%;
    min-height:320px; /* keeps a nice look if text is short */
  }

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
  .promo-banner__title{margin:0;  font-size:20px}
  .promo-banner__price{margin:0;  font-size:18px}
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

  /* =========================
     TOC (after hero)
     - default collapsed
     - click FULL bar to toggle
     - scroll shows properly
     ========================= */
  .toc-wrap{
    padding:18px 0 8px;
    background:linear-gradient(180deg, #fff, rgba(24,64,72,.03));
  }
  .toc-card{
    border:1px solid var(--line);
    border-radius:20px;
    background:#fff;
    box-shadow:0 12px 34px rgba(0,0,0,.06);
    overflow:hidden;
  }
  .toc-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    padding:14px 16px;
    cursor:pointer;
    user-select:none;
  }
  .toc-head:hover{background:rgba(24,64,72,.03)}
  .toc-head h4{
    margin:0;
    color:var(--ink);
    font-size:16px;
    letter-spacing:-.01em;
    font-weight:900;
  }
  .toc-iconbtn{
    width:40px; height:40px;
    display:grid; place-items:center;
    border-radius:12px;
    border:1px solid var(--line);
    background:#fff;
    cursor:pointer;
    flex:0 0 auto;
  }
  .toc-iconbtn svg{width:18px; height:18px; fill:var(--ink); transition:.18s ease}
  .toc-card.is-open .toc-iconbtn svg{transform: rotate(180deg)}
  .toc-card:not(.is-open) .toc-iconbtn svg{transform: rotate(0deg)}

  .toc-body{
    border-top:1px solid var(--line);
    padding:12px 12px 14px;
    display:none; /* default collapsed */
  }
  .toc-card.is-open .toc-body{display:block}

  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
    max-height:260px;
    overflow:auto;
    padding-right:6px;
  }
  .toc-list::-webkit-scrollbar{width:10px}
  .toc-list::-webkit-scrollbar-thumb{
    background:rgba(24,64,72,.20);
    border-radius:999px;
    border:3px solid #fff;
  }
  .toc-list::-webkit-scrollbar-track{background:transparent}

  .toc-item + .toc-item{margin-top:10px}
  .toc-item a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 12px;
    border-radius:16px;
    border:1px solid rgba(24,64,72,.10);
    background:#fff;
    transition:.15s ease;
  }
  .toc-item a:hover{
    transform:translateY(-1px);
    box-shadow:0 10px 26px rgba(0,0,0,.08);
    border-color:rgba(24,64,72,.18);
  }
  .toc-badge{
    width:32px;
    height:32px;
    border-radius:999px;
    display:grid;
    place-items:center;
    font-weight:900;
    color:var(--accent);
    border:1px solid rgba(251,154,27,.35);
    background:rgba(251,154,27,.14);
    flex:0 0 auto;
  }
  .toc-text{
    font-weight:900;
    color:var(--ink);
    letter-spacing:-.01em;
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
    .card-split .service-media__box{height:220px; min-height:220px;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .toc-list{max-height:240px;}
  }
</style>

@push('meta')
  <title>Junkers Installateur Wien | Service, Wartung &amp; Notdienst</title>
  <meta name="description" content="Zuverlässiger Junkers Installateur Wien für Installation, Wartung, Reparatur &amp; Notdienst. Faire Preise, erfahrenes Team. Jetzt Termin vereinbaren.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">service • wartung • notdienst</p>

      <h1>
        Junkers Installateur<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Als erfahrener Junkers Installateur Wien bieten wir zuverlässige Installation, Wartung und Service für Junkers Therme, Heizung und Gas in Wien.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1wolf.jpeg') }}" alt="Junkers Installateur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Installation</span>
        <span class="wolf-pill">Wartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">24/7 Notdienst</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Termin vereinbaren</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="junkers-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Transparente Preise</em></h2>
            <p class="promo-banner__price"><strong>Faire Abrechnung</strong></p>

            <a class="promo-banner__btn" href="#kontakt-services" aria-label="Termin">
              Termin
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC (AFTER HERO) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card" id="tocCard">
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
          <ul class="toc-list">
            <li class="toc-item"><a href="#fachpartner-services"><span class="toc-badge">01</span><span class="toc-text">Fachpartner</span></a></li>
            <li class="toc-item"><a href="#leistungen-services"><span class="toc-badge">02</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#technik-services"><span class="toc-badge">03</span><span class="toc-text">Heizung &amp; Gas</span></a></li>
            <li class="toc-item"><a href="#preise-services"><span class="toc-badge">04</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#ablauf-services"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services"><span class="toc-badge">06</span><span class="toc-text">Wien &amp; Umgebung</span></a></li>
            <li class="toc-item"><a href="#tausch-services"><span class="toc-badge">07</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Junkers Fachpartner in Wien -->
  <section class="service-section" id="fachpartner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Junkers Fachpartner in Wien</h2>
            <p>
              Als zertifizierter Junkers Fachpartner in Wien stehen wir Kunden mit Kompetenz, Erfahrung und hoher Servicequalität zur Verfügung.
              Unser Unternehmen arbeitet eng mit Junkers und Bosch zusammen und betreut sämtliche Produkte dieser Marke professionell.
            </p>
            <p>
              Unsere Installateure sind geschulte Fachkräfte mit fundiertem Know-how in Heiztechnik, Gas und modernen Heizungsanlagen.
              Dank regelmäßiger Weiterbildung und technischer Expertise gewährleisten wir Sicherheit, Energieeffizienz und lange Lebensdauer jeder Junkers Therme.
              Wir sind in Wien und Umgebung sowie in Niederösterreich im Einsatz und bieten persönliche Betreuung für private Kunden und Betriebe.
              Vertrauen, Qualität und transparente Abläufe stehen bei unserem Service stets im Mittelpunkt.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size6.jpeg') }}" alt="Junkers Fachpartner Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Installation, Wartung und Service -->
  <section class="service-section service-section--soft" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>
          Unser Installateur Service für Junkers in Wien umfasst Installation, laufende Wartung und professionellen Kundendienst – für sicheren Betrieb, klare Preise und zuverlässige Betreuung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Junkers Therme Installation</h3>
            <p>Wir führen die Installation Ihrer Junkers Therme inklusive Montage, Anschluss an Heizanlage und Gas sowie sicherer Inbetriebnahme durch erfahrene Installateure durch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Junkers Thermenwartung Service</h3>
            <p>Unsere Junkers Thermenwartung und regelmäßige Thermenwartung sichern den zuverlässigen Betrieb, erhöhen die Lebensdauer und beugen Störungen frühzeitig vor.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur und Ersatzteile</h3>
            <p>Bei Reparatur und Thermenreparatur verwenden wir geprüfte Ersatzteile und beheben Probleme effizient, sicher und nachhaltig durch qualifiziertes Fachpersonal.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Notdienst rund um Uhr</h3>
            <p>Unser Junkers Notdienst ist rund um die Uhr verfügbar und hilft bei akuten Störungen schnell vor Ort in Wien und Umgebung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Heizung, Gas und Technik -->
  <section class="service-section" id="technik-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung, Gas und Technik</h2>
            <p>
              Wir betreuen Junkers Heizungssysteme, Gasgeräte und moderne Heiztechnik mit hoher Fachkompetenz.
              Ob Gastherme, Heizungsanlage oder komplettes Heizsystem – unsere Installateure sorgen für sicheren Betrieb und optimale Leistung.
            </p>
            <p>
              Durch regelmäßige Überprüfung, fachgerechte Wartung und gezielte Behebung von Problemen erhöhen wir die Energieeffizienz und reduzieren Gasverbrauch.
              Moderne Technik, Bosch-Standards und unsere Expertise ermöglichen langlebige Lösungen für Wohnräume und Betriebe.
              Sicherheit, Qualität und zuverlässige Funktion stehen dabei im Fokus unseres Service in Wien.
            </p>
            <ul class="service-checklist">
              <li>Überprüfung &amp; Sicherheitscheck</li>
              <li>Effizienzsteigerung &amp; Gasverbrauch senken</li>
              <li>Wartung nach Herstellervorgaben</li>
              <li>Gezielte Fehlerdiagnose &amp; Reparatur</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Heizung Gas Technik Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise, Transparenz und Vertrauen -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Transparenz und Vertrauen</h2>
            <p>
              Faire Preise und transparente Abrechnung sind für uns selbstverständlich.
              Unsere Kunden erhalten vor jedem Einsatz klare Informationen zu Preisen, Leistungen und Umfang der Arbeiten.
            </p>
            <p>
              Die Terminvergabe erfolgt unkompliziert, und alle Kosten werden nachvollziehbar erklärt.
              Dank positiver Bewertungen und langjähriger Erfahrung genießen wir das Vertrauen vieler Kunden in Wien.
              Unser Ziel ist ein Service, der Qualität, Kompetenz und faire Preisgestaltung vereint.
              Dafür danken wir unseren Kunden, die unsere Arbeit schätzen und weiterempfehlen.
            </p>

            <ul class="service-checklist">
              <li>Klare Infos vor Arbeitsbeginn</li>
              <li>Nachvollziehbare Abrechnung</li>
              <li>Faire Preisgestaltung</li>
              <li>Transparente Abläufe</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Preise Transparenz Vertrauen Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf von Anfrage bis Termin -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf von Anfrage bis Termin</h2>
            <p>
              Der Ablauf bei unserem Junkers Installateur Service in Wien ist klar, effizient und kundenorientiert.
              Nach Ihrer Anfrage über unsere Website, per Telefon oder Mail klären wir Ihr Anliegen und vereinbaren eine passende Terminvergabe.
            </p>
            <p>
              Unsere Installateure analysieren vor Ort die Situation, führen eine fachgerechte Überprüfung durch und beraten transparent zu Lösung, Preisen und дальней Vorgehensweise.
              Anschließend erfolgt die professionelle Installation, Wartung oder Reparatur der Junkers Therme.
              Unser Kundendienst steht Ihnen während des gesamten Einsatzes zur Verfügung und sorgt für einen reibungslosen Ablauf.
              Ziel ist ein sicherer Betrieb, minimale Ausfallzeiten und volle Zufriedenheit unserer Kunden.
            </p>
            <ul class="service-checklist">
              <li>Anfrage &amp; Terminvergabe</li>
              <li>Analyse &amp; Überprüfung vor Ort</li>
              <li>Transparente Beratung zu Lösung &amp; Preis</li>
              <li>Installation / Wartung / Reparatur</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Ablauf Junkers Installateur Wien" loading="lazy" decoding="async">
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
              Unser Junkers Installateur Team ist in ganz Wien und Umgebung im Einsatz.
              Durch unsere regionale Nähe reagieren wir schnell auf Termine, Störungen und Notdienst-Einsätze.
              Auch in Niederösterreich stehen wir Kunden zuverlässig zur Verfügung.
            </p>
            <p>
              Unsere Erfahrung mit unterschiedlichen Gebäuden, Heizungsanlagen und Gasinstallationen ermöglicht effiziente Betreuung direkt am Ort.
              Als regionaler Anbieter legen wir Wert auf persönliche Betreuung, kurze Wege und verlässlichen Service.
              Kunden profitieren von schneller Erreichbarkeit, klarer Kommunikation und einem starken Partner für Junkers Heiztechnik in Wien und der Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size6.jpeg') }}" alt="Wien und Umgebung Junkers Installateur" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch und Austausch -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Thermentausch und Austausch</h2>
        <p>
          Ein Thermentausch ist sinnvoll, wenn die bestehende Junkers Therme häufige Störungen verursacht oder die Energieeffizienz nicht mehr zeitgemäß ist.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Beratung zu modernen Geräten</h3>
            <p>Wir beraten umfassend zu modernen Junkers Geräten, Bosch Technologien und passenden Heizungsanlagen – abgestimmt auf Ihren Bedarf und Ihr Objekt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧱</div>
          <div>
            <h3>Montage &amp; fachgerechter Austausch</h3>
            <p>Nach Auswahl der optimalen Lösung übernehmen wir Montage, Installation und den fachgerechten Austausch der alten Anlage – sauber, sicher und effizient.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Sicherheit &amp; Lebensdauer</h3>
            <p>Wir achten auf Sicherheit, saubere Umsetzung und eine lange Lebensdauer der neuen Heizanlage – für zuverlässigen Betrieb und stabile Leistung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📉</div>
          <div>
            <h3>Weniger Gasverbrauch</h3>
            <p>Kunden erhalten eine zukunftssichere Lösung mit besserer Leistung, geringerem Gasverbrauch und zuverlässigem Betrieb – für mehr Komfort im Alltag.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Junkers</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Junkers Thermenwartung notwendig?</summary>
          <p>Eine regelmäßige Wartung einmal jährlich wird empfohlen, um Sicherheit, Effizienz und die Lebensdauer der Junkers Therme zu erhalten.</p>
        </details>

        <details>
          <summary>Bieten Sie einen Junkers Notdienst an?</summary>
          <p>Ja, unser Junkers Notdienst ist rund um die Uhr erreichbar und hilft bei akuten Störungen oder Ausfällen schnell weiter.</p>
        </details>

        <details>
          <summary>Welche Geräte betreuen Sie?</summary>
          <p>Wir betreuen alle Junkers Geräte, Gasthermen, Heizungsanlagen sowie ausgewählte Klimaanlagen.</p>
        </details>

        <details>
          <summary>Wie transparent sind Ihre Preise?</summary>
          <p>Unsere Preise sind klar, fair und werden vor Beginn der Arbeiten transparent kommuniziert.</p>
        </details>

        <details>
          <summary>Sind Sie auch außerhalb von Wien tätig?</summary>
          <p>Ja, wir betreuen Wien und Umgebung sowie Niederösterreich zuverlässig mit kurzen Reaktionszeiten.</p>
        </details>

        <details>
          <summary>Wie läuft die Terminvergabe ab?</summary>
          <p>Nach Ihrer Anfrage erfolgt eine rasche Terminvergabe und persönliche Betreuung durch unser Team.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt zum Installateur</h2>
        <p>
          Für Service, Wartung oder Reparatur steht Ihnen unser Junkers Installateur Wien jederzeit zur Verfügung.
          Unser Team aus erfahrenen Mitarbeitern, Fachkräften und Technikern berät Sie kompetent und lösungsorientiert.
          Über unsere Website, telefonisch oder per Mail erreichen Sie unseren Kundendienst schnell und unkompliziert.
        </p>
        <p style="margin-top:10px;">
          Wir nehmen jedes Anliegen ernst und stellen einen zuverlässigen Betrieb Ihrer Heizung sicher.
          Vertrauen Sie auf Erfahrung, Kompetenz und einen Fachbetrieb, der Qualität und Sicherheit in den Mittelpunkt stellt.
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
          <textarea name="message" rows="4" placeholder="Therme/Heizung, Anliegen (Wartung/Reparatur/Installation), Wunschzeit..." required></textarea>
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

    // TOC toggle (default collapsed)
    var tocCard = document.getElementById('tocCard');
    var tocToggle = document.getElementById('tocToggle');
    var tocBody = document.getElementById('tocBody');

    function setToc(open){
      if (!tocCard || !tocToggle || !tocBody) return;
      tocCard.classList.toggle('is-open', !!open);
      tocToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    }

    // default collapsed
    setToc(false);

    if (tocToggle){
      tocToggle.addEventListener('click', function(){
        var isOpen = tocCard.classList.contains('is-open');
        setToc(!isOpen);
      });

      tocToggle.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' '){
          e.preventDefault();
          var isOpen = tocCard.classList.contains('is-open');
          setToc(!isOpen);
        }
      });
    }

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
