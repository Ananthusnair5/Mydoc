<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $fruits=array("banana","grapes","orange","apple");
   echo $fruits[0]."<br>";
   echo $fruits[1]."<br>";
   echo $fruits[2]."<br>";
   echo $fruits[3]."<br>";
   echo count($fruits);
   for($i=0;$i<count($fruits);$i++){
    echo $fruits[$i];
echo"<br>";
   }
   ?>
</body>
</html>