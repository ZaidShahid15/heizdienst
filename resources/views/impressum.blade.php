@extends('layout.app')

@section('main')
<div class="container  py-5" style="margin-top:100px;">

    <h1 class="mb-4 fw-bold text-center">Impressum</h1>

    {{-- Single box for all content --}}
    <div class="card shadow-sm">
        <div class="card-body p-4 p-md-5">

            <h4 class="mb-3">Angaben gemäß § 5 E-Commerce-Gesetz (ECG), § 14 UGB und § 25 Mediengesetz</h4>

            <p class="mb-2"><strong>Websitebetreiber / Medieninhaber / inhaltlich Verantwortlicher</strong></p>

            <p class="mb-4">
                [Name des Unternehmens]<br>
                [Straße, Hausnummer]<br>
                [PLZ, Ort]<br>
                [Land]
            </p>

            <div class="mb-4">
                <p class="mb-1"><strong>Rechtsform:</strong> [z. B. GmbH / Einzelunternehmen / OG]</p>
                <p class="mb-1"><strong>Firmenbuchnummer:</strong> [eintragen]</p>
                <p class="mb-0"><strong>Firmenbuchgericht:</strong> [eintragen]</p>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Gewerbeberechtigung</h4>
            <div class="mb-4">
                <p class="mb-1"><strong>Gewerbe:</strong> [Heizungs- und Thermenservice / Installateurgewerbe]</p>
                <p class="mb-1"><strong>Ausgestellt am:</strong> [Datum eintragen]</p>
                <p class="mb-0"><strong>Standort:</strong> [Adresse eintragen]</p>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Gewerberechtliche Geschäftsführung</h4>
            <p class="mb-4">
                [Name Geschäftsführer / Inhaber], geboren am [TT.MM.JJJJ]<br>
                Bestellt am: [Datum eintragen]
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Unternehmens- und Markenauftritt</h4>
            <p class="mb-3">
                Die Marke „[Heizdienst]“ ist ein Marken-, Organisations- und Marketingauftritt des Unternehmens.
                Zur fachgerechten, gesetzeskonformen und zeitnahen Erbringung der auf dieser Website angebotenen Leistungen
                arbeitet das Unternehmen mit selbstständigen, befugten Partnerunternehmen zusammen.
            </p>
            <ul class="mb-4">
                <li>rechtlich selbstständig und wirtschaftlich unabhängig</li>
                <li>verfügen über die jeweils erforderlichen gewerberechtlichen Befugnisse</li>
                <li>arbeiten projekt- und leistungsbezogen mit [Heizdienst] zusammen</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">Vermittlung von Leistungen</h4>
            <p class="mb-3">
                Die Marke „[Heizdienst]“ tritt bei bestimmten Leistungen als Vermittler zwischen dem Kunden
                und einem selbstständigen Partnerunternehmen auf.
            </p>
            <p class="mb-3">
                Der Vertrag über die Durchführung der jeweiligen Leistung kommt direkt zwischen dem Kunden
                und dem ausführenden Partnerunternehmen zustande.
            </p>
            <ul class="mb-3">
                <li>erbringt die Leistung eigenverantwortlich</li>
                <li>stellt die Rechnung im eigenen Namen und auf eigene Rechnung aus</li>
                <li>haftet selbstständig für die ordnungsgemäße Ausführung der beauftragten Leistung</li>
            </ul>
            <p class="mb-4">
                „[Heizdienst]“ ist in diesen Fällen nicht Vertragspartner für die Durchführung der vermittelten Leistung,
                sondern ausschließlich Vermittler.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Hinweis zu Vertrag, Abrechnung und Haftung</h4>
            <ul class="mb-3">
                <li>Der jeweilige ausführende Betrieb ist Vertragspartner des Kunden</li>
                <li>Die Abrechnung erfolgt direkt zwischen Kunde und ausführendem Unternehmen</li>
                <li>Gewährleistungs- und Haftungsansprüche sind ausschließlich gegenüber dem ausführenden Unternehmen geltend zu machen</li>
            </ul>
            <p class="mb-4">
                „[Heizdienst]“ haftet nur für Schäden, die auf vorsätzliche oder grob fahrlässige Pflichtverletzungen
                im Rahmen der Vermittlungstätigkeit zurückzuführen sind.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Haftungsausschluss – Inhalte</h4>
            <p class="mb-3">
                Die Inhalte dieser Website wurden mit größtmöglicher Sorgfalt erstellt. Für die Richtigkeit,
                Vollständigkeit und Aktualität der Inhalte wird jedoch keine Gewähr übernommen.
            </p>
            <p class="mb-4">
                Als Diensteanbieter ist das Unternehmen gemäß § 7 Abs. 1 ECG für eigene Inhalte nach den allgemeinen Gesetzen verantwortlich.
                Nach §§ 8 bis 10 ECG besteht keine Verpflichtung, fremde Informationen zu überwachen oder aktiv nach rechtswidrigen Tätigkeiten zu forschen.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Haftung für externe Links</h4>
            <p class="mb-4">
                Diese Website enthält Links zu externen Websites Dritter, auf deren Inhalte kein Einfluss besteht.
                Für diese Inhalte ist stets der jeweilige Betreiber verantwortlich. Bei Bekanntwerden von Rechtsverletzungen
                werden derartige Links unverzüglich entfernt.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Urheberrecht</h4>
            <p class="mb-4">
                Die durch die Websitebetreiber erstellten Inhalte und Werke unterliegen dem österreichischen Urheberrecht.
                Jede Verwertung außerhalb der gesetzlichen Grenzen bedarf der vorherigen schriftlichen Zustimmung.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Online-Streitbeilegung gemäß Art. 14 Abs. 1 ODR-VO</h4>
            <p class="mb-2">
                Verbraucher haben die Möglichkeit, Beschwerden über die Online-Streitbeilegungsplattform der EU einzureichen:
            </p>
            <p class="mb-0">
                👉 <a href="https://ec.europa.eu/odr" target="_blank" rel="noopener">https://ec.europa.eu/odr</a>
            </p>

        </div>
    </div>

</div>
@endsection
