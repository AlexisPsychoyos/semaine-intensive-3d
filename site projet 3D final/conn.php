<?php
try{
    $conn = new PDO( 'mysql:host=localhost;dbname=semaine-3D;charset=utf8' , 'root' , 'root' );
} catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
}