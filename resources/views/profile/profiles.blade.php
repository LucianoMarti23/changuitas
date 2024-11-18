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
    <link rel="stylesheet" href="/style.global.css">

    <!-- Incluir jQuery desde CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900">
    <br>
    <div class="w-full max-w-7xl mx-auto px-4 py-6 relative z-10">
        <h2 class="text-2xl text-center font-bold text-dark-900 dark:text-dark-200 mb-4">
            Usuarios Destacados
        </h2>

        <!-- Barra de búsqueda sin botón (búsqueda en tiempo real) -->
        <div class="flex justify-center mb-6">
            <div class="flex items-center border border-primary-600 rounded-full overflow-hidden">
                <input type="text" id="search" placeholder="Buscar usuario..." class="px-4 py-2 w-72 text-dark-900 dark:text-dark-100 bg-light-100 dark:bg-dark-900 focus:outline-none focus:ring-2 focus:ring-primary-500">
            </div>
        </div>

        <!-- Contenedor para los perfiles -->
        <div id="search-results" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
            @foreach ($profiles as $profile)
                <div class="relative p-4 text-center group">
                    <img src="{{ asset('storage/' . ($profile->profile_picture ? $profile->profile_picture : 'ruta/a/imagen/default.jpg')) }}"
                         class="w-48 h-48 object-cover rounded-full shadow-2xl shadow-primary-500/50 mx-auto border-4 border-primary-600 animate-bounceBubble">
                    
                    <div class="p-2 text-light-800 dark:text-light-200 bg-black bg-opacity-60 rounded-t-full">
                        <h3 class="text-dm font-semibold truncate">{{$profile->first_name}} {{$profile->last_name}}</h3>
                        <p class="text-sm truncate">Oficio del Usuario {{$profile->user}}</p>
                        <a href="{{ route('profile.profiledetails', ['id' => $profile->id]) }}" class="text-primary-600 hover:text-primary-800">
                            Ver Perfil Completo
                        </a>
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
                                        <div class="relative p-4 text-center group">
                                            <img src="/storage/${profile.profile_picture || 'ruta/a/imagen/default.jpg'}"
                                                 class="w-48 h-48 object-cover rounded-full shadow-2xl shadow-primary-500/50 mx-auto border-4 border-primary-600 animate-bounceBubble">
                                            <br><br>
                                            <div class="absolute bottom-0 left-0 right-0 p-2 text-light-800 dark:text-light-200 bg-black bg-opacity-60 rounded-t-full">
                                                <h3 class="text-dm font-semibold truncate">${profile.first_name} ${profile.last_name}</h3>
                                                <p class="text-sm truncate">Oficio del Usuario ${profile.user}</p>
                                                <a href="/profile/details/${profile.id}" class="text-primary-600 hover:text-primary-800">Ver Perfil Completo</a>
                                            </div>
                                        </div>
                                    `;
                                    resultsContainer.append(profileHtml);  // Agregar el perfil al contenedor
                                });
                            } else {
                                resultsContainer.html('<p>No se encontraron usuarios.</p>');  // Mensaje si no hay resultados
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
