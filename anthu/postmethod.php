<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=""method="POST">
    <label for="username">username</label>
    <input type="text" name="username"><br>
    <label for="password">password</label>
    <input type="password" name="password"><br>
    <input type="submit">
</form>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo"you have entered your password";
?>
</body>
</html>