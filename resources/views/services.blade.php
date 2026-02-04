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
.service-btn--primary{
  background:var(--ink);
  color:#fff;
}
.service-btn--primary:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
.service-btn--accent{
  background:var(--accent);
  color:#1a1a1a;
}
.service-btn--accent:hover{transform:translateY(-1px); box-shadow:var(--shadow)}
.service-btn--ghost{
  background:#fff;
  border-color:var(--line);
}
.service-btn--ghost:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.08)}
.service-btn--ghost-on-dark{
  background:transparent;
  border-color:rgba(255,255,255,.25);
  color:#fff;
}
.service-btn--ghost-on-dark:hover{transform:translateY(-1px); box-shadow:0 10px 26px rgba(0,0,0,.22)}
.service-btn--full{width:100%}

.service-topbar{
  position:sticky; top:0; z-index:40;
  background:rgba(255,255,255,.85);
  backdrop-filter: blur(10px);
  border-bottom:1px solid var(--line);
}
.service-topbar__inner{
  display:flex; align-items:center; justify-content:space-between;
  padding:12px 0;
  gap:14px;
}
.service-brand{display:flex; align-items:center; gap:10px; font-weight:800; letter-spacing:.02em}
.service-brand__mark{
  width:34px; height:34px; border-radius:12px;
  background:linear-gradient(135deg, var(--ink), rgba(24,64,72,.55));
  position:relative;
}
.service-brand__mark:after{
  content:"";
  position:absolute; inset:8px;
  border-radius:10px;
  background:rgba(255,255,255,.25);
}
.service-brand__text{color:var(--ink)}
.service-nav{display:flex; gap:18px; align-items:center}
.service-nav a{font-weight:600; opacity:.85}
.service-nav a:hover{opacity:1}
.service-nav .service-is-active{color:var(--ink); opacity:1; position:relative}
.service-nav .service-is-active:after{
  content:""; position:absolute; left:0; right:0; bottom:-14px; height:3px;
  border-radius:999px; background:var(--accent);
}
.service-topbar__cta{display:flex; gap:10px; align-items:center}

/* =========================
   HERO (UPDATED: image as background + content overlay like screenshot)
   ========================= */
.service-hero{
  padding:145px 0 48px;
  position:relative;
  overflow:hidden;
  border-bottom:1px solid var(--line);
  /* fallback color */
  background: #0f2f34;
}
.service-hero::before{
  /* background image */
  content:"";
  position:absolute; inset:0;
  background-image:url('img/hero-scetion.jpeg');
  background-size:cover;
  background-position:center;
  transform:scale(1.02);
  z-index:0;
}
.service-hero::after{
  /* left dark overlay (like desktop hero) */
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
  grid-template-columns: 1fr;
  gap:18px;
  align-items:center;
}
.service-hero__content{
  max-width: 52ch;
  color:#fff;
}

.service-kicker{
  display:inline-flex;
  padding:6px 10px;
  border-radius:999px;
  background:rgba(255,255,255,.10);
  border:1px solid rgba(255,255,255,.18);
  font-weight:700;
  color:#fff;
  margin:0 0 12px;
}
.service-hero h1{
  margin:0 0 10px;
  font-size: clamp(30px, 3.2vw, 50px);
  line-height:1.05;
  letter-spacing:-.02em;
  color:#fff;
}
.service-hero h1 .service-highlight{color:var(--accent)}
.service-hero__lead{
  margin:0 0 14px;
  font-size: 1.05rem;
  max-width: 60ch;
  color:rgba(255,255,255,.9);
}

.service-hero__bullets{
  display:flex; flex-wrap:wrap; gap:10px;
  margin:16px 0 18px;
}
.service-pill{
  padding:8px 10px;
  border-radius:999px;
  border:1px solid rgba(255,255,255,.22);
  background:rgba(255,255,255,.10);
  font-weight:700;
  font-size:.92rem;
  color:#fff;
}

.service-hero__actions{display:flex; gap:10px; flex-wrap:wrap}

.service-trustrow{
  display:flex; gap:12px; flex-wrap:wrap;
  margin-top:14px;
  color:rgba(255,255,255,.92);
  font-weight:700;
}
.service-trustrow__item{display:inline-flex; gap:8px; align-items:center}

