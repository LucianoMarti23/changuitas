<x-layoutadmin>
    <div class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-gray-900">Suscripciones</h1>
            <a href="{{ route('subscriptions.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">Crear Suscripción</a>
        </div>

        <!-- Tabla de Suscripciones -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-xs">
                        <th class="py-3 px-4 border-b">Nombre</th>
                        <th class="py-3 px-4 border-b">Precio</th>
                        <th class="py-3 px-4 border-b">Descripción</th>
                        <th class="py-3 px-4 border-b text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 text-sm">
                @foreach($subs as $sub)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $sub->name }}</td>
                    <td class="py-3 px-4">${{ number_format($sub->price, 2) }}</td>
                    <td class="py-3 px-4">{{ $sub->description }}</td>
                    <td class="py-3 px-4 text-center">
                        <a href="{{ route('subscriptions.edit', $sub->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg shadow-sm hover:bg-yellow-600 transition duration-300">Editar</a>
                        
                        <form action="{{ route('subscriptions.destroy', $sub->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg shadow-sm hover:bg-red-600 transition duration-300">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layoutadmin>




