$(document).ready(function () {
    $('#publicationSearch, #orderByTitle, #orderByDate, #category_id').on('input change', function () {
        let query = $('#publicationSearch').val(); // Obtener el valor del campo de búsqueda
        let orderTitle = $('#orderByTitle').val(); // Obtener el valor del filtro de orden por título
        let orderDate = $('#orderByDate').val(); // Obtener el valor del filtro de orden por fecha
        let categoryId = $('#category_id').val(); // Obtener el valor del filtro de categoría

        $.ajax({
            url: filterPubUrl,
            type: 'GET',
            data: {
                query: query, // Enviar el término de búsqueda al backend
                orderTitle: orderTitle, // Enviar el orden por título seleccionado
                orderDate: orderDate, // Enviar el orden por fecha seleccionado
                category_id: categoryId // Enviar el id de la categoría seleccionada
            },
            success: function (data) {
                // Limpiar el contenido anterior
                $('#userTableBody').empty();

                // Llenar la tabla con la respuesta HTML de la vista parcial
                $('#userTableBody').html(data.html);
            },
            error: function (xhr) {
                console.error(xhr.responseText); // Manejo de errores
            }
        });
    });
});




