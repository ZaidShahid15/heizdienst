@extends('layout.app')
@section('main')
@php
    $metaTitle = 'Thermenwartung & Thermenservice Wien & NÖ | Reparatur & Notdienst';
    $metaDescription = 'Professionelle Thermenwartung, Thermenservice & Reparatur in Wien und Niederösterreich. Alle Marken, transparente Preise inkl. MwSt, schnelle Hilfe & Notdienst.';
@endphp

    <!-- Owl Carousel (for mobile slider in 'Bekannt aus')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/> -->

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


        /* make hero-copy the positioning context */
.hero-copy,
.m-hero .hero-copy{
  position: relative;
}

/* banner default (desktop/tablet) */
.my-banner{
  width: 190px;
  position: absolute;
  top: 0;
  right: 0;
  transform: translate(35%, -35%); /* pushes it slightly outside corner */
  z-index: 5;
  pointer-events: none;
}
@media (max-width: 1024px){
     .my-banner{
    width: 120px;
    top: 0;
    right: 70;
    transform: translate(15%, -15%); /* less outside, so it doesn't get cut */
  }
}

/* keep it visible + clean on small screens */
@media (max-width: 768px){
  .my-banner {
        width: 169px;
        top: -106px;
        right: -70;
        transform: translate(15%, -15%);
    }

  /* give the headline a bit of space so banner never overlaps text */
  .m-hero .hero-copy h1,
  .hero .hero-copy h1{
    padding-right: 110px;
  }
}

.steps .step{
  border-radius: 16px;
  overflow: hidden;
  background: #fff;
}

.steps .stp-img img{
  width: 100%;
  /* height: 220px;        same height */
  object-fit: cover;    /* crop nicely */
  display: block;
}

@media (max-width: 768px){
  .steps .stp-img img{
    height: 200px;
  }
}

    
/* --- BEKANNT AUS: make it a slider on mobile (Owl Carousel) --- */
@media (max-width: 768px){
  .as-seen .as-seen-logos{
    display: block;
  }
  .as-seen .as-seen-logo{
    display:flex;
    align-items:center;
    justify-content:center;
    padding: 6px 0;
  }
  .as-seen .as-seen-logo img{
    width: auto;
    max-height: 34px;
  }
  .as-seen .owl-stage{
    display:flex;
    align-items:center;
  }
  .as-seen .owl-dots{
    margin-top: 10px;
  }
}

    

/* ===================== MOBILE "BEKANNT AUS" SLIDER (Owl) ===================== */
@media (max-width: 768px){
  .as-seen .as-seen-logos{
    position: relative;
    display:block;           /* owl will handle layout */
    padding: 0 44px;         /* space for nav buttons */
  }

  /* each logo item */
  .as-seen .as-seen-item{
    display:flex !important;
    align-items:center;
    justify-content:center;
    height: 48px;
  }

  .as-seen .as-seen-logo img{
    max-height: 28px;
    width: auto;
    opacity: 1;
    filter: grayscale(0);
  }

  /* NAV buttons like your reference */
  .as-seen .owl-nav{
    pointer-events:none;     /* only buttons clickable */
  }
  .as-seen .owl-nav button{
    pointer-events:auto;
    position:absolute;
    top:50%;
    transform: translateY(-50%);
    width: 34px;
    height: 34px;
    border-radius: 999px;
    background: rgba(0,0,0,.28) !important;
    border: 0 !important;
    display:flex;
    align-items:center;
    justify-content:center;
    margin: 0 !important;
    padding: 0 !important;
  }
  .as-seen .owl-nav button.owl-prev{ left: 10px; }
  .as-seen .owl-nav button.owl-next{ right: 10px; }

  .as-seen .owl-nav button span{
    font-size: 22px;
    line-height: 1;
    color: #fff;
    margin-top: -2px;
  }

  .as-seen .owl-dots{ display:none !important; }
}
/* ===================== /MOBILE "BEKANNT AUS" SLIDER (Owl) ===================== */

