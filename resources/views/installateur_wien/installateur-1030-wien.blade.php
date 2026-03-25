@extends('layout.app')

@section('main')

@php
$metaTitle = "Installateur   1030 Wien – 24h Installateur Landstraße";
$metaDescription = "Installateur   1030 Wien – schneller 24h Installateur in Landstraße. Hilfe bei Rohrbruch, Abfluss verstopft, Heizung oder Gastherme Problemen. Jetzt anrufen!";
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
        Installateur   1030 Wien <br>
        <span style="color:#FB9A1B;">24h Installateur Landstraße</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Hilfe vom erfahrenen Installateur 1030 Wien. Unser Installateur   Wien hilft sofort bei Sanitär-, Gas- und Heizungsproblemen im Bezirk Landstraße.</p>

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
            <li class="toc-item"><a href="# -services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text"> </span></a></li>
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
          <h2>Ihr Installateur in 1030 Wien</h2>
          <p>Wenn ein Rohr bricht, der Abfluss überläuft oder die Heizung plötzlich ausfällt, <a href="{{ route('installateur.1020') }}"> benötigen Sie schnelle </a> und professionelle Hilfe. Unser Installateur   1030 Wien ist jederzeit erreichbar und bietet schnelle Lösungen für Haushalte und Unternehmen im Bezirk Landstraße Wien. Als erfahrener Installateur Wien 1030 kümmern wir uns um akute Probleme im Bereich Gas Wasser Heizung Wien, Sanitäranlagen und moderne Haustechnik Wien. Unser   Installateur 1030 Wien hilft sofort bei dringenden Reparaturen und sorgt dafür, dass Schäden schnell behoben werden. Egal ob Wasserrohrbruch Wien, ein defekter Abfluss oder ein akuter Installateur Notfall Wien – unser Installateur Landstraße Wien ist schnell vor Ort. Wenn Sie einen Installateur   Nähe oder einen Installateur Nähe 1030 Wien suchen, steht unser Team jederzeit bereit.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Service 1030 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Rohrbruch und Wasserschäden schnell beheben</h3><p>Ein Wasserrohrbruch Wien kann große Schäden verursachen. Unser Rohrbruch   Wien bietet schnelle Hilfe bei Wasserschaden Wien und sorgt dafür, dass Leitungen und Sanitärsysteme schnell repariert werden.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Abfluss verstopft oder WC verstopft</h3><p>Ein Abfluss verstopft Wien oder WC verstopft Wien kann den Alltag erheblich stören. Unser Rohrreinigung Wien Service löst Verstopfungen schnell und sorgt für funktionierende Leitungen.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Professioneller Installateur für Gas, Wasser und Heizung</h3><p>Unser Installateur Fachbetrieb Wien bietet umfassende Dienstleistungen rund um Gas Wasser Heizung Wien. Als erfahrener Gas Installateur Wien kümmern wir uns um Gasleitungen, Thermen und Heizsysteme. Unser Sanitär Installateur Wien übernimmt Reparaturen und Wartungen von Wasserleitungen, Armaturen und Badezimmeranlagen.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Ihr Installateur in Wien Landstraße</h3><p>Wenn Sie einen zuverlässigen Installateur 1030 Wien suchen, ist schnelle Hilfe besonders wichtig. Unser Installateur   Wien ist täglich im dritten Bezirk unterwegs und unterstützt Bewohner und Unternehmen in Landstraße Wien bei allen Sanitär-, Heizungs- und Gasproblemen.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Warum unser Installateur Fachbetrieb in Wien</h2>
          <p>Unser Installateur Fachbetrieb Wien steht für Qualität, Erfahrung und schnelle Hilfe. Unser Installateur   Wien arbeitet mit modernen Werkzeugen und professionellen Methoden, um jedes Problem effizient zu lösen. Unser Installateur Team Wien verfügt über umfangreiche Installateur Erfahrung Wien im Bereich Sanitär-, Heizungs- und Gasinstallationen. Besonders bei Installateur Notfälle Wien ist eine schnelle Reaktion entscheidend. Deshalb ist unser   24h Wien jederzeit erreichbar. Als 24 Stunden Installateur Wien helfen wir sofort bei Rohrbrüchen, Heizungsproblemen oder defekten Anlagen. Wenn Sie einen Installateur schnell Wien benötigen, steht unser Team sofort bereit. Unser Ziel ist es, Ihnen zuverlässige und langfristige Lösungen zu bieten. Für einen zuverlässigen <a href="/">Thermenservice Niederösterreich</a> stehen wir Ihnen mit Erfahrung und klaren Abläufen zur Seite.</p>
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
      <div class="service-section__head"><h2>Unsere Installateur Leistungen in Wien 1030</h2><p>Unser Installateur   Wien bietet ein umfassendes Leistungsspektrum für Haushalte, Gewerbe und Hausverwaltungen im dritten Bezirk. Als erfahrene Installateur Firma Wien übernehmen wir Reparaturen, Wartungen und neue Installationen Wien im Bereich Gas Wasser Heizung Wien. Unser Wasserinstallateur Wien kümmert sich um defekte Leitungen, Armaturen und Sanitäranlagen. Gleichzeitig sorgt unser Sanitär Installateur Wien für professionelle Lösungen in Badezimmern und Sanitärsystemen. Unsere Experten arbeiten mit moderner Heizungstechnik Wien, effizienter Sanitärtechnik Wien und zuverlässiger Haustechnik Wien. Unser Installateur Service Wien unterstützt Kunden sowohl bei geplanten Projekten als auch bei dringenden Reparaturen. Dank unserem erfahrenen Installateur Team Wien bieten wir ein professionelles Landstraße Wien Installateur Service für Wohnungen, Häuser und Unternehmen.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧽</div><div><h3>Rohrreinigung Wien</h3><p>Rohrreinigung Wien bei verstopften Leitungen oder Abfluss verstopft Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧪</div><div><h3>Wasserrohrbruch Wien</h3><p>Soforthilfe bei Wasserrohrbruch Wien und Rohrschäden.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div><h3>WC verstopft Wien</h3><p>Reparatur bei WC verstopft Wien oder defekten Sanitäranlagen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Sanitär Reparatur Wien</h3><p>Professionelle Sanitär Reparatur Wien durch erfahrene Fachkräfte.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔁</div><div><h3>Badsanierung Wien</h3><p>Planung moderner Badezimmer inklusive Badsanierung Wien und Bad Sanierung Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">✅</div><div><h3>Thermenwartung Wien</h3><p>Thermenservice mit Thermenwartung Wien, Thermen Service Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div><h3>Gastherme Wartung Wien</h3><p>Gastherme Wartung Wien und regelmäßige Wartung.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚙️</div><div><h3>Heizung Reparatur Wien</h3><p>Heizungsservice durch unseren Heizung Installateur Wien inklusive Heizung Reparatur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Wartung Heizung Wien</h3><p>Zuverlässige Wartung Heizung Wien für effiziente Heizsysteme.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🛁</div><div><h3>Montage Sanitär Wien</h3><p>Installation neuer Systeme mit Montage Sanitär Wien.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Gastherme Reparatur und Wartung</h2>
          <p>Wenn Ihre Therme Probleme macht, bieten wir schnelle Gastherme Reparatur Wien, professionellen Thermen Service Wien sowie regelmäßige Gastherme Wartung Wien und Thermenwartung Wien.</p>
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

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Heizung Reparatur und Thermenservice</h2>
          <p>Bei einem Ausfall Ihrer Heizung hilft unser Heizung Installateur Wien sofort. Wir übernehmen Heizung Reparatur Wien, Wartung Heizung Wien und sorgen für effiziente Heizsysteme.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1030 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!--   -->
  <section class="service-section service-section--dark" id=" -services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Installateur   24h Wien</h2>
        <p>Ein Rohrbruch, eine defekte Therme oder ein verstopfter Abfluss kann jederzeit auftreten. Deshalb ist unser Installateur   Wien rund um die Uhr verfügbar. Unser   1030 Wien hilft schnell bei akuten Problemen im dritten Bezirk. Als 24 Stunden Installateur Wien bieten wir schnelle Hilfe bei Installateur Notfall Wien, defekten Heizungen oder beschädigten Leitungen. Unser Installateur   1030 Wien reagiert sofort bei dringenden Situationen. Wenn Sie einen Installateur   Nähe suchen, erreichen wir Ihren Standort meist innerhalb kurzer Zeit. Unser Sanitär   Wien und unser Gas Installateur Wien kümmern sich um alle dringenden Reparaturen.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">  kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische  ‑Einsätze</h3>
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
          <h2>Installateur Kosten Wien – transparente Preise</h2>
          <p>Viele Kunden möchten vorab wissen, welche Installateur Kosten Wien entstehen können. Unser Installateur   Wien arbeitet mit klaren und transparenten Preisen. Der genaue Installateur Preis Wien hängt vom Problem, dem Arbeitsaufwand und den benötigten Materialien ab. Unser Team erstellt auf Wunsch ein individuelles Installateur Angebot Wien, damit Sie eine klare Übersicht über die Kosten erhalten. Bei größeren Projekten erstellen wir auch einen Kostenvoranschlag Installateur Wien, damit Sie Planungssicherheit haben. Unser Ziel ist es, professionelle Leistungen zu fairen Preisen anzubieten, damit Sie sich jederzeit auf unseren Installateur 1030 Wien verlassen können.</p>
          <p>Für planbare Leistungen besprechen wir Umfang und Erwartungen vorab. Bei Störungen erklären wir nachvollziehbar, welche Schritte nötig sind und wie sich die Kosten zusammensetzen.</p>
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
          <p>Als Installateur in 1030 Wien (Landstraße) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu <a href="{{ route('installateur.1020') }}">Reparaturen und Modernisierung</a> erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1030 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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
          <summary>Was kostet ein Installateur   in Wien?</summary>
          <p>Die Kosten hängen vom Problem und vom Aufwand ab. Unser Installateur   Wien informiert Sie transparent über mögliche Installateur Kosten Wien und den genauen Installateur Preis Wien.</p>
        </details>
        <details>
          <summary>Wie schnell kommt ein Installateur in 1030 Wien?</summary>
          <p>Unser Installateur   1030 Wien ist im Bezirk Landstraße tätig. In vielen Fällen erreicht unser Installateur Wien 1030 Kunden innerhalb kurzer Zeit.</p>
        </details>
        <details>
          <summary>Bieten Sie auch Thermenwartung in Wien an?</summary>
          <p>Ja. Unser Team übernimmt Thermenwartung Wien, Thermen Service Wien und Gastherme Wartung Wien, damit Ihre Heizungsanlage sicher funktioniert.</p>
        </details>
        <details>
          <summary>Was tun bei Wasserrohrbruch in Wien?</summary>
          <p>Bei einem Wasserrohrbruch Wien sollten Sie sofort das Wasser abdrehen und unseren Rohrbruch   Wien kontaktieren. Unser Wasserinstallateur Wien kümmert sich um die Reparatur.</p>
        </details>
        <details>
          <summary>Sind Sie auch nachts erreichbar?</summary>
          <p>Ja. Unser   24h Wien ist rund um die Uhr erreichbar. Als 24 Stunden Installateur Wien helfen wir auch bei dringenden Einsätzen nachts oder am Wochenende.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch im Bezirk Landstraße?</summary>
          <p>Ja. Unser Installateur Landstraße Wien betreut Kunden im gesamten dritten Bezirk. Wenn Sie einen Installateur Nähe 1030 Wien benötigen, sind wir schnell vor Ort.</p>
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
          <p>Wenn Sie einen zuverlässigen Installateur 1030 Wien benötigen, hilft unser Team sofort weiter. Unser Installateur   Wien unterstützt Sie bei allen Problemen rund um Gas Wasser Heizung Wien, Sanitäranlagen und Rohrleitungen. Egal ob Installateur   1030 Wien, Rohrreinigung Wien, Sanitär Reparatur Wien oder Heizung Reparatur Wien – unser Installateur Service Wien sorgt für schnelle Lösungen.</p>
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
