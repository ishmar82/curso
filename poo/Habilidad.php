<?php 

/**
 * 
 */
class Habilidad {

	private $nombre;
	private $expertise;
	
	function __construct($nombre, int $expertise)
	{
		$this->nombre = $nombre;
		$error = "Expertise debe estar entre 0 y 5";
		if ($expertise >= 5 || $expertise <= 0) {
			
			return $this->expertise = $error;
			
		} 
		return $this->expertise = $expertise;

		
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getExpertise(){
		return $this->expertise;
	}

	public function setExpertise($expertise){
		if ($expertise >= 5 || $expertise <= 0) {
			
			return $this->expertise = "Expertise debe estar entre 0 y 5";
			
		} 
		return $this->expertise = $expertise;
	}




}
