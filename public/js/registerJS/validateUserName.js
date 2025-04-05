$(document).ready(function() {
    let previewUrl = $('meta[name="preview-name-url"]').attr('content');
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#name').on('blur', function() {
        let name = $(this).val();

        $.ajax({
            url: previewUrl,
            type: 'POST',
            data: {
                name: name,
                _token: csrfToken
            },
            success: function(response) {
                if (response.available) {
                    $('#name').css('border', '2px solid green');
                    $('#nameMessage').text(response.message).css('color', 'green');
                } else {
                    $('#name').css('border', '2px solid red');
                    $('#nameMessage').text(response.message).css('color', 'red');
                }
            },
            error: function() {
                $('#nameMessage').text('Hubo un error al verificar el nombre.').css('color', 'darkred');
            }
        });
    });
});




