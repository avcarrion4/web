
     <?php
    include("../dll/mysql.php");
include("../dll/config.php");


   extract($_POST);

    echo $ide;
    
   $query = "UPDATE alumno SET nombre_alumno='$nombre_alumno',nombre2_alumno='$nombre2_alumno',apellido_alumno='$apellido_alumno',apellido2_alumno='$apellido2_alumno',cedula_alumno='$cedula_alumno',telefono_alumno='$telefono_alumno',correo_alumno='$correo_alumno',edad_alumno='$edad_alumno',porcentaje_discapacidad='$porcentaje_discapacidad',id_discapacidad='$id_discapacidad' WHERE id_alumno='$ide'";  

 





    
    $result=mysql_query($query) or die ('error de sql');
    echo $query;
    
    echo '<script>alert("Datos guardados")</script>';
       echo "<script>location.href='panel.php'</script>";


 



 ?>