<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$id=$uname = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = test_input($_POST["uname"]);
  $age = test_input($_POST["age"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="uname">
  <br><br>
  Age: <input type="age" name="age">
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $uname;
echo "<br>";
echo $age;
?>

</body>
</html>