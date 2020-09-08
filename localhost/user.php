<?php
session_start();
require_once 'mysql.php';

if(isset($_SESSION['auth']))
{
    $stmt= $pdo->query('SELECT * FROM `users` WHERE login="'.$_SESSION['auth'].'"');
    $result = $stmt->fetch();

} else {
    header('Location: http://localhost/index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
<body>
        <section class="container">
            <div class="login">
                <h1>Личный кабинет</h1>
                        <?php

                        echo '<p>Логин: '.$result['login'].'<p>';
                        echo '<p>Телефон: '.$result['phone'].'<p>';
                        echo '<p>Пароль: '.$result['password'].'<p>';
                        ?>
                    </p>
                <form method="post" action="exit.php">

                    <p class="submit"><input type="submit"  name="commit" value="Выход"></p>
                </form>

            </div>
        </section>

</body>
</html>