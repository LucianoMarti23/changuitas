<x-layoutadmin>
    <div class="flex flex-col items-center w-full max-w-lg mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-light-350 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-dark-800 mb-6">Editar Categoría</h1>

        <!-- Formulario de edición de categoría -->
        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-dark-700">Nombre de la Categoría</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200" />
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-dark-700">Descripción</label>
                <textarea id="description" name="description" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-between">
                <a href="{{ route('admin.category') }}" class="text-gray-500 hover:text-gray-700">Cancelar</a>
                <button type="submit"
                    class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
</x-layoutadmin>
