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

  /* Image box (IMPORTANT: box gets size, image fills 100%) */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:367px; /* box size */
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
    /* object-fit:cover;      keep nice crop */
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
  .card-split .service-media__box{height:320px;} /* box size in split */

  /* HERO (keep structure) */
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
     TOC (Inhaltsverzeichnis)
     - after hero
     - default collapsed
     - click full bar to toggle
     - scroll works
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

  /* clickable full header bar */
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

  /* proper scrollbar area */
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
    .card-split .service-media__box{height:220px;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .toc-list{max-height:240px;}
  }
</style>

@php
$metaTitle = "Viessmann Service Wien – Wartung, Therme & Sicherheit
";
$metaDescription = "Viessmann Service Wien ✔ Wartung, Überprüfung & Beratung für Viessmann Therme, Heizung und Warmwasser ✔ Sicherheit & Erfahrung vor Ort.";
@endphp

@push('meta')
<title>{{ $metaTitle }}</title>
@endpush

<main>
  <!-- HERO -->
  
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Viessmann Notdienst Wien
 <br>
        <span style="color:#FB9A1B;"> Schnelle Hilfe bei Störung, Defekt oder Notfall – Ihr Viessmann Notdienst Wien ist zuverlässig für Sie da.
</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1viesman.jpeg') }}" alt="Viessmann-notdienst-wien Logo">
      </div>

       <div class="wolf-hero__sub">
<ul class="hero-checklist-center">
<li>
<i class="bi bi-check-circle-fill"></i>
<span>Notdienst und Notfalldienst für Viessmann Therme und Heizsysteme
</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Service, Reparatur, Wartung und Thermenwartung aus einer Hand</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Erfahrene Techniker, geprüfte Ersatzteile und klare Lösungen
</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Betreuung in Wien, Niederösterreich und Umgebung
</span>
</li>
</ul>
</div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--red" href="tel:+4314420617">
          <i class="bi bi-telephone-fill"></i>
          JETZT ANRUFEN: +431 442 0617
        </a>

        <a class="wolf-btn wolf-btn-outline" href="#kontakt-services">
          <i class="bi bi-arrow-right"></i>
          Anfrage senden
        </a>
      </div>

      <div class="hero-trust">
        <div class="hero-first-block">
          <div class="rating d-flex gap-3">
            <strong class="d-flex gap-3 align-items-center">
              <img src="{{ asset('img/google-icon.svg') }}" style="width:20px" alt=""> Google
            </strong>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>

          <div class="rating">
            4,9/5 (160+ Bewertungen)
          </div>
        </div>

        <div class="badges">
          <div>
            <i class="bi bi-patch-check-fill text-warning"></i>
            Geprüfte Experten
          </div>
          <div>
            <i class="bi bi-shield-check text-warning"></i>
            100% Zufrieden
          </div>
        </div>
      </div>

    </div>
  </section>

    </div>
  </section>

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
  <li class="toc-item"><a href="#kundendienst-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
  <li class="toc-item"><a href="#notdienst24-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Notdienst</span></a></li>
  <li class="toc-item"><a href="#notfall-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Notfall</span></a></li>
  <li class="toc-item"><a href="#wartung-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Wartung</span></a></li>
  <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Thermentausch</span></a></li>
  <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Region</span></a></li>
  <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Partner</span></a></li>
  <li class="toc-item"><a href="#sicherheit-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Sicherheit</span></a></li>
  <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
  <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
</ul>

      </div>
    </div>
  </div>
