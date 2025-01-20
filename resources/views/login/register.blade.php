<x-layout>
   
<div class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900 flex items-center justify-center h-screen">
    <!-- Loading Spinner -->
    <div id="loading-spinner"
        class="fixed inset-0 flex items-center justify-center bg-dark-800 bg-opacity-75 z-50 hidden">
        <div
            class="spinner-border animate-spin inline-block w-12 h-12 border-4 border-primary-500 border-t-transparent rounded-full">
        </div>
    </div>

    <div class="min-h-screen w-full flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('/img/red1.png');">
        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <!-- CONTENIDO -->
        <div
            class="bg-dark-900/50 rounded-lg shadow-lg backdrop-blur-lg border border-dark-700 dark:shadow-[0_0_10px_theme(colors.primary.700/80%)] w-full max-w-7xl h-[750px] mx-auto p-4 flex flex-col md:flex-row">
            <!-- Bloke A -->
            <div class="flex flex-col justify-center items-center max-w-xl mx-auto">
                <div class="flex flex-col items-center text-center p-6 pb-2 sm:pb-10">
                    <!-- Logo -->
                    <img src="img/Logo.png" alt="Logo"
                        class="w-40 h-40 object-contain mb-1 filter drop-shadow-[0_0_10px_theme(colors.light.300/80%)]">
                    <div>
                        <h4 class="text-lg md:text-4xl font-semibold tracking-wide mb-1 text-dark-100">Changuita</h4>
                        <p class="text-sm md:text-2xl text-dark-100">Red social de trabajo</p>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="text-center md:text-center  p-6">
                    <h2
                        class=" text-xl sm:text-4xl font-bold mb-4 bg-gradient-to-r from-[theme(colors.primary.600)] to-[theme(colors.complem.400)] text-transparent bg-clip-text leading-tight filter drop-shadow-[0_0_10px_theme(colors.dark.950/90%)]">
                        Bienvenido a Changuita
                    </h2>
                    <p class=" text-sm sm:text-xl font-light text-light-300">
                    Estás a punto de descubrir nuevas conexiones y oportunidades laborales. ¡Vamos a empezar!
                    </p>
                </div>
            </div>

            <div class="flex-1 md:w-1/2 px-4 pb-6 pt-0 flex flex-col justify-between h-full">
                <!-- Tema oscuro/claro -->
                <div class="flex justify-end p-2 sm:pb-2">
                    <button id="theme-toggle" type="button"
                        class="flex items-center text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300 focus:outline-none text-sm transition duration-300 ease-in-out transform hover:scale-105">
                        <!-- Icono de tema oscuro -->
                        <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <!-- Icono de tema claro -->
                        <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <!-- Bloke B (Formulario de inicio de sesión) -->
                <div class="flex justify-center items-center h-full">

    <!-- Formulario -->
    <form action="{{ route('register') }}" method="POST"  class="w-full max-w-xs p-4 bg-light-200 dark:bg-dark-900 rounded-lg shadow-lg border border-primary-800">
        @csrf
        <div class="flex items-center justify-between mb-4 text-dark-800 dark:text-dark-200">
            <h2 class="text-xl font-normal">Nuevo Usuario</h2>
            <!-- Cancelar -->
            <a href="{{ url('/') }}" class=" text-primary-700 hover:text-complem-400 cursor-pointer">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18L18 6M18 18L6 6" />
                                </svg>
                            </a>
                        </div>

        <!-- Mensajes de error generales -->
        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-500 text-xs list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-dark-800 dark:text-dark-200">Nombre de usuario</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-input w-full" required>

            
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-dark-800 dark:text-dark-200">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-input w-full" required>
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-dark-800 dark:text-dark-200">Contraseña</label>
            <input type="password" id="password" name="password"
                                class="form-input w-full"
                                title="La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-dark-800 dark:text-dark-200">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-input w-full"
                                title="La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un número">
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        

        
            <input type="submit" class="w-full bg-info-600 text-light-200 px-4 py-2 rounded-md hover:bg-info-700 cursor-pointer" value="Crear Usuario">
            
            <p class="mt-4 text-xs text-center text-dark-600 dark:text-dark-300">ya estás
                            registrado?<a href="{{ url('/login') }}"
                                class="text-primary-800 dark:text-primary-500 hover:underline">Inicia sesion</a>
                </div>
                </p>
    </form>
</div>
</div>

</div>

</div>


</div>


</x-layout>