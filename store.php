<?php
include 'functions.php';
$db = include 'database/Start.php';

$db->create('posts', [
	'title' => $_POST['title']
]);

header('location: index.php');








?>