</section>



  <!-- Dummy anchor so "Leistungen ansehen" works -->
  <div id="leistungen-services" style="position:relative; top:-20px;"></div>

  <!-- Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Viessmann Kundendienst und Service vor Ort</h2>
            <p>
              Der Viessmann Kundendienst in Wien unterstützt Kunden im privaten Haushalt ebenso wie im laufenden Betrieb.
              Ob Viessmann Therme, Gastherme, Heizkessel oder moderne Heizsysteme – wir arbeiten mit Fokus auf Sicherheit,
              Effizienz und Zuverlässigkeit.
            </p>
            <p>
              Als erfahrener Installateur betreuen wir Anlagen direkt am Ort, analysieren Störungen strukturiert und setzen
              eine passende Lösung um. Ziel ist es, Heizung, Warmwasser und Wasserversorgung rasch wiederherzustellen –
              sicher und fachgerecht.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/viesman.jpeg') }}" alt="Viessmann Kundendienst vor Ort" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Highlights -->
  <section class="service-section service-section--soft" id="notdienst24-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Viessmann Notdienst Wien</h2>
        <p>Schnelle Hilfe bei Störung, Defekt oder Notfall – zuverlässig erreichbar und klar organisiert.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Notdienst &amp; Notfalldienst</h3>
            <p>Für Viessmann Therme und Heizsysteme – schnelle Reaktion bei dringenden Situationen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Alles aus einer Hand</h3>
            <p>Service, Reparatur, Wartung und Thermenwartung – strukturiert und zuverlässig umgesetzt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrene Techniker</h3>
            <p>Geschultes Fachpersonal, klare Abläufe und verständliche Kommunikation vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📍</div>
          <div>
            <h3>Wien &amp; Umgebung</h3>
            <p>Betreuung in Wien, Niederösterreich und der Umgebung – schnelle Hilfe direkt am Ort.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Notfälle (dark) -->
  <section class="service-section service-section--dark" id="notfall-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst und Notfalldienst rund um die Uhr</h2>
        <p>
          Ein Ausfall der Viessmann Therme, Gasgeruch, ungewöhnliche Geräusche oder ein Fehlercode am Display erfordern sofortiges Handeln.
          Unser Notdienst und Notfalldienst sind rund um die Uhr erreichbar und stehen bei jedem Notfall zur Verfügung.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Besonders bei Abgasen, Wasserverlust oder Schäden zählt schnelle Reaktion. Unsere Techniker erkennen Ursachen rasch
          und sorgen für eine sichere Behebung – auch außerhalb regulärer Zeiten.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Häufige Notfälle im Einsatz</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Störung oder Defekt an Therme oder Gasgeräte(n)</li>
            <li>Fehlermeldungen, Fehlercode oder Display-Ausfall</li>
            <li>Kein Warmwasser, kalte Heizung oder auffällige Geräusche</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Sicherheit hat Priorität – wir handeln schnell und kontrolliert.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Wartung / Reparatur -->
  <section class="service-section" id="wartung-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Wartung und Thermenwartung</h2>
            <p>
              Regelmäßige Wartung und professionelle Thermenwartung sind entscheidend für Sicherheit und lange Lebensdauer.
              Unsere Dienstleistungen umfassen Reinigung, Prüfung, Abgasmessung, Einstellung und Funktionskontrolle.
            </p>
            <p>
              Bei Reparaturen setzen wir auf originale, geprüfte Ersatzteile passend zum Modell. Präzise Überprüfung erkennt
              viele Probleme frühzeitig und vermeidet größere Kosten. Auf Wunsch beraten wir auch zu einem Wartungsvertrag.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Schäden</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Wartung & Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch -->
  <section class="service-section service-section--soft" id="tausch-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Viessmann Thermentausch und Installation</h2>
            <p>
              Wenn Reparaturen nicht mehr sinnvoll sind, beraten unsere Experten transparent zum Thermentausch oder Austausch
              einzelner Komponenten. Wir berücksichtigen den tatsächlichen Heizungsbedarf und empfehlen passende Viessmann Produkte.
            </p>
            <p>
              Montage, Installation und Inbetriebnahme erfolgen fachgerecht – inklusive klarer Einweisung.
              So bleibt Ihre Anlage zuverlässig, effizient und zukunftssicher.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Thermentausch & Installation" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Einsatzgebiete in Wien und Regionen</h2>
            <p>
              Unser Viessmann Notdienst betreut Wien sowie Niederösterreich, Burgenland und weitere Regionen in Österreich.
              Durch regionale Einsatzplanung und kurze Wege sind unsere Teams schnell am Ort – auch in der Umgebung.
            </p>
            <p>
              So stellen wir sicher, dass Heizung, Wasser und Warmwasser rasch wieder funktionieren – genau dann, wenn Hilfe gebraucht wird.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Einsatzgebiet Wien & Regionen" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partner / Werkskundendienst -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Fachpartner, Werkskundendienst und Betreuung</h2>
            <p>
              Als Fachpartner arbeiten wir nach Herstellervorgaben und in enger Abstimmung mit dem Werkskundendienst.
              Unsere Experten verfügen über fundierte Erfahrung mit unterschiedlichen Modellen und Heizsystemen.
            </p>
            <p>
              Kunden profitieren von persönlicher Betreuung, klarer Beratung und strukturierter Umsetzung – von der ersten Anfrage
              bis zur langfristigen Betreuung Ihrer Anlage.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-2.jpg') }}" alt="Fachpartner & Betreuung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sicherheit / Ersatzteile -->
  <section class="service-section" id="sicherheit-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ersatzteile, Sicherheit und langfristige Funktion</h2>
        <p>Geprüfte Ersatzteile, saubere Arbeit und regelmäßige Überprüfung – für stabilen Betrieb und maximale Sicherheit.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Geprüfte Ersatzteile</h3>
            <p>Für Reparaturen und Wartung verwenden wir geprüfte Ersatzteile passend zu Viessmann Geräten und Gasgeräten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Mehr Sicherheit</h3>
            <p>Regelmäßige Prüfung schützt vor Folgeschäden, reduziert Risiken und erhält die zuverlässige Funktion der Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📋</div>
          <div>
            <h3>Strukturierte Überprüfung</h3>
            <p>Wir prüfen relevante Punkte sorgfältig – Abgas, Wasser, Komponenten und Einstellungen – verständlich erklärt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Langfristige Funktion</h3>
            <p>Weniger Störungen, längere Lebensdauer und stabiler Betrieb – im Haushalt und im gewerblichen Bereich.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Viessmann Service &amp; Therme</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich meine Viessmann Therme warten lassen?</summary>
          <p>Eine regelmäßige Wartung erhöht die Sicherheit, verlängert die Lebensdauer und verhindert größere Probleme bei Heizung und Warmwasser.</p>
        </details>

        <details>
          <summary>2. Warum ist eine Überprüfung der Therme wichtig?</summary>
          <p>Die Überprüfung stellt sicher, dass Geräte, Gastherme und Wasseranschlüsse korrekt funktionieren – so bleibt die Sicherheit im Haushalt gewährleistet.</p>
        </details>

        <details>
          <summary>3. Was tun bei ungewöhnlichen Geräuschen?</summary>
          <p>Ungewöhnliche Geräusche deuten oft auf ein technisches Problem hin. Ein Installateur prüft die Anlage direkt vor Ort.</p>
        </details>

        <details>
          <summary>4. Was bedeutet ein Fehlercode am Display?</summary>
          <p>Ein Fehlercode zeigt eine Störung an. Der Service analysiert die Ursache und setzt eine sichere Lösung um.</p>
        </details>

        <details>
          <summary>5. Ist Viessmann Service auch vor Ort möglich?</summary>
          <p>Ja, unser Service erfolgt direkt am Ort, damit Heizung, Warmwasser und Wasser rasch wieder verfügbar sind.</p>
        </details>

        <details>
          <summary>6. Was tun bei Gasgeruch?</summary>
          <p>Bei Gasgeruch sofort die Anlage abschalten und den Service kontaktieren. Das schützt Menschen, Geräte und erhöht die Sicherheit.</p>
        </details>

        <details>
          <summary>7. Wird auch Beratung angeboten?</summary>
          <p>Ja, wir bieten persönliche Beratung zu Viessmann, Therme, Heizung und effizienter Nutzung – abgestimmt auf Ihr Zuhause.</p>
        </details>

        <details>
          <summary>8. Welche Erfahrung haben Viessmann Techniker?</summary>
          <p>Unsere Techniker verfügen über langjährige Erfahrung mit Viessmann Systemen und kennen alle gängigen Modelle.</p>
        </details>

        <details>
          <summary>9. Wird auch Warmwasser überprüft?</summary>
          <p>Ja, Warmwasser und wasserführende Komponenten werden bei jeder Überprüfung sorgfältig kontrolliert.</p>
        </details>

        <details>
          <summary>10. An wen kann ich mich bei Fragen wenden?</summary>
          <p>Bei Fragen rund um Viessmann, Therme, Wartung oder Service sind wir jederzeit erreichbar – wir kümmern uns um alles.</p>
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

      // keyboard support
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
