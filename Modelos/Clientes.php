<?php namespace Modelos;

class Clientes{

	
	protected $id;
	protected $nombre;
    protected $domicilio;
	protected $telefono;
	protected $email;


	public function __construct($nombre = '', $domicilio = '', $telefono ='', $email ='')
	{	 
        $this->nombre = $nombre;
		$this->domicilio = $domicilio;
		$this->telefono = $telefono;
		$this->email = $email;
	}


	public function getId(){
		return $this->id;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getDomicilio(){
		return $this->domicilio;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getEmail(){
		return $this->email;
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setNombre($nombre){
        $this->nombre=$nombre;
    }
   	public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function setEmail($email){
        $this->email=$email;
    }