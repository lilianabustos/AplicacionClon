<?php

//obtener variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//creamos la conexion
$conexion = new PDO('sqlite:favoritos.db');

//consulta
$consulta= "SELECT * FROM usuarios;";

//lanzar la consulta
$resultado= $conexion->query($consulta);

//repasar loos resultados
foreach ($resultado as $fila){
	$usuariobasedatos= $fila['usuario'];
	$contrasenabasedatos= $fila['contrasena'];

	if($usuario==$usuariobasedatos & $contrasena==$contrasenabasedatos){

       //si el resultado es positivo entonces asignar
     $_SESSION['usuario']=$usuario; 
     $_SESSION['contrasena']=$contrasena; 

     echo'
      <html>
          <head>
              <meta http-equiv= "REFRESH" content="0;url=principal.php">
          </head>
      </html>
     ';
	}else{
		//si el resultado es negativo, entonces nada
	}
}



//cerramos la bd
$conexion= Null;

?>