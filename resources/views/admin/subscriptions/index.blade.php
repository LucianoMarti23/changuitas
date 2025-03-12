<x-layoutadmin>
    <div class="flex flex-col w-full max-w-full mx-auto px-4 sm:px-6 lg:px-8">

        <!-- subcripcion -->
        <div class="flex flex-wrap py-2 gap-2 items-center">

            <a href="{{ route('subscriptions.create') }}"
                class="bg-info-700 text-light-100 px-4 py-2 rounded-md hover:bg-info-500">Crear Suscripción</a>
        </div>

        <!-- Tabla de Suscripciones -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-light-200 border border-dark-300">
                <thead class="bg-dark-500">
                    <tr>
                        <th class="p-2 text-left">Nombre</th>
                        <th class="p-2 text-left">Precio</th>
                        <th class="p-2 text-left">Descripción</th>
                        <th class="p-2 text-left text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-dark-800 text-sm">
                    @foreach($subs as $sub)
                    <tr class="border-b border-dark-300 hover:bg-dark-100">
                        <td class="p-2 text-left">{{ $sub->name }}</td>
                        <td class="p-2 text-left">${{ number_format($sub->price, 2) }}</td>
                        <td class="p-2 text-left">{{ $sub->description }}</td>
                        <td class="pp-2 text-left text-center">
                            <a href="{{ route('subscriptions.edit', $sub->id) }}"
                                class="text-alert-500 hover:text-alert-700">Editar</a>

                            <form action="{{ route('subscriptions.destroy', $sub->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                class="text-danger-500 hover:text-danger-700"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar esta subcripcion?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layoutadmin>