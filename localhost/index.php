<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
        <section class="container">
            <div class="login">
                <h1>Регистрация</h1>
                <form method="post" action="reg.php">
                    <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
                    <p><input type="text" name="phone" value="" placeholder="Телефон"></p>
                    <p><input type="password" name="password" value="" placeholder="Пароль"></p>
                    </p>
                    <input type="checkbox" name="remember_me" checked="checked" /> Запомнить меня
                    <p class="submit"><input type="submit"  name="commit" value="Регистрация"></p>
                </form>
                    <p>Вы зарегистрированы? <a href="index_log.php"> Нажмите сюда! </a> </p>
            </div>
        </section>

</body>
</html>