<?php



	class Cuenta
	{
		private  $titular;
		private  $cantidad;


		function __construct($titular,$cantidad=0)
		{
			$this->titular=$titular;
			$this->cantidad=$cantidad;

		}
		public function getTitular()
		{
			return $this->titular;
		}
		public function getCantidad()
		{
			return $this->cantidad;
		}

		public function setTitular($titular)
		{
			$this->titular=$titular;
		}
		public function setCantidad($cantidad)
		{
			$this->cantidad=$cantidad;
		}

		public function ingresar($monto)
		{
			if($this->monto >= 0){

	     		$this->cantidad+=monto; 
				return $this;
			}
			else
				echo 'La cantidad no puede ser negativa';
		}
		public function retirar()
		{
			# codi...
		}
	}
	$toString = new Cuenta('Maria','4000');
	$toString->ingresar(1500);
?>
