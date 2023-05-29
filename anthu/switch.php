<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="POST">
        <label for="num1">Enter a number</label><br>
        <input type="number"name="num1" id="num1"><br>
        <input type="submit">
</form>
<?php  
$num1=$_POST["num1"];
switch($num1){
    case 1:
        echo"ONE";
        break;
        case 2:
            echo"TWO";
            break;
            case 3:
                echo"THREE";
                break;
                default:
                echo"Invalid number";
                break;
}
?>
</body>
</html>