$(document).ready(function() {
    $('#orderFilter, #roleFilter, #userSearch').on('change keyup', function() {
        const order = $('#orderFilter').val();
        const role = $('#roleFilter').val();
        const search = $('#userSearch').val(); // Obtener el valor de búsqueda

        $.ajax({
            url: filterUsersUrl,
            type: 'GET',
            data: {
                order: order,
                role: role,
                search: search // Enviar el término de búsqueda
            },
            success: function(response) {
                $('#userTableBody').html(response);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});


