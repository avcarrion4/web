
<?php
include("dll/con.php");
include("dll/config.php");

$aa=$_REQUEST['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estiloPanel.css">
	<title>Admin</title>

</head>

<body>
	<header>
		<section id="tituloH">
			<h2>Admin Panel</h2>
		</section>
		<section id="centroH"><h2>Administrar : Docentes</h2></section>
		<section id="logoH"></section>
		

	</header>


	<hr id="hrdos" color="#D0C103" size=3  ">
	<section id="cuerpo">
		
		<nav>

	
			<a href="panel.php" >Admin</a>
			<a href="#databases">Area</a>
			<a href="#servicios">Titulacion</a>
			<a href="#tipos">Periodo</a>
			<a href="docente.php" style="background-color: #00457E">Docente</a>
			<a href="#forms">Materia</a>
			<a href="#forms">Discapacidad</a>
			


			
			<a href="contacts" class="mfin">Alumno</a>
		</nav>

		<section id="info">

				<section class="add">

					<form id="fnuevo" action="crudadmin.php" method="post">
	
			

    		<label for="fname">Nombre</label>
    	<input type="text" id="nombre" name="nombre"  value=" <?php  

    	$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['nombre_docente'];
			

}
		


		    ?>">

   	 <label for="lname">Apellido</label>
    	<input type="text" id="apellido" name="apellido"  value=" <?php  
    	$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['apellido_docente'];
			

}
		


		    ?>">

   		 <label for="lname">Cedula</label>
   	 	<input type="text" id="cedula" name="cedula"  value=" <?php  
$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['cedula_docente'];
			

}
		


		    ?>">
   	 		 <label for="lname">Telefono</label>
   	 	 	<input type="text" id="telefono" name="telefono" value=" <?php  
$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['telefono_docente'];
			

}
		


		    ?>">
   	 	 		 <label for="lname">Correo</label>
   	 	 	 	<input type="text" id="correo" name="correo"  value=" <?php  
$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['correo_docente'];
			

}
		


		    ?>">
   	 	 	 		 <label for="lname">Titulo</label>
   	 	 	 	 	<input type="text" id="titulo" name="titulo"  value=" <?php  
$sql2="select * from docente where id_docente=$aa"; 
				$registro=mysqli_query($link,$sql2) or die('error');
    	while ($reg= mysqli_fetch_array($registro,MYSQLI_ASSOC)) {

			echo $reg['titulo_docente'];
			

}
		


		    ?>">
    
  	  <button name="ide" id="ag" value="<?php  echo $aa; ?>">Modificar</button>

 	 </form>
					
				</section>

				




		</section>
	</section>
		<hr id="hrdos" color="#D0C103" size=2  ">
		<footer >
			
			<h6>Creative Commons by @Yoder</h6>
		</footer>
</body>
</html>