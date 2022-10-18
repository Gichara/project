<?php
session_start();
require_once("connect2.php");
$sql_select="SELECT * FROM customer";
$result=$conn->query($sql_select);
$sql_select="SELECT * FROM food_menu";
$result1=$conn->query($sql_select);
$sql_select="SELECT * FROM Order_item";
$result2=$conn->query($sql_select);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet"href="css/css9.css" />
</head>
<body>
     
	<nav>
        <ul>
            <li><a href="upload_image.php">Add item</a></li>
            <li><a href="registerAdmin.php">Add an Administrator</a></li>
        </ul>
    </nav>
    <main>
    	<div class="mytable">
    		<table class="table1"border="10px">
        <tr>
            <th>CustomerId</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>username</th>
            <th>email address</th>
            <th>Password</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
         ?>
         <tr>
             <td><?php echo $row['CustomerId'];?></td>;
             <td><?php echo $row['firstname'];?></td>;
             <td><?php echo $row['lastname'];?></td>;
             <td><?php echo $row['username'];?></td>;
             <td><?php echo $row['Email_address'];?></td>;
             <td><?php echo $row['password'];?></td>;
             <td><a href="myquery5.php? id=<?php echo $row["CustomerId"];?>"class="edit_btn">Update</a></td>;
             <td><a href="delete.php? id=<?php echo $row["CustomerId"];?>"class="del_btn">Delete</a></td>;
         </tr>
        <?php   
        }
        ?>
    </table>
    	</div>
    	<div>
    		<table border="10px">
        <tr>
            <th>Id</th>
            <th>Food item</th>
            <th>Image path</th>
             <th>Paragraph</th>
            <th>Price</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        while($row=$result1->fetch_assoc())
        {
         ?>
         <tr>
            <td><?php echo $row['Id'];?></td>;
             <td><?php echo $row['Food_item'];?></td>;
             <td><?php echo $row['image_path'];?></td>;
             <td><?php echo $row['Paragraph'];?></td>;
             <td><?php echo $row['price'];?></td>;
             <td><a href="myquery8.php? id=<?php echo $row["Food_item"];?>"class="edit_btn">Update</a></td>;
             <td><a href="delete1.php? id=<?php echo $row["Food_item"];?>"class="del_btn">Delete</a></td>;
         </tr>
        <?php   
        }
        ?>
    </table>
    	</div>
        <div>
            <table border="10px">
        <tr>
            <th>Food_item</th>
            <th>CustomerId</th>
             <th>quantity</th>
            <th>Price</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        while($row=$result2->fetch_assoc())
        {
         ?>
         <tr>
             <td><?php echo $row['Food_item'];?></td>;
             <td><?php echo $row['customer_id'];?></td>;
             <td><?php echo $row['quantity'];?></td>;
             <td><?php echo $row['price'];?></td>;
         </tr>
        <?php   
        }
        ?>
    </table>
        </div>
    	
    </main>

</body>
</html>