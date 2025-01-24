@auth

@if(session('user'))
    @php
        $user = session('user');
    @endphp
@else
    <!-- Mostrar mensaje o elemento alternativo si no hay información del usuario -->
@endif


<nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
    <div class="flex flex-col md:flex-row items-center justify-between w-full p-2  bg-light-200 dark:bg-dark-950">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
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
            <ul class="flex flex-row space-x-8 rounded-lg">
                <li>
                    <a href="{{ url('/jobs') }}"
                        class="text-xl font-medium  hover:text-primary-600  block px-4 py-2 rounded">Trabajo</a>
                </li>
             
                <li>
                    <a href="/profiles" class="text-xl font-medium  hover:text-primary-600 block px-4 py-2 rounded">Perfiles</a>
                </li>
                <li>
                    <a href="{{route('notificaciones.index')}}"
                        class="text-xl font-medium  hover:text-primary-600  block px-4 py-2 rounded">Notificación</a>
                </li>
            </ul>
        </div>
        <div class="flex">

            <!-- Menú para pantallas pequeñas -->
            <div class="md:hidden flex items-center space-x-4">
                <a href="{{ url('/job') }}"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-300 hover:text-primary-600 hover:shadow-sm">
                    <img src="/img/ico-nav/trabajo.png" class="w-8 h-8" alt="Trabajos" />
                    <span class="text-sm mt-1">Trabajos</span>
                </a>
            
                <a href="#"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-100 hover:text-primary-600 hover:shadow-sm">
                    <img src="/img/ico-nav/perfiles.png" class="w-8 h-8" alt="Perfiles" />
                    <span class="text-sm mt-1">Perfiles</span>
                </a>
                <a href="#"
                    class="flex flex-col items-center text-dark-800 dark:text-dark-100 hover:text-primary-500 dark:hover:text-primary-400">
                    <img src="/img/ico-nav/campana.png" class="w-8 h-8" alt="Notificación" />
                    <span class="text-sm mt-1">Notificación</span>
                </a>
            </div>
            <div class="flex">


<!-- Foto de perfil y menú de notificaciones -->
<div class="relative flex items-center px-2 md:justify-end md:flex-grow">
    <!-- Icono de notificación -->
    <button type="button" id="notification-menu" class="flex items-center justify-center btn-R-neutro" onclick="markNotificationsAsRead()">
    
    <div class="relative inline-block">
        <!-- SVG de la campana -->
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
            class="w-8 h-8 font-light text-light-600 dark:text-light-300" viewBox="0 0 100 100"
            preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0,100) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                <path d="M448 828 c-13 -13 -45 -34 -72 -48 -77 -39 -106 -88 -118 -196 -13
                    -124 -24 -158 -63 -200 -34 -36 -53 -90 -41 -119 4 -12 27 -15 121 -15 95 0
                    115 -3 115 -15 0 -8 13 -29 29 -47 43 -48 119 -48 162 0 16 18 29 39 29 47 0
                    12 20 15 115 15 94 0 117 3 121 15 12 29 -7 83 -41 119 -39 42 -50 76 -63 200
                    -12 108 -41 157 -118 196 -27 14 -59 35 -72 48 -13 13 -34 22 -52 22 -18 0
                    -39 -9 -52 -22z m62 -73 c0 -8 16 -19 40 -25 51 -14 96 -52 108 -93 6 -18 13
                    -62 16 -98 9 -92 30 -156 62 -190 l28 -29 -264 0 -264 0 28 29 c32 34 53 98
                    62 190 3 36 10 80 16 98 12 41 57 79 108 93 24 6 40 17 40 25 0 8 5 15 10 15
                    6 0 10 -7 10 -15z" />
            </g>
        </svg>
        <!-- Punto de notificación con conteo -->
        <span class="absolute top-0 right-1 bg-complem-500 rounded-full w-4 h-4 border-1 border-complem-800 animate-bounce flex items-center justify-center text-xs text-white">
{{ auth()->user()->notifications()->whereNull('read_at')->where('data->type', 'job_application')->count() }}
        </span>
    </div>
