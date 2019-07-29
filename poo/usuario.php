<?php 

/*include_once ("controller.php");*/

class Usuario {
	private $nombre;
	private $id;
	private $email;
	private $contraseña;
	private $celular;
	private $habilidades;
	

	public function __construct($nombre, $email, $contraseña){
		$this->nombre = $nombre;
		$this->email = $email;
		$this->setPass($contraseña);	

		
		
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		 $this->nombre=$nombre;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		 $this->id=$id;
	}

	public function getMail(){
		return $this->email;
	}

	public function setMail($email){
		 $this->email=$email;
	}

	public function getPass(){
		
		return $this->contraseña;
	}

	public function setPass($contraseña){
		$contraseña = $this->encriptarPass('contraseña');
		 $this->contraseña=$contraseña;
	}

	public function saludar(){
		return "Hola " . $this->nombre;
	}

	public function encriptarPass($contraseña){
		return $this->contraseña=password_hash($contraseña, PASSWORD_DEFAULT);
	}
	public function setCelular($celular){
		$this->celular=$celular;
	}

	public function getCelular(){
		return $this->celular;
	}

	/*public function mostrarTelefono(){
		$infoTelefono = [];
		$infoTelefono[] = $this->celular->getTel();
		$infoTelefono[] = $this->celular->getMarca();
		$infoTelefono[] = $this->celular->getModelo();
		$infoTelefono[] = $this->celular->getProveedor();
		return $infoTelefono;
	}*/

	public function mostrarTelefonoArray(){
		$infoTelefono = [ 
			'telefono' => $this->celular->getTel(),
			'marca' => $this->celular->getMarca(),
			'modelo' => $this->celular->getModelo(),
			'proveedor' => $this->celular->getProveedor(),
		];
		
		return $infoTelefono;
	}


	public function mostrarTelefono(){
		
		if ($this->celular->getMarca() == 'Apple') {
			return "El telefono es un " . $this->celular->getMarca() . " " . $this->celular->getModelo() .". <br> Y soy fan de los iphones";
		} return "El telefono es un " . $this->celular->getMarca() . " " . $this->celular->getModelo() .". <br> ";
	}

	public function llamar($user1, $tiempo, $user2){
		
		
		if ($user1->celular->getProveedor() == $user2->celular->getProveedor()) {
			return "Llamada Gratis";
		} 
		return $tiempo * 10;
		 
	}

	public function getHabilidades(){
		return $this->habilidades;
	}

	public function setHabilidad($habilidad){
		$this->habilidades[]=$habilidad;
	}


	public function sabeHacer(string $actividad, int $puntaje){
		foreach ($this->habilidades as $habilidad) {
			if ($habilidad->getNombre() == $actividad && $puntaje < $habilidad->getExpertise()) {
				return true;
			}	
		}
		return false;
	}

	/*public function guardar(){
		$allUsers[] = consultarDB(
					"SELECT * FROM usuario
					");
		// consultar la base de datos
		foreach ($allUsers as $oneUser) {
			if
		}
		// si el usuario  no tiene id es usuario nuevo
		// se insert sin problems

		// si el usuario ya tiene un id
		// update

	}*/

}
