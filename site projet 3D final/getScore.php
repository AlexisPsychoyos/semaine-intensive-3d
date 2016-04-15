<?php

//Connexion a la base
require_once 'conn.php';
$conn = new Database();
$conn = $conn->dbConnection();

$sql = "UPDATE `users` SET `score`= :score WHERE `user_id`= :id;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':score', $_POST['score']);
$stmt->execute();