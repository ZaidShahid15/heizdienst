@extends('layout.app')

@php
    $metaTitle = 'Wärmepumpe Wartung Burgenland | Service, Förderung & Komplettpaket';
    $metaDescription = 'Professionelle Wärmepumpe Wartung Burgenland inkl. Service, Installation, Reparatur und Förderabwicklung. Jetzt Beratung sichern und Energiekosten senken.';
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
        Wärmepumpe Wartung Burgenland <br>
        <span style="color:#FB9A1B;">Service, Förderung & Komplettpaket vom Fachbetrieb.</span>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Wärmepumpe Wartung Burgenland inkl. Service, Installation, Reparatur und Förderabwicklung. Jetzt Beratung sichern und Energiekosten senken.
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
            <a href="#wartung-systeme" class="toc-link">
              <span class="toc-badge">01</span><span class="toc-text">Wartung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#vorteile-service" class="toc-link">
              <span class="toc-badge">02</span><span class="toc-text">Vorteile</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#komplettpaket" class="toc-link">
              <span class="toc-badge">03</span><span class="toc-text">Komplettpaket</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#foerderung" class="toc-link">
              <span class="toc-badge">04</span><span class="toc-text">Förderung</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#servicegebiet" class="toc-link">
              <span class="toc-badge">05</span><span class="toc-text">Servicegebiet</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#kosten" class="toc-link">
              <span class="toc-badge">06</span><span class="toc-text">Kosten</span>
            </a>
          </li>
          <li class="toc-item">
            <a href="#partner" class="toc-link">
              <span class="toc-badge">07</span><span class="toc-text">Partner</span>
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


  <!-- Wartung für effiziente Wärmepumpen Systeme -->
  <section class="service-section" id="wartung-systeme">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wartung für effiziente Wärmepumpen Systeme</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. Eine regelmäßige Wärmepumpe Wartung Burgenland ist entscheidend, damit Wärmepumpen im Betrieb zuverlässig arbeiten und dauerhaft Komfort liefern.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Ganzheitliche Prüfung</h3>
          <p>Unsere Experten prüfen Heizung, Klima, Kälte und Haustechnik ganzheitlich und behalten alle Details im Blick. Durch Inspektion, Wartungsservice und gezielte Reparatur werden Störungen früh erkannt und die Lebensdauer der Heizsysteme verlängert.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Hohe Energieeffizienz</h3>
          <p>Besonders Haushalte profitieren von hoher Energieeffizienz, stabiler Wärme und niedrigeren Heizkosten. Wir betreuen Anlagen in Eisenstadt und im gesamten Burgenland.</p>
        </article>
        <article class="service-card service-card--service">
          <h3>Überregionale Expertise</h3>
          <p>Mit Know-how, Technik und Qualität sichern wir den Betrieb – vom ersten Blick bis zur laufenden Umsetzung. Auch Projekte in Vorarlberg unterstützen wir als überregionaler Partner.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Vorteile mit Profi Service Paket -->
  <section class="service-section service-section--soft" id="vorteile-service">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Vorteile mit Profi Service Paket</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Ein professioneller Wartungsservice verbessert Effizienz, Sicherheit und Komfort – ohne dass Sie sich um Details kümmern müssen.
        </p>

        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Weniger Energiekosten im Zuhause</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Mehr Sicherheit im Betrieb</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Längere Lebensdauer der Technik</div>
          </div>
        </div>

        <p style="margin-top:20px;">
          Durch Wartung und Inspektion arbeiten Wärmepumpen effizienter, senken Energiekosten und reduzieren Heizkosten spürbar im Alltag. Kontrollen erhöhen Sicherheit, reduzieren Risiken bei Gas, Öl und Brennstoffen und verhindern Ausfälle im Heizsystem. Regelmäßige Wartung schützt Systeme, erhöht die Lebensdauer und sichert Qualität bei modernen Heizsystemen und Klimaanlagen.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size4.jpeg') }}" alt="Vorteile Wärmepumpen Wartung" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Komplettpaket für Installation und Wartung -->
  <section class="service-section" id="komplettpaket">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Komplettpaket für Installation und Wartung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. Unser Komplettpaket kombiniert Installation, Wartung, Reparatur und laufenden Service für Wärmepumpen, Klimaanlagen und Kühlsysteme.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📋</div>
          <div>
            <h3>Alles aus einer Hand</h3>
            <p>Wir übernehmen Planung, Auswahl, Umsetzung und den Austausch relevanter Komponenten – passend zu Bedürfnissen, Ort und Voraussetzungen.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🏭</div>
          <div>
            <h3>Herstellerübergreifend</h3>
            <p>Als Unternehmen mit Erfahrung arbeiten wir herstellerübergreifend und kennen Anforderungen von Viessmann ebenso wie anderer Hersteller.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Inspektion & Optimierung</h3>
            <p>Unsere Leistungen umfassen Inspektion, technische Details, Sicherheitschecks und die Optimierung der Energieeffizienz.</p>
          </div>
        </article>
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔄</div>
          <div>
            <h3>Umstieg von Öl oder Gas</h3>
            <p>Auf Wunsch integrieren wir Lösungen für Umstieg von Ölheizungen oder Gas auf moderne Energielösungen – mit festem Ansprechpartner.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Beratung für Förderung und Förderabwicklung -->
  <section class="service-section service-section--soft" id="foerderung">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Beratung für Förderung und Förderabwicklung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Wir unterstützen mit Beratung, Überblick und Förderabwicklung, damit Landesförderung und Bundesförderung optimal genutzt werden.
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
            <div class="service-stat__label">Umstieg von Ölheizungen</div>
          </div>
        </div>

        <p style="margin-top:20px;">
          Wir klären Voraussetzungen, Ziel und Auswahl, unterstützen die Förderabwicklung und bringen Förderung sicher in die Umsetzung. Wir begleiten Planung, Wahl und Umsetzung, damit der Umstieg von Öl oder Gas zur effizienten Lösung wird.
        </p>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size7.jpeg') }}" alt="Förderung Burgenland" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Service im Bereich Eisenstadt Burgenland (dark style) -->
  <section class="service-section service-section--dark" id="servicegebiet">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Service im Bereich Eisenstadt Burgenland</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Unser Service deckt den Bereich Eisenstadt und das gesamte Burgenland ab – für Haushalte, Unternehmen und Haustechnik-Projekte. Wir liefern Wartung, Installation und Reparatur für Wärmepumpen, Klimaanlagen und Heizsystemen, abgestimmt auf Technik, Ort und Anforderungen. Als Partner mit Know-how bieten wir zuverlässige Ansprechpartner, schnelle Termine und klare Kosten. Wir prüfen Systeme, behalten alles im Blick und lassen nichts offen – von der Auswahl bis zu Details der Umsetzung. So bleibt Komfort konstant, Energieeffizienz hoch und Sicherheit im Betrieb gewährleistet.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Termin vereinbaren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Regionen im Burgenland</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Eisenstadt</li>
            <li>Oberwart</li>
            <li>Mattersburg</li>
            <li>Neusiedl am See</li>
            <li>Jennersdorf</li>
            <li>Güssing</li>
            <li>und ganz Burgenland</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Wir sind für Sie im gesamten Burgenland schnell vor Ort.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Transparente Kosten und langfristige Vorteile -->
  <section class="service-section" id="kosten">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Transparente Kosten und langfristige Vorteile</h2>
        <p>Mehr zu unserem <a href="/">Serviceangebot</a> finden Sie auf der Startseite. Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Die Kosten für eine Wärmepumpe Wartung Burgenland hängen vom Zustand der Wärmepumpen, dem gewählten Service, der Installation sowie vom Umfang der Leistungen ab. Durch regelmäßige Wartung, Inspektion und professionelle Reparatur sichern Sie langfristig Energieeffizienz und senken spürbar Energiekosten sowie Heizkosten. Unser Komplettpaket sorgt dafür, dass alles optimal aufeinander abgestimmt ist – von der Planung bis zur laufenden Betreuung. Wir prüfen Voraussetzungen für Landesförderung und Bundesförderung und übernehmen auf Wunsch die komplette Förderabwicklung. So entsteht eine wirtschaftliche Lösung mit klar kalkulierbaren Kosten, hoher Qualität und nachhaltigem Nutzen für Haushalte in Eisenstadt und im gesamten Burgenland.
        </p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Klare Kostenstruktur</h3>
          <p>Vorab transparente Aufstellung aller Leistungen – keine versteckten Gebühren. Sie wissen genau, was Sie erwartet.</p>
        </div>
        <div class="service-pricecard">
          <h3>Förderung nutzen</h3>
          <p>Wir beraten und unterstützen bei der Förderabwicklung, damit Sie von Landes- und Bundesförderungen profitieren.</p>
        </div>
        <div class="service-pricecard">
          <h3>Langfristig sparen</h3>
          <p>Durch regelmäßige Wartung sinken die Energiekosten dauerhaft und teure Reparaturen werden vermieden.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Ihr Partner für moderne Energielösungen -->
  <section class="service-section service-section--soft" id="partner">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Partner für moderne Energielösungen</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. 
          Als erfahrenes Unternehmen im Bereich Heiztechnik, Haustechnik und Klima sind wir verlässlicher Partner für Wärmepumpen, Klimaanlagen und Heizsysteme. Unsere Experten verfügen über umfassende Expertise, technisches Know-how und langjährige Erfahrung mit Herstellern wie Viessmann. Ob Wartung, Reparatur, Austausch oder Neuinstallation – wir begleiten jedes Projekt mit persönlichem Ansprechpartner und klarer Beratung. Unser Ziel ist es, Komfort, Sicherheit und Effizienz in Ihrem Zuhause dauerhaft zu gewährleisten. Von Eisenstadt bis in alle Regionen im Burgenland stehen wir für Zuverlässigkeit, Qualität und maßgeschneiderte Energielösungen aus einer Hand.
        </p>
        <div class="service-stats">
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Erfahrung mit Viessmann</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Persönlicher Ansprechpartner</div>
          </div>
          <div class="service-stat">
            <div class="service-stat__num">✓</div>
            <div class="service-stat__label">Maßgeschneiderte Lösungen</div>
          </div>
        </div>
      </div>

      <div class="service-split__media">
        <div class="service-media__box">
          <img class="service-media__img" src="{{ asset('img/1size3.jpeg') }}" alt="Partner für Wärmepumpen" loading="lazy" decoding="async" onerror="this.src='https://placehold.co/600x400'"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Wärmepumpe Wartung</h2>
        <p>Mehr Informationen finden Sie auch bei unserem <a href="{{ route('warmepumpel.Niederosterreich') }}">Wärmepumpen-Service</a>. Die wichtigsten Antworten rund um Wartung, Förderung und Service im Burgenland.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollten Wärmepumpen gewartet werden?</summary>
          <p>Eine jährliche Wartung wird empfohlen, um Sicherheit, Effizienz und langfristige Lebensdauer der Wärmepumpen zu gewährleisten.</p>
        </details>
        <details>
          <summary>Wird auch Reparatur im Burgenland angeboten?</summary>
          <p>Ja, unser Service umfasst Reparatur, Inspektion und Wartungsservice für Wärmepumpen, Klimaanlagen und Heizsysteme im gesamten Burgenland.</p>
        </details>
        <details>
          <summary>Gibt es Förderung für den Umstieg auf Wärmepumpen?</summary>
          <p>Je nach Voraussetzungen sind Landesförderung und Bundesförderung möglich. Wir unterstützen bei Beratung und Förderabwicklung.</p>
        </details>
        <details>
          <summary>Betreuen Sie auch Haushalte in Eisenstadt?</summary>
          <p>Ja, wir betreuen Haushalte in Eisenstadt und im gesamten Burgenland mit Komplettpaket, Installation und Service.</p>
        </details>
        <details>
          <summary>Arbeiten Sie mit Herstellern wie Viessmann?</summary>
          <p>Unsere Experten verfügen über Erfahrung mit Viessmann und weiteren Herstellern moderner Wärmepumpen und Heizsysteme.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Beratung und Service anfragen',
    'text' => 'Sie suchen einen Profi für Wärmepumpe Wartung Burgenland? Kontaktieren Sie unser Unternehmen für persönliche Beratung, transparente Kosten und zuverlässigen Service. Wir unterstützen Sie bei Installation, Wartung, Förderabwicklung und Optimierung Ihrer Wärmepumpen – für mehr Komfort, Sicherheit und Energieeffizienz in Ihrem Zuhause.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
  ])

</main>

@endsection