</style>
    
   {{-- REPLACE your <section class="m-hero" ...> with this version.
   It keeps your m-hero wrapper, but uses the SAME content structure as your .hero section
   (image + desktop badges inside image + hero-copy with bullets).
--}}
<section class="m-hero" id="m-hero">
    <div class="wrap">
        <div class="grid">

            {{-- IMAGE SIDE --}}
            <div class="hero-img m-tech">
                <img src="{{ asset('img/hero-scetion.jpeg') }}" alt="Thermenreparatur">

                <!-- BADGES (DESKTOP OVERLAY inside image) -->
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

            {{-- COPY SIDE --}}
            <div class="hero-copy">
<img src="{{ asset('img/mainiconhome.png') }}" class="my-banner" style="position: absolute;z-index:9999;"  alt="">

                <h1>Thermenwartung &amp; Thermenservice in Wien &amp; Niederösterreich</h1>
                <p>
                    Professionelle Thermenwartung Wien, Thermenservice und Reparatur für jede Therme –
                    zuverlässig in Wien, Niederösterreich und der Umgebung, durch erfahrene Installateure,
                    schnell und transparent.
                </p>

                <ul class="hero-bullets">
                    <li>
                        <svg><use href="#i-check"></use></svg>
                        Thermenwartung Wien &amp; Umgebung
                    </li>
                    <li>
                        <svg><use href="#i-check"></use></svg>
                        Alle Marken &amp; Hersteller
                    </li>
                    <li>
                        <svg><use href="#i-check"></use></svg>
                        Transparente Preise inkl. MwSt
                    </li>
                    <li>
                        <svg><use href="#i-check"></use></svg>
                        Schnelle Hilfe, Service &amp; Notdienst
                    </li>
                </ul>

                {{-- OPTIONAL: keep your old "m-badge" message, now under bullets (remove if not needed) --}}
                <div class="m-badge" style="margin-top:14px;">
                    <div class="dot">
                        <i class="bi bi-tools"></i>
                    </div>
                    <div>Unsere erfahrenen Techniker sind täglich im Einsatz, auch am Wochenende.</div>
                </div>
            </div>

        </div>
    </div>

    {{-- CTA (kept from your m-hero) --}}
    <a class="m-cta" href="tel:+4319284374">
        <svg><use href="#i-phone"></use></svg>
        Jetzt anrufen – wir helfen sofort
    </a>

    {{-- OPTIONAL: If you still want the MOBILE overlay badges too, keep this block.
       If you DON'T want duplicate badges (because they are already inside the image),
       then DELETE the whole block below.
    --}}
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

                    <div class="hero-copy position-relative">
<img src="{{ asset('img/mainiconhome.png') }}" class="my-banner" style="position: absolute;z-index:9999;"  alt="">

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

       <!-- BEKANNT AUS (DESKTOP + MOBILE CAROUSEL) -->
<section class="as-seen" aria-label="Bekannt aus">
  <div class="container">
    <div class="as-seen-row">
      <h2 class="as-seen-title">BEKANNT AUS</h2>

      <div class="as-seen-slider" id="asSeenSlider">
        <button class="as-seen-btn as-seen-prev" type="button" aria-label="Previous">
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M15 6l-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>

        <div class="as-seen-viewport">
          <div class="as-seen-track" id="asSeenTrack">
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/Aj0ohdrCqIDq51KTZbflsVSnyg.webp?scale-down-to=1024" alt="ORF">
            </a>
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/6XAaIjZdEa80WhL7h7kwuRTA.webp?scale-down-to=1024" alt="Kurier">
            </a>
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/5iqByNcOVDmWk2oQV9BInbXp6w.webp?scale-down-to=1024" alt="Der Standard">
            </a>
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/DdNjJ15OOHoRVb88Uv9kNQp7zqY.webp?scale-down-to=1024" alt="Die Presse">
            </a>
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/Pyq6n8jcA6V3xqurte7I88cBU5U.webp?scale-down-to=1024" alt="Kleine Zeitung">
            </a>
            <a class="as-seen-item" href="#" target="_blank" rel="noopener">
              <img src="https://framerusercontent.com/images/9O0tMXl2NeMgsnUz4Nrw9efV5k.webp" alt="Gewinn">
            </a>
          </div>
        </div>

        <button class="as-seen-btn as-seen-next" type="button" aria-label="Next">
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<style>
    .as-seen { padding: 18px 0; }
