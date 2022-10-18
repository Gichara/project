<?php
$conn= mysqli_connect("localhost","M.EDWIN","Eddy37115436","myfoodwebsite");
if(!$conn)
{
	die("Not connected".mysql_connect_error());
}
//Create Database
/*$sql="CREATE DATABASE mywebsite";
if($conn->query($sql)===TRUE)
{
	echo "Database Created";
}else
{
	echo "Error in creating database".$conn->error;
}*/


?>