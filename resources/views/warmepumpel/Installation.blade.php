@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpe Installation Wien | Beratung, Förderung & Angebot';
    $metaDescription = 'Wärmepumpe Installation in Wien: Beratung, Förderung, Kosten & Service. Effizient heizen, kühlen und Energiekosten senken. Jetzt Angebot anfordern.';
@endphp

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

  /* Buttons */
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

  /* =========================
     HERO (same as yours)
     ========================= */
 /* =========================
   HERO (Desktop + Mobile unified)
   ========================= */


  /* =========================
     ✅ TOC like screenshot
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
    overflow:hidden;
    box-shadow:0 18px 50px rgba(0,0,0,.12);
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
  .toc-iconbtn svg{width:16px; height:16px; fill:var(--ink); opacity:.9; transition: transform .18s ease;}

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

  /* row style like screenshot */
  .toc-link{
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 14px;
    border-radius:14px;
    border:1px solid rgba(24,64,72,.12);
    background:#fff;
    transition:.15s ease;
  }
  .toc-link:hover{background:#f2f7f7; border-color:rgba(24,64,72,.18);}
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
  .toc-text{
    font-weight:900;
    color:#0f3a40;
    font-size:14px;
    line-height:1.2;
  }

  /* collapsed */
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 12px;
    overflow:hidden;
  }

  /* =========================
     Sections (your existing)
     ========================= */
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
  .service-grid--3{grid-template-columns: repeat(3, 1fr)}
  .service-grid--2{grid-template-columns: repeat(2, 1fr)}

  .service-card{
    background:#fff;
    border:1px solid var(--line);
    border-radius: var(--radius);
    padding:16px;
  }
  .service-card--service h3{margin:0 0 8px; color:var(--ink)}
  .service-card--service p{margin:0 0 10px}

  .service-checklist{margin:0 0 14px; padding-left:18px}
  .service-checklist li{margin:8px 0}
  .service-checklist--on-dark{color:rgba(255,255,255,.92)}
  .service-checklist--on-dark li{margin:10px 0}

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

  .service-split{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:18px;
    align-items:center;
  }
  .service-split--reverse .service-split__text{order:2}
  .service-split--reverse .service-split__media{order:1}

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

  .service-chips{display:flex; flex-wrap:wrap; gap:10px}
  .service-chip{
    padding:10px 12px;
    border-radius:999px;
    background:#fff;
    border:1px solid var(--line);
    font-weight:800;
  }

  .service-steps{margin:0; padding-left:18px;}
  .service-steps li{margin:12px 0}
  .service-steps strong{display:block; color:var(--ink)}
  .service-steps span{display:block}

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

  .service-pricecard{
    border:1px solid var(--line);
    border-radius:var(--radius);
    padding:16px;
    background:#fff;
  }
  .service-pricecard h3{margin:0 0 6px; color:var(--ink)}
  .service-pricecard p{margin:0}

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
  .service-formrow{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:10px;
  }
  textarea{resize:vertical}
  .service-fineprint{margin:10px 0 0; font-size:.9rem; opacity:.8}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--3{grid-template-columns: 1fr}
    .service-grid--2{grid-template-columns: 1fr}
    .service-split{grid-template-columns: 1fr}
    .service-split--reverse .service-split__text{order:1}
    .service-split--reverse .service-split__media{order:2}
    .service-emergency{grid-template-columns: 1fr}
    .service-cta__inner{grid-template-columns: 1fr}
    .service-formrow{grid-template-columns: 1fr}
    .wolf-hero { padding: 120px 14px 86px; min-height: 480px; }
    .wolf-hero__sub { font-size: 14px }
  }
</style>
<style>
  /* =====================================
   MOBILE HERO – EXACT LIKE SCREENSHOT
   ===================================== */
   .hero-first-block{
  padding: 20px 0;
  border-bottom:1px solid rgb(96 122 126 / 98%);
  border-top:1px solid rgb(96 122 126 / 98%);
  /* width: 70vw; */
  text-align: center;

}

