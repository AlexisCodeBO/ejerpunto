<?php
	/**
	 * 
	 */
	 class Automovil 
	 {
	 	
	 	private $marca;
	 	public $color;
	 	public $tanque=0;
	 	public function __construct($marca,$color)
	 	{
	 		$this->marca=$marca;
	 		$this->color=$color;
	 	}
	 	public function llenar($valor)
	 	{
	 		$this->tanque+=$valor;
	 		echo __METHOD__;
	 		return $this;
	 	}
	 	public function avanzar($valor)
	 	{
	 		$consumo = 5*$valor/100;
	 		$this->tanque-=$consumo;
	 		return $this;
	 	}
	 	public function getMarca()
	 	{
	 		return $this->marca;
	 	}
	 	public function setMarca($valor)
	 	{
	 		$lista = array('toyota','nissan','bmw');
	 		if (in_array($valor,$lista)) {
	 			$this->marca=$valor;
	 		}
	 		else
	 		{
	 			$this->marca=null;	
	 		}
	 		
	 	}	 	
	 } 

	 $car = new Automovil('toyota','azul');
	 //$car->setMarca("mazda");
	 echo 'tanque '.$car->llenar(10)->avanzar(40)->tanque.'<br>';
	 echo 'marca '.$car->getMarca().'<br>';
	 echo 'color '.$car->color.'<br>';
 ?>