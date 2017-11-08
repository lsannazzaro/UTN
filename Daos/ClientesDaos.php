<?php namespace Daos;

use \Daos\Conexion as Conexion;

class ClientesDaos extends Conexion implements IDAOS{
	
	protected $tabla = "Clientes";
	Private $ListaClientes = array();

	function __construct(){
	}

	public function insertar($Objeto){

		$Nombre = $Objeto->getNombre();
		$Domicilio= $Objeto->getDomicilio();		
		$Telefono = $Objeto->getTelefono();
		$Email = $Objeto->getEmail();
		$sql = "INSERT INTO $this->tabla  (Nombre, Domicilio,Telefono, Email)  VALUES ('$Nombre', '$Domicilio', '$Telefono', '$Email')";	
		//echo $sql;
		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();
	}
}

?>