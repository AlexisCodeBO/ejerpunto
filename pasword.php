<?php 
Class Password{
	private $longitud;
	private $contrasena;

	//longitud 8
	public function __construct($longitud=8)// se pone por defecto el valor de longitud en 8
	{
      	$this->longitud=$longitud;
      
	}
	public function getlongitud(){
 		return $this->longitud;
		
	}
	public function getcontrasena(){
		return $this->contrasena;
	}
	public function setlongitud($sl)
	{
		return $this->longitud=$sl;
	}
	
	public function generarpass(){
		for($i=1; $i<=$this->longitud;$i++){

			$opc=rand(1,3);
			switch($opc){
				case 1: 
					$this->contrasena.=chr(rand(65,90));
					break;
				case 2:
					$this->contrasena.=chr(rand(97,122));
					break;
				case 3:
					$this->contrasena.=chr(rand(48,57));
					break;
				
			}
		}
	}
	public function toString(){
		return $this->contrasena;
	}
	public function esFuerte(){
		if (preg_match("/^.*(?=.[0-9]{5})(?=.*\d)(?=.*[a-z]{1})(?=.*[A-Z]{2}).*$/", $this->contrasena)) 
   		echo " No es fuerte"; 
		 
		else 
    	echo " Es fuerte"; 
	  
	}
}

	$pass1 = new Password(12);
	echo $pass1->generarpass();
	echo $pass1->toString();
	echo $pass1->esFuerte();
 ?>
