<?php
session_start();


require_once 'mysql.php';


$login=$_POST['login'];
$password=$_POST['password'];


$stmt= $pdo->query('SELECT login, password FROM `users` WHERE login="'.$login.'"');

$result = $stmt->fetch();


if (md5($password) == $result['password']) {
    $_SESSION['auth'] = $result['login'];
    header('Location: http://localhost/user.php');
} else {
    echo ("Польователь не найден");
}