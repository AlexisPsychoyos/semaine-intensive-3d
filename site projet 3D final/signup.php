<?php
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Déjà inscrit</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/styles2.css" />

</head>
<body>

<div class="fond"></div>
<div class="fond-box"></div>
<div id="form-box">
    <div class="connect">
        <h2><a href="signin.php">Register</a> / Connect</h2>
    </div>
    <form method="post" action="connexion.php">
        <input type = "text" placeholder="Pseudo" name = "pseudo"><br />
        <input type = "password" placeholder="Password" name = "password"><br />
        <button class="fb">Facebook Connect</button>
        <label for="keep"><input class="check"type ="checkbox" id="keep"><p>Keep me connected</p></label>
        <button class="run1" type="submit">RUN</button>
    </form>
</div>