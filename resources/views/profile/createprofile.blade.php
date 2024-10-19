<x-page>
@if ($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
@endif

    <div class="flex items-center justify-between pb-3">
        <div class="w-1/2 p-6 mx-auto my-2 rounded-lg dark:border-dark-700">
            <h1 class="text-3xl font-extrabold text-center sm:text-6xl">
                <span class="text-primary-600">Crear Perfil</span>
            </h1>
        </div>
    </div>


    

    <section class="w-1/2 p-6 mx-auto my-4 border rounded-lg shadow-md bg-primary-100 dark:bg-dark-800 dark:border-dark-700 ">
        <div class="flex items-center justify-between pb-2">
            <h2 class="font-semibold text-1xl sm:text-2xl ">Información General</h2>
        </div>
        <div class="flex flex-col ">
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- Token CSRF obligatorio para seguridad -->

    <div class="py-4 flex flex-col md:flex-row items-center gap-8">
        <!-- Contenedor para vista previa de la imagen -->
        <div id="imagePreviewContainer" class="flex justify-center">
            <img id="imagePreview" src="img/Profile-none.jpg" alt="Vista previa de la imagen"
                class="w-[150px] h-[150px] rounded-full border-2 bg-dark-400 border-primary-500 dark:border-primary-700">
        </div>

        <!-- Botón de cargar foto -->
        <label for="fileInput"
            class="sm:w-auto py-2 px-3 border border-dark-300 rounded-md shadow-sm mb-4 cursor-pointer bg-light-100 dark:bg-dark-700 hover:bg-light-200 dark:hover:bg-dark-600 text-dark-900 dark:text-light-100">
            <span class="text-sm">Seleccionar Foto</span>
            <input type="file" id="fileInput" name="profile_picture" accept=".jpg, .jpeg, .png" class="hidden">
        </label>
    </div>

    <div class="mb-4 space-y-2">
        <label for="first_name" class="block mb-2 text-base font-medium text-dark-500 dark:text-light-1000">
            Nombre <span class="text-danger-500">*</span>
        </label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $profile->first_name) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" placeholder="Nombre" required />
    </div>

    <div class="mb-4">
        <label for="last_name" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Apellido <span class="text-danger-500">*</span>
        </label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $profile->last_name) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" placeholder="Apellido" required />
    </div>

    <div class="mb-4">
        <label for="birthday" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Fecha de nacimiento <span class="text-danger-500">*</span>
        </label>
        <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $profile->birth_date) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-1/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" required />
    </div>

    <div class="mb-4">
        <label for="sex" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Sexo <span class="text-danger-500">*</span>
        </label>
        <select id="sex" name="sex" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500">
            <option value="female" {{ $profile->gender == 'female' ? 'selected' : '' }}>Femenino</option>
            <option value="male" {{ $profile->gender == 'male' ? 'selected' : '' }}>Masculino</option>
            <option value="other" {{ $profile->gender == 'other' ? 'selected' : '' }}>No Binario</option>
        </select>
    </div>

    <div class="mb-4 space-y-2">
        <label for="selectProvincias" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Provincia <span class="text-danger-500">*</span>
        </label>
        <select id="selectProvincias" name="provincia" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" required>
            <option value="">Elige una provincia</option>
            <!-- Las provincias se cargarán aquí -->
        </select>
    </div>

    <div class="mb-4 space-y-2">
        <label for="selectLocalidades" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Localidad <span class="text-danger-500">*</span>
        </label>
        <select id="selectLocalidades" name="localidad" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" required>
            <option value="">Elige una localidad</option>
            <!-- Las localidades se cargarán aquí -->
        </select>
    </div>

    <div class="mb-4">
        <label for="address" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Dirección <span class="text-danger-500">*</span>
        </label>
        <input type="text" id="address" name="address" value="{{ old('address', $profile->address) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" placeholder="Ingrese su dirección" required />
    </div>

    <div class="mb-4">
        <label for="phone" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Número de teléfono <span class="text-danger-500">*</span>
        </label>
        <input type="tel" id="phone" name="phone" value="{{ old('phone', $profile->phone_number) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-1/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" placeholder="0000-000000" required />
    </div>

    <div class="mb-4">
        <label for="dni" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
            Número de documento <span class="text-danger-500">*</span>
        </label>
        <input type="text" id="dni" name="dni" value="{{ old('dni', $profile->document_number) }}" class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-1/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light dark:focus:ring-info-500 dark:focus:border-info-500" placeholder="Ingrese su DNI" required />
    </div>

    <div class="flex justify-end gap-2 pt-3">
        <input type="submit" value="Guardar" class="btn-primary" />
        <a href="{{ route('profile.personalData', Auth::user()->id) }}"></a>
    </div>
</form>

<script src="/api-arg.js"></script>

        </div>
        
        <div class="flex justify-end gap-2 pt-3">
        <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="btn-primary">
            Cancelar
        </button>    
        </div>
    </section>




    <script src="https://unpkg.com/htmx.org@1.7.0/dist/htmx.min.js"></script>
    <script>
        // Obtener todos los botones con la clase toggle-button ICONO info
        const buttons = document.querySelectorAll('.toggle-button');
        // Iterar sobre cada botón y agregar un event listener para el clic
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Obtener el id del SVG visible e invisible del botón
                const visibleIconId = 'iconVisible' + this.getAttribute('data-toggle-id').slice(-1);
                const hiddenIconId = 'iconHidden' + this.getAttribute('data-toggle-id').slice(-1);
                // Alternar las clases hidden en los SVGs correspondientes
                document.getElementById(visibleIconId).classList.toggle('hidden');
                document.getElementById(hiddenIconId).classList.toggle('hidden');
            });
        });
    </script>

    <script>
          function alertMessage(message) {
            alert(message);
          }
    </script>

<script>
    // Función para previsualizar la imagen cargada
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('imagePreview');

        if (file && (file.type === 'image/jpeg' || file.type === 'image/png')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Actualiza la fuente de la imagen con la previsualización
            };
            reader.readAsDataURL(file);
        } else {
            alert("Por favor, selecciona una imagen válida (JPEG o PNG).");
            event.target.value = ''; // Resetear input si el archivo no es válido
        }
    });






   







</script>








</x-page>





