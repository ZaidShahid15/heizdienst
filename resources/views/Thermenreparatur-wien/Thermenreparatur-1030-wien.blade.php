@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermenreparatur 1030 Wien – Installateur Notdienst Landstraße";
$metaDescription = "Thermenreparatur 1030 Wien vom Installateur Wien. Schnelle Hilfe bei kein Warmwasser, Heizung defekt & Notdienst in Wien Landstraße. Jetzt kontaktieren!";
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
        Thermenreparatur 1030 Wien <br>
        <span style="color:#FB9A1B;">Installateur Notdienst Landstraße</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Thermenreparatur 1030 Wien durch erfahrenen Installateur Wien – rasche Hilfe bei Heizung, Warmwasser und Notdienst in Wien Landstraße. Unser 24h Notdienst ist immer für Sie da.</p>

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

  <!-- TOC (gleiche Struktur) -->
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

  <!-- Vorteile / Schnelle Hilfe -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Schnelle Hilfe bei Thermenproblemen in 1030 Wien</h2>
          <p>Wenn Ihre Therme defekt ist oder plötzlich kein Warmwasser mehr vorhanden ist, benötigen Sie in 1030 Wien schnelle Hilfe. Unser Installateur Wien bietet  <a href="{{ route('Thermenreparatur-1020-wien') }}"> professionelle </a> Thermenreparatur 1030 Wien sowie umfassenden Thermenservice Wien direkt vor Ort in Wien Landstraße, rund um die Ritterstrasse und im gesamten Wien dritter Bezirk. Egal ob Gastherme Reparatur, Heizung Reparatur oder akuter Notdienst – unser Team sorgt für Soforthilfe und eine schnelle Lösung. Als Installateur 1030 Wien sind wir täglich im Einsatz und schnell in der Nähe. Vertrauen Sie auf unsere Erfahrung, wenn Ihre Heizung Probleme macht oder eine Thermen Reparatur Wien notwendig ist.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Service 1030 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Rohrbruch & Wasserschäden schnell beheben</h3><p>Ein Wasserrohrbruch in 1030 kann große Schäden verursachen. Unser Installateur Notdienst Wien bietet schnelle Hilfe bei Wasserschaden und sorgt dafür, dass Wasserleitungen sofort repariert werden.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Abfluss verstopft oder WC verstopft</h3><p>Wenn der Abfluss nicht mehr funktioniert oder das WC verstopft ist, hilft unsere Rohrreinigung schnell und zuverlässig im gesamten Bezirk 1030.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Professioneller Installateur für Gas, Wasser und Heizung</h3><p>Unser Installateur Fachbetrieb Wien bietet umfassende Leistungen im Bereich Gas Wasser Heizung. Als erfahrener Gas Installateur kümmern wir uns um Gasleitungen, Thermen und Heizsysteme. Unser Fokus liegt auf schneller Thermenreparatur 1030 Wien und Heizungsservice. Ob Gastherme defekt, kein Warmwasser oder Heizungsausfall – wir sind Ihr Experte. Gleichzeitig übernimmt unser Sanitär Installateur alle Arbeiten rund um Badezimmer, Wasserleitungen und Sanitäranlagen. Moderne Heizungstechnik und zuverlässige Sanitärtechnik gehören zu unseren täglichen Aufgaben.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Ihr Installateur in Wien Landstraße</h3><p>Wenn Sie einen zuverlässigen Installateur 1030 Wien suchen, ist schnelle Verfügbarkeit entscheidend. Unser Installateur Notdienst ist täglich im dritten Bezirk tätig und erreicht Kunden in kurzer Zeit. Als erfahrener Installateur Wien 1030 betreuen wir Wohnungen, Büros und Gewerbebetriebe direkt in Wien Landstraße, nahe der Ritterstrasse und im gesamten dritten Bezirk. Unser Team kennt die Besonderheiten der Gebäude und bietet professionelle Lösungen.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team / Warum unser Fachbetrieb -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Warum unser Fachbetrieb in Wien</h2>
          <p>Unser Fachbetrieb überzeugt durch langjährige Erfahrung, hohe Qualität und zahlreiche zufriedene Kunden in 1030 Wien. Als etablierte Installateur Firma Wien setzen wir auf professionelle Arbeit und zuverlässigen Service. Unser Team besteht aus erfahrenen Fachmännern, die jede Thermenreparatur, Sanitärarbeit oder Heizung Reparatur effizient durchführen. Unsere Referenzen zeigen unsere Kompetenz im Bereich Thermenreparatur, Thermenservice Wien und Haustechnik. Vertrauen Sie auf unsere Erfahrung und profitieren Sie von einem starken Partner in Wien 1030.</p>
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

  <!-- Leistungen im Überblick (angepasst an die 5 Punkte aus dem Text) -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unsere Leistungen im Überblick</h2><p>Als erfahrene Installateur Firma Wien bieten wir Ihnen in 1030 Wien ein umfassendes Leistungsspektrum rund um Thermenreparatur, Sanitär und moderne Haustechnik. Unser Service richtet sich an Kunden in Wien Landstraße, entlang der Ritterstrasse und im gesamten Wien dritter Bezirk.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Thermenreparatur</h3><p>Unsere Thermenreparatur in Wien 1030 umfasst schnelle Diagnose, professionelle Reparatur und nachhaltige Lösungen für jede Gastherme, damit Heizung und Warmwasser zuverlässig funktionieren.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔧</div><div><h3>Thermenwartung</h3><p>Regelmäßige Thermenwartung und Thermenservice Wien sichern die Leistung Ihrer Anlage und verhindern teure Reparaturen sowie unerwartete Ausfälle in Ihrem Zuhause.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚙️</div><div><h3>Heizungsreparatur</h3><p>Wenn Ihre Heizung nicht funktioniert, bieten wir schnelle Heizung Reparatur in 1030 Wien und sorgen für eine rasche und effiziente Lösung.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🚿</div><div><h3>Sanitär & Installateur</h3><p>Als Gas Wasser Installateur übernehmen wir alle Sanitär Arbeiten sowie moderne Haustechnik Lösungen in Ihrer Wohnung, Ihrem Haus oder im Wien dritter Bezirk.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">💧</div><div><h3>Rohrbruch & Wasserschaden Hilfe</h3><p>Bei Rohrbruch oder Wasserschaden steht unser Notdienst in 1030 Wien sofort bereit und sorgt für schnelle Hilfe und sichere Reparatur vor Ort.</p></div></article>
        <!-- Wir können noch ein paar allgemeine Punkte ergänzen, aber der Kunde wollte diese fünf besonders hervorheben. -->
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🛠️</div><div><h3>Notdienst 24h</h3><p>Unser 24h Notdienst ist rund um die Uhr für Sie erreichbar – auch an Wochenenden und Feiertagen.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Gastherme Reparatur und Wartung</h2>
          <p>Bei Problemen mit Ihrer Therme bieten wir schnelle Gastherme Reparatur Wien, professionellen Thermen Service Wien sowie regelmäßige Gastherme Wartung Wien und Thermenwartung Wien. Regelmäßige Wartung verlängert die Lebensdauer Ihrer Anlage und verhindert teure Ausfälle.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.jpeg" alt="Wartung 1030 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur / Häufige Probleme -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Häufige Probleme mit Ihrer Therme</h2>
          <p>Typische Probleme in Wien 1030 sind kein Warmwasser, Heizung funktioniert nicht oder eine ausgefallene Gastherme. Eine Therme defekt verursacht oft große Schwierigkeiten im Alltag, egal ob in Ihrer Wohnung, Ihrem Haus oder im Wien dritter Bezirk. Unsere Experten erkennen jedes Problem rasch und bieten die passende Lösung direkt vor Ort in Wien Landstraße oder nahe der Ritterstrasse. Ob Gastherme Reparatur, Heizung Reparatur oder Notdienst bei Notfällen – unser Installateur Wien ist bestens vorbereitet. Durch unsere Erfahrung im Bereich Thermenreparatur und Thermen Reparatur Wien beheben wir Schäden effizient und sorgen dafür, dass Ihre Heizung und Ihr Warmwasser wieder zuverlässig funktionieren.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1030 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>24h Notdienst Installateur Wien</h2>
        <p>Unser Installateur Notdienst 1030 Wien ist rund um die Uhr für Sie erreichbar und bietet schnelle Hilfe bei dringenden Problemen. Der Thermen Notdienst Wien ist sofort vor Ort in Wien Landstraße, rund um die Ritterstrasse und im gesamten Wien 1030 im Einsatz. Wenn Ihre Heizung nicht funktioniert oder kein Warmwasser verfügbar ist, reagieren wir schnell und zuverlässig. Als 24h Installateur Wien kümmern wir uns um Notfälle wie Rohrbruch oder Wasserschaden und sorgen für eine sichere Reparatur. Unser Team ist immer in der Nähe und bietet Soforthilfe bei jedem Einsatz in 1030 Wien und Umgebung. Für mehr Infos zu unserer <a href="/">Thermenwartung Wien</a> besuchen Sie gerne unsere Startseite.</p>
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
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1030 Wien.</p>
      </div></div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size2.jpegs.jpeg" alt="Kosten Installateur" loading="lazy" decoding="async">
        </div></div>
        <div class="card-split__text"><div class="card-box">
          <h2>Preise & Kosten für Thermenreparatur</h2>
          <p>Die Preise für eine Thermenreparatur 1030 Wien hängen vom jeweiligen Problem, dem Aufwand und den benötigten Ersatzteilen ab. Unser Installateur Wien bietet transparente Kosten und erstellt Ihnen ein individuelles Angebot inklusive Kostenvoranschlag. Wir legen großen Wert auf faire Preise und bieten auch günstige Lösungen für jede Situation. Egal ob Reparatur, Wartung oder kompletter Service – Sie erhalten eine klare Beratung und ein passendes Angebot. Kontaktieren Sie uns für eine unverbindliche Beratung und erfahren Sie mehr über unsere Preise in Wien 1030, Wien Landstraße und im gesamten Wien dritter Bezirk.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ihr Installateur in 1030 Wien</h2>
          <p>Als Installateur 1030 Wien sind wir täglich im Wien dritter Bezirk, in Wien Landstraße und rund um die Ritterstrasse im Einsatz. Wir betreuen Kunden direkt vor Ort – egal ob in Ihrer Wohnung, Ihrem Haus oder in gewerblichen Objekten. Unser Standort ermöglicht schnelle Einsätze in Wien 1030 und der gesamten Umgebung. Wenn Sie einen Installateur Wien in der Nähe suchen, sind wir Ihr kompetenter Ansprechpartner. Unsere Adresse garantiert kurze Wege und schnelle Hilfe bei jedem Problem in Ihrem Zuhause.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.jpeg" alt="Einsatzgebiet Wien 1030" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Thermen Marken Grid (identisch zu 1010) -->
  <section class="service-section service-section--soft" id="thermen-services">
    <div class="container">
      <div class="service-section__head">
        <h2>Thermenservice für alle Marken</h2>
        <p>Ob Vaillant, Junkers, Buderus oder Wolf – wir warten und reparieren alle gängigen Gasgeräte. Regelmäßige Wartung sorgt für Sicherheit, Effizienz und eine längere Lebensdauer Ihrer Therme.</p>
      </div>

      <div class="brand-grid">
        <!-- 1 -->
        <a class="brand-card" href="{{ route('vaillant.thermentausch') }}">
          <img src="img/vaillant1-1.jpg" alt="Vaillant Thermenservice">
          <span>VAILLANT THERMENSERVICE</span>
        </a>
        <!-- 2 -->
        <a class="brand-card" href="{{ route('buderus.thermentausch') }}">
          <img src="img/1buderus.jpeg" alt="Buderus Thermenservice">
          <span>BUDERUS THERMENSERVICE</span>
        </a>
        <!-- 3 -->
        <a class="brand-card" href="{{ route('baxi.thermentausch') }}">
          <img src="img/1baxi.jpeg" alt="Baxi Thermenservice">
          <span>BAXI THERMENSERVICE</span>
        </a>
        <!-- 4 -->
        <a class="brand-card" href="{{ route('junkers.thermentausch') }}">
          <img src="img/1junkers.jpeg" alt="Junkers Thermenservice">
          <span>JUNKERS THERMENSERVICE</span>
        </a>
        <!-- 5 -->
        <a class="brand-card" href="{{ route('viessmann.thermentausch') }}">
          <img src="img/1viesman.jpeg" alt="Viessmann Thermenservice">
          <span>VIESSMANN THERMENSERVICE</span>
        </a>
        <!-- 6 -->
        <a class="brand-card" href="{{ route('wolf.thermentausch') }}">
          <img src="img/1wolf.jpeg" alt="Wolf Thermenservice">
          <span>WOLF THERMENSERVICE</span>
        </a>
        <!-- 7 -->
        <a class="brand-card" href="{{ route('saunier-duval.thermentausch') }}">
          <img src="img/1sauneri.jpeg" alt="Saunier Duval Thermenservice">
          <span>SAUNIER DUVAL SERVICE</span>
        </a>
        <!-- 8 -->
        <a class="brand-card" href="{{ route('loeblich.thermentausch') }}">
          <img src="img/1loblich.jpeg" alt="Löblich Thermenservice">
          <span>LÖBLICH THERMENSERVICE</span>
        </a>
        <!-- 9 -->
        <a class="brand-card" href="{{ route('ocean.thermentausch') }}">
          <img src="img/1oceanbaxi.jpeg" alt="Ocean Thermenservice">
          <span>OCEAN THERMENSERVICE</span>
        </a>
        <!-- 10 -->
        <a class="brand-card" href="{{ route('rapido.thermentausch') }}">
          <img src="img/1rapido.jpeg" alt="Rapido Thermenservice">
          <span>RAPIDO THERMENSERVICE</span>
        </a>
        <!-- 11 -->
        <a class="brand-card" href="{{ route('windhager.thermentausch') }}">
          <img src="img/Windhager.png" alt="Windhager Thermenservice">
          <span>WINDHAGER SERVICE</span>
        </a>
        <!-- 12 -->
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
          <summary>Was kostet eine Thermenreparatur in Wien 1030?</summary>
          <p>Die Kosten hängen vom Schaden und Aufwand ab. Nach einer genauen Analyse erstellen wir einen transparenten Kostenvoranschlag mit fairen Preisen.</p>
        </details>
        <details>
          <summary>Wie schnell ist der Notdienst vor Ort?</summary>
          <p>Unser Installateur Notdienst 1030 Wien ist meist innerhalb kurzer Zeit bei Ihnen in Wien Landstraße oder im Wien dritter Bezirk vor Ort. Für mehr Infos zu unserer <a href="/">Thermenwartung Wien</a> besuchen Sie gerne unsere Startseite.</p>
        </details>
        <details>
          <summary>Was tun bei kein Warmwasser?</summary>
          <p>Bei kein Warmwasser sollten Sie sofort unseren Thermen Notdienst Wien kontaktieren, um größere Schäden zu vermeiden.</p>
        </details>
        <details>
          <summary>Wann ist eine Wartung sinnvoll?</summary>
          <p>Eine regelmäßige Thermenwartung sorgt für effiziente Leistung Ihrer Heizung und reduziert langfristig Kosten.</p>
        </details>
        <details>
          <summary>Gibt es einen 24h Installateur Wien?</summary>
          <p>Ja, unser 24h Installateur Wien steht Ihnen jederzeit für Notfälle und dringende Einsätze zur Verfügung.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch in der Umgebung?</summary>
          <p>Ja, wir sind nicht nur in Wien 1030 tätig, sondern auch in der gesamten Umgebung schnell im Einsatz.</p>
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
          <p>Benötigen Sie eine schnelle Thermenreparatur 1030 Wien oder einen zuverlässigen Installateur Wien? Unser Team bietet Ihnen schnelle Hilfe, professionelle Beratung und ein individuelles Angebot zu fairen Preisen. Egal ob Notdienst, Wartung oder Reparatur – wir sind Ihr Ansprechpartner in 1030 Wien, Wien Landstraße, rund um die Ritterstrasse und im gesamten Wien dritter Bezirk.</p>
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







