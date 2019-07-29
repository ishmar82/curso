<?php 

/**
 * 
 */
class Celular
{
	private $marca;
	private $modelo;
	private $proveedor;
	private $tel;
	
	public function __construct($tel, $marca, $modelo, $proveedor)	{
		$this->tel=$tel;
		$this->marca=$marca;
		$this->modelo=$modelo;
		$this->proveedor=$proveedor;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		return $this->marca=$marca;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		return $this->modelo=$modelo;
	}

	public function getProveedor(){
		return $this->proveedor;
	}

	public function setProveedor($proveedor){
		return $this->marca=$proveedor;
	}

	public function getTel(){
		return $this->tel;
	}

	public function setTel($tel){
		return $this->tel=$tel;
	}

	
}

 