@media (max-width: 768px){

  .wolf-hero{
    text-align:left;
    align-items:flex-start;
    padding:110px 20px 80px;
    min-height:560px;
  }

  /* Exact dark teal left overlay */
  .wolf-hero::after{
    background: linear-gradient(
      90deg,
      rgba(15,66,74,0.98) 0%,
      rgba(15,66,74,0.95) 40%,
      rgba(15,66,74,0.75) 60%,
      rgba(15,66,74,0.35) 80%,
      rgba(15,66,74,0.05) 100%
    );
  }

  .wolf-hero::before{
    background-position:right center;
  }

  .wolf-hero__inner{
    max-width:420px;
    margin-top:10px;
  }

  /* Main title */
  .wolf-hero h1{
    font-size:26px;
    line-height:1.2;
    font-weight:800;
    margin-bottom:8px;
    color:#ffffff;
  }

  /* Orange highlight line */
  .wolf-hero h1 em{
    display:block;
    font-style:normal;
    font-weight:700;
    font-size:17px;
    color:#f79c1c;
    margin-top:6px;
  }

  /* Description text */
  .wolf-hero__sub{
    font-size:14px;
    color:rgba(255,255,255,.92);
    margin-bottom:18px;
  }

  /* BAXI logo styling */
  .wolf-hero__logo img{
    width:140px;
    transform:none;
  }

  /* Action buttons container */
  .wolf-hero__actions{
    flex-direction:column;
    gap:10px;
    align-items:flex-start;
  }

  /* ORANGE CALL BUTTON */
  .wolf-btn--red{
    width:100%;
    background:#f79c1c;
    color:#fff;
    font-size:14px;
    font-weight:700;
    padding:14px;
    border-radius:6px;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:8px;
  }

  .wolf-btn--red i{
    font-size:16px;
  }

  /* WHITE OUTLINE BUTTON */
  .wolf-btn-outline{
    /* width:100%; */
    margin: auto;
    border:1px solid rgba(255,255,255,.5);
    color:#fff;
    background:transparent;
    font-size:14px;
    font-weight:600;
    padding:14px;
    border-radius:6px;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:8px;
  }

  .wolf-btn-outline:hover{
    background:rgba(255,255,255,.08);
  }

  /* TRUST SECTION */
  .hero-trust{
    margin-top:18px;
    color:#fff;
  }

  .hero-trust .rating{
    font-size:14px;
    font-weight:600;
  }

  .hero-trust .stars{
    color:#ffc107;
    margin:4px 0;
  }

  .hero-trust .badges{
    margin-top:10px;
    font-size:13px;
  }

  .hero-trust .badges div{
    display:flex;
    align-items:center;
    gap:8px;
    margin-bottom:6px;
  }
  .hero-trust{
    display:block;  
  }

  .hero-first-block{
  padding: 20px 0;
  border-bottom:1px solid rgb(96 122 126 / 98%);
  border-top:1px solid rgb(96 122 126 / 98%);
  /* width: 70vw; */
  text-align: start;

}

.wolf-hero h1{
  text-align: left;
}
.wolf-hero__sub{
  text-align: left;

}

}

</style>
<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Wärmepumpe Installation Wien <br>
        <span style="color:#FB9A1B;">Beratung, Förderung & Angebot vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Eine moderne Wärmepumpe ermöglicht effizientes Heizen und Kühlen für Haushalte in Wien und Umgebung bei dauerhaft niedrigen Energiekosten.
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


  <!-- ✅ TOC EXACT LIKE IMAGE -->
