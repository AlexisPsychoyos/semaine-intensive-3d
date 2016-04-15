<?php
session_start();
require_once 'conn.php';
if (isset($_SESSION['pseudo']) && isset($_SESSION['password']))
{
    header('location:accueil.php');
} else {
// Hachage du mot de passe

    $pass_hache = sha1($_POST['password']);

// Vérification des identifiants

    $req = $conn->prepare('SELECT id FROM users WHERE `pseudo` = :pseudo, `password`= :password');
    $req->bindValue(':pseudo', $_POST['pseudo']);
    $req->bindValue(':password', $_POST['password']);
    $req->execute();

    $resultat = $req->fetch();

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
    } else {

        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $_POST['pseudo'];
        echo 'Vous êtes connecté !';
    }
}
