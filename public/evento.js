//Controla el Modal [id unicos para cada modal]
//modal-bienvenida   *Arch createprofile
//modal-datospersonales *Arch personalData
//modal-publica   *Arch job
// Función para abrir el modal adecuado
document.querySelectorAll('.open-modal-button').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = this.id.replace('open-modal-', 'modal-');
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
        }
    });
});

// Función para cerrar el modal adecuado
document.querySelectorAll('.close-modal-button').forEach(button => {
    button.addEventListener('click', function() {
        const modalId = this.dataset.modalId;
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden');
        }
    });
});

// Función para mostrar un modal
function showModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

// Función para ocultar un modal
function hideModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('profile-form');
    const modal = document.getElementById('modal-bienvenida');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío del formulario por defecto

        // Aquí puedes agregar la lógica para enviar el formulario por AJAX si lo deseas

        // Muestra el modal
        modal.classList.remove('hidden');
        
        // Opcional: Oculta el modal cuando el usuario haga clic en el botón de cerrar
        const closeButton = document.getElementById('close-modal');
        closeButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    });
});