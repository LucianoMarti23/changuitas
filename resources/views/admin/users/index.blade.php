<x-layoutadmin>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="flex flex-col w-full max-w-full mx-auto px-4 sm:px-6 lg:px-8">


           <!-- Tu vista de búsqueda de usuarios -->
<div class="flex flex-wrap py-2 gap-2 items-center">
    <div class="relative flex items-center">
        <input type="text" placeholder="Buscar usuarios..." id="userSearch"
            class="pl-4 p-2 w-48 border border-dark-300 rounded-md focus:outline-none focus:ring-2 focus:ring-info-500">
        <button class="absolute right-2 text-dark-400 hover:text-info-500 focus:outline-none" id="searchbutton">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
        </button>
    </div>
    <a href="{{ route('admin.users.create') }}" class="bg-info-700 text-light-100 px-4 py-2 rounded-md hover:bg-info-500">
        Crear Usuario
    </a>
    <select class="p-2 border border-dark-300 rounded-md mb-2 sm:mb-0" id="orderFilter">
        <option value="name_asc">Ordenar por Nombre (A-Z)</option>
        <option value="name_desc">Ordenar por Nombre (Z-A)</option>
        <option value="date_asc">Ordenar por Fecha de Registro (Ascendente)</option>
        <option value="date_desc">Ordenar por Fecha de Registro (Descendente)</option>
    </select>
    <select class="p-2 border border-dark-300 rounded-md mb-2 sm:mb-0" id="roleFilter">
        <option value="">Todos los Roles</option>
        <option value="admin">Administrador</option>
        <option value="user">Usuario</option>
    </select>
</div>

<!-- Tabla de Usuarios -->
<div class="overflow-x-auto">
    <table class="min-w-full bg-light-200 border border-dark-300">
        <thead class="bg-dark-500">
            <tr>
                <th class="p-2 text-left">Nombre</th>
                <th class="p-2 text-left">Email</th>
                <th class="p-2 text-left">Estado</th>
                <th class="p-2 text-left">Fecha de Registro</th>
                <th class="p-2 text-left">Rol</th>
                <th class="p-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            @foreach($users as $user)
            <tr class="border-b border-gray-300 hover:bg-gray-100">
                <td class="p-2">{{ $user->name }}</td>
                <td class="p-2 text-left">{{ $user->email }}</td>
                <td class="p-2 text-left">{{ $user->status }}</td>
                <td class="p-2">{{ $user->created_at->format('d/m/Y') }}</td>
                <td class="p-2">{{ $user->role }}</td>
                <td class="p-2">
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="text-alert-500 hover:text-alert-700">Editar</a>
                        <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-danger-500 hover:text-danger-700" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</button>
                        </form>
            
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/filterAdmin.js') }}"></script>

<script>
    var filterUsersUrl = "{{ route('get.users.html') }}";
</script>



</x-layoutadmin>