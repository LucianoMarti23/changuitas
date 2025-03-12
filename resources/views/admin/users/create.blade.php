<!-- Formulario para crear un nuevo usuario -->
<x-layoutadmin>
    <div class="w-2/4 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-primary-500 mb-2">Crear Usuario</h1>

            <!-- Mensajes de Alerta -->
            <div class="flex items-center mb-2 gap-2">
                <div class="bg-info-100 text-info-800 p-1 shadow-md rounded-md max-w-md flex items-center gap-2">
                    <svg class="w-6 h-6 text-info-700 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="text-base" truncate>Mensaje de alerta aquí</p>
                </div>
            </div>
        </div>

            <form action="{{ route('admin.users.store') }}" method="POST" class=" w-2/4 p-4 bg-light-200 rounded shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-dark-700">Nombre</label>
                    <input type="text" id="name" name="name" class="p-2 border border-dark-300 rounded-md w-full"
                        required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-dark-700">Email</label>
                    <input type="email" id="email" name="email" class="p-2 border border-dark-300 rounded-md w-full"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-dark-700">Contraseña</label>
                    <input type="password" id="password" name="password"
                        class="p-2 border border-dark-300 rounded-md w-full" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-dark-700">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="p-2 border border-dark-300 rounded-md w-full" required>
                </div>

                <button type="submit" class="bg-info-500 text-light-200 px-4 py-2 rounded-md hover:bg-info-600">Crear
                    Usuario</button>
            </form>
        </div>
</x-layoutadmin>