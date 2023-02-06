<?php

require 'functions.php';

// Connect to the MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=my_hotel;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from properties where id = 1");
$statement->execute();

$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['name'] . "</li>";