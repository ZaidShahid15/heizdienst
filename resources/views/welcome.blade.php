<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thermendienst – Thermenwartung Wien & NÖ</title>

    <!-- Font close to Elementor kit used (Raleway) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link
  href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"
  rel="stylesheet"
/>
    <style>
        :root {
            --font: "Raleway", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;

            /* HEIZDIENST screenshot palette */
            --teal-900: #184048;
            /* main dark teal background */
            --teal-800: #306070;
            /* slightly lighter teal */
            --teal-700: #35606e;
            /* hover/secondary teal */
            --teal-200: #d8eef4;

            --orange-600: #ee7c20;
            /* main CTA orange */
            --orange-700: #e06e00;
            /* hover orange */

            /* Keep these names (used across your desktop CSS),
     but make them follow the HEIZDIENST scheme */
            --red-600: var(--orange-600);
            --blue-700: var(--orange-600);

            --text: #16222b;
            --muted: #5c6b75;
            --bg: #ffffff;
            --line: #e6eaee;
            --shadow: 0 10px 26px rgba(16, 24, 40, .12);
            --radius: 14px;

            --container: 1180px;
            --mobilebar: 64px;
        }
.m-iconbtn img{
  width: 40px;
filter: brightness(1.05);
}

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            font-family: var(--font);
            color: var(--text);
            background: linear-gradient(180deg, #f7f8fa 0%, #ffffff 40%);
            padding-top: 0; /* Remove padding as header is fixed */
        }

        img {
            max-width: 100%;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .container {
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 18px
        }

        /* ---------- FIXED HEADER CONTAINER ---------- */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            background: #fff;
        }

        /* ---------- Top bars (desktop) ---------- */
        .topstrip {
            background: var(--teal-900);
            color: #fff;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: .2px;
            width: 100%;
        }

        .topstrip .container {
            display: flex;
            gap: 18px;
            align-items: center;
            justify-content: flex-end;
            padding: 8px 18px;
        }

        .topstrip .pill {
            display: flex;
            align-items: center;
            gap: 8px;
            opacity: .95;
        }

        .topstrip svg {
            width: 18px;
            height: 18px;
            fill: #fff
        }

        /* ---------- Main Header ---------- */
        .main-header {
            width: 100%;
            border-bottom: 1px solid var(--line);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            gap: 14px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .brand img {
            height: 60px;
            width: 240px
        }

        nav {
            display: flex;
            align-items: center;
            gap: 22px
        }

        nav a {
            font-size: 14px;
            font-weight: 700;
            color: #24323c;
            padding: 10px 2px;
            position: relative;
        }

        nav a.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 2px;
            background: var(--red-600);
            border-radius: 2px;
        }

        .burger {
            display: none;
            border: 1px solid var(--line);
            background: #fff;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
        }

        .burger svg {
            width: 22px;
            height: 22px;
            fill: #22313a
        }

        /* ---------- Hero (desktop) ---------- */
        .hero {
            padding: 26px 0 18px;
            background: #fff;
            margin-top: 120px; /* Add margin to account for fixed header */
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 22px;
            align-items: stretch;
        }

        .hero-img {
            border-radius: 18px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: #0e2f3a;
        }

        .hero-img img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .hero-copy {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 14px;
        }

        .hero-copy h1 {
            margin: 0;
            font-size: 34px;
            line-height: 1.12;
            letter-spacing: -.2px;
        }

        .hero-copy p {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.6;
            max-width: 52ch;
        }

        .hero-bullets {
            display: flex;
            flex-wrap: wrap;
            gap: 10px 18px;
            margin-top: 4px;
            padding: 0;
            list-style: none;
        }

        .hero-bullets li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            color: #25323b;
            font-size: 14px;
        }

        .hero-bullets svg {
            width: 18px;
            height: 18px;
            fill: var(--red-600)
        }

        .brand-row {
            padding: 18px 0 6px;
            background: #fff;
        }

        .logos {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 10px;
            align-items: center;
            opacity: .95;
        }

        .logos img {
            width: 100%;
            height: 40px;
            object-fit: contain;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 6px 10px;
        }

        /* ---------- Main 2-col: text + form ---------- */
        .intro {
            padding: 28px 0;
            background: #fff;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 22px;
            align-items: start;
        }

        .intro h2 {
            margin: 0 0 10px;
            font-size: 28px;
            line-height: 1.2;
        }

        .intro h2+h3 {
            margin: 0 0 12px;
            font-size: 20px;
            font-weight: 800;
            color: #1f2b33;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 12px 0 14px;
            color: #1f2b33;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: var(--line);
        }

        .divider .icon {
            width: 38px;
            height: 38px;
            border-radius: 999px;
            display: grid;
            place-items: center;
            border: 1px solid var(--line);
            background: #fff;
            box-shadow: 0 6px 16px rgba(16, 24, 40, .08);
        }

        .divider svg {
            width: 18px;
            height: 18px;
            fill: #22313a
        }

        .prose {
            color: var(--muted);
            line-height: 1.75;
            font-size: 15px;
        }

        .prose b {
            color: #1f2b33
        }

        .card {
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: var(--shadow);
            background: #fff;
            overflow: hidden;
        }

        .card-head {
            padding: 16px 16px 0;
        }

        .card-head .kicker {
            font-weight: 800;
            color: #1f2b33;
            font-size: 14px;
            margin: 0 0 10px;
        }

        .form {
            padding: 16px;
            display: grid;
            gap: 10px;
        }

        .field-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }

        .field-row.two {
            grid-template-columns: 1fr 1fr;
        }

        .input,
        textarea,
        select {
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .22);
            border-radius: 8px;
            height: 44px;
            padding: 0 12px;
            font-family: var(--font);
            font-size: 14px;
            outline: none;
            background: #fff;
        }

        textarea {
            height: 110px;
            padding: 10px 12px;
            resize: vertical;
        }

        .btn {
            height: 44px;
            border: none;
            border-radius: 8px;
            background: var(--blue-700);
            color: #fff;
            font-weight: 800;
            font-family: var(--font);
            font-size: 15px;
            cursor: pointer;
            transition: transform .06s ease, filter .2s ease;
        }

        .btn:active {
            transform: translateY(1px)
        }

        .btn:hover {
            filter: brightness(1.06)
        }

        /* ---------- Steps ---------- */
        .steps {
            padding: 22px 0 10px;
            background: #fff;
        }

        .steps h2 {
            margin: 0 0 14px;
            font-size: 26px;
            text-align: center;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .step {
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 22px rgba(16, 24, 40, .08);
        }

        .step-top {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 14px 10px;
        }

        .step-num {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: var(--red-600);
            color: #fff;
            font-weight: 900;
            display: grid;
            place-items: center;
            flex: 0 0 auto;
        }

        .step-title {
            font-weight: 900;
            margin-top: 2px;
            line-height: 1.2;
            font-size: 15px;
        }

        .step img {
            width: 100%;
            height: 180px;
            object-fit: cover
        }

        /* ---------- Why maintenance ---------- */
        .why {
            padding: 26px 0;
            background: #f6f7f9;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .why h3 {
            margin: 0 0 10px;
            font-size: 22px;
        }

        .why .block {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0 10px 22px rgba(16, 24, 40, .06);
        }

        .why h4 {
            margin: 14px 0 8px;
            font-size: 16px;
        }

        .why p {
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
            font-size: 14.5px
        }

        /* ---------- Brand spotlight (Vaillant / Junkers) ---------- */
        .spotlight {
            padding: 28px 0;
            background: #fff;
        }

        .spotlight+.spotlight {
            border-top: 1px solid var(--line)
        }

        .spot-head {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            align-items: center;
        }

        .spot-text h2 {
            margin: 0 0 10px;
            font-size: 26px;
        }

        .spot-text p {
            margin: 0 0 14px;
            color: var(--muted);
            line-height: 1.75;
            font-size: 15px;
        }

        .spot-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0 12px;
        }

        .spot-brand img {
            height: 44px;
            width: auto
        }

        .cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            padding: 0 18px;
            border-radius: 10px;
            font-weight: 900;
            background: #0f6f4c;
            color: #fff;
            box-shadow: 0 12px 22px rgba(16, 24, 40, .10);
        }

        .cta.blue {
            background: #0c5aa6
        }

        .spot-img {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            background: #f3f6f8;
        }

        .spot-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* padding: 12px; */
}

        .features {
            margin-top: 18px;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px;
        }

        .feat {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 12px 12px 14px;
            background: #fff;
            box-shadow: 0 10px 18px rgba(16, 24, 40, .06);
        }

        .feat .n {
            width: 28px;
            height: 28px;
            border-radius: 10px;
            border: 1px solid var(--line);
            display: grid;
            place-items: center;
            font-weight: 900;
            margin-bottom: 8px;
            background: #fff;
        }

        .feat h4 {
            margin: 0 0 6px;
            font-size: 14px;
        }

        .feat p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.5
        }

        /* ---------- Mid banner ---------- */
        .midbanner {
            background: linear-gradient(90deg, #0f6f4c, #0d4d7a);
            color: #fff;
            padding: 18px 0;
        }

        .midbanner .container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-weight: 900;
            letter-spacing: .5px;
        }

        .midbanner svg {
            width: 22px;
            height: 22px;
            fill: #fff
        }

        /* ---------- Footer ---------- */
       footer {
  background: #114359;
  border-top: 1px solid rgba(255,255,255,.12);
}

