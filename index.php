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
    .header .contenido-header {
      position: relative;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 1.5rem 2rem;
      gap: 1rem;
    }

    .header .logo {
      position: static;
      transform: none;
      z-index: 2;
      width: 3.8rem;
    }

    .header .navegacion-principal {
      position: absolute;
      right: 0.8rem;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      gap: 1.2rem;
      align-items: center;
    }

    @media (max-width: 768px) {
      .header .contenido-header {
        justify-content: flex-start;
        padding: 1rem 1rem;
        flex-direction: row;
        gap: 0.5rem;
      }

      .header .logo {
        position: static;
        transform: none;
        width: 3.2rem;
      }

      .header .navegacion-principal {
        display: none !important;
        position: static;
        width: 100%;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        background: transparent;
        padding: 0;
        opacity: 1;
        max-height: none;
      }

      .navegacion-principal a {
        padding: 0.6rem 0.95rem;
      }
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="contenedor contenido-header">
      <a href="#inicio" class="logo" aria-label="Pérez Durán Logo">
        <img src="Material_visual/logo.png" alt="Logo Pérez Durán" />
      </a>
      <nav class="navegacion-principal">
        <a href="#marcas">Marcas</a>
        <a href="#productos">Productos</a>
        <a href="#ubicacion">Ubicación</a>
        <a href="#contacto">Contacto</a>
        <a href="#faq">FAQ</a>
      </nav>
    </div>
  </header>

  <section class="hero" id="inicio">
    <div class="hero-content contenedor">
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
      <video muted autoplay>
        <source src="Material_visual/video.mp4" type="video/mp4" />
        Tu navegador no soporta video.
      </video>
    </div>
  </section>

  <section id="servicios" class="sobre-festival">
    <div class="contenido-festival">
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

  <section id="productos" class="sobre-festival">
    <div class="contenido-festival">
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

  <section id="local" class="sobre-festival">
    <div class="contenido-festival">
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
        <p>Tel: <a href="tel:+18298047817">+1 829 804 7817</a></p>
        <p>Email: <a href="mailto:albertopere3k.apd@gmail.com">albertopere3k.apd@gmail.com</a></p>
        <p>Horario de atención:</p>
        <ul>
          <li>Lunes a Sábados: 08:30 - 06:00</li>
          <li>Domingos: 8:30 - 12:00</li>
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
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="build/js/app.js"></script>
</body>

</html>