.as-seen-row{
  display:flex;
  align-items:center;
  gap:16px;
}

.as-seen-title{
  margin:0;
  font-weight:900;
  letter-spacing:.06em;
  font-size:22px;
  white-space:nowrap;
}

.as-seen-slider{
  position:relative;
  flex:1 1 auto;
  min-width:0;
  padding: 0 54px; /* space for buttons */
}

.as-seen-viewport{
  overflow:hidden;
}

.as-seen-track{
  display:flex;
  /* align-items:center; */
  gap: 26px;
  will-change: transform;
  /* transition: transform .28s ease; */
}

.as-seen-item{
  flex: 0 0 auto;
  display:flex;
  align-items:center;
  justify-content:center;
  height: 52px;
}

.as-seen-item img{
  max-height: 34px;
  width:auto;
  display:block;
}

/* Buttons (same look as reference) */
.as-seen-btn{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  width:40px;
  height:40px;
  border-radius:999px;
  border:0;
  background: rgba(0,0,0,.28);
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  padding:0;
  cursor:pointer;
  z-index:5;
}
.as-seen-prev{ left:8px; }
.as-seen-next{ right:8px; }
.as-seen-btn svg{ width:20px; height:20px; }

@media (max-width:768px){
  .as-seen-title{ font-size:18px; }
  .as-seen-slider{ padding: 0 46px; }
  .as-seen-item{ height: 48px; }
  .as-seen-item img{ max-height: 28px; }
}

</style>




        <!-- Intro + Form
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
        </section> -->

<!-- ===================== INTRO + BOOKING (REDESIGNED) ===================== -->
<section class="service-intro">
  <div class="container">
    <div class="service-intro-grid">

      <!-- LEFT CONTENT -->
      <div class="service-intro-content">
        <span class="service-kicker">Thermenservice Wien & NÖ</span>

        <h2>
          Ihr zuverlässiger Partner für<br>
          Thermenwartung & Reparatur
        </h2>

        <p class="service-lead">
          Professionelle Wartung, schnelle Reparatur und transparente Preise –
          für Wohnungen, Häuser und Gewerbe in Wien & Niederösterreich.
        </p>

        <div class="service-features">
          <div class="service-feature">
            <div class="icon">✓</div>
            <div>
              <strong>Alle Marken & Hersteller</strong>
              <span>Vaillant, Junkers, Baxi, Buderus uvm.</span>
            </div>
          </div>

          <div class="service-feature">
            <div class="icon">✓</div>
            <div>
              <strong>Transparente Preise</strong>
              <span>Fixpreise inkl. MwSt – keine versteckten Kosten</span>
            </div>
          </div>

          <div class="service-feature">
            <div class="icon">✓</div>
            <div>
              <strong>Schnelle Termine</strong>
              <span>Flexible Wunschtermine & Notdienst möglich</span>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT FORM -->
      <div class="service-booking-card">
        <div class="booking-head">
          <h3>Online Termin vereinbaren</h3>
          <p>Unverbindliche Anfrage in wenigen Sekunden</p>
        </div>

        <form class="booking-form">
          <input type="text" placeholder="Marke z.B. Vaillant" required>

          <div class="form-row">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="E-Mail" required>
          </div>

          <div class="form-row">
            <input type="tel" placeholder="Telefonnummer" required>
            <input type="text" placeholder="Wunschtermin">
          </div>

          <input type="text" placeholder="Straße, PLZ, Ort" required>

          <textarea placeholder="Ihre Nachricht"></textarea>

          <button type="submit" class="booking-btn">
            Jetzt Thermenwartung anfragen
          </button>

          <span class="form-note">
            ✓ Schnell · ✓ Sicher · ✓ Unverbindlich
          </span>
        </form>
      </div>

    </div>
  </div>
</section>


        <style>
.service-intro{
  padding:80px 0;
  background:#f7f9fb;
}

.service-intro-grid{
  display:grid;
  grid-template-columns: 1.1fr 1fr;
  gap:50px;
  align-items:center;
}

