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
$nmEr = $agEr = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["nm"]))
    {
        $nmEr="Name is required ";
    }
    
    
    if(empty($_POST['age']))
    {
        $agEr="Age is required ";
    }
    
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nm">Name :</label><br>
    <input type="text" name="nm"><br>
    <span class="error">* <?php echo $nmEr;?></span><br><br>
    <label for="age">Age :</label><br>
    <input type="number" name="age"><br>
    <span class="error">* <?php echo $agEr;?></span><br><br>
    <input type="Submit" value="Submit" name="ok">
</form>

<?php
$host="localhost";
$un="root";
$pw="";
$db="deni_db";
$connection=mysqli_connect($host,$un,$pw,$db);
if($connection)
{
    echo "Connected Successfully";
}
else
{
    echo "Not Connected";
}

if(isset($_POST['ok']))
{
    $nm=$_POST['nm'];
    $ag=$_POST['age'];
    if(empty($nm)||empty($ag))
    {
        echo "<br>Data not inserted";
    }
    else
    {
    $sql="INSERT INTO mytable1(Name,Age) Values('$nm','$ag')";
    $result=$connection->query($sql);
    if ($result)
    {
        echo "<br>Data inserted Successfully";
    }
    else
    {
        echo "Error: ".mysqli_error($connection);
    }
}
}
?>
</body>
</html>
