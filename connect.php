<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="crud";
//create connenction
$conn = mysqli_connect($servername,$username,$password,$dbname);
// check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
?>