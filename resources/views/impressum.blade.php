@extends('layout.app')

@section('main')
<div class="container py-5" style="margin-top:100px;">

    <h1 class="mb-4 fw-bold text-center">Impressum & Datenschutzerklärung</h1>

    {{-- Single box for all content --}}
    <div class="card shadow-sm">
        <div class="card-body p-4 p-md-5">

            <!-- ========== IMPRESSUM ========== -->
            <h4 class="mb-3">Impressum</h4>

            <p class="mb-2"><strong>PR Installationstechnik & Klimaanlagen GmbH</strong><br>
            Wienerstraße 134<br>
            2352 Gumpoldskirchen<br>
            Österreich</p>

            <p class="mb-2">
            <strong>Telefon:</strong> +43 1 4420617<br>
            <strong>E-Mail:</strong> <a href="mailto:office@heizdienst.at">office@heizdienst.at</a><br>
            <strong>Website:</strong> <a href="https://www.heizdienst.at" target="_blank">www.heizdienst.at</a>
            </p>

            <p class="mb-2"><strong>Rechtsform:</strong> Gesellschaft mit beschränkter Haftung (GmbH)</p>
            <p class="mb-2"><strong>Firmenbuchnummer:</strong> FN 600346m</p>
            <p class="mb-2"><strong>Firmenbuchgericht:</strong> Landesgericht Wiener Neustadt</p>
            <p class="mb-2"><strong>UID-Nummer:</strong> ATU79325936</p>
            <p class="mb-2"><strong>Stammkapital:</strong> EUR 10.000,– (vollständig einbezahlt)</p>
            <p class="mb-2"><strong>Gründungsdatum:</strong> 10. März 2023</p>
            <p class="mb-2"><strong>Geschäftsführer:</strong> Ing. Christian Klaghofer</p>

            <p class="mb-2"><strong>Unternehmensgegenstand:</strong><br>
            Montage von Klimaanlagen und Wärmepumpen; Einzel- und Großhandel mit Klimaanlagen und Wärmepumpen; Installation von Gas-, Wasser- und Heizungsanlagen; Elektroinstallationen</p>

            <p class="mb-2"><strong>Zuständige Gewerbebehörde:</strong> Bezirkshauptmannschaft Mödling</p>
            <p class="mb-2"><strong>Anwendbare Rechtsvorschriften:</strong> Gewerbeordnung 1994 (GewO); abrufbar unter <a href="https://www.ris.bka.gv.at" target="_blank">www.ris.bka.gv.at</a></p>
            <p class="mb-2"><strong>Kammerzugehörigkeit:</strong> Wirtschaftskammer Niederösterreich, Sparte Gewerbe und Handwerk</p>
            <p class="mb-4"><strong>Aufsichtsbehörde:</strong> Bezirkshauptmannschaft Mödling, Bahnstraße 2, 2340 Mödling</p>

            <hr class="my-4">

            <h4 class="mb-3">Online-Streitbeilegung gemäß Art. 14 Abs. 1 ODR-VO</h4>
            <p class="mb-2">Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:</p>
            <p class="mb-2"><a href="https://ec.europa.eu/consumers/odr" target="_blank">https://ec.europa.eu/consumers/odr</a></p>
            <p class="mb-2">Unsere E-Mail-Adresse lautet: <a href="mailto:office@heizdienst.at">office@heizdienst.at</a></p>
            <p class="mb-4">Wir sind nicht bereit und nicht verpflichtet, an einem Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

            <hr class="my-4">

            <h4 class="mb-3">Haftungsausschluss</h4>

            <p class="mb-2"><strong>Haftung für Inhalte</strong></p>
            <p class="mb-2">Die Inhalte dieser Website wurden mit größtmöglicher Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der bereitgestellten Informationen wird keine Gewähr übernommen. Als Diensteanbieter sind wir gemäß § 6 ECG (E-Commerce-Gesetz) für eigene Inhalte nach den allgemeinen Gesetzen verantwortlich. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich.</p>

            <p class="mb-2"><strong>Haftung für Links</strong></p>
            <p class="mb-2">Unsere Website enthält Links zu externen Websites Dritter. Auf die Inhalte dieser Seiten haben wir keinen Einfluss und übernehmen daher keine Gewähr. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter verantwortlich. Zum Zeitpunkt der Verlinkung waren keine Rechtsverstöße erkennbar. Bei Bekanntwerden von Rechtsverletzungen werden entsprechende Links umgehend entfernt.</p>

            <p class="mb-2"><strong>Urheberrecht</strong></p>
            <p class="mb-4">Alle auf dieser Website veröffentlichten Inhalte (Texte, Bilder, Grafiken) unterliegen dem österreichischen Urheberrechtsgesetz (UrhG). Jede nicht ausdrücklich genehmigte Verwertung – insbesondere Vervielfältigung, Bearbeitung oder Verbreitung – bedarf der vorherigen schriftlichen Zustimmung der PR Installationstechnik & Klimaanlagen GmbH. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.</p>

            <!-- ========== DATENSCHUTZERKLÄRUNG ========== -->
            <hr class="my-4">

            <h4 class="mb-3">Datenschutzerklärung</h4>

            <p class="mb-2"><strong>Verantwortlicher gemäß Art. 4 Nr. 7 DSGVO:</strong></p>
            <p class="mb-2">
            PR Installationstechnik & Klimaanlagen GmbH<br>
            Wienerstraße 134, 2352 Gumpoldskirchen<br>
            E-Mail: <a href="mailto:office@heizdienst.at">office@heizdienst.at</a><br>
            Telefon: +43 1 4420617
            </p>

            <p class="mb-2"><strong>1. Grundsätze der Datenverarbeitung</strong><br>
            Wir verarbeiten personenbezogene Daten ausschließlich im Einklang mit der Datenschutz-Grundverordnung (DSGVO), dem Datenschutzgesetz (DSG 2018) sowie dem Telekommunikationsgesetz (TKG 2021). Personenbezogene Daten werden nur erhoben, soweit dies für die Bereitstellung einer funktionsfähigen Website sowie unserer Inhalte und Leistungen erforderlich ist.</p>

            <p class="mb-2"><strong>2. Hosting und Server-Logfiles</strong><br>
            Diese Website wird bei einem externen Hosting-Anbieter betrieben. Dabei werden automatisch sogenannte Server-Logfiles erfasst, die Ihr Browser übermittelt. Diese enthalten: IP-Adresse, Datum und Uhrzeit der Anfrage, aufgerufene URL, übertragene Datenmenge, Browsertyp und -version, Betriebssystem sowie Referrer-URL.<br>
            <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an der Sicherstellung des technischen Betriebs).<br>
            <em>Speicherdauer:</em> 7 Tage, danach automatische Löschung.</p>

            <p class="mb-2"><strong>3. Kontaktaufnahme</strong><br>
            Bei Kontaktaufnahme per E-Mail oder Telefon werden die von Ihnen übermittelten Daten (Name, E-Mail-Adresse, Telefonnummer, Nachricht) zur Bearbeitung Ihrer Anfrage gespeichert. Eine Weitergabe an Dritte erfolgt nicht ohne Ihre ausdrückliche Einwilligung.<br>
            <em>Rechtsgrundlage:</em> Art. 6 Abs. 1 lit. b DSGVO (vorvertragliche Maßnahmen) bzw. Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse).<br>
            <em>Speicherdauer:</em> Die Daten werden gelöscht, sobald die Anfrage abschließend bearbeitet wurde, spätestens jedoch nach 3 Jahren, sofern keine gesetzlichen Aufbewahrungspflichten bestehen (z. B. UGB: 7 Jahre für geschäftsrelevante Korrespondenz).</p>

            <p class="mb-2"><strong>4. Cookies</strong><br>
            Diese Website verwendet ausschließlich technisch notwendige Cookies, die für den ordnungsgemäßen Betrieb erforderlich sind. Es werden keine Analyse-, Tracking- oder Marketing-Cookies ohne Ihre vorherige ausdrückliche Einwilligung gesetzt. Technisch notwendige Cookies bedürfen gemäß § 165 Abs. 3 TKG 2021 keiner Einwilligung.</p>

            <p class="mb-2"><strong>5. Keine Weitergabe an Dritte</strong><br>
            Eine Übermittlung Ihrer personenbezogenen Daten an Dritte findet grundsätzlich nicht statt, außer dies ist zur Vertragserfüllung erforderlich, gesetzlich vorgeschrieben oder Sie haben ausdrücklich eingewilligt.</p>

            <p class="mb-2"><strong>6. Ihre Rechte als betroffene Person</strong><br>
            Sie haben gegenüber uns folgende Rechte hinsichtlich Ihrer personenbezogenen Daten:</p>
            <ul class="mb-2">
                <li>Auskunft über gespeicherte Daten (Art. 15 DSGVO)</li>
                <li>Berichtigung unrichtiger Daten (Art. 16 DSGVO)</li>
                <li>Löschung Ihrer Daten (Art. 17 DSGVO)</li>
                <li>Einschränkung der Verarbeitung (Art. 18 DSGVO)</li>
                <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                <li>Widerspruch gegen die Verarbeitung (Art. 21 DSGVO)</li>
                <li>Widerruf einer erteilten Einwilligung mit Wirkung für die Zukunft (Art. 7 Abs. 3 DSGVO)</li>
            </ul>
            <p class="mb-2">Zur Ausübung Ihrer Rechte wenden Sie sich bitte schriftlich oder per E-Mail an: <a href="mailto:office@heizdienst.at">office@heizdienst.at</a></p>

            <p class="mb-2"><strong>7. Beschwerderecht bei der Datenschutzbehörde</strong><br>
            Sie haben das Recht, sich jederzeit bei der österreichischen Datenschutzbehörde zu beschweren:<br>
            Österreichische Datenschutzbehörde<br>
            Barichgasse 40–42, 1030 Wien<br>
            Telefon: +43 1 52152-0<br>
            E-Mail: <a href="mailto:dsb@dsb.gv.at">dsb@dsb.gv.at</a><br>
            Website: <a href="https://www.dsb.gv.at" target="_blank">www.dsb.gv.at</a></p>

            <p class="mb-2"><strong>8. Datensicherheit</strong><br>
            Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre Daten gegen zufällige oder vorsätzliche Manipulation, Verlust oder unberechtigten Zugriff zu schützen. Die Übertragung erfolgt über eine SSL/TLS-verschlüsselte Verbindung (erkennbar am „https://“ in der Adresszeile).</p>

            <p class="mb-2"><strong>9. Aktualität und Änderungen dieser Datenschutzerklärung</strong><br>
            Diese Datenschutzerklärung hat den Stand Februar 2026. Wir behalten uns vor, diese bei Bedarf anzupassen, um stets den aktuellen rechtlichen Anforderungen zu entsprechen.</p>

            <p class="mt-4 text-muted">Stand: Februar 2026 | PR Installationstechnik & Klimaanlagen GmbH</p>

        </div>
    </div>

</div>
@endsection