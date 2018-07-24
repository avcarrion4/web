<?php
   include("../dll/mysql.php");
    include("../dll/config.php");
    extract($_POST);  

$aa=$_REQUEST['ide'];
$aa;
echo $aa;
    /////////////////////////////////////////////////////////////////////////////////////
    

    ////////////// insertar ///////////////
    
    $query="insert into docente_paralelo values ('','$ide','$nombre_paralelo')";
            $resp=mysql_query($query) or die('error');


    echo '<script>alert("Datos guardados")</script>';
     echo "<script>location.href='agPruebas.php'</script>";
 ?>



