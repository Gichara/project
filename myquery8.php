<?php
require_once("connect2.php");
if(count($_POST)>0)
{
    if(move_uploaded_file($file_tmp_location,$file_path.$original_file_name ))
    {
        $file_path="asset/";
        $file=$_FILES["food-image"];
        $original_file_name=$_FILES['food-image']['name'];
        $file_tmp_location=$_FILES['food-image']['tmp_name'];
        mysqli_query($conn,"UPDATE food_menu set Food_item='".$_POST["fooditem"]."',
        image_path='$original_file_name',
        price='".$_POST["price"]."',
        WHERE Food_item='".$_POST["fooditem"]."'");
        $message="Record Modified Successfully";
    }
    
    
}
   $result1=mysqli_query($conn,"SELECT*FROM food_menu WHERE Food_item='".$_GET["id"]."'");
    $row=mysqli_fetch_array($result1);
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
        <form method="post"action="">
            <div><?php if(isset($message)) { echo $message; } ?> </div>
            <label for="fooditem">food item:</label>
            <input type="text" id=""name="fooditem"placeholder="food item name"value="<?php echo $row['Food_item'];?>"required>
            <label for="foodimage">image:</label>
            <input type="file"name="food-image"id="foodimage"value="<?php echo $row['image_path'];?>"required>
            <label for="foodprice">Price:</label>
            <input type="number"name="price"value="<?php echo $row['price'];?>"required >
            <input type="submit"name="submitImage"value="SAVE" >
        </form>
    </div>
</body>
</html>