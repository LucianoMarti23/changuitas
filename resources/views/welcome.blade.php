<x-page>
    <main class="space-y-8">
        <!-- BANNER CON VIDEO -->
        <section class="relative w-full h-screen">
            <video id="bannerVideo" autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('videos/banner.mp4') }}" type="video/mp4">
                Tu navegador no soporta HTML5 video.
            </video>

            <!-- Contenido del banner -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-center px-4 mx-auto max-w-screen-xl z-10 text-center">
                <h1 class="text-3xl sm:text-6xl font-bold text-light-200 mb-4">
                    Tu próximo empleo <br>está a solo un clic
                </h1>
                <p class="text-xl font-bold text-dark-100 mb-8">
                    Conecta con talento local hoy mismo.
                </p>

                <!-- Botones de acción (login y suscripción) -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ url('/login') }}"
                        class="inline-flex items-center py-3 px-6 bg-info-700 text-light-200 rounded-lg hover:bg-info-800">
                        Inicia sesión
                        <svg class="w-4 h-4 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="{{ route('subcription.paid-service') }}"
                        class="inline-flex items-center py-3 px-6 btn-success text-light-200 rounded-lg btn-success">
                        Suscribite
                        <svg class="w-4 h-4 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </a>
                </div>
            </div>

           
            <!-- Controles del video debajo -->
<div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-6 z-20">
    <!-- Botón pausar/reanudar -->
    <button id="toggleVideo" class="bg-dark-700 text-light-200 p-3 rounded-full hover:bg-dark-800 transition">
        <!-- Icono inicial: pause -->
        <svg id="playPauseIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6" />
        </svg>
    </button>

    <!-- Botón reiniciar -->
    <button id="restartVideo" class=" text-light-200 p-3 rounded-full  transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582M20 20v-5h-.581M4.582 9A9 9 0 1120.581 15M20.581 15A9 9 0 014.582 9"/>
        </svg>
    </button>
</div>

<script>
const video = document.getElementById('bannerVideo');
const toggleBtn = document.getElementById('toggleVideo');
const playPauseIcon = document.getElementById('playPauseIcon');
const restartBtn = document.getElementById('restartVideo');

toggleBtn.addEventListener('click', () => {
    if(video.paused){
        video.play();
        // Cambiar icono a pause
        playPauseIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6" />';
    } else {
        video.pause();
        // Cambiar icono a play
        playPauseIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18l15-9L5 3z" />';
    }
});

