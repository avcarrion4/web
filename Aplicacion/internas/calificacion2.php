<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
session_start();
$ced=$_SESSION["cedula_estudiante"];
$cod=$_SESSION["codigo"];

echo $ced;
echo $cod;
echo $finalResult1;
if ($finalResult1=="A") {
	# code...
}
echo $finalResult2;
echo "$finalResult3";
echo "$finalResult4";
echo "$finalResult5";
echo "$finalResult6";
echo "$finalResult7";
echo "$finalResult8";
echo "$finalResult9";
echo "$finalResult10";




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


$query="Select * from pregunta where id_prueba=". $cod;           
$preguntas=mysql_query($query) or die('Error de sql');
$array_preguntas;
$aux2;
$cont=1;
while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	$query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
	$respuestas=mysql_query($query) or die('Error de sql');
	$cont2=1;
	$a;
	$b;
	$c;
	while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
	  if ($cont2==1) {
	    $aux=$aux."\nA) "."$respuesta[opcion_respuesta]";
	    $a=$respuesta['verificacion'];
	  }
	  if ($cont2==2) {
	    $aux=$aux."\nB) "."$respuesta[opcion_respuesta]";
	    $b=$respuesta['verificacion'];
	  }
	  if ($cont2==3) {
	    $c=$respuesta['verificacion'];
	    $aux=$aux."\nC) "."$respuesta[opcion_respuesta]";
	  }
	  
	  $cont2++;

	}
	$aux2=array($cont, $a, $b,$c);
	$array_preguntas[$cont]=$aux2;
	$cont++;
}

$arrlength=count($array_preguntas);
for($x = 1; $x <= $arrlength; $x++) {
      $aux3=$array_preguntas[$x];
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

      $a=verificacion_respuesta(,$aux3[1]);
      $b=verificacion_respuesta(,$aux3[2]);
      $c=verificacion_respuesta(,$aux3[3]);
      echo $aux3[0].";".$aux3[1].";".$aux3[2].";".$aux3[3];
      echo "<br>";
  }


/*
$query="select * from pregunta join respuesta on pregunta.id_pregunta=respuesta.id_pregunta where id_prueba=".$cod;

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
*/	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
<?php 
	$query="SELECT * FROM resultado WHERE id_prueba=$cod and cedula_alumno= $ced";
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


