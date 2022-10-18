<?php
	session_start();
	require_once("connect2.php");

	if(isset($_POST['add_to_cart'])){
        $productId=(int) $_POST['mymeal'];
        
        $_SESSION['cart-quantity']+=1;

      
        if(isset($_SESSION['cartitems']))
        {
           
            array_push($_SESSION['cartitems'],$productId); 

            
        }

         
        else{
            $_SESSION['cartitems'] = array();
        }
    }


?>
