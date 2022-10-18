<?php
	session_start();
	include("zarafashiondbconnect.php");

    if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'           =>  $_GET["id"],
                'item_image'         =>  $_POST["image"],
                'item_name'           =>  $_GET["name"],
                'item_price'        =>  $_POST["price"],
                'item_quantity'     =>  $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'           =>  $_GET["id"],
            'item_image'         =>  $_POST["image"],
            'item_name'           =>  $_GET["name"],
            'item_price'        =>  $_POST["price"],
            'item_quantity'     =>  $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}


?>