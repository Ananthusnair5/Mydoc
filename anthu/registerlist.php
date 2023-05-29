<!DOCTYPE html>
<html>
<head>
    <title>show table</title>
</head>
<body>
<center><h1>EMPLOYEE DETAILS</h1></center>
<?php
include_once ('conn1.php');
$sql ="select * from regvalid";
$data =mysqli_query($connection,$sql);
$total=mysqli_num_rows($data);
if ($total) {
    ?>
    <a href="register.php"><button type="button">ADD NEW</button>
    <table border="2">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>contact number</th>
<th>password</th>
<th>address</th>
<th>Image</th>
<th colspan="2">Actions</th>
</tr><?php
    
    while ($result = mysqli_fetch_array($data)) {
      ?>
      <tr>
      <td><?php echo $result['id'];?></td>
        <td><?php echo $result['finame'];?></td>
        <td><?php echo $result['laname'];?></td>
        <td><?php echo $result['email'];?></td>
        <td><?php echo $result['cnumber'];?></td>
        <td><?php echo $result['pass'];?></td>
        <td><?php echo $result['addr'];?></td>
        <td><img src="upload/<?php  echo $result['filen'];?>" width="100px" ></td>

<td><a href="update1.php?id=<?php echo $result['id'];?>">EDIT</a></td>
<td><a onclick="return confirm('Are you sure,you want to delete?')" href="delete1.php?id=<?php echo $result['id'];?>">DELETE</a></td>
        
                
            </tr>

        <?php
    }
}
else
{
    echo "no record found";
}
?>
</table>
</body>
</html>