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
  <title>Saunier Duval Thermentausch Wien | Gastherme inkl. Montage & MwSt</title>
  <meta name="description" content="Saunier Duval Thermentausch in Wien ✔ Moderne Gastherme & Brennwerttechnik ✔ Faire Preise inkl. MwSt ✔ Beratung, Service & Angebot vom Fachbetrieb">
@endpush

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner">
      <p class="wolf-hero__kicker">Saunier Duval Thermentausch Wien</p>

      <h1>
        Saunier Duval Thermentausch Wien<br>
        <em>Gastherme inkl. Montage & MwSt</em>
      </h1>

      <p class="wolf-hero__sub">
        Ein professioneller Saunier Duval Thermentausch Wien sorgt für effiziente Heizung, zuverlässige Gastherme und modernen Komfort in Ihrem Zuhause.
      </p>

      <div class="wolf-hero__logo">
        <img src="{{ asset('img/1sauneri.jpeg') }}" alt="Saunier Duval Thermentausch Wien" loading="lazy" decoding="async">
      </div>

      <div class="wolf-hero__bullets" aria-label="Highlights">
        <span class="wolf-pill">Brennwerttechnik</span>
        <span class="wolf-pill">Preise inkl. MwSt</span>
        <span class="wolf-pill">Vorbefund</span>
        <span class="wolf-pill">Montage & Service</span>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="#kontakt-services">Angebot anfordern</a>
        <a class="wolf-btn wolf-btn--ghost" href="#ablauf-services">Ablauf ansehen</a>
      </div>

      <section class="promo-banner" id="duval-aktion">
        <div class="promo-banner__inner">
          <div class="promo-banner__content">
            <h2 class="promo-banner__title"><em>Saunier Duval Aktion</em></h2>
            <p class="promo-banner__price"><strong>ab €95</strong></p>

            <a class="promo-banner__btn" href="tel:+4314420617" aria-label="AKTION">
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
            <li class="toc-item"><a href="#sinnvoll-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Wann sinnvoll</span></a></li>
            <li class="toc-item"><a href="#heizloesungen-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Heizlösungen</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#montage-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Montage</span></a></li>
            <li class="toc-item"><a href="#kosten-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Warum Profi</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Angebot</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Wann sinnvoll -->
  <section class="service-section" id="sinnvoll-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Wann ein Thermentausch in Wien sinnvoll ist</h2>
            <p>
              Ein Thermentausch in Wien ist sinnvoll, wenn eine bestehende Therme häufige Probleme verursacht, Reparaturen zunehmen
              oder die Energieeffizienz nicht mehr dem aktuellen Stand entspricht. Besonders ältere Saunier Duval Gasthermen verlieren
              mit der Zeit an Leistung und Sicherheit.
            </p>
            <p>
              Moderne Brennwert Therme Lösungen von Saunier Duval senken den Gasverbrauch, reduzieren CO2 und verbessern die Wärmeversorgung.
              Auch bei steigenden Anforderungen an Warmwasser oder bei wiederkehrenden Störungen empfiehlt sich ein Austausch.
              Ein erfahrener Installateur oder Fachmann prüft Gerät, Heizsystemen, Vorbefund und empfiehlt die passende Lösung für Wien und Umgebung.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/sauneri.jpeg') }}" alt="Wann ein Thermentausch in Wien sinnvoll ist" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Heizlösungen -->
  <section class="service-section service-section--soft" id="heizloesungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Moderne Saunier Duval Heizlösungen</h2>
        <p>Saunier Duval steht für innovative Gasgeräte, hohe Energieeffizienz und zuverlässige Technik für unterschiedliche Anforderungen.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔥</div>
          <div>
            <h3>Brennwerttherme für effiziente Wärme</h3>
            <p>Eine Saunier Duval Brennwert Therme nutzt Energie besonders effizient. Der geringere Gasverbrauch senkt Kosten, erhöht Effizienz und schont Umwelt und Ressourcen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚿</div>
          <div>
            <h3>Gastherme für Heizung und Warmwasser</h3>
            <p>Die Saunier Duval Gastherme kombiniert Heizung und Warmwasser in einem Gerät. Ideal für Wohnungen, Häuser und moderne Heizsystemen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Saunier Duval Modelle im Überblick</h3>
            <p>Jede Duval Therme wird nach Heizleistung, Nennwärmeleistung, Abmessungen und Einsatzbereich ausgewählt. So passt das Gerät optimal zum Zuhause.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛡️</div>
          <div>
            <h3>Zuverlässige Technik & Sicherheit</h3>
            <p>Moderne Saunier Duval Gasgeräte bieten stabile Leistung, sichere Regelung und langlebige Komponenten für einen zuverlässigen Betrieb.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section" id="ablauf-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>So läuft der Saunier Duval Thermentausch ab</h2>
        <p>
          Der Saunier Duval Thermentausch erfolgt strukturiert und transparent. Nach der Anfrage erfolgt eine Besichtigung inklusive Vorbefund
          und Abstimmung mit dem Rauchfangkehrers. Anschließend werden Installation und Montage geplant, die alte Therme demontiert und fachgerecht entsorgt.
          Die neue Saunier Duval Gastherme wird installiert, angeschlossen und in Betrieb genommen. Abschließend erfolgt eine Einschulung, Übergabe relevanter Daten
          und Hinweise zum Betrieb.
        </p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔎</div>
          <div>
            <h3>Besichtigung & Vorbefund</h3>
            <p>Wir prüfen Gerät, Heizsystemen, Anschlüsse und Zustand. Der Vorbefund schafft Klarheit für Planung, Kosten und die passende Therme.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🧾</div>
          <div>
            <h3>Abstimmung mit Rauchfangkehrers</h3>
            <p>Wir stimmen relevante Punkte ab, damit Montage, Abgasführung und Betrieb den Vorgaben entsprechen und alles reibungslos läuft.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Montage, Anschlüsse und Tausch</h3>
            <p>Demontage der alten Therme, fachgerechte Entsorgung und Installation der neuen Saunier Duval Gastherme inklusive aller Anschlüsse.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">✅</div>
          <div>
            <h3>Inbetriebnahme & Übergabe</h3>
            <p>Inbetriebnahme, Funktionskontrolle, Einschulung und Übergabe der Daten – mit klaren Hinweisen für Betrieb, Wartung und Service.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Montage / Sicherheit -->
  <section class="service-section service-section--soft" id="montage-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Montage, Betrieb und Sicherheit</h2>
            <p>
              Eine fachgerechte Montage ist entscheidend für Sicherheit, Effizienz und den zuverlässigen Betrieb der Saunier Duval Therme.
            </p>
            <p>
              <strong>Installation durch erfahrene Spezialisten</strong><br>
              Erfahrene Spezialist und Techniker führen alle Arbeiten an Gas, Brenner und Gerät fachgerecht aus.
              Sicherheit und korrekter Betrieb stehen im Fokus.
            </p>
            <p>
              <strong>Wartung, Thermenservice und Kundendienst</strong><br>
              Regelmäßige Wartung, Duval Thermenservice und Thermenservice Wien sichern langfristige Effizienz,
              reduzieren Reparaturbedarf und erhöhen die Lebensdauer.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-5.jpg') }}" alt="Montage, Betrieb und Sicherheit" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="kosten-services">
    <div class="service-container">
      <div class="card-split">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Kosten, Preis und Aktion</h2>
            <p>
              Die Kosten für einen Saunier Duval Thermentausch in Wien hängen von Gerät, Heizleistung, Montageaufwand und Auswahl ab.
              Ein transparenter Kostenvoranschlag zeigt alle Preise inklusive MwSt.
              Durch eine Aktion oder ein attraktives Angebot lassen sich zusätzliche Einsparungen erzielen.
            </p>
            <p>
              Moderne Saunier Duval Gasgeräte bieten hohe Energieeffizienz, niedrige Betriebskosten und langfristige Sicherheit.
            </p>

            <div class="service-stats">
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Preis inkl. MwSt</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Aktion & attraktives Angebot</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparenter Kostenvoranschlag</div></div>
              <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Keine Überraschungen</div></div>
            </div>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-9.jpg') }}" alt="Kosten, Preis und Aktion" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="service-container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text">
          <div class="card-box">
            <h2>Thermentausch in Wien, Niederösterreich und Umgebung</h2>
            <p>
              Ein Saunier Duval Thermentausch in Wien, Niederösterreich und der umliegenden Umgebung erfordert Erfahrung mit regionalen Vorgaben
              und unterschiedlichen Heizsystemen. Ob Wien, Umgebung oder Niederösterreich – jede Immobilie stellt andere Anforderungen an Anlage,
              Anschlüsse und Einsatz.
            </p>
            <p>
              Unsere Installateure und Mitarbeiter sind regelmäßig vor Ort im Einsatz und betreuen Kunden persönlich.
              Wohnungen, Einfamilienhäuser und moderne Heizsystemen werden individuell beurteilt.
              Durch klare Planung, saubere Abwicklung und kurze Wege entsteht ein reibungsloser Thermentausch in Wien und Umgebung – zuverlässig und effizient.
            </p>
          </div>
        </div>

        <div class="card-split__media service-media">
          <div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/vaillant-10.jpg') }}" alt="Thermentausch Region Wien Niederösterreich Umgebung" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum Profi (dark) -->
  <section class="service-section service-section--dark" id="vorteile-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Warum ein professioneller Saunier Duval Thermentausch überzeugt</h2>
        <p>
          Ein fachgerecht umgesetzter Saunier Duval Thermentausch erhöht die Sicherheit, senkt Kosten und verbessert den Wohnkomfort nachhaltig.
          Unsere Experten prüfen Gerät, Heizleistung, Brenner und Anschlüsse sorgfältig.
        </p>
        <p style="margin-top:10px; color:rgba(255,255,255,.9);">
          Durch saubere Montage, regelmäßige Thermenwartung und zuverlässigen Kundendienst bleibt die neue Duval Therme langlebig und effizient.
          Kunden profitieren von persönlichem Service, fachlichem Know-how und einem festen Partner für Wartung, Reparatur, Notdienst und Thermenservice Wien.
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
            <li>Erfahrung, Fachwissen und Spezialisten</li>
            <li>Fachgerechte Entsorgung und sicherer Tausch</li>
            <li>Hohe Effizienz und lange Lebensdauer</li>
            <li>Ein Team für Service, Wartung und Betrieb</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zum Saunier Duval Thermentausch</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wann ist ein Saunier Duval Thermentausch sinnvoll?</summary>
          <p>Ein Austausch ist sinnvoll bei häufigen Problemen, steigenden Kosten oder wenn die bestehende Therme nicht mehr energieeffizient arbeitet.</p>
        </details>

        <details>
          <summary>Wie lange dauert ein Thermentausch in Wien?</summary>
          <p>In der Regel erfolgt der Austausch inklusive Montage und Inbetriebnahme innerhalb eines Tages, abhängig von Vorbefund und Anlage.</p>
        </details>

        <details>
          <summary>Welche Saunier Duval Therme ist die richtige Auswahl?</summary>
          <p>Die Auswahl hängt von Heizleistung, Warmwasserbedarf und Heizsystemen ab. Unsere Fachleute beraten umfassend.</p>
        </details>

        <details>
          <summary>Sind Wartung und Thermenservice erforderlich?</summary>
          <p>Ja, regelmäßige Wartung und Duval Thermenservice sichern Effizienz, Sicherheit und langfristigen Betrieb.</p>
        </details>

        <details>
          <summary>Was kostet ein Saunier Duval Thermentausch inkl. MwSt?</summary>
          <p>Die Preise richten sich nach Gerät, Montage und Aufwand. Ein Angebot inklusive MwSt sorgt für Transparenz.</p>
        </details>

        <details>
          <summary>Gibt es einen Saunier Duval Notdienst?</summary>
          <p>Ja, bei Störung oder dringendem Anliegen steht ein Notdienst zur Verfügung, um schnelle Hilfe zu gewährleisten.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM ALWAYS LAST -->
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
