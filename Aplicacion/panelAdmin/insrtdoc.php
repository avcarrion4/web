<?php
   include("../dll/mysql.php");
    include("../dll/config.php");
    extract($_POST);  

    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    
    $query="insert into docente values ('','$nombre_docente','$nombre2_docente','$apellido_docente','$apellido2_docente','$cedula_docente','$telefono_docente','$correo_docente','$titulo','$pass','$id_a','$id_t')";
            $resp=mysql_query($query) or die('error');


    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='doc.php'</script>";
 ?>