<?php
//captutar la información
$nombre = $_POST ["nombre"];

$mail = $_POST ["mail"];

$mensaje = $_POST ["textarea"];


//a quien le llegara
$para = "cristian28_lp@hotmail.com";
$asunto = "este mail fue enviado desde mi web";

//funcionalidad

mail($para,$asunto, utf8_decode($mensaje));

//redirigir al usuario una vez completado el form
header("Location:exito.html");

?>