<html>
  <body>
  <table border= 1 width= 100%>
      <tr>
        <td>
           <form action="login.php" method="post">
            <input type="text" name="usuario" value="Introduce aqui tu nombre" width= 50%>

        </td>
      </tr>
      <tr>
        <td> 
            <input type="text" name="contrasena" value="Introduce aqui tu contrasena" width= 50%>
        </td>
      </tr>
      <tr>
        <td>
            <input type="submit">
        </td>
      </tr>  
  </form>
  </table>
  No eres usuario todavia? Pues pulsa <a href="formularioaltausuario.php">AQUI</a>
  </body>
</html>


<?php

echo "<br/>Algunos links que quiza te puedan interesar";

$conexion = new PDO('sqlite:favoritos.db');
$consulta = "SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 3;";
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


?>