.service-kicker{
  font-weight:700;
  font-size:14px;
  text-transform:uppercase;
  letter-spacing:.08em;
  color:#EE7C20;
  display:block;
  margin-bottom:12px;
}

.service-intro-content h2{
  font-size:34px;
  font-weight:800;
  line-height:1.2;
  margin-bottom:18px;
}

.service-lead{
  font-size:17px;
  color:#555;
  margin-bottom:28px;
  max-width:520px;
}

.service-features{
  display:flex;
  flex-direction:column;
  gap:18px;
}

.service-feature{
  display:flex;
  gap:14px;
  align-items:flex-start;
}

.service-feature .icon{
  width:28px;
  height:28px;
  border-radius:8px;
  background:#EE7C20;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-weight:700;
}

.service-feature strong{
  display:block;
  font-size:15px;
}

.service-feature span{
  font-size:14px;
  color:#666;
}

/* BOOKING CARD */
.service-booking-card{
  background:#fff;
  padding:28px;
  border-radius:18px;
  box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.booking-head h3{
  font-size:20px;
  font-weight:700;
  margin-bottom:4px;
}

.booking-head p{
  font-size:14px;
  color:#666;
  margin-bottom:20px;
}

.booking-form input,
.booking-form textarea{
  width:100%;
  border-radius:12px;
  border:1px solid #e2e6ea;
  padding:12px 14px;
  margin-bottom:14px;
  font-size:14px;
}

.booking-form textarea{
  resize:none;
  height:100px;
}

.form-row{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:12px;
}

.booking-btn{
  width:100%;
  background:#EE7C20;
  color:#fff;
  border:0;
  padding:14px;
  border-radius:12px;
  font-weight:700;
  cursor:pointer;
  transition:.2s;
}

.booking-btn:hover{
  background:#e67f0f;
}

.form-note{
  display:block;
  margin-top:12px;
  font-size:12px;
  color:#777;
  text-align:center;
}

/* Responsive */
@media (max-width:992px){
  .service-intro-grid{
    grid-template-columns:1fr;
  }
  .form-row{
    grid-template-columns:1fr;
  }
}
</style>




        <!-- Steps -->
        <section class="steps">
  <div class="container">
    <h2 class="text-center mb-4">In 3 Schritten zur funktionierenden Therme</h2>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-12 col-md-4">
        <article class="step h-100">
          <div class="step-top">
            <div class="step-num">1</div>
            <div class="step-title">
              Thermenstörung oder Heizungsausfall?
              Schneller Notdienst bei Heizungsausfällen
            </div>
          </div>
          <div class="stp-img">
            <img src="{{ asset('img/1st-step.jpeg') }}" class="img-fluid" alt="Heizungsausfall Notdienst">
          </div>
        </article>
      </div>

      <!-- Step 2 -->
      <div class="col-12 col-md-4">
        <article class="step h-100">
          <div class="step-top">
            <div class="step-num">2</div>
            <div class="step-title">
              Kontaktaufnahme mit unserem Thermendienst – rasche Soforthilfe garantiert in Wien &amp; Niederösterreich
            </div>
          </div>
          <div class="stp-img">
            <img src="{{ asset('img/secondstep.jpeg') }}" class="img-fluid" alt="Anruf beim Thermenservice">
          </div>
        </article>
      </div>

      <!-- Step 3 -->
      <div class="col-12 col-md-4">
        <article class="step h-100">
          <div class="step-top">
            <div class="step-num">3</div>
            <div class="step-title">
              Fachgerechter Einsatz vor Ort durch erfahrene Installateure
              professioneller Thermenservice in Wien
            </div>
          </div>
          <div class="stp-img">
            <img src="{{ asset('img/thridstep.jpeg') }}" class="img-fluid" alt="Thermenservice Wien">
          </div>
        </article>
      </div>
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
    <div class="cta-wrap" id="kontakt">   <!-- ✅ this id is for header menu link -->
      
      <div class="cta-text">
        <h2>Jetzt Thermenwartung in Wien &amp; Niederösterreich sichern</h2>
        <p>
          Setzen Sie auf Sicherheit, Zuverlässigkeit und einen professionellen Thermenservice – für
          jede Jahreszeit und jedes Gerät. Unsere erfahrenen Experten sind schnell vor Ort und sorgen
          dafür, dass Ihre Therme effizient und sicher funktioniert.
        </p>

        <div class="cta-actions">
          <a class="cta-btn" href="#kontakt">Jetzt Termin anfragen</a>
          <a class="cta-link" href="#faq-thermenwartung">Fragen ansehen</a>
        </div>
      </div>

      <div class="cta-media">
        <div class="cta-form-card">
          <div class="cta-form-title">Online Anfrage</div>

          <form class="service-cta__form" action="#" method="post">
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

            <label class="service-field">
              <span>Nachricht</span>
              <textarea name="message" rows="4" placeholder="Thermenmodell, Problem, Wunschzeit..." required></textarea>
            </label>

            <button class="service-btn service-btn--accent service-btn--full" type="submit">
              Anfrage senden
            </button>

            <p class="service-fineprint">Mit dem Absenden stimmen Sie der Kontaktaufnahme zu.</p>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>


        <style>

/* CTA Layout */
#cta-thermenwartung .cta-wrap{
  display:flex;
  gap:24px;
  align-items:stretch;
  justify-content:space-between;
  border-radius:18px;
  padding:28px;
  background:#114359;
  color:#fff;
  overflow:hidden;
  box-shadow:0 10px 30px rgba(0,0,0,.12);
}

