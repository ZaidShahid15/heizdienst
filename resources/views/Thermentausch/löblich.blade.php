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
    cursor:pointer;
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

  /* =====================================================
     ✅ IMAGES SAME HEIGHT AS CONTENT (CARD-SPLIT)
     ===================================================== */
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
     ✅ TOC (after HERO)
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

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-media__box{height:220px;}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Löblich Thermentausch Wien | Gasthermen-Service & sichere Montage</title>
  <meta name="description" content="Löblich Thermentausch in Wien ✔ Zuverlässige Gasthermen & Thermenwartung ✔ Transparente Kosten ✔ Service, Notdienst & Beratung vom Profi">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Löblich Thermentausch Wien</p>

      <h1>
        Löblich Thermentausch Wien<br>
        <em>sichere Montage</em>
      </h1>

      <p class="wolf-hero__sub">
        Ein professioneller Löblich Thermentausch Wien sorgt für sichere Wärme, zuverlässige Gasthermen und hohen Komfort in Ihrem Zuhause.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1loblich.jpeg') }}" alt="Löblich Thermentausch Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Gasthermen-Service</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Transparente Kosten</span>
        <span class="wolf-pill">Notdienst & Beratung</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Angebot anfordern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#ablauf-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="loblich-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Löblich Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>

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

            <li class="toc-item"><a href="#sinnvoll-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#heizloesungen-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Heizlösungen</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#montage-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Montage</span></a></li>
            <li class="toc-item"><a href="#kosten-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Warum Profi</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Angebot</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Wann sinnvoll -->
  <section class="service-section" id="sinnvoll-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch in Wien sinnvoll ist</h2>
            <p>
              Ein Thermentausch in Wien ist sinnvoll, wenn eine bestehende Therme häufige Störungen zeigt, Reparaturen zunehmen
              oder Sicherheitsaspekte nicht mehr erfüllt sind. Besonders ältere Löblich Thermen oder Gasgeräte verlieren mit der Zeit
              an Effizienz und verursachen steigende Energiekosten.
            </p>
            <p>
              Regelmäßige Thermenwartung kann die Lebensdauer verlängern, doch bei Schäden, Gasgeruch oder Problemen mit Abgasmessung
              und Emissionen ist ein Austausch die bessere Lösung. Ein erfahrener Installateur oder Experte prüft Zustand, Heizsystem,
              Wasseranschlüsse und Betrieb und empfiehlt einen passenden Löblich Thermentausch für Wien und Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/loblich.jpeg') }}" alt="Wann ein Löblich Thermentausch sinnvoll ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Heizlösungen -->
  <section class="service-section service-section--soft" id="heizloesungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Löblich Heizlösungen im Überblick</h2>
        <p>Löblich steht für zuverlässige Thermenservice-Leistungen, hohe Qualität und moderne Gasthermen für unterschiedliche Anforderungen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Effiziente Gasthermen für den Alltag</h3>
            <p>Moderne Löblich Gasthermen bieten einen stabilen Betrieb, geringeren Verbrauch und ein angenehmes Raumklima für Wohnungen und Häuser.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Wartung, Reinigung und Lebensdauer</h3>
            <p>Regelmäßige Wartung, Reinigung und Überprüfung erhöhen die Lebensdauer der Löblich Therme und beugen Schäden, Störungen und Kohlenmonoxid-Risiken vor.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Löblich Geräte und Funktionen</h3>
            <p>Löblich Geräte überzeugen durch durchdachte Funktionen, einfache Einstellungen und zuverlässige Technik für den täglichen Einsatz im Zuhause.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Sicherheit & Emissionen im Blick</h3>
            <p>Kontrollen bei Abgasmessung, Betrieb und Emissionen schaffen Sicherheit und schützen Haushalt, Mieter und Eigentümer langfristig.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ✅ Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>So läuft der Löblich Thermentausch ab</h2>
        <p>
          Der Löblich Thermentausch erfolgt strukturiert und transparent. Nach der Terminvergabe wird die bestehende Therme überprüft und ein Wartungs-
          oder Austauschbedarf festgestellt. Anschließend erfolgt die Planung, Montage und der fachgerechte Austausch der alten Therme.
          Nach der Installation werden Funktionsprüfung, Kontrolle und Einstellungen durchgeführt. Abschließend erhalten Kunden Hinweise zu Betrieb,
          Wartungsintervall und Sicherheit. So entsteht ein reibungsloser Ablauf mit klarer Verantwortung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Überprüfung und Planung</h3>
            <p>Wir prüfen Zustand, Heizsystem, Gasgeräte und Wasseranschlüsse und planen den Tausch passend zu Ihrem Zuhause und Bedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Montage und Austausch der Therme</h3>
            <p>Fachgerechte Demontage und Entsorgung der alten Therme sowie sichere Montage der neuen Löblich Lösung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Funktionsprüfung und Kontrolle</h3>
            <p>Nach dem Anschluss erfolgt die Kontrolle: Betrieb, Dichtheit, Funktion, Abgasmessung sowie sicherheitsrelevante Werte.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Einstellungen und Übergabe</h3>
            <p>Wir stellen das Gerät optimal ein und geben klare Hinweise zu Wartungsintervall, Betrieb und Sicherheit.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ✅ Montage / Sicherheit -->
  <section class="service-section service-section--soft" id="montage-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Montage, Betrieb und Sicherheit</h2>
            <p>
              Eine fachgerechte Montage ist entscheidend für Sicherheit, Betrieb und langfristige Zuverlässigkeit der Löblich Therme.
            </p>
            <p>
              <strong>Installation durch erfahrene Techniker</strong><br>
              Erfahrene Techniker und Servicetechniker führen alle Arbeiten an Gasthermen, Wasser und Heizsystem fachgerecht aus und achten auf alle Richtlinien.
            </p>
            <p>
              <strong>Wartung, Thermenservice und Notdienst</strong><br>
              Regelmäßige Löblich Thermenwartung, Thermenservice und ein zuverlässiger Notdienst sichern den Betrieb, erhöhen die Sicherheit und schützen vor Ausfällen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Montage, Betrieb und Sicherheit" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Kosten -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Vorteile und Transparenz</h2>
            <p>
              Die Kosten für einen Löblich Thermentausch in Wien hängen von Gerät, Montageaufwand und Zustand der Anlage ab.
              Transparente Kosten schaffen Vertrauen und Planungssicherheit.
            </p>
            <p>
              Moderne Löblich Thermen senken Heizkosten, reduzieren Energieverbrauch und unterstützen Umweltschutz.
              Die Vorteile liegen in höherer Sicherheit, besserem Komfort und langfristiger Zufriedenheit für Mieter, Vermieter und Eigentümer.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kostenübersicht</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Langfristige Vorteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Ohne Überraschungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Kosten & Transparenz" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch in Wien, Niederösterreich und Burgenland</h2>
            <p>
              Ein Löblich Thermentausch in Wien, Niederösterreich und Burgenland erfordert regionale Erfahrung und genaue Kenntnis der lokalen Richtlinien.
              Ob Wien, Umgebung, NÖ oder Burgenland – jede Immobilie stellt andere Anforderungen an Heizsystem, Gasgeräte und Betrieb.
            </p>
            <p>
              Unsere Installateure, Mitarbeiter und Techniker sind regelmäßig im Einsatz und betreuen Kunden direkt vor Ort.
              Wohnungen, Häuser und unterschiedliche Heizsysteme werden individuell beurteilt. Durch strukturierte Planung, kurze Wege und klare Terminvergabe
              entsteht ein reibungsloser Thermentausch für Ihr Zuhause.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Region Wien Niederösterreich Burgenland" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Warum Profi (dark) -->
  <section class="service-section service-section--dark" id="vorteile-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Warum ein professioneller Löblich Thermentausch überzeugt</h2>
        <p>
          Ein fachgerecht umgesetzter Löblich Thermentausch erhöht die Sicherheit, senkt Energiekosten und verbessert das Raumklima dauerhaft.
          Unsere Experten prüfen Therme, Heizsystem, Wasseranschlüsse und Emissionen sorgfältig.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Durch saubere Montage, regelmäßige Löblich Thermenwartung und zuverlässigen Kundendienst bleibt die neue Therme langlebig und effizient.
          Kunden profitieren von persönlicher Betreuung, hoher Kompetenz und einem festen Partner für Wartung, Reparaturen, Löblich Thermenreparatur und Notdienst.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Beratung anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Erfahrung, Kompetenz und Fachwissen</li>
            <li>Sichere Entsorgung und fachgerechte Arbeit</li>
            <li>Lange Lebensdauer und hohe Qualität</li>
            <li>Ein Team für Service, Wartung und Betrieb</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Löblich Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Löblich Thermentausch sinnvoll?</summary>
          <p>Ein Austausch ist sinnvoll bei häufigen Störungen, steigenden Energiekosten, Defekt oder wenn Sicherheitsvorgaben nicht mehr erfüllt sind.</p>
        </details>

        <details>
          <summary>Wie lange dauert ein Thermentausch in Wien?</summary>
          <p>In der Regel erfolgt der Austausch inklusive Montage und Funktionsprüfung innerhalb eines Tages, abhängig von Anlage und Umfang der Arbeit.</p>
        </details>

        <details>
          <summary>Ist Thermenwartung auch nach dem Austausch notwendig?</summary>
          <p>Ja, regelmäßige Thermenwartung, Reinigung und Abgasmessung sichern Betrieb, Sicherheit und lange Lebensdauer.</p>
        </details>

        <details>
          <summary>Gibt es einen Wartungsvertrag für Löblich Thermen?</summary>
          <p>Ja, ein Wartungsvertrag sorgt für planbare Wartungsintervalle, Schutz vor Ausfällen und zuverlässigen Betrieb.</p>
        </details>

        <details>
          <summary>Was kostet ein Löblich Thermentausch?</summary>
          <p>Die Kosten richten sich nach Gerät, Montage und Aufwand. Transparente Preise schaffen Planungssicherheit.</p>
        </details>

        <details>
          <summary>Wer ist Ansprechpartner für Service und Notdienst?</summary>
          <p>Unser Kundenservice, Servicetechniker und Notdienst stehen bei Anliegen, Störungen oder Fragen zuverlässig zur Verfügung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ✅ CONTACT -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

@endsection
