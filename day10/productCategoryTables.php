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
        $con= new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql2= "CREATE TABLE categories(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL
        )";


        $sql = "CREATE TABLE products(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL, 
            category_id INT(11) NOT NULL, 
            FOREIGN KEY (category_id) REFERENCES categories(id)
        )";
        
        $con->exec($sql2);
        $con->exec($sql);
       

        echo "Tables category and products created succesfully";
    } catch (Exception $e){
        echo $e->getMessage();
    }

    
    
    
    ?>
</body>
</html>