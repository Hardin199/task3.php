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

    include'task3.php';
    ?>
    <p><h1>hello<h1></p>

    <?php
    
    $connect = mysqli_connect("localhost", "root", "", "taskdb");

    if($connect){
        echo "connected successfully";
    }else{
        echo "not successful";
    }


?>
</body>
</html>