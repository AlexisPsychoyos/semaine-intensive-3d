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
    <div id="form">
        <div class="connect">
            <h2>Register / <a href="signup.php">Connect</a></h2>
        </div>
        <form action="inscription.php" method="post">
            <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo"><br/>
            <input type="password" placeholder="Password" id="pass" name="password"><br/>
            <input type="password" placeholder="Confirm your password" id="confirm" name="confirmation"><br/>
            <input type="text" placeholder="Email" name="email"><br/>
            <button class="run" type="submit" >RUN</button>
        </form>
    </div>

</div>
