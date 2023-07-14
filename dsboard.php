<?php
//include auth_session.php file on all user panel pages
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <center>
    <div class="form">
        <p>Hi <?php echo $_SESSION['username']; ?>!</p>
        <p>welcome to dashboard page</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    </center>
</body>
</html>