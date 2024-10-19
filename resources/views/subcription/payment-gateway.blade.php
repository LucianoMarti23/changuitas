<x-page>
    <main class="pt-32  bg-light-100 dark:bg-dark-950">
        <section
            class="space-y-4 pt-4 max-w-4xl mx-auto text-xl border-b text-dark-500 border-dark-200 dark:text-dark-400 dark:border-dark-700">

            <div class="flex flex-col justify-center texto-center">
                <h1 class="text-center text-3xl font-semibold text-bg-dark-700 dark:text-bg-ligth-200">Plan Seleccionado
                </h1>

            </div>

            <section class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md dark:bg-dark-800">
                <h2 class="text-2xl font-bold mb-4 text-center text-dark-700 dark:text-light-200">Resumen de Suscripción
                </h2>

                <div class="mb-6">
                    <label class="block text-dark-700 text-sm font-bold mb-2 dark:text-light-200">Plan
                        Seleccionado:</label>
                    <p class="text-lg font-medium text-dark-600 dark:text-light-400">Plan Premium - 1 Año</p>
                </div>

                <div class="mb-6">
                    <label class="block text-dark-700 text-sm font-bold mb-2 dark:text-light-200">Detalles del
                        Plan:</label>
                    <ul class="list-disc list-inside text-dark-600 dark:text-light-400">
                        <li>Acceso completo a todas las funcionalidades</li>
                        <li>Soporte prioritario</li>
                        <li>Publicidad destacada</li>
                        <li>10 publicaciones destacadas</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <label class="block text-dark-700 text-sm font-bold mb-2 dark:text-light-200">Precio:</label>
                    <p class="text-lg font-medium text-dark-600 dark:text-light-400">
                        <span class="text-gray-500 line-through mr-2">USD 100.00</span> <!-- Precio anterior -->
                        <span class="text-info-800">USD 80.00</span> <!-- Precio final con descuento -->
                    </p>
                </div>

                <div class="mb-6">
                    <label class="block text-dark-700 text-sm font-bold mb-2 dark:text-light-200">Método de
                        Pago:</label>
                    <div class="flex items-center">
                        <img src="/img/icons/logo-mercado-pago.png" alt="Mercado Pago" class="w-32 h-auto" />
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit"
                        class="w-98 bg-info-800 text-light-100 font-bold py-2 px-4 rounded-md hover:bg-info-500 focus:outline-none focus:ring-2 focus:ring-info-500 focus:ring-opacity-50"
                        onclick="window.location.href='{{ url('/alert-sub') }}';">
                        Confirmar y Pagar
                    </button>
                </div>
            </section>


    </main>
</x-page>