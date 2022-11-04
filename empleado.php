<?php 
Class empleado{
	 
	private $CI, $nombre, $appaterno, $apmaterno, $sueldo;

	public function __construct($CI, $nombre,$appaterno, $apmaterno,$sueldo){
		$this->CI= $CI;
		$this->nombre=$nombre;
		$this->appaterno=$appaterno;
		$this->apmaterno=$apmaterno;
		$this->sueldo=$sueldo;

	}

	public function getCI(){
		return $this->CI;
	}
	public function getnombre(){
		return $this->nombre;
	}
	public function getapellidopaterno(){
		return $this->appaterno;
	}
	public function getapellidomaterno(){
		return $this->apmaterno;
	}
	public function getsueldo(){
		return $this->sueldo;
	}
	public function setCI($cs){
		return $this->CI=$cs;
	}
	public function setnombre($snom)
	{
		return $this->nombre=$snom;
	}
	public function setappat($sap){
		return $this->appaterno=$sap;
	}
	public function setapmat($sam){
		return $this->apmaterno=$sam;
	}
	public function setsueldo($ss){
		return $this->sueldo=$ss;
	}
	public function toString(){
       	echo 'Datos del Empleado:'.'<br>';
	     	echo "CI: ".$this->CI.'<br>';
	     	echo "Nombre: ".$this->nombre.'<br>';
	     	echo "Apellido Paterno: ".$this->appaterno.'<br>';
	     	echo "Apellido Materno: ".$this->apmaterno.'<br>';
	     	echo "Sueldo: ".$this->sueldo.'<br>';
	     	
       	
	}
	public function comprobar(){
		if($this->sueldo >= 6000)
	     		echo 'Es que paga impuestos';
	     	else 
	     		echo 'No paga impuestos';
			
		
	}
}
	$ejemplo=new empleado('9568412','Mario','Gonzales','Marin','5000');
	echo $ejemplo->toString().' ';
	echo $ejemplo->comprobar();
 ?>
