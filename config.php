<?php

$host_name='localhost';
$name='root';
$pass='';
$db='online';

$con=mysqli_connect($host_name,$name,$pass) or die('Database error!');
mysqli_select_db($con,$db);




?>