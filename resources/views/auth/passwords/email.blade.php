<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Red de Trabajos' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- No borrar nada de aca/tailwind css -->
    <link rel="stylesheet" href="/style.global.css">
    <!-- HTMX -->
    <script src="/htmx-v1-9-12.min.js"></script>
    <script src="/modoinicio.js"></script>
</head>

<body class="text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900">
    <!-- Loading Spinner -->
    <div id="loading-spinner" class="fixed inset-0 flex items-center justify-center bg-dark-800 bg-opacity-75 z-50 hidden">
        <div class="spinner-border animate-spin inline-block w-12 h-12 border-4 border-primary-500 border-t-transparent rounded-full"></div>
    </div>

    <nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
        <div class="w-full sm:w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/Logo.png') }}" class="w-16 h-16 object-contain" alt="Logo" />
                <div class="flex flex-col justify-center">
                    <span class="text-sm md:text-3xl text-dark-800 font-bold dark:font-semibold dark:text-light-300">Changuita</span>
                    <span class="text-xs pl-1 md:text-md font-semibold text-dark-800 dark:text-light-300">Red social de trabajo</span>
                </div>
            </a>
        </div>
    </nav>

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md mx-auto bg-light-200 dark:bg-dark-800 p-6 rounded-lg shadow-lg space-y-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Recuperar Contraseña</h2>
                <a href="/login" class="p-4 text-primary-700 hover:text-complem-400 cursor-pointer">
                    <svg class="w-6 h-6 text-dark-800 dark:text-light-100" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                </a>
            </div>

            <p class="text-normal font-base text-dark-700 dark:text-dark-300">Recuerde que solo tiene 3 intentos cada 24 horas para recuperar su contraseña.</p>

            <!-- Formulario -->
            <form action="{{ route('password.email') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Campo de correo electrónico -->
                <div class="mb-4">
                    <label for="email" class="block text-dark-700 dark:text-dark-200">Correo Electrónico</label>
                    <input type="email" id="email" name="email"
                        class="p-2 border text-dark-700 border-dark-300 rounded-md w-full focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botón enviar -->
                <div class="flex justify-center">
                    <input type="submit" class="btn-primary w-2/5 sm:w-auto" value="Enviar">
                </div>

                @if (session('status'))
                    <p class="text-green-500 text-sm">{{ session('status') }}</p>
                @endif
            </form>
        </div>
    </div>

    <script src="/modo.js"></script>
    <script src="/jstemporal.js"></script>
</body>

</html>
