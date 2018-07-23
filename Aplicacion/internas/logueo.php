<?php

include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);

$query="Select id_docente from docente where correo_docente="."'$correo'"." and docente_pass="."$password";
echo $query;
$respuestas=mysql_query($query) or die('Error de sql');
if ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
	session_start();
	$_SESSION["id_docente"] = $respuesta['id_docente'];
	echo "<script>location.href='gestion_docente.php'</script>";
}else{
	session_destroy();
	echo '<script> alert("Datos Incorrectos")</script>';
	echo "<script>location.href='docente.php'</script>";
}
?>

