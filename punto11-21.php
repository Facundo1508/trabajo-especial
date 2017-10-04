<html>
<head>
</head>
<body>

<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo,nombrecurso from cursos") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "Codigo: ".$reg['codigo']."<br>";
  echo "Nombre del curso: ".$reg['nombrecurso']."<br>";
}

mysqli_close($conexion);
?>

</body>
</html>
