<?php


    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //echo "You are editing $id";
        $sql = "SELECT * FROM `recipe1` WHERE id='$id'";
        $result = mysqli_query($conn, $sql); 
        while($row = mysqli_fetch_assoc($result)){
?>
 <form method="post">
<input type="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $row['email'] ?>" id="email" name="email">
     
    <textarea  rows="1" cols="170" placeholder="Enter Your Recipe Name" id="recipe"  name="recipe"><?php echo $row['recipe_name'] ?></textarea>
    <textarea  rows="5" cols="170" placeholder="Enter Your Recipe's ingredients" id="ingredients"  name="ingredients"><?php echo $row['ingredients'] ?></textarea> 
    <textarea  rows="5" cols="170" placeholder="How to make it" id="make"  name="make"><?php echo $row['recipe_make'] ?></textarea>  

    <input type="submit" name="submit" value="Submit Recipe"></input>
      
     
    <?php 
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
            $recipe=$_POST['recipe'];
            $ingredients=$_POST['ingredients'];
            $make=$_POST['make'];
            $sql2 = "UPDATE `recipe1` SET `email`='$email',`recipe_name`='$recipe',`ingredients`='$ingredients',`recipe_make`='$make' WHERE id='$id'";
   if(mysqli_query($conn, $sql2)){
    header ("LOCATION: editrecipeuser.php?updatedsuceessfully");
   }
    }
} 
}

?>