<?php
	/**
	* 
	*/
	class Libro
	{
		private  $isbn;
		private  $titulo;
		private  $autor;
		private  $pag;

		function __construct($isbn,$titulo,$autor,$pag)
		{
			$this->isbn=$isbn;
			$this->titulo=$titulo;
			$this->autor=$autor;
			$this->pag=$pag;
			
		}

		public function getIsbn()
	      {
	        return $this->isbn;
	      }
	     public function getTitulo()
	      {
	        return $this->titulo;
	      }
	     public function getAutor()
	      {
	        return $this->autor;
	      }
	     public function getPag()
	      {
	        return $this->pag;
	      }
	    public function setIsbn($isbn)
	      {
	        $this->isbn=$isbn;
	      }
	    public function setTitulo($titulo)
	      {
	        $this->titulo=$titulo;
	      }
	     public function setAutor($autor)
	      {
	        $this->autor=$autor;
	      }
	    public function setPag($pag)
	      {
	        $this->pag=$pag;
	      }
	}

	$toString = new Libro('666666','"Chocolate caliente para el alma de los jovenes"','Ines Hernadez L','800');
    echo 'El libro '.$toString->getTitulo().' con ISBN '.$toString->getIsbn().' del autor '.$toString->getAutor().' tiene '.$toString->getPag().' paginas.';
?>