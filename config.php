<?php 

$dbHost = 'localhost';
$dbName = 'blogdb';
$dbUser = 'root';
$dbPass = '';

try {
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
} catch(Exception $e) {
	echo $e->getMessage();}
