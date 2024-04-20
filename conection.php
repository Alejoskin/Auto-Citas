<?php
$host = 'sql5.freesqldatabase.com';
$User = 'sql5700488';
$pass = 'KbPtF73fDV';

$db = 'cliente';
$conection = mysqli_connect($host, $User , $pass, $db);

if(!$conection){
    echo "Conection failed";
}

/*
Info for my phpMyAdmin
    Host: sql5.freesqldatabase.com
    Database name: sql5700488
    Database user: sql5700488
    Database password: KbPtF73fDV
    Port number: 3306
*/