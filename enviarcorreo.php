<?
//Recepción de datos
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$asunto="Consulta desde www.kiaikidobuenosaires.com.ar";
$comentario=$_POST['comentario'];
// fin de recepcion de datos

// accion de envio
$para='norbertokiman@hotmail.com';
$mensaje='Consulta:
Nombre: '.$nombre.';
E-mail: '.$correo.';
Consulta: '.$comentario.';
';
$desde='From: kiaikidobuenosaires <norbertokiman@hotmail.com>';
mail($para,$asunto,$mensaje,$desde);
echo 'Su consulta se ha enviado correctamente. Le responderemos a la brevedad';
?>
