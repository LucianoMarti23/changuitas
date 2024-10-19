@extends('components.profile.page-profile')


@section('content')
<div class="container">
    <h2>Actualizar Publicación</h2>
    
    <form action="{{ route('updatePub', $job->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Asegúrate de que tu ruta de actualización acepte PUT -->
        
        <div class="flex flex-col space-y-4">

            <div class="flex items-center space-x-4">
                <div class="flex-1">
                    <label for="job_title" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                        Título de la Publicación
                    </label>
                    <input type="text" id="job_title" name="job_title" class="mt-1 block form-input w-full"
                        placeholder="Ingrese el título de la publicación" value="{{ old('job_title', $job->job_title) }}" required />
                    @error('job_title')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex-1">
                    <label for="modality" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                        Modalidad
                    </label>
                    <select id="modality" name="modality" class="mt-1 block form-input w-full" required>
                        <option value="">Seleccionar modalidad</option>
                        <option value="presencial" {{ old('modality', $job->modality) == 'presencial' ? 'selected' : '' }}>Presencial</option>
                        <option value="remoto" {{ old('modality', $job->modality) == 'remoto' ? 'selected' : '' }}>Remoto</option>
                        <option value="hibrida" {{ old('modality', $job->modality) == 'hibrida' ? 'selected' : '' }}>Híbrido</option>
                    </select>
                    @error('modality')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="category_id" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                        Categoría
                    </label>
                    <select id="category_id" name="category_id" class="mt-1 block form-input w-full" required>
                        <option value="">Seleccionar categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $job->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex-1">
                    <label for="work_schedule" class="block text-dm font-medium text-dark-600 dark:text-light-100">
                        Jornada
                    </label>
                    <select id="work_schedule" name="work_schedule" class="mt-1 block form-input w-full" required>
                        <option value="">Seleccionar jornada</option>
                        <option value="Full time" {{ old('work_schedule', $job->work_schedule) == 'Full time' ? 'selected' : '' }}>Completa</option>
                        <option value="Part time" {{ old('work_schedule', $job->work_schedule) == 'Part time' ? 'selected' : '' }}>Parcial</option>
                    </select>
                    @error('work_schedule')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="province" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                    Provincia
                </label>
                <input type="text" id="province" name="province" class="mt-1 block form-input w-full"
                    placeholder="Ingrese el nombre de la provincia" value="{{ old('province', $job->province) }}" required />
                @error('province')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="locality" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                    Ciudad
                </label>
                <input type="text" id="locality" name="locality" class="mt-1 block form-input w-full"
                    placeholder="Ingrese el nombre de la ciudad" value="{{ old('locality', $job->locality) }}" required />
                @error('locality')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="job_description" class="block text-dm font-medium text-dark-700 dark:text-dark-200">Descripción</label>
                <textarea id="job_description" name="job_description" rows="4"
                    class="mt-1 block w-full rounded-md p-2 text-dark-700 text-sm sm:text-dm"
                    required>{{ old('job_description', $job->job_description) }}</textarea>
                @error('job_description')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="flex justify-end mt-4 space-x-2">
            <button type="button" id="close-modal-btn" class="btn-danger">Cancelar</button>
            <button type="submit" class="btn-primary">Actualizar</button>
        </div>
    </form>
</div>
@endsection
