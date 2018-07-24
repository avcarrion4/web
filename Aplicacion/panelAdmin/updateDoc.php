
     <?php
    include("../dll/mysql.php");
include("../dll/config.php");


   extract($_POST);

    echo $ide;



   $query = "UPDATE docente SET nombre_docente='$nombre_docente',nombre2_docente='$nombre2_docente',apellido_docente='$apellido_docente',apellido2_docente='$apellido2_docente',cedula_docente='$cedula_docente',telefono_docente='$telefono_docente',correo_docente='$correo_docente',docente_pass='$pass',titulo_docente='$titulo' WHERE id_docente='$ide'"; 


      



    
    $result=mysql_query($query) or die ('error de sql');
    echo $query;
    
    echo '<script>alert("Datos guardados")</script>';
       echo "<script>location.href='doc.php'</script>";



 ?>