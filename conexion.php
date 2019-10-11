<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$conection = mysqli_connect($host,$user,$password,$db);

if(!$conection){
    echo "Error";
}else{
    echo "conexion exitosa";
}


?>