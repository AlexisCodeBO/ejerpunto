<?php 
Class Libro{
	private  $ISBN, $Titulo, $Autor, $Numeropaginas;

	public function __construct($ISBN, $Titulo, $Autor, $Numeropaginas)
	{
		$this->ISBN=$ISBN;
		$this->Titulo=$Titulo;
		$this->Autor=$Autor;
		$this->Numeropaginas=$Numeropaginas;
	}
	public function getISBN(){
		return $this->ISBN;
	}
	public function getTitulo(){
		return $this->Titulo;
	}
	public function getAutor(){
		return $this->Autor;
	}
	public function getpaginas(){
		return $this->Numeropaginas;
	}
	public function setisbn($sisbn){
		$this->ISBN= $sisbn;

	}
	public function settitulo($stitulo){
 			$this->Titulo=$stitulo;
 	
	}
	public function setAutor($sautor){  
        	$this->Autor=$sautor;
	}
	public function setPag($spag){
			$this->Numeropaginas=$spag;
	}
	public function toString(){
		return 'El libro '. $this->Titulo.' con ISBN '.$this->ISBN.' Creado por el autor '.$this->Autor.' tiene '.$this->Numeropaginas;
	}
}

	$ejemplo=new Libro('1591512312','la iliada', 'homero','50');
	echo $ejemplo->toString();
 ?>