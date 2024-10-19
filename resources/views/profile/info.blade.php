<!-- resources/views/profile/info.blade.php -->

@extends('components.profile.page-profile')

@section('content')
<br>
<br>
<!-- Content Section -->
<div class="p-2 ">
    <!-- BTN -->
    <div class="flex items-center justify-end gap-2">
        <!-- Editar -->
        <a href="{{ url('/editPro') }}" title="Editar" class="felxp-4 text-primary-700 hover:text-complem-400">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
            </svg>
        </a>

        <!--informacion: politicas de la pagina-->
        <div class="relative inline-flex items-center">
            <button id="popover-button" type="button" class="relative flex items-center">
                <svg class="w-6 h-6 text-primary-700 dark:text-primary-700" aria-hidden="true"
               xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <div id="popover-content"
                class="absolute z-10 hidden w-64 text-xs transition-opacity duration-300 border rounded-lg shadow-lg opacity-0 text-dark-500 bg-light-200 border-dark-200 dark:text-dark-400 dark:border-dark-600 dark:bg-dark-800 top-full mt-2">
        <div class="px-2 py-1">
                    <p>Elija al menos una opción.
                        <a href="#" class="inline-flex items-center underline text-primary-800">Leer más...</a>
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
<section id="resumen" class="mb-8">



    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Resumen</h2>
    <p class= " text-lg font-normal text-dark-700 dark:text-dark-400">Descripción del perfil profesional del usuario... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio placeat dignissimos totam suscipit culpa alias 
        libero quas ullam ducimus, excepturi doloribus tempore tenetur deserunt dicta enim recusandae eius esse voluptate?</p>
</section>

<section id="educacion" class="mb-8">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Educación</h2>
    <p class= " text-lg font-normal text-dark-700 dark:text-dark-400">Información sobre la formación académica... Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis recusandae at officia eveniet harum quam, 
        eos accusantium facere doloremque eligendi beatae itaque necessitatibus placeat ab animi veniam quos. Rem, doloribus.</p>
</section>

<section id="habilidades" class="mb-8">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Habilidades</h2>
    <p class= " text-lg font-normal text-dark-700 dark:text-dark-400">Lista de habilidades profesionales... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti blanditiis dicta porro doloremque magni architecto,
        eligendi necessitatibus accusantium tempore voluptas earum quis maiores alias, ex odit aliquam quod suscipit ea. </p>
</section>







<section id="experiencia" class="mb-8">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Experiencia</h2>
    <!-- Experiencia 1 -->
    <div class="mb-4 p-2 bg-light-100 dark:bg-dark-900 text-dark-500 dark:text-dark-200">
        <h3 class="text-dm font-normal">Nombre de la Empresa</h3>
        <p class="text-base font-light text-dark-600">Cargo o puesto que ocupó</p>
        <p class="text-sm text-dark-500">Tiempo de trabajo: X años / X meses</p>
        <p class="text-sm text-dark-500">Número de teléfono: (123) 456-7890</p>
    </div>
</section>





<!-- Sección de disponibilidad -->



<section id="idiomas" class="mb-8">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Idiomas</h2>
    <p class=" "text-lg font-normal text-dark-700 dark:text-dark-400">Idiomas hablados y nivel de competencia...</p>
</section>








@endsection