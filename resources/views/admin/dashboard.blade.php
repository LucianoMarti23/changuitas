<x-layoutadmin>

        <!-- Contenido Principal -->
        <main class="flex-1 p-6 bg-gray-100">


            <!-- Contenido del dashboard -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Ejemplo de tarjetas de contenido -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Usuarios Totales</h2>
                    <p class="text-2xl">{{$userCount}}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Subscription Creadas</h2>
                    <p class="text-2xl">{{$subCount}}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Categorias Totales</h2>
                    <p class="text-2xl">{{$categorias}}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Trabajos Creados</h2>
                    <p class="text-2xl">{{$pubCount}}</p>
                </div>
            </div>
        </main>

</x-layoutadmin>