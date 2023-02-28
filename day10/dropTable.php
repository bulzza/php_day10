<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>okok test</title>
</head>
<body>
<?php 
    try{
    $pdo= new PDO('mysql:host=localhost;dbname=testdb', "root", "");

    $sql= "DROP TABLE test";

    $pdo->exec($sql);

    echo "tabel deleted successfully";

    echo "<br>";
    }   catch(PDOException $e){
        echo $e->getMessage();
    }
   
    
    
    ?>
</body>
</html>