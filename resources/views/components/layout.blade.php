<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Red de Trabajos' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    <script src="/evento.js"></script>
    <script src="/modoinicio.js"></script>
</head>
<body class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900 ">
    <!-- Loading Spinner -->
    <div id="loading-spinner" class="fixed inset-0 flex items-center justify-center bg-dark-800 bg-opacity-75 z-50 hidden">
        <div class="spinner-border animate-spin inline-block w-12 h-12 border-4 border-primary-500 border-t-transparent rounded-full"></div>
    </div>


    <!-- Contenido de la página -->
    {{ $slot }}


    <script src="/modo.js"></script>
</body>

</html>