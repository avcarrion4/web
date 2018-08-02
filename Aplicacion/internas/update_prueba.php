<?php
    include("../dll/mysql.php");
include("../dll/config.php");


   extract($_POST);

  



   $query = "UPDATE prueba SET codigo_prueba='$codigo_prueba',nombre_prueba='$nombre_prueba',estado_prueba='$estado_prueba',id_docente='$id_docente' WHERE id_prueba='$ide'"; 


      



    
    $result=mysql_query($query) or die ('error de sql');
    echo $query;
    
    echo '<script>alert("Datos guardados")</script>';
       echo "<script>location.href='agPruebas.php'</script>";



 ?>