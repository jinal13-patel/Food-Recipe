<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
       Username: <input type="email" name="email"><br>
       Password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
    <?php
session_start();
    include "connection.php";
    if(isset($_POST['login'])){
        $uname = mysqli_real_escape_string($conn,$_POST['username']);
       
        $pwd = mysqli_real_escape_string($conn,$_POST['password']);
        if(empty($uname) OR empty($pwd)){
            header("LOCATION: index.php?message=empty+fields");
            exit();
        }
        $sql = "SELECT * FROM `users` WHERE email='$uname'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)<=0){
            header("LOCATION: index.php?message=loginerror");
        }else{
            while($row=mysqli_fetch_assoc($result)){
                //check if password matches
                if($row['password']!=$pwd){
                    header("LOCATION: index.php?message=loginerror");
                }
                else if($row['password']==$pwd){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password'] = $row['password']; 
                    header("LOCATION: index.php?message=loginsuccess");
                }
            }
        }
    }
    
?>
</body>
</html>

