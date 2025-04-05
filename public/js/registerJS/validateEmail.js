$(document).ready(function () {
    let previewEmailUrl = $('meta[name="preview-email-url"]').attr('content');
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#email').on('blur', function () {
        let email = $(this).val();

        $.ajax({
            url: previewEmailUrl,
            type: 'POST',
            data: {
                email: email,
                _token: csrfToken
            },
            success: function (response) {
                if (response.available) {
                    $('#email').css('border', '2px solid green');
                    $('#emailMessage').text(response.message).css('color', 'green');
                } else {
                    $('#email').css('border', '2px solid red');
                    $('#emailMessage').text(response.message).css('color', 'red');
                }
            },
            error: function () {
                $('#emailMessage').text('Hubo un error al verificar el email.').css('color', 'darkred');
            }
        });
    });
});