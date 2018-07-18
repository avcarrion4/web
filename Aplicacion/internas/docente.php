<!DOCTYPE html>
<html>
<head>
	<title>Docente</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form">
	      <input type="text" placeholder="name"/>
	      <input type="password" placeholder="password"/>
	      <input type="text" placeholder="email address"/>
	      <button>create</button>
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <form class="login-form">
	      <label>Correo</label>
	      <input type="text" placeholder="correo"/>
	      <label >Contraseña</label>	      
	      <input type="password" placeholder="password"/>
	      <button>login</button>
	      
	    </form>
	  </div>
	</div>
	


	<footer>Pie de pagina</footer>
	<script type="text/javascript">
		$('.message a').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>