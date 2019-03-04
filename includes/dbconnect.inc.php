<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'quizdatabase';

$con = mysqli_connect($server, $user, $pass, $dbName);

if($con==false){
    echo "Connection to Database Failed";
}


?>