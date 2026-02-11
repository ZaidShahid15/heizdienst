<style>
.footer-logo{
    width: 100%;
}
@media (max-width: 768px) {
    .footer-logo { width: 50%; }
}

/* ✅ Force 4 columns on desktop */
.footer-grid{
    display: grid;
    grid-template-columns: 1.6fr 1fr 1fr 1fr;
    gap: 40px;
    align-items: start;
}

/* ✅ Tablet: 2 columns */
@media (max-width: 992px){
    .footer-grid{
        grid-template-columns: 1fr 1fr;
        gap: 28px;
    }
}

/* ✅ Mobile: 1 column */
@media (max-width: 576px){
    .footer-grid{
        grid-template-columns: 1fr;
        gap: 22px;
    }
}

/* Keep logo centered */
.footer-grid > div:nth-child(2){
    text-align: center;
}
</style>

<!-- FOOTER -->
<footer id="kontakt">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">

                {{-- COLUMN 1 - INFO --}}
                <div>
                    <p>
                        Zuverlässiger Thermenservice für Wartung, Reparatur und Notdienst in Wien und
                        Niederösterreich – sicher, transparent und fachgerecht durch erfahrene Installateure.
                    </p>

                    <div style="height:12px"></div>

                    <ul class="list">
                        <li>
                            <svg><use href="#i-shield"></use></svg>
                            <span>Wien</span>
                        </li>

                        <li>
                            <svg><use href="#i-phone"></use></svg>
                            <a href="tel:+43000000000">+43 000 000 000</a>
                        </li>

                        <li>
                            <svg><use href="#i-mail"></use></svg>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </li>
                    </ul>
                </div>


                {{-- COLUMN 2 - LOGO --}}
                <div>
                    <img src="{{ asset('img/mobile-logo.jpeg') }}" class="footer-logo" alt="Heizdienst Logo">
                </div>


                {{-- COLUMN 3 - MARKEN --}}
                <div>
                    <div class="footer-title">
                        <svg></svg>Marken
                    </div>

                    <ul class="list">
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/vaillant') }}">Vaillant</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/buderus') }}">Buderus</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/löblich') }}">Löblich</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/baxi') }}">Baxi</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/junkers') }}">Junkers</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/wolf') }}">Wolf</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/viessmann') }}">Viessmann</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/saunier-duval') }}">Saunier Duval</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/rapido') }}">Rapido</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/ocean') }}">Ocean</a></li>
                    </ul>
                </div>


                {{-- COLUMN 4 - WICHTIGE LINKS --}}
                <div>
                    <div class="footer-title">
                        <svg></svg>Wichtige Links
                    </div>

                    <ul class="list">
                        <li><svg><use href="#i-check"></use></svg><a href="#kontakt">Kontakt</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ route('impressum') }}">Impressum</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/Datenschutzerklärung') }}">Datenschutzerklärung</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/') }}">Startseite</a></li>
                        <li><svg><use href="#i-check"></use></svg><a href="{{ url('/preise') }}">Preise</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div>
                © 2026 heizdienst.at |
                <a href="{{ route('impressum') }}">Impressum</a> &
                <a href="{{ url('/Datenschutzerklärung') }}">Datenschutzerklärung</a>
            </div>
        </div>
    </div>
</footer>
