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
        Especialistas en repuestos automotrices, accesorios y atención personalizada.
        Envios locales, asesoría técnica y soluciones express para talleres y particulares.
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
      <video controls muted playsinline loop>
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
          <div class="slide-title">Bosch</div>
          <div class="slide-text">Soluciones eléctricas y de frenado con respaldo mundial.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">AC Delco</div>
          <div class="slide-text">Calidad original para sistemas de encendido y motor.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">NGK</div>
          <div class="slide-text">Bujías y sensores con alto rendimiento en cada arranque.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Mobil 1</div>
          <div class="slide-text">Lubricantes sintéticos para motor y transmisión exigentes.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Valeo</div>
          <div class="slide-text">Repuestos eléctricos y de climatización para servicio completo.</div>
        </div>
        <div class="swiper-slide">
          <div class="slide-title">Monroe</div>
          <div class="slide-text">Amortiguadores y suspensión para manejo suave y seguro.</div>
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
        <span>Productos</span>
        <h2>Lo que ofrecemos</h2>
      </div>
      <div class="card-grid card-grid--productos">
        <article class="card">
          <h3>Baterías</h3>
          <p>Modelos para autos, camionetas y maquinaria ligera con garantía.</p>
        </article>
        <article class="card">
          <h3>Filtros y Aceites</h3>
          <p>Filtros de aire, aceite y combustible; aceites sintéticos y minerales.</p>
        </article>
        <article class="card">
          <h3>Frenos y Suspensión</h3>
          <p>Pastillas, discos, amortiguadores y componentes de suspensión para todas las marcas.</p>
        </article>
        <article class="card">
          <h3>Iluminación</h3>
          <p>Bombillos, balastos y repuestos eléctricos para mantener tu vehículo seguro.</p>
        </article>
      </div>
      <div class="productos-imagenes" id="galeria-productos">
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.50.jpeg" data-alt="Producto 1">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.50.jpeg" alt="Producto 1" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.52.jpeg" data-alt="Producto 2">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.52.jpeg" alt="Producto 2" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.53.jpeg" data-alt="Producto 3">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.53.jpeg" alt="Producto 3" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.58.jpeg" data-alt="Producto 4">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.58.jpeg" alt="Producto 4" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.59.jpeg" data-alt="Producto 5">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.28.59.jpeg" alt="Producto 5" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.00.jpeg" data-alt="Producto 6">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.00.jpeg" alt="Producto 6" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.01.jpeg" data-alt="Producto 7">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.01.jpeg" alt="Producto 7" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.03.jpeg" data-alt="Producto 8">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.03.jpeg" alt="Producto 8" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.04.jpeg" data-alt="Producto 9">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.04.jpeg" alt="Producto 9" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.05.jpeg" data-alt="Producto 10">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.05.jpeg" alt="Producto 10" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.06.jpeg" data-alt="Producto 11">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.06.jpeg" alt="Producto 11" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.07.jpeg" data-alt="Producto 12">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.07.jpeg" alt="Producto 12" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.11.jpeg" data-alt="Producto 13">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.11.jpeg" alt="Producto 13" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.13.jpeg" data-alt="Producto 14">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.13.jpeg" alt="Producto 14" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.14.jpeg" data-alt="Producto 15">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.14.jpeg" alt="Producto 15" loading="lazy" />
        </div>
        <div class="producto-item" data-src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.16.jpeg" data-alt="Producto 16">
          <img src="Material_visual/WhatsApp Image 2026-05-17 at 22.29.16.jpeg" alt="Producto 16" loading="lazy" />
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
        <p>Email: <a href="mailto:ventas@perezduran.com">ventas@perezduran.com</a></p>
        <p>Horario de atención:</p>
        <ul>
          <li>Lunes a Viernes: 08:00 - 18:00</li>
          <li>Sábados: 08:00 - 14:00</li>
          <li>Domingos: Cerrado</li>
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
        <p>Sí, despachamos en la ciudad y la zona metropolitana con entrega express.</p>
      </article>
      <article class="faq-item">
        <h4>¿Aceptan pedidos para talleres?</h4>
        <p>Atendemos pedidos de talleres con facturación y entrega programada.</p>
      </article>
      <article class="faq-item">
        <h4>¿Puedo consultar disponibilidad por WhatsApp?</h4>
        <p>Claro, nuestro WhatsApp está disponible para cotizaciones rápidas y asesoría técnica.</p>
      </article>
      <article class="faq-item">
        <h4>¿Tienen garantía en repuestos?</h4>
        <p>Todos los repuestos cuentan con garantía de fábrica y asesoría postventa.</p>
      </article>
      <article class="faq-item">
        <h4>¿Cómo puedo pagar?</h4>
        <p>Aceptamos efectivo, transferencia y pago móvil para mayor comodidad.</p>
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