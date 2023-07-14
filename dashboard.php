<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     }else{
        // echo "data base connected";
        $sql = "SELECT * FROM curde";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);//Fetch a result row as an associative array
        print_r ($data);
     }
    //  var_dump($_SESSION); 
    ?>
    <h2 >Displaying all record</h2>
    <table border = "3">
       <thead>
            <tr>
                <td>id</td>
                <td>username</td>
                <td>email</td>
                <td>password</td>
                <td>confirm_password</td>
                <td>Operations</td>
            </tr>
       </thead>
       <tbody>
        <?php foreach($data as $value):?>

            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['username']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['password']?></td>
                <td><?php echo $value['confirm_password']?></td>
            <td><button><a href="update.php?updid=<?php echo $value['id']?>">Update </a></button></td>
            <td><button><a href="Delete.php?delid=<?php echo $value['id']?>">Delete </a></button></td>
            </tr>
                <?php endforeach;?>
            
       </tbody>
    </table>
</body>
</html>