@auth 

@if(session('user'))
    @php
        $user = session('user');
    @endphp
@else
    <!-- Mostrar mensaje o elemento alternativo si no hay información del usuario -->
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileButton = document.getElementById('profile-menu-button');
        const dropdownMenu = document.getElementById('dropdown-menu');

        profileButton.addEventListener('click', function () {
            dropdownMenu.classList.toggle('hidden');
        });

        // Opcional: Cierra el menú si se hace clic fuera de él
        document.addEventListener('click', function (event) {
            if (!profileButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    });
</script>


<nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-200 dark:bg-dark-950 dark:border-dark-600">
    <div class="flex flex-col md:flex-row items-center justify-between w-full p-4 md:p-6 bg-light-200 dark:bg-dark-950">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/Logo.png') }}" class="w-16 h-16 object-contain" alt="Logo" />
                <!-- Texto -->
                <span class="text-sm pr-16 md:text-3xl text-dark-900 font-semibold dark:text-light-200">Changuita</span>
            </a>
            <!-- dia noche -->
            <button id="theme-toggle" type="button"
                class="flex items-center p-4 text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300 focus:outline-none   text-sm transition duration-300 ease-in-out transform hover:scale-105">
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
        </div>

        <!-- Menú principal -->
        <!-- Menú para pantallas grandes -->
        <div class="hidden md:flex items-center justify-center flex-grow">
            <ul class="flex flex-row space-x-8 p-4 rounded-lg">
                <li>
                    <a href="#"
                        class="text-xl font-medium  hover:text-info-500   dark:hover:text-info-400 block px-4 py-2 rounded">Trabajos</a>
                </li>
                <li>
                    <a href="#"
                        class="text-xl font-medium  hover:text-info-500   dark:hover:text-info-400 block px-4 py-2 rounded">Perfiles</a>
                </li>
                    <li>
                       <a href="{{url('/paid-service')}}"
                       class="text-xl font-medium  hover:text-info-500   dark:hover:text-info-400 block px-4 py-2 rounded"
                       
                       >Subscripciones</a> 
                    </li>
                <li>
                    <a href="#"
                        class="text-xl font-medium  hover:text-info-500   dark:hover:text-info-400 block px-4 py-2 rounded">Notificación</a>
                </li>
            </ul>
        </div>
        <div class="flex">

            <!-- Menú para pantallas pequeñas -->
            <div class="md:hidden flex items-center space-x-4">
                <a href="#"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-100 hover:text-info-500 dark:hover:text-info-400">
                    <img src="/img/ico-nav/trabajo.png" class="w-8 h-8" alt="Trabajos" />
                    <span class="text-sm mt-1">Trabajos</span>
                </a>
                <a href="#"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-100 hover:text-info-500 dark:hover:text-info-400">
                    <img src="/img/ico-nav/perfiles.png" class="w-8 h-8" alt="Perfiles" />
                    <span class="text-sm mt-1">Perfiles</span>
                </a>
                <a href="#"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-100 hover:text-info-500 dark:hover:text-info-400">
                    <img src="/img/ico-nav/charla.png" class="w-8 h-8" alt="Notificación" />
                    <span class="text-sm mt-1">Notificación</span>
                </a>
            </div>



            <!-- Foto de perfil y menú desplegable -->
            <div class="relative flex items-center px-4 md:justify-end md:flex-grow">
                <!-- Foto de perfil-->
                <button type="button" id="profile-menu-button" class="flex items-center space-x-2">
    <img class="w-12 h-12 rounded-full border border-complem-400 md:w-16 md:h-16"
        src="/img/f-perfil/Pw (3).png" alt="user photo">
    <svg class="w-6 h-6 text-dark-800 dark:text-light-200 hidden md:block" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
        viewBox="0 0 24 24">
        <path fill-rule="evenodd"
            d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z"
            clip-rule="evenodd" />
    </svg>
    <span class="hidden md:block pr-8 text-xl text-dark-900 dark:text-light-200">{{$user->name}}</span>
</button>


                <!-- Menú desplegable -->
                <div id="dropdown-menu"
    class="absolute right-0 top-full mt-2 w-48 md:w-60 bg-light-200 divide-y divide-dark-100 rounded-lg shadow-lg dark:bg-dark-700 dark:divide-dark-600 hidden z-50">
    <div class="px-4 py-3">
        <span class="block text-sm text-dark-500 dark:text-dark-400">Profeción o estado</span>
        <span class="block text-sm text-dark-500 dark:text-dark-400">{{$user->email}}</span>
    </div>
    <ul class="py-2 text-sm md:text-base">
        <li><a href="#"
                class="block px-4 py-2 text-dark-700  dark:text-dark-200 dark:hover:text-light-200">Panel</a>
        </li>
        <li><a href="#"
                class="block px-4 py-2 text-dark-700  dark:text-dark-200 dark:hover:text-light-200">Configuración</a>
        </li>
        <li><a href="#"
                class="block px-4 py-2 text-dark-700  dark:text-dark-200 dark:hover:text-light-200">Mensajes</a>
        </li>
        <li>
    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="block px-4 py-2 text-dark-700 dark:text-dark-200 dark:hover:text-light-200">
            Cerrar sesión
        </button>
    </form>
        </li>

    </ul>
</div>

            </div>
        </div>
    </div>
</nav>
@endauth

@guest
<nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-200 dark:bg-dark-950 dark:border-dark-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/welcome" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/Logo.png') }}" class="w-16 h-16 object-contain" alt="Logo" />
            <span class="text-sm pr-16 md:text-3xl text-dark-900 font-semibold dark:text-light-200">Changuita</span>
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
        <div class="w-full flex justify-end md:w-auto">
            <ul
                class="flex justify-center items-center space-x-8 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-dark-800 md:dark:bg-transparent dark:border-dark-700">
                <li>
                    <a href="{{ url('/paid-service') }}"
                        class="text-lg font-normal py-2 hover:text-info-500  dark:hover:text-info-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Subcripción
                    </a>
                </li>
                <li>
                    <a href="{{ url('/login') }}"
                        class="text-lg font-normal py-2 hover:text-info-500  dark:hover:text-info-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ url('/register') }}"
                        class="text-lg font-normal py-2 hover:text-info-500  dark:hover:text-info-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Registro
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>



@endguest