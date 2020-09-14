<?php

$id = $_GET['id'];

require_once 'mysql.php';
$stmt = $pdo->query("DELETE FROM `category` WHERE id = ".$id);


header('Location: spisok_category.php');