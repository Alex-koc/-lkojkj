<?php
require_once 'mysql.php';


$sql = "SELECT * FROM `category`";
$result = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Категории</title>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Таблица категорий</h1>
        <table class = "table table-borderless">
            <thead class="text-center">
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            <?php

        while ($row = $result->fetch())
        {

            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td><a href="">Редактировать</a></td>';
            echo '<td><a href="delete.php?id='.$row['id'].'">Удалить</a></td>';
            echo "</tr>";

        }

?>
        </table>
        <br>
        <form action="category.php">
            <button>Добавить категорию</button>
        </form>
        <form action="index.html">
            <br>
            <button>Главное меню</button>
        </form>
    </div>
</section>
</body>
</html>