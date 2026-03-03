<section class="service-cta" id="{{ $id ?? 'kontakt' }}">
    <div class="service-container service-cta__inner">

        <div>
            <h2>{{ $title ?? 'Jetzt Termin vereinbaren' }}</h2>

            @isset($text)
                <p>{!! $text !!}</p>
            @endisset

            @isset($subtext)
                <p style="margin-top:10px;">
                    {{ $subtext }}
                </p>
            @endisset

            {{-- Optional Call Button Above Form --}}
            @if(!empty($btnLink))
                <div style="margin-top:15px;">
                    <a href="{{ $btnLink }}"
                       class="service-btn {{ !empty($btnAccent) ? 'service-btn--accent' : 'service-btn--primary' }}">
                        {{ $btnText ?? 'Jetzt anrufen' }}
                    </a>
                </div>
            @endif
        </div>

        {{-- FORM ALWAYS SHOWS --}}
        <form class="service-cta__form" action="{{ $formAction ?? '#' }}" method="post">
            @csrf

            <div class="service-formrow">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" placeholder="Ihr Name" required>
                </label>

                <label>
                    <span>Telefon</span>
                    <input type="tel" name="phone" placeholder="+43 ..." required>
                </label>
            </div>

            <label style="margin-top:10px;">
                <span>Nachricht</span>
                <textarea name="message" rows="4"
                    placeholder="{{ $textareaPlaceholder ?? 'Thermenmodell, Problem, Wunschzeit...' }}"
                    required></textarea>
            </label>

            <button class="service-btn service-btn--accent service-btn--full" type="submit">
                Anfrage senden
            </button>

            <p class="service-fineprint">
                Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.
            </p>
        </form>

    </div>
</section>