@php
    $fixText = function ($value) use (&$fixText) {
        if (is_array($value)) {
            return array_map($fixText, $value);
        }

        if (! is_string($value)) {
            return $value;
        }

        return strtr($value, [
            'Ã¼' => 'ü',
            'Ãœ' => 'Ü',
            'Ã¤' => 'ä',
            'Ã„' => 'Ä',
            'Ã¶' => 'ö',
            'Ã–' => 'Ö',
            'ÃŸ' => 'ß',
            'â€“' => '–',
            'â€”' => '—',
            'â€ž' => '„',
            'â€œ' => '"',
            'â€' => '"',
            'â€š' => "'",
            'â€™' => "'",
            'â€¢' => '•',
            'âœ”' => '✔',
            'ðŸ‘‰' => '👉',
            'ðŸ“ž' => '📞',
            'Â ' => ' ',
            '  ' => ' ',
        ]);
    };

    $page = $fixText($page ?? []);
    $metaTitle = $page['meta_title'] ?? ('Installateur Kundendienst ' . ($page['district'] ?? 'Wien'));
    $metaDescription = $page['meta_description'] ?? ($page['hero_intro'] ?? '');
    $district = $page['district'] ?? '';
    $heroTitle = $page['hero_title'] ?? ('Installateur Kundendienst ' . $district . ' Wien');
    $heroIntro = $page['hero_intro'] ?? '';
    $sections = $page['sections'] ?? [];
    $features = $page['features'] ?? [];
    $benefits = $page['benefits'] ?? [];
    $faqItems = $page['faq_items'] ?? [];
    $tocItems = $page['toc'] ?? [];
    $contactTitle = $page['contact_title'] ?? 'Kontakt';
    $contactHtml = $page['contact_html'] ?? '';

    $brandCards = [
        ['route' => 'vaillant.thermentausch', 'img' => 'vaillant1-1.webp', 'label' => 'VAILLANT THERMENSERVICE'],
        ['route' => 'buderus.thermentausch', 'img' => '1buderus.webp', 'label' => 'BUDERUS THERMENSERVICE'],
        ['route' => 'baxi.thermentausch', 'img' => '1baxi.webp', 'label' => 'BAXI THERMENSERVICE'],
        ['route' => 'junkers.thermentausch', 'img' => '1junkers.webp', 'label' => 'JUNKERS THERMENSERVICE'],
        ['route' => 'viessmann.thermentausch', 'img' => '1viesman.webp', 'label' => 'VIESSMANN THERMENSERVICE'],
        ['route' => 'wolf.thermentausch', 'img' => '1wolf.webp', 'label' => 'WOLF THERMENSERVICE'],
        ['route' => 'saunier-duval.thermentausch', 'img' => '1sauneri.webp', 'label' => 'SAUNIER DUVAL SERVICE'],
        ['route' => 'loeblich.thermentausch', 'img' => '1loblich.webp', 'label' => 'LÖBLICH THERMENSERVICE'],
        ['route' => 'ocean.thermentausch', 'img' => '1oceanbaxi.webp', 'label' => 'OCEAN THERMENSERVICE'],
        ['route' => 'rapido.thermentausch', 'img' => '1rapido.webp', 'label' => 'RAPIDO THERMENSERVICE'],
        ['route' => 'windhager.thermentausch', 'img' => '1Windhager.webp', 'label' => 'WINDHAGER SERVICE'],
        ['route' => 'nordgas.thermentausch', 'img' => '1NordGas.webp', 'label' => 'NORDGAS SERVICE'],
    ];
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
    .hero-badge{min-width:180px !important;}
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
      .brand-grid{grid-template-columns:repeat(2,1fr);}
    }
    @media(max-width:500px){
      .brand-grid{grid-template-columns:1fr;}
    }
  </style>

  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>{{ $heroTitle }}</h1>

      @if($heroIntro)
        <p class="wolf-hero__sub">{{ $heroIntro }}</p>
      @endif

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--accent" href="tel:+4314420617"><i class="bi bi-telephone-fill"></i> JETZT ANRUFEN: +43 1 442 0617</a>
        <a class="wolf-btn wolf-btn--ghost" href="#kontakt-services"><i class="bi bi-arrow-right"></i> Anfrage senden</a>
      </div>

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
            @foreach($tocItems as $index => $item)
              <li class="toc-item">
                <a href="#{{ $item['id'] }}" class="toc-link">
                  <span class="toc-badge">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                  <span class="toc-text">{{ $item['label'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  @if(!empty($sections))
    @php($firstSection = $sections[0])
    <section class="service-section {{ !empty($firstSection['soft']) ? 'service-section--soft' : '' }}" id="{{ $firstSection['id'] }}">
      <div class="container">
        <div class="card-split {{ !empty($firstSection['reverse']) ? 'card-split--reverse' : '' }}">
          <div class="card-split__text"><div class="card-box">
            <h2>{{ $firstSection['title'] }}</h2>
            @foreach(($firstSection['paragraphs'] ?? []) as $paragraph)
              <p>{!! nl2br(e($paragraph)) !!}</p>
            @endforeach
          </div></div>
          <div class="card-split__media"><div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/' . ($firstSection['image'] ?? '1size6.webp')) }}" alt="{{ $firstSection['title'] }}" loading="lazy" decoding="async">
          </div></div>
        </div>

        @if(!empty($features))
          <div class="service-grid service-grid--2" style="margin-top:14px">
            @foreach($features as $feature)
              <article class="service-feature">
                <div class="service-feature__icon" aria-hidden="true"><i class="bi {{ $feature['icon'] ?? 'bi-tools' }}"></i></div>
                <div>
                  <h3>{{ $feature['title'] }}</h3>
                  <p>{{ $feature['body'] }}</p>
                </div>
              </article>
            @endforeach
          </div>
        @endif
      </div>
    </section>
  @endif

  @if(count($sections) > 1)
    @php($teamSection = $sections[1])
    <section class="service-section" id="team-services">
      <div class="container">
        <div class="card-split card-split--reverse">
          <div class="card-split__text"><div class="card-box">
            <h2>{{ $teamSection['title'] }}</h2>
            @foreach(($teamSection['paragraphs'] ?? []) as $paragraph)
              <p>{!! nl2br(e($paragraph)) !!}</p>
            @endforeach
            @if(!empty($benefits))
              <div class="service-stats">
                @foreach(array_slice($benefits, 0, 3) as $benefit)
                  <div class="service-stat"><div class="service-stat__num">✓</div><div class="service-stat__label">{{ $benefit }}</div></div>
                @endforeach
              </div>
            @endif
          </div></div>
          <div class="card-split__media"><div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/' . ($teamSection['image'] ?? '1size5.webp')) }}" alt="{{ $teamSection['title'] }}" loading="lazy" decoding="async">
          </div></div>
        </div>
      </div>
    </section>
  @endif

  <section class="service-section" id="leistungen-services">
    <div class="container">
      <div class="service-section__head">
        <h2>Leistungen im Überblick</h2>
        <p>{{ $page['hero_intro'] ?? '' }}</p>
      </div>
      @if(!empty($benefits))
        <div class="service-grid service-grid--2">
          @foreach($benefits as $benefit)
            <article class="service-feature">
              <div class="service-feature__icon" aria-hidden="true"><i class="bi bi-check-circle"></i></div>
              <div>
                <h3>{{ $benefit }}</h3>
                <p>{{ $benefit }}</p>
              </div>
            </article>
          @endforeach
        </div>
      @endif
    </div>
  </section>

  @foreach(array_slice($sections, 2) as $section)
    <section class="service-section {{ !empty($section['soft']) ? 'service-section--soft' : '' }}" id="{{ $section['id'] }}">
      <div class="container">
        <div class="card-split {{ !empty($section['reverse']) ? 'card-split--reverse' : '' }}">
          <div class="card-split__text"><div class="card-box">
            <h2>{{ $section['title'] }}</h2>
            @foreach(($section['paragraphs'] ?? []) as $paragraph)
              <p>{!! nl2br(e($paragraph)) !!}</p>
            @endforeach
          </div></div>
          <div class="card-split__media"><div class="service-media__box">
            <img class="service-media__img" src="{{ asset('img/' . ($section['image'] ?? '1size4.webp')) }}" alt="{{ $section['title'] }}" loading="lazy" decoding="async">
          </div></div>
        </div>
      </div>
    </section>
  @endforeach

  <section class="service-section service-section--soft" id="thermen-services">
    <div class="container">
      <div class="service-section__head">
        <h2>Thermenservice für alle Marken</h2>
        <p>Ob Vaillant, Junkers, Buderus oder Wolf – wir warten und reparieren alle gängigen Gasgeräte. Regelmäßige Wartung sorgt für Sicherheit, Effizienz und eine längere Lebensdauer Ihrer Therme.</p>
      </div>
      <div class="brand-grid">
        @foreach($brandCards as $brand)
          <a class="brand-card" href="{{ route($brand['route']) }}">
            <img src="{{ asset('img/' . $brand['img']) }}" alt="{{ $brand['label'] }}">
            <span>{{ $brand['label'] }}</span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="service-section" id="faq-services">
    <div class="container">
      <div class="service-section__head">
        <h2>{{ $page['faq_title'] ?? ('Häufige Fragen ' . $district) }}</h2>
        <p>Antworten auf die häufigsten Fragen – kurz, klar und praxisnah.</p>
      </div>
      <div class="service-faq">
        @foreach($faqItems as $item)
          <details>
            <summary>{{ $item['question'] }}</summary>
            <p>{{ $item['answer'] }}</p>
          </details>
        @endforeach
      </div>
    </div>
  </section>

  <section class="service-cta" id="kontakt-services">
    <div class="container">
      <div class="service-cta__inner">
        <div>
          <h2>{{ $contactTitle }}</h2>
          <p>{!! $contactHtml !!}</p>
          <p style="margin-top:10px"><strong><i class="bi bi-telephone-fill"></i></strong> Direkt anrufen: <a href="tel:+4314420617">+43 1 442 0617</a></p>
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
</main>
