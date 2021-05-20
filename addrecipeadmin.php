<?php 
session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="food_recipe_css/h1.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0px
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
   
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
h1.head {
    color: white;
    position: absolute;
    left: 312px;
    top: 228px;
}
img.adminimg {
    /* width: 1022px; */
    /* margin-left: 294px; */
    width: 1040px;
    margin-left: 269px;
    height: 450px;
}
textarea.fclass {
    width: 100%;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="show.php">Member List</a>
  
  <a href="showrecipeuser.php">Show Recipes</a>
  <a href="">Add Recipe</a>
  <a href="editrecipeuser.php">Edit Recipe</a>
 
</div>

<div id="main">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php"><img src="food_recipe_css/logo1.png"
                        class="image-fluid logo w-50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse recipenav" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recipes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                            <a class="nav-link" href="index.php">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    
    <form  class="my-5 mx-5" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
     
    <div >
    <textarea class="fclass" rows="1" cols="170" placeholder="Enter Your Recipe Name" id="recipe" name="recipe"></textarea>
    <textarea class="fclass" rows="5" cols="170" placeholder="Enter Your Recipe's ingredients" id="ingredients" name="ingredients"></textarea> 
    <textarea class="fclass" rows="5" cols="170" placeholder="How to make it" id="make" name="make"></textarea>  
    
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

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 
<?php
   
        if(isset($_POST['submit'])){
       
            
            $recipe=mysqli_real_escape_string($conn, $_POST['recipe']);
          
            $ingredients=mysqli_real_escape_string($conn, $_POST['ingredients']);
            $make=mysqli_real_escape_string($conn, $_POST['make']);
            

$sql = "INSERT INTO `recipe_admin`(`recipe_name`, `recipe_ingredients`,`recipe_make`) VALUES ('$recipe',' $ingredients','$make')";
   if(mysqli_query($conn, $sql)){
    echo "<h1>recipe added succeessfully</h1>";
   //  header("LOCATION: addrecipeadmin.php?message=recipeadded");
   }
 }?>