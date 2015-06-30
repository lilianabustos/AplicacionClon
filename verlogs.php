<?php

session_start();

$codigo= $_SESSION['permiso'];
if($codigo ==1){

echo "Tu Usuario es:".$_SESSION['usuario']."<br/>Tu Contrasena es:".$_SESSION['contrasena']; 

//CREAR RESUMEN DE VISITAS

$conexion = new PDO('sqlite:favoritos.db');
$consulta= "SELECT * FROM logs";
$resultado= $conexion->query($consulta);

$hora0=0;  
$hora1=0; 
$hora2=0;
$hora3=0; 
$hora4=0; 
$hora5=0;
$hora6=0; 
$hora7=0; 
$hora8=0;
$hora9=0; 
$hora10=0; 
$hora11=0;
$hora12=0; 
$hora13=0; 
$hora14=0;
$hora15=0; 
$hora16=0; 
$hora17=0;
$hora18=0; 
$hora19=0; 
$hora20=0;
$hora21=0; 
$hora22=0; 
$hora23=0;
$hora24=0;

foreach ($resultado as $fila)
{    
    if($fila['hora']==0){
        
        $hora0++;
    }
    if($fila['hora']==1){
        
        $hora1++;
    }
    if($fila['hora']==2){
        
        $hora2++;
    }
    if($fila['hora']==3){
        
        $hora3++;
    }
    if($fila['hora']==4){
        
        $hora4++;
    }
    if($fila['hora']==5){
        
        $hora5++;
    }
    if($fila['hora']==6){
        
        $hora6++;
    }
    if($fila['hora']==7){
        
        $hora7++;
    }
    if($fila['hora']==8){
        
        $hora8++;
    }
    if($fila['hora']==9){
        
        $hora9++;
    }
    if($fila['hora']==10){
        
        $hora10++;
    }
     if($fila['hora']==11){
        
        $hora11++;
    }
    if($fila['hora']==12){
        
        $hora12++;
    }
    if($fila['hora']==13){
        
        $hora13++;
    }
     if($fila['hora']==14){
        
        $hora14++;
    }
    if($fila['hora']==15){
        
        $hora15++;
    }
    if($fila['hora']==16){
        
        $hora16++;
    }
     if($fila['hora']==17){
        
        $hora17++;
    }
    if($fila['hora']==18){
        
        $hora18++;
    }
    if($fila['hora']==19){
        
        $hora19++;
    }
     if($fila['hora']==20){
        
        $hora20++;
    }
    if($fila['hora']==21){
        
        $hora21++;
    }
    if($fila['hora']==22){
        
        $hora22++;
    }
     if($fila['hora']==23){
        
        $hora23++;
    }
    if($fila['hora']==24){
        
        $hora24++;
    }
}

//comentamos este porque ya lo tenemos graficado
    /*
    echo "Visitas en la hora 0:".$hora0."<br/>";
    echo "Visitas en la hora 1:".$hora1."<br/>";
    echo "Visitas en la hora 2:".$hora2."<br/>";
    echo "Visitas en la hora 3:".$hora3."<br/>";
    echo "Visitas en la hora 4:".$hora4."<br/>";
    echo "Visitas en la hora 5:".$hora5."<br/>";
    echo "Visitas en la hora 6:".$hora6."<br/>";
    echo "Visitas en la hora 7:".$hora7."<br/>";
    echo "Visitas en la hora 8:".$hora8."<br/>";
    echo "Visitas en la hora 9:".$hora9."<br/>";
    echo "Visitas en la hora 10:".$hora10."<br/>";
    echo "Visitas en la hora 11:".$hora11."<br/>";
    echo "Visitas en la hora 12:".$hora12."<br/>";
    echo "Visitas en la hora 13:".$hora13."<br/>";
    echo "Visitas en la hora 14:".$hora14."<br/>";
    echo "Visitas en la hora 15:".$hora15."<br/>";
    echo "Visitas en la hora 16:".$hora16."<br/>";
    echo "Visitas en la hora 17:".$hora17."<br/>";
    echo "Visitas en la hora 18:".$hora18."<br/>";
    echo "Visitas en la hora 19:".$hora19."<br/>";
    echo "Visitas en la hora 20:".$hora20."<br/>";
    echo "Visitas en la hora 21:".$hora21."<br/>";
    echo "Visitas en la hora 22:".$hora22."<br/>";
    echo "Visitas en la hora 23:".$hora23."<br/>";
    echo "Visitas en la hora 24:".$hora24."<br/>";
    */

$anchura= "20";
$multiplicador= "5";
$desface="1";
echo'

<br/>VISITAS DURANTE EL DIA DE HOY:

<table border=1 valign="bottom">
 <tr valign="bottom>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora0+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora1+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora2+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora3+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora4+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora5+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora6+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora7+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora8+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora9+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora10+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora11+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora12+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora13+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora14+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora15+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora16+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora17+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora18+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora19+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora20+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora21+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora22+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora23+$desface)).'></td>
 <td><img src= "square.png" width='.$anchura.' height= '.($multiplicador*($hora24+$desface)).'></td>
 </tr>

 <tr>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
    <td>14</td>
    <td>15</td>
    <td>16</td>
    <td>17</td>
    <td>18</td>
    <td>19</td>
    <td>20</td>
    <td>21</td>
    <td>22</td>
    <td>23</td>
    <td>24</td>
 </tr>
</table>


';

$conexion = Null;


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