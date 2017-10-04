<html>
<head>
</head>
<body>

<?php


class Calculadora {
  public static function sumar($var1,$var2)
  {
    return $var1+$var2;
  }
  public static function restar($var1,$var2)
  {
    return $var1-$var2;
  }
  public static function multiplicar($var1,$var2)
  {
    return $var1*$var2;
  }
  public static function dividir($var1,$var2)
  {
    return $var1/$var2;
  }
}

$n1=3;
$n2=4;
echo "La suma de $n1 y $n2 es:".Calculadora::sumar($n1,$n2);
echo '<br>';
echo "La diferencia de $n1 y $n2 es:".Calculadora::restar($n1,$n2);
echo '<br>';
echo "La multiplicacion de $n1 y $n2 es:".Calculadora::multiplicar($n1,$n2);
echo '<br>';
echo "La division de $n1 y $n2 es:".Calculadora::dividir($n1,$n2);
?>

</body>
</html>
