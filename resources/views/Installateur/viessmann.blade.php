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
  .service-btn--accent{background:var(--accent); color:#1a1a1a;}
  .service-btn--accent:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
  .service-btn--ghost{background:#fff; border-color:var(--line);}
  .service-btn--ghost:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.08)}
  .service-btn--ghost-on-dark{
    background:transparent;
    border-color:rgba(255,255,255,.25);
    color:#fff;
  }

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

  /* ✅ Stats pills (2 in a row) */
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

  /* ✅ Card split: equal height columns */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* equal height columns */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{display:flex;}

  .card-box{
    width:100%;
   /* height:100%; */
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

  /* ✅ Image wrapper (inner div controls size, img is 100% both ways) */
  .img-wrap{
    width:100%;
    height:100%; /* match text height */
    display:flex;
  }
  .img-wrap__inner{
    width:100%;
    height:100%; /* match text height */
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
    display:flex;
  }

  .img-wrap{
    width:100%;
    height:100%;
    display:flex;
  }

  .img-wrap__inner{
    width:100%;
    height:100%;
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
  }

  .img-wrap__inner img{
    width:100%;
    height:100%;
    /* object-fit:cover;        ✅ FULL COVER */
    object-position:center;  /* ✅ Centered */
    display:block;
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
  .service-checklist{margin:0; padding-left:18px}
  .service-checklist li{margin:8px 0}
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
  .service-faq summary{cursor:pointer; font-weight:900; color:var(--ink);}
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
    position:absolute; inset:0;
    background-image:url("img/hero-scetion.jpeg");
    background-size:cover;
    background-position:left center;
    transform:scale(1.02);
    z-index:0;
  }
  .wolf-hero::after{
    content:"";
    position:absolute; inset:0;
    background:rgba(0,0,0,.55);
    z-index:1;
  }
  .wolf-hero__inner{
    position:relative; z-index:2;
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
  .promo-banner__title{margin:0;  font-size:20px; }
  .promo-banner__price{margin:0;  font-size:18px; }
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
     ✅ TOC (after hero)
     ========================= */
  .toc-wrap{padding:18px 0 0; background:#fff;}
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
    cursor:pointer;
    user-select:none;
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
  .toc-iconbtn svg{width:16px; height:16px; fill:var(--ink); opacity:.9; transition:transform .18s ease}

  .toc-body{
    padding:10px;
    transition:max-height .22s ease, padding .22s ease;
    overflow:auto;
    max-height:420px;
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
    gap:10px;
    padding:12px 12px;
    border-radius:14px;
    border:1px solid rgba(24,64,72,.12);
    background:#fff;
    transition:.15s ease;
  }
  .toc-item a:hover{background:#f2f7f7; border-color:rgba(24,64,72,.18);}
  .toc-badge{
    width:24px; height:24px;
    border-radius:999px;
    display:grid; place-items:center;
    background:rgba(251,154,27,.18);
    border:1px solid rgba(251,154,27,.35);
    font-size:12px;
    font-weight:900;
    color:#b76500;
    flex:0 0 auto;
  }
  .toc-text{font-weight:800; color:#0f3a40; font-size:13px;}
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 10px;
    overflow:hidden;
  }
  .toc-card.is-open .toc-iconbtn svg{transform: rotate(180deg)}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text,.card-split__media{display:block;}

    /* On mobile, give image a safe height */
    .img-wrap{min-height:240px;}
    .img-wrap__inner{min-height:240px;}

    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .toc-card{max-width:100%;}
  }
  @media (max-width: 980px){
    .img-wrap,
    .img-wrap__inner{
      min-height:240px;
    }
  }
</style>

@php
$metaTitle = "Viessmann Installateur Wien | Service, Wartung & Installation";
$metaDescription = "Erfahrener Viessmann Installateur Wien für Installation, Thermenwartung, Wärmepumpe & Service. Persönliche Beratung, faire Kosten. Jetzt anfragen.";
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
       Viessmann Installateur Wien
<br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1viesman.jpeg') }}" alt="Viessmann Logo">
      </div>

      <p class="wolf-hero__sub">
       Als Viessmann Installateur Wien bieten wir professionelle Installation, Wartung und Service für moderne Heizsysteme, Thermen und Wärmepumpen in Wien.

      </p>

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

  <!-- ✅ TOC directly AFTER HERO -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>

          <div class="toc-actions">
            <button class="toc-iconbtn" type="button" id="tocToggle"
              aria-expanded="false" aria-controls="tocBody"
              aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Partner in Wien</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#waermepumpe-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Wärmepumpe</span></a></li>
            <li class="toc-item"><a href="#angebot-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Beratung & Kosten</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Wien & Umgebung</span></a></li>
            <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Kesseltausch</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Viessmann Partner in Wien -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Viessmann Partner in Wien</h2>
            <p>
              Als erfahrener Viessmann Partner in Wien begleiten wir Kunden bei der Umsetzung moderner Heizlösungen nach aktuellem Standard.
              Unsere Installateure arbeiten als Fachmann mit umfassender Erfahrung in Heizung, Wasser, Gas und innovativen Systemen.
            </p>
            <p>
              Wir betreuen Viessmann Geräte und Produkte für Wohnungen und Häuser im gesamten Ort Wien sowie in der Umgebung.
              Von der Beratung über Planung bis zur Inbetriebnahme steht unser Team zuverlässig zur Verfügung.
              Dabei berücksichtigen wir individuelle Anforderungen, örtliche Gegebenheiten und den tatsächlichen Bedarf im Zuhause.
              Viessmann steht für Qualität, Effizienz und nachhaltige Wärme über Generationen hinweg – Werte, die wir in jedem Einsatz konsequent umsetzen.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/viesman.jpeg') }}" alt="Viessmann Partner in Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Installation, Wartung und Service -->
  <section class="service-section service-section--soft" id="leistungen-services">
    <div class="service-container">

      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>
          Unser Installateur Service für Viessmann in Wien umfasst Installation, laufende Wartung und professionellen Kundendienst – von der ersten Beratung bis zur laufenden Betreuung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Viessmann Therme Installation</h3>
            <p>Wir installieren Viessmann Therme fachgerecht inklusive Anschluss an Heizung, Wasser und Gas sowie sauberer Inbetriebnahme der gesamten Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Thermenwartung und Thermenservice</h3>
            <p>Unsere Thermenwartung und unser Thermenservice sichern die Funktion der Therme, verbessern Effizienz und sorgen für einen stabilen Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparaturen mit Ersatzteilen</h3>
            <p>Bei Reparaturen verwenden wir passende Ersatzteile und beheben Probleme effizient, damit Ihr Heizsystem zuverlässig weiterläuft.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Service bei Notfällen</h3>
            <p>Bei Notfällen reagieren wir rasch, analysieren das Anliegen vor Ort und stellen eine sichere Lösung für Heizung und Wärme bereit.</p>
          </div>
        </article>
      </div>

    </div>
  </section>

  <!-- ✅ Wärmepumpe und Heizsysteme -->
  <section class="service-section" id="waermepumpe-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wärmepumpe und Heizsysteme</h2>
            <p>
              Viessmann Wärmepumpe und moderne Heizsysteme leisten einen wichtigen Beitrag zu effizienter Wärme und nachhaltiger Nutzung von Energien.
              Wir betreuen Luft-, Wasser- und Hybridlösungen, abgestimmt auf Art, Bereich und Anforderungen des Gebäudes.
            </p>
            <p>
              Unsere Experten beraten umfassend zu Vorteilen, Heizleistung und Betrieb moderner Systeme.
              Durch genaue Planung und fachgerechte Installation stellen wir sicher, dass Wärme effizient genutzt wird und die Heizsysteme optimal funktionieren.
              Viessmann Technologie verbindet Innovation, Umweltbewusstsein und langfristige Effizienz – ideal für zeitgemäße Heizlösungen in Wien.
            </p>
            <ul class="service-checklist">
              <li>Luft-, Wasser- und Hybridlösungen</li>
              <li>Planung nach Gebäude & Bedarf</li>
              <li>Effizienter Betrieb & Heizleistung</li>
              <li>Nachhaltige Wärme mit Viessmann</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-4.jpg') }}" alt="Viessmann Wärmepumpe und Heizsysteme" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Beratung, Angebot und Kosten -->
  <section class="service-section service-section--soft" id="angebot-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Beratung, Angebot und Kosten</h2>
            <p>
              Eine fundierte Beratung ist die Basis jeder guten Heizlösung.
              Wir analysieren Bedürfnisse, Faktoren wie Gebäudeart, Postleitzahl, Heizbedarf und bestehende Systeme.
            </p>
            <p>
              Darauf aufbauend erstellen wir ein transparentes Angebot mit klaren Kosten und realistischer Planung.
              Unsere Kunden erhalten alle Informationen verständlich aufbereitet – von möglichen Vorteilen bis zur Beantragung förderfähiger Lösungen.
              Dank strukturierter Terminvergabe und klarer Abläufe behalten Sie jederzeit den Überblick.
              Ziel ist eine Lösung, die technisch, wirtschaftlich und langfristig überzeugt – alles aus einer Hand.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Realistische Planung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Förderfähige Lösungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Terminvergabe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-3.jpg') }}" alt="Beratung Angebot und Kosten" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Ablauf von Anfrage bis Termin -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf von Anfrage bis Termin</h2>
            <p>
              Der Ablauf bei unserem Viessmann Installateur Service in Wien ist klar, strukturiert und kundenorientiert.
              Nach Ihrer Anfrage über unsere Website oder das Formular klären wir Ihr Anliegen persönlich und erfassen alle relevanten Informationen zu Heizung, Therme oder Wärmepumpe.
            </p>
            <p>
              Anschließend erfolgt eine gezielte Planung unter Berücksichtigung technischer Anforderungen, örtlicher Gegebenheiten und Ihres tatsächlichen Bedarfs.
              Unsere Installateure vereinbaren eine passende Terminvergabe und führen Installation, Wartung oder Reparaturen fachgerecht durch.
              Während des gesamten Prozesses stehen unsere Techniker und der Kundendienst zur Verfügung.
              Ziel ist ein effizienter Einsatz, reibungsloser Betrieb und eine Lösung, die langfristig überzeugt.
            </p>

            <ul class="service-checklist">
              <li>Anfrage & Anliegen aufnehmen</li>
              <li>Planung nach Bedarf & Gegebenheiten</li>
              <li>Terminvergabe & Umsetzung</li>
              <li>Betreuung durch Techniker & Kundendienst</li>
            </ul>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-2.jpg') }}" alt="Ablauf Viessmann Installateur Wien" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Wien und Umgebung -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien und Umgebung</h2>
            <p>
              Unser Viessmann Installateur Team ist in Wien sowie in der Umgebung zuverlässig im Einsatz.
              Durch unsere regionale Präsenz reagieren wir flexibel auf Termine, Wartungseinsätze und Notfällen.
            </p>
            <p>
              Wir betreuen Wohnungen, Einfamilienhäuser und Betriebe und kennen die technischen Gegebenheiten vor Ort genau.
              Auch angrenzende Bereiche außerhalb von Wien werden regelmäßig betreut.
              Kunden profitieren von kurzen Wegen, schneller Verfügbarkeit und persönlicher Betreuung durch erfahrene Fachkräfte.
              Als regionaler Partner stehen wir für Zuverlässigkeit, saubere Umsetzung und nachhaltige Heizlösungen im gesamten Einsatzgebiet.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/viesman.jpeg') }}" alt="Wien und Umgebung Viessmann" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Kesseltausch und Austausch -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">

      <div class="service-section__head">
        <h2>Kesseltausch und Austausch</h2>
        <p>
          Ein moderner Kesseltausch ist sinnvoll, wenn bestehende Systeme nicht mehr effizient arbeiten oder steigende Kosten verursachen.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Beratung zum Austausch</h3>
            <p>Wir beraten umfassend zum Austausch alter Heizkessel durch moderne Viessmann Geräte – abgestimmt auf Heizleistung, Energien und tatsächlichen Bedarf.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧱</div>
          <div>
            <h3>Demontage & Inbetriebnahme</h3>
            <p>Nach sorgfältiger Planung übernehmen wir Demontage, Austausch und fachgerechte Inbetriebnahme der neuen Lösung – sauber und zuverlässig.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📉</div>
          <div>
            <h3>Weniger Betriebskosten</h3>
            <p>Kunden erhalten ein zukunftssicheres Heizsystem, das Betriebskosten senkt und den Wohnkomfort nachhaltig verbessert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Langfristige Vorteile</h3>
            <p>Dabei achten wir auf Funktion, Effizienz und langfristige Vorteile für Ihr Zuhause – für stabile Wärme über viele Jahre.</p>
          </div>
        </article>
      </div>

    </div>
  </section>

  <!-- ✅ FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Viessmann</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Welche Viessmann Systeme betreuen Sie?</summary>
          <p>Wir betreuen Viessmann Therme, Heizkessel, Heizungsanlage, Wärmepumpe sowie weitere Geräte und Heizsysteme.</p>
        </details>

        <details>
          <summary>Wie oft ist eine Thermenwartung sinnvoll?</summary>
          <p>Eine regelmäßige Wartung einmal jährlich erhöht Effizienz, Sicherheit und die Lebensdauer der Therme.</p>
        </details>

        <details>
          <summary>Bieten Sie auch Beratung vor Ort an?</summary>
          <p>Ja, unsere Experten beraten umfassend zu Produkten, Planung und optimaler Lösung für Ihr Zuhause.</p>
        </details>

        <details>
          <summary>Sind Reparaturen kurzfristig möglich?</summary>
          <p>Bei Reparaturen reagieren wir flexibel und stellen eine rasche Behebung von Problemen sicher.</p>
        </details>

        <details>
          <summary>Arbeiten Sie auch bei Notfällen?</summary>
          <p>Ja, bei Notfällen stehen wir kurzfristig zur Verfügung und sorgen für einen sicheren Betrieb der Heizung.</p>
        </details>

        <details>
          <summary>Wie läuft die Kontaktaufnahme ab?</summary>
          <p>Die Anfrage erfolgt einfach über Website oder Formular, anschließend kümmern wir uns um alles Weitere.</p>
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
    var tocHead = document.getElementById('tocHead');

    function setToc(open){
      if (!tocCard || !tocToggle) return;
      tocCard.classList.toggle('is-collapsed', !open);
      tocCard.classList.toggle('is-open', !!open);
      tocToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      if (tocHead) tocHead.setAttribute('aria-expanded', open ? 'true' : 'false');
    }

    // default collapsed
    setToc(false);

    function toggleToc(){
      var open = !tocCard.classList.contains('is-open');
      setToc(open);
    }

    if (tocToggle){
      tocToggle.addEventListener('click', function(e){
        e.preventDefault();
        toggleToc();
      });
    }
    if (tocHead){
      tocHead.addEventListener('click', function(e){
        // avoid double toggle if click on button
        if (e.target && e.target.closest && e.target.closest('#tocToggle')) return;
        toggleToc();
      });
      tocHead.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' '){
          e.preventDefault();
          toggleToc();
        }
      });
    }

    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>

@endsection
