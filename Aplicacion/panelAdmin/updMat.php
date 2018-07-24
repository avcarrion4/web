
     <?php
    include("../dll/mysql.php");
include("../dll/config.php");


   extract($_POST);

    echo $ide;



   $query = "UPDATE materia SET nombre_materia='$nombre_materia',ciclo='$ciclo',id_titulacion='$titulacion' WHERE id_materia='$ide'"; 


      



    
    $result=mysql_query($query) or die ('error de sql');
    echo $query;
    
    echo '<script>alert("Datos guardados")</script>';
       echo "<script>location.href='materia.php'</script>";



 ?>