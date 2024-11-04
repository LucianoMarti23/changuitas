<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template profiles</title>
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
    <!--  autenticado VISTA NOMAS -->
    <nav
        class="h-32 sm:h-24 bg-light-100 fixed w-full py-2 z-20 shadow-md border-b border-dark-400 dark:bg-dark-950 dark:border-dark-600">
        <div class="flex justify-between items-center p-2">
            <!-- Logo y texto -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/Logo.png') }}" class="w-10 h-10 sm:w-14 sm:h-14 object-contain" alt="Logo" />
                <div class="flex flex-col justify-center">
                    <span
                        class="text-md sm:text-lg md:text-3xl text-dark-800 font-bold dark:font-semibold dark:text-light-300">
                        Changuita
                    </span>
                    <span class="text-[10px] sm:text-xs md:text-md font-semibold text-dark-800 dark:text-light-300">
                        Red social de trabajo
                    </span>
                </div>
            </a>
            <!-- Menú para pantallas grandes -->
            <div class="hidden md:flex  w-3/4 items-center justify-center space-x-10">
                <!-- TRABAJO pantalla grande -->
                <div class="flex items-center ">
                    <a href="{{ url('/fulljobs') }}"
                        class="flex items-center justify-center text-xl font-medium   btn-R-neutro w-12 h-12 md:w-14 md:h-14 p-2 md:p-0">
                        <svg class="w-8 h-8 text-light-600 dark:text-light-300 inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01" />
                        </svg>
                    </a>
                </div>
                <!-- PERFILESS pantalla grande -->
                <div class="flex items-center ">
                    <a href="{{ url('/fullprofile') }}"
                        class="flex items-center justify-center text-md font-base btn-R-neutro w-12 h-12 md:w-14 md:h-14 p-2 md:p-0 hover:text-complem-400 ">
                        <svg class="w-8 h-8 text-light-600 dark:text-light-300 inline-block " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </div>
                <!-- Notificaciones en pantallas grandes -->
                <div class=" md:flex">
                    <button type="button" id="notification-menu"
                        class="flex items-center justify-center btn-R-neutro w-12 h-12 md:w-14 md:h-14 p-2 md:p-0"
                        aria-label="Notificaciones">
                        <div class="relative inline-block">
                            <!-- SVG de la campana -->
                            <svg class="w-8 h-8 font-light text-light-600 dark:text-light-300" viewBox="0 0 100 100">
                                <g transform="translate(0,100) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                                    <path
                                        d="M448 828 c-13 -13 -45 -34 -72 -48 -77 -39 -106 -88 -118 -196 -13 -124 -24 -158 -63 -200 -34 -36 -53 -90 -41 -119 4 -12 27 -15 121 -15 95 0 115 -3 115 -15 0 -8 13 -29 29 -47 43 -48 119 -48 162 0 16 18 29 39 29 47 0 12 20 15 115 15 94 0 117 3 121 15 12 29 -7 83 -41 119 -39 42 -50 76 -63 200 -12 108 -41 157 -118 196 -27 14 -59 35 -72 48 -13 13 -34 22 -52 22 -18 0 -39 -9 -52 -22z m62 -73 c0 -8 16 -19 40 -25 51 -14 96 -52 108 -93 6 -18 13 -62 16 -98 9 -92 30 -156 62 -190 l28 -29 -264 0 -264 0 28 29 c32 34 53 98 62 190 3 36 10 80 16 98 12 41 57 79 108 93 24 6 40 17 40 25 0 8 5 15 10 15 6 0 10 -7 10 -15z" />
                                </g>
                            </svg>
                            <span
                                class="absolute top-0 right-1 bg-complem-500 rounded-full w-2 h-2 border-1 border-complem-800 animate-bounce"></span>
                        </div>
                    </button>
                    <!-- Lista de notificaciones -->
                    <ul id="notificationList"
                        class="absolute right-0 top-full mt-2 w-48 md:w-60 bg-light-100 divide-y divide-dark-300 rounded-sm shadow-md dark:bg-dark-700 dark:divide-dark-600 hidden z-50">
                        <li class="p-3 cursor-pointer">
                            <div class="flex justify-between items-center">
                                <p class="font-medium line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Totam ea facere quae illum repudiandae quod non quidem nobis sit. Optio animi nemo
                                    delectus odit eum cum ratione doloremque maxime libero. Nueva actualización
                                    disponible
                                </p>
                                <button class="pl-2 text-info-500 hover:underline">Ver</button>
                            </div>
                        </li>
                        <li class="p-3 cursor-pointer">
                            <div class="flex justify-between items-center">
                                <p class="font-medium line-clamp-2">Mensaje de soporte</p>
                                <button class="pl-2 text-info-500 hover:underline">Ver</button>
                            </div>
                        </li>
                        <!-- Puedes agregar más notificaciones aquí -->
                    </ul>
                </div>
                <!-- Icono de mensajes en pantallas grandes -->
                <div class=" hidden md:flex">
                    <button type="button" id="mensajes-menu"
                        class="flex items-center justify-center btn-R-neutro w-12 h-12 md:w-14 md:h-14 p-2 md:p-0"
                        aria-label="Mensajes">
                        <div class="relative inline-block">
                            <!-- SVG de chat -->
                            <svg class="w-8 h-8 text-light-600 dark:text-light-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z" />
                            </svg>
                            <span
                                class="absolute top-0 right-0 bg-complem-500 rounded-full w-2 h-2 border-1 border-complem-800 animate-bounce"></span>
                        </div>
                    </button>
                    <!-- Lista de mensajes -->
                    <ul id="mensajesList"
                        class="absolute right-0 top-full mt-2 w-48 md:w-96 bg-light-100 divide-y divide-dark-300 rounded-sm shadow-md dark:bg-dark-700 dark:divide-dark-600 hidden z-50">
                        @for ($i = 1; $i <= 5; $i++) <li class="p-3 cursor-pointer">
                            <div class="flex justify-between items-center">
                                <p class="font-medium line-clamp-2">Mensaje Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Ex officia consequuntur maiores natus molestias iure beatae
                                    quibusdam
                                    laboriosam voluptatibus et molestiae officiis reiciendis, neque repellendus qui esse
                                    vel, laudantium magnam.</p>
                            </div>
                            <span
                                class="absolute right-5 bg-complem-500 rounded-full w-2 h-2 border-1 border-complem-800"></span>
                            <span class="pl-4 pt-4 text-dark-400">hace 2 minutos</span>
                            </li>
                            @endfor
                    </ul>
                </div>
                <div class="flex justify-end gap-2">
                    <!--  -->
                    <div class="sm:flex py-2 h-15 relative">
                        <!-- Botón búsqueda -->
                        <button id="search-toggle"
                            class="flex items-center justify-center text-xl font-medium   btn-R-neutro w-12 h-12 md:w-14 md:h-14 p-2 md:p-0">
                            <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                        <!-- Formulario oculto inicialmente con transición dentro del contenedor -->
                        <form id="search-form" action="{{ url('/search') }}" method="GET"
                            class="absolute  left-14  w-0 h-12 overflow-hidden transition-all duration-300">
                            <input type="text" name="query" id="search-input"
                                class=" p-2 ml-2 border h-12 border-dark-400 rounded-full bg-dark-50 text-dark-900 dark:bg-dark-800 dark:border-dark-600 dark:text-light-100 focus:outline-none"
                                placeholder="Buscar trabajos o perfiles...">
                        </form>
                    </div>
                </div>
            </div>
            <!--LLama al menu con foto de perfil [components/menu-user.blade.php]-->
            <!-- Foto de perfil y menú desplegable -->
            <div class="relative flex items-center px-4 sm:justify-end sm:flex-grow">
                <!-- Foto de perfil-->
                <button type="button" id="menu-user" class="flex items-center space-x-2 ">
                    <img class="w-12 h-12 rounded-full border border-complem-400 md:w-16 md:h-16"
                        src="/img/f-perfil/Pw (3).png" alt="user photo">
                    <svg class="w-6 h-6 text-dark-800 dark:text-light-200 hidden md:block  hover:text-primary-600 dark:hover:text-primary-600 hover:shadow-sm"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M18.425 10.271C19.499 8.967 18.57 7 16.88 7H7.12c-1.69 0-2.618 1.967-1.544 3.271l4.881 5.927a2 2 0 0 0 3.088 0l4.88-5.927Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span
                        class="hidden md:block pr-8 text-xl text-dark-900 dark:text-light-200  hover:text-primary-600 dark:hover:text-primary-600 ">Juancito</span>
                </button>
                <!-- Menú desplegable Perfil -->
                <div id="dropdown-menu"
                    class="absolute right-0 top-full mt-2 w-48 md:w-60 bg-light-100 divide-y divide-dark-300 rounded-lg shadow-md dark:bg-dark-700 dark:divide-dark-600  z-50">
                    <div class="px-4 py-3  shadow-xl ">
                        <a href="{{ url('/myprofile') }}"
                            class="block text-md text-normal text-dark-500 dark:text-dark-400 hover:text-complem-400 dark:hover:text-complem-400 focus:outline-none transition duration-300 ease-in-out transform hover:scale-105">Mi
                            Perfil</a>
                        <span class="block text-sm text-dark-500 dark:text-dark-400">name@gmail.com</span>
                    </div>
                    <ul class="py-2 text-sm md:text-base">
                        <li>
                            <button id="theme-toggle" type="button"
                                class="flex items-center space-x-2 p-2 text-dark-800 dark:text-dark-200 hover:text-dark-700 dark:hover:text-dark-300 focus:outline-none transition duration-300 ease-in-out transform hover:scale-105">
                                <!-- Ícono oscuro -->
                                <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <!-- Texto "Modo Oscuro" -->
                                <span id="theme-toggle-text" class="hidden dark:inline">Modo oscuro</span>
                                <!-- Ícono claro (oculto inicialmente) -->
                                <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                                <!-- Texto "Modo Claro" -->
                                <span id="theme-toggle-text-light" class="inline dark:hidden">Modo claro</span>
                            </button>
                        </li>
                        <li><a href="{{ url('/subscriptionInfo') }}"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover-list-primary">Subcripción</a>
                        </li>
                        <li><a href="{{ url('/notificationSettings') }}"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover-list-primary">Configuración
                                de Notificaciones</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2 text-dark-700 dark:text-dark-200 hover-list-primary">Soporte</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2 text-danger-500 dark:text-danger-400 hover-list-primary hover:text-danger-400">
                                <svg class="w-6 h-6 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                </svg>
                                Cerrar
                                sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!--nevegacion celular CEL-->
        <div
            class="flex  justify-between sm:justify-start sm:gap-4 items-center w-full px-2 text-dark-800 dark:text-dark-300 rounded-lg">
            <!--BNT ATRAS pantalla CEL-->
            <button id="atras"
                class="flex sm:mt-8   bg-dark-400 dark:bg-dark-800  items-center p-2  text-dark-800 dark:text-dark-300 rounded-xl">
                <svg class="w-6 h-6 text-dark-800 dark:text-light-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                <span class=" hidden lg:inline-block lg:ml-2">Volver</span>
            </button>
            <!-- Buscar pantalla CEL -->
            <div class="felx sm:hidden p-2 w-full ">
                <form action="#" method="GET" class=" flex relative">
                    <input type="text" name="query" id="search-input" class="flex-grow p-2  border border-dark-400 rounded-xl bg-dark-50 text-dark-900 dark:bg-dark-800 dark:border-dark-600 dark:text-light-100
                         focus:outline-none" placeholder="Buscar trabajos o perfiles...">
                </form>
            </div>
            <!-- BTN ATAJO -->
            <button id="openAtajosButton"
                class="relative flex sm:hidden sm:mt-8 bg-primary-600 items-center p-2  text-dark-800 dark:text-dark-300 rounded-xl">
                <span
                    class=" absolute top-0 right-0 bg-dark-700 rounded-full w-3 h-3 border-2 border-light-300 "></span>
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                </svg>
                <span class=" hidden lg:inline-block lg:ml-2">Menu</span>
            </button>
        </div>
        <!-- Menú para pantallas flotante móviles -->
        <div
            class="fixed bottom-3 p-1 m-4  bg-dark-800 text-light-400 shadow-lg rounded-full dark:border-dark-600 md:hidden">
            <ul class="flex justify-between gap-6 items-center p-2">
                <li>
                    <a href="" class="flex  items-center btn-R-primary">
                        <svg class="w-8 h-8 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="" class="flex  items-center  btn-R-primary ">
                        <svg class="w-8 h-8 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <!-- PUBLICAR MODIFICAR -->
                <li>
                    <a href="#publica" class="flex  items-center btn-R-primary">
                        <svg class="w-8 h-8 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <!-- estella Favoritos? guardado? [connections]-->
                <li>
                    <a href="" class="flex  items-center  btn-R-primary">
                        <svg class="w-8 h-8 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <!-- Icono de mensajes -->
                    <a href="" id="mensajes-menu" class="flex items-center btn-R-primary">
                        <!-- Icono de mensajes -->
                        <svg class="w-8 h-8 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute top-3 right-3 bg-complem-500 rounded-full w-2 h-2 border-1 border-complem-800 animate-bounce"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- MENU DE FILTROS -->
   
        <script>
        // Obtener elementos del DOM
        const openAtajosButton = document.getElementById('openAtajosButton');
        const sidePanel = document.getElementById('sidePanel');
        // Función para alternar la visibilidad del panel
        openAtajosButton.addEventListener('click', () => {
            sidePanel.classList.toggle('-translate-x-full'); // Cambiar clase para mostrar/ocultar el panel
        });
        </script>
        <!--CONTENIDO DE LA PAGINA-->
        <div class="w-3/4 p-4">
            <!--CONTENIDO DE LA PAGINA-->
            <div class="pt-16  relative">
                <!-- Imagen de fondo (solo en modo oscuro) 
        <div class="absolute inset-0 bg-cover bg-center opacity-50 -z-10 dark:block hidden"
            style="background-image: url('img/Estrella.jpg');">
            
        </div>
        
        <div class="absolute inset-0 -z-20 dark:block hidden">
            <div
                class="h-full bg-gradient-to-b from-dark-900 to-primary-500 dark:from-dark-900 dark:to-primary-500 opacity-75">
            </div>
        </div>
        -->
                <div class="w-full max-w-7xl mx-auto px-4 py-6 relative z-10">
                    <h2 class="text-2xl text-center font-bold text-dark-900 dark:text-dark-200 mb-4">Usuarios Destacados
                    </h2>
                    <!-- Contenedor de las burbujas -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                        <div class="relative w-64 h-64 mx-auto">
                            <div class="relative h-full w-full flex items-center justify-center">
                                <div
                                    class="profileCard_container relative p-10 border-2 border-dashed rounded-full border-spacing-4 border-dark-400/50">
                                    <!--FOTOGRAFIA-->
                                    <button
                                        class="profile_item w-[200px] h-[200px] p-1 border-2 rounded-full hover:border-dark-400/50 cursor-pointer transition-all duration-500 z-0">
                                        <div
                                            class="w-full bg-light-200 h-full flex items-center justify-center p-2 rounded-full active:scale-95 hover:scale-95 object-cover transition-all duration-500">
                                            <span class="w-20 h-20 inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.99296258,10.5729355 C12.478244,10.5729355 14.4929626,8.55821687 14.4929626,6.0729355 C14.4929626,3.58765413 12.478244,1.5729355 9.99296258,1.5729355 C7.5076812,1.5729355 5.49296258,3.58765413 5.49296258,6.0729355 C5.49296258,8.55821687 7.5076812,10.5729355 9.99296258,10.5729355 Z M10,0 C13.3137085,0 16,2.6862915 16,6 C16,8.20431134 14.8113051,10.1309881 13.0399615,11.173984 C16.7275333,12.2833441 19.4976819,15.3924771 19.9947005,19.2523727 C20.0418583,19.6186047 19.7690435,19.9519836 19.3853517,19.9969955 C19.0016598,20.0420074 18.6523872,19.7816071 18.6052294,19.4153751 C18.0656064,15.2246108 14.4363723,12.0699838 10.034634,12.0699838 C5.6099956,12.0699838 1.93381693,15.231487 1.39476476,19.4154211 C1.34758036,19.7816499 0.998288773,20.0420271 0.614600177,19.9969899 C0.230911582,19.9519526 -0.0418789616,19.6185555 0.00530544566,19.2523267 C0.500630192,15.4077896 3.28612316,12.3043229 6.97954305,11.1838052 C5.19718955,10.1447285 4,8.21217353 4,6 C4,2.6862915 6.6862915,0 10,0 Z"
                                                        fill="#555"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                    <button
                                        class="profile_item left-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button0">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item right-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button1">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item -left-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button2">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item -right-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button3">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item bottom-8 -left-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button4">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item bottom-8 -right-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500 "
                                        id="butto5">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button
                                        class="profile_item right-[40%] -bottom-4 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500 "
                                        id="button6">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg class="w-8 h-8 text-dark-800 dark:text-primary-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Repetir este bloque por cada usuario destacado -->
                        @for ($i = 1; $i <= 20; $i++) <div class="relative p-4 text-center group">
                            <!-- Imagen del usuario -->
                            <img src="{{ asset('img/f-perfil/Pw (8).png') }}" alt="Nombre del Usuario {{ $i }}"
                                class="w-48 h-48 object-cover rounded-full shadow-2xl shadow-primary-500/50 mx-auto border-4 border-primary-600 animate-bounceBubble">
                            <!-- Nombre y oficio del usuario encima de la imagen -->
                            <div
                                class="absolute bot-0 left-0 right-0 p-2 text-light-800 dark:text-light-200 bg-black bg-opacity-60 rounded-t-full">
                                <h3 class="text-dm font-semibold truncate">Nombre del Usuario {{ $i }}</h3>
                                <p class="text-sm truncate">Oficio del Usuario {{ $i }}</p>
                            </div>
                    </div>
                
                    @endfor
              
                </div>
            </div>
        </div>
    </div>
   
    </div>
    <script>
    const openModalBtn = document.getElementById('open-modal-btn');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const modal = document.getElementById('modal');
    // Abre el modal
    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });
    // Cierra el modal
    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
    // Cierra el modal si se hace clic fuera del área del modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
    </script>
    <script src="/modo.js"></script>
</body>
</html>