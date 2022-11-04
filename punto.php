<?php 
class Punto{
	public $x;
	public $y;
	public $termino1;
	public $termino2;
	public $suma;

	public function __construct($x, $y)
	{
		$this->x=$x;
		$this->y=$y;
	}
	public function getx(){
		return $this->x;
	}
	public function gety(){
		return $this->y;
	}
	public function setx($x){
		$this->x=$x;
	}
	public function sety($y){
		$this->y=$y;
	}
	public function getangulo(){
		$res= $this->y/$this->x;
	    $r=atan($res);
	    $this->angulo=rad2deg($r);
	    return $this->angulo;
	}
	public function setradio(){
		$res=pow($this->x,2)+pow($this->y,2);
	    $this->distancia=sqrt($res);
		return $this->distancia;

	}


}
	$ejemplo=new Punto(12,5);
	echo 'ángulo '.$ejemplo->getangulo().'<br>';
	echo 'radio '.$ejemplo->setradio();





 ?>