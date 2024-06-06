<?php
$host="localhost";
$username="root";
$password="root";
$database="jdi";
date_default_timezone_set('Asia/Jakarta');
$connect= mysqli_connect($host,$username,$password,$database);
if (!$connect){
die("connection failed :".mysqli_connect_error());
}
?>