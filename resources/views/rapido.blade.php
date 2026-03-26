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

  /* =========================
     ✅ IMAGE = CONTENT HEIGHT
     ========================= */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch;
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{
    display:flex;
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

  .service-media{width:100%;}
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
  .toc-wrap{
    padding:16px 0 0;
    background:#fff;
  }
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
$metaTitle = " Rapido Thermenwartung Wien | 24h Notdienst & Fachbetrieb";
$metaDescription = " Rapido Thermenwartung in Wien vom geprüften Fachbetrieb. 24h Notdienst, transparente Preise, Wartung, Service & Reparatur – zuverlässig & sicher.";
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
        Rapido Thermenwartung Wien <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1rapido.jpeg') }}" alt="Rapido Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Rapido Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Rapido Therme,
        Thermenservice, Reparatur und Notdienst in Wien und Umgebung.
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

  <!-- ✅ TOC AFTER HERO (HTML change: add id="tocList") -->
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
            <li class="toc-item"><a href="#intro-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Intro</span></a></li>
            <li class="toc-item"><a href="#wann-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#loesungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Heizlösungen</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#sicherheit-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Sicherheit</span></a></li>
            <li class="toc-item"><a href="#kosten-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Warum Profi</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 01 -->
  <section class="service-section service-section--soft" id="intro-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rapido Thermentausch Wien</h2>
            <p>
              Ein professioneller Rapido  <a href="{{ route('ocean.thermenwartung') }}">Thermentausch Wien </a> steht für sichere Gastherme, schnelle Abwicklung und zuverlässigen Service in Wien und Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/rapido.jpeg') }}" alt="Rapido Thermentausch Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 02 -->
  <section class="service-section" id="wann-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch in Wien sinnvoll ist</h2>
            <p>
              Ein Thermentausch in Wien ist sinnvoll, wenn eine bestehende Therme häufige Störungen zeigt, Reparaturen zunehmen oder Sicherheitsanforderungen nicht mehr erfüllt werden.
              Gerade ältere Gasthermen verlieren mit der Zeit an Effizienz, was steigende Energiekosten und Probleme im Betrieb verursacht.
            </p>
            <p>
              Moderne Rapido Gasthermen bieten höhere Sicherheit, bessere Heizleistung und einen zuverlässigen Betrieb in jeder Jahreszeit.
              Ein erfahrener Installateur prüft Gasgeräte, Heizung, Abgasmessung und Funktion und empfiehlt den passenden Rapido Thermentausch
              für Wien, Niederösterreich oder Burgenland.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Wann Thermentausch sinnvoll ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 03 -->
  <section class="service-section service-section--soft" id="loesungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Rapido Heizlösungen</h2>
        <p>Rapido steht für zuverlässige Gasgeräte, durchdachte Produkte und hohe Qualität für unterschiedliche Heizsysteme.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♻️</div>
          <div>
            <h3>Brennwerttechnik für effizienten Betrieb</h3>
            <p>Rapido Brennwertlösungen nutzen Energie besonders effizient. Das senkt Energiekosten, verbessert die Heizleistung und erhöht die Wirtschaftlichkeit der Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Gastherme für Heizung und Komfort</h3>
            <p>Die Rapido Gastherme kombiniert Heizung und Warmwasser und sorgt für gleichmäßige Wärme, Komfort und Zuverlässigkeit im täglichen Einsatz.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📦</div>
          <div>
            <h3>Rapido Modelle und Auswahl</h3>
            <p>Rapido Modelle werden nach Bedarf, Einsatzbereich und Heizsystem ausgewählt. So passt die Therme optimal zu Wohnung oder Haus.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div>
          <div>
            <h3>Beratung durch Installateur</h3>
            <p>Unsere Experten prüfen Gasgeräte, Abgasmessung und Funktion und empfehlen die passende Lösung für Ihr Heizsystem.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 04 -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>So läuft der Rapido Thermentausch ab</h2>
            <p>
              Der Rapido Thermentausch erfolgt strukturiert und transparent. Nach der Anfrage folgt eine Überprüfung der bestehenden Therme durch das Techniker Team.
              Anschließend werden Planung, Montage und Tausch organisiert.
            </p>
            <p>
              Die alte Therme wird fachgerecht entsorgt, neue Rapido Gasgeräte installiert und in Betrieb genommen.
              Nach der Inbetriebnahme erfolgt eine Funktionsprüfung sowie Hinweise zur Wartung und Reinigung. So entsteht eine saubere Abwicklung ohne Überraschungen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Überprüfung & Planung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Montage & Tausch</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Inbetriebnahme</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Übergabe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Ablauf Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 05 -->
  <section class="service-section service-section--dark" id="sicherheit-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Montage, Betrieb und Sicherheit</h2>
      <p>
  Eine fachgerechte Montage ist entscheidend für Sicherheit, Effizienz und Langlebigkeit der Rapido Therme. Unsere Techniker und Mitarbeiter führen alle Arbeiten an Gasgeräte, Heizung und Anschlüssen fachgerecht aus und achten auf höchste Sicherheit. Auch eine regelmäßige
  <a href="{{ route('home') }}" style="text-decoration:underline; color:inherit;">
    Thermenwartung Wien
  </a>
  trägt wesentlich dazu bei, die Funktion und Lebensdauer Ihrer Anlage langfristig zu sichern.
</p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Regelmäßige Rapido Thermenwartung, Rapido Thermenservice und ein starker Rapido Kundendienst sichern Betrieb, Zuverlässigkeit und lange Lebensdauer.
        </p>

        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Beratung anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Wichtige Punkte</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Installation durch erfahrene Techniker</li>
            <li>Saubere Montage an Anschlüssen & Heizsystem</li>
            <li>Kontrolle von Betrieb, Abgas & Sicherheit</li>
            <li>Hinweise zur Wartung & Reinigung</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Sicherheit & Zuverlässigkeit – in jeder Jahreszeit.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 06 -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Preise und Aktion</h2>
            <p>
              Die Kosten für einen Rapido Thermentausch in Wien hängen von Modell, Montageaufwand und Zustand der Anlage ab.
              Transparente Preise schaffen Klarheit bei der Entscheidung. Eine Aktion oder ein spezielles Angebot ermöglicht zusätzliche Vorteile.
            </p>
            <p>
              Moderne Rapido Gasgeräte senken Energiekosten, reduzieren Energieverbrauch und sorgen für effizienten Betrieb in allen Bereichen.
              Klare Kosten ohne Überraschungen und langfristige Effizienz und Sicherheit stehen im Fokus.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Attraktive Aktion nutzen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Langfristige Effizienz</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Kosten Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 07 -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch in Wien, Niederösterreich und Burgenland</h2>
            <p>
              Ein Rapido Thermentausch in Wien, Niederösterreich und Burgenland erfordert regionale Erfahrung und technisches Know-how.
              Ob Wien, Umgebung oder ländliche Bereiche – jede Stelle bringt unterschiedliche Anforderungen an Heizsystem, Gasgeräte und Montage mit sich.
            </p>
            <p>
              Unsere Installateure, Techniker und Experten sind regelmäßig im Einsatz und betreuen Kunden persönlich.
              Wohnungen, Häuser und unterschiedliche Heizsysteme werden individuell geprüft. Durch strukturierte Planung, saubere Abwicklung und kurze Wege
              entsteht ein reibungsloser Rapido Thermentausch für jede Jahreszeit.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Region Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 08 -->
  <section class="service-section" id="warum-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum ein professioneller Rapido Thermentausch überzeugt</h2>
            <p>
              Ein fachgerecht durchgeführter Rapido Thermentausch erhöht die Sicherheit, verbessert die Effizienz und verlängert die Lebensdauer der neuen Therme.
              Unsere Fachbetriebe prüfen Gasgeräte, Funktion, Abgasmessung und Betrieb sorgfältig.
            </p>
            <p>
              Durch saubere Montage, regelmäßige Wartung und einen zuverlässigen Rapido Kundendienst bleibt der Betrieb stabil.
              Kunden profitieren von persönlicher Beratung, schneller Rapido Thermenreparatur, Notdienst bei Notfall und einem starken Partner für Service und Ersatzteile.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Erfahrung & Know-how</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Entsorgung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hohe Zuverlässigkeit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Service & Notdienst</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-4.jpg') }}" alt="Warum Rapido Thermentausch" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 09 -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Rapido Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Rapido Thermentausch sinnvoll?</summary>
          <p>Ein Austausch ist sinnvoll bei häufigen Störungen, steigenden Energiekosten oder wenn die bestehende Therme nicht mehr sicher arbeitet.</p>
        </details>
        <details>
          <summary>Wie lange dauert ein Thermentausch in Wien?</summary>
          <p>In der Regel erfolgt der Tausch inklusive Montage und Inbetriebnahme innerhalb eines Tages, abhängig vom Zustand der Anlage.</p>
        </details>
        <details>
          <summary>Welche Rapido Therme ist die richtige Wahl?</summary>
          <p>Die Auswahl hängt von Heizsystem, Bedarf und Einsatzbereich ab. Unsere Experten beraten umfassend.</p>
        </details>
        <details>
          <summary>Ist Thermenwartung nach dem Austausch notwendig?</summary>
          <p>Ja, regelmäßige Thermenwartung und Rapido Thermenservice sichern Effizienz, Sicherheit und langfristigen Betrieb.</p>
        </details>
        <details>
          <summary>Was kostet ein Rapido Thermentausch?</summary>
          <p>Die Kosten richten sich nach Gerät, Montage und Aufwand. Transparente Preise sorgen für Klarheit.</p>
        </details>
        <details>
          <summary>Gibt es einen Rapido Notdienst?</summary>
          <p>Ja, ein Rapido Notdienst steht bei Störungen und Notfällen schnell zur Verfügung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 10 -->
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

