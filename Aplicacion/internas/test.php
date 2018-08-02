<?php
  include("../dll/config.php");
  include("../dll/mysql.php");
  extract($_POST);
?>
<?php
  
    function validar($cedula,$codigo){
      $query="Select * from alumno where cedula_alumno="."$cedula";
      $respuesta=mysql_query($query) or die('Error de sql');
      if ($pregunta=mysql_fetch_array($respuesta, MYSQL_ASSOC)) {
        $query2="SELECT cedula_alumno, id_prueba FROM `resultado` WHERE cedula_alumno=$cedula and id_prueba=(SELECT id_prueba FROM `prueba` WHERE codigo_prueba=$codigo)";
        
        $respuesta2=mysql_query($query2) or die('Error de sql');
        if ($pregunta2=mysql_fetch_array($respuesta2, MYSQL_ASSOC)) {
          echo "<script> alert('Ya ha realizado la prueba')</script>";
          echo "<script>location.href='acceso_test.php'</script>";
        }else{
          if ($pregunta['id_discapacidad']==1) {
            session_start();
            $_SESSION["cedula_estudiante"] = $cedula;
            $_SESSION["codigo"] = $codigo;
            echo "<script>location.href='unido.php'</script>";
          } else {
            
            session_start();
            $_SESSION["cedula_estudiante"] = $cedula;
            $_SESSION["codigo"] = $codigo;
          }

          
          
        }        
        //echo "$pregunta[nombre_alumno]";
      }else{
        echo "<script> alert('Cedula no encontrada')</script>";
        echo "<script>location.href='acceso_test.php'</script>";
      }
      
    }

    validar($cedula,$codigo);
   //echo "<script>location.href='acceso_test.php'</script>";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
  
  <meta charset="encoding">
  <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
  <link rel="stylesheet" type="text/css" href="../css/estilosAdmin.css">

  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  </script>
  
</head>
<body>
  
  
  <main>
    <h2>PRUEBA</h2>
    
      <form method="post" action="calificacion.php">


      <fieldset>

<legend>Formulario de prueba</legend>
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $_SESSION["cedula_estudiante"] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo"  value="<?php echo  $_SESSION["codigo"] ?>" disabled>
        </div>
        <div class="form-group">
            <?php 
                
                $array_preguntas;
                $cont=0;                
                $query="Select * from pregunta where id_prueba=(SELECT id_prueba FROM `prueba` WHERE codigo_prueba=$codigo)";
                //echo "$query";           
                $preguntas=mysql_query($query) or die('Error de sql');
                while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
                  $aux="";
                  ?>
                  <div class="form-group">
                    <br><label for="pregunta"><?php $aux=$aux."$pregunta[titulo_pregunta]"; echo "$pregunta[titulo_pregunta]"; ?></label>
                  </div><?php 
                  
                  $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
                  $respuestas=mysql_query($query) or die('Error de sql');
                  while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
                    $aux=$aux."\n"."$respuesta[opcion_respuesta]";
                    ?><input type="checkbox" class="form-control" name="resp[]";  value="<?php echo $respuesta['id_respuesta'];?>"> <?php echo "$respuesta[opcion_respuesta]";?><br><?php
                      
                    }
                    $array_preguntas[$cont]=$aux;
                    $cont++;
                    
                }

                  
            ?>
        </div>



        </fieldset>
        <br><button style="color: #FFFFFF;">Guardar</button><br><br>
      </form>
  </main> 

  <footer>Pie de pagina</footer>


</body>
</html>