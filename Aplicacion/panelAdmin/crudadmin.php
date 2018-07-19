<?php
    include("dll/config.php");
    include("dll/con.php");
    extract($_POST);  

    echo $ide;
    $query = "UPDATE docente SET nombre_docente='$nombre', apellido_docente='$apellido' , cedula_docente='$cedula' ,telefono_docente='$telefono', correo_docente='$correo', titulo_docente='$titulo' WHERE id_docente='$ide'";  
    
    $result=mysqli_query($link,$query) or die ('error de sql');
    echo $query;
    
    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='docente.php'</script>";
    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    



 ?>