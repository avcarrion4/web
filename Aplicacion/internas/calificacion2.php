<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
session_start();
$ced=$_SESSION["cedula_estudiante"];
$cod=$_SESSION["codigo"];

echo $ced;
 echo "<br>";
echo $cod;
 echo "<br>";
/*echo $finalResult1;
 echo "<br>";
echo $finalResult2;
 echo "<br>";
echo "$finalResult3";
echo "<br>";
echo "$finalResult4";
echo "<br>";
echo "$finalResult5";
echo "<br>";
echo "$finalResult6";
echo "<br>";
echo "$finalResult7";
echo "<br>";
echo "$finalResult8";
echo "<br>";
echo "$finalResult9";
echo "<br>";
echo "$finalResult10";
echo "<br>*/




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
		echo "$query";
		//$insertar=mysql_query($query) or die('Error de sql');
		
	}else{
		$query="insert into resultado values('',$ced,$cod,$p,'0') ";
		echo "$query";
		//$insertar=mysql_query($query) or die('Error de sql');
		
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
	$aux="";
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
	$aux2=array($pregunta['id_pregunta'], $a, $b,$c);
	$array_preguntas[$cont]=$aux2;
	$cont++;
}


$arrlength=count($array_preguntas);

for($x = 1; $x <= $arrlength; $x++) {
      $aux3=$array_preguntas[$x];
      $texta="";
      //echo "$finalResult1";
      switch ($x) {
      	case '1':
      		$texta=$finalResult1;
      		//
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
      	case '2':
      		$texta=$finalResult2;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;	
      	case '3':
      		$texta=$finalResult3;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}      		
      		break;
  		case '4':
	  		$texta=$finalResult4;
	  		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
	  		break;
  		case '5':
      		$texta=$finalResult5;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
      	case '6':
      		$texta=$finalResult6;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
  		case '7':
	  		$texta=$finalResult7;
	  		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
	  		break;
	  	case '8':
      		$texta=$finalResult8;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
      	case '9':
      		$texta=$finalResult9;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
      	case '10':
      		$texta=$finalResult10;
      		if ((trim($texta)=="A.")||(trim($texta)=="Letra a.")||(trim($texta)=="Letra A.")) {
				$a=verificacion_respuesta(1,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="B.")||(trim($texta)=="Letra b.")||(trim($texta)=="Letra B.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(1,$aux3[2]);
			    $c=verificacion_respuesta(0,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
			if ((trim($texta)=="C.")||(trim($texta)=="Letra c.")||(trim($texta)=="Letra C.")) {
				$a=verificacion_respuesta(0,$aux3[1]);
				$b=verificacion_respuesta(0,$aux3[2]);
			    $c=verificacion_respuesta(1,$aux3[3]);
			    verificacion_pregunta($aux3[0],$ced,$cod ,$a,$b,$c);
			    //echo "$a\n$b\n$c";			      
				
			}
      		break;
      	default:
      		# code...
      		break;
      }   
      echo $aux3[0].";".$aux3[1].";".$aux3[2].";".$aux3[3];
      echo "<br>";
  }



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
	//session_destroy();
?>
	<form action="../index.html">
		<button>Salir</button>	
	</form>
	

</body>
</html>


