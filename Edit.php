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
        
        $id = $_POST["txtId"];
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"];

        $sql = "UPDATE product SET name = '$name', price ='$price', content = '$content' WHERE id = " . $id;
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    ?>

    "Your product has been added successfully"; 
    <button><a href="index.php">Back</a></button>;
    
</body>
</html>