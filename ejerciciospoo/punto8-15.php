<html>
<head>
</head>
<body>
    
<?php
abstract class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nom,$ed)
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
  public function cargarSueldo($su)
  {
    $this->sueldo=$su;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$empleado1=New Empleado();
$empleado1->cargarDatosPersonales('Facundo Contreras',22);
$empleado1->cargarSueldo(123123);
echo 'Datos personales y sueldo:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>