</button>






    <!-- Lista de notificaciones -->
    <ul id="notificationList" 
    class="absolute right-5 top-full mt-2 w-72 md:w-80 lg:w-96 bg-light-100 divide-y divide-dark-300 rounded-md shadow-lg dark:bg-dark-700 dark:divide-dark-600 hidden z-50 p-4">
    
    @php
        $notifications = auth()->user()->notifications()
            ->whereNull('read_at')
            ->where('data->type', 'job_application')
            ->orderByDesc('created_at')
            ->take(4)
            ->get();
    @endphp

    @if ($notifications->isEmpty())
        <p>No hay notificaciones nuevas.</p>
    @else
        @foreach ($notifications as $notification)
            <li class="p-3 cursor-pointer hover:bg-light-200 dark:hover:bg-dark-600 transition duration-200">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4 p-3 border-b border-gray-200 dark:border-gray-700">
                        <!-- Imagen de perfil -->
                        <img class="w-16 h-16 rounded-full border-2 border-complem-400 md:w-16 md:h-16" 
                            src="{{ isset($notification->data['picture']) ? Storage::url($notification->data['picture']) : asset('img/default-profile.png') }}" 
                            alt="Foto de perfil">

                        <div class="flex-1">
                            <!-- Mensaje de la notificación -->
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                 {{ $notification->data['message'] }}
                            </p>

                            <!-- Fecha de creación de la notificación -->
                            <div class="flex items-center justify-between text-xs text-gray-500 mt-1">
                                <span>{{ $notification->created_at->diffForHumans() }}</span>

                                <a href="{{ route('postulantes.index', $notification->data['job_id']) }}" class="pl-2 text-info-500 hover:underline">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @endif
</ul>

</ul>


</div>
<button type="button" id="message-menu" class="flex items-center justify-center btn-R-neutro" onclick="">
    <div class="relative inline-block">
        <!-- Ícono Estético de burbuja de chat -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-light-600 dark:text-light-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4C4 3.44772 4.44772 3 5 3H19C19.5523 3 20 3.44772 20 4V14C20 14.5523 19.5523 15 19 15H5C4.44772 15 4 14.5523 4 14V4Z"/>
            <path d="M4 14L12 20L20 14" />
        </svg>
        <span class="absolute top-0 right-1 bg-complem-500 rounded-full w-4 h-4 border-1 border-complem-800 animate-bounce flex items-center justify-center text-xs text-white">
{{ auth()->user()->notifications()->whereNull('read_at')->where('data->type', 'message')->count() }}
        </span>
    </div>
    </div>
</button>








<script>
// Selecciona el botón y la lista de notificaciones
const notificationButton = document.getElementById('notification-menu');
const notificationList = document.getElementById('notificationList');
const mensajesButton = document.getElementById('mensajes-menu');
const mensajesList = document.getElementById('mensajesList');

// Variable para controlar si el menú está abierto
let isNotificationListOpen = false;

// Añadir un event listener para alternar la visibilidad
notificationButton.addEventListener('click', (event) => {
    event.stopPropagation(); // Detiene la propagación del evento
    isNotificationListOpen = !isNotificationListOpen; // Alterna el estado del menú
    notificationList.classList.toggle('hidden'); // Toggle para mostrar/ocultar la lista
});

// Función para marcar las notificaciones como leídas
function markNotificationsAsRead() {
    fetch('{{ route('notifications.markAsRead') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Asegúrate de incluir el token CSRF
        },
    })
    .then(response => {
        if (response.ok) {
            // Si la respuesta es exitosa, actualiza la cantidad de notificaciones
            document.querySelector('.absolute.top-0.right-1').textContent = '0'; // Cambiar el contador a 0
        }
    })
    .catch(error => console.error('Error:', error));
}

