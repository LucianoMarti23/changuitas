<x-page>
<main class="space-y-4  bg-light-100 dark:bg-dark-950">

<!-- Contenido de la seccion "SUBCRIPCION"  alerta-->
<section class="pt-32  h-screen">
    <!-- confirmacion o rechaso-->
    <div
        class="flex items-stretch justify-center max-w-md mx-auto mb-8 rounded-full adius shadow-lg text-dark-800 dark:bg-dark-800 dark:text-light-300 ">
        <div class="flex ">
            <img id="subscription-image" src="/img/icons/comprobado.png" alt="Imagen-suscripción"
                class="w-32 h-32 rounded-lg">
        </div>
        <div class="flex items-stretch p-4">
            <p id="" class="self-center text-lg">
                Pago Exitoso
            </p>
            
        </div>
    </div>
    <div
        class="flex items-stretch justify-center max-w-md mx-auto mb-8 rounded-full adius shadow-lg text-dark-800 dark:bg-dark-800 dark:text-light-300 ">
        <div class="flex ">
            <img id="subscription-image" src="/img/icons/cancelar.png" alt="Imagen-suscripción"
                class="w-32 h-32 rounded-lg">
        </div>
        <div class="flex items-stretch p-4">
            
            <p id="" class="self-center text-lg">
                Pago Rechazado
            </p>
        </div>
    </div>
</section>
</x-page>