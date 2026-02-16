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

  /* =========================
     ✅ IMAGE = CONTENT HEIGHT
     ========================= */
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
     ✅ TOC (AFTER HERO)
     ========================= */
  .toc-wrap{
    padding:16px 0 0;
    background:#fff;
  }
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
  .toc-head h4{
    margin:0;
    font-size:15px;
    font-weight:900;
    color:var(--ink);
  }
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
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 12px;
    overflow:hidden;
  }

  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Ocean Thermentausch Wien | Gastherme, Service & Notdienst</title>
  <meta name="description" content="Ocean Thermentausch in Wien ✔ Moderne Ocean Gastherme ✔ Thermenwartung, Reparatur & Notdienst ✔ Transparente Kosten & persönlicher Service">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">thermentausch in wien</p>

      <h1>
        Ocean Thermentausch Wien<br>
        <em>Service &amp; Notdienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Professioneller Ocean Thermentausch Wien für sichere Gastherme, hohe Effizienz und zuverlässigen Service in Wien und Niederösterreich.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1oceanbaxi.jpeg') }}" alt="Ocean Thermentausch Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermentausch</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Notdienst 24h</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Angebot anfordern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Ocean Aktion</em></h2>
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

  <!-- ✅ TOC AFTER HERO (HTML change: add id="tocList") -->
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
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#intro-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Intro</span></a></li>
            <li class="toc-item"><a href="#wann-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#loesungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Heizlösungen</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#sicherheit-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Sicherheit</span></a></li>
            <li class="toc-item"><a href="#kosten-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Warum Profi</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 01 -->
  <section class="service-section service-section--soft" id="intro-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ocean Thermentausch Wien</h2>
            <p>
              Ein professioneller Ocean Thermentausch Wien steht für sichere Gastherme, hohe Effizienz und zuverlässigen Service in Wien und Niederösterreich.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/oceanbaxi.jpeg') }}" alt="Ocean Thermentausch Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 02 -->
  <section class="service-section" id="wann-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch in Wien sinnvoll ist</h2>
            <p>
              Ein Thermentausch in Wien ist sinnvoll, wenn eine bestehende Ocean Therme häufige Probleme zeigt, Reparatur und Fehlerbehebung zunehmen oder Fehlermeldungen auftreten.
              Gerade bei älteren Gasthermen sinkt die Effizienz, während Sicherheitsrisiken steigen.
            </p>
            <p>
              Moderne Ocean Gasthermen verbessern Energieeffizienz, erhöhen den Komfort und senken laufende Kosten.
              Auch bei wiederkehrenden Defekts, Abgasmessung oder unzureichender Heizleistung empfiehlt sich ein Austausch.
              Ein erfahrener Installateur prüft Heizung, Gasgeräte, Heizkörper und Funktion und empfiehlt eine passende Lösung für Wohnung oder Haus.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Wann Thermentausch sinnvoll ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 03 -->
  <section class="service-section service-section--soft" id="loesungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Ocean Heizlösungen</h2>
        <p>Ocean steht für bewährte Gasgeräte, verlässliche Technik und langlebige Thermen für unterschiedliche Anforderungen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♻️</div>
          <div>
            <h3>Brennwerttechnik für mehr Effizienz</h3>
            <p>Eine moderne Ocean Gastherme nutzt Energie effizienter. Der geringere Verbrauch senkt Kosten, schont die Umwelt und verbessert die Energieeffizienz nachhaltig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Gastherme für Heizung und Komfort</h3>
            <p>Die Ocean Therme kombiniert Heizung und Warmwasser und sorgt für gleichmäßige Wärme und hohen Komfort in jeder Jahreszeit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📦</div>
          <div>
            <h3>Ocean Modelle im Überblick</h3>
            <p>Ocean Modelle werden nach Leistung, Funktion und Einsatz ausgewählt. So passt das Gerät optimal zu Wohnung, Haus und Bedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Beratung durch Fachbetrieb</h3>
            <p>Unsere Experten prüfen Anlage, Anschlüsse und Bedarf und empfehlen eine Lösung, die effizient, sicher und langfristig sinnvoll ist.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 04 -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>So läuft der Ocean Thermentausch ab</h2>
            <p>
              Der Ocean Thermentausch erfolgt klar strukturiert. Nach der Anfrage folgt eine Überprüfung der bestehenden Therme inklusive Abgasmessung.
              Anschließend werden Installation und Austausch geplant, das alte Gerät entfernt und die neue Ocean Gastherme montiert.
            </p>
            <p>
              Nach der Inbetriebnahme prüfen Techniker alle Funktionen, nehmen Einstellungen vor und erklären den sicheren Betrieb.
              So entsteht ein transparenter Ablauf mit klarer Verantwortung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Überprüfung & Analyse</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Planung & Installation</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Inbetriebnahme</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Übergabe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Ablauf Ocean Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 05 -->
  <section class="service-section service-section--dark" id="sicherheit-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Montage, Betrieb und Sicherheit</h2>
        <p>
          Eine fachgerechte Montage ist entscheidend für Sicherheit, Effizienz und Lebensdauer der Ocean Therme.
          Unsere Techniker führen alle Arbeiten an Gasgeräte, Heizung und Anschlüssen fachgerecht aus.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Regelmäßige Ocean Thermenwartung, Ocean Thermenservice und Ocean Kundendienst Wien sichern Funktion, Langlebigkeit und Komfort.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Beratung anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Warum Sicherheit zählt</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Saubere Montage nach Richtlinien</li>
            <li>Kontrolle von Anschlüssen und Funktion</li>
            <li>Wartung zur Vermeidung von Ausfällen</li>
            <li>Dokumentierte Übergabe und Hinweise</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Sicherheit &amp; Komfort – aus einer Hand.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 06 -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Preise und Aktion</h2>
            <p>
              Die Kosten für einen Ocean Thermentausch in Wien hängen von Modell, Montageaufwand und Zustand der Anlage ab.
              Transparente Preise schaffen Sicherheit bei der Entscheidung. Aktionsangebote ermöglichen zusätzliche Vorteile ohne Qualitätsverlust.
            </p>
            <p>
              Moderne Ocean Gasthermen reduzieren Energieverbrauch, senken Betriebskosten und steigern Effizienz langfristig –
              eine nachhaltige Wahl für Wien, Niederösterreich und Burgenland.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kostenübersicht</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Attraktive Aktion nutzen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Langfristige Effizienz</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Kosten Ocean Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 07 -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch in Wien, Niederösterreich und Burgenland</h2>
            <p>
              Ein Ocean Thermentausch in Wien, Niederösterreich und Burgenland erfordert regionale Erfahrung und technisches Fachwissen.
              Ob Wien, Umgebung oder ländliche Regionen – jede Wohnung und jedes Haus stellt andere Anforderungen an Gastherme, Heizung und Heizkörper.
            </p>
            <p>
              Unsere Installateure, Techniker und Experten sind regelmäßig im Einsatz und betreuen Kunden zuverlässig vor Ort.
              Durch strukturierte Planung, abgestimmte Dienstleistungen und kurze Wege entsteht ein reibungsloser Ocean Thermentausch mit hoher Effizienz,
              Sicherheit und Komfort für jede Jahreszeit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Region Ocean Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 08 -->
  <section class="service-section" id="warum-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum ein professioneller Ocean Thermentausch überzeugt</h2>
            <p>
              Ein fachgerecht durchgeführter Ocean Thermentausch erhöht nicht nur die Sicherheit, sondern verlängert auch die Lebensdauer der neuen Therme.
              Unsere Fachbetriebe prüfen Gasgeräte, Funktion, Abgasmessung und Energieeffizienz sorgfältig.
            </p>
            <p>
              Durch saubere Montage, regelmäßige Wartung und einen starken Ocean Kundendienst bleibt der Betrieb zuverlässig.
              Kunden profitieren von persönlicher Beratung, schneller Fehlerbehebung, Ocean Thermenreparatur und einem verlässlichen Notdienst – alles aus einer Hand.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Erfahrung &amp; Expertenwissen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Entsorgung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hohe Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Service &amp; Notdienst</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Warum Ocean Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 09 -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Ocean Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Ocean Thermentausch sinnvoll?</summary>
          <p>Ein Austausch ist sinnvoll bei häufigen Problemen, steigenden Reparaturkosten, Fehlermeldungen oder wenn die bestehende Therme nicht mehr effizient arbeitet.</p>
        </details>
        <details>
          <summary>Wie lange dauert ein Thermentausch in Wien?</summary>
          <p>In der Regel erfolgt der Austausch inklusive Installation und Inbetriebnahme innerhalb eines Tages, abhängig vom Zustand der Anlage.</p>
        </details>
        <details>
          <summary>Welche Ocean Gastherme ist die richtige Wahl?</summary>
          <p>Die Auswahl hängt von Wohnung, Haus, Heizleistung und Energiebedarf ab. Unsere Experten beraten umfassend zu passenden Modellen.</p>
        </details>
        <details>
          <summary>Ist Thermenwartung nach dem Thermentausch notwendig?</summary>
          <p>Ja, regelmäßige Thermenwartung Wien und Ocean Thermenwartung sichern Effizienz, Sicherheit und langfristigen Betrieb.</p>
        </details>
        <details>
          <summary>Was kostet ein Ocean Thermentausch?</summary>
          <p>Die Kosten richten sich nach Gerät, Montage und Aufwand. Transparente Preise schaffen Klarheit vor der Entscheidung.</p>
        </details>
        <details>
          <summary>Gibt es einen Ocean Notdienst?</summary>
          <p>Ja, ein Ocean Notdienst steht bei akuten Problemen und Defekts schnell zur Verfügung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 10 -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Beratung &amp; Angebot anfordern</h2>
        <p>
          Sie planen einen Ocean Thermentausch in Wien, Niederösterreich oder Burgenland? Unser Team berät Sie persönlich und erstellt ein individuelles Angebot inklusive Service, Aktion und transparenter Kosten.
        </p>
        <p style="margin-top:10px;">
          👉 Jetzt Angebot anfordern und Ocean Thermentausch professionell umsetzen
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
