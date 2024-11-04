


// Función para cargar localidades basadas en la provincia seleccionada.

//Este código define dos funciones principales: localidad y provincia. 
//La función localidad carga las localidades de una provincia seleccionada y las muestra en un elemento <select>.
//La función provincia carga todas las provincias y las muestra en otro elemento <select>. 
//Al iniciar el documento, se cargan las provincias, y cuando se selecciona una provincia, 
//se cargan las localidades correspondientes.
// Funciones para cargar provincias y localidades
function localidad(provincia) {
    if (!provincia) return;

    fetch(`https://apis.datos.gob.ar/georef/api/localidades?provincia=${provincia}&campos=id,nombre&max=100`)
        .then(res => res.ok ? res.json() : Promise.reject(res))
        .then(json => {
            let $options = `<option value="">Elige una localidad</option>`;
            json.localidades.forEach(el => {
                $options += `<option value="${el.nombre}">${el.nombre}</option>`;
            });
            document.getElementById("selectLocalidades").innerHTML = $options;
        })
        .catch(error => {
            let message = error.statusText || "Ocurrió un error";
            document.getElementById("selectLocalidades").nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
        });
}

function provincia() {
    fetch(`https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre`)
        .then(res => res.ok ? res.json() : Promise.reject(res))
        .then(json => {
            let $options = `<option value="">Elige una provincia</option>`;
            json.provincias.forEach(el => {
                $options += `<option value="${el.nombre}">${el.nombre}</option>`;
            });
            
            document.getElementById("selectProvincias").innerHTML = $options;
        })
        .catch(error => {
            let message = error.statusText || "Ocurrió un error";
            document.getElementById("selectProvincias").nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
        });
}

// Inicializar las provincias al cargar el documento
document.addEventListener("DOMContentLoaded", () => {
    provincia();

    // Cargar localidades cuando se selecciona una provincia
    const selectProvincias = document.getElementById("selectProvincias");
    if (selectProvincias) {
        selectProvincias.addEventListener("change", e => {
            localidad(e.target.value);
        });
    }
});
