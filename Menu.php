<?php
require_once("connect2.php");
$sql_select="SELECT * FROM food_menu";
$result1=$conn->query($sql_select);
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <link rel="stylesheet" href="css/css4.css" />
</head>
<body>
        <?php  echo "Welcome   ".$_SESSION["username"];?>
        
    <nav>
        <img src="images/jojo.png">
        <label class="one">Pizza inn</label>
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="">Rewards</a></li>
            <li><a href="">Locations</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
            <a href="#" style="display:; flex-direction: row;"><li>
                    <div style="position: absolute; right:50px; top: 80px;">
                         <a href="ShoppingCart.php">
                            <svg height="25pt" viewBox="0 -31 512.00033 512" width="25pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"/>
                            </svg>
                        </a>
                  </div>
                    <div style="position: absolute;background-color: white; color: black; border-radius: 20%; padding: 10px; right:10px; top: 75px;">
                        <span>
                            <?php echo $_SESSION['cart-']?>;
                        </span>    
                    </div>
                </li></a>
        </ul>
       
    </nav>
    <main>
        
            <?php foreach($result1 as $product):?>
        <div class="Item1">
            <h2><?php echo $product['Food_item'];?></h2>
            <img src="asset/<?php echo $product['image_path'];?>">
            <p><?php echo $product['Paragraph'];?></p>
            <p>Price:<?php echo $product['price'];?>Ksh</p>
            <form method="post"action="cart.php">
            <input type="hidden" name="mymeal" value="<?php echo $product['Id'];?>">
            <input type="submit"name="add_to_cart"value="Order">
            </form>
            
        </div>
        
        <?php endforeach; ?>
    </main>
    <footer>
        <section>
            <ul>
                <li class="aa"><a href="">About us</a></li>
                <li class="aa"><a href="">News Room</a></li>
                <li class="aa"><a href="">Careers</a></li>
                <li class="aa"><a href="">Contact us</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </section>
    </footer>
</body>
</html>
