@extends('layout.app')

@section('main')
<div class="container py-5" style="margin-top:100px;">

    <h1 class="mb-4 fw-bold text-center">Datenschutzerklärung</h1>

    {{-- Single box for ALL content --}}
    <div class="card shadow-sm">
        <div class="card-body p-4 p-md-5">

            <h4 class="mb-3">1. Allgemeines</h4>
            <p>
                Der Schutz Ihrer personenbezogenen Daten ist [Name des Unternehmens] ein besonderes Anliegen.
                In dieser Datenschutzerklärung informieren wir Sie über Art, Umfang und Zweck der Verarbeitung
                personenbezogener Daten (nachfolgend „Daten“) im Rahmen unseres Onlineangebotes.
            </p>
            <p>
                Diese Datenschutzerklärung gilt für das Onlineangebot unter:
                <a href="https://heizdienst.at" target="_blank" rel="noopener">https://heizdienst.at</a>
                sowie für alle damit verbundenen Webseiten, Funktionen, Inhalte und externe Onlinepräsenzen
                (z. B. Social-Media-Profile).
            </p>
            <p>
                Die Verarbeitung personenbezogener Daten erfolgt ausschließlich auf Grundlage der Datenschutz-Grundverordnung (DSGVO)
                sowie der einschlägigen österreichischen Datenschutzbestimmungen. Begriffe wie „Verarbeitung“ oder „Verantwortlicher“
                werden im Sinne von Art. 4 DSGVO verwendet.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">2. Verantwortlicher</h4>
            <p class="mb-2">
                <strong>[Name des Unternehmens]</strong><br>
                [Adresse Straße, Hausnummer, PLZ, Ort]<br>
                [Land]
            </p>
            <p class="mb-0">
                <strong>Telefon:</strong> [Telefonnummer eintragen]<br>
                <strong>E-Mail:</strong> <a href="mailto:[E-Mail-Adresse eintragen]">[E-Mail-Adresse eintragen]</a>
            </p>

            <hr class="my-4">

            <h4 class="mb-3">3. Arten der verarbeiteten Daten</h4>
            <p class="mb-2">
                Je nach Nutzung unseres Onlineangebotes werden insbesondere folgende Kategorien personenbezogener Daten verarbeitet:
            </p>
            <ul class="mb-0">
                <li>Bestandsdaten (z. B. Name, Adresse)</li>
                <li>Kontaktdaten (z. B. Telefonnummer, E-Mail-Adresse)</li>
                <li>Inhaltsdaten (z. B. Angaben in Kontaktformularen)</li>
                <li>Nutzungsdaten (z. B. besuchte Seiten, Zugriffszeiten)</li>
                <li>Meta- und Kommunikationsdaten (z. B. IP-Adresse, Geräteinformationen)</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">4. Zwecke der Datenverarbeitung</h4>
            <p class="mb-2">Die Verarbeitung personenbezogener Daten erfolgt insbesondere zu folgenden Zwecken:</p>
            <ul class="mb-0">
                <li>Bereitstellung, Betrieb und Optimierung des Onlineangebotes</li>
                <li>Bearbeitung von Kontakt- und Serviceanfragen</li>
                <li>Kommunikation mit Nutzern</li>
                <li>Anbahnung, Abwicklung und Organisation von Verträgen</li>
                <li>Vermittlung von Leistungen an befugte Partnerunternehmen</li>
                <li>Sicherheitsmaßnahmen (z. B. Missbrauchs- und Betrugsprävention)</li>
                <li>Reichweitenmessung und Marketing</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">5. Rechtsgrundlagen der Verarbeitung</h4>
            <p class="mb-2">Die Verarbeitung personenbezogener Daten erfolgt auf Basis folgender Rechtsgrundlagen:</p>
            <ul class="mb-0">
                <li>Art. 6 Abs. 1 lit. b DSGVO – Vertragserfüllung bzw. vorvertragliche Maßnahmen</li>
                <li>Art. 6 Abs. 1 lit. f DSGVO – berechtigtes Interesse an einem sicheren, funktionsfähigen Onlineangebot</li>
                <li>Art. 6 Abs. 1 lit. a DSGVO – Einwilligung, sofern diese eingeholt wurde</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">6. Vermittlung von Leistungen &amp; Weitergabe an Partnerunternehmen</h4>
            <p>
                Sofern Anfragen Leistungen betreffen, die nicht unmittelbar durch [Name des Unternehmens] selbst erbracht werden,
                sondern durch selbstständige, befugte Partnerunternehmen, werden die für die Bearbeitung erforderlichen personenbezogenen
                Daten an das jeweils ausführende Unternehmen weitergeleitet.
            </p>
            <p class="mb-2">Zu diesen Daten zählen insbesondere:</p>
            <ul>
                <li>Name</li>
                <li>Kontaktdaten</li>
                <li>Adresse</li>
                <li>Angaben zur angefragten Leistung</li>
            </ul>
            <p class="mb-2">Die Datenweitergabe erfolgt ausschließlich zum Zweck der:</p>
            <ul class="mb-0">
                <li>Angebotslegung</li>
                <li>Terminvereinbarung</li>
                <li>Durchführung</li>
                <li>Abrechnung der angefragten Leistung</li>
            </ul>
            <p class="mt-3 mb-0">
                Die jeweiligen Partnerunternehmen verarbeiten personenbezogene Daten eigenverantwortlich im Sinne der DSGVO
                und ausschließlich im Rahmen der geltenden gesetzlichen Bestimmungen.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">7. Sicherheitsmaßnahmen</h4>
            <p>
                [Name des Unternehmens] trifft gemäß Art. 32 DSGVO geeignete technische und organisatorische Maßnahmen,
                um ein dem Risiko angemessenes Schutzniveau zu gewährleisten. Dabei werden insbesondere berücksichtigt:
            </p>
            <ul class="mb-0">
                <li>der Stand der Technik</li>
                <li>die Implementierungskosten</li>
                <li>Art, Umfang, Umstände und Zwecke der Verarbeitung</li>
                <li>Eintrittswahrscheinlichkeit und Schwere möglicher Risiken</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">8. Übermittlung in Drittländer</h4>
            <p class="mb-2">
                Eine Verarbeitung personenbezogener Daten in Staaten außerhalb der EU bzw. des EWR erfolgt nur, sofern:
            </p>
            <ul class="mb-0">
                <li>dies zur Vertragserfüllung erforderlich ist</li>
                <li>eine gesetzliche Verpflichtung besteht</li>
                <li>eine ausdrückliche Einwilligung vorliegt oder</li>
                <li>die Voraussetzungen der Art. 44 ff. DSGVO erfüllt sind</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">9. Speicherdauer</h4>
            <p class="mb-2">
                Personenbezogene Daten werden nur so lange gespeichert, wie dies:
            </p>
            <ul class="mb-0">
                <li>für die jeweiligen Verarbeitungszwecke erforderlich ist oder</li>
                <li>gesetzliche Aufbewahrungspflichten bestehen</li>
            </ul>

            <hr class="my-4">

            <h4 class="mb-3">10. Rechte der betroffenen Personen</h4>
            <p class="mb-2">Betroffene Personen haben das Recht auf:</p>
            <ul class="mb-2">
                <li>Auskunft (Art. 15 DSGVO)</li>
                <li>Berichtigung (Art. 16 DSGVO)</li>
                <li>Löschung (Art. 17 DSGVO)</li>
                <li>Einschränkung der Verarbeitung (Art. 18 DSGVO)</li>
                <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                <li>Widerspruch (Art. 21 DSGVO)</li>
            </ul>
            <p class="mb-0">
                Anfragen sind an die oben angeführte Kontaktadresse zu richten.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">11. Beschwerderecht</h4>
            <p class="mb-0">
                Betroffene Personen haben das Recht, Beschwerde bei der österreichischen Datenschutzbehörde einzulegen.
            </p>

            <hr class="my-4">

            <h3 class="mb-3">⚖️ Haftungsausschluss</h3>

            <h4 class="mb-3">Haftung für Inhalte</h4>
            <p>
                Als Diensteanbieter ist [Name des Unternehmens] gemäß § 7 Abs. 1 ECG für eigene Inhalte nach den allgemeinen Gesetzen verantwortlich.
                Nach §§ 8–10 ECG besteht keine Verpflichtung, übermittelte oder gespeicherte fremde Informationen zu überwachen oder aktiv nach
                rechtswidrigen Tätigkeiten zu forschen.
            </p>
            <p class="mb-0">
                Bei Bekanntwerden konkreter Rechtsverletzungen werden betroffene Inhalte umgehend entfernt.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Haftung für Links</h4>
            <p>
                Dieses Onlineangebot enthält Links zu externen Websites Dritter, auf deren Inhalte kein Einfluss besteht.
                Für diese Inhalte ist stets der jeweilige Betreiber verantwortlich.
            </p>
            <p class="mb-0">
                Bei Bekanntwerden von Rechtsverletzungen werden derartige Links unverzüglich entfernt.
            </p>

            <hr class="my-4">

            <h4 class="mb-3">Urheberrecht</h4>
            <p class="mb-0">
                Die durch den Websitebetreiber erstellten Inhalte und Werke unterliegen dem österreichischen Urheberrecht.
                Eine Verwertung außerhalb der gesetzlichen Grenzen bedarf der vorherigen schriftlichen Zustimmung.
                Inhalte Dritter sind als solche gekennzeichnet. Bei Bekanntwerden von Urheberrechtsverletzungen werden entsprechende Inhalte umgehend entfernt.
            </p>

        </div>
    </div>

</div>
@endsection
