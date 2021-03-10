<?php
$conexion = mysqli_connect("127.0.0.1","root","1234m","base_reg_depo", 3306);
if (!$conexion){
    echo 'Error al conectarse a la base de datos';
}else{
    echo 'Conectado con exito a la base';
}