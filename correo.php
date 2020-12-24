
<?php
error_reporting (0);
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$body = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje:  " . $mensaje;

$destinatario = "marycielooberto236@gmail.com";
$asunto = "Contato Restaurante";


mail($destinatario, $asunto, $body);


 echo '<script>swal("Mensaje Enviado!", "Muchas Gracias por Contáctarnos"); </script> '
;
 




?>