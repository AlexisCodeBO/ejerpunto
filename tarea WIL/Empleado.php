<?php
	


	class Empleado
	{
		private  $ci;
		private  $nombre;
		private  $paterno;
		private  $materno;
		private  $sueldo;

		function __construct($ci,$nombre,$paterno,$materno,$sueldo)
		{
			$this->ci=$ci;
			$this->nombre=$nombre;
			$this->paterno=$paterno;
			$this->materno=$materno;
			$this->sueldo=$sueldo;
			
		}

		public function getCi()
	      {
	        return $this->ci;
	      }
	     public function getNombre()
	      {
	        return $this->nombre;
	      }
	     public function getPaterno()
	      {
	        return $this->paterno;
	      }
	     public function getMaterno()
	      {
	        return $this->materno;
	      }
	     public function getSueldo()
	      {
	        return $this->sueldo;
	      }
	    public function setCi($ci)
	      {
	        $this->ci=$ci;
	      }
	    public function setNombre($nombre)
	      {
	        $this->nombre=$nombre;
	      }
	     public function setPaterno($paterno)
	      {
	        $this->paterno=$paterno;
	      }
	    public function setMaterno($materno)
	      {
	        $this->materno=$materno;
	      }
	    public function setSueldo($sueldo)
	      {
	        $this->sueldo=$sueldo;
	      }
	    public function Imprimir()
	     {
	     	echo 'Datos de Empleado:'.'<br>';
	     	echo "CI: ".$this->ci.'<br>';
	     	echo "Nombre: ".$this->nombre.'<br>';
	     	echo "Apellido Paterno: ".$this->paterno.'<br>';
	     	echo "Apellido Materno: ".$this->materno.'<br>';
	     	echo "Sueldo: ".$this->sueldo.'<br>';
	     	if($this->sueldo >= 6000)
	     		echo 'Paga impuestos';
	     	else 
	     		echo 'No paga impuestos';

	     }
	}

	$toString = new Empleado('123456','Ines','Hernadez',' Lazo','18000');
    $toString->Imprimir();
?>