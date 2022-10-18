<?php
require_once("connect2.php");
$sql="DELETE FROM customer WHERE CustomerId='".$_GET["id"]."'";
if(mysqli_query($conn,$sql))
{
	echo "Record deleted";
}
else
{
	echo "Error" .$conn->error;
}
?>