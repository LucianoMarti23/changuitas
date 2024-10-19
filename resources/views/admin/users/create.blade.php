<!-- Formulario para crear un nuevo usuario -->
<x-layoutadmin>
<form action="{{ route('admin.users.store') }}" method="POST" class="p-4 bg-white rounded shadow-md">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Nombre</label>
        <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded-md w-full" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded-md w-full" required>
    </div>

    <div class="mb-4">
        <label for="password" class="block text-gray-700">Contraseña</label>
        <input type="password" id="password" name="password" class="p-2 border border-gray-300 rounded-md w-full" required>
    </div>

    <div class="mb-4">
        <label for="password_confirmation" class="block text-gray-700">Confirmar Contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="p-2 border border-gray-300 rounded-md w-full" required>
    </div>

    <button type="submit" class="bg-info-500 text-light-200 px-4 py-2 rounded-md hover:bg-info-600">Crear Usuario</button>
</form>

</x-layoutadmin>