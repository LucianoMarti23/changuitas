
# changuitas-project

## Entorno de desarrollo

Requiere [Composer](https://getcomposer.org/), [PHP 8.3.x](https://www.php.net/downloads) y [Tailwind v3.4.3](https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.4.3).

Contiene ```HTMX v1.9.12``` listo para usar.

### Instalación de Tailwind (Windows)

1. Descargar el ejecutable de [Tailwind v3.4.3](https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.4.3).
1. Renombrar el ejecutable a ```tailwindcss.exe```.
1. Colocar el ejecutable en una carpeta (por ejemplo: ```Archivos de Programa/Tailwind CSS/bin/```).
1. Agregar la carpeta al PATH para que el ejecutable esté disponible en la consola.
1. Al abrir una consola y ejecutar ```tailwindcss```, nos debería responder con la version instalada y una lista de comandos básicos.

### Instalación del proyecto

En la carpeta ```laravel-server``` ejecutar:

1. #### Instalar dependencias:
    ```$ composer install```
    > Nota: si el comando ```composer install``` termina con errores, probablemente haya extensiones de PHP que deben ser activadas en el archivo ```php.ini```, como ```pdo_sqlite``` o ```fileinfo```.

1. #### Crear el archivo ```.env``` a partir de ```.env.example```:
    ```$ cp .env.example .env```

1. #### Generar una clave para desarrollo local:
    ```$ php artisan key:generate```

1. #### Realizar las migraciones iniciales:
    ```$ php artisan migrate```

1. #### Compilar los estilos del proyecto al archivo ```style.global.css```:
    ```$ tailwindcss -i tailwind.input.css -o ./public/style.global.css```
    > Nota: El proyecto ya contiene ```tailwind.config.js``` y ```tailwind.input.css```, que son los archivos de **configuración** y **entradas** de Tailwind.

### Iniciar servidor local
1. #### Servidor local de Laravel:
    ```$ php artisan serve```
1. #### Compilador continuo de Tailwind (watch):
    ```$ tailwindcss -i tailwind.input.css -o ./public/style.global.css --watch```

### (!) Nota: Escribiendo las vistas

Cualquier vista (no parcial) del proyecto debería incluir en su \<head> lo siguiente:
```html
    ...

    <!-- Cualquier fuente que se enlace con Tailwind -->
    <!-- Aqui se incluye "Inter" desde Google Fonts, SOLO COMO UN EJEMPLO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- El archivo de estilos generado por Tailwind a utilizar -->
    <link rel="stylesheet" href="/style.global.css">

    <!-- HTMX (si, se lo incluye en el <head>) -->
    <script src="/htmx-v1-9-12.min.js"></script>

    ...
```

<br><br><br>

## Documentación
1. ### Descripción General
    1. [Introducción](/documentation/spanish/introduction.md)
    1. [Descripción del proyecto](/documentation/spanish/description.md)
        - Objetivo
        - Justificación
    1. [Desarrollo del Sistema](/documentation/spanish/development.md)
        - Planificación
        - Diseño
        - Implementación
        - Evaluación **-pendiente-**
        - Mantenimiento **-pendiente-**
    1. [Sistema de Sustento Financiero](/documentation/spanish/financial_income.md)
1. ### Análisis de Requerimientos
    1. [Ambiente Físico](/documentation/spanish/requirements/environment.md)
        - Localización del Equipo
        - Restricciones Ambientales **-pendiente-**
    1. [Interfaces](/documentation/spanish/requirements/interfaces.md)
        - Entradas y Salidas del Sistema
    1. [Usuarios y Factores Humanos](/documentation/spanish/requirements/users.md)
        - Tipos de Usuarios
        - Habilidades y Entrenamiento
        - Usabilidad
    1. [Funcionalidad](/documentation/spanish/requirements/functionality.md)
        - Operaciones del Sistema
    1. [Documentación](/documentation/spanish/requirements/documentation.md)
        - Requisitos de Documentación
    1. [Datos](/documentation/spanish/requirements/data.md)
        - Formato y Presición de Datos
    1. [Recursos](/documentation/spanish/requirements/resources.md)
        - Requisitos de Recursos
    1. [Seguridad](/documentation/spanish/requirements/security.md)
        - Control de Acceso
        - Protección de Datos
    1. [Control de Calidad](/documentation/spanish/requirements/quality_assurance.md)
        - Requisitos y Medidas de Calidad
    1. [Factibilidad](/documentation/spanish/requirements/feasibility.md)
        - Beneficios


