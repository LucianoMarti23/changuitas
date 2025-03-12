<x-layoutadmin>
<div class="w-2/4 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-primary-500 mb-2">Crear Subcripción</h1>

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

        <form action="{{ route('subscriptions.store') }}" method="POST" class="w-2/4 p-4 bg-light-200 rounded shadow-md" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-dark-700">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="p-2 border border-dark-300 rounded-md w-full" required>
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-dark-700">Precio</label>
                <input type="number" id="price" name="price" value="{{ old('price') }}" class="p-2 border border-dark-300 rounded-md w-full" required>
                @error('price')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-dark-700">Descripción</label>
                <textarea id="description" name="description" class="p-2 border border-dark-300 rounded-md w-full" placeholder="Descripción del servicio disponible para el usuario">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-success-600 text-light-200 px-4 py-2 rounded-md hover:bg-success-700">Guardar</button>
        </form>
    </div>
</x-layoutadmin>
