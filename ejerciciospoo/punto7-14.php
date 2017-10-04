<html>
<head>
</head>
<body>
<?php
class Persona {
  protected $nombre;
  protected $edad;
  public function __construct($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function imprimirDatosPersonales()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function __construct($nom,$ed,$su)
  {
    parent::__construct($nom,$ed);
    $this->sueldo=$su;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona('Facundo Contreras',22);
echo 'Datos personales:<br>';
$persona1->imprimirDatosPersonales();
$empleado1=New Empleado('Facundo Contreras',22,211400);
echo 'Datos personales y sueldo:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>