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
    align-items:stretch;
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
    display:flex;
    align-items:center;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .promo-banner__title{margin:0; font-size:20px;}
  .promo-banner__price{margin:0; font-size:18px;}
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

  /* TOC (UPDATED: no extra blank space, no scrollbar, height = items only) */
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

  /* default collapsed via class (JS will also set it) */
  .toc-card.is-collapsed .toc-body{display:none;}
  .toc-card:not(.is-collapsed) .toc-body{display:block;}

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
  .toc-iconbtn svg{width:18px; height:18px; fill:var(--ink); transition:transform .18s ease}

  .toc-body{
    border-top:1px solid var(--line);
    padding:12px 12px 14px;
    /* IMPORTANT: no fixed height + no overflow => no scrollbar + no empty space */
  }

  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
    /* IMPORTANT: no max-height, no overflow => show only options space */
  }

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
  }
</style>

@push('meta')
  <title>Vaillant Thermenreparatur Wien – Notdienst &amp; Service rund um die Uhr</title>
  <meta name="description" content="Professionelle Vaillant Thermenreparatur Wien mit Notdienst rund um die Uhr. Thermenservice, Thermenwartung, Thermentausch &amp; Kundendienst in Wien und Niederösterreich.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">notdienst • service • reparatur</p>

      <h1>
        Vaillant Thermenreparatur<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Vaillant Reparatur, Thermenservice und Notdienst in Wien und Niederösterreich – rund um die Uhr für Sie verfügbar.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant1-1.jpg') }}" alt="Vaillant Thermenreparatur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenservice</span>
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparaturen</span>
        <span class="wolf-pill">Notdienst 24/7</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#service-services">Service ansehen</a>
      </div>

      <section class="promo-banner" id="vaillant-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Vaillant Kundendienst</em></h2>
            <p class="promo-banner__price"><strong>rund um die Uhr</strong></p>

            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC (AFTER HERO) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <!-- default collapsed -->
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
            <button
              class="toc-iconbtn"
              type="button"
              id="tocToggle"
              aria-expanded="false"
              aria-controls="tocBody"
              aria-label="Inhaltsverzeichnis umschalten"
            >
              <svg viewBox="0 0 448 512" aria-hidden="true">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <!-- IMPORTANT: id="tocList" required by your JS -->
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#service-services"><span class="toc-badge">01</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#reparatur-services"><span class="toc-badge">02</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#hilfe-services"><span class="toc-badge">04</span><span class="toc-text">Schnelle Hilfe</span></a></li>
            <li class="toc-item"><a href="#wartung-services"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#tausch-services"><span class="toc-badge">06</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#team-services"><span class="toc-badge">07</span><span class="toc-text">Team</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Service -->
  <section class="service-section" id="service-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Thermenreparatur und Service in Wien</h2>
            <p>
              Eine funktionierende Vaillant Therme ist entscheidend für Warmwasser, Heizung und den sicheren Betrieb Ihrer Heizungsanlage.
              Unsere Vaillant Thermenreparatur Wien bietet schnellen Thermenservice für alle Vaillant Gasthermen, moderne Geräte und bestehende Systeme.
            </p>
            <p>
              Ob Defekt, Fehlermeldung oder akutes Problem – unser Kundendienst analysiert die Ursache präzise und sorgt für eine fachgerechte Reparatur.
              Als erfahrener Installateur in Wien und Niederösterreich stehen wir rund um die Uhr zur Verfügung. Wir arbeiten mit original Ersatzteile,
              prüfen Gasgeräte sorgfältig und stellen die Sicherheit Ihrer Anlage sicher.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/viliant.jpeg') }}" alt="Vaillant Thermenservice Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section service-section--soft" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur Ihrer Vaillant Therme bei Defekt</h2>
            <p>
              Ein Defekt an Ihrer Vaillant Therme kann schnell zu Heizungsausfall oder fehlendem Warmwasser führen.
              Unsere Spezialisten reagieren rasch auf jede Thermenstörung oder Heizungsstörung in Wien.
            </p>
            <p>
              Nach strukturierter Fehlerdiagnose und gründlicher Fehleranalyse beheben unsere Techniker das Problem effizient.
              Ob Wärmetauscher, Brenner oder andere Bauteile – wir tauschen Ersatzteile fachgerecht und sorgen für sicheren Betrieb Ihrer Gastherme.
              Bei häufigen Störungen beraten wir transparent über Thermentausch oder weitere Arbeiten.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schnelle Diagnose</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Original Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sicherer Betrieb</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Vaillant Reparatur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Vaillant Notdienst Wien rund um die Uhr</h2>
        <p>
          Bei akuten Problemen ist unser Vaillant Notdienst in Wien rund um die Uhr erreichbar.
          Ob plötzliche Fehlermeldung, Gasgeruch oder kompletter Heizungsausfall – unser Notdienst sorgt für schnelle Hilfe.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Techniker sind im gesamten Raum Wien und Niederösterreich im Einsatz und rasch vor Ort.
          Der Notdienst übernimmt Reparatur, Überprüfung und Sicherung Ihrer Anlage – besonders in dringenden Fällen.
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
            <li>Heizungsausfall</li>
            <li>Fehlermeldung / Thermenstörung</li>
            <li>Gasgeruch</li>
            <li>Kein Warmwasser</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr verfügbar – Wien &amp; Niederösterreich.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Schnelle Hilfe -->
  <section class="service-section" id="hilfe-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Schnelle Hilfe bei Heizungsausfall</h2>
        <p>Bei Heizungsausfall oder schwerem Problem mit Ihrer Therme reagieren unsere Experten sofort und stellen den sicheren Betrieb schnellstmöglich wieder her.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Rasche Störungsbehebung</h3>
            <p>Wir reagieren schnell auf Thermenstörung, Fehlermeldung oder Ausfall und bringen Warmwasser und Heizung zuverlässig zurück.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Techniker in Wien und Niederösterreich</h3>
            <p>Unser Team aus erfahrenen Techniker betreut Kunden in Wien und Niederösterreich zuverlässig und steht rund um die Uhr zur Verfügung.</p>
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
            <h2>Thermenwartung und Sicherheit Ihrer Heizungsanlage</h2>
            <p>
              Eine regelmäßige Vaillant Thermenwartung ist entscheidend für Sicherheit, Effizienz und Langlebigkeit Ihrer Therme.
              Durch professionelle Wartung und gründliche Überprüfung aller relevanten Komponenten vermeiden Sie Störungen und unnötige Reparatur Kosten.
            </p>
            <p>
              Unser Thermenservice umfasst Reinigung, Kontrolle von Brenner und Wärmetauscher sowie Optimierung der gesamten Heizungsanlage.
              So senken wir langfristig den Gas Verbrauch und reduzieren das Risiko von Defekt oder Heizungsstörung deutlich.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Niedriger Verbrauch</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Vaillant Thermenwartung Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Thermentausch und neue Installation</h2>
            <p>
              Wenn Ihre Vaillant Therme häufig defekt ist oder die Leistung nachlässt, kann ein Vaillant Thermentausch sinnvoll sein.
              Unsere Spezialisten beraten transparent zu Thermentausch, Neuinstallation und modernen Vaillant Gasthermen.
            </p>
            <p>
              Wir prüfen die bestehende Heizungsanlage, analysieren den Zustand der Geräte und erstellen einen klaren Kostenvoranschlag.
              Die Installation erfolgt fachgerecht durch erfahrene Installateur und Techniker – mit Fokus auf Sicherheit, Effizienz und optimaler Abstimmung.
            </p>

            <ul class="service-checklist">
              <li>Beratung &amp; Kostenvoranschlag</li>
              <li>Fachgerechte Neuinstallation</li>
              <li>Moderne Vaillant Geräte</li>
              <li>Langfristige Effizienz</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Vaillant Thermentausch Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum wir Ihr Vaillant Spezialisten Team sind</h2>
        <p>Kompetenz, Fachwissen und persönliche Betreuung – mit original Ersatzteile, Herstellervorgaben und einem Kundendienst, der rund um die Uhr erreichbar ist.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Erfahrung &amp; Know-how</h3>
            <p>Unsere geschulten Techniker verfügen über umfassende Erfahrung bei Vaillant Thermenreparatur, Thermenservice und Thermenwartung in Wien.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Original Ersatzteile</h3>
            <p>Wir verwenden originale Ersatzteile vom Hersteller Vaillant – für maximale Sicherheit, Langlebigkeit und zuverlässige Leistung Ihrer Gastherme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Transparente Beratung</h3>
            <p>Ob Reparatur, Wartung oder Thermentausch: Wir erklären Schritte verständlich, planen sauber und setzen Arbeiten lösungsorientiert um.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕒</div>
          <div>
            <h3>24/7 für Wien &amp; Niederösterreich</h3>
            <p>Unser Team betreut Kunden in Wien und Niederösterreich zuverlässig – inklusive Notdienst rund um die Uhr.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Vaillant Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann sollte ich eine Vaillant Thermenreparatur durchführen lassen?</summary>
          <p>Bei Fehlermeldung, Defekt, ungewöhnlichen Geräuschen oder Heizungsstörung sollte sofort unser Kundendienst in Wien kontaktiert werden.</p>
        </details>

        <details>
          <summary>Ist Ihr Vaillant Notdienst rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Vaillant Notdienst in Wien und Niederösterreich ist rund um die Uhr verfügbar – auch an Wochenenden und in dringenden Fällen.</p>
        </details>

        <details>
          <summary>Wie oft ist eine Vaillant Thermenwartung sinnvoll?</summary>
          <p>Eine jährliche Thermenwartung erhöht Sicherheit, reduziert Risiko und verlängert die Lebensdauer Ihrer Vaillant Therme.</p>
        </details>

        <details>
          <summary>Verwenden Sie originale Ersatzteile von Vaillant?</summary>
          <p>Ja, wir setzen ausschließlich auf original Ersatzteile vom Hersteller Vaillant für maximale Sicherheit und Langlebigkeit.</p>
        </details>

        <details>
          <summary>Wann lohnt sich ein Vaillant Thermentausch?</summary>
          <p>Bei häufigem Defekt, steigenden Reparatur Kosten oder veralteten Geräten empfehlen unsere Spezialisten einen Thermentausch.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Kunden außerhalb von Wien?</summary>
          <p>Unser Service steht Kunden in Wien und Niederösterreich zuverlässig zur Verfügung, inklusive Installation und Reparaturservice.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT (always last) -->
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
