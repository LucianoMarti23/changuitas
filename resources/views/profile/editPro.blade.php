<!-- resources/views/profile/seditPro.blade.php -->

@extends('components.profile.page-profile')

@section('content')

<form action="/update-profile" method="POST">
    <!-- Resumen -->
    <section class="py-8 ">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Resumen (Perfil)</h2>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-base text-dark-900 bg-dark-50 rounded-lg border border-dark-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 
                    dark:text-ligth-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Estoy dispuesto(a) a ofrecer mis servicios a domicilio para [breve descripción de los servicios que ofreces], y siempre me esfuerzo por brindar la mejor calidad y atención personalizada a cada cliente."></textarea>
        <p class="pt-1 text-xs ms-auto text-dark-500 dark:text-dark-400">Permite escribir 200 caracteres
            <a href="#" class="text-primary-800 dark:text-primary-500 hover:underline">Leer más</a>.
        </p>
    </section>

    <!--Educación -->
    <section class="py-8">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Educación</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 px-2">

            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Ninguno</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Pimaria incompleta</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Primaria completa</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Secundaria incompleta</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Secundaria completa</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Terciario incompleta</label>
            </div>

            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Terciario completa</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Universidad incompleta</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-checkbox" type="checkbox" value=""
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="default-checkbox" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Universidad completa</label>
            </div>
        </div>
    </section>

     <!--Habilidades -->
     <section class="py-8">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Habilidades</h2>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-base text-dark-900 bg-dark-50 rounded-lg border border-dark-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 
                    dark:text-ligth-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="#Puntualidad #Adaptabilidad #AtenciónCliente"></textarea>
        <p class="pt-1 text-xs ms-auto text-dark-500 dark:text-dark-400">Usar lo recomendado iniciando con
            #<a href="#" class="text-primary-800 dark:text-primary-500 hover:underline">Leer más</a>.</p>
    </section>

    <!--Experiencia -->
    <section class="py-8">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Experiencia</h2>
        <div id="experience_fields">
        <!-- Campos iniciales -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" id="experience_name" name="experience_name[]"
                class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                placeholder="" />
            <label for="empresa"
                class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Nombre de la empresa</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="cargo"
                class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                placeholder="" />
            <label for="cargo"
                class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                ¿Cargo o puesto que ocupo?</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="tiempo"
                class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                placeholder="" />
            <label for="tiempo"
                class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                ¿Cuánto tiempo trabajó?</label>
        </div>

        <div class="relative z-0 w-1/4 mb-5 group">
            <input type="tel" name="referencia"
                class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                placeholder=" " required />
            <label for="tel"
                class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Número telefono</label>
        </div>
    
    <!-- Botón para agregar nuevo campo de experiencia -->
    <button type="button" onclick="addExperienceField()" class= "text-primary-700 underline">
        Agregar Experiencia
    </button>
    </section>


   

   

    <section class="py-8">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Certificaciones</h2>
        <div id="certificate_fields">
            <!-- Campos iniciales -->
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="certificate_name" name="certificate_name[]"
                    class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="certificate_name"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nombre del Certificado:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="institution" name="institution[]"
                    class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="institution"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Institución:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" id="issue_date" name="issue_date[]"
                    class="block py-2.5 w-1/3 px-0  text-base text-dark-700 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="issue_date"
                    class="peer-focus:font-medium absolute text-base  text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Fecha de Emisión:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" id="certificate_files" name="certificate_files[]" accept=".pdf,.jpg,.jpeg,.png"
                    multiple
                    class="block py-2.5 px-0 w-1/3 text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="certificate_files"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Archivos de Certificados:</label>
            </div>
        </div>
        <button type="button" onclick="addCertificateField()" class="text-info-700 underline">
        Agregar Otro Certificado
    </button>
    </section>


    <!--Disponibilidad -->
    <section id="disponibilidad" class="py-8">
    <h2 class="font-normal text-2xl mb-4">Disponibilidad</h2>
    
    <!-- Días de la semana -->
    <div class="mb-6">
        <p class="text-lg font-semibold mb-2">Selecciona los días en los que estás disponible:</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <label class="flex items-center">
                <input type="checkbox" name="days" value="lunes" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Lunes</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="martes" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Martes</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="miércoles" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Miércoles</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="jueves" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Jueves</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="viernes" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Viernes</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="sábado" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Sábado</span>
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="days" value="domingo" class="w-5 h-5 accent-primary-600">
                <span class="ml-2">Domingo</span>
            </label>
        </div>
    </div>
    
    <!-- Horario -->
    <div>
        <p class="text-lg font-semibold mb-2">Selecciona las horas en las que estás disponible:</p>
        <div class="flex flex-col space-y-4">
            <div class="flex items-center">
                <input type="checkbox" id="morning" name="hours" value="mañana" class="w-5 h-5 accent-primary-600">
                <label for="morning" class="ml-2">Mañana</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="afternoon" name="hours" value="tarde" class="w-5 h-5 accent-primary-600">
                <label for="afternoon" class="ml-2">Tarde</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="evening" name="hours" value="noche" class="w-5 h-5 accent-primary-600">
                <label for="evening" class="ml-2">Noche</label>
            </div>
        </div>
    </div>
