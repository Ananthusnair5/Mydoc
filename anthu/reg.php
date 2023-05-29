<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<label for="n">Name</label><br>
<input type="text" name="un"><br><br>
<label for="a">Email</label> <br>
<input type="email" name="em"><br><br>
<label for="p">Phone</label> <br>
<input type="number" name="ph"><br><br>
<input type="submit" value= "submit" name="ok"><br><br>
    
</body>
</html>

<?php
$host="localhost";
$username="root";
$password="";
$database="lj";
$connection=mysqli_connect($host,$username,$password,$database);
if($connection)
{
    echo "connected successfully";
}
else
{
echo "not connected";
}

if (isset($_POST["ok"]))
{
    $name=$_POST["un"];
    $email=$_POST["em"];
    $Phone=$_POST["ph"];

    $sql="INSERT INTO  reg(Name,Email,Phone) VALUES ('$name','$email','$Phone')";
    $result=$connection->query($sql);
    if($result)
    {
        echo "Data inserted Succesfully";
}
else
{
echo 'Error';
}
}
?>