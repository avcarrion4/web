<?php
   include("../dll/mysql.php");
    include("../dll/config.php");
    extract($_POST);  

    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    
    $query=
    "insert into prueba values ('','$codigo_prueba','$nombre_prueba','$estado_prueba','$id_docente')";
            $resp=mysql_query($query) or die('error');

    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='agPruebas.php'</script>";
 ?>
