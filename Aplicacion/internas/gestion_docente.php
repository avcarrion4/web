<?php
include("../dll/config.php");
include("../dll/mysql.php");

session_start();
$ver= $_SESSION["id_docente"];
$nombres;
$que="Select nombre_docente, apellido_docente, apellido2_docente FROM docente WHERE id_docente ="."$ver";
$datos=mysql_query($que) or die('Error de sql');
if ($res=mysql_fetch_array($datos, MYSQL_ASSOC)) {
	
	$nombres = $res['nombre_docente'].' '. $res['apellido_docente'].' '. $res['apellido2_docente'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
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
			<li><a href="#tab2"><span class="fa fa-upload"></span><span class="tab-text">Cargar Prueba</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Listar Pruebas</span></a></li>
			<li><a href="#tab4"><span class="fa fa-list-alt"></span><span class="tab-text">Generar Reportes</span></a></li>
			<li><a href="#tab5"><span class="fa fa-check-square"></span><span class="tab-text">Vizualizar Resultados</span></a></li>
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
				<h1>Nosotros</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptates unde, consequuntur aliquid architecto rem numquam expedita minima dolorem pariatur recusandae, eius quod quia aspernatur id impedit, tenetur! Aspernatur incidunt molestiae dolores animi ea praesentium ipsam tenetur voluptas cupiditate perspiciatis eum nihil, natus exercitationem libero earum fuga dignissimos impedit numquam, quasi, placeat officiis voluptates, ad reprehenderit fugiat? Fugiat aperiam et magni, molestiae, numquam consectetur vitae sapiente cupiditate totam laboriosam voluptate obcaecati, aliquam placeat? Suscipit dolores fuga laudantium sed, qui magni iusto dolore quia. Quis fugit exercitationem porro. Rerum nihil omnis recusandae ratione fuga alias eligendi, earum sunt veritatis praesentium eum perspiciatis. Molestias deserunt, iure neque animi quod! Impedit reprehenderit cumque, numquam velit quae cum eius quidem similique laudantium hic deleniti!</p>
			</article>
			<article id="tab3">
				<h1>Servicios</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi?</p><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum dignissimos at esse, ipsum rerum assumenda nisi obcaecati! Aliquam iure voluptatem incidunt, explicabo sit labore, perferendis eius ad vel quia. Praesentium, doloribus. Quisquam provident nostrum totam itaque debitis, minima, tempore dolores!</p>
			</article>
			<article id="tab4">
				<h1>Blog</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsa ducimus amet at cumque sed numquam, explicabo impedit optio quas iste aperiam quidem ipsam rerum libero voluptatibus perferendis officiis voluptatum!</p>
			</article>
		</div>
	</div>
</body>

</html>

