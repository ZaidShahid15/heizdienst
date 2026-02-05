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

  /* HERO */
  .service-hero{
    padding:145px 0 48px;
    position:relative;
    overflow:hidden;
    border-bottom:1px solid var(--line);
    background:#0f2f34;
  }
  .service-hero::before{
    content:"";
    position:absolute; inset:0;
    background-image:url('img/hero-scetion.jpeg');
    background-size:cover;
    background-position:center;
    transform:scale(1.02);
    z-index:0;
  }
  .service-hero::after{
    content:"";
    position:absolute; inset:0;
    background:
      linear-gradient(90deg,
        rgba(15,47,52,.92) 0%,
        rgba(15,47,52,.86) 35%,
        rgba(15,47,52,.45) 55%,
        rgba(15,47,52,0) 72%
      );
    z-index:1;
  }
  .service-hero__grid{
    position:relative;
    z-index:2;
    display:grid;
    grid-template-columns:1fr;
    gap:18px;
    align-items:center;
  }
  .service-hero__content{max-width:58ch; color:#fff;}

  .service-kicker{
    display:inline-flex;
    padding:6px 10px;
    border-radius:999px;
    background:rgba(255,255,255,.10);
    border:1px solid rgba(255,255,255,.18);
    font-weight:800;
    color:#fff;
    margin:0 0 12px;
  }
  .service-hero h1{
    margin:0 0 10px;
    font-size: clamp(30px, 3.2vw, 52px);
    line-height:1.05;
    letter-spacing:-.02em;
    color:#fff;
  }
  .service-hero h1 .service-highlight{color:var(--accent)}
  .service-hero__lead{
    margin:0 0 14px;
    font-size:1.05rem;
    max-width:60ch;
    color:rgba(255,255,255,.92);
  }

  .service-hero__bullets{display:flex; flex-wrap:wrap; gap:10px; margin:16px 0 18px;}
  .service-pill{
    padding:8px 10px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,.22);
    background:rgba(255,255,255,.10);
    font-weight:800;
    font-size:.92rem;
    color:#fff;
  }
  .service-hero__actions{display:flex; gap:10px; flex-wrap:wrap}

  /* Quick tabs */
  .service-quicktabs{padding:10px 0 20px}
  .service-tabs{
    display:flex; gap:10px; flex-wrap:wrap;
    padding:10px;
    border:1px solid var(--line);
    border-radius:19px;
    background:#fff;
    justify-content: space-between
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

  /* Image box */
  .service-media{width:100%;}
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
    object-fit: contain;
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

    .service-hero{padding:120px 0 40px}
    .service-hero::after{
      background:linear-gradient(180deg, rgba(15,47,52,.92) 0%, rgba(15,47,52,.75) 55%, rgba(15,47,52,.25) 100%);
    }
    .service-hero__content{max-width:64ch}
    .service-media__box{height:220px;}
  }
</style>

