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
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "testdb";

    try {
        $con = new PDO ("mysql:host=$host; dbname=$db", $user, $pass);

        $sql= "CREATE TABLE users(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(30) NOT NULL, 
            pass VARCHAR(255) NOT NULL

        )";

        $con->exec($sql);

        echo "Table users created succesfully";
    } catch (Exception $e){
        echo $e->getMessage();
    }


   
    ?>
</body>
</html>