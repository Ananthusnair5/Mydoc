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
        <p><label for="username">username:</label>
        <input type="text" name="uname"id="uname"><br><br></p>
        <p><label for="age">age:</label>
        <input type="text" name="age" id="age"><br><br></p>
        <input type="submit" value="submit" name="ok">
</form>


    <?php
    $host="localhost";
    $username="root";
    $password="";
    $database="ananthu";
    $connection=mysqli_connect($host,$username,$password,$database);
    if($connection)
    {
        echo"connected successfully";
    }
    else
    {
        echo"not connnetced";
    }
    
    if(isset($_POST['ok']))
    {
        $uname=$_POST['uname'];
        $age=$_POST['age'];
        $sql="INSERT INTO and1(uname,Age) VALUES('$uname','$age')";
        $result=$connection->query($sql);
        if($result)
        {
            echo "data inserted successfully";
        }
        else{
            echo 'Error';
        
        }
    

    }
    
    ?>
        
</body>
</html>
  