#cta-thermenwartung .cta-text{
  flex: 1 1 56%;
  min-width: 280px;
}

#cta-thermenwartung .cta-media{
  flex: 1 1 44%;
  min-width: 280px;
  height:auto;                 /* ✅ IMPORTANT */
  border-radius:16px;
  overflow:visible;            /* ✅ IMPORTANT */
  background:transparent;      /* form card will handle bg */
}

/* Form Card */
#cta-thermenwartung .cta-form-card{
  background: rgba(255,255,255,.08);
  border: 1px solid rgba(255,255,255,.10);
  border-radius: 16px;
  padding: 18px;
  backdrop-filter: blur(6px);
}

#cta-thermenwartung .cta-form-title{
  font-weight: 800;
  margin-bottom: 12px;
  font-size: 16px;
}

/* Form fields */
#cta-thermenwartung .service-cta__form label{
  display:block;
  width:100%;
}

#cta-thermenwartung .service-cta__form span{
  display:block;
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 6px;
  opacity: .95;
}

#cta-thermenwartung .service-formrow{
  display:grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}

#cta-thermenwartung .service-cta__form input,
#cta-thermenwartung .service-cta__form textarea{
  width:100%;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,.18);
  background: rgba(0,0,0,.18);
  color: #fff;
  padding: 11px 12px;
  outline: none;
}

#cta-thermenwartung .service-cta__form input::placeholder,
#cta-thermenwartung .service-cta__form textarea::placeholder{
  color: rgba(255,255,255,.65);
}

#cta-thermenwartung .service-cta__form input:focus,
#cta-thermenwartung .service-cta__form textarea:focus{
  border-color: rgba(254,143,19,.9);
  box-shadow: 0 0 0 4px rgba(254,143,19,.20);
}

#cta-thermenwartung .service-field{
  margin-top: 12px;
  display:block;
}

#cta-thermenwartung .service-btn--full{
  width:100%;
  margin-top: 12px;
  border:0;
  border-radius: 12px;
  padding: 12px 14px;
  font-weight: 800;
  cursor:pointer;
}

#cta-thermenwartung .service-btn--accent{
  background:#FE8F13;
  color:#fff;
}

#cta-thermenwartung .service-fineprint{
  margin: 10px 0 0;
  font-size: 12px;
  opacity: .85;
}

/* Responsive */
@media (max-width: 992px){
  #cta-thermenwartung .cta-wrap{
    flex-direction:column;
    padding:22px;
  }
  #cta-thermenwartung .service-formrow{
    grid-template-columns: 1fr;  /* ✅ stack fields */
  }
}
html{ scroll-behavior:smooth; }
/* ✅ FORCE CTA form to show full height (override old rules) */
#cta-thermenwartung .cta-media{
  height: auto !important;
  overflow: visible !important;
}

