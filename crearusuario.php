<?php
session_start();
//contador: para decidir cuando se ha producido una coincidencia
$contador=0;

//obtendre las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

//comprobar si el susuario existe conectandome a la bd
//conexion
$conexion = new PDO('sqlite:favoritos.db');

$consulta= "SELECT * FROM usuarios";

$resultado = $conexion->query($consulta);

foreach ($resultado as $fila){
	if($fila['usuario']==$usuario){
		
		$contador ++;
	}else{
		

	}

}
$conexion= Null;

if($contador == 0){
//conexion
$conexion = new PDO('sqlite:favoritos.db');
//consulta
/*LOS PRIVILEGIOS SON LOS SIGUIENTES:
1.Administrador
2.Controlador
3.Usuario registrado
4.Usuario invitado
*/
$consulta= "INSERT INTO usuarios VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad',3)";
echo $consulta;
//ejecutar
$resultado = $conexion->exec($consulta);

//cerrar
$conexion= Null;

 echo '
 <html>
    <head>
         <meta http-equiv= "REFRESH" content="0;url=gestionusuarios.php">
      </head>
 </html>
 ';

}else{echo "El nombre de Usuario que has elegido YA EXISTE, Vuelve a Intentarlo";}
?>