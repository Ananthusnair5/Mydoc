<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    .error
    {
        color:red;
    }
</style>
</head>
<body>
<?php
$uname = $age = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["uname"]))
    {
        $uname="Name is required ";
    }
    
    
    if(empty($_POST['age']))
    {
        $age="Age is required ";
    }
    
}
?>
    <form method="POST">
        <p><label for="username">username:</label>
        <input type="text" name="uname"id="uname"><br><br></p>
        <span class="error">* <?php echo $uname;?></span><br><br>
        <p><label for="age">age:</label>
        <input type="number" name="age" id="age"><br><br></p>
        <span class="error">* <?php echo $age;?></span><br><br>
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
        if(empty($uname)||empty($age))
    {
        echo "<br>Data not inserted";
    }
    else
       {
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
}
    
    ?>
        
</body>
</html>