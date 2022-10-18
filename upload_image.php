<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>upload page</title>
    <link rel="stylesheet"href="css/css3.css"/>
</head>
<body>
        <form method="POST"action="process_upload.php"enctype="multipart/form-data">
            <label for="fooditem">Food Name:</label>
            <input type="text" name="fooditem"required="true"placeholder="food item name">
            <br></br>
            <label for="foodimage">image</label><br/>
            <input type="file" name="food-image"required="true"id="foodimage">
            <br></br>
            <label for="paragragh">Paragraph</label><br/>
            <input type="text" name="paragragh"required="true"id="paragraph1">
            <br></br>
            <label for="foodprice">Price</label><br/>
            <input type="number" name="price"required="true"id="foodprice">
            <br></br>
            <input type="submit"name="submitImage"value="SAVE" >
        </form>
    

</body>
</html>