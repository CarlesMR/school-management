# 🚀 Guía de Configuración del Proyecto Mi Escuela

## 📌 Requisitos Previos
Asegúrate de tener instalado en tu sistema:
- **PHP** (>=8.0 recomendado)
- **Composer** (Administrador de dependencias para PHP)
- **MySQL** (o cualquier otra base de datos preferida)
- **Git** (para clonar el repositorio)

## 🔥 Paso 1: Clonar el Repositorio
```sh
git clone https://github.com/CarlesMR/school-management.git
cd school-management
```

## 📦 Paso 2: Instalar Dependencias
```sh
composer install
```

## ⚙️ Paso 3: Configurar el Entorno
Copia el archivo de entorno de ejemplo y configura las variables:
```sh
cp .env.example .env
```
Edita `.env` y configura tu **base de datos** 
```sh
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario_db
DB_PASSWORD=tu_contraseña_db
```
Luego, genera la clave de la aplicación:
```sh
php artisan key:generate
```

## 🏗 Paso 4: Configurar la Base de Datos
Ejecuta las migraciones para crear las tablas de la base de datos:
```sh
php artisan migrate
```
Ejecutar seeders para generar datos de prueba
```sh
php artisan db:seed
```

## 📂 Paso 5: Almacenamiento y Permisos
Asegúrate de que los directorios de almacenamiento y caché sean escribibles:
```sh
php artisan storage:link
```

## 🚀 Paso 6: Iniciar la Aplicación
Para iniciar el servidor de desarrollo, ejecuta:
```sh
php artisan serve
```
Visita **http://127.0.0.1:8000** en tu navegador.
