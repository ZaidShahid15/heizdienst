@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermenreparatur 1040 Wien – Installateur Notdienst Wieden";
$metaDescription = "Thermenreparatur 1040 Wien vom Installateur Wien. Schnelle Hilfe bei kein Warmwasser, Heizung defekt & Notdienst in Wien Wieden. Jetzt kontaktieren!";
@endphp

@push('meta')
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
@endpush

<main>
  <style>
    .m-hero-badges {
      position: absolute !important;
      left: 12px;
      right: 12px;
      bottom: -84px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      z-index: 3;
      padding:10px;
      pointer-events: none;
    }
    .hero-badge{
      min-width:180px !important;
    }

    /* === BRAND GRID (für Thermen Marken) === */
    .brand-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:25px;
      margin-top:30px;
    }

    .brand-card{
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      padding:25px;
      background:#fff;
      border-radius:10px;
      text-align:center;
      text-decoration:none;
      box-shadow:0 8px 25px rgba(0,0,0,0.05);
      transition:0.25s;
    }

    .brand-card img{
      max-width:140px;
      height:auto;
      margin-bottom:10px;
    }

    .brand-card span{
      font-weight:600;
      color:#333;
      font-size:14px;
    }

    .brand-card:hover{
      transform:translateY(-4px);
      box-shadow:0 10px 35px rgba(0,0,0,0.08);
    }

    @media(max-width:900px){
      .brand-grid{
        grid-template-columns:repeat(2,1fr);
      }
    }

    @media(max-width:500px){
      .brand-grid{
        grid-template-columns:1fr;
      }
    }
  </style>

  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Thermenreparatur 1040 Wien <br>
        <span style="color:#FB9A1B;">Installateur Notdienst Wieden</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Thermenreparatur 1040 Wien vom Installateur Wien – rasche Hilfe bei Heizung, Warmwasser und Notdienst in Wien Wieden.</p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="tel:+4314420617"><i class="bi bi-telephone-fill"></i> JETZT ANRUFEN: +43 1 442 0617</a>
        <a class="wolf-btn wolf-btn--ghost" href="#kontakt-services"><i class="bi bi-arrow-right"></i> Anfrage senden</a>
      </div>

      <!-- Trust icons -->
      <div class="m-hero-badges" aria-label="Bewertungen">
        <div class="hero-badge tp" aria-label="Trustpilot Bewertung 4.5 von 5">
          <i class="bi bi-shield-check badge-icon"></i>
          <div class="badge-text">
            <div class="badge-title">Hervorragend</div>
            <div class="badge-row">
              <div class="badge-stars" aria-hidden="true">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <div class="badge-score">4.5</div>
            </div>
          </div>
        </div>

        <div class="hero-badge gg" aria-label="Google Bewertung 4.6 von 5">
          <i class="bi bi-google badge-icon"></i>
          <div class="badge-text">
            <div class="badge-title">Ausgezeichnet</div>
            <div class="badge-row">
              <div class="badge-stars" aria-hidden="true">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <div class="badge-score">4.6</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- TOC (unverändert) -->
  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="container">
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
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Service</span></a></li>
            <li class="toc-item"><a href="#team-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Team</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Leistungen</span></a></li>
            <li class="toc-item"><a href="#wartung-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Wartung</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Reparaturen</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Region</span></a></li>
            <li class="toc-item"><a href="#thermen-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Thermenservice</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile / Schnelle Hilfe bei Thermenproblemen -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Schnelle Hilfe bei Thermenproblemen</h2>
          <p>Wenn Ihre Therme defekt ist oder plötzlich kein Warmwasser vorhanden ist, brauchen Sie in 1040 Wien schnelle Hilfe. Unser Installateur Wien bietet zuverlässige Thermenreparatur 1040 Wien sowie professionellen Thermenservice Wien direkt vor Ort in Wieden, rund um den Karlsplatz und im gesamten 4 Bezirk Wien. Egal ob Gastherme Reparatur, Heizung Reparatur oder akuter Notdienst – unser Team sorgt für Soforthilfe und eine nachhaltige Lösung. Als Installateur 1040 Wien sind wir täglich im Einsatz und schnell in der Nähe. Vertrauen Sie auf unsere Erfahrung bei Thermen Reparatur Wien, wenn Ihre Heizung Probleme macht oder eine Reparatur dringend notwendig ist.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Thermenreparatur 1040 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div>
          <h3>Kein Warmwasser? Heizung defekt?</h3>
          <p>In Wien 1040 treten häufig Probleme wie kein Warmwasser, Heizung funktioniert nicht oder eine komplett ausgefallene Gastherme auf. Eine Therme defekt kann den Alltag stark beeinträchtigen, egal ob in Ihrer Wohnung, Ihrem Haus oder im 4 Bezirk Wien. Unsere Experten erkennen jedes Problem schnell und bieten die passende Lösung direkt vor Ort in Wien Wieden oder nahe dem Karlsplatz.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚙️</div><div>
          <h3>Gastherme Reparatur & Heizung Reparatur</h3>
          <p>Ob Gastherme Reparatur, Heizung Reparatur oder Notdienst bei Notfällen – unser Installateur Wien ist bestens vorbereitet. Dank unserer Erfahrung in der Thermenreparatur und Thermen Reparatur Wien beheben wir Schäden effizient und sorgen dafür, dass Ihre Heizung und Ihr Warmwasser wieder zuverlässig funktionieren.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Unser Thermenservice in 1040 Wien</h3>
          <p>Unser Thermenservice Wien umfasst Thermenreparatur, Thermenwartung und umfassenden Service für Ihre gesamte Haustechnik in 1040 Wien. Als Fachbetrieb und Installateur Firma Wien bieten wir Wartung, Reparatur und nachhaltige Lösungen für Ihre Gastherme und Heizsysteme. Unser Team aus erfahrenen Fachmännern arbeitet mit höchster Qualität und sorgt für langfristige Ergebnisse. Egal ob Sanitär, Gas Wasser Installateur Leistungen oder moderne Haustechnik – wir bieten Ihnen alles aus einer Hand.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>24h Notdienst Installateur Wien</h3>
          <p>Unser Installateur Notdienst 1040 Wien ist rund um die Uhr erreichbar und bietet schnelle Hilfe bei akuten Problemen. Der Thermen Notdienst Wien ist sofort vor Ort in Wien Wieden, rund um den Karlsplatz und im gesamten Wien 1040 im Einsatz. Wenn Ihre Heizung nicht funktioniert oder kein Warmwasser verfügbar ist, reagieren wir schnell und zuverlässig. Als 24h Installateur Wien kümmern wir uns um Notfälle wie Rohrbruch oder Wasserschaden und sorgen für eine sichere Reparatur. Unser Team ist jederzeit in der Nähe und bietet Soforthilfe bei jedem Einsatz in 1040 Wien und Umgebung.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team – bleibt themenorientiert -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Unser erfahrenes Team für 1040 Wien</h2>
          <p>Als erfahrene Installateur Firma Wien bieten wir Ihnen in 1040 Wien ein umfassendes Leistungsspektrum rund um Thermenreparatur, Sanitär und moderne Haustechnik. Unser Service richtet sich an Kunden in Wien Wieden, rund um den Karlsplatz und im gesamten 4 Bezirk Wien. Ob schnelle Reparatur, regelmäßige Wartung oder Notdienst bei akuten Problemen – unser Team ist jederzeit im Einsatz. Als Installateur Wien und Installateur 1040 Wien stehen wir für Qualität, Erfahrung und zuverlässige Lösungen direkt vor Ort. Vertrauen Sie auf unseren Fachbetrieb, wenn es um Thermenreparatur 1040 Wien und professionelle Betreuung Ihrer Heizung und Gastherme geht.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachwissen</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Saubere Arbeit</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparenz</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size5.jpeg" alt="Installateur Team" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Leistungen im Überblick -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unsere Leistungen im Überblick</h2><p>Als erfahrene Installateur Firma Wien bieten wir Ihnen in 1040 Wien ein umfassendes Leistungsspektrum rund um Thermenreparatur, Sanitär und moderne Haustechnik.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Thermenreparatur</h3><p>Unsere Thermenreparatur in Wien 1040 umfasst schnelle Diagnose, effiziente Reparatur und nachhaltige Lösungen für jede Gastherme, damit Heizung und Warmwasser zuverlässig funktionieren.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🛠️</div><div><h3>Thermenwartung</h3><p>Regelmäßige Thermenwartung und Thermenservice Wien sichern die Leistung Ihrer Anlage und verhindern unerwartete Ausfälle sowie hohe Kosten durch Defekte.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🌡️</div><div><h3>Heizungsreparatur</h3><p>Wenn Ihre Heizung nicht funktioniert, bieten wir rasche Heizung Reparatur in 1040 Wien und sorgen für eine schnelle und sichere Lösung.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🚰</div><div><h3>Sanitär & Installateur</h3><p>Als Gas Wasser Installateur übernehmen wir alle Sanitär Arbeiten sowie moderne Haustechnik Lösungen in Ihrer Wohnung, Ihrem Haus oder im Wien 1040.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">💧</div><div><h3>Rohrbruch & Wasserschaden Hilfe</h3><p>Bei Rohrbruch oder Wasserschaden steht unser Notdienst in 1040 Wien sofort bereit und sorgt für schnelle Hilfe und professionelle Reparatur vor Ort.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Thermenwartung für mehr Sicherheit</h2>
          <p>Regelmäßige Thermenwartung und Thermenservice Wien sichern die Leistung Ihrer Anlage und verhindern unerwartete Ausfälle sowie hohe Kosten durch Defekte. Unser Team führt die Wartung professionell durch – für eine lange Lebensdauer Ihrer Gastherme.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.jpeg" alt="Wartung 1040 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Schnelle Thermenreparatur in 1040</h2>
          <p>Unsere Thermenreparatur in Wien 1040 umfasst schnelle Diagnose, effiziente Reparatur und nachhaltige Lösungen für jede Gastherme, damit Heizung und Warmwasser zuverlässig funktionieren. Ob einfache Störung oder komplexer Defekt – wir helfen sofort.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1040 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>24h Notdienst Installateur Wien</h2>
        <p>Unser Installateur Notdienst 1040 Wien ist rund um die Uhr erreichbar und bietet schnelle Hilfe bei akuten Problemen. Der Thermen Notdienst Wien ist sofort vor Ort in Wien Wieden, rund um den Karlsplatz und im gesamten Wien 1040 im Einsatz. Wenn Ihre Heizung nicht funktioniert oder kein Warmwasser verfügbar ist, reagieren wir schnell und zuverlässig. Als 24h Installateur Wien kümmern wir uns um Notfälle wie Rohrbruch oder Wasserschaden und sorgen für eine sichere Reparatur. Unser Team ist jederzeit in der Nähe und bietet Soforthilfe bei jedem Einsatz in 1040 Wien und Umgebung.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische Notdiensteinsätze</h3>
        <ul class="service-checklist service-checklist--on-dark">
          <li>Ausfall von Heizung oder Warmwasser</li>
          <li>Fehlermeldungen, Druckprobleme oder Störgeräusche</li>
          <li>Sicherheitsrelevante Auffälligkeiten am Gerät</li>
        </ul>
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1040 Wien.</p>
      </div></div>
    </div>
  </section>

  <!-- Preise & Kosten -->
  <section class="service-section" id="preise-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size2.jpegs.jpeg" alt="Kosten Installateur" loading="lazy" decoding="async">
        </div></div>
        <div class="card-split__text"><div class="card-box">
          <h2>Preise & Kosten für Thermenreparatur</h2>
          <p>Die Preise für eine Thermenreparatur 1040 Wien hängen vom jeweiligen Problem, dem Aufwand und den benötigten Ersatzteilen ab. Unser Installateur Wien bietet transparente Kosten und erstellt Ihnen ein individuelles Angebot inklusive Kostenvoranschlag. Wir legen großen Wert auf faire Preise und bieten auch günstige Lösungen für jede Situation. Egal ob Reparatur, Wartung oder kompletter Service – Sie erhalten eine klare Beratung und ein passendes Angebot. Kontaktieren Sie uns für eine unverbindliche Beratung und erfahren Sie mehr über unsere Preise in Wien 1040, Wien Wieden und im gesamten 4 Bezirk Wien.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Region / Ihr Installateur in 1040 Wien -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ihr Installateur in 1040 Wien</h2>
          <p>Als Installateur 1040 Wien sind wir täglich im Wien 1040, in Wien Wieden und rund um den Karlsplatz im Einsatz. Wir betreuen Kunden direkt vor Ort – egal ob in Ihrer Wohnung, Ihrem Haus oder gewerblichen Objekten. Unser Standort ermöglicht schnelle Einsätze in Wien 1040 und der gesamten Umgebung. Wenn Sie einen Installateur Wien in der Nähe suchen, sind wir Ihr kompetenter Ansprechpartner. Unsere Adresse sorgt für kurze Wege und schnelle Hilfe bei jedem Problem in Ihrem Zuhause.</p>
          <p>Unser Fachbetrieb überzeugt durch langjährige Erfahrung, hohe Qualität und zahlreiche zufriedene Kunden in 1040 Wien. Als etablierte Installateur Firma Wien setzen wir auf professionelle Arbeit und zuverlässigen Service. Unser Team besteht aus erfahrenen Fachmännern, die jede Thermenreparatur, Sanitärarbeit oder Heizung Reparatur effizient durchführen. Unsere Referenzen zeigen unsere Kompetenz im Bereich Thermenreparatur, Thermenservice Wien und Haustechnik. Vertrauen Sie auf unsere Erfahrung und profitieren Sie von einem starken Partner in Wien 1040.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.jpeg" alt="Einsatzgebiet Wien 1040" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Thermen Marken (brand grid) – unverändert -->
  <section class="service-section service-section--soft" id="thermen-services">
    <div class="container">
      <div class="service-section__head">
        <h2>Thermenservice für alle Marken</h2>
        <p>Ob Vaillant, Junkers, Buderus oder Wolf – wir warten und reparieren alle gängigen Gasgeräte. Regelmäßige Wartung sorgt für Sicherheit, Effizienz und eine längere Lebensdauer Ihrer Therme.</p>
      </div>

      <div class="brand-grid">
        <a class="brand-card" href="{{ route('vaillant.thermentausch') }}">
          <img src="img/vaillant1-1.jpg" alt="Vaillant Thermenservice">
          <span>VAILLANT THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('buderus.thermentausch') }}">
          <img src="img/1buderus.jpeg" alt="Buderus Thermenservice">
          <span>BUDERUS THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('baxi.thermentausch') }}">
          <img src="img/1baxi.jpeg" alt="Baxi Thermenservice">
          <span>BAXI THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('junkers.thermentausch') }}">
          <img src="img/1junkers.jpeg" alt="Junkers Thermenservice">
          <span>JUNKERS THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('viessmann.thermentausch') }}">
          <img src="img/1viesman.jpeg" alt="Viessmann Thermenservice">
          <span>VIESSMANN THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('wolf.thermentausch') }}">
          <img src="img/1wolf.jpeg" alt="Wolf Thermenservice">
          <span>WOLF THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('saunier-duval.thermentausch') }}">
          <img src="img/1sauneri.jpeg" alt="Saunier Duval Thermenservice">
          <span>SAUNIER DUVAL SERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('löblich.thermentausch') }}">
          <img src="img/1loblich.jpeg" alt="Löblich Thermenservice">
          <span>LÖBLICH THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('ocean.thermentausch') }}">
          <img src="img/1oceanbaxi.jpeg" alt="Ocean Thermenservice">
          <span>OCEAN THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('rapido.thermentausch') }}">
          <img src="img/1rapido.jpeg" alt="Rapido Thermenservice">
          <span>RAPIDO THERMENSERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('windhager.thermentausch') }}">
          <img src="img/Windhager.png" alt="Windhager Thermenservice">
          <span>WINDHAGER SERVICE</span>
        </a>
        <a class="brand-card" href="{{ route('nordgas.thermentausch') }}">
          <img src="img/NordGas.png" alt="Nordgas Thermenservice">
          <span>NORDGAS SERVICE</span>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="container">
      <div class="service-section__head"><h2>Häufige Fragen zur Thermenreparatur</h2><p>Antworten auf die häufigsten Fragen – kurz, klar und praxisnah.</p></div>
      <div class="service-faq">
        <details>
          <summary>Was kostet eine Thermenreparatur in Wien 1040?</summary>
          <p>Die Kosten hängen vom jeweiligen Problem und Aufwand ab. Sie erhalten einen transparenten Kostenvoranschlag mit klaren Preisen.</p>
        </details>
        <details>
          <summary>Wie schnell ist der Notdienst vor Ort?</summary>
          <p>Unser Installateur Notdienst 1040 Wien ist meist schnell vor Ort in Wien Wieden oder im gesamten 4 Bezirk Wien.</p>
        </details>
        <details>
          <summary>Was tun bei kein Warmwasser?</summary>
          <p>Wenn kein Warmwasser vorhanden ist, sollten Sie sofort unseren Thermen Notdienst Wien kontaktieren.</p>
        </details>
        <details>
          <summary>Wann ist eine Wartung sinnvoll?</summary>
          <p>Eine regelmäßige Thermenwartung sorgt für eine zuverlässige Heizung und reduziert langfristig Kosten.</p>
        </details>
        <details>
          <summary>Gibt es einen 24h Installateur Wien?</summary>
          <p>Ja, unser 24h Installateur Wien ist jederzeit für Notfälle und dringende Einsätze erreichbar.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch in der Umgebung?</summary>
          <p>Ja, wir sind in Wien 1040 sowie in der gesamten Umgebung schnell im Einsatz.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="container">
      <div class="service-cta__inner">
        <div>
          <h2>Jetzt Kontakt aufnehmen</h2>
          <p>Benötigen Sie eine schnelle Thermenreparatur 1040 Wien oder einen erfahrenen Installateur Wien? Unser Team bietet Ihnen schnelle Hilfe, professionelle Beratung und ein individuelles Angebot zu fairen Preisen. Egal ob Notdienst, Wartung oder Reparatur – wir sind Ihr Ansprechpartner in Wien 1040, Wien Wieden und im gesamten 4 Bezirk Wien.</p>
          <p style="margin-top:10px"><strong>📞</strong> Direkt anrufen: <a href="tel:+4314420617">+43 1 442 0617</a></p>
        </div>
        <form class="service-cta__form" onsubmit="event.preventDefault(); alert('Danke! Wir melden uns so schnell wie möglich.');">
          <div class="service-formrow">
            <label><span>Name</span><input required name="name" placeholder="Ihr Name"></label>
            <label><span>Telefon</span><input required name="phone" placeholder="Ihre Nummer"></label>
          </div>
          <label style="margin-top:10px"><span>Nachricht</span><textarea required name="msg" rows="4" placeholder="Worum geht es?"></textarea></label>
          <button class="btnx btnx-accent" style="margin-top:12px; width:100%" type="submit">Anfrage senden</button>
          <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu. Keine Weitergabe Ihrer Daten.</p>
        </form>
      </div>
    </div>
  </section>

  @include('layout.location')

  <!-- Bezirke (bottom links) – bleibt unverändert -->

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection

@php
    preg_match('/(\d{4})/', Route::currentRouteName(), $matches);
    $current = isset($matches[1]) ? (int)$matches[1] : null;
    $next = $current ? $current - 10 : null;
@endphp




