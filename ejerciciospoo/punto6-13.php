<html>
<head>
</head>
<body>
<?php
class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function imprimir()
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
  public function imprimir()
  {
    parent::imprimir();
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona();
$persona1->cargarDatosPersonales('Facundo',22);
echo 'Datos personales:<br>';
$persona1->imprimir();
$empleado1=New Empleado();
$empleado1->cargarDatosPersonales('Facundo Contreras',22);
$empleado1->cargarSueldo(22400);
echo 'Datos personales y sueldo:<br>';
$empleado1->imprimir();
?>
</body>
</html>