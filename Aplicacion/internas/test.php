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
  <form method="post" action="calificacion.php">
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Enter cedula" value="<?php echo $cedula ?>" disabled>
    </div>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Enter codigo" value="<?php echo $codigo ?>" disabled>
    </div>
    <div id="page-wrapper">
    <div class="form-group">
        <?php 
          for ($i=1; $i <=10  ; $i++) { 
            $query="Select * from pregunta where id_prueba="."$codigo"." and id_pregunta="."$i".";";
            $preguntas=mysql_query($query) or die('Error de sql');
            while ($pregunta=mysql_fetch_array($preguntas, MYSQL_ASSOC)) {
              ?>
              <div class="form-group">
                <label for="pregunta"><?php echo "$pregunta[titulo_pregunta]"; ?></label>
              </div><?php 
              
              $query="Select * from respuesta where id_pregunta="."$pregunta[id_pregunta]";
              $respuestas=mysql_query($query) or die('Error de sql');
              while ($respuesta=mysql_fetch_array($respuestas, MYSQL_ASSOC)) {
                ?><input type="checkbox" name="resp[]";  value="<?php echo $respuesta['id_respuesta'];?>"> <?php echo "$respuesta[opcion_respuesta]";?><br><?php
                  
                }
            }
              
          }
          
        ?>
    </div>
    <br><button>Guardar</button><br><br>
  </form>
  <form action="#" onsubmit="return validar();">
                <input type='checkbox' name="mes[]" value="enero">Enero
                <input type='checkbox' name="mes[]" value="febrero">Febrero
                <input type='checkbox' name="mes[]" value="marzo">Marzo
                <input type='checkbox' name="mes[]" value="abril">Abril
                <input type='checkbox' name="mes[]" value="abril">Mayo
                <input type='checkbox' name="mes[]" value="abril">Junio
                <input type='checkbox' name="mes[]" value="abril">Julio
                <input type='checkbox' name="mes[]" value="abril">Agosto
                <input type='checkbox' name="mes[]" value="abril">Septiembre
                <input type='checkbox' name="mes[]" value="abril">Octubre
                <input type='checkbox' name="mes[]" value="abril">Noviembre
                <input type='checkbox' name="mes[]" value="abril">Diciembre
                <input type="submit" />
  </form>



  <footer>Pie de pagina</footer>


</body>
</html>