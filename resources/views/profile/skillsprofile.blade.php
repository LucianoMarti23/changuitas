<x-page>
 <!--encabezado del perfil-->
 <x-profile.header-profile />

<!--NAV usuario-->
<x-profile.nav-profile />

<main class="space-y-6 bg-light-100 dark:bg-dark-950">

    <!-- Resultado del Submenú de perfil -->
    <section
        class="max-w-4xl mx-auto space-y-4 text-xl border-b text-dark-500 border-dark-200 dark:text-dark-400 dark:border-dark-700">
        <div class="pt-8 ">

            <!-- Carta de Presentación -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Habilidades Tecnicas y Blandas</h2>
                    <!--Editar-->
                    <div class="flex">
                        <div class="p-4 text-primary-700 hover:text-complem-400">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                            </svg>
                        </div>
                        <!--informacion visible o no vicible-->
                        <button data-toggle-id="button1"
                            class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                            <svg id="iconVisible1" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg id="iconHidden1" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">
                    #Excavación #Zanjas #Cañerías #HerramientasManuales #Nivelación #Compactación #Mantenimiento
                    #InstalaciónTuberías #ComunicaciónEfectiva #TrabajoEquipo #ResoluciónProblemas #Organización
                    #Puntualidad #Adaptabilidad #AtenciónCliente #Dedicación.</p>
            </div>
            <!-- form Carta de Presentación -->
            <form action="">
                <div
                    class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                    <div class="flex items-center justify-between pb-3">
                        <h2 class="font-normal text-1xl sm:text-2xl ">Habilidades Tecnicas y Blandas</h2>
                        <p class="mt-4 text-xl font-normal text-dark-600 sm:text-1xl"></p>
                    </div>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-base text-dark-900 bg-dark-50 rounded-lg border border-dark-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 
                    dark:text-ligth-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="#Puntualidad #Adaptabilidad #AtenciónCliente"></textarea>
                    <p class="pt-1 text-xs ms-auto text-dark-500 dark:text-dark-400">Usar lo recomendado iniciando con
                        #<a href="#" class="text-primary-800 dark:text-primary-500 hover:underline">Leer más</a>.</p>
                    <!--BTN se repite-->
                    <div class="flex justify-end gap-2 pt-3">
                        <input type="submit" value="Guardar" class="btn-primary" />
                        <input type="reset" class="btn-primary">
                        <a href="#" class="btn-primary ">
                            Cancelar</a>
                    </div>
                </div>
            </form>

            <!-- Cursitos -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Cursos y Formación</h3>
                        <!--Editar-->
                        <div class="flex">
                            <div class="p-4 text-primary-700 hover:text-complem-400">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                </svg>
                            </div>
                            <!--informacion visible o no vicible-->
                            <button data-toggle-id="button2"
                                class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                                <svg id="iconVisible2" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="iconHidden2" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Curso de Primeros Auxilios:
                    Aprendí técnicas básicas de primeros auxilios para responder a emergencias en el lugar de trabajo
                </p>
            </div>
            <!-- form cursito -->
            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Cursos y Formación</h2>
                    <!--informacion: politicas de la pagina-->
                    <button data-popover-target="popover-right-4" data-popover-placement="left" type="button" class="">
                        <svg class="w-6 h-6 text-primary-700 dark:text-primary-700" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div data-popover id="popover-right-4" role="tooltip"
                            class="absolute z-10 invisible inline-block w-64 text-xs transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-dark-500 bg-ligth-200 border-dark-200 dark:text-dark-400 dark:border-dark-600 dark:bg-dark-800">
                            <div class="px-2 py-1">
                                <p>campo no obligatorio.
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="max-w-md ">

                    <div class="relative z-0 w-full p-4 mb-5 group">
                        <input type="text" name="empresa"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder="" />
                        <label for="empresa"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Nombre del curso</label>
                    </div>

                    <div class="relative z-0 w-1/2 p-4 group">
                        <input type="date" id="time"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer" />
                        <label for="time"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fecha de Inicio</label>
                    </div>
                    <div class="relative z-0 w-1/2 p-4 group">
                        <input type="date" id="time"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer" />
                        <label for="time"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fecha que finaliza</label>
                    </div>
                </div>
                <!--BTN se repite-->
                <div class="flex justify-end gap-2 pt-3">
                    <input type="submit" value="Guardar" class="btn-primary" />
                    <input type="reset" class="btn-primary">
                    <a href="#" class="btn-primary ">
                        Cancelar</a>
                </div>
            </div>
        </div>



        <!--Certificados-->
        <div
            class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
            <div class="flex items-center justify-between">
                <h2 class="font-normal text-1xl sm:text-2xl">Certificados</h3>
                    <!--Editar-->
                    <div class="flex">
                        <div class="p-4 text-primary-700 hover:text-complem-400">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                            </svg>
                        </div>
                        <!--informacion visible o no vicible-->
                        <button data-toggle-id="button2"
                            class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                            <svg id="iconVisible2" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg id="iconHidden2" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
            </div>
            <table class="table-fixed">
                <thead class="bg-dark-50 dark:bg-dark-700">
                    <tr class="text-base font-normal text-dark-900 dark:text-light-400">
                        <th class="px-4 py-2">Nombre del Certificado</th>
                        <th class="px-4 py-2">Institución</th>
                        <th class="px-4 py-2">Fecha de Emisión</th>
                        <th class="px-4 py-2">Archivo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">Data Science</td>
                        <td class="px-4 py-2">Instituto XYZ</td>
                        <td class="px-4 py-2">2022-11-22</td>
                        <td class="px-4 py-2"><a href="#">Ver Archivo</a></td>
                    </tr>

                </tbody>
            </table>


        </div>


        <!-- certificado-->
        <div
            class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
            <div class="flex items-center justify-between pb-3">
                <h2 class="font-normal text-1xl sm:text-2xl ">Certificado</h2>
                <!--informacion: politicas de la pagina-->
                <button data-popover-target="popover-right-4" data-popover-placement="left" type="button" class="">
                    <svg class="w-6 h-6 text-primary-700 dark:text-primary-700" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div data-popover id="popover-right-4" role="tooltip"
                        class="absolute z-10 invisible inline-block w-64 text-xs transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-dark-500 bg-ligth-200 border-dark-200 dark:text-dark-400 dark:border-dark-600 dark:bg-dark-800">
                        <div class="px-2 py-1">
                            <p>campo no obligatorio.
                                <a href="" class="inline-flex items-center underline text-primary-800">Leer más...</a>
                            </p>
                        </div>
                    </div>
                </button>
            </div>

            <form action="/upload_certificate" method="post" enctype="multipart/form-data" class="max-w-md p-4">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="certificate_name"
                        class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nombre del Certificado:</label>
                    <input type="text" id="certificate_name" name="certificate_name"
                        class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                        placeholder="" />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="institution"
                        class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Institución:</label>
                    <input type="text" id="institution" name="institution"
                        class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                        placeholder="" />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="issue_date"
                        class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Fecha de Emisión:</label>
                    <input type="date" id="issue_date" name="issue_date"
                        class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                        placeholder="" />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="certificate_file"
                        class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Archivo del Certificado:</label>
                    <input type="file" id="certificate_file" name="certificate_file" accept=".pdf,.jpg,.jpeg,.png"
                        class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                        placeholder="" />
                </div>
                <input type="submit" value="Subir Certificado">
            </form>

            <!--BTN se repite-->
            <div class="flex justify-end gap-2 pt-3">
                <input type="submit" value="Guardar" class="btn-primary" />
                <input type="reset" class="btn-primary">
                <a href="#" class="btn-primary ">
                    Cancelar</a>
            </div>
        </div>
        </div>

        <!-- PUNTUACION-->
        <div id="Puntuación-view"
            class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
            <div class="flex items-center justify-between">
                <h2 class="font-normal text-1xl sm:text-2xl">Puntuación</h3>

                    <div class="flex">

                        <!--informacion: politicas de la pagina-->
                        <button data-popover-target="popover-right-4" data-popover-placement="left" type="button"
                            class="">
                            <svg class="w-6 h-6 text-primary-700 dark:text-primary-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div data-popover id="popover-right-4" role="tooltip"
                                class="absolute z-10 invisible inline-block w-64 text-xs transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 text-dark-500 bg-ligth-200 border-dark-200 dark:text-dark-400 dark:border-dark-600 dark:bg-dark-800">
                                <div class="px-2 py-1">
                                    <p>Elija al menos una opción.
                                        <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                            más...</a>
                                    </p>
                                </div>
                            </div>
                        </button>
                    </div>
            </div>

            <ul class="flex p-0 m-0 space-x-2 list-none">
                <li class="flex items-center">
                    <span class="font-normal text-yin-600">Puntualidad</span>
                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-gray-300 ms-1 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                </li>
            </ul>

        </div>
        </div>



    </section>
    </div>

</main>

</x-page>
