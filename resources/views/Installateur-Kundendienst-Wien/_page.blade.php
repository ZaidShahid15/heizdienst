@extends('layout.app')

@section('main')
@php
    $metaTitle = $page['meta_title'] ?? $page['hero_title'];
    $metaDescription = $page['meta_description'] ?? $page['hero_intro'];
@endphp

@push('meta')
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
@endpush

<style>
  .ikdw-section-copy p:last-child,
  .ikdw-feature p:last-child {
    margin-bottom: 0;
  }

  .ikdw-feature-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
  }

  .ikdw-feature {
    display: flex;
    gap: 12px;
    padding: 18px;
    border: 1px solid rgba(24, 64, 72, .12);
    border-radius: 18px;
    background: #fff;
  }

  .ikdw-feature__icon {
    width: 44px;
    height: 44px;
    flex: 0 0 auto;
    display: grid;
    place-items: center;
    border-radius: 14px;
    background: rgba(251, 154, 27, .18);
    color: #184048;
    font-size: 18px;
  }

  .ikdw-checklist {
    margin: 0;
    padding-left: 18px;
  }

  .ikdw-checklist li + li {
    margin-top: 10px;
  }

  .ikdw-split {
    display: grid;
    grid-template-columns: 1.08fr .92fr;
    gap: 18px;
    align-items: stretch;
  }

  .ikdw-split--reverse {
    grid-template-columns: .92fr 1.08fr;
  }

  .ikdw-split__text,
  .ikdw-split__media {
    display: flex;
  }

  .ikdw-box {
    width: 100%;
    background: #fff;
    border: 1px solid rgba(24, 64, 72, .12);
    border-radius: 22px;
    padding: 20px;
    box-shadow: 0 18px 50px rgba(0, 0, 0, .08);
  }

  .ikdw-box h2 {
    margin: 0 0 10px;
    color: #184048;
  }

  .ikdw-media-box {
    width: 100%;
    overflow: hidden;
    border-radius: 22px;
    border: 1px solid rgba(24, 64, 72, .12);
    box-shadow: 0 18px 50px rgba(0, 0, 0, .10);
    background: #f4f7f7;
  }

  .ikdw-media-box img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
  }

  @media (max-width: 980px) {
    .ikdw-feature-grid,
    .ikdw-split,
    .ikdw-split--reverse {
      grid-template-columns: 1fr;
    }
  }
</style>

