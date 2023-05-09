<?php
include 'functions.php';
$db = include 'database/Start.php';

$id = $_GET['id'];

$db->update('posts', [
	'title' => $_POST['title']
], $id);

header('location:index.php');

?>