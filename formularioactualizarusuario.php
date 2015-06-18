<?php

session_start();


//recupero variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$usuario= $_GET['usuario'];
$contrasena= $_GET['contrasena'];
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$edad= $_GET['edad'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

//me falta cuadrar esta consulta para filtrarla
  // $consulta= "SELECT * FROM usuarios WHERE usuario='".$usuario."'AND contrasena='".$contrasena."'AND nombre='".$nombre."'AND apellido='".$apellido."'AND edad='".$edad."";
 $consulta="SELECT * FROM usuarios";

$resultado = $conexion->query($consulta);

echo "
<table border =1 width=100%>
<tr>
    <td>usuario</td>
    <td>contrasena</td>
    <td>nombre</td>
    <td>apellido</td>
    <td>edad</td>
    <td></td>
</tr>

";

foreach ($resultado as $fila) {

echo "
<tr><form action='actualizarusuario.php' method='post'>
    <td><input type = 'text' name = 'usuario' value ='".$fila['usuario']."'></td>
    <td><input type = 'text' name = 'contrasena' value ='".$fila['contrasena']."'></td>  
    <td><input type = 'text' name = 'nombre' value ='".$fila['nombre']."'></td>
    <td><input type = 'text' name = 'apellido' value ='".$fila['apellido']."'></td> 
    <td><input type = 'text' name = 'edad' value ='".$fila['edad']."'></td> 
    <td><input type='submit'></td>
    </form>
</tr>

";

}


echo "</table>";

$_SESSION['usuario']= $usuario;
//cerramos la conexion
$conexion = Null;

?>