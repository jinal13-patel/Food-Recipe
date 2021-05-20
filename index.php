<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" type="text/css" href="food_recipe_css/h1.css">
    <link rel="stylesheet" type="text/css" href="food_recipe_css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        div#container {
            text-align: center;
            margin-top: 7rem;
        }
        .acc{
            margin-bottom: 1rem;
        }
        form{
            margin-top: 2rem;
        }
        input{
            width: 15rem;
        }
        .acc {
    margin-bottom: 1rem;
    margin-left: 38%;
}
        .log{
            background-color: powderblue;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-right: 15px;
        }
        .signup{
            background-color: powderblue;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-right: 10px;
            color: black;   
        }
        .link {
    margin-left: 41%;
}
        div#login {
    /* padding: 1rem 7rem 1rem 7rem; */
    margin-left: 29%;
}
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php"><img src="food_recipe_css/logo1.png" class="image-fluid logo w-50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse recipenav" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Recipes
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="breakfast.php">Breakfast</a>
                            <a class="dropdown-item" href="lunch.php">Lunch</a>
                            <a class="dropdown-item" href="dinner.php">Dinner</a>
                            <a class="dropdown-item" href="drink.php">Drinks</a>
                            <a class="dropdown-item" href="dessert.php">Dessert</a>
                            <a class="dropdown-item" href="snack_app.php">Snacks & Appetizers</a>
                            <a class="dropdown-item" href="diet.php">Recipes by Diet</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quick & Easy
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="quickdinner.php">Quick Dinners</a>
                            <a class="dropdown-item" href="e_h.php">Easy & Health</a>
                            <a class="dropdown-item" href="veg.php">Quick Vegetarian</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addrecipe.php">Add Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="acc">Log In Here</h1>
    <div class="link">
           <a href="">USERS</a>/<a href="admin1.php">ADMIN</a>
           </div>
    <div id="login">
        
           
    <form action="" method="post">
               
               <input type="email" name="email" id="email" placeholder="Email"><br><br>
                               
               <input type="password" name="password" id="pwd" placeholder="Password"><br><br><br>
               <button class="log" type="submit" name="submit" value="submit">Log In</button>
               <a href="registration.php">
                   for Sign Up</a>
           </form>
           <?php
 
 
 
    if(isset($_POST['submit']))
    {

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `users` WHERE email='$email' AND password='$password'";

    $query = mysqli_query($conn,$sql);
   //header("location:home.php");
    }

?>



        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>