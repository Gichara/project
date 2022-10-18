<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/css3.css" />
</head>
<body>
    <div class="Register">
        <h1>Registration page</h1>
        <form method="post"action="myquery6.php">
            <label for="Firstname">FirstName:</label>
            <input type="text" id="Firstname"name="my_name"required>
            <label for="Lastname">LastName:</label>
            <input type="text"id="Lastname"name="my_name1"required >
            <label for="username">Username:</label>
            <input type="text"id="username"name="username"required >
            <label for="Email">Email Address:</label>
            <input type="email"id="Email"name="myemail"required>
            <label for="password">Password:</label>
            <input type="password"id="password"name="my_password1"required >
            <input type="submit"name="submit1"value="REGISTER" >
        </form>
    </div>
</body>
</html>