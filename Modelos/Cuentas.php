<?php namespace Modelos;

class Cuentas {

	private $usuario;
	private $clave;

	function __construct($usuario = '', $clave = '')
	{
		$this->usuario = $usuario;
		$this->clave = $clave; 

	}

//getters

	public function getUsuario()	
	{
		return $this->usuario;
	}

	public function getClave()
	{
		return $this->clave;
	}

//setters

	public function setUsuario($usuario)	
	{
		$this->usuario = $usuario;
	}

	public function setClave($clave)	
	{
		$this->clave = $clave;
	}
}

?>