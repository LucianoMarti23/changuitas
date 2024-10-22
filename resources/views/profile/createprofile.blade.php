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




    <section class="w-full sm:w-2/4 p-6 mx-auto my-4 frame-a">
        <div class="flex items-center justify-between">
            <h2 class="font-normal text-2xl sm:text-4xl  ">Información General</h2>
        </div>
        <div class="flex flex-col ">
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Token CSRF obligatorio para seguridad -->


                <div class="py-4 flex flex-col md:flex-row items-center gap-8">
                    <!-- Contenedor para vista previa de la imagen -->
                    <div id="imagePreviewContainer" class="flex justify-center">
                        <img id="imagePreview" src="img/Profile-none.jpg" alt=""
                            class="w-[150px] h-[150px] rounded-full border-2 bg-dark-400 border-primary-500 dark:border-primary-700">
                    </div>

                    <!-- Botón de cargar foto -->
                    <label for="fileInput"
                        class="block w-full md:w-auto py-2 px-3 border border-dark-300 rounded-md shadow-sm mb-4 cursor-pointer bg-light-100 dark:bg-dark-700 hover:bg-light-200 dark:hover:bg-dark-600 text-dark-900 dark:text-light-100">
                        <span class="text-sm">Seleccionar Foto </span>
                        <input type="file" id="fileInput" name="profile_picture" accept=".jpg, .jpeg, .png"
                            class="hidden">

                    </label>
                </div>



                <div class="flex flex-col sm:flex-row gap-6 mb-4">
                    <div class="w-full">
                        <label for="first_name"
                            class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Nombre <span class="text-danger-500">*</span>
                        </label>
                        <input type="text" id="first_name" name="first_name"
                            value="{{ old('first_name', $profile->first_name) }}" class="form-input w-full"
                            placeholder="Nombre" required />
                    </div>


                    <div class="w-full">
                        <label for="last_name"
                            class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Apellido <span class="text-danger-500">*</span>
                        </label>
                        <input type="text" id="last_name" name="last_name"
                            value="{{ old('last_name', $profile->last_name) }}"
                            class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-info-500 focus:border-info-500 block w-2/3 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-light-200 dark:focus:ring-info-500 dark:focus:border-info-500"
                            placeholder="Apellido" required />
                    </div>
                </div>


                <div class="mb-4 flex flex-col md:flex-row gap-8 items-center">
                    <!-- Campo de Fecha de nacimiento -->
                    <div class="w-full md:w-auto">
                        <label for="birthday"
                            class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Fecha de nacimiento <span class="text-danger-500">*</span>
                        </label>
                        <input type="date" id="birthday" name="birthday"
                            value="{{ old('birthday', $profile->birth_date) }}" class="form-input w-full" required />
                    </div>

                    <!-- Campo de Sexo -->
                    <div class="w-full md:w-auto">
                        <label for="sex" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Sexo <span class="text-danger-500">*</span>
                        </label>
                        <select id="sex" name="sex" class="form-input w-full">
                            <option value="female" {{ $profile->gender == 'female' ? 'selected' : '' }}>Femenino
                            </option>
                            <option value="male" {{ $profile->gender == 'male' ? 'selected' : '' }}>Masculino</option>
                            <option value="other" {{ $profile->gender == 'other' ? 'selected' : '' }}>No Binario
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-4 flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/2">
                        <label for="phone" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Número de teléfono <span class="text-danger-500">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone', $profile->phone_number) }}"
                            class="form-input w-full" placeholder="0000-000000" required />
                    </div>

                    <div class="w-full md:w-1/2">
                        <label for="dni" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                            Número de documento <span class="text-danger-500">*</span>
                        </label>
                        <input type="text" id="dni" name="dni" value="{{ old('dni', $profile->document_number) }}"
                            class="form-input w-full" placeholder="Ingrese su DNI" required />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="address" class="block mb-2 text-base font-medium text-dark-900 dark:text-light-400">
                        Dirección <span class="text-danger-500">*</span>
                    </label>
                    <input type="text" id="address" name="address" value="{{ old('address', $profile->address) }}"
                        class="form-input w-full" placeholder="Ingrese su dirección" required />
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


        </div>





        <div class="flex flex-col md:flex-row justify-end gap-2 pt-3 items-center">
            <input type="submit" value="Guardar" class="btn-primary btn-standard w-full md:w-auto" />

            <a href="{{ route('profile.personalData', Auth::user()->id) }}"></a>
        
        </form>


        <form action="{{ route('logout') }}" method="POST" class="inline w-full md:w-auto">
            @csrf
            <button type="submit" class="btn-danger-texted btn-standard w-full md:w-auto">
                Cancelar
            </button>
        </form>
        </div>
    </section>



   
    <script src="/api-arg.js"></script>

    <script>

 // Obtener los elementos del DOM provisorio
 const modal = document.getElementById('modal-bienvenida');
const openModalBtn = document.getElementById('open-modal');
const closeModalBtn = document.getElementById('close-modal');

// Función para abrir el modal
openModalBtn.addEventListener('click', function() {
    modal.classList.remove('hidden', 'opacity-0', 'scale-95');
    modal.classList.add('opacity-100', 'scale-100');
});

// Función para cerrar el modal
closeModalBtn.addEventListener('click', function() {
    modal.classList.add('opacity-0', 'scale-95');
    
    // Usamos un timeout para asegurarnos de que la transición termine antes de ocultar el modal
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300); // Duración de la transición en milisegundos
});

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




