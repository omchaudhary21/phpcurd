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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudtitle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
<?php
                $sql ="SELECT * FROM curde";
                $result = mysqli_query($conn, $sql); 
                if($result){
                    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    

                }
                    // var_dump($data);
                ?>
    <div class="container">
        <form action="index.php">
        <input type="submit"value ="Add user" name="">
       
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td scope="col">S.N</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Mobile No.</td>
                <td scope="col">Password</td>
                <td scope="col">Operation</td>
            </tr>
            <tbody>
                <?php 
                if($data){
                    foreach($data as $val){ 
                        // var_dump($val);
                        ?>
                        <tr>
                            <td><?php echo $val['id'] ?></td>
                            <td><?php echo $val['name'] ?></td>
                            <td><?php echo $val['email'] ?></td>
                            <td><?php echo $val['mobile'] ?></td>
                            <td><?php echo $val['password'] ?></td>
                        </tr>
                    <?php }
                }
                 ?>
                
            </tbody>
    </table>
    </div>
</body>
</html>