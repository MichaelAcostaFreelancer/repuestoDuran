# COMPAÑÍA DE REPUESTOS & MULTISERVICIOS PÉREZ DURAN

Versión final del proyecto: **1.0.0-final**

Sitio web moderno y responsivo para empresa de repuestos automotrices, construido con HTML5, SCSS y JavaScript.

## 📌 Estado del proyecto
- Versión final para entrega.
- Navegación totalmente oculta en modo móvil.
- Slider de marcas optimizado para escritorio y celular.
- `node_modules/` ignorado en Git.

## 🎯 Características Principales

### Secciones
- **Hero**: Banner atractivo con animaciones CSS y CTA buttons
- **Video**: Reproductor integrado con contenido multimedia
- **Misión, Visión y Valores**: Cards con información empresarial
- **Marcas**: Slider interactivo con Swiper.js
- **Productos**: Grid responsivo con galerías de imágenes
- **Ubicación**: Mapa integrado con Leaflet
- **Contacto**: Formulario con validación y almacenamiento en BD
- **FAQ**: Preguntas frecuentes con respuestas
- **Footer**: Enlaces a redes sociales

### Tecnologías

#### Frontend
- HTML5 semántico
- SCSS con arquitectura modular
- JavaScript vanilla + librerías:
  - **Swiper.js 10**: Carruseles responsivos
  - **Leaflet 1.9.4**: Mapas interactivos
  - **SweetAlert2 11**: Modales y notificaciones
- **Picture elements**: Soporte para WebP/AVIF

#### Backend
- PHP 7.4+
- MySQL/MariaDB
- Base de datos: `perez_duran`
- Tabla: `contactos`

#### Build Tools
- **Gulp 5**: Task runner
- **Sass 1.75**: Compilación CSS
- **Sharp**: Optimización de imágenes
- **Terser**: Minificación JavaScript

## 📁 Estructura del Proyecto

```
proyectoFinal/
├── index.php              # Página principal
├── contact.php            # Backend de formulario
├── gulpfile.js           # Configuración de Gulp
├── package.json          # Dependencias npm
├── process-images.js     # Script de procesamiento de imágenes
│
├── src/
│   ├── js/
│   │   └── app.js        # JavaScript principal
│   ├── scss/
│   │   ├── app.scss      # Entrada SCSS
│   │   ├── base/
│   │   │   ├── _variables.scss    # Colores y valores
│   │   │   ├── _mixins.scss       # Funciones SCSS
│   │   │   ├── _globales.scss     # Estilos globales
│   │   │   └── ...
│   │   └── layout/
│   │       ├── _header.scss       # Encabezado y navegación
│   │       ├── _video.scss        # Hero y video
│   │       ├── _galeria.scss      # Sliders
│   │       ├── _sections.scss     # Secciones principales
│   │       ├── _footer.scss       # Pie de página
│   │       └── ...
│   └── img/
│       └── gallery/
│           ├── full/      # Imágenes a resolución completa
│           └── thumb/     # Thumbnails
│
├── build/                 # Archivos compilados
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── img/
│       └── productos/     # Imágenes optimizadas (JPEG, WebP, AVIF)
│
├── Material_visual/       # Activos originales
│   ├── logo.png
│   ├── video.mp4
│   └── WhatsApp Image...  # Fotos de productos
```

## 🎨 Paleta de Colores

- **Rojo Primario**: #C51F1F
- **Rojo Oscuro**: #8A1212
- **Azul**: #1B3A7A
- **Azul Claro**: #2A7AC7
- **Negro**: #111111
- **Gris**: #F4F4F4
- **Blanco**: #FFFFFF

## 🚀 Instalación y Setup

### Requisitos
- Node.js 16+
- PHP 7.4+
- MySQL/MariaDB

### Pasos

1. **Instalar dependencias**:
```bash
npm install
```

2. **Procesar imágenes** (opcional):
```bash
node process-images.js
```

3. **Compilar assets**:
```bash
npx gulp js css
```

4. **Modo desarrollo** (watch):
```bash
npm run dev
```

## 📊 Base de Datos

### Crear tabla
```sql
CREATE DATABASE IF NOT EXISTS perez_duran;
USE perez_duran;

CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensaje LONGTEXT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Credenciales
- Host: `localhost`
- Usuario: `root`
- Contraseña: `root`

## 🎯 Funcionalidades JavaScript

### 1. Navegación Fija
Encabezado se fija al scroll y resalta enlaces activos según sección.

### 2. Slider de Marcas
Implementado con Swiper.js:
- Responsive (1 a 3 slides según pantalla)
- Paginación interactiva
- Loop automático

### 3. Galería de Productos
- Click para ampliar imagen
- Modal con SweetAlert2
- Carga optimizada con WebP/AVIF

### 4. Formulario de Contacto
- Validación de campos
- Envío AJAX a `contact.php`
- Notificaciones con SweetAlert2
- Guardado automático en BD

### 5. Mapa Interactivo
- Leaflet con OpenStreetMap
- Ubicación: 18.794416, -71.219934
- Marker con popup

## 🖼️ Optimización de Imágenes

El script `process-images.js` convierte automáticamente las imágenes a tres formatos:

1. **JPEG** (25% tamaño original, quality 85)
2. **WebP** (mejor compresión, quality 80)
3. **AVIF** (compresión moderna, quality 75)

Los navegadores cargan automáticamente el mejor formato soportado.

## 📱 Responsividad

- **Mobile**: < 480px
- **Tablet**: 480px - 768px
- **Desktop**: > 768px

## 🔒 Seguridad

- Inputs sanitizados con `htmlspecialchars()`
- Prepared statements en BD
- Validación de email con `filter_var()`
- CORS headers configurado

## 📞 Contacto

- **Teléfono**: +1 829 804 7817
- **WhatsApp**: [Link directo](https://wa.me/18298047817)
- **Email**: ventas@perezduran.com
- **Redes Sociales**: Instagram, Facebook

## 📝 Notas de Desarrollo

- Los archivos SCSS están estructurados con arquitectura ITCSS
- Todas las animaciones usan CSS3 para mejor performance
- JavaScript minificado en producción
- Assets optimizados automáticamente

## 🔧 Scripts NPM

```bash
npm run sass    # Watch SCSS
npm run dev     # Modo desarrollo (watch + server)
```

## 📄 Licencia

Proyecto privado - Compañía de Repuestos & Multiservicios Pérez Durán
