<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Day 9</title>
</head>
<body>
    <?php 
    
    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        $con = new PDO ("mysql:host=$host", $user, $pass);

        $sql= "CREATE DATABASE testdb";

        $con->exec($sql);

        echo "Database created succesfully";
    } catch (Exception $e){
        echo "Database has not been created";
    }


   
    ?>
    
</body>
</html>