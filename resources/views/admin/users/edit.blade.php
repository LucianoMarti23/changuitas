<x-layoutadmin>
    <div class="flex flex-col gap-2 w-full max-w-full mx-auto px-2 sm:px-6 lg:px-8 bg-light-300 p-2">
        <div class="flex items-center justify-between border-b-2 border-light-200 p-2">
            <div class="flex items-center gap-2">
                <h2 class="text-base font-medium text-info-800">Detalles del Usuario: {{ old('name', $user->name) }}</h2>
            </div>
            <!-- Mensajes de Alerta -->
            <div class="flex items-center gap-2">
                <div class="bg-info-100 text-info-800 p-1 shadow-md rounded-md max-w-md flex items-center gap-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-sm">Mensaje de alerta aquí</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button type="submit" form="edit-form" class="bg-info-700 text-sm text-light-100 px-2 py-1 rounded-md hover:bg-info-500">Guardar</button>
                <a href="{{ route('users.index') }}" class="bg-alert-700 text-sm text-light-100 px-2 py-1 rounded-md hover:bg-alert-500">Cancelar</a>
            </div>
        </div>

        <!-- Información Personal -->
        <form id="edit-form" method="POST" action="{{ route('users.update', $user->id) }}" class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-2 border-light-200 rounded-md p-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-dark-700">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required class="p-2 border border-dark-300 rounded-md bg-light-200">
            </div>

            <div>
                <label for="email" class="block text-dark-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required class="p-2 border border-dark-300 rounded-md bg-light-200">
            </div>

            <!-- Otros campos estáticos pueden ser agregados aquí -->

        </form>
    </div>
</x-layoutadmin>