/* small “info line” like screenshot */
.service-hero__note{
  display:flex;
  gap:10px;
  align-items:flex-start;
  margin-top:14px;
  color:rgba(255,255,255,.92);
  font-weight:700;
}
.service-hero__note-icon{
  width:34px; height:34px;
  border-radius:12px;
  display:grid; place-items:center;
  background:rgba(251,154,27,.18);
  border:1px solid rgba(251,154,27,.35);
  flex:0 0 auto;
}
.service-hero__note-text{margin:0}

/* keep these (used later) */
.service-quicktabs{padding:10px 0 20px}
.service-tabs{
  display:flex; gap:10px; flex-wrap:wrap;
  padding:10px;
  border:1px solid var(--line);
  border-radius:19px;
  background:#fff;
}
.service-tab{
  padding:10px 12px;
  border-radius:999px;
  font-weight:700;
  color:var(--ink);
  border:1px solid transparent;
}
.service-tab:hover{border-color:var(--line); background:rgba(24,64,72,.05)}

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

.service-media__img{
  width:100%;
  aspect-ratio: 4 / 4;
  border-radius: var(--radius2);
  background-size:cover;
  background-position:center;
  border:1px solid var(--line);
  box-shadow:0 18px 50px rgba(0,0,0,.12);
}

.service-stats{
  display:flex; gap:10px; flex-wrap:wrap;
  margin-top:14px;
}
.service-stat{
  display:flex; align-items:center; gap:10px;
  padding:10px 12px;
  border-radius:999px;
  background:rgba(24,64,72,.06);
  border:1px solid var(--line);
}
.service-stat__num{font-weight:900; color:var(--ink)}
.service-stat__label{font-weight:700}

