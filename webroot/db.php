<?php
$dsn = 'mysql:dbname=phpapp;host=db';
$user = 'root';
$password = 'phpapptest';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

foreach($dbh->query("Show variables like '%char%'") as $row) {
    printf("%s: %s<br />", htmlspecialchars($row[0]), htmlspecialchars($row[1]));
}
