<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "ingengroupcat@gmail.com";
$email_subject = "Contacto desde el sitio web Cabanas la Tregua Catamarca";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
$message = "¡El formulario se ha enviado con éxito!";echo "<script type='text/javascript'>alert('$message');</script>";echo '<script type="text/javascript">window.location.assign("http://www.xn--cabaasfincalatregua-y3b.com.ar/contacto.html");</script>';//echo"<script language='javascript'>window.location='http://www.xn--cabaasfincalatregua-y3b.com.ar'</script>;"//header('Location: http://www.xn--cabaasfincalatregua-y3b.com.ar/contacto.html');
//echo "¡El formulario se ha enviado con éxito!";
}
?>