<?php
  include("../dll/config.php");
  include("../dll/mysql.php");
  extract($_POST);
  session_start();
  
  $query="Select * from pregunta where id_prueba=". $_SESSION["codigo"];           
  $preguntas=mysql_query($query) or die('Error de sql');
  $array_preguntas;
  $aux2;
  $cont=1;
  while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
    $aux="\n";
    $aux=$aux."$pregunta[titulo_pregunta]";
    $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
    $respuestas=mysql_query($query) or die('Error de sql');
    while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
      $aux=$aux."\n"."$respuesta[opcion_respuesta]";
      

    }
    $aux2=array($aux, 0, 0,0);
    $array_preguntas[$cont]=$aux2;
    $cont++;
  }
  $aux3=$array_preguntas[1];
      echo $aux3[0].";".$aux3[1];

  /*$arrlength=count($array_preguntas);
  for($x = 1; $x <= $arrlength; $x++) {
      $aux3=$array_preguntas[$x];
      echo $aux3[0].";".$aux3[1].";".$aux3[2].";".$aux3[3];
      echo "<br>";
  }*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Texto a voz</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<div id="page-wrapper">
  <h1>PRUEBA</h1>  
  <p id="msg"></p>
  <SECTION>
  	<label>PREGUNTA 1:</label>
  	<select name="selector" id="selector">
  		<option value="0">Seleccione</option>
      <?php for ($i=1; $i < 11; $i++) { 
              ?><option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php
            }
      ?>  		
  	</select>
  	<?php echo $_REQUEST['selector']; ?>
    <div>
    	<textarea type="text" name="speech-msg" id="texto" value="" rows="10" cols="80" x-webkit-speech><?php $aux3=$array_preguntas[1]; echo "$aux3[0]"; ?></textarea>	
    </div>
  </SECTION>
  <section>
    <div class="option">
      <label for="voice">Voice</label>
      <select name="voice" id="voice" disabled>
      <option value="Google español">Google español</option>  
      </select>
    </div>
    <div class="option">
      <label for="volume">Volume</label>
      <input type="range" min="0" max="1" step="0.1" name="volume" id="volume" value="1" disabled>
    </div>
    <div class="option">
      <label for="rate">Rate</label>
      <input type="range" min="0.1" max="10" step="0.1" name="rate" id="rate" value="1" disabled>
    </div>
    <div class="option">
      <label for="pitch">Pitch</label>
      <input type="range" min="0" max="2" step="0.1" name="pitch" id="pitch" value="1" disabled>
    </div>
    <button id="reproducir">Reproducir</button>  
  </section>
	

	
	<h1 class="center" id="headline">Respuesta</h1>
    <form>
      <input type="button" id="btn" value="start"/>
    </form>
    <div id="resp">
    	<textarea rows="3" cols="80" id="interimResult">
    		
    	</textarea>
    	<textarea rows="3" cols="80" id="finalResult">
    		
    	</textarea>
    	

		<script type="text/javascript" src="js/speech-recognition.js"></script>	
    </div>

  </SECTION>
 


</div>

  <script type="text/javascript" src="../js/js2.js"></script>
  <?php  $aux3=$array_preguntas[1]?>
  <script type="text/javascript">
    $('#selector').change(function(){
      
      var value=$(this).val();
      switch (value) {
        case '0':
        break;
        case '1':
        var arreglo="<?php echo $aux3[0] ?>";
          document.getElementById("texto").value=arreglo;
        break;
        case '2':
          document.getElementById("texto").value="Identifique cual de las siguientes expresiones es una proposición:\na)¡Socorro!\nb)x + 1 = 3\nc)Juan José Flores fue el segundo presidente del ecuador.";
        break;
        case '3':
          document.getElementById("texto").value="¿Por qué se origino la crisis del Ecuador?";
        break;

      }
    })
  </script>
</body>
</html>