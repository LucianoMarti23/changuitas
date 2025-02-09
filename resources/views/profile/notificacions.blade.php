@extends('components.profile.page-profile')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-semibold text-center text-dark-900 dark:text-dark-100 mb-8">
        Notificaciones
    </h2>
    
    <div class="space-y-4">
        @foreach ($notifications as $notification)
            <div class="p-4 bg-white dark:bg-dark-800 rounded-lg shadow-sm hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                <div class="flex items-center space-x-4">
                    <!-- Imagen de perfil -->
                    <img class="w-16 h-16 rounded-full border-2 border-complem-400"
                        src="{{ isset($notification->data['picture']) ? Storage::url($notification->data['picture']) : asset('img/default-profile.png') }}"
                        alt="Foto de perfil">

                    <div class="flex-1">
                        <!-- Mensaje de la notificación -->
                        <p class="text-sm text-gray-700 dark:text-gray-300 mb-2">
                            {{ $notification->data['message'] }}
                        </p>

                        <!-- Fecha de creación de la notificación -->
                        <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400">
                            <span>{{ $notification->created_at->diffForHumans() }}</span>
                            @if($notification->data['type'] === 'job_application')
                                <a href="{{ route('postulantes.index', $notification->data['job_id']) }}" class="pl-2 text-info-500 hover:underline">Ver Detalles</a>
                            @elseif($notification->data['type'] === 'message')
                                <p>Mensaje de: {{ $notification->data['sender_name'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="mt-6">
        {{ $notifications->links('vendor.pagination.tailwind') }}

    </div>

</div>

@endsection

