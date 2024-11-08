@extends('components.profile.page-profile')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Postulantes para tu Publicación</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($postulants as $application)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="flex items-center p-4">
                    <img src="{{ asset('storage/' . ($application->userProfile->profile_picture ?? 'ruta/a/imagen/default.jpg')) }}" 
                         alt="{{ $application->userProfile->first_name }} {{ $application->userProfile->last_name }}" 
                         class="w-16 h-16 rounded-full mr-4 object-cover">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $application->userProfile->first_name }} {{ $application->userProfile->last_name }}</h2>
                        <a href="{{ route('profile.profiledetails' , ['id' =>$application->userProfile->id]) }}" class="text-primary-600 hover:text-primary-800">
    Ver Perfil Completo
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

