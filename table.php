<?php
require_once("connect2.php");
$sql_select="SELECT * FROM customer";
$result=$conn->query($sql_select);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet"href="css/css7.css" />
</head>
<body>
    <table class="table1"border="10px">
        <tr>
            <th>CustomerId</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>username</th>
            <th>email address</th>
            <th>Password</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
         ?>
         <tr>
             <td><?php echo $row['CustomerId'];?></td>;
             <td><?php echo $row['firstname'];?></td>;
             <td><?php echo $row['lastname'];?></td>;
             <td><?php echo $row['username'];?></td>;
             <td><?php echo $row['Email_address'];?></td>;
             <td><?php echo $row['password'];?></td>;
             <td><a href="myquery5.php? id=<?php echo $row["CustomerId"];?>"class="edit_btn">Update</a></td>;
             <td><a href="delete.php? id=<?php echo $row["CustomerId"];?>"class="del_btn">Delete</a></td>;
         </tr>
        <?php   
        }
        ?>
    </table>
</body>
</html>