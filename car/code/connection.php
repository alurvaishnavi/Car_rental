<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="car_rental";
$con=mysqli_connect($localhost,$username,$password,$dbname, 3306);

if(!$con)
{
    echo "connection error";
}


?>