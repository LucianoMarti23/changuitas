<x-page>
    <div class="space-y-4 pt-20 bg-light-100 dark:bg-dark-950">
        <!-- Título y descripción -->
        <div class="flex flex-col justify-center py-4 text-center">
            <h1 class="text-3xl pb-8 font-bold text-dark-600 dark:text-light-200">
                ¡Suscríbete y Conéctate con Confianza!
            </h1>
            <p class="text-xl pb-8 font-normal text-dark-600 dark:text-light-300">
                ¡Accede a más oportunidades y aumenta tu visibilidad profesional!
                Suscríbete hoy y conecta con personas de confianza que buscan tus habilidades.
            </p>
        </div>

        <!-- Sección de Cards de suscripción -->
        <section class="flex flex-wrap justify-center gap-6 py-8">
            @foreach($subs as $sub)
                @php
                    $description = ltrim($sub->description, '-');
                    $features = explode(' -', $description);
                @endphp

                <div class="max-w-xs w-full bg-primary-50 border border-primary-700 rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <!-- Imagen -->
                    <div class="flex justify-center p-4">
                        <img src="{{ asset('images/subscriptions/' . $sub->image) }}" alt="Imagen de {{ $sub->name }}" class="w-40 h-40 object-contain">
                    </div>

                    <!-- Nombre del plan -->
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-semibold">{{ $sub->name }}</h2>
                    </div>

                    <!-- Precio -->
                    <div class="p-4 text-center">
                        <p class="text-3xl font-bold">${{ $sub->price }}</p>
                    </div>

                    <!-- Lista de características -->
                    <div class="p-4">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    @foreach($features as $feature)
        <li class="flex items-start gap-2 p-2 bg-light-200 dark:bg-dark-700 rounded-lg shadow-sm">
            <svg class="w-6 h-6 text-success-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-dark-700 dark:text-light-200 text-sm sm:text-base leading-snug">
                {{ trim($feature) }}
            </span>
        </li>
    @endforeach
</ul>

                        <!-- Botón contratar -->
                        <div class="mt-4">
                            <button class="w-full px-4 py-2 shadow-lg btn-primary shadow-primary-500/50"
                                    onclick="window.location.href='{{ route('payment.gateway', $sub->id) }}';">
                                Contratar
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        <!-- Tabla comparativa de suscripciones 
        <div class="flex justify-center py-32 overflow-x-auto">
            <table class="table-auto w-full max-w-4xl text-base font-light border-2 border-primary-900 shadow-inner shadow-primary-700/50 text-light-300 dark:text-light-300">
                <thead class="bg-primary-950 dark:bg-opacity-50 dark:bg-primary-800 shadow-md shadow-primary-700/50">
                    <tr class="divide-x divide-dark-600 dark:divide-dark-700">
                        <th class="px-4 py-2 text-left">Beneficio</th>
                        <th class="px-4 py-2 text-left relative">
                            Plan Básico
                            <img src="/imgtempprofile/s-descuento.png" alt="Descuento" class="absolute bottom-0 w-12 h-12">
                        </th>
                        <th class="px-4 py-2 text-left">Plan Intermedio</th>
                        <th class="px-4 py-2 text-left">Plan Avanzado</th>
                        <th class="px-4 py-2 text-left relative">
                            Plan Premium
                            <img src="/imgtempprofile/s-regalo.png" alt="Regalo" class="absolute bottom-0 w-12 h-12">
                        </th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    
                </tbody>
            </table>
             Las filas se generarán dinámicamente -->
        </div>
    
</x-page>
