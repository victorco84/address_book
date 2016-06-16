<?php
error_reporting(E_ALL | E_STRICT);

$dsn = 'mysql:host=127.0.0.1;dbname=address_book;charset=utf8';
$user = 'root';
$pw = 'root';

$db_connection = new PDO($dsn, $user, $pw);

// Gather $_GET data
$firstname = $_GET['first_name'];
$lastname  = $_GET['last_name'];
$phone     = $_GET['phone'];
$email     = $_GET['email'];
$fax       = $_GET['fax'];

// Query, prepare, and execute the statement
$query = 'INSERT INTO `user` (first_name, last_name, phone, email, fax) VALUES (:first_name, :last_name, :phone, :email, :fax)';
$stmt = $db_connection->prepare($query);
$stmt->bindParam(':first_name', $firstname);
$stmt->bindParam(':last_name', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':fax', $fax);
$stmt->execute();

$stmt = null;
$db_connection = null;