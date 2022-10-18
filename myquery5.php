<?php
require_once("connect2.php");
if(count($_POST)>0)
{
    mysqli_query($conn,"UPDATE customer set CustomerId='".$_POST["mycustomerId"]."',
        firstname='".$_POST["my_name"]."',
        lastname='".$_POST["my_name1"]."',
        username='".$_POST["my_username"]."',
        Email_address='".$_POST["myemail"]."',
        password='".$_POST["my_password1"]."'
        WHERE CustomerId='".$_POST["mycustomerId"]."'");
    $message="Record Modified Successfully";
    
}
   $result=mysqli_query($conn,"SELECT*FROM customer WHERE CustomerId='".$_GET["id"]."'");
    $row=mysqli_fetch_array($result);



?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/css3.css" />
</head>
<body>
    <div class="Register">
        <h1>Registration page</h1>
        <form method="post"action="">
            <div><?php if(isset($message)) { echo $message; } ?> </div>
            <label for="CustomerId">Customer id:</label>
            <input type="number" id="CustomerId"name="mycustomerId"value="<?php echo $row['CustomerId'];?>"required>
            <label for="Firstname">FirstName:</label>
            <input type="text"name="my_name"value="<?php echo $row['firstname'];?>"required>
            <label for="Lastname">LastName:</label>
            <input type="text"name="my_name1"value="<?php echo $row['lastname'];?>"required >
            <label for="username">Username:</label>
            <input type="text"name="my_username"value="<?php echo $row['username'];?>"required >
            <label for="Email">Email Address:</label>
            <input type="email"name="myemail"value="<?php echo $row['Email_address'];?>"required>
            <label for="password">Password:</label>
            <input type="password"name="my_password1"value="<?php echo $row['password'];?>"required >
            <input type="submit"name="submit"value="submit"class='update-btn'><strong>Update</strong> >
        </form>
    </div>
</body>
</html>