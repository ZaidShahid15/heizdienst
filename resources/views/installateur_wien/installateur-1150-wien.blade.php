@extends('layout.app')

    @section('main')

    @php
    $metaTitle = "Installateur 1150 Wien | Wartung, Reparatur & Notdienst";
    $metaDescription = "Installateur 1150 Wien (Rudolfsheim-Fünfhaus) für Heizung, Warmwasser, Wartung, Reparatur und Notdienst. Schnelle Hilfe, klare Preise, saubere Ausführung.";
    @endphp

    @push('meta')
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    @endpush

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
  </style>

<main>
  <!-- HERO -->
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        Installateur 1150 Wien <br>
        <span style="color:#FB9A1B;">Rund um die Uhr Service</span>
      </h1>



      <p class="wolf-hero__sub">Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>

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
            <li class="toc-item"><a href="#faq-services" class="toc-link"><span class="toc-badge">09</span><span class="toc-text">FAQ</span></a></li>
            <li class="toc-item"><a href="#kontakt-services" class="toc-link"><span class="toc-badge">10</span><span class="toc-text">Kontakt</span></a></li>
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
          <h2>Installateur‑Service in 1150 Wien – zuverlässig & strukturiert</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Service 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>

      <div class="service-grid service-grid--2" style="margin-top:14px">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧰</div><div>
          <h3>Wartung & Prüfung</h3><p>Regelmäßige Checks erhöhen Sicherheit, senken Verbrauch und verhindern Ausfälle im Alltag.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div>
          <h3>Reparatur & Fehlerbehebung</h3><p>Schnelle Diagnose bei Störungen – zielgerichtete Lösung, verständlich erklärt und sauber umgesetzt.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧑‍🔧</div><div>
          <h3>Erfahrene Fachkräfte</h3><p>Praxiswissen und strukturierte Abläufe sorgen für stabile Ergebnisse – vom ersten Kontakt bis zur Lösung.</p>
        </div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">📍</div><div>
          <h3>Schnell im Bezirk</h3><p>Kurze Wege in 1150 Wien helfen, Termine rasch zu koordinieren und vor Ort effizient zu handeln.</p>
        </div></article>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="service-section" id="team-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Unser erfahrenes Team für 1150 Wien</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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
      <div class="service-section__head"><h2>Leistungen im Überblick</h2><p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p></div>
      <div class="service-grid service-grid--2">
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧽</div><div><h3>Wartung</h3><p>Reinigung, Prüfung, Einstellung und Funktionskontrolle – für einen sicheren, effizienten Betrieb.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🧪</div><div><h3>Service & Optimierung</h3><p>Feinabstimmung, Druck-Checks und Effizienz‑Optimierung – damit Ihre Anlage stabil läuft.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">⚡</div><div><h3>Reparaturen</h3><p>Zügige Fehlerdiagnose und fachgerechte Reparatur – mit Blick auf Nachhaltigkeit und Folgekosten.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔥</div><div><h3>Heizung & Warmwasser</h3><p>Unterstützung bei Ausfall, schwankender Temperatur oder Druckproblemen – praxisnah gelöst.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">🔁</div><div><h3>Modernisierung</h3><p>Beratung zu Austausch und Modernisierung – passend zu Bedarf, Budget und Anlagenzustand.</p></div></article>
        <article class="service-feature"><div class="service-feature__icon" aria-hidden="true">✅</div><div><h3>Sicherheit</h3><p>Kontrolle sicherheitsrelevanter Komponenten – für zuverlässigen Betrieb und mehr Wohlbefinden.</p></div></article>
      </div>
    </div>
  </section>

  <!-- Wartung -->
  <section class="service-section service-section--soft" id="wartung-services">
    <div class="container">
      <div class="card-split">
        <div class="card-split__text"><div class="card-box">
          <h2>Wartung in 1150 Wien – planbar & sicher</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
          <div class="service-stats">
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Effizienz</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Störungen</div></div>
            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
          </div>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size7.jpeg" alt="Wartung 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Reparatur -->
  <section class="service-section" id="reparatur-services">
    <div class="container">
      <div class="card-split card-split--reverse">
        <div class="card-split__text"><div class="card-box">
          <h2>Reparaturen & Austausch – wenn es darauf ankommt</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
        </div></div>
        <div class="card-split__media"><div class="service-media__box">
          <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur 1150 Wien" loading="lazy" decoding="async">
        </div></div>
      </div>
    </div>
  </section>

  <!-- Notdienst -->
  <section class="service-section service-section--dark" id="notdienst-services">
    <div class="container service-emergency">
      <div class="service-emergency__text">
        <h2>Notdienst in 1150 Wien – 24/7 erreichbar</h2>
        <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
        <div class="service-emergency__actions">
          <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
          <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
        </div>
      </div>
      <div class="service-emergency__panel"><div class="service-panel">
        <h3>Typische Notdienst‑Einsätze</h3>
        <ul class="service-checklist service-checklist--on-dark">
          <li>Ausfall von Heizung oder Warmwasser</li>
          <li>Fehlermeldungen, Druckprobleme oder Störgeräusche</li>
          <li>Sicherheitsrelevante Auffälligkeiten am Gerät</li>
        </ul>
        <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in 1150 Wien.</p>
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
          <h2>Kosten & transparente Beratung</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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
      <div class="service-section__head"><h2>FAQ – Installateur 1150 Wien</h2><p>Antworten auf die häufigsten Fragen – kurz, klar und praxisnah.</p></div>
      <div class="service-faq"><details>
          <summary>1. Wie schnell sind Sie in meinem Bezirk vor Ort?</summary>
          <p>In der Regel erreichen wir Sie je nach Verkehrslage innerhalb kurzer Zeit. Für 1150 Wien planen wir Einsätze so, dass Anfahrt, Diagnose und erste Maßnahmen effizient ablaufen.</p>
        </details>
        <details>
          <summary>2. Bieten Sie Installateur‑Notdienst in 1150 Wien an?</summary>
          <p>Ja. Bei Ausfällen von Heizung, Warmwasser oder sicherheitsrelevanten Auffälligkeiten helfen wir auch außerhalb der üblichen Zeiten.</p>
        </details>
        <details>
          <summary>3. Welche Leistungen umfasst eine Wartung?</summary>
          <p>Wir prüfen Gerätezustand, reinigen relevante Komponenten, kontrollieren Sicherheitseinrichtungen und optimieren Einstellungen – für stabilen Betrieb und geringeren Verbrauch.</p>
        </details>
        <details>
          <summary>4. Reparieren Sie auch ältere Anlagen?</summary>
          <p>Ja, sofern Ersatzteile verfügbar sind. Wir beurteilen Wirtschaftlichkeit und beraten transparent, ob Reparatur oder Austausch sinnvoller ist.</p>
        </details>
        <details>
          <summary>5. Gibt es transparente Preise?</summary>
          <p>Vor Ort erhalten Sie eine klare Einschätzung der Arbeiten. Bei planbaren Leistungen nennen wir Richtwerte und erklären die Kostentreiber verständlich.</p>
        </details>
        <details>
          <summary>6. Kann ich einen Termin online anfragen?</summary>
          <p>Ja. Nutzen Sie das Formular im Kontaktbereich. Wir melden uns zeitnah zur Terminbestätigung.</p>
        </details>
        <details>
          <summary>7. Arbeiten Sie sauber und dokumentiert?</summary>
          <p>Ja. Wir schützen den Arbeitsbereich, arbeiten nachvollziehbar und dokumentieren die wichtigsten Schritte – hilfreich für spätere Wartungen.</p>
        </details>
        <details>
          <summary>8. Welche Marken und Systeme betreuen Sie?</summary>
          <p>Wir betreuen gängige Heizungs- und Warmwassersysteme und kennen typische Fehlerbilder. Fragen Sie gern nach Ihrer konkreten Anlage.</p>
        </details>
        <details>
          <summary>9. Wie kann ich Störungen vorbeugen?</summary>
          <p>Regelmäßige Wartung, korrekte Druckeinstellungen und das rechtzeitige Reagieren auf Fehlermeldungen reduzieren Ausfälle deutlich.</p>
        </details>
        <details>
          <summary>10. Was brauche ich für den Einsatz?</summary>
          <p>Hilfreich sind Gerätedaten (Typenschild), letzte Wartungsunterlagen und eine kurze Beschreibung der Symptome. Das beschleunigt Diagnose und Lösung.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- Kontakt -->
  <section class="service-cta" id="kontakt-services">
    <div class="container">
      <div class="service-cta__inner">
        <div>
          <h2>Jetzt Termin vereinbaren</h2>
          <p>Als Installateur in 1150 Wien (Rudolfsheim-Fünfhaus) unterstützen wir Sie bei allen Aufgaben rund um Heizung, Warmwasser und moderne Haustechnik. Von der planbaren Wartung über die schnelle Störungsbehebung bis hin zu Reparaturen und Modernisierung erhalten Sie strukturierte Abläufe, verständliche Erklärungen und eine saubere Ausführung. Wir achten auf Sicherheit, Effizienz und langfristige Zuverlässigkeit – besonders wichtig bei Anlagen, die täglich laufen. Durch kurze Wege im Bezirk 1150 reagieren wir flexibel, koordinieren Termine zügig und halten Sie über jeden Schritt transparent informiert.</p>
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

  <!-- Bezirke (bottom links) -->
   @include('layout.location')


</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

    @endsection
