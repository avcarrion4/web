<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
session_start();
$query6="Select id_alumno from alumno where cedula_alumno=".$_SESSION["cedula_estudiante"];
$respuesta=mysql_query($query6) or die('Error de sql');
$pregunta=mysql_fetch_array($respuesta, MYSQL_ASSOC);
$ced=$pregunta['id_alumno'];
$cod2=$_SESSION["codigo"];

$query5="SELECT id_prueba FROM `prueba` WHERE codigo_prueba=$cod2";
$id2=mysql_query($query5) or die('Error de sql');
$id=mysql_fetch_array($id2, MYSQL_ASSOC);
$cod=$id['id_prueba'];


function verificacion_respuesta($resp_preg , $resp_bd){
	
	
	if ( $resp_preg == $resp_bd) {
		
		return true;
	}else{
		
		return false;
	}
}
function verificacion_pregunta($p, $ced ,$cod ,$a, $b , $c){
	
	
	if (($a==true) and ($b==true) and ($c==true)) {
		$query="insert into resultado values('',$ced,$cod,$p,'1') ";
		$insertar=mysql_query($query) or die('Error de sqlddd');
		
	}else{
		$query="insert into resultado values('',$ced,$cod,$p,'0') ";
		$insertar=mysql_query($query) or die('Error de sql');
		
	}
}

$arrlength = count($resp);
$query="SELECT id_prueba FROM `pregunta` WHERE id_pregunta=(SELECT id_pregunta FROM `respuesta` WHERE id_respuesta=$resp[0])";
$preguntas=mysql_query($query) or die('Error de sql');
while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	$codigo=$pregunta['id_prueba'];
	
}

$query="select * from pregunta join respuesta on pregunta.id_pregunta=respuesta.id_pregunta where id_prueba=".$codigo;

$preguntas=mysql_query($query) or die('Error de sql');
$cont=1;
$a;
$b;
$c;
while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	
	for($x = 0; $x < $arrlength; $x++) {
		if ($pregunta['id_respuesta']==$resp[$x]) {

			switch ($cont) {
				case '0':
				break;
				case '1':
					
					$a=verificacion_respuesta( 1,$pregunta['verificacion']);
					
				break;
				case '2':
					
					$b=verificacion_respuesta( 1,$pregunta['verificacion']);
					
				break;
				case '3':
					
					$c=verificacion_respuesta(1,$pregunta['verificacion']);
					
				break;

			}
			break;
		}else{
			switch ($cont) {
				case '0':
				break;
				case '1':
					$a=verificacion_respuesta(0,$pregunta['verificacion']);
				break;
				case '2':
					$b=verificacion_respuesta(0,$pregunta['verificacion']);
				break;
				case '3':
					$c=verificacion_respuesta(0,$pregunta['verificacion']);
				break;

			}

		}
	    
	}
	if ($cont==3) {
		
		verificacion_pregunta($pregunta['id_pregunta'],$ced,$cod ,$a,$b,$c);
		$cont=1;
	}else{
		$cont++;
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
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
</head>
<body>
<header style="float: left;
	width: 100%;height: 9%;
	background-color: #0C464B;margin-bottom: 2em; color: #FFFFFF;width: "><h1 style="text-align: center;">Respuestas guardadas</h1></header>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $_SESSION["cedula_estudiante"] ?>" disabled>
</div>
<div class="form-group" style="margin-bottom: 2em;">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo"  value="<?php echo  $_SESSION["codigo"] ?>" disabled>
</div>
<?php 
	$query="SELECT * FROM resultado WHERE id_prueba=$cod and id_alumno= $ced" ;
	$preguntas=mysql_query($query) or die('Error de sql');
	$cont2=1;
	while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
		?><label for="cedula" style="margin-top: 2em; "><?php echo "PREGUNTA "."$cont2: "; ?></label>
		<input style="font-family: 'Roboto', sans-serif;
  outline: 0;
  background: #f2f2f2;
  margin-top: 1em;
  width: 15%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;" type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $pregunta['valor']; ?>" disabled>
		<br>
		<?php		
		$cont2++;
		
	}
	session_destroy();
?>
	<form action="../index.html">
		<button style="margin-top: 2em; font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 7%;
  border: 0;
  margin-left: 2em;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;">Salir</button>	
	</form>
	

</body>
</html>


