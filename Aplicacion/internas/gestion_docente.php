<?php
include("../dll/config.php");
include("../dll/mysql.php");
session_start();
$ver= $_SESSION["id_docente"];
$nombres;
$materiad;
$que="Select nombre_docente, apellido_docente, apellido2_docente FROM docente WHERE id_docente ="."$ver";
$datos=mysql_query($que) or die('Error de sql');
if ($res=mysql_fetch_array($datos, MYSQL_ASSOC)) {
	$nombres = $res['nombre_docente'].' '. $res['apellido_docente'].' '. $res['apellido2_docente'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Gestion Docente</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estilosjs.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/css.css">

	<link rel="stylesheet" type="text/css" href="../css/estilosAdmin.css">
	<link rel="stylesheet" type="text/css" href="../css/cssfooter.css">
	<script type="text/javascript" src="../css/footer.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/cssHeader.css">
	<link rel="stylesheet" type="text/css" href="../css/cssSlide.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/demo.css">
	<script src="../js/main.js"></script>
	
</head>
<body style="background-color: gray">
<nav class="topnav" id="myTopnav">
  <a href="../index.html" class="active">Cerrarr sesion</a>
  
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</nav> <hr id="hruno" color="yellow" size=2  ">
	<div class="wrap" >
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-file-text"></span><span class="tab-text">Crear Prueba</span></a></li>
			<li><a href="#tab2"><span class="fa fa-upload"></span><span class="tab-text">Asignar Preguntas</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Listar Materias</span></a></li>
			<li><a href="#tab4"><span class="fa fa-list-alt"></span><span class="tab-text">Vizualizar Resultados</span></a></li>
		</ul>

		<div class="secciones">
			<article id="tab1">

			<form method="post" action="insertarprueba.php">
				<div class="form-group">
		    		<label for="codigo">Ingrese el codigo de la prueba</label>
		    		<input type="text" class="form-control" id="codigo_prueba" name="codigo_prueba" placeholder="Ingrese el codigo">
				</div>
				<div class="form-group">
		    		<label for="nombres">Ingrese el nombre de la prueba</label>
		    		<input type="text" class="form-control" id="nombre_prueba" name="nombre_prueba" placeholder="Ingrese el nombre">
				</div>
				<div class="form-group">
		    		<label for="estado">Elija el estado de la prueba</label>
		    		<select style="margin-bottom: 1em" class="form-control" id="estado" name="estado">
						<option value="1">Activa</option>
						<option value="2">Inactiva</option>
					</select>
					</div>
				<br><button >Guardar</button><br><br>
			</form>
			</article>

			
			<article id="tab2">

				<h1>Asignar preguntas a pruebas</h1>
				<form method="post" action="insertarpreguntas.php">
				<div class="form-group">
		    		<label for="codigo">Ingrese el codigo de la prueba</label>
		    		<input type="text" class="form-control" id="codigo_prueba" name="codigo_prueba" placeholder="Ingrese el codigo">
				</div>
				<div class="form-group">
		    		<label for="pregunta">Ingrese la pregunta 1</label>
		    		<input type="text" class="form-control" id="titulo_pregunta" name="titulo_pregunta" placeholder="Ingrese la pregunta">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 1</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta1" placeholder="Ingrese la opcion">
		    		<input type="Checkbox" name="verificacionA" value="1">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 2</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta2" placeholder="Ingrese la opcion">
		    		<input type="Checkbox" name="verificacionB" value="1">
				</div>
				<div class="form-group">
		    		<label for="respuesta">Ingrese la opcion 3</label>
		    		<input type="text" class="form-control" id="opcion_respuesta" name="opcion_respuesta3" placeholder="Ingrese la opcion">
		    		<input type="Checkbox" name="verificacionC" value="1">
				</div>
				<br><button>Guardar</button><br><br>
			</form>
			</article>
			<article id="tab3">

				<div class="form-group">
		    		<label for="materias">Materias asignadas</label>
		    		<select class="form-control" id="materias" name="materia []" multiple>
		    			<?php 
		    			$ry="Select * FROM materia m WHERE m.id_materia IN (Select dp.id_paralelo FROM docente_paralelo dp WHERE dp.id_docente ="." $ver)";
		    			$res=mysql_query($ry) or die ('error de sql');
		    			while ($er = mysql_fetch_array($res,MYSQL_ASSOC)) {
		    				?>
		    			<option value = "<?php echo $er['id_materia'];?>"><?php echo $er['nombre_materia'];?></option>
		    		<?php
		    	}
		    	?>
		    	</select>
			</div>

			</article>
			<article id="tab4">
				<h1>Vizualizar Resultados</h1>
				
			</article>
		</div>
	</div>
	


</body>


</html>

