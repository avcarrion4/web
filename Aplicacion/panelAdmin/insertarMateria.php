<?php
   include("../dll/mysql.php");
    include("../dll/config.php");
    extract($_POST);  

    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    
    $query="insert into materia values ('','$nombre_materia','$ciclo','$titulacion')";
            $resp=mysql_query($query) or die('error');


    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='materia.php'</script>";
 ?>