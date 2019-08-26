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
        // $id = $_POST["txtId"];
        $id = $_GET["id"];
        // $name = $_GET["txtName"];
        // $price = $_GET["txtPrice"];
        // $content = $_GET["txtContent"];

        // $stsm = $pdo->prepare("INSERT INTO product(name, 
        // price, content) VALUES (?,?,?)");
        // $stsm->bind_param("sss", $name, $price, $content);
        // $stsm->execute();
        // $stsm->close();  

        

        $sql = "DELETE FROM product WHERE id = " . $id;
        echo $sql;
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id, $name, $price, $content]);
    ?>

    "Your product has been added successfully"; 
    <button><a href="index.php">Back</a></button>;
    
</body>
</html>