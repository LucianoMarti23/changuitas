
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--No borrar nada de aca/tailwind css-->
    <link rel="stylesheet" href="/style.global.css">
    <!-- Asegúrate de incluir axios antes de tu script -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  

</head>

<x-page>
<br>

<body class="h-screen flex items-center justify-center">
    <!-- Contenido aquí -->


<h1 style="font-family: 'Inter', sans-serif; text-align: center; color: #4A90E2; font-size: 3em; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
    Bienvenido al perfil de: {{$profile->first_name}} {{$profile->last_name}}
</h1>

<br>




<div class="w-1/5   mx-auto px-4 py-6  flex items-center ">

   
                    <h2 class="text-2xl text-center font-bold text-dark-900 dark:text-dark-200 mb-4"> 
                    </h2>
                    <!-- Contenedor de las burbujas -->
                    <div class=" flex justify-center w-1/2">
                        <div class="relative w-64 h-64 mx-auto">
                            <div class="relative h-full w-full flex items-center justify-center">
                                <div
                                    class="profileCard_container relative p-10 border-2 border-dashed rounded-full border-spacing-4 border-dark-400/50">
                                    <!--FOTOGRAFIA-->
                                    <button class="profile_item w-[200px] h-[200px] p-1 border-2 rounded-full hover:border-dark-400/50 cursor-pointer transition-all duration-500 z-0">
    <div class="w-full h-full flex items-center justify-center p-2 rounded-full active:scale-95 hover:scale-95">
        <span class="w-full h-full inline-block rounded-full overflow-hidden">
            <img src="{{ asset('storage/' . ($profile->profile_picture ? $profile->profile_picture : 'ruta/a/imagen/default.jpg')) }}" class="w-full h-full object-cover" alt="Perfil">
        </span>
    </div>
</button>

<button
    class="profile_item left-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
    id="openEducationModal">
    <span class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
            <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
            <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
        </svg>
    </span>
</button>

                                    <button
                                        class="profile_item right-[45px] -top-[4px] absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
                                        id="button1">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
  <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
</svg>

                                        </span>
                                </button>
                              <!-- Botón que abre el modal -->
<!-- Botón que abre el modal -->
<!-- Botón que abre el modal -->
<button
    class="profile_item -left-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
    id="button2">
    <span class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z" clip-rule="evenodd" />
        </svg>
    </span>
</button>

<!-- El Modal -->
<div id="myModal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="modal-content bg-white p-6 rounded-lg w-[90%] max-w-md relative">
        <!-- Botón para cerrar el modal -->
        <span id="closeModal" class="absolute top-2 right-2 text-2xl cursor-pointer text-gray-700">×</span>
        <h2 class="text-lg font-semibold">Este es el título del Modal</h2>
        <p>Contenido del modal va aquí. Puedes agregar más detalles o elementos.</p>
    </div>
</div>



<!-- El Modal -->


                                    <button
    class="profile_item -right-4 top-20 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500"
    id="button3">
    <span
        class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
            <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
        </svg>
    </span>
</button>


                              <!-- Si el perfil tiene un currículum -->
@if($profile && $profile->cv_path)
    <a href="{{ asset('storage/' . $profile->cv_path) }}" target="_blank">
        <button class="profile_item bottom-8 -left-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500" id="button4">
            <span class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3a.75.75 0 0 1 .75-.75Zm-9 13.5a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </a>
@else
    <!-- Si no tiene currículum -->
    <button class="profile_item bottom-8 -left-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500" id="button4" disabled>
        <span class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3a.75.75 0 0 1 .75-.75Zm-9 13.5a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
            </svg>
        </span>
    </button>
    <p></p>
@endif

                                    <button
                                        class="profile_item bottom-8 -right-0 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500 "
                                        id="butto5">
                                        <span
                                            class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
</svg>

                                        </span>
                                    <p></p></button>
                                   <!-- Botón para abrir el modal -->
<button class="profile_item right-[40%] -bottom-4 absolute rounded-full bg-cover cursor-pointer border border-dark-400/50 p-[2px] active:scale-95 hover:scale-95 transition-all duration-500" id="button6">
    <span class="block w-[40px] h-[40px] transition-all duration-500 rounded-full z-[2] bg-light-200 p-1">
        <!-- Icono del botón -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
            <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
        </svg>
    </span>
</button>

<!-- Modal -->


                                </div>
                            </div>
                        </div>
                        </div>
</div>


