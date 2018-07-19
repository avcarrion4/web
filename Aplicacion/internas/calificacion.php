<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
session_start();
$ced=$_SESSION["cedula_estudiante"];
$cod=$_SESSION["codigo"];

function verificacion_respuesta($resp_preg , $resp_bd){
	
	
	if ( $resp_preg == $resp_bd) {
		
		return true;
	}else{
		
		return false;
	}
	/*switch ($cont) {
		case '0':
		break;
		case '1':
			if ($resp_preg==$resp_bd) {
				echo $resp_preg;
				echo $resp_bd;
				return true;
			}else{
				return false;
			}
		break;
		case '2':
			if ($resp_preg==$resp_bd) {
				echo "$resp_preg";
				echo "$resp_bd";
				return true;
			}else{
				return false;
			}
		break;
		case '3':
			if ($resp_preg==$resp_bd) {
				echo "$resp_preg";
				echo "$resp_bd";
				return true;
			}else{
				return false;
			}
		break;
	}*/
}
function verificacion_pregunta($p, $ced ,$cod ,$a, $b , $c){
	
	
	if (($a==true) and ($b==true) and ($c==true)) {
		$query="insert into resultado values('',$ced,$cod,$p,'1') ";
		//$insertar=mysql_query($query) or die('Error de sql');
		
	}else{
		$query="insert into resultado values('',$ced,$cod,$p,'0') ";
		//$insertar=mysql_query($query) or die('Error de sql');
		
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
			/*echo $pregunta['id_respuesta']." 1";
			echo "<br>";
			echo "$resp[$x]"." 2";
			echo "<br>";
			
			if ($pregunta['verificacion']==1) {
				echo "Verdadero";
			}else{
				echo "Falso";
			}*/

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
			/*echo $pregunta['id_respuesta']." 1";
			echo "<br>";
			echo "$resp[$x]"." 2";
			echo "<br>";
			echo "no iguales";
			echo "<br>";*/
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
	    /*echo $resp[$x];
	    echo "<br>";*/
	}
	if ($cont==3) {
		
		verificacion_pregunta($pregunta['id_pregunta'],$ced,$cod ,$a,$b,$c);
		$cont=1;
	}else{
		$cont++;
	}

}
	
//echo "<script>location.href='../index.html'</script>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
<?php 
	$query="SELECT * FROM resultado WHERE id_prueba=$cod";
	$preguntas=mysql_query($query) or die('Error de sql');
	$cont2=1;
	while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
		echo "Pregunta "."$cont2: ";
		echo $pregunta['valor'];
		echo "<br>";
		$cont2++;
		
	}
	session_destroy();
?>
	<form action="../index.html">
		<button>Salir</button>	
	</form>
	

</body>
</html>


