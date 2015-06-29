<?php

session_start();

$codigo= $_SESSION['permiso'];
if($codigo ==1){

echo "Tu Usuario es:".$_SESSION['usuario']."<br/>Tu Contrasena es:".$_SESSION['contrasena']; 


//crear conexion
$conexion = new PDO('sqlite:favoritos.db');

//ESTABLECER una consulta
$consulta= "SELECT * FROM logs";

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
     <td>marca de tiempo</td>
     <td>anio</td>
     <td>mes</td>
     <td>dia</td>
     <td>hora</td>
     <td>Minuto</td>
    <td>segundo</td>
    <td>ip</td>
     <td>navegador</td>
     <td>usuario</td>
    <td>contrasena</td>
</tr>


";

foreach ($resultado as $fila) {
    echo "
    <tr>
        <td>".$fila['utc']."</td>
        <td>".$fila['anio']."</td>
        <td>".$fila['mes']."</td>
        <td>".$fila['dia']."</td>
        <td>".$fila['hora']."</td>
        <td>".$fila['Minuto']."</td>
        <td>".$fila['segundo']."</td>
        <td>".$fila['ip']."</td>
        <td>".$fila['navegador']."</td>
        <td>".$fila['usuario']."</td>
        <td>".$fila['contrasena']."</td>   
    
    </tr>";
}



echo "</table>";
//cerramos la conexion
$conexion = Null;
}else{echo"TU NO ERES ADMINISTRADOR";}
?>