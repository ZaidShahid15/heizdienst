@extends('layout.app')

@section('main')

@php
$metaTitle = "Installateur Notdienst 1080 Wien – 24h Installateur Josefstadt";
$metaDescription = "Installateur Notdienst 1080 Wien – schneller Installateur Wien 1080 für Sanitär, Gas und Heizung. Soforthilfe bei Rohrbruch, Abfluss verstopft oder Heizung defekt.";
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
        Installateur Notdienst 1080 Wien <br>
        <span style="color:#FB9A1B;">24h Installateur Josefstadt</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Hilfe vom erfahrenen Installateur 1080 Wien. Unser Installateur Notdienst Wien ist rund um die Uhr erreichbar und hilft bei Problemen mit Sanitär, Gas und Heizung im Bezirk Josefstadt.</p>

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
          <h2>Ihr Installateur Notdienst in 1080 Wien</h2>
          <p>Wenn plötzlich ein Rohr platzt, das WC überläuft oder die Heizung nicht mehr funktioniert, brauchen Sie sofort professionelle Hilfe. Genau dafür steht unser Installateur Notdienst 1080 Wien bereit. Unser Notdienst Installateur 1080 Wien ist täglich im Einsatz und hilft Haushalten sowie Unternehmen in der Josefstadt. Als erfahrener Installateur Wien 1080 kennen wir die Besonderheiten der Gebäude in diesem Bezirk und bieten schnelle Lösungen für alle Probleme rund um Gas Wasser Heizung Wien. Ob Installateur Notfall Wien, defekte Leitungen oder dringende Reparaturen – unser Team reagiert schnell. Als Installateur Josefstadt bieten wir einen zuverlässigen Installateur Service Wien, damit Ihr Zuhause oder Betrieb rasch wieder funktioniert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Service 1080 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Rohrbruch und Wasserschäden schnell beheben</h3><p>Ein Wasserrohrbruch Wien kann schwere Schäden verursachen und sollte sofort repariert werden. Unser Rohrbruch Notdienst Wien bietet schnelle Hilfe bei Wasserschaden Wien und sorgt dafür, dass Leitungen rasch wieder funktionieren. Als erfahrener Wasserinstallateur Wien reparieren wir defekte Rohre zuverlässig.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Abfluss verstopft oder WC verstopft</h3><p>Wenn der Abfluss verstopft Wien oder das WC verstopft Wien ist, hilft unser Rohrreinigung Wien Service schnell. Unser Installateur Wien 1080 entfernt Verstopfungen professionell und sorgt dafür, dass Ihre Sanitäranlagen wieder problemlos funktionieren.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Professioneller Installateur für Gas, Wasser und Heizung</h3><p>Unser Installateur Fachbetrieb Wien bietet umfassende Leistungen rund um Gas Wasser Heizung Wien. Als erfahrener Gas Installateur Wien kümmern wir uns um Gasleitungen, Heizsysteme und Thermen. Gleichzeitig übernimmt unser Sanitär Installateur Wien alle Arbeiten im Bereich Badezimmer, Leitungen und Sanitäranlagen. Auch moderne Heizungstechnik Wien sowie zuverlässige Sanitärtechnik Wien gehören zu unseren täglichen Aufgaben. Unser Installateur 1080 Wien führt Reparaturen, Wartungen und neue Installationen Wien für Wohnungen, Häuser und Betriebe durch. Durch unsere Erfahrung in der Haustechnik Wien können wir schnelle Lösungen anbieten.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Ihr Installateur in der Josefstadt</h3><p>Wenn Sie einen zuverlässigen Installateur Nähe 1080 Wien suchen, ist schnelle Hilfe entscheidend. Unser Installateur Notdienst 1080 Wien ist täglich im Bezirk tätig und erreicht Kunden in kurzer Zeit. Als erfahrener Installateur Wien 1080 betreuen wir Wohnungen, Büros und Betriebe direkt im Herzen der Josefstadt. Unser Installateur Notdienst Josefstadt kennt die Besonderheiten älterer Gebäude und moderner Anlagen gleichermaßen. Egal ob Installateur Notfall Wien, ein technisches Problem mit Leitungen oder eine dringende Reparatur – unser Installateur Josefstadt ist schnell vor Ort. Wenn Sie einen Installateur Umgebung 1080 Wien benötigen, steht unser Josefstadt Installateur Service jederzeit bereit.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Unser erfahrenes Team für 1080 Wien</h2>
          <p>Unser Installateur Notdienst Wien steht für Qualität, Erfahrung und schnelle Hilfe. Als etablierter Installateur Fachbetrieb Wien arbeiten wir mit modernen Werkzeugen und professionellen Methoden. Unser Installateur Team Wien verfügt über umfangreiche Installateur Erfahrung Wien im Bereich Sanitär, Heizung und Gasinstallationen. Kunden schätzen besonders unsere schnelle Reaktionszeit und unseren zuverlässigen Installateur Service Wien. Wenn ein Installateur Notfall Wien entsteht, reagiert unser Team sofort. Unser Notdienst 24h Wien steht rund um die Uhr bereit, damit dringende Installateur Notfälle Wien schnell gelöst werden. Wenn Sie einen Installateur schnell Wien benötigen oder sofortige Installateur Hilfe Wien suchen, können Sie sich jederzeit auf unseren Service verlassen.</p>
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
      <div class="service-section__head"><h2>Unsere Installateur Leistungen in Wien 1080</h2><p>Unser Installateur Notdienst Wien bietet ein umfassendes Leistungsspektrum für Haushalte und Unternehmen. Als erfahrene Installateur Firma Wien kümmern wir uns um alle Bereiche rund um Gas Wasser Heizung Wien sowie moderne Installationen Wien in Wohnungen und Gebäuden. Unser Wasserinstallateur Wien übernimmt Reparaturen, Wartungen und komplette Installationsarbeiten. Gleichzeitig arbeiten wir als professioneller Sanitär Installateur Wien und bieten zuverlässige Lösungen für Badezimmer, Leitungen und Sanitäranlagen. Auch moderne Badsanierung Wien Projekte und hochwertige Bad Sanierung Wien gehören zu unserem täglichen Service. Unser Installateur Service Wien umfasst außerdem Montage Sanitär Wien, neue Anlagen sowie Reparaturen an bestehenden Systemen. Als zuverlässiger Partner im Bereich Sanitärtechnik Wien, Heizungstechnik Wien und Haustechnik Wien sorgen wir dafür, dass alle Installationen sicher und effizient funktionieren.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧽</div><div><h3>Rohrreinigung Wien</h3><p>Rohrreinigung Wien bei verstopften Leitungen oder Abfluss verstopft Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧪</div><div><h3>Wasserrohrbruch Wien</h3><p>Schnelle Hilfe bei Wasserrohrbruch Wien und dringenden Wasserschäden.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div><h3>WC verstopft Wien</h3><p>Reparatur von WC verstopft Wien und verstopften Abflüssen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Sanitär Reparatur Wien</h3><p>Professionelle Sanitär Reparatur Wien für Badezimmer und Leitungen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔁</div><div><h3>Bad Installation Wien</h3><p>Planung und Umsetzung von modernen Badezimmern inklusive Badsanierung Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">✅</div><div><h3>Badsanierung Wien</h3><p>Fachgerechte Badsanierung Wien und Bad Sanierung Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div><h3>Installationen Wien</h3><p>Fachgerechte Installationen Wien für Wohnungen, Häuser und Betriebe.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚙️</div><div><h3>Thermenwartung Wien</h3><p>Wartung von Thermen inklusive Thermenwartung Wien und Thermen Service Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Gastherme Wartung Wien</h3><p>Regelmäßige Gastherme Wartung Wien und schnelle Gastherme Reparatur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🛁</div><div><h3>Montage Sanitär Wien</h3><p>Professionelle Montage Sanitär Wien für neue Anlagen.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Gastherme Reparatur und Wartung</h2>
          <p>Bei Problemen mit der Therme bieten wir schnelle Gastherme Reparatur Wien, professionellen Thermen Service Wien sowie regelmäßige Thermenwartung Wien und Gastherme Wartung Wien, damit Ihre Anlage zuverlässig funktioniert.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.jpeg" alt="Wartung 1080 Wien" loading="lazy" decoding="async">
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
          <p>Wenn die Heizung ausfällt, hilft unser Heizung Installateur Wien sofort. Wir bieten schnelle Heizung Reparatur Wien, professionelle Wartung Heizung Wien und zuverlässigen Thermen Service Wien für Wohnungen und Gebäude.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1080 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Installateur Notdienst 24h Wien</h2>
        <p>Probleme mit Wasserleitungen, Gas oder Heizungen entstehen oft unerwartet. Deshalb steht unser Installateur Notdienst Wien rund um die Uhr bereit. Unser Notdienst 1080 Wien hilft schnell bei Rohrbrüchen, Heizungsproblemen oder verstopften Leitungen. Als 24 Stunden Installateur Wien sind wir jederzeit erreichbar und helfen Kunden im gesamten Bezirk Josefstadt. Wenn Sie einen Installateur Notdienst Nähe benötigen, ist unser Team schnell vor Ort. Unser Sanitär Notdienst Wien kümmert sich um dringende Reparaturen an Sanitäranlagen, während unser Gas Installateur Wien Probleme mit Gasleitungen oder Thermen behebt. Bei einem akuten Installateur Notfall Wien können Sie sich jederzeit auf unseren zuverlässigen Installateur Notdienst 1080 Wien verlassen.</p>
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
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1080 Wien.</p>
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
          <p>Viele Kunden möchten vorab wissen, wie hoch die Installateur Kosten Wien sind. Bei unserem Installateur Notdienst Wien erhalten Sie transparente Informationen über den möglichen Installateur Preis Wien. Die genauen Kosten hängen von der Art der Reparatur, dem Material sowie dem Arbeitsaufwand ab. Auf Wunsch erstellt unser Team ein individuelles Installateur Angebot Wien, damit Sie eine klare Übersicht erhalten. Bei größeren Projekten erstellen wir außerdem einen detaillierten Kostenvoranschlag Installateur Wien, damit Sie Planungssicherheit haben. Unser Ziel ist es, hochwertige Leistungen zu fairen Preisen anzubieten, damit Sie sich auf einen zuverlässigen Installateur Wien 1080 verlassen können.</p>
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
          <p>Als Installateur in 1080 Wien (Josefstadt) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1080 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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
      <a class="brand-card" href="#">
        <img src="img/vaillant1-1.jpg" alt="Vaillant Thermenservice">
        <span>VAILLANT THERMENSERVICE</span>
      </a>

      <!-- 2 -->
      <a class="brand-card" href="#">
        <img src="img/1buderus.jpeg" alt="Buderus Thermenservice">
        <span>BUDERUS THERMENSERVICE</span>
      </a>

      <!-- 3 -->
      <a class="brand-card" href="#">
        <img src="img/1baxi.jpeg" alt="Baxi Thermenservice">
        <span>BAXI THERMENSERVICE</span>
      </a>

      <!-- 4 -->
      <a class="brand-card" href="#">
        <img src="img/1junkers.jpeg" alt="Junkers Thermenservice">
        <span>JUNKERS THERMENSERVICE</span>
      </a>

      <!-- 5 -->
      <a class="brand-card" href="#">
        <img src="img/1viesman.jpeg" alt="Viessmann Thermenservice">
        <span>VIESSMANN THERMENSERVICE</span>
      </a>

      <!-- 6 -->
      <a class="brand-card" href="#">
        <img src="img/1wolf.jpeg" alt="Wolf Thermenservice">
        <span>WOLF THERMENSERVICE</span>
      </a>

      <!-- 7 -->
      <a class="brand-card" href="#">
        <img src="img/1sauneri.jpeg" alt="Saunier Duval Thermenservice">
        <span>SAUNIER DUVAL SERVICE</span>
      </a>

      <!-- 8 -->
      <a class="brand-card" href="#">
        <img src="img/1loblich.jpeg" alt="Löblich Thermenservice">
        <span>LÖBLICH THERMENSERVICE</span>
      </a>

      <!-- 9 -->
      <a class="brand-card" href="#">
        <img src="img/1oceanbaxi.jpeg" alt="Ocean Thermenservice">
        <span>OCEAN THERMENSERVICE</span>
      </a>

      <!-- 10 -->
      <a class="brand-card" href="#">
        <img src="img/1rapido.jpeg" alt="Rapido Thermenservice">
        <span>RAPIDO THERMENSERVICE</span>
      </a>

      <!-- 11 -->
      <a class="brand-card" href="#">
        <img src="img/Windhager.png" alt="Windhager Thermenservice">
        <span>WINDHAGER SERVICE</span>
      </a>

      <!-- 12 -->
      <a class="brand-card" href="#">
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
          <summary>Was kostet ein Installateur Notdienst in 1080 Wien?</summary>
          <p>Die Installateur Kosten Wien hängen vom Problem, der Arbeitszeit und dem Material ab. Unser Installateur Notdienst Wien informiert Sie transparent über den möglichen Installateur Preis Wien.</p>
        </details>
        <details>
          <summary>Wie schnell kommt ein Installateur in der Josefstadt?</summary>
          <p>Unser Installateur Notdienst 1080 Wien ist täglich im Bezirk tätig. In vielen Fällen erreicht unser Installateur Wien 1080 Kunden innerhalb kurzer Zeit.</p>
        </details>
        <details>
          <summary>Bieten Sie auch Thermenwartung in Wien an?</summary>
          <p>Ja. Unser Team übernimmt Thermenwartung Wien, Gastherme Wartung Wien sowie Thermen Service Wien, damit Ihre Heizungsanlage zuverlässig funktioniert.</p>
        </details>
        <details>
          <summary>Was tun bei einem Wasserrohrbruch in Wien?</summary>
          <p>Bei einem Wasserrohrbruch Wien sollten Sie sofort das Wasser abdrehen und unseren Rohrbruch Notdienst Wien kontaktieren. Unser Wasserinstallateur Wien kümmert sich sofort um die Reparatur.</p>
        </details>
        <details>
          <summary>Sind Sie auch nachts erreichbar?</summary>
          <p>Ja. Unser Notdienst 24h Wien ist rund um die Uhr erreichbar. Als 24 Stunden Installateur Wien helfen wir auch bei dringenden Nacht- oder Wochenendeinsätzen.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch direkt im Bezirk Josefstadt?</summary>
          <p>Natürlich. Unser Installateur Josefstadt betreut besonders viele Kunden im achten Bezirk. Wenn Sie einen Installateur Nähe 1080 Wien oder Installateur Umgebung 1080 Wien suchen, sind wir schnell vor Ort.</p>
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
          <p>Wenn Sie einen zuverlässigen Installateur 1080 Wien benötigen, steht unser Team jederzeit bereit. Unser Installateur Notdienst Wien hilft bei allen Problemen rund um Gas Wasser Heizung Wien, Sanitäranlagen und Rohrleitungen. Egal ob Rohrreinigung Wien, Sanitär Reparatur Wien, Heizung Reparatur Wien oder eine dringende Gastherme Reparatur Wien – wir kümmern uns schnell um Ihr Anliegen. Unser Installateur Service Wien ist für Privatkunden, Unternehmen und Hausverwaltungen verfügbar.</p>
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
