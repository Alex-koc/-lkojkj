<?php
require_once 'mysql.php';

$name=$_POST['name'];
if ($name == '') {
    header('Location: http://localhost/category.php?zapis=false');
} else {
    $stmt= $pdo->query( 'INSERT INTO `category` (`name`) VALUES ("'.$name.'")');
    header('Location: http://localhost/category.php?zapis=true');
}
