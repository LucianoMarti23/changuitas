$(document).ready(function () {
    $('#categorySearch, #orderName').on('change keyup', function () {
        const query = $('#categorySearch').val();
        const order = $('#orderName').val();
    
        $.ajax({
            url: filterCategoryUrl,
            type: 'GET',
            data: {
                query: query,
                order: order
            },
            success: function (data) {
                $('#userTableBody').html(data.html);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
    
});



