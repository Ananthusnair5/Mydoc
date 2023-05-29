<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="ananthulist";
    $connection=mysqli_connect($host,$username,$password,$database);
    if($connection)
    {
        echo"connected successfully";
    }
    else
    {
        echo"not connnetced";
    }
    ?>