<?php
   include("../dll/mysql.php");
    include("../dll/config.php");
    extract($_POST);  

    
echo $id_discapacidad;
    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    
    $query="insert into alumno values ('','$nombre_alumno','$nombre2_alumno','$apellido_alumno','$apellido2_alumno','$cedula_alumno','$telefono_alumno','$correo_alumno','$edad_alumno','$porcentaje_discapacidad','$id_discapacidad')";
            $resp=mysql_query($query) or die('error');
    echo $query;

    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='panel.php'</script>";
 ?>