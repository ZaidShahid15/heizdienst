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

  /* Image box */
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

  /* ===== HERO (kept same class names) ===== */
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
    background-image:url("img/hero-scetion.webp");
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

  @media (max-width: 980px){
    .service-grid--2{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}
    .service-stats{grid-template-columns:1fr;}
    .service-emergency{grid-template-columns:1fr}

    .card-split{grid-template-columns:1fr}
    .card-split--reverse .card-split__text{order:1}
    .card-split--reverse .card-split__media{order:2}
    .card-split__text, .card-split__media{display:block;}
    .service-media__box{min-height:220px; height:auto;}

    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
  }
</style>

@php
$metaTitle = "Installateur Fischamend | Sanitär, Heizung & Notdienst Service";
$metaDescription = "Installateur Fischamend für Sanitär, Heizung, Rohrreinigung und Reparatur. Schneller Service in Fischamend Niederösterreich und Umgebung. Jetzt anrufen oder E-Mail senden.";
@endphp

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Installateur Fischamend<br>
        <span style="color:#FB9A1B;">Schneller Service – rund um die Uhr.</span>
      </h1>


      <p class="wolf-hero__sub">
        Ihr Installateur Fischamend bietet schnellen und zuverlässigen Service für Sanitär, Heizung und professionelle Installationen. Unser Team hilft bei Reparatur, Wartung und modernen Lösungen in Fischamend Niederösterreich.
      </p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--red" href="tel:+43123456789">
          <i class="bi bi-telephone-fill"></i>
          JETZT ANRUFEN: +43 1234 56789
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
              <svg viewBox="0 0 448 512" aria-hidden="true">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
              </svg>
            </button>
          </div>
        </div>

        <div class="toc-body" id="tocBody">
          <ul class="toc-list" id="tocList">
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Ihr Installateur</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#anlage-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Sanitär & Heizung</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Fischamend & Umgebung</span></a></li>
            <li class="toc-item"><a href="#tausch-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Rohrreinigung</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Ihr zuverlässiger Installateur in Fischamend -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr zuverlässiger Installateur in Fischamend</h2>
            <p>
              Wenn Sie einen erfahrenen Installateur Fischamend suchen, sind Sie bei uns richtig. Unser Installateur unterstützt Haushalte und Betriebe in Fischamend Niederösterreich mit professionellen Lösungen rund um Sanitär, Wasser und moderne Technik. Durch langjährige Erfahrung kennt unser Team die Anforderungen der Kunden genau und bietet zuverlässigen Service für jede Situation. Ob neue Heizungsanlage, moderne Bad Installation oder professionelle Installationen im Haus – wir sorgen für sichere und saubere Arbeiten. Zusätzlich profitieren Sie von unserer schnellen Unterstützung bei planbaren und akuten Arbeiten. Weitere Details finden Sie in unseren <a href="{{ route('installateur-eisenstadt') }}">weiterführenden Informationen</a>.</p>
            <p>
              Viele Kunden aus Fischamend und der Umgebung vertrauen unserem Installateur, weil wir eine sorgfältige Beratung, hochwertige Technik und einen schnellen Service kombinieren. Wenn Sie einen Installateur Nähe Fischamend benötigen, erhalten Sie bei uns kompetente Unterstützung von der Planung bis zur Umsetzung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/1size1.webp') }}" alt="Installateur Fischamend Team" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen: Sanitär & Heizung -->
  <section class="service-section service-section--soft" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Sanitär und Heizung</h2>
        <p>
          Wir übernehmen alle Installateur Arbeiten – von der Badinstallation über Heizungswartung bis zur Rohrreinigung.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚿</div>
          <div>
            <h3>Sanitär- und Badinstallation</h3>
            <p>Unser Installateur übernimmt professionelle Sanitär Arbeiten sowie jede Bad Installation in Fischamend. Wir planen moderne Lösungen für Badezimmer und sorgen dafür, dass alle Installationen zuverlässig funktionieren. Dabei achten wir auf hochwertige Technik, saubere Arbeiten und langlebige Materialien, damit Ihre Sanitär Anlagen langfristig sicher bleiben.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Moderne Heizungsanlagen für Ihr Zuhause</h3>
            <p>Eine moderne Heizungsanlage sorgt für angenehme Wärme und spart Energiekosten. Unser Installateur plant und installiert passende Heizung Systeme für Häuser und Wohnungen in Fischamend Niederösterreich. Dank moderner Technik und Erfahrung findet unser Team die optimale Heizungsanlage für jedes Gebäude.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚡</div>
          <div>
            <h3>Installateur Notdienst</h3>
            <p>Bei Rohrbruch, austretendem Wasser oder anderen Notfällen hilft unser Installateur Fischamend schnell und zuverlässig – auch außerhalb der Geschäftszeiten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Rohrreinigung & Reparatur</h3>
            <p>Bei defekten Leitungen oder verstopften Rohren führt unser Installateur eine professionelle Rohrreinigung durch. So wird das Problem schnell behoben und Ihre Sanitär Anlage funktioniert wieder zuverlässig.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Heizung & Sanitär Detail -->
  <section class="service-section" id="anlage-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Heizung und Sanitär Service</h2>
            <p>
              Unser Installateur Fischamend bietet einen umfassenden Service rund um Heizung und Sanitär für private Haushalte und Betriebe. Von neuen Installationen bis zur regelmäßigen Wartung sorgen wir dafür, dass Ihre Anlagen zuverlässig funktionieren und langfristig effizient bleiben. Eine moderne Heizungsanlage spart Energie und reduziert Kosten, deshalb kümmern wir uns nicht nur um die Installation, sondern auch um Wartung und Reparatur.
            </p>
            <p>
              Als erfahrener Gas Wasser Installateur arbeiten wir mit moderner Technik und sorgen dafür, dass Wasser- und Heizsysteme sicher funktionieren. Unsere Kunden in Fischamend Niederösterreich profitieren von professioneller Beratung, sorgfältigen Arbeiten und zuverlässigem Service. Wenn ein Problem mit der Heizung oder mit Wasserleitungen entsteht, reagiert unser Installateur schnell und findet eine passende Lösung für jedes Gebäude in Fischamend und der Umgebung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Installation moderner Heizungsanlagen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">regelmäßige Wartung von Heizung Anlagen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">professionelle Sanitär Installationen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">erfahrener Gas Wasser Installateur</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.webp') }}" alt="Heizung und Sanitär" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Faire Preise, transparenter Service</h2>
            <p>
              Faire Preise und transparente Abläufe sind fester Bestandteil unseres Installateurbetriebs.
              Vor Beginn aller Arbeiten informieren wir klar über Kosten, Leistungen und notwendige Schritte.
             Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
            <p>
              Kunden profitieren von nachvollziehbarer Preisstruktur, kompetenter Beratung und persönlichem Kundenservice.
              Unser Team steht für Kompetenz, Erfahrung und strukturierte Abläufe – vom ersten Termin bis zur Ausführung.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Faire Preise</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Kompetente Beratung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Strukturierte Abläufe</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-11.webp') }}" alt="Preise und Beratung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf von Anfrage bis Termin</h2>
            <p>
              Der Ablauf bei unserem Installateur Fischamend ist klar strukturiert und kundenorientiert.
              Nach Ihrer Kontaktaufnahme über diese Seite vereinbaren wir rasch einen Termin für Fischamend und Umgebung.
            </p>
            <p>
              Unser Team analysiert vor Ort Ihre Heizungsanlage, Sanitäranlagen oder die betroffenen Leitungen
              und führt eine sorgfältige Überprüfung durch. Anschließend erhalten Sie eine transparente Einschätzung
              zu Wartung, Reparatur oder notwendigem Austausch. Unsere Techniker erklären mögliche Ursachen,
              zeigen Lösungen auf und setzen alle Arbeiten fachgerecht um.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.webp') }}" alt="Ablauf und Termin" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fischamend und Umgebung -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Installateur Arbeiten in Fischamend und Umgebung</h2>
            <p>
              Unser Installateur Fischamend unterstützt private Haushalte und Unternehmen in Fischamend Niederösterreich sowie in der gesamten Umgebung. Viele Menschen suchen einen Installateur Nähe, der schnell erreichbar ist und zuverlässig arbeitet. Genau diesen Service bietet unser Team. Ob Heizung, Sanitär oder moderne Installationen – unser Installateur sorgt für sichere und saubere Ergebnisse.
            </p>
            <p>
              Durch moderne Technik und unsere Erfahrung können viele Arbeiten effizient durchgeführt werden. Unser Ziel ist es, jedes Problem schnell zu lösen und langfristige Lösungen für Wasser- und Heizsysteme zu schaffen. Wenn Sie einen Installateur Fischamend Niederösterreich benötigen, erhalten Sie professionelle Unterstützung durch ein erfahrenes Team mit regionaler Nähe.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-6.webp') }}" alt="Fischamend und Umgebung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rohrreinigung und Notdienst -->
  <section class="service-section" id="tausch-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Rohrreinigung & Notdienst</h2>
            <p>
              Ein Rohrbruch oder ein anderes Problem mit Wasser kann jederzeit auftreten. In solchen Situationen hilft unser Installateur Fischamend schnell und zuverlässig. Unser Installateur Notdienst ist für dringende Fälle erreichbar und sorgt dafür, dass größere Schäden vermieden werden. Besonders bei einem Rohrbruch oder einer defekten Heizung ist schnelles Handeln wichtig.
            </p>
            <p>
              Unser Gas Wasser Installateur kennt sich mit allen wichtigen Systemen aus und führt eine fachgerechte Reparatur oder Rohrreinigung durch. Viele Kunden in Fischamend und der Umgebung vertrauen unserem schnellen Service, weil wir bei jedem Problem eine passende Lösung finden. Wenn Sie einen Installateur Fischamend Umgebung benötigen, erhalten Sie professionelle Hilfe von unserem Team.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-3.webp') }}" alt="Rohrreinigung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section service-section--soft" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Installateur Fischamend</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist der Installateur Notdienst verfügbar?</summary>
          <p>Unser Installateur Fischamend bietet einen zuverlässigen Notdienst für dringende Probleme. In vielen Fällen sind wir schnell erreichbar und helfen auch außerhalb der normalen Uhr-Zeiten.</p>
        </details>

        <details>
          <summary>Was kostet eine Reparatur durch einen Installateur?</summary>
          <p>Die Kosten für eine Reparatur hängen vom jeweiligen Problem ab. Unser Installateur prüft zuerst die Situation und informiert Sie transparent über die notwendigen Arbeiten.</p>
        </details>

        <details>
          <summary>Reparieren Sie auch Heizungsanlagen?</summary>
          <p>Ja, unser Installateur übernimmt die Reparatur sowie Wartung jeder Heizungsanlage. So stellen wir sicher, dass Ihre Heizung wieder zuverlässig funktioniert.</p>
        </details>

        <details>
          <summary>Arbeiten Sie auch außerhalb von Fischamend?</summary>
          <p>Ja, unser Installateur arbeitet in Fischamend Niederösterreich sowie in der gesamten Umgebung und hilft Kunden auch in nahegelegenen Orten.</p>
        </details>

        <details>
          <summary>Übernehmen Sie auch Bad Installationen?</summary>
          <p>Selbstverständlich führen wir jede Bad Installation sowie professionelle Sanitär Installationen durch. Unser Installateur sorgt für moderne Lösungen im Badezimmer.</p>
        </details>

        <details>
          <summary>Wie schnell kommt ein Installateur bei einem Rohrbruch?</summary>
          <p>Bei einem Rohrbruch reagiert unser Installateur Fischamend schnell. Unser Service sorgt dafür, dass austretendes Wasser gestoppt wird und größere Schäden vermieden werden.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  @include('layout.contact', [
    'id' => 'kontakt-services',
    'title' => 'Jetzt Termin vereinbaren',
    'text' => 'Rufen Sie uns an oder senden Sie uns eine E-Mail. Ihr zuverlässiger Installateur in Fischamend – für Sanitär, Heizung und Notfälle.',
    'btnText' => 'Kontaktieren Sie Uns',
    'btnLink' => 'tel:+43123456789',
    'btnAccent' => true,
  ])

</main>

@endsection






