<html>
<head>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  private function mostrarHorizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo " - ";
    }
  }
  private function mostrarVertical()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "<br>";
    }
  }
  
  public function mostrar($orientacion)
  {
    if (strtolower($orientacion)=="horizontal")
      $this->mostrarHorizontal();
    if (strtolower($orientacion)=="vertical")
      $this->mostrarVertical();
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.losandes.com.ar','Los Andes Diario');
$menu1->cargarOpcion('http://www.diariouno.com.ar','Diario UNO');
$menu1->cargarOpcion('http://www.mdzol.com','MDZ Online');
$menu1->mostrar("horizontal");
echo '<br>';
$menu2=new Menu();
$menu2->cargarOpcion('http://www.google.com','Google');
$menu2->cargarOpcion('http://www.facebook.com','FB');
$menu2->cargarOpcion('http://www.twitter.com','Twitter');
$menu2->mostrar("vertical");
?>
</body>
</html>

