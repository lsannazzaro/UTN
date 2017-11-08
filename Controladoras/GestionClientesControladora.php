<?php namespace Controladoras;

class GestionClientesControladora{

	private $datosCliente;
  
   
    function __construct(){

    	$this->datosCliente = \Daos\ClientesDaos::getInstancia();
    	
    }

		public function Nuevo($nombre,$domicilio,$telefono,$email)	{
		
		$Nuevo = new \Modelos\Clientes($nombre,$domicilio,$telefono,$email); //Creo un Objeto de tipo Cliente
		$Nuevo->setRol('cliente');
		$this->datosCliente->Insertar($Nuevo);
		$listadoC = $this->datosCliente->traerTodos();
		//$_SESSION["ListaCerveza"] = $ListaCerveza;
	
	}