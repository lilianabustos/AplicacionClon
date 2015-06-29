<?php

//incluir para que cada vez que pase por peincipal se ejecute log.php
include("log.php");

session_start();

echo "Tu Usuario es:".$_SESSION['usuario']."<br/>Tu Contrasena es:".$_SESSION['contrasena']; 


//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

//ESTABLECER una consulta
$consulta= "SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contrasena='".$_SESSION['contrasena']."'";

//ejecutar consulta
$resultado= $conexion->query($consulta);

//imprimir consulta
// while($fila= sqlite_fetch_array($resultado)){
	
// 	echo $fila['titulo'].$fila['direccion'].$fila['categoria'].$fila['comentario'].$fila['valoracion'];
// }
//var_dump($resultado);

echo"
<table border=1 width=100%>
<tr>
     <td>titulo</td>
     <td>direccion</td>
     <td>categoria</td>
     <td>contenido</td>
     <td>valoracion</td>
</tr>


";

foreach ($resultado as $fila) {
    echo "
    <tr>
        <td>".$fila['titulo']."</td>
        <td>".$fila['direccion']."</td>
        <td>".$fila['categoria']."</td>
        <td>".$fila['contenido']."</td>
        <td>".$fila['valoracion']."</td>

    <td><a href ='eliminarfavorito.php?
    titulo=".$fila['titulo']."&
    direccion=".$fila['direccion']."&
    categoria=".$fila['categoria']."&
    contenido=".$fila['contenido']."&
    valoracion=".$fila['valoracion']."'>Eliminar</a></td>

    <td>
    <td><a href ='formularioactualizar.php?
        titulo=".$fila['titulo']."&
        direccion=".$fila['direccion']."&
        categoria=".$fila['categoria']."&
        contenido=".$fila['contenido']."&
        valoracion=".$fila['valoracion']."'>Actualizar</a>
    </td>
    </tr>";
}

//Añadir un registro
echo" 
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type = 'text' name = 'titulo'></td>
<td><input type = 'text' name = 'direccion'></td>
<td><select name = 'categoria'>
<option value = 'salud'>salud</option>
<option value = 'trabajo'>trabajo</option>
<option value = 'hobby'>hobby</option>
<option value = 'personal'>personal</option>
<option value = 'otros '>otros</option>
</td>
<td><input type= 'text' name='contenido'></td>
<td><input type= 'text' name='valoracion'></td>
<td><input type= 'submit'></td><td></td>

</tr>

";

echo "</table>";
//cerramos la conexion
$conexion = Null;

////////Socializa///////////////////////////////////////////////////////////////////
function muestracategoria($damecategoria){

echo "Algunos links de la categoria ".$damecategoria." que quiza te puedan interesar";

$conexion = new PDO('sqlite:favoritos.db');
$consulta = "SELECT * FROM favoritos WHERE usuario !='".$_SESSION['usuario']."' AND categoria= '".$damecategoria."' ORDER BY RANDOM() LIMIT 3;";
$resultado= $conexion->query($consulta);
echo "
<table border=1 width=100%>
<tr>
     <td>titulo</td>
     <td>direccion</td>
     <td>categoria</td>
     <td>contenido</td>
     <td>valoracion</td>
</tr>


";
foreach ($resultado as $fila) {
    echo "
    <tr>
        <td>".$fila['titulo']."</td>
        <td>".$fila['direccion']."</td>
        <td>".$fila['categoria']."</td>
        <td>".$fila['contenido']."</td>
        <td>".$fila['valoracion']."</td>
   
    </tr>";
}
echo "</table>";
$conexion = Null;
}
muestracategoria("salud");
muestracategoria("trabajo");
muestracategoria("personal");
muestracategoria("hobby");
muestracategoria("otros");
?>