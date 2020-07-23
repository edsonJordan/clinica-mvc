<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/main.css">
</head>
<body class="hover"  style="background-image: url(<?php  echo RUTA_URL; ?>/img/fondo.jpg)
;background-repeat: no-repeat;
  background-size: 100% 100%;" >
	<form  method="POST" autocomplete="off" class="full-box logInForm" action="<?php echo RUTA_URL;?>/login">
		<p class="text-center"><i style=" " class="zmdi zmdi-hospital zmdi-hc-5x"></i></p>
		<p class="text-center text-uppercase">Clinica ****</p>
		<div class="form-group label-floating">
		  <label class="control-label" style="color :white" for="UserEmail">E-mail</label>
		  <input class="form-control"   name="correo" id="UserEmail" type="email" required>
          <p class="help-block" >Escribe tú E-mail</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" style="color :white" for="UserPass">Contraseña</label>
		  <input class="form-control"  name="pass" id="UserPass" type="password" required>
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" style="background: #2E838C; color:white;" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
		<div>
		<label>No tienes cuenta? <a style="color: red;  " href="<?php echo RUTA_URL; ?>login/agregar "><b>Registrate</b></a></label>
		</div>
       </form>
	<!--====== Scripts -->
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/material.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/ripples.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/sweetalert2.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/main.js"></script>
    <script>
		$.material.init();
	</script>
</body>


<footer>

</footer>
</html>