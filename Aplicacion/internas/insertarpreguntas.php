<?php 

  include("../dll/config.php");
  include("../dll/mysql.php");
  extract($_POST);

    $sql = "select id_prueba from prueba where codigo_prueba ='$codigo_prueba'";
    
    $resultado=mysql_query($sql) or die ('error de id max');
    if ($res = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
    $hola= $res['id_prueba']; 
    }
    
    $query1 = "insert into pregunta values('','$titulo_pregunta','$hola')";
    
    $result1=mysql_query($query1) or die ('error de sql pregunta');

    $sql1 = "select id_pregunta from pregunta where titulo_pregunta ='$titulo_pregunta'";
    
    $resultado1=mysql_query($sql1) or die ('error de id max');
    if ($res1 = mysql_fetch_array($resultado1, MYSQL_ASSOC)) {
    $hola1= $res1['id_pregunta']; 
    }

    $query2 = "insert into respuesta values ('', '$opcion_respuesta1', '$verificacionA', '$hola1')";
    $result2=mysql_query($query2) or die ('error de sql');

    $query3 = "insert into respuesta values ('', '$opcion_respuesta2', '$verificacionB', '$hola1')";
    $result3=mysql_query($query3) or die ('error de sql');

    $query4 = "insert into respuesta values ('', '$opcion_respuesta3', '$verificacionC', '$hola1')";
    $result4=mysql_query($query4) or die ('error de sql');


    echo '<script>alert("Datos guardados")</script>';
    echo "<script>location.href='gestion_docente.php'</script>";
 ?>