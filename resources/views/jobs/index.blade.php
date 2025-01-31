<x-page>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="flex flex-col lg:flex-row pt-4 ">
        

        <!-- Panel izquierdo -->
        <div id="panel"
            class="min-h-screen  p-4 bg-light-200 dark:bg-dark-950 overflow-hidden transition-all duration-300 ">
            <div class="flex justify-between">

                <button id="open-modal-btn" class="btn-success m-4 p-2   border rounded">
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
  
    <!-- Buscador de Categorías -->
    <div>
    <div class="relative flex flex-col space-y-4"> <!-- Cambié a flex-col para apilar verticalmente -->

    <div>
        <label for="selectCategory" class="text-sm sm:text-base font-medium text-dark-500 mb-2">Categoría</label>
        <select id="selectCategory" name="category" class="form-input w-full border border-dark-300 rounded-lg py-2 px-3">
            <option value="">Todas las categorías</option>
            <!-- Aquí se cargarán dinámicamente las opciones de categorías -->
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="modality" class="text-sm sm:text-base font-medium text-dark-500 mb-2">Modalidad</label>
        <select id="modality" name="modality" class="form-input w-full border border-dark-300 rounded-lg py-2 px-3" required>
            <option value="">Todas las modalidades</option>
            <option value="presencial">Presencial</option>
            <option value="remoto">Remoto</option>
            <option value="hibrida">Híbrido</option>
        </select>
    </div>



    <div>
                        <label for="work_schedule" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                            Jornada
                        </label>
                        <select id="work_schedule" name="work_schedule" class="mt-1 block form-input w-full" required>
                            <option value="">Seleccionar jornada</option>
                            <option value="Full time">Completa</option>
                            <option value="Part time">Parcial</option>
                        </select>
                    </div>





                    <div>
                    <label for="selectProvinciasFiltro"
                        class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                        Ubicacion
                    </label>
                    <select id="selectProvinciasFiltro" name="province" class="mt-1 block form-input w-full" required>
                        <option value="">Elige una provincia</option>
                    </select>
                    </div>
                    
                </div>
</div>


    
                      
                   

</div>


    

                
                


    <!-- Contenedor para los trabajos -->
  

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
             

                <!-- Buscador de Ciudad -->
               

                <!-- Filtros de Fecha de Publicación -->
            
                <!-- Tipo de Jornada -->
               
            </div>
        





        <!-- Contenido derecho: Publicaciones -->
        <div class="flex-grow p-6">
        <div class="flex items-center justify-between mb-4">
    <!-- Botón para iniciar la búsqueda -->
    
                <button id="show-filters-button"
                    class="flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1114.35 5.5a7.5 7.5 0 012.3 10.15z" />
                    </svg>
                    
                </button>
                <h2 class="text-lg font-semibold">Todas las Publicaciones</h2>
               

    <!-- Campo de texto de búsqueda, inicialmente oculto -->
  
</div>


<script>
    document.getElementById('show-search-button').addEventListener('click', function () {
    const searchButton = document.getElementById('show-search-button');
    const searchInput = document.getElementById('search-input');

    // Ocultar el botón "Buscar" y mostrar el campo de texto
    searchButton.classList.add('hidden');
    searchInput.classList.remove('hidden');
});

document.getElementById('cancel-search-button').addEventListener('click', function () {
    const searchButton = document.getElementById('show-search-button');
    const searchInput = document.getElementById('search-input');

    // Ocultar el campo de texto y mostrar el botón "Buscar"
    searchInput.classList.add('hidden');
    searchButton.classList.remove('hidden');
});

</script>
            <!-- Aquí irán las publicaciones -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 " id="jobsContainer">

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
                                    
                                </p>
                                <div class="relative">
                                    <!-- Botón de menú -->
                                  
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
                                <span>Ubicacion: {{ $job->province }} , {{$job->locality}}</span> <!-- Localidad -->
                            </div>
                            
                            <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                <svg class="w-5 h-5 mr-1 text-primary-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span>Jornada: {{ $job->work_schedule }}</span> <!-- Horario o tipo de jornada -->
                            </div>
                           

                            <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
    <path d="M12 11.993a.75.75 0 0 0-.75.75v.006c0 .414.336.75.75.75h.006a.75.75 0 0 0 .75-.75v-.006a.75.75 0 0 0-.75-.75H12ZM12 16.494a.75.75 0 0 0-.75.75v.005c0 .414.335.75.75.75h.005a.75.75 0 0 0 .75-.75v-.005a.75.75 0 0 0-.75-.75H12ZM8.999 17.244a.75.75 0 0 1 .75-.75h.006a.75.75 0 0 1 .75.75v.006a.75.75 0 0 1-.75.75h-.006a.75.75 0 0 1-.75-.75v-.006ZM7.499 16.494a.75.75 0 0 0-.75.75v.005c0 .414.336.75.75.75h.005a.75.75 0 0 0 .75-.75v-.005a.75.75 0 0 0-.75-.75H7.5ZM13.499 14.997a.75.75 0 0 1 .75-.75h.006a.75.75 0 0 1 .75.75v.005a.75.75 0 0 1-.75.75h-.006a.75.75 0 0 1-.75-.75v-.005ZM14.25 16.494a.75.75 0 0 0-.75.75v.006c0 .414.335.75.75.75h.005a.75.75 0 0 0 .75-.75v-.006a.75.75 0 0 0-.75-.75h-.005ZM15.75 14.995a.75.75 0 0 1 .75-.75h.005a.75.75 0 0 1 .75.75v.006a.75.75 0 0 1-.75.75H16.5a.75.75 0 0 1-.75-.75v-.006ZM13.498 12.743a.75.75 0 0 1 .75-.75h2.25a.75.75 0 1 1 0 1.5h-2.25a.75.75 0 0 1-.75-.75ZM6.748 14.993a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75Z" />
    <path fill-rule="evenodd" d="M18 2.993a.75.75 0 0 0-1.5 0v1.5h-9V2.994a.75.75 0 1 0-1.5 0v1.497h-.752a3 3 0 0 0-3 3v11.252a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3V7.492a3 3 0 0 0-3-3H18V2.993ZM3.748 18.743v-7.5a1.5 1.5 0 0 1 1.5-1.5h13.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5h-13.5a1.5 1.5 0 0 1-1.5-1.5Z" clip-rule="evenodd" />
        </svg>
        <span>Modalidad: {{$job->modality}}</span>
</div>

                            <div class="flex flex-wrap items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                                <svg class="w-5 h-5 text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                                </svg>
                                <span class="text-sm px-1 py-1 rounded-full">Categoria: {{ $job->category->name }}</span>
                                <!-- Categoría -->
                            </div>
                            <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM8 13c-2.967 0-5.5-2.239-5.5-5S5.033 3 8 3s5.5 2.239 5.5 5-2.533 5-5.5 5zm0-1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
</svg>
<p>Visitas  {{$job->views}}</p>

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
    <div class="bg-light-200 dark:bg-light-700 text-dark-800 dark:text-dark-200 p-4 rounded-lg shadow w-full lg:w-1/3 max-h-[90vh] overflow-y-auto">
        <div class="flex items-center pb-8 justify-between">
            <div class="flex items-center">
                <!-- foto -->
                <div class="relative w-12 h-12">
                    <img src=""
                        alt="Foto de usuario"
                        class="object-cover w-full h-full rounded-full">
                </div>
                <!-- Información de usuario -->
                <div class="ml-4">
                    <h4 class="text-xl font-semibold"></h4>
                </div>
            </div>

            <!-- Estado de Promoción y Menú Desplegable -->
          

                <!-- Menú desplegable -->
               
        </div>

        <!-- FORMULARIO -->
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
                        <label for="category_id" class="block text-dm font-medium text-dark-600 dark:text-light-100">
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
                        <label for="work_schedule" class="block text-dm font-medium text-dark-600 dark:text-light-100">
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
                        class="block text-dm font-medium text-dark-700 dark:text-dark-200">Descripción del trabajo</label>
                    <textarea id="job_description" name="job_description" rows="4"
                        class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm"
                        required></textarea>
                </div>

                <div>
    <label for="job_benefits" class="block text-dm font-medium text-dark-700 dark:text-dark-200">Beneficios</label>
    <textarea id="job_benefits" name="job_benefits" rows="4" class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm" required></textarea>
</div>

<div>
    <label for="job_requirements" class="block text-dm font-medium text-dark-700 dark:text-dark-200">Requisitos</label>
    <textarea id="job_requirements" name="job_requirements" rows="4" class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm" required></textarea>
</div>


            <div class="flex justify-end mt-4 space-x-2">
                <button type="button" id="close-modal-btn" class="btn-danger">Cancelar</button>
                <button type="submit" class="btn-primary">Publicar</button>
            </div>
        </form>
    </div>
</div>


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


        <script>

$(document).ready(function() {
    // Cuando cambie el select de categoría
    $('#selectCategory, #modality, #work_schedule , #selectProvinciasFiltro , #selectTitleFiltro ' ).on('change', function() {
        let categoryId = $('#selectCategory').val();  // Obtener el ID de la categoría seleccionada
        let modality = $('#modality').val();          // Obtener la modalidad seleccionada
        let workSchedule = $('#work_schedule').val(); // Obtener la jornada seleccionada
        let province = $('#selectProvinciasFiltro').val();
        let title = $('#selectTitleFiltro').val();

        
        

        // Realizar la búsqueda con los filtros seleccionados
        performSearch(categoryId, modality, workSchedule , province , title);
    });

    // Función para realizar la solicitud AJAX
    function performSearch(categoryId, modality, workSchedule , province , title) {
        // Realizar la solicitud AJAX
        $.ajax({
            url: '{{ route("jobs.filterByCategory") }}',  // Ruta de la solicitud AJAX
            method: 'GET',  // Usamos GET para obtener datos
            data: {
                category_id: categoryId,  // Enviar el ID de la categoría seleccionada
                modality: modality,       // Enviar la modalidad seleccionada
                work_schedule: workSchedule,
                province: province,
                title : title, // Enviar la jornada seleccionada
            },
            success: function(response) {
                console.log('Respuesta de la búsqueda: ', response); // Verificar respuesta
                // Actualizar el contenido de los trabajos con los resultados de la búsqueda
                $('#jobsContainer').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Error al realizar la búsqueda:', status, error);  // Ver mensaje de error
                alert('Hubo un error al realizar la búsqueda.');
            }
        });
    }
});




        </script>

</x-page>