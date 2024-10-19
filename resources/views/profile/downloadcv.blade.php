<x-page>
    <!--encabezado del perfil-->
    <x-profile.header-profilecopy />

    <!--NAV usuario-->
    <x-profile.nav-profile />

    <main class=" flex space-y-4  bg-light-100 dark:bg-dark-950">
        <div class="w-1/5 flex justify-end p-4  bg-light-100 dark:bg-dark-950">
            <h2 class="flex justify-end text-2xl font-normal pt-4">Descarga</h2>
        </div>
        <div class="felx items-center justify-center min-h-screen w-3/5 p-4">
            <section class="pt-4">
                <!-- en caso de no tener plan activo-->
                <div
                    class="flex items-stretch justify-center max-w-md mx-auto mb-8 rounded-full adius text-dark-800 dark:bg-dark-800 dark:text-light-300 ">
                    <div class="flex ">
                        <img id="subscription-image" src="/imgtempprofile/desactivo-sub.png" alt="Imagen-suscripción"
                            class="w-32 h-32 rounded-lg">
                    </div>
                    <div class="flex items-stretch p-4">
                        <p id="subscription-status" class="self-center text-lg">
                            No tienes una suscripción activa.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </main>
</x-page>