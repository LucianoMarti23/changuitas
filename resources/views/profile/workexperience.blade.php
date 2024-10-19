@extends('components.profile.page-profile')

@section('content')



<br>
<!-- Botón para abrir el modal -->
<div class="flex justify-end mb-6">
    <button id="openModalBtn" class="btn-success btn-standard text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
       Agregar Experiencia
    </button>
</div>

<!-- Modal -->
<div id="formModal" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4 text-center">Registrar Experiencia</h2>
        <form class="max-w-md mx-auto" method="POST" action="{{ route('work_experiences.store', $userProfile->id) }}">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="job_title" id="job_title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="job_title" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Puesto Laboral</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="company" id="company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="company" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Empresa</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="start_date" id="start_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />
                <label for="start_date" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha de Inicio</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="end_date" id="end_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                <label for="end_date" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha de Terminación</label>
            </div>
            <button type="submit" class="btn-success btn-standard text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar Experiencia</button>
        </form>
        <button id="closeModalBtn" class="btn-danger btn-standard mt-4 text-red-500 hover:text-red-700 focus:outline-none">Cancelar</button>
    </div>
</div>

<p class="">Lista de Experiencias</p>
<br>
<hr>
<br>
<!-- Sección para mostrar las experiencias laborales -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($workExperiences as $workExperience)
        <div class="bg-white shadow-lg rounded-lg p-6 cursor-pointer work-experience transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl hover:ring hover:ring-blue-300"
             data-id="{{ $workExperience->id }}" 
             data-job-title="{{ $workExperience->job_title }}" 
             data-company="{{ $workExperience->company }}" 
             data-start-date="{{ $workExperience->start_date }}" 
             data-end-date="{{ $workExperience->end_date }}">
             
            <h3 class="text-xl font-bold text-gray-800">Cargo: {{ $workExperience->job_title }}</h3>
            <p class="text-gray-600 text-md">Empresa: {{ $workExperience->company }}</p>
            <p class="text-gray-500 text-sm">Inicio: {{ \Carbon\Carbon::parse($workExperience->start_date)->format('d/m/Y') }}</p>
            <p class="text-gray-500 text-sm">
                Finalización: {{ $workExperience->end_date ? \Carbon\Carbon::parse($workExperience->end_date)->format('d/m/Y') : 'Actualidad' }}
            </p>

            <div class="mt-4 flex justify-between items-center">
                <form action="{{ route('work_experiences.destroy', $workExperience->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-danger bg-red-600 text-white hover:bg-red-700 rounded-lg px-4 py-2 transition duration-300 ease-in-out" type="submit">Eliminar</button>
                </form>
                <button id="openModalBtn" class="btn-complem bg-blue-600 text-white hover:bg-blue-700 rounded-lg px-4 py-2 transition duration-300 ease-in-out" type="button">Editar</button>
            </div>
        </div>
    @endforeach
</div>




<!-- Modal --><!-- Modal para editar experiencia laboral -->




<script>
    document.getElementById('openModalBtn').addEventListener('click', function() {
        document.getElementById('formModal').classList.remove('hidden');
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
        document.getElementById('formModal').classList.add('hidden');
    });

    // Cierra el modal si se hace clic fuera de él
    window.onclick = function(event) {
        const modal = document.getElementById('formModal');
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    }
    

</script>



@endsection
