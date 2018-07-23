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
	<SECTION>
  <?php 
    $arrlength=count($array_preguntas);
    for($x = 1; $x <= $arrlength; $x++) {
      $aux3=$array_preguntas[$x];
      echo $aux3[0].";".$aux3[1].";".$aux3[2].";".$aux3[3];
      echo "<br>";
    }
  ?>

    <label>PREGUNTA :</label>
    <div>
      <textarea type="text" name="speech-msg" id="texto" value="" rows="10" cols="80" x-webkit-speech><?php $aux3=$array_preguntas[1]; echo "$aux3[0]"; ?></textarea> 
    </div>
  </SECTION>

	
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

  <script type="text/javascript">


    // Get the 'speak' button
    var button = document.getElementById('reproducir');

    // Get the text input element.
    var speechMsgInput = document.getElementById('texto');

    // Get the voice select element.
    var voiceSelect = document.getElementById('voice');
    //var voiceSelect = document.getElementById('voice');

    // Get the attribute controls.
    var volumeInput = document.getElementById('volume');
    var rateInput = document.getElementById('rate');
    var pitchInput = document.getElementById('pitch');

    /*
     * Check for browser support
     */

    var supportMsg = document.getElementById('msg');

    if ('speechSynthesis' in window) {
      supportMsg.innerHTML = 'Su buscador soporta speech synthesis.';
    } else {
      supportMsg.innerHTML = 'Lo sentimos su navegador no soporta speech synthesis.<br>Prueba esto en <a href="https://www.google.co.uk/intl/en/chrome/browser/canary.html">Chrome Canary</a>.';
      supportMsg.classList.add('no soportado');
    }

    // Create a new utterance for the specified text and add it to
    // the queue.
    function speak(text) {
      // Create a new instance of SpeechSynthesisUtterance.
      var msg = new SpeechSynthesisUtterance();
      
      // Set the text.
      msg.text = text;
      
      // Set the attributes.
      msg.volume = parseFloat(volumeInput.value);
      msg.rate = parseFloat(rateInput.value);
      msg.pitch = parseFloat(pitchInput.value);
      
      // If a voice has been selected, find the voice and set the
      // utterance instance's voice attribute.
      if (voiceSelect.value) {
        msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == voiceSelect.value; })[0];
      }
      
      // Queue this utterance.
      window.speechSynthesis.speak(msg);
    }


    // Set up an event listener for when the 'speak' button is clicked.
    function accion(){
      if (speechMsgInput.value.length > 0) {
        speak(speechMsgInput.value);
      }
    }
    

    
  </script>
  
  
</body>
</html>