<?php
//conectar a ala base de datos
$conexion = new mysqli("localhost","root","","nombre_base_de_datos");

//verificar la conexion
if($conexion->connect_error)
{
    die("ERROR DE CONEXION".$conexion->connect_error);
}

//obtener datos del formulario
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];

//insertar datos en la base de datos
$sql="INSERT INTO  tabla_datos (nombre,edad) VALUES('$nombre', $edad)";

//validar que si se almacenen en la base de datos
if($conexion->query($sql)===TRUE)
{
    include('insertar.html');
    echo"DATOS ALMACENADOS CORRECTAMENTE";
}else
{
    include('insert.html');
    echo"ERROR AL INGRESAR LOS DATOS";
}

//cerrar la conexion
$conexion->close();
?>