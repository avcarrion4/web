<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
$id_docente;
$query="Select id_docente from docente where correo_docente="."'$correo'"." and cedula_docente="."$password";
$respuestas=mysql_query($query) or die('Error de sql');
if ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
	$id_docente=$respuesta['id_docente'];
	echo "<script>location.href='gestion_docente.php'</script>";
}else{

	echo '<script> alert("Datos Incorrectos")</script>';
	echo "<script>location.href='docente.php'</script>";
}
?>