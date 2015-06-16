<?php

session_start();

echo "Tu Usuario es:".$_SESSION['usuario']."<br/>Tu Contrasena es:".$_SESSION['contrasena']; 


//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

//ESTABLECER una consulta
$consulta= "SELECT * FROM usuarios";

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
     <td>usuario</td>
     <td>contrasena</td>
     <td>nombre</td>
     <td>apellido</td>
     <td>edad</td>
     <td></td>
    <td></td>
</tr>


";

foreach ($resultado as $fila) {
    echo "
    <tr>
        <td>".$fila['usuario']."</td>
        <td>".$fila['contrasena']."</td>
        <td>".$fila['nombre']."</td>
        <td>".$fila['apellido']."</td>
        <td>".$fila['edad']."</td>

    <td><a href ='eliminarusuario.php?
    usuario=".$fila['usuario']."&
    contrasena=".$fila['contrasena']."&
    nombre=".$fila['nombre']."&
    apellido=".$fila['apellido']."&
    edad=".$fila['edad']."'>Eliminar</a></td>

    <td>
    <td><a href ='formularioactualizarusuario.php?
        usuario=".$fila['usuario']."&
        contrasena=".$fila['contrasena']."&
        nombre=".$fila['nombre']."&
        apellido=".$fila['apellido']."&
        edad=".$fila['edad']."'>Actualizar</a>
    </td>
    </tr>";
}

//Añadir un registro
echo" 
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type = 'text' name = 'usuario'></td>
<td><input type = 'text' name = 'contrasena'></td>
<td><input type= 'text' name='nombre'></td>

<td><input type= 'text' name='apellido'></td>
<td><input type= 'text' name='edad'></td>
<td><input type= 'submit'></td><td></td>

</tr>

";

echo "</table>";
//cerramos la conexion
$conexion = Null;
?>