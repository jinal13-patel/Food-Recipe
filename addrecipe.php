<?php 
session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="food_recipe_css/h1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Add Recipes</title>
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
                        <a class="nav-link" href="#">Add Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container-fluid section1 my-5">
        <h1><span>Add Recipes Here</span></h1>  
       
  <form  class="my-5 mx-5" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Your Email</span>
      </div>
      
      <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email">
      <!--<span style="visibility: hidden; position: absolute;">Error Message</span>-->
    
    </div>

    <div >
    <textarea  rows="1" cols="170" placeholder="Enter Your Recipe Name" id="recipe" name="recipe"></textarea>
    <textarea  rows="5" cols="170" placeholder="Enter Your Recipe's ingredients" id="ingredients" name="ingredients"></textarea> 
    <textarea  rows="5" cols="170" placeholder="How to make it" id="make" name="make"></textarea>  
    
    <h3>Upload Your Image of The Recipe</h3></br>
     
     
      <input type="file" name="file">
      <input type="submit" name="submit" value="upload"></input><br><br>
<?php
		if(isset($_POST['submit'])){
			$file = $_FILES['file'];
			$filename= $file['name'];
			$filentype= $file['type'];
			$filetmp= $file['tmp_name'];
			$fileerr= $file['error'];
			$filesize= $file['size'];
			$destination = "uploadfile/".$filename;
            print_r($filename);
			//move_uploaded_file($filetmp, $destination );
			$fileEXT = explode('.',$filename);
		    $fileExtension = strtolower(end($fileEXT));
			
			$allowedExt = array("jpg","jpeg","png","gif");
			if(in_array($fileExtension,$allowedExt)){
				if($fileerr === 0){
					if($filesize < 3000000){
						$newfilename = uniqid('',true).'.'.$fileExtension;
						//echo $newfilename;
						//$destination = "upload/".$filename;
						move_uploaded_file($filetmp, $destination );
						echo " file uploaded successfully!here is your file <a href='$destination'>click here</a><br>";
					}else{
						echo "your file is too big to upload";
					}
				}else{
					echo "oops  Error uploading your file";
				}
			}
		}?>
   
   <input type="submit" name="submit" value="Submit Recipe"></input>
      
</form>

    
    </div>
   
  
  </div>
    </section>
    <footer>
        <div class="container">


            <div class="row mb-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div>
                        <img src="food_recipe_css/logo1.png" height="90px" width="250px" alt="">
                    </div>
                    <div class="text-capitalize mt-4">
                        <h3>Ready to cook</h3>
                    </div>
                    <p class="text-capitalize">sign up for our weekly newsletters</p>
                    <div class="w-75 form-group">
                        <input type="email" class="form-control" placeholder="Enter your email" id="email2"
                            autocomplete="off">
                        <button class="btn btn-primary mt-3" onclick="validate()">Sign Up</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase" href="#">Recipes <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Quick & Easy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Buying Guides</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Add recipes</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-capitalize text-dark" href="#">About us<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">terms of use</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">editorial guidelines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">advertise</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-5">
                <p class="text-uppercase">let's be friends!</p>
                <a href="#"><img class="mr-3" src="food_recipe_css/insta1.jpg" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/pinterest.png" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/facebook1.png" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/twitter1.png" height="40px" width="40px" alt=""></a>
            </div>
        </div>
    </footer>
  
   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
   
        if(isset($_POST['submit'])){
       
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $recipe=mysqli_real_escape_string($conn, $_POST['recipe']);
          
            $ingredients=mysqli_real_escape_string($conn, $_POST['ingredients']);
            $make=mysqli_real_escape_string($conn, $_POST['make']);
            

$sql = "INSERT INTO `recipe1`(`email`,`recipe_name`, `ingredients`,`recipe_make`) VALUES ('$email','$recipe',' $ingredients','$make')";
   if(mysqli_query($conn, $sql)){
  echo "<h1>recipe added succeessfully</h1>";
//header("LOCATION: addrecipe.php?message=recipeadded");
   }
}?>   