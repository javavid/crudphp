<?php
//conectar a la base de datos
$conexion = new mysqli("localhost","root","","nombre_base_de_datos");

//verificar conexion
if($conexion->connect_error)
{
    die("ERROR DE CONEXION:".$conexion->connect_error);
}

//obtener el id de formulario
$id=$_POST['id'];

//consulta para eliminar
$sql="DELETE FROM tabla_datos WHERE id=$id";

if($conexion->query($sql)===TRUE)
{
include('eliminardatos.html');
echo"DATOS ELIMINADOS";
}else
{
    include('eliminardatos.html');
    echo"ERROR AL ELIMINAR DATOS".$conexion->error;
}

//cerrar la conexion
$conexion->close();
?>