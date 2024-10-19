<x-layoutadmin>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="flex flex-col w-full max-w-full mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Tu vista de búsqueda de publicaciones -->
        <div class="flex flex-wrap py-2 gap-2 items-center">
            <div class="relative flex items-center">
                <input type="text" placeholder="Buscar publicación..." id="publicationSearch"
                    class="pl-4 p-2 w-48 border border-dark-300 rounded-md focus:outline-none focus:ring-2 focus:ring-info-500">
                <button class="absolute right-2 text-dark-400 hover:text-info-500 focus:outline-none" id="searchbutton">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </button>
            </div>

            <select class="p-2 border border-dark-300 rounded-md mb-2 sm:mb-0" id="orderByTitle">
                <option value="">Ordenar por título</option>
                <option value="title_asc">A-Z</option>
                <option value="title_desc">Z-A</option>
            </select>

            <select class="p-2 border border-dark-300 rounded-md mb-2 sm:mb-0" id="orderByDate">
                <option value="">Ordenar por fecha</option>
                <option value="date_asc">Fecha más reciente</option>
                <option value="date_desc">Fecha más antigua</option>
            </select>

            <select id="category_id" name="category_id" class="p-2 border border-dark-300 rounded-md mb-2 sm:mb-0">
    <option value="">Filtrar por Categoría</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>

        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-light-200 border border-dark-300">
                <thead class="bg-dark-500">
                    <tr>
                        <th class="p-2 text-left">Título</th>
                        <th class="p-2 text-left">Categoría</th>
                        <th class="p-2 text-left">Fecha de creación</th>
                        <th class="p-2 text-left">Email</th>
                        <th class="p-2 text-left">Estado</th>
                        <th class="p-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    @foreach($jobs as $job)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="p-2">{{ $job->job_title }}</td>
                        <td class="p-2">{{ $job->category->name }}</td>
                        <td class="p-2">{{ $job->created_at->format('d/m/Y') }}</td>
                        <td class="p-2">{{ $job->user->email }}</td>
                        <td class="p-2"></td>
                        <td class="p-2">
                            <div class="flex space-x-2">
                                <form action="{{ route('admin.destroyPub',  $job->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger-500 hover:text-danger-700" onclick="return confirm('¿Estás seguro de que deseas eliminar este job?');">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/filterPublications.js') }}"></script>
    <script>
        var filterPubUrl = "{{ route('admin.searchPublications') }}";
    </script>
</x-layoutadmin>