#cta-thermenwartung .cta-wrap{
  overflow: visible !important; /* if old css has overflow:hidden and clips */
}


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
                background: #FE8F13;
                color: white;
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
                height: 220px;
                /* min-height: 220px; */
            }

            #cta-thermenwartung .cta-media img {
                width: 100%;
                height: 100%;
                /*  ; */
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
                    height: 190px;
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

    <!-- Owl Carousel JS (mobile slider for 'Bekannt aus') -->
    <script>
      (function () {
        function loadScript(src, cb) {
          var s = document.createElement('script');
          s.src = src;
          s.async = true;
          s.onload = cb;
          document.head.appendChild(s);
        }

        function ensureJquery(next) {
          if (window.jQuery) return next();
          loadScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', next);
        }

        function ensureOwl(next) {
          ensureJquery(function () {
            if (window.jQuery && window.jQuery.fn && window.jQuery.fn.owlCarousel) return next();
            loadScript('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', next);
          });
        }

        function destroyOwl($el) {
          // If not initialized, nothing to do
          if (!$el.hasClass('owl-loaded')) return;

          $el.trigger('destroy.owl.carousel');
          $el.removeClass('owl-carousel owl-loaded owl-theme');

          // unwrap Owl markup (stage-outer -> stage -> item)
          $el.find('.owl-stage-outer').children().unwrap();
          $el.find('.owl-stage').children().unwrap();
          $el.find('.owl-item').children().unwrap();

          // remove controls
          $el.find('.owl-nav, .owl-dots').remove();
        }

        function initAsSeen() {
          var $ = window.jQuery;
          if (!$) return;

          var $el = $('.js-as-seen-carousel');
          if (!$el.length) return;

          var isMobile = window.innerWidth <= 768;

          if (isMobile) {
            if ($el.hasClass('owl-loaded')) return;

            $el.addClass('owl-carousel owl-theme');
            $el.owlCarousel({
              loop: true,
              margin: 18,
              nav: false,
              dots: true,
              autoplay: true,
              autoplayTimeout: 2500,
              autoplayHoverPause: true,
              responsive: {
                0: { items: 2 },
                480: { items: 3 },
                640: { items: 4 }
              }
            });
          } else {
            destroyOwl($el);
          }
        }

        function debounce(fn, wait) {
          var t;
          return function () {
            clearTimeout(t);
            t = setTimeout(fn, wait);
          };
        }

        ensureOwl(function () {
          document.addEventListener('DOMContentLoaded', function () {
            initAsSeen();
            window.addEventListener('resize', debounce(initAsSeen, 200));
          });
        });
      })();
    </script>

<!-- Owl Carousel (mobile only) -->
  <!-- <script>