<!-- Modal (inicialmente oculto con la clase 'hidden') -->
<!-- Modal (inicialmente oculto con la clase 'hidden') -->
<!-- Modal de Contacto -->
<!-- Modal de contacto -->
<div id="contactModal" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <!-- Cerrar Modal -->
        <button id="closeContactModal" class="absolute top-2 right-2 text-xl font-bold text-gray-600">
            &times;
        </button>

        <!-- Formulario de contacto -->
        <h2 class="text-xl font-semibold mb-4">Contácta a {{$profile->first_name}} {{$profile->last_name}}</h2>
        <form id="contactForm">
            <input type="hidden" id="recipient_id" name="recipient_id" value="{{$profile->user_id}}"> <!-- Ajusta recipient_id según el destino -->
            
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="flex justify-between">
                <!-- Botón de enviar -->
                <div class="text-right">
                    <button type="submit" class="btn-success bg-blue-500 text-white py-2 px-4 rounded-md">Enviar Mensaje</button>
                </div>
                
                <!-- Botón de cancelar -->
                <div class="text-left">
                    <button type="button" id="cancelContactModal" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-md">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>




<div id="modal" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <p>Sobre mi</p>
        <br></br>
        <div id="modalContent" class="text-center">
            {{$profile->profile_summary}}
        </div>
        <button id="closeModal" class="mt-4 w-full btn-danger text-white py-2 rounded-lg">Cerrar</button>
    </div>
</div>

<!-- El Modal -->
<div id="myModal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="modal-content bg-white p-6 rounded-lg w-[90%] max-w-md relative">
        <!-- Botón para cerrar el modal -->
        <span id="closeModal" class="absolute top-2 right-2 text-2xl cursor-pointer text-gray-700">×</span>
        <h2 class="text-lg font-semibold">Este es el título del Modal</h2>
        <p>Contenido del modal va aquí. Puedes agregar más detalles o elementos.</p>
    </div>
</div>





<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Obtener elementos del modal y el formulario
    const openModalButton = document.getElementById('button1'); // El botón que abre el modal
    const contactModal = document.getElementById('contactModal'); // El modal
    const closeModalButton = document.getElementById('closeContactModal'); // El botón de cerrar modal (&times;)
    const cancelModalButton = document.getElementById('cancelContactModal'); // El botón de cancelar modal
    const contactForm = document.getElementById('contactForm'); // El formulario de contacto
    const recipientIdInput = document.getElementById('recipient_id'); // El campo hidden con recipient_id
    
    // Abrir el modal
    openModalButton.addEventListener('click', function() {
        contactModal.classList.remove('hidden');  // Mostrar el modal
    });

    // Cerrar el modal al hacer clic en el botón de "X"
    closeModalButton.addEventListener('click', function() {
        contactModal.classList.add('hidden');  // Ocultar el modal
    });

    // Cerrar el modal al hacer clic en el botón de "Cancelar"
    cancelModalButton.addEventListener('click', function() {
        contactModal.classList.add('hidden');  // Ocultar el modal
    });

    // Asignar recipient_id cuando se selecciona un usuario
    document.querySelectorAll('#user-list li').forEach(user => {
        user.addEventListener('click', function() {
            const recipientId = this.getAttribute('data-id');
            recipientIdInput.value = recipientId; // Asignar el ID del usuario seleccionado al campo hidden
            contactModal.classList.remove('hidden');  // Mostrar el modal
        });
    });

    // Enviar el formulario mediante AJAX
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto de enviar el formulario

        // Datos del formulario
        const recipientId = recipientIdInput.value;
        const message = document.getElementById('message').value;

        // Realizar la solicitud AJAX
        axios.post('/send-message', {
            recipient_id: recipientId,
            message: message
        })
        .then(response => {
            alert('Mensaje enviado exitosamente');
            contactModal.classList.add('hidden');  // Cerrar el modal después de enviar
            document.getElementById('message').value = '';  // Limpiar el campo de mensaje
        })
        .catch(error => {
            console.error('Error al enviar el mensaje:', error);
            alert('Hubo un error al enviar el mensaje');
        });
    });
});

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtener el modal y el botón de apertura
        const openButton = document.getElementById('button2');
        const modal = document.getElementById('myModal');
        const closeButton = document.getElementById('closeModal');

        // Función para abrir el modal
        function openModal() {
            modal.classList.remove('hidden');  // Muestra el modal
            modal.classList.add('flex');  // Cambia el modal a flex para hacerlo visible
        }

        // Función para cerrar el modal
        function closeModal() {
            modal.classList.remove('flex');  // Oculta el modal
            modal.classList.add('hidden');  // Cambia el modal a hidden para hacerlo invisible
        }

        // Abrir el modal cuando se hace clic en el botón
        if (openButton) {
            openButton.addEventListener('click', openModal);
        }

        // Cerrar el modal cuando se hace clic en la "X"
        if (closeButton) {
            closeButton.addEventListener('click', closeModal);
        }

        // Cerrar el modal si se hace clic fuera del contenido del modal (en el fondo)
        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();  // Cierra el modal si se hace clic en el fondo
            }
        });
    });
