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

  /* ✅ stats pills (keep original style) */
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

  /* ===== ✅ Card split (EQUAL HEIGHT) ===== */
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
    height:100%;
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

  /* ✅ Image box = same height as content */
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
    object-fit:cover;
    object-position:center;
  }

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
     ✅ TOC (after HERO)
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
    .service-emergency{grid-template-columns:1fr}
    .service-cta__inner{grid-template-columns:1fr}
    .service-formrow{grid-template-columns:1fr}

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
  <title>Saunier Duval Installateur Wien | Wartung & Notdienst</title>
  <meta name="description" content="Saunier Duval Installateur Wien für Thermenwartung, Reparatur & Thermentausch Wien. Rund um die Uhr Notdienst. Jetzt Angebot anfragen.">
@endpush

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Saunier Duval Installateur Wien</p>

      <h1>
        Saunier Duval Installateur Wien<br>
        <em>Wartung & Notdienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Als Saunier Duval Installateur Wien bieten wir professionelle Installation, Thermenwartung und Reparatur für Saunier Duval Therme und Gasgeräte in Wien.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1sauneri.jpeg') }}" alt="Saunier Duval Installateur Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Thermenwartung</span>
        <span class="wolf-pill">Reparatur</span>
        <span class="wolf-pill">Thermentausch Wien</span>
        <span class="wolf-pill">Notdienst 24/7</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Angebot anfragen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#ablauf-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="duval-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Saunier Duval Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ✅ TOC AFTER HERO -->
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
          <ul class="toc-list">
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Partner Wien</span></a></li>
            <li class="toc-item"><a href="#service-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Installation & Wartung</span></a></li>
            <li class="toc-item"><a href="#geraete-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Gasgeräte</span></a></li>
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

  <!-- 01 Partner Wien -->
  <section class="service-section" id="partner-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Saunier Duval Partner Wien</h2>
            <p>
              Als erfahrener Spezialist für Saunier Duval in Wien stehen wir für Kompetenz, Sicherheit und nachhaltigen Service.
              Unsere Installateure betreuen alle Saunier Duval Modelle, von moderner Saunier Duval Therme bis zur leistungsstarken Saunier Duval Gastherme.
            </p>
            <p>
              Mit fundiertem Fachwissen und langjähriger Erfahrung kümmern wir uns um Installation, Wartung und Reparatur sämtlicher Geräte dieser Marke.
              Unsere Experten arbeiten nach Herstellervorgaben und achten auf Sicherheitsfunktionen, Energieeffizienz und optimale Einstellung jeder Anlage.
              Kunden in Wien und Umgebung profitieren von persönlicher Betreuung, transparenter Kommunikation und einem Service, der alle Anforderungen erfüllt.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/sauneri.jpeg') }}" alt="Saunier Duval Partner Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 02 Installation, Wartung und Service -->
  <section class="service-section service-section--soft" id="service-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Installation, Wartung und Service</h2>
        <p>
          Unser Installateur Service für Saunier Duval umfasst fachgerechte Installation, regelmäßige Wartung und professionelle Thermenwartung.
        </p>
      </div>

      <div class="card-box" style="margin-bottom:14px;">
        <p>
          Wir übernehmen Montage und Einrichtung Ihrer Saunier Duval Therme oder Duval Gastherme inklusive sicherer Inbetriebnahme der gesamten Anlage.
          Eine regelmäßige Thermenwartung verlängert die Lebensdauer, verbessert die Energieeffizienz und reduziert Störungen frühzeitig.
          Unser Kundendienst bietet schnellen Einsatz bei Problemen sowie zuverlässigen Notdienst in Wien.
        </p>
        <p>
          Alle Arbeiten erfolgen durch geschultes Fachpersonal mit modernsten Materialien und präziser Kontrolle.
          Ziel ist ein sicherer Betrieb Ihrer Heizung und dauerhafter Komfort in Ihrem Zuhause.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Saunier Duval Therme Installation</h3>
            <p>Wir führen die Installation Ihrer Saunier Duval Therme inklusive Montage, Einstellung und vollständiger Überprüfung aller Sicherheitsfunktionen fachgerecht durch.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧼</div>
          <div>
            <h3>Thermenwartung und Thermenservice</h3>
            <p>Unsere Thermenwartung sowie Saunier Duval Thermenservice umfassen Reinigung, Kontrolle, Einstellung und präventive Überprüfung der Anlage.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Reparatur und Thermenreparatur</h3>
            <p>Bei Reparatur oder Thermenreparatur analysieren unsere Techniker Störungen, führen Fehlerdiagnose durch und beheben Probleme effizient.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Notdienst rund um Uhr</h3>
            <p>Unser Notdienst Team ist rund um die Uhr im Einsatz und hilft bei akuten Problemen mit Saunier Duval Gasgeräte oder Gastherme.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 03 Gasgeräte und Heizungssysteme -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Gasgeräte und Heizungssysteme</h2>
            <p>
              Wir betreuen Saunier Duval Gasgeräte, Duval Therme, Brennwertgerät sowie moderne Heizungsanlagen im gesamten Sortiment.
              Unsere Spezialisten prüfen alle Geräte sorgfältig und sorgen für optimale Wärme, Warmwasser und effizienten Betrieb.
            </p>
            <p>
              Durch regelmäßige Wartung, Reinigung und Kontrolle werden Energiekosten reduziert und die Lebensdauer der Anlage erhöht.
              Unser Kundendienst Techniker steht bei Störungen oder Problemen schnell zur Verfügung.
              Dank präziser Einstellung und sorgfältiger Überprüfung sichern wir Leistung, Komfort und langfristige Sicherheit Ihrer Heizung in Wien und Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Saunier Duval Gasgeräte und Heizungssysteme" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 04 Preise, Angebot und Beratung -->
  <section class="service-section service-section--soft" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Angebot und Beratung</h2>
            <p>
              Transparenter Preis und faire Kosten sind Bestandteil unseres Service in Wien.
              Vor jedem Einsatz erhalten Sie ein klares Angebot für Installation, Wartung oder Thermenservice.
            </p>
            <p>
              Wir beraten umfassend zu Thermentausch Wien, Modernisierung oder möglicher Entsorgung inklusive Altgerätemitnahme.
              Unser Team beantwortet alle Fragen verständlich und informiert über Garantie, Vorteile und mögliche Einsparungen bei Energiekosten.
              Dank strukturierter Terminvergabe und effizientem Einsatz profitieren Kunden von einem optimalen Preis Leistungsverhältnis.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klares Angebot vorab</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Faire Kosten</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kommunikation</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Optimales Preis-Leistung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Preise Angebot Beratung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 05 Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Ablauf von Anfrage bis Termin</h2>
        <p>Von der Anfrage bis zur Umsetzung – schnell, klar und fachgerecht.</p>
      </div>

      <div class="card-box">
        <p>
          Nach Ihrer Anfrage über unsere Seite oder telefonisch erfolgt eine schnelle Terminvergabe für Wien und Umgebung.
          Unser Saunier Duval Installateur Wien prüft vor Ort Ihre Saunier Duval Therme, Duval Gastherme oder gesamte Anlage sorgfältig.
        </p>
        <p>
          Dabei führen wir eine umfassende Überprüfung, Kontrolle der Sicherheitsfunktionen sowie eine präzise Fehlerdiagnose durch.
          Anschließend erhalten Sie klare Infos zu Wartung, Reparatur oder Thermentausch Wien inklusive transparentem Preis.
          Unser Kundendienst Techniker erklärt alle Schritte verständlich und setzt die notwendigen Arbeiten fachgerecht um.
        </p>
        <p>
          Ziel ist eine sichere, effiziente und nachhaltige Lösung für Ihre Heizung und Ihr Warmwasser-System.
        </p>
      </div>
    </div>
  </section>

  <!-- 06 Wien und Umgebung -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wien und Umgebung</h2>
            <p>
              Unser Service für Saunier Duval in Wien und Umgebung garantiert kurze Reaktionszeiten und schnelle Hilfe vor Ort.
              Egal ob Wohnung, Haus oder gewerbliche Anlage – unsere Installateuren kennen die regionalen Gegebenheiten und reagieren flexibel bei Notfällen.
            </p>
            <p>
              Unser Notdienst ist rund um die Uhr verfügbar und sorgt bei Störungen oder Problemen für rasche Behebung.
              Kunden profitieren von einem engagierten Team, strukturierter Arbeitsweise und persönlicher Betreuung.
              Auch außerhalb des Zentrums von Wien sind wir als Spezialist für Saunier Duval Gasgeräte zuverlässig im Einsatz.
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

  <!-- 07 Thermentausch und Modernisierung (dark) -->
  <section class="service-section service-section--dark" id="thermentausch-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Thermentausch und Modernisierung</h2>
        <p>
          Ein Thermentausch ist sinnvoll, wenn Ihre Saunier Duval Therme häufige Störungen verursacht oder nicht mehr effizient arbeitet.
          Wir beraten umfassend zu neuen Modellen, modernen Brennwertgerät-Lösungen und passender Duval Therme für Ihre Anforderungen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Der Austausch erfolgt fachgerecht inklusive Demontage, Entsorgung und Altgerätemitnahme.
          Unsere Experten übernehmen Installation, Einstellung und Inbetriebnahme der neuen Anlage.
          Durch moderne Technologie lassen sich Energiekosten senken und der Komfort steigern.
          Ziel ist ein langlebiges Heizsystem mit hoher Energieeffizienz und zuverlässigem Betrieb in Wien.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Angebot anfragen</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Fachgerechte Demontage & Entsorgung</li>
            <li>Altgerätemitnahme inklusive</li>
            <li>Mehr Energieeffizienz & Komfort</li>
            <li>Zuverlässiger Betrieb & Sicherheit</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 08 FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zu Saunier Duval</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung erfolgen?</summary>
          <p>Eine regelmäßige Thermenwartung einmal jährlich erhöht Sicherheit, Energieeffizienz und Lebensdauer Ihrer Saunier Duval Therme.</p>
        </details>

        <details>
          <summary>Bieten Sie einen Saunier Duval Notdienst an?</summary>
          <p>Ja, unser Notdienst Team ist rund um die Uhr im Einsatz und hilft bei akuten Störungen schnell weiter.</p>
        </details>

        <details>
          <summary>Was umfasst der Thermenservice?</summary>
          <p>Der Thermenservice beinhaltet Reinigung, Kontrolle, Überprüfung aller Funktionen sowie Einstellung der Anlage.</p>
        </details>

        <details>
          <summary>Wann ist ein Thermentausch sinnvoll?</summary>
          <p>Ein Thermentausch empfiehlt sich bei häufigen Problemen, ineffizientem Betrieb oder veralteten Modellen.</p>
        </details>

        <details>
          <summary>Sind Original Materialien und Ersatzteile im Einsatz?</summary>
          <p>Ja, wir arbeiten nach Vorgaben des Herstellers und verwenden geprüfte Materialien für maximale Sicherheit.</p>
        </details>

        <details>
          <summary>Wie erhalte ich ein Angebot?</summary>
          <p>Senden Sie uns eine Anfrage über diese Seite – wir melden uns rasch mit einem transparenten Angebot.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- 09 Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Kontakt zum Installateur</h2>
        <p>
          Für professionelle Installation, Wartung oder Reparatur steht Ihnen unser Saunier Duval Installateur Wien jederzeit zur Verfügung.
          Unser Team aus erfahrenen Technikern und Spezialisten betreut Saunier Duval Gasgeräte, Duval Therme und komplette Heizsysteme zuverlässig.
        </p>
        <p style="margin-top:10px;">
          Über diese Seite können Sie schnell Kontakt aufnehmen und einen Termin vereinbaren.
          Unser Kundendienst sorgt für kompetente Betreuung, schnelle Einsatzzeiten und nachhaltige Lösungen.
          Vertrauen Sie auf Erfahrung, Fachwissen und einen Servicepartner, der Qualität und Sicherheit in den Mittelpunkt stellt.
        </p>
      </div>

      <form class="service-cta__form" action="#" method="post">
        @csrf
        <div class="service-formrow">
          <label>
            <span>Name</span>
            <input type="text" name="name" placeholder="Ihr Name" required>
          </label>
          <label>
            <span>Telefon</span>
            <input type="tel" name="phone" placeholder="+43 ..." required>
          </label>
        </div>

        <label style="margin-top:10px;">
          <span>Nachricht</span>
          <textarea name="message" rows="4" placeholder="Modell/Problem, Ort, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>

</main>

@endsection
