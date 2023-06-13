<?php 
$hostname="localhost";
$dbuser="root";
$dbpassword="";
$dbname="amtk2";
$conn=mysqli_connect($hostname,$dbuser,$dbpassword,$dbname);
if(!$conn){
    die("something went wrong");
}
?>