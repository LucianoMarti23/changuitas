<!-- resources/views/emails/password_reset.blade.php -->

<p>Hola,</p>

<p>Haz clic en el siguiente enlace para restablecer tu contraseña:</p>

<p><a href="{{ url('password/reset/'.$token) }}">Restablecer Contraseña</a></p>

<p>Gracias,</p>
<p>Tu equipo</p>
