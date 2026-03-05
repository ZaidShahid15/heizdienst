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
@php
$metaTitle = "Vaillant Installateur Wien | Service, Wartung & Notdienst";
$metaDescription = "Zertifizierter Vaillant Installateur Wien für Installation, Thermenwartung, Reparatur & Notdienst. Faire Preise inkl. MwSt. Jetzt Termin anfragen.";
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
        Vaillant Thermenwartung Wien <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/vaillant1-1.jpg') }}" alt="Vaillant Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Vaillant Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Vaillant Therme,
        Thermenservice, Reparatur und Notdienst in Wien und Umgebung.
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
            <li class="toc-item"><a href="#intro-services"><span class="toc-badge">01</span><span class="toc-text">Über uns</span></a></li>
            <li class="toc-item"><a href="#fachpartner-services"><span class="toc-badge">02</span><span class="toc-text">Vaillant Fachpartner</span></a></li>
            <li class="toc-item"><a href="#service-services"><span class="toc-badge">03</span><span class="toc-text">Installation & Wartung</span></a></li>
            <li class="toc-item"><a href="#heizung-services"><span class="toc-badge">04</span><span class="toc-text">Heizung & Warmwasser</span></a></li>
            <li class="toc-item"><a href="#preis-services"><span class="toc-badge">05</span><span class="toc-text">Preis & Angebote</span></a></li>
            <li class="toc-item"><a href="#ablauf-services"><span class="toc-badge">06</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services"><span class="toc-badge">07</span><span class="toc-text">Wien & NÖ</span></a></li>
            <li class="toc-item"><a href="#thermentausch-services"><span class="toc-badge">08</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#faq-services"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro -->
  <section class="service-section" id="intro-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Installateur Wien</h2>
            <p>
              Als zuverlässiger Vaillant Installateur Wien bieten wir professionelle Installation, Wartung und Service für Therme, Heizung und Gasgeräte in Wien.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/viliant.jpeg') }}" alt="Vaillant Installateur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vaillant Fachpartner -->
  <section class="service-section service-section--soft" id="fachpartner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Vaillant Fachpartner in Wien</h2>
            <p>
              Als erfahrener Vaillant Fachpartner in Wien stehen wir Kunden mit hoher Qualität, fachlicher Spezialisierung und langjähriger Erfahrung zur Seite. Unsere Firma arbeitet eng mit dem Hersteller Vaillant zusammen und betreut sämtliche Geräte dieser Marke zuverlässig.
            </p>
            <p>
              Ob Therme, Gastherme oder moderne Heizungsanlage – unser Installateur-Team kennt Technik, Stand und Anforderungen genau. Durch regelmäßige Schulungen und den Einsatz geprüfter Ersatzteilen gewährleisten wir Sicherheit, Langlebigkeit und einen stabilen Betrieb.
            </p>
            <p>
              Wir sind im gesamten Ort Wien sowie in der Umgebung und in Niederösterreich im Einsatz. Kunden profitieren von persönlicher Beratung, klarer Kommunikation und einem Service, der auf nachhaltige Nutzung und optimale Leistung der Anlage ausgerichtet ist.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Vaillant Fachpartner Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Installation, Wartung und Service -->
  <section class="service-section" id="service-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>Unser Installateur Service in Wien deckt die komplette Installation, laufende Wartung und professionelle Thermenwartung von Vaillant Geräten ab.</p>
      </div>

      <div class="card-box" style="margin-bottom:14px;">
        <p>
          Wir übernehmen Montage, Einbau und Inbetriebnahme von Therme, Gastherme und Heizungsanlage ebenso wie regelmäßige Wartung und Kundendienst. Eine fachgerechte Installation sorgt für sicheren Betrieb, effiziente Nutzung und langfristige Qualität.
        </p>
        <p>
          Durch strukturierte Wartung lassen sich Störungen frühzeitig erkennen und Reparatur-Einsätze minimieren. Unser Service richtet sich an private Kunden und Betriebe, die Wert auf zuverlässige Technik, transparente Abläufe und einen kompetenten Fachmann legen. Auch bei Reparatur, Installationsanzeige oder laufendem Betrieb stehen wir als verlässlicher Partner zur Verfügung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Vaillant Therme Installation</h3>
            <p>Wir übernehmen die Installation und den Einbau Ihrer Vaillant Therme inklusive Montage, Anschluss an Heizung und Warmwasser sowie fachgerechter Inbetriebnahme der Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Thermenwartung mit Wartungsvertrag</h3>
            <p>Regelmäßige Thermenwartung mit optionalem Wartungsvertrag erhöht Sicherheit, verbessert das Preis-Leistungs-Verhältnis und verlängert die Lebensdauer Ihrer Therme deutlich.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Reparatur mit Ersatzteilen</h3>
            <p>Bei Störungen führen unsere Techniker Reparaturarbeiten mit originalen Ersatzteilen durch und stellen den sicheren Betrieb Ihres Geräts rasch wieder her.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Notdienst rund um Uhr</h3>
            <p>Unser Notdienst ist rund um die Uhr im Einsatz und hilft bei akuten Problemen schnell vor Ort in Wien und Umgebung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Heizung, Gasgeräte und Warmwasser -->
  <section class="service-section service-section--soft" id="heizung-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung, Gasgeräte und Warmwasser</h2>
            <p>
              Wir betreuen Vaillant Heizungssysteme, Gasgeräte und Warmwasser-Lösungen mit moderner Technik und hoher Sicherheit. Ob Gastherme, Brennwert-Gerät oder Heizwert-System – unsere Installateure kennen jede Anlage im Detail.
            </p>
            <p>
              Eine optimal eingestellte Heizung sorgt für gleichmäßige Wärme im Raum, niedrigen Verbrauch und zuverlässige Nutzung im Alltag. Auch Wasser-Systeme und Warmwasser-Aufbereitung werden fachgerecht geprüft, gewartet und bei Bedarf repariert.
            </p>
            <p>
              Durch den Einsatz aktueller Technologie und geprüfter Technik gewährleisten wir einen effizienten Betrieb und reduzieren das Risiko von Störungen. Unser Service verbindet Komfort, Sicherheit und nachhaltige Qualität für Kunden in Wien.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Heizung Gasgeräte Warmwasser" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preis, MwSt und Angebote -->
  <section class="service-section" id="preis-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preis, MwSt und Angebote</h2>
            <p>
              Transparente Preisgestaltung ist ein zentraler Bestandteil unseres Services als Vaillant Installateur Wien. Unsere Preise sind klar aufgebaut, die MwSt wird vollständig ausgewiesen und alle Kosten verständlich erklärt.
            </p>
            <p>
              Kunden erhalten faire Angebote, abgestimmt auf Gerät, Leistung und tatsächlichen Aufwand. Ob Installation, Wartung oder Reparatur – wir achten auf ein ausgewogenes Preis-Leistungs-Verhältnis ohne versteckte Zusatzkosten.
            </p>
            <p>
              Aktuelle Angebote oder zeitlich begrenzte Aktion kommunizieren wir offen. So behalten Kunden jederzeit den Überblick über Preis, Kosten und Leistungen. Ziel ist eine vertrauensvolle Zusammenarbeit, bei der Qualität und Wirtschaftlichkeit im Einklang stehen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Preis MwSt Angebote" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf von Anfrage bis Termin -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf von Anfrage bis Termin</h2>
            <p>
              Der Ablauf bei uns ist klar, effizient und kundenorientiert gestaltet. Nach Ihrer Anfrage per Kontaktformular, Mail oder Telefonnummer klären wir alle wichtigen Details zu Gerät, Anlage und gewünschtem Service.
            </p>
            <p>
              Anschließend erhalten Sie eine transparente Beratung inklusive Preis, MwSt und möglicher Termine. Unsere Installateure planen den Einsatz sorgfältig und erscheinen pünktlich zum vereinbarten Termin.
            </p>
            <p>
              Vor Ort erfolgt die fachgerechte Umsetzung inklusive Installation, Wartung oder Reparatur sowie die notwendige Installationsanzeige. Kunden profitieren von strukturierter Kommunikation, klaren Abläufen und einer sauberen Ausführung. So stellen wir sicher, dass jede Arbeit effizient, sicher und nachvollziehbar durchgeführt wird.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/2size3.jpeg') }}" alt="Ablauf Anfrage bis Termin" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wien, Ort und Niederösterreich -->
  <section class="service-section" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien, Ort und Niederösterreich</h2>
            <p>
              Unser Vaillant Installateur Service ist in ganz Wien sowie in der Umgebung und in Niederösterreich verfügbar. Durch unsere lokale Präsenz sind wir schnell am Ort des Einsatzes und können flexibel auf Termine reagieren.
            </p>
            <p>
              Egal ob Wohnung, Haus oder Betrieb – wir kennen die regionalen Gegebenheiten und technischen Anforderungen vor Ort. Kurze Anfahrtswege ermöglichen raschen Service, insbesondere bei Störungen oder im Notdienst.
            </p>
            <p>
              Kunden schätzen unsere Zuverlässigkeit, planbare Einsätze und klare Erreichbarkeit. Als erfahrener Betrieb betreuen wir Projekte in Wien langfristig und stehen auch in Niederösterreich als kompetenter Partner zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size.jpeg') }}" alt="Wien Umgebung Niederösterreich" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thermentausch und Entsorgung -->
  <section class="service-section service-section--soft" id="thermentausch-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch und Entsorgung</h2>
            <p>
              Ein Thermentausch ist sinnvoll, wenn das bestehende Gerät häufige Störungen aufweist oder nicht mehr wirtschaftlich arbeitet. Wir beraten Sie umfassend zu passenden Alternativen, moderner Gerätemarke und aktueller Vaillant Technologie wie Brennwert oder Vaillant ecoCOMPACT.
            </p>
            <p>
              Nach dem Kauf übernehmen wir den fachgerechten Einbau, die komplette Montage und die Entsorgung des Altgeräts. Dabei achten wir auf Sicherheit, Effizienz und einen reibungslosen Übergang im laufenden Betrieb.
            </p>
            <p>
              Kunden erhalten eine nachhaltige Lösung, die langfristig Kosten senkt und die Nutzung der Heizungsanlage optimiert.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Thermentausch Entsorgung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Vaillant</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Thermenwartung notwendig?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit, Effizienz und einen störungsfreien Betrieb Ihrer Vaillant Therme sicherzustellen.</p>
        </details>

        <details>
          <summary>Was kostet eine Wartung inklusive MwSt?</summary>
          <p>Die Kosten hängen vom Gerät und Aufwand ab. Preis und MwSt werden transparent kommuniziert, bevor der Service durchgeführt wird.</p>
        </details>

        <details>
          <summary>Wann lohnt sich ein Thermentausch?</summary>
          <p>Ein Thermentausch lohnt sich bei hohem Verbrauch, häufigen Störungen oder veralteter Technik ohne effizienten Heizwert oder Brennwert.</p>
        </details>

        <details>
          <summary>Gibt es einen Vaillant Notdienst?</summary>
          <p>Ja, unser Notdienst ist rund um die Uhr erreichbar und hilft bei akuten Störungen schnell und zuverlässig.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Umgebung und Niederösterreich?</summary>
          <p>Wir sind in Wien, der Umgebung sowie in Niederösterreich im Einsatz und reagieren flexibel auf Termine und Einsätze.</p>
        </details>

        <details>
          <summary>Wie läuft die Anfrage ab?</summary>
          <p>Nach Ihrer Anfrage klären wir Details, beraten transparent und vergeben zeitnah einen passenden Termin.</p>
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

<!-- {{-- Oaptional JS (TOC toggle + smooth scroll) --}} -->
<!-- <script>
  (function () {
    const tocCard  = document.getElementById('tocCard');
    const tocHead  = document.getElementById('tocHead');
    const tocBody  = document.getElementById('tocBody');
    const tocToggle= document.getElementById('tocToggle');

    if (!tocCard || !tocHead || !tocBody || !tocToggle) return;

    function setToc(open) {
      tocCard.classList.toggle('is-open', open);
      tocHead.setAttribute('aria-expanded', open ? 'true' : 'false');
      tocToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    }

    // default closed
    setToc(false);

    // toggle helper
    function toggleToc(e){
      // button clicks handled too, but prevent double toggle
      if (e && e.target && e.target.closest('#tocToggle')) return;

      const isOpen = tocCard.classList.contains('is-open');
      setToc(!isOpen);
    }

    // Click on header toggles
    tocHead.addEventListener('click', toggleToc);

    // Click on icon button toggles (and stops bubbling)
    tocToggle.addEventListener('click', function(e){
      e.preventDefault();
      e.stopPropagation();
      const isOpen = tocCard.classList.contains('is-open');
      setToc(!isOpen);
    });

    // Keyboard accessibility
    tocHead.addEventListener('keydown', function(e){
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        const isOpen = tocCard.classList.contains('is-open');
        setToc(!isOpen);
      }
    });

    // Smooth scroll for TOC links (optional)
    document.querySelectorAll('.toc-list a[href^="#"]').forEach(function(link){
      link.addEventListener('click', function(e){
        const id = this.getAttribute('href');
        if (!id || id === '#') return;
        const el = document.querySelector(id);
        if (!el) return;
        e.preventDefault();
        el.scrollIntoView({ behavior:'smooth', block:'start' });
        setToc(false); // close after click (optional)
      });
    });
  })();
</script> -->

@endsection
