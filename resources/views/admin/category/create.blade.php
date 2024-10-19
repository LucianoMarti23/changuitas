<x-layoutadmin>
    <!-- Formulario de Creación de Categoría -->
    <form action="{{ route('admin.category.store') }}" method="POST" class="w-1/4 h-2/4 p-6 mx-auto my-4 border-2 border-light-200 rounded-lg shadow-md bg-light-300 ">
        @csrf <!-- Token CSRF -->

        <h2 class="text-lg font-semibold mb-4">Crear Nueva Categoría</h2>

        <!-- Mensajes de Alerta -->
        @if(session('success'))
            <div class="flex items-center gap-2">
                <div class="bg-info-100 text-info-800 p-1 shadow-md rounded-md max-w-md flex items-center gap-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-dark-700">Nombre de la Categoría</label>
            <input type="text" id="name" name="name" placeholder="Nombre de la categoría"
                class="p-2 border border-dark-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-info-500" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-dark-700">Descripción de la Categoría</label>
            <input type="text" id="description" name="description" placeholder="Descripción de la categoría"
                class="p-2 border border-dark-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-info-500">
        </div>

        <!-- Botones de Acción -->
        <div class="flex gap-4">
            <button type="submit" class="bg-info-700 text-light-100 px-4 py-2 rounded-md hover:bg-info-500">
                Confirmar
            </button>
            <a href="{{ route('admin.category') }}"
                class="bg-alert-500 text-light-100 px-4 py-2 rounded-md hover:bg-alert-400">Cancelar</a>
        </div>
    </form>
</x-layoutadmin>
