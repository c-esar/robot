<?php
   
	if(	isset($_POST['nombre']) && !empty($_POST['nombre']) && 	isset($_POST['correo']) && !empty($_POST['correo']) &&	isset($_POST['telefono']) && !empty($_POST['telefono']) && isset($_POST['mensaje']) &&  
	!empty($_POST['mensaje']))
	{
	 ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $asunto=$_POST['asunto'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $from = "chaconc107@gmail.com";
    $to = "coberturasea@gmail.com";
    $contenido="Nombre: " . $nombre . "\n Correo: " . $correo . "\n Telefono:" . $telefono  . "\n Asunto: " . $asunto;
    $mensaje=$_POST['mensaje'];
    $headers = "From:" . $from;
    mail($to,$contenido,$mensaje, $headers);
	header("Location: welcome.blade.php");
	}else {

echo "Error al enviar mensaje"; 
}
?>

