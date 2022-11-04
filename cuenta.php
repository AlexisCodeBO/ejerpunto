<?php 
Class Cuenta{
	private  $Titular, $Cantidad;


	public function __construct($Titular, $Cantidad){
		$this->Titular=$Titular;
		$this->Cantidad=$Cantidad;

	}
	public function getTitular()
	{
		return $this->Titular;
	}
	public function getcantidad()
	{
		return $this->Cantidad;
	}
	public function setTitular($st){
		return $this->Titular=$st;
	}
	public function setcantidad($sc){
		return $this->Cantidad=$sc;
		
	}
	public function toString(){
		return $this->Titular.' '.$this->Cantidad;
	}
	public function ingresar(){
		if($this->Cantidad<0)
		{
			return true;
		}
		else
		{
 			return $this->Cantidad;
		}
	}
	public function retirar($valor)
	{
		$total=$this->Cantidad-$valor;

		if($total<0){
			$total=0;
			return $total;
		}
		else
		{
			return $total;
		}
	}

}
	$c_1=new Cuenta('Antonio Tirado Coli',150);
	echo $c_1->ToString().' ';
	echo 'Se ingresó: '.$c_1->ingresar();
	echo ' La cantidad total es: '.$c_1->retirar(100);
	//echo 'La cantidad total es: '.$c_1->retirar(20);
 ?>
