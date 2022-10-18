<?php
session_start();
include("zarafashiondbconnect.php");

?>
<!DOCTYPE html>
<html>
<head>
	
   <title>Women's Products</title>
	
</head>
<body>
	<nav>
		<ul>
            <a href="#" style="display:; flex-direction: row;"><li>
                    <div style="position: absolute; right:50px; top: 80px;">
                         <a href="cart.php">
                            <svg height="25pt" viewBox="0 -31 512.00033 512" width="25pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"/>
                            </svg>
                        </a>
                  </div>
                    <div style="position: absolute;background-color: white; color: black; border-radius: 20%; padding: 10px; right:10px; top: 75px;">
                        <span>
                           <?php $_SESSION['shopping_cart'] ?>;
                        </span>    
                    </div>
                </li></a>
        </ul>
	</nav>

	<div class = "container-fluid">
		<div class = "col-md-12">
			<div class = "row">
				<div class ="col-md-6">
			      <h2 class = "text-center">Outfits Menu</h2>

			      <div class="col-md-12">
			      	<div class ="row">
			      		

			  <?php
        $query = "SELECT * FROM womens_products ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
    			      	<div class = "col-md-4">

			      	      <form method = "post" action = "add_to_cart.php?id=<?=$row['id']?>">
			      		     <img src = "womensproducts_pictures/<?= $row['image'] ?>" style = 'height: 150px; width: 150px;'>
			      		     <h5 class="text-center"><?= $row['name']; ?></h5>
			      		     <h5 class="text-center">KSH <?=number_format($row['price'],2);?></h5>
			      		     <input type="hidden" name="name" value="<?= $row['name'] ?>">
			      		     <input type="hidden" name="price" value="<?= $row['price'] ?>">
			      		     <input type="number" name="quantity" value="1" class="form-control">
			      		     <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add To Cart">
			      	     </form>
			          </div>
                      <?php

			          }
                    }
                     
                    else
                     {
                         echo "No outfits available";
                     }
                    
			        ?>

		       </div>
		       </div>
			      	
			    </div>
		      


		       
	       </div>
	   </div>
	</div>

	

</body>
</html>