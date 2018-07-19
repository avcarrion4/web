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

    validar($cedula);
   //echo "<script>location.href='acceso_test.php'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  
  <meta charset="encoding">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  </script>
</head>
<body>
  <h1>PRUEBA</h1> 
  <form method="post" action="calificacion.php">
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $cedula ?>" disabled>
    </div>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="text" class="form-control" id="codigo" name="codigo"  value="<?php echo $codigo ?>" disabled>
    </div>
    <div id="page-wrapper">
    <div class="form-group">
        <?php 
          
            $query="Select * from pregunta where id_prueba="."$codigo";           
            $preguntas=mysql_query($query) or die('Error de sql');
            while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
              ?>
              <div class="form-group">
                <br><label for="pregunta"><?php echo "$pregunta[titulo_pregunta]"; ?></label>
              </div><?php 
              
              $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
              $respuestas=mysql_query($query) or die('Error de sql');
              while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
                ?><input type="checkbox" name="resp[]";  value="<?php echo $respuesta['id_respuesta'];?>"> <?php echo "$respuesta[opcion_respuesta]";?><br><?php
                  
                }
            }            
        ?>
    </div>
    <br><button>Guardar</button><br><br>
  </form>
  <footer>Pie de pagina</footer>


</body>
</html>