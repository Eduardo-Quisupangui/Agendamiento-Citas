<?php
include 'cn.php';
//almacenar en variables
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$cedula =$_POST["cedula"];
$telefono =$_POST["telefono"];
$correo =$_POST["correo"];

//consulta sql insertar
$insertar = "INSERT INTO datosregistros(nombre, apellido, cedula, telefono, correo) VALUES
('$nombre','$apellido','$cedula','$telefono','$correo')";

//consulta
$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo 'no se pudo registrar';
}else{
    echo 'registro exitoso';
}

//cerrar
mysqli_close($conexion);