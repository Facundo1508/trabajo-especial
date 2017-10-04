<html>
<head>

</head>
<body>
<?php
class Tabla {
  private $mat=array();
  private $colorFuente=array();
  private $colorFondo=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor,$cfue,$cfon)
  {
    $this->mat[$fila][$columna]=$valor;
    $this->colorFuente[$fila][$columna]=$cfue;
    $this->colorFondo[$fila][$columna]=$cfon;
  }

  public function inicioTabla()
  {
    echo '<table border="1">';
  }

  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo '<td style="color:'.$this->colorFuente[$fi][$co].';background-color:'.$this->colorFondo[$fi][$co].'">'.$this->mat[$fi][$co].'</td>';
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
         $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(10,3);
$tabla1->cargar(1,1,"soy","#000000","#fff");
$tabla1->cargar(1,2,"el","#000000","#fff");
$tabla1->cargar(1,3,"titulo","#000000","#fff");
for($f=2;$f<=10;$f++)
{
  $tabla1->cargar($f,1,"1","#000000","#fff");
  $tabla1->cargar($f,2,"2","#000000","#fff");
  $tabla1->cargar($f,3,"3","#000000","#fff");
}
$tabla1->graficar();
?>
</body>
</html>