<?php

//Поучаем возврат из return в $db
$db = include __DIR__ . '/../database/Start.php';

$posts = $db->getAll('posts');

//$users = $db->getAll('users');

//$posts = getAllPosts($pdo);

//4. Вывести черз foreach;
include __DIR__ . '/../index.view.php';



?>