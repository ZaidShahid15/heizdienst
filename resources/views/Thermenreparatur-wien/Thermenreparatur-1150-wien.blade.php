@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermenreparatur 1150 Wien � Installateur Notdienst Rudolfsheim-F�nfhaus";
$metaDescription = "Thermenreparatur 1150 Wien vom Installateur Wien. Schnelle Hilfe bei kein Warmwasser, Heizung defekt & Notdienst nahe Westbahnhof. Jetzt kontaktieren!";
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
        Thermenreparatur 1150 Wien <br>
        <span style="color:#FB9A1B;">Installateur Notdienst Rudolfsheim-F�nfhaus</span>
      </h1>

      <p class="wolf-hero__sub">Schnelle Thermenreparatur 1150 Wien durch Installateur Wien � rasche Hilfe bei Heizung, Warmwasser und Notdienst in Wien Rudolfsheim F�nfhaus. Unser 24h Notdienst ist immer f�r Sie da.</p>

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
          <h2>Schnelle Hilfe bei Thermenproblemen in 1150 Wien</h2>
          <p>Wenn Ihre Therme defekt ist oder kein Warmwasser verf�gbar ist, ben�tigen Sie in 1150 Wien schnelle Hilfe.  Unser Installateur  Wien bietet professionelle Thermenreparatur 1150 Wien sowie umfassenden Thermenservice Wien direkt vor Ort in Wien Rudolfsheim F�nfhaus, nahe Westbahnhof N�he und Mariahilfer Stra�e N�he im gesamten 15 Bezirk Wien. Egal ob Gastherme Reparatur, Heizung Reparatur oder Notdienst � unser Team sorgt f�r Soforthilfe und eine zuverl�ssige L�sung. Als Installateur 1150 Wien sind wir t�glich im Einsatz und schnell in der N�he. Vertrauen Sie auf unsere Erfahrung bei Thermen Reparatur Wien, wenn Ihre Heizung Probleme macht. Weitere Details finden Sie in unseren <a href="{{ route('Thermenreparatur-1140-wien') }}">weiterf�hrenden Informationen</a>.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.webp" alt="Installateur Service 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Rohrbruch & Wassersch�den schnell beheben</h3><p>Ein Wasserrohrbruch in 1150 kann gro�e Sch�den verursachen. Unser Installateur Notdienst Wien bietet schnelle Hilfe bei Wasserschaden und sorgt daf�r, dass Wasserleitungen sofort repariert werden.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div>
          <h3>Abfluss verstopft oder WC verstopft</h3><p>Wenn der Abfluss nicht mehr funktioniert oder das WC verstopft ist, hilft unsere Rohrreinigung schnell und zuverl�ssig im gesamten Bezirk 1150.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?????</div><div>
          <h3>Professioneller Installateur f�r Gas, Wasser und Heizung</h3><p>Unser Installateur Fachbetrieb Wien bietet umfassende Leistungen im Bereich Gas Wasser Heizung. Als erfahrener Gas Installateur k�mmern wir uns um Gasleitungen, Thermen und Heizsysteme. Unser Fokus liegt auf schneller Thermenreparatur 1150 Wien und Heizungsservice. Ob Gastherme defekt, kein Warmwasser oder Heizungsausfall � wir sind Ihr Experte. Gleichzeitig �bernimmt unser Sanit�r Installateur alle Arbeiten rund um Badezimmer, Wasserleitungen und Sanit�ranlagen. Moderne Heizungstechnik und zuverl�ssige Sanit�rtechnik geh�ren zu unseren t�glichen Aufgaben.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Ihr Installateur in Wien Rudolfsheim-F�nfhaus</h3><p>Wenn Sie einen zuverl�ssigen Installateur 1150 Wien suchen, ist schnelle Verf�gbarkeit entscheidend. Unser Installateur Notdienst ist t�glich im 15. Bezirk t�tig und erreicht Kunden in kurzer Zeit. Als erfahrener Installateur Wien 1150 betreuen wir Wohnungen, B�ros und Gewerbebetriebe direkt in Wien Rudolfsheim F�nfhaus, nahe dem Westbahnhof und der Mariahilfer Stra�e. Unser Team kennt die Besonderheiten der Geb�ude und bietet professionelle L�sungen.</p>
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
          <p>Unser Fachbetrieb �berzeugt durch langj�hrige Erfahrung, hohe Qualit�t und zahlreiche zufriedene Kunden in Wien 1150. Als etablierte Installateur Firma Wien setzen wir auf professionelle Arbeit und zuverl�ssigen Service. Unser Team besteht aus erfahrenen Fachm�nnern, die jede Thermenreparatur, Heizung Reparatur oder Sanit�rarbeit effizient durchf�hren. Unsere Referenzen zeigen unsere Kompetenz im Bereich Thermenservice Wien, Thermenreparatur und Haustechnik. Vertrauen Sie auf unsere Erfahrung und profitieren Sie von einem starken Partner f�r Installateur Wien Leistungen.</p>
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

  <!-- Leistungen im �berblick (5 Punkte + Notdienst) -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unsere Leistungen im �berblick</h2><p>Als erfahrene Installateur Firma Wien bieten wir Ihnen in 1150 Wien ein umfassendes Leistungsspektrum rund um Thermenreparatur, Sanit�r und moderne Haustechnik. Unser Service richtet sich an Kunden in Wien Rudolfsheim F�nfhaus, nahe Westbahnhof N�he und Mariahilfer Stra�e N�he sowie im gesamten 15 Bezirk Wien.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Thermenreparatur</h3><p>Unsere Thermenreparatur in Wien 1150 umfasst schnelle Diagnose, effiziente Reparatur und nachhaltige L�sungen f�r jede Gastherme, damit Heizung und Warmwasser zuverl�ssig funktionieren.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Thermenwartung</h3><p>Mit regelm��iger Thermenwartung und Thermenservice Wien sichern Sie die Leistung Ihrer Anlage und vermeiden unn�tige Reparatur sowie zus�tzliche Kosten.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Heizungsreparatur</h3><p>Wenn Ihre Heizung nicht funktioniert, bieten wir schnelle Heizung Reparatur in 1150 Wien und sorgen f�r eine rasche und sichere L�sung direkt vor Ort.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Sanit�r & Installateur</h3><p>Als Gas Wasser Installateur �bernehmen wir alle Sanit�r Arbeiten und bieten moderne Haustechnik L�sungen f�r Ihre Wohnung, Ihr Haus oder Ihr Zuhause in Wien 1150.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Rohrbruch & Wasserschaden Hilfe</h3><p>Bei Rohrbruch oder Wasserschaden steht unser Notdienst in Wien 1150 sofort bereit und sorgt f�r schnelle Hilfe sowie professionelle Reparatur bei allen Notf�llen.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">???</div><div><h3>Notdienst 24h</h3><p>Unser 24h Notdienst ist rund um die Uhr f�r Sie erreichbar � auch an Wochenenden und Feiertagen.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Gastherme Reparatur und Wartung</h2>
          <p>Bei Problemen mit Ihrer Therme bieten wir schnelle Gastherme Reparatur Wien, professionellen Thermen Service Wien sowie regelm��ige Gastherme Wartung Wien und Thermenwartung Wien. Regelm��ige Wartung verl�ngert die Lebensdauer Ihrer Anlage und verhindert teure Ausf�lle. F�r mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Nieder�sterreich</a>.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Weniger St�rungen</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.webp" alt="Wartung 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur / H�ufige Probleme -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>H�ufige Probleme mit Ihrer Therme</h2>
          <p>In Wien 1150 treten h�ufig Probleme wie kein Warmwasser, Heizung funktioniert nicht oder eine ausgefallene Gastherme auf. Eine Therme defekt kann den Alltag stark beeintr�chtigen � egal ob in Ihrer Wohnung, Ihrem Haus oder im 15 Bezirk Wien. Unsere Experten erkennen jedes Problem rasch und bieten die passende L�sung direkt vor Ort in Wien Rudolfsheim F�nfhaus oder nahe der Mariahilfer Stra�e N�he. Ob Gastherme Reparatur, Heizung Reparatur oder Notdienst bei Notf�llen � unser Installateur Wien ist bestens vorbereitet. Durch unsere Erfahrung in der Thermenreparatur und Thermen Reparatur Wien beheben wir Sch�den effizient und sorgen daf�r, dass Ihre Heizung und Ihr Warmwasser wieder zuverl�ssig funktionieren.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.webp" alt="Reparatur 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>24h Notdienst Installateur Wien</h2>
<p>Unser Installateur Notdienst 1150 Wien ist rund um die Uhr erreichbar und bietet schnelle Hilfe bei akuten Problemen. Der Thermen Notdienst Wien ist sofort vor Ort in Wien Rudolfsheim F�nfhaus, im gesamten Wien 1150 und im 15 Bezirk Wien im Einsatz. Wenn Ihre Heizung nicht funktioniert oder kein Warmwasser vorhanden ist, reagieren wir schnell und zuverl�ssig. Als 24h Installateur Wien k�mmern wir uns um Notf�lle wie Rohrbruch oder Wasserschaden und sorgen f�r eine sichere Reparatur. F�r eine langfristige L�sung empfehlen wir auch unsere Serviceangebot. Unser Team ist jederzeit in der N�he und bietet Soforthilfe bei jedem Einsatz in 1150 Wien und Umgebung.</p>        <div class="service-emergency__actions">
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
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar � schnelle Hilfe in 1150 Wien.</p>
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
          <h2>Preise & Kosten f�r Thermenreparatur</h2>
          <p>Die Preise f�r eine Thermenreparatur 1150 Wien h�ngen vom jeweiligen Problem, dem Aufwand und den ben�tigten Ersatzteilen ab. Unser Installateur Wien bietet transparente Kosten und erstellt Ihnen ein individuelles Angebot inklusive Kostenvoranschlag. Wir legen gro�en Wert auf faire Preise und bieten auch g�nstige L�sungen f�r jede Situation. Egal ob Reparatur, Wartung oder kompletter Service � Sie erhalten eine klare Beratung und ein passendes Angebot. Kontaktieren Sie uns f�r eine unverbindliche Beratung und erfahren Sie mehr �ber unsere Preise in Wien 1150, Wien Rudolfsheim F�nfhaus und der gesamten Umgebung.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Region / Ihr Installateur vor Ort -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ihr Installateur in 1150 Wien</h2>
          <p>Als Installateur 1150 Wien sind wir t�glich im Wien 1150, im Wien Rudolfsheim F�nfhaus und im gesamten 15 Bezirk Wien im Einsatz. Wir betreuen Kunden direkt vor Ort � egal ob in Ihrer Wohnung, Ihrem Haus oder gewerblichen Objekten. Dank unserer zentralen Adresse sind wir schnell in der N�he und bieten zuverl�ssige Eins�tze. Wenn Sie einen Installateur Wien suchen, der schnell reagiert und professionell arbeitet, sind wir Ihr Ansprechpartner in 1150 Wien und Umgebung.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.webp" alt="Einsatzgebiet Wien 1150" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Thermen Marken Grid (identisch zu vorherigen) -->
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
      <div class="service-section__head"><h2>H�ufige Fragen zur Thermenreparatur</h2><p>Antworten auf die h�ufigsten Fragen � kurz, klar und praxisnah.</p></div>
      <div class="service-faq">
        <details>
          <summary>Was kostet eine Thermenreparatur in Wien 1150?</summary>
          <p>Die Kosten h�ngen vom Problem und Aufwand ab. Sie erhalten einen transparenten Kostenvoranschlag mit klaren Preisen.</p>
        </details>
        <details>
          <summary>Wie schnell ist der Notdienst vor Ort?</summary>
          <p>Unser Installateur Notdienst 1150 Wien ist meist sehr schnell vor Ort in Wien Rudolfsheim F�nfhaus oder im gesamten 15 Bezirk Wien.</p>
        </details>
        <details>
          <summary>Was tun bei kein Warmwasser?</summary>
          <p>Wenn kein Warmwasser vorhanden ist, sollten Sie sofort unseren Thermen Notdienst Wien kontaktieren, um Sch�den zu vermeiden.</p>
        </details>
        <details>
          <summary>Wann ist eine Wartung sinnvoll?</summary>
          <p>Eine regelm��ige Thermenwartung sorgt f�r eine zuverl�ssige Heizung und verhindert gr��ere Probleme.</p>
        </details>
        <details>
          <summary>Gibt es einen 24h Installateur Wien?</summary>
          <p>Ja, unser 24h Installateur Wien ist jederzeit f�r Notf�lle und dringende Eins�tze verf�gbar.</p>
        </details>
        <details>
          <summary>Arbeiten Sie auch in der Umgebung?</summary>
          <p>Ja, wir sind in Wien 1150 sowie in der gesamten Umgebung schnell im Einsatz.</p>
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
          <p>Ben�tigen Sie eine schnelle Thermenreparatur 1150 Wien oder einen erfahrenen Installateur Wien? Unser Team bietet Ihnen schnelle Hilfe, professionelle Beratung und ein individuelles Angebot zu fairen Kosten. Egal ob Notdienst, Wartung oder Reparatur � wir sind Ihr Ansprechpartner in Wien 1150, Wien Rudolfsheim F�nfhaus und im gesamten 15 Bezirk Wien.</p>
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

@php
    preg_match('/(\d{4})/', Route::currentRouteName(), $matches);
    $current = isset($matches[1]) ? (int)$matches[1] : null;
    $next = $current ? $current - 10 : null;
@endphp










