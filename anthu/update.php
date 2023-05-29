<?php
include_once ('conn.php');
$id = $_GET['id'];
$sql ="select * from anlist where id='$id'";
$data =mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html>
<head>
    <title>update</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="id" placeholder="id" value="<?php echo $row['id']; ?>"><br><br>
    <input type="text" name="uname" placeholder="name" value="<?php echo $row['uname']; ?>"><br><br>
    <input type="text" name="age" placeholder="age" value="<?php echo $row['age']; ?>"><br><br>

    <input type="submit" name="update" value="update">
</form>
<?php
if(isset($_POST['update']))
{
$name= $_POST['uname'];
$age= $_POST['age'];
$sql2="UPDATE anlist SET uname='$name',age='$age' WHERE id='$id'";
$result=mysqli_query($connection,$sql2);
if($result){
    echo "Success";
    header("Location: list.php");
  }else{
    die("Could not updated");
  }

}
?>

</body>
</html>