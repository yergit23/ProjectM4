<?php
include __DIR__ . '/../functions.php';

// 1. Настоить сервер, чтобы все запросы шли автоматически на страницу\файл index.php
// 2. Завардампить $_SERVER
// Router | Маршрутизатор

$routes = [
	"/project4/public/" => 'controllers/homepage.php',
	"/project4/public/about" => 'controllers/about.php'
];

$route = $_SERVER['REQUEST_URI'];

//dd($_SERVER);

if(array_key_exists($route, $routes)) {
	include __DIR__ . '/../' . $routes[$route]; exit;
} else {
	dd(404);
}


?>


BORWSER -> /homepage.php -> index.php Front controller
								-> Router
									-> /homepage => '/controllers/homepage.php'
																		-> QueryBuilder->all()
																		-> return include VIEW

																		-> RESULT