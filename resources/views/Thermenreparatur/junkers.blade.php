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

  /* ✅ Image box */
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

  /* ✅ Stats pills */
  .service-stats{
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap:10px;
    margin-top:14px;
  }
  .service-stat{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background:#eef3f3;
    border:1px solid rgba(24,64,72,.22);
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

  /* ✅ TOC (same as previous site: collapsed, no scrollbar, height = items only) */
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
  }

  .toc-list{
    list-style:none;
    margin:0;
    padding:0;
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
  <title>Junkers Thermenreparatur Wien – Notdienst &amp; Junkers Thermenwartung Wien</title>
  <meta name="description" content="Professionelle Junkers Thermenreparatur Wien mit 24/7 Notdienst. Junkers Thermenwartung Wien, Thermenservice, Thermentausch &amp; Kundendienst in Wien, Niederösterreich und Burgenland.">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">notdienst • service • reparatur</p>

      <h1>
        Junkers Thermenreparatur<br>
        <em>Wien</em>
      </h1>

      <p class="wolf-hero__sub">
        Schnelle Hilfe für Ihre Junkers Therme in Wien – Reparatur, Thermenservice und 24/7 Notdienst zuverlässig verfügbar.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1junkers.jpeg') }}" alt="Junkers Thermenreparatur Wien" loading="lazy" decoding="async">
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

      <section class="promo-banner" id="junkers-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Junkers Kundendienst</em></h2>
            <p class="promo-banner__price"><strong>rund um die Uhr</strong></p>

            <a class="promo-banner__btn" href="#kontakt-services" aria-label="Kontakt">
              Kontakt
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC (AFTER HERO) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
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
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#service-services"><span class="toc-badge">01</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#reparatur-services"><span class="toc-badge">02</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#hilfe-services"><span class="toc-badge">04</span><span class="toc-text">Soforthilfe</span></a></li>
            <li class="toc-item"><a href="#wartung-services"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#tausch-services"><span class="toc-badge">06</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#team-services"><span class="toc-badge">07</span><span class="toc-text">Warum wir</span></a></li>
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
            <h2>Junkers Thermenreparatur und Thermenservice Wien</h2>
            <p>
              Unsere Junkers Thermenreparatur Wien steht für professionelle Lösungen bei Problemen mit Ihrer Junkers Therme.
              Als erfahrener Installateur bieten wir umfassenden Junkers Thermenservice, fachgerechte Reparaturen und zuverlässigen Kundendienst in Wien und Umgebung.
            </p>
            <p>
              Egal ob klassische Gasthermen, moderne Junkers Bosch Geräte oder komplette Heizungsanlage – wir kümmern uns um jede Therme präzise und effizient.
              Durch regelmäßige Junkers Thermenwartung und sorgfältige Überprüfung aller Komponenten sichern wir langfristige Zuverlässigkeit und Sicherheit.
              Unser Service richtet sich an Haushalte in allen Bezirken von Wien sowie in Niederösterreich und Burgenland.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size6.jpeg') }}" alt="Junkers Thermenservice Wien" loading="lazy" decoding="async">
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
            <h2>Reparatur Ihrer Junkers Therme bei Störungen</h2>
            <p>
              Störungen, Defekt oder unerwartete Ausfälle Ihrer Junkers Therme können schnell zu Problemen bei Heizung und Warmwasser führen.
              Unser Junkers Kundendienst analysiert jede Situation mit moderner Technik und strukturierter Fehlerdiagnose.
            </p>
            <p>
              Dabei prüfen unsere Techniker alle relevanten Komponenten, reinigen sensible Teile und tauschen bei Bedarf Original Ersatzteile.
              Unsere Reparaturen erfolgen effizient, damit Ihre Heizungsanlage rasch wieder am Stand der Technik arbeitet.
              Ob kleinere Schäden oder komplexe Reparaturen an Gasgeräten – wir bieten eine klare Lösung mit transparentem Preis.
              Unser Ziel ist es, Ausfälle zu minimieren, die Lebensdauer Ihrer Junkers Therme zu verlängern und langfristig Heizkosten zu senken.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Strukturierte Diagnose</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Original Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schnelle Reparatur</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Heizkosten senken</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Junkers Reparatur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Junkers Notdienst Wien rund um die Uhr</h2>
        <p>
          Bei akuten Notfällen ist unser Junkers Notdienst in Wien rund um die Uhr erreichbar.
          Der 24/7 Notdienst steht Ihnen bei plötzlichen Ausfällen, Sicherheitsfragen oder technischen Problemen sofort zur Verfügung.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Experten sind in Wien, Niederösterreich und auch im Burgenland schnell vor Ort.
          Besonders in der kalten Jahreszeit zählt jede Stunde: Wir stellen Heizung und Warmwasser zuverlässig wieder her und sorgen für maximale Sicherheit zuhause.
          Als erfahrener Anbieter für Junkers Thermenservice garantieren wir Soforthilfe, professionelle Arbeiten und rasche Unterstützung.
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
            <li>Kein Warmwasser</li>
            <li>Störung / Fehlermeldung</li>
            <li>Sicherheitsrelevante Probleme</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            24/7 verfügbar – Wien, Niederösterreich &amp; Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Soforthilfe -->
  <section class="service-section" id="hilfe-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Soforthilfe bei Ausfälle und Probleme</h2>
        <p>Unser Notdienst reagiert schnell bei Störungen Ihrer Junkers Therme und sorgt mit Fachwissen und Erfahrung für eine sichere Lösung direkt vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Schnelle Hilfe bei Störung</h3>
            <p>Wir reagieren rasch bei Ausfällen, Defekt oder Fehlermeldung – damit Heizung und Warmwasser zuverlässig zurückkommen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Techniker in Wien NÖ und Umgebung</h3>
            <p>Unsere geschulten Techniker betreuen Wien, Niederösterreich, Burgenland und alle Bezirke mit Kompetenz, Service und hoher Zuverlässigkeit.</p>
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
            <h2>Junkers Thermenwartung Wien für Sicherheit und Effizienz</h2>
            <p>
              Eine regelmäßige Junkers Thermenwartung ist entscheidend für die Sicherheit und Leistungsfähigkeit Ihrer Heizungsanlage.
              Unsere Junkers Thermenwartung Wien umfasst gründliche Reinigung, präzise Überprüfung aller Komponenten sowie fachgerechte Wartung Ihrer Junkers Therme.
            </p>
            <p>
              Durch eine strukturierte Thermenwartung erkennen wir mögliche Schäden frühzeitig.
              Die Wartung verlängert die Lebensdauer, reduziert Heizkosten und verbessert das Preis-Leistungs-Verhältnis.
              Unser Junkers Thermenservice wird von geschulten Technikern durchgeführt, die durch Schulungen am aktuellen Stand der Technik von Junkers Bosch und Bosch bleiben.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Heizkosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Früherkennung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Junkers Thermenwartung Wien" loading="lazy" decoding="async">
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
            <h2>Thermentausch und moderne Junkers Bosch Technik</h2>
            <p>
              Wenn Ihre Junkers Therme veraltet ist oder häufige Probleme auftreten, kann ein Thermentausch sinnvoll sein.
              Wir beraten Sie umfassend zu Junkers Bosch Lösungen, modernen Gasthermen und effizienter Heizung.
            </p>
            <p>
              Als erfahrener Installateur übernehmen wir Tausch, Installation und Anpassung Ihrer Heizungsanlage in Wien, Niederösterreich und Burgenland.
              Unsere Experten prüfen die bestehende Anlage vor Ort und erstellen ein transparentes Angebot mit klarem Preis.
              Durch moderne Bosch Technik steigern Sie Effizienz, senken Heizkosten und profitieren von hoher Lebensdauer.
              Wir setzen auf Original Ersatzteile, hochwertige Geräte und professionellen Thermenservice.
            </p>

            <ul class="service-checklist">
              <li>Beratung &amp; klares Angebot</li>
              <li>Fachgerechte Installation</li>
              <li>Moderne Junkers Bosch Technik</li>
              <li>Effizienz &amp; geringere Heizkosten</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Junkers Thermentausch Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="team-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum wir Ihr Junkers Partner in Wien sind</h2>
        <p>Erfahrung, Expertise und transparente Leistungen – mit Junkers Thermenservice, Wartung, Reparatur und 24/7 Kundendienst.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Erfahrung &amp; Fachwissen</h3>
            <p>Unsere Kompetenz basiert auf langjähriger Praxis mit Junkers Bosch und Bosch Thermenmarken – zuverlässig in Wien und Umgebung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Original Ersatzteile</h3>
            <p>Wir verwenden ausschließlich Original Ersatzteile und hochwertige Ersatzteile von Junkers Bosch und Bosch – für Sicherheit und Langlebigkeit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Transparente Preise</h3>
            <p>Faire Preise, nachvollziehbare Angebote und klare Abläufe – damit Kunden jederzeit wissen, welche Arbeiten durchgeführt werden.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🕒</div>
          <div>
            <h3>24/7 Betreuung</h3>
            <p>Unser Kundendienst ist rund um die Uhr erreichbar – für Wien, Niederösterreich und Burgenland.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Junkers Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Junkers Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Junkers Thermenwartung Wien wird empfohlen, um Sicherheit, Effizienz und Lebensdauer Ihrer Junkers Therme zu sichern.</p>
        </details>

        <details>
          <summary>Bieten Sie einen Junkers Notdienst rund um die Uhr an?</summary>
          <p>Ja, unser 24/7 Notdienst ist rund um die Uhr in Wien, Niederösterreich und Burgenland verfügbar.</p>
        </details>

        <details>
          <summary>Was beinhaltet die Wartung Ihrer Junkers Therme?</summary>
          <p>Reinigung, Überprüfung aller Komponenten, Austausch von Teilen bei Bedarf und Optimierung der Heizungsanlage.</p>
        </details>

        <details>
          <summary>Verwenden Sie originale Ersatzteile?</summary>
          <p>Ja, wir setzen ausschließlich Original Ersatzteile und hochwertige Ersatzteile von Junkers Bosch und Bosch ein.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Ausfällen, wiederkehrenden Störungen oder hohem Verbrauch kann ein Tausch wirtschaftlich sinnvoll sein.</p>
        </details>

        <details>
          <summary>In welchen Regionen sind Sie tätig?</summary>
          <p>Unser Service steht Kunden in Wien, Niederösterreich, Burgenland und Umgebung zur Verfügung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Junkers Thermenservice in Wien beauftragen</h2>
        <p>
          Ob Junkers Thermenwartung, Junkers Thermenreparatur Wien oder schneller Junkers Notdienst – wir sind Ihr kompetenter Partner für Heizung und Gasthermen.
          Unser Kundendienst steht Ihnen rund um die Uhr zur Verfügung und sorgt für professionelle Reparaturen, sorgfältige Wartung und nachhaltige Lösungen.
        </p>
        <p style="margin-top:10px;">
          Vertrauen Sie auf Erfahrung, moderne Technik und starken Service für Ihre Junkers Therme. Kontaktieren Sie uns noch heute und sichern Sie sich zuverlässige Betreuung mit fairer Preisstruktur und höchster Sicherheit.
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
          <textarea name="message" rows="4" placeholder="Gerät/Modell, Problem, Ort, Wunschzeit..." required></textarea>
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
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click', function(e){
      var id = a.getAttribute('href');
      if (!id || id === '#') return;
      var el = document.querySelector(id);
      if (!el) return;
      e.preventDefault();
      var offset = 16;
      var top = el.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

  // TOC toggle (collapsed like previous site)
  var tocCard   = document.getElementById('tocCard');
  var tocToggle = document.getElementById('tocToggle');
  var tocHead   = document.getElementById('tocHead');

  function setExpanded(isExpanded){
    if (!tocCard || !tocToggle) return;

    tocCard.classList.toggle('is-collapsed', !isExpanded);
    tocToggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    if (tocHead) tocHead.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

    var svg = tocToggle.querySelector('svg');
    if (svg){
      svg.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  // default collapsed
  setExpanded(false);

  if (tocToggle){
    tocToggle.addEventListener('click', function(e){
      e.stopPropagation();
      var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    });
  }

  if (tocHead && tocToggle){
    tocHead.addEventListener('click', function(e){
      if (e.target.closest('#tocToggle')) return;
      tocToggle.click();
    });

    tocHead.addEventListener('keydown', function(e){
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        tocToggle.click();
      }
    });
  }

})();
</script> -->

@endsection
