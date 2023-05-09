<?php
$config = include __DIR__ . '/../config.php';
include __DIR__ . '/../database/QueryBuilder.php';
include __DIR__ . '/../database/Connections.php';

//$connection = new Connection;
//$pdo = $connection->make();

//$pdo = Connection::make();

//$db = new QueryBuilder($pdo);

//$db = new QueryBuilder(
//	Connection::make()
//);

// Так как $db больше не где, не используем, то делаем просто возврат
return new QueryBuilder(
	Connection::make($config['database'])
);



?>