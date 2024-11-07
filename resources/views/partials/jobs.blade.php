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
                <p>Descripcion: {{ $job->job_description }}</p> <!-- Descripción del trabajo -->
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
