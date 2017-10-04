
<html>
<head>

</head>
<body>
<?php
abstract class Persona {
  protected $nombre;
  protected $edad;
  public function cargarDatosPersonales($nom,$eda)
  {
    $this->nombre=$nom;
    $this->edad=$eda;
  }
  public function imprimirDatosPersonales()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}
class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($sue)
  {
    $this->sueldo=$sue;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}
$empleado1=New Empleado();
$empleado1->cargarDatosPersonales('Facundo',22);
$empleado1->cargarSueldo(1000000);
echo 'Datos y sueldo:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>