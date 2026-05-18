document.addEventListener("DOMContentLoaded", function () {
  navegacionFija();
  resaltarEnlace();
  scrollNav();
  initMap();
  initSwiper();
  initProductosModal();
  initContactForm();
});

function navegacionFija() {
  const header = document.querySelector(".header");
  const sobreFestival = document.querySelector(".sobre-festival");

  document.addEventListener("scroll", function () {
    if (sobreFestival.getBoundingClientRect().bottom < 1) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
  });
}

function resaltarEnlace() {
  document.addEventListener("scroll", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navegacion-principal a");

    let actual = "";
    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (window.scrollY >= sectionTop - sectionHeight / 3) {
        actual = section.id;
      }
    });
    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + actual) {
        link.classList.add("active");
      }
    });
  });
}

function scrollNav() {
  const navLinks = document.querySelectorAll(".navegacion-principal a");

  navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const sectionScroll = e.target.getAttribute("href");
      const section = document.querySelector(sectionScroll);

      section.scrollIntoView({ behavior: "smooth" });
    });
  });
}


function initMap() {
  const mapElement = document.getElementById("map");
  if (!mapElement || typeof L === "undefined") {
    return;
  }

  const lat = 18.794416;
  const lng = -71.219934;
  const map = L.map(mapElement).setView([lat, lng], 16);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  L.marker([lat, lng])
    .addTo(map)
    .bindPopup("COMPAÑÍA DE REPUESTOS & MULTISERVICIOS PÉREZ DURAN")
    .openPopup();
}

function initSwiper() {
  if (typeof Swiper === "undefined") {
    return;
  }

  new Swiper('.marcas-swiper', {
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 12,
      stretch: 0,
      depth: 110,
      modifier: 1,
      slideShadows: false,
    },
    slidesPerView: 1,
    spaceBetween: 14,
    loop: true,
    speed: 800,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 12,
      },
      900: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 18,
      },
    },
    on: {
      init: function () {
        document.querySelectorAll('.marcas-swiper .swiper-slide').forEach((s) => s.classList.add('futuristic'));
      },
    },
  });
}

function initProductosModal() {
  const productosItems = document.querySelectorAll(".producto-item");

  productosItems.forEach((item) => {
    item.style.cursor = "pointer";
    item.addEventListener("click", function () {
      const src = this.getAttribute("data-src");
      const alt = this.getAttribute("data-alt");

      const modal = document.createElement("div");
      modal.className = "modal modal-producto";

      const contenido = document.createElement("div");
      contenido.className = "modal-contenido";

      const imagen = document.createElement("img");
      imagen.src = src;
      imagen.alt = alt;
      imagen.className = "modal-img";

      const cerrarBtn = document.createElement("button");
      cerrarBtn.type = "button";
      cerrarBtn.className = "btn-cerrar";
      cerrarBtn.setAttribute("aria-label", "Cerrar");
      cerrarBtn.textContent = "X";

      contenido.appendChild(imagen);
      contenido.appendChild(cerrarBtn);
      modal.appendChild(contenido);
      document.body.classList.add("overflow-hidden");
      document.body.appendChild(modal);

      const cerrarModal = () => {
        modal.classList.add("fadeOut");
        setTimeout(() => {
          modal.remove();
          document.body.classList.remove("overflow-hidden");
        }, 300);
      };

      cerrarBtn.addEventListener("click", cerrarModal);
      modal.addEventListener("click", (event) => {
        if (event.target === modal) {
          cerrarModal();
        }
      });
    });
  });
} 

function initContactForm() {
  const form = document.querySelector("form[action='contact.php']");
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const nombre = formData.get("nombre");
    const telefono = formData.get("telefono");
    const email = formData.get("email");
    const mensaje = formData.get("mensaje");

    if (!nombre || !telefono || !email || !mensaje) {
      Swal.fire({
        title: "Error",
        text: "Por favor completa todos los campos",
        icon: "error",
        confirmButtonColor: "#c41e3a"
      });
      return;
    }

    Swal.fire({
      title: "Enviando...",
      allowOutsideClick: false,
      didOpen: () => Swal.showLoading()
    });

    try {
      const response = await fetch("./contact.php", {
        method: "POST",
        body: formData,
        credentials: "same-origin",
        headers: {
          Accept: "application/json"
        }
      });

      let data;
      try {
        data = await response.json();
      } catch (parseError) {
        throw new Error("Respuesta inválida del servidor");
      }

      if (response.ok && data.success) {
        const whatsappPhone = "18298047817";
        const textMessage = `Hola COMPAÑÍA DE REPUESTOS & MULTISERVICIOS PÉREZ DURAN,\n\nNombre: ${nombre}\nCorreo: ${email}\nMensaje: ${mensaje}`;
        const whatsappUrl = `https://wa.me/${whatsappPhone}?text=${encodeURIComponent(textMessage)}`;

        window.open(whatsappUrl, "_blank");

        Swal.fire({
          title: "¡Perfecto!",
          text: "Se guardó tu contacto y se abrió WhatsApp para enviar el mensaje.",
          icon: "success",
          confirmButtonColor: "#c41e3a"
        });

        form.reset();
      } else {
        Swal.fire({
          title: "Error",
          text: data.message || "Hubo un error al enviar tu mensaje",
          icon: "error",
          confirmButtonColor: "#c41e3a"
        });
      }
    } catch (error) {
      console.error("Contact form error:", error);
      Swal.fire({
        title: "Error de conexión",
        text: "No se pudo conectar al servidor. Asegúrate de abrir el sitio desde un servidor PHP y no con file://",
        icon: "error",
        confirmButtonColor: "#c41e3a"
      });
    }
  });
}
