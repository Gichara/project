<?php
require_once("connect2.php");
//session_start();
$customerid=$_POST["mycustomerId"];
$firstname=$_POST["my_name"];
$Lastname=$_POST["my_name1"];
$Email_address=$_POST["myemail"];
$username=$_POST["my_username"];
$password=$_POST["my_password1"];

$sql_insert = "INSERT INTO customer (CustomerId,firstname, lastname,username, Email_address,password)
      VALUES ('$customerid','$firstname','$Lastname','$username','$Email_address','$password')";

if ($conn->query($sql_insert) === TRUE) 
{
  echo "New record created successfully";
} else 
{
  echo "Error:". $conn->error;
}
$sql_select="SELECT * FROM customer";
$result=$conn->query($sql_select);
/*print_r($result);
$rows=$result->fetch_assoc();
print_r($rows);
if($result->num_rows >0)
{
  while($row=$result->fetch_assoc())
  {
    $rows[]=$row;
  }
}
echo"<pre>";
print_r($rows);
echo"</pre>";*/

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet"href="css/css7.css" />
</head>
<body>
    <table class="table1"border="1px">
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