</section>


    <!--Idiomas -->
    <section class="py-8">
        <h2 class="font-normal text-1xl sm:text-2xl mb-2">Idiomas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 px-2">
    <!-- Idiomas -->
   <!-- Español -->
   <div class="flex items-center mb-1">
                <input id="language-checkbox-native-spanish" type="checkbox" value="espanol-nativo"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-native-spanish" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Español Nativo
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-basic-spanish" type="checkbox" value="espanol-basico"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-basic-spanish" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Español Básico
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-intermediate-spanish" type="checkbox" value="espanol-intermedio"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-intermediate-spanish" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Español Intermedio
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-advanced-spanish" type="checkbox" value="espanol-avanzado"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-advanced-spanish" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Español Avanzado
                </label>
            </div>

            <!-- Inglés -->
            <div class="flex items-center mb-1">
                <input id="language-checkbox-native-english" type="checkbox" value="ingles-nativo"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-native-english" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Inglés Nativo
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-basic-english" type="checkbox" value="ingles-basico"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-basic-english" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Inglés Básico
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-intermediate-english" type="checkbox" value="ingles-intermedio"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-intermediate-english" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Inglés Intermedio
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-advanced-english" type="checkbox" value="ingles-avanzado"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-advanced-english" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Inglés Avanzado
                </label>
            </div>

            <!-- Portugués -->
            <div class="flex items-center mb-1">
                <input id="language-checkbox-native-portuguese" type="checkbox" value="portugues-nativo"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-native-portuguese" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Portugués Nativo
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-basic-portuguese" type="checkbox" value="portugues-basico"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-basic-portuguese" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Portugués Básico
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-intermediate-portuguese" type="checkbox" value="portugues-intermedio"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-intermediate-portuguese" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Portugués Intermedio
                </label>
            </div>
            <div class="flex items-center mb-1">
                <input id="language-checkbox-advanced-portuguese" type="checkbox" value="portugues-avanzado"
                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                <label for="language-checkbox-advanced-portuguese" class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                    Portugués Avanzado
                </label>
            </div>
   
</div>

    </section>



<!--Botón de Guardar Cambios -->
    <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
        <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
        <input type="reset" class="btn-primary w-2/5 sm:w-auto">
        <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
            Cancelar</a>
    </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function addCertificateField() {
        const container = document.getElementById('certificate_fields');

        if (!container) {
            console.error('El contenedor con el ID certificate_fields no se encontró.');
            return;
        }

        const newFieldGroup = document.createElement('div');
        newFieldGroup.className = 'relative z-0 w-full mb-5 group flex items-center';

        newFieldGroup.innerHTML = `
         <div class="flex flex-col py-4">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="certificate_name" name="certificate_name[]"
                    class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="certificate_name"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nombre del Certificado:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" id="institution" name="institution[]"
                    class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="institution"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Institución:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" id="issue_date" name="issue_date[]"
                    class="block py-2.5 w-1/3 px-0  text-base text-dark-700 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="issue_date"
                    class="peer-focus:font-medium absolute text-base  text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Fecha de Emisión:</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="file" id="certificate_files" name="certificate_files[]" accept=".pdf,.jpg,.jpeg,.png"
                    multiple
                    class="block py-2.5 px-0 w-1/3 text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-light-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                    placeholder="" />
                <label for="certificate_files"
                    class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Archivos de Certificados:</label>
            </div>
<!-- Agregado para eliminar el campo -->
<button type="button" class="remove-field text-danger-500 text-md mt-2">
    Eliminar
</button>
</div>

        `;

        container.appendChild(newFieldGroup);

        // Add event listener to the new remove button
        newFieldGroup.querySelector('.remove-field').addEventListener('click', function() {
            newFieldGroup.remove();
        });
    }

    // Attach event listener to the button
    const addButton = document.querySelector('button[onclick="addCertificateField()"]');
    if (addButton) {
        addButton.addEventListener('click', addCertificateField);
    }
});


</script>


@endsection