<main>
  <section class="wolf-hero" id="hero-services">
    <div class="wolf-hero__inner container">
      <h1>
        {{ $page['hero_title'] }}<br>
        <span style="color:#FB9A1B;">{{ $page['hero_intro'] }}</span>
      </h1>

      <div class="wolf-hero__sub">
        <ul class="hero-checklist-center">
          @foreach ($page['hero_bullets'] as $heroBullet)
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>{{ $heroBullet }}</span>
            </li>
          @endforeach
        </ul>
      </div>

      <div class="wolf-hero__actions">
        <a class="wolf-btn wolf-btn--red" href="tel:+4314420617">
          <i class="bi bi-telephone-fill"></i>
          JETZT ANRUFEN: +431 442 0617
        </a>

        <a class="wolf-btn wolf-btn--ghost" href="#kontakt-services">
          <i class="bi bi-arrow-right"></i>
          Anfrage senden
        </a>
      </div>

      <div class="hero-trust">
        <div class="hero-first-block">
          <div class="rating d-flex gap-3">
            <strong class="d-flex gap-3 align-items-center">
              <img src="{{ asset('img/google-icon.svg') }}" style="width:20px" alt=""> Google
            </strong>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>

          <div class="rating">
            4,9/5 (160+ Bewertungen)
          </div>
        </div>

        <div class="badges">
          <div>
            <i class="bi bi-patch-check-fill text-warning"></i>
            Geprüfte Experten
          </div>
          <div>
            <i class="bi bi-shield-check text-warning"></i>
            100% Zufrieden
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="toc-wrap" aria-label="Inhaltsverzeichnis">
    <div class="service-container">
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
            @foreach ($page['toc'] as $index => $toc)
              <li class="toc-item">
                <a href="#{{ $toc['id'] }}" class="toc-link">
                  <span class="toc-badge">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                  <span class="toc-text">{{ $toc['label'] }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  @foreach ($page['sections'] as $section)
    <section class="service-section{{ !empty($section['soft']) ? ' service-section--soft' : '' }}" id="{{ $section['id'] }}">
      <div class="service-container">
        <div class="ikdw-split{{ !empty($section['reverse']) ? ' ikdw-split--reverse' : '' }}">
          <div class="ikdw-split__text">
            <div class="ikdw-box ikdw-section-copy">
              <h2>{{ $section['title'] }}</h2>
              @foreach ($section['paragraphs'] as $paragraph)
                <p>{{ $paragraph }}</p>
              @endforeach
            </div>
          </div>

          <div class="ikdw-split__media">
            <div class="ikdw-media-box">
              <img src="{{ asset('img/' . $section['image']) }}" alt="{{ $section['title'] }}" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </section>
  @endforeach

  <section class="service-section" id="leistungen-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>Leistungen im Überblick</h2>
        <p>Die Leistungsblöcke werden direkt aus Ihren Tabellenzeilen übernommen und im gleichen Seitenaufbau ausgegeben.</p>
      </div>

      <div class="ikdw-feature-grid">
        @foreach ($page['features'] as $feature)
          <article class="ikdw-feature">
            <div class="ikdw-feature__icon" aria-hidden="true">
              <i class="bi {{ $feature['icon'] }}"></i>
            </div>
            <div>
              <h3>{{ $feature['title'] }}</h3>
              <p>{{ $feature['body'] }}</p>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="service-section service-section--soft" id="vorteile-services">
    <div class="service-container">
      <div class="ikdw-split">
        <div class="ikdw-split__text">
          <div class="ikdw-box">
            <h2>{{ $page['benefits_title'] }}</h2>
            <ul class="ikdw-checklist">
              @foreach ($page['benefits'] as $benefit)
                <li>{{ $benefit }}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="ikdw-split__media">
          <div class="ikdw-media-box">
            <img src="{{ asset('img/' . $page['benefits_image']) }}" alt="{{ $page['benefits_title'] }}" loading="lazy" decoding="async">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-section" id="faq-services">
    <div class="service-container">
      <div class="service-section__head">
        <h2>{{ $page['faq_title'] }}</h2>
        <p>Die wichtigsten Antworten aus Ihrer Tabelle, direkt als FAQ ausgegeben.</p>
      </div>

      <div class="service-faq">
        @foreach ($page['faq_items'] as $faq)
          <details>
            <summary>{{ $faq['question'] }}</summary>
            <p>{{ $faq['answer'] }}</p>
          </details>
        @endforeach
      </div>
    </div>
  </section>

  @include('layout.contact', [
      'id' => 'kontakt-services',
      'title' => $page['contact_title'],
      'text' => $page['contact_html'],
      'btnText' => 'Kontaktieren Sie Uns',
      'btnLink' => 'tel:+4314420617',
      'btnAccent' => true,
      'textareaPlaceholder' => 'Beschreiben Sie Ihr Anliegen in ' . $page['district'] . ' Wien',
  ])
</main>

<script>
  (function(){
    var tocCard = document.getElementById('tocCard');
    var tocToggle = document.getElementById('tocToggle');
    var tocHead = document.getElementById('tocHead');

    function setExpanded(isExpanded){
      if (!tocCard || !tocToggle) return;
      tocToggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      tocCard.classList.toggle('is-collapsed', !isExpanded);

      var svg = tocToggle.querySelector('svg');
      if (svg){
        svg.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
      }
    }

    setExpanded(true);

    if (tocToggle){
      tocToggle.addEventListener('click', function(){
        var expanded = tocToggle.getAttribute('aria-expanded') === 'true';
        setExpanded(!expanded);
      });
    }

    if (tocHead && tocToggle){
      tocHead.addEventListener('click', function(e){
        if (e.target && (e.target.id === 'tocToggle' || e.target.closest('#tocToggle'))) return;
        tocToggle.click();
      });

      tocHead.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          tocToggle.click();
        }
      });
    }
  })();
</script>
@endsection
