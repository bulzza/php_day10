<?php 
$name= $_GET['name'];
$surname= $_GET['surname'];
$email= $_GET['email'];

echo "Welcome ".$name." ".$surname." ",$email;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- DAY 10</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="surname" placeholder="surname"><br>
        <input type="email" name="email" placeholder="email"><br>
        <button type="submit" name="submit">ADD</button>
    </form>

        

</body>
</html>