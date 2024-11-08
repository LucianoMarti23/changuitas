<x-page>
    <main class="space-y-8">
        <!--BANNER-->
        <section class="relative w-full h-screen">
            <img class="absolute inset-0 w-full h-full object-cover dark:opacity-75" src="{{ asset('img/red0.jpg') }}"
                alt="image description">

            <div class="absolute inset-0 flex flex-col left-0 justify-center px-4 mx-auto max-w-screen-xl">
                <h1
                    class="mb-6 text-3xl   font-bold px-20 sm:font-extraboldbold tracking-wide leading-none text-light-200 sm:px-48 sm:text-6xl">
                    Tu próximo empleo <br>está a solo un clic</h1>
                <p class=" mb-8 text-xl leading-normal font-bold text-dark-100  px-20 sm:text-1xl sm:px-48 ">
                    Conecta con talento local
                    hoy mismo.</p>

                <!-- LLAMADA A LA ACCION -->
    <div class="flex flex-col pl-48 space-y-4 sm:flex-row sm:space-y-0">
        <a href="{{ url('/login') }}"
            class="inline-flex justify-center items-center py-3 px-6 text-base font-medium text-center text-light-200 rounded-lg bg-info-700 hover:bg-info-800 focus:ring-4 focus:ring-info-300 dark:focus:ring-info-900 min-w-[250px]">
            Inicia sesión
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
        <a href="{{ url('/job') }}"
            class="inline-flex justify-center bg-dark-900 bg-opacity-50 hover:text-dark-900 items-center py-3 px-6 sm:ms-4 text-base font-medium text-center text-light-200 rounded-lg border border-light-200 hover:bg-dark-100 focus:ring-4 focus:ring-dark-400 min-w-[250px]">
            Publicar
        </a>
    </div>
</div>
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
                    <img class="rounded-t-lg  w-10 h-10 sm:w-16 sm:h-16 " src="{{ asset('img/icons/10_otros.png')}}"
                        alt="Otros Icon" />
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
                        <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">Red de Contactos Amplia y
                            Relevante</span>
                    </div>
                    <div class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-6 h-6  drop-shadow-[0_0_10px_theme(colors.success.400/70%)] text-success-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight w-full sm:w-auto text-lg  md:text-xl">Herramientas de Evaluación
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
                    <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Total de Usuarios</h3>
                    <div class="flex items-center justify-center space-x-2 ">
                        <img src="img/icons/más.png" alt="Icono de trabajo futuro"
                            class="w-12 h-12 object-contain drop-shadow-[0_0_10px_theme(colors.success.300/50%)] text-success-500" />
                        <p class="text-4xl font-bold text-dark-900 dark:text-dark-100">1,740m</p>
                    </div>
                </div>
                <!-- Trabajos Concretados -->

                <div class="relative bg-light-50 dark:bg-dark-950 p-16 rounded-lg shadow-md text-center">
                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-10 rounded-lg"
                        style="background-image: url('img/concretados.png');"></div>
                    <div class="relative z-10">
                        <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Trabajos Concretados
                        </h3>
                        <p class="text-4xl font-bold text-dark-900 dark:text-dark-100">350</p>
                    </div>
                </div>


                <!-- Estimación de Trabajos Futuros -->
                <div class="bg-light-50 dark:bg-dark-950 p-16 rounded-lg shadow-md text-center">
                    <h3 class="text-lg font-semibold text-dark-700 dark:text-dark-300 mb-2">Estimación de Trabajos
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

    <section class="py-8">
        <div class="relative overflow-hidden">
            <div class="relative">
                <ul id="carousel" class="flex space-x-4 animate-marquee">
                    <!-- item 1 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (1).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Omar T.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                Desde que me uní a la red, he visto un incremento en las solicitudes de trabajos. La
                                posibilidad de publicar mis servicios y recibir notificaciones sobre nuevas
                                oportunidades ha sido clave para mi crecimiento profesional.
                            </p>
                        </div>
                    </li>

                    <!-- item 2 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (2).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Laura .</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                El sistema es intuitivo y me ha ayudado a encontrar proyectos de diseño gráfico que
                                se ajustan a mi especialidad. La función de filtrado de publicaciones y la
                                visibilidad de las calificaciones me permiten trabajar con confianza y eficiencia.
                            </p>
                        </div>
                    </li>


                    <!-- item 3 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (3).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Alejandro Romero.
                                </p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-dark-300 dark:text-dark-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                La plataforma me ha permitido expandir mi alcance como tutor. Puedo publicar mis
                                servicios fácilmente y conectarme con estudiantes interesados en apoyo escolar. La
                                opción de referencias también ayuda a construir una reputación sólida.
                            </p>
                        </div>
                    </li>
                    <!-- item 4 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (4).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">María Gonzalez.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-dark-300 dark:text-dark-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                Utilizo la red para ofrecer mis servicios de fotografía y me ha sorprendido la
                                calidad de las conexiones que he hecho. Las herramientas de publicación son muy
                                efectivas y el sistema de mensajería facilita la coordinación con los clientes.
                            </p>
                        </div>
                    </li>
                    <!-- item 5 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (5).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Lucia P.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                Como jardinero, la plataforma me ha brindado una gran cantidad de oportunidades.
                                Publicar mis servicios y recibir notificaciones sobre nuevos trabajos en mi área ha
                                simplificado mi proceso de búsqueda de empleo.
                            </p>
                        </div>
                    </li>

                    <!-- item 6 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (6).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Camila Ortis.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                Ofrecer servicios de apoyo escolar en la plataforma ha sido muy beneficioso. La
                                funcionalidad de publicación y el sistema de referencias me han ayudado a conectar
                                con estudiantes que necesitan ayuda en diversas materias.
                            </p>
                        </div>
                    </li>
                    <!-- item 7 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (7).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Roxana C.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-dark-300 dark:text-dark-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-dark-300 dark:text-dark-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300 truncate">
                                La plataforma me ha permitido llegar a clientes que buscan apoyo psicológico de
                                manera conveniente. Las herramientas de publicación y la opción de recibir mensajes
                                directamente han facilitado mi trabajo. Además, la sección de referencias me ayuda a
                                ganar la confianza de nuevos pacientes.
                            </p>
                        </div>
                    </li>

                    <!-- item 8 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (8).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Claudio M.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                La plataforma ha simplificado la búsqueda de trabajos de reparación de
                                electrodomésticos. Puedo publicar mis servicios de manera eficiente y la visibilidad
                                de las calificaciones ayuda a atraer clientes potenciales.
                            </p>
                        </div>
                    </li>
                    <!-- Más ítems si es necesario -->
                    <!-- item 1 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (1).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Omar T.</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                Desde que me uní a la red, he visto un incremento en las solicitudes de trabajos. La
                                posibilidad de publicar mis servicios y recibir notificaciones sobre nuevas
                                oportunidades ha sido clave para mi crecimiento profesional.
                            </p>
                        </div>
                    </li>

                    <!-- item 2 -->
                    <li
                        class="flex flex-col p-4 bg-light-100 dark:bg-dark-800 rounded-lg shadow-md w-[400px] h-[150px] flex-shrink-0">
                        <div class="flex items-center space-x-4 mb-2">
                            <img src="img/f-perfil/Pw (2).png" alt="Imagen" class="w-12 h-12 rounded-full">
                            <div class="flex flex-col justify-between max-w-[calc(100%-3rem)]">
                                <p class="text-sm font-normal text-dark-800 dark:text-light-100">Laura .</p>
                                <!-- Calificación -->
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-alert-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <h3 class="px-2 text-sm font-normal text-dark-800 dark:text-light-100">
                                        ¡Muy Buena!
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <p class="text-xs font-light text-dark-600 dark:text-light-300">
                                El sistema es intuitivo y me ha ayudado a encontrar proyectos de diseño gráfico que
                                se ajustan a mi especialidad. La función de filtrado de publicaciones y la
                                visibilidad de las calificaciones me permiten trabajar con confianza y eficiencia.
                            </p>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </section>


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

