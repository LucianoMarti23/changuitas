<x-page>
 <!--encabezado del perfil-->
 <x-profile.header-profile />

<!--NAV usuario-->
<x-profile.nav-profile />

<main class="space-y-4  bg-light-100 dark:bg-dark-950">
        <!-- Contenido de la seccion "MYprofile" -->
        <section
            class="space-y-4 pt-4 max-w-4xl mx-auto text-xl border-b text-dark-500 border-dark-200 dark:text-dark-400 dark:border-dark-700">
            <div class="mt-8 space-y-6">
                <!-- Carta de Presentación -->
                <div
                    class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                    <div class="flex items-center justify-between">
                        <h2 class="font-normal text-xl sm:text-2xl">Presentación</h2>
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
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="iconHidden1" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Estoy dispuesto(a) a ofrecer
                        mis
                        servicios a domicilio para [breve descripción de los servicios que ofreces], y siempre me
                        esfuerzo
                        por brindar la mejor calidad y atención personalizada a cada cliente. Creo en la importancia de
                        escuchar y entender las necesidades específicas de cada persona para ofrecer la solución más
                        adecuada.
                        Si estás buscando a alguien confiable, trabajador y con una dedicación genuina hacia la
                        excelencia,
                        ¡has llegado al lugar indicado! Estoy disponible para discutir cualquier proyecto o consulta que
                        tengas. No dudes en ponerte en contacto conmigo mediante el boton Contactar.
                        Espero tener la oportunidad de trabajar contigo y contribuir al éxito de tus proyectos.
                        ¡Gracias por tu tiempo y consideración!</p>
                </div>
                <!-- form Carta de Presentación -->
                <form action="">
                    <div
                        class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                        <div class="flex items-center justify-between pb-3">
                            <h2 class="font-normal text-1xl sm:text-2xl ">Presentación</h2>
                            <p class="mt-4 text-xl font-normal text-dark-600 sm:text-1xl"></p>
                        </div>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-base text-dark-900 bg-dark-50 rounded-lg border border-dark-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 
                    dark:text-ligth-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Estoy dispuesto(a) a ofrecer mis servicios a domicilio para [breve descripción de los servicios que ofreces], y siempre me esfuerzo por brindar la mejor calidad y atención personalizada a cada cliente."></textarea>
                        <p class="pt-1 text-xs ms-auto text-dark-500 dark:text-dark-400">Permite escribir 200 caracteres
                            <a href="#" class="text-primary-800 dark:text-primary-500 hover:underline">Leer más</a>.</p>
                        <!--BTN se repite-->
                        <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                            <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                            <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                            <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                                Cancelar</a>
                        </div>
                    </div>
                </form>

                <!-- Educación -->
                <div
                    class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                    <div class="flex items-center justify-between">
                        <h2 class="font-normal text-1xl sm:text-2xl">Educación</h3>
                            <!--Editar-->
                            <div class="flex">
                                <div class="p-4 text-primary-700 hover:text-complem-400">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
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
                    <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Primaria y Secundaria.</p>
                </div>

                <!-- Form Educación -->
                <div
                    class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                    <div class="flex items-center justify-between pb-3">
                        <h2 class="font-normal text-1xl sm:text-2xl ">Educacion</h2>
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
                    <form action="">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 px-2">

                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Ninguno</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Pimaria incompleta</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Primaria completa</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Secundaria incompleta</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Secundaria completa</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Terciario incompleta</label>
                            </div>

                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Terciario completa</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Universidad incompleta</label>
                            </div>
                            <div class="flex items-center mb-1">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                <label for="default-checkbox"
                                    class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                    Universidad completa</label>
                            </div>
                        </div>

                        <!--BTN se repite-->
                        <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                            <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                            <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                            <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                                Cancelar</a>
                        </div>
                </div>
                </form>

                <!-- Disponibilidad -->
                <div
                    class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                    <div class="flex items-center justify-between">
                        <h2 class="font-normal text-1xl sm:text-2xl">Disponibilidad</h3>
                            <!--Editar-->
                            <div class="flex">
                                <div class="p-4 text-primary-700 hover:text-complem-400">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                </div>
                                <!--informacion visible o no vicible-->
                                <button data-toggle-id="button3"
                                    class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                                    <svg id="iconVisible3" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <svg id="iconHidden3" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>
                            </div>
                    </div>
                    <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">De lunes a viernes de 8PM a
                        12PM.
                    </p>
                </div>

                <!-- form Disponibilidad -->
                <div
                    class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                    <div class="flex items-center justify-between pb-3">
                        <h2 class="font-normal text-1xl sm:text-2xl ">Disponibilidad</h2>
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
                    <form action="">
                        <table class="table-fixed ">
                            <thead class="bg-dark-50 dark:bg-dark-700">
                                <tr class="text-base font-normal text-dark-900 dark:text-light-400">
                                    <th class="px-4 py-2 ">Día</th>
                                    <th class="px-4 py-2 ">Desde</th>
                                    <th class="px-4 py-2 ">Asta</th>
                                </tr>
                            </thead>
                            <tr>
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Lunes</label>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="bg-dark-50 dark:bg-dark-800">
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Martes</label>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Miércoles</label>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="bg-dark-50 dark:bg-dark-800">
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Jueves</label>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Viernes</label>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="bg-dark-50 dark:bg-dark-800">
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Sabado</label>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 bg-dark-50 dark:bg-dark-800">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="flex items-center m-2 ">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-5 h-5 accent-primary-600 dark:focus:ring-complem-300 focus:ring-1">
                                    <label for="default-checkbox"
                                        class="text-base font-light ms-2 text-dark-900 dark:text-light-400">
                                        Domingo</label>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Desde</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                                <td class="px-2 ">
                                    <select
                                        class="block w-full px-0 py-3 text-base font-light bg-transparent border-0 appearance-none text-dark-700 border-b-1 border-primary-700 dark:text-dark-400 dark:border-primary-700 focus:outline-none focus:ring-0 focus:border-complem-500 peer">
                                        <option selected class="text-center">Hasta</option>
                                        <option value="08:00">08:00 AM</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <!--BTN se repite-->
                        <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                            <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                            <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                            <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                                Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Experiencia Laboral -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Experiencia Laboral</h3>
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
                            <button data-toggle-id="button4"
                                class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                                <svg id="iconVisible4" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="iconHidden4" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Lorem </p>
            </div>

            <!-- form Experiencia Laboral -->
            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Experiencia Laboral</h2>
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
                                <p>Este campo no es obligatorio.
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <form class="p-4">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="empresa"
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
                     <!--BTN se repite-->
                     <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                            <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                            <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                            <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                                Cancelar</a>
                        </div>

                </form>
            </div>

            <!-- Domicilio -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Experiencia Laboral</h3>
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
                            <button data-toggle-id="button5"
                                class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                                <svg id="iconVisible5" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="iconHidden5" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Lorem </p>
            </div>

            <!-- form Domicilio -->
            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Domicilio</h2>
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
                                <p>Estos campos son obligatorios.
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <form action="/submit_address" method="post" class="p-4">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="calle" id="calle"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="calle"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Calle</label>
                    </div>
                    <div class="relative z-0 w-1/4 mb-5 group">
                        <input type="number" name="numero"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="numero"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Número:</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="barrio" id="barrio"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="barrio"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Barrio</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="ciudad" name="ciudad"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="ciudad"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Ciudad:</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="provincia" name="provincia"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="provincia"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Provincia:</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="pais" name="pais"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="pais"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            País:</label>
                    </div>
                    <div class="relative z-0 w-1/4 mb-5 group">
                        <input type="text" id="codigo_postal" name="codigo_postal"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="codigo_postal"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Código Postal:</label>
                    </div>

                    <!--BTN se repite-->
                    <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                        <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                        <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                        <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                            Cancelar</a>
                    </div>
                </form>
            </div>



            <!-- Fecha de Nacimiento -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Experiencia Laboral</h3>
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
                            <button data-toggle-id="button6"
                                class="toggle-button text-primary-700 hover:text-complem-400 focus:outline-none">
                                <svg id="iconVisible6" class="w-6 h-6 text-ligth-50" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="iconHidden6" class="hidden w-6 h-6 text-ligth-100 dark:text-ligth-50"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">Lorem </p>
                <p id="hiddenMessage" class="hidden mt-2 text-xs text-dark-500">La fecha de nacimiento está oculta .</p>
            </div>

            <!-- form Fecha de Nacimiento -->

            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Fecha de nacimiento</h2>
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
                                <p>Elija al menos una opción.
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="max-w-md">

                    <div class="relative z-0 w-1/2 group">
                        <input type="date" id="birthday"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer" />
                        <label for="birthday"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Fecha de nacimiento</label>
                    </div>
                </div>
                <!--BTN se repite-->
                <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                    <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                    <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                    <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                        Cancelar</a>
                </div>
            </div>

            <!--Telefono-->
            <div id="telefono-view"
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Telefono</h3>
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
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">01134452432</p>
            </div>
            <!--from Telefono-->
            <div id="telefono-from"
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Telefono</h2>
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
                                <p>Por cuestiones de seguridad ésta información no se mostrará en tu perfil..
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <form action="">
                    <div class="relative z-0 w-1/4 mb-5 group">
                        <input type="tel" name="referencia"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required />
                        <label for="tel"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Número telefono</label>
                    </div>
                    <!--BTN se repite-->
                    <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                        <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                        <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                        <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                            Cancelar</a>
                    </div>
                </form>
            </div>

            <!--Correo-->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Correo</h3>
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
                                        <p>Por cuestiones de seguridad ésta información no se mostrará en tu perfil.
                                            <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                                más...</a>
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">correo@correo.cl</p>
            </div>

            <!-- from Correo-->
            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Correo</h2>
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
                                <p>Por cuestiones de seguridad ésta información no se mostrará en tu perfil..
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>
                <form action="/submit_address" method="post" class="space-y-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="correo"
                            class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo"
                            class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                            placeholder=" " required>
                    </div>
                    <!--BTN se repite-->
                    <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                        <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                        <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                        <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                            Cancelar</a>
                    </div>
                </form>
            </div>

            <!--Contraseña-->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Contraseña</h3>
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
                                        <p>Por cuestiones de seguridad ésta información no se mostrará en tu perfil..
                                            <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                                más...</a>
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>
                </div>
                <p class="mt-4 text-lg font-normal text-dark-700 dark:text-dark-400">***********</p>
            </div>
            <!-- from Contraseña-->
            <div
                class="p-6 border rounded-lg shadow-sm text-dark-500 border-primary-500 dark:text-dark-400 dark:border-primary-700">
                <div class="flex items-center justify-between pb-3">
                    <h2 class="font-normal text-1xl sm:text-2xl ">Contraseña</h2>
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
                                <p>Por cuestiones de seguridad ésta información no se mostrará en tu perfil..
                                    <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                        más...</a>
                                </p>
                            </div>
                        </div>
                    </button>
                </div>

                <form action="/submit_address" method="post" class="space-y-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <div>
                            <label for="contrasena"
                                class="peer-focus:font-medium absolute text-base text-dark-500 dark:text-dark-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-info-600 peer-focus:dark:text-info-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena"
                                class="block py-2.5 px-0 w-full text-base text-dark-200 bg-transparent border-0 border-b-2 border-dark-300 appearance-none dark:text-ligth-200 dark:border-dark-600 dark:focus:border-info-500 focus:outline-none focus:ring-0 focus:border-info-600 peer"
                                placeholder=" " required>
                        </div>
                    </div>
                    <!--BTN se repite-->
                    <div class="flex flex-col sm:flex-row justify-end items-center gap-2 pt-3">
                        <input type="submit" value="Guardar" class="btn-primary w-2/5 sm:w-auto" />
                        <input type="reset" class="btn-primary w-2/5 sm:w-auto">
                        <a href="#" class="btn-primary w-2/5 sm:w-auto text-center">
                            Cancelar</a>
                    </div>
                </form>
            </div>


            <!-- RESEÑAS -->
            <div
                class="p-6 border-t rounded-lg shadow-sm text-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                <div class="flex items-center justify-between">
                    <h2 class="font-normal text-1xl sm:text-2xl">Reseñas</h3>
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
                                        <p>Servicio que brinda la plataforma.
                                            <a href="" class="inline-flex items-center underline text-primary-800">Leer
                                                más...</a>
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>
                

                <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="flex flex-col justify-between p-4 border rounded-lg text-dark-500 border-dark-200 bg-light-100 dark:bg-dark-800 dark:text-dark-400 dark:border-dark-700">
                        <img src="./imgtempprofile/PortadaPerfil-Cons2.jpg" alt="Proyecto 1"
                            class="object-cover w-full h-32 rounded-lg">
                        <p class="mb-2 text-base text-dark-600 truncate">Excavación de zanjas para la instalación de
                            cañerías.</p>
                        <p class="mb-2 text-sm text-dark-500">Fecha: 06/04/2024</p>
                        <p class="flex items-center mb-2 text-sm text-dark-500">
                            <svg class="w-8 h-8 mr-1 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2C8.686 2 6 4.686 6 8c0 3.314 4.686 8.438 5.623 9.372a1 1 0 0 0 1.755-.002C13.315 16.439 18 11.314 18 8c0-3.314-2.686-6-6-6zm0 4a2 2 0 1 1 0 4 2 2 0 0 1 0-4z" />
                            </svg>
                            <span class="truncate">Barrio Matadero, Localidad, Provincia</span>
                        </p>
                    </div>
                    <div
                        class="flex flex-col justify-between p-4 border rounded-lg bg-light-100 dark:bg-dark-800 text-dark-500 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                        <img src="./imgtempprofile/imagenError.png" alt="Proyecto 2"
                            class="object-cover w-full h-32 rounded-lg">
                        <p class="mb-2 text-base text-dark-600 truncate">Descripción del proyecto 2.</p>
                        <p class="text-sm text-dark-500">Fecha: 30/02/1998</p>
                        <p class="flex items-center mb-2 text-sm text-dark-500">
                            <svg class="w-8 h-8 mr-1 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2C8.686 2 6 4.686 6 8c0 3.314 4.686 8.438 5.623 9.372a1 1 0 0 0 1.755-.002C13.315 16.439 18 11.314 18 8c0-3.314-2.686-6-6-6zm0 4a2 2 0 1 1 0 4 2 2 0 0 1 0-4z" />
                            </svg>
                            <span class="truncate">Ubicación: Ciudad Cdasdsadasdasd</span>
                        </p>
                    </div>
                    <div
                        class="flex flex-col justify-between p-4 border rounded-lg text-dark-500 bg-light-100 dark:bg-dark-800 border-dark-200 dark:text-dark-400 dark:border-dark-700">
                        <img src="./imgtempprofile/imagenAdd.png" alt="Proyecto 3"
                            class="object-cover w-full h-32 rounded-lg">
                        <div class="flex flex-col mb-4">
                            <p class="mb-2 text-base text-dark-600 truncate">Descripción del proyecto 3.</p>
                            <p class="mb-2 text-sm text-dark-500">Fecha: DD/MM/AAAA</p>
                            <p class="flex items-center mb-2 text-sm text-dark-500">
                                <svg class="w-8 h-8 mr-1 text-dark-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 2C8.686 2 6 4.686 6 8c0 3.314 4.686 8.438 5.623 9.372a1 1 0 0 0 1.755-.002C13.315 16.439 18 11.314 18 8c0-3.314-2.686-6-6-6zm0 4a2 2 0 1 1 0 4 2 2 0 0 1 0-4z" />
                                </svg>
                                <span class="truncate">Ubicación: Ciudad Cdasdsadasdasd</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>
            </div>
        </section>
        </div>
    </main>

    <script>
        //funcionalidad al menu amburguesa
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownContent = document.getElementById('dropdownContent');

        dropdownButton.addEventListener('click', function() {
            const menuContent = document.getElementById('dropdownMenuContent');
            menuContent.classList.toggle('hidden');
        });

        // Opcional: Cerrar el menú al hacer clic fuera de él
        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
                const menuContent = document.getElementById('dropdownMenuContent');
                if (!menuContent.classList.contains('hidden')) {
                    menuContent.classList.add('hidden');
                }
            }
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
        const popovers = document.querySelectorAll('[data-popover-target]');

        popovers.forEach(function(popoverTrigger) {
            const popoverId = popoverTrigger.getAttribute('data-popover-target');
            const popover = document.querySelector(`[data-popover="${popoverId}"]`);

            if (popoverTrigger && popover) {
                popoverTrigger.addEventListener('click', function() {
                    if (popover.classList.contains('invisible')) {
                        // Mostrar el popover
                        popover.classList.remove('invisible');
                        popover.classList.add('visible');
                        popover.style.opacity = '1';
                    } else {
                        // Ocultar el popover
                        popover.classList.remove('visible');
                        popover.classList.add('invisible');
                        popover.style.opacity = '0';
                    }
                });
            }
        });
    });

    // Obtener todos los botones con la clase toggle-button ICONO VISIBLE NO VISIBLE
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
</x-page>



<footer class="m-4 bg-ligth-100 rounded-lg shadow dark:bg-dark-800">
    <div class="w-full max-w-screen-xl p-4 mx-auto md:flex md:items-center md:justify-between">
        <span class="text-sm text-dark-500 sm:text-center dark:text-dark-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-dark-500 dark:text-dark-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>