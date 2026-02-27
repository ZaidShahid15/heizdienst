<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Windhager Thermenwartung Wien – Service &amp; Notdienst</title>
  <meta name="description" content="Professionelle Windhager Thermenwartung Wien durch erfahrene Experten für Sicherheit, Effizienz und zuverlässigen Betrieb. Notdienst in Wien NÖ & Burgenland.">
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

    /* ✅ stats pills (2 in a row) */
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

    /* ===== ✅ Card split (EQUAL HEIGHT like your previous site) ===== */
    .card-split{
      display:grid;
      grid-template-columns: 1.12fr .88fr;
      gap:18px;
      align-items:stretch; /* ✅ stretch for equal height */
    }
    .card-split--reverse .card-split__text{order:2}
    .card-split--reverse .card-split__media{order:1}

    .card-split__text,
    .card-split__media{
      display:flex; /* ✅ make children fill height */
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

    /* ✅ Image box = equal height with content (fills full) */
    .service-media{width:100%;}
    .service-media__box{
      width:100%;
      height:100%;            /* ✅ same height as text card */
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
       ✅ TOC (after hero, full width)
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

      .service-stats{grid-template-columns:1fr;} /* stats 1 per row on mobile */

      .card-split{grid-template-columns:1fr}
      .card-split--reverse .card-split__text{order:1}
      .card-split--reverse .card-split__media{order:2}

      .card-split__text,
      .card-split__media{display:block;}

      .service-media__box{min-height:220px; height:auto;} /* ✅ nice on mobile */
      .wolf-hero{padding:120px 14px 90px; min-height:480px;}
      .wolf-hero__sub{font-size:14px}
    }
  </style>
</head>
<body>
<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Service & Notdienst</p>

      <h1>
        Windhager Thermenwartung Wien<br>
        <em>– Service & Notdienst</em>
      </h1>

      <p class="wolf-hero__sub">
        Professionelle Windhager Thermenwartung Wien durch erfahrene Experten für Sicherheit, Effizienz und zuverlässigen Betrieb. 
        Windhager Notdienst in Wien NÖ & Burgenland – transparente Preise, zertifizierter Kundendienst, persönliche Betreuung.
      </p>

      <div class="wolf-hero__logo">
        <img src="img/Windhager.png" alt="Windhager Thermenwartung Wien Logo" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Windhager Notdienst</span>
        <span class="wolf-pill">Transparente Preise</span>
        <span class="wolf-pill">Zertifizierter Kundendienst</span>
        <span class="wolf-pill">Persönliche Betreuung</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
        <a class="wolf-btn wolf-btn--ghost" href="#leistungen-services">Leistungen ansehen</a>
      </div>

      <section class="promo-banner" id="wolf-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Windhager Wartungsaktion</em></h2>
            <p class="promo-banner__price"><strong>ab €99</strong></p>

            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
              <span class="promo-banner__btn-ico">  </span>
              AKTION
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- TOC AFTER HERO -->
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
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Partner</span></a></li>
            <li class="toc-item"><a href="#partner-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Geräte</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Dienstleistungen</span></a></li>
            <li class="toc-item"><a href="#warum-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Warum Wartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Preise</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Meisterbetrieb</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1: Ihr Windhager Partner in Wien Niederösterreich -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Windhager Partner in Wien Niederösterreich</h2>
            <p>
              Als erfahrener Partner für Windhager Thermenwartung Wien betreuen wir Privatkunden und Betriebe in Wien Niederösterreich und Burgenland. Unsere Windhager Experten verfügen über fundiertes Fachwissen und langjährige Erfahrung im Umgang mit jeder Windhager Therme, Gastherme und modernen Heizungsanlage.
            </p>
            <p>
              Wir arbeiten nach Hersteller Standards und führen sämtliche Wartungsarbeiten mit höchster Professionalität durch. Als Meisterbetrieb und Installateur garantieren wir Sicherheit, Effizienz und Zuverlässigkeit im laufenden Betrieb Ihrer Heizung. Unser Engagement für Qualität und Kundenzufriedenheit macht uns zum verlässlichen Partner in Wien NÖ und BGld – direkt bei Ihnen vor Ort.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/1Windhager.jpeg" alt="Windhager Partner in Wien Niederösterreich" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Für welche Windhager Geräte & Systeme? -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Für welche Windhager Geräte & Systeme?</h2>
            <p>
              <strong>Windhager Therme und Gastherme Modelle</strong><br>
              Unsere Windhager Thermenwartung Wien umfasst sämtliche Windhager Geräte für private Besitzer und gewerbliche Kunden in Wien Niederösterreich und Burgenland. Wir betreuen jede Windhager Therme, klassische Gastherme sowie moderne Heizungsanlagen mit höchster Professionalität.
            </p>
            <p>
              Ob einzelne Gasgeräte oder komplette Heizungsanlage – unser Team prüft den Zustand aller Komponenten sorgfältig. Dabei kontrollieren wir Heizkreislauf, Heizungsanlagen und sicherheitsrelevante Bauteile direkt vor Ort in Wien NÖ oder BGld. Durch unsere Expertise gewährleisten wir zuverlässigen Betrieb, optimale Effizienz und nachhaltige Lösung für jede Windhager Anlage.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/vaillant-8.jpg" alt="Windhager Geräte und Systeme" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Dienstleistungen für Ihre Windhager Therme (Grid) -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Dienstleistungen für Ihre Windhager Therme</h2>
        <p>Umfassender Windhager Thermenservice, Wartung, Reparatur und Notdienst in Wien und Umgebung.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Windhager Thermenwartung Wien</h3>
            <p>Die regelmäßige Windhager Thermenwartung Wien erhöht die Lebensdauer und sorgt für maximale Sicherheit. Durch professionelle Wartung werden Mängel frühzeitig erkannt.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔧</div>
          <div>
            <h3>Windhager Thermenservice & Kontrolle</h3>
            <p>Gründliche Reinigung, Kontrolle aller Gasgeräte, Prüfung von Heizkreislauf und Optimierung für bessere Effizienz.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Windhager Kundendienst Wien</h3>
            <p>Schnelle Hilfe, persönliche Beratung und zuverlässige Betreuung in Wien Niederösterreich bei jedem Problem.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Windhager Reparatur bei Störungen</h3>
            <p>Bei Fehlern wie E02 Überhitzungsschutz führen wir fachgerechte Reparatur vor Ort durch – defekte Teile werden rasch getauscht.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Windhager Notdienst & Einsatz</h3>
            <p>Rund um die Uhr in Wien NÖ und Burgenland erreichbar. Wir reagieren sofort, um Sicherheit und Betrieb Ihrer Gastherme zu gewährleisten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔄</div>
          <div>
            <h3>Windhager Thermentausch & Austausch</h3>
            <p>Bei veralteter Anlage beraten wir zum Thermentausch oder Austausch einzelner Komponenten – passende Lösung für moderne Heizungen.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Section 4: Warum Windhager Thermenwartung entscheidend ist -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Warum Windhager Thermenwartung entscheidend ist</h2>
            <p>
              Eine professionelle Windhager Thermenwartung sorgt für sicheren Betrieb Ihrer Windhager Therme in Wien Niederösterreich. Durch regelmäßige Wartung, Reinigung und Überprüfung werden Ablagerungen, Verschleißteile und versteckte Mängel rechtzeitig erkannt.
            </p>
            <p>
              Unsere Experten prüfen Zustand, Heizkreislauf und sämtliche Gasgeräte sorgfältig. Das erhöht Effizienz, senkt Energieverbrauch und verlängert die Lebensdauer Ihrer Heizungsanlage deutlich. Eine gut gewartete Gastherme arbeitet zuverlässiger und schützt Besitzer vor teuren Reparatur Kosten. Mit unserem Wartungsservice garantieren wir höchste Standards, professionelle Arbeit und nachhaltige Lösung für langfristige Sicherheit und Wohnkomfort.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Höchste Standards</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Professionelle Arbeit</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Nachhaltige Lösung</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/vaillant-9.jpg" alt="Warum Windhager Thermenwartung wichtig ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Ablauf der Windhager Thermenwartung -->
  <section class="service-section" id="reparatur-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ablauf der Windhager Thermenwartung</h2>
            <p>
              <strong>So erfolgt unsere Wartung</strong><br>
              Die Windhager Thermenwartung Wien beginnt mit einer Terminvereinbarung in Wien oder Niederösterreich. Unsere Techniker kommen pünktlich zum vereinbarten Ort und starten mit einer umfassenden Überprüfung Ihrer Windhager Therme.
            </p>
            <p>
              Im Rahmen der Wartungsarbeiten führen wir eine gründliche Reinigung durch, entfernen Ablagerungen und prüfen sicherheitsrelevante Komponenten. Besonderes Augenmerk legen wir auf Überprüfung von Heizkreislauf, Gasgeräte und Heizungsanlage. Abschließend optimieren wir Einstellungen für bessere Effizienz und Energieeinsparung. Unsere Profis dokumentieren den Zustand der Anlage und beraten Sie transparent zu weiterem Wert, möglichem Austausch oder notwendiger Reparatur.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Terminvereinbarung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Gründliche Reinigung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Optimierung & Beratung</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/vaillant-11.jpg" alt="Ablauf der Windhager Thermenwartung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Windhager Notdienst Wien NÖ BGld (dark) -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Windhager Notdienst Wien NÖ BGld</h2>
        <p>
          Bei einem akuten Problem steht Ihnen unser Windhager Notdienst in Wien Niederösterreich und Burgenland jederzeit zur Verfügung. Der Notdienst reagiert rasch, um Sicherheit und Betrieb Ihrer Windhager Therme sicherzustellen.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Unser Windhager Notdienst übernimmt die schnelle Behebung von Störungen, damit Heizungsprobleme oder Ausfälle Ihrer Gastherme keine langen Unterbrechungen verursachen. Im Einsatz handeln unsere Experten effizient, professionell und lösungsorientiert – für maximale Zuverlässigkeit.
        </p>
        <div class="service-emergency__actions">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>

      <div class="service-emergency__panel">
        <div class="service-panel">
          <h3>Typische Notfälle</h3>
          <ul class="service-checklist service-checklist--on-dark">
            <li>Ausfall der Gastherme / Heizung</li>
            <li>Plötzliche Störungen & Fehlermeldungen</li>
            <li>Fehlercode E02 (Überhitzungsschutz)</li>
            <li>Akute Heizungsprobleme</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Rund um die Uhr im Einsatz – Wien, Niederösterreich und Burgenland.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Preise, Service & Transparenz -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Preise, Service & Transparenz</h2>
            <p>
              Bei unserer Windhager Thermenwartung Wien setzen wir auf transparente Preise und nachvollziehbare Kostenstruktur. Sämtliche Dienstleistungen, Reparatur oder Wartung werden offen kommuniziert – ohne versteckte Gebühren.
            </p>
            <p>
              Regelmäßige Wartung schützt Ihre Windhager Therme vor größeren Schäden und spart langfristig Energie sowie Kosten. Unser Service steht für Professionalität, Engagement und faire Betreuung in Wien Niederösterreich. So sichern wir Kundenzufriedenheit und nachhaltige Lösung für Ihre Heizung.
            </p>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/vaillant-3.jpg" alt="Transparente Preise für Windhager Service" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Ihr Windhager Meisterbetrieb in Wien -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Ihr Windhager Meisterbetrieb in Wien</h2>
            <p>
              Als Meisterbetrieb und verlässlicher Partner für Windhager Thermenwartung Wien stehen wir für Fachwissen, Erfahrung und höchste Standards. Unser Team aus Installateur und Experten arbeitet nach Hersteller Vorgaben und sorgt für professionelle Arbeit bei jeder Windhager Anlage.
            </p>
            <p>
              Wir verstehen den richtigen Umgang mit sensiblen Bauteilen wie Heizungsthermistor Thermistor und garantieren sichere Installationen sowie fachgerechte Betreuung. In Wien NÖ und Burgenland sind wir Ihr Partner für langfristige Sicherheit, Effizienz und zuverlässigen Betrieb Ihrer Heizungsanlage.
            </p>
            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachwissen & Erfahrung</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hersteller Standards</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Sichere Installation</div></div>
            </div>
          </div>
        </div>
        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="img/vaillant-6.jpg" alt="Windhager Meisterbetrieb Wien" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Windhager Thermenwartung</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>1. Wie oft sollte eine Windhager Thermenwartung erfolgen?</summary>
          <p>Eine jährliche Windhager Thermenwartung wird empfohlen, um Sicherheit, Effizienz und zuverlässigen Betrieb sicherzustellen.</p>
        </details>

        <details>
          <summary>2. Was tun bei einem Problem mit der Windhager Therme?</summary>
          <p>Kontaktieren Sie sofort unseren Windhager Kundendienst oder Notdienst. Unsere Experten leisten schnelle Hilfe vor Ort in Wien Niederösterreich.</p>
        </details>

        <details>
          <summary>3. Wann ist ein Windhager Thermentausch sinnvoll?</summary>
          <p>Wenn Reparaturen häufiger auftreten oder die Effizienz stark sinkt, kann ein Windhager Thermentausch wirtschaftlich sinnvoll sein.</p>
        </details>

        <details>
          <summary>4. Betreuen Sie auch Burgenland und BGld?</summary>
          <p>Ja, unser Windhager Partner Team ist in Wien NÖ, Niederösterreich und Burgenland flächendeckend im Einsatz.</p>
        </details>

        <details>
          <summary>5. Wird auch eine Reparatur direkt durchgeführt?</summary>
          <p>Ja, unser Windhager Kundendienst führt Reparatur und Behebung von Störungen unmittelbar vor Ort durch.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Section 10: Kontakt / CTA -->
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
  // Simple toggle for TOC (optional, same as before)
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
</body>
</html>