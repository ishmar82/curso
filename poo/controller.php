<?php 

	function consultarDB($query){
		$conexion = new PDO(
			'mysql:host=localhost; dbname=poo; charset=utf8mb4',
			'root',
			''
		);

		$stmt = $conexion->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function getAllUsers(){
		$allUsers[] = consultarDB(
					"SELECT * FROM usuario
					");
		$oneUserObject = [];
		// consultar la base de datos
		foreach ($allUsers as $oneUser) {
			$oneUserObject[] = new Usuario($nombre['nombre'], $email['email'], $contraseña['contraseña']);
		}
		return $oneUserObject;
		 
	}


	