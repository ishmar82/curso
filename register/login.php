<?php 
require_once 'controller.php';

if (isset($_SESSION['userLogged'])) {
	header ('location: felicitaciones.php');
	exit;
}


if ($_POST) {
	$user = trim($_POST['user']);
	$pass = trim($_POST['pass']);

	getUserDb($user);
	
	$errores = validateLogin();

	if (!$errores) {

		$userToLogin = getOneUserDb($user);
		
		login($userToLogin);
		
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<div class="col-8">
		<h2>Bienvenido Fulanito</h2>
		<h3>Ingresá a tu perfil</h3>
		<!--<?php echo "<pre>"; ?>
		<?php  var_dump($oneUser[0]['email']);?>
		<?php echo "</pre>"; ?>-->
		<form action="" method="POST">
			<div class="form-group">
				<label for="user">Usuario</label>
				<input type="text" id="user" name="user" class="form-control" value="<?= isset($user)? $user : ''?>">
				<?php if (isset($errores['user'])): ?>
					<p class="text-danger"><?= $errores['user']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group">
				<label for="pass">Contraseña</label>
				<input  id="pass" name="pass" class="form-control">
				<?php if (isset($errores['pass'])): ?>
					<p class="text-danger"><?= $errores['pass']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">enviar</button>
			</div>
		</form>

	</div>
	
</body>
</html>