(function(){
  const slider = document.getElementById('asSeenSlider');
  const track  = document.getElementById('asSeenTrack');
  if(!slider || !track) return;

  // Clone items for seamless looping (mobile only)
  function setupLoop(){
    if(!window.matchMedia('(max-width: 768px)').matches) return;

    // Avoid double setup
    if(track.dataset.loopReady === '1') return;
    track.dataset.loopReady = '1';

    const items = Array.from(track.children);
    const cloneHead = items.map(n => n.cloneNode(true));
    const cloneTail = items.map(n => n.cloneNode(true));

    cloneHead.forEach(n => { n.dataset.clone="1"; track.appendChild(n); });
    cloneTail.reverse().forEach(n => { n.dataset.clone="1"; track.insertBefore(n, track.firstChild); });

    // Jump to the "real" first set (middle)
    requestAnimationFrame(() => {
      const jumpTo = items[0].offsetLeft; // after prep, offsetLeft points to middle area
      track.scrollLeft = jumpTo;
    });
  }

  function getStep(){
    // step = one item width + gap
    const first = track.querySelector('.as-seen-item');
    if(!first) return 120;
    const style = getComputedStyle(track);
    const gap = parseFloat(style.columnGap || style.gap || 18);
    return first.getBoundingClientRect().width + gap;
  }

  function move(dir){
    const step = getStep();
    track.scrollBy({ left: dir * step, behavior: 'smooth' });
  }

  // Seamless loop correction
  function handleLoop(){
    if(!window.matchMedia('(max-width: 768px)').matches) return;
    const items = track.querySelectorAll('.as-seen-item:not([data-clone="1"])');
    if(!items.length) return;

    const firstReal = items[0];
    const lastReal  = items[items.length - 1];

    const leftEdge  = track.scrollLeft;
    const rightEdge = track.scrollLeft + track.clientWidth;

    // If user reaches far left (into clones), jump to same position in real set
    if(leftEdge <= firstReal.offsetLeft - track.clientWidth){
      track.scrollLeft = lastReal.offsetLeft;
    }

    // If user reaches far right (into clones), jump back
    if(rightEdge >= lastReal.offsetLeft + lastReal.offsetWidth + track.clientWidth){
      track.scrollLeft = firstReal.offsetLeft;
    }
  }

  // Buttons
  slider.querySelector('.as-seen-prev')?.addEventListener('click', () => move(-1));
  slider.querySelector('.as-seen-next')?.addEventListener('click', () => move(1));

  // Init loop on load + resize
  setupLoop();
  track.addEventListener('scroll', () => { window.requestAnimationFrame(handleLoop); }, { passive:true });

  window.addEventListener('resize', () => {
    // Reset loop when switching desktop/mobile
    if(!window.matchMedia('(max-width: 768px)').matches){
      // remove clones if exist
      [...track.querySelectorAll('[data-clone="1"]')].forEach(n => n.remove());
      delete track.dataset.loopReady;
      track.scrollLeft = 0;
    } else {
      setupLoop();
    }
  }, { passive:true });
})();
</script> -->

<script>
(function(){
  const slider = document.getElementById('asSeenSlider');
  const track  = document.getElementById('asSeenTrack');
  if(!slider || !track) return;

  function getStep(){
    const first = track.querySelector('.as-seen-item');
    if(!first) return 200;
    const gap = parseFloat(getComputedStyle(track).gap || 26);
    return first.getBoundingClientRect().width + gap;
  }

  function move(dir){
    // move by ~3 items on desktop, ~2 items on mobile
    const step = getStep();
    const perClick = window.matchMedia('(max-width: 768px)').matches ? 2 : 3;
    track.scrollBy({ left: dir * step * perClick, behavior: 'smooth' });
  }

  slider.querySelector('.as-seen-prev')?.addEventListener('click', () => move(-1));
  slider.querySelector('.as-seen-next')?.addEventListener('click', () => move(1));

  // Keyboard support (optional nice)
  track.addEventListener('keydown', (e) => {
    if(e.key === 'ArrowLeft') move(-1);
    if(e.key === 'ArrowRight') move(1);
  });
})();
</script>
<script>
(function(){
  const slider = document.getElementById('asSeenSlider');
  const track  = document.getElementById('asSeenTrack');
  if(!slider || !track) return;

  const prevBtn = slider.querySelector('.as-seen-prev');
  const nextBtn = slider.querySelector('.as-seen-next');

  const AUTO_SPEED = 0.5; // smaller = slower
  let position = 0;
  let animationFrame;

  // Clone items for seamless infinite loop
  function setupClones(){
    const items = Array.from(track.children);
    items.forEach(item => {
      const clone = item.cloneNode(true);
      track.appendChild(clone);
    });
  }

  function getTrackWidth(){
    return track.scrollWidth / 2;
  }

  function animate(){
    position -= AUTO_SPEED;

    if(Math.abs(position) >= getTrackWidth()){
      position = 0; // seamless reset
    }

    track.style.transform = `translateX(${position}px)`;
    animationFrame = requestAnimationFrame(animate);
  }

  function stop(){
    cancelAnimationFrame(animationFrame);
  }

  function start(){
    stop();
    animate();
  }

  function move(dir){
    position += dir * 200; // manual step
  }

  prevBtn?.addEventListener('click', () => move(1));
  nextBtn?.addEventListener('click', () => move(-1));

  slider.addEventListener('mouseenter', stop);
  slider.addEventListener('mouseleave', start);

  // Init
  setupClones();
  start();

})();
</script>


@endsection