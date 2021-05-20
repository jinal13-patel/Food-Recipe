<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show all Records</title>
</head>
<body>
    <h3>Display All Member's Information</h3>
    <table border="1" >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone_No</th>
        <th>DELETE</th>
        <th>EDIT</th>
    </tr>
    <?php
         include "connection.php";
        $sql = "SELECT * FROM `information`";

        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['Id']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Phone_No']."</td>";
            echo "<td><a href='delete.php?Id=".$row['Id']."'onClick='return confirm(".'"Are you sure?"'.");'>DELETE</a></td>";
            echo "<td><a href='editpankti.php?Id=".$row['Id']."'onClick='return confirm(".'"Are you sure?"'.");'>Edit</a></td>";
            echo "</tr>";
        }           
    ?>
    </table>
</body>
</html>