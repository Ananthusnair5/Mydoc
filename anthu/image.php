<?php
$host="localhost";
$username="root";
$password="";
$database="ananthu";
$connection = mysqli_connect($host,$username,$password,$database);
if($connection){
  echo "Successfully Connected";
}else{
  die("Could not connect");
}


if(isset($_POST['ok']))
{
$name= $_POST['uname'];
$age= $_POST['age'];
$filename = $_FILES['image']['name'];
  
   //Select file type
  $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
  
   //valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
 
  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
//Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){

$sql="INSERT INTO image(uname,age,file_name)VALUES ('$name','$age','$filename')";
$result=$connection->query($sql);
if($result){
  echo 'Data inserted successfully';
}
else{
  echo 'Error: '.mysqli_error($connection);
}
}else{
echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
}
  }

}
mysqli_close($connection);
?>
<img src="upload/<?php echo $filename?>" width=100>
<!DOCTYPE html>
<html >
<head>
    
</head>
<body>
<h1 align="center">welcome</h1>
<form action="" method="post" enctype="multipart/form-data">
    <table align="center">
       <tr>
         <td>Name </td>
         <td><input type="text" name="uname" value=""></td>
          </tr>
          <tr>
          <tr>
         <td>Age </td>
         <td><input type="text" name="age" value=""></td>
          </tr>
  <tr>
    <td><input type="file" name="image"  id="file" multiple ></td>
            <td><button type="submit" name="ok">Submit</button></td>

          </tr>
          
        </table>
       
</body>
</html>