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
<link type="text/css" rel="stylesheet" href="register.css">
</head>
<body>
    <h1>REGISTRATION</h1>
<?php
$fname = $lname = $email = $cnumber = $password = $address ="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["fname"]))
    {
        $fname="firstname is required ";
    }
    
    
    if(empty($_POST['lname']))
    {
        $lname="lastname is required ";
    }
    if(empty($_POST["email"]))
    {
        $email="email is required ";
    }
    if(empty($_POST["cnumber"]))
    {
        $cnumber="contact number is required ";
    }
    if(empty($_POST["password"]))
    {
        $password="password is required ";
    }
    if(empty($_POST["address"]))
    {
        $address="address is required ";
    }
    
}
?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <p><label for="firstname">firstname:</label>
        <input type="text" name="fname"id="fname"><br><br></p>
        <span class="error">* <?php echo $fname;?></span><br><br>
        <p><label for="lname">lastname:</label>
        <input type="text" name="lname" id="lname"><br><br></p>
        <span class="error">* <?php echo $lname;?></span><br><br>
        <p><label for="email">email:</label>
        <input type="email" name="email" id="email"><br><br></p>
        <span class="error">* <?php echo $email;?></span><br><br>
        <p><label for="cnumber">contact number:</label>
        <input type="number" name="cnumber" id="cnumber"><br><br></p>
        <span class="error">* <?php echo $cnumber;?></span><br><br>
        <p><label for="password">password:</label>
        <input type="text" name="password" id="password"><br><br></p>
        <span class="error">* <?php echo $password;?></span><br><br>
        <p><label for="address">address:</label>
        <textarea name="address" id="address"></textarea><br><br></p>
        <span class="error">* <?php echo $address;?></span><br><br>
        <p> <label for="file">Filename:</label>
        <input type="file" name="image" id="file"><br><br></p>
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
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $cnumber=$_POST['cnumber'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $filename=$_FILES['image']['name'];
        $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
        if( in_array($imageFileType,$extensions_arr) )
 {
//Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename))
{
    if(empty($fname)||empty($lname)||empty($email)||empty($cnumber)||empty($password)||empty($address))
    {
        echo "<br>Data not inserted";
    }
    else
    {

        
        $sql="INSERT INTO regvalid(finame,laname,email,cnumber,pass,addr,filen) VALUES('$fname','$lname','$email','$cnumber','$password','$address','$filename')";
        $result=$connection->query($sql);
        if($result)
        {
            echo "data inserted successfully";
        }
        else{
            echo "Error: ".mysqli_error($connection);
        
        }
    
    }
}
    }

    }
    ?>
        
</body>
</html>