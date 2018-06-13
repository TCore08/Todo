<?php

try{

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_db', 'root', 'root');

	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	die($e->getMessage());
}




$statement = $pdo->prepare("INSERT INTO tasks (id, task, completed)  VALUES ('5', 'Go to hospital', '1')");


$statement->execute();





?>