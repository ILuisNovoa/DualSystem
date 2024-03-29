<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Empire | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/joy.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background:#fff url('../images/loginback.jpg') no-repeat center center;
        background-size:100% 100%;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/images/fonde.png);">
						<div class="login100-form-title" style="background-image: url(assets/images/loginlogo.png);width: 320px;"></div>
				</div>
				<?php
						if(isset($error['errorMessage'])){
							?>
							<div class="alert alert-danger alert-dismissable alert-width" role="alert">
								<button class="close" data-dismiss="alert">&times;</button>
								<p class="text-dark"><?php echo $error['errorMessage'] ?></p>
							</div>	
							<?php
						}
						?>

				<form action="?controller=login&method=login" method="POST" class="login100-form validate-form ">

					


					<div class="wrap-input100 validate-input m-b-26" data-validate="Dato requerido">
						<span class="label-input100">Nombre de usuario</span>
						<input class="input100" type="text" name="nickname" placeholder="Escriba su apodo " value="<?php echo isset($error['errorMessage']) ? $error['nickname'] : '' ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Dato requerido">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Escriba su contraseña" value="<?php echo isset($error['errorMessage']) ? $error['nickname'] : '' ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="?controller=user&method=new" class="txt1">
								¿Aún no tienes cuenta? ¡Registrate!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Ingresar
						</button>
					</div>
					<div>
						<div>
							<a href="../EmpireGaming" class="txt1">
								Volver
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
	<script type="validar.js"></script>

</body>
</html>