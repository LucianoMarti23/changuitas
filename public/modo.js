// Función para manejar el modo claro y oscuro
document.addEventListener('DOMContentLoaded', (event) => {
    const themeToggle = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        if (darkIcon) darkIcon.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        if (lightIcon) lightIcon.classList.remove('hidden');
    }

    // Verifica si el botón de cambio de tema existe antes de agregar el event listener
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            const html = document.documentElement;

            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                if (darkIcon) darkIcon.classList.add('hidden');
                if (lightIcon) lightIcon.classList.remove('hidden');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                if (darkIcon) darkIcon.classList.remove('hidden');
                if (lightIcon) lightIcon.classList.add('hidden');
            }
        });
    } else {
        console.error('No se encontró el botón de cambio de tema.');
    }
});

// Manejo del menú de perfil
document.addEventListener("DOMContentLoaded", function() {
    const profileMenuButton = document.getElementById('profile-menu');
    const dropdownMenu = document.getElementById('dropdown-menu');
    
    if (profileMenuButton && dropdownMenu) {
        profileMenuButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const isClickInside = profileMenuButton.contains(event.target) || dropdownMenu.contains(event.target);
            if (!isClickInside) {
                dropdownMenu.classList.add('hidden');
            }
        });
    } else {
        console.error('No se encontró el botón del perfil o el menú desplegable.');
    }
});

// Animar contador
function animateCounter(element, end, duration) {
    if (!element) return; // Asegúrate de que el elemento exista

    let start = 300;
    const stepTime = duration / end; 
    let current = start;

    const timer = setInterval(() => {
        current += 1;
        element.textContent = current;

        if (current >= end) {
            clearInterval(timer);
            element.textContent = end; 
        }
    }, stepTime);
}

document.addEventListener('DOMContentLoaded', () => {
    const futureJobsElement = document.getElementById('future-jobs');
    animateCounter(futureJobsElement, 1000, 1000000); 
});

// Cerrar overlay
function cerraroverlayform(){         
    const overlay = document.getElementById('form-overlay');
    if (overlay) {
        while (overlay.firstChild) {
            overlay.removeChild(overlay.firstChild);
        }
    }
}

// Controlar menú de opciones
document.addEventListener("DOMContentLoaded", function() {
    const optionsButton = document.getElementById('optionsButton');
    const optionsMenu = document.getElementById('optionsMenu');

    if (optionsButton && optionsMenu) {
        optionsButton.addEventListener('click', function() {
            optionsMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const isClickInside = optionsButton.contains(event.target) || optionsMenu.contains(event.target);
            if (!isClickInside) {
                optionsMenu.classList.add('hidden');
            }
        });
    } else {
        console.error('No se encontró el botón de opciones o el menú desplegable.');
    }
});

// Funciones para minimizar y expandir perfil
document.addEventListener('DOMContentLoaded', function() {
    const minimizeButton = document.getElementById('minimize-button');
    const expandButton = document.getElementById('expand-button');
    const profileExpanded = document.getElementById('profile-expanded');
    const profileCollapsed = document.getElementById('profile-collapsed');

    if (minimizeButton && expandButton && profileExpanded && profileCollapsed) {
        minimizeButton.addEventListener('click', function() {
            profileExpanded.classList.add('hidden');
            profileCollapsed.classList.remove('hidden');
        });

        expandButton.addEventListener('click', function() {
            profileCollapsed.classList.add('hidden');
            profileExpanded.classList.remove('hidden');
        });
    } else {
        console.error('No se encontraron los botones o los elementos de perfil.');
    }
});
