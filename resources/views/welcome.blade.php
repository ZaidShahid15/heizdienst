@extends('layout.app')
@section('main')
<style>
     .m-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url('img/hero-scetion.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
            transform: scale(1.02);
        }
</style>
 <section class="m-hero" id="m-hero">
        <div class="wrap">
            <div class="grid">
                <div>
                    <h1>Heizung kaputt?<br><span class="hi">Wir kümmern uns sofort.</span></h1>
                    <p>Zuverlässiger Heizungs- &amp; Thermenservice in Wien und Niederösterreich — schnell, sauber und
                        transparent.</p>

                    <div class="m-badge">
                        <div class="dot">
                            <i class="bi bi-tools"></i>
                        </div>
                        <div>Unsere erfahrenen Techniker sind täglich im Einsatz, auch am Wochenende.</div>
                    </div>
                </div>

                <div class="m-tech">
                    <img src="{{ asset('img/hero-scetion.jpeg') }}" alt="Techniker an der Therme">
                </div>
            </div>
        </div>

        <a class="m-cta" href="tel:+4319284374">
            <svg>
                <use href="#i-phone"></use>
            </svg>
            Jetzt anrufen – wir helfen sofort
        </a>

        <!-- BADGES (MOBILE OVERLAY) -->
        <div class="m-hero-badges" aria-label="Bewertungen">
            <!-- Trustpilot -->
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

            <!-- Google -->
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
    </section>

    <!-- MOBILE SERVICES + BENEFIT -->
  
    <main id="top">
        <!-- DESKTOP HERO -->
        <!-- DESKTOP HERO -->
        <section class="hero" id="top">
            <div class="container">
                <div class="hero-grid">

                    <div class="hero-img">
                        <img src="{{ asset('img/hero-scetion.jpeg') }}" alt="Thermenreparatur">

                        <!-- BADGES (DESKTOP OVERLAY) -->
                        <div class="hero-badges" aria-label="Bewertungen">
                            <!-- Trustpilot -->
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

                            <!-- Google -->
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

                    <div class="hero-copy">
                        <h1>Thermenwartung &amp; Thermenservice in Wien &amp; Niederösterreich</h1>
                        <p>
                            Professionelle Thermenwartung Wien, Thermenservice und Reparatur für jede Therme –
                            zuverlässig in Wien, Niederösterreich und der Umgebung, durch erfahrene Installateure,
                            schnell und transparent.
                        </p>

                        <ul class="hero-bullets">
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Thermenwartung Wien &amp; Umgebung</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Alle Marken &amp; Hersteller</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Transparente Preise inkl. MwSt</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Schnelle Hilfe, Service &amp; Notdienst</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- BEKANNT AUS -->
        <section class="as-seen" aria-label="Bekannt aus">
            <div class="container">
                <div class="as-seen-row">
                    <h2 class="as-seen-title">BEKANNT AUS</h2>

                    <div class="as-seen-logos">
                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/Aj0ohdrCqIDq51KTZbflsVSnyg.webp?scale-down-to=1024"
                                alt="ORF">
                        </a>

                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/6XAaIjZdEa80WhL7h7kwuRTA.webp?scale-down-to=1024"
                                alt="Kurier">
                        </a>

                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/5iqByNcOVDmWk2oQV9BInbXp6w.webp?scale-down-to=1024"
                                alt="Der Standard">
                        </a>

                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/DdNjJ15OOHoRVb88Uv9kNQp7zqY.webp?scale-down-to=1024"
                                alt="Die Presse">
                        </a>

                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/Pyq6n8jcA6V3xqurte7I88cBU5U.webp?scale-down-to=1024"
                                alt="Kleine Zeitung">
                        </a>

                        <a class="as-seen-logo" href="#" target="_blank" rel="noopener">
                            <img src="https://framerusercontent.com/images/9O0tMXl2NeMgsnUz4Nrw9efV5k.webp"
                                alt="Gewinn">
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Intro + Form -->
        <section class="intro" id="service">
            <div class="container">
                <div class="intro-grid">
                    <div>
                        <h2>Ihr Partner für Thermenwartung in Wien
                        </h2>

                        <div class="divider" aria-hidden="true">
                            <span class="icon"><img src="{{ asset('img/icon set.jpeg') }}" alt=""></span>
                        </div>

                        <div class="prose">
                            <p>
                                Wir sind Ihr verlässlicher Partner für <b>Thermenwartung</b>, <b>Thermenservice</b> und
                                <b>Thermenreparatur</b> in <b>Wien</b> und <b>Niederösterreich</b>.
                                Unsere erfahrenen <b>Installateure</b>, <b>Spezialisten</b> und <b>Experten</b> betreuen
                                <b>Gasthermen</b>, <b>Gasgeräte</b> und moderne <b>Heizungen</b> mit höchster
                                Zuverlässigkeit.
                                <br><br>
                                Durch <b>professionelle Beratung</b>, <b>klaren Kundenservice</b> und <b>transparente
                                    Kosten</b> unterstützen wir <b>Mieter</b> und <b>Vermieter</b> gleichermaßen –
                                in jeder <b>Wohnung</b>, jedem <b>Haus</b> und im laufenden <b>Betrieb</b>.
                                Unser Fokus liegt auf <b>Sicherheit</b>, <b>langlebiger Funktion</b>, <b>rechtlicher
                                    Klarheit</b> (<b>MRG</b>, <b>Wohnrechtsnovelle</b>)
                                und <b>planbarer Wartung</b> über alle <b>Jahreszeiten</b> hinweg.
                            </p>

                        </div>
                    </div>

                    <aside class="card" aria-label="Onine Termin">
                        <div class="card-head">
                            <div class="kicker">Online Termin für Thermenwartung vereinbaren.</div>
                        </div>
                        <form class="form" onsubmit="return fakeSubmit(event)">
                            <input class="input" placeholder="Marke: z.B.: Vaillant" required>
                            <div class="field-row">
                                <input class="input" placeholder="Name" required>
                                <input class="input" placeholder="E-Mail" type="email" required>
                                <input class="input" placeholder="Telefonnr." required>
                            </div>
                            <div class="field-row two">
                                <input class="input" placeholder="Straße, Hausnr, PLZ, Ort" required>
                                <input class="input" placeholder="Wunschtermin">
                            </div>
                            <textarea placeholder="Ihre Nachricht" required></textarea>
                            <button class="btn" type="submit">Jetzt Thermenwartung vereinbaren</button>
                        </form>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Steps -->
        <section class="steps">
            <div class="container">
                <h2>In 3 Schritten zur funktionierenden Therme</h2>

                <div class="steps-grid">
                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">1</div>
                            <div class="step-title">Thermenstörung oder Heizungsausfall?<br>Schneller Notdienst bei
                                Heizungsausfällen</div>
                        </div>
                        <div class="stp-img">

                            <img src="{{ asset('img/1st-step.jpeg') }}" alt="Heizungsausfall Notdienst">
                        </div>
                    </article>

                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">2</div>
                            <div class="step-title">Kontaktaufnahme mit unserem Thermendienst –<br>rasche Soforthilfe
                                garantiert in Wien & Niederösterreich</div>
                        </div>
                        <div class="stp-img">

                            <img src="{{ asset('img/secondstep.jpeg') }}" alt="Anruf beim Thermenservice">
                        </div>
                    </article>

                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">3</div>
                            <div class="step-title">Fachgerechter Einsatz vor Ort durch erfahrene
                                Installateure<br>professioneller Thermenservice in Wien</div>
                        </div>

                        <div class="stp-img">

                            <img src="{{ asset('img/thridstep.jpeg') }}" alt="Thermenservice Wien">
                        </div>
                    </article>
                    {{-- <h3 class="text-center">Unsere Leistungen auf einen Blick --}}
                    </h3>
                </div>
            </div>
        </section>


        <!-- Warum regelmäßige Thermenwartung & Für wen ist unser Service -->
        <section class="spotlight" id="thermenwartung-warum">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="text-center fw-bold">Warum eine regelmäßige Thermenwartung unverzichtbar ist</h2>
                        <p class="lead text-center">
                            Eine regelmäßige Thermenwartung ist entscheidend für Sicherheit, Effizienz und die
                            langfristige
                            Funktionsfähigkeit Ihrer Therme – rechtlich, technisch und wirtschaftlich.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Sicherheit &amp; Rechtssicherheit</h5>
                                <p class="card-text">
                                    Eine korrekt gewartete Therme erfüllt alle relevanten Pflichten laut technischer
                                    Richtlinie, MRG und Wohnrechtsnovelle. Besonders wichtig für Mieter und Vermieter,
                                    um
                                    Haftungsrisiken zu vermeiden.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Geringere Kosten &amp; Effizienz</h5>
                                <p class="card-text">
                                    Durch professionelle Wartung, Reinigung und gezielte Einstellungen werden
                                    Gasverbrauch,
                                    Störanfälligkeit und Ausfallrisiken reduziert. Moderne Technik senkt laufende Kosten
                                    spürbar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Längere Lebensdauer</h5>
                                <p class="card-text">
                                    Eine gepflegte Heizung verlängert die Lebensdauer Ihrer Geräte, reduziert einen
                                    frühzeitigen
                                    Thermentausch und sorgt ganzjährig für zuverlässige Wärme.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Für wen -->
                <div class="row mt-5 mb-4">
                    <div class="col-md-12">
                        <h2 class="text-center fw-bold">Für wen ist unser Service?</h2>
                        <p class="lead text-center">
                            Thermenservice für Privatkunden, Immobilien &amp; Hausverwaltungen.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Card 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Privatkunden</h5>
                                <p class="card-text">
                                    Betreuung von Thermen in Wohnungen und Häusern – zuverlässig, sicher und
                                    transparent,
                                    egal ob Wartung, Reparatur oder Thermentausch.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Vermieter &amp; Hausverwaltungen</h5>
                                <p class="card-text">
                                    Laufender Service für Immobilien inklusive Wartungsvertrag, klar geregeltem
                                    Leistungsumfang, ABGB-Vertrag und transparenter Preisstruktur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Gewerbe &amp; Dauerbetreuung</h5>
                                <p class="card-text">
                                    Individuell abgestimmte Wartungskonzepte für laufenden Betrieb – mit Pauschalpreis,
                                    ausgewiesener MwSt und persönlicher Beratung.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- Why -->
        <section class="why" id="reparatur">
            <div class="container">
                <div class="why-grid">
                    <div class="block">
                        <h3>Unsere Leistungen rund um Thermen & Heizung</h3>
                        <p>Unsere Leistungen decken alles rund um Ihre Therme ab – fachgerecht, effizient und kostentransparent:</p>

                        <h4>Thermenwartung:</h4>
                        <p>Gründliche regelmäßige Thermenwartung für sichere Funktionsfähigkeit, optimalen Heizwert und stabile Energieeffizienz.</p>

                        <h4>Thermenservice</h4>
                        <p>Umfassender Service inklusive Überprüfung, Funktionsprüfung, Einstellungen und Optimierung aller Geräte.</p>

                        <h4>Thermenreparatur</h4>
                        <p>Schnelle Reparatur, minimierte Reparaturkosten, gezielter Ersatz defekter Bauteile und zuverlässige Fehlerbehebung.</p>
                        <h4>Beratung & Planung</h4>
                        <p>Individuelle Beratung, klare Antworten auf Fragen, Fokus auf Erhaltung, Umwelt, Geld-Ersparnis und rechtliche Pflichten.</p>
                    </div>

                    <div class="block">
                        <h3>&nbsp;</h3>
                        <h4>Gasthermenwartung</h4>
                        <p>Professionelle Gasthermenwartung für geringe Gasverbrauch-Werte, sichere Warmwasser-Versorgung und stabile Heizkörper-Leistung.</p>

                        <h4>Thermentausch & Austausch</h4>
                        <p>Beratung und Austausch veralteter Systeme – wirtschaftlich, regelkonform und nachhaltig.</p>

                        <h4>Wartungsvertrag</h4>
                        <p>Planbare Preise, fixer Pauschalpreis, klare Arbeitszeit, geregelte Wegzeit und definierter Wartungsintervall laut technischer Richtlinie und ABGB Vertrag.</p>

                        
                        <h4>Reinigung & Nachjustierung</h4>
                        <p>Professionelle Reinigung, Nachjustierung, Entleerung und Prüfung aller sicherheitsrelevanten Komponenten.</p>


                        <p style="margin-top:12px"><b>In 3 Schritten zur funktionierenden Therme</p>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ===================== BRAND SPOTLIGHTS (ALL) ===================== -->
        <!-- Brand logos row -->
        <section class="brand-row" aria-label="Marken">
            <div class="container">
                <div class="brand-slider">

                    <button class="brand-slider-btn brand-slider-prev" aria-label="Previous"></button>

                    <div class="brand-slider-viewport">
                        <div class="brand-slider-track">
                            <img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">
                            <img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">
                            <img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">
                            <img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">
                            <img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">
                            <img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">
                            <img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">
                            <img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">
                            <img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">
                            <img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">
                        </div>
                    </div>

                    <button class="brand-slider-btn brand-slider-next" aria-label="Next"></button>

                </div>
            </div>
        </section>
        <section class="spotlight" id="vaillant">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center fw-bold">Thermenservice & Wartung aller Marken</h2>
                        <p class="lead text-center">
                            Wir bieten professionellen Thermenservice, Wartung und Reparatur für alle gängigen
                            Thermenmarken –
                            fachgerecht, sicher und zuverlässig durch erfahrene Installateure in Wien und
                            Niederösterreich.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vaillant -->
        <section class="spotlight" id="vaillant" style="border-top:0px">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Vaillant Thermenservice & Thermenwartung</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">
                        </div>
                        <p>
                            Der Vaillant Thermenservice sorgt für sichere, effiziente und langlebige Vaillant Thermen.
                            Unsere
                            geschulten Techniker kennen die speziellen Anforderungen dieser Marke und führen
                            Thermenwartung,
                            Reparatur und Ersatz mit originalen Bauteilen durch. Regelmäßige Wartung erhöht die
                            Sicherheit, senkt
                            Energiekosten und verlängert die Lebensdauer Ihrer Geräte. Vaillant steht für moderne
                            Technik, hohe
                            Qualität und zuverlässigen Heizkomfort.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Vaillant Therme">
                        <img src="{{ asset('img/viliant.jpeg') }}" alt="Vaillant Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Vaillant">
            <div class="feat">
                <div class="n">1</div>
                <h4>Spezialisiertes Fachwissen</h4>
                <p>Geschulte Techniker erkennen Fehler frühzeitig.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Optimale Leistung</h4>
                <p>Sauberer Betrieb spart Energie und Kosten.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Mehr Sicherheit</h4>
                <p>Prüfung aller Sicherheitsfunktionen &amp; Messwerte.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Original Ersatzteile</h4>
                <p>Passgenau, langlebig und zuverlässig.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Längere Lebensdauer</h4>
                <p>Weniger Verschleiß, weniger Ausfälle.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Transparente Preise</h4>
                <p>Klare Leistung, sauberer Service vor Ort.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Junkers -->
        <section class="spotlight reverse" id="junkers">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Junkers Thermenservice</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">
                        </div>
                        <p>
                            Beim Junkers Thermenservice steht fachgerechte Wartung und schnelle Reparatur im
                            Mittelpunkt. Wir
                            betreuen alle gängigen Junkers Geräte, tauschen defekte Ersatzteile aus und sorgen für einen
                            sicheren
                            Betrieb. Regelmäßige Wartung verbessert die Effizienz und reduziert das Risiko von Störungen
                            – ideal
                            für einen verlässlichen Heizbetrieb in jeder Jahreszeit.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Junkers Gastherme">
                        <img src="{{ asset('img/junkers.jpeg') }}" alt="Junkers Thermenwartung">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Junkers">
            <div class="feat">
                <div class="n">1</div>
                <h4>Gezielte Wartung</h4>
                <p>Inspektion speziell für Junkers-Geräte.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Effizienter Betrieb</h4>
                <p>Optimierung reduziert den Gasverbrauch.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Stabile Wärme</h4>
                <p>Zuverlässige Leistung im Winter wie im Sommer.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Weniger Ausfälle</h4>
                <p>Früherkennung verhindert teure Schäden.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Vor-Ort Service</h4>
                <p>Schnelle Hilfe bei Störung oder Fehlercode.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Sicherheitscheck</h4>
                <p>Abgaswerte und Dichtheit werden geprüft.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Viessmann -->
        <section class="spotlight" id="viessmann">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Viessmann Thermenwartung</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">
                        </div>
                        <p>
                            Mit der Viessmann Thermenwartung sichern Sie sich höchste Effizienz und Zuverlässigkeit.
                            Unsere
                            Spezialisten führen Wartung und Reparaturen nach Herstellervorgaben durch und verwenden
                            passende
                            Ersatzteile. Viessmann steht für innovative Heiztechnik, hohe Sicherheit und nachhaltige
                            Energienutzung.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Viessmann Therme">
                        <img src="{{ asset('img/viesman.jpeg') }}" alt="Viessmann Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Viessmann">
            <div class="feat">
                <div class="n">1</div>
                <h4>Effizienz sichern</h4>
                <p>Reinigung &amp; Einstellungen für besten Wirkungsgrad.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Geringere Heizkosten</h4>
                <p>Optimierte Verbrennung spart Energie.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Fehler früh erkennen</h4>
                <p>Störungen werden vor Ausfall behoben.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Saubere Messwerte</h4>
                <p>Abgasprüfung und Funktionscheck inklusive.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Längere Lebensdauer</h4>
                <p>Weniger Verschleiß durch regelmäßigen Service.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Zuverlässiger Betrieb</h4>
                <p>Konstante Wärme &amp; Warmwasser.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Wolf -->
        <section class="spotlight reverse" id="wolf">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Wolf Thermenservice</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">
                        </div>
                        <p>
                            Der Wolf Thermenservice bietet professionelle Wartung und Reparatur für moderne Wolf
                            Heizgeräte.
                            Unsere Techniker prüfen alle sicherheitsrelevanten Bauteile, tauschen Ersatzteile bei Bedarf
                            aus und
                            optimieren die Einstellungen. So bleibt Ihre Wolf Therme effizient, sicher und
                            leistungsstark.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Wolf Therme">
                        <img src="{{ asset('img/wolf.jpeg') }}" alt="Wolf Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Wolf">
            <div class="feat">
                <div class="n">1</div>
                <h4>Optimale Einstellungen</h4>
                <p>Feinjustierung für ruhigen und effizienten Lauf.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Weniger Störungen</h4>
                <p>Präventiver Check reduziert Fehlercodes.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Mehr Sicherheit</h4>
                <p>Kontrolle von Gas/Abgas und Bauteilen.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Saubere Verbrennung</h4>
                <p>Reinigung sorgt für bessere Messwerte.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Lange Lebensdauer</h4>
                <p>Weniger Verschleiß, mehr Zuverlässigkeit.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Schneller Vor-Ort Service</h4>
                <p>Rasche Hilfe in Wien &amp; NÖ.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Baxi -->
        <section class="spotlight" id="baxi">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Baxi Thermenwartung</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">
                        </div>
                        <p>
                            Die Baxi Thermenwartung gewährleistet eine gleichbleibend hohe Leistung und
                            Betriebssicherheit.
                            Unsere Installateure überprüfen alle relevanten Komponenten, führen Wartung und Reparaturen
                            fachgerecht durch und setzen auf passende Ersatzteile. Baxi Thermen überzeugen durch
                            Effizienz,
                            moderne Technik und ein gutes Preis-Leistungs-Verhältnis.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Baxi Therme">
                        <img src="{{ asset('img/baxi.jpeg') }}" alt="Baxi Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Baxi">
            <div class="feat">
                <div class="n">1</div>
                <h4>Gerätecheck</h4>
                <p>Alle Funktionen werden gründlich geprüft.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Effizienzsteigerung</h4>
                <p>Optimierung spart Gas und reduziert Kosten.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Fehlerprävention</h4>
                <p>Probleme werden früh erkannt.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Sicherheitsprüfung</h4>
                <p>Abgaswerte und Dichtheit im Fokus.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Mehr Lebensdauer</h4>
                <p>Wartung reduziert Verschleiß.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Verlässlicher Betrieb</h4>
                <p>Konstante Wärme &amp; Warmwasser.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Buderus -->
        <section class="spotlight reverse" id="buderus">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Buderus Thermenservice</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">
                        </div>
                        <p>
                            Mit unserem Buderus Thermenservice stellen wir sicher, dass Ihre Buderus Geräte zuverlässig
                            und
                            effizient arbeiten. Wir übernehmen Wartung, Reparatur und den Austausch verschlissener
                            Teile. Durch
                            regelmäßige Überprüfungen bleibt die Sicherheit hoch und die Lebensdauer Ihrer Thermen
                            deutlich
                            länger erhalten.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Buderus Therme">
                        <img src="{{ asset('img/buderus.jpeg') }}" alt="Buderus Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Buderus">
            <div class="feat">
                <div class="n">1</div>
                <h4>Fachgerechte Wartung</h4>
                <p>Service nach Herstellervorgaben.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Hohe Effizienz</h4>
                <p>Saubere Verbrennung spart Energie.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Sicherheitscheck</h4>
                <p>Kontrolle von Abgas, Ventilen und Sensoren.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Weniger Reparaturen</h4>
                <p>Frühwarnzeichen werden erkannt.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Mehr Lebensdauer</h4>
                <p>Wartung schützt vor Verschleiß.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Stabile Wärme</h4>
                <p>Konstanter Komfort in jedem Raum.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Saunier Duval -->
        <section class="spotlight" id="saunier-duval">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Saunier Duval Thermenwartung</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">
                        </div>
                        <p>
                            Die Saunier Duval Thermenwartung ist speziell auf die Anforderungen dieser Marke abgestimmt.
                            Unsere
                            Fachkräfte sorgen mit regelmäßiger Wartung und fachgerechter Reparatur für einen sicheren
                            Betrieb.
                            Original-Ersatzteile, effiziente Einstellungen und präzise Prüfungen garantieren optimale
                            Leistung
                            und langfristige Zuverlässigkeit.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Saunier Duval Therme">
                        <img src="{{ asset('img/sauneri.jpeg') }}" alt="Saunier Duval Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Saunier Duval">
            <div class="feat">
                <div class="n">1</div>
                <h4>Funktionsprüfung</h4>
                <p>Alle Komponenten werden getestet.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Effizienter Betrieb</h4>
                <p>Optimierung reduziert Verbrauch.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Mehr Sicherheit</h4>
                <p>Kontrolle von Abgas und Sensorik.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Weniger Störungen</h4>
                <p>Proaktive Wartung verhindert Ausfälle.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Lange Lebensdauer</h4>
                <p>Wartung reduziert Verschleiß.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Schneller Service</h4>
                <p>Termine in Wien &amp; NÖ.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Löblich -->
        <section class="spotlight reverse" id="loeblich">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Löblich Thermenservice</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">
                        </div>
                        <p>
                            Der Löblich Thermenservice richtet sich an Kunden mit bestehenden Löblich Geräten. Wir
                            übernehmen
                            Wartung, Reparatur und Sicherheitsprüfungen fachgerecht. Durch regelmäßige Wartung sorgen
                            wir für
                            einen stabilen Betrieb und vermeiden unnötige Ausfälle.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Löblich Therme">
                        <img src="{{ asset('img/loblich.jpeg') }}" alt="Löblich Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Löblich">
            <div class="feat">
                <div class="n">1</div>
                <h4>Gründliche Reinigung</h4>
                <p>Für stabile Messwerte und Leistung.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Effizienz</h4>
                <p>Optimierung spart Heizkosten.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Sicherheit</h4>
                <p>Abgas- &amp; Dichtheitsprüfung inklusive.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Fehler vermeiden</h4>
                <p>Frühzeitige Diagnose schützt vor Ausfällen.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Mehr Lebensdauer</h4>
                <p>Weniger Verschleiß durch Wartung.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Vor-Ort Termin</h4>
                <p>Schnell bei Ihnen in Wien &amp; NÖ.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Ocean -->
        <section class="spotlight" id="ocean">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Ocean Thermenservice</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">
                        </div>
                        <p>
                            Beim Ocean Thermenservice kümmern wir uns um die zuverlässige Wartung und Reparatur Ihrer
                            Ocean
                            Thermen. Unsere Fachkräfte prüfen alle relevanten Komponenten, sorgen für Sicherheit und
                            tauschen
                            defekte Teile aus. So bleibt Ihre Therme effizient und langlebig.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Ocean Therme">
                        <img src="{{ asset('img/oceanbaxi.jpeg') }}" alt="Ocean Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Ocean">
            <div class="feat">
                <div class="n">1</div>
                <h4>Komplettprüfung</h4>
                <p>Kontrolle aller relevanten Bauteile.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Stabile Leistung</h4>
                <p>Konstante Wärme &amp; Warmwasser.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Sicherheit</h4>
                <p>Prüfung der Abgaswerte &amp; Dichtheit.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Weniger Störungen</h4>
                <p>Fehler werden früh behoben.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Lange Lebensdauer</h4>
                <p>Wartung verhindert Folgeschäden.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Transparenter Service</h4>
                <p>Sauberer Einsatz, klare Leistung.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Rapido -->
        <section class="spotlight reverse" id="rapido">
            <div class="container">
                <div class="spot-head">
                    <div class="spot-text">
                        <h2>Rapido Gasgeräte Service</h2>
                        <div class="spot-brand">
                            <img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">
                        </div>
                        <p>
                            Der Rapido Gasgeräte Service bietet fachgerechte Wartung und Reparatur für Rapido Gasgeräte.
                            Wir
                            achten besonders auf Sicherheit, saubere Verbrennung und funktionierende Bauteile.
                            Regelmäßige
                            Wartung sorgt für einen störungsfreien Betrieb und verlängert die Lebensdauer Ihrer Geräte.
                        </p>
                        <a class="cta" href="#kontakt">Jetzt anfragen</a>
                    </div>

                    <div class="spot-img" aria-label="Rapido Therme">
                        <img src="{{ asset('img/rapido.jpeg') }}" alt="Rapido Thermenservice">
                    </div>
                </div>

                {{-- <div class="features" aria-label="Vorteile Rapido">
            <div class="feat">
                <div class="n">1</div>
                <h4>Wartung nach Plan</h4>
                <p>Regelmäßige Checks vermeiden Störungen.</p>
            </div>
            <div class="feat">
                <div class="n">2</div>
                <h4>Effizienz</h4>
                <p>Optimierung senkt Heizkosten.</p>
            </div>
            <div class="feat">
                <div class="n">3</div>
                <h4>Sicherheit</h4>
                <p>Messung &amp; Kontrolle sicherheitsrelevanter Teile.</p>
            </div>
            <div class="feat">
                <div class="n">4</div>
                <h4>Fehlerdiagnose</h4>
                <p>Probleme früh erkennen und beheben.</p>
            </div>
            <div class="feat">
                <div class="n">5</div>
                <h4>Mehr Lebensdauer</h4>
                <p>Weniger Verschleiß, weniger Ausfallzeit.</p>
            </div>
            <div class="feat">
                <div class="n">6</div>
                <h4>Vor-Ort Service</h4>
                <p>Schnell verfügbar in Wien &amp; NÖ.</p>
            </div>
        </div> --}}
            </div>
        </section>

        <!-- Häufige Fragen zur Thermenwartung -->
        <section class="spotlight" id="faq-thermenwartung">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="text-center fw-bold">Häufige Fragen zur Thermenwartung</h2>
                        <p class="lead text-center">
                            Antworten auf die wichtigsten Fragen rund um Thermenwartung, Kosten, Pflichten und Ablauf.
                        </p>
                    </div>
                </div>

                <div class="accordion accordion-flush" id="thermenFaq">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqOneContent">
                                Wie oft sollte eine Thermenwartung durchgeführt werden?
                            </button>
                        </h2>
                        <div id="faqOneContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Das empfohlene Wartungsintervall liegt bei einmal jährlich. Eine regelmäßige Wartung
                                sorgt für
                                Sicherheit, hohe Effizienz und eine längere Lebensdauer Ihrer Therme.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqTwoContent">
                                Gibt es eine Pflicht oder technische Richtlinie zur Wartung?
                            </button>
                        </h2>
                        <div id="faqTwoContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Eine direkte gesetzliche Pflicht besteht nicht. Technische Richtlinien und
                                Herstellervorgaben empfehlen jedoch regelmäßige Wartungen, um einen sicheren Betrieb
                                sicherzustellen.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqThreeContent">
                                Welche Rolle spielen Wohnrechtsnovelle und MRG?
                            </button>
                        </h2>
                        <div id="faqThreeContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Die Wohnrechtsnovelle und das MRG regeln klar, wer für Wartung und Instandhaltung
                                verantwortlich ist – besonders relevant für Mietwohnungen und Mehrparteienhäuser.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqFour">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqFourContent">
                                Reparatur oder Thermentausch – was ist sinnvoller?
                            </button>
                        </h2>
                        <div id="faqFourContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Bei häufigen Störungen, hohen Reparaturkosten oder sehr alten Geräten ist ein
                                Thermentausch oft wirtschaftlicher als wiederholte Reparaturen.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqFive">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqFiveContent">
                                Wer zahlt die Thermenwartung – Mieter oder Vermieter?
                            </button>
                        </h2>
                        <div id="faqFiveContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Das hängt vom Mietvertrag ab. In vielen Fällen übernimmt der Mieter die laufende
                                Wartung, während der Vermieter größere Reparaturen oder den Austausch trägt.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqSix">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqSixContent">
                                Was passiert bei einem Ausfall der Therme?
                            </button>
                        </h2>
                        <div id="faqSixContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Bei einem Ausfall reagieren wir rasch mit Reparatur oder Notdienst, damit Heizung
                                und Warmwasser schnell wieder verfügbar sind.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqSeven">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqSevenContent">
                                Wie lange dauert eine Thermenwartung?
                            </button>
                        </h2>
                        <div id="faqSevenContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Eine Standard-Thermenwartung dauert in der Regel zwischen 45 und 60 Minuten,
                                abhängig vom Gerätetyp und Zustand der Therme.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqEight">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqEightContent">
                                Was wird bei einer Thermenwartung genau gemacht?
                            </button>
                        </h2>
                        <div id="faqEightContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Die Wartung umfasst Reinigung, Funktionsprüfung, Überprüfung sicherheitsrelevanter
                                Bauteile, gezielte Einstellungen sowie eine abschließende Betriebskontrolle.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqNine">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqNineContent">
                                Kann eine Thermenwartung Heizkosten sparen?
                            </button>
                        </h2>
                        <div id="faqNineContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Ja. Eine gewartete Therme arbeitet effizienter, verbraucht weniger Gas und kann die
                                laufenden Heizkosten spürbar senken.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTen">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faqTenContent">
                                Ist ein Wartungsvertrag sinnvoll?
                            </button>
                        </h2>
                        <div id="faqTenContent" class="accordion-collapse collapse" data-bs-parent="#thermenFaq">
                            <div class="accordion-body">
                                Ein Wartungsvertrag bietet Planungssicherheit, fixe Preise und regelmäßige Termine.
                                Er hilft, Ausfälle zu vermeiden und die Lebensdauer der Therme deutlich zu verlängern.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA: Jetzt Thermenwartung sichern -->
        <section class="spotlight" id="cta-thermenwartung">
            <div class="container">
                <div class="cta-wrap">
                    <div class="cta-text">
                        <h2>Jetzt Thermenwartung in Wien &amp; Niederösterreich sichern</h2>
                        <p>
                            Setzen Sie auf Sicherheit, Zuverlässigkeit und einen professionellen Thermenservice – für
                            jede
                            Jahreszeit und jedes Gerät. Unsere erfahrenen Experten sind schnell vor Ort und sorgen
                            dafür, dass
                            Ihre Therme effizient und sicher funktioniert.
                        </p>
                        <div class="cta-actions">
                            <a class="cta-btn" href="#kontakt">Jetzt Termin anfragen</a>
                            <a class="cta-link" href="#faq-thermenwartung">Fragen ansehen</a>
                        </div>
                    </div>

                    <div class="cta-media" aria-label="Thermenwartung Service">
                        <img src="{{ asset('img/final.png') }}" alt="Thermenwartung in Wien & Niederösterreich">
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* ✅ Remove shadow/outline on FAQ accordion button when clicked/focused */
            #faq-thermenwartung .accordion-button:focus,
            #faq-thermenwartung .accordion-button:active,
            #faq-thermenwartung .accordion-button:focus-visible,
            #faq-thermenwartung .accordion-button:not(.collapsed) {
                outline: none !important;
                box-shadow: none !important;
                background-color: none;
            }

            /* .accordion-button:not(.collapsed){
            background-color: none !important;
        } */

            .accordion-button:not(.collapsed) {
                color: var(--bs-accordion-active-color) !important;
                background-color: transparent !important;
                box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
            }

            /* CTA styles (inherits your color scheme via CSS vars if available) */
            #cta-thermenwartung .cta-wrap {
                display: flex;
                gap: 24px;
                align-items: center;
                justify-content: space-between;
                border-radius: 18px;
                padding: 28px;
                background: #114359;
                color: var(--section-fg, #ffffff);
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
            }

            #cta-thermenwartung h2 {
                margin: 0 0 10px 0;
                font-weight: 800;
                line-height: 1.2;
            }

            #cta-thermenwartung p {
                margin: 0 0 18px 0;
                opacity: .92;
                max-width: 58ch;
            }

            #cta-thermenwartung .cta-actions {
                display: flex;
                gap: 14px;
                align-items: center;
                flex-wrap: wrap;
            }

            #cta-thermenwartung .cta-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 12px 18px;
                border-radius: 12px;
                background: var(--primary, #22c55e);
                color: #0b1220;
                font-weight: 700;
                text-decoration: none;
                transition: transform .12s ease, opacity .12s ease;
            }

            #cta-thermenwartung .cta-btn:hover {
                transform: translateY(-1px);
                opacity: .95;
            }

            #cta-thermenwartung .cta-link {
                color: var(--link, #ffffff);
                text-decoration: none;
                opacity: .9;
                font-weight: 600;
            }

            #cta-thermenwartung .cta-link:hover {
                opacity: 1;
                text-decoration: underline;
            }

            #cta-thermenwartung .cta-media {
                flex: 0 0 44%;
                border-radius: 16px;
                overflow: hidden;
                background: rgba(255, 255, 255, .06);
                min-height: 220px;
            }

            #cta-thermenwartung .cta-media img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            @media (max-width: 992px) {
                #cta-thermenwartung .cta-wrap {
                    flex-direction: column;
                    padding: 22px;
                }

                #cta-thermenwartung .cta-media {
                    flex-basis: auto;
                    width: 100%;
                }

                #cta-thermenwartung p {
                    max-width: 70ch;
                }
            }
        </style>




        <!-- ===================== /BRAND SPOTLIGHTS (ALL) ===================== -->
        <section class="brands-service">
            <div class="container">
                <span class="brands-kicker">Wartung & Reparatur</span>
                <h2 class="brands-title">Gasthermen</h2>

                <div class="brands-logos">
                    <img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">
                    <img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">
                    <img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">
                    <img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">
                    <img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">
                    <img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">
                    <img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">
                    <img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">
                    <img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">
                    <img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">
                </div>

                <p class="brands-note">Wir warten und reparieren alle gängigen Marken für Sie.</p>
            </div>
        </section>
    </main>
@endsection