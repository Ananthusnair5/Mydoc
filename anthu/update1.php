<?php
include_once ('conn1.php');
$id = $_GET['id'];
$sql ="select * from regvalid where id='$id'";
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
    <input type="text" name="fname" placeholder="firstname" value="<?php echo $row['finame']; ?>"><br><br>
    <input type="text" name="lname" placeholder="lastname" value="<?php echo $row['laname']; ?>"><br><br>
    <input type="text" name="email" placeholder="email" value="<?php echo $row['email']; ?>"><br><br>
    <input type="text" name="cnumber" placeholder="contact number" value="<?php echo $row['cnumber']; ?>"><br><br>
    <input type="text" name="password" placeholder="password" value="<?php echo $row['pass']; ?>"><br><br>
    <input type="text" name="address" placeholder="address" value="<?php echo $row['addr']; ?>"><br><br>





    <input type="submit" name="update" value="update">
</form>
<?php
if(isset($_POST['update']))
{
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$cnumber= $_POST['cnumber'];
$password= $_POST['password'];
$address= $_POST['address'];
$sql2="UPDATE regvalid SET finame='$fname',laname='$lname',email='$email',cnumber='$cnumber',pass='$password',addr='$address' WHERE id='$id'";
$result=mysqli_query($connection,$sql2);
if($result){
    echo "Success";
    header("Location: registerlist.php");
  }else{
    die("Could not updated");
  }

}
?>

</body>
</html>