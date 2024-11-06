@extends('components.profile.page-profile')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto mt-10 p-5 bg-white shadow-md rounded">
        <h1 class="text-2xl font-bold mb-4">Tus Mensajes</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Lista de usuarios -->
            <div class="border border-gray-300 p-4 rounded-md h-96 overflow-y-auto">
                <h2 class="text-lg font-semibold mb-2">Usuarios</h2>
                <ul id="user-list">
                    @foreach ($users as $user)
                    <li data-id="{{ $user->id }}" class="cursor-pointer hover:bg-gray-200 p-2 rounded {{ $selectedUserId == $user->id ? 'bg-gray-200' : '' }}">
                            <img src="{{ asset('storage/' . ($user->profile->profile_picture ?? 'ruta/a/imagen/default.jpg')) }}" alt="{{ $user->name }}" class="w-8 h-8 rounded-full inline-block mr-2">
                            {{ $user->name }}
                            <p>Última interacción: {{ $user->last_interaction ? $user->last_interaction->format('d/m/Y H:i') : 'Nunca' }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Área de mensajes -->
            <div class="col-span-2 border border-gray-300 p-4 rounded-md flex flex-col h-96">
                <h2 class="text-lg  font-semibold mb-2">Conversación</h2>
                <div id="chat-messages" class="flex-1 overflow-y-auto">
                    @foreach ($messages as $message)
                          {{ $user->name }}
                                 alt="{{ $message->sender_id === Auth::id() ? 'Tú' : $message->sender->name }}" 
                                 class="w-8 h-8 rounded-full mr-2">
                            <strong>{{ $message->sender_id === Auth::id() ? 'Tú' : $message->sender->name }} :</strong> {{ $message->message }}
                        </div>
                        
                    @endforeach
                </div>

                <form id="chat-form" class="flex mt-4">
                    <input type="text" id="message" placeholder="Escribe tu mensaje..." required class="flex-1 border border-gray-300 p-2 rounded">
                    <button type="submit" class="ml-2 bg-blue-500 text-white p-2 rounded">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Asignar evento a los usuarios en la lista
        document.querySelectorAll('#user-list li').forEach(user => {
            user.addEventListener('click', function() {
                const recipientId = this.getAttribute('data-id');
                loadMessages(recipientId);
                setActiveUser(recipientId); // Marcar el usuario activo
            });
        });

        // Enviar mensaje
        document.getElementById('chat-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const recipientId = document.querySelector('#user-list li.active')?.getAttribute('data-id');
            const message = document.getElementById('message').value;

            axios.post('/send-message', { 
                recipient_id: recipientId,
                message: message 
            }).then(response => {
                displayMessage(response.data);
            });

            document.getElementById('message').value = ''; // Limpiar el campo
        });

        // Cargar mensajes del usuario seleccionado
        function loadMessages(recipientId) {
            axios.get(`/messages/${recipientId}`).then(response => {
                const chatMessages = document.getElementById('chat-messages');
                chatMessages.innerHTML = ''; // Limpiar mensajes anteriores
                response.data.forEach(message => {
                    displayMessage(message);
                });
            });
        }

        // Mostrar mensaje en la vista
        function displayMessage(message) {
    const chatMessages = document.getElementById('chat-messages');
    const messageElement = document.createElement('div');
    messageElement.className = "flex justify-between items-start py-1"; // Alinear elementos y justificar el espacio
    
    // Formato de la hora
    const time = new Date(message.created_at).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    // Crear el HTML como una variable
    const messageHTML = `
        <strong>${message.sender_id === {{ Auth::id() }} ? 'Tú' : message.sender.name}:</strong> 
        <span class="flex-1 ml-2">${message.message}</span> 
        <span class="text-gray-500 ml-4 text-sm">${time}</span>
    `;
    
    // Asignar el HTML a messageElement
    messageElement.innerHTML = messageHTML;
    
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight; // Desplazar hacia abajo al agregar nuevo mensaje
}


        // Marcar el usuario activo
        function setActiveUser(recipientId) {
            document.querySelectorAll('#user-list li').forEach(user => {
                user.classList.remove('active');
                if (user.getAttribute('data-id') === recipientId) {
                    user.classList.add('active');
                }
            });
        }
    </script>
</body>
</html>
@endsection
