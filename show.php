<?php
include 'functions.php';

//Поучаем возврат из return в $db
$db = include 'database/Start.php';

$id = $_GET['id'];
$post = $db->getOne('posts', $id);



?>

<h1><?php echo $post['title'];?></h1>