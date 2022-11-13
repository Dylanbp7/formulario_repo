<?php
if($_SERVER["REQUEST_METHOD"] !="POST"){
    header("Location: contacto.html");
}

$nombre = $_POST["nombre"];
$apellido = $_POST ["apellido"];
$email = $_POST ["email"];
$telefono = $_POST ["telefono"];
$asunto = $_POST ["asunto"];
$mensaje = $_POST ["mensaje"];

$rta = mail("soydylanbatista@gmail.com", "Mensaje web: $asunto", $mensaje);
var_dump($rta)


?>