$(document).ready(function() {
    let previewPasswordUrl = $('meta[name="preview-password-url"]').attr('content');
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#password, #password_confirmation').on('input', function() {
        let password = $('#password').val();
        let passwordConfirmation = $('#password_confirmation').val();

        if (password && passwordConfirmation) {
            $.ajax({
                url: previewPasswordUrl,
                type: 'POST',
                data: {
                    _token: csrfToken,
                    password: password,
                    password_confirmation: passwordConfirmation
                },
                success: function(response) {
                    if (response.available) {
                        $('#password, #password_confirmation').css('border', '2px solid green');
                        $('#password_error').html('<span style="color:green;">' + response.message + '</span>');
                    } else {
                        $('#password, #password_confirmation').css('border', '2px solid red');
                
                        if (Array.isArray(response.errors)) {
                            let errorList = '<ul style="color:red; padding-left: 1rem;">';
                            response.errors.forEach(function(error) {
                                errorList += '<li>' + error + '</li>';
                            });
                            errorList += '</ul>';
                            $('#password_error').html(errorList);
                        } else {
                            $('#password_error').html('<span style="color:red;">' + response.message + '</span>');
                        }
                    }
                },                
                error: function(xhr, status, error) {
                    console.error('Error al validar contraseña:', error);
                }
            });
        }
    });
});
