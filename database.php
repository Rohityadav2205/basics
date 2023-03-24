<?php
$hostname="localhost";
$username="root";
$password="";
$database="php";
//create database connection
$conn=new mysqli($hostname,$username,$password,$database);
//check connection
if($conn->connect_error){
    die("Connectection field". $conn->connect_error);

}
print"Connection Successfully";
?>