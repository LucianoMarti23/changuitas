import './bootstrap';


import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY, // Asegúrate de que estas variables estén en .env
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});

// Escuchar eventos
window.Echo.private('chat')
    .listen('MessageSent', (e) => {
        displayMessage(e.message); // Asegúrate de tener esta función definida
    });
