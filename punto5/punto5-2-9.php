<html>
<head>
</head>
<body>

<?php
  echo $_REQUEST['nombre'];
  echo "<br>";
  if ($_REQUEST['edad']>=18)
  {
    echo "Es mayor";
  }
  else
  {
    echo "Es menor";
  }
?>

</body>
</html>

