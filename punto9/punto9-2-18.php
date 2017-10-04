<html>
<head>
</head>
<body>
<?php

  function verificarClaves($con1,$con2)
  {
    if ($con1!=$con2)
	  echo "Las contraseñas son distintas";
  }
  
  verificarClaves($_REQUEST['contra1'],$_REQUEST['contra2']);

?>
<h3>Se verifico la contraseña</h3>
</body>
</html>