restartBtn.addEventListener('click', () => {
    video.currentTime = 0;
    video.play();
    // Cambiar icono a pause al reiniciar
    playPauseIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6" />';
});
</script>
        </section>

       


        <div class="px-4 sm:px-0">

            <!-- Sección 2 BUSQUEDA -->
            <section class="mx-auto py-24 sm:px-6 lg:px-8 bg-light-100 dark:bg-dark-900 dark:text-light-200">
                <form class="max-w-xl mx-auto">
                    <div class="flex flex-col space-y-4">
                        <!-- Contenedor para los dropdowns y el buscador -->

                        <!-- Campo de búsqueda -->


                    </div>
                </form>
            </section>



            <section class="  bg-light-100 dark:bg-dark-900 flex flex-col items-center">
                <!--Seccion  Categoria-->
                <div class="px-2 max-w-1xl text-center  lg:py-20 bg-light-100 dark:bg-dark-900">
                    <h3 class="tracking-tight leading-none text-dark-800 text-2xl sm:text-4xl dark:text-light-300 ">
                        Algunas Categorias
                    </h3>
                </div>
                <!--iconos trabajos-->
                <div class="max-w-1xl grid gap-4 md:grid-cols-5 max-md:grid-cols-2 ">
                    <!-- Elementos de la lista -->
                    <div
                        class=" flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="cleaning">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16"
                                src="{{ asset('img/icons/1_limpieza.png')}}" alt="Limpieza Icon" />
                        </a>
                        <div>
                            <h5
                                class=" mb-2 text-md sm:text-xl font-normal tracking-tight sm:text-left text-dark-900 dark:text-light-200">
                                Limpieza
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6  w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="repair">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/2_reparacion.png')}}" alt="Reparacion Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Reparación
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6  w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="plumbing">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16"
                                src="{{ asset('img/icons/3_plomeria.png')}}" alt="Plomeria Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Plomería
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Mechanic">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/4_mecanico.png')}}" alt="Mecanico Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Mecanico
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Gardener">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/5_jardineria.png')}}" alt="Jardinero Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Jardinero
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Waiter">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/6_camarero.png')}}" alt="Camarero Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Camarero
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Guard">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/7_guardia.png')}}" alt="Guardia Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Guardia
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Hairdresser">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/8_peluqueria.png')}}" alt="Peluquero Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Peluquero
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Pets">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16"
                                src="{{ asset('img/icons/9_mascotas.png')}}" alt="Mascota Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Mascotas
                            </h5>
                        </div>
                    </div>
                    <!-- Elementos de la lista -->
                    <div
                        class="flex flex-col items-center p-6 w-32 transition-transform duration-300 motion-safe:hover:scale-125">
                        <a href="#" title="Others">
                            <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 "
                                src="{{ asset('img/icons/10_otros.png')}}" alt="Otros Icon" />
                        </a>
                        <div>
                            <h5
                                class="mb-2 text-md sm:text-xl font-normal tracking-tight text-dark-900 dark:text-light-200">
                                Otros
                            </h5>
                        </div>
                    </div>
                </div>

            </section>




            <!-- Ofrecemos -->
            <section class="flex justify-center py-32 ">
                <div
                    class="flex flex-wrap justify-center gap-4 max-w-7xl w-full rounded-lg shadow-md cursor-pointer  dark:bg-dark-950 border-primary-700 ">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-3 gap-10 place-content-center max-w-screen-2xl text-light-500 dark:text-dark-500">
                            <div class="flex space-x-2 rtl:space-x-reverse items-center ">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight  w-full sm:w-auto text-lg  md:text-xl">
                                    Elige cuándo y dónde trabajar</span>
                            </div>



                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">
                                    Complementa tus ingresos con trabajos a corto plazo</span>
                            </div>

                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">
                                    Encuentra candidatos disponibles de inmediato
                                </span>
                            </div>

                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">
                                    Desde trabajos administrativos hasta operativos
                                </span>
                            </div>
                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">Red de Contactos Amplia
                                    y
                                    Relevante</span>
                            </div>
                            <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">Herramientas de
                                    Evaluación
                                    y Comparación</span>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <!-- CHAMULLO-->
            <section class="relative py-8 bg-dark-100 dark:bg-dark-900">
                <div class="container mx-auto px-4">
                    <h2 class="text-2xl font-medium text-dark-800 dark:text-dark-200 mb-6">Estadísticas de Usuarios y
                        Trabajos</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 h-64">
                        <!-- Total de Usuarios -->
                        <div class="bg-light-50 dark:bg-dark-950 p-16 rounded-lg shadow-md text-center">
                            <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Total de Usuarios
                            </h3>
                            <div class="flex items-center justify-center space-x-2 ">
                                <img src="img/icons/más.png" alt="Icono de trabajo futuro"
                                    class="w-12 h-12 object-contain drop-shadow-[0_0_10px_theme(colors.success.300/50%)] text-success-500" />
                                <p class="text-4xl font-bold text-dark-900 dark:text-dark-100">{{ $userCount }}</p>
                            </div>
                        </div>
                        <!-- Trabajos Concretados -->

                        <div class="relative bg-light-50 dark:bg-dark-950 p-16 rounded-lg shadow-md text-center">
                            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-10 rounded-lg"
                                style="background-image: url('img/concretados.png');"></div>
                            <div class="relative z-10">
                                <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Trabajos Creados
                                </h3>
                                <p class="text-4xl font-bold text-dark-900 dark:text-dark-100">{{ $jobCount }}</p>
                            </div>
                        </div>


                        <!-- Estimación de Trabajos Futuros -->
                        <div class="bg-light-50 dark:bg-dark-950 p-16 rounded-lg shadow-md text-center">
                            <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Estimación de
                                Trabajos
                                Futuros</h3>
                            <div class="flex items-center justify-center space-x-2 ">
                                <img src="img/icons/arriba.png" alt="Icono de trabajo futuro"
                                    class="w-12 h-12 object-contain drop-shadow-[0_0_10px_theme(colors.success.300/50%)] text-success-700" />
                                <p id="future-jobs" class="text-4xl font-bold text-dark-900 dark:text-dark-100">300</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>






            <!--carrusel-->



            <!-- estadisticas? -->
            <section class="space-y-4 pt-32 max-w-4xl mx-auto  text-dark-500  dark:text-dark-400 ">
                <h1 class="text-2xl font-normal mb-8 text-center">Trabajos Más Demandados y Ofrecidos</h1>

                <!-- Trabajos Más Demandados -->
                <div class="mb-12">
                    <h2 class="text-xl font-semibold mb-4">Trabajos Más Demandados del Último Mes</h2>
                    <ul class="list-disc pl-5 space-y-4">
                        <!-- Elementos de ejemplo, reemplaza con tus datos -->
                        <li class="flex justify-between items-center border-b border-primary-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Limpieza y Mantenimiento</span>
                            <span class="text-primary-600 font-medium">30%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-primary-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Cuidado de Niños y Adultos Mayores</span>
                            <span class="text-primary-600 font-medium">25%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-primary-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Reparaciones Domésticas</span>
                            <span class="text-primary-600 font-medium">20%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-primary-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Atención al Cliente en Comercio Local</span>
                            <span class="text-primary-600 font-medium">15%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-primary-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Construcción y Albañilería</span>
                            <span class="text-primary-600 font-medium">10%</span>
                        </li>
                    </ul>
                </div>

                <!-- Trabajos Más Ofrecidos -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Trabajos Más Ofrecidos del Último Mes</h2>
                    <ul class="list-disc pl-5 space-y-4">
                        <!-- Elementos de ejemplo, reemplaza con tus datos -->
                        <li class="flex justify-between items-center border-b border-complem-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Cuidado de Niños y Adultos Mayores</span>
                            <span class="text-complem-400 font-medium">35%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-complem-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Limpieza y Mantenimiento</span>
                            <span class="text-complem-400 font-medium">28%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-complem-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Reparaciones Domésticas</span>
                            <span class="text-complem-400 font-medium">18%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-complem-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Jardinería y Paisajismo</span>
                            <span class="text-complem-400 font-medium">12%</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-complem-200 dark:border-dark-800">
                            <span class="text-dark-700 dark:text-light-500">Cocina y Catering</span>
                            <span class="text-complem-400 font-medium">7%</span>
                        </li>
                    </ul>
                </div>
            </section>




            <section class="mx-auto py-48  bg-light-100 dark:bg-dark-900 dark:text-light-200">
                <h1 class="text-7xl font-medium mb-8 text-center">¡Realiza una donacion!</h1>




                <!-- Donación -->
                <div class="flex flex-col py-8">
                    <h2 class="text-xl font-semibold mb-2 text-center">Haz una Donación</h2>
                    <form id="donationForm" action="/donate" method="post" class="flex flex-col items-center">
                        @csrf
                        <input type="number" name="amount" placeholder="Monto de la donación"
                            class="mb-4 p-2 border border-dark-300 rounded w-full max-w-xs" required>
                        <button type="submit" id="donateButton" class="btn-primary btn-standard mb-2">Donar</button>
                    </form>


                </div>

        </div>
        </section>
        </div>



    </main>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        document.querySelector('button[type="submit"]').onclick = (event) => {
            const amount = document.querySelector('input[name="amount"]').value;

            // Verifica que el campo 'amount' no esté vacío y sea un número válido
            if (!amount || isNaN(amount) || amount <= 0) {
                return; // No hacer nada si la validación falla
            }

            // Si se pasa la validación, crear la solicitud
            const request = new XMLHttpRequest();
            request.open('POST', '/donate');
            request.setRequestHeader('Content-Type', 'application/json');
            request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('input[name="_token"]').value);

            // Manejar la respuesta
            request.onload = () => {
                if (request.status >= 200 && request.status < 300) {
                    const data = JSON.parse(request.responseText);
                    window.location.href = data.init_point; // Redirigir a la URL de pago
                } else {
                    const errorData = JSON.parse(request.responseText);
                    alert(`Error: ${errorData.error || 'Ocurrió un error al procesar la donación.'}`);
                }
            };

            // Manejar errores de red
            request.onerror = () => {
                alert('Ocurrió un error en la comunicación con el servidor.');
            };

            // Enviar la solicitud con el monto
            request.send(JSON.stringify({ amount }));
        };
    </script>



</x-page>