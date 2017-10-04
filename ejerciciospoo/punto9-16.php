<html>
<head>
</head>
<body>
    
<?php

abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom)
  {
    $this->nombre=$nom;
  }
  public function imprimir()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
  public abstract function calcularSueldo();
}  

class Empleado extends Trabajador {
  protected $horasTrabajadas;
  protected $valorHora;
  public function __construct($nom,$horas,$valor)
  {
    parent::__construct($nom);
    $this->horasTrabajadas=$horas;
    $this->valorHora=$valor;
  }
  public function calcularSueldo()
  {
    $this->sueldo=$this->horasTrabajadas*$this->valorHora;
  }
}

class Gerente extends Trabajador {
  protected $utilidades;
  public function __construct($nom,$uti)
  {
    parent::__construct($nom);
    $this->utilidades=$uti;
  }
  public function calcularSueldo()
  {
    $this->sueldo=$this->utilidades*0.10;
  }
}

$empleado1=new Empleado('Facundo Contreras',12,300);
$empleado1->calcularSueldo();
echo 'El sueldo del empleado<br>';
$empleado1->imprimir();

$gerente1=new Gerente('Facundo Contreras',120000);
$gerente1->calcularSueldo();
echo 'El sueldo del gerente<br>';
$gerente1->imprimir();
?>
</body>
</html>

