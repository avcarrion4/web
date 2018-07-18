<?php
include("../dll/config.php");
include("../dll/mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  </script>
</head>
<body>
  <form method="post" action="test.php">
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Enter cedula">
    </div>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Enter codigo">
    </div>   
    <br><button >Entrar</button><br><br>
  </form>


  <footer>Pie de pagina</footer>
</body>
</html>



