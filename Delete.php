<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include "database.php";
        $id = $_GET["id"];

        $sql = "DELETE FROM product WHERE id = " . $id;
        echo $sql;
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    ?>

    "Your product has been added successfully"; 
    <button><a href="index.php">Back</a></button>;
    
</body>
</html>