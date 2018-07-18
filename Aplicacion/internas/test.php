<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);

?>
<?php
  
    function validar($cedula){
      $query="Select * from alumno where cedula_alumno="."$cedula";
      $respuesta=mysql_query($query) or die('Error de sql');
      if ($pregunta=mysql_fetch_array($respuesta, MYSQL_ASSOC)) {
        //echo "$pregunta[nombre_alumno]";
      }else{
        echo "<script> alert('Cedula no encontrada')</script>";
        echo "<script>location.href='acceso_test.php'</script>";
      }
      
    }
    echo "$cedula";
    validar($cedula);

    function respuestas($id,$codigo){
      $query="Select * from pregunta where id_prueba="."$codigo"." and id_pregunta="."$id".";";
      $preguntas=mysql_query($query) or die('Error de sql');
      while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
        $pr="$pregunta[titulo_pregunta]".'\n';
        $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
        $respuestas=mysql_query($query) or die('Error de sql');
        while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
            $pr=$pr."$respuesta[opcion_respuesta]".'\n';
          }
      }
      return $pr;
      
    }

   //echo "<script>location.href='acceso_test.php'</script>";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  </script>
</head>
<body>
  <h1>PRUEBA</h1> 
  <form method="post" action="">
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Enter cedula" value="<?php echo $cedula ?>" disabled>
    </div>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Enter codigo" value="<?php echo $codigo ?>" disabled>
    </div>
    <div id="page-wrapper">
    
    <p id="msg"></p>
    <SECTION>
      <label>PREGUNTA 1:</label>
      <select name="selector" id="selector">
        <option value="1">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <script type="text/javascript">

        $('#selector').change(function(){
           var value=$(this).val();
           switch (value) {
            case '0':
            break;
            case '1':
                <?php
                  $id=1;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '2':
                <?php
                  $id=2;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            /*case '3':
                <?php
                  $id=3;
                  
                ?>
                  document.getElementById("texto").value="<?php echo respuestas($id,$codigo);?>";
            break;
            case '4':
                <?php
                  $id=4;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '5':
                <?php
                  $id=5;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '6':
                <?php
                  $id=6;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '7':
                <?php
                  $id=7;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '8':
                <?php
                  $id=8;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '9':
                <?php
                  $id=9;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;
            case '10':
                <?php
                  $id=10;
                  $res= respuestas($id,$codigo);
                ?>
                  document.getElementById("texto").value="<?php echo "$res";?>";
            break;*/
            
            

          }
          
        })
      </script>
      <div>
        <textarea type="text" name="speech-msg" id="texto" value="" rows="10" cols="80" x-webkit-speech></textarea> 
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

      <button id="reproducir" >Reproducir</button>
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
    </div>
    <br><button >Guardar</button><br><br>
  </form>


  <footer>Pie de pagina</footer>
<script type="text/javascript" src="../js/speech-recognition.js"></script> 
<script type="text/javascript" >
  
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





  // Fetch the list of voices and populate the voice options.
  /*function loadVoices() {
    // Fetch the available voices.
    var voices = speechSynthesis.getVoices();
    
    // Loop through each of the voices.
    voices.forEach(function(voice, i) {
      // Create a new option element.
      var option = document.createElement('option');
      
      // Set the options value and text.
      option.value = voice.name;
      option.innerHTML = voice.name;
        
      // Add the option to the voice selector.
      voiceSelect.appendChild(option);
    });
  }

  // Execute loadVoices.
  loadVoices();

  // Chrome loads voices asynchronously.
  window.speechSynthesis.onvoiceschanged = function(e) {
    loadVoices();
  };
  */

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
  button.addEventListener('click', function(e) {
    if (speechMsgInput.value.length > 0) {
      speak(speechMsgInput.value);
    }
  });
</script>
</body>
</html>