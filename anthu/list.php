<!DOCTYPE html>
<html>
<head>
    <title>show table</title>
</head>
<body>
<?php
include_once ('conn.php');
$sql ="select * from anlist";
$data =mysqli_query($connection,$sql);
$total=mysqli_num_rows($data);
if ($total) {
    ?>
    <table border="2">
<tr>
<th>id</th>
<th>Name</th>
<th>Age</th>
<th colspan="2">Actions</th>
</tr><?php
    
    while ($result = mysqli_fetch_array($data)) {
      ?>
      <tr>
      <td><?php echo $result['id'];?></td>
        <td><?php echo $result['uname'];?></td>
        <td><?php echo $result['age'];?></td>
<td><a href="update.php?id=<?php echo $result['id'];?>">EDIT</a></td>
<td><a onclick="return confirm('Are you sure,you want to delete?')" href="delete.php?id=<?php echo $result['id'];?>">DELETE</a></td>
        
                
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