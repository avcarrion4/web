<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
session_start();
$ced=$_SESSION["cedula_estudiante"];
$cod2=$_SESSION["codigo"];

$query5="SELECT id_prueba FROM `prueba` WHERE codigo_prueba=$cod2";
//echo "$query5";
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
		$insertar=mysql_query($query) or die('Error de sql');
		
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
</head>
<body>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $_SESSION["cedula_estudiante"] ?>" disabled>
</div>
<div class="form-group">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo"  value="<?php echo  $_SESSION["codigo"] ?>" disabled>
</div>
<?php 
	$query="SELECT * FROM resultado WHERE id_prueba=$cod and cedula_alumno= $ced" ;
	$preguntas=mysql_query($query) or die('Error de sql');
	$cont2=1;
	while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
		?><label for="cedula"><?php echo "Pregunta "."$cont2: "; ?></label>
		<input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $pregunta['valor']; ?>" disabled>
		<br>
		<?php		
		$cont2++;
		
	}
	//session_destroy();
?>
	<form action="../index.html">
		<button>Salir</button>	
	</form>
	

</body>
</html>