/* make footer text white */
footer,
footer a,
.footer p,
.list li,
.footer-title {
  color: rgba(255,255,255,.92) !important;
}

.footer-title svg,
.list svg {
  fill: rgba(255,255,255,.92) !important;
}

/* copyright bar */
.copyright {
  border-top: 1px solid rgba(255,255,255,.12);
  color: rgba(255,255,255,.75);
}


        .footer-top {
            padding: 26px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr .9fr;
            gap: 18px;
            align-items: start;
        }

        .footer-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 12px;
            font-size: 16px;
            font-weight: 900;
        }

        .footer-title svg {
            width: 18px;
            height: 18px;
            fill: #22313a
        }

        .footer p {
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
            font-size: 14px
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 10px;
        }

        .list li {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            color: #2a3943;
            font-weight: 600;
            font-size: 14px;
        }

        .list svg {
            width: 18px;
            height: 18px;
            fill: #22313a;
            margin-top: 2px
        }

        .copyright {
            border-top: 1px solid var(--line);
            padding: 14px 0;
            font-size: 13px;
            color: #ffffff;
        }

        .copyright .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* ---------- MOBILE FIXED HEADER ---------- */
        .mobile-fixed-header {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            background: rgba(20, 60, 75, .96);
            border-bottom: 1px solid rgba(255,255,255,.10);
        }

        .mobile-fixed-header .container {
            padding: 0 16px;
        }

        .mobile-fixed-header .header-inner {
            padding: 10px 0;
        }

        .mobile-fixed-header .brand img {
            height: 61px;
            width: auto;
        }

        /* Mobile logo specific style */
        .mobile-logo {
            display: none;
        }

        .mobile-fixed-header nav {
            display: none;
        }

        .mobile-fixed-header .burger {
            display: inline-flex;
            border: 1px solid rgba(255,255,255,.18);
            background: rgba(255,255,255,.08);
        }

        .mobile-fixed-header .burger svg {
            fill: #fff;
        }

        .mobile-menu-panel {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: rgba(20, 60, 75, .98);
            border-top: 1px solid rgba(255,255,255,.10);
            display: none;
            z-index: 1001;
        }

        .mobile-menu-panel .container {
            padding: 10px 16px 14px;
        }

        .mobile-menu-panel a {
            display: block;
            color: #fff;
            padding: 12px 0;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .mobile-menu-panel a:last-child {
            border-bottom: none;
        }

        /* ---------- MOBILE HERO ---------- */
        .m-hero {
            display: none;
            position: relative;
            background: none;
            overflow: hidden;
            padding-top: 80px; /* Space for fixed mobile header */
            padding-bottom: 12px;
        }

        /* background image */
        .m-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("{{ asset('img/hero-scetion.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
            transform: scale(1.02);
        }

        /* dark overlay ONLY on left half (text side) */
        .m-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(
              90deg,
              rgba(20, 60, 75, 0.90) 0%,
              rgba(20, 60, 75, 0.78) 35%,
              rgba(20, 60, 75, 0.25) 52%,
              rgba(20, 60, 75, 0.00) 65%,
              rgba(20, 60, 75, 0.00) 100%
            );
            pointer-events: none;
        }

        .m-hero .wrap,
        .m-hero .m-cta {
            position: relative;
            z-index: 2;
        }

        .m-hero .wrap {
            padding: 16px 16px 0;
        }

        .m-hero .grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 14px;
            align-items: center;
        }

        .m-hero h1 {
            margin: 0 0 8px;
            font-size: 26px;
            line-height: 1.12;
            color: #fff;
            letter-spacing: -.2px;
        }

        .m-hero h1 .hi {
            color: var(--orange-600)
        }

        .m-hero p {
            margin: 0;
            color: rgba(255, 255, 255, .86);
            line-height: 1.55;
            font-size: 13.5px;
        }

        .m-badge {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            margin-top: 14px;
            color: rgba(255, 255, 255, .92);
            font-weight: 700;
            font-size: 13px;
        }

        .m-badge .dot {
            width: 85px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255, 255, 255, .10);
            display: grid;
            place-items: center;
            border: 1px solid rgba(255, 255, 255, .18);
            margin-top: 2px;
        }

        .m-badge svg {
            width: 14px;
            height: 14px;
            fill: var(--orange-600)
        }

        .m-tech {
            display: none;
        }

        .m-cta {
            margin: 14px 16px 0;
            background: var(--orange-600);
            color: #fff;
            font-weight: 900;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 14px 26px rgba(242, 140, 26, .26);
        }

        .m-cta svg {
            width: 18px;
            height: 18px;
            fill: #fff
        }

        .m-services {
            display: none;
            padding: 16px 16px 18px;
            background: #fff;
        }

        .m-services p {
            margin: 0 0 14px;
            color: #2d3b44;
            line-height: 1.7;
            font-size: 14px;
        }

        .m-panel {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 14px;
            box-shadow: 0 14px 26px rgba(16, 24, 40, .10);
        }

        .m-panel h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .m-checks {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 8px;
            font-weight: 700;
            color: #2b3a44;
            font-size: 14px;
        }

        .m-checks li {
            display: flex;
            align-items: flex-start;
            gap: 10px
        }

        .m-checks svg {
            width: 18px;
            height: 18px;
            fill: var(--orange-600);
            margin-top: 2px
        }

        .m-benefit {
            display: none;
            padding: 16px;
            background: #fff;
        }

        .m-benefit .row {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 14px;
            box-shadow: 0 12px 20px rgba(16, 24, 40, .08);
        }

        .m-benefit .ico {
            width: 38px;
            height: 38px;
            border-radius: 14px;
            background: rgba(15, 111, 76, .10);
            border: 1px solid rgba(15, 111, 76, .18);
            display: grid;
            place-items: center;
            flex: 0 0 auto;
        }

        .m-benefit .ico svg {
            width: 20px;
            height: 20px;
            fill: #0f6f4c
        }

        .m-benefit h4 {
            margin: 0 0 4px;
            font-size: 18px
        }

        .m-benefit p {
            margin: 0;
            color: var(--muted);
            line-height: 1.65;
            font-size: 14px
        }

        .mobilebar {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            height: var(--mobilebar);
            background: rgba(20, 60, 75, .96);
            border-top: 1px solid rgba(255, 255, 255, .10);
            z-index: 80;
        }

        .mobilebar .inner {
            height: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 2fr;
            gap: 8px;
            padding: 10px 12px;
            align-items: center;
        }

        .m-iconbtn {
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .10);
            border: 1px solid rgba(255, 255, 255, .14);
        }

        .m-iconbtn svg {
            width: 22px;
            height: 22px;
            fill: #fff
        }

        .m-callbtn {
            height: 44px;
            border-radius: 12px;
            background: var(--orange-600);
            color: #fff;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 0 12px;
            box-shadow: 0 14px 24px rgba(242, 140, 26, .18);
        }

        .m-callbtn svg {
            width: 20px;
            height: 20px;
            fill: #fff
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 1024px) {
            .logos {
                grid-template-columns: repeat(5, 1fr)
            }

            .hero-grid,
            .intro-grid,
            .spot-head {
                grid-template-columns: 1fr
            }

            .spot-img img {
                height: 320px
            }

            .features {
                grid-template-columns: repeat(3, 1fr)
            }

            .steps-grid {
                grid-template-columns: 1fr;
                max-width: 620px;
                margin: 0 auto
            }

            .fixed-header nav {
                display: none
            }

            .fixed-header .burger {
                display: inline-flex
            }

            .why-grid {
                grid-template-columns: 1fr
            }
        }

        /* Mobile-first "HEIZDIENST" look */
        @media (max-width: 640px) {
            body {
                background: #fff;
                padding-top: 64px; /* Space for fixed mobile header */
            }

            /* Hide desktop header on mobile */
            .fixed-header {
                display: none !important;
            }

            /* Show mobile fixed header */
            .mobile-fixed-header {
                display: block;
            }

            /* Show mobile logo, hide desktop logo */
            .mobile-logo {
                display: block;
            }
            .desktop-logo {
                display: none;
            }

            .topstrip,
            .hero,
            .brand-row {
                display: none
            }

            .container {
                padding: 0 16px
            }

            .intro {
                padding-top: 18px
            }

            .intro-grid {
                gap: 14px
            }

            .card {
                box-shadow: 0 14px 26px rgba(16, 24, 40, .10)
            }

            .field-row {
                grid-template-columns: 1fr
            }

            .spot-img img {
                height: 260px
            }

            .features {
                grid-template-columns: 1fr 1fr
            }

            .footer-grid {
                grid-template-columns: 1fr
            }

            /* Mobile sections */
            .m-hero,
            .m-services,
            .m-benefit,
            .mobilebar {
                display: block
            }
        }

        /* Color adjustments */
        .topstrip {
            background: var(--teal-900);
            color: #fff;
        }

        nav a.active::after {
            background: var(--orange-600);
        }

        .hero-bullets svg {
            fill: var(--orange-600);
        }

        .divider svg {
            fill: var(--orange-600);
        }

        .btn {
            background: var(--orange-600);
        }

        .btn:hover {
            filter: brightness(1.03);
        }

        .btn:active {
            transform: translateY(1px);
        }

        .step-num {
            background: var(--orange-600);
        }

        .cta,
        .cta.blue {
            background: var(--orange-600);
        }

        .cta:hover,
        .cta.blue:hover {
            filter: brightness(1.03);
        }

        .midbanner {
            background: linear-gradient(90deg, var(--teal-900), var(--teal-800));
        }

        .main-header {
            background: #fff;
            border-bottom: 1px solid var(--line);
        }



        /* ---------- Brands / Gas Boilers Section ---------- */
.brands-service {
    background: #114359;
    padding: 40px 0 46px;
    border-top: 1px solid var(--line);
}

.brands-kicker {
    display: block;
    text-align: center;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: .4px;
    color: white;
    margin-bottom: 6px;
}

.brands-title {
    text-align: center;
    color: white;
    font-size: 28px;
    margin: 0 0 26px;
}

.brands-logos {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 14px;
    align-items: center;
}

.brands-logos img {
    width: 100%;
    height: 52px;
    object-fit: contain;
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 12px;
    padding: 8px 12px;
}

.brands-note {
    margin-top: 18px;
    text-align: center;
    font-weight: 600;
    color: white;
    font-size: 14px;
}

/* Tablet */
@media (max-width: 1024px) {
    .brands-logos {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Mobile */
@media (max-width: 640px) {
    .brands-logos {
        grid-template-columns: repeat(2, 1fr);
    }

    .brands-title {
        font-size: 24px;
    }
}


/* Reusable brand spotlight tweaks */
.spotlight .cta { background: var(--orange-600); }
.spotlight .cta:hover { filter: brightness(1.03); }

/* Alternate layout (image left, text right) */
.spotlight.reverse .spot-head { direction: rtl; }
.spotlight.reverse .spot-head > * { direction: ltr; }

/* Brand logo row spacing */
.spot-brand { margin: 8px 0 12px; }

    </style>
</head>

<body>
    <!-- SVG icons -->
    <div aria-hidden="true"><?php /* keep HTML valid in WP; harmless elsewhere */ ?></div>
    <div style="display:none">
        <!-- inline sprite (also available in assets/icons.svg) -->
        <!-- (duplicated for single-file use) -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol id="i-phone" viewBox="0 0 24 24">
                <path
                    d="M6.6 10.8c1.7 3.4 3.2 4.9 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6.6 0 1 .4 1 1V21c0 .6-.4 1-1 1C10.7 22 2 13.3 2 2c0-.6.4-1 1-1h3.8c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1L6.6 10.8z" />
            </symbol>
            <symbol id="i-mail" viewBox="0 0 24 24">
                <path
                    d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5L4 8V6l8 5 8-5v2z" />
            </symbol>
            <symbol id="i-whatsapp" viewBox="0 0 24 24">
                <path
                    d="M20.5 3.5A11 11 0 0 0 3.6 20.1L2 22l2.1-.6A11 11 0 0 0 20.5 3.5zm-8.4 18A9 9 0 0 1 5.4 19l-.3-.2-1.2.3.3-1.1-.2-.3A9 9 0 1 1 12.1 21.5zm5.2-6.6c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1-.2.2-.4.2-.7.1a7.4 7.4 0 0 1-2.2-1.4 8.4 8.4 0 0 1-1.6-2c-.2-.3 0-.5.1-.6l.5-.6c.2-.2.2-.4.3-.6.1-.2 0-.4 0-.6 0-.1-.7-1.6-1-2.2-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.7s1.1 3.1 1.2 3.3c.1.2 2.2 3.4 5.4 4.8.8.3 1.4.5 1.9.6.8.2 1.5.2 2 .1.6-.1 1.7-.7 1.9-1.4.2-.7.2-1.3.1-1.4-.1-.1-.3-.2-.6-.3z" />
            </symbol>
            <symbol id="i-check" viewBox="0 0 24 24">
                <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
            </symbol>
            <symbol id="i-tools" viewBox="0 0 24 24">
                <path
                    d="M21.7 18.3 13 9.6a5 5 0 0 1-6.5-6.5l3 3 2-2-3-3A5 5 0 0 1 13.4 7L22 15.7l-3.3 2.6zM2 22l6.6-6.6 1.4 1.4L3.4 23H2v-1z" />
            </symbol>
            <symbol id="i-shield" viewBox="0 0 24 24">
                <path
                    d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5l-8-3zm0 18c-3.1-1.1-6-4.6-6-9V6.3L12 4l6 2.3V11c0 4.4-2.9 7.9-6 9z" />
            </symbol>
            <symbol id="i-menu" viewBox="0 0 24 24">
                <path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z" />
            </symbol>
        </svg>
    </div>

    <!-- MOBILE FIXED HEADER -->
    <div class="mobile-fixed-header">
        <div class="container">
            <div class="header-inner">
                <a class="brand" href="#top" aria-label="Thermendienst Startseite">
                    <!-- Mobile logo -->
                    <img src="{{ asset('img/mobile-logo.jpeg') }}" class="mobile-logo" width="140" alt="Thermendienst Logo">
                    <!-- Desktop logo (hidden on mobile) -->
                    <img src="{{ asset('img/logo.jpeg') }}" class="desktop-logo" width="140" alt="Thermendienst Logo">
                </a>

                <button class="burger" aria-label="Menü öffnen" onclick="toggleMobileMenu()">
                    <svg><use href="#i-menu"></use></svg>
                </button>
            </div>
        </div>

        <!-- Mobile dropdown panel -->
        <div id="mobileMenuPanel" class="mobile-menu-panel">
            <div class="container">
                <a href="#top" onclick="closeMobileMenu()">Startseite</a>
                <a href="#reparatur" onclick="closeMobileMenu()">Reparatur</a>
                <a href="#service" onclick="closeMobileMenu()">Service</a>
                <a href="#verkauf" onclick="closeMobileMenu()">Verkauf</a>
                <a href="#kontakt" onclick="closeMobileMenu()">Kontakt</a>
            </div>
        </div>
    </div>

    <!-- DESKTOP FIXED HEADER -->
    <div class="fixed-header">
        <!-- DESKTOP TOP STRIP -->
        <div class="topstrip">
            <div class="container">
                <div class="pill">
                    <svg>
                        <use href="#i-phone"></use>
                    </svg>
                    <span>Soforthilfe: <a href="tel:+4319284374">+43 1 9284374</a></span>
                </div>
                <div class="pill">
                    <svg></svg>
                    <span>Notdienst auch an Wochenenden</span>
                </div>
            </div>
        </div>

        <!-- DESKTOP MAIN HEADER -->
        <div class="main-header">
            <div class="container">
                <div class="header-inner">
                    <a class="brand" href="#top" aria-label="Thermendienst Startseite">
                        <!-- Desktop logo only -->
                        <img src="{{ asset('img/logo.jpeg') }}" width="140" alt="Thermendienst Logo">
                    </a>

                    <nav aria-label="Hauptmenü">
                        <a class="active" href="#top">Startseite</a>
                        <a href="#reparatur">Reparatur</a>
                        <a href="#service">Service</a>
                        <a href="#verkauf">Verkauf</a>
                        <a href="#kontakt">Kontakt</a>
                    </nav>

                    <button class="burger" aria-label="Menü öffnen" onclick="toggleDesktopMenu()">
                        <svg>
                            <use href="#i-menu"></use>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- simple dropdown for tablets -->
            <div id="menuPanel" style="display:none; border-top:1px solid var(--line); background:#fff">
                <div class="container" style="padding:10px 0 14px">
                    <div style="display:grid; gap:10px; font-weight:800">
                        <a href="#top">Startseite</a>
                        <a href="#reparatur">Reparatur</a>
                        <a href="#service">Service</a>
                        <a href="#verkauf">Verkauf</a>
                        <a href="#kontakt">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MOBILE HERO -->
    <section class="m-hero" id="m-hero">
        <div class="wrap">
            <div class="grid">
                <div>
                    <h1>Heizung kaputt?<br><span class="hi">Wir kümmern uns sofort.</span></h1>
                    <p>Zuverlässiger Heizungs- &amp; Thermenservice in Wien und Niederösterreich — schnell, sauber und
                        transparent.</p>

                    <div class="m-badge">
                        <div class="dot"><img src="{{ asset('img/icon set.jpeg') }}" alt=""></div>
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
    </section>

    <!-- MOBILE SERVICES + BENEFIT -->
    <section class="m-services">
        <p>
            Ob plötzlicher Ausfall, regelmäßige Wartung oder der Austausch Ihrer Therme – <b>Thermendienst</b> ist Ihr
            Ansprechpartner
            für moderne Heiztechnik und bewährten Service.
        </p>

        <div class="m-panel">
            <h3>Unsere Leistungen:</h3>
            <ul class="m-checks">
                <li><svg>
                        <use href="#i-check"></use>
                    </svg>Thermen- &amp; Heizungsreparaturen</li>
                <li><svg>
                        <use href="#i-check"></use>
                    </svg>Wartung &amp; Sicherheitsüberprüfung</li>
                <li><svg>
                        <use href="#i-check"></use>
                    </svg>Neuinstallation &amp; Geräteaustausch</li>
                <li><svg>
                        <use href="#i-check"></use>
                    </svg>Abgasmessung &amp; gesetzliche Überprüfung</li>
            </ul>
        </div>
    </section>

    <section class="m-benefit">
        <div class="row">
            <div class="ico"><svg>
                    <use href="#i-shield"></use>
                </svg></div>
            <div>
                <h4>Weniger Kosten. Mehr Sicherheit.<br>Längere Lebensdauer.</h4>
                <p>Regelmäßige Wartung spart Energie, senkt Heizkosten und beugt teuren Schäden vor.</p>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main id="top">
        <!-- DESKTOP HERO -->
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-img">
                        <img src="{{ asset('img/hero-scetion.jpeg') }}" alt="Thermenreparatur">
                    </div>

                    <div class="hero-copy">
                        <h1>Ihre Therme ist bei uns in professionellen Händen</h1>
                        <p>Professionelle Thermenwartung in Wien &amp; NÖ. Wir bieten unseren Kunden in Wien und
                            Niederösterreich folgende Leistungen für alle gängigen Marken an:</p>

                        <ul class="hero-bullets">
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Reparatur</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Service</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Verkauf &amp; Installation</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Abgasmessungen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand logos row -->
        <section class="brand-row" aria-label="Marken">
            <div class="container">
                <div class="logos">
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
        </section>

        <!-- Intro + Form -->
        <section class="intro" id="service">
            <div class="container">
                <div class="intro-grid">
                    <div>
                        <h2>Sparen Sie Geld &amp; Energie mit dem Thermendienst</h2>
                        <h3>Thermenwartung, Reparatur &amp; Service aller Marken &amp; Hersteller</h3>

                        <div class="divider" aria-hidden="true">
                            <span class="icon"><img src="{{ asset('img/icon set.jpeg') }}" alt=""></span>
                        </div>

                        <div class="prose">
                            <p>
                                Willkommen beim Thermendienst – Ihrem verlässlichen Partner rund um das Thema Gasthermen
                                in Wien und Niederösterreich.
                                Mit unserem Standort in Wien und Niederösterreich sind wir optimal positioniert, um
                                Ihnen umgehend bei allen Belangen rund um
                                <b>Thermenreparatur</b>, Thermenservice, Thermentausch sowie <b>Thermenverkauf</b> &amp;
                                Installation zu helfen.
                                Unter dem Motto <b>„Thermenreparatur Wien"</b> и <b>„Thermenservice Wien &amp;
                                    Niederösterreich"</b> bieten wir unseren Kunden eine Vielzahl an Leistungen an.
                                Unser <b>kompetentes und ausgebildetes Fachpersonal</b> steht Ihnen jederzeit zur
                                Verfügung.
                                Schnelle Termine, faire Preise und ein rundum transparenter Service.
                            </p>
                        </div>
                    </div>

                    <aside class="card" aria-label="Online Termin">
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
                <h2>In 3 Schritten zum Ergebnis</h2>

                <div class="steps-grid">
                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">1</div>
                            <div class="step-title">Thermenstörung?<br>Heizungsausfall?</div>
                        </div>
                        <img src="{{ asset('img/1st-step.jpeg') }}" alt="Heizungsausfall Notdienst">
                    </article>

                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">2</div>
                            <div class="step-title">Anruf beim Thermendienst.<br>Soforthilfe garantiert.</div>
                        </div>
                        <img src="{{ asset('img/secondstep.jpeg') }}" alt="Anruf beim Thermenservice">
                    </article>

                    <article class="step">
                        <div class="step-top">
                            <div class="step-num">3</div>
                            <div class="step-title">Einsatz vor Ort<br>durch kompetenten Installateur</div>
                        </div>
                        <img src="{{ asset('img/thridstep.jpeg') }}" alt="Thermenservice Wien">
                    </article>
                </div>
            </div>
        </section>

        <!-- Why -->
        <section class="why" id="reparatur">
            <div class="container">
                <div class="why-grid">
                    <div class="block">
                        <h3>Warum ist eine Thermenwartung wichtig?</h3>
                        <p>Eine Gastherme ist ein wesentlicher Bestandteil vieler Haushalte. Wie jedes technische Gerät
                            benötigt auch die Therme regelmäßige Wartung, um optimal und sicher zu funktionieren.</p>

                        <h4>Sicherheit:</h4>
                        <p>Regelmäßige Kontrollen stellen sicher, dass alle Bestandteile korrekt arbeiten und keine
                            gefährlichen Situationen entstehen.</p>

                        <h4>Vermeidung von Ausfällen:</h4>
                        <p>Durch Wartungen können potenzielle Probleme frühzeitig identifiziert und behoben werden,
                            bevor sie zu einem vollständigen Ausfall führen.</p>

                        <h4>Gewährleistung und Garantie:</h4>
                        <p>Viele Herstellergarantien setzen voraus, dass das Gerät regelmäßig von einem Fachmann
                            gewartet wird.</p>
                    </div>

                    <div class="block">
                        <h3>&nbsp;</h3>
                        <h4>Längere Lebensdauer:</h4>
                        <p>Regelmäßige Wartungen können die Lebensdauer Ihrer Therme erheblich verlängern und teure
                            Reparaturen vermeiden.</p>

                        <h4>Effizienz &amp; Kosteneinsparungen:</h4>
                        <p>Eine gut gewartete Therme arbeitet effizienter. Das senkt Energiekosten und reduziert den
                            CO₂-Fußabdruck.</p>

                        <h4>Umweltfreundlichkeit:</h4>
                        <p>Eine effizient arbeitende Therme emittiert weniger schädliche Gase und sorgt für bessere
                            Luftqualität im Zuhause.</p>

                        <p style="margin-top:12px"><b>Ein regelmäßiger Check durch qualifiziertes Fachpersonal</b>
                            stellt sicher, dass Ihre Therme stets in einwandfreiem Zustand ist.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== BRAND SPOTLIGHTS (ALL) ===================== -->

<!-- Vaillant -->
<section class="spotlight" id="vaillant">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Vaillant Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/vaillant.jpg') }}" alt="Vaillant">
          </div>
          <p>Vaillant steht für hohe Qualität und zuverlässige Leistung. Damit Ihre Vaillant-Therme effizient und sicher arbeitet, ist eine regelmäßige Wartung entscheidend.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Vaillant Therme">
          <img src="{{ asset('img/after-steps.jpeg') }}" alt="Vaillant Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Vaillant">
        <div class="feat"><div class="n">1</div><h4>Spezialisiertes Fachwissen</h4><p>Geschulte Techniker erkennen Fehler frühzeitig.</p></div>
        <div class="feat"><div class="n">2</div><h4>Optimale Leistung</h4><p>Sauberer Betrieb spart Energie und Kosten.</p></div>
        <div class="feat"><div class="n">3</div><h4>Mehr Sicherheit</h4><p>Prüfung aller Sicherheitsfunktionen &amp; Messwerte.</p></div>
        <div class="feat"><div class="n">4</div><h4>Original Ersatzteile</h4><p>Passgenau, langlebig und zuverlässig.</p></div>
        <div class="feat"><div class="n">5</div><h4>Längere Lebensdauer</h4><p>Weniger Verschleiß, weniger Ausfälle.</p></div>
        <div class="feat"><div class="n">6</div><h4>Transparente Preise</h4><p>Klare Leistung, sauberer Service vor Ort.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Junkers -->
  <section class="spotlight reverse" id="junkers">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Junkers Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/junkers.jpg') }}" alt="Junkers">
          </div>
          <p>Junkers steht für robuste Technik. Regelmäßiger Service sorgt dafür, dass Ihre Junkers-Therme auch bei starken Temperaturschwankungen zuverlässig läuft.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Junkers Gastherme">
          <img src="{{ asset('img/last-img.jpeg') }}" alt="Junkers Thermenwartung">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Junkers">
        <div class="feat"><div class="n">1</div><h4>Gezielte Wartung</h4><p>Inspektion speziell für Junkers-Geräte.</p></div>
        <div class="feat"><div class="n">2</div><h4>Effizienter Betrieb</h4><p>Optimierung reduziert den Gasverbrauch.</p></div>
        <div class="feat"><div class="n">3</div><h4>Stabile Wärme</h4><p>Zuverlässige Leistung im Winter wie im Sommer.</p></div>
        <div class="feat"><div class="n">4</div><h4>Weniger Ausfälle</h4><p>Früherkennung verhindert teure Schäden.</p></div>
        <div class="feat"><div class="n">5</div><h4>Vor-Ort Service</h4><p>Schnelle Hilfe bei Störung oder Fehlercode.</p></div>
        <div class="feat"><div class="n">6</div><h4>Sicherheitscheck</h4><p>Abgaswerte und Dichtheit werden geprüft.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Viessmann -->
  <section class="spotlight" id="viessmann">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Viessmann Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/viessmann.jpg') }}" alt="Viessmann">
          </div>
          <p>Viessmann-Geräte sind effizient und modern. Mit fachgerechter Wartung bleibt die Thermenleistung konstant und die Betriebskosten bleiben niedrig.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Viessmann Therme">
          <img src="{{ asset('img/after-steps.jpeg') }}" alt="Viessmann Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Viessmann">
        <div class="feat"><div class="n">1</div><h4>Effizienz sichern</h4><p>Reinigung &amp; Einstellungen für besten Wirkungsgrad.</p></div>
        <div class="feat"><div class="n">2</div><h4>Geringere Heizkosten</h4><p>Optimierte Verbrennung spart Energie.</p></div>
        <div class="feat"><div class="n">3</div><h4>Fehler früh erkennen</h4><p>Störungen werden vor Ausfall behoben.</p></div>
        <div class="feat"><div class="n">4</div><h4>Saubere Messwerte</h4><p>Abgasprüfung und Funktionscheck inklusive.</p></div>
        <div class="feat"><div class="n">5</div><h4>Längere Lebensdauer</h4><p>Weniger Verschleiß durch regelmäßigen Service.</p></div>
        <div class="feat"><div class="n">6</div><h4>Zuverlässiger Betrieb</h4><p>Konstante Wärme &amp; Warmwasser.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Wolf -->
  <section class="spotlight reverse" id="wolf">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Wolf Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/wolf.jpg') }}" alt="Wolf">
          </div>
          <p>Wolf-Thermen sind leistungsstark. Regelmäßige Wartung hält die Anlage stabil, verhindert Ausfälle und verbessert die Energieeffizienz.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Wolf Therme">
          <img src="{{ asset('img/last-img.jpeg') }}" alt="Wolf Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Wolf">
        <div class="feat"><div class="n">1</div><h4>Optimale Einstellungen</h4><p>Feinjustierung für ruhigen und effizienten Lauf.</p></div>
        <div class="feat"><div class="n">2</div><h4>Weniger Störungen</h4><p>Präventiver Check reduziert Fehlercodes.</p></div>
        <div class="feat"><div class="n">3</div><h4>Mehr Sicherheit</h4><p>Kontrolle von Gas/Abgas und Bauteilen.</p></div>
        <div class="feat"><div class="n">4</div><h4>Saubere Verbrennung</h4><p>Reinigung sorgt für bessere Messwerte.</p></div>
        <div class="feat"><div class="n">5</div><h4>Lange Lebensdauer</h4><p>Weniger Verschleiß, mehr Zuverlässigkeit.</p></div>
        <div class="feat"><div class="n">6</div><h4>Schneller Vor-Ort Service</h4><p>Rasche Hilfe in Wien &amp; NÖ.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Baxi -->
  <section class="spotlight" id="baxi">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Baxi Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/baxi.jpg') }}" alt="Baxi">
          </div>
          <p>Baxi ist für zuverlässige Heiztechnik bekannt. Mit professionellem Service bleibt die Therme effizient und arbeitet störungsfrei über viele Jahre.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Baxi Therme">
          <img src="{{ asset('img/after-steps.jpeg') }}" alt="Baxi Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Baxi">
        <div class="feat"><div class="n">1</div><h4>Gerätecheck</h4><p>Alle Funktionen werden gründlich geprüft.</p></div>
        <div class="feat"><div class="n">2</div><h4>Effizienzsteigerung</h4><p>Optimierung spart Gas und reduziert Kosten.</p></div>
        <div class="feat"><div class="n">3</div><h4>Fehlerprävention</h4><p>Probleme werden früh erkannt.</p></div>
        <div class="feat"><div class="n">4</div><h4>Sicherheitsprüfung</h4><p>Abgaswerte und Dichtheit im Fokus.</p></div>
        <div class="feat"><div class="n">5</div><h4>Mehr Lebensdauer</h4><p>Wartung reduziert Verschleiß.</p></div>
        <div class="feat"><div class="n">6</div><h4>Verlässlicher Betrieb</h4><p>Konstante Wärme &amp; Warmwasser.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Buderus -->
  <section class="spotlight reverse" id="buderus">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Buderus Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/buderus.jpg') }}" alt="Buderus">
          </div>
          <p>Buderus bietet hochwertige Heizsysteme. Regelmäßiger Thermenservice sorgt für einen sicheren Betrieb und stabile Leistung im Alltag.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Buderus Therme">
          <img src="{{ asset('img/last-img.jpeg') }}" alt="Buderus Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Buderus">
        <div class="feat"><div class="n">1</div><h4>Fachgerechte Wartung</h4><p>Service nach Herstellervorgaben.</p></div>
        <div class="feat"><div class="n">2</div><h4>Hohe Effizienz</h4><p>Saubere Verbrennung spart Energie.</p></div>
        <div class="feat"><div class="n">3</div><h4>Sicherheitscheck</h4><p>Kontrolle von Abgas, Ventilen und Sensoren.</p></div>
        <div class="feat"><div class="n">4</div><h4>Weniger Reparaturen</h4><p>Frühwarnzeichen werden erkannt.</p></div>
        <div class="feat"><div class="n">5</div><h4>Mehr Lebensdauer</h4><p>Wartung schützt vor Verschleiß.</p></div>
        <div class="feat"><div class="n">6</div><h4>Stabile Wärme</h4><p>Konstanter Komfort in jedem Raum.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Saunier Duval -->
  <section class="spotlight" id="saunier-duval">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Saunier Duval Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/saunier-duval.jpg') }}" alt="Saunier Duval">
          </div>
          <p>Saunier Duval kombiniert moderne Technik mit Effizienz. Eine regelmäßige Wartung hält Ihre Therme zuverlässig und sicher im Betrieb.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Saunier Duval Therme">
          <img src="{{ asset('img/after-steps.jpeg') }}" alt="Saunier Duval Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Saunier Duval">
        <div class="feat"><div class="n">1</div><h4>Funktionsprüfung</h4><p>Alle Komponenten werden getestet.</p></div>
        <div class="feat"><div class="n">2</div><h4>Effizienter Betrieb</h4><p>Optimierung reduziert Verbrauch.</p></div>
        <div class="feat"><div class="n">3</div><h4>Mehr Sicherheit</h4><p>Kontrolle von Abgas und Sensorik.</p></div>
        <div class="feat"><div class="n">4</div><h4>Weniger Störungen</h4><p>Proaktive Wartung verhindert Ausfälle.</p></div>
        <div class="feat"><div class="n">5</div><h4>Lange Lebensdauer</h4><p>Wartung reduziert Verschleiß.</p></div>
        <div class="feat"><div class="n">6</div><h4>Schneller Service</h4><p>Termine in Wien &amp; NÖ.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Löblich -->
  <section class="spotlight reverse" id="loeblich">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Löblich Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/loeblich.jpg') }}" alt="Löblich">
          </div>
          <p>Löblich-Geräte benötigen ebenso regelmäßige Pflege. Mit professioneller Wartung bleibt die Funktion sicher, effizient und zuverlässig.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Löblich Therme">
          <img src="{{ asset('img/last-img.jpeg') }}" alt="Löblich Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Löblich">
        <div class="feat"><div class="n">1</div><h4>Gründliche Reinigung</h4><p>Für stabile Messwerte und Leistung.</p></div>
        <div class="feat"><div class="n">2</div><h4>Effizienz</h4><p>Optimierung spart Heizkosten.</p></div>
        <div class="feat"><div class="n">3</div><h4>Sicherheit</h4><p>Abgas- &amp; Dichtheitsprüfung inklusive.</p></div>
        <div class="feat"><div class="n">4</div><h4>Fehler vermeiden</h4><p>Frühzeitige Diagnose schützt vor Ausfällen.</p></div>
        <div class="feat"><div class="n">5</div><h4>Mehr Lebensdauer</h4><p>Weniger Verschleiß durch Wartung.</p></div>
        <div class="feat"><div class="n">6</div><h4>Vor-Ort Termin</h4><p>Schnell bei Ihnen in Wien &amp; NÖ.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Ocean -->
  <section class="spotlight" id="ocean">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Ocean Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/ocean.jpg') }}" alt="Ocean">
          </div>
          <p>Ocean-Thermen profitieren von regelmäßigen Checks. So bleibt die Anlage sicher, effizient und liefert dauerhaft zuverlässige Wärme.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Ocean Therme">
          <img src="{{ asset('img/after-steps.jpeg') }}" alt="Ocean Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Ocean">
        <div class="feat"><div class="n">1</div><h4>Komplettprüfung</h4><p>Kontrolle aller relevanten Bauteile.</p></div>
        <div class="feat"><div class="n">2</div><h4>Stabile Leistung</h4><p>Konstante Wärme &amp; Warmwasser.</p></div>
        <div class="feat"><div class="n">3</div><h4>Sicherheit</h4><p>Prüfung der Abgaswerte &amp; Dichtheit.</p></div>
        <div class="feat"><div class="n">4</div><h4>Weniger Störungen</h4><p>Fehler werden früh behoben.</p></div>
        <div class="feat"><div class="n">5</div><h4>Lange Lebensdauer</h4><p>Wartung verhindert Folgeschäden.</p></div>
        <div class="feat"><div class="n">6</div><h4>Transparenter Service</h4><p>Sauberer Einsatz, klare Leistung.</p></div>
      </div>
    </div>
  </section>
  
  <!-- Rapido -->
  <section class="spotlight reverse" id="rapido">
    <div class="container">
      <div class="spot-head">
        <div class="spot-text">
          <h2>Rapido Thermenservice Wien &amp; NÖ</h2>
          <div class="spot-brand">
            <img src="{{ asset('img/rapido.jpg') }}" alt="Rapido">
          </div>
          <p>Rapido-Thermen sollen zuverlässig laufen – besonders in der Heizsaison. Mit regelmäßiger Wartung reduzieren Sie Ausfälle und halten die Effizienz hoch.</p>
          <a class="cta" href="#kontakt">Jetzt anfragen</a>
        </div>
  
        <div class="spot-img" aria-label="Rapido Therme">
          <img src="{{ asset('img/last-img.jpeg') }}" alt="Rapido Thermenservice">
        </div>
      </div>
  
      <div class="features" aria-label="Vorteile Rapido">
        <div class="feat"><div class="n">1</div><h4>Wartung nach Plan</h4><p>Regelmäßige Checks vermeiden Störungen.</p></div>
        <div class="feat"><div class="n">2</div><h4>Effizienz</h4><p>Optimierung senkt Heizkosten.</p></div>
        <div class="feat"><div class="n">3</div><h4>Sicherheit</h4><p>Messung &amp; Kontrolle sicherheitsrelevanter Teile.</p></div>
        <div class="feat"><div class="n">4</div><h4>Fehlerdiagnose</h4><p>Probleme früh erkennen und beheben.</p></div>
        <div class="feat"><div class="n">5</div><h4>Mehr Lebensdauer</h4><p>Weniger Verschleiß, weniger Ausfallzeit.</p></div>
        <div class="feat"><div class="n">6</div><h4>Vor-Ort Service</h4><p>Schnell verfügbar in Wien &amp; NÖ.</p></div>
      </div>
    </div>
  </section>
  
  <!-- ===================== /BRAND SPOTLIGHTS (ALL) ===================== -->
  
    </main>
    <section class="brands-service">
        <div class="container">
            <span class="brands-kicker">Maintenance &amp; Repair</span>
            <h2 class="brands-title">Gas boilers</h2>
    
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
    
            <p class="brands-note">We service all common brands for you.</p>
        </div>
    </section>
    
    <!-- FOOTER -->
    <footer id="kontakt">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <div>
                        <div class="footer-title"><svg></svg>Kontakt</div>
                        <p>Installateurfirma mit fachlicher Kompetenz und erfahrenem sowie <b>ausgebildetem Team</b>.
                            Spezialisiert auf Wartung, Reparatur, Verkauf &amp; Installation von Gas‑Thermen aller
                            Marken.</p>
                        <div style="height:12px"></div>
                        <ul class="list">
                            <li><svg>
                                    <use href="#i-shield"></use>
                                </svg><span>GasTech Pro - Installationstechnik<br>Linzer Straße 263<br>1140 Wien</span>
                            </li>
                            <li><svg>
                                    <use href="#i-phone"></use>
                                </svg><a href="tel:+4319284374">+43 1 9284374</a></li>
                            <li><svg>
                                    <use href="#i-mail"></use>
                                </svg><a href="mailto:office@thermendienst.at">office@thermendienst.at</a></li>
                        </ul>
                    </div>

                    <div>
                        <div class="footer-title"><svg></svg>Wir bieten …</div>
                        <ul class="list">
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Reparatur von Thermen</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Thermenservice</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Verkauf &amp; Installation von Thermen</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Abgasmessung &amp; Überprüfung</li>
                        </ul>
                    </div>

                    <div>
                        <div class="footer-title"><svg></svg>Marken</div>
                        <ul class="list">
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Vaillant</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Junkers</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Viessmann</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Baxi</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Buderus</li>
                            <li><svg>
                                    <use href="#i-check"></use>
                                </svg>Saunier Duval</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div>Copyright 2023 Thermendienst.at | Impressum &amp; Datenschutzerklärung</div>
                <div>WebDesign by gfxMedia.at</div>
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BAR -->
    <div class="mobilebar" role="navigation" aria-label="Schnellaktionen">
        <div class="inner">
            <a class="m-iconbtn" href="tel:+4319284374" aria-label="Anrufen"><svg>
                    <use href="#i-phone"></use>
                </svg></a>
            <a class="m-iconbtn" href="mailto:office@thermendienst.at" aria-label="E-Mail"><svg>
                    <use href="#i-mail"></use>
                </svg></a>
            <a class="m-iconbtn" href="https://wa.me/436677711881" aria-label="WhatsApp">       
            <i class="ri-whatsapp-fill" style="color: white;font-size:28px"></i>         
            </a>
            <a class="m-callbtn" href="tel:+4319284374"><svg>
                    <use href="#i-phone"></use>
                </svg>+43 1 928 4374</a>
        </div>
    </div>

    <script>
        // Mobile menu functions
        function toggleMobileMenu() {
            const panel = document.getElementById('mobileMenuPanel');
            const isHidden = panel.style.display === 'none' || panel.style.display === '';
            panel.style.display = isHidden ? 'block' : 'none';
        }

        function closeMobileMenu() {
            const panel = document.getElementById('mobileMenuPanel');
            if (panel) panel.style.display = 'none';
        }

        // Desktop menu functions for tablets
        function toggleDesktopMenu() {
            const panel = document.getElementById('menuPanel');
            const isHidden = panel.style.display === 'none' || panel.style.display === '';
            panel.style.display = isHidden ? 'block' : 'none';
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            const mobilePanel = document.getElementById('mobileMenuPanel');
            const mobileHeader = document.querySelector('.mobile-fixed-header');
            
            if (mobilePanel && mobileHeader && mobilePanel.style.display === 'block') {
                if (!mobileHeader.contains(e.target)) {
                    mobilePanel.style.display = 'none';
                }
            }

            const desktopPanel = document.getElementById('menuPanel');
            const desktopHeader = document.querySelector('.fixed-header');
            
            if (desktopPanel && desktopHeader && desktopPanel.style.display === 'block') {
                if (!desktopHeader.contains(e.target)) {
                    desktopPanel.style.display = 'none';
                }
            }
        });

        // Fake form submission
        function fakeSubmit(event) {
            event.preventDefault();
            alert('Vielen Dank für Ihre Anfrage! Wir werden uns in Kürze bei Ihnen melden.');
            return false;
        }
    </script>
</body>
</html>