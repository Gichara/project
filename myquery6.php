<?php
require_once("connect2.php");
if(isset($_POST['submit1']))
{
    $firstname=$_POST["my_name"];
    $Lastname=$_POST["my_name1"];
    $Email_address=$_POST["myemail"];
    $username=$_POST["username"];
    $password=$_POST["my_password1"];
	$sql_insert = "INSERT INTO adminstrator (FirstName, LastName,Username, Email,Password)
      VALUES ('$firstname','$Lastname','$username','$Email_address','$password')";
if ($conn->query($sql_insert) === TRUE) 
{
  echo "New record created successfully";
} else 
{
  echo "Error:". $conn->error;
}

}


?>