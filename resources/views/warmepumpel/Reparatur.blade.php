@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpen Reparatur Wien | Service, Wartung & Notdienst';
    $metaDescription = 'Wärmepumpen Reparatur Wien vom Fachbetrieb. Reparatur, Wartung, Notdienst, faire Preise & schnelle Termine in Wien und Niederösterreich.';
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
        Wärmepumpen Reparatur Wien <br>
        <span style="color:#FB9A1B;">Service, Wartung & Notdienst vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Wärmepumpen Reparatur Wien für schnelle Hilfe bei Störungen, effizientem Betrieb, zuverlässigem Service und erfahrenen Technikern vor Ort.
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
            <a href="#service-ueberblick" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Service</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#reparatur-wartung" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Reparatur & Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#systeme" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Heizlösungen</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#installation" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Installation</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kosten-foerderung" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Kosten & Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#umgebung" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Servicegebiet</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#fachbetrieb" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Fachbetrieb</span>
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


  <!-- Service Überblick -->
  <section class="service-section" id="service-ueberblick">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Zuverlässiger Wärmepumpen Service in Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. Unser wärmepumpen service in Wien richtet sich an private und gewerbliche Kunden, die eine zuverlässige Lösung für ihre wärmepumpe suchen.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Alle Anlagen – ein Service</h3>
          <p>Wir betreuen unterschiedliche Anlagen im gesamten Ort und auch in Niederösterreich. Ob kleine Reparaturen oder umfangreiche Reparaturen an der gesamten Anlage – unser Service deckt alles ab.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Regelmäßige Wartung</h3>
          <p>Durch regelmäßige Wartung sichern wir den stabilen Betrieb, reduzieren Fehler und verlängern die Lebensdauer Ihrer Heizung.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Technische Beratung</h3>
          <p>Unsere Techniker übernehmen Beratung, Überprüfung und fachgerechte Einstellungen, damit Ihr Heizsystem effizient arbeitet.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Reparatur, Wartung und Inspektion -->
  <section class="service-section service-section--soft" id="reparatur-wartung">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Reparatur, Wartung und Inspektion</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. 
          Eine fachgerechte Reparatur Wartung ist entscheidend, um Störungen frühzeitig zu erkennen und größere Schäden zu vermeiden. Unser Kundendienst in Wien führt Inspektion, Überprüfung und gezielte Reparaturen an Ihrer Wärmepumpe durch. Fehler an Komponenten, falsche Einstellungen oder Verschleiß werden systematisch behoben. Regelmäßige Wartung verbessert die Energieeffizienz, senkt Energiekosten und erhöht die Sicherheit im laufenden Betrieb. Als Fachbetrieb arbeiten wir transparent, erklären alle Schritte und beraten Sie zu sinnvollen Maßnahmen. Unser Service umfasst alles von kleinen Korrekturen bis zu komplexen Reparaturen, damit Ihre Anlage langfristig zuverlässig funktioniert.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Wärmepumpen Reparaturen</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Regelmäßige Wartung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Notdienst in Wien</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size2.jpeg') }}" alt="Wärmepumpen Reparatur Wien" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Moderne Heizlösungen und Systeme -->
  <section class="service-section" id="systeme">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Heizlösungen und Systeme</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. Moderne Wärmepumpensysteme bieten effiziente Heizlösungen für unterschiedliche Umgebungen in Wien und Niederösterreich.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🌬️</div>
          <div>
            <h3>Luft- und Wasserlösungen</h3>
            <p>Wir warten und reparieren Systeme mit Umgebungsluft oder Wasser und sichern konstante Wärme bei hoher Effizienz.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">💧</div>
          <div>
            <h3>Wasser Wasser Wärmepumpe</h3>
            <p>Professionelle Betreuung für Anlagen, die Grundwasser als Energiequelle nutzen – zuverlässig und leistungsstark.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🌍</div>
          <div>
            <h3>Alternative Heizenergie</h3>
            <p>Wärmepumpen nutzen moderne Heizenergie und reduzieren Abhängigkeiten von Gas, Öl und anderen klassischen Brennstoffen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Hybridsysteme</h3>
            <p>Kombinierte Systeme mit Gas oder Öl als Ergänzung – wir warten und optimieren Ihr gesamtes Heizsystem.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Installation, Montage und Inbetriebnahme -->
  <section class="service-section service-section--soft" id="installation">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Installation, Montage und Inbetriebnahme</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. 
          Neben Reparaturen übernehmen wir auch Installation, Montage und Inbetriebnahme neuer Anlagen. Unser Team aus erfahrenen Technikern, Installateuren und Mitarbeitern plant jede Umsetzung sorgfältig. Dabei berücksichtigen wir Planung, Gegebenheiten vor Ort und die gewünschte Leistung der Wärmepumpe. Eine fachgerechte Montage ist entscheidend für den späteren Betrieb, die Effizienz und die Lebensdauer des Geräts. Nach der Inbetriebnahme prüfen wir alle Einstellungen, erklären die Bedienung und stehen für weitere Unterstützung zur Verfügung. So erhalten Kunden in Wien eine ganzheitliche Lösung aus einer Hand.
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

  <!-- Kosten, Preise und Förderung -->
  <section class="service-section" id="kosten-foerderung">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten, Preise und Förderung</h2>
        <p>Mehr zu unserem <a href="/">Thermenwartung Wien</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. 
          Die Kosten für eine Wärmepumpen Reparatur in Wien hängen vom Gerät, dem Fehler und dem Umfang der Arbeiten ab. Wir erstellen ein transparentes Angebot, das Reparaturen, Service oder notwendige Komponenten klar aufschlüsselt. Faire Preise, nachvollziehbare Leistungen und keine versteckten Kosten stehen bei uns im Fokus. Zusätzlich informieren wir Sie über mögliche Förderung und staatliche Beiträge, die bei Reparatur, Wartung oder Heizungstausch zur Verfügung stehen. Eine fachkundige Beratung hilft dabei, Energiekosten zu senken und die Energieeffizienz Ihrer Anlage langfristig zu verbessern. So behalten Sie Kosten, Betrieb und Nutzen jederzeit im Blick.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Preise</h3>
          <p>Klare Aufstellung aller Kosten – keine versteckten Gebühren. Sie wissen vorab, was auf Sie zukommt.</p>
        </div>
        <div class="service-pricecard">
          <h3>Individuelles Angebot</h3>
          <p>Maßgeschneiderte Lösung für Ihre Reparatur oder Wartung – exakt auf Ihren Bedarf abgestimmt.</p>
        </div>
        <div class="service-pricecard">
          <h3>Förderung nutzen</h3>
          <p>Wir beraten Sie zu möglichen Förderungen und unterstützen bei der Antragstellung, um Ihre Kosten zu senken.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Servicegebiet Wien und Umgebung (dark style) -->
  <section class="service-section service-section--dark" id="umgebung">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Servicegebiet Wien und Umgebung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. 
          Unser Service ist in ganz Wien sowie in Niederösterreich verfügbar. Wir betreuen zahlreiche Orte und reagieren schnell auf Anfragen aus der Umgebung. Dank effizienter Terminvergabe sind unsere Techniker zeitnah bei Kunden vor Ort. Ob Innenstadt, Stadtrand oder angrenzende Regionen – wir sorgen dafür, dass Ihre Wärmepumpe zuverlässig funktioniert. Unser Service richtet sich an private Haushalte und Betriebe, die Wert auf Qualität, Verfügbarkeit und persönliche Betreuung legen. Kurze Wege, schnelle Unterstützung und ein klarer Ansprechpartner machen unseren Kundendienst besonders effizient.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Wien & Niederösterreich</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Wien (alle Bezirke)</li>
            <li>Niederösterreich</li>
            <li>Umgebung Wien</li>
            <li>Schnelle Anfahrt</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Wir sind in Wien und Niederösterreich aktiv und bieten flächendeckenden Service für Reparatur, Wartung und Notdienst.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum unser Fachbetrieb -->
  <section class="service-section" id="fachbetrieb">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Warum unser Fachbetrieb</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. Als erfahrener Fachbetrieb verbinden wir technisches Know-how mit persönlicher Betreuung.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Erfahrenes Team</h3>
          <p>Unser Team aus Experten, Technikern und Fachleuten für Haustechnik arbeitet eng zusammen, um optimale Lösungen zu liefern.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Starke Partner</h3>
          <p>Wir kooperieren mit starken Partnern und bieten umfassende Dienstleistungen rund um Wärmepumpen, Klimaanlagen und Badsanierung.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Klarer Ansprechpartner</h3>
          <p>Kunden profitieren von klaren Abläufen, kompetenter Unterstützung und einem zuverlässigen Ansprechpartner für alle Fragen.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpen Reparatur Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Reparatur, Wartung und Service.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie schnell ist eine Terminvergabe möglich?</summary>
          <p>In vielen Fällen bieten wir kurzfristige Termine an. Bei Notdienst-Anfragen reagieren wir besonders schnell.</p>
        </details>

        <details>
          <summary>Welche Wärmepumpen Geräte werden repariert?</summary>
          <p>Wir betreuen unterschiedliche Geräte, Anlagen und Wärmepumpensysteme, unabhängig vom Hersteller.</p>
        </details>

        <details>
          <summary>Was tun bei akuten Störungen?</summary>
          <p>Bei Störungen empfehlen wir, den Betrieb zu stoppen und unseren Notdienst zu kontaktieren.</p>
        </details>

        <details>
          <summary>Gibt es Förderungen für Reparatur oder Wartung?</summary>
          <p>Ja, je nach Situation stehen Förderungen oder Beiträge zur Verfügung. Wir geben Ihnen alle relevanten Informationen.</p>
        </details>

        <details>
          <summary>Wird auch eine Inspektion durchgeführt?</summary>
          <p>Ja, Inspektion und Überprüfung sind fester Bestandteil unseres Service, um Fehler frühzeitig zu erkennen.</p>
        </details>

        <details>
          <summary>Wie kann ich einen Termin vereinbaren?</summary>
          <p>Nutzen Sie unser Kontaktformular oder rufen Sie uns einfach an – wir kümmern uns umgehend um Ihr Anliegen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Termin vereinbaren und Kontakt',
    'text' => 'Sie möchten einen Termin für Wärmepumpen Reparatur Wien vereinbaren oder benötigen Beratung? Nutzen Sie unsere Seite für eine schnelle Terminvergabe oder nehmen Sie direkt Kontakt mit uns auf. Wir unterstützen Sie bei Reparaturen, Wartung, Inspektion und allen Fragen rund um Ihre Anlage. Gerne informieren wir Sie zu Preisen, Förderung und passenden Lösungen für Ihr Zuhause. Kontaktieren Sie uns telefonisch oder über unsere E-Mail Adresse – wir stehen Ihnen zuverlässig zur Verfügung.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection







