<?php
require_once("connect2.php");
$sql="DELETE FROM food_menu WHERE Food_item='".$_GET["id"]."'";
if(mysqli_query($conn,$sql))
{
	echo "Record deleted";
}
else
{
	echo "Error" .$conn->error;
}
?>