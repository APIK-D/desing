<?php 
//llamando a los campos 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo

$destinatario = "larita_ivi@hotmail.com";
$asunto "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje ";

//Enviando mensaje 
mail($destinatario, $asunto , $carta);
header('Location:index.html');
echo"<script>alert('Correo enviado correctamente')</script>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>