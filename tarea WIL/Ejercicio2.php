<?php
	/**
	* 
	*/
	class Libro
	{
		public $ISBN;
		public $Titulo;
		public $Autor;
		public $NúmeroDePáginas;
		public $ToString;


		function __construct($ISBN,$Titulo,$Autor,$NúmeroDePáginas)
		{
			$this->ISBN=$ISBN;
			$this->Titulo=$Titulo;
			$this->Autor=$Autor;
			$this->NúmeroDePáginas=$NúmeroDePáginas;
		}
		public function getISBN()
	      {
	        return $this->ISBN;
	      }
	    public function getTitulo()
	      {
	        return $this->Titulo;
	      }
	    public function getAutor()
	      {
	        return $this->Autor;
	      }
	    public function getNúmeroDePáginas()
	      {
	        return $this->NúmeroDePáginas;
	      }
	    public function setISBN($ISBN)
	      {
	        $this->ISBN=$ISBN;
	      }
	    public function setTitulo($Titulo)
	      {
	        $this->Titulo=$Titulo;
	      }
	    public function setAutor($Autor)
	      {
	        $this->Autor=$Autor;
	      }
	    public function setNúmeroDePáginas($NúmeroDePáginas)
	      {
	        $this->NúmeroDePáginas=$NúmeroDePáginas;
	      }
	    public function toString(){
	    	$this->ToString=$this->ISBN." ".$this->Titulo." ".$this->Autor." ".$this->NúmeroDePáginas;
	    	return $this->ToString;
	    }

	}

	$p=new Libro('hola','bola','ja','jo');
	echo $p->toString();
?>