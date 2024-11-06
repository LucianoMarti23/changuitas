<!-- resources/views/profile/personalData.blade.php -->

@extends('components.profile.page-profile')

@section('content')

<!-- Perfil Expandido -->



<div id="profile-expanded" class="flex items-center justify-center relative z-10">
    
    <!-- Todo tu contenido de perfil expandido aquí -->
    <div class="flex items-center justify-center relative z-10">
        <div class="max-w-2xl max-h-xl rounded shadow-xl dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] p-4 bg-green-200/75 dark:bg-green-900/75 flex items-center relative">
            <!-- Foto de perfil -->
            <div class="w-40 h-40 flex-shrink-0 mr-4 relative">
                <!-- Mostrar imagen de perfil actual -->
                <img id="profile-picture" class="w-full h-full object-cover rounded-full cursor-pointer" 
                     src="{{ auth()->user()->profile->profile_picture ? Storage::url(auth()->user()->profile->profile_picture) : '/img/default-profile.png' }}" 
                     alt="Foto de perfil" onclick="toggleDropdown()">

                <!-- Ícono para abrir el menú -->
                <div class="absolute bottom-0 right-0 mb-2 mr-2">
                    <button class="w-8 h-8 bg-green-300 rounded-full flex items-center justify-center text-white hover:bg-green-400 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                    </button>
                </div>

                <!-- Desplegable -->
                <div id="dropdown" class="absolute top-full left-0 mt-2 w-48 bg-green-50 border border-green-300 rounded shadow-lg hidden">
                    <form id="upload-form" action="{{ route('profile.uploadPicture') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="file-input" type="file" name="profile_picture" accept="image/*" required style="display: none;" onchange="document.getElementById('save-button').classList.remove('hidden')">

                        <!-- Opciones del desplegable -->
                        <div class="py-2 px-4">
                            <a href="#" class="block text-green-500 hover:bg-green-100 py-2 px-4 rounded" onclick="document.getElementById('file-input').click(); return false;">
                                Cambiar foto
                            </a>
                            <button id="save-button" type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded hidden">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div>
            <form action="{{ route('profile.deletePicture') }}" method="POST" class="mt-2">
    @csrf
    @method('DELETE')
    <button type="submit" class=" block w-full text-danger-600 hover:bg-red-100 py-1 px-3 rounded">
        Eliminar foto
    </button>
</form>
            </div>
        
     

     
       
  

        
   
    
                
              

            <!-- Información de usuario -->
            <div class="flex-grow text-dark-700 dark:text-light-200">
                <p class="text-3xl font-normal">{{ $userData->name }}</p>
                <p class="text-md text-wrap pt-2 text-dark-600 dark:text-light-400">Estado: Desempleado</p>
                <p class="text-md pt-2 text-dark-600 dark:text-light-400">Fecha de ingreso: {{ $userData->created_at->format('d/m/Y') }}</p>
            

                        
               
                        


                <p class="text-md pt-2 text-dark-600 dark:text-light-400">Oficio principal: [nidea]</p>

                <!-- Puntuación con estrellas -->
                <div class="flex items-center pt-2 text-dark-600 dark:text-light-400">
                    <p class="text-md mr-2">Puntuación:</p>
                    <div class="flex">
                        <svg class="w-5 h-5 text-alert-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 15.39l3.76 2.16-.99-4.29 3.41-3.2-4.37-.38L12 4.5l-1.76 4.64-4.37.38 3.41 3.2-.99 4.29L12 15.39z" />
                        </svg>
                        <svg class="w-5 h-5 text-alert-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 15.39l3.76 2.16-.99-4.29 3.41-3.2-4.37-.38L12 4.5l-1.76 4.64-4.37.38 3.41 3.2-.99 4.29L12 15.39z" />
                        </svg>
                        <svg class="w-5 h-5 text-alert-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 15.39l3.76 2.16-.99-4.29 3.41-3.2-4.37-.38L12 4.5l-1.76 4.64-4.37.38 3.41 3.2-.99 4.29L12 15.39z" />
                        </svg>
                        <svg class="w-5 h-5 text-alert-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 15.39l3.76 2.16-.99-4.29 3.41-3.2-4.37-.38L12 4.5l-1.76 4.64-4.37.38 3.41 3.2-.99 4.29L12 15.39z" />
                        </svg>
                        <svg class="w-5 h-5 text-dark-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 15.39l3.76 2.16-.99-4.29 3.41-3.2-4.37-.38L12 4.5l-1.76 4.64-4.37.38 3.41 3.2-.99 4.29L12 15.39z" />
                        </svg>
                    </div>
                </div>
            </div>


            <!-- Botón de contacto -->
            <div class=" flex-grow">
                <div class="">
                    <!-- Editar hidden[solo lo puede ver el dueño 
                            de la publicación para posible edición] -->
                    <div class="flex justify-end gap-2 pb-20 ">
                        <div class="text-primary-700 hover:text-complem-400">
                            <svg class="w-6 h-6 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" id="edit-btn">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                            </svg>
                        </div>


                        <!-- Botón Menu 3puntitos id="optionsButton" id="optionsMenu"-->
                        <div class="relative inline-block text-left z-10">
                            <button id="optionsButton"
                                class="flex items-center text-primary-700  hover:text-complem-500">
                                <svg class="w-6 h-6 text-xl cursor-pointer" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                            <div id="optionsMenu"
                                class="hidden absolute right-0 mt-2 w-48 bg-dark-100 border border-primary-800 rounded-md shadow-lg dark:bg-dark-700">
                                <ul class="py-1">
                                    <li>
                                        <button
                                            class="flex items-center w-full text-sm text-left px-1 py-1 hover:bg-complem-400 hover:text-dark-900 dark:bg-dark-700 dark:hover:bg-complem-400 dark:hover:text-dark-900"
                                            data-action="report">
                                            <svg class="w-6 h-6 text-current mr-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z" />
                                            </svg>
                                            Reportar
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="flex items-center w-full text-sm text-left px-1 py-1 hover:bg-complem-400 dark:bg-dark-700"
                                            data-action="share">
                                            <svg class="w-6 h-6 text-base font-medium text-current mr-2"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                                            </svg>
                                            Compartir
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="flex items-center w-full text-sm text-left px-1 py-1 hover:bg-complem-400 dark:bg-dark-700"
                                            data-action="save">
                                            <svg class="w-6 h-6 text-base font-medium text-current mr-2"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                                            </svg>
                                            Guardar
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--LLAMADA A LA ACCION DE CONTACTAR -->
                <div class="flex justify-end gap-8 pt-18 ">
                    <button
                        class="relative inline-flex h-12 active:scale-95 transition overflow-hidden rounded-full p-[1px] focus:outline-none">
                        <span
                            class="absolute inset-[-1000%] animate-[spin_2s_linear_infinite] bg-[conic-gradient(from_90deg_at_50%_50%,#8b5cf6_0%,#fbbf24_50%,#8b5cf6_100%)]">
                        </span>
                        <span
                            class="inline-flex h-full w-full cursor-pointer items-center justify-center rounded-full bg-slate-950 px-7 text-md font-medium text-light-100 backdrop-blur-3xl gap-2">
                            Contacta
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8H224V432c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z">
                                </path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    
    <!-- Botón de colapsar -->
    <div class="flex justify-end pl-4 pb-4">
        <button id="collapse-button" class="text-dark-600 hover:text-dark-800">
            <!-- Icono de colapsar -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
    </div>
</div>
<br>
<br>
<!-- Perfil Minimizado -->
<div id="profile-collapsed" class="flex items-center space-x-2 hidden">
    <!-- Foto pequeña del perfil -->
    <img src="{{ auth()->user()->profile->profile_picture ? Storage::url(auth()->user()->profile->profile_picture) : '/img/default-profile.png' }}" alt="Profile Photo" class="w-10 h-10 rounded-full">
    <div>
        <p class="text-sm font-semibold">{{$profile->first_name}}</p>
    </div>
    <!-- Icono de expandir -->
    <button id="expand-button" class="ml-auto text-dark-600 hover:text-dark-800">
        <!-- Icono (puede ser SVG o un ícono de font) -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>
</div>


                @if(session('success'))
    <div id="successMessage" class="message-success">
        {{ session('success') }}
    </div>
    
    <script>
        // Esperar 5 segundos (5000 ms) antes de ocultar el mensaje
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.transition = 'opacity 1s ease';
                successMessage.style.opacity = '0'; // Iniciar la transición de desaparición

                // Remover el elemento del DOM después de que la transición termine
                setTimeout(function() {
                    successMessage.remove();
                }, 500); // Tiempo de espera igual al de la transición (1 segundo)
            }
        }, 3000); // Mostrar el mensaje por 5 segundos
    </script>
@endif

<div  class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] " id="resumenDiv">


    <div class="p-2 " >
            <!-- BTN -->
            <div class="flex items-center justify-end gap-2">
                <!-- Editar -->
                <button onclick="openModal('modal-resumen')" title="Editar"
                    class="open-modal-button flex items-center text-primary-700 hover:text-complem-400">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                    </svg>
                </button>


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
    <p class="text-lg font-normal text-dark-700 dark:text-dark-400">
    {{ $profile->profile_summary ?? 'Agrega un resumen de tu perfil' }}
</p>

</div>









<br>


<div class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] " id="educacionDiv" >

<div class="p-2 ">
            <!-- BTN -->
            <div class="flex items-center justify-end gap-2">
                <!-- Editar -->
                <button onclick="openModal('modal-educacion')" title="Editar"
                    class="open-modal-button flex items-center text-primary-700 hover:text-complem-400">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                    </svg>
                </button>


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




<section id="educacion" class="mb-8">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Educación</h2>
    <p class="text-lg font-normal text-dark-700 dark:text-dark-400">{{ $profile->education ?? 'Agrega una educacion a tu perfil' }}</p>
   
</section>




</div>

<div class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] " id="educacionDiv" >
<section id="cv" class="mb-8">
<h2 class="font-normal text-1xl sm:text-2xl mb-2">Curriculum</h2>


@if($profile && $profile->cv_path)
    <p><a href="{{ asset('storage/' . $profile->cv_path) }}" target="_blank">Ver mi Currículum</a></p>
@else
    <p>Aún no has subido tu currículum.</p>
@endif

<br>
<!-- resources/views/upload.blade.php -->
<!-- resources/views/userProfile/upload.blade.php -->
<form action="{{ route('upload.cv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="cv">Adjunta (PDF, DOC, DOCX, etc.)</label>
        <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required>
    </div>
    <br>
    <button class="btn-success " type="submit">Subir Currículum</button>
</form>


</section>

</div>


<br>


<div class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
<div class="p-2 ">
            <!-- BTN -->
            <div class="flex items-center justify-end gap-2">
                <!-- Editar -->
                <button onclick="openModal('modal-habilidades')" title="Editar"
                    class="open-modal-button flex items-center text-primary-700 hover:text-complem-400">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                    </svg>
                </button>


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





<section id="habilidades" class="mb-8 text-sm font-medium text-dark-700 dark:text-dark-300">
    <h2 class="font-normal text-1xl sm:text-2xl mb-2">Habilidades</h2>
    <p class="text-lg font-normal text-dark-700 dark:text-dark-400">{{ $profile->skills ?? 'Agrega una habilidad a tu perfil' }}</p>
</section>



</div>


<!-- Modales -->
<div id="modal-resumen" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Editar Resumen</h2>
            <button onclick="closeModal('modal-resumen')" class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form action="{{ route('user-profile.update-summary', ['profileId' => $profile->id]) }}" method="POST" class="space-y-4">
    @csrf
    @method('POST')
    
    <textarea class="w-full text-dark-900 dark:text-dark-100 bg-light-100 dark:bg-dark-700" rows="5" name="profile_summary">{{ old('profile_summary', $profile->profile_summary) }}</textarea>

    <div class="flex justify-end gap-2">
        <button type="button" onclick="closeModal('modal-resumen')" class="btn-primary">Cancelar</button>
        <button type="submit" class="btn-primary">Guardar Cambios</button>
    </div>
</form>

    </div>
</div>

<div id="modal-educacion" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Editar Educación</h2>
            <button onclick="closeModal('modal-educacion')" class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form action="{{ route('user-profile.update-education', ['profileId' => $profile->id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            <textarea class="w-full text-dark-900 dark:text-dark-100 bg-light-100 dark:bg-dark-700" rows="5" name="education">{{ old('education', $profile->education) }}</textarea>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeModal('modal-educacion')" class="btn-primary">Cancelar</button>
                <button type="submit" class="btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<div id="modal-habilidades" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Editar Habilidades</h2>
            <button onclick="closeModal('modal-habilidades')" class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form action="{{ route('user-profile.update-skills', ['profileId' => $profile->id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            <textarea class="w-full text-dark-900 dark:text-dark-100 bg-light-100 dark:bg-dark-700" rows="5" name="skills">{{ old('skills', $profile->skills) }}</textarea>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeModal('modal-habilidades')" class="btn-primary">Cancelar</button>
                <button type="submit" class="btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>








<div class=" h-screen">

    <div class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <div class="p-2 ">
            <!-- BTN -->
            <div class="flex items-center justify-end gap-2">
                <!-- Editar -->
                <button id="open-modal-1" title="Editar"
                    class="open-modal-button flex items-center text-primary-700 hover:text-complem-400">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                    </svg>
                </button>


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
        <!-- Datos Filiatorios -->
        <section id="datos-filiatorios" class="mb-8">
            <h2 class="font-normal text-1xl sm:text-2xl mb-2">Datos Filiatorios</h2>
            <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400" class="text-lg font-semibold">Nombre
                Completo: <span class="font-normal">{{
                $profile->first_name}} {{$profile->last_name}}
                </span></p>
            <p class="text-lg font-semibold">Fecha de Nacimiento: <span class="font-normal">{{ $profile->birth_date}}</span>
            </p>
            
            <p class="text-lg font-semibold">Documento de Identidad: <span class="font-normal">{{$profile->document_number}}</span></p>
            <p class="text-lg font-semibold">Sexo: <span class="font-normal">{{$profile->gender}}
            </span></p>
            <!-- Datos No visibles ene l perfil -->
            <p class="text-lg font-semibold">Teléfono: <span class="font-normal">
                {{$profile->phone_number}}
            </span></p>
            <span>
            <p class="text-lg font-semibold">Provincia: <span class="font-normal">{{$profile->province}}
            </span>
            <span>
            <p class="text-lg font-semibold">Localidad: <span class="font-normal">{{$profile->locality}}
            </span>
            <p class="text-lg font-semibold">Dirección: <span class="font-normal">{{$profile->address}}</span>
            </p>            
        </section>

    </div>

    <div class="mt-4 h- p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <div class="p-2 ">
            <!-- BTN -->
            <div class="flex items-center justify-end gap-2">
                <!-- Editar -->
                <button id="open-modal-2" title="Editar"
                    class="open-modal-button flex items-center text-primary-700 hover:text-complem-400">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                    </svg>
                </button>


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
        <!-- Datos de Email y Contraseña -->
        <section id="datos-credencial" class="mb-8">
            <h2 class="font-normal text-1xl sm:text-2xl mb-2">Datos de Acceso</h2>

            <p class="text-lg font-semibold">Correo Electrónico:
                <span class="font-normal">{{
                
                $user->email}}
                </span>
            </p>

            <div class="flex items-center gap-2 mt-4">
                <p class="text-lg font-semibold  flex justify-center">Contraseña:
                    <input type="password" id="password" value="ContraseñaEjemplo123"
                        class="font-normal bg-transparent border-none focus:outline-none">
                    <!--Ojito visivilidada-->
                    <button type="button" onclick="togglePassword()"
                        class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">

                        <svg id="password-icon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </p>
            </div>
        </section>
    </div>

</div>




<!-- Modal DATOS FILIATORIOS-->
<!-- Modal DATOS FILIATORIOS-->
<div id="modal-1" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <!-- Modal Header -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Editar Datos Filiatorios</h2>
            <button id="close-modal-1" class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Modal Body -->
        <form action="{{ route('personalData.edit', $profile->user_id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="full-name" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Nombre</label>
                <input type="text" id="full-name" name="first_name"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('first_name', $profile->first_name) }}">
            </div>

            <div>
                <label for="last-name" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Apellido</label>
                <input type="text" id="last-name" name="last_name"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('last_name', $profile->last_name) }}">
            </div>

            <div>
                <label for="birthdate" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Fecha de Nacimiento</label>
                <input type="date" id="birthdate" name="birthday"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('birthday', $profile->birth_date) }}">
            </div>

            <div>
                <label for="selectProvincias" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Provincia</label>
                <select id="selectProvincias" name="provincia"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300">
                    <option value="">Elige una provincia</option>
                    <!-- Las opciones se llenarán con JavaScript -->
                </select>
            </div>

            <div>
                <label for="selectLocalidades" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Localidad</label>
                <select id="selectLocalidades" name="localidad"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300">
                    <option value="">Elige una localidad</option>
                    <!-- Las opciones se llenarán con JavaScript -->
                </select>
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Dirección</label>
                <input type="text" id="address" name="address"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('address', $profile->address) }}">
            </div>

            <div>
                <label for="identity-doc" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Documento de Identidad</label>
                <input type="text" id="identity-doc" name="dni"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('dni', $profile->document_number) }}">
            </div>

            <div>
                <label for="gender" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Sexo</label>
                <select id="gender" name="sex"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300">
                    <option value="other" {{ old('sex', $profile->gender) == 'other' ? 'selected' : '' }}>Indefinido</option>
                    <option value="male" {{ old('sex', $profile->gender) == 'male' ? 'selected' : '' }}>Masculino</option>
                    <option value="female" {{ old('sex', $profile->gender) == 'female' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Teléfono</label>
                <input type="tel" id="phone" name="phone"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="{{ old('phone', $profile->phone_number) }}">
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('profile.personalData', $profile->user_id) }}" id="cancel-btn-filiatorio" class="btn-primary w-2/5 sm:w-auto">Cancelar</a>
                <button type="submit" class="btn-primary w-2/5 sm:w-auto">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<!-- Asegúrate de que el script api-arg.js esté incluido en tu vista -->
<script src="{{ asset('api-arg.js') }}"></script>


<!-- Modal Cambio de Contraseña -->
<div id="modal-2" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div
        class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <!-- Modal Header -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-dark-900 dark:text-dark-100">Cambiar Contraseña</h2>
            <button id="close-modal-2"
                class="text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Modal Body -->
        <form class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Correo
                    Electrónico</label>
                <input type="email" id="email" name="email" readonly
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    value="email@ejemplo.com">
            </div>

            <div>
                <label for="new-password" class="block text-sm font-medium text-dark-700 dark:text-dark-300">Nueva
                    Contraseña</label>
                <input type="password" id="new-password" name="new-password"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    required>
            </div>
            <div>
                <label for="confirm-password"
                    class="block text-sm font-medium text-dark-700 dark:text-dark-300">Confirmar Nueva
                    Contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password"
                    class="mt-1 block w-full px-3 py-2 border border-dark-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm dark:bg-dark-700 dark:border-dark-600 dark:text-dark-300"
                    required>
                    
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="cancel-btn-pw" class="btn-primary w-2/5 sm:w-auto">Cancelar</button>
                <button type="submit" class="btn-primary w-2/5 sm:w-auto">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script>
//Controla el Modal 
// Función para abrir el modal adecuado
document.querySelectorAll('.open-modal-button').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = this.id.replace('open-modal-', 'modal-');
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
        }
    });
});

// Función para cerrar el modal adecuado
document.querySelectorAll('.close-modal-button').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = this.dataset.modalId;
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden');
        }
    });
});

// Función para mostrar un modal
function showModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

// Función para ocultar un modal
function hideModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

// Manejar el clic en el botón de cerrar (X) y el botón de cancelar
document.querySelectorAll('[id^="close-modal"], [id^="cancel-btn"]').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = this.closest('.fixed').id;
        hideModal(modalId);
    });
});



//Controla la visivilidad de la contraseña
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.getElementById('password-icon');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.innerHTML = `<path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
  <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>`;
    } else {
        passwordInput.type = 'password';
        passwordIcon.innerHTML =
            `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>`;
    }
}
</script>


<script>
    function toggleSaveButton() {
        const fileInput = document.getElementById('file-input');
        const saveButton = document.getElementById('save-button');

        // Mostrar el botón de guardar solo si se ha seleccionado un archivo
        if (fileInput.files.length > 0) {
            saveButton.classList.remove('hidden');
        } else {
            saveButton.classList.add('hidden');
        }
    }
</script>



<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>




<script>
document.addEventListener('DOMContentLoaded', function() {
    const profileExpanded = document.querySelector('#profile-expanded');
    const profileCollapsed = document.querySelector('#profile-collapsed');
    const collapseButton = document.querySelector('#collapse-button');
    const expandButton = document.querySelector('#expand-button');

    // Función para colapsar el perfil
    function collapseProfile() {
        profileExpanded.classList.add('hidden');
        profileCollapsed.classList.remove('hidden');
    }

    // Función para expandir el perfil
    function expandProfile() {
        profileExpanded.classList.remove('hidden');
        profileCollapsed.classList.add('hidden');
    }

    // Manejar clic en el botón de colapsar
    collapseButton.addEventListener('click', collapseProfile);

    // Manejar clic en el botón de expandir
    expandButton.addEventListener('click', expandProfile);

    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-picture').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
    

    function uploadProfilePicture() {
        const input = document.getElementById('profile-picture-input');
        const file = input.files[0];
        
        if (file) {
            const formData = new FormData();
            formData.append('profile_picture', file);
            
            fetch('/profile-picture', { // La ruta de la acción del controlador
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('profile-picture').src = data.imageUrl;
                } else {
                    alert('Error al subir la imagen.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al subir la imagen.');
            });
        }
    }



});


function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }






</script>    








@endsection