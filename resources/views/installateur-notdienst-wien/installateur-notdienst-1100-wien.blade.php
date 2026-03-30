@extends('layout.app')

@section('main')

@php
$metaTitle = "Installateur Notdienst 1100 Wien � 24h Installateur Wien Favoriten";
$metaDescription = "Installateur Notdienst 1100 Wien � schneller Installateur Wien 1100 f�r Sanit�r, Gas und Heizung. Soforthilfe bei Rohrbruch, Abfluss verstopft oder Heizung defekt.";
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

    /* === BRAND GRID (f�r Thermen Marken) === */
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
        Installateur Notdienst 1100 Wien <br>
        <span style="color:#FB9A1B;">24h Installateur Wien Favoriten</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Hilfe vom erfahrenen Installateur 1100 Wien. Unser Installateur Notdienst Wien ist rund um die Uhr erreichbar und unterst�tzt Sie bei Problemen mit Sanit�r, Gas und Heizung im Bezirk Favoriten.</p>

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

  <!-- TOC -->
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
            <!-- Thermen Marken -->
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
          <h2>Ihr Installateur Notdienst in 1100 Wien</h2>
          <p>Wenn ein Rohr bricht, der Abfluss blockiert oder die Heizung pl�tzlich ausf�llt, ben�tigen Sie schnelle und professionelle Unterst�tzung. Unser Installateur Notdienst 1100 Wien steht Ihnen jederzeit zur Verf�gung und hilft bei allen Problemen rund um Wasserleitungen, Heizsysteme und Sanit�ranlagen. Als erfahrener Installateur Wien 1100 betreuen wir Wohnungen, B�ros und Betriebe im gesamten Bezirk Favoriten. Unser Notdienst Installateur 1100 Wien ist auf dringende Reparaturen im Bereich Gas Wasser Heizung Wien spezialisiert und sorgt daf�r, dass Sch�den schnell behoben werden. Egal ob Wasserrohrbruch Wien, defekte Armaturen oder ein akuter Installateur Notfall Wien, unser Team reagiert zuverl�ssig. Als lokaler Installateur Favoriten kennen wir die Anforderungen �lterer Geb�ude ebenso wie moderner Anlagen. Unser Installateur Notdienst Favoriten bietet schnelle L�sungen und sorgt mit professionellem Installateur Service Wien daf�r, dass Ihr Zuhause oder Ihr Unternehmen rasch wieder funktioniert. Weitere Details finden Sie in unseren <a href="{{ route('installateur-notdienst-1090-wien') }}">weiterf�hrenden Informationen</a>.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.webp" alt="Installateur Service 1100 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Rohrbruch und Wassersch�den schnell beheben</h3><p>Ein Wasserrohrbruch Wien kann erhebliche Sch�den verursachen und sollte sofort repariert werden. Unser Rohrbruch Notdienst Wien bietet schnelle Unterst�tzung bei Leitungsproblemen und sorgt f�r professionelle Hilfe bei Wasserschaden Wien. Als erfahrener Wasserinstallateur Wien reparieren wir besch�digte Rohre zuverl�ssig und verhindern gr��ere Sch�den an Ihrer Immobilie.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div>
          <h3>Abfluss oder WC verstopft � schnelle L�sung</h3><p>Wenn der Abfluss verstopft Wien oder das WC verstopft Wien, ist schnelle Hilfe wichtig. Unser Rohrreinigung Wien Service entfernt Verstopfungen effizient und sorgt daf�r, dass Ihre Sanit�ranlagen wieder einwandfrei funktionieren. Als erfahrener Installateur 1100 Wien sind wir im gesamten Bezirk Favoriten schnell vor Ort.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?????</div><div>
          <h3>Professioneller Installateur f�r Gas, Wasser und Heizung</h3><p>Unser Installateur 1100 Wien bietet umfassende Leistungen im Bereich Gas Wasser Heizung Wien. Als erfahrener Gas Installateur Wien k�mmern wir uns um Gasleitungen, Thermen und Heizsysteme. Gleichzeitig �bernimmt unser Sanit�r Installateur Wien alle Arbeiten rund um Badezimmer, Wasserleitungen und Sanit�ranlagen. Moderne Heizungstechnik Wien, zuverl�ssige Sanit�rtechnik Wien und sichere Installationen Wien geh�ren zu unseren t�glichen Aufgaben. Unser Team arbeitet als professionelle Installateur Firma Wien und bietet Reparaturen, Wartung und neue Installationen f�r Wohnungen, H�user und Betriebe im Bezirk Favoriten. Durch unsere Erfahrung im Bereich Haustechnik Wien k�nnen wir schnelle und sichere L�sungen anbieten.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Ihr Installateur im Bezirk Favoriten</h3><p>Wenn Sie einen zuverl�ssigen Installateur N�he 1100 Wien suchen, ist schnelle Verf�gbarkeit entscheidend. Unser Installateur Notdienst 1100 Wien ist t�glich im Bezirk t�tig und erreicht Kunden meist innerhalb kurzer Zeit. Als erfahrener Installateur Wien 1100 betreuen wir Wohnungen, B�ros und Gewerbebetriebe im gesamten Bezirk Favoriten. Unser Installateur Favoriten kennt die Besonderheiten der Geb�ude im 10. Bezirk und bietet professionelle L�sungen f�r alte und neue Installationen. Ob ein akuter Installateur Notfall Wien, ein Problem mit Wasserleitungen oder eine dringende Reparatur � unser Installateur Notdienst Favoriten ist sofort einsatzbereit. Wenn Sie einen Installateur Umgebung 1100 Wien ben�tigen, steht unser Team schnell zur Verf�gung und bietet zuverl�ssigen Favoriten Installateur Service.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Unser erfahrenes Team f�r 1100 Wien</h2>
          <p>Unser Installateur Notdienst Wien steht f�r Qualit�t, Erfahrung und schnelle Hilfe im gesamten Bezirk Favoriten. Als etablierter Installateur Fachbetrieb Wien arbeiten wir mit modernen Werkzeugen und professionellen Methoden. Unser Installateur Team Wien verf�gt �ber umfangreiche Installateur Erfahrung Wien im Bereich Sanit�r-, Heizungs- und Gasinstallationen. Kunden sch�tzen besonders unsere schnelle Reaktionszeit und unseren zuverl�ssigen Installateur Service Wien. Wir wissen, dass viele Installateur Notf�lle Wien sofort gel�st werden m�ssen, deshalb arbeitet unser Notdienst 24h Wien rund um die Uhr. Wenn Sie einen Installateur schnell Wien ben�tigen oder sofortige Installateur Hilfe Wien suchen, reagiert unser Team umgehend. Als erfahrener Installateur Wien 1100 sorgen wir daf�r, dass Probleme effizient und dauerhaft gel�st werden.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Fachwissen</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Saubere Arbeit</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Transparenz</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size5.webp" alt="Installateur Team" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Leistungen -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unsere Installateur Leistungen in Wien 1100</h2><p>Unser Installateur Notdienst Wien bietet ein breites Leistungsspektrum f�r Haushalte und Unternehmen im Bezirk Favoriten. Als erfahrene Installateur Firma Wien k�mmern wir uns um alle Bereiche rund um Gas Wasser Heizung Wien sowie moderne Installationen Wien f�r Wohnungen und Betriebe. Unser Wasserinstallateur Wien �bernimmt Reparaturen, Wartungen und komplette Installationsarbeiten. Gleichzeitig arbeiten wir als professioneller Sanit�r Installateur Wien und bieten zuverl�ssige L�sungen f�r Badezimmer, Leitungen und Heizsysteme. Auch moderne Badsanierung Wien Projekte sowie hochwertige Bad Sanierung Wien geh�ren zu unserem t�glichen Service. Unser Installateur Service Wien umfasst au�erdem neue Installationen, Reparaturen und professionelle Arbeiten im Bereich Haustechnik Wien, Sanit�rtechnik Wien und Heizungstechnik Wien. Als regionaler Installateur 1100 Wien bieten wir zuverl�ssigen Favoriten Installateur Service f�r Privatkunden, Unternehmen und Hausverwaltungen.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Rohrreinigung Wien</h3><p>Rohrreinigung Wien bei verstopften Leitungen oder Abfluss verstopft Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Wasserrohrbruch Wien</h3><p>Schnelle Hilfe bei Wasserrohrbruch Wien und dringenden Leitungsproblemen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div><h3>WC verstopft Wien</h3><p>Reparatur von WC verstopft Wien und Abflussproblemen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Sanit�r Reparatur Wien</h3><p>Professionelle Sanit�r Reparatur Wien f�r Badezimmer und Leitungen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Badsanierung Wien</h3><p>Planung und Umsetzung von moderner Badsanierung Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div><h3>Installationen Wien</h3><p>Neue Installationen Wien f�r Wohnungen, H�user und Betriebe.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Serviceangebot</h3><p>Wartung von Thermen inklusive Thermenwartung Wien und Thermen Service Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Gastherme Wartung Wien</h3><p>Regelm��ige Gastherme Wartung Wien sowie schnelle Gastherme Reparatur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Heizung Reparatur Wien</h3><p>Heizungsservice durch unseren Heizung Installateur Wien.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Montage Sanit�r Wien</h3><p>Fachgerechte Montage Sanit�r Wien f�r neue Anlagen.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Gastherme Reparatur und Wartung</h2>
          <p>Bei Problemen mit Ihrer Therme bieten wir schnelle Gastherme Reparatur Wien, professionellen Thermen Service Wien sowie regelm��ige Thermenwartung Wien und Gastherme Wartung Wien, damit Ihre Heizungsanlage zuverl�ssig funktioniert. Auch beim Serviceangebot profitieren Sie von unserer strukturierten Arbeitsweise. F�r mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Nieder�sterreich</a>.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Weniger St�rungen</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.webp" alt="Wartung 1100 Wien" loading="lazy" decoding="async">
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
          <p>Wenn die Heizung ausf�llt, hilft unser Heizung Installateur Wien sofort. Wir bieten schnelle Heizung Reparatur Wien sowie professionelle Wartung Heizung Wien, damit Ihre Heizungsanlage langfristig sicher und effizient arbeitet.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.webp" alt="Reparatur 1100 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Installateur Notdienst 24h Wien</h2>
        <p>Probleme mit Wasser, Gas oder Heizung entstehen oft pl�tzlich. Deshalb steht unser Installateur Notdienst Wien rund um die Uhr bereit. Unser Notdienst 1100 Wien hilft bei akuten Situationen wie Rohrbr�chen, Heizungsproblemen oder verstopften Abfl�ssen. Als 24 Stunden Installateur Wien sind wir jederzeit erreichbar und bieten schnelle Hilfe im gesamten Bezirk Favoriten. Wenn Sie einen Installateur Notdienst N�he suchen, erreichen wir Ihren Standort meist innerhalb kurzer Zeit. Unser Sanit�r Notdienst Wien k�mmert sich um dringende Reparaturen an Sanit�ranlagen, w�hrend unser Gas Installateur Wien Probleme mit Gasleitungen oder Thermen behebt. Bei einem akuten Installateur Notfall Wien k�nnen Sie sich jederzeit auf unseren zuverl�ssigen Installateur Notdienst 1100 Wien verlassen.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische Notdiensteins�tze</h3>
        <ul class="service-checklist service-checklist--on-dark">
          <li>Ausfall von Heizung oder Warmwasser</li>
          <li>Fehlermeldungen, Druckprobleme oder St�rger�usche</li>
          <li>Sicherheitsrelevante Auff�lligkeiten am Ger�t</li>
        </ul>
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar � schnelle Hilfe in 1100 Wien.</p>
      </div></div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size2.jpegs.webp" alt="Kosten Installateur" loading="lazy" decoding="async">
        </div></div>
        <div class="card-split__text"><div class="card-box">
          <h2>Installateur Kosten Wien � transparente Preise</h2>
          <p>Viele Kunden m�chten vorab wissen, wie hoch die Installateur Kosten Wien sind. Bei unserem Installateur Notdienst Wien erhalten Sie transparente Informationen �ber den m�glichen Installateur Preis Wien. Die tats�chlichen Kosten h�ngen von der Art der Reparatur, dem Material sowie dem Arbeitsaufwand ab. Unser Team erstellt auf Wunsch ein individuelles Installateur Angebot Wien, damit Sie eine klare �bersicht �ber die erwarteten Kosten erhalten. Bei gr��eren Projekten erstellen wir au�erdem einen detaillierten Kostenvoranschlag Installateur Wien, damit Sie Planungssicherheit haben. Unser Ziel ist es, hochwertige Leistungen zu fairen Preisen anzubieten, damit Sie sich jederzeit auf einen zuverl�ssigen Installateur 1100 Wien verlassen k�nnen.</p>
          <p>F�r planbare Leistungen besprechen wir Umfang und Erwartungen vorab. Bei St�rungen erkl�ren wir nachvollziehbar, welche Schritte n�tig sind und wie sich die Kosten zusammensetzen.</p>
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
          <p>Als Installateur in 1100 Wien (Favoriten) unterst�tzen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung �ber die schnelle St�rungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abl�ufe, verst�ndliche Erkl�rungen und eine saubere Ausf�hrung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverl�ssigkeit � besonders wichtig bei Anlagen, die t�glich laufen. Durch kurze Wege im Bezirk 1100 reagieren wir flexibel, koordinieren Termine z�gig und halten Sie �ber jeden Schritt transparent informiert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.webp" alt="Einsatzgebiet Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>


 <section class="service-section service-section--soft" id="thermen-services">
  <div class="container">
    <div class="service-section__head">
      <h2>Thermenservice f�r alle Marken</h2>
      <p>Ob Vaillant, Junkers, Buderus oder Wolf � wir warten und reparieren alle g�ngigen Gasger�te. Regelm��ige Wartung sorgt f�r Sicherheit, Effizienz und eine l�ngere Lebensdauer Ihrer Therme.</p>
    </div>

    <div class="brand-grid">

      <!-- 1 -->
      <a class="brand-card" href="{{ route('vaillant.thermentausch') }}">
    <img src="img/vaillant1-1.webp" alt="Vaillant Thermenservice">
    <span>VAILLANT THERMENTAUSCH</span>
  </a>

      <!-- 2 -->
      <a class="brand-card" href="{{ route('buderus.thermentausch') }}">
    <img src="img/1buderus.webp" alt="Buderus Thermenservice">
    <span>BUDERUS THERMENTAUSCH</span>
  </a>

      <!-- 3 -->
        <a class="brand-card" href="{{ route('baxi.thermentausch') }}">
    <img src="img/1baxi.webp" alt="Baxi Thermenservice">
    <span>BAXI THERMENTAUSCH</span>
  </a>

      <!-- 4 -->
        <a class="brand-card" href="{{ route('junkers.thermentausch') }}">
    <img src="img/1junkers.webp" alt="Junkers Thermenservice">
    <span>JUNKERS THERMENTAUSCH</span>
  </a>

      <!-- 5 -->
        <a class="brand-card" href="{{ route('viessmann.thermentausch') }}">
    <img src="img/1viesman.webp" alt="Viessmann Thermenservice">
    <span>VIESSMANN THERMENTAUSCH</span>
  </a>

      <!-- 6 -->
        <a class="brand-card" href="{{ route('wolf.thermentausch') }}">
    <img src="img/1wolf.webp" alt="Wolf Thermenservice">
    <span>WOLF THERMENTAUSCH</span>
  </a>

      <!-- 7 -->
       <a class="brand-card" href="{{ route('saunier-duval.thermentausch') }}">
    <img src="img/1sauneri.webp" alt="Saunier Duval Thermenservice">
    <span>SAUNIER DUVAL SERVICE</span>
  </a>

      <!-- 8 -->
 <a class="brand-card" href="{{ route('loeblich.thermentausch') }}">
    <img src="img/1loblich.webp" alt="L�blich Thermenservice">
    <span>L�BLI THERMENTAUSCH</span>n>
  </a>

      <!-- 9 -->
      <a class="brand-card" href="{{ route('ocean.thermentausch') }}">
    <img src="img/1oceanbaxi.webp" alt="Ocean Thermenservice">
    <span>OCEAN THERMENTAUSCH</span>
  </a>

      <!-- 10 -->
      <a class="brand-card" href="{{ route('rapido.thermentausch') }}">
    <img src="img/1rapido.webp" alt="Rapido Thermenservice">
    <span>RAPIDO THERMENTAUSCH</span>
  </a>

      <!-- 11 -->
     <a class="brand-card" href="{{ route('windhager.thermentausch') }}">
    <img src="img/1Windhager.webp" alt="Windhager Thermenservice">
    <span>WINDHAGER SERVICE</span>
  </a>

      <!-- 12 -->
      <a class="brand-card" href="{{ route('nordgas.thermentausch') }}">
    <img src="img/1NordGas.webp" alt="Nordgas Thermenservice">
    <span>NORDGAS SERVICE</span>
  </a>


    </div>
  </div>
</section>


  <!-- FAQ -->
  <section class="service-section" id="faq-services">
    <div class="container">
      <div class="service-section__head"><h2>H�ufig gestellte Fragen</h2><p>Antworten auf die h�ufigsten Fragen � kurz, klar und praxisnah.</p></div>
      <div class="service-faq">
        <details>
          <summary>Was kostet ein Installateur Notdienst in 1100 Wien?</summary>
          <p>Die Installateur Kosten Wien h�ngen von der Art des Problems und der ben�tigten Arbeitszeit ab. Unser Installateur Notdienst Wien informiert Sie transparent �ber den m�glichen Installateur Preis Wien.</p>
        </details>
        <details>
          <summary>Wie schnell kommt ein Installateur im Bezirk Favoriten?</summary>
          <p>Unser Installateur Notdienst 1100 Wien ist t�glich im Bezirk unterwegs. In vielen F�llen erreicht unser Installateur Wien 1100 Kunden innerhalb kurzer Zeit.</p>
        </details>
        <details>
          <summary>Bieten Sie Thermenwartung in Wien an?</summary>
          <p>Ja. Unser Team �bernimmt Thermenwartung Wien, Gastherme Wartung Wien sowie professionellen Thermen Service Wien, damit Ihre Heizungsanlage zuverl�ssig funktioniert.</p>
        </details>
        <details>
          <summary>Was tun bei einem Wasserrohrbruch in Wien?</summary>
          <p>Bei einem Wasserrohrbruch Wien sollten Sie sofort das Wasser abdrehen und unseren Rohrbruch Notdienst Wien kontaktieren. Unser Wasserinstallateur Wien k�mmert sich sofort um die Reparatur.</p>
        </details>
        <details>
          <summary>Sind Sie auch nachts erreichbar?</summary>
          <p>Ja. Unser Notdienst 24h Wien steht rund um die Uhr zur Verf�gung. Als 24 Stunden Installateur Wien helfen wir auch bei dringenden Nacht- oder Wochenendeins�tzen.</p>
        </details>
        <details>
          <summary>Arbeiten Sie im gesamten Bezirk Favoriten?</summary>
          <p>Nat�rlich. Unser Installateur Favoriten betreut Kunden im gesamten Bezirk. Wenn Sie einen Installateur N�he 1100 Wien oder Installateur Umgebung 1100 Wien ben�tigen, sind wir schnell vor Ort.</p>
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
          <p>Wenn Sie einen zuverl�ssigen Installateur 1100 Wien ben�tigen, steht unser Team jederzeit bereit. Unser Installateur Notdienst Wien hilft bei allen Problemen rund um Gas Wasser Heizung Wien, Sanit�ranlagen und Rohrleitungen. Egal ob Rohrreinigung Wien, Sanit�r Reparatur Wien, Heizung Reparatur Wien oder eine dringende Gastherme Reparatur Wien � wir k�mmern uns schnell um Ihr Anliegen. Unser Installateur Service Wien ist f�r Privatkunden, Unternehmen und Hausverwaltungen verf�gbar. F�r schnelle Hilfe erreichen Sie jederzeit unseren Installateur Kontakt Wien.</p>
          <p style="margin-top:10px"><strong>??</strong> Direkt anrufen: <a href="tel:+4314420617">+43 1 442 0617</a></p>
        </div>
        <form class="service-cta__form" onsubmit="event.preventDefault(); alert('Danke! Wir melden uns so schnell wie m�glich.');">
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

  <!-- Bezirke (bottom links) � bleibt unver�ndert -->

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection











