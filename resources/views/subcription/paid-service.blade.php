<x-page>

    <main class="space-y-4 pt-64 bg-light-100 dark:bg-dark-950">
        <div class="flex flex-col justify-center py-4 texto-center">
            <h1 class="text-center text-3xl pb-8 font-bold text-dark-600 dark:text-ligth-200">¡Suscríbete y Conéctate con
                Confianza!
            </h1>
            <p class=" text-center text-xl pb-8 font-normal text-dark-600 dark:text-ligth-300">¡Accede a más
                oportunidades y aumenta tu visibilidad profesional!
                Suscríbete hoy y conecta con personas de confianza que buscan tus habilidades.</p>
        </div>
        <!-- Cards "SUBCRIPCION" -->
        <section class="flex justify-center py-8">
          
                <!-- PLAN 2-->
                @foreach ( $subs as $sub )
                <div
                    class="overflow-hidden transition-transform duration-300 transform border rounded-lg shadow-md cursor-pointer w-xl bg-ligth-300 border-primary-700 hover:scale-90 max-w-64 max-h-auto">
                    <div class="flex justify-center p-4 ">
                    <img src="{{ asset('images/subscriptions/' . $sub->image) }}" alt="Imagen de {{ $sub->name }}" class="w-40 h-40">

                    </div>
                    <!-- Mes -->
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">{{$sub->name}}</h2>
                    </div>
                    <!-- Precio -->
                    <div class="p-4 text-center">
                        <p class="text-3xl font-bold">${{$sub->price}}</p>
                    </div>
                    <!-- Lista de íconos en 2 columnas -->
                    <div class="p-4 ">
                        <ul class="grid grid-cols-2 gap-4">
                            <li class="flex items-center space-x-2 truncate text-success-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="truncate">Incluye Plan Básico. </span>
                            </li>
                            <li class="flex items-center space-x-2 truncate text-success-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="truncate">Aplicación Avanzada</span>
                            </li>
                            <li class="flex items-center space-x-2 truncate text-success-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="truncate">Herramientas de Análisis</span>
                            </li>
                            <li class="flex items-center space-x-2 truncate text-success-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="truncate">Evaluaciones de Habilidades</span>
                            </li>
                        </ul>
                        <!-- Botón plan 2 -->
                        <div class="p-4">
                            <button class="w-full px-4 py-2 shadow-lg btn-primary shadow-primary-500/50"
                                onclick="window.location.href='{{ url('/payment-gateway') }}';">

                                Contratar
                            </button>
                        </div>
                    </div>
                </div>

                     
                     
                @endforeach
                

                <!-- PLAN 3 -->
               
        </section>



        <!-- Tabla: Niveles de SUBCRIPCIONES -->
        <div class="flex justify-center py-32">
        <table id="benefitsTable" class="table-auto w-1/2  text-base font-light border-2 shadow-inner  shadow-primary-700/50 border-primary-900 text-light-300 dark:text-light-300"">
            <thead class="shadow-md shadow-primary-700/50 bg-primary-950 dark:bg-opacity-50 dark:bg-primary-800">
                <tr class="divide-x divide-dark-600 dark:divide-dark-700 ">
                    <th class="px-4 py-2">Beneficio</th>
                    <th class="px-4 py-2">
                        <div class="relative">
                            <!-- Imagen promos descuento->hidden 
                                 no descuento inline-block -->
                            <img src="/imgtempprofile/s-descuento.png" alt="Descuento"
                                class="absolute bottom-0 inline-block object-cover w-12 h-12" id="descuento%">
                        </div>Plan Básico
                    </th>
                    <th class="px-4 py-2">Plan Intermedio</th>
                    <th class="px-4 py-2">Plan Avanzado</th>
                    <th class="px-4 py-2">
                        <div class="relative">
                            <!-- Imagen promos-->
                            <img src="/imgtempprofile/s-regalo.png" alt="Descuento"
                                class="absolute bottom-0  inline-block object-cover w-12 h-12" id="regalo%">
                        </div>Plan Premium
                    </th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Aquí se generarán las filas dinámicamente -->
            </tbody>
        </table>
        </div>

    </main>
    
</x-page>