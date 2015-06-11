<?php

session_start();
$_SESSION['usuario'] ="liliana";
$_SESSION['contrasena'] ="liliana";
  
echo'
<html>
   <head>
   <meta http-equiv="REFRESH"
   content = "0;url=principal.php">
   </head>
</html>

';  


?>