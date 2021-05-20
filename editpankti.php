<?php
include "connection.php";
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $sql = "SELECT * FROM `information1` WHERE Id='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <form action="" method="POST">
            NAME: <input type="text" name="Name" value="<?php echo $row['Name'];?>" required><br>
            EMAIL: <input type="text" name="Email" value="<?php echo $row['Email'];?>" id="" required><br>
            PASSWORD: <input type="text" name="Password"  id="" value="<?php echo $row['Password'];?>" required><br>
            PHONE NO.: <input type="text" name="Phone_No" id="" value="<?php echo $row['Phone_No'];?>" required><br>
            <input type="submit" name="submit" id="">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $pass = $_POST['Password'];
            $phn = $_POST['Phone_No'];

            $sql2 = "UPDATE `information1` SET `Name`='$name',`Email`='$email',`Password`='$pass',`Phone_No`='$phn' WHERE id='$id'";

            if(mysqli_query($conn, $sql2)){
                header("LOCATION: show.php?updated");
            }
        }
    }
} else {
    header("LOCATION:show.php");
}
?>