<?php
	


	class Punto
	{
		public $x=12;
		public $y=5;
		public $cordenadas;
		public $distancia;
		public $angulo;


		function __construct($x,$y)
		{
			$this->x=$x;
			$this->y=$y;
		}
		public function getx()
	      {
	        return $this->x;
	      }
	     public function gety()
	      {
	        return $this->y;
	      }
	    public function setx($x)
	      {
	        $this->x=$x;
	      }
	    public function sety($y)
	      {
	        $this->y=$y;
	      }
	    public function getdistancia(){
	    	$res=pow($this->x,2)+pow($this->y,2);
	    	$this->distancia=sqrt($res);
	    	return $this->distancia;
	    }
	    public function getangulo(){
	    	$res=$this->y/$this->x;
	    	$r=atan($res);
	    	$this->angulo=rad2deg($r);
	    	return $this->angulo;
	    }
	    
	}
	$p=new Punto(12,5);
	echo 'radio '.$p->getdistancia().'<br>';
	echo 'angulo '.$p->getangulo();
?>