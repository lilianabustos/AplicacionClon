<?php

//CREAR UNA TABLA DE FAVORITOS-------------------------

//conexion----------------------------
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//crear tabla------------------------------------------
$consulta = " CREATE TABLE favoritos(
usuario char(40) Not Null,
contrasena char(40) Not Null,
titulo char(40) Not Null,
direccion char(100) Not Null,
categoria char(40),
contenido char(200),
valoracion Int );";
//echo $consulta;
//insertar contenido en la tabla-----------------------
$resultado= $conexion ->exec($consulta);
//cerrar la conexion-----------------------------------
//$conexion->Close();

//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS----------
//establecer
$conexion = new PDO('sqlite: favoritos.db') or die('ha sido imposible establecer la conexion');
//preparar
$consulta= "INSERT INTO favoritos VALUES('jocarsa','jocarsa','Google','www.google.com','tecnologia','este es un buscador muy famoso',10);
INSERT INTO favoritos VALUES('jocarsa','jocarsa','Jocarsa','www.jocarsa.com','tecnologia','esta es la pagina del video',10);";
echo $consulta;
//insertar
$resultado= $conexion ->exec($consulta);
//cerrar
//$conexion->close();

//CREAR UNA TABLA DE USUARIOS--------------------------
//conexion---------------------------------------------
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//crear tabla------------------------------------------
$consulta="CREATE TABLE usuarios(
usuario char(40) Not Null,
contrasena char(40) Not Null,
nombre char(40) Not Null,
apellido char(40) Not Null,
edad Int,
permiso int

);"; 
echo $consulta;
//insertar contenido en la tabla-----------------------
$resultado= $conexion ->exec($consulta);
//cerrar la conexion-----------------------------------
$conexion = Null;
//CONTENIDO DE PRUEBA PARA LA TABLA USUARIOS-----------
//establecer
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//preparar
$consulta= "INSERT INTO usuarios VALUES('liliana','liliana','silvia liliana','bustos gutierrez',1);";

//insertar
$resultado= $conexion ->exec($consulta);
echo $consulta;
//cerrar
$conexion = Null;

//CREAR UNA TABLA DE LOGS--------------------------
//conexion---------------------------------------------
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//crear tabla------------------------------------------
$consulta= "CREATE TABLE logs(
utc Int, 
anio Int,
mes Int,
dia Int,
hora Int,
Minuto Int,
segundo Int,
ip char(50),
navegador char(100),
usuario char(40),
contrasena char(40)
);";
//insertar contenido en la tabla-----------------------
$resultado= $conexion ->exec($consulta);
//cerrar la conexion-----------------------------------
//$conexion->close();
//CONTENIDO DE PRUEBA PARA LA TABLA USUARIOS-----------
//establecer
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//preparar
$consulta= "INSERT INTO logs VALUES(00000,2015,02,07,21,03,08,'127.0.0.01','chrome','liliana','liliana');";

//insertar
$resultado= $conexion ->exec($consulta);
//cerrar
$conexion = Null;



?>