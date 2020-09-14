<?php

$id = $_GET['id'];

require_once 'mysql.php';
$stmt = $pdo->query("DELETE FROM `product` WHERE id = ".$id);

header('Location: spisok_product.php');