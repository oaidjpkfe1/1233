<?php
$destino="lusigonzales06@gmail.com ";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];;
$mensaje=$_POST["mensaje"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
mail($destino,"Contacto desde web", $contenido);
header("Location:gracias.html");
?>