</script>




<!-- Modal de Experiencia Laboral -->
<!-- Modal de Experiencias Laborales -->
<!-- Modal de Educación -->
<div id="educationModal" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <h3 class="text-xl font-semibold text-center mb-4">Educación</h3>
        <div id="educationContent" class="mb-4">
            <p>{{$profile->education}}</p>
        </div>
        <button id="closeEducationModal" class="mt-4 bg-primary-600 text-white p-2 rounded-full w-full">Cerrar</button>
    </div>
</div>

<!-- Modal de Experiencia Laboral -->
<div id="experienceModal" class="fixed inset-0 z-50 hidden bg-dark-800 bg-opacity-75 flex items-center justify-center">
    <div class="bg-light-200 dark:bg-dark-800 w-full max-w-md mx-4 p-6 rounded-lg shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <h3 class="text-xl font-semibold text-center mb-4">Experiencia Laboral</h3>
        <div id="experienceContent" class="mb-4">

        @foreach($workExperiences as $workExperience)
        <div class="bg-white shadow-lg rounded-lg p-6 cursor-pointer work-experience transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl hover:ring hover:ring-blue-300"
             data-id="{{ $workExperience->id }}" 
             data-job-title="{{ $workExperience->job_title }}" 
             data-company="{{ $workExperience->company }}" 
             data-start-date="{{ $workExperience->start_date }}" 
             data-end-date="{{ $workExperience->end_date }}">
             
            <h3 class="text-xl font-bold text-gray-800">Cargo: {{ $workExperience->job_title }}</h3>
            <p class="text-gray-600 text-md">Empresa: {{ $workExperience->company }}</p>
            <p class="text-gray-500 text-sm">Inicio: {{ \Carbon\Carbon::parse($workExperience->start_date)->format('d/m/Y') }}</p>
            <p class="text-gray-500 text-sm">
                Finalización: {{ $workExperience->end_date ? \Carbon\Carbon::parse($workExperience->end_date)->format('d/m/Y') : 'Actualidad' }}
            </p>
        </div>
        @endforeach
        <button id="closeExperienceModal" class="mt-4 bg-primary-600 text-white p-2 rounded-full w-full">Cerrar</button>
    </div>
</div>



<script>
    // Modal de Educación
    const openEducationModalButton = document.getElementById('openEducationModal'); // Botón de abrir educación
    const educationModal = document.getElementById('educationModal'); // Modal de educación
    const closeEducationModalButton = document.getElementById('closeEducationModal'); // Botón de cerrar educación

    // Abrir el modal de educación
    openEducationModalButton.addEventListener('click', function() {
        educationModal.classList.remove('hidden'); // Muestra el modal
        // Aquí puedes cargar la información de la educación del usuario si es necesario
    });

    // Cerrar el modal de educación
    closeEducationModalButton.addEventListener('click', function() {
        educationModal.classList.add('hidden'); // Oculta el modal
    });
</script>

<script>
    // Modal de Experiencia Laboral
    const openExperienceModalButton = document.getElementById('button3'); // Botón de abrir experiencia
    const experienceModal = document.getElementById('experienceModal'); // Modal de experiencia
    const closeExperienceModalButton = document.getElementById('closeExperienceModal'); // Botón de cerrar experiencia
    const experienceContent = document.getElementById('experienceContent'); // Contenido dinámico de experiencia

    // Abrir el modal de experiencia
    openExperienceModalButton.addEventListener('click', function() {
        
        
       
        
        // Mostrar el modal de experiencia
        experienceModal.classList.remove('hidden');
    });

    // Cerrar el modal de experiencia
    closeExperienceModalButton.addEventListener('click', function() {
        experienceModal.classList.add('hidden'); // Oculta el modal de experiencia
    });
</script>



<script>
    // Obtener elementos
    const button6 = document.getElementById('button6');
    const modal = document.getElementById('modal');
    const closeModal = document.getElementById('closeModal');
    const modalContent = document.getElementById('modalContent');
    
    // Función para abrir el modal
    button6.addEventListener('click', function() {
        // Abrir el modal
        modal.classList.remove('hidden');

        // Cargar información dinámica
        
    });

    // Función para cerrar el modal
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    // Cerrar el modal si el fondo es clickeado
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>









</body>
</x-page>          