<section class="toc-wrap" aria-label="Inhaltsverzeichnis">
  <div class="service-container">
    <!-- ✅ collapsed by default -->
    <div class="toc-card is-collapsed" id="tocCard">

      <!-- ✅ aria-expanded false by default -->
      <div class="toc-head"
           id="tocHead"
           role="button"
           tabindex="0"
           aria-controls="tocBody"
           aria-expanded="false">

        <h4 id="tocTitle">Inhaltsverzeichnis</h4>

        <div class="toc-actions">
          <!-- ✅ aria-expanded false by default -->
          <button class="toc-iconbtn"
                  type="button"
                  id="tocToggle"
                  aria-expanded="false"
                  aria-controls="tocBody"
                  aria-label="Inhaltsverzeichnis umschalten">
            <svg id="tocChevron" viewBox="0 0 448 512" aria-hidden="true">
              <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </svg>
          </button>
        </div>
      </div>

      <div class="toc-body" id="tocBody">
        <ul class="toc-list" id="tocList">
          <li class="toc-item">
            <a href="#vorteile-services" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Vorteile</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#installation-services" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Installation</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#systeme-services" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Systeme</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#foerderung-services" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kosten-services" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Kosten</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#wartung-services" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#umgebung-services" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Umgebung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#faq-services" class="toc-link">
              <span class="toc-badge">08</span><span class="toc-text">FAQ</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kontakt-services" class="toc-link">
              <span class="toc-badge">09</span><span class="toc-text">Kontakt</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Vorteile einer Wärmepumpe</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. Nachhaltige Energie, niedrige Betriebskosten und aktiver Klimaschutz.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Zukunftssichere Technologie</h3>
          <p>Eine Wärmepumpe nutzt Umweltenergie aus Luft, Wasser oder Erde und wandelt diese in nutzbare Wärme um – unabhängig von Gas oder Öl.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Reduzierte Energiekosten</h3>
          <p>Durch hohe Energieeffizienz und Nutzung kostenloser Umweltenergie sinken die laufenden Heizkosten deutlich gegenüber fossilen Brennstoffen.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Umwelt & Klimaschutz</h3>
          <p>Wärmepumpen arbeiten emissionsfrei vor Ort, schonen die Umwelt und tragen aktiv zur Reduzierung von CO₂ bei.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Installation -->
  <section class="service-section service-section--soft" id="installation-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Installation und Planung Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. 
          Die Installation einer Wärmepumpe in Wien beginnt mit einer sorgfältigen Planung, abgestimmt auf Gebäude, Heizsysteme und individuelle Voraussetzungen. Ein erfahrener Installateur analysiert Heizbedarf, Boden, Wasserzugang und bestehende Systeme, um eine passende Lösung zu entwickeln. Von der Auswahl des Wärmepumpen Modells bis zum Einbau erfolgt alles aus einer Hand. Die fachgerechte Montage stellt sicher, dass das Gerät effizient arbeitet und langfristig zuverlässig bleibt. Nach der Inbetriebnahme wird das System optimal eingestellt, damit Heizen, Kühlen und Warmwasser reibungslos funktionieren. Durch professionelle Arbeit, klare Details und hohe Fachkompetenz profitieren Haushalte von stabiler Qualität, geringem Wartungsaufwand und einer langlebigen Heizlösung für Wohngebäude in Wien und Niederösterreich.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Planung vom Fachmann</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Fachgerechte Montage</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Sichere Inbetriebnahme</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size9.jpeg') }}" alt="Wärmepumpen Installation Wien" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Systeme -->
  <section class="service-section" id="systeme-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpen Systeme Überblick</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. Je nach Gebäude und Umgebung kommen unterschiedliche Wärmepumpen Systeme zum Einsatz.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Luft Wasser Wärmepumpe</h3>
          <p>Luft Wasser Wärmepumpen sind flexibel einsetzbar, benötigen wenig Platz und eignen sich ideal für Einfamilienhaus-Projekte in Wien.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Sole Wasser Wärmepumpe</h3>
          <p>Diese Lösung nutzt konstante Erdwärme aus dem Boden und bietet besonders hohe Energieeffizienz bei langfristigem Betrieb.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Wasser Wasser Wärmepumpe</h3>
          <p>Die Wasser Wasser Wärmepumpe verwendet Grundwasser als Energiequelle und liefert sehr stabile Wärmeleistung für Wohngebäude.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Förderung -->
  <section class="service-section service-section--soft" id="foerderung-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Förderung für Wärmepumpen Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. 
          Für Haushalte in Wien stehen attraktive Förderungen für die Installation einer Wärmepumpe zur Verfügung. Die Wärmepumpen Förderung setzt sich aus Landesförderung und Bundesförderung zusammen und reduziert die Investitionskosten deutlich. Je nach Heizsystem, Wohngebäude und Energieeffizienz können mehrere Beiträge kombiniert werden. Auch der Umstieg von Gas oder Öl auf erneuerbare Heiztechnologie wird gezielt unterstützt. Wichtig sind bestimmte Voraussetzungen wie Gebäudestand, Heizenergiebedarf und fachgerechte Installation. Die Antragstellung erfolgt vor oder während der Umsetzung und erfordert genaue Angaben zu Gerät, Einbau und geplanten Leistungen. Mit professioneller Beratung lassen sich Förderungen optimal nutzen und finanzielle Vorteile langfristig sichern.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Landesförderung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Bundesförderung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Kombinierbar</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size10.jpeg') }}" alt="Förderung für Wärmepumpen in Wien" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten und individuelles Angebot</h2>
        <p> Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. 
          Die Kosten für eine Wärmepumpe in Wien hängen von System, Gebäudegröße und vorhandenen Heizsystemen ab. Faktoren wie Luft, Wasser oder Boden als Energiequelle beeinflussen den Gesamtpreis ebenso wie Montage, Inbetriebnahme und notwendige Anpassungen. Trotz höherer Anfangsinvestition sinken die laufenden Energiekosten deutlich, da Umweltenergie effizient genutzt wird. Im Vergleich zu Gas oder Öl profitieren Haushalte von stabilen Preisen und geringerer Abhängigkeit vom Land und globalen Märkten. Ein transparentes Angebot berücksichtigt alle Details, von der Planung bis zur Wartung, und schafft Planungssicherheit. Langfristig amortisiert sich die Lösung durch niedrige Betriebskosten und Förderungen.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Kosten</h3>
          <p>Klare Aufstellung aller Positionen – von der Planung über die Montage bis zur Inbetriebnahme. Keine versteckten Gebühren.</p>
        </div>
        <div class="service-pricecard">
          <h3>Individuelles Angebot</h3>
          <p>Maßgeschneiderte Lösung für Ihr Gebäude, exakt berechnet nach Heizlast, Systemwahl und Fördermöglichkeiten.</p>
        </div>
        <div class="service-pricecard">
          <h3>Förderung nutzen</h3>
          <p>Wir beraten Sie zu allen verfügbaren Landes- und Bundesförderungen und unterstützen bei der Antragstellung.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Wartung (dark emergency style) -->
  <section class="service-section service-section--dark" id="wartung-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Service und Wartung Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. 
          Ein zuverlässiger Service ist entscheidend für den langfristigen Betrieb einer Wärmepumpe. Regelmäßige Wartung sichert Effizienz, verlängert die Lebensdauer des Geräts und schützt vor unerwarteten Reparaturen. Ein Rundum Service umfasst Kontrolle, Reinigung, Funktionsprüfung und schnelle Unterstützung im Bedarfsfall. Auch nach der Installation stehen erfahrene Partner zur Seite, um Qualität und Leistung dauerhaft zu gewährleisten. Durch fachgerechte Arbeit und kontinuierliche Betreuung bleibt das Heizsystem optimal eingestellt und sorgt für konstante Wärme, Warmwasser und Kühlung in allen Jahreszeiten.
         Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Service anfragen</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Unsere Serviceleistungen</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Regelmäßige Wartung</li>
            <li>Schnelle Reparatur</li>
            <li>24h Notdienst</li>
            <li>Original Ersatzteile</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Durch regelmäßige Wartung bleiben Effizienz und Lebensdauer Ihrer Anlage erhalten.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Umgebung -->
  <section class="service-section" id="umgebung-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpe in Wien Umgebung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. Nicht nur in der Stadt Wien, sondern auch in der Umgebung und in Niederösterreich ist die Installation von Wärmepumpen stark gefragt.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Wien</span>
        <span class="service-chip">Niederösterreich</span>
        <span class="service-chip">St. Pölten</span>
        <span class="service-chip">Baden</span>
        <span class="service-chip">Mödling</span>
        <span class="service-chip">Klosterneuburg</span>
        <span class="service-chip">Umgebung Wien</span>
        <span class="service-chip">NÖ</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Unterschiedliche Postleitzahl-Bereiche, Grundstücksarten und Wohnformen erfordern individuelle Lösungen. Ob städtisches Wohnhaus oder Einfamilienhaus im Umland – moderne Heizsysteme lassen sich flexibel anpassen. Auch Themen wie Anschrift, Anfahrt und regionale Förderprogramme spielen eine Rolle. Durch regionale Erfahrung und Ortskenntnis wird sichergestellt, dass Planung, Einbau und Service optimal auf die jeweilige Umgebung abgestimmt sind.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpe</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um die Wärmepumpe.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Welche Wärmepumpe eignet sich für Wien?</summary>
          <p>Die passende Wärmepumpe hängt von Gebäude, Heizsystem, Platzverhältnissen und Energiequelle wie Luft, Wasser oder Boden ab.</p>
        </details>

        <details>
          <summary>Wie hoch sind die Kosten einer Wärmepumpe?</summary>
          <p>Die Kosten variieren je nach System, Einbau und Leistung, werden jedoch durch Förderungen und niedrige Energiekosten ausgeglichen.</p>
        </details>

        <details>
          <summary>Gibt es Förderungen in Wien?</summary>
          <p>Ja, in Wien stehen Landesförderung und Bundesförderung für Wärmepumpen zur Verfügung, abhängig von Voraussetzungen und Antragstellung.</p>
        </details>

        <details>
          <summary>Kann eine Wärmepumpe auch kühlen?</summary>
          <p>Moderne Wärmepumpen ermöglichen neben dem Heizen auch effiziente Kühlung für ein angenehmes Raumklima im Sommer.</p>
        </details>

        <details>
          <summary>Wie lange dauert die Installation?</summary>
          <p>Die Installation dauert in der Regel wenige Tage, abhängig von Planung, Systemwahl und baulichen Gegebenheiten.</p>
        </details>

        <details>
          <summary>Ist der Betrieb auch im Winter effizient?</summary>
          <p>Ja, hochwertige Wärmepumpen arbeiten selbst im Winter zuverlässig und liefern ausreichend Wärme für Haushalte.</p>
        </details>

        <details>
          <summary>Benötigt eine Wärmepumpe regelmäßige Wartung?</summary>
          <p>Regelmäßige Wartung ist empfehlenswert, um Effizienz, Sicherheit und Lebensdauer des Heizsystems zu erhalten.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Beratung und Angebot Wien',
    'text' => 'Eine professionelle Beratung ist der erste Schritt zur passenden Wärmepumpe in Wien. Gemeinsam werden Heizbedarf, Kosten, Förderungen und technische Voraussetzungen analysiert. Auf dieser Basis entsteht eine maßgeschneiderte Lösung inklusive transparentem Angebot. Von der ersten Anfrage per E-Mail bis zur finalen Umsetzung begleitet ein erfahrener Fachmann den gesamten Prozess. Klare Kommunikation, zuverlässige Unterstützung und fachliche Kompetenz sorgen dafür, dass Haushalte eine effiziente und nachhaltige Heizlösung erhalten, die langfristig überzeugt.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection










