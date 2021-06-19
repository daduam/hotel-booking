<?php
$database = 'redstone_database';
$user = 'redstone_user';
$password = 'password';

$pdo = new \PDO("mysql:host=localhost;dbname=$database;charset=UTF8", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