<main>
  <!-- HERO -->
  <section class="service-hero" id="hero-services">
    <div class="service-container service-hero__grid">
      <div class="service-hero__content">
        <p class="service-kicker">Zertifizierter Fachbetrieb • Wien & Umgebung</p>

        <h1>
          Viessmann Thermenwartung Wien<br>
          <span class="service-highlight">Rund um die Uhr Service vom Fachbetrieb</span>
        </h1>

        <p class="service-hero__lead">
          Professionelle Viessmann Thermenwartung Wien durch erfahrene Profis – zuverlässig, effizient und rund um die Uhr verfügbar
          für Thermenwartung, Service, Reparatur und Notdienst in Wien, NÖ, Niederösterreich und der gesamten Umgebung.
        </p>

        <div class="service-hero__bullets" aria-label="Highlights">
          <span class="service-pill">Wartung & Service</span>
          <span class="service-pill">Reparatur & Notdienst</span>
          <span class="service-pill">Kosten inkl. MwSt</span>
          <span class="service-pill">Geprüfter Betrieb</span>
        </div>

        <div class="service-hero__actions" style="margin-top:16px;">
          <a class="service-btn service-btn--accent" href="#kontakt-services">Jetzt Kontakt aufnehmen</a>
          <a class="service-btn service-btn--ghost-on-dark" href="#leistungen-services">Leistungen ansehen</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick tabs -->
  <section class="service-quicktabs" id="quicktabs-services">
    <div class="service-container">
      <div class="service-tabs">
        <a class="service-tab" href="#vorteile-services">Vorteile</a>
        <a class="service-tab" href="#partner-services">Fachbetrieb</a>
        <a class="service-tab" href="#leistungen-services">Leistungen</a>
        <a class="service-tab" href="#geraete-services">Geräte</a>
        <a class="service-tab" href="#ablauf-services">Ablauf</a>
        <a class="service-tab" href="#notdienst-services">Notdienst</a>
        <a class="service-tab" href="#preise-services">Kosten</a>
        <a class="service-tab" href="#faq-services">FAQ</a>
        <a class="service-tab" href="#kontakt-services">Kontakt</a>
      </div>
    </div>
  </section>

  <!-- Vorteile -->
  <section class="service-section" id="vorteile-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Wartung, Reparatur & Notdienst für Ihre Viessmann Therme</h2>
        <p>Schnelle Terminvergabe, direkter Kundendienst und transparente Preise.</p>
      </div>

      <div class="service-grid service-grid--3">
        <article class="service-card service-card--service">
          <h3>Schnelle Terminvergabe</h3>
          <p>Direkter Kundendienst in Wien und Umgebung – flexibel planbar.</p>
          <ul class="service-checklist">
            <li>Schnelle Terminvergabe</li>
            <li>Direkter Kundendienst</li>
            <li>Rasch vor Ort</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Transparente Kosten inkl. MwSt</h3>
          <p>Klare Abrechnung und faire Preise – ohne Überraschungen.</p>
          <ul class="service-checklist">
            <li>Klare Angebote</li>
            <li>Transparente Preise</li>
            <li>MwSt ausgewiesen</li>
          </ul>
        </article>

        <article class="service-card service-card--service">
          <h3>Erfahrene Techniker</h3>
          <p>Qualifizierte Mitarbeiter & geprüfter Betrieb – sicher und effizient.</p>
          <ul class="service-checklist">
            <li>Erfahrung & Expertise</li>
            <li>Geprüfte Komponenten</li>
            <li>Hersteller-Vorgaben</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Partner -->
  <section class="service-section service-section--soft" id="partner-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Viessmann Partner in Wien & Umgebung</h2>
        <p>
          Als zuverlässiger Partner für Viessmann Thermenwartung, Thermenwartung in Wien und professionellen Thermenservice
          stehen wir unseren Kunden mit Erfahrung, Expertise und technischem Know-how zur Seite.
        </p>
        <p style="margin-top:10px;">
          Wir arbeiten strikt nach Vorgaben des Herstellers Viessmann, verwenden geprüfte Komponenten, moderne Gasgeräte
          und hochwertige Bauteile. Als erfahrener Installateur sind wir in Wien, Niederösterreich, NÖ und angrenzenden Regionen
          im Einsatz – zuverlässig, sicher und effizient.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Hersteller-Standards</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Moderne Geräte</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Wien & NÖ</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Viessmann Partner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen für Ihre Viessmann Therme</h2>
        <p>Wartung, Service, Reparatur, Notdienst & Thermentausch – professionell aus einer Hand.</p>
      </div>

      <div class="service-grid service-grid--2">
        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🛠️</div>
          <div>
            <h3>Viessmann Thermenwartung</h3>
            <p>Effizienz sichern, Energiekosten senken und Schäden vermeiden – für lange Lebensdauer und Langlebigkeit.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔍</div>
          <div>
            <h3>Viessmann Thermenservice</h3>
            <p>Überprüfung, gründliche Reinigung, Kontrolle von Wärmetauscher, Abgaswerten und sicherheitsrelevanten Bauteilen.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">📞</div>
          <div>
            <h3>Viessmann Kundendienst Wien</h3>
            <p>Zuverlässig bei Problemen, Fragen und laufender Betreuung – schnell direkt vor Ort.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">⚙️</div>
          <div>
            <h3>Viessmann Thermenreparatur</h3>
            <p>Fachgerechte Reparaturen an Gerät, Heizkessel und Bauteilen – sichere Wiederherstellung der Funktion.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🚨</div>
          <div>
            <h3>Thermenstörung & Notfälle</h3>
            <p>Bei Störung oder Ausfall: Notdienst erreichbar – schnell, zuverlässig und auch außerhalb üblicher Zeiten.</p>
          </div>
        </article>

        <article class="service-feature">
          <div class="service-feature__icon" aria-hidden="true">🔁</div>
          <div>
            <h3>Thermentausch & neue Geräte</h3>
            <p>Beratung, Montage, Installation und Inbetriebnahme – moderne Viessmann Geräte & Heizsysteme.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warum Wartung -->
  <section class="service-section service-section--soft" id="warum-services">
    <div class="service-container service-split service-split--reverse">
      <div class="service-split__text">
        <h2>Warum eine Viessmann Thermenwartung unverzichtbar ist</h2>
        <p>
          Eine regelmäßige Viessmann Thermenwartung Wien ist entscheidend für Sicherheit, Effizienz und den langfristigen Werterhalt Ihrer Anlage.
          Sie reduziert Risiken, verhindert kostspielige Schäden und sorgt für einen zuverlässigen Betrieb Ihrer Heizung.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Schäden</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Warum Viessmann Thermenwartung wichtig ist" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Geräte -->
  <section class="service-section" id="geraete-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Für welche Geräte & Systeme?</h2>
        <p>Wir warten alle Viessmann Geräte – von Therme bis Heizkessel und kompletten Systemen.</p>
      </div>

      <div class="service-chips">
        <span class="service-chip">Viessmann Therme</span>
        <span class="service-chip">Gastherme</span>
        <span class="service-chip">Heizkessel</span>
        <span class="service-chip">Heizsystem</span>
        <span class="service-chip">Warmwasser</span>
        <span class="service-chip">Kombinierte Anlagen</span>
      </div>

      <div class="service-card" style="margin-top:14px;">
        <p style="margin:0;">
          Als erfahrener Fachmann und qualifizierter Installateur arbeiten wir strikt nach Vorgaben des Herstellers Viessmann.
          Unsere Techniker verfügen über umfassende Erfahrung und sorgen für sicheren Betrieb in Wien, NÖ, Niederösterreich und angrenzenden Regionen.
        </p>
      </div>
    </div>
  </section>

  <!-- Ablauf -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>So läuft die Viessmann Thermenwartung ab</h2>
        <ol class="service-steps">
          <li>
            <strong>Überprüfung der Anlage</strong>
            <span>Kontrolle sicherheitsrelevanter Komponenten, Bauteile und allgemeiner Zustand.</span>
          </li>
          <li>
            <strong>Reinigung & Funktionskontrolle</strong>
            <span>Reinigung, Funktionsprüfung und Messung der Abgaswerte.</span>
          </li>
          <li>
            <strong>Prüfung der Kernbauteile</strong>
            <span>Wärmetauscher und Verbrennungseinheit werden geprüft und bewertet.</span>
          </li>
          <li>
            <strong>Optimierung</strong>
            <span>Einstellungen optimieren für bessere Effizienz und stabile Heizleistung.</span>
          </li>
          <li>
            <strong>Empfehlungen</strong>
            <span>Klare Hinweise, Vorteile und Empfehlungen zur weiteren Nutzung.</span>
          </li>
        </ol>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Ablauf der Viessmann Thermenwartung" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="service-container service-emergency">
      <div class="service-emergency__text">
        <h2>Viessmann Notdienst Wien – 24 Stunden verfügbar</h2>
        <p>
          Bei akuten Problemen, sicherheitsrelevanten Notfällen oder plötzlichen Ausfällen steht Ihnen unser Notdienst rund um die Uhr zur Verfügung.
          Unser Team reagiert schnell und zuverlässig – auch außerhalb regulärer Zeiten.
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
            <li>Therme startet nicht / Störung</li>
            <li>Kein Warmwasser</li>
            <li>Heizung bleibt kalt</li>
            <li>Ungewöhnliche Geräusche</li>
          </ul>
          <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">
            Unsere Experten sind rasch vor Ort in Wien, NÖ und Niederösterreich – um Schäden zu vermeiden und die Funktion wiederherzustellen.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kosten -->
  <section class="service-section" id="preise-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Kosten, Preise & MwSt</h2>
        <p>Transparente Kosten, faire Preise und klare Abrechnung – inkl. MwSt.</p>
      </div>

      <div class="service-grid service-grid--3">
        <div class="service-pricecard">
          <h3>Klare Abrechnung</h3>
          <p>Alle Arbeiten werden vorab erklärt und verständlich dokumentiert.</p>
        </div>
        <div class="service-pricecard">
          <h3>Wartungsvertrag (optional)</h3>
          <p>Planungssicherheit, weniger Ausfälle und langfristig geringere Kosten.</p>
        </div>
        <div class="service-pricecard">
          <h3>Schutz vor Reparaturkosten</h3>
          <p>Regelmäßige Wartung reduziert Ausfälle und schützt die Lebensdauer Ihrer Anlage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Warum wir -->
  <section class="service-section service-section--soft" id="warumwir-services">
    <div class="service-container service-split">
      <div class="service-split__text">
        <h2>Ihr Fachmann für Viessmann Thermen in Wien</h2>
        <p>
          Als zuverlässiger Partner für Viessmann Thermenservice, Gasgeräteservice und laufende Betreuung stehen wir für Qualität,
          technische Expertise und kundennahe Lösungen.
        </p>
        <p style="margin-top:10px;">
          Wir betreuen unsere Kunden persönlich – vom ersten Kontakt über Wartung bis hin zum Thermentausch – und sorgen für einen dauerhaft sicheren Betrieb Ihrer Heizung.
        </p>

        <div class="service-stats">
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Technische Expertise</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Servicebewusst</div></div>
          <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Lösungsorientiert</div></div>
        </div>
      </div>

      <div class="service-split__media service-media">
        <div class="service-media__box">
          <img class="service-media__img" src="img/final.png" alt="Viessmann Fachpartner Wien" loading="lazy" decoding="async"/>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Häufige Fragen zur Viessmann Thermenwartung</h2>
        <p>Die wichtigsten Antworten – kurz und klar.</p>
      </div>

      <div class="service-faq">
        <details>
          <summary>Wie oft sollte eine Thermenwartung durchgeführt werden?</summary>
          <p>Eine jährliche Thermenwartung wird empfohlen, um Sicherheit und Effizienz zu gewährleisten.</p>
        </details>

        <details>
          <summary>Welche Regionen werden betreut?</summary>
          <p>Wir sind in Wien, NÖ, Niederösterreich und angrenzenden Regionen tätig.</p>
        </details>

        <details>
          <summary>Was passiert bei einem Notfall?</summary>
          <p>Unser Notdienst ist jederzeit erreichbar und hilft schnell vor Ort.</p>
        </details>

        <details>
          <summary>Lohnt sich ein Wartungsvertrag?</summary>
          <p>Ja, ein Wartungsvertrag bietet Kostensicherheit und verlängert die Lebensdauer der Anlage.</p>
        </details>

        <details>
          <summary>Wie kann ich einen Termin vereinbaren?</summary>
          <p>Kontaktieren Sie uns telefonisch oder über Telefon – wir beraten Sie gerne.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="service-cta" id="kontakt-services">
    <div class="service-container service-cta__inner">
      <div>
        <h2>Jetzt Viessmann Thermenwartung in Wien sichern</h2>
        <p>Sicherheit, Effizienz und nachhaltige Qualität – zuverlässig, transparent und kompetent.</p>
        <p style="margin-top:10px;">📞 Jetzt Kontakt aufnehmen – Ihr Profi für Viessmann Thermen in Wien.</p>
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
          <textarea name="message" rows="4" placeholder="Thermenmodell, Problem, Wunschzeit..." required></textarea>
        </label>

        <button class="service-btn service-btn--accent service-btn--full" type="submit">Anfrage senden</button>
        <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
      </form>
    </div>
  </section>
</main>

<script>
  (function(){
    var y = document.getElementById("year");
    if (y) y.textContent = new Date().getFullYear();
  })();
</script>
@endsection
