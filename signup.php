<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
<?php
// define variable to empty value
$usernameErr = $emailErr = $passwordErr = $confirm_passwordErr ="";
$username = $email=  $password = $confirm_password ="";
if(isset($_POST["submit"])){
            if(empty($_POST["username"])){
               $usernameErr= "error:username cannot be empty";
            }else{
               $username = $_POST["username"];
               if(empty($_POST["email"])){
                  $emailErr= "error:email cannot be empty";
               }else{
                  $email = $_POST["email"];
                  if(empty($_POST["password"])){
                     $passwordErr= "error:password cannot be empty";
                  }else{
                     $password = $_POST["password"];
                     if(empty($_POST["confirm_password"])){
                        $confirm_passwordErr= "error:confirm_password cannot be empty";
                     } elseif($_POST["password"] != $_POST["confirm_password"])
                     $confirm_passwordErr= "ERROR: password doesn't match";
                     else{
                        $confirm_password = $_POST["confirm_password"];
                        // echo $username,$email, $password, $confirm_password; 
                           $sql = "INSERT INTO curde (username,email,password,confirm_password) VALUES ('$username','$email','$password','$confirm_password')";
                           if(mysqli_query ($conn,$sql)){
                              header("location:dashboard.php");
                              echo "<br> data stored in database successfully";
                              
                           }else{
                              echo"cannot insert into database";
                              
                           }
                       
                     }
                  }
               }
            }
                      
        }
?>
    <center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
        <h1>Sign Up</h1>
        <p>Pls fill the form to create account</p>
        <p>Username: <input type="text" name="username" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p>Confirm Password: <input type="password" name="confirm_password" required></p>
        <input type="submit" name="submit" value="Register">
        <p>Already have an account? <a href="login.php
        ">Login here</a>.</p>
    </form>
    </center>

</body>
</html>