<?php session_start(); ?>
<!DOCTYPE html>
<html lamg="en">

<head>

<title></title>
<link rel="stylesheet" href="css/css4.css">

</head>
<body>
    <div>
        <table border="10px">
        <tr>
          <th>Id</th>
            <th>Food item</th>
            <th>Image </th>
             <th>Paragraph</th>
            <th>Price</th>
            <th>Quantity</th>
            <th colspan="2">Operation</th>
        </tr>

                <?php 

                         require_once("connect2.php");

                         if(isset($_SESSION['cartitems']))
                         {

                          $cartitems = $_SESSION['cartitems'];
                          for($i=0; $i<count($cartitems); $i++)
                          {
                          $currentItem =$cartitems[$i];
                          $sql="SELECT * FROM `food_menu` WHERE `Id` = $currentItem;";
                          $result=$conn->query($sql);
                          while($row = $result->fetch_assoc())

                        { 

                 ?>
                         <tr>
                          <td><?php echo $row['Id'];?></td>;
                          <td><?php echo $row['Food_item'];?></td>;
                          <td><?php echo'<img src="asset/' .$row['image_path'].'"width="100px;" height="100px;" alt="Image">'?></td>;
                          <td><?php echo $row['Paragraph'];?></td>;
                          <td><?php echo $row['price'];?></td>;
                         
             
                          <td>
                            <form action="" method="post">
                              <input type="number" name="quantity"/>


                            </form>
                          </td>
                          <td><a href="CartDelete.php?id=<?php echo $row['Id'];?>"><span>Remove</span></a></td>;

                        </tr>
                     
                
                 <?php   
                      }
                        }

                 $conn->close(); 
                            } 

                 ?>

             
            </table> 
          </div>
         


</body>
</html>
