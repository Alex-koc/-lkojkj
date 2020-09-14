<?php

$id = $_GET['id'];


require_once 'mysql.php';
$stmt = $pdo->query("SELECT * FROM `product` WHERE id='$id'");
$result = $stmt->fetch();
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Таблица товаров</h1>
        <form method="post" enctype="multipart/form-data" action="products.php">
            <?php
            Echo'<p><input type="text" name="name" value="" placeholder="Название"></p>';
            Echo'<p><input type="text" name="text" value="" placeholder="Описание"></p>';
            Echo'<p><input type="text" name="price" value="" placeholder="Цена"></p>';
            Echo'<p class="submit"><input type="submit" name="commit" value="Добавить"></p>';
            ?>
        </form>
    </div>
</section>
</body>
