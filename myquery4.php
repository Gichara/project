<?php
require_once("connect2.php");
session_start();
if(isset($_POST["Login"]))
{
    if(empty($_POST['my_username'])||empty($_POST['password']))
    {
        header("location:login.php");
    }
}
else
{
    $sql_select="SELECT * FROM customer where username='".$_POST['my_username']."' and password='".$_POST['my_password']."'";
    $result=$conn->query($sql_select);
 
     if($result->fetch_assoc())
    {
        $_SESSION["username"]= $_POST['my_username'];
         $_SESSION['cart-quantity'] = 0;
         $_SESSION['cartitems']=array();

        header("location:Menu.php");
    }
    else
    { 
        header("location:login.php");
    }
    
}
   



?>