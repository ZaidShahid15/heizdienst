@extends('layout.app')

@section('main')
<!-- <style>
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
    min-height:320px;
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
    /* display:flex; */
    align-items:center;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .promo-banner__title{margin:0; font-size:20px}
  .promo-banner__price{margin:0; font-size:18px}
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

  /* TOC */
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
    display:none;
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
</style> -->

@push('meta')
  <title>Vaillant Thermentausch Wien | Brennwert Therme inkl. Montage & MwSt</title>
  <meta name="description" content="Vaillant Thermentausch in Wien ✔ Brennwertthermen, Kombitherme & VCW Modelle ✔ Transparente Preise inkl. MwSt ✔ Angebot & Aktionspreis sichern">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">brennwert • montage • mwst</p>

      <h1>
        Vaillant Thermentausch<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Ein professioneller Vaillant Thermentausch in Wien sorgt für effiziente Heizung, moderne Brennwerttechnik und zuverlässige Warmwasserbereitung.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant1-1.jpg') }}" alt="Vaillant Thermentausch Wien" loading="lazy" decoding="async">
      </div>
  
      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Brennwerttherme</span>
        <span class="wolf-pill">inkl. Montage</span>
        <span class="wolf-pill">inkl. MwSt</span>
        <span class="wolf-pill">Aktionspreis</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Angebot anfordern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#ablauf-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="vaillant-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Aktionspreis sichern</em></h2>
            <p class="promo-banner__price"><strong>inkl. Montage & MwSt</strong></p>

            <a class="promo-banner__btn" href="#kontakt-services" aria-label="Angebot">
              Angebot
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
            <li class="toc-item"><a href="#wann-services"><span class="toc-badge">01</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#systeme-services"><span class="toc-badge">02</span><span class="toc-text">Brennwertsysteme</span></a></li>
            <li class="toc-item"><a href="#ablauf-services"><span class="toc-badge">03</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#montage-services"><span class="toc-badge">04</span><span class="toc-text">Montage & Sicherheit</span></a></li>
            <li class="toc-item"><a href="#kosten-services"><span class="toc-badge">05</span><span class="toc-text">Kosten & Preise</span></a></li>
            <li class="toc-item"><a href="#region-services"><span class="toc-badge">06</span><span class="toc-text">Wien & Umgebung</span></a></li>
            <li class="toc-item"><a href="#warum-services"><span class="toc-badge">07</span><span class="toc-text">Warum Profi</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">09</span><span class="toc-text">Angebot</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Wann sinnvoll -->
  <section class="service-section" id="wann-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch sinnvoll ist</h2>
            <p>
              Ein Thermentausch ist sinnvoll, wenn eine alte Gastherme häufige Reparatur benötigt, hohe Kosten verursacht oder nicht mehr dem aktuellen Stand der Technik entspricht.
              Besonders bei veralteten Heizwert-Geräten lohnt sich der Austausch auf moderne Vaillant Brennwertthermen.
            </p>
            <p>
              Diese arbeiten effizienter, senken den Gasverbrauch und verbessern die Leistung der gesamten Heizung.
              Auch bei einem steigenden Bedarf an Warmwasser oder bei Umbauten in Wohnungen und Mehrfamilienhäusern ist ein Thermentausch in Wien eine nachhaltige Entscheidung.
              Ein erfahrener Installateur prüft Zustand, Anschlüsse und Einsatzmöglichkeiten und empfiehlt passende Geräte für langfristigen, sicheren Betrieb.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/viliant.jpeg') }}" alt="Vaillant Thermentausch Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Moderne Brennwertsysteme -->
  <section class="service-section service-section--soft" id="systeme-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Vaillant Brennwertsysteme</h2>
        <p>Vaillant bietet leistungsstarke Brennwertsysteme für unterschiedliche Anforderungen, Wohnungsgrößen und Einsatzbereiche in Wien und Umgebung.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Brennwert statt Heizwert</h3>
            <p>Brennwerttechnik nutzt zusätzlich die Abwärme aus dem Abgas. Im Vergleich zum Heizwert arbeitet die Therme effizienter, spart Gas und schont Umwelt und Kosten langfristig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚿</div>
          <div>
            <h3>Kombitherme und Kombikessel</h3>
            <p>Eine Kombitherme oder ein Kombikessel vereint Heizung und Warmwasserbereitung in einem Gerät. Ideal für Wohnungen mit begrenztem Platz und konstantem Warmwasserbedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📌</div>
          <div>
            <h3>VCW Modelle im Überblick</h3>
            <p>Vaillant VCW Modelle wie der VCW 1740 bieten zuverlässige Brennwertleistung, kompakte Bauweise und moderne Funktionalitäten für einen effizienten Thermentausch in Wien.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Planung nach Bedarf</h3>
            <p>Leistung, Gerätegröße und Ausstattung werden passend zum tatsächlichen Bedarf geplant – damit Heizung und Warmwasser zuverlässig und wirtschaftlich laufen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>So läuft der Thermentausch ab</h2>
            <p>
              Ein strukturierter Ablauf sorgt für einen sicheren und reibungslosen Thermentausch. Nach einer Besichtigung erstellt der Fachmann einen Vorbefund
              und klärt alle technischen Anliegen. Anschließend erfolgt die Installationsanzeige sowie die Abstimmung mit dem Rauchfangkehrer.
            </p>
            <p>
              Die Montage inklusive Anschlüsse wird fachgerecht durchgeführt, das Altgerät wird entsorgt und das neue Gasgerät installiert.
              Nach der Inbetriebnahme prüft der Installateur alle Funktionen, stellt Raumthermostat und Raumtemperaturregelung ein und erklärt den Betrieb verständlich.
            </p>
            <ul class="service-checklist">
              <li>Besichtigung &amp; Vorbefund</li>
              <li>Installationsanzeige &amp; Abstimmung mit Rauchfangkehrer</li>
              <li>Montage, Anschlüsse und Austausch</li>
              <li>Inbetriebnahme &amp; Funktionsprüfung</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Ablauf Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Montage & Sicherheit -->
  <section class="service-section service-section--soft" id="montage-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Montage, Anschlüsse und Sicherheit</h2>
        <p>Eine fachgerechte Montage ist entscheidend für Sicherheit, Leistung und Lebensdauer der neuen Vaillant Therme.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Abgasführung, Kamin und Rauchfangkehrer</h3>
            <p>Abgasrohre, Kamin und die Freigabe des Rauchfangkehrers müssen exakt abgestimmt sein. So wird ein sicherer Betrieb der Brennwerttherme gewährleistet.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔌</div>
          <div>
            <h3>Gas, Wasser und elektrische Anschlüsse</h3>
            <p>Gas, Wasser und elektrische Anschlüsse werden normgerecht hergestellt. Alle Anschlüsse werden geprüft, dokumentiert und für einen sicheren Einsatz vorbereitet.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Preise und Aktionsangebote</h2>
            <p>
              Die Kosten für einen Vaillant Thermentausch in Wien hängen vom Modell, Zubehör, Montageaufwand und den Anschlüssen ab.
              Moderne Brennwertthermen sind in verschiedenen Preisklassen verfügbar und oft im Aktionspreis erhältlich.
            </p>
            <p>
              Ein transparenter Kostenvoranschlag gibt Überblick über Preis, MwSt, Kleinmaterial und Installation.
              So behalten Kunden die Kontrolle über Kosten, ohne versteckte Abfahrtskosten oder Wegzeit.
              Aktionen ermöglichen zusätzliche Einsparungen und erhöhen die Wirtschaftlichkeit des Austauschs.
            </p>

            <ul class="service-checklist">
              <li>Preis inkl. MwSt</li>
              <li>Aktionspreis bei ausgewählten Geräten</li>
              <li>Transparenter Kostenvoranschlag</li>
              <li>Keine versteckten Abfahrtskosten</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Kosten Vaillant Thermentausch" loading="lazy" decoding="async">
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
            <h2>Thermentausch in Wien und Umgebung</h2>
            <p>
              Ein professioneller Thermentausch in Wien und Umgebung erfordert Erfahrung mit unterschiedlichen Gebäudetypen, Anschlüssen und gesetzlichen Vorgaben.
              Ob Altbau, Neubau, Wohnungen oder Mehrfamilienhäuser – jede Situation stellt andere Anforderungen an Gerät, Montage und Leistung.
            </p>
            <p>
              Unsere Installateuren kennen die Besonderheiten in Wien, stimmen sich mit Gaswerk und Rauchfangkehrers ab und sorgen für einen reibungslosen Ablauf.
              Auch in der Umgebung profitieren Kunden von kurzen Wegzeiten, klarer Planung und zuverlässigem Einsatz.
              So wird der Thermentausch langfristig sicher, effizient und passend zum tatsächlichen Bedarf umgesetzt.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Wien & Umgebung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum Profi -->
  <section class="service-section" id="warum-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum ein professioneller Thermentausch entscheidet</h2>
        <p>Ein fachgerecht durchgeführter Thermentausch erhöht Effizienz, Sicherheit und Lebensdauer – mit sauberer Montage, korrekter Anzeige und dokumentierter Inbetriebnahme.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrung und Fachmann-Know-how</h3>
            <p>Ein erfahrener Fachmann beurteilt Anschlüsse, Kamin, Zubehör und passende Vaillant Geräte objektiv – für sichere Entscheidungen und zuverlässigen Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♻️</div>
          <div>
            <h3>Saubere Entsorgung des Altgeräts</h3>
            <p>Das Altgerät wird fachgerecht entsorgt und der Austausch sauber dokumentiert – damit alles technisch und organisatorisch passt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏳</div>
          <div>
            <h3>Längere Lebensdauer der neuen Therme</h3>
            <p>Durch korrekte Montage, Einstellungen und Funktionsprüfung läuft die neue Therme stabiler – weniger Störungen, mehr Lebensdauer.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Ein Ansprechpartner von Planung bis Betrieb</h3>
            <p>Kunden profitieren von einem klaren Überblick, festen Ansprechpartnern und professionellem Kundendienst – von der Einführung bis zum laufenden Betrieb.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Vaillant Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Ein Thermentausch ist sinnvoll bei häufigen Reparaturen, hohem Gasverbrauch oder wenn die bestehende Gastherme technisch überholt ist und nicht mehr effizient arbeitet.</p>
        </details>

        <details>
          <summary>Wie lange dauert ein Thermentausch in Wien?</summary>
          <p>In den meisten Fällen dauert der Austausch inklusive Montage, Anschlüsse und Inbetriebnahme einen Arbeitstag, abhängig von Vorbefund und baulichen Gegebenheiten.</p>
        </details>

        <details>
          <summary>Welche Vaillant Geräte eignen sich für Wohnungen?</summary>
          <p>Für Wohnungen sind kompakte Kombithermen und VCW Brennwertthermen ideal, da sie Heizung und Warmwasserbereitung platzsparend kombinieren.</p>
        </details>

        <details>
          <summary>Sind Vorbefund und Installationsanzeige notwendig?</summary>
          <p>Ja, Vorbefund und Installationsanzeige sind gesetzlich vorgeschrieben und werden gemeinsam mit Rauchfangkehrer und Gaswerk abgestimmt.</p>
        </details>

        <details>
          <summary>Was kostet ein Vaillant Thermentausch inkl. MwSt?</summary>
          <p>Der Preis hängt von Modell, Leistung, Zubehör und Montage ab. Ein transparenter Kostenvoranschlag zeigt alle Kosten inklusive MwSt und Aktionspreis.</p>
        </details>

        <details>
          <summary>Ist Wartung nach dem Thermentausch erforderlich?</summary>
          <p>Regelmäßige Wartung und Thermenwartung sichern den effizienten Betrieb, erhöhen die Lebensdauer und erhalten die Herstellergarantie.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Beratung &amp; Angebot anfordern</h2>
        <p>
          Sie planen einen Vaillant Thermentausch in Wien oder Umgebung? Lassen Sie sich unverbindlich beraten und erhalten Sie ein maßgeschneidertes Angebot inklusive Aktionspreis, Montage und MwSt.
        </p>
        <p style="margin-top:10px;">
          👉 Jetzt Angebot anfordern und Thermentausch professionell umsetzen
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
          <textarea name="message" rows="4" placeholder="Wohnung/Haus, Gerät/Modell, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>
</main>
<!-- 
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
</script> -->
@endsection
