# Bienes Raíces

Proyecto Frontend (Gulp + Sass + PostCSS) del curso. 

## Requisitos
- Node.js (LTS recomendado)
- npm (incluido con Node)

## Instalación
```bash
npm install
```
Esto instala todas las dependencias definidas en `package.json` (incluye `gulp` local).

## Desarrollo
Ejecuta el entorno de desarrollo (tareas + watch):
```bash
npx gulp
```
O usando el script definido:
```bash
npm run dev
```
Ambos comandos usan el `gulp` local del proyecto, así que NO es obligatorio instalar `gulp-cli` global.

## Estructura de carpetas
```
src/
  scss/
  js/
  img/
build/ (se genera automáticamente)
```

## Añadir colaboradores
1. Clonan el repo.
2. Ejecutan `npm install`.
3. Corren `npm run dev` (o `npx gulp`).

No necesitan instalar nada más de forma global. Solo si quieren el comando `gulp` directo en la terminal sin `npx`, entonces:
```bash
npm install -g gulp-cli
```

## Opcional: Versionar la carpeta build
Por defecto el `.gitignore` actual ignora `build/`. Esto es ideal si quieres que cada desarrollador genere los assets. Si deseas publicar assets ya compilados (por ejemplo para un hosting estático sin pipeline), puedes quitar `build/` del `.gitignore`.

## Problemas comunes
- "gulp no se reconoce": usar `npx gulp` o `npm run dev` o instalar global `gulp-cli`.
- Error de permisos PowerShell al ejecutar scripts: `Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned`.

## Producción
Si necesitas minificar y generar los assets una sola vez (sin watch), puedes crear un script adicional:
```json
"scripts": {
  "dev": "gulp",
  "build": "gulp css javascript imagenes versionWebp"
}
```
Luego:
```bash
npm run build
```

---
Happy coding!
