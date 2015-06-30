<?php

session_start();
/*
$_SESSION['usuario'] ="liliana";
$_SESSION['contrasena'] ="liliana";
  */

//si esta configurada la variable de session con el nombre usuario en ese caso ejecuta un codigo

if(isset($_SESSION['usuario'])){

echo'
<html>
   <head>
   <meta http-equiv="REFRESH"
   content = "0;url=principal.php">
   </head>
</html>

';	

}

else{
	
	echo'
<html>
   <head>
   <meta http-equiv="REFRESH"
   content = "0;url=formulariologin.php">
   </head>
</html>

';
}
  


?>