<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Авторизация</title>
</head>
<body>
        <section class="container">
            <div class="login">
                <h1>Авторизация</h1>
                <form method="post" action="log.php">
                    <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
                    <p><input type="password" name="password" value="" placeholder="Пароль"></p>
                    </p>
                    <p class="submit"><input type="submit"  name="commit" value="Вход"></p>
                </form>
                <p>Вы не зарегистрированы? <a href="index.php">То нажмите сюда! </a> </p>
            </div>

        </section>

</body>
</html>