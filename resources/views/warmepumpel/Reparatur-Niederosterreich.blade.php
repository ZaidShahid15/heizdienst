@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpen Reparatur Niederösterreich | Service & Wartung';
    $metaDescription = 'Wärmepumpen Reparatur Niederösterreich vom Profi. Service, Wartung, Überprüfung & faire Preise in ganz NÖ und Wien. Schnelle Anfahrt & zuverlässige Techniker.';
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
        Wärmepumpen Reparatur Niederösterreich <br>
        <span style="color:#FB9A1B;">Service & Wartung vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Wärmepumpen Reparatur Niederösterreich für zuverlässigen Service, schnelle Hilfe bei Störungen und erfahrene Techniker in Ihrer Region.
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
            <a href="#service-noe" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Service NÖ</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#reparatur-wartung" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Reparatur & Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#moderne-systeme" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Moderne Systeme</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#installation-einbau" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Installation & Einbau</span>
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


  <!-- Wärmepumpen Service in Niederösterreich -->
  <section class="service-section" id="service-noe">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wärmepumpen Service in Niederösterreich</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. Unser Wärmepumpen Service in Niederösterreich betreut private Haushalte, Unternehmen und Gewerbebetriebe in der gesamten Region.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Flexibel im Einsatz</h3>
          <p>Ob in Wiener Neudorf, Wiener Neustadt, Tulln, Schwechat oder Gänserndorf – unsere Techniker sind flexibel im Einsatz und kümmern sich um Wartung, Reparatur und regelmäßige Überprüfung Ihrer Wärmepumpen.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Individuelle Haustechnik</h3>
          <p>Wir berücksichtigen individuelle Haustechnik, bestehende Heizsysteme und moderne Energie-Lösungen wie PV Anlagen, um die Leistung Ihrer Anlage zu steigern.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Qualität und schnelle Anfahrt</h3>
          <p>Auch in Wien und NÖ stehen wir als erfahrener Partner für Qualität, transparente Preise und rasche Anfahrt zur Verfügung.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Reparatur, Wartung und Überprüfung -->
  <section class="service-section service-section--soft" id="reparatur-wartung">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Reparatur, Wartung und Überprüfung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. 
          Eine regelmäßige Wartung und Überprüfung Ihrer Wärmepumpen ist entscheidend für einen sicheren Betrieb und eine konstante Wärmeversorgung. Unser Installateur-Team führt fachgerechte Reparatur-Arbeiten durch und behebt Probleme, Störungen oder ungewöhnliche Geräusche rasch und zuverlässig. Mit präziser Fehlerdiagnose erkennen wir Schäden frühzeitig und vermeiden größere Folgekosten. Die Reinigung von Komponenten, Kontrolle der Dichtheit und Überprüfung von Gas- sowie Wasser-Leitungen sichern die Funktion Ihrer Heizungsanlage. Unser Wärmepumpen Service deckt alle Arbeiten ab – von der kleinen Reparatur bis zur umfassenden Wartung. So bleibt Ihre Heizung effizient, leistungsstark und optimal auf Ihr Zuhause abgestimmt.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Schnelle Reparatur bei Störungen</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Regelmäßige Wartung und Reinigung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Notfall-Service im gesamten NÖ</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size2.webp') }}" alt="Wärmepumpen Reparatur" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Moderne Wärmepumpen und Heizsysteme -->
  <section class="service-section" id="moderne-systeme">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Wärmepumpen und Heizsysteme</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. Moderne Wärmepumpen bieten nachhaltige Lösungen für Heizung und Kühlung in Niederösterreich.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🌬️</div>
          <div>
            <h3>Luft Wasser Wärmepumpe Lösungen</h3>
            <p>Wir betreuen Luft Wasser Wärmepumpe Systeme für effizientes Heizen und Kühlen in Wohn- und Gewerbeobjekten.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">💧</div>
          <div>
            <h3>Wasserbasierte Heiztechnik</h3>
            <p>Eine Wasser Wasser Wärmepumpe nutzt Grundwasser für konstante Energie und hohe Effizienz im Betrieb.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">☀️</div>
          <div>
            <h3>Kombination mit PV Anlagen</h3>
            <p>In Kombination mit PV Anlagen entsteht ein besonders effizientes Gesamtsystem – wir beraten Sie zur optimalen Planung.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Integration bestehender Technik</h3>
            <p>Auch bestehende Heizgeräte und Haustechnik werden in das neue Konzept integriert, um maximale Effizienz sicherzustellen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Installation, Montage und Einbau -->
  <section class="service-section service-section--soft" id="installation-einbau">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Installation, Montage und Einbau</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. 
          Neben Reparatur und Wartung übernehmen wir auch Installation, Einbau und Montage neuer Wärmepumpen in Niederösterreich. Unsere Installateure planen jedes Projekt sorgfältig und stimmen die Umsetzung auf vorhandene Haustechnik, Heizsystem und individuelle Bedürfnisse ab. Eine präzise Planung reduziert spätere Probleme und steigert die Qualität der gesamten Anlage. Während der Arbeitszeit achten unsere Techniker auf saubere Abläufe und transparente Kommunikation. Ersatzteile werden bei Bedarf rasch beschafft, damit keine unnötigen Verzögerungen entstehen. Ob in Brunn am Gebirge, Groß Enzersdorf, Leobersdorf, Spillern oder Pillichsdorf – unser Unternehmen steht für Zuverlässigkeit und fachgerechte Umsetzung.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Sorgfältige Planung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Transparente Kommunikation</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Schnelle Ersatzteilbeschaffung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size9.webp') }}" alt="Wärmepumpen Installation" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise, Pauschalpreise und Qualität (dark style) -->
  <section class="service-section service-section--dark" id="preise">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Preise, Pauschalpreise und Qualität</h2>
        <p>Mehr zu unserem <a href="/">Serviceangebot</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. 
          Transparente Preise und faire Pauschalpreise sind ein zentraler Bestandteil unseres Wärmepumpen Service in Niederösterreich. Die Kosten für Reparatur, Wartung oder Überprüfung hängen von Anlage, Arbeitszeit und eventuellen Schäden ab. Vor Beginn erhalten Kunden einen klaren Überblick über alle Leistungen. Unser Unternehmen legt großen Wert auf Qualität, Zuverlässigkeit und nachhaltige Lösungen. Durch regelmäßige Wartung steigern wir die Effizienz Ihrer Wärmepumpen und reduzieren langfristig Energie- und Betriebskosten. Ob kleinere Reparatur, Austausch von Ersatzteilen oder umfassende Instandsetzung – wir stehen als erfahrener Partner in ganz NÖ zur Verfügung.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Angebot anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Unsere Preisvorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Faire Pauschalpreise</li>
            <li>Transparente Kostenaufstellung</li>
            <li>Keine versteckten Gebühren</li>
            <li>Langfristige Einsparungen</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Durch regelmäßige Wartung senken Sie Ihre Energiekosten und vermeiden teure Reparaturen.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Einsatzgebiet Niederösterreich und Wien -->
  <section class="service-section" id="einsatzgebiet">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Einsatzgebiet Niederösterreich und Wien</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. Unser Servicegebiet umfasst ganz Niederösterreich sowie angrenzende Regionen in Wien.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Bad Vöslau</span>
        <span class="service-chip">Wiener Neustadt</span>
        <span class="service-chip">Wiener Neudorf</span>
        <span class="service-chip">Gänserndorf</span>
        <span class="service-chip">Wolkersdorf</span>
        <span class="service-chip">Tulln</span>
        <span class="service-chip">Schwechat</span>
        <span class="service-chip">Laa</span>
        <span class="service-chip">Theresienfeld</span>
        <span class="service-chip">Groß Enzersdorf</span>
        <span class="service-chip">Spillern</span>
        <span class="service-chip">Pillichsdorf</span>
        <span class="service-chip">Thaya</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Dank kurzer Anfahrt gewährleisten wir schnelle Hilfe bei Störungen und Problemen. Unsere Techniker sind flexibel im Einsatz und kümmern sich zuverlässig um Wartung, Reparatur und Überprüfung Ihrer Wärmepumpen. Egal ob im privaten Zuhause oder im gewerblichen Betrieb – wir sorgen für sichere Funktion und konstante Wärme in der gesamten Region Niederösterreich.
        </p>
      </div>
    </div>
  </section>

  <!-- Warum unser Unternehmen in NÖ -->
  <section class="service-section service-section--soft" id="unternehmen">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Warum unser Unternehmen in NÖ</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. 
          Als erfahrenes Unternehmen im Bereich Haustechnik stehen wir für Qualität, Zuverlässigkeit und nachhaltige Technik. Unser Team aus Installateur, Kältetechniker und spezialisierten Technikern arbeitet eng zusammen, um optimale Lösungen für Wärmepumpen und Klimaanlagen zu bieten. Wir betreuen Heizungsanlage, Heizgeräte und komplette Systeme inklusive Gas-Anbindung. Unsere Beratung berücksichtigt Energieverbrauch, Effizienz und individuelle Anforderungen. Kunden profitieren von strukturierter Planung, professioneller Montage und fachgerechter Überprüfung. Durch kontinuierliche Reinigung, Funktionsprüfung und Kontrolle sichern wir den langfristigen Betrieb Ihrer Anlage und erhöhen deren Lebensdauer.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Erfahrenes Team</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Umfassende Betreuung</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Nachhaltige Technik</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size2.jpegs.webp') }}" alt="Unser Team" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpen Reparatur Niederösterreich</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Wartung-Burgenland') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Reparatur, Wartung und Service.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Wartung durchgeführt werden?</summary>
          <p>Eine jährliche Wartung inklusive Überprüfung und Reinigung ist empfehlenswert, um Effizienz, Funktion und Sicherheit der Wärmepumpen dauerhaft zu gewährleisten.</p>
        </details>
        <details>
          <summary>Was tun bei ungewöhnlichen Geräuschen oder Störungen?</summary>
          <p>Bei auffälligen Geräuschen oder Störungen sollte rasch ein Techniker kontaktiert werden, um Schäden und größere Reparatur-Kosten zu vermeiden.</p>
        </details>
        <details>
          <summary>Wird auch eine Funktionsprüfung durchgeführt?</summary>
          <p>Ja, jede Wartung beinhaltet eine umfassende Funktionsprüfung, Kontrolle der Dichtheit sowie Überprüfung aller relevanten Komponenten.</p>
        </details>
        <details>
          <summary>Sind auch Gas- oder Hybrid-Systeme möglich?</summary>
          <p>Wir betreuen auch Anlagen mit Gas-Unterstützung und kombinierte Systeme innerhalb moderner Haustechnik-Konzepte.</p>
        </details>
        <details>
          <summary>Wie schnell ist eine Anfahrt in Niederösterreich?</summary>
          <p>Dank regionaler Struktur sind wir in ganz Niederösterreich mit kurzer Anfahrt für unsere Kunden verfügbar.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Termin vereinbaren und Kontakt aufnehmen',
    'text' => 'Sie benötigen eine Wärmepumpen Reparatur Niederösterreich oder möchten eine Wartung planen? Kontaktieren Sie uns über unsere Seite und vereinbaren Sie einen Termin. Unser Team steht Ihnen für Beratung, Überprüfung, Reparatur oder Installation zur Verfügung. Wir unterstützen Sie bei allen Fragen rund um Wärmepumpen, Heizsystem, Kühlung und effiziente Energie-Nutzung. Ob in NÖ oder Wien – wir sorgen für professionelle Betreuung, transparente Preise und zuverlässigen Service für Ihr Zuhause oder Unternehmen.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection









