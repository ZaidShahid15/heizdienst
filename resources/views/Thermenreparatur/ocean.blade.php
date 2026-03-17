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

  /* =====================================================
     ✅ IMAGES EQUAL HEIGHT AS CONTENT (CARD-SPLIT)
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
    display:flex; /* ✅ allow child to stretch */
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
    height:100%;       /* ✅ match text height */
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
    /* object-fit:cover;  ✅ fill nicely */
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
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@php
$metaTitle = "Ocean Thermenreparatur Wien – Ocean Kundendienst & Thermenwartung Wien";
$metaDescription = "Ocean Thermenreparatur Wien vom Profi. Ocean Kundendienst Wien, Thermenwartung Wien, Thermentausch & Notdienst in Wien Niederösterreich und Burgenland.";
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
        Ocean Thermenreparatur Wien Experten
 <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1oceanbaxi.jpeg') }}" alt="Ocean Logo">
      </div>

      <p class="wolf-hero__sub">
        Zuverlässige Ocean Thermenreparatur Wien für Ihre Ocean Therme – Thermenservice, Wartung und Kundendienst rund um die Uhr.

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
          <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Ocean Service Wien</span></a></li>
          <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Team & Kompetenz</span></a></li>
          <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
          <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Thermenwartung</span></a></li>
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

  <!-- ✅ UPDATED: card box left + image right -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ocean Thermenreparatur Wien und Ocean Kundendienst Wien</h2>
            <p>
              Unsere Ocean Thermenreparatur Wien steht für professionelle Reparatur, präzise Fehlerbehebung und umfassenden Ocean Kundendienst Wien. Als erfahrener Installateur betreuen wir Ocean Therme, Ocean Gastherme sowie moderne Ocean Heizungsanlagen in Wien Niederösterreich und Umgebung.
            </p>
            <p>
              Der Ocean Kundendienst übernimmt alle Arbeiten an Gasgeräte, Durchlauferhitzer und kompletter Heizungsanlage fachgerecht. Ob Probleme im Betrieb, Störungen oder ineffiziente Funktion – unser Team analysiert den Zustand Ihrer Therme sorgfältig. Mit strukturiertem Thermenservice und nachhaltigen Lösungen sorgen wir für Sicherheit, Effizienz und langfristige Lebensdauer Ihrer Ocean Heizung. Auch in Niederösterreich, NÖ und Burgenland stehen wir als zuverlässiger Partner zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/oceanbaxi.jpeg') }}" alt="Ocean Thermenreparatur Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left, content right) -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ocean Thermenreparatur Wien Experten</h2>
            <p>
              Unser Team besteht aus erfahrenen Servicetechnikern, Installateuren und Mitarbeitern mit umfassendem Know-how im Umgang mit Ocean Heizungen und Thermen. Jeder Techniker arbeitet nach hohen Qualitätsstandards und führt Thermenreparaturen mit höchster Professionalität durch.
            </p>
            <p>
              Durch laufende Schulungen sichern wir eine kompetente Betreuung aller Systeme. Klare Abläufe, Zuverlässigkeit und persönliche Betreuung schaffen Vertrauen und langfristige Kundenzufriedenheit. Unser Gasgeräte Kundendienst ist in Wien NÖ sowie im Burgenland im Einsatz und bietet schnelle Hilfe direkt vor Ort.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Qualitätsstandards</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Laufende Schulungen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Persönliche Betreuung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size3.jpegs.jpeg') }}" alt="Ocean Thermenreparatur Wien Experten" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen (kept as grid) -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen unseres Ocean Kundendienstes</h2>
        <p>Reparatur Ihrer Ocean Therme, Thermenwartung, Installation und Service – professionell betreut.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Ocean Gasgeräte Service</h3>
            <p>Service für Ocean Gasgeräte inklusive Überprüfung, Wartung und sicherer Funktion im gesamten Zuhause. Unser Ocean Kundendienst Wien übernimmt alle Arbeiten fachgerecht.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧰</div>
          <div>
            <h3>Ocean Thermenwartung Wien</h3>
            <p>Professionelle Ocean Thermenwartung Wien mit gründlicher Wartung, Kontrolle und Reinigung aller Komponenten für Effizienz, Sicherheit und lange Lebensdauer Ihrer Ocean Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Ocean Gasthermen & Heizsysteme</h3>
            <p>Betreuung von Ocean Gasthermen und Heizsystemen mit Fokus auf Qualität, Zuverlässigkeit und optimale Leistung. Auch Reparatur Ihrer Ocean Therme bei Problemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♨️</div>
          <div>
            <h3>Wärmepumpe & Zubehör</h3>
            <p>Service und Beratung zu Wärmepumpe, Zubehör und passenden Systemlösungen für moderne Heiztechnik neben Ocean Thermen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Störungsbehebung & Reparaturen</h3>
            <p>Rasche Störungsbehebung und Reparaturen durch Experten mit klarer Lösung und effizienter Durchführung. Wenn Ihre Ocean Therme nicht mehr ordnungsgemäß arbeitet, sind wir sofort zur Stelle.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Ocean Thermentausch & Installation</h3>
            <p>Beratung, Montage und Installation bei Ocean Thermentausch oder Neuinstallation nach aktuellen Standards. Bei häufigen Störungen empfehlen wir einen Austausch alter Geräte.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: card split (image right) -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ocean Thermenwartung Wien & Wartungsarbeiten</h2>
            <p>
              Eine regelmäßige Ocean Thermenwartung Wien ist ein zentraler Bestandteil für den sicheren Betrieb Ihrer Therme. Unsere professionelle Ocean Thermenwartung Wien umfasst gründliche Wartung, sorgfältige Kontrolle und umfassende Reinigung aller relevanten Komponenten.
            </p>
            <p>
              Durch strukturierte Thermenwartung verbessern wir Effizienz, reduzieren Energieverbrauch und sichern Komfort im Zuhause. Unsere Fachleuten prüfen Gasgeräte, Heizkörper und Sanitär Installationen genau. So verlängern wir die Lebensdauer Ihrer Ocean Therme und vermeiden zukünftige Probleme. Der Ocean Thermenservice Wien bietet nachhaltige Dienstleistungen mit klarer Terminvereinbarung und transparenter Betreuung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Längere Lebensdauer</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Ocean Thermenwartung Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left) -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Reparatur Ihrer Ocean Therme bei Problemen</h2>
            <p>
              Wenn Ihre Ocean Therme nicht mehr ordnungsgemäß arbeitet oder die Gastherme ausfällt, ist rasche Thermenreparatur entscheidend. Unsere Techniker führen gezielte Überprüfung, Abgasmessung und professionelle Fehlerbehebung durch. Die Reparatur erfolgt mit höchster Professionalität und technischem Fachwissen.
            </p>
            <p>
              Ob Ocean Thermenreparaturen, einzelne Gasgeräte oder komplette Heizungsanlage – wir stellen die sichere Funktion wieder her. Unser Gasgeräte Kundendienst ist in Wien NÖ sowie im Burgenland im Einsatz und bietet schnelle Hilfe direkt vor Ort. Mit Erfahrung im Umgang mit verschiedenen Marken wie Saunier Duval und Ocean garantieren wir zuverlässige Lösungen für Ihr Zuhause.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hochwertige Ersatzteile</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Professionelle Fehlerbehebung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Ergebnisse</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="Reparatur Ihrer Ocean Therme" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst (kept dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Ocean Kundendienst rund um die Uhr</h2>
        <p>
          Unser Ocean Kundendienst ist rund um die Uhr zur Verfügung und sorgt bei Störungen oder Notfällen für sichere Reparatur und rasche Wiederherstellung der Heizung. Bei Ausfall der Heizung, Problemen mit Gasgeräten oder sicherheitsrelevanten Situationen reagieren wir rasch.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Sicherheit hat dabei höchste Priorität. Unsere Servicetechniker analysieren die Situation, leiten Sofortmaßnahmen ein und sorgen für eine stabile Lösung – rund um die Uhr in Wien, Niederösterreich und Burgenland.
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
            <li>Ausfall der Heizung</li>
            <li>Probleme mit Ocean Gasgeräten</li>
            <li>Sicherheitsrelevante Situationen</li>
            <li>Wasser-, Gas- oder Wärmeprobleme</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr erreichbar – schnelle Hilfe vor Ort in Wien, Niederösterreich und Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: card split (image right) -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Effizienz & Vorteile</h2>
            <p>
              Vor Beginn der Arbeiten informieren wir klar über Aufwand und Leistungen. Eine regelmäßige Ocean Thermenwartung steigert die Effizienz, senkt langfristig Kosten und verlängert die Lebensdauer der Geräte.
            </p>
            <p>
              Kunden erhalten eine ehrliche Beratung – abgestimmt auf Bedarf. Fachgerechter Service sorgt dafür, dass die Qualität von Ocean Systemen dauerhaft erhalten bleibt. Unser Ziel ist maximale Kundenzufriedenheit, nachhaltige Lösungen und langfristiger Komfort für Ihr Zuhause.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Kosten & Vorteile" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ UPDATED: reverse (image left) -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Service in Wien Niederösterreich und Burgenland</h2>
            <p>
              Wir betreuen Kunden in Wien Niederösterreich, NÖ und Burgenland zuverlässig mit schneller Unterstützung, professionellen Installationen und zuverlässigem Thermenservice. Kurze Wege und regionale Nähe sichern schnellen Service in allen Regionen.
            </p>
            <p>
              Unser Team ist in Wien Niederösterreich, NÖ und Burgenland im Einsatz und bietet persönliche Betreuung vor Ort. Ob Thermenreparatur, Wartung oder Notdienst – wir sind jederzeit zur Verfügung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Service in Wien Niederösterreich Burgenland" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Ocean Thermenreparatur Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Ocean Thermenwartung durchgeführt werden?</summary>
          <p>Eine regelmäßige Ocean Thermenwartung Wien erhöht Effizienz, Sicherheit und Lebensdauer Ihrer Therme. Wir empfehlen eine jährliche Wartung.</p>
        </details>

        <details>
          <summary>Ist der Ocean Kundendienst Wien rund um die Uhr erreichbar?</summary>
          <p>Ja, unser Kundendienst ist rund um die Uhr in Wien, Niederösterreich und Burgenland verfügbar. Bei Notfällen reagieren wir sofort.</p>
        </details>

        <details>
          <summary>Welche Leistungen umfasst der Ocean Thermenservice?</summary>
          <p>Der Ocean Thermenservice umfasst Reparatur, Thermenwartung, Installation, Abgasmessung und umfassende Gasgeräte Betreuung durch erfahrene Techniker.</p>
        </details>

        <details>
          <summary>Wann ist ein Ocean Thermentausch sinnvoll?</summary>
          <p>Bei häufigen Störungen, ineffizientem Betrieb oder veralteten Geräten empfehlen wir einen Ocean Thermentausch. Wir beraten Sie transparent zu allen Optionen.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Wien NÖ und Umgebung?</summary>
          <p>Ja, wir sind in Wien Niederösterreich, NÖ, Burgenland und Umgebung im Einsatz. Unser Team betreut Sie zuverlässig vor Ort.</p>
        </details>

        <details>
          <summary>Arbeiten Sie auch mit anderen Marken?</summary>
          <p>Neben Ocean betreuen wir auch andere Marken wie Saunier Duval und vergleichbare Heizsysteme mit gleicher Professionalität.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ✅ CONTACT FORM ALWAYS LAST -->
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
