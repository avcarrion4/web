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
    $cont2=1;
    while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
      if ($cont2==1) {
        $aux=$aux."\nA) "."$respuesta[opcion_respuesta]";        
      }
      if ($cont2==2) {
        $aux=$aux."\nB) "."$respuesta[opcion_respuesta]";
      }
      if ($cont2==3) {
        $aux=$aux."\nC) "."$respuesta[opcion_respuesta]";
      }
      
      $cont2++;

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
	<link rel="stylesheet" type="text/css" href="../css/css.css">
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
    
  </section>
	<SECTION>
    <?php 
      $arrlength=count($array_preguntas);
      for($x = 1; $x <= $arrlength; $x++) {
        $aux3=$array_preguntas[$x];
        ?>
        <label>PREGUNTA <?php echo "$x"; ?> :</label>
        <textarea type="text" name="speech-msg" id="texto<?php echo $x?>" value="" rows="10" cols="80" x-webkit-speech><?php echo "$aux3[0]"; ?></textarea>
        
        <img onclick="accion(<?php echo $x?>);" src="../img/play-button.png">
        <div id="resp">
          <textarea rows="3" cols="80" id="interimResult<?php echo $x?>">
            
          </textarea>
          <textarea rows="3" cols="80" id="finalResult<?php echo $x?>">
            
          </textarea>
        </div>
        <input type="button" onclick="accion2(<?php echo $x?>);" id="btn<?php echo $x?>" value="start"/>
        <?php 
        
        echo "<br>";
      }
    ?>
    <input type="button" onclick="validar(<?php echo $cont?>);" id="btn<?php echo $x?>" value="Guardar"/>
  </SECTION>

	 
 


</div>

  <script type="text/javascript">
    

    function accion2(x){
      
      var finalTranscript = "";
      var isRecognizing = false;
      var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
      var recognition = new SpeechRecognition();
      recognition.continuous = true;
      recognition.interimResults = true;
      recognition.lang = 'es_ES';
      var aux1="interimResult"
      aux1=aux1.concat(x);
      var aux2="btn"
      aux2=aux2.concat(x);
      var aux3="finalResult"
      aux3=aux3.concat(x);

      
      
      var interimResult = document.getElementById(aux1);
      var btn = document.getElementById(aux2);
      var finalResult = document.getElementById(aux3);

      if (btn.value=="stop") {
        var isRecognizing = true;
      }
      
      if (isRecognizing) {
        recognition.stop();
        btn.value="start to listen";
      } else {  
        finalTranscript = "";
        finalResult.innerHTML = "";
        interimResult.innerHTML = "";
        btn.value="stop";
        recognition.start();
      }

      recognition.onresult = function(event) {
        var interimTranscript = "";
        for (var i = event.resultIndex; i < event.results.length; i++) {
          var _transcript = event.results[i][0].transcript;
          if (event.results[i].isFinal) {
            finalTranscript += StringUtils.capitalize(_transcript) + ".";
          } else {
            interimTranscript += _transcript;
          }
        }
        switch (x) {
          case '0':
          break;
          case '1':
            finalResult1.innerHTML = finalTranscript;
            interimResult1.innerHTML = interimTranscript;
          
          break;
          case '2':
            finalResult2.innerHTML = finalTranscript;
            interimResult2.innerHTML = interimTranscript;
          break;
          case '3':
            finalResult3.innerHTML = finalTranscript;
            interimResult3.innerHTML = interimTranscript;
          break;
          case '4':
            finalResult4.innerHTML = finalTranscript;
            interimResult4.innerHTML = interimTranscript;
          break;
          case '5':
            finalResult5.innerHTML = finalTranscript;
            interimResult5.innerHTML = interimTranscript;
          break;
          case '6':
            finalResult6.innerHTML = finalTranscript;
            interimResult6.innerHTML = interimTranscript;
          break;
          case '7':
            finalResult7.innerHTML = finalTranscript;
            interimResult7.innerHTML = interimTranscript;
          break;
          case '8':
            finalResult8.innerHTML = finalTranscript;
            interimResult8.innerHTML = interimTranscript;
          break;
          case '9':
            finalResult9.innerHTML = finalTranscript;
            interimResult9.innerHTML = interimTranscript;
          break;
          case '10':
            finalResult10.innerHTML = finalTranscript;
            interimResult10.innerHTML = interimTranscript;
          break;

        }
        finalResult.innerHTML = finalTranscript;
        interimResult.innerHTML = interimTranscript;
      };
      recognition.onstart = function() {
          isRecognizing = true;
      };
      recognition.onend = function() {
        isRecognizing = false;
        if (!finalTranscript) {
          return;
        }
      };
      recognition.onerror = function(event) {
        console.log(event.error);
        //'no-speech','audio-capture','not-allowed'
      };


      var StringUtils = {
        FIRST_CHAR : /\S/,
        capitalize : function(s) {
          return s.replace(this.FIRST_CHAR, function(m) { return m.toUpperCase(); });
        }
      }
    }
  </script>

  <script type="text/javascript">


    // Get the 'speak' button
    //var button = document.getElementById('reproducir');

    // Get the text input element.
    //var speechMsgInput = document.getElementById('texto1');

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
    function accion(x){
      var aux1="texto"
      aux1=aux1.concat(x);
      alert(aux1);
      var speechMsgInput = document.getElementById(aux1);

      if (speechMsgInput.value.length > 0) {
        speak(speechMsgInput.value);
      }
    }
  </script>

  <script type="text/javascript">
    function validar(cont){
      var aux1="finalResult";
      for (var i = 1; i < cont; i++) {
        
        aux1=aux1.concat(cont);
        alert(aux1);  
      }
      

      //var texta = document.getElementById();


    }
  </script>
  <script type="text/javascript" src="../js/speech-recognition.js"></script>  
  
  
</body>
</html>