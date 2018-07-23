<?php
include("../dll/config.php");
include("../dll/mysql.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$ver= $_SESSION["id_docente"];
$nombres;
$materiad;
$que="Select nombre_docente, apellido_docente, apellido2_docente FROM docente WHERE id_docente ="."$ver";
$datos=mysql_query($que) or die('Error de sql');
if ($res=mysql_fetch_array($datos, MYSQL_ASSOC)) {
	$nombres = $res['nombre_docente'].' '. $res['apellido_docente'].' '. $res['apellido2_docente'];
}

$listar= "Select nombre_materia FROM materia m WHERE m.id_materia=(SELECT id_materia FROM docente_materia WHERE id_docente ="." $ver)";
	
$materias=mysql_query($listar) or die('Error de sql');
if ($materia=mysql_fetch_array($materias, MYSQL_ASSOC)) {
	$materiad = $materia['nombre_materia'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="encoding">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Gestion Docente</title>
	<link rel="stylesheet" href="../css/estilosjs.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../js/main.js"></script>
	<h1><?php echo $nombres ?></h1>
</head>
<body>
	<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-file-text"></span><span class="tab-text">Crear Prueba</span></a></li>
			<li><a href="#tab2"><span class="fa fa-upload"></span><span class="tab-text">Listar Pruebas</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Generar Reporte</span></a></li>
			<li><a href="#tab4"><span class="fa fa-list-alt"></span><span class="tab-text">Vizualizar Resultados</span></a></li>
		</ul>

		<div class="secciones">
			<article id="tab1">

			<form method="post" action="insertarprueba.php">
				<div class="form-group">
		    		<label for="nombres">Ingrese el nombre de la prueba</label>
		    		<input type="text" class="form-control" id="nombre_prueba" name="nombre_prueba" placeholder="Ingrese el nombre">
				</div>
				<div class="form-group">
		    		<label for="estado">Elija el estado de la prueba</label>
		    		<select class="form-control" id="estado" name="estado_prueba">
						<option value="1">Activa</option>
						<option value="2">Inactiva</option>
					</select>
				<div class="form-group">
		    		<label for="pregunta">Ingrese la pregunta 1</label>
		    		<input type="text" class="form-control" id="titulo_pregunta" name="titulo_pregunta" placeholder="Ingrese la pregunta">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 1</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta" placeholder="Ingrese la opcion">
		    		<input type="Checkbox" name="verificacion">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 2</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta" placeholder="Ingrese la opcion">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 3</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta" placeholder="Ingrese la opcion">
				</div>


				<br><button>Guardar</button><br><br>
			</form>
			</article>

			
			<article id="tab2">
				<div class="form-group">
		    		<label for="tipo_user">Tipo de usuario</label>
		    		<select class="form-control" id="tipo_user" name="tipo">
					<option value="1"><?php echo $materiad ?></option>
					</select>
			</div>
			</article>
			<article id="tab3">
				<h1>Generar Reporte</h1>
				
			</article>
			<article id="tab4">
				<h1>Vizualizar Resultados</h1>
				
			</article>
		</div>
	</div>
</body>

</html>

