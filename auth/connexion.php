<?php
    $host = "db.3wa.io";
    $port = "3306";
    $dbname = "gurvanleroy_projetauthentification";
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $user = "gurvanleroy";
    $password = "2d829f3ed3cc9932b6d2f2c9c09fe64c";
    
    $db = new PDO(
        $connexionString,
        $user,
        $password
    );
?>