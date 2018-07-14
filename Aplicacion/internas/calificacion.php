<?php
include("dll/config.php");
include("dll/mysql.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
</head>
<body>
	<header>
		<h1>1er Congreso de Software 2018</h1>
	</header>
	
	<main>
		<?php
			$respuestas1=array("a","b");
			$respuestas2=array("b","c");
			$preguntas=array($respuestas1,$respuestas2);
			$p_length=count($preguntas);
			for ($i=0; $i < $p_length ; $i++) { 
				$r_length=count($preguntas[$i]);
				$aux=$preguntas[$i];
				echo "Pregunta ".$i;
				for ($j=0; $j <$r_length ; $j++) { 	
					echo "<br>";
					echo $aux[$j];
					echo "<br>";
					
				}
			}
		?>
		<button>Enviar</button>
	</main>
	
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>