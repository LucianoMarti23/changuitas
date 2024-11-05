<x-page>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template profiles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    
</head>

   
   
    
   
<body class="text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900">

    <br>

    <!-- Contenedor principal con max-width y centrado -->
    <div class="w-full max-w-7xl mx-auto px-4 py-6 relative z-10">
        
        <!-- Título de la sección -->
        <h2 class="text-2xl text-center font-bold text-dark-900 dark:text-dark-200 mb-4">
            Usuarios Destacados
        </h2>
        
        <!-- Barra de búsqueda con botón -->
        <div class="flex justify-center mb-6">
            <div class="flex items-center border border-primary-600 rounded-full overflow-hidden">
                <!-- Input de búsqueda -->
                <input type="text" id="search" placeholder="Buscar usuario..." class="px-4 py-2 w-72 text-dark-900 dark:text-dark-100 bg-light-100 dark:bg-dark-900 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <!-- Botón de búsqueda -->
                <button class="px-4 py-2 bg-primary-600 text-white font-semibold rounded-r-full hover:bg-primary-700">
                    Buscar
                </button>
            </div>
        </div>

        <!-- Contenedor de las burbujas de usuarios -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
            
            <!-- Repetir este bloque por cada usuario destacado -->
            @foreach ($profiles as $profile )
            
            <div class="relative p-4 text-center group">
                <!-- Imagen del usuario -->
                <img src="{{ asset('storage/' . ($profile->profile_picture ? $profile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                    class="w-48 h-48 object-cover rounded-full shadow-2xl shadow-primary-500/50 mx-auto border-4 border-primary-600 animate-bounceBubble">
                <br>
                <br>
                <!-- Nombre y oficio del usuario encima de la imagen -->
                <div class="absolute bottom-0 left-0 right-0 p-2 text-light-800 dark:text-light-200 bg-black bg-opacity-60 rounded-t-full">
                    <h3 class="text-dm font-semibold truncate">{{$profile->first_name}} {{$profile->last_name}}</h3>
                    <p class="text-sm truncate">Oficio del Usuario {{$profile->user}}</p>
                    <a href="{{ route('profile.profiledetails' , ['id' => $profile->id]) }}" class="text-primary-600 hover:text-primary-800">
    Ver Perfil Completo
</a>

                </div>
            </div>
            
            @endforeach
          
        </div>
    </div>

</body>

</html>
</x-page>