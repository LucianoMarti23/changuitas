<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Red de Trabajos' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style.global.css">


</head>
<!--ESTRUCTURA PARA EL ADMINISTRADOR-->

<body class="text-light-800 bg-light-300">
    <header class="bg-dark-700  text-light-200 p-2 px-4 flex justify-between items-center">
        <!-- Título del Dashboard -->
        <h1 class="flex text-2xl font-bold  items-center space-x-2">
            <svg class="w-6 h-6 text-dark-200  moving-icon" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
            </svg>
            <span>Panel</span>
        </h1>
        <!-- Acceso a la pagina CHANGUITA -->
        <div href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <svg class="w-6 h-6 text-dark-500  moving-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
            <span class="text-1xl text-dark-500 font-normal ">Changuita</span>
        </div>

        <!-- Barra de Búsqueda -->

        <!-- Información del Usuario -->
        <div class="flex items-center ">
            <span class="font-medium text-1xl text-info-400">Bienvenido [Administrador]</span>
        </div>

        <!-- Fecha y Hora Actuales [Añadi composer require nesbot/carbon] -->
        @php
        use Carbon\Carbon;
        Carbon::setLocale('es');
        $fecha = Carbon::now()->setTimezone('America/Argentina/Buenos_Aires')->translatedFormat('l, d F Y - h:i A');
        @endphp
        <div class="flex items-center ">
            <span class="font-light"> {{ $fecha }} </span>
        </div>

        <!-- Notificaciones -->


        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
            @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="text-danger-500 hover:text-danger-600">
            Cerrar sesión
        </a>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <nav class="bg-dark-800 shadow-xl w-48  h-screen px-3">
            <!-- Logo -->
            <div class="flex items-center bg-dark-700 my-1 p-1 ">
                <div  id="section-name" class="text-info-400 text-xl font-medium mr-2 truncate">{{ $title ?? '[Seccion]' }}</div>
                <svg class="w-6 h-6 text-info-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M4 6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h11.613a2 2 0 0 0 1.346-.52l4.4-4a2 2 0 0 0 0-2.96l-4.4-4A2 2 0 0 0 15.613 6H4Z" />
                </svg>
                
            </div>


            <!-- Menú de Navegación -->
            <ul class="space-y-4 ">
                <li><a href="{{ route('admin.dashboard') }}"
                        class="text-dark-300 hover:text-light-200 block">Dashboard</a></li>
                <li><a href="{{ route('admin.users') }}" class="text-dark-300 hover:text-light-200 block">Usuarios</a>
                </li>
                <li><a href="{{ route('admin.jobs') }}"
                        class="text-dark-300 hover:text-light-200 block">Publicaciones</a></li>
                <li><a href="{{ route('admin.subscriptions') }}"
                        class="text-dark-300 hover:text-light-200 block">Suscripciones</a></li>
                <li><a href="{{ route('admin.category') }}"
                        class="text-dark-300 hover:text-light-200 block">Categoria</a>
                </li>

                <li><a href="{{ route('admin.analysis') }}"
                        class="text-dark-300 hover:text-light-200 block" disable >Analisis</a>
                </li>


            </ul>
        </nav>



        {{ $slot }}


        <footer
            class="fixed bottom-0 left-0 z-20 w-full p-4 bg-light-200 border-t border-dark-200 shadow-md md:flex md:items-center md:justify-between md:p-6 ">
            <span class="text-sm text-dark-500 sm:text-center ">
                © 2023 <a href="https://flowbite.com/" class="hover:underline">Programosos</a>. Todos los derechos
                reservados.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-dark-500  sm:mt-0">
            <li>
                    <a href="{{ route('admin.ayuda') }}" class="hover:underline mr-4 md:mr-6">Ayuda</a>
                </li>
                <li>
                    <a href="#" class="hover:underline mr-4 md:mr-6">Sobre nosotros</a>
                </li>
                <li>
                    <a href="#" class="hover:underline mr-4 md:mr-6">Política de privacidad</a>
                </li>
                <li>
                    <a href="#" class="hover:underline mr-4 md:mr-6">Licencias</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contacto</a>
                </li>
            </ul>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sectionNameElement = document.getElementById('section-name');
                const path = window.location.pathname;
        
                let sectionName = '[Sección]'; // Valor por defecto
        
                if (path.includes('dashboard')) {
                    sectionName = 'Dashboard';
                } else if (path.includes('users')) {
                    sectionName = 'Usuarios';
                } else if (path.includes('publicaciones')) {
                    sectionName = 'Publicaciones';
                } else if (path.includes('subscriptions')) {
                    sectionName = 'Suscripciones';
                } else if (path.includes('category')) {
                    sectionName = 'Categoría';
                } else if (path.includes('analysis')) {
                    sectionName = 'Análisis';
                } else if (path.includes('ayuda')) {
                    sectionName = 'Ayuda';
                }
        
                sectionNameElement.textContent = sectionName;
            });
        </script>
        


</body>

</html>