import sharp from 'sharp';
import fs from 'fs';
import path from 'path';

const materialVisualDir = './Material_visual';
const buildImgDir = './build/img/productos';

// Crear directorio si no existe
if (!fs.existsSync(buildImgDir)) {
  fs.mkdirSync(buildImgDir, { recursive: true });
}

// Procesar imágenes
const files = fs.readdirSync(materialVisualDir).filter(file => 
  /\.(jpg|jpeg|png)$/i.test(file)
);

files.forEach(file => {
  const inputPath = path.join(materialVisualDir, file);
  const baseName = path.basename(file, path.extname(file));
  
  // JPEG (original)
  sharp(inputPath)
    .resize(1200, 800, { fit: 'cover', position: 'center' })
    .jpeg({ quality: 85, progressive: true })
    .toFile(path.join(buildImgDir, `${baseName}.jpg`))
    .then(() => console.log(`✓ Procesado JPEG: ${baseName}.jpg`))
    .catch(err => console.error(`✗ Error JPEG ${baseName}:`, err.message));

  // WebP
  sharp(inputPath)
    .resize(1200, 800, { fit: 'cover', position: 'center' })
    .webp({ quality: 80 })
    .toFile(path.join(buildImgDir, `${baseName}.webp`))
    .then(() => console.log(`✓ Procesado WebP: ${baseName}.webp`))
    .catch(err => console.error(`✗ Error WebP ${baseName}:`, err.message));

  // AVIF
  sharp(inputPath)
    .resize(1200, 800, { fit: 'cover', position: 'center' })
    .avif({ quality: 75 })
    .toFile(path.join(buildImgDir, `${baseName}.avif`))
    .then(() => console.log(`✓ Procesado AVIF: ${baseName}.avif`))
    .catch(err => console.error(`✗ Error AVIF ${baseName}:`, err.message));
});

console.log('Procesamiento de imágenes iniciado...');
