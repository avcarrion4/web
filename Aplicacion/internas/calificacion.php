<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);


$arrlength = count($resp);
$query="SELECT id_prueba FROM `pregunta` WHERE id_pregunta=(SELECT id_pregunta FROM `respuesta` WHERE id_respuesta=$resp[0])";
$preguntas=mysql_query($query) or die('Error de sql');
while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	$codigo=$pregunta['id_prueba'];
	
}

$query="select * from pregunta join respuesta on pregunta.id_pregunta=respuesta.id_pregunta where id_prueba=".$codigo;
$preguntas=mysql_query($query) or die('Error de sql');
while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	echo $pregunta['id_pregunta'];
	echo "<br>";
	echo $pregunta['id_respuesta'];
	echo "<br>";
	echo $pregunta['verificacion'];
	echo "<br>";
	for($x = 0; $x < $arrlength; $x++) {
		echo $resp[$x];
	    echo "<br>";
		if ($pregunta['id_respuesta']==$resp[$x]) {
			echo $pregunta['id_respuesta'];
			echo "<br>";
			echo "$resp[$x]";
			echo "<br>";
			echo "Iguales";
			echo "<br>";
		}else{
			echo "no encontrado";
			echo "<br>";
		}
	    /*echo $resp[$x];
	    echo "<br>";*/
	}

}






/*function validar(){
	
	for ($i=0; $i < $resp.length; $i++) { 
		if ($ckbox[$i].checked==true) {
			echo $ckbox.value;
		}
	}
}

validar();*/

	/*$query="Select * from pregunta where id_prueba="."$codigo"." and id_pregunta="."$i".";";
	$preguntas=mysql_query($query) or die('Error de sql');
	while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
	  ?>
	  <div class="form-group">
	    <label for="pregunta"><?php echo "$pregunta[titulo_pregunta]"; ?></label>
	  </div><?php 
	  
	  $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
	  $respuestas=mysql_query($query) or die('Error de sql');
	  while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
	    ?><input type="checkbox" name="<?php echo "$i"."$respuesta[opcion_respuesta]"; ?>" value="<?php echo $respuesta['id_respuesta'];?>"> <?php echo "$respuesta[opcion_respuesta]";?><br><?php
	      
	    }
	}*/
	  


?>


<?php
	/*$respuestas1=array("a","b");
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
	}*/
?>