.service-chips{display:flex; flex-wrap:wrap; gap:10px}
.service-chip{
  padding:10px 12px;
  border-radius:999px;
  background:#fff;
  border:1px solid var(--line);
  font-weight:700;
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
  font-weight:800;
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
label span{display:block; font-weight:700; color:var(--ink); margin:0 0 6px}
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

.service-footer{
  border-top:1px solid var(--line);
  padding:18px 0;
  background:#fff;
}
.service-footer__inner{display:flex; justify-content:space-between; gap:12px; flex-wrap:wrap}
.service-footer__links{display:flex; gap:12px}
.service-footer a:hover{text-decoration:underline}

@media (max-width: 980px){
  .service-grid--3{grid-template-columns: 1fr}
  .service-grid--2{grid-template-columns: 1fr}
  .service-split{grid-template-columns: 1fr}
  .service-split--reverse .service-split__text{order:1}
  .service-split--reverse .service-split__media{order:2}
  .service-emergency{grid-template-columns: 1fr}
  .service-cta__inner{grid-template-columns: 1fr}
  .service-formrow{grid-template-columns: 1fr}
  .service-nav{display:none}

  /* mobile hero overlay stronger */
  .service-hero{padding:120px 0 40px}
  .service-hero::after{
    background:linear-gradient(180deg, rgba(15,47,52,.92) 0%, rgba(15,47,52,.75) 55%, rgba(15,47,52,.25) 100%);
  }
  .service-hero__content{max-width: 62ch}
}
</style>

<main>
    <!-- HERO (IMAGE AS BACKGROUND + CONTENT ON TOP LIKE YOUR SCREENSHOT) -->
    <section class="service-hero" id="hero-services">
        <div class="service-container service-hero__grid">
            <div class="service-hero__content">
                <p class="service-kicker">Zuverlässiger Heizungs- & Thermendienst</p>

                <h1>
                    Heizung kaputt?<br>
                    <span class="service-highlight">Wir kümmern uns sofort.</span>
                </h1>

                <p class="service-hero__lead">
                    Zuverlässiger Heizungs- & Thermenservice in Wien und Niederösterreich – schnell, sauber und transparent.
                </p>

                <div class="service-hero__note">
                    <div class="service-hero__note-icon" aria-hidden="true">🛠️</div>
                    <p class="service-hero__note-text">
                        Unsere erfahrenen Techniker sind täglich im Einsatz, auch am Wochenende.
                    </p>
                </div>

                <div class="service-hero__actions" style="margin-top:16px;">
                    <a class="service-btn service-btn--accent" href="#kontakt-services">Sofort Hilfe anfordern</a>
                    <a class="service-btn service-btn--ghost-on-dark" href="#leistungen-services">Leistungen ansehen</a>
                </div>

                <div class="service-trustrow" aria-label="Vertrauenssignale" style="margin-top:16px;">
                    <span class="service-trustrow__item">✔ Schnell vor Ort</span>
                    <span class="service-trustrow__item">✔ Saubere Arbeit</span>
                    <span class="service-trustrow__item">✔ Klare Abrechnung</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick tabs (like competitor) -->
    <section class="service-quicktabs" id="quicktabs-services">
        <div class="service-container">
            <div class="service-tabs">
                <a class="service-tab" href="#pakete-services">Komfort- & Servicepakete</a>
                <a class="service-tab" href="#ablauf-services">Ablauf</a>
                <a class="service-tab" href="#notdienst-services">Notdienst</a>
                <a class="service-tab" href="#faq-services">FAQ</a>
            </div>
        </div>
    </section>

    <!-- Packages -->
    <section class="service-section" id="pakete-services">
        <div class="service-container">
            <div class="service-section__head">
                <h2>Servicepakete für Ihre Vaillant Therme</h2>
                <p>Wählen Sie den passenden Umfang – von der jährlichen Wartung bis zur schnellen Soforthilfe bei Störungen.</p>
            </div>

            <div class="service-grid service-grid--3">
                <article class="service-card service-card--service">
                    <h3>Wartung Standard</h3>
                    <p>Ideal für die jährliche Routine: prüfen, reinigen, einstellen – für sicheren Betrieb und bessere Effizienz.</p>
                    <ul class="service-checklist">
                        <li>Sicht- & Sicherheitscheck</li>
                        <li>Reinigung & Funktionsprüfung</li>
                        <li>Optimierung der Einstellungen</li>
                    </ul>
                    <a class="service-btn service-btn--primary service-btn--full" href="#kontakt-services">Anfragen</a>
                </article>

                <article class="service-card service-card--service">
                    <h3>Wartung Plus</h3>
                    <p>Mehr Details, mehr Sicherheit: zusätzliche Kontrollen und Fokus auf störungsfreien Betrieb.</p>
                    <ul class="service-checklist">
                        <li>Erweiterte Prüfungen</li>
                        <li>Effizienz-Check & Beratung</li>
                        <li>Empfehlungen zur Kostenreduktion</li>
                    </ul>
                    <a class="service-btn service-btn--primary service-btn--full" href="#kontakt-services">Anfragen</a>
                </article>

                <article class="service-card service-card--service">
                    <h3>Notdienst & Reparatur</h3>
                    <p>Wenn’s dringend ist: schnelle Diagnose, Reparatur und Austausch von Teilen – rund um die Uhr.</p>
                    <ul class="service-checklist">
                        <li>24/7 erreichbar</li>
                        <li>Schnelle Fehleranalyse</li>
                        <li>Reparatur mit Originalteilen</li>
                    </ul>
                    <a class="service-btn service-btn--primary service-btn--full" href="#notdienst-services">Soforthilfe</a>
                </article>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="service-section service-section--soft" id="leistungen-services">
        <div class="service-container">
            <div class="service-section__head">
                <h2>Leistungen rund um Vaillant</h2>
                <p>Alles aus einer Hand – Wartung, Service, Reparatur und moderne Lösungen für Ihr Zuhause.</p>
            </div>

            <div class="service-grid service-grid--2">
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🛠️</div>
                    <div>
                        <h3>Vaillant Thermenwartung</h3>
                        <p>Regelmäßige Wartung sorgt für Sicherheit, ruhigen Betrieb, geringeren Verbrauch und eine längere Lebensdauer.</p>
                    </div>
                </article>

                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🔍</div>
                    <div>
                        <h3>Vaillant Thermenservice</h3>
                        <p>Überprüfung, Reinigung und Feineinstellung – damit Ihre Therme effizient arbeitet und zuverlässig warmes Wasser liefert.</p>
                    </div>
                </article>

                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">📞</div>
                    <div>
                        <h3>Kundendienst Wien</h3>
                        <p>Persönlich erreichbar bei Fragen, Terminwunsch oder Problemen – klar erklärt, ohne Fachchinesisch.</p>
                    </div>
                </article>

                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">⚙️</div>
                    <div>
                        <h3>Reparatur & Ersatzteile</h3>
                        <p>Schnelle Behebung von Defekten, Austausch verschlissener Teile und transparente Kosten vor Arbeitsbeginn.</p>
                    </div>
                </article>

                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🚨</div>
                    <div>
                        <h3>Störung & Notfälle</h3>
                        <p>Bei Ausfall, Fehlermeldung oder akuten Problemen sind wir 24/7 für Sie da – zügig und lösungsorientiert.</p>
                    </div>
                </article>

                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🔁</div>
                    <div>
                        <h3>Thermentausch & neue Geräte</h3>
                        <p>Beratung und Umsetzung bei Gerätetausch sowie modernen Systemen – inkl. Planung, Montage und Inbetriebnahme.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Why -->
    <section class="service-section" id="warum-services">
        <div class="service-container service-split">
            <div class="service-split__text">
                <h2>Warum Wartung wirklich zählt</h2>
                <p>
                    Eine fachgerechte Thermenwartung erhöht die Sicherheit, reduziert Störungsrisiken und hält Ihre Anlage effizient.
                    Das spart Energie, senkt Heizkosten und verlängert die Lebensdauer Ihrer Vaillant Therme.
                </p>

                <div class="service-stats">
                    <div class="service-stat">
                        <div class="service-stat__num">✓</div>
                        <div class="service-stat__label">Mehr Betriebssicherheit</div>
                    </div>
                    <div class="service-stat">
                        <div class="service-stat__num">↓</div>
                        <div class="service-stat__label">Weniger Verbrauch</div>
                    </div>
                    <div class="service-stat">
                        <div class="service-stat__num">⏱</div>
                        <div class="service-stat__label">Weniger Ausfälle</div>
                    </div>
                </div>
            </div>

            <div class="service-split__media">
                <div class="service-media__img service-media__img--tall" style="background-image:url('img/viliant.jpeg');"></div>
            </div>
        </div>
    </section>

    <!-- Devices -->
    <section class="service-section service-section--soft" id="geraete-services">
        <div class="service-container">
            <div class="service-section__head">
                <h2>Für welche Geräte & Systeme?</h2>
                <p>Wir betreuen Vaillant Geräte im Haushalt – von Gasthermen bis zu modernen Heizlösungen.</p>
            </div>

            <div class="service-chips">
                <span class="service-chip">Gastherme</span>
                <span class="service-chip">Kombitherme</span>
                <span class="service-chip">Gasgeräte</span>
                <span class="service-chip">Durchlauferhitzer</span>
                <span class="service-chip">Gasheizung</span>
                <span class="service-chip">Heizungsanlage</span>
                <span class="service-chip">Wärmepumpe</span>
                <span class="service-chip">Ausgewählte Klimasysteme</span>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="service-section" id="ablauf-services">
        <div class="service-container service-split service-split--reverse">
            <div class="service-split__text">
                <h2>So läuft die Wartung ab</h2>
                <ol class="service-steps">
                    <li>
                        <strong>Termin & Vorbereitung</strong>
                        <span>Wir klären Gerät, Anliegen und Aufwand – schnell und unkompliziert.</span>
                    </li>
                    <li>
                        <strong>Prüfen & Absichern</strong>
                        <span>Sichtprüfung, Sicherheitschecks und Funktionskontrolle zur Früherkennung.</span>
                    </li>
                    <li>
                        <strong>Reinigen & Optimieren</strong>
                        <span>Reinigung, Kontrolle relevanter Bauteile und Feineinstellung für bessere Effizienz.</span>
                    </li>
                    <li>
                        <strong>Dokumentation & Empfehlung</strong>
                        <span>Sie erhalten klare Hinweise, nächste Schritte und Tipps für zuverlässigen Betrieb.</span>
                    </li>
                </ol>
            </div>

            <div class="service-split__media">
                <div class="service-media__img service-media__img--tall" style="background-image:url('img/viliant.jpeg');"></div>
            </div>
        </div>
    </section>

    <!-- Emergency -->
    <section class="service-section service-section--dark" id="notdienst-services">
        <div class="service-container service-emergency">
            <div class="service-emergency__text">
                <h2>Notdienst in Wien – 24 Stunden erreichbar</h2>
                <p>
                    Bei Ausfall, Fehlermeldung oder fehlendem Warmwasser zählt jede Minute.
                    Wir reagieren schnell und helfen zuverlässig – Tag und Nacht.
                </p>
                <div class="service-emergency__actions">
                    <a class="service-btn service-btn--accent" href="#kontakt-services">Sofort Hilfe anfordern</a>
                    <a class="service-btn service-btn--ghost-on-dark" href="#faq-services">Fragen ansehen</a>
                </div>
            </div>

            <div class="service-emergency__panel">
                <div class="service-panel">
                    <h3>Typische Notfälle</h3>
                    <ul class="service-checklist service-checklist--on-dark">
                        <li>Therme startet nicht / Störungscode</li>
                        <li>Kein Warmwasser</li>
                        <li>Heizung bleibt kalt</li>
                        <li>Ungewöhnliche Geräusche</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Prices -->
    <section class="service-section" id="preise-services">
        <div class="service-container">
            <div class="service-section__head">
                <h2>Kosten & Transparenz</h2>
                <p>Fixpreise inkl. MwSt und klare Kommunikation – zusätzliche Arbeiten nur nach Rücksprache.</p>
            </div>

            <div class="service-grid service-grid--3">
                <div class="service-pricecard">
                    <h3>Fixpreis-Logik</h3>
                    <p>Sie wissen vorab, was Sie erwartet – ohne versteckte Positionen.</p>
                </div>
                <div class="service-pricecard">
                    <h3>Ersatzteile</h3>
                    <p>Benötigte Teile werden vor dem Austausch besprochen – nachvollziehbar und fair.</p>
                </div>
                <div class="service-pricecard">
                    <h3>Wartungsvertrag</h3>
                    <p>Planbarkeit durch regelmäßige Termine und definierte Leistungen – auf Wunsch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="service-section service-section--soft" id="faq-services">
        <div class="service-container">
            <div class="service-section__head">
                <h2>Häufige Fragen</h2>
                <p>Die wichtigsten Antworten rund um Wartung, Sicherheit und Ablauf.</p>
            </div>

            <div class="service-faq">
                <details>
                    <summary>Wie oft sollte eine Thermenwartung gemacht werden?</summary>
                    <p>In der Regel empfiehlt sich eine jährliche Wartung, um Sicherheit und Effizienz stabil hoch zu halten.</p>
                </details>
                <details>
                    <summary>Gibt es eine gesetzliche Pflicht zur jährlichen Wartung?</summary>
                    <p>Es gibt nicht immer eine starre Jahrespflicht – regelmäßige Kontrollen sind aber sinnvoll und oft Voraussetzung für sicheren Betrieb.</p>
                </details>
                <details>
                    <summary>Kann eine Wartung Heizkosten senken?</summary>
                    <p>Ja. Eine gut eingestellte Therme arbeitet effizienter, verbraucht weniger Gas und läuft zuverlässiger.</p>
                </details>
                <details>
                    <summary>Wann ist ein Thermentausch sinnvoll?</summary>
                    <p>Wenn Geräte häufig ausfallen, sehr alt sind oder der Verbrauch stark steigt, lohnt sich eine Beratung zum Austausch.</p>
                </details>
                <details>
                    <summary>Was mache ich bei einer Störung?</summary>
                    <p>Kontaktieren Sie unseren Kundendienst – wir sind 24/7 erreichbar und kümmern uns schnell um die Lösung.</p>
                </details>
                <details>
                    <summary>Lohnt sich ein Wartungsvertrag?</summary>
                    <p>Wenn Sie Planungssicherheit und fixe Abläufe möchten, ist ein Wartungsvertrag oft die bequemste Lösung.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="service-cta" id="kontakt-services">
        <div class="service-container service-cta__inner">
            <div>
                <h2>Jetzt Vaillant Thermenwartung in Wien sichern</h2>
                <p>Rasch, transparent und zuverlässig – auf Wunsch auch mit 24/7 Unterstützung bei Störungen.</p>
            </div>

            <form class="service-cta__form" action="#" method="post">
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
                <label>
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
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
@endsection
