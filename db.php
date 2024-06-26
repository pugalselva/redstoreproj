<?php
$servername="localhost";
$username="root";
$password="";
$database="product";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connecction failed: ".mysqli_connect_error());
}
    echo"Connected successfully";


?>