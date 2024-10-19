<!-- resources/views/profile/subscription.blade.php -->

@extends('components.profile.page-profile')

@section('content')

<main class="space-y-4 ">

   <!-- Contenido de la sección "SUBCRIPCION" alerta -->
<div class="flex items-stretch justify-center pt-4">
    <!-- En caso de no tener plan activo -->
    <div class="flex items-stretch justify-center max-w-md mx-auto mb-8 rounded-full bg-gray-200 dark:bg-dark-800 text-dark-800 dark:text-light-300">
        <div class="flex">
            <img id="subscription-image" src="/imgtempprofile/desactivo-sub.png" alt="Imagen-suscripción" class="w-32 h-32 rounded-lg">
        </div>
        <div class="flex items-stretch p-4">
            <p id="subscription-status" class="self-center text-lg">No tienes una suscripción activa.</p>
        </div>
    </div>
</div>

<!-- INFO usuario de su "SUBCRIPCION" -->
<div class="mt-4 p-4 rounded shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)] bg-light-200 dark:bg-dark-800">

    <div class="px-4 py-6 bg-light-200 dark:bg-dark-700">
        <h3 class="font-semibold mb-2 text-xl sm:text-2xl text-primary-700">Tu Nivel de Suscripción Actual</h3>
        <p class="mb-2"><strong>Nombre del Nivel:</strong> Nivel Avanzado</p>
        <p class="mb-4"><strong>Descripción Breve:</strong> Acceso Exclusivo a Ofertas, Análisis de Perfil y Publicidad Profesional</p>

        <div class="px-4 py-4 bg-dark-50 dark:bg-dark-800 rounded-lg shadow-sm">
            <h3 class="font-semibold text-xl sm:text-2xl text-primary-700">Detalles de la Suscripción</h3>
            <p class="mb-2"><strong>Fecha de Inicio:</strong> 1 de Enero de 2024</p>
            <p class="mb-2"><strong>Fecha de Renovación:</strong> 1 de Julio de 2024</p>
            <p class="mb-4"><strong>Estado de Pago:</strong> Pagado</p>
            <p class="mb-4"><strong>Próxima Fecha de Renovación:</strong> 1 de Julio de 2024</p>
        </div>

        <div class="px-4 py-4 mt-4 bg-dark-50 dark:bg-dark-800 rounded-lg shadow-sm">
            <h3 class="font-semibold text-xl sm:text-2xl text-primary-700">Beneficios del Nivel Actual</h3>
            <ul class="list-disc pl-5 mb-4">
                <li>Acceso a ofertas exclusivas.</li>
                <li>Análisis detallado del perfil.</li>
                <li>Publicidad destacada en la plataforma.</li>
            </ul>
        </div>

        <div class="px-4 py-4 mt-4 bg-dark-50 dark:bg-dark-800 rounded-lg shadow-sm">
            <h3 class="font-semibold text-xl sm:text-2xl text-primary-700">Opciones</h3>
            <p class="mb-2"><a href="{{ url('/paid-service') }}" class="text-complem-400 hover:text-complem-200 hover:underline">Mejorar Suscripción</a></p>
            <p class="mb-2"><a href="#" class="text-primary-500 hover:text-primary-700 hover:underline">Comparar Niveles</a></p>
            <p class="mb-2"><a href="#" class="text-primary-500 hover:text-primary-700 hover:underline">Historial de Facturación</a></p>
            <p class="mb-2"><a href="#" class="text-primary-500 hover:text-primary-700 hover:underline">Renovar Manualmente</a></p>
            <p class="mb-2"><a href="#" class="text-primary-500 hover:text-primary-700 hover:underline">Cancelar Suscripción</a></p>
        </div>

        <div class="px-4 py-4 mt-4 bg-dark-50 dark:bg-dark-800 rounded-lg shadow-sm">
            <h3 class="font-semibold text-xl sm:text-2xl text-primary-700">Soporte</h3>
            <p class="mb-2"><a href="mailto:support@example.com" class="text-primary-500 hover:text-primary-700 hover:underline">Contáctanos</a></p>
            <p class="mb-2"><a href="#" class="text-primary-500 hover:text-primary-700 hover:underline">Guía de Usuario</a></p>
        </div>
    </div>
</div>

</main>


@endsection