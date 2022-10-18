<?php
require_once("connect2.php");
if(isset($_POST["submitImage"]))
{
	$file=$_FILES["food-image"];
	print_r($file);
	$file_path="asset/";
	$original_file_name=$_FILES['food-image']['name'];
	$file_tmp_location=$_FILES['food-image']['tmp_name'];

	if(move_uploaded_file($file_tmp_location,$file_path.$original_file_name ))
	{
		$sql_insert="INSERT INTO food_menu(Food_item,image_path,Paragraph,price) VALUES ('".$_POST['fooditem']."','$original_file_name','".$_POST['paragragh']."','".$_POST['price']."');";
		//setData($sql);
		if ($conn->query($sql_insert) === TRUE) 
            {
               echo "image path inserted";
            }
            else
            {
            	echo "Error".$conn->error;
            }  
	}
	$sql_select="SELECT * FROM food_menu";
   $result1=$conn->query($sql_select);
}
else
{
	echo "not running";
}




?>