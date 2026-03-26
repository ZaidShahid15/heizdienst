@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpen Reparatur Burgenland | Service & Wartung';
    $metaDescription = 'Wärmepumpen Reparatur Burgenland vom Profi. Service, Wartung, Installation & faire Preise. Beratung zu Förderung und schnelle Hilfe bei Problemen.';
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
        Wärmepumpen Reparatur Burgenland <br>
        <span style="color:#FB9A1B;">Service & Wartung vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Wärmepumpen Reparatur Burgenland für zuverlässige Wärme, schnelle Hilfe bei Problemen und erfahrenen Service direkt vor Ort.
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
            <a href="#service-wartung" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Service & Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#reparatur-sicherheit" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Reparatur & Sicherheit</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#moderne-heizsysteme" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Heizsysteme</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#foerderung" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#preise" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Preise & Qualität</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#einsatzgebiet" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Einsatzgebiet</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#unternehmen" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Unser Unternehmen</span>
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


  <!-- Wärmepumpen Service und Wartung -->
  <section class="service-section" id="service-wartung">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpen Service und Wartung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. Unser Wärmepumpen Service im Burgenland bietet umfassende Betreuung für moderne Heizungsanlagen und nachhaltige Haustechnik.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Regelmäßige Wartung</h3>
          <p>Regelmäßige Wartung erhöht die Lebensdauer Ihrer Anlagen und sichert eine stabile Wärmeversorgung im Zuhause. Wir übernehmen Reparatur, Überprüfung und fachgerechte Einstellung aller Wärmepumpen, unabhängig vom Hersteller.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Heizung, Klima & Klimaanlage</h3>
          <p>Auch bei Problemen mit Heizung, Klima oder Klimaanlage stehen wir als erfahrener Partner zur Verfügung. Durch professionelle Wartung und gezielten Heizungsservice verbessern wir Effizienz, Sicherheit und Komfort.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Reinigung & Kontrolle</h3>
          <p>Unsere Leistungen umfassen ebenso die Reinigung von Filtern sowie die Kontrolle aller relevanten Komponenten für einen zuverlässigen Betrieb.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Reparatur, Sicherheit und Qualität -->
  <section class="service-section service-section--soft" id="reparatur-sicherheit">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Reparatur, Sicherheit und Qualität</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. 
          Eine rasche Reparatur sorgt dafür, dass Ihre Heizung im Burgenland wieder zuverlässig funktioniert. Unser Service deckt sämtliche Arbeiten an Wärmepumpen, Heizungsanlage und Heizsystem ab. Wir prüfen Gas-Verbindungen, kontrollieren Öl- oder Ölheizung-Komponenten und beheben Störungen fachgerecht. Qualität und Sicherheit stehen bei jeder Wartung im Mittelpunkt. Durch regelmäßige Überprüfung lassen sich größere Schäden vermeiden und Energiekosten reduzieren. Unser Unternehmen verbindet Erfahrung mit moderner Haustechnik, um nachhaltige Lösungen für Ihr Zuhause zu schaffen. So bleibt Ihre Anlage effizient, sicher und langfristig leistungsfähig.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Schnelle Hilfe bei Problemen</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Wartung für lange Lebensdauer</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Klimaanlage & Wohnraumlüftung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size2.jpeg') }}" alt="Wärmepumpen Reparatur" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Moderne Heizsysteme und Planung -->
  <section class="service-section" id="moderne-heizsysteme">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Heizsysteme und Planung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. Moderne Wärmepumpen sind eine umweltfreundliche Alternative zu Gas oder Öl. Sie nutzen Energie aus der Umwelt und sorgen für effiziente Wärme im Zuhause.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📋</div>
          <div>
            <h3>Planung & Umsetzung</h3>
            <p>Unser Unternehmen unterstützt Sie bei Planung, Auswahl und Umsetzung passender Heizsysteme. Ob Neuinstallation, Einbau oder Sanierung bestehender Heizungsanlagen – wir begleiten jedes Projekt von Anfang bis zur fertigen Installation.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔄</div>
          <div>
            <h3>Umstieg von Thermen oder Ölheizung</h3>
            <p>Auch beim Umstieg von Thermen oder Ölheizung beraten wir umfassend. Durch Kombination mit Wohnraumlüftung oder Klimaanlage entsteht ein ganzheitliches Konzept für Heizung und Klima.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Installation & Neuinstallation</h3>
            <p>Wir übernehmen Installation, Einbau und Neuinstallation moderner Wärmepumpen inklusive fachgerechter Montage.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏠</div>
          <div>
            <h3>Sanierung & Umstieg</h3>
            <p>Bei Sanierung oder Umstieg auf neue Heizsysteme beraten wir transparent und entwickeln passende Lösungen für Ihr Zuhause.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Förderung und Beratung im Burgenland -->
  <section class="service-section service-section--soft" id="foerderung">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Förderung und Beratung im Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. 
          Für Wärmepumpen Projekte im Burgenland stehen unterschiedliche Förderungen zur Verfügung, darunter Bundesförderung und Landesförderung. In einem persönlichen Beratungsgespräch informieren wir Sie über aktuelle Möglichkeiten und unterstützen bei der Antragstellung. Unsere Beratung berücksichtigt individuelle Anforderungen, geplante Sanierung und gewünschte Effizienz. Auch Themen wie Umwelt, Energieeinsparung und langfristige Reduktion der Energiekosten werden besprochen. Als Servicepartner begleiten wir Sie von der ersten Planung bis zur finalen Umsetzung. Dabei profitieren Kunden von klaren Infos, transparenter Qualität und einem festen Ansprechpartner im gesamten Ort.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Bundesförderung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Landesförderung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Persönliche Beratung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size7.jpeg') }}" alt="Förderung Burgenland" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise, Pauschalen und Qualität (dark style) -->
  <section class="service-section service-section--dark" id="preise">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Preise, Pauschalen und Qualität</h2>
        <p>Mehr zu unserem <a href="/">Serviceangebot</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. 
          Transparente Preise und klar definierte Pauschalen schaffen Vertrauen bei jeder Wärmepumpen Reparatur Burgenland. Vor Beginn aller Arbeiten erhalten Kunden eine nachvollziehbare Übersicht über Service, Wartung oder Reparatur. Unser Unternehmen legt großen Wert auf Qualität in allen Bereichen der Haustechnik – von der ersten Beratung bis zur finalen Umsetzung. Faire Kalkulation, hochwertige Komponenten und erfahrene Profis sichern langfristige Zufriedenheit. Auch bei Sanierung, Einbau oder Installation neuer Anlagen beraten wir umfassend zu Kosten, Förderung und möglichen Einsparungen bei Energiekosten. So verbinden wir Qualität, Effizienz und Wirtschaftlichkeit für Ihr Zuhause im Burgenland.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Angebot anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Transparente Preise</li>
            <li>Klare Pauschalen</li>
            <li>Keine versteckten Kosten</li>
            <li>Hochwertige Komponenten</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Faire Kalkulation und erfahrene Profis für Ihre Wärmepumpe.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Einsatzgebiet Burgenland und Umgebung -->
  <section class="service-section" id="einsatzgebiet">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Einsatzgebiet Burgenland und Umgebung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. Unser Service ist im gesamten Burgenland für private und gewerbliche Kunden verfügbar.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Eisenstadt</span>
        <span class="service-chip">Mattersburg</span>
        <span class="service-chip">Oberwart</span>
        <span class="service-chip">Neusiedl am See</span>
        <span class="service-chip">Jennersdorf</span>
        <span class="service-chip">Güssing</span>
        <span class="service-chip">Nordburgenland</span>
        <span class="service-chip">Südburgenland</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Wir betreuen Anlagen in jedem Ort der Region und stehen als zuverlässiger Partner im Bereich Heizung und Haustechnik zur Verfügung. Auch Projekte in Wien oder angrenzenden Bundesländern wie Vorarlberg werden bei Bedarf koordiniert. Dank strukturierter Planung und schneller Reaktionszeiten gewährleisten wir kurze Wege und direkte Unterstützung. Unsere Leistungen umfassen Reparatur, Wartung, Installation und persönliche Beratung – alles aus einer Hand für maximale Sicherheit und Komfort.
        </p>
      </div>
    </div>
  </section>

  <!-- Warum unser Unternehmen im Burgenland -->
  <section class="service-section service-section--soft" id="unternehmen">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Warum unser Unternehmen im Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. 
          Als erfahrenes Unternehmen im Bereich Haustechnik bieten wir maßgeschneiderte Lösungen rund um Wärmepumpen, Heizungsanlagen und Klimaanlage. Unsere Partner und Servicepartner arbeiten eng mit renommierten Hersteller zusammen, um höchste Qualität sicherzustellen. Von Heizungsservice über Badsanierung bis zur Wohnraumlüftung decken wir ein breites Leistungsspektrum ab. Erfahrung, professionelle Umsetzung und klare Kommunikation garantieren nachhaltige Ergebnisse. Unser Ziel ist die langfristige Zufriedenheit unserer Kunden – mit effizienter Heizung, optimalem Klima und maximalem Komfort im Zuhause.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Erfahrene Partner</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Renommierte Hersteller</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Breites Leistungsspektrum</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size2.jpegs.jpeg') }}" alt="Unser Team" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpen Reparatur Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Burgenland') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Reparatur, Wartung und Service.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Wartung notwendig?</summary>
          <p>Eine jährliche Wartung inklusive Überprüfung erhöht die Lebensdauer der Wärmepumpen und sichert effiziente Wärmeversorgung.</p>
        </details>
        <details>
          <summary>Wird auch bei akuten Problemen geholfen?</summary>
          <p>Ja, bei Problemen oder Ausfällen steht unser Service inklusive Notdienst rasch zur Verfügung.</p>
        </details>
        <details>
          <summary>Gibt es Förderungen für Wärmepumpen?</summary>
          <p>Je nach Projekt sind Bundesförderung oder Landesförderung möglich. Wir beraten Sie im persönlichen Beratungsgespräch.</p>
        </details>
        <details>
          <summary>Werden auch Gas- oder Öl-Systeme betreut?</summary>
          <p>Wir prüfen auch bestehende Gas- oder Ölheizung-Systeme im Rahmen von Sanierung oder Umstieg.</p>
        </details>
        <details>
          <summary>Ist eine Kombination mit Wohnraumlüftung sinnvoll?</summary>
          <p>Ja, die Kombination steigert Komfort, Effizienz und verbessert das Klima im Zuhause deutlich.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Termin vereinbaren und Kontakt aufnehmen',
    'text' => 'Sie benötigen eine Wärmepumpen Reparatur Burgenland oder möchten sich unverbindlich beraten lassen? Kontaktieren Sie uns für ein persönliches Beratungsgespräch. Unser Ansprechpartner informiert Sie zu Service, Wartung, Installation oder Sanierung Ihrer Heizungsanlage. Wir begleiten Ihr Projekt von der Planung bis zur Umsetzung und stehen bei allen Fragen rund um Heizung, Klima und Haustechnik zur Seite. Nehmen Sie jetzt Kontakt auf und sichern Sie sich professionelle Unterstützung für Ihr Zuhause im Burgenland.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection









