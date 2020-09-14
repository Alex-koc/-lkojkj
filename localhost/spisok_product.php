<?php
require_once 'mysql.php';


$sql = "SELECT * FROM `product`";
$result = $pdo->query($sql);


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
        <?php
        echo "<table><tr><th>№</th><th>Товары</th><th>Описание</th><th>Цена</th><th>Фото</th><th>Редактировать</th><th>Удалить</th></tr>";
        while ($row = $result->fetch())
        {

            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['text'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['photo'].'</td>';
            echo '<td><a href="update1.php?id='.$row['id'].'">Редактировать</a></td>';
            echo '<td><a href="delete1.php?id='.$row['id'].'">Удалить</a></td>';
            echo "</tr>";

        }

        ?>
        </table>
        <br>
        <form action="product.php">
            <button>Добавить товар</button>
        </form>
        <form action="index.html">
            <br>
            <button>Главное меню</button>
        </form>
    </div>
</section>
</body>
</html>