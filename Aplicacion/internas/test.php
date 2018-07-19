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
        $query2="SELECT cedula_alumno, id_prueba FROM `resultado` WHERE cedula_alumno=$cedula and id_prueba=$codigo";
        $respuesta2=mysql_query($query2) or die('Error de sql');
        if ($pregunta2=mysql_fetch_array($respuesta2, MYSQL_ASSOC)) {
          echo "<script> alert('Ya ha realizado la prueba')</script>";
          echo "<script>location.href='acceso_test.php'</script>";
        }else{
          session_start();
          $_SESSION["cedula_estudiante"] = $cedula;
          $_SESSION["codigo"] = $codigo;
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
<html lang="en">
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
        <div id="page-wrapper">
        <div class="form-group">
            <?php 
              
                $query="Select * from pregunta where id_prueba=". $_SESSION["codigo"];           
                $preguntas=mysql_query($query) or die('Error de sql');
                while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
                  ?>
                  <div class="form-group">
                    <br><label for="pregunta"><?php echo "$pregunta[titulo_pregunta]"; ?></label>
                  </div><?php 
                  
                  $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
                  $respuestas=mysql_query($query) or die('Error de sql');
                  while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
                    ?><input type="checkbox" class="form-control" name="resp[]";  value="<?php echo $respuesta['id_respuesta'];?>"> <?php echo "$respuesta[opcion_respuesta]";?><br><?php
                      
                    }
                }            
            ?>
        </div>



        </fieldset>
        <br><button>Guardar</button><br><br>
      </form>
  </main> 
 
  <footer>Pie de pagina</footer>


</body>
</html>