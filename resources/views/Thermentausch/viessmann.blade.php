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
  .service-btn--accent{background:var(--accent); color:#1a1a1a;}
  .service-btn--accent:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
  .service-btn--ghost{background:#fff; border-color:var(--line);}
  .service-btn--ghost:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.08)}
  .service-btn--ghost-on-dark{
    background:transparent;
    border-color:rgba(255,255,255,.25);
    color:#fff;
  }

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

  /* ✅ Stats pills (2 in a row) */
  .service-stats{
    display:grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap:10px;
    margin-top:14px;
  }
  .service-stat{
    display:flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    background:#eef3f3;
    border:1px solid rgba(24,64,72,.22);
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

  /* ✅ Card split: equal height columns */
  .card-split{
    display:grid;
    grid-template-columns: 1.12fr .88fr;
    gap:18px;
    align-items:stretch; /* equal height columns */
  }
  .card-split--reverse .card-split__text{order:2}
  .card-split--reverse .card-split__media{order:1}

  .card-split__text,
  .card-split__media{display:flex;}

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

  /* ✅ Image wrapper (inner div controls size, img is 100% both ways) */
  .img-wrap{
    width:100%;
    height:100%; /* match text height */
    display:flex;
  }
  .img-wrap__inner{
    width:100%;
    height:100%; /* match text height */
    border-radius: var(--radius2);
    border:1px solid var(--line);
    box-shadow:0 18px 50px rgba(0,0,0,.12);
    overflow:hidden;
    background: var(--muted);
    display:flex;
  }
 .img-wrap{
  width:100%;
  height:100%;
  display:flex;
}

.img-wrap__inner{
  width:100%;
  height:100%;
  border-radius: var(--radius2);
  border:1px solid var(--line);
  box-shadow:0 18px 50px rgba(0,0,0,.12);
  overflow:hidden;
  background: var(--muted);
}

.img-wrap__inner img{
  width:100%;
  height:100%;
  /* object-fit:cover;        ✅ FULL COVER */
  object-position:center;  /* ✅ Centered */
  display:block;
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
    position:absolute; inset:0;
    background-image:url("img/hero-scetion.jpeg");
    background-size:cover;
    background-position:left center;
    transform:scale(1.02);
    z-index:0;
  }
  .wolf-hero::after{
    content:"";
    position:absolute; inset:0;
    background:rgba(0,0,0,.55);
    z-index:1;
  }
  .wolf-hero__inner{
    position:relative; z-index:2;
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

  .promo-banner__inner::after{
    content:"";
    position:absolute;
    inset:0;
    background:url("{{ asset('img/final.png') }}") right center / cover no-repeat;
    z-index:0;
  }

  /* =========================
     ✅ TOC (after hero)
     ========================= */
  .toc-wrap{padding:18px 0 0; background:#fff;}
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
    padding:10px;
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
    gap:10px;
    padding:12px 12px;
    border-radius:14px;
    border:1px solid rgba(24,64,72,.12);
    background:#fff;
    transition:.15s ease;
  }
  .toc-item a:hover{background:#f2f7f7; border-color:rgba(24,64,72,.18);}
  .toc-badge{
    width:24px; height:24px;
    border-radius:999px;
    display:grid; place-items:center;
    background:rgba(251,154,27,.18);
    border:1px solid rgba(251,154,27,.35);
    font-size:12px;
    font-weight:900;
    color:#b76500;
    flex:0 0 auto;
  }
  .toc-text{font-weight:800; color:#0f3a40; font-size:13px;}
  .toc-card.is-collapsed .toc-body{
    max-height:0;
    padding:0 10px;
    overflow:hidden;
  }

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
    .card-split__text,.card-split__media{display:block;}

    /* On mobile, give image a safe height */
    .img-wrap{min-height:240px;}
    .img-wrap__inner{min-height:240px;}

    .wolf-hero{padding:120px 14px 90px; min-height:480px;}
    .wolf-hero__sub{font-size:14px}
    .toc-card{max-width:100%;}
  }
  @media (max-width: 980px){
  .img-wrap,
  .img-wrap__inner{
    min-height:240px;
  }
}



</style>

@push('meta')
  <title>Viessmann Thermentausch Wien | Gastherme inkl. Montage & MwSt</title>
  <meta name="description" content="Viessmann Thermentausch in Wien ✔ Moderne Gastherme & Brennwerttechnik ✔ Faire Preise inkl. MwSt ✔ Beratung, Angebot & Service vom Fachbetrieb">
@endpush

<main>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Viessmann Thermentausch Wien</p>

      <h1>
        Viessmann Thermentausch Wien<br>
        <em>Gastherme inkl. Montage & MwSt</em>
      </h1>

      <p class="wolf-hero__sub">
        Ein professioneller Viessmann Thermentausch in Wien sorgt für zuverlässige Heizung, moderne Gastherme und langfristige Effizienz im eigenen Zuhause.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1viesman.jpeg') }}" alt="Viessmann Thermentausch Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Brennwerttechnik</span>
        <span class="wolf-pill">Montage inkl. MwSt</span>
        <span class="wolf-pill">Beratung & Angebot</span>
        <span class="wolf-pill">Fachbetrieb</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Beratung anfordern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Viessmann Thermentausch Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab  €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4369981243996" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ✅ TOC directly AFTER HERO -->
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
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Heizsysteme</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Montage</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Vorteile</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Angebot</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Wann sinnvoll -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch wirklich sinnvoll ist</h2>
            <p>
              Ein Thermentausch in Wien ist sinnvoll, wenn eine bestehende Viessmann Therme häufige Probleme verursacht, Reparaturen zunehmen oder die Energiekosten steigen.
              Ältere Gasthermen entsprechen oft nicht mehr dem aktuellen Standard moderner Heizsysteme.
            </p>
            <p>
              Neue Viessmann Gas Brennwertthermen bieten höhere Effizienz, bessere Sicherheit und einen stabilen Betrieb.
              Ein erfahrener Installateur oder Fachmann prüft Gerät, Anlage und Anschlüsse und empfiehlt eine passende Lösung für langfristige Nutzung.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/viesman.jpeg') }}" alt="Thermentausch sinnvoll" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ✅ Heizsysteme (UPDATED like first image: full width + 2-column cards, NO image) -->
<section class="service-section service-section--soft" id="partner-services">
  <div class="service-container">

    <div class="service-section__head">
      <h2>Moderne Viessmann Heizsysteme im Überblick</h2>
      <p>Viessmann bietet hochwertige Gasgeräte für unterschiedliche Heizungsanlagen – abgestimmt auf Wohnsituation, Energiebedarf und Wartung.</p>
    </div>

    <div class="service-grid service-grid--2">
      <article class="service-feature">
        <div class="service-feature__icon" aria-hidden="true">🔥</div>
        <div>
          <h3>Brennwerttechnik für mehr Effizienz</h3>
          <p>Die Viessmann Brennwerttherme nutzt Energie besonders effizient. Im Vergleich zu älteren Systemen senkt sie den Gasverbrauch und steigert die Effizienz nachhaltig.</p>
        </div>
      </article>

      <article class="service-feature">
        <div class="service-feature__icon" aria-hidden="true">🚿</div>
        <div>
          <h3>Kombitherme für flexible Anwendungen</h3>
          <p>Eine Viessmann Kombitherme vereint Heizung und Warmwasser in einem Gerät. Ideal für Wohnungen, Einfamilienhäuser und moderne Heizsystemen.</p>
        </div>
      </article>

      <article class="service-feature">
        <div class="service-feature__icon" aria-hidden="true">⚙️</div>
        <div>
          <h3>Viessmann Modelle passend zur Anlage</h3>
          <p>Jedes Viessmann Modell ist auf bestimmte Leistung, Bauteile und Einsatzbereiche ausgelegt. Die Auswahl erfolgt nach Anlage, Energiebedarf und Zuhause.</p>
        </div>
      </article>

      <article class="service-feature">
        <div class="service-feature__icon" aria-hidden="true">🛡️</div>
        <div>
          <h3>Sicherheit & zuverlässiger Betrieb</h3>
          <p>Moderne Geräte bieten stabile Heizleistung, saubere Verbrennung und hohe Betriebssicherheit – ideal für den langfristigen Einsatz im Alltag.</p>
        </div>
      </article>
    </div>

  </div>
</section>


  <!-- ✅ Ablauf -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>So läuft der Viessmann Thermentausch ab</h2>
        <p>Der Thermentausch erfolgt in klaren Schritten und mit strukturierter Abwicklung.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Beratung, Planung und Kontrolle</h3>
            <p>Nach der Beratung prüft der Techniker vor Ort Gerät, Heizungsanlage und bestehende Arbeiten. Danach folgt Planung und Angebot.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Installation und Montage der Anlage</h3>
            <p>Anschließend erfolgt die Installation und Montage der neuen Viessmann Therme. Anschlüsse werden fachgerecht umgesetzt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">♻️</div>
          <div>
            <h3>Thermentausch und Entsorgung</h3>
            <p>Die alte Anlage wird fachgerecht entsorgt, alle Anschlüsse geprüft und der Betrieb kontrolliert – sauber und sicher.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Inbetriebnahme und Einschulung</h3>
            <p>Nach der Inbetriebnahme erhalten Kunden eine Einschulung sowie Hinweise zur Wartung und zum Thermenservice.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ✅ Montage -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Montage, Betrieb und Sicherheit</h2>
            <p>
              Eine fachgerechte Montage ist entscheidend für Sicherheit, Effizienz und die Lebensdauer der Viessmann Therme.
            </p>
            <p><strong>Installation und technische Anschlüsse</strong><br>
              Alle Arbeiten an Gastherme, Anschlüsse und Anlage erfolgen nach aktuellem Standard. Sicherheit und zuverlässiger Betrieb stehen im Fokus.
            </p>
            <p><strong>Fachbetrieb, Techniker und Kontrolle</strong><br>
              Ein Fachbetrieb mit erfahrenem Team stellt sicher, dass alle Arbeiten geprüft, dokumentiert und langfristig betreut werden.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-4.jpg') }}" alt="Montage und Sicherheit" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Kosten -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Preise und Förderungen</h2>
            <p>
              Die Kosten für einen Viessmann Thermentausch in Wien hängen vom Modell, Montageaufwand, Anlage und Zubehör ab.
              Ein transparenter Kostenvoranschlag zeigt alle Preise inklusive MwSt und möglichen Förderungen.
            </p>
            <p>
              Moderne Viessmann Thermen reduzieren Energiekosten und steigern die Effizienz dauerhaft. Durch klare Planung, faire Preise und strukturierte Abwicklung
              erhalten Kunden eine wirtschaftliche Lösung ohne Überraschungen.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Preise inkl. MwSt</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparenter Kostenvoranschlag</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mögliche Förderungen nutzen</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Klare Planung</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-3.jpg') }}" alt="Kosten und Preise" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch in Wien, Niederösterreich und Umgebung</h2>
            <p>
              Ein Viessmann Thermentausch in Wien, Niederösterreich und der näheren Umgebung erfordert regionale Erfahrung und saubere Organisation.
              Ob Wien, St. Pölten, Wiener Neustadt, Bruck an der Leitha oder Waidhofen an der Ybbs – jede Region bringt unterschiedliche Anforderungen mit sich.
            </p>
            <p>
              Unsere Installateure sind regelmäßig im Einsatz und betreuen Kunden direkt vor Ort.
              Durch kurze Wege, klare Abwicklung und abgestimmte Arbeiten entsteht ein reibungsloser Thermentausch – angepasst an Zuhause, Ort und Bedarf.
            </p>
          </div>
        </div>

        <div class="card-split__media">
          <div class="img-wrap">
            <div class="img-wrap__inner">
              <img src="{{ asset('img/vaillant-2.jpg') }}" alt="Region Wien Niederösterreich" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ Vorteile (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Warum ein fachgerechter Viessmann Thermentausch überzeugt</h2>
        <p>
          Ein professionell umgesetzter Thermentausch erhöht nicht nur Effizienz, sondern auch Sicherheit und Zuverlässigkeit der Heizungsanlage.
          Ein erfahrener Fachbetrieb prüft Anlage, Bauteile und Betrieb sorgfältig.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Durch fachgerechte Montage, regelmäßige Wartung und strukturierten Thermenservice bleibt die Viessmann Therme langfristig leistungsfähig.
          Kunden profitieren von persönlicher Betreuung und einem festen Partner – auch bei Notfällen.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Angebot anfordern</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Ihre Vorteile</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Erfahrung, Fachwissen und Expertise</li>
            <li>Saubere Entsorgung der alten Anlage</li>
            <li>Hohe Sicherheit und längere Lebensdauer</li>
            <li>Ein Team für Beratung, Service und Betrieb</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Viessmann Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Viessmann Thermentausch sinnvoll?</summary>
          <p>Ein Austausch ist sinnvoll bei häufigen Problemen, steigenden Energiekosten oder wenn die bestehende Therme nicht mehr dem aktuellen Standard entspricht.</p>
        </details>

        <details>
          <summary>Wie lange dauern die Arbeiten beim Thermentausch?</summary>
          <p>In der Regel erfolgen Installation, Montage und Inbetriebnahme innerhalb eines Tages, abhängig von Anlage und Umfang der Arbeiten.</p>
        </details>

        <details>
          <summary>Welche Viessmann Therme ist die richtige Wahl?</summary>
          <p>Die Auswahl hängt von Heizungsanlage, Leistung, Zuhause und Warmwasserbedarf ab. Wir beraten Sie gerne zur passenden Entscheidung.</p>
        </details>

        <details>
          <summary>Sind Wartung und Thermenservice nach dem Tausch notwendig?</summary>
          <p>Ja, regelmäßige Wartung und Viessmann Thermenwartung sichern Effizienz, Sicherheit und langfristigen Betrieb.</p>
        </details>

        <details>
          <summary>Was kostet ein Viessmann Thermentausch inkl. MwSt?</summary>
          <p>Die Kosten richten sich nach Modell, Anlage und Montage. Ein Angebot mit MwSt schafft volle Transparenz.</p>
        </details>

        <details>
          <summary>Gibt es Förderungen für neue Viessmann Thermen?</summary>
          <p>Je nach Möglichkeit und Region können Förderungen beantragt werden. Wir informieren Kunden über aktuelle Optionen.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ✅ CONTACT -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Beratung & Angebot anfordern</h2>
        <p>
          Sie planen einen Viessmann Thermentausch in Wien oder Niederösterreich?
          Unsere Experten beraten Sie gerne persönlich und erstellen ein individuelles Angebot inklusive MwSt, Service und Betreuung.
        </p>
        <p style="margin-top:10px;">
          👉 Jetzt Anfrage senden und Viessmann Thermentausch professionell umsetzen
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
          <textarea name="message" rows="4" placeholder="Modell/Anlage, Ort, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>

</main>
<!--  -->
@endsection
