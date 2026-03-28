@extends('layout.app')

@section('main')

@php
$metaTitle = "Thermentausch 1010 Wien – Installateur Wien für Gastherme Austausch & Thermenwechsel";
$metaDescription = "Professioneller Thermentausch 1010 Wien vom Installateur Wien. Gastherme tauschen, Thermenwechsel, Installation, Wartung und Notdienst in Wien 1010.";
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
        Thermentausch 1010 Wien <br>
        <span style="color:#FB9A1B;">Rundum-Service für Ihre neue Gastherme</span>
      </h1>

      <p class="wolf-hero__sub">Ein professioneller Thermentausch 1010 Wien sorgt für sichere Heizung, zuverlässiges Warmwasser und moderne Energieeffizienz in Ihrer Wohnung oder Ihrem Haus in Wien 1010. Ob Austausch einer alten Gastherme oder komplette Neuinstallation – wir sind Ihr erfahrener Installateur in der Inneren Stadt.</p>

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
          <h2>Ihre Lösung für Thermentausch in 1010 Wien</h2>
          <p>Ein professioneller Thermentausch 1010 Wien ist oft notwendig, wenn eine alte Gastherme nicht mehr effizient arbeitet oder häufige Reparaturen benötigt. Besonders in Wien 1010 und der Inneren Stadt sind viele Gebäude mit älteren Thermen ausgestattet, wodurch ein rechtzeitiger Austausch oder Thermenwechsel wichtig wird. Unser erfahrener Installateur Wien übernimmt den kompletten Thermentausch Wien inklusive Beratung, Planung und fachgerechter Montage. Als zuverlässiger Installateur 1010 Wien kümmern wir uns um Installation, moderne Heizungstechnik und effiziente Lösungen für Heizung und Warmwasser. Dabei prüfen wir auch vorhandene Gasgeräte, Leitungen für Gas und Wasser sowie die gesamte Heizungsanlage. Für Kunden in Wien 1010 bieten wir eine schnelle und saubere Lösung, damit Ihre Therme wieder zuverlässig funktioniert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.webp" alt="Thermentausch 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Erfahrung & saubere Montage</h3><p>Unser Team sorgt für eine präzise Installation Ihrer neuen Gastherme – schnell, sauber und nach allen Sicherheitsstandards.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Schnell vor Ort in 1010</h3><p>Als Installateur in der Inneren Stadt sind wir in wenigen Minuten bei Ihnen – für Termine und Notfälle gleichermaßen.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div>
          <h3>Transparente Kosten & Beratung</h3><p>Sie erhalten vorab einen klaren Kostenvoranschlag – keine versteckten Preise, faire Abrechnung.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div>
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
          <h2>Warum sich Kunden in Wien 1010 für uns entscheiden</h2>
          <p>Beim Thermentausch 1010 Wien ist es wichtig, einen erfahrenen Installateur Wien zu wählen, der sich mit den technischen Anforderungen älterer Gebäude in Wien 1010 und der Inneren Stadt auskennt. Unsere Firma ist ein zuverlässiger Fachbetrieb für Thermentausch Wien, Heizungstechnik und moderne Installationen. Wir begleiten unsere Kunden von der ersten Beratung bis zur fertigen Montage der neuen Therme. Dabei achten wir auf hohe Qualität, sichere Gas-Anschlüsse und eine effiziente Heizungsanlage. Ein professioneller Installateur 1010 Wien sorgt dafür, dass der Austausch der alten Gastherme reibungslos erfolgt. Durch unsere langjährige Erfahrung im Bereich Sanitär, Heizung und Haustechnik können wir für jedes Haus oder jede Wohnung in 1010 Wien die passende Lösung anbieten.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Fachwissen Altbau</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Saubere Montage</div></div>
            <div class="service-stat"><div class="service-stat__num">?</div><div class="service-stat__label">Transparenz</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size5.webp" alt="Installateur Team 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Leistungen / Unser Service für 1010 Wien -->
  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head"><h2>Unser Service für 1010 Wien</h2><p>Wir bieten Ihnen rund um den Thermentausch alles aus einer Hand – von der Beratung bis zur fertigen Installation. Dazu gehören:</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Thermentausch & Thermenwechsel</h3><p>Kompletter Austausch Ihrer alten Gastherme gegen ein modernes, effizientes Gerät – fachgerecht und schnell.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Moderne Thermeninstallation</h3><p>Wir installieren Ihre neue Therme inklusive aller Anschlüsse für Gas, Wasser und Heizung – sicher und normgerecht.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Austausch alter Gasthermen</h3><p>Speziell für Wiener Altbauten: Wir ersetzen veraltete Geräte durch zeitgemäße Heiztechnik.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">???</div><div><h3>Optimierung Heizung & Warmwasser</h3><p>Nach dem Einbau justieren wir Ihre Anlage für maximalen Komfort und niedrige Energiekosten.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">??</div><div><h3>Sanitär- & Haustechnik</h3><p>Wir kümmern uns auch um angrenzende Gewerke – damit alles perfekt zusammenspielt.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">?</div><div><h3>Schneller Notdienst & Service</h3><p>Bei Problemen sind wir sofort für Sie da – auch nach der Installation.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Ablauf beim Thermentausch (vorher Wartung) -->
  <section class="service-section service-section--soft" id="ablauf-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Ablauf beim Thermentausch in 1010 Wien</h2>
          <p>Ein strukturierter Ablauf ist beim Thermentausch 1010 Wien entscheidend, damit Ihre neue Gastherme sicher installiert wird. Unser Installateur Wien beginnt mit einer persönlichen Beratung direkt in Ihrer Wohnung oder Ihrem Haus in Wien 1010. Dabei prüfen wir bestehende Thermen, Gasgeräte, Leitungen für Gas und Wasser sowie die gesamte Heizungsanlage. Anschließend erstellen wir ein transparentes Angebot inklusive Kosten, möglichen Preisen und einem klaren Kostenvoranschlag. Nach Ihrer Entscheidung übernimmt unser Heizungsinstallateur den fachgerechten Thermenwechsel, die komplette Thermeninstallation sowie die sichere Montage. Der Austausch alter Thermen verbessert nicht nur die Heizung, sondern erhöht auch die Energieeffizienz und reduziert langfristig Kosten für Energie in Wien 1010.</p>
          <ul class="service-checklist" style="margin-top:20px">
            <li>Besichtigung Ihrer Therme vor Ort in 1010 Wien</li>
            <li>Fachliche Beratung zur passenden Gastherme</li>
            <li>Transparentes Angebot und klarer Kostenvoranschlag</li>
            <li>Professionelle Thermenmontage und sichere Installation</li>
            <li>Prüfung von Gas, Wasser und kompletter Heizungsanlage</li>
            <li>Saubere Übergabe und Erklärung der neuen Therme</li>
          </ul>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.webp" alt="Ablauf Thermentausch 1010 Wien" loading="lazy" decoding="async">
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
          <p>Neben dem Thermentausch 1010 Wien ist auch eine regelmäßige Thermenwartung wichtig, damit Ihre Gastherme langfristig zuverlässig arbeitet. Unser Installateur Wien bietet professionellen Service, Wartung und Reparatur für Thermen in Wien 1010. Durch eine regelmäßige Wartung werden mögliche Probleme frühzeitig erkannt und teure Kosten vermieden. Gleichzeitig verbessert eine gut eingestellte Therme die Energieeffizienz Ihrer Heizung und sorgt für konstantes Warmwasser. Unser Heizungsinstallateur überprüft alle wichtigen Komponenten wie Gasgeräte, Leitungen für Gas, Wasser, Sanitär-Anschlüsse sowie die komplette Heizungsanlage. So bleibt Ihre Heizung auch in älteren Gebäuden der Inneren Stadt zuverlässig und sicher.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.webp" alt="Thermenwartung 1010 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst und schnelle Hilfe in der Inneren Stadt</h2>
        <p>Wenn eine Therme plötzlich ausfällt, kann ein schneller Notdienst entscheidend sein. Unser Installateur Wien bietet einen zuverlässigen Notdienst für Thermentausch 1010 Wien, Reparatur und dringende Installation in Wien 1010. Besonders bei einem Notfall mit Gastherme, Gasgerät oder Heizung reagieren wir schnell und sorgen für eine sichere Lösung. Unser Team ist regelmäßig im Einsatz in der Inneren Stadt, rund um Wien Mitte und in der gesamten Umgebung von 1010 Wien. Wir analysieren das Problem, prüfen alle Gasgeräte, Leitungen für Gas und Wasser sowie die vorhandene Heizungsanlage. So können wir entweder eine Reparatur, einen kompletten Thermenwechsel oder einen schnellen Thermentausch Wien durchführen.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische Notdienst-Einsätze</h3>
        <ul class="service-checklist service-checklist--on-dark">
          <li>Vollständiger Ausfall der Heizung</li>
          <li>Kein Warmwasser</li>
          <li>Gasgeruch oder unsicherer Zustand der Therme</li>
          <li>Wasseraustritt an der Therme</li>
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
          <img class="service-media__img" src="img/1size2.jpegs.webp" alt="Kosten Thermentausch 1010 Wien" loading="lazy" decoding="async">
        </div></div>
        <div class="card-split__text"><div class="card-box">
          <h2>Kosten & Preise für den Thermentausch</h2>
          <p>Viele Eigentümer und Kunden in Wien 1010 fragen sich, welche Kosten beim Thermentausch Wien entstehen. Die Preise hängen von verschiedenen Faktoren ab, zum Beispiel vom Zustand der alten Therme, der benötigten Installation, der Größe der Heizungsanlage sowie vom gewählten Modell der neuen Gastherme. Ein professioneller Installateur Wien prüft zunächst alle bestehenden Gasgeräte, Leitungen und Sanitär-Anschlüsse. Anschließend erhalten Sie ein transparentes Angebot für den Austausch oder die Erneuerung Ihrer Therme in 1010 Wien. In manchen Fällen gibt es auch eine mögliche Förderung für eine Modernisierung der Heizung, die Ihre Kosten reduziert und gleichzeitig die Energieeffizienz Ihrer Anlage verbessert.</p>
          <p><strong>Was die Kosten beeinflusst:</strong> Modell der Gastherme, Aufwand der Installation, Zustand der Heizung, zusätzliche Sanierung der bestehenden Installationen.</p>
          <p><strong>Förderung & Einsparung:</strong> Bei einem Thermentausch Wien kann eine mögliche Förderung für moderne Heizungstechnik helfen, langfristig Energie zu sparen und die Umwelt zu schonen. Wir informieren Sie gern darüber.</p>
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
          <p>Ein Thermentausch 1010 Wien ist sowohl für eine Wohnung als auch für ein Haus in Wien 1010 sinnvoll, wenn ältere Thermen ineffizient arbeiten oder regelmäßig Wartung benötigen. Unser Installateur Wien analysiert vor Ort die vorhandene Heizung, alle Gasgeräte und die bestehende Installation. Danach empfehlen wir eine moderne Gastherme, die optimal zur Heizungsanlage und zum Bedarf Ihrer Wohnung oder Ihres Hauses passt. Ein professioneller Thermentausch Wien verbessert die Versorgung mit Warmwasser, erhöht die Sicherheit im Umgang mit Gas und sorgt für eine zuverlässige Heizung. Gerade in der Inneren Stadt und rund um Wien Mitte sind viele ältere Gebäude vorhanden, weshalb ein rechtzeitiger Thermenwechsel eine wichtige Modernisierung und Sanierung darstellen kann. Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size3.jpegs.webp" alt="Einsatzgebiet Wien 1010" loading="lazy" decoding="async">
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
    <img src="img/vaillant1-1.webp" alt="Vaillant Thermenservice">
    <span>VAILLANT THERMENSERVICE</span>
  </a>

        <!-- 2 -->
         <a class="brand-card" href="{{ route('buderus.thermentausch') }}">
    <img src="img/1buderus.webp" alt="Buderus Thermentausch">
    <span>BUDERUS THERMENTAUSCH</span>
  </a>

        <!-- 3 -->
       <a class="brand-card" href="{{ route('baxi.thermentausch') }}">
    <img src="img/1baxi.webp" alt="Baxi Thermentausch">
    <span>BAXI THERMENTAUSCH</span>
  </a>

        <!-- 4 -->
        <a class="brand-card" href="{{ route('junkers.thermentausch') }}">
    <img src="img/1junkers.webp" alt="Junkers Thermentausch">
    <span>JUNKERS THERMENTAUSCH</span>
  </a>

        <!-- 5 -->
        <a class="brand-card" href="{{ route('viessmann.thermentausch') }}">
    <img src="img/1viesman.webp" alt="Viessmann Thermentausch">
    <span>VIESSMANN THERMENTAUSCH</span>
  </a>

        <!-- 6 -->
        <a class="brand-card" href="{{ route('wolf.thermentausch') }}">
    <img src="img/1wolf.webp" alt="Wolf Thermentausch">
    <span>WOLF THERMENTAUSCH</span>
  </a>

        <!-- 7 -->
         <a class="brand-card" href="{{ route('saunier-duval.thermentausch') }}">
    <img src="img/1sauneri.webp" alt="Saunier Duval Thermentausch">
    <span>SAUNIER DUVAL THERMENTAUSCH</span>
  </a>

        <!-- 8 -->
          <a class="brand-card" href="{{ route('loeblich.thermentausch') }}">
    <img src="img/1loblich.webp" alt="Löblich Thermentausch">
    <span>LÖBLICH THERMENTAUSCH</span>
  </a>

        <!-- 9 -->
          <a class="brand-card" href="{{ route('ocean.thermentausch') }}">
    <img src="img/1oceanbaxi.webp" alt="Ocean Thermentausch">
    <span>OCEAN THERMENTAUSCH</span>
  </a>
        <!-- 10 -->
         <a class="brand-card" href="{{ route('rapido.thermentausch') }}">
    <img src="img/1rapido.webp" alt="Rapido Thermentausch">
    <span>RAPIDO THERMENTAUSCH</span>
  </a>

        <!-- 11 -->
        <a class="brand-card" href="{{ route('windhager.thermentausch') }}">
    <img src="img/1Windhager.webp" alt="Windhager Thermentausch">
    <span>WINDHAGER THERMENTAUSCH</span>
  </a>

        <!-- 12 -->
         <a class="brand-card" href="{{ route('nordgas.thermentausch') }}">
    <img src="img/1NordGas.webp" alt="Nordgas Thermentausch">
    <span>NORDGAS THERMENTAUSCH</span>
  </a>

      </div>
    </div>
  </section>

  <!-- FAQ – Thermentausch 1010 Wien -->
  <section class="service-section" id="faq-services">
    <div class="container">
      <div class="service-section__head"><h2>Häufige Fragen zum Thermentausch 1010 Wien</h2><p>Antworten auf die wichtigsten Fragen – kurz und verständlich.</p></div>
      <div class="service-faq">
        <details>
          <summary>1. Wie lange dauert ein Thermentausch in 1010 Wien?</summary>
          <p>Ein Thermentausch 1010 Wien dauert in den meisten Fällen nur wenige Stunden. Unser Installateur Wien entfernt die alte Therme, führt die neue Thermenmontage durch und überprüft alle Gasgeräte, Installation und Heizung.</p>
        </details>
        <details>
          <summary>2. Wann sollte eine Gastherme getauscht werden?</summary>
          <p>Wenn eine Gastherme älter als 15–20 Jahre ist oder häufige Reparaturen benötigt, ist ein Thermenwechsel sinnvoll. Ein neuer Thermentausch Wien verbessert die Heizung und spart Energie.</p>
        </details>
        <details>
          <summary>3. Was kostet ein Thermentausch in Wien 1010?</summary>
          <p>Die Kosten und Preise hängen vom Modell der neuen Therme, vom Aufwand der Installation und vom Zustand der bestehenden Heizungsanlage ab. Ein Kostenvoranschlag gibt Ihnen eine genaue Übersicht.</p>
        </details>
        <details>
          <summary>4. Gibt es Förderungen für einen Thermentausch?</summary>
          <p>In manchen Fällen gibt es eine Förderung für moderne Heizungstechnik und Sanierung der Heizung. Dadurch können die Kosten für einen Thermentausch Wien reduziert werden. Wir beraten Sie gern.</p>
        </details>
        <details>
          <summary>5. Bieten Sie auch Notdienst in der Inneren Stadt an?</summary>
          <p>Ja, unser Installateur 1010 Wien bietet Notdienst bei Problemen mit Therme, Gasgerät, Heizung oder Warmwasser in Wien 1010 und der Inneren Stadt – 24 Stunden erreichbar.</p>
        </details>
        <details>
          <summary>6. Kann der Thermentausch auch in einer Wohnung durchgeführt werden?</summary>
          <p>Ja, ein Thermentausch 1010 ist sowohl in einer Wohnung als auch in einem Haus möglich. Unser Installateur Wien prüft vor Ort alle Installationen und empfiehlt die passende Gastherme.</p>
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
          <h2>Jetzt Kontakt aufnehmen – für Thermentausch in 1010 Wien</h2>
          <p>Wenn Sie einen professionellen Thermentausch 1010 Wien planen oder eine neue Gastherme installieren möchten, ist unser Installateur Wien der richtige Ansprechpartner. Wir beraten Sie persönlich in Wien 1010, prüfen Ihre bestehende Therme, analysieren die vorhandene Heizung und erstellen ein transparentes Angebot. Unser Team sorgt für eine sichere Installation, zuverlässige Thermenmontage und moderne Heizungstechnik in Ihrer Wohnung oder Ihrem Haus in der Inneren Stadt. Egal ob Thermentausch Wien, Wartung, Reparatur oder Notdienst – wir bieten schnelle Hilfe und professionelle Lösungen in Wien 1010 und der gesamten Umgebung.</p>
          <p style="margin-top:10px"><strong>??</strong> Direkt anrufen: <a href="tel:+4314420617">+43 1 442 0617</a></p>
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




