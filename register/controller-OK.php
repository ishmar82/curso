<?php 
	session_start();



	function validateForm(){
		// Creo un array de errores vacío

		// Guardo lo que vino en post en la posición 'name'
		// Si lo que viene por post está vació Seteo en el array de errores  nueva posición con el error.


		// Paar email verigicar q es un formato valido

		// Chequear la longitud es inferior a 5 caracteres

		// Si $password y $rePassword son distintos

		// SI NO subieron un archivo. Luego revisar formato.

		// Retorno el array de errores

		$errores = [];

		$name = trim($_POST['name']);
		$user = trim($_POST['user']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);
		$repeatPass = trim($_POST['repeatPass']);
		$color = ($_POST['color']);
		$avatar = ($_FILES['avatar']);


		if (empty($name)) {
			$errores['name'] = "Falta tu nombre";
		} elseif (strlen($name) < 3) {
			$errores['name'] = "Tu nombre es muy corto.";
		}

		if (empty($user)) {
			$errores['user'] = "Falta tu nombre de usuario";
		} elseif (strlen($user) < 4) {
			$errores['user'] = "Tu usuario debe tener al menos 4 caracteres.";
		} elseif (userExist($user)){
			$errores['user'] = "Tu usuario ya está usado.";
		}

		if (empty($email)) {
			$errores['email'] = "Falta tu email";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
			$errores['email'] = "El mail ingresado no tiene un formato válido";
		} elseif (emailExist($email)){
			$errores['email'] = "El mail ya está registrado";
		}

		if (empty($pass)) {
			$errores['pass'] = "Falta agregar un password";
		} elseif (strlen($pass) < 5) {
			$errores['pass'] = "Tu constraseña es demasiado corta";
		} elseif (!preg_match('`[a-z]`',$pass)) {
			$errores['pass'] = "Tu constraseña debe tener al menos una letra minuscula";
		} elseif (!preg_match('`[A-Z]`',$pass)) {
			$errores['pass'] = "Tu constraseña debe tener al menos una letra mayuscula";
		} elseif (!preg_match('`[0-9]`',$pass)) {
			$errores['pass'] = "Tu constraseña debe tener al menos un caracter númerico";
		} 

		if (empty($repeatPass)) {
			$errores['repeatPass'] = "Falta repetir tu password";
		} elseif ( $repeatPass != $pass) {
			$errores['repeatPass'] = "Tus contraseñas no coinciden";
		}

		if (empty($color)) {
			$errores['color'] = "Elegí un color";
		}

		if ($avatar['error'] != UPLOAD_ERR_OK ){
			$errores['avatar'] = "Subí una imagen";
		} else {
			$extension = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg')  {
				$errores['avatar'] = "Subí archivo de imagen válido.";
			}
		}
 
		return $errores;
	}

	
	function saveUser(){
		$allUsers = getAllUsers();
		
		unset($_POST['repeatPass']);
		hashPass();
		
		$allUsers[] = $_POST;

		file_put_contents('data/users.json', json_encode($allUsers, JSON_PRETTY_PRINT));

	}


	function saveUserDb(){
		$name = trim($_POST['name']);
		$user = trim($_POST['user']);
		$email = trim($_POST['email']);
		$color = ($_POST['color']);
				
		unset($_POST['repeatPass']);
		$pass = hashPass();

		$img = saveImage($_FILES['avatar']);

		$_POST['avatarFinal'] = $img;

		$resultados = consultarDB(
			"INSERT INTO user (name, user, email, pass, color, avatarFinal) 
			VALUES ('$name', '$user', '$email', '$pass', '$color', '$img')");

		return $resultados;

	}

	function hashPass(){
		return $_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);

	}

	function getAllUsers() {
		return  json_decode(file_get_contents('data/users.json'), true);
	}

	function saveImage($file){
		// obtener nombre completo de la imagen para poder detectar extensión
		// obtener extensión de la img
		// armo nombre unico. 'uniqis' Armo rutal final donde va a ir el archivo. finalPath
		// obtengo el archivo termporal para detectarlo en el siguiente paso
		// subo archivo a destino final
		$name = $file['name'];
		$ext = pathinfo($name, PATHINFO_EXTENSION);

		$finalPath = 'data/avatar/' . uniqid('img-') . "." . $ext;

		$tempFile = $file['tmp_name'];
		move_uploaded_file($tempFile, $finalPath);
		//move_uploaded_file(filename, destination)
		return $finalPath;

	}

	function userExist($user){
		$allUsers = getAllUsers();

		foreach ($allUsers as $unUsuario) {
			if ($user == $unUsuario['user'] ) {
				return true;
			}
		}
	 	return false;
	}

	function emailExist($email){
		$allUsers = getAllUsers();

		foreach ($allUsers as $unUsuario) {
			if ($email == $unUsuario['email'] ) {
				return true;
			}
		}
		return false;
	}

	function validateLogin(){
		$errores = [];
		$user = trim($_POST['user']);
		$pass = trim($_POST['pass']);

		

		if (empty($user)){
			$errores['user'] = "Tiene que ingresar un usuario";

		} elseif (!userExist($user)) {
			$errores['user'] = "Este usuario no existe";
		} else {

			$theUser = getOneUser($user);

			if (!password_verify($pass, $theUser['pass']) ) {
				$errores['pass'] = 'Las contraseñsa no coinciden';
			}
		}

		if (empty($pass)) {
			$errores['pass'] = "Tiene que ingresar una contraseña";
		} 

		return $errores;

	}

	

	function getOneUser($user){
		$allUsers = getAllUsers();

		foreach ($allUsers as $oneUser) {
			if ($oneUser['user'] == $user) {
				return $oneUser;
			}
		}
		return false;
	}


	function login($user){
		$_SESSION['userLogged'] = $user;
		header('location:felicitaciones.php');
		exit;
	}

	function consultarDB($query){
		$conexion = new PDO(
			'mysql:host=localhost; dbname=register; charset=utf8mb4',
			'root',
			''
		);

		$stmt = $conexion->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

 ?>