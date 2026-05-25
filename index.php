<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COMPAÑÍA DE REPUESTOS & MULTISERVICIOS PÉREZ DURAN</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
  <link rel="stylesheet" href="build/css/app.css" />
  <style>
    :root {
      --bg: #09090f;
      --surface: rgba(12, 15, 27, 0.92);
      --surface-soft: rgba(255, 255, 255, 0.06);
      --text: #edf2ff;
      --text-muted: #9aa8c3;
      --primary: #e31f2f;
      --accent: #4f8cff;
      --border: rgba(255,255,255,.08);
      --radius: 1.8rem;
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: 'Montserrat', sans-serif;
      color: var(--text);
      background: radial-gradient(circle at top left, rgba(79,140,255,.12), transparent 20%),
                  radial-gradient(circle at 80% 20%, rgba(227,31,47,.12), transparent 18%),
                  linear-gradient(180deg, #06070e 0%, #09090f 50%, #10131d 100%);
      overflow-x: hidden;
      text-rendering: optimizeLegibility;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background: linear-gradient(140deg, rgba(255,255,255,.02), transparent 38%),
                  radial-gradient(circle at 20% 20%, rgba(255,255,255,.08), transparent 15%);
      pointer-events: none;
      z-index: -1;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    img {
      display: block;
      max-width: 100%;
      height: auto;
    }

    .contenedor {
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    .header {
      position: fixed;
      inset: 0 auto auto 0;
      width: 100%;
      z-index: 999;
      background: rgba(4, 7, 19, 0.92);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid rgba(255,255,255,.05);
      box-shadow: 0 0 3rem rgba(0,0,0,.18);
      animation: slideDown .8s ease both;
    }

    .header .contenido-header {
      position: relative;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 2rem;
      padding: 1.2rem clamp(1.5rem, 2vw, 2.5rem);
      max-width: 1400px;
      margin: 0 auto;
      width: 100%;
    }

    .header .logo {
      display: inline-flex;
      align-items: center;
      gap: .7rem;
      font-size: 2.1rem;
      font-weight: 800;
      letter-spacing: .16em;
      text-transform: uppercase;
      color: #fff;
      padding: .9rem 1.3rem;
      border: 1px solid rgba(255,255,255,.12);
      border-radius: 2.2rem;
      background: rgba(255,255,255,.05);
      box-shadow: inset 0 0 0.8rem rgba(255,255,255,.07), 0 1.2rem 2.4rem rgba(0,0,0,.15);
      white-space: nowrap;
      flex-shrink: 0;
      transition: transform .3s ease, background .3s ease;
    }
    
    .header .logo:hover {
      background: rgba(255,255,255,.08);
      transform: translateY(-2px);
    }

    .header .navegacion-principal {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      align-items: center;
    }

    .menu-toggle {
      display: none;
      align-items: center;
      justify-content: center;
      width: 3.8rem;
      height: 3.8rem;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(79,140,255,.16);
      color: #fff;
      font-size: 1.45rem;
      border-radius: 1.4rem;
      cursor: pointer;
      transition: transform .3s ease, background .3s ease, border-color .3s ease, color .3s ease;
      flex-shrink: 0;
      margin-left: auto;
      box-shadow: 0 1.2rem 2rem rgba(0,0,0,.17);
    }

    .menu-toggle:hover {
      transform: translateY(-2px);
      background: rgba(79,140,255,.28);
      border-color: rgba(79,140,255,.4);
      color: #fff;
    }
    
    .menu-toggle:active {
      transform: translateY(0);
    }

    .menu-toggle.open {
      background: rgba(79,140,255,.95);
      border-color: rgba(79,140,255,.95);
      color: #fff;
    }

    .header .navegacion-principal a {
      padding: .85rem 1rem;
      border-radius: 1.4rem;
      color: var(--text-muted);
      font-weight: 600;
      transition: transform .3s ease, background .3s ease, color .3s ease;
      background: rgba(255,255,255,.03);
    }

    .header .navegacion-principal a:hover,
    .header .navegacion-principal a.active {
      color: #fff;
      background: rgba(79,140,255,.12);
      transform: translateY(-1px);
    }

    .hero {
      padding: 12rem 0 6rem;
      min-height: calc(100vh - 8rem);
      position: relative;
      overflow: hidden;
    }

    .hero::before,
    .hero::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: .55;
      z-index: 0;
    }

    .hero::before {
      width: 32rem;
      height: 32rem;
      top: -5rem;
      left: -5rem;
      background: radial-gradient(circle, rgba(79,140,255,.2), transparent 45%);
    }

    .hero::after {
      width: 28rem;
      height: 28rem;
      bottom: -8rem;
      right: -10rem;
      background: radial-gradient(circle, rgba(227,31,47,.18), transparent 42%);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 74rem;
      margin: 0 auto;
      padding: 0 1.5rem;
      text-align: center;
      animation: fadeInUp .9s ease both;
    }

    .hero-logo {
      display: table;
      padding: .9rem 1.2rem;
      border-radius: 2.2rem;
      border: 1px solid rgba(255,255,255,.08);
      background: rgba(255,255,255,.04);
      box-shadow: inset 0 0 2rem rgba(255,255,255,.03);
    }

    .hero-logo img {
      width: 10rem;
      filter: drop-shadow(0 0 0.8rem rgba(79,140,255,.25));
    }

    .hero-content span {
      display: inline-block;
      font-size: 1.85rem;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 1.4rem;
      font-weight: 800;
    }

    .hero-content h2 {
      font-size: clamp(2.8rem, 5vw, 5.4rem);
      line-height: 1.08;
      margin: 1.2rem auto 2.2rem;
      max-width: 70rem;
      color: #fff;
      text-shadow: 0 2px 4rem rgba(0,0,0,.3);
      font-weight: 900;
    }

    .hero-content p {
      max-width: 60rem;
      margin: 0 auto 2.8rem;
      color: var(--text-muted);
      font-size: 1.7rem;
      line-height: 1.98;
      font-weight: 500;
    }

    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      animation: floatBtn 5s ease-in-out infinite alternate;
    }

    .hero-buttons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 17rem;
      padding: 1.35rem 1.8rem;
      background: linear-gradient(135deg, rgba(79,140,255,.95), rgba(60,110,210,.92));
      color: #fff;
      border-radius: 2.2rem;
      font-size: 1.2rem;
      font-weight: 700;
      box-shadow: 0 1.4rem 2.8rem rgba(32,74,167,.24);
      transition: transform .3s ease, box-shadow .3s ease, filter .3s ease;
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }

    .hero-buttons a.secondary {
      background: rgba(255,255,255,.08);
      color: #fff;
      border: 1px solid rgba(255,255,255,.16);
    }

    .hero-buttons a:hover {
      transform: translateY(-4px) scale(1.02);
      filter: saturate(1.05);
    }

    .video-block {
      margin-top: 5rem;
      overflow: hidden;
      position: relative;
      padding: 0 1.5rem;
    }

    .video-block video {
      width: 100%;
      min-height: 32rem;
      object-fit: cover;
      filter: contrast(1.08) saturate(1.08);
      border-radius: 2.4rem;
      box-shadow: 0 3rem 6rem rgba(0,0,0,.4);
      border: 1px solid rgba(255,255,255,.1);
    }

    .seccion {
      position: relative;
      padding: 6rem 0 7rem;
      overflow: hidden;
    }

    .seccion::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(255,255,255,.02), transparent 35%);
      pointer-events: none;
      z-index: 1;
    }

    .contenido-seccion {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    .section-title {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: .95rem;
      margin-bottom: 3rem;
      text-align: center;
      color: #fff;
      animation: fadeInUp .85s ease both;
    }

    .section-title span {
      letter-spacing: .32em;
      text-transform: uppercase;
      color: var(--accent);
      font-weight: 800;
      font-size: 1.5rem;
    }

    .section-title h2 {
      font-size: clamp(2.6rem, 3.8vw, 4.8rem);
      line-height: 1.12;
      max-width: 40rem;
      margin: 0 auto;
      color: #fff;
      font-weight: 900;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(1, minmax(0, 1fr));
      gap: 1.5rem;
      align-items: stretch;
      grid-auto-rows: 1fr;
    }

    .card-grid--mision { gap: 1.6rem; }
    .card-grid--productos { gap: 1.6rem; }

    @media (min-width: 720px) {
      .card-grid--mision { grid-template-columns: repeat(3, minmax(0, 1fr)); }
      .card-grid--productos { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (min-width: 1120px) {
      .card-grid--productos { grid-template-columns: repeat(4, minmax(0, 1fr)); }
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      padding: 2.8rem;
      min-height: 30rem;
      background: rgba(255,255,255,.08);
      border: 1px solid rgba(255,255,255,.11);
      border-radius: var(--radius);
      box-shadow: 0 2rem 4rem rgba(0,0,0,.18);
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease, background .3s ease;
    }

    .card::after {
      content: '';
      position: absolute;
      inset: -30%;
      background: radial-gradient(circle at 20% 20%, rgba(79,140,255,.22), transparent 18%);
      opacity: 0;
      transition: opacity .35s ease;
      pointer-events: none;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 3.2rem 6rem rgba(79,140,255,.18);
      border-color: rgba(79,140,255,.25);
    }

    .card:hover::after { opacity: .45; }

    .card h3 {
      font-size: 2.5rem;
      margin-bottom: 1.4rem;
      color: #fff;
      font-weight: 800;
      text-align: center;
    }

    .card p,
    .card ul {
      margin: 0;
      color: var(--text-muted);
      line-height: 2;
      font-size: 1.35rem;
      font-weight: 500;
      text-align: center;
    }

    .card ul { padding-left: 1.3rem; }
    .card ul li { margin-bottom: .75rem; }

    .marcas { 
      padding-top: 3.5rem; 
      background: linear-gradient(180deg, rgba(79,140,255,.06), rgba(227,31,47,.04));
      position: relative;
    }
    
    .marcas::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 50% 0%, rgba(79,140,255,.08), transparent 50%);
      pointer-events: none;
    }
    
    .swiper { 
      padding: 2rem 0 4rem;
      position: relative;
      z-index: 2;
      overflow: hidden;
      width: 100%;
    }
    
    .swiper .swiper-slide {
      border-radius: 2rem;
      background: rgba(16, 28, 65, 0.88);
      border: 1px solid rgba(79,140,255,.22);
      border-left: .8rem solid rgba(79,140,255,.95);
      box-shadow: 0 1.8rem 3.8rem rgba(12, 35, 90, .28);
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease, background .3s ease, opacity .3s ease;
      padding: 2.4rem 2.2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      text-align: left;
      min-height: 20rem;
      color: #e7f1ff;
      overflow: hidden;
      position: relative;
      opacity: 0;
      transform: translateY(20px);
      animation: slideAppear .6s ease forwards;
      box-sizing: border-box;
      flex: 0 0 auto;
    }

    .swiper .swiper-slide:hover {
      transform: translateY(-5px);
      box-shadow: 0 2.5rem 4.5rem rgba(12, 35, 90, .4);
      background: rgba(22, 38, 82, 0.95);
      border-color: rgba(79,140,255,.95);
    }

    .swiper .swiper-slide::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      border-radius: 1.8rem;
      opacity: .15;
      background: radial-gradient(circle at 20% 20%, rgba(79,140,255,.22), transparent 30%), radial-gradient(circle at 80% 80%, rgba(255,255,255,.07), transparent 25%);
      filter: blur(18px);
    }

    .swiper .swiper-slide .slide-title {
      font-size: 2.4rem;
      margin-bottom: 1.2rem;
      color: #f8fbff !important;
      letter-spacing: .02em;
      font-weight: 800;
      z-index: 1;
    }

    .swiper .swiper-slide .slide-text {
      color: #d1dffe !important;
      font-size: 1.55rem;
      line-height: 2.1;
      margin: 0;
      font-weight: 500;
      max-width: 36rem;
      z-index: 1;
    }

    .swiper .slide-badge {
      display: inline-block;
      padding: .35rem .8rem;
      background: rgba(79,140,255,.16);
      border: 1px solid rgba(79,140,255,.35);
      color: #dfe9ff;
      font-size: .85rem;
      font-weight: 700;
      border-radius: 1.2rem;
      text-transform: uppercase;
      letter-spacing: .06em;
      margin-bottom: .8rem;
      z-index: 1;
    }

    .swiper .patrocinador-slide .slide-text {
      color: #d1dffe !important;
    }

    .swiper .swiper-button-next,
    .swiper .swiper-button-prev { 
      border: 1px solid rgba(79,140,255,.35); 
      background: rgba(79,140,255,.14);
      color: #e7f1ff; 
      width: 3.8rem; 
      height: 3.8rem; 
      box-shadow: 0 1.4rem 2.4rem rgba(0,0,0,.2);
      border-radius: 1.2rem;
      transition: transform .3s ease, background .3s ease, border-color .3s ease, color .3s ease;
    }
    
    .swiper .swiper-button-next:hover,
    .swiper .swiper-button-prev:hover { 
      background: rgba(79,140,255,.95);
      border-color: rgba(79,140,255,.95);
      color: #fff; 
      transform: translateY(-2px);
      box-shadow: 0 1.8rem 3.2rem rgba(79,140,255,.25);
    }
    
    .swiper-pagination-bullet { 
      background: rgba(255,255,255,.18) !important;
      transition: background .3s ease;
    }
    
    .swiper-pagination-bullet-active { 
      background: var(--accent) !important;
    }

    .productos-imagenes {
      display: grid;
      grid-template-columns: repeat(2, minmax(0,1fr));
      gap: 1.15rem;
      margin-top: 2.5rem;
    }

    @media (min-width: 980px) { .productos-imagenes { grid-template-columns: repeat(4, minmax(0, 1fr)); } }

    .producto-item {
      position: relative;
      overflow: hidden;
      border-radius: 2.2rem;
      background: linear-gradient(180deg, rgba(255,255,255,.1), rgba(255,255,255,.02));
      border: 1px solid rgba(255,255,255,.1);
      box-shadow: 0 1.8rem 3.6rem rgba(0,0,0,.2);
      transition: transform .35s ease, box-shadow .35s ease, filter .35s ease;
    }

    .producto-item:hover { 
      transform: translateY(-6px) scale(1.02); 
      box-shadow: 0 2.8rem 5rem rgba(79,140,255,.2); 
      filter: saturate(1.08); 
    }
    
    .producto-item img { 
      width: 100%; 
      height: 100%; 
      object-fit: cover; 
      transition: transform .4s ease; 
    }
    
    .producto-item:hover img { transform: scale(1.08); }

    #local { padding-top: 1rem; }
    .local-fotos .producto-item { min-height: 19rem; }

    .contacto {
      padding: 6rem 0 7rem;
      background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.01));
    }

    .contacto-grid {
      display: grid;
      gap: 2.4rem;
      grid-template-columns: 1fr;
      align-items: start;
      position: relative;
      z-index: 2;
    }

    .mapa-contacto,
    .contacto-form {
      border-radius: 2.4rem;
      border: 1px solid rgba(255,255,255,.1);
      background: rgba(7,12,23,.97);
      box-shadow: 0 2.4rem 5rem rgba(0,0,0,.2);
      padding: 2.4rem;
    }

    .mapa-contacto { min-height: 30rem; overflow: hidden; }
    .contacto-form h3 { margin-top: 0; color:#fff; font-size:3.3rem; font-weight:800; margin-bottom:1.6rem; }
    .contacto-form p, .contacto-form li { color: #e8ecff; font-size:1.55rem; line-height:2.4; font-weight:600; margin-bottom:1rem; }
    .contacto-form .p__negrita { color: #fff; font-size:1.55rem; font-weight:700; letter-spacing:.04em; }
    .contacto-form a { color: var(--accent); font-size:1.55rem; font-weight:700; }
    .contacto-form ul { list-style:none; padding:0; margin:1rem 0 0; }
    .contacto-form ul li { margin-bottom:.9rem; }
    .contacto-form form { display:grid; gap:1.1rem; margin-top:1.5rem; animation: fadeInUp .9s ease both; }
    .contacto-form label { color: var(--text); font-weight:700; font-size:1.25rem; margin-bottom:0.5rem; display:block; }
    .contacto-form input,
    .contacto-form textarea {
      width:100%;
      border:1px solid rgba(255,255,255,.15);
      background: rgba(255,255,255,.06);
      color: var(--text);
      padding:1.4rem 1.6rem;
      border-radius:1.8rem;
      font-size:1.2rem;
      outline:none;
      transition: border-color .3s ease, box-shadow .3s ease, transform .3s ease;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
    }
    .contacto-form input:focus,
    .contacto-form textarea:focus {
      border-color: rgba(79,140,255,.8);
      box-shadow: 0 0 0 0.3rem rgba(79,140,255,.15);
      transform: translateY(-2px);
    }
    .contacto-form button {
      padding:1.4rem 1.8rem;
      background: linear-gradient(135deg, rgba(227,31,47,.96), rgba(79,140,255,.92));
      color:#fff;
      border:none;
      border-radius:2.2rem;
      font-size:1.2rem;
      font-weight:700;
      cursor:pointer;
      box-shadow: 0 2rem 3.6rem rgba(227,31,47,.25);
      transition: transform .3s ease, filter .3s ease;
    }
    .contacto-form button:hover { transform: translateY(-3px); filter: brightness(1.08); }

    .faq { background: transparent; }
    .faq-list { 
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      display: grid; 
      gap: 2rem;
      padding: 0 1.5rem;
    }
    .faq-item {
      background: rgba(255,255,255,.07);
      border: 1px solid rgba(255,255,255,.1);
      box-shadow: 0 2rem 4rem rgba(0,0,0,.18);
      border-radius: 2.2rem;
      padding: 2.8rem;
      transition: transform .3s ease, box-shadow .3s ease, background .4s ease, border-color .4s ease;
      position: relative;
      overflow: hidden;
    }
    
    .faq-item::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 25% 25%, rgba(79,140,255,.18), transparent 20%), radial-gradient(circle at 80% 80%, rgba(255,255,255,.12), transparent 18%);
      opacity: 0;
      transition: opacity .4s ease;
      pointer-events: none;
    }
    
    .faq-item:hover {
      transform: translateY(-6px);
      box-shadow: 0 2.8rem 5.2rem rgba(79,140,255,.16);
      border-color: rgba(79,140,255,.3);
      background: rgba(79,140,255,.1);
    }
    
    .faq-item:hover::before {
      opacity: 0.35;
    }
    .faq-item h4 { font-size:2.8rem; margin-bottom:1.2rem; color:#fff; font-weight:800; }
    .faq-item p { color: var(--text-muted); margin:0; font-size:1.4rem; line-height:2; font-weight:500; }

    .footer {
      background: rgba(2,4,15,.98);
      border-top: 1px solid rgba(255,255,255,.1);
      padding: 3.5rem 0 4.5rem;
      position: relative;
      z-index: 10;
    }
    
    .footer .contenedor,
    .footer .contenido-footer { 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
      gap: 1.8rem;
      max-width: 1280px;
    }
    
    .footer p { 
      color: #cdd6f4; 
      margin: 0; 
      font-size: 1.15rem;
      text-align: center;
      line-height: 1.7;
      font-weight: 500;
    }
    
    .footer .sociales { 
      display: flex; 
      gap: 1.2rem; 
      flex-wrap: wrap; 
      justify-content: center;
    }
    
    .footer .sociales a {
      width: 3.6rem; 
      height: 3.6rem;
      display: grid; 
      place-items: center;
      background: rgba(255,255,255,.07);
      border-radius: 50%;
      color: #fff; 
      font-size: 1.3rem;
      transition: transform .3s ease, background .3s ease, color .3s ease, box-shadow .3s ease;
      border: 1px solid rgba(255,255,255,.12);
      box-shadow: 0 .8rem 1.6rem rgba(0,0,0,.15);
    }
    
    .footer .sociales a:hover {
      transform: translateY(-4px) scale(1.08);
      background: linear-gradient(135deg, var(--accent), rgba(79,140,255,.8));
      border-color: var(--accent);
      color: #fff;
      box-shadow: 0 1.4rem 2.8rem rgba(79,140,255,.2);
    }

    .fixed-contact-button {
      position: fixed;
      right: 1.5rem;
      bottom: 1.5rem;
      z-index: 1000;
      display: inline-flex;
      align-items: center;
      gap: .85rem;
      padding: 1.1rem 1.5rem;
      border-radius: 2.6rem;
      background: linear-gradient(135deg, rgba(79,140,255,.98), rgba(227,31,47,.95));
      color: #fff;
      font-weight: 700;
      font-size: 1.05rem;
      box-shadow: 0 2.2rem 4rem rgba(0,0,0,.32);
      text-decoration: none;
      transition: transform .3s ease, box-shadow .3s ease;
      border: 1px solid rgba(255,255,255,.15);
    }
    .fixed-contact-button:hover { 
      transform: translateY(-4px) scale(1.05); 
      box-shadow: 0 2.6rem 4.8rem rgba(79,140,255,.25);
    }
    .fixed-contact-button i { font-size:1.35rem; }

    .reveal { opacity: 0; transform: translateY(28px); transition: opacity .75s ease, transform .75s ease; }
    .reveal-visible { opacity: 1; transform: translateY(0); }

    @keyframes slideDown { from { transform: translateY(-30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(26px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes menuFadeIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes slideAppear { from { opacity: 0; transform: translateY(22px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes floatBtn { 0% { transform: translateY(0); } 100% { transform: translateY(-6px); } }

    @media (max-width: 960px) {
      .header .contenido-header { padding: 1.2rem 1.2rem; }
      .hero { padding-top: 11rem; }
      .hero-content h2 { font-size: 2.8rem; }
      .hero-buttons { flex-direction: column; }
      .hero-buttons a { width: 100%; }
      .contacto-grid { grid-template-columns: 1fr; }
      .productos-imagenes { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .section-title { text-align: center; }
      .footer .contenedor { align-items: center; }
    }

    @media (max-width: 900px) {
      .header { padding: 0; }
      .header .contenido-header { 
        display: flex; 
        justify-content: space-between; 
        align-items: center;
        gap: 1.5rem;
        padding: 1rem 1.3rem;
      }
      .header .logo { 
        margin: 0; 
        flex-shrink: 0;
        font-size: 1.6rem;
        padding: 0.7rem 1rem;
      }
      .menu-toggle { 
        display: inline-flex !important; 
        align-items: center;
        justify-content: center;
        width: 3.8rem;
        height: 3.8rem;
        padding: 0;
        flex-shrink: 0;
        border: 1px solid rgba(255,255,255,.15);
        background: rgba(79,140,255,.18);
        color: #fff;
        font-size: 1.35rem;
      }
      .header .navegacion-principal {
        display: none !important;
        width: 100%;
        flex-direction: column;
        align-items: stretch;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        padding: 1.5rem 1.2rem 1.8rem;
        background: rgba(2, 18, 45, 0.98);
        border-top: 1px solid rgba(79,140,255,.25);
        box-shadow: 0 2.4rem 4rem rgba(0,0,0,.35);
        z-index: 998;
        gap: 0.8rem;
      }
      .header .navegacion-principal.open { 
        display: flex !important; 
        animation: menuFadeIn .25s ease both;
      }
      .header .navegacion-principal {
        flex-direction: column;
      }
      .header .navegacion-principal a {
        width: 100%;
        padding: 1.2rem 1.4rem;
        text-align: center;
        background: rgba(79,140,255,.12);
        margin: 0;
        font-size: 1.1rem;
        border-radius: 1.4rem;
        border: 1px solid rgba(79,140,255,.18);
        color: #fff;
        transition: all .3s ease;
      }
      .header .navegacion-principal a:hover {
        background: rgba(79,140,255,.2);
        border-color: rgba(79,140,255,.3);
        transform: translateY(-2px);
      }
      .menu-close-overlay {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 997;
        background: rgba(0,0,0,.32);
        opacity: 0;
        transition: opacity .25s ease;
        pointer-events: none;
      }
      .menu-close-overlay.active {
        display: block;
        opacity: 1;
        pointer-events: auto;
      }
      .header .navegacion-principal.open ~ .menu-close-overlay {
        display: block;
      }
      .hero-buttons a { width: 100%; }
      .hero-content p { font-size: 1.4rem; }
      .card { min-height: 24rem; padding: 2rem; }
      .card h3 { font-size: 2rem; }
      .card p, .card ul { font-size: 1.1rem; }
      .producto-item { min-height: 18rem; }
    }

    @media (max-width: 700px) {
      .card-grid--productos, .card-grid--mision { grid-template-columns: 1fr; }
      .card { 
        min-height: 22rem; 
        padding: 2rem;
        margin: 0 auto;
      }
      .card h3 { font-size: 2.1rem; margin-bottom: 1rem; }
      .card p, .card ul { font-size: 1.2rem; }
      .swiper .swiper-button-prev, .swiper .swiper-button-next { display: none !important; }
      .slide-title { font-size: 2rem; }
      .slide-text { font-size: 1.2rem; }
      .producto-item { min-height: 17rem; }
      .fixed-contact-button { 
        right: 1.2rem; 
        bottom: 1.2rem; 
        padding: 0.95rem 1.2rem;
        font-size: 1rem;
      }
      .fixed-contact-button i { font-size: 1.15rem; }
      .header .navegacion-principal a { 
        width: 100%; 
        padding: 1rem 1.2rem;
        font-size: 1rem;
      }
      .hero-content h2 { font-size: 2.2rem; line-height: 1.15; }
      .hero-content p { font-size: 1.3rem; }
      .hero-content span { font-size: 1.4rem; }
      .hero-logo img { width: 8rem; }
      .section-title h2 { font-size: 2.2rem; }
      .section-title span { font-size: 1.2rem; }
      .contacto-form h3 { font-size: 2.6rem; }
      .contacto-form p, .contacto-form li { font-size: 1.2rem; }
      .faq-item h4 { font-size: 2.2rem; }
      .faq-item p { font-size: 1.15rem; }
      .header .logo { font-size: 1.5rem; }
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="contenedor contenido-header">
      <a href="#inicio" class="logo" aria-label="Repuesto Duran">
        Repuesto Duran
      </a>
      <button class="menu-toggle" aria-label="Abrir menú" aria-expanded="false">
        <i class="fa-solid fa-bars"></i>
      </button>
      <nav class="navegacion-principal">
        <a href="#marcas">Marcas</a>
        <a href="#productos">Productos</a>
        <a href="#ubicacion">Ubicación</a>
        <a href="#contacto">Contacto</a>
        <a href="#faq">FAQ</a>
      </nav>
      <div class="menu-close-overlay" aria-hidden="true"></div>
    </div>
  </header>

  <section class="hero" id="inicio">
    <div class="hero-content contenedor">
      <div class="hero-logo">
        <img src="Material_visual/logo.png" alt="Logo Repuesto Duran" />
      </div>
      <span>Repuestos & Multiservicios</span>
      <h2>Todo para tu vehículo: calidad, confianza y servicio inmediato.</h2>
      <p>
        Especialistas en repuestos automotrices, accesorios y atención personalizada e inmediata.
        Asesoría técnica y soluciones express para talleres y particulares.
      </p>
      <div class="hero-buttons">
        <a href="#contacto">Contáctanos Ya</a>
        <a class="secondary" href="https://wa.me/18298047817?text=Hola%20P%C3%A9rez%20Duran%2C%20quiero%20consultar%20un%20repuesto"
          target="_blank" rel="noopener noreferrer">WhatsApp</a>
      </div>
    </div>
  </section>

  <section class="video-block">
    <div class="contenedor">
      <video muted autoplay Loop>
        <source src="Material_visual/video.mp4" type="video/mp4" />
        Tu navegador no soporta video.
      </video>
    </div>
  </section>

  <section id="servicios" class="seccion">
    <div class="contenido-seccion">
      <div class="section-title">
        <span>Conócenos</span>
        <h2>Misión, Visión y Valores</h2>
      </div>

      <div class="card-grid card-grid--mision">
        <article class="card">
          <h3>Misión</h3>
          <p>Brindar repuestos confiables y servicios mecánicos rápidos con atención honesta y personalizada.</p>
        </article>
        <article class="card">
          <h3>Visión</h3>
          <p>Ser la primera opción en repuestos y multiservicios, reconocidos por nuestra calidad, precio justo y cercanía.</p>
        </article>
        <article class="card">
          <h3>Valores</h3>
          <ul>
            <li>Honestidad y transparencia</li>
            <li>Velocidad en entregas y respuestas</li>
            <li>Trabajo profesional con garantía</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <section id="marcas" class="marcas">
    <div class="section-title">
      <span>Marcas Destacadas</span>
      <h2>Repuestos de calidad de las mejores marcas</h2>
    </div>
    <div class="swiper marcas-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-title">Jayaco</div>
          <div class="slide-text">Aceites y lubricantes de alto rendimiento para cada motor.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">AA</div>
          <div class="slide-text">Piezas y aceites de calidad estable para rutas exigentes.</div>
        </div>
        <div class="swiper-slide patrocinador-slide">
          <span class="slide-badge">Patrocinadores</span>
          <div class="slide-title">GG Motors</div>
          <div class="slide-text">Ruedas y tubos especializados de alta calidad para trayectos poco y muy exigentes.</div>
        </div>
        <div class="swiper-slide patrocinador-slide">
          <span class="slide-badge">Patrocinadores</span>
          <div class="slide-title">HAO</div>
          <div class="slide-text">Marca líder en repuestos y componentes de alta calidad para motocicletas, reconocida por su excelente durabilidad y rendimiento óptimo.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Chaoyang</div>
          <div class="slide-text">Ruedas y tubos especializados para bicicletas, con liquido sellante.</div>
        </div>
        <div class="swiper-slide patrocinador-slide">
          <span class="slide-badge">Patrocinadores</span>
          <div class="slide-title">Vini</div>
          <div class="slide-text">Productos de protección y cuidado de motor confiables.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Wurth</div>
          <div class="slide-text">Tornillos, tuercas y herramientas especializadas para el trabajo de tornillería</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Valcro</div>
          <div class="slide-text">Piezas y repuestos duraderos para uso diario y taller.</div>
        </div>
        <div class="swiper-slide patrocinador-slide">
          <span class="slide-badge">Patrocinadores</span>
          <div class="slide-title">GTS</div>
          <div class="slide-text">Bicicletas de alto rendimiento para ciudad y ruta.</div>
        </div>
        <div class="swiper-slide patrocinador-slide">
          <span class="slide-badge">Patrocinadores</span>
          <div class="slide-title">Julen exclusiva</div>
          <div class="slide-text">Modelos premium con diseño exclusivo para cada estilo.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">DyM</div>
          <div class="slide-text">Bicicletas para niños diseñadas con seguridad y diversión.</div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section id="productos" class="seccion">
    <div class="contenido-seccion">
      <div class="section-title">
        <span>Productos destacados</span>
        <h2>Lo que ofrecemos</h2>
      </div>
      <div class="card-grid card-grid--productos">
        <article class="card">
          <h3>Bicicletas</h3>
          <p>Estamos especializados en la venta de bicicletas Mountain Bike, City Bike, BMX, de pista y de niño de todas las numeraciones.</p>
        </article>
        <article class="card">
          <h3>Baterías</h3>
          <p>Modelos para motocicletas y maquinaria ligera con garantía de un mes, contamos todo tipo de baterias: gel, seca y acido.</p>
        </article>
        <article class="card">
          <h3>Ruedas</h3>
          <p>Todos modelos tubos y ruedas tanto para motocicleta como bicicleta algunas contando con garantia.</p>
        </article>
        <article class="card">
          <h3>Decoración</h3>
          <p>Calcomanias, placas y porta placas con diseño, tapa valvula, cubre faltas, cables de colores, puños de bicicleta y moto, tapa cadena y entre otros.</p>
        </article>
        <article class="card">
          <h3>Tornillería</h3>
          <p>Todo tipo de tornillos, tuercas, arandelas y herramientas para todo tipo de vehiculo.</p>
        </article>
        <article class="card">
          <h3>Filtros y Aceites</h3>
          <p>Filtros de aire, aceite y combustible; aceites sintéticos y minerales.</p>
        </article>
        <article class="card">
          <h3>Frenos y Suspensión</h3>
          <p>Pastillas, discos, bandas de freno, amortiguadores y componentes de suspensión para todas las marcas.</p>
        </article>
        <article class="card">
          <h3>Iluminación</h3>
          <p>Bombillos, luces LED y repuestos eléctricos para mantener tu vehículo seguro.</p>
        </article>
      </div>
      <div class="productos-imagenes" id="galeria-productos">
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.52.jpeg" data-alt="Producto 1">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.52.jpeg" alt="Producto 1" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.53.jpeg" data-alt="Producto 2">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.53.jpeg" alt="Producto 2" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.59.jpeg" data-alt="Producto 3">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.59.jpeg" alt="Producto 3" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.00.jpeg" data-alt="Producto 4">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.00.jpeg" alt="Producto 4" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.01.jpeg" data-alt="Producto 5">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.01.jpeg" alt="Producto 5" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.03.jpeg" data-alt="Producto 6">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.03.jpeg" alt="Producto 6" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.04.jpeg" data-alt="Producto 7">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.04.jpeg" alt="Producto 7" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.05.jpeg" data-alt="Producto 8">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.05.jpeg" alt="Producto 8" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.20ASDAS.jpeg" data-alt="Producto 9">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.20ASDAS.jpeg" alt="Producto 9" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07.jpeg" data-alt="Producto 10">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07.jpeg" alt="Producto 10" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.11.jpeg" data-alt="Producto 11">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.11.jpeg" alt="Producto 11" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.13.jpeg" data-alt="Producto 12">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.13.jpeg" alt="Producto 12" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.14.jpeg" data-alt="Producto 13">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.14.jpeg" alt="Producto 13" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.16.jpeg" data-alt="Producto 14">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.16.jpeg" alt="Producto 14" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.20.jpeg" data-alt="Producto 15">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.20.jpeg" alt="Producto 15" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.22.jpeg" data-alt="Producto 16">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.22.jpeg" alt="Producto 16" loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <section id="local" class="seccion">
    <div class="contenido-seccion">
      <div class="section-title">
        <span>Visítanos</span>
        <h2>Fotos de nuestro local</h2>
      </div>
      <div class="productos-imagenes local-fotos">
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.50.jpeg" data-alt="Local Pérez Durán 1">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.50.jpeg" alt="Local Pérez Durán 1" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.58.jpeg" data-alt="Local Pérez Durán 2">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.28.58.jpeg" alt="Local Pérez Durán 2" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07.jpeg" data-alt="Local Pérez Durán 3">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07.jpeg" alt="Local Pérez Durán 3" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07ASDA.jpeg" data-alt="Local Pérez Durán 4">
          <img src="Material_visual/WhatsApp%20Image%202026-05-17%20at%2022.29.07ASDA.jpeg" alt="Local Pérez Durán 4" loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <section id="ubicacion" class="contacto">
    <div class="section-title">
      <span>Horario y Sucursal</span>
      <h2>Visítanos o pide tu repuesto</h2>
    </div>
    <div class="contacto-grid">
      <div class="mapa-contacto" id="map"></div>
      <div class="contacto-form">
        <h3>Datos de contacto</h3>
        <p> <span class="p__negrita">Tel: </span><a href="tel:+18298047817">+1 829 804 7817</a></p>
        <p> <span class="p__negrita">Email: </span><a href="mailto:albertopere3k.apd@gmail.com">albertopere3k.apd@gmail.com</a></p>
        <p class="p__negrita">Horario de atención:</p>
        <ul>
          <li><span class="p__negrita">Lunes a Sábados: </span> 8:30 - 06:00</li>
          <li><span class="p__negrita">Domingos: </span> 8:30 - 12:00</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contacto" class="contacto">
    <div class="section-title">
      <span>Contacto</span>
      <h2>Contáctanos ya</h2>
    </div>
    <div class="contacto-grid">
      <div class="contacto-form">
        <form action="contact.php" method="post">
          <label for="nombre">Nombre completo</label>
          <input id="nombre" name="nombre" type="text" required />

          <label for="telefono">Teléfono</label>
          <input id="telefono" name="telefono" type="tel" required />

          <label for="email">Correo electrónico</label>
          <input id="email" name="email" type="email" required />

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

          <button type="submit">Contáctanos Ya</button>
        </form>
      </div>
    </div>
  </section>

  <section id="faq" class="faq">
    <div class="section-title">
      <span>FAQ</span>
      <h2>Preguntas frecuentes</h2>
    </div>
    <div class="faq-list">
      <article class="faq-item">
        <h4>¿Realizan envíos a domicilio?</h4>
        <p>No, pero estamos trabajando en ello para implementarlo proximamente</p>
      </article>
      <article class="faq-item">
        <h4>¿Cómo sé si la pieza de repuesto es compatible con mi vehículo?</h4>
        <p>Trayendo una muestra o referencias de lo que se requiera.</p>
      </article>
      <article class="faq-item">
        <h4>¿Puedo consultar disponibilidad por WhatsApp?</h4>
        <p>Claro, nuestro WhatsApp está disponible para cotizaciones rápidas y asesoría técnica.</p>
      </article>
      <article class="faq-item">
        <h4>¿Tienen garantía en repuestos?</h4>
        <p>Sí, se requiere la factura de compra y en caso de que la pieza sea eléctrica no.</p>
      </article>
      <article class="faq-item">
        <h4>¿Qué tipos de servicios mecánicos ofrecen?</h4>
        <p> Mantenimiento y reparación de bicicletas y motocicletas.</p>
      </article>
      <article class="faq-item">
        <h4>¿Qué métodos de pago aceptan?</h4>
        <p> Solo fectivo y transferencia.</p>
      </article>
      <article class="faq-item">
        <h4>¿Tienen repuestos originales y/o genéricos?
        </h4>
        <p> Contamos con las dos tanto como originales y genericos, originales para todos las motocicletas Loncin y AX.</p>
      </article>
    </div>
  </section>

  <footer class="footer">
    <div class="contenedor contenido-footer">
      <p>COMPAÑÍA DE REPUESTOS & MULTISERVICIOS PÉREZ DURAN © <?php echo date('Y') ?></p>
      <div class="sociales">
        <a href="https://wa.me/18298047817" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/repuestosduran?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/repuestosduranSJ?locale=es_LA" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.tiktok.com/@repuestosduran" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
  </footer>

  <a class="fixed-contact-button" href="https://wa.me/18298047817?text=Hola%20Repuestos%20Duran%2C%20tengo%20una%20consulta" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-whatsapp"></i>
    Cotiza por WhatsApp
  </a>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="build/js/app.js"></script>
  <script>
    (function () {
      const revealTargets = document.querySelectorAll(
        ".hero-content, .section-title, .card, .producto-item, .contacto-form, .faq-item, .footer .sociales a, .hero-buttons a"
      );
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("reveal-visible");
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.18 });

      revealTargets.forEach((el) => {
        el.classList.add("reveal");
        observer.observe(el);
      });

      const menuToggle = document.querySelector('.menu-toggle');
      const navMenu = document.querySelector('.header .navegacion-principal');
      const navLinks = document.querySelectorAll('.header .navegacion-principal a');
      const menuCloseOverlay = document.querySelector('.menu-close-overlay');

      function closeMenu() {
        if (!navMenu || !menuToggle) return;
        navMenu.classList.remove('open');
        menuToggle.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Abrir menú');
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
        menuCloseOverlay?.classList.remove('active');
      }

      function toggleMenu(e) {
        e.stopPropagation();
        if (!navMenu || !menuToggle) return;
        navMenu.classList.toggle('open');
        const expanded = navMenu.classList.contains('open');
        menuToggle.setAttribute('aria-expanded', expanded.toString());
        menuToggle.setAttribute('aria-label', expanded ? 'Cerrar menú' : 'Abrir menú');
        menuToggle.classList.toggle('open', expanded);
        menuToggle.innerHTML = expanded ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
        menuCloseOverlay?.classList.toggle('active', expanded);
      }

      menuToggle?.addEventListener('click', toggleMenu);
      menuCloseOverlay?.addEventListener('click', closeMenu);

      navLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && navMenu?.classList.contains('open')) {
          closeMenu();
        }
      });

      window.addEventListener('resize', () => {
        if (window.innerWidth > 900) closeMenu();
      });
    })();
  </script>
</body>

</html>