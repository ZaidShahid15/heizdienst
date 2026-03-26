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
    cursor:pointer;
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

  /* =====================================================
     ✅ CARD SPLIT (equal height columns)
     ===================================================== */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch;
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}
  .card-split__text,
  .card-split__media{display:flex;}

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

  .service-media{width:100%; display:flex;}
  .service-media__box{
    width:100%;
    height:100%;
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

  /* Stats pills */
  .service-stats{
    display:grid;
    grid-template-columns: repeat(2, minmax(0,1fr));
    gap:10px;
    margin-top:14px;
  }
  .service-stat{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background:rgba(24,64,72,.06);
    border:1px solid rgba(24,64,72,.18);
  }
  .service-stat__num{
    width:22px; height:22px;
    border-radius:999px;
    display:grid; place-items:center;
    background:#fff;
    border:1px solid rgba(24,64,72,.22);
    font-weight:900;
    color:var(--ink);
    line-height:1;
    flex:0 0 auto;
  }
  .service-stat__label{font-weight:800; color:var(--ink)}

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
  .service-checklist{margin:0; padding-left:18px}
  .service-checklist li{margin:8px 0}
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
  .service-faq summary{cursor:pointer; font-weight:900; color:var(--ink);}
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

  /* ===== HERO ===== */
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
     TOC
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
  .toc-head h4{margin:0; font-size:15px; font-weight:900; color:var(--ink);}
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
  .toc-list{list-style:none; margin:0; padding:0; display:grid; gap:10px;}
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
  .toc-card.is-collapsed .toc-body{max-height:0; padding:0 12px; overflow:hidden;}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .service-stats{grid-template-columns:1fr;}
    .service-emergency{grid-template-columns:1fr}
  }
</style>

@php
$metaTitle = "Buderus Installateur Wien | Thermenwartung & Service";
$metaDescription = "Buderus Installateur Wien für Buderus Thermenwartung, Reparatur & Thermentausch. Transparente Preise inkl. MwSt. Jetzt Termin vereinbaren.";
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
        Buderus Installateur Wien
<br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1buderus.jpeg') }}" alt="Buderus Logo">
      </div>

      <p class="wolf-hero__sub">
        Als Buderus Installateur Wien bietet unser Fachbetrieb professionelle Thermenwartung, Reparatur und Installation für Buderus Therme und Gastherme in Wien.
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

  <!-- TOC -->
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
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#fachpartner-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Fachpartner</span></a></li>
            <li class="toc-item"><a href="#service-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#heizung-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Heizung & Geräte</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Wien & Umgebung</span></a></li>
            <li class="toc-item"><a href="#thermentausch-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Thermentausch</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 1) Fachpartner -->
  <section class="service-section" id="fachpartner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Buderus Fachpartner in Wien</h2>
            <p>
              Als erfahrener Installateur und kompetenter Partner für Buderus in Wien stehen wir für Qualität, Sicherheit und nachhaltige Betreuung. Zudem bieten wir <a href="/vaillant-installateur-wien">zuverlässige Heizungsservice-Leistungen</a> für maximale Heizsicherheit an.
            </p>
            <p>
              Wir betreuen Kunden in Wien und Umgebung zuverlässig und mit kurzen Wegzeit. Ob Wohnung, Restaurants oder gewerblicher Betrieb – wir kennen die Anforderungen vor Ort und reagieren schnell.
              Unsere Kompetenz als Fachmann zeigt sich in professioneller Wartung, strukturierter Prüfung und persönlicher Beratung.
              Buderus steht als Marke für Leistung, Langlebigkeit und Umweltbewusstsein – Werte, die wir bei jeder Installation und jedem Service umsetzen.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/buderus.jpeg') }}" alt="Buderus Fachpartner in Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2) Installation, Wartung und Service -->
  <section class="service-section service-section--soft" id="service-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2 id="kundendienst">Kundendienst – Installation, Wartung und Service</h2>
        <p>
          Unser Service umfasst Installation, regelmäßige Wartung und professionelle Buderus Thermenwartung für alle Buderus Geräte.
        </p>
      </div>

      <div class="card-box" style="margin-bottom:14px;">
        <p>
          Eine fachgerechte Montage Ihrer Buderus Therme oder Buderus Gastherme stellt sicher, dass Heizung und Heizkörper effizient arbeiten.
          Die Thermenwartung Buderus beinhaltet Reinigung, Funktionsprüfung, Nachjustierung und Kontrolle der Abgaswerte.
          Durch regelmäßige Wartung reduzieren Sie Risiko, unnötigen Gasverbrauch und langfristige Kosten.
        </p>
        <p>
          Unser Buderus Thermenservice erstellt ein Prüfprotokoll und informiert transparent über Leistung und Zustand Ihrer Anlage.
          Kunden profitieren von zuverlässigem <a href="/">Kundendienst</a>, transparenter Terminvergabe und fairem Preis Leistungsverhältnis inklusive MwSt.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Buderus Therme Installation</h3>
            <p>Wir übernehmen die fachgerechte Installation Ihrer Buderus Therme inklusive Montage, Anschluss an Heizkörper und sichere Inbetriebnahme des Heizsystems.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Buderus Thermenwartung Service</h3>
            <p>Unsere Buderus Thermenwartung sowie Thermenwartung in Wien umfasst Zerlegung, Reinigung, Funktionsprüfung und Kontrolle der Abgaswerte Ihrer Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur und Ersatzteile</h3>
            <p>Bei Reparatur verwenden wir hochwertige Ersatzteile, prüfen Wärmetauscher und Brennwert-Komponenten und beheben jedes Problem effizient.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3 id="notdienst-wien">Notdienst Wien rund um die Uhr</h3>
            <p><a href="/">Notdienst Wien</a> in Wien und Umgebung zur Verfügung und hilft bei akuten Problemen oder Ausfällen Ihrer Gastherme schnell vor Ort.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 3) Heizung, Gastherme und Heizkessel -->
  <section class="service-section" id="heizung-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung, Gastherme und Heizkessel</h2>
            <p>
              Wir betreuen Buderus Heizungssysteme, Buderus Gastherme und moderne Heizkessel.
              Eine regelmäßige <a href="/">Thermenwartung Wien</a> verbessert die Leistung, verlängert die Lebensdauer und reduziert Gasverbrauch.
            </p>
            <p>
              Unsere Wartung umfasst Entleerung, Zerlegung relevanter Komponenten sowie Überprüfung aller sicherheitsrelevanten Funktionen.
              Durch sorgfältige Prüfung stellen wir sicher, dass Heizsystem und Heizkessel effizient arbeiten und Umwelt sowie Budget geschont werden.
              Kunden in Wien und Umgebung profitieren von nachhaltiger Betreuung und professionellem Buderus Kundendienst.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Heizung, Gastherme und Heizkessel" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4) Preise, Angebot und Beratung -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2 id="installateur-wien">Buderus Installateur Wien – Preise, Angebot und Beratung</h2>
            <p>
              Transparente Preise und faire Kosten sind Teil unseres Service in Wien.
              Vor jeder Thermenwartung Buderus oder Reparatur erhalten Sie ein klares Angebot inklusive MwSt.
            </p>
            <p>
              Wir beraten individuell zu Thermentausch, Modernisierung oder möglicher Aktion.
              Dank effizienter Wegzeit sparen Kunden Zeit und Geld.
              Unser Ziel ist es, ein optimales Preis Leistungsverhältnis zu bieten – ohne versteckte Zusatzkosten.
              Ob Anfrage über Telefon oder E Mail Adresse, wir stehen für Beratung, Betreuung und verlässliche Terminvergabe zur Verfügung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Angebot inkl. MwSt</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Keine versteckten Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Faire Preisstruktur</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Effiziente Wegzeit</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Preise, Angebot und Beratung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5) Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ablauf von Anfrage bis Termin</h2>
        <p>Strukturiert, transparent und mit schneller Terminvergabe in Wien.</p>
      </div>

      <div class="card-box">
        <p>
          Nach Ihrer Anfrage per Telefon, E Mail Adresse oder direkt über unsere Seite erfolgt eine rasche Terminvergabe.
          Unser Buderus Installateur Wien prüft vor Ort Ihre Buderus Therme, Buderus Gastherme oder den Heizkessel und führt eine detaillierte Prüfung durch.
        </p>
        <p>
          Dabei werden Abgaswerte, Funktionsprüfung, Gasverbrauch und sicherheitsrelevante Komponenten kontrolliert.
          Anschließend erhalten Sie transparente Infos zu Wartung, Reparatur oder möglichem Thermentausch inklusive Kosten und MwSt.
          Unser Kundendienst erstellt auf Wunsch ein Prüfprotokoll und bespricht alle weiteren Schritte verständlich.
        </p>
        <p>
          Ziel ist eine effiziente Lösung mit minimaler Wegzeit und maximaler Sicherheit für Ihr Heizsystem.
        </p>
      </div>
    </div>
  </section>

  <!-- 6) Wien und Umgebung -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien und Umgebung</h2>
            <p>
              Unser Buderus Installateur Service ist in ganz Wien und Umgebung sowie in Wien und Umgebung angrenzenden Bezirken im Einsatz.
              Dank kurzer Wegzeit sind wir schnell am Ort und betreuen Wohnungen, Restaurants und gewerbliche Objekte gleichermaßen.
            </p>
            <p>
              Die Nähe zum Kunden ermöglicht rasche Reaktion bei Thermenwartung Buderus, Reparatur oder Notdienst.
              Unsere Mitarbeiter kennen die regionalen Anforderungen und bieten zuverlässige Betreuung für Buderus Heizsysteme.
              Kunden schätzen unseren strukturierten Ablauf, klare Kommunikation und kompetenten Buderus Kundendienst direkt in Wien.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Wien und Umgebung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7) Thermentausch und Modernisierung (dark) -->
  <section class="service-section service-section--dark" id="thermentausch-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Thermentausch und Modernisierung</h2>
        <p>
          Ein Thermentausch ist empfehlenswert, wenn Ihre Buderus Therme häufige Störungen aufweist oder nicht mehr dem aktuellen Brennwert-Standard entspricht.
          Wir beraten zu modernen Buderus Produkten, effizienter Kombitherme oder neuem Heizkessel im passenden Leistungsbereich.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Der Austausch erfolgt fachgerecht inklusive Demontage, Montage und Installation der neuen Anlage.
          Dabei prüfen wir Wärmetauscher, Brennwert-Komponenten und passen das Heizsystem an aktuelle Anforderungen an.
          Ein moderner Thermentausch reduziert Gasverbrauch, senkt Risiko und verlängert die Lebensdauer der gesamten Anlage.
          Kunden profitieren von mehr Leistung, besserer Umweltbilanz und langfristiger Sicherheit.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Beratung anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Fachgerechte Demontage & Montage</li>
            <li>Prüfung von Wärmetauscher & Brennwert</li>
            <li>Reduzierter Gasverbrauch</li>
            <li>Mehr Betriebssicherheit</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 8) FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Buderus</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung Buderus erfolgen?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Leistung, Sicherheit und Lebensdauer Ihrer Buderus Therme zu erhalten.</p>
        </details>

        <details>
          <summary>Was umfasst die Buderus Thermenwartung?</summary>
          <p>Die Buderus Thermenwartung beinhaltet Zerlegung, Reinigung, Funktionsprüfung, Kontrolle der Abgaswerte sowie Nachjustierung wichtiger Komponenten.</p>
        </details>

        <details>
          <summary>Gibt es einen Buderus Notdienst in Wien?</summary>
          <p>Ja, unser Notdienst ist in Wien und Umgebung verfügbar und hilft bei dringenden Problemen schnell weiter.</p>
        </details>

        <details>
          <summary>Wie transparent sind Preise und MwSt?</summary>
          <p>Alle Preise und MwSt werden vorab klar kommuniziert. Sie erhalten ein nachvollziehbares Angebot ohne versteckte Kosten.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Ein Thermentausch empfiehlt sich bei wiederkehrendem Problem, ineffizientem Betrieb oder veralteter Buderus Gastherme.</p>
        </details>

        <details>
          <summary>Wie schnell bekomme ich einen Termin?</summary>
          <p>Nach Ihrer Anfrage erfolgt eine schnelle Terminvergabe mit möglichst geringer Wegzeit innerhalb von Wien.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 9) Kontakt -->
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

