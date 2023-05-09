<?php

class Connection {
	public static function make() {
		return new PDO("mysql:host=localhost;dbname=project4",'root','root');
	}
}

class QueryBuilder {

	private $db;

	public function __construct(PDO $pdo) {
		$this->db = $pdo;
	}

	public function select($table) {

		$statement = $this->db->query("SELECT * FROM $table");
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}

$db = new QueryBuilder(Connection::make());
$users = $db->select('users');
$posts = $db->select('posts');



var_dump($users, $posts);


?>