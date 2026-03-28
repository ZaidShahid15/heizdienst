@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpe Wartung Niederösterreich | Service & Werkskundendienst';
    $metaDescription = 'Professionelle Wärmepumpe Wartung Niederösterreich mit Werkskundendienst. Service, Reparatur, Installation & Förderung in Wien Niederösterreich und Burgenland. Jetzt Termin sichern.';
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
        Wärmepumpe Wartung Niederösterreich <br>
        <span style="color:#FB9A1B;">Service & Werkskundendienst vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professioneller Service für Wärmepumpe Wartung Niederösterreich mit Fokus auf Sicherheit, Effizienz, Qualität und langfristigen Werterhalt Ihrer Heizungsanlage.
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
            <a href="#sicherheit" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Sicherheit</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#vorteile" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Vorteile</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#werkskundendienst" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Werkskundendienst</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#anlagenart" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Anlagenart</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#regional" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Regional</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kosten-foerderung" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Kosten & Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#techniker" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Techniker</span>
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


  <!-- Fachgerechte Wartung für maximale Sicherheit -->
  <section class="service-section" id="sicherheit">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Fachgerechte Wartung für maximale Sicherheit</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Eine regelmäßige Wärmepumpe Wartung Niederösterreich ist entscheidend, um Heizung, Kühlung und Warmwasserbetrieb dauerhaft stabil zu halten.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Erfahrene Techniker</h3>
          <p>Unsere erfahrenen Techniker und Servicetechniker prüfen sämtliche Komponenten Ihrer Heizungsanlage sorgfältig und gewährleisten höchste Sicherheit im Betrieb.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Werkskundendienst</h3>
          <p>Durch strukturierten Werkskundendienst, professionelle Reparatur und gezielte Kontrolle bleiben Anlagen in Wien Niederösterreich sowie im Burgenland effizient und zuverlässig.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Alle Systeme</h3>
          <p>Ob Außengerät, Klimaanlage oder kombinierte Systeme mit Gas oder Öl – wir betreuen Privatkunden und Unternehmen gleichermaßen.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Vorteile moderner Heiztechnik Betreuung -->
  <section class="service-section service-section--soft" id="vorteile">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Vorteile moderner Heiztechnik Betreuung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Professionelle Wartung und Service sichern langfristige Funktion, Energieeffizienz und Wohnkomfort.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Mehr Effizienz beim Heizen</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Schutz vor Störungen und Reparatur</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Nachhaltigkeit und Umweltbewusstsein</div>
          </div>
        </div>

        <p style="margin-top: 20px;">
          Durch regelmäßige Wartung, Kontrolle und Anpassung arbeitet Ihre Wärmepumpe effizienter und sorgt für konstante Wärme im Zuhause. Frühzeitige Überprüfung reduziert Störungen, verhindert größere Reparatur und erhöht die Sicherheit Ihrer Heizungsanlage deutlich. Optimierte Heiztechnik verbessert Energieeffizienz, reduziert Emissionen und unterstützt Umwelt sowie nachhaltiges Heizen in Österreich.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size4.webp') }}" alt="Vorteile Wärmepumpen Wartung" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Unser Werkskundendienst im Einsatz -->
  <section class="service-section" id="werkskundendienst">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Unser Werkskundendienst im Einsatz</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Unser Werkskundendienst übernimmt sämtliche Serviceleistungen rund um Wärmepumpe, Klimaanlagen und Heiztechnik im gesamten Bereich Wien Niederösterreich und angrenzendem Burgenland.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Installation & Inbetriebnahme</h3>
            <p>Von Installation, Einbau und Inbetriebnahme bis zur laufenden Wartung stehen unsere Techniker und Kältetechniker für höchste Qualität.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔄</div>
          <div>
            <h3>Reparatur & Ersatzteile</h3>
            <p>Reparatur, Austausch von Ersatzteilen und detaillierte Kontrolle aller Komponenten gehören zu unserem Leistungsspektrum.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">❄️</div>
          <div>
            <h3>Außengerät & Klimaanlagen</h3>
            <p>Ob Außengerät, Klimaanlage oder komplexe Anlagen – wir kümmern uns um jedes Detail.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🤝</div>
          <div>
            <h3>Partner & Kundendienst</h3>
            <p>Unsere Partner im Bereich Klimatechnik und Heiztechnik garantieren professionelle Betreuung, zuverlässigen Kundendienst und persönliche Beratung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Service für jede Anlagen Art -->
  <section class="service-section service-section--soft" id="anlagenart">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Service für jede Anlagen Art</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unterschiedliche Systeme erfordern individuelle Betreuung und präzise technische Umsetzung.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Wärmepumpe mit Außengerät</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Kombination mit Klimaanlagen</div>
          </div>
        </div>

        <p style="margin-top: 20px;">
          Beim Außengerät stehen Kontrolle, Reinigung und sichere Montage im Fokus, um Heizen und Kühlen effizient zu gewährleisten. Bei integrierter Klimaanlage prüfen unsere Techniker Kühlung, Luftführung und Komponenten für optimale Leistung und Wohnkomfort.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size5.webp') }}" alt="Wärmepumpe mit Außengerät" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Regionaler Service in Niederösterreich (dark style) -->
  <section class="service-section service-section--dark" id="regional">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Regionaler Service in Niederösterreich</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unser Service für Wärmepumpe Wartung Niederösterreich erstreckt sich über Wiener Neudorf, Brunn am Gebirge, Wiener Neustadt, Bad Vöslau, Leobersdorf, Schwechat, Tulln, Spillern, Thaya, Laa, Wolkersdorf, Groß Enzersdorf, Pillichsdorf und Theresienfeld. Auch Kunden in Wien und im Burgenland profitieren von unserem schnellen Kundendienst. Durch regionale Nähe sind unsere Techniker rasch vor Ort und gewährleisten zuverlässige Betreuung. Privatkunden erhalten professionelle Beratung, sichere Installation und nachhaltige Lösung für ihr Zuhause. Mit Erfahrung, eingespieltem Team und starkem Partner-Netzwerk stehen wir für Qualität, Zuverlässigkeit und langfristige Sicherheit Ihrer Heizungsanlage.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Unsere Einsatzorte</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Wiener Neudorf</li>
            <li>Brunn am Gebirge</li>
            <li>Wiener Neustadt</li>
            <li>Bad Vöslau</li>
            <li>Leobersdorf</li>
            <li>Schwechat, Tulln, Spillern</li>
            <li>Wien & Burgenland</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Wir sind für Sie in ganz Niederösterreich, Wien und dem Burgenland da.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Transparente Kosten und Förderung nutzen -->
  <section class="service-section" id="kosten-foerderung">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Transparente Kosten und Förderung nutzen</h2>
        <p>Mehr zu unserem <a href="/">Serviceangebot</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Die Kosten für eine professionelle Wartung oder Reparatur Ihrer Wärmepumpe in Niederösterreich hängen vom Zustand der Heizungsanlage, dem Umfang der Serviceleistungen und dem benötigten Einbau- oder Montageaufwand ab. Durch regelmäßige Wartung lassen sich größere Reparatur vermeiden und langfristig Geld sparen. Unsere Beratung informiert umfassend zu aktueller Förderung in Wien Niederösterreich sowie möglichen Programmen in Österreich und im Burgenland. Eine fachgerechte Installation und Inbetriebnahme sichern zudem Garantieansprüche und erhöhen die Lebensdauer der Anlagen. Ob Gas, Öl oder moderne Heiztechnik – wir zeigen Ihnen eine wirtschaftliche Lösung, die Effizienz, Sicherheit und Umwelt gleichermaßen berücksichtigt.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Faire Preise</h3>
          <p>Klare und transparente Kostenaufstellung – keine versteckten Gebühren. Sie wissen immer, was Sie erwartet.</p>
        </div>
        <div class="service-pricecard">
          <h3>Förderberatung</h3>
          <p>Wir informieren Sie über aktuelle Förderprogramme in Niederösterreich, Wien und dem Burgenland und unterstützen bei der Antragstellung.</p>
        </div>
        <div class="service-pricecard">
          <h3>Langfristig sparen</h3>
          <p>Regelmäßige Wartung vermeidet teure Reparaturen und sorgt für niedrige Energiekosten – eine Investition, die sich rechnet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Betreuung durch erfahrene Techniker Hände -->
  <section class="service-section service-section--soft" id="techniker">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Betreuung durch erfahrene Techniker Hände</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unsere Techniker arbeiten mit Erfahrung, Präzision und Verantwortung. Jede Wärmepumpe befindet sich bei uns in kompetenten Händen – vom ersten Einbau bis zur laufenden Wartung. Unser Team aus Servicetechniker, Installateur und Kältetechniker übernimmt Kundendienst, Reparatur und Kontrolle aller Komponenten. Dabei legen wir Wert auf Qualität, Sicherheit und nachhaltige Heiztechnik. Durch kontinuierliche Betreuung gewährleisten wir zuverlässigen Betrieb, stabile Kühlung und effizientes Heizen im Zuhause unserer Kunden. Als regionaler Partner für Wien Niederösterreich, Wien und das Burgenland stehen wir für Zuverlässigkeit, professionelle Leistungen und langfristige Zusammenarbeit.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Erfahrene Servicetechniker</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Zertifizierte Kältetechniker</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Persönliche Betreuung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size3.jpegs.webp') }}" alt="Erfahrene Techniker" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpe Wartung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Wartung, Service und Förderung.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Wartung notwendig?</summary>
          <p>Eine jährliche Wartung wird empfohlen, um Heizungsanlage, Außengerät und Klimaanlage dauerhaft sicher und effizient zu betreiben.</p>
        </details>

        <details>
          <summary>Übernimmt der Werkskundendienst auch Reparatur?</summary>
          <p>Ja, unser Werkskundendienst führt Reparatur, Austausch von Ersatzteilen und umfassenden Kundendienst im gesamten Bereich Niederösterreich und Wien durch.</p>
        </details>

        <details>
          <summary>Gibt es Förderung für Heiztechnik in Österreich?</summary>
          <p>Je nach Thema und Anlage sind Förderprogramme in Wien Niederösterreich, Österreich oder Burgenland möglich. Unsere Beratung informiert im Detail.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Privatkunden?</summary>
          <p>Ja, wir betreuen Privatkunden sowie Unternehmen und sorgen für zuverlässige Lösung rund um Heizen, Kühlen und Wohnkomfort.</p>
        </details>

        <details>
          <summary>Wird auch Installation und Inbetriebnahme angeboten?</summary>
          <p>Unsere Leistungen umfassen Installation, Einbau, Montage und fachgerechte Inbetriebnahme sämtlicher Anlagen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Service Termin vereinbaren',
    'text' => 'Sie suchen einen erfahrenen Partner für Wärmepumpe Wartung Niederösterreich? Unser Team steht für professionelle Serviceleistungen, schnelle Betreuung und höchste Qualität. Kontaktieren Sie uns für persönliche Beratung, transparente Kosten und zuverlässigen Kundendienst in Wien Niederösterreich, Wien, Burgenland und ganz Österreich. Sorgen Sie jetzt für langfristige Sicherheit, effiziente Heiztechnik und nachhaltigen Wohnkomfort in Ihrem Zuhause.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection









