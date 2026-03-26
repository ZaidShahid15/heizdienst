@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermentausch 1020 Wien – Installateur Wien für Gastherme Austausch & Thermenwechsel Leopoldstadt";
$metaDescription = "Thermentausch 1020 Wien vom Installateur Wien. Gastherme tauschen, Thermenwechsel, Installation, Wartung und Notdienst in Wien 1020 Leopoldstadt.";
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
        Thermentausch 1020 Wien <br>
        <span style="color:#FB9A1B;">Rundum-Service für Ihre neue Gastherme</span>
      </h1>

      <p class="wolf-hero__sub">Ein professioneller Thermentausch 1020 Wien sorgt für sichere Heizung, zuverlässiges Warmwasser und moderne Energieeffizienz in Ihrer Wohnung oder Ihrem Haus in Wien 1020. Ob Austausch einer alten Gastherme oder komplette Neuinstallation – wir sind Ihr erfahrener Installateur in der Leopoldstadt.</p>

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

  <!-- TOC (aktualisiert) -->
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
            <li class="toc-item"><a href="#vorteile-services" class="toc-link"><span class="toc-badge">01</span><span class="toc-text">Ihre Lösung</span></a></li>
            <li class="toc-item"><a href="#team-services" class="toc-link"><span class="toc-badge">02</span><span class="toc-text">Warum wir</span></a></li>
            <li class="toc-item"><a href="#leistungen-services" class="toc-link"><span class="toc-badge">03</span><span class="toc-text">Unser Service</span></a></li>
            <li class="toc-item"><a href="#ablauf-services" class="toc-link"><span class="toc-badge">04</span><span class="toc-text">Ablauf</span></a></li>
            <li class="toc-item"><a href="#reparatur-services" class="toc-link"><span class="toc-badge">05</span><span class="toc-text">Wartung & Reparatur</span></a></li>
            <li class="toc-item"><a href="#notdienst-services" class="toc-link"><span class="toc-badge">06</span><span class="toc-text">Notdienst</span></a></li>
            <li class="toc-item"><a href="#preise-services" class="toc-link"><span class="toc-badge">07</span><span class="toc-text">Kosten</span></a></li>
            <li class="toc-item"><a href="#region-services" class="toc-link"><span class="toc-badge">08</span><span class="toc-text">Wohnung & Haus</span></a></li>
            <li class="toc-item"><a href="#thermen-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">Alle Marken</span></a></li>
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">11</span><span class="toc-text">Kontakt</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Vorteile / Ihre Lösung -->
  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ihre Lösung für Thermentausch in Wien 1020</h2>
          <p>Ein professioneller Thermentausch 1020 Wien ist besonders in älteren Gebäuden in Wien 1020 und der Leopoldstadt oft notwendig. Viele Thermen und ältere Gasthermen arbeiten nicht mehr effizient oder verursachen häufige Reparatur- und Wartungskosten. Ein moderner Thermentausch Wien sorgt für eine zuverlässige Heizung, stabile Versorgung mit Warmwasser und bessere Energieeffizienz. Unser erfahrener Installateur Wien übernimmt den gesamten Austausch, die fachgerechte Thermeninstallation und sichere Montage Ihrer neuen Therme. Als Installateur 1020 Wien prüfen wir auch vorhandene Gasgeräte, Leitungen für Gas und Wasser sowie die komplette Heizungsanlage. So erhalten Kunden in 1020 Wien eine nachhaltige Lösung für moderne Heizungstechnik, sichere Installationen und langfristig niedrigere Kosten für Energie. Weitere Details finden Sie in unseren <a href="{{ route('thermentausch-1010-wien') }}">weiterführenden Informationen</a>.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Thermentausch 1020 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Erfahrung & saubere Montage</h3><p>Unser Team sorgt für eine präzise Installation Ihrer neuen Gastherme – schnell, sauber und nach allen Sicherheitsstandards.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Schnell vor Ort in 1020</h3><p>Als Installateur in der Leopoldstadt sind wir in wenigen Minuten bei Ihnen – für Termine und Notfälle gleichermaßen.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">💰</div><div>
          <h3>Transparente Kosten & Beratung</h3><p>Sie erhalten vorab einen klaren Kostenvoranschlag – keine versteckten Preise, faire Abrechnung.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Förderung & Energieeffizienz</h3><p>Moderne Thermen sparen Energie und können oft gefördert werden. Wir beraten Sie zu möglichen Zuschüssen.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team / Warum Kunden sich für uns entscheiden -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Warum sich Kunden in Wien 1020 für uns entscheiden</h2>
          <p>Beim Thermentausch 1020 Wien ist es wichtig, einen erfahrenen Installateur Wien zu wählen, der die technischen Anforderungen älterer Gebäude in Wien 1020 kennt. Unsere Firma ist ein zuverlässiger Fachbetrieb für Thermentausch Wien, Sanitär, Heizung und moderne Haustechnik. Wir begleiten jeden Kunden von der ersten Beratung bis zur fertigen Thermenmontage. Dabei achten wir auf hohe Qualität, sichere Gas-Anschlüsse und eine effiziente Heizungsanlage. Durch unsere langjährige Erfahrung als Heizungsinstallateur in der Leopoldstadt können wir für jede Wohnung oder jedes Haus in 1020 Wien die passende Lösung anbieten.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Fachwissen Altbau</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Saubere Montage</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparenz</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size5.jpeg" alt="Installateur Team 1020 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Leistungen / Unser Service für Wien 1020 -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unser Service für Wien 1020</h2><p>Wir bieten Ihnen rund um den Thermentausch alles aus einer Hand – von der Beratung bis zur fertigen Installation. Dazu gehören:</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔄</div><div><h3>Professioneller Thermentausch 1020 Wien</h3><p>Kompletter Austausch Ihrer alten Gastherme gegen ein modernes, effizientes Gerät – fachgerecht und schnell.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔧</div><div><h3>Moderne Thermeninstallation</h3><p>Wir installieren Ihre neue Therme inklusive aller Anschlüsse für Gas, Wasser und Heizung – sicher und normgerecht.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🏠</div><div><h3>Austausch alter Gasthermen</h3><p>Speziell für die Leopoldstadt: Wir ersetzen veraltete Geräte durch zeitgemäße Heiztechnik.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🌡️</div><div><h3>Optimierung Heizung & Warmwasser</h3><p>Nach dem Einbau justieren wir Ihre Anlage für maximalen Komfort und niedrige Energiekosten.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🚰</div><div><h3>Sanitär- & Haustechnik</h3><p>Wir kümmern uns auch um angrenzende Gewerke – damit alles perfekt zusammenspielt.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div><h3>Schneller Notdienst & Service</h3><p>Bei Problemen sind wir sofort für Sie da – auch nach der Installation.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Ablauf beim Thermentausch (vorher Wartung) -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ablauf beim Thermentausch in 1020 Wien</h2>
          <p>Ein strukturierter Ablauf ist beim Thermentausch 1020 Wien wichtig, damit Ihre neue Gastherme sicher installiert wird. Unser Installateur Wien beginnt mit einer persönlichen Beratung direkt vor Ort in 1020 Wien. Dabei prüfen wir die vorhandenen Thermen, alle Gasgeräte, Leitungen für Gas und Wasser sowie die komplette Heizungsanlage. Anschließend erhalten Sie ein transparentes Angebot mit klaren Kosten und möglichen Preisen. Nach Ihrer Zustimmung übernimmt unser Heizungsinstallateur den fachgerechten Thermenwechsel, die komplette Thermeninstallation sowie die sichere Montage. Durch einen modernen Thermentausch Wien profitieren Kunden in Wien 1020 von höherer Energieeffizienz, besserer Heizung und langfristig niedrigeren Kosten.</p>
          <ul class="service-checklist" style="margin-top:20px">
            <li>Besichtigung Ihrer Therme vor Ort in Wien 1020</li>
            <li>Fachliche Beratung zur passenden Gastherme</li>
            <li>Transparentes Angebot und Kostenvoranschlag</li>
            <li>Professionelle Thermenmontage und sichere Installation</li>
            <li>Prüfung von Gas, Wasser und kompletter Heizungsanlage</li>
            <li>Saubere Übergabe Ihrer neuen Therme</li>
          </ul>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.jpeg" alt="Ablauf Thermentausch 1020 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur / Wartung & Service -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Thermenwartung, Reparatur & laufender Service</h2>
          <p>Neben dem Thermentausch 1020 Wien ist auch eine regelmäßige Thermenwartung wichtig, damit Ihre Gastherme zuverlässig arbeitet. Unser Installateur Wien bietet professionellen Service, regelmäßige Wartung und schnelle Reparatur für Thermen in Wien 1020. Durch eine regelmäßige Wartung lassen sich mögliche Probleme frühzeitig erkennen und unnötige Kosten vermeiden. Gleichzeitig verbessert eine gut eingestellte Therme die Energieeffizienz Ihrer Heizung und sorgt für konstantes Warmwasser. Unser erfahrener Heizungsinstallateur überprüft dabei alle wichtigen Komponenten wie Gasgeräte, Leitungen für Gas, Wasser, Sanitär-Anschlüsse sowie die gesamte Heizungsanlage. Dadurch bleibt Ihre Heizung auch in älteren Gebäuden der Leopoldstadt sicher und zuverlässig.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Thermenwartung 1020 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst und schnelle Hilfe in Wien 1020</h2>
        <p>Wenn eine Therme plötzlich ausfällt, ist schnelle Hilfe wichtig. Unser Installateur Wien bietet einen zuverlässigen Notdienst für Thermentausch 1020 Wien, dringende Reparatur oder Installation in Wien 1020. Besonders bei einem Notfall mit Gastherme, Gasgerät oder Heizung reagieren wir schnell und sorgen für eine sichere Lösung. Unser Team ist regelmäßig im Einsatz in der Leopoldstadt, rund um den Prater, den Donaukanal und in der gesamten Umgebung von Wien 1020. Wir analysieren das Problem, prüfen Gasgeräte, Leitungen für Gas und Wasser sowie die komplette Heizungsanlage. Je nach Situation führen wir eine Reparatur, einen Thermenwechsel oder einen vollständigen Thermentausch Wien durch.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische Notdienst‑Einsätze</h3>
        <ul class="service-checklist service-checklist--on-dark">
          <li>Vollständiger Ausfall der Heizung</li>
          <li>Kein Warmwasser</li>
          <li>Gasgeruch oder unsicherer Zustand der Therme</li>
          <li>Wasseraustritt an der Therme</li>
        </ul>
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1020 Wien.</p>
      </div></div>
    </div>
  </section>

  <!-- Preise -->
  <section class="service-section" id="preise-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size2.jpegs.jpeg" alt="Kosten Thermentausch 1020 Wien" loading="lazy" decoding="async">
        </div></div>
        <div class="card-split__text"><div class="card-box">
          <h2>Kosten und Preise für den Thermentausch</h2>
          <p>Viele Kunden in Wien 1020 möchten vor einem Thermentausch 1020 Wien wissen, welche Kosten entstehen können. Die Preise hängen von mehreren Faktoren ab, zum Beispiel vom Zustand der bestehenden Therme, vom Modell der neuen Gastherme sowie vom Aufwand der Installation. Ein erfahrener Installateur Wien prüft vor Ort in 1020 Wien alle Gasgeräte, Leitungen für Gas und Wasser sowie die vorhandene Heizungsanlage. Anschließend erhalten Sie ein klares Angebot für den Austausch oder die komplette Erneuerung Ihrer alten Therme. In vielen Fällen kann auch eine Förderung für moderne Heizungstechnik beantragt werden. Dadurch lassen sich langfristig Kosten reduzieren und gleichzeitig Energie sparen. Ein moderner Thermentausch Wien verbessert nicht nur die Heizung, sondern trägt auch zur besseren Energieeffizienz und zur Schonung der Umwelt bei.</p>
          <p><strong>Was die Kosten beeinflusst:</strong> Modell der neuen Gastherme, Aufwand der Installation, Zustand der bestehenden Heizung sowie mögliche Sanierungsarbeiten an den vorhandenen Installationen.</p>
          <p><strong>Förderung & Einsparung:</strong> Bei einem Thermentausch Wien kann eine mögliche Förderung für moderne Heizungstechnik helfen, langfristig Energie zu sparen und gleichzeitig die Umwelt zu entlasten. Wir informieren Sie gern darüber.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Region / Thermentausch für Wohnung und Haus -->
  <section class="service-section service-section--soft" id="region-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Thermentausch für Wohnung und Haus</h2>
          <p>Ein Thermentausch 1020 Wien ist sowohl für eine Wohnung als auch für ein Haus in Wien 1020 sinnvoll, wenn ältere Thermen nicht mehr effizient arbeiten. Unser Installateur Wien analysiert vor Ort die bestehende Heizung, überprüft alle Gasgeräte, die vorhandene Installation sowie die gesamte Heizungsanlage. Danach empfehlen wir eine moderne Gastherme, die optimal zum Bedarf Ihrer Wohnung oder Ihres Hauses passt. Ein professioneller Thermentausch Wien verbessert die Versorgung mit Warmwasser, erhöht die Sicherheit im Umgang mit Gas und sorgt für eine zuverlässige Heizung. Gerade in der Leopoldstadt rund um den Prater und den Donaukanal befinden sich viele ältere Gebäude, in denen ein Thermenwechsel eine sinnvolle Modernisierung und Sanierung darstellt. Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.jpeg" alt="Einsatzgebiet Wien 1020" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Thermen Marken (für Thermentausch) -->
  <section class="service-section service-section--soft" id="thermen-services">
    <div class="container">
      <div class="service-section__head">
        <h2>Thermentausch für alle Marken</h2>
        <p>Ob Vaillant, Junkers, Buderus, Viessmann, Wolf oder Baxi – wir tauschen und installieren Thermen aller gängigen Hersteller. Dabei garantieren wir fachgerechten Anschluss und optimale Abstimmung auf Ihre Heizungsanlage.</p>
      </div>

      <div class="brand-grid">

        <!-- 1 -->
        <a class="brand-card" href="{{ route('vaillant.thermentausch') }}">
    <img src="img/vaillant1-1.jpg" alt="Vaillant Thermenservice">
    <span>VAILLANT THERMENSERVICE</span>
  </a>

        <!-- 2 -->
         <a class="brand-card" href="{{ route('buderus.thermentausch') }}">
    <img src="img/1buderus.jpeg" alt="Buderus Thermentausch">
    <span>BUDERUS THERMENTAUSCH</span>
  </a>

        <!-- 3 -->
       <a class="brand-card" href="{{ route('baxi.thermentausch') }}">
    <img src="img/1baxi.jpeg" alt="Baxi Thermentausch">
    <span>BAXI THERMENTAUSCH</span>
  </a>

        <!-- 4 -->
        <a class="brand-card" href="{{ route('junkers.thermentausch') }}">
    <img src="img/1junkers.jpeg" alt="Junkers Thermentausch">
    <span>JUNKERS THERMENTAUSCH</span>
  </a>

        <!-- 5 -->
        <a class="brand-card" href="{{ route('viessmann.thermentausch') }}">
    <img src="img/1viesman.jpeg" alt="Viessmann Thermentausch">
    <span>VIESSMANN THERMENTAUSCH</span>
  </a>

        <!-- 6 -->
        <a class="brand-card" href="{{ route('wolf.thermentausch') }}">
    <img src="img/1wolf.jpeg" alt="Wolf Thermentausch">
    <span>WOLF THERMENTAUSCH</span>
  </a>

        <!-- 7 -->
         <a class="brand-card" href="{{ route('saunier-duval.thermentausch') }}">
    <img src="img/1sauneri.jpeg" alt="Saunier Duval Thermentausch">
    <span>SAUNIER DUVAL THERMENTAUSCH</span>
  </a>

        <!-- 8 -->
          <a class="brand-card" href="{{ route('loeblich.thermentausch') }}">
    <img src="img/1loblich.jpeg" alt="Löblich Thermentausch">
    <span>LÖBLICH THERMENTAUSCH</span>
  </a>

        <!-- 9 -->
          <a class="brand-card" href="{{ route('ocean.thermentausch') }}">
    <img src="img/1oceanbaxi.jpeg" alt="Ocean Thermentausch">
    <span>OCEAN THERMENTAUSCH</span>
  </a>
        <!-- 10 -->
         <a class="brand-card" href="{{ route('rapido.thermentausch') }}">
    <img src="img/1rapido.jpeg" alt="Rapido Thermentausch">
    <span>RAPIDO THERMENTAUSCH</span>
  </a>

        <!-- 11 -->
        <a class="brand-card" href="{{ route('windhager.thermentausch') }}">
    <img src="img/Windhager.png" alt="Windhager Thermentausch">
    <span>WINDHAGER THERMENTAUSCH</span>
  </a>

        <!-- 12 -->
         <a class="brand-card" href="{{ route('nordgas.thermentausch') }}">
    <img src="img/NordGas.png" alt="Nordgas Thermentausch">
    <span>NORDGAS THERMENTAUSCH</span>
  </a>

      </div>
    </div>
  </section>

  <!-- FAQ – Thermentausch 1020 Wien -->
  <section class="service-section" id="faq-services">
    <div class="container">
      <div class="service-section__head"><h2>Häufige Fragen zum Thermentausch 1020 Wien</h2><p>Antworten auf die wichtigsten Fragen – kurz und verständlich.</p></div>
      <div class="service-faq">
        <details>
          <summary>1. Wie lange dauert ein Thermentausch in Wien 1020?</summary>
          <p>Ein Thermentausch 1020 Wien dauert meist nur wenige Stunden. Unser Installateur Wien entfernt die alte Therme, führt die neue Thermenmontage durch und überprüft alle Gasgeräte, Installation und Heizung.</p>
        </details>
        <details>
          <summary>2. Wann sollte eine Gastherme getauscht werden?</summary>
          <p>Wenn eine Gastherme älter als 15–20 Jahre ist oder häufige Reparaturen benötigt, ist ein Thermenwechsel sinnvoll. Ein moderner Thermentausch Wien verbessert die Heizung und spart Energie.</p>
        </details>
        <details>
          <summary>3. Was kostet ein Thermentausch in Wien 1020?</summary>
          <p>Die Kosten hängen vom Modell der neuen Therme, vom Aufwand der Installation und vom Zustand der bestehenden Heizungsanlage ab. Ein Kostenvoranschlag gibt eine klare Übersicht über Preise und mögliche Kosten.</p>
        </details>
        <details>
          <summary>4. Gibt es Förderungen für einen Thermentausch?</summary>
          <p>In manchen Fällen gibt es eine Förderung für moderne Heizungstechnik oder eine energetische Sanierung. Dadurch können die Kosten für einen Thermentausch Wien reduziert werden.</p>
        </details>
        <details>
          <summary>5. Bieten Sie auch Notdienst in der Leopoldstadt an?</summary>
          <p>Ja, unser Installateur 1020 Wien bietet Notdienst bei Problemen mit Therme, Gasgerät, Heizung oder Warmwasser in Wien 1020 und der gesamten Leopoldstadt.</p>
        </details>
        <details>
          <summary>6. Kann ein Thermentausch auch in einer Wohnung durchgeführt werden?</summary>
          <p>Ja, ein Thermentausch 1020 ist sowohl in einer Wohnung als auch in einem Haus möglich. Unser Installateur Wien prüft vor Ort alle Installationen und empfiehlt die passende Gastherme.</p>
        </details>
        <details>
          <summary>7. Muss ich bei einem Thermentausch etwas beachten?</summary>
          <p>Am besten halten Sie die Gerätedaten (Typenschild) und letzte Wartungsunterlagen bereit. Wir kümmern uns um den Rest – von der Anmeldung beim Netzbetreiber bis zur Endabnahme.</p>
        </details>
        <details>
          <summary>8. Welche Thermenmarken tauschen Sie aus?</summary>
          <p>Wir tauschen alle gängigen Marken wie Vaillant, Junkers, Buderus, Viessmann, Wolf, Baxi und viele weitere. Auch bei seltenen Modellen finden wir eine Lösung.</p>
        </details>
        <details>
          <summary>9. Wie finde ich die richtige neue Therme?</summary>
          <p>Wir beraten Sie umfassend und wählen gemeinsam mit Ihnen das passende Gerät aus – abgestimmt auf Ihre Wohnungsgröße, Ihren Warmwasserbedarf und Ihr Budget.</p>
        </details>
        <details>
          <summary>10. Bieten Sie auch die Entsorgung der alten Therme an?</summary>
          <p>Ja, die fachgerechte Entsorgung Ihrer alten Gastherme ist selbstverständlich im Service enthalten. Sie müssen sich um nichts kümmern.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="container">
      <div class="service-cta__inner">
        <div>
          <h2>Jetzt Kontakt aufnehmen – für Thermentausch in 1020 Wien</h2>
          <p>Wenn Sie einen professionellen Thermentausch 1020 Wien planen oder eine neue Gastherme installieren möchten, ist unser Installateur Wien der richtige Ansprechpartner. Wir beraten Sie persönlich in Wien 1020, prüfen Ihre bestehende Therme, analysieren die vorhandene Heizung und erstellen ein transparentes Angebot. Unser Team sorgt für sichere Installation, professionelle Thermenmontage und moderne Heizungstechnik in Ihrer Wohnung oder Ihrem Haus in der Leopoldstadt. Egal ob Thermentausch Wien, Wartung, Reparatur oder Notdienst – wir bieten schnelle Hilfe und zuverlässigen Service in Wien 1020 und der gesamten Umgebung.</p>
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



