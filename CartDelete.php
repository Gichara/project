<?php
session_start();

if (isset($_GET['id'])){

  $cart=$_SESSION['cartitems'];

  unset($cart[array_search($_GET['id'], $cart)]);
  $_SESSION['cartitems'] =$cart;

}
?>