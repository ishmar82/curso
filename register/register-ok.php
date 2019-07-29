<?php 

require_once 'controller.php';

$colores = [
 'white' => 'Default',
 'red' => 'Rojo',
 'blue' => 'Azul',
 'green' => 'Verde',
];

if (isset($_SESSION['userLogged'])) {
	header ('location: felicitaciones.php');
	exit;
}

if ($_POST) {
	
	/* 1.- meter en variables lo que viene por post y trimearlo 
	
	2.- declarar la variable de errores y cargarla

	3.- si variable de errores esta vacia, entonces
		3.1. // Guardar la imagen y obtener el nombre de la imagen
		3.2. Le asignamos a $_POST una posición "avatar"
		3.3. Guardo al usuario
		3.4. Header Location + Exit
		*/

	$name = trim($_POST['name']);
	$user = trim($_POST['user']);
	$email = trim($_POST['email']);
	$color = ($_POST['color']);

	$errores = validateForm();
	
	if (!$errores) {
		// Guardar la imagen y obtener el nombre de la imagen. Le asignamos a $_POST una posición "avatar"

		$img = saveImage($_FILES['avatar']);

		$_POST['avatarFinal'] = $img;

		saveUser();	

		header('location:login.php');
		exit;
	}

}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
		
	
		<form method="POST" enctype="multipart/form-data" class="col-8 m-5">
			<h2>Registrate</h2>
			<div class="form-group">
				<label for="name"> Nombre</label>
				<input type="text" name="name" id="name"  class="form-control <?= isset($errores['name']) ? 'btn-outline-danger' : ''; ?>" value="<?= isset($name) ? $name : ''; ?>">
				<?php if (isset($errores['name'])) : ?>
					<p class="text-danger"><?= $errores['name']; ?></p>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="user"> Usuario</label>
				<input type="text" name="user" id="user" class="form-control <?= isset($errores['user']) ? 'btn-outline-danger' : ''; ?>" value="<?= isset($user) ? $user : '';?> ">
				<?php if (isset($errores['user'])) : ?>
					<p class="text-danger"><?= $errores['user']; ?></p>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="email"> Email</label>
				<input type="text" name="email" id="email" class="form-control <?= isset($errores['email']) ? 'btn-outline-danger' : ''; ?>" value="<?= isset($email) ? $email : ''?> ">
				<?php if (isset($errores['email'])) : ?>
					<p class="text-danger"><?= $errores['email']; ?></p>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="pass"> Contraseña</label>
				<input type="text" name="pass" id="pass" class="form-control <?= isset($errores['pass']) ? 'btn-outline-danger' : ''; ?>">

				<?php if (isset($errores['pass'])) : ?>
					<p class="text-danger"><?= $errores['pass']; ?></p>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="repeatPass" > Repeat Contraseña</label>
				<input type="text" name="repeatPass" id="repeatPass" class="form-control <?= isset($errores['repeatPass']) ? 'btn-outline-danger' : ''; ?>">
				<?php if (isset($errores['repeatPass'])): ?>
					<p class="text-danger"><?= $errores['repeatPass']; ?></p>
				<?php endif ?>
			</div>

			<div class="form-group">
				<label for="color"> Selecciona un Color</label>
				<div>
					<select name="color" id="color">
						<option value="">Elegí un color</option>
						<?php foreach ($colores as $code => $unColor): ?>
						 <option value='<?= $code?>' <?= isset($color) && $code == $color ? 'selected' : '' ; ?>><?= $unColor?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<?php if (isset($errores['color'])) : ?>
					<p class="text-danger"><?= $errores['color']; ?></p>
				<?php endif; ?>

				
			</div>

			<div>
				<label for="avatar" >Selecciona un archivo:</label>
	          <div class="custom-file">
	            <input type="file" id="avatar" name="avatar" class="custom-file-input">
	            <label class="custom-file-label">Choose file...</label>
	          </div>
	          <?php if (isset($errores['avatar'])): ?>
	          	<p class="text-danger"><?= $errores['avatar']; ?></p>
	          <?php endif ?>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Enviar</button>
			</div>

		</form>
		
	
</body>
</html>