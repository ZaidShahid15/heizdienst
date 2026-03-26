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

  /* stats pills (2 in a row) */
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

  /* Card split (EQUAL HEIGHT) */
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
   /* height:100%; */
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

  /* HERO (wolf) */
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

  /* TOC */
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
  .toc-card.is-collapsed .toc-body{max-height:0; padding:0 12px; overflow:hidden;}

  /* Mobile */
  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}
    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text,
    .card-split__media{display:block;}
    .service-media__box{min-height:220px; height:auto;}
    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@push('meta')
  <title>Heizung Notdienst Wien | Installateur Notdienst 24h Service</title>
  <meta name="description" content="Heizung Notdienst Wien ✓ Installateur Notdienst rund um die Uhr bei Rohrbruch, Gasgebrechen & Heizungsstörungen. Schnell vor Ort in Wien & Niederösterreich. Jetzt anrufen!">
@endpush

<main>
  <!-- HERO -->
  
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Heizung-notdienst-wien Thermenwartung Wien <br>
        <span style="color:#FB9A1B;"> Rund  um die Uhr Service vom Fachbetrieb.</span>
      </h1>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/heizung-notdienst-wien.jpeg') }}" alt="Heizung-notdienst-wien Logo">
      </div>

      <p class="wolf-hero__sub">
        Professionelle Heizung-notdienst-wien Thermenwartung Wien vom zertifizierten Fachbetrieb – rund um die Uhr verfügbar für Wartung Ihrer Heizung-notdienst-wien Therme,
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

  <!-- TOC -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
      <div class="toc-card is-collapsed" id="tocCard">
        <div class="toc-head" id="tocHead" role="button" tabindex="0" aria-controls="tocBody" aria-expanded="false">
          <h4 id="tocTitle">Inhaltsverzeichnis</h4>
          <div class="toc-actions">
            <button class="toc-iconbtn" type="button" id="tocToggle" aria-expanded="false" aria-controls="tocBody" aria-label="Inhaltsverzeichnis umschalten">
              <svg viewBox="0 0 448 512" aria-hidden="true" style="transform: rotate(0deg); transition: transform 0.18s;">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Heizung Notdienst</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Rund um die Uhr</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Rohrbruch & Gas</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Heizungsstörungen</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Sanitär & Wasser</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Warum wir</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Transparente Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Partner für Gas/Wasser</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">24h Einsatz</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 1. Heizung Notdienst Wien -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung Notdienst Wien – Ihr schneller Helfer</h2>
            <p>
              Wenn Ihre heizung plötzlich ausfällt, brauchen Sie sofort professionelle hilfe. Unser heizung notdienst wien ist Ihr zuverlässiger partner bei jedem notfall – schnell, kompetent und direkt in wien sowie in der umgebung und in niederösterreich erreichbar.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Schnell vor Ort</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kompetente Hilfe</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien & NÖ</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1NordGas.png') }}" alt="Heizung Notdienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Ihr Installateur Notdienst in Wien – Rund um die Uhr erreichbar -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Installateur Notdienst in Wien – Rund um die Uhr erreichbar</h2>
            <p>
              Ein akuter heizungsausfall oder ein massiver rohrbruch kommt oft unerwartet – manchmal sogar mitten in der nacht. Genau dafür steht unser erfahrener installateur notdienst bereit. Als professioneller installateur wien sind wir rund um die uhr, auch an feiertagen, für unsere kunden im einsatz.
            </p>
            <p>
              Unser geschultes team aus qualifizierten fachkräfte reagiert schnell auf jeden notfall – egal ob es sich um ein Problem mit wasser heizung, ein defektes gasgerät oder eine beschädigte heizungsanlage handelt. Jeder notdienst einsatz erfolgt strukturiert, effizient und mit höchstem Anspruch an sicherheit und Qualität.
            </p>
            <p>
              Als erfahrener fachbetrieb kennen wir die typischen probleme in Wiener Altbauten ebenso wie moderne Anlagen in Neubauten. Unser installateur analysiert die Situation vor ort und beginnt sofort mit der behebung, um größere schäden oder einen umfassenden wasserschaden zu vermeiden.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Installateur Notdienst Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Schnelle Hilfe bei Rohrbruch, Wasserschaden und Gasgebrechen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Schnelle Hilfe bei Rohrbruch, Wasserschaden und Gasgebrechen</h2>
            <p>
              Ein rohrbruch, ein akuter wasserrohrbruch oder ein schwerer wasserschaden erfordern rasches handeln. Unser installateur notdienst ist spezialisiert auf die sofortige behebung solcher probleme in wien und niederösterreich. Ob im haus, in der wohnung oder in der küche – wir sind Ihr zuverlässiger partner.
            </p>
            <p>
              Auch bei gefährlichen Situationen wie einem gasgebrechen oder einem Defekt an Ihrer gas wasser-Installation ist unser installateur schnell zur Stelle. Der Umgang mit gas erfordert besonderes know how, jahrelange erfahrung und präzises Arbeiten. Unsere experten prüfen jedes gasgerät sorgfältig und führen notwendige reparatur-Maßnahmen durch.
            </p>
            <p>
              Zusätzlich bieten wir professionelle rohrreinigung, Unterstützung bei verstopften ablaufleitungen sowie bei verstopfung im abfluss. Unser service deckt jede art von Notlage ab – zuverlässig, transparent und mit klar kalkulierten kosten.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Rohrbruch und Wasserschaden" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Heizungsnotdienst bei Heizungsstörungen im Winter -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizungsnotdienst bei Heizungsstörungen im Winter</h2>
            <p>
              Gerade im winter kann ein Ausfall der heizung schnell kritisch werden. Unser spezialisierter heizungsnotdienst in wien sorgt dafür, dass Ihre heizungsanlage rasch wieder funktioniert. Bei akuten heizungsstörungen oder anderen heizungsproblemen ist unser installateur notdienst sofort einsatzbereit.
            </p>
            <p>
              Wir überprüfen thermen, moderne geräte sowie klassische wasser heizung-Systeme. Unser fachmann erkennt Fehlerquellen rasch und sorgt für eine nachhaltige reparatur. Durch schnelle behebung verhindern wir größere schäden und unnötige kosten.
            </p>
            <p>
              Unser ziel ist es, die volle leistung Ihrer heizung wiederherzustellen und die sicherheit in Ihrem Zuhause zu gewährleisten. Dabei behalten wir stets den kompletten überblick über Ihre Anlage und beraten Sie auf wunsch auch zur langfristigen wartung.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.jpg') }}" alt="Heizungsstörungen Winter" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Installateur Notdienst für Sanitär und Wasserinstallation -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Installateur Notdienst für Sanitär und Wasserinstallation</h2>
            <p>
              Neben dem klassischen heizung notdienst wien bieten wir umfassenden installateur notdienst für sanitär-Bereiche und jede Form der wasserinstallation. Ob defekte sanitäranlagen, beschädigte ablaufleitungen oder Probleme mit wasser und gas wasser-Systemen – unser installateur steht Ihnen jederzeit zur Verfügung.
            </p>
            <p>
              Unser service richtet sich sowohl an Privatpersonen als auch an Unternehmen oder eine hausverwaltung in jedem bezirk von wien. Dank unserer strukturierten abwicklung und professionellen leistung wissen unsere kunden stets, womit sie rechnen können. Transparente kosten, faire Preise und volle gewährleistung sind für uns selbstverständlich.
            </p>
            <p>
              Egal ob kleiner Defekt oder großer notfall – wir kümmern uns um alles, was Ihre heizung, Ihr wasser oder Ihre sanitär-Installation betrifft.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.jpg') }}" alt="Sanitär Notdienst" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Warum unser Installateur Notdienst in Wien die richtige Wahl ist -->
  <section class="service-section service-section--soft" id="notdienst-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum unser Installateur Notdienst in Wien die richtige Wahl ist</h2>
            <p>
              Wenn ein akuter notfall eintritt, zählt jede Minute. Unser installateur notdienst in wien überzeugt durch schnelle Reaktionszeiten, transparente kosten und höchste Professionalität. Jeder installateur in unserem team verfügt über fundierte erfahrung und arbeitet nach modernsten Standards im Bereich gas wasser, sanitär und heizung.
            </p>
            <p>
              Unser anspruch ist es, nicht nur kurzfristige hilfe zu leisten, sondern nachhaltige Lösungen zu schaffen. Ob rohrbruch, massiver wasserschaden, Defekt an der heizungsanlage oder Störung am gasgerät – wir sind Ihr zuverlässiger partner in wien und niederösterreich.
            </p>
            <p>
              Durch regelmäßige Schulungen unserer fachkräfte garantieren wir höchste leistung, maximale sicherheit und saubere reparatur-Arbeiten. Vertrauen Sie einem erfahrenen fachbetrieb, der im Ernstfall sofort handelt.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.jpg') }}" alt="Erfahrener Installateur" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Transparente Kosten & faire Abwicklung im Notdienst -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Transparente Kosten & faire Abwicklung im Notdienst</h2>
            <p>
              Im notdienst ist Vertrauen besonders wichtig. Deshalb informieren wir unsere kunden bereits vor Beginn der Arbeiten über alle anfallenden kosten. Unser installateur erklärt verständlich, welche Maßnahmen zur behebung notwendig sind – ob bei heizungsausfall, rohrbruch, verstopfung oder Problemen mit gas.
            </p>
            <p>
              Wir arbeiten in ganz wien, in jedem bezirk, sowie in der umgebung und in Teilen von niederösterreich. Auch an feiertagen und zu später uhr sind wir erreichbar. Die Abrechnung erfolgt unkompliziert – auf Wunsch auch per online sofort überweisung. Selbstverständlich können Sie uns jederzeit per telefon, über kontakt auf unserer seite oder per e mail erreichen.
            </p>
            <p>
              Unser service steht für klare Kommunikation, rasche abwicklung und professionelle Durchführung – damit Sie in Ihrem haus oder Ihrer wohnung schnell wieder Ruhe haben.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-8.jpg') }}" alt="Transparente Kosten" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Ihr Partner für Gas, Wasser und Heizung in Wien -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Partner für Gas, Wasser und Heizung in Wien</h2>
            <p>
              Unser installateur notdienst deckt sämtliche Bereiche rund um gas, wasser und heizung ab. Von der schnellen rohrreinigung über die Reparatur beschädigter geräte bis hin zur professionellen wartung Ihrer Anlage – wir kümmern uns um alles.
            </p>
            <p>
              Besonders bei einem akuten rohrbruch oder einem größeren wasserschaden ist schnelles handeln entscheidend, um Folgeschäden zu vermeiden. Auch bei heizungsstörungen, Problemen mit thermen oder einem kompletten heizungsausfall steht unser heizungsnotdienst bereit.
            </p>
            <p>
              Unser installateur analysiert die Ursache präzise und sorgt für eine nachhaltige behebung. Dank modernem Equipment und umfassendem know how garantieren wir zuverlässige reparatur-Arbeiten mit voller gewährleistung. So bleiben alles rund um Ihre Installation langfristig sicher und funktionstüchtig.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Gas Wasser Heizung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. 24h Notdienst Einsatz – Schnell vor Ort in Wien (dark) -->
  <section class="service-section service-section--dark" id="faq-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>24h Notdienst Einsatz – Schnell vor Ort in Wien</h2>
        <p>
          Ein notdienst einsatz kann zu jeder uhr notwendig werden – besonders im winter, wenn die heizung unverzichtbar ist. Unser installateur notdienst ist daher rund um die uhr verfügbar und schnell in ganz wien im einsatz.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Egal ob es sich um einen akuten notfall, schwere schäden durch wasser, ein Problem mit gas oder eine dringende reparatur handelt – wir leisten sofortige hilfe. Unsere experten sorgen dafür, dass Ihre Anlage wieder die volle leistung bringt und alle Systeme sicher funktionieren.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Durch unsere regionale Nähe zu wien und niederösterreich können wir besonders kurze Anfahrtszeiten garantieren. Ihr zuverlässiger partner im Ernstfall – kompetent, schnell und professionell.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notfall melden</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Heizungsausfall / Heizungsstörung</li>
            <li>Rohrbruch, Wasserschaden</li>
            <li>Gasgeruch, Gasgebrechen</li>
            <li>Verstopfung, Abflussprobleme</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services2"> <!-- id slightly changed to avoid duplicate, but we keep same anchor -->
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Heizung Notdienst Wien</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wann sollte ich den Installateur Notdienst kontaktieren?</summary>
          <p>Bei jedem akuten notfall wie heizungsausfall, starkem rohrbruch, wasserschaden oder Problemen mit gas sollten Sie sofort unseren installateur notdienst in wien kontaktieren.</p>
        </details>
        <details>
          <summary>2. Ist der Notdienst auch an Feiertagen erreichbar?</summary>
          <p>Ja, unser notdienst ist auch an feiertagen und außerhalb regulärer Zeiten rund um die uhr verfügbar.</p>
        </details>
        <details>
          <summary>3. Welche Kosten entstehen bei einem Notdienst Einsatz?</summary>
          <p>Die kosten hängen von der Art des Problems ab. Unser installateur informiert Sie transparent vor Beginn der Arbeiten.</p>
        </details>
        <details>
          <summary>4. Helfen Sie auch bei Verstopfungen und Abflussproblemen?</summary>
          <p>Ja, wir bieten professionelle rohrreinigung, Hilfe bei verstopfung im abfluss sowie Reparaturen an ablaufleitungen an.</p>
        </details>
        <details>
          <summary>5. Sind Reparaturen an Thermen und Heizungsanlagen möglich?</summary>
          <p>Ja, unser heizungsnotdienst übernimmt die fachgerechte reparatur von thermen, heizungsanlage und anderen geräte.</p>
        </details>
        <details>
          <summary>6. Wie kann ich Kontakt aufnehmen?</summary>
          <p>Sie erreichen uns per telefon, über das kontakt-Formular auf unserer seite oder jederzeit per e mail.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT / Jetzt Installateur Notdienst in Wien kontaktieren -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin Vereinbaren',
        'text' => 'Setzen Sie auf Sicherheit, Effizienz und Zuverlässigkeit – kompetent, transparent und kundenorientiert. </br> 📞 Jetzt Termin vereinbaren – Ihr Therm4You-Partner in Wien.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+4314420617',
    'btnAccent' => true,
])
</main>

<script>
  // Toggle for TOC
  document.addEventListener('DOMContentLoaded', function() {
    const tocCard = document.getElementById('tocCard');
    const tocToggle = document.getElementById('tocToggle');
    const tocHead = document.getElementById('tocHead');
    const svg = tocToggle?.querySelector('svg');

    function toggleToc() {
      tocCard.classList.toggle('is-collapsed');
      const expanded = !tocCard.classList.contains('is-collapsed');
      tocToggle.setAttribute('aria-expanded', expanded);
      if (svg) {
        svg.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
      }
    }

    if (tocToggle) {
      tocToggle.addEventListener('click', toggleToc);
    }
    if (tocHead) {
      tocHead.addEventListener('click', toggleToc);
    }
  });
</script>
@endsection
