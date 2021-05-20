<?php
include 'connection.php';
//session_start();

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            .container{
                width:50%;
                border:2px solid black;
            }
            .form-class {
    /* padding: 15px; */
    margin: 29px;
    /* width: 82%; */
}
.form-class input,textarea{
    width:70%;
}
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Registration Here</h1>
    <div class="container">
    <form method="POST" >
    <div class="form-class">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter Your Full Name"></input>
                  
                </div>
                <div class="form-class">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Enter Your Email"></input>
                   
                </div>
                <div class="form-class">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter Your Password"></input>
                   
                </div>
               
                <div class="form-class">
                    <button type="submit" name="submit" value="submit">Submit</button>
                   
                </div>
            </form>

</div>
<?php
   
        if(isset($_POST['submit'])){
            $name=mysqli_real_escape_string($conn, $_POST['name']);
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $password=mysqli_real_escape_string($conn, $_POST['password']);
          
            

            

$sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email',' $password')";
   if(mysqli_query($conn, $sql)){
       echo "<h1>registration succeessfully</h1>";
       header("LOCATION: index.php?message=recordadded");
   }


        }

    ?>
   
</body>
</html>