<?php
    include "connection.php";

    if(isset($_GET['Id'])){
        $id = $_GET['Id'];

        $sql = "DELETE FROM `information1`  WHERE Id='$id'";

        if(mysqli_query($conn, $sql)){
            header("LOCATION: show.php?DeletedSuccessfully..");
        }
    }
    else {
        header("LOCATION:show.php");
    }
?>