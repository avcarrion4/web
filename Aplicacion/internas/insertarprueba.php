<?php 

	include("../dll/config.php");
	include("../dll/mysql.php");
	session_start();
	$id_docente= $_SESSION["id_docente"];
	extract($_POST);
	$estado_prueba;
	$id_prueba;
	$id_pregunta;


	if ($estado = '1') {
		$estado_prueba='1';
		
	} elseif ($estado = '2') {
		$estado_prueba = '0';
	}

	$query = "insert into prueba values('','$codigo_prueba','$nombre_prueba','$estado_prueba','$id_docente')";
	$result=mysql_query($query) or die ('error de sql pregunta');

  	echo '<script>alert("Datos guardados")</script>';
  	echo "<script>location.href='gestion_docente.php'</script>";
 ?>