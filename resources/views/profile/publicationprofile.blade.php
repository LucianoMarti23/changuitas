@extends('components.profile.page-profile')

@section('content')
    <br>
    <br>
    <br>
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
    <main class="space-y-4 bg-light-100 dark:bg-dark-950">
        
        <section class="space-y-4 max-w-4xl mx-auto text-xl border-dark-200 dark:border-dark-700">
        <div id="" class="font-normal text-xl sm:text-2xl max-w-4xl w-full mb-2 p-4">
                <h3>Mis publicaciones</h3>

            </div>
            <div id="publicaciones-list" class="space-y-6">
                @foreach ($jobs as $job)
                    <div class="flex flex-col p-4 rounded-lg bg-light-50 shadow-lg dark:bg-dark-900">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <!-- Puedes agregar más información aquí si lo deseas -->
                            </div>
                            <div class="flex">
                                <!-- Editar -->
                                <div class="flex items-center mr-2">
                                    <div class="text-primary-700 hover:text-complem-400 cursor-pointer" id="edit-btn">
                                        <svg class="w-6 h-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Otras opciones -->
                                <div class="relative inline-block text-left">
                                    <button id="optionsButton" class="flex items-center text-primary-700 hover:text-complem-400">
                                        <svg class="w-6 h-6 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                                        </svg>
                                    </button>
                                    <!-- Menú de opciones -->
                                </div>
                            </div>
                        </div>








                        <h3 class=" font-normal text-xl sm:text-2xl py-2  text-primary-600 line-clamp">
                    Título de publicación - {{ $job->job_title }}</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Ubicación: {{ $job->locality }}, {{ $job->province }}</p>
                        <p class="pr-2 text-xl font-normal "></p>
                    </div>
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Modalidad: {{ $job->modality }}</p>
                        <p class="pr-2 text-xl font-normal "> </p>
                    </div>
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Horario: {{ $job->work_schedule }}</p>
                        <p class="pr-2 text-xl font-normal "></p>
                    </div>
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Categoría: {{ $job->category->name }}</p>
                        <p class="pr-2 text-xl font-normal "></p>
                    </div>
                    <!--analisis-->
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Fecha publicado: {{ $job->created_at->format('Y-m-d') }}</p>
                        <p class="pr-2 text-xl font-normal "></p>
                    </div>
                    <div class="">
                        <p class=" font-light text-dark-700 dark:text-dark-400">Vistas: {{$job->views}}</p>
                        <p class="pr-2 text-xl font-normal "></p>
                    </div>
                </div>

                <div class="py-4">
                    <p class=" font-light text-dark-700 dark:text-dark-400">Descripción: </p>
                    <p class="pr-2 text-xl font-normal max-h-32 overflow-y-auto ">{{ $job->job_description }}</p>
                </div>      
                   <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                         <form action="{{ route('jobs.delete', $job->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button class="btn-danger" type="submit">Eliminar</button>
                            </form>

                            <form action="{{ route('postulantes.index', $job->id) }}" method="GET">
                                <button class="btn-primary" type="submit">Ver Postulaciones</button>
                            </form>
                            
                            <form action="{{ route('editPub', $job->id) }}" method="GET">
                                <button class="btn-primary" type="submit">Editar Publicación</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>


       






 
   
@endsection