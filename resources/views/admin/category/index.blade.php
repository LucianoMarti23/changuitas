<x-layoutadmin>
    

    <!-- CONTENIDO PRINCIPAL -->
    <div class="flex flex-col gap-2 w-full max-w-full mx-auto px-2 sm:px-6 lg:px-8 bg-light-300 p-1 ">
    @if(session('success'))
    <div id="success-message" class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif



        <div class="flex items-center justify-between border-b-2 border-light-200 p-2">
            <!-- Barra de Búsqueda y Filtros -->
            <div class="flex flex-wrap py-1 gap-2 items-center">
                <div class="relative flex items-center">
                    <input type="text" placeholder="Buscar categorías... " id="categorySearch"
                        class="p-1 w-48 border border-dark-300 rounded-md focus:outline-none focus:ring-2 focus:ring-info-500">
                    <button class="absolute right-2 text-dark-400 hover:text-info-500 focus:outline-none">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </button>
                </div>
                <!-- Botón para crear una nueva categoría -->
                <a href="{{ route('admin.category.create') }}"
                    class="bg-info-700 text-light-100 px-2 py-1 rounded-md hover:bg-info-500">
                    Crear Categoría
                </a>
                <!-- Filtros de Categorías -->
                <select class="p-1 border border-dark-300 rounded-md mb-2 sm:mb-0" id="orderName">
                    <option value="">Ordenar por Nombre</option>
                    <option value="name_asc">Nombre (A-Z)</option>
                    <option value="name_desc">Nombre (Z-A)</option>
                </select>
               
               
               
            </div>
        </div>

        <!-- Tabla de Categorías -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-light-200 border border-dark-300">
                <thead class="bg-dark-500">
                    <tr >
                        <th class="p-2 text-left">Nombre</th>
                        <th class="p-2 text-left">Fecha de Creación</th>
                        <th class="p-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody id ="userTableBody">
                    @foreach($categories as $category)
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="p-2">{{ $category->name }}</td>

                            <td class="p-2">{{ $category->created_at->format('d/m/Y') }}</td> <!-- Fecha de creación -->
                            <td class="p-2">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="text-alert-500 hover:text-alert-700 ml-4">Editar</a>

                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center mt-4">
            <button class="bg-dark-300 text-dark-500 p-1 rounded-md hover:bg-dark-400">Anterior</button>
            <span class="text-dark-500">Página 1 de 10</span>
            <button class="bg-dark-300 text-dark-500 p-1 rounded-md hover:bg-dark-400">Siguiente</button>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/filterCategory.js') }}"></script>
    <script>
        var filterCategoryUrl = "{{ route('admin.category.search') }}";
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.opacity = '0';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 500); // tiempo para desvanecer
            }, 3000); // tiempo antes de desvanecer
        }
    });
</script>




</x-layoutadmin>
