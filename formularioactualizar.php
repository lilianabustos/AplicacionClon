<?php

session_start();


//recupero variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo= $_GET['titulo'];
$direccion= $_GET['direccion'];
$categoria= $_GET['categoria'];
$contenido= $_GET['contenido'];
$valoracion= $_GET['valoracion'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

$consulta=" SELECT * FROM favoritos WHERE usuario=".$usuario."'AND contrasena='".$contrasena."'AND categoria='".$categoria."'AND contenido='".$contenido."'AND valoracion'".$valoracion."";

// select * from favoritos where usuario="liliana" and contrasena="liliana" and categoria= "personal" and contenido="liliana" and valoracion="liliana";

$resultado = $conexion->query($consulta);

var_dump($resultado);

echo "
<table border =1 width= 100%>
<tr>
    <td>titulo</td>
    <td>direccion</td>
    <td>categoria</td>
    <td>comentario</td>
    <td>valoracion</td>
    <td></td>
</tr>

";


foreach ($resultado as $fila) {
echo "

<tr><form action='actualizarfavorito.php' method='post'>
    <td><input type = 'text' name = 'titulo' value ='".$fila['titulo']."'></td>
    <td><input type = 'text' name = 'direccion' value ='".$fila['direccion']."'></td>
    <td><select name='categoria'>
           <option value = 'salud'>salud</option>
           <option value = 'trabajo'>trabajo</option>
           <option value = 'hobby'>hobby</option>
           <option value = 'personal'>personal</option>
           <option value = 'otros '>otros</option>

           <option value = '".$fila['categoria']."'Selected>".$fila['categoria']."</option>
        </select>
    </td>
    <td><input type = 'text' name = 'contenido' value ='".$fila['contenido']."'></td>
    <td><input type = 'text' name = 'valoracion' value ='".$fila['valoracion']."'></td> 
    <td><input type='submit'></td>
    </form>
</tr>

";

}


echo "</table>";
var_dump($resultado);
//cerramos la conexion
$conexion = Null;

?>