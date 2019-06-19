<?php


$nombre = $_POST['nombre'];
$nombre = trim($nombre);
$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

$telefono = $_POST['telefono'];
$telefono = trim($telefono);
$telefono = filter_var( $telefono, FILTER_SANITIZE_STRING);

$email = $_POST['email'];
$email = trim($email);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);


$consulta = $_POST['consulta'];
$consulta = trim($consulta);
$consulta = filter_var( $consulta, FILTER_SANITIZE_STRING);

function formulario_json($nombre, $telefono, $email, $consulta){
    $json = array (
            "nombre" => $nombre,
            "telefono" => $telefono,
            "email" => $email,
            "consulta" => $consulta
        );

    return json_encode($json);    
}

 echo formulario_json($nombre, $telefono, $email, $consulta);

 


 // ENVIAR CONSULTA AL MAIL

$header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';
$mensajeCorreo = "This message was sent by: " . $nombre . "\r\n";
$mensajeCorreo.= "Teléfono: " . $telefono . "\r\n";
$mensajeCorreo .= "Email: " . $email . "\r\n";
$mensajeCorreo .= "Mensaje:: " . $consulta . "\r\n";
$para = "onnigpano@gmail.com";
$asunto = "Contacto de sitio web";
mail($para, $asunto, utf8_encode($mensajeCorreo), $header );
?>


