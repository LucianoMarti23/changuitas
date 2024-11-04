<x-page>
   
    <div class="flex flex-col lg:flex-row pt-4 ">
        

        <!-- Panel izquierdo -->
        <div id="panel"
            class=" max-w-sm sm:max-w-screen-sm  p-4 bg-light-200 dark:bg-dark-950 overflow-hidden transition-all duration-300 ">
            <div class="flex justify-between">

                <button id="open-modal-btn" class="m-4 p-2 text-light-600 dark:text-light-200 border rounded">
                    Crear Publicación
                </button>

                <button id="toggle-button" class="p-4 text-dark-500 hover:text-primary-700 focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>

                </button>
            </div>

            <hr class="text-dark-300 dark:text-dark-700 pb-2">

            <div class="space-y-4 overflow-y-auto">
                <!-- Buscador de Categorías -->
                <div>
                    <div class="relative flex">
                        <input type="text" placeholder="Buscar categorías" class="form-input flex-grow">
                        <span class="absolute inset-y-0 right-0 -translate-x-3 flex items-center cursor-pointer">
                            <svg class="h-5 w-5 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1114.35 5.5a7.5 7.5 0 012.3 10.15z" />
                            </svg>
                        </span>
                    </div>
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
                <!-- Buscador de Provincia -->
                <div>

                    <div class="relative">
                        <input type="text" placeholder="Buscar provincia"
                            class="w-full pl-3 pr-10 py-2 border border-dark-300 rounded-lg">
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1114.35 5.5a7.5 7.5 0 012.3 10.15z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Buscador de Ciudad -->
                <div>

                    <div class="relative">
                        <input type="text" placeholder="Buscar ciudad"
                            class="w-full pl-3 pr-10 py-2 border border-dark-300 rounded-lg">
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1114.35 5.5a7.5 7.5 0 012.3 10.15z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Filtros de Fecha de Publicación -->
                <div>
                    <label class="block text-sm sm:text-base font-medium text-dark-500 mb-2">Filtrar por fecha de
                        publicación</label>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input id="hoy" type="checkbox" class="h-4 w-4 text-primary-600 border-dark-300 rounded">
                            <label for="hoy" class="ml-2 text-sm text-dark-700 dark:text-light-200">Publicado
                                hoy</label>
                        </div>
                        <div class="flex items-center">
                            <input id="semana" type="checkbox" class="h-4 w-4 text-primary-600 border-dark-300 rounded">
                            <label for="semana" class="ml-2 text-sm text-dark-700 dark:text-light-200">Publicado esta
                                semana</label>
                        </div>
                        <div class="flex items-center">
                            <input id="mes" type="checkbox" class="h-4 w-4 text-primary-600 border-dark-300 rounded">
                            <label for="mes" class="ml-2 text-sm text-dark-700 dark:text-light-200">Publicado este
                                mes</label>
                        </div>
                    </div>
                </div>

                <!-- Tipo de Jornada -->
                <div>
                    <label for="selectJornada" class="text-sm sm:text-base font-medium text-dark-500 mb-2">Tipo de
                        Jornada</label>
                    <select id="selectJornada" name="jornada"
                        class="form-input w-full border border-dark-300 rounded-lg py-2 px-3">
                        <option value="">Elige un tipo de jornada</option>
                        <option value="completa">Jornada completa</option>
                        <option value="reducida">Jornada reducida</option>
                        <option value="libre">Jornada libre</option>
                    </select>
                </div>
            </div>
        </div>





        <!-- Contenido derecho: Publicaciones -->
        <div class="flex-grow p-6">
            <div class="flex items-center justify-between mb-4">
                <button id="show-filters-button"
                    class="flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1114.35 5.5a7.5 7.5 0 012.3 10.15z" />
                    </svg>
                    Buscar
                </button>
                <h2 class="text-lg font-semibold">Todas las Publicaciones</h2>
                <button id="clear-filters-button" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Limpiar Filtros
                </button>
            </div>
            <!-- Aquí irán las publicaciones -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                @foreach ($jobs as $job)
                    <div
                        class="p-4 bg-light-200 dark:bg-light-700 text-dark-800 dark:text-dark-200 p-4 rounded-lg shadow w-full">
                        <div class="flex items-center pb-8 justify-between">
                            <div class="flex items-center">
                                <div class="relative w-12 h-12">
                                    <img src="{{ asset('storage/' . ($job->userProfile ? $job->userProfile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                                        alt="Foto de usuario" class="object-cover w-full h-full rounded-full">

                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-semibold">{{ $job->user->name }}</h4>
                                    <!-- Nombre del usuario -->
                                    <p class="text-sm font-light text-dark-400">Hace {{ $job->created_at->diffForHumans() }}
                                    </p> <!-- Tiempo -->
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <p class="text-sm sm:text-base text-complem-400 flex items-center space-x-1">
                                    <span class="hidden text-medium sm:block">Promocionada</span>
                                </p>
                                <div class="relative">
                                    <!-- Botón de menú -->
                                    <button id="optionsButton" class="focus:outline-none">
                                        <svg class="w-8 h-8 font-semibold text-dark-900 dark:text-dark-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M12 6h.01M12 12h.01M12 18h.01" />
                                        </svg>
                                    </button>
                                    <!-- Menú desplegable -->
                                    <div id="optionsMenu"
                                        class="absolute right-0 mt-2 w-36 bg-light-100 dark:bg-dark-700 border border-dark-500 rounded-md shadow-md hidden z-10">
                                        <a href="#"
                                            class="flex px-2 py-1 text-dark-700 dark:text-light-100 hover:text-light-200 hover:bg-primary-600">Compartir</a>
                                        <a href="#"
                                            class="flex px-2 py-1 text-dark-700 dark:text-light-100 hover:text-light-200 hover:bg-primary-600">Guardar</a>
                                        <a href="#"
                                            class="flex px-2 py-1 text-dark-700 dark:text-light-100 hover:text-light-200 hover:bg-primary-600">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-xl sm:text-2xl pb-2 font-semibold">{{ $job->job_title }}</h3>
                        <!-- Título de la publicación -->

                        <div class="flex flex-col mb-1">
                            <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                <svg class="w-5 h-5 mr-1 text-primary-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $job->locality }}</span> <!-- Localidad -->
                            </div>

                            <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                <svg class="w-5 h-5 mr-1 text-primary-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span>{{ $job->work_schedule }}</span> <!-- Horario o tipo de jornada -->
                            </div>

                            <div class="flex flex-wrap items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                <svg class="w-5 h-5 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                                </svg>
                                <span class="text-sm px-1 py-1 rounded-full">{{ $job->category->name }}</span>
                                <!-- Categoría -->
                            </div>

                            <div
                                class="text-md sm:text-xl pt-2 text-dark-700 dark:text-dark-200 overflow-hidden text-ellipsis line-clamp-2">
                                <p>{{ $job->job_description }}</p> <!-- Descripción del trabajo -->
                            </div>
                        </div>

                        <div class="flex justify-end p-2 gap-2">
                            <a href="{{ route('jobsInfo', $job->id) }}" class="flex items-center btn-info-dark">
                                <!-- Enlace a más información -->
                                <svg class="flex w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                                Ver Más
                            </a>
                        </div>
                    </div>
                @endforeach

                <!-- Ejemplo de publicación FIN -->

                <!-- Repite el bloque anterior para más publicaciones -->



            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-dark-800 bg-opacity-75 flex items-center justify-center hidden">
        <div
            class="bg-light-200 dark:bg-light-700 text-dark-800 dark:text-dark-200 p-4 rounded-lg shadow w-full  lg:w-1/3 ">
            <div class="flex items-center pb-8 justify-between">
                <div class="flex items-center">
                    <!-- foto -->
                    <div class="relative w-12 h-12">
                    

                        <img src="{{ asset('storage/' . ($job->userProfile ? $job->userProfile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                        alt="Foto de usuario"
                            class="object-cover w-full h-full rounded-full">
                    </div>
                    <!-- Información de usuario -->
                    <div class="ml-4">
                        <h4 class="text-xl font-semibold">{{$job->user->name}}</h4>
                        
                    </div>
                </div>

                <!-- Estado de Promoción y Menú Desplegable -->
                <div class="flex items-center space-x-4">
                    <button type="submit" class="flex bg-complem-400 text-light-700 rounded px-4 py-2">
                        <svg class="w-6 h-6 pr-1 text-dark-700 dark:text-dark-700" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
                        </svg>
                        Promocionar</button>

                    <!-- Menú desplegable -->
                    <div class="relative">
                        <button id="optionsButton" class="focus:outline-none">
                            <svg class="h-6 w-6 text-dark-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M5 7h14M5 12h14M5 17h14" />
                            </svg>
                        </button>
                        <!-- Menú desplegable oculto -->
                        <div id="optionsMenu-crear"
                            class="absolute right-0 mt-2 w-36 bg-light-100 dark:bg-dark-700 border border-dark-500 rounded-md shadow-md hidden z-10">
                            <a href="#"
                                class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-800"><svg
                                    class="w-6 h-6 text-dark-800 dark:text-light-100 hover:text-light-100"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4.248 19C3.22 15.77 5.275 8.232 12.466 8.232V6.079a1.025 1.025 0 0 1 1.644-.862l5.479 4.307a1.108 1.108 0 0 1 0 1.723l-5.48 4.307a1.026 1.026 0 0 1-1.643-.861v-2.154C5.275 13.616 4.248 19 4.248 19Z" />
                                </svg>
                                Compartir</a>
                            <a href="#"
                                class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-800"><svg
                                    class="w-6 h-6 text-dark-800 dark:text-light-100 hover:text-light-100"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Guardar</a>
                            <a href="#"
                                class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-800"><svg
                                    class="w-6 h-6 text-dark-800 dark:text-light-100 hover:text-light-100"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z" />
                                </svg>
                                Reportar</a>
                        </div>
                    </div>

                </div>
            </div>

            <!--FORMULARIO-->
            <form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    <div class="flex flex-col space-y-4">

        <div class="flex items-center space-x-4">
            <div class="flex-1">
                <label for="job_title" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                    Título de la Publicación
                </label>
                <input type="text" id="job_title" name="job_title" class="mt-1 block form-input w-full"
                    placeholder="Ingrese el título de la publicación" required />
            </div>

            <div class="flex-1">
                <label for="modality" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                    Modalidad
                </label>
                <select id="modality" name="modality" class="mt-1 block form-input w-full" required>
                    <option value="">Seleccionar modalidad</option>
                    <option value="presencial">Presencial</option>
                    <option value="remoto">Remoto</option>
                    <option value="hibrida">Híbrido</option>
                </select>
            </div>
        </div>

        <div class="flex space-x-4">
            <div class="flex-1">
                <label for="category_id"
                    class="block text-dm font-medium text-dark-600 dark:text-light-100">
                    Categoría
                </label>
                <select id="category_id" name="category_id" class="mt-1 block form-input w-full" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex-1">
                <label for="work_schedule"
                    class="block text-dm font-medium text-dark-600 dark:text-light-100">
                    Jornada
                </label>
                <select id="work_schedule" name="work_schedule" class="mt-1 block form-input w-full" required>
                    <option value="">Seleccionar jornada</option>
                    <option value="Full time">Completa</option>
                    <option value="Part time">Parcial</option>
                </select>
            </div>
        </div>

        <div class="mb-4">
            <label for="selectProvincias"
                class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                Provincia
            </label>
            <select id="selectProvincias" name="province" class="mt-1 block form-input w-full" required>
                <option value="">Elige una provincia</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="selectLocalidades"
                class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                Ciudad
            </label>
            <select id="selectLocalidades" name="locality" class="mt-1 block form-input w-full" required>
                <option value="">Elige una localidad</option>
            </select>
        </div>

        <div>
            <label for="job_description"
                class="block text-dm font-medium text-dark-700 dark:text-dark-200">Descripción</label>
            <textarea id="job_description" name="job_description" rows="4"
                class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm"
                required></textarea>
        </div>



        <div>
            <label for="job_beneficios"
                class="block text-dm font-medium text-dark-700 dark:text-dark-200">Beneficios</label>
            <textarea id="job_beneficios" name="job_beneficios" rows="4"
                class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm"
                required></textarea>
        </div>

    </div>

    <div class="flex justify-end mt-4 space-x-2">
        <button type="button" id="close-modal-btn" class="btn-danger">Cancelar</button>
        <button type="submit" class="btn-primary">Publicar</button>
    </div>
</form>

<script src="{{ asset('api-arg.js') }}"></script>


    <script>

        const panel = document.getElementById('panel');
        const toggleButton = document.getElementById('toggle-button');
        const showFiltersButton = document.getElementById('show-filters-button');

        toggleButton.addEventListener('click', () => {
            panel.classList.toggle('hidden');
        });

        showFiltersButton.addEventListener('click', () => {
            panel.classList.remove('hidden');
        });

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
</x-page>