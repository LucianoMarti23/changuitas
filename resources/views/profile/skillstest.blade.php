<x-page>
 <!--encabezado del perfil-->
 <x-profile.header-profile />

<!--NAV usuario-->
<x-profile.nav-profile />

<main class="space-y-4  bg-light-100 dark:bg-dark-950">
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
        <section class="flex-auto max-w-4xl mx-auto pt-4 sm:w-full text-xl ">
            <div class="flex justify-between items-center px-4 py-2">
                <h2 class="text-2xl font-normal">Test de hablilidad Proximamente</h2>
            </div>
        </section>
    </main>
</x-page>