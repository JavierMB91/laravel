# Proyecto Laravel

Bienvenido al proyecto. A continuación encontrarás las instrucciones para configurar, arrancar y utilizar el proyecto en tu entorno local.

## Requisitos previos

Asegúrate de tener instalado lo siguiente en tu sistema:
- PHP (versión compatible con Laravel)
- Composer
- Node.js y NPM
- Un servidor de base de datos (MySQL, MariaDB, SQLite, etc.)

## Instalación

Sigue estos pasos para configurar el proyecto por primera vez:

1.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

2.  **Instalar dependencias de JavaScript:**
    ```bash
    npm install
    ```

3.  **Configurar el entorno:**
    Duplica el archivo de ejemplo de variables de entorno:
    ```bash
    cp .env.example .env
    ```
    *Nota: En Windows puedes usar `copy .env.example .env`.*
    
    Abre el archivo `.env` y configura tus credenciales de base de datos (`DB_DATABASE`, `DB_USERNAME`, etc.).

4.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

5.  **Ejecutar las migraciones:**
    Crea las tablas necesarias en la base de datos:
    ```bash
    php artisan migrate
    ```

## Arrancar el proyecto

Para iniciar el servidor de desarrollo y compilar los activos, ejecuta los siguientes comandos (preferiblemente en terminales separadas):

1.  **Iniciar el servidor de Laravel:**
    ```bash
    php artisan serve
    ```
    La aplicación estará disponible en http://localhost:8000.

2.  **Compilar activos (Vite/Mix):**
    Para desarrollo con recarga en caliente:
    ```bash
    npm run dev
    ```