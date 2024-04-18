<?php
$host = 'localhost';
$User = 'root';
$pass = '';

$db = 'cliente';
$conection = mysqli_connect($host, $User , $pass, $db);

if(!$conection){
    echo "Conection failed";
}