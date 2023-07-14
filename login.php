<?php
session_start();
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
// Intitalize username and password
$usernameErr = $passwordErr="";
$username = $password = "";
if(isset($_POST["submit"])){
    
    $username = $_POST["username"];

    $password = $_POST["password"];

        $sql = "SELECT username FROM curde WHERE username='$username'
                     AND password='$password'";
        // echo "sql ".$sql;
        $result = mysqli_query($conn, $sql);
        var_dump($result);
        $rows = mysqli_num_rows($result);
        echo "number of rows ".$rows;
        // var_dump($rows);exit;
        if ($rows) {
            $_SESSION['username'] = $username;
            header("location:dashboard.php");
            echo "<br>Dashboard";
            
        }else {
                echo "ERROR: not found";
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  
    <center>
    <form  method="POST" autocomplete ="off" >
        <h1>Login Form</h1>
        Username: <input  autocomplete ="off" type="text" name="username" Placeholder="username"  required><br><br>
        password: <input autocomplete ="off" type="password" name="password" placeholder="password" ><br><br>
        <input type="submit" name="submit" value="login">
        <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
    </form>
    </center>
</body>
</html>