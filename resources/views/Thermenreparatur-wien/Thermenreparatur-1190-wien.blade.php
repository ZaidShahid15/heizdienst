@extends('layout.app')

@section('main')

@php
$metaTitle = "Installateur Notdienst 1190 Wien – 24h Installateur Döbling Service";
$metaDescription = "Installateur Notdienst 1190 Wien – schneller Installateur Wien 1190 für Gas, Wasser und Heizung. Soforthilfe bei Rohrbruch, Heizungsausfall oder verstopftem Abfluss.";
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
                Installateur Notdienst 1190 Wien <br>
                <span style="color:#FB9A1B;">24h schnell & zuverlässig in Döbling</span>
            </h1>

            <p class="wolf-hero__sub">
                Rohrbruch, verstopfter Abfluss oder Heizungsausfall? Unser Installateur Notdienst 1190 Wien ist rund um die Uhr für Sie da. Als lokaler Fachbetrieb in Döbling garantieren wir kurze Anfahrtswege, schnelle Hilfe und transparente Preise. Ob Gas, Wasser oder Heizung – wir lösen Ihr Problem noch heute.
            </p>

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
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Ihr Installateur Notdienst 1190 Wien – immer einsatzbereit</h2>
                        <p>Wenn bei Ihnen in Döbling das Wasser aus der  Wand schießt , die Heizung streikt oder der Abfluss verstopft ist, zählt jede Minute. Unser Installateur Notdienst in 1190 Wien ist speziell für solche Notfälle organisiert: Wir sind 24 Stunden am Tag, 7 Tage die Woche erreichbar und kommen sofort zu Ihnen nach Döbling. Durch unsere lokale Verankerung vermeiden wir lange Anfahrtszeiten – meist sind wir in unter 30 Minuten vor Ort. Mit modernster Technik und langjähriger Erfahrung beheben wir das Problem schnell und nachhaltig, damit Sie wieder Ruhe haben. Weitere Details finden Sie in unseren <a href="{{ route('Thermenreparatur-1180-wien') }}">weiterführenden Informationen</a>.</p>
                    </div>
                </div>
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size6.jpeg" alt="Installateur Notdienst 1190 Wien im Einsatz" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>

            <div class="service-grid service-grid--2" style="margin-top:14px">
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">⏱️</div>
                    <div>
                        <h3>24h Soforthilfe</h3>
                        <p>Egal ob Tag oder Nacht, Wochenende oder Feiertag – unser Notdienst ist immer für Sie da. Ein Anruf genügt.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">📍</div>
                    <div>
                        <h3>Lokal in Döbling</h3>
                        <p>Durch unseren Standort im 19. Bezirk sind wir garantiert schneller als überregionale Anbieter. Sie profitieren von kurzen Wegen.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🛠️</div>
                    <div>
                        <h3>Erfahrene Profis</h3>
                        <p>Unsere Meister und Gesellen kennen jedes Problem – von alten Gussrohren in Gründerzeithäusern bis zur modernen Brennwerttherme.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">💶</div>
                    <div>
                        <h3>Faire Preise</h3>
                        <p>Vor dem Einsatz nennen wir Ihnen die Kosten. Keine versteckten Gebühren, keine bösen Überraschungen.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="service-section" id="team-services">
        <div class="container">
            <div class="card-split card-split--reverse">
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Unser Team – Ihr verlässlicher Partner in 1190</h2>
                        <p>Hinter unserem Installateur Notdienst steht ein eingespieltes Team aus geprüften Fachkräften. Wir bilden uns regelmäßig weiter, um stets auf dem neuesten Stand der Technik zu sein. Viele unserer Kunden in Döbling – von der Krottenbachstraße bis zum Kahlenberg – schätzen besonders unsere Zuverlässigkeit und die ruhige, sachliche Art, mit der wir auch in hektischen Notfallsituationen den Überblick behalten. Wir arbeiten sauber, hinterlassen keine Unordnung und erklären Ihnen verständlich, was passiert ist und wie wir es beheben. So gewinnen wir nicht nur Ihr Vertrauen, sondern oft auch langfristige Kundenbeziehungen.</p>
                        <div class="service-stats">
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Geprüfte Installateure</div></div>
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Saubere & ordentliche Arbeit</div></div>
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Transparente Kommunikation</div></div>
                        </div>
                    </div>
                </div>
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size5.jpeg" alt="Installateur Team in Wien 1190" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leistungen -->
    <section class="service-section" id="leistungen-services">
        <div class="container">
            <div class="service-section__head">
                <h2>Unsere Leistungen für Sie in Döbling</h2>
                <p>Ob Notfall oder geplante Installation – wir bieten das volle Spektrum der Installateurarbeiten. Hier ein Überblick:</p>
            </div>
            <div class="service-grid service-grid--2">
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🚰</div>
                    <div>
                        <h3>Rohrbruch & Wasserschaden</h3>
                        <p>Schnelle Ortung der Schadstelle, professionelle Reparatur und Trocknung – wir minimieren Folgeschäden.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🧵</div>
                    <div>
                        <h3>Rohrreinigung</h3>
                        <p>Bei verstopftem Abfluss oder WC: Mit Spirale, Hochdruck oder Kamera lokalisieren und beseitigen wir die Verstopfung.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🔥</div>
                    <div>
                        <h3>Heizungsreparatur</h3>
                        <p>Ob Gastherme, Ölheizung oder Wärmepumpe – wir finden den Fehler und bringen Ihre Wärme zurück.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🛁</div>
                    <div>
                        <h3>Sanitär Installation</h3>
                        <p>Von der neuen Waschtischarmatur bis zur kompletten Badsanierung – wir setzen Ihre Wünsche um.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">🔥</div>
                    <div>
                        <h3>Thermenwartung</h3>
                        <p>Regelmäßige Wartung verlängert die Lebensdauer und spart Energie. Wir prüfen alle sicherheitsrelevanten Teile.</p>
                    </div>
                </article>
                <article class="service-feature">
                    <div class="service-feature__icon" aria-hidden="true">📐</div>
                    <div>
                        <h3>Notdienst & Bereitschaft</h3>
                        <p>24h besetzt – bei Stromausfall, Gasgeruch oder plötzlichem Warmwasserstopp sind wir sofort für Sie da.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Wartung -->
    <section class="service-section service-section--soft" id="wartung-services">
        <div class="container">
            <div class="card-split">
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Regelmäßige Wartung – damit alles rund läuft</h2>
                        <p>Eine gut gewartete Heizungsanlage arbeitet nicht nur effizienter, sondern ist auch sicherer und stört seltener. Gerade in Döbling mit vielen Villen und älteren Einfamilienhäusern ist die jährliche Inspektion besonders wichtig. Unser Installateur überprüft bei der Wartung alle Komponenten: Brenner, Wärmetauscher, Sicherheitsventile, Abgaswege und Regelung. Wir reinigen, justieren nach und dokumentieren den Zustand. So erfüllen Sie nicht nur Ihre gesetzliche Pflicht (z.B. bei Gasgeräten), sondern sparen langfristig Geld und vermeiden teure Notfälle. Für mehr Infos besuchen Sie <a href="{{ route('home') }}">Thermenwartung & Thermenservice Wien & Niederösterreich</a>.</p>
                        <div class="service-stats">
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Höhere Effizienz</div></div>
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Weniger Ausfälle</div></div>
                            <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">Mehr Sicherheit</div></div>
                        </div>
                    </div>
                </div>
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size7.jpeg" alt="Heizungswartung in 1190 Wien" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reparatur -->
    <section class="service-section" id="reparatur-services">
        <div class="container">
            <div class="card-split card-split--reverse">
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Reparaturen – schnell und fachgerecht</h2>
<p>Wenn die Heizung nicht zündet, die Spülung läuft oder der Boiler tropft, ist schnelle Hilfe gefragt. Unser Installateur Notdienst in 1190 diagnostiziert den Fehler meist direkt vor Ort und hat die gängigsten Ersatzteile bereits im Fahrzeug dabei. So können wir viele Reparaturen sofort erledigen – ohne zweiten Termin. Mehr zu unserem Serviceangebot und weiteren Leistungen finden Sie auf unserer Startseite. Sollte doch ein Spezialteil nötig sein, organisieren wir es schnellstmöglich und halten Sie über den Fortschritt auf dem Laufenden. Wir arbeiten markenunabhängig und kennen die typischen Schwachstellen aller gängigen Fabrikate.</p>                    </div>
                </div>
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size4.jpeg" alt="Reparatur durch Installateur 1190" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notdienst -->
    <section class="service-section service-section--dark" id="notdienst-services">
        <div class="container service-emergency">
            <div class="service-emergency__text">
                <h2>Installateur Notdienst 1190 Wien – 24/7 für Sie erreichbar</h2>
                <p>Ein Rohrbruch überschwemmt den Keller, mitten in der Nacht fällt die Heizung aus oder am Sonntagmorgen ist der Abfluss dicht – das sind die Momente, in denen Sie unseren 24h-Notdienst brauchen. Wir sind rund um die Uhr für Bewohner und Betriebe in Döbling im Einsatz. Ein Anruf genügt, und unser Bereitschaftsteam macht sich sofort auf den Weg zu Ihnen. Wir sichern die Schadensstelle, beheben das akute Problem und beraten Sie, ob weitere Maßnahmen nötig sind. Vertrauen Sie auf unsere jahrelange Erfahrung im Notfallmanagement.</p>
                <div class="service-emergency__actions">
                    <a class="service-btn-dark accent" href="#kontakt-services">Notdienst kontaktieren</a>
                    <a class="service-btn-dark ghost" href="#faq-services">FAQ ansehen</a>
                </div>
            </div>
            <div class="service-emergency__panel">
                <div class="service-panel">
                    <h3>Typische Notfälle in 1190</h3>
                    <ul class="service-checklist service-checklist--on-dark">
                        <li>Rohrbruch / Wasserrohrbruch</li>
                        <li>Verstopfter Abfluss oder WC</li>
                        <li>Heizungsausfall (keine Wärme)</li>
                        <li>Kein Warmwasser</li>
                        <li>Gasgeruch / defekte Gastherme</li>
                        <li>Undichte Armaturen</li>
                    </ul>
                    <p style="margin:10px 0 0; color:rgba(255,255,255,.9);">24h erreichbar – schnelle Hilfe in Döbling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Preise -->
    <section class="service-section" id="preise-services">
        <div class="container">
            <div class="card-split">
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size2.jpegs.jpeg" alt="Transparente Installateur Kosten" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Faire & transparente Preise</h2>
                        <p>Wir wissen, dass Kosten im Notfall oft ein zusätzlicher Stressfaktor sind. Deshalb legen wir größten Wert auf transparente Preisgestaltung. Bevor wir mit der Arbeit beginnen, erhalten Sie eine klare Ansage über den voraussichtlichen Preis – abhängig von Aufwand und Material. Für viele Standardeinsätze (z.B. Rohrreinigung, Thermenstörung) haben wir Festpreise, die wir einhalten. Natürlich erstellen wir auf Wunsch auch einen detaillierten Kostenvoranschlag. Bei uns gibt es keine versteckten Anfahrts- oder Bereitstellungspauschalen. Was wir besprechen, zahlen Sie.</p>
                        <p>Für planbare Projekte wie eine Badsanierung oder den Thermentausch erstellen wir ein unverbindliches Angebot – selbstverständlich kostenlos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Region -->
    <section class="service-section service-section--soft" id="region-services">
        <div class="container">
            <div class="card-split">
                <div class="card-split__text">
                    <div class="card-box">
                        <h2>Schnell im ganzen Bezirk Döbling</h2>
                        <p>Unser Einsatzgebiet umfasst den gesamten 19. Wiener Gemeindebezirk – von Heiligenstadt über Grinzing, Sievering, Nußdorf, den Kahlenberg bis hin zur Krottenbachstraße und dem Cobenzl. Durch unsere zentrale Lage in 1190 erreichen wir Sie in der Regel innerhalb von 30 Minuten. Wir kennen die Eigenheiten der verschiedenen Grätzel: die repräsentativen Villen mit ihren oft komplexen Heizsystemen, die alten Ortskerne mit historischen Leitungen und die modernen Wohnanlagen. Diese Ortskenntnis hilft uns, Probleme schneller zu lokalisieren und passgenau zu lösen. Wenn Sie einen Installateur in Döbling suchen, sind Sie bei uns genau richtig.</p>
                    </div>
                </div>
                <div class="card-split__media">
                    <div class="service-media__box">
                        <img class="service-media__img" src="img/1size3.jpegs.jpeg" alt="Einsatzgebiet Installateur 1190 Wien" loading="lazy" decoding="async">
                    </div>
                </div>
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
            <div class="service-section__head">
                <h2>FAQ – Installateur 1190 Wien</h2>
                <p>Antworten auf die häufigsten Fragen – kurz, klar und praxisnah.</p>
            </div>
            <div class="service-faq">
                <details>
                    <summary>1. Wie schnell sind Sie in Döbling vor Ort?</summary>
                    <p>In der Regel innerhalb von 30 Minuten. Bei dringenden Notfällen priorisieren wir Ihren Einsatz und kommen noch schneller.</p>
                </details>
                <details>
                    <summary>2. Was kostet der Installateur Notdienst?</summary>
                    <p>Für den Notfall berechnen wir eine transparente Einsatzpauschale plus Arbeitszeit. Wir nennen Ihnen die Kosten vor Arbeitsbeginn. Bei Standardfällen (z.B. Rohrreinigung) gibt es oft einen Festpreis.</p>
                </details>
                <details>
                    <summary>3. Arbeiten Sie auch am Wochenende?</summary>
                    <p>Ja, unser Notdienst ist 24/7 besetzt – auch an Samstagen, Sonn- und Feiertagen. Ein Aufschlag für Wochenenddienste ist branchenüblich, dennoch bleiben unsere Preise fair.</p>
                </details>
                <details>
                    <summary>4. Was tun bei einem Wasserrohrbruch?</summary>
                    <p>Hauptwasserhahn zudrehen (meist in der Wohnung oder im Keller), Strom im betroffenen Bereich abschalten und uns sofort anrufen. Wir kümmern uns um die Abdichtung und Trocknung.</p>
                </details>
                <details>
                    <summary>5. Bieten Sie auch Thermenwartung an?</summary>
                    <p>Ja, für alle Marken. Wir empfehlen eine jährliche Wartung – besonders bei Gasgeräten. Vereinbaren Sie einfach einen Termin.</p>
                </details>
                <details>
                    <summary>6. Kann ich einen Termin online buchen?</summary>
                    <p>Nutzen Sie das Kontaktformular oder rufen Sie uns direkt an. Wir bestätigen Ihnen zeitnah einen fixen Termin.</p>
                </details>
                <details>
                    <summary>7. Sind Ihre Installateure zertifiziert?</summary>
                    <p>Ja, alle unsere Mitarbeiter haben eine abgeschlossene Berufsausbildung und regelmäßige Schulungen. Wir sind ein konzessionierter Installationsbetrieb.</p>
                </details>
                <details>
                    <summary>8. Reparieren Sie auch alte Heizungen?</summary>
                    <p>Solange Ersatzteile verfügbar sind, reparieren wir auch ältere Anlagen. Wenn eine Reparatur unwirtschaftlich wird, beraten wir Sie über moderne Alternativen.</p>
                </details>
                <details>
                    <summary>9. Was muss ich bei einem Notfall selbst tun?</summary>
                    <p>Bleiben Sie ruhig, sichern Sie die Gefahrenstelle (z.B. Wasser abstellen) und rufen Sie uns an. Schildern Sie das Problem so genau wie möglich – das hilft uns, das richtige Werkzeug mitzunehmen.</p>
                </details>
                <details>
                    <summary>10. Zahlen Sie die Anfahrt extra?</summary>
                    <p>Die Anfahrt ist in der Einsatzpauschale enthalten. Wir verrechnen keine versteckten Kilometerpauschalen.</p>
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
                    <p>Sie haben ein akutes Problem oder möchten einen Wartungstermin? Rufen Sie uns einfach an oder schreiben Sie uns über das Formular. Wir melden uns umgehend bei Ihnen.</p>
                    <p style="margin-top:10px"><strong>📞</strong> Direkt anrufen: <a href="tel:+4314420617">+43 1 442 0617</a></p>
                    <p style="margin-top:5px"><strong>✉️</strong> <a href="mailto:office@example.com">office@example.com</a></p>
                </div>
                <form class="service-cta__form" onsubmit="event.preventDefault(); alert('Danke für Ihre Anfrage! Wir melden uns so schnell wie möglich.');">
                    <div class="service-formrow">
                        <label><span>Name</span><input required name="name" placeholder="Ihr Name"></label>
                        <label><span>Telefon</span><input required name="phone" placeholder="Ihre Nummer"></label>
                    </div>
                    <label style="margin-top:10px"><span>Nachricht</span><textarea required name="msg" rows="4" placeholder="Worum geht es? Bitte kurz beschreiben..."></textarea></label>
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

@php
    preg_match('/(\d{4})/', Route::currentRouteName(), $matches);
    $current = isset($matches[1]) ? (int)$matches[1] : null;
    $next = $current ? $current - 10 : null;
@endphp









