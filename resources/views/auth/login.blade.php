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
<style>
        .message-success {
            background-color: #d4edda; /* Fondo verde claro */
            color: #155724; /* Texto verde oscuro */
            border: 1px solid #c3e6cb; /* Borde verde claro */
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem; /* Bordes redondeados */
            margin-bottom: 1rem; /* Espacio en la parte inferior */
        }
        .message-error {
            background-color: #f8d7da; /* Fondo rojo claro */
            color: #721c24; /* Texto rojo oscuro */
            border: 1px solid #f5c6cb; /* Borde rojo claro */
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem; /* Bordes redondeados */
            margin-bottom: 1rem; /* Espacio en la parte inferior */
        }
    </style>

<body class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900">
    <!-- Loading Spinner -->
    <div id="loading-spinner"
        class="fixed inset-0 flex items-center justify-center bg-dark-800 bg-opacity-75 z-50 hidden">
        <div
            class="spinner-border animate-spin inline-block w-12 h-12 border-4 border-primary-500 border-t-transparent rounded-full">
        </div>
    </div>



    <nav
        class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
        <div class="w-full sm:w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/Logo.png') }}"
                    class="w-16 h-16 object-contain filter drop-shadow-[0_0_10px_theme(colors.primary.300/20%)]"
                    alt="Logo" />
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

    <div class="w-screen h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('/img/red1.png');">
    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <!-- Contenedor principal -->
    <div class="flex flex-col sm:flex-row justify-center w-full sm:w-3/4 mx-auto z-10 relative h-[80%]">
        <div class="w-full h-full p-6">
            <!-- Bloques alineados verticalmente en pantallas pequeñas -->
            <div class="flex flex-col sm:flex-row space-y-8 sm:space-x-8 sm:space-y-0 h-full w-full sm:w-full bg-dark-900/30 rounded-lg shadow-lg backdrop-blur-lg border border-dark-700 dark:shadow-[0_0_10px_theme(colors.primary.700/80%)] mx-auto p-4 sm:p-6">
                    <!-- Bloke A -->
                    <div class="flex-1 flex flex-col justify-center  pl-8">
                        <div class="flex flex-col items-center text-center mb-8 hidden sm:flex">
                            <!-- Logo -->
                            <img src="{{ asset('img/Logo.png') }}" alt="Logo"
                                class="w-20 h-20 object-contain mb-1 filter drop-shadow-[0_0_10px_theme(colors.light.300/80%)]">

                            <h1 class="text-xl sm:text-2xl font-bold tracking-wide text-light-300">
                                Changuitas
                            </h1>

                            <p class="text-lg font-normal text-light-300">
                                Red social de trabajo
                            </p>
                        </div>
                        <div class="items-start">
                            <h2
                                class="text-xl sm:text-4xl font-extrabold mb-4 bg-gradient-to-r from-[theme(colors.primary.600)] to-[theme(colors.complem.400)] text-transparent bg-clip-text leading-tight filter drop-shadow-[0_0_10px_theme(colors.dark.950/90%)]">
                                Bienvenido a Changuitas
                            </h2>
                            <p class="text-sm sm:text-2xl font-light text-light-300">
                                Descubre oportunidades laborales y encuentra a los mejores profesionales para tus
                                necesidades. Conéctate, colabora y crece con nuestra red social de trabajo.
                            </p>
                        </div>
                    </div>

                    <!-- Bloke B (Formulario de inicio de sesión) -->
                    <div class="flex-1 flex items-center justify-center p-2">
                        <form method="POST" action="{{ route('auth') }}"
                            class="w-full max-w-md p-4 bg-light-200 dark:bg-dark-900 rounded-lg shadow-lg backdrop-blur-lg border border-primary-800 dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] mx-auto">
                            @csrf

                            <div class="flex items-center justify-between mb-4 text-dark-800 dark:text-dark-200">
                                <h2 class="font-normal text-xl sm:text-2xl">Inicio de sesión</h2>
                                <!-- Cerrar ventana -->
                                <div class="flex">
                                    <div onclick="window.location.href='{{ url('/') }}'"
                                        class="p-2 sm:p-4 text-primary-700 hover:text-complem-400 cursor-pointer">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18L18 6M18 18L6 6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>


                 <!-- Mensaje de error -->
            @if ($errors->any())
                <div class="message-error">
                    @foreach ($errors->all() as $error)
                        <p  >{{ $error }}</p>
                    @endforeach
                </div>
            @endif


            @if (session('success'))
                 <div class="message-success">
                        {{ session('success') }}
                        </div>
    
                @endif


                @if (session('status'))
                    <div class="message-success">
                    {{ session('status') }}
                        </div>
                @endif

                           


                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-dark-800 dark:text-dark-200">Email</label>
                                <input type="email" id="email" name="email"
                                    class="p-2 border border-dark-300 dark:border-dark-500 rounded-md w-full text-dark-800 dark:text-dark-200 bg-light-100 dark:bg-dark-800"
                                    required>
                                <span class="text-danger-600 text-sm mt-2 block">
                                    <!-- Mensaje de error (ejemplo) -->
                                    <span class="text-danger-600 text-sm mt-2 block"></span>
                                </span>
                            </div>

                            <div class="mb-4">
                                <label for="password"
                                    class="block text-sm font-medium text-dark-800 dark:text-dark-200">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="p-2 border border-dark-300 dark:border-dark-500 rounded-md w-full text-dark-800 dark:text-dark-200 bg-light-100 dark:bg-dark-800"
                                    required>
                                <span class="text-danger-600 text-sm mt-2 block"></span>
                            </div>

                            <div class="flex items-center mb-4">
                                <p>Olvidaste tu contraseña?</p>
                                <a class="text-primary-800 dark:text-primary-500 hover:underline" href="{{ url('/password/reset') }}">
                                    Recuperar contraseña
                                </a>
                            </div>

                            <input type="submit"
                                class="w-full bg-info-600 text-light-200 px-4 py-2 rounded-md hover:bg-info-700 cursor-pointer"
                                value="Iniciar sesión">

                            <p class="py-2 text-sm text-dark-600 dark:text-dark-300">ya estás
                                registrado?<a href="{{ url('/register') }}"
                                    class="text-primary-800 dark:text-primary-500 hover:underline">Regístrate</a></p>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="/modo.js"></script>
    <script src="/jstemporal.js"></script>
</body>

</html>