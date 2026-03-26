@extends('layout.app')

@php
    $metaTitle = 'WÃ¤rmepumpe Wartung NiederÃ¶sterreich | Service & Werkskundendienst';
    $metaDescription = 'Professionelle WÃ¤rmepumpe Wartung NiederÃ¶sterreich mit Werkskundendienst. Service, Reparatur, Installation & FÃ¶rderung in Wien NiederÃ¶sterreich und Burgenland. Jetzt Termin sichern.';
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
     âœ… TOC like screenshot
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
   MOBILE HERO â€“ EXACT LIKE SCREENSHOT
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
        WÃ¤rmepumpe Wartung NiederÃ¶sterreich <br>
        <span style="color:#FB9A1B;">Service & Werkskundendienst vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professioneller Service fÃ¼r WÃ¤rmepumpe Wartung NiederÃ¶sterreich mit Fokus auf Sicherheit, Effizienz, QualitÃ¤t und langfristigen Werterhalt Ihrer Heizungsanlage.
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
            GeprÃ¼fte Experten
          </div>
          <div>
            <i class="bi bi-shield-check text-warning"></i>
            100% Zufrieden
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- âœ… TOC EXACT LIKE IMAGE -->
<section class="toc-wrap" aria-label="Inhaltsverzeichnis">
  <div class="service-container">
    <!-- âœ… collapsed by default -->
    <div class="toc-card is-collapsed" id="tocCard">

      <!-- âœ… aria-expanded false by default -->
      <div class="toc-head"
           id="tocHead"
           role="button"
           tabindex="0"
           aria-controls="tocBody"
           aria-expanded="false">

        <h4 id="tocTitle">Inhaltsverzeichnis</h4>

        <div class="toc-actions">
          <!-- âœ… aria-expanded false by default -->
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
              <span class="toc-badge">06</span><span class="toc-text">Kosten & FÃ¶rderung</span>
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


  <!-- Fachgerechte Wartung fÃ¼r maximale Sicherheit -->
  <section class="service-section" id="sicherheit">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Fachgerechte Wartung fÃ¼r maximale Sicherheit</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Eine regelmÃ¤ÃŸige WÃ¤rmepumpe Wartung NiederÃ¶sterreich ist entscheidend, um Heizung, KÃ¼hlung und Warmwasserbetrieb dauerhaft stabil zu halten.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Erfahrene Techniker</h3>
          <p>Unsere erfahrenen Techniker und Servicetechniker prÃ¼fen sÃ¤mtliche Komponenten Ihrer Heizungsanlage sorgfÃ¤ltig und gewÃ¤hrleisten hÃ¶chste Sicherheit im Betrieb.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Werkskundendienst</h3>
          <p>Durch strukturierten Werkskundendienst, professionelle Reparatur und gezielte Kontrolle bleiben Anlagen in Wien NiederÃ¶sterreich sowie im Burgenland effizient und zuverlÃ¤ssig.</p>
        </article>

        <article class="service-card service-card--service">
          <h3>Alle Systeme</h3>
          <p>Ob AuÃŸengerÃ¤t, Klimaanlage oder kombinierte Systeme mit Gas oder Ã–l â€“ wir betreuen Privatkunden und Unternehmen gleichermaÃŸen.</p>
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
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Mehr Effizienz beim Heizen</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Schutz vor StÃ¶rungen und Reparatur</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Nachhaltigkeit und Umweltbewusstsein</div>
          </div>
        </div>

        <p style="margin-top: 20px;">
          Durch regelmÃ¤ÃŸige Wartung, Kontrolle und Anpassung arbeitet Ihre WÃ¤rmepumpe effizienter und sorgt fÃ¼r konstante WÃ¤rme im Zuhause. FrÃ¼hzeitige ÃœberprÃ¼fung reduziert StÃ¶rungen, verhindert grÃ¶ÃŸere Reparatur und erhÃ¶ht die Sicherheit Ihrer Heizungsanlage deutlich. Optimierte Heiztechnik verbessert Energieeffizienz, reduziert Emissionen und unterstÃ¼tzt Umwelt sowie nachhaltiges Heizen in Ã–sterreich.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size4.jpeg') }}" alt="Vorteile WÃ¤rmepumpen Wartung" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Unser Werkskundendienst im Einsatz -->
  <section class="service-section" id="werkskundendienst">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Unser Werkskundendienst im Einsatz</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Unser Werkskundendienst Ã¼bernimmt sÃ¤mtliche Serviceleistungen rund um WÃ¤rmepumpe, Klimaanlagen und Heiztechnik im gesamten Bereich Wien NiederÃ¶sterreich und angrenzendem Burgenland.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">ðŸ”§</div>
          <div>
            <h3>Installation & Inbetriebnahme</h3>
            <p>Von Installation, Einbau und Inbetriebnahme bis zur laufenden Wartung stehen unsere Techniker und KÃ¤ltetechniker fÃ¼r hÃ¶chste QualitÃ¤t.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">ðŸ”„</div>
          <div>
            <h3>Reparatur & Ersatzteile</h3>
            <p>Reparatur, Austausch von Ersatzteilen und detaillierte Kontrolle aller Komponenten gehÃ¶ren zu unserem Leistungsspektrum.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">â„ï¸</div>
          <div>
            <h3>AuÃŸengerÃ¤t & Klimaanlagen</h3>
            <p>Ob AuÃŸengerÃ¤t, Klimaanlage oder komplexe Anlagen â€“ wir kÃ¼mmern uns um jedes Detail.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">ðŸ¤</div>
          <div>
            <h3>Partner & Kundendienst</h3>
            <p>Unsere Partner im Bereich Klimatechnik und Heiztechnik garantieren professionelle Betreuung, zuverlÃ¤ssigen Kundendienst und persÃ¶nliche Beratung.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Service fÃ¼r jede Anlagen Art -->
  <section class="service-section service-section--soft" id="anlagenart">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Service fÃ¼r jede Anlagen Art</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unterschiedliche Systeme erfordern individuelle Betreuung und prÃ¤zise technische Umsetzung.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">WÃ¤rmepumpe mit AuÃŸengerÃ¤t</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Kombination mit Klimaanlagen</div>
          </div>
        </div>

        <p style="margin-top: 20px;">
          Beim AuÃŸengerÃ¤t stehen Kontrolle, Reinigung und sichere Montage im Fokus, um Heizen und KÃ¼hlen effizient zu gewÃ¤hrleisten. Bei integrierter Klimaanlage prÃ¼fen unsere Techniker KÃ¼hlung, LuftfÃ¼hrung und Komponenten fÃ¼r optimale Leistung und Wohnkomfort.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size5.jpeg') }}" alt="WÃ¤rmepumpe mit AuÃŸengerÃ¤t" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Regionaler Service in NiederÃ¶sterreich (dark style) -->
  <section class="service-section service-section--dark" id="regional">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Regionaler Service in NiederÃ¶sterreich</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unser Service fÃ¼r WÃ¤rmepumpe Wartung NiederÃ¶sterreich erstreckt sich Ã¼ber Wiener Neudorf, Brunn am Gebirge, Wiener Neustadt, Bad VÃ¶slau, Leobersdorf, Schwechat, Tulln, Spillern, Thaya, Laa, Wolkersdorf, GroÃŸ Enzersdorf, Pillichsdorf und Theresienfeld. Auch Kunden in Wien und im Burgenland profitieren von unserem schnellen Kundendienst. Durch regionale NÃ¤he sind unsere Techniker rasch vor Ort und gewÃ¤hrleisten zuverlÃ¤ssige Betreuung. Privatkunden erhalten professionelle Beratung, sichere Installation und nachhaltige LÃ¶sung fÃ¼r ihr Zuhause. Mit Erfahrung, eingespieltem Team und starkem Partner-Netzwerk stehen wir fÃ¼r QualitÃ¤t, ZuverlÃ¤ssigkeit und langfristige Sicherheit Ihrer Heizungsanlage.
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
            <li>Bad VÃ¶slau</li>
            <li>Leobersdorf</li>
            <li>Schwechat, Tulln, Spillern</li>
            <li>Wien & Burgenland</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Wir sind fÃ¼r Sie in ganz NiederÃ¶sterreich, Wien und dem Burgenland da.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Transparente Kosten und FÃ¶rderung nutzen -->
  <section class="service-section" id="kosten-foerderung">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Transparente Kosten und FÃ¶rderung nutzen</h2>
        <p>Mehr zu unserem <a href="/">Thermenwartung Wien</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Die Kosten fÃ¼r eine professionelle Wartung oder Reparatur Ihrer WÃ¤rmepumpe in NiederÃ¶sterreich hÃ¤ngen vom Zustand der Heizungsanlage, dem Umfang der Serviceleistungen und dem benÃ¶tigten Einbau- oder Montageaufwand ab. Durch regelmÃ¤ÃŸige Wartung lassen sich grÃ¶ÃŸere Reparatur vermeiden und langfristig Geld sparen. Unsere Beratung informiert umfassend zu aktueller FÃ¶rderung in Wien NiederÃ¶sterreich sowie mÃ¶glichen Programmen in Ã–sterreich und im Burgenland. Eine fachgerechte Installation und Inbetriebnahme sichern zudem GarantieansprÃ¼che und erhÃ¶hen die Lebensdauer der Anlagen. Ob Gas, Ã–l oder moderne Heiztechnik â€“ wir zeigen Ihnen eine wirtschaftliche LÃ¶sung, die Effizienz, Sicherheit und Umwelt gleichermaÃŸen berÃ¼cksichtigt.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Faire Preise</h3>
          <p>Klare und transparente Kostenaufstellung â€“ keine versteckten GebÃ¼hren. Sie wissen immer, was Sie erwartet.</p>
        </div>
        <div class="service-pricecard">
          <h3>FÃ¶rderberatung</h3>
          <p>Wir informieren Sie Ã¼ber aktuelle FÃ¶rderprogramme in NiederÃ¶sterreich, Wien und dem Burgenland und unterstÃ¼tzen bei der Antragstellung.</p>
        </div>
        <div class="service-pricecard">
          <h3>Langfristig sparen</h3>
          <p>RegelmÃ¤ÃŸige Wartung vermeidet teure Reparaturen und sorgt fÃ¼r niedrige Energiekosten â€“ eine Investition, die sich rechnet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Betreuung durch erfahrene Techniker HÃ¤nde -->
  <section class="service-section service-section--soft" id="techniker">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Betreuung durch erfahrene Techniker HÃ¤nde</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unsere Techniker arbeiten mit Erfahrung, PrÃ¤zision und Verantwortung. Jede WÃ¤rmepumpe befindet sich bei uns in kompetenten HÃ¤nden â€“ vom ersten Einbau bis zur laufenden Wartung. Unser Team aus Servicetechniker, Installateur und KÃ¤ltetechniker Ã¼bernimmt Kundendienst, Reparatur und Kontrolle aller Komponenten. Dabei legen wir Wert auf QualitÃ¤t, Sicherheit und nachhaltige Heiztechnik. Durch kontinuierliche Betreuung gewÃ¤hrleisten wir zuverlÃ¤ssigen Betrieb, stabile KÃ¼hlung und effizientes Heizen im Zuhause unserer Kunden. Als regionaler Partner fÃ¼r Wien NiederÃ¶sterreich, Wien und das Burgenland stehen wir fÃ¼r ZuverlÃ¤ssigkeit, professionelle Leistungen und langfristige Zusammenarbeit.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Erfahrene Servicetechniker</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">Zertifizierte KÃ¤ltetechniker</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">âœ“</div>
            <div class="service-stat__label">PersÃ¶nliche Betreuung</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size3.jpegs.jpeg') }}" alt="Erfahrene Techniker" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>HÃ¤ufige Fragen zur WÃ¤rmepumpe Wartung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Installation-Niederosterreich') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Wartung, Service und FÃ¶rderung.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft ist eine Wartung notwendig?</summary>
          <p>Eine jÃ¤hrliche Wartung wird empfohlen, um Heizungsanlage, AuÃŸengerÃ¤t und Klimaanlage dauerhaft sicher und effizient zu betreiben.</p>
        </details>

        <details>
          <summary>Ãœbernimmt der Werkskundendienst auch Reparatur?</summary>
          <p>Ja, unser Werkskundendienst fÃ¼hrt Reparatur, Austausch von Ersatzteilen und umfassenden Kundendienst im gesamten Bereich NiederÃ¶sterreich und Wien durch.</p>
        </details>

        <details>
          <summary>Gibt es FÃ¶rderung fÃ¼r Heiztechnik in Ã–sterreich?</summary>
          <p>Je nach Thema und Anlage sind FÃ¶rderprogramme in Wien NiederÃ¶sterreich, Ã–sterreich oder Burgenland mÃ¶glich. Unsere Beratung informiert im Detail.</p>
        </details>

        <details>
          <summary>Betreuen Sie auch Privatkunden?</summary>
          <p>Ja, wir betreuen Privatkunden sowie Unternehmen und sorgen fÃ¼r zuverlÃ¤ssige LÃ¶sung rund um Heizen, KÃ¼hlen und Wohnkomfort.</p>
        </details>

        <details>
          <summary>Wird auch Installation und Inbetriebnahme angeboten?</summary>
          <p>Unsere Leistungen umfassen Installation, Einbau, Montage und fachgerechte Inbetriebnahme sÃ¤mtlicher Anlagen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Service Termin vereinbaren',
    'text' => 'Sie suchen einen erfahrenen Partner fÃ¼r WÃ¤rmepumpe Wartung NiederÃ¶sterreich? Unser Team steht fÃ¼r professionelle Serviceleistungen, schnelle Betreuung und hÃ¶chste QualitÃ¤t. Kontaktieren Sie uns fÃ¼r persÃ¶nliche Beratung, transparente Kosten und zuverlÃ¤ssigen Kundendienst in Wien NiederÃ¶sterreich, Wien, Burgenland und ganz Ã–sterreich. Sorgen Sie jetzt fÃ¼r langfristige Sicherheit, effiziente Heiztechnik und nachhaltigen Wohnkomfort in Ihrem Zuhause.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection





