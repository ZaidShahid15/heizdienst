@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpe Installation Burgenland | Förderung & Komplettpaket';
    $metaDescription = 'Wärmepumpe Installation Burgenland: Heizungstausch von Öl und Gas, Förderung, Beratung und Service. Jetzt Termin sichern und Heizkosten senken.';
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
        Wärmepumpe Installation Burgenland <br>
        <span style="color:#FB9A1B;">Förderung & Komplettpaket vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Moderne Wärmepumpe Lösungen für effizientes Heizen im Burgenland mit Beratung, Förderung und Komplettpaket vom Installateur.
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
            <a href="#effiziente-heizung" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Effiziente Heizung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#planung-installation" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Planung & Installation</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#systeme-ueberblick" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Systeme</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#foerderung" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kosten-vorteile" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Kosten</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#service-wartung" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Service & Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#regionen" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Regionen</span>
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


  <!-- Effiziente Heizung im Burgenland -->
  <section class="service-section" id="effiziente-heizung">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Effiziente Heizung im Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. Eine Wärmepumpe ist im Burgenland eine nachhaltige Alternative zu Öl und Gas. Immer mehr Haushalte setzen beim Umstieg auf moderne Heiztechnik, um Heizkosten dauerhaft zu senken und unabhängiger von fossilen Energieträger zu werden.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Zukunftssichere Lösung</h3>
          <p>Gerade bei einem Heizungstausch oder einer Neuinstallation im Haus bietet dieses Heizsystem eine zukunftssichere Lösung. Die Kombination aus Heizen und optionalem Kühlen verbessert das Klima im Zuhause und steigert das Wohlbefinden.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Innovative Technologien</h3>
          <p>Durch innovative Technologien wird Energie effizient genutzt und in angenehme Wärme umgewandelt. Ob im Nordburgenland, in Eisenstadt oder Mattersburg – im gesamten Burgenland gewinnt diese Form der Heizung zunehmend an Bedeutung.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Nachhaltigkeit & Unabhängigkeit</h3>
          <p>Die Wärmepumpe reduziert die Abhängigkeit von fossilen Brennstoffen und leistet einen aktiven Beitrag zum Umweltschutz – bei gleichzeitig stabilen Heizkosten.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Planung und Installation vom Installateur -->
  <section class="service-section service-section--soft" id="planung-installation">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Planung und Installation vom Installateur</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Eine professionelle Planung bildet die Basis jeder Wärmepumpe Installation Burgenland. Ein erfahrener Installateur prüft Haus, Ort, Haustechnik und individuelle Voraussetzungen, um das passende Heizsystem zu bestimmen. Von der Auswahl der Anlage bis zur fachgerechten Montage erfolgen alle Arbeiten aus einer Hand. Nach der Installation wird die Inbetriebnahme durchgeführt und alle Einstellungen exakt angepasst. So ist ein effizienter Betrieb gewährleistet. Ob Neuinstallation im Neubau oder Umstieg von einer bestehenden Gasheizung – eine sorgfältige Planung sichert Qualität und lange Lebensdauer. Auch Details wie Anschluss an bestehende Heizungsanlagen oder Kombination mit Photovoltaikanlagen werden berücksichtigt.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Individuelle Planung und Beratung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Fachgerechte Montage und Installation</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Sichere Inbetriebnahme der Anlage</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size6.jpeg') }}" alt="Wärmepumpen Planung" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Wärmepumpen Systeme im Überblick -->
  <section class="service-section" id="systeme-ueberblick">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpen Systeme im Überblick</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. Je nach Standort und Voraussetzungen stehen im Burgenland unterschiedliche Wärmepumpe Systeme zur Verfügung.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Luft Wasser Wärmepumpe</h3>
          <p>Die Luft Wasser Wärmepumpe überzeugt durch einfache Installation, flexible Einsatzmöglichkeiten und niedrige Heizkosten im Vergleich zu Öl und Gasheizung. Ideal für viele Haushalte.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Erdwärmepumpe</h3>
          <p>Eine Erdwärmepumpe nutzt konstante Temperaturen im Erdreich und bietet hohe Effizienz sowie stabile Wärmeleistung über viele Jahre.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Grundwasser-Wärmepumpe</h3>
          <p>Wärmepumpen mit Wasser als Energiequelle arbeiten besonders konstant und ermöglichen effizientes Heizen bei geeigneten Voraussetzungen.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Förderung und Heizungsförderung Burgenland -->
  <section class="service-section service-section--soft" id="foerderung">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Förderung und Heizungsförderung Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Im Burgenland stehen umfangreiche Förderungen für den Umstieg auf eine moderne Wärmepumpe zur Verfügung. Die Landesförderung sowie die Bundesförderung unterstützen Haushalte beim Heizungstausch von Öl und Gas auf nachhaltige Heiztechnik. Besonders beim Ersatz einer alten Gasheizung oder von Öl und Gas Heizungsanlagen ist eine attraktive Heizungsförderung möglich. Die Höhe der Förderung hängt von Anlage, Voraussetzungen und Art der Installation ab. Eine professionelle Förderabwicklung übernimmt alle notwendigen Schritte – von der Antragstellung bis zur Einreichung aller Details. So erhalten Haushalte im Burgenland einen wichtigen Beitrag zu ihrem Vorhaben und reduzieren die Kosten für Neuinstallation oder Umstieg deutlich.
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
            <div class="service-stat__label">Professionelle Förderabwicklung</div>
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

  <!-- Kosten und wirtschaftliche Vorteile -->
  <section class="service-section" id="kosten-vorteile">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten und wirtschaftliche Vorteile</h2>
        <p>Mehr zu unserem <a href="/">Serviceangebot</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Die Kosten einer Wärmepumpe im Burgenland variieren je nach Haus, Heizsystem und technischer Auswahl. Faktoren wie Montage, Anlage, Planung und bestehende Heizungsanlagen beeinflussen den Gesamtpreis. Trotz Investition profitieren Haushalte von dauerhaft geringeren Heizkosten und höherer Unabhängigkeit von Öl und Gas. Der Umstieg auf moderne Heiztechnik steigert nicht nur den Wert der Immobilie, sondern reduziert auch langfristige Betriebskosten. In Kombination mit Photovoltaikanlagen lässt sich Strom effizient nutzen, wodurch zusätzliche Einsparungen möglich sind. Diese nachhaltige Lösung bietet klare Vorteile gegenüber fossilen Energieträger und schafft Planungssicherheit für viele Jahre.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Transparente Kosten</h3>
          <p>Klare Aufstellung aller Positionen – von der Planung über die Montage bis zur Inbetriebnahme. Keine versteckten Gebühren.</p>
        </div>
        <div class="service-pricecard">
          <h3>Wirtschaftlicher Wert</h3>
          <p>Die Wärmepumpe steigert den Wert Ihrer Immobilie und senkt langfristig die Energiekosten durch hohe Effizienz.</p>
        </div>
        <div class="service-pricecard">
          <h3>Förderungen nutzen</h3>
          <p>Wir beraten Sie zu allen verfügbaren Landes- und Bundesförderungen und unterstützen bei der Antragstellung.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Service, Wartung und Betrieb (dark style) -->
  <section class="service-section service-section--dark" id="service-wartung">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Service, Wartung und Betrieb</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Ein zuverlässiger Service sichert die langfristige Leistungsfähigkeit jeder Wärmepumpe im Burgenland. Regelmäßige Wartung erhöht die Lebensdauer der Anlage und sorgt für einen stabilen Betrieb. Erfahrene Installateur Partner stehen als Ansprechpartner für Haushalte und Gewerbeobjekte zur Verfügung und kümmern sich um alle Details. Auch nach der Installation begleiten Experten das Projekt mit persönlicher Beratung und schneller Terminvergabe. Ob Einstellungen optimieren, kleinere Arbeiten durchführen oder Fragen zur Heiztechnik klären – ein professionelles Komplettpaket garantiert Qualität aus einer Hand und nachhaltige Lösungen für jedes Zuhause.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Unsere Serviceleistungen</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Regelmäßige Wartung und Kontrolle</li>
            <li>Persönlicher Service vor Ort</li>
            <li>Schnelle Terminvergabe</li>
            <li>Optimierung der Einstellungen</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Durch fachgerechte Wartung bleibt die Wärmepumpe effizient und reduziert Ausfälle.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Wärmepumpe im Burgenland Umgebung -->
  <section class="service-section" id="regionen">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpe im Burgenland Umgebung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. Ob im Nordburgenland, in Eisenstadt oder Mattersburg – im gesamten Burgenland steigt die Nachfrage nach moderner Heiztechnik.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Eisenstadt</span>
        <span class="service-chip">Mattersburg</span>
        <span class="service-chip">Oberwart</span>
        <span class="service-chip">Neusiedl am See</span>
        <span class="service-chip">Jennersdorf</span>
        <span class="service-chip">Güssing</span>
        <span class="service-chip">Nordburgenland</span>
        <span class="service-chip">Nähe Wien</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Auch die Nähe zu Wien beeinflusst viele Vorhaben rund um Neuinstallation und Heizungstausch. Unterschiedliche Voraussetzungen je nach Ort, Gebäude und Umgebung erfordern individuelle Planung. Moderne Wärmepumpe Systeme bieten sowohl für private Haushalte als auch für Gewerbeobjekte passende Lösungen. Durch nachhaltige Energiegewinnung, effizientes Heizen und optionales Kühlen entsteht ein angenehmes Klima im Haus und langfristige Sicherheit bei steigenden Energiekosten.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpe im Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Reparatur-Niederosterreich') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Installation, Förderung und Betrieb.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Welche Förderung erhalte ich im Burgenland?</summary>
          <p>Die Landesförderung und Bundesförderung bieten attraktive Unterstützung beim Umstieg von Öl und Gas auf eine Wärmepumpe, abhängig von Voraussetzungen und Anlage.</p>
        </details>
        <details>
          <summary>Ist eine Wärmepumpe besser als eine Gasheizung?</summary>
          <p>Ja, eine Wärmepumpe reduziert Heizkosten, steigert Unabhängigkeit und nutzt nachhaltige Energieträger statt fossilem Gas.</p>
        </details>
        <details>
          <summary>Wie lange dauert die Installation?</summary>
          <p>Planung, Montage und Inbetriebnahme dauern meist wenige Tage, abhängig von Haus, Heizsystem und technischen Details.</p>
        </details>
        <details>
          <summary>Kann ich mit der Wärmepumpe auch kühlen?</summary>
          <p>Viele moderne Systeme ermöglichen neben dem Heizen auch Kühlen und ersetzen teilweise klassische Klimaanlagen.</p>
        </details>
        <details>
          <summary>Wie hoch sind die laufenden Kosten?</summary>
          <p>Durch effiziente Nutzung von Energie bleiben die Betriebskosten langfristig stabil und niedriger als bei Öl und Gasheizung.</p>
        </details>
        <details>
          <summary>Ist ein Umstieg im Altbau sinnvoll?</summary>
          <p>Auch im Altbau ist ein Umstieg möglich, wenn technische Voraussetzungen geprüft und angepasst werden.</p>
        </details>
        <details>
          <summary>Wer übernimmt die Förderabwicklung?</summary>
          <p>Ein erfahrener Installateur im Burgenland kümmert sich um die komplette Förderabwicklung inklusive aller Informationen und Einreichungen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Beratung und Komplettpaket Burgenland',
    'text' => 'Eine professionelle Beratung bildet den ersten Schritt zur passenden Wärmepumpe Installation Burgenland. Gemeinsam werden Haus, Heizsystem, Wünsche und Budget analysiert, um eine individuelle Lösung zu entwickeln. Das Komplettpaket umfasst Planung, Installation, Förderabwicklung, Wartung und langfristigen Service. Von der ersten Anfrage bis zur finalen Inbetriebnahme steht ein Experte als Ansprechpartner zur Verfügung. So erhalten Haushalte im Burgenland eine nachhaltige Heizlösung, die Effizienz, Qualität und Komfort vereint.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection









