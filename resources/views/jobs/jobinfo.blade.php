<x-page>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="" class=" flex items-center justify-center py-20">
        <div class=" w-full max-w-7xl h-full flex items-center justify-center">

            <!-- Aquí irán las publicaciones -->
            <div
                class="p-4 bg-light-200  dark:bg-light-700 text-dark-800 dark:text-dark-200 p-4 rounded-lg shadow w-full">
                <div class="flex items-center pb-8 justify-between">
                    <div class="flex items-center">
                        <div class="relative w-12 h-12">
                        <img src="{{ asset('storage/' . ($job->userProfile ? $job->userProfile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                        alt="Foto de usuario" class="object-cover w-full h-full rounded-full">                        </div>
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold">{{ $job->user->name }}</h4>
                            <p class="text-sm font-light text-dark-400">Hace {{ $job->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <!-- Derecha: Estado de Promoción y Menú Desplegable -->
                    <div class="flex items-center space-x-4">
                        <!-- Estado de publicación promocionada -->
                        <p class="text-sm sm:text-base text-complem-400 flex items-center space-x-1">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11 9a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
                                <path fill-rule="evenodd"
                                    d="M9.896 3.051a2.681 2.681 0 0 1 4.208 0c.147.186.38.282.615.255a2.681 2.681 0 0 1 2.976 2.975.681.681 0 0 0 .254.615 2.681 2.681 0 0 1 0 4.208.682.682 0 0 0-.254.615 2.681 2.681 0 0 1-2.976 2.976.681.681 0 0 0-.615.254 2.682 2.682 0 0 1-4.208 0 .681.681 0 0 0-.614-.255 2.681 2.681 0 0 1-2.976-2.975.681.681 0 0 0-.255-.615 2.681 2.681 0 0 1 0-4.208.681.681 0 0 0 .255-.615 2.681 2.681 0 0 1 2.976-2.975.681.681 0 0 0 .614-.255ZM12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M5.395 15.055 4.07 19a1 1 0 0 0 1.264 1.267l1.95-.65 1.144 1.707A1 1 0 0 0 10.2 21.1l1.12-3.18a4.641 4.641 0 0 1-2.515-1.208 4.667 4.667 0 0 1-3.411-1.656Zm7.269 2.867 1.12 3.177a1 1 0 0 0 1.773.224l1.144-1.707 1.95.65A1 1 0 0 0 19.915 19l-1.32-3.93a4.667 4.667 0 0 1-3.4 1.642 4.643 4.643 0 0 1-2.53 1.21Z" />
                            </svg>
                            <span class="hidden text-medium sm:block">Promocionada</span>
                        </p>

                        <!-- Menú desplegable (icono) -->
                        <div class="relative">
                            <button id="optionsButton" class="focus:outline-none">
                                <svg class="w-8 h-8 font-semibold text-dark-900 dark:text-dark-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                            <!-- Menú desplegable oculto -->
                            <div id="optionsMenu"
                                class="absolute right-0 mt-2 w-36 bg-light-100 dark:bg-dark-700 border border-dark-500 rounded-md shadow-md hidden z-10">
                                <a href="#"
                                    class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-600"><svg
                                        class="w-6 h-6 text-dark-700 dark:text-light-100 hover:text-light-200"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4.248 19C3.22 15.77 5.275 8.232 12.466 8.232V6.079a1.025 1.025 0 0 1 1.644-.862l5.479 4.307a1.108 1.108 0 0 1 0 1.723l-5.48 4.307a1.026 1.026 0 0 1-1.643-.861v-2.154C5.275 13.616 4.248 19 4.248 19Z" />
                                    </svg>
                                    Compartir</a>
                                <a href="#"
                                    class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-600"><svg
                                        class="w-6 h-6 text-dark-800 dark:text-light-100 hover:text-light-100"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Guardar</a>
                                <a href="#"
                                    class="flex px-2 py-1 text-dark-700  dark:text-light-100 hover:text-light-200 hover:bg-primary-600"><svg
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

                <div class="">
                    <!-- Título de la publicación -->
                    <h3 class="text-xl sm:text-2xl pb-2 font-semibold">{{ $job->job_title }}</h3>
                    <!-- Contenedor para información adicional -->
                    <div class="flex flex-col mb-1">
                        <!-- Ubicación con icono -->
                        <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                            <svg class="w-5 h-5 mr-1 text-primary-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span>{{ $job->locality }} , {{$job->province}}</span>
                        </div>

                        <!-- Horario o tipo de jornada con icono -->
                        <div class="flex items-center text-base pl-2 text-dark-400 dark:text-dark-400">

                            <svg class="w-5 h-5 mr-1 text-primary-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <span>{{ $job->work_schedule }}</span>
                        </div>

                        <!-- Etiquetas de categorías -->
                        <div class="flex flex-wrap items-center text-base pl-2 text-dark-400 dark:text-dark-400">
                            <svg class="w-5 h-5  text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                            </svg>

                            <span class="  text-sm px-1 py-1 rounded-full">{{ $job->category->name }}
                                </span>
                            
                        </div>


                        <!-- Detalles de la publicación -->
                        <div class="text-md sm:text-xl pt-2 text-dark-700 dark:text-dark-200  ">
                            <p>{{ $job->job_description }}</p>
                        </div>
                    </div>

                    <!-- Botones alineados horizontalmente -->
                    <div class="flex justify-end p-2 gap-2">
                        <!-- Botón "Postularte" -->
                        @if(auth()->user()->hasAppliedForJob($job->id))
    <!-- Mostrar botón de cancelar postulación si ya se postuló -->
    <form action="{{ route('job.cancel', $job->id) }}" method="POST">
        @csrf
        @method('DELETE') <!-- Asumiendo que usas DELETE para cancelar la postulación -->
        <button type="submit" class="flex btn-danger btn-standard">
            Cancelar Postulación
        </button>
    </form>
@else
    <!-- Mostrar botón para postularte si no se ha postulado -->
    <form action="{{ route('job.aply', $job->id) }}" method="POST">
        @csrf
        <button type="submit" class="flex btn-primary btn-standard">
            <svg class="flex w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.597 3.2A1 1 0 0 0 7.04 4.289a3.49 3.49 0 0 1 .057 1.795 3.448 3.448 0 0 1-.84 1.575.999.999 0 0 0-.077.094c-.596.817-3.96 5.6-.941 10.762l.03.049a7.73 7.73 0 0 0 2.917 2.602 7.617 7.617 0 0 0 3.772.829 8.06 8.06 0 0 0 3.986-.975 8.185 8.185 0 0 0 3.04-2.864c1.301-2.2 1.184-4.556.588-6.441-.583-1.848-1.68-3.414-2.607-4.102a1 1 0 0 0-1.594.757c-.067 1.431-.363 2.551-.794 3.431-.222-2.407-1.127-4.196-2.224-5.524-1.147-1.39-2.564-2.3-3.323-2.788a8.487 8.487 0 0 1-.432-.287Z" />
            </svg>
            Postularte
        </button>
    </form>
@endif


                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal Postularte -->
    <div id="postulationModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="absolute inset-0 bg-dark-700/50"></div> <!-- Fondo semi-transparente -->
        <div class="bg-light-200 dark:bg-dark-700 p-6 rounded-lg shadow-lg w-full max-w-lg relative z-10">

            <!-- Botón de cerrar -->
            <button class="absolute top-2 right-2 text-dark-600 dark:text-light-200" onclick="toggleModal()">
                &times;
            </button>

            <!-- Título del Modal -->
            <h2 class="text-2xl font-bold mb-4">Postular a [Título del Trabajo]</h2>

            <!-- FORMULARIO -->
            <form class="application-form space-y-4">
                <div>
                    <label for="coverLetter" class="block text-sm font-medium">Mensaje personalizado:</label>
                    <textarea id="coverLetter" class="w-full p-2 border rounded-lg" rows="4"
                        placeholder="Escribe un mensaje..."></textarea>
                </div>
                <div>
                    <label for="cvUpload" class="block text-sm font-medium">Adjuntar CV:</label>
                    <input type="file" id="cvUpload" class="w-full border p-2 rounded-lg">
                </div>
            </form>

            <!-- Botones de acción -->
            <div class="flex justify-end space-x-4 mt-4">
                <button class="btn-danger" onclick="toggleModal()">Cancelar</button>
                <button class="btn-primary">Enviar postulación</button>
            </div>
        </div>
    </div>


    <script>
    // Función para mostrar/ocultar el modal
    function toggleModal() {
        const modal = document.getElementById('postulationModal');
        modal.classList.toggle('hidden');
    }
    // Función para mostrar/ocultar el modal
    function toggleModal() {
        const modal = document.getElementById('postulationModal');
        modal.classList.toggle('hidden');
    }
    </script>

</x-page>