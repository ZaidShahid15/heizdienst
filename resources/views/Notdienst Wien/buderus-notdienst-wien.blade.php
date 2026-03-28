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

  /* =====================================================
     ✅ IMAGE SIZE = CONTENT SIZE (CARD SPLIT)
     ===================================================== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* ✅ equal height columns */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex; /* ✅ allow children to stretch */
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

  /* Image box */
  .service-media{width:100%;}
  .service-media__box{
    width:100%;
    height:100%;          /* ✅ match text height */
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
    /* object-fit:cover; */
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
  .service-panel h3{margin:0 0 10px; color:#fff}
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

  /* Promo banner */
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
    background:url("{{ asset('img/final.webp') }}") right center / cover no-repeat;
    z-index:0;
    opacity:.55;
  }
  .promo-banner__content{
    position:relative;
    z-index:1;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .promo-banner__title{margin:0; font-size:20px; color:#09383F}
  .promo-banner__price{margin:0; font-size:18px; color:#09383F}
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
     ✅ TOC (AFTER HERO)
     ========================= */
  .toc-wrap{padding:14px 0 10px; background:#fff;}
  .toc-card{
    width:100%;
    background:#fff;
    border:1px solid rgba(24,64,72,.18);
    border-radius:18px;
    box-shadow:0 18px 50px rgba(0,0,0,.10);
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
  .toc-iconbtn{
    width:36px; height:36px;
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
    padding:12px;

    overflow:auto;
    transition:max-height .22s ease, padding .22s ease;
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
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@php
$metaTitle = "Notdienst & Kundendienst Wien – Service, Wartung & Heizkessel";
$metaDescription = "Notdienst & Kundendienst Wien ✔ Service, Wartung & Behebung für Gasthermen und Heizkessel ✔ Fachpersonal & Techniker vor Ort.";
@endphp

@push('meta')
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
@endpush

<main>
  <!-- HERO -->

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
       Buderus Notdienst Wien
 <br>
        <span style="color:#FB9A1B;"> Schnelle Hilfe bei Störungen, Ausfällen oder Problemen mit der Heizung – der Buderus Notdienst Wien ist zuverlässig für Sie da.
</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1buderus.webp') }}" alt="Notdienst Wien Logo">
      </div>

       <div class="wolf-hero__sub">
<ul class="hero-checklist-center">
<li>
<i class="bi bi-check-circle-fill"></i>
<span>Notdienst und Kundendienst in Wien und Umgebung
</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Wartung, Reparatur und Thermenservice aus einer Hand
</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Erfahrene Techniker, Fachpersonal und klare Lösungen
</span>
</li>

<li>
<i class="bi bi-check-circle-fill"></i>
<span>Service rund um die Uhr mit kurzen Wegzeiten
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

  <!-- ✅ TOC AFTER HERO
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
            <li class="toc-item"><a href="#kundendienst-services"><span class="toc-badge">01</span><span class="toc-text">Kundendienst</span></a></li>
            <li class="toc-item"><a href="#vorteile-services"><span class="toc-badge">02</span><span class="toc-text">Vorteile</span></a></li>
            <li class="toc-item"><a href="#notdienst-services"><span class="toc-badge">03</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#leistungen-services"><span class="toc-badge">04</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#wartung-services"><span class="toc-badge">05</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services"><span class="toc-badge">06</span><span class="toc-text">Reparatur</span></a></li>
            <li class="toc-item"><a href="#region-services"><span class="toc-badge">07</span><span class="toc-text">Einsatzgebiet</span></a></li>
            <li class="toc-item"><a href="#team-services"><span class="toc-badge">08</span><span class="toc-text">Team</span></a></li>
            <li class="toc-item"><a href="#preise-services"><span class="toc-badge">09</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section> -->

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

  <!-- Kundendienst -->
  <section class="service-section" id="kundendienst-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Buderus Kundendienst Wien mit Kompetenz</h2>
            <p>
              Der Buderus Kundendienst in <a href="/vaillant-notdienst-wien"> Wien unterstützt private </a> Haushalte und den laufenden Betrieb bei allen Anliegen rund um Buderus Thermen,
              Heizkessel und moderne Heizungsanlagen. Als spezialisierter Fachmann und verlässlicher Partner für Buderus Produkte bieten wir
              professionelle Beratung, strukturierte Abläufe und nachhaltige Behebung von Problemen.
            </p>
            <p>
              Unser geschultes Fachpersonal analysiert jede Situation direkt vor Ort, erkennt Ursachen von Störungen und sorgt für eine sichere Lösung.
              Ziel ist es, Heizung, Warmwasser und Effizienz dauerhaft sicherzustellen – zuverlässig in Wien und der Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/buderus.webp') }}" alt="Notdienst & Kundendienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Buderus Notdienst und Kundendienst in Wien und Umgebung</h2>
        <p>Wartung, Reparatur und Thermenservice aus einer Hand – kurze Wegzeiten, klare Abläufe und schnelle Hilfe.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Wartung & Thermenservice</h3>
            <p>Regelmäßige Wartung, Thermenwartung und Buderus Thermenservice für effizienten und sicheren Betrieb.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Reparatur & Behebung</h3>
            <p>Fachgerechte Reparatur, strukturierte Fehleranalyse und nachhaltige Behebung – direkt vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Erfahrene Techniker</h3>
            <p>Erfahrene Techniker und geschultes Fachpersonal – saubere Arbeit, klare Kommunikation, sichere Lösung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⏱️</div>
          <div>
            <h3>Service rund um die Uhr</h3>
            <p>Notdienst 24h mit kurzen Wegzeiten – besonders wichtig bei Ausfällen und sicherheitsrelevanten Problemen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Notdienst (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Buderus Notdienst und Werkskundendienst</h2>
        <p>
          Bei akuten Ausfällen oder sicherheitsrelevanten Problemen steht unser Buderus Notdienst rasch zur Verfügung.
          Wir arbeiten eng mit dem Buderus Werkskundendienst und dem offiziellen Werkskundendienst zusammen,
          um Reparaturen fachgerecht und herstellerkonform umzusetzen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unsere Techniker reagieren schnell, prüfen Gasgeräte, Therme und Heizkessel sorgfältig und sorgen für eine sichere Wiederherstellung des Betriebs.
          Der Notdienst ist besonders dann wichtig, wenn schnelle Hilfe Folgeschäden vermeiden soll.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Einsätze im Notdienst</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Störungen an Buderus Thermen oder Heizsystem</li>
            <li>Komplettausfall von Heizung oder Warmwasser</li>
            <li>Fehler, die sofortige Behebung erfordern</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr verfügbar – schnelle Hilfe in Wien und Umgebung.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen unseres Buderus Service</h2>
        <p>Kundendienst, Wartung, Behebung, Thermenservice und Heizkessel-Betreuung – zuverlässig vor Ort.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧽</div>
          <div>
            <h3>Wartung & Thermenwartung</h3>
            <p>Buderus Thermenwartung inklusive Reinigung, Einstellung und Funktionskontrolle – transparent und sicher.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Buderus Thermenservice</h3>
            <p>Überprüfung aller relevanten Komponenten, frühes Erkennen von Problemen und sichere Behebung – inkl. ausgewiesener MwSt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Heizkessel & Heizsysteme</h3>
            <p>Service für Buderus Heizkessel und moderne Heizungsanlagen – effizient, zuverlässig und wohnkomfort-orientiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Störung & Behebung</h3>
            <p>Strukturierte Diagnose und schnelle Behebung von Störungen, damit Ihre Anlage rasch wieder stabil läuft.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧩</div>
          <div>
            <h3>Reparatur & Ersatzteile</h3>
            <p>Fachgerechte Reparatur mit geprüften Ersatzteilen – nachhaltig, sicher und herstellerkonform.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Austausch & Beratung</h3>
            <p>Wenn sinnvoll: transparente Beratung zu Austausch, Brennwert-Technik und passenden Alternativen.</p>
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
            <h2>Wartung, Thermenwartung und Buderus Thermenservice</h2>
            <p>
              Regelmäßige Wartung und fachgerechte Thermenwartung sind entscheidend für Lebensdauer, Effizienz und Sicherheit Ihrer Anlage. Als erfahrener Installateur für Heiztechnik sorgen wir für die professionelle Betreuung Ihrer Geräte. Zudem bieten wir einen <a href="/vaillant-notdienst-wien">Vaillant Notdienst Wien</a> für höchste Betriebssicherheit an.
             Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
            <p>
              So lassen sich Probleme frühzeitig erkennen und teure Reparaturen vermeiden. Eine gut gewartete Therme arbeitet zuverlässiger,
              spart Energie und erhöht den Wohnkomfort. Alle Arbeiten erfolgen transparent, inkl. ausgewiesener MwSt.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">weniger Schäden</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.webp') }}" alt="Buderus Wartung & Thermenservice" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur, Austausch und Ersatzteilen</h2>
            <p>
              Wenn Defekte auftreten, führen wir eine fachgerechte Reparatur mit geprüften Ersatzteilen durch.
              Unsere Fachleute prüfen, ob eine Reparatur wirtschaftlich sinnvoll ist oder ein Austausch empfohlen wird.
            </p>
            <p>
              Dabei berücksichtigen wir Brennwert-Technik, Zustand des Heizsystems und individuelle Anforderungen.
              Unser Team berät offen zu Optionen, Vorteilen und möglichen Alternativen – immer mit Fokus auf Qualität und Sicherheit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.webp') }}" alt="Buderus Reparatur & Ersatzteile" loading="lazy" decoding="async">
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
            <h2>Einsatzgebiete rund um Wien</h2>
            <p>
              Unser Buderus Notdienst Wien ist nicht nur direkt in Wien, sondern auch in der gesamten Umgebung im Einsatz.
              Dazu zählen unter anderem Brunn am Gebirge, Groß Enzersdorf, Deutsch Wagram, Korneuburg, Mödling, Baden und Guntramsdorf.
            </p>
            <p>
              Durch kurze Wegzeit und regionale Einsatzplanung sind unsere Techniker schnell am Ort.
              So stellen wir sicher, dass Hilfe rasch ankommt und Ausfälle effizient behoben werden – zuverlässig in Stadt und Umland.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.webp') }}" alt="Buderus Einsatzgebiet Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Team, Weiterbildung und Qualität</h2>
            <p>
              Unser erfahrenes Team besteht aus qualifizierten Technikern und Fachleuten mit hoher Kompetenz im Umgang mit Buderus Heizsystemen.
              Regelmäßige Weiterbildung stellt sicher, dass wir stets nach aktuellen Standards arbeiten und neue Produkte sowie Marken-Technologien
              sicher beherrschen.
            </p>
            <p>
              Qualität, saubere Arbeit und klare Abläufe stehen im Mittelpunkt unserer täglichen Arbeit.
              So sichern wir eine lange Lebensdauer Ihrer Anlage und hohe Kundenzufriedenheit.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weiterbildung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Qualität</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">klare Abläufe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.webp') }}" alt="Buderus Team & Qualität" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, MwSt und Vorteile</h2>
            <p>
              Transparente Preise für eine fachgerechte Serviceangebot sind ein zentraler Bestandteil unseres Kundendienstes. Vor Beginn der Arbeiten informieren wir klar über Kosten, Leistungen und die ausgewiesene MwSt.
            </p>
            <p>
              Kunden profitieren von fairen Konditionen, nachvollziehbarer Abrechnung und klaren Vorteilen:
              weniger Störungen, höhere Effizienz und zuverlässiger Betrieb der Heizungsanlage.
              Unser Ziel ist es, wirtschaftliche Lösungen zu bieten, die langfristig überzeugen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.webp') }}" alt="Buderus Preise & Vorteile" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Termin / Kontakt Intro -->
  <section class="service-section service-section--soft" id="termin-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Terminvergabe, Anfrage und Kontakt</h2>
        <p>Schnelle Terminvereinbarung für Wartung, Reparatur oder Notdienst – wir organisieren rasch Hilfe.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📅</div>
          <div>
            <h3>Schnelle Terminvergabe</h3>
            <p>Wir berücksichtigen Ihren Wunsch nach einem passenden Termin und koordinieren den Einsatz kundenorientiert.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">☎️</div>
          <div>
            <h3>Direkte Anfrage</h3>
            <p>Über Kontakt auf dieser Seite erreichen Sie unseren Kundendienst unkompliziert – wir liefern klare Informationen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Abschluss -->
  <section class="service-section" id="abschluss-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ihr Buderus Notdienst Wien</h2>
        <p>Notdienst, Wartung, Reparatur und Thermenservice – kompetent, zuverlässig und kundenorientiert in Wien und der Region.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Strukturiert & zuverlässig</h3>
            <p>Dank Erfahrung, kurzen Reaktionszeiten und klaren Abläufen sichern wir Komfort und reibungslosen Betrieb Ihrer Heizung.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Fachpersonal vor Ort</h3>
            <p>Geschultes Fachpersonal und erfahrene Techniker kümmern sich zuverlässig um Buderus Thermen, Heizkessel und Heizsysteme.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>FAQs – Buderus Service Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Buderus Kundendienst kontaktieren?</summary>
          <p>Den Kundendienst kontaktieren Sie bei Problemen mit Buderus Thermen, Therme oder Heizkessel. In Wien sind wir rasch vor Ort.</p>
        </details>

        <details>
          <summary>2. Ist der Buderus Service rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Buderus Service ist rund um die Uhr verfügbar, um Ausfälle schnell zu beheben.</p>
        </details>

        <details>
          <summary>3. Welche Leistungen bietet der Buderus Kundendienst?</summary>
          <p>Der Kundendienst übernimmt Wartung, Reparatur, Behebung von Störungen und laufende Dienstleistungen für Buderus Anlagen.</p>
        </details>

        <details>
          <summary>4. Warum ist regelmäßige Wartung wichtig?</summary>
          <p>Regelmäßige Wartung erhöht die Lebensdauer der Therme, sichert Effizienz und verhindert teure Schäden.</p>
        </details>

        <details>
          <summary>5. Werden auch Buderus Heizkessel betreut?</summary>
          <p>Ja, wir warten und reparieren Heizkessel, Thermen und weitere Produkte von Buderus.</p>
        </details>

        <details>
          <summary>6. Wer führt die Arbeiten durch?</summary>
          <p>Unser geschultes Fachpersonal und erfahrene Techniker kümmern sich zuverlässig um jede Anlage.</p>
        </details>

        <details>
          <summary>7. Gibt es auch Beratung vor Ort?</summary>
          <p>Ja, wir bieten persönliche Beratung direkt vor Ort in Wien, abgestimmt auf Ihre Anlage.</p>
        </details>

        <details>
          <summary>8. Wie läuft eine Reinigung ab?</summary>
          <p>Bei der Reinigung werden relevante Bauteile geprüft, gereinigt und optimal eingestellt.</p>
        </details>

        <details>
          <summary>9. Welche Erfahrung bringt das Team mit?</summary>
          <p>Unser Team verfügt über langjährige Erfahrung mit Buderus Heizsystemen.</p>
        </details>

        <details>
          <summary>10. Erhalte ich ein Angebot vorab?</summary>
          <p>Ja, vor jeder Arbeit erhalten Kunden ein transparentes Angebot vom Kundendienst.</p>
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