<!-- Cards "Testimonios" -->


<!-- formulario contacta 
        <section
            class="space-y-4 pt-4 max-w-4xl mx-auto p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
            <h1 class="text-2xl font-bold mb-4 text-center">Contáctanos</h1>
            <p class="text-dark-700 mb-6 text-center">Si tienes alguna pregunta o necesitas más información, no dudes en
                contactarnos. Puedes usar los datos de contacto proporcionados o llenar el formulario a continuación.
            </p>

           
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-center">Datos de Contacto</h2>
                <p class="text-dark-600 mb-2 text-center">Teléfono: <a href="tel:+1234567890"
                        class="text-primary-500 hover:underline">+123 456 7890</a></p>
                <p class="text-dark-600 mb-2 text-center">Correo Electrónico: <a href="mailto:info@ejemplo.com"
                        class="text-primary-500 hover:underline">info@ejemplo.com</a></p>
                <p class="text-dark-600 text-center">Dirección: Calle Ficticia 123, Ciudad, País</p>
            </div>

            
            <div>
                <h2 class="text-xl font-semibold mb-2 text-center">Formulario de Contacto</h2>
                <form action="#" method="post" class="flex flex-col">
                    <label for="name" class="text-dark-700 mb-2">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre"
                        class="mb-4 p-2 border border-dark-300 rounded w-full" required>

                    <label for="email" class="text-dark-700 mb-2">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico"
                        class="mb-4 p-2 border border-dark-300 rounded w-full" required>

                    <label for="message" class="btn-primary text-dark-700 mb-2">Mensaje</label>
                    <textarea id="message" name="message" placeholder="Tu mensaje" rows="4"
                        class="mb-4 p-2 border border-dark-300 rounded w-full" required></textarea>

                    <button type="submit" class="btn-primary text-dark-700 mb-2">Enviar</button>
                </form>
            </div>
        </section>
        -->

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