
<?php
include("dll/con.php");
include("dll/config.php");


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
		<section id="centroH"><h2>Administrar : Alumnos</h2></section>
		<section id="logoH"></section>
		

	</header>


	<hr id="hrdos" color="#D0C103" size=3  ">
	<section id="cuerpo">
		
		<nav>

	
			<a href="panel.php" >Admin</a>
			<a href="#databases">Area</a>
			<a href="#servicios">Titulacion</a>
			<a href="#tipos">Periodo</a>
			<a href="docente.php" >Docente</a>
			<a href="#forms">Materia</a>
			<a href="discapacidad.php">Discapacidad</a>
		


			
			<a href="alumno.php" style="background-color: #00457E" >Alumno</a>
		</nav>

		<section id="info">

				<section class="add">

					<form id="fnuevo" action="adminInsert.php" method="post">
    		<label for="fname">Nombre</label>
    	<input type="text" id="nombre" name="nombre" placeholder="nombre">

   	 <label for="lname">Apellido</label>
    	<input type="text" id="apellido" name="apellido" placeholder="apellido">

   		 <label for="lname">Cedula</label>
   	 	<input type="text" id="cedula" name="cedula" placeholder="cedula">
   	 		 <label for="lname">Telefono</label>
   	 	 	<input type="text" id="telefono" name="telefono" placeholder="telefono">
   	 	 		 <label for="lname">Correo</label>
   	 	 	 	<input type="text" id="correo" name="correo" placeholder="correo">
   	 	 	 		 <label for="lname">Edad</label>
   	 	 	 	 	<input type="text" id="edad" name="edad" placeholder="edad">
    
  	  <button id="ag">Agregar</button>

 	 </form>
					
				</section>


				<hr id="hrdos" color="#000" style="margin-top: 1em;" size=1  ">

				<section class="add">

				<?php  
			$sql2="select * from alumno";
			$result=mysqli_query($link,$sql2) or die ("error de id max");

			?>
					<table id="customers">
  <tr>
    <th class="th">Nombre</th>
    <th class="th">Apellido</th>
    <th class="th">Cedula</th>
    <th class="th">Telefono</th>
    <th class="th">Correo</th>
    <th class="th">Edad</th>
    <th class="th">Discapacidad</th>
    <th class="crud">Eliminar</th>
    <th class="crud">Modificar</th>
  </tr>

  <?php
  while ($line=mysqli_fetch_array($result)) {?>
				<tr >
				<td><?php echo $line[1] ?></td>
				<td><?php echo $line[2] ?></td>
				<td><?php echo $line[3] ?></td>
				<td><?php echo $line[4] ?></td>
				<td><?php echo $line[5] ?></td>
				<td><?php echo $line[6] ?></td>
				<td><?php echo $line[7] ?></td>

				<?php $a=$line[0];
				 ?>
				
				<td> <a href='docente.php?id=$line[0]' >Eliminar</a></td>
				<td> <a href=  'modDocente.php?id=<?php echo  $a; ?>' >Modificar</a></td>

				</tr>
				<?php } ?>

 
</table>

				</section>



		</section>
	</section>
		<hr id="hrdos" color="#D0C103" size=2  ">

		<footer >
			
			<h6>Creative Commons by @Yoder</h6>
		</footer>
</body>
</html>