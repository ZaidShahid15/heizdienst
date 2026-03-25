@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermenreparatur 1010 Wien – Installateur Notdienst Wien Zentrum";
$metaDescription = "Thermenreparatur 1010 Wien vom Installateur Wien. Schnelle Hilfe bei kein Warmwasser, Heizung defekt & Notdienst in der Innere Stadt. Jetzt kontaktieren!";
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

    /* === BRAND GRID (neu für Thermen Marken) === */
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
        Thermenreparatur 1010 Wien <br>
        <span style="color:#FB9A1B;">Installateur Notdienst Wien Zentrum</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Thermenreparatur 1010 Wien vom erfahrenen Installateur Wien – rasche Hilfe bei Heizung, Warmwasser und Notdienst in der Innere Stadt. Unser 24h Notdienst ist immer für Sie da.</p>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="tel:+4314420617"><i class="bi bi-telephone-fill"></i> JETZT ANRUFEN: +43 1 442 0617</a>
        <a class="wolf-btn wolf-btn--ghost" href="#kontakt-services"><i class="bi bi-arrow-right"></i> Anfrage senden</a>
      </div>

      <!-- Trust icons (exact snippet) -->
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

  <!-- TOC (aktualisiert: Thermen Marken als 09, FAQ 10, Kontakt 11) -->
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
            <!-- NEU: Thermen Marken -->
            <li class="toc-item"><a href="#thermen-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Thermenservice</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Schnelle Hilfe bei Thermenproblemen in 1010 Wien</h2>
          <p>Wenn Ihre Therme defekt ist oder plötzlich kein Warmwasser vorhanden ist, benötigen Sie schnelle Hilfe in 1010 Wien. Unser Installateur Wien bietet zuverlässige Thermenreparatur 1010 Wien sowie umfassenden Thermenservice Wien direkt vor Ort in der Innere Stadt und im Wien Zentrum. Egal ob Gastherme Reparatur, Heizung Reparatur oder akute Notfälle – unser erfahrenes Team sorgt für Soforthilfe und eine schnelle Lösung. Als Installateur 1010 Wien sind wir täglich im Einsatz und garantieren kurze Reaktionszeiten in Wien 1010. Vertrauen Sie auf unseren professionellen Notdienst, wenn Ihre Heizung Probleme macht oder Ihre Gastherme nicht mehr funktioniert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Service 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Rohrbruch & Wasserschäden schnell beheben</h3><p>Ein Wasserrohrbruch Wien kann große Schäden verursachen. Unser Installateur Notdienst Wien bietet schnelle Hilfe bei Wasserschaden Wien und sorgt dafür, dass Wasserleitungen sofort repariert werden.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Abfluss verstopft oder WC verstopft</h3><p>Wenn der Abfluss nicht mehr funktioniert oder das WC verstopft Wien ist, hilft unser Rohrreinigung Wien Service schnell und zuverlässig im gesamten Bereich Installateur Wien 1010.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Professioneller Installateur für Gas, Wasser und Heizung</h3><p>Unser Installateur Fachbetrieb Wien bietet umfassende Leistungen im Bereich Gas Wasser Heizung Wien. Als erfahrener Gas Installateur Wien kümmern wir uns um Gasleitungen, Thermen und Heizsysteme. Unser Fokus liegt auf schneller Thermenreparatur 1010 Wien und Heizungsservice. Ob Gastherme defekt, kein Warmwasser oder Heizungsausfall – wir sind Ihr Experte. Gleichzeitig übernimmt unser Sanitär Installateur Wien alle Arbeiten rund um Badezimmer, Wasserleitungen und Sanitäranlagen. Moderne Heizungstechnik Wien und zuverlässige Sanitärtechnik Wien gehören zu unseren täglichen Aufgaben. Unser Installateur Betrieb Wien bietet Reparaturen, Wartung und neue Installationen Wien für Wohnungen, Häuser und Betriebe in Wien 1010. Durch unsere Erfahrung in der Haustechnik Wien können wir schnelle und sichere Lösungen anbieten.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Ihr Installateur in der Wiener Innenstadt</h3><p>Wenn Sie einen zuverlässigen Installateur 1010 Wien suchen, ist schnelle Verfügbarkeit entscheidend. Unser Installateur Notdienst Wien ist täglich im Zentrum tätig und erreicht Kunden in kurzer Zeit. Als erfahrener Installateur Wien 1010 betreuen wir Wohnungen, Büros und Gewerbebetriebe direkt im Herzen der Stadt. Unser Notdienst Installateur 1010 Wien kennt die Besonderheiten der Gebäude im ersten Bezirk und bietet professionelle Lösungen für alte und neue Installationen. Ob akuter Installateur Notfall Wien, ein technisches Problem mit Wasserleitungen oder eine schnelle Reparatur – unser Installateur Wien Innenstadt ist sofort einsatzbereit. Wenn Sie einen Installateur Nähe 1010 Wien oder einen Installateur Umgebung Wien benötigen, steht unser Installateur Notdienst 1010 Wien schnell zur Verfügung.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Unser erfahrenes Team für 1010 Wien</h2>
          <p>Unser Installateur Notdienst Wien steht für Qualität, Erfahrung und schnelle Hilfe. Als etablierter Installateur Fachbetrieb Wien arbeiten wir mit modernen Werkzeugen und professionellen Methoden. Unser Installateur Team Wien verfügt über langjährige Installateur Erfahrung Wien im Bereich Sanitär-, Heizungs- und Gasinstallationen – insbesondere bei Thermenreparatur und Wartung. Kunden schätzen besonders unsere schnelle Reaktionszeit und unseren zuverlässigen Installateur Service Wien. Wir verstehen, dass Thermenausfälle sofort gelöst werden müssen, deshalb arbeitet unser Notdienst 24h Wien rund um die Uhr. Wenn Sie einen Installateur schnell Wien benötigen, steht unser Team sofort bereit. Unser Ziel ist es, jedes Problem effizient und dauerhaft zu lösen.</p>
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

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unsere Installateur Leistungen in Wien 1010</h2><p>Unser Thermenservice Wien umfasst nicht nur die Thermenreparatur 1010 Wien, sondern auch regelmäßige Thermenwartung und professionellen Service für Ihre gesamte Heizung. Als Fachbetrieb in Wien 1010 bieten wir Wartung, Reparatur und umfassende Betreuung Ihrer Gastherme und Heizsysteme. Unser Team aus erfahrenen Fachmännern arbeitet mit höchster Qualität und sorgt für langlebige Lösungen. Egal ob Sanitär, Haustechnik oder Gas Wasser Installateur Leistungen – wir decken alles ab. Vertrauen Sie auf unsere Erfahrung, wenn es um Wartung, Service und zuverlässige Reparatur in der Innere Stadt geht.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧽</div><div><h3>Rohrreinigung Wien</h3><p>Rohrreinigung Wien bei verstopften Leitungen oder Abfluss verstopft Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧪</div><div><h3>Wasserrohrbruch Wien</h3><p>Schnelle Hilfe bei Wasserrohrbruch Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div><h3>WC verstopft Wien</h3><p>Reparatur von WC verstopft Wien und Abflussproblemen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Sanitär Reparatur Wien</h3><p>Professionelle Sanitär Reparatur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔁</div><div><h3>Bad Installation Wien</h3><p>Planung und Umsetzung von Bad Installation Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">✅</div><div><h3>Badsanierung Wien</h3><p>Moderne Badsanierung Wien und Sanierung Bad Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div><h3>Thermenwartung Wien</h3><p>Wartung von Thermen inklusive Thermenwartung Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚙️</div><div><h3>Gastherme Wartung Wien</h3><p>Gastherme Wartung Wien und Thermen Service Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Heizung Installateur Wien</h3><p>Heizungsservice durch unseren Heizung Installateur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🛁</div><div><h3>Montage Sanitär Wien</h3><p>Montage Sanitär Wien für neue Anlagen.</p></div></article>
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
          <img class="service-media__img" src="img/1size7.jpeg" alt="Wartung 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Heizung Reparatur und Thermenservice</h2>
          <p>Wenn die Heizung ausfällt, hilft unser Heizung Installateur Wien sofort. In Wien 1010 treten häufig Probleme wie kein Warmwasser, Heizung funktioniert nicht oder eine komplett ausgefallene Gastherme auf. Eine Therme defekt bedeutet oft Stress im Alltag, besonders im Wien Zentrum oder in der Innere Stadt. Unsere Experten für Thermenreparatur erkennen jedes Problem schnell und bieten die passende Lösung direkt vor Ort. Ob Gastherme Reparatur, Heizung Reparatur oder dringende Einsätze bei Notfällen – unser Installateur Wien ist bestens vorbereitet. Durch unsere Erfahrung im Bereich Thermen Reparatur Wien können wir Schäden effizient beheben und sorgen dafür, dass Ihre Heizung und Warmwasser wieder zuverlässig funktionieren.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Installateur Notdienst 24h Wien</h2>
        <p>Unser Installateur Notdienst 1010 Wien ist rund um die Uhr für Sie erreichbar. Der Thermen Notdienst Wien bietet schnelle Hilfe bei akuten Problemen wie Heizung funktioniert nicht oder kein Warmwasser in Ihrer Wohnung oder Ihrem Haus. Als 24h Installateur Wien sind wir sofort vor Ort in Wien Zentrum, in der Innere Stadt und in der gesamten Umgebung. Bei Notfällen wie Rohrbruch oder Wasserschaden reagieren wir schnell und zuverlässig. Unser Team sorgt für Soforthilfe und ist jederzeit in der Nähe, wenn Sie einen erfahrenen Installateur Wien benötigen.</p>
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
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1010 Wien.</p>
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
          <h2>Installateur Kosten Wien – transparente Preise</h2>
          <p>Die Preise für eine Thermenreparatur 1010 Wien hängen vom jeweiligen Problem, dem Aufwand und den benötigten Ersatzteilen ab. Unser Installateur Wien bietet transparente Kosten und erstellt Ihnen ein individuelles Angebot inklusive Kostenvoranschlag. Wir legen großen Wert auf faire Preise und eine klare Beratung, damit Sie genau wissen, welche Kosten auf Sie zukommen. Ob günstige Reparatur, umfassender Service oder regelmäßige Wartung – wir bieten Ihnen passende Lösungen für jedes Budget. Kontaktieren Sie uns für eine unverbindliche Beratung und ein maßgeschneidertes Angebot in Wien 1010 und Umgebung.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Region -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Einsatzgebiet: Wien & Umgebung</h2>
          <p>Als Spezialist für Thermenreparatur in 1010 Wien (Innere Stadt) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1010 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.jpeg" alt="Einsatzgebiet Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>


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
 <a class="brand-card" href="{{ route('löblich.thermentausch') }}">
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
      <div class="service-section__head"><h2>Häufig gestellte Fragen</h2><p>Antworten auf die häufigsten Fragen – kurz, klar und praxisnah.</p></div>
      <div class="service-faq">
        <details>
          <summary>Was kostet eine Thermenreparatur in Wien 1010?</summary>
          <p>Die Kosten hängen vom Schaden und Aufwand ab. Nach einer genauen Analyse erstellen wir einen transparenten Kostenvoranschlag mit fairen Preisen. Unser Installateur Notdienst Wien informiert Sie vorab über die zu erwartenden Kosten.</p>
        </details>
        <details>
          <summary>Wie schnell ist der Notdienst vor Ort?</summary>
          <p>Unser Installateur Notdienst 1010 Wien ist meist innerhalb kurzer Zeit bei Ihnen vor Ort in der Innere Stadt oder im Wien Zentrum. Durch unsere zentrale Lage im ersten Bezirk sind schnelle Einsätze garantiert.</p>
        </details>
        <details>
          <summary>Was tun bei kein Warmwasser?</summary>
          <p>Wenn kein Warmwasser vorhanden ist, sollten Sie sofort unseren Thermen Notdienst Wien kontaktieren, um größere Schäden zu vermeiden. Oft liegt eine Störung der Therme vor, die wir schnell beheben können.</p>
        </details>
        <details>
          <summary>Wann ist eine Wartung sinnvoll?</summary>
          <p>Eine regelmäßige Thermenwartung verhindert Ausfälle und sorgt für eine effiziente Heizung sowie langfristige Kosteneinsparungen. Wir empfehlen eine jährliche Wartung durch einen Fachbetrieb.</p>
        </details>
        <details>
          <summary>Gibt es einen 24h Installateur Wien?</summary>
          <p>Ja, unser 24h Installateur Wien steht Ihnen jederzeit für Notfälle und dringende Reparaturen zur Verfügung. Egal ob Tag oder Nacht – wir sind für Sie da.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch in der Umgebung?</summary>
          <p>Ja, wir sind nicht nur in Wien 1010 tätig, sondern auch in der gesamten Umgebung schnell im Einsatz. Kontaktieren Sie uns einfach – wir prüfen, ob wir für Sie verfügbar sind.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="container">
      <div class="service-cta__inner">
        <div>
          <h2>Installateur Kontakt Wien</h2>
          <p>Benötigen Sie eine schnelle Thermenreparatur 1010 Wien oder einen zuverlässigen Installateur Wien? Unser Team bietet Ihnen schnelle Hilfe, professionelle Beratung und ein individuelles Angebot zu fairen Preisen. Egal ob Notdienst, Wartung oder Reparatur – wir sind Ihr Ansprechpartner in Wien 1010, in der Innere Stadt und im gesamten Wien Zentrum.</p>
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




