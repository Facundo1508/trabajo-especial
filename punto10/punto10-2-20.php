<html>
<head>
</head>
<body>
    
<?php
  $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
	
  mysqli_query($conexion,"insert into cursos(nombrecurso) values ('$_REQUEST[nombrecurso]')") or
    die("Problemas en el select".mysqli_error($conexion));
  
  mysqli_close($conexion);

  echo "Se cargo el nombre del curso exitosamente";
?>
    
</body>
</html>
