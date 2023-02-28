<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- testdb </title>
</head>
<body>
    <?php 
    try{
    $pdo= new PDO('mysql:host=localhost;dbname=testdb', "root", "");

    $username="admin";
    $tempPass="admin";
    $password= password_hash($tempPass, PASSWORD_DEFAULT);

    $sql= "INSERT INTO users (username, pass) VALUES ('$username', '$password')";

    $pdo->exec($sql);

    echo "new record created successfully";

    echo "<br>";

    $last_id=$pdo->lastInsertId(); 
     
    echo "Last inserted user id is $last_id";

    }   
    catch(PDOException $e){
        echo $e->getMessage();
    }
   
    
    
    ?>
</body>
</html>