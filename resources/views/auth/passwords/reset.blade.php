<!-- resources/views/auth/passwords/reset.blade.php -->

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
    <!--HTMX-->
    <script src="/htmx-v1-9-12.min.js"></script>
    <script src="/modoinicio.js"></script>
</head>
<body class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900">
    <!-- Loading Spinner -->
    <div id="loading-spinner" class="fixed inset-0 flex items-center justify-center bg-dark-800 bg-opacity-75 z-50 hidden">
        <div class="spinner-border animate-spin inline-block w-12 h-12 border-4 border-primary-500 border-t-transparent rounded-full"></div>
    </div>


    
<nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
    <div class="w-full sm:w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/Logo.png') }}" class="w-16 h-16 object-contain" alt="Logo" />
            <!-- Contenedor de texto -->
            <div class="flex flex-col justify-center">
                <span
                    class="text-sm md:text-3xl text-dark-800 font-bold dark:font-semibold dark:text-light-300">Changuita</span>
                <span class="text-xs pl-1 md:text-md font-semibold text-dark-800  dark:text-light-300">Red social de
                    trabajo</span>
            </div>
        </a>

        <!-- Tema oscuro/claro -->
        <button id="theme-toggle" type="button"
            class="flex items-center p-4 text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300 focus:outline-none text-sm transition duration-300 ease-in-out transform hover:scale-105">
            <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Menú de navegación -->
        
    </div>
</nav>

<div class="min-h-screen flex items-center justify-center">
<div class="w-full  max-w-md mx-auto bg-light-200 dark:bg-dark-800 p-6 rounded-lg shadow-lg space-y-6">
    <!-- Título del formulario -->
    <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Cambiar Contraseña</h2>
   

    <!-- Formulario -->
    <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
        @csrf <!-- Directiva de Laravel para proteger el formulario -->

        <!-- Campo de correo electrónico autocompletado -->
        <div>
    <label for="email" class="block text-sm font-medium text-dark-600 dark:text-white">Correo Electrónico</label>
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" id="email" name="email" 
        class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-white"
        >
</div>


       <!-- Campo de nueva contraseña -->
       <div>
            <label for="new-password" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Nueva Contraseña</label>
            <input type="password" id="password" name="password"
                class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                required>
               
            </div>

        <!-- Campo de confirmar nueva contraseña -->
        <div>
            <label for="confirm-password" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Confirmar Nueva Contraseña</label>
            <input type="password" id="confirm-password" name="password_confirmation"
                class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                required>
                
            </div>

        <!-- Botón de guardar cambios -->
        <div class="flex justify-center">
            <button type="submit" class="btn-primary w-2/5 sm:w-auto">Guardar Cambios</button>
            @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        </div>
    </form>
</div>
</div>


    <script src="/modo.js"></script>
<script src="/jstemporal.js"></script>
</body>

</html>

















<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email" placeholder="Tu correo electrónico" required>
    <input type="password" name="password" placeholder="Nueva contraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
    <button type="submit">Cambiar contraseña</button>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</form>
