<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Red de Trabajos' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    <script src="/evento.js"></script>
    <script src="/modoinicio.js"></script>
</head>
<body class=" text-dark-900 bg-light-100 dark:text-dark-100 dark:bg-dark-900 ">
<div class="flex h-screen bg-gray-100">
  <!-- Barra lateral del chat -->
  <aside class="w-1/4 bg-white shadow-md flex flex-col fixed h-full">
    <!-- Encabezado -->
    <div class="flex items-center justify-between p-4 border-b border-gray-200">
      <h1 class="text-xl font-semibold">Chat</h1>
      <div class="flex items-center space-x-2">
        <button class="p-1 text-gray-600 hover:text-gray-800">
          <i class="fas fa-minus"></i> <!-- Icono de minimizar -->
        </button>
        <button class="p-1 text-gray-600 hover:text-gray-800">
          <i class="fas fa-cog"></i> <!-- Icono de configuración -->
        </button>
      </div>
    </div>

    <!-- Foto y nombre del usuario -->
    <div class="flex flex-col items-center py-4 border-b border-gray-200">
      <img 
        src="https://via.placeholder.com/100" 
        alt="Foto de usuario" 
        class="w-20 h-20 rounded-full mb-2"
      />
      <p class="text-lg font-medium">Nombre del Usuario</p>
    </div>

    <!-- Buscador -->
    <div class="p-4 border-b border-gray-200">
      <input 
        type="text" 
        placeholder="Buscar chats..." 
        class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-200"
      />
    </div>

    <!-- Lista de chats -->
    <div class="flex-1 overflow-y-auto">
      <ul>
        <li class="flex items-center p-4 hover:bg-gray-100 cursor-pointer">
          <img 
            src="https://via.placeholder.com/50" 
            alt="Avatar del contacto" 
            class="w-12 h-12 rounded-full mr-4"
          />
          <div>
            <p class="text-sm font-medium">Contacto 1</p>
            <p class="text-xs text-gray-500">Último mensaje...</p>
          </div>
        </li>
        <li class="flex items-center p-4 hover:bg-gray-100 cursor-pointer">
          <img 
            src="https://via.placeholder.com/50" 
            alt="Avatar del contacto" 
            class="w-12 h-12 rounded-full mr-4"
          />
          <div>
            <p class="text-sm font-medium">Contacto 2</p>
            <p class="text-xs text-gray-500">Último mensaje...</p>
          </div>
        </li>
        <!-- Más elementos de la lista -->
      </ul>
    </div>
  </aside>

  <!-- Contenido principal -->
  <!-- Contenedor del chat abierto -->
  <main class="ml-1/4 w-3/4 bg-gray-50 flex flex-col">
    <!-- Encabezado del chat -->
    <div class="flex items-center justify-between p-4 bg-white border-b border-gray-200">
      <div class="flex items-center space-x-4">
        <img 
          src="https://via.placeholder.com/50" 
          alt="Avatar del contacto" 
          class="w-12 h-12 rounded-full"
        />
        <p class="text-lg font-medium">Contacto 1</p>
      </div>
      <button class="p-2 text-gray-600 hover:text-gray-800">
        <i class="fas fa-ellipsis-h"></i> <!-- Icono de opciones -->
      </button>
    </div>

    <!-- Mensajes -->
    <div class="flex-1 overflow-y-auto p-4 space-y-4">
      <!-- Mensaje enviado -->
      <div class="flex justify-end">
        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs shadow-md">
          Hola, ¿cómo estás?
        </div>
      </div>

      <!-- Mensaje recibido -->
      <div class="flex justify-start">
        <div class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-xs shadow-md">
          ¡Hola! Todo bien, ¿y tú?
        </div>
      </div>

      <!-- Mensaje enviado -->
      <div class="flex justify-end">
        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs shadow-md">
          Perfecto, quería hablar contigo sobre el trabajo.
        </div>
      </div>

      <!-- Mensaje recibido -->
      <div class="flex justify-start">
        <div class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-xs shadow-md">
          Claro, dime.
        </div>
      </div>
    </div>

    <!-- Campo para enviar mensajes -->
    <div class="p-4 bg-white border-t border-gray-200 flex items-center space-x-4">
      <input 
        type="text" 
        placeholder="Escribe un mensaje..." 
        class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-200"
      />
      <button class="p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
        <i class="fas fa-paper-plane"></i> <!-- Icono de enviar -->
      </button>
    </div>
  </main>
</div>



    <script src="/modo.js"></script>
</body>

</html>