// Cerrar el menú si se hace clic fuera
document.addEventListener('click', function(event) {
    const isClickInsideNotification = notificationButton.contains(event.target) || notificationList.contains(event.target);
    
    if (!isClickInsideNotification && isNotificationListOpen) {
        // Solo si el menú está abierto
        markNotificationsAsRead(); // Marca las notificaciones como leídas
        notificationList.classList.add('hidden'); // Cierra el modal de notificaciones
        isNotificationListOpen = false; // Resetea el estado
    }
});

// Lógica similar para el menú de mensajes
mensajesButton.addEventListener('click', (event) => {
    event.stopPropagation(); // Detiene la propagación del evento
    mensajesList.classList.toggle('hidden'); // Toggle para mostrar/ocultar la lista
});

// Cerrar el menú si se hace clic fuera de mensajes
document.addEventListener('click', function(event) {
    const isClickInsideMensajes = mensajesButton.contains(event.target) || mensajesList.contains(event.target);
    
    if (!isClickInsideMensajes) {
        mensajesList.classList.add('hidden'); // Cierra el modal de mensajes
    }
});
</script>




            <!-- Foto de perfil y menú desplegable -->
            <div class="relative flex items-center px-4 md:justify-end md:flex-grow">
                <!-- Foto de perfil-->
                <button type="button" id="profile-menu" class="flex items-center space-x-2 ">
                    <img class="w-12 h-12 rounded-full border border-complem-400 md:w-16 md:h-16"
                    src="{{ optional(auth()->user()->profile)->profile_picture ? Storage::url(auth()->user()->profile->profile_picture) : '/img/default-profile.png' }}"
                    alt="user photo" onclick="toggleDropdown()"> 
                    <svg class="w-6 h-6 text-dark-800 dark:text-light-200 hidden md:block  hover:text-primary-600 dark:hover:text-primary-600 hover:shadow-sm"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z"
                            clip-rule="evenodd" />
                    </svg>

                 
                    <span class="hidden md:block pr-8 text-xl text-dark-900 dark:text-light-200">{{$user->name}}</span>

                </button>

                <!-- Menú desplegable -->
                <div id="dropdown-menu"
                    class="absolute right-0 top-full mt-2 w-48 md:w-60 bg-light-100 divide-y divide-dark-300 rounded-lg shadow-md dark:bg-dark-700 dark:divide-dark-600 hidden z-50">
                    <div class="px-4 py-3  shadow-xl ">
                        <a href="{{ route('profile.personalData', $user->id) }}"
                            class="block text-md text-normal text-dark-500 dark:text-dark-400 hover:text-complem-400 dark:hover:text-complem-400">Mi
                            Perfil</a>
                            <span class="block text-sm text-dark-500 dark:text-dark-400">{{$user->email}}</span>
                    </div>
                    <ul class="py-2 text-sm md:text-base">
                        <li><a href="{{ url('/subscription') }}"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover:text-primary-600 dark:hover:text-primary-600">Subcripción</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover:text-primary-600 dark:hover:text-primary-600">Configuración
                                de Notificaciones</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover:text-primary-600 dark:hover:text-primary-600">Mensajes</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover:text-primary-600 dark:hover:text-primary-600">Soporte</a>
                        </li>
                        <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="block px-4 py-2 text-danger-700 dark:text-danger-500 dark:hover:text-light-200">
            Cerrar sesión
        </button>
    </form>
    <li>
    


    </li>
</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>
@endauth

@guest
<nav class="bg-light-100 fixed w-full z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
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
        <div class="w-full flex justify-end md:w-auto">
            <ul
                class="flex justify-center items-center space-x-8 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-dark-800 md:dark:bg-transparent dark:border-dark-700">
                <li>
                    <a href="{{ url('/paid-service') }}"
                        class="text-lg font-normal py-2 hover:text-primary-500  dark:hover:text-primary-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Subcripción
                    </a>
                </li>
                <li>
                    <a href="{{ url('/login') }}"
                        class="text-lg font-normal py-2 hover:text-primary-500  dark:hover:text-primary-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ url('/register') }}"
                        class="text-lg font-normal py-2 hover:text-primary-500  dark:hover:text-primary-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 cursor-pointer">
                        Registro
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endguest