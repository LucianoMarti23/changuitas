
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
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> master
