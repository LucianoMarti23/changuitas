<x-page>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Destacados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.global.css">

    <!-- Incluir jQuery desde CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gradient-to-b from-blue-100 to-purple-200 text-dark-900 dark:text-dark-100 dark:bg-dark-900">

    <div class="max-w-7xl mx-auto px-4 py-10 relative z-10">
        <h2 class="text-3xl text-center font-bold text-dark-900 dark:text-dark-200 mb-6">
            Usuarios Destacados
        </h2>

       <!-- Barra de búsqueda con diseño elegante y color verde -->
<div class="flex justify-center mb-8">
    <div class="relative w-96">
        <input type="text" id="search" placeholder="Buscar usuario..." 
            class="w-full px-6 py-3 pr-12 text-gray-800 dark:text-gray-200 bg-white dark:bg-gray-800 border-2 border-[#4CAF50] dark:border-[#4CAF50] rounded-full focus:outline-none focus:ring-2 focus:ring-[#4CAF50] focus:border-[#4CAF50] shadow-lg dark:shadow-lg transition duration-300 ease-in-out">
        
        <!-- Icono de búsqueda -->
        <div class="absolute top-0 right-0 mt-3 mr-4 text-[#4CAF50] dark:text-[#4CAF50]">
            <i class="fas fa-search"></i>
        </div>
    </div>
</div>


        <!-- Contenedor para los perfiles -->
        <div id="search-results" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($profiles as $profile)
                <div class="relative group transform transition duration-500 hover:scale-105 hover:shadow-xl rounded-lg">
                    <img src="{{ asset('storage/' . ($profile->profile_picture ? $profile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                         class="w-full h-56 object-cover rounded-lg shadow-md group-hover:shadow-lg transition-shadow">
                    
                    <!-- Metadatos debajo de la imagen -->
                    <div class="p-4 bg-white dark:bg-dark-800 rounded-b-lg">
                        <h3 class="text-lg font-semibold text-dark-900 dark:text-dark-200 truncate">{{ $profile->first_name }} {{ $profile->last_name }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 truncate">Oficio: {{ $profile->user }}</p>
                        <a href="{{ route('profile.profiledetails', ['id' => $profile->id]) }}" class="text-success-600 hover:text-success-800 text-sm font-medium">Ver Perfil Completo</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Detectamos el evento 'keyup' en el campo de búsqueda
            $('#search').keyup(function() {
                let searchQuery = $(this).val();  // Obtenemos el valor del input

                // Solo realizamos la búsqueda si hay texto ingresado
                if (searchQuery.length >= 3) {  // Realizamos la búsqueda solo si se han escrito al menos 3 caracteres
                    $.ajax({
                        url: "{{ route('search.users') }}",  // Ruta a la que se hace la solicitud
                        type: "GET",
                        data: { query: searchQuery },  // Enviar el término de búsqueda
                        success: function(data) {
                            let resultsContainer = $('#search-results');
                            resultsContainer.empty();  // Limpiar los resultados anteriores

                            // Si se encontraron perfiles
                            if (data.length > 0) {
                                $.each(data, function(index, profile) {
                                    let profileHtml = `
                                        <div class="relative group transform transition duration-500 hover:scale-105 hover:shadow-xl rounded-lg">
                                            <img src="/storage/${profile.profile_picture || 'ruta/a/imagen/default.jpg'}"
                                                 class="w-full h-56 object-cover rounded-lg shadow-md group-hover:shadow-lg transition-shadow">
                                            
                                            <!-- Metadatos debajo de la imagen -->
                                            <div class="p-4 bg-white dark:bg-dark-800 rounded-b-lg">
                                                <h3 class="text-lg font-semibold text-dark-900 dark:text-dark-200 truncate">${profile.first_name} ${profile.last_name}</h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-300 truncate">Oficio: ${profile.user}</p>
                                                <a href="/profile/details/${profile.id}" class="text-success-600 hover:text-success-800 text-sm font-medium">Ver Perfil Completo</a>
                                            </div>
                                        </div>
                                    `;
                                    resultsContainer.append(profileHtml);  // Agregar el perfil al contenedor
                                });
                            } else {
                                resultsContainer.html('<p class="text-center text-gray-600">No se encontraron usuarios.</p>');  // Mensaje si no hay resultados
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            alert('Hubo un error al realizar la búsqueda.');
                        }
                    });
                } else {
                    // Limpiar los resultados si no hay texto o menos de 3 caracteres
                    $('#search-results').empty();
                }
            });
        });
    </script>

</body>
</html>
</x-page>
