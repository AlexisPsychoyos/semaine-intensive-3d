<?php
require_once 'conn.php';


$pass_hache = sha1($_POST['password']);

// Insertion
$req = $conn->prepare('INSERT INTO users (pseudo, password, email) VALUES(:pseudo, :password, :email)');
$req->bindValue(':pseudo', $_POST['pseudo']);
$req->bindValue(':password', $_POST['password']);
$req->bindValue(':email', $_POST['email']);
$req->execute();

header('location:accueil.php');