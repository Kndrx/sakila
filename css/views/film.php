<?php require_once 'dbconfig.php';
include("layouts/header.php");


$movie = $conn->query('SELECT * FROM film WHERE ORDER BY title ASC');
$movie->setFetchMode(PDO::FETCH_OBJ);