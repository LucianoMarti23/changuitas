

// Función para cargar provincias
function provincia(tipo) {
    fetch(`https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre`)
        .then(res => res.ok ? res.json() : Promise.reject(res))
        .then(json => {
            let $options = `<option value="">Elige una provincia</option>`;
            json.provincias.forEach(el => {
                $options += `<option value="${el.nombre}">${el.nombre}</option>`;
            });

            // Actualizar el select dependiendo del tipo
            if (tipo === 'crear') {
                document.getElementById("selectProvincias").innerHTML = $options;
            } else if (tipo === 'filtro') {
                document.getElementById("selectProvinciasFiltro").innerHTML = $options;
            }
        })
        .catch(error => {
            let message = error.statusText || "Ocurrió un error";
            if (tipo === 'crear') {
                document.getElementById("selectProvincias").nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
            } else if (tipo === 'filtro') {
                document.getElementById("selectProvinciasFiltro").nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
            }
        });
}

// Función para cargar localidades basadas en la provincia seleccionada
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

// Inicializar las provincias para la creación de publicación y filtro
document.addEventListener("DOMContentLoaded", () => {
    // Llamar a la función para cargar provincias al crear una publicación
    provincia('crear');

    // Llamar a la función para cargar provincias al filtrar
    provincia('filtro');

    // Cargar localidades cuando se selecciona una provincia (filtrar)
    const selectProvinciasFiltro = document.getElementById("selectProvinciasFiltro");
    if (selectProvinciasFiltro) {
        selectProvinciasFiltro.addEventListener("change", e => {
            localidad(e.target.value);
        });
    }

    // Cargar localidades cuando se selecciona una provincia (crear publicación)
    const selectProvinciasCrear = document.getElementById("selectProvincias");
    if (selectProvinciasCrear) {
        selectProvinciasCrear.addEventListener("change", e => {
            localidad(e.target.value);
        });
    }
});
