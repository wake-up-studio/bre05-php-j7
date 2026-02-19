<?php
    require "../../connexion.php";
    
    if(isset($_POST)){
        $post = $_POST;
    }
    
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = $db -> prepare("
        INSERT INTO users (id, first_name, last_name, email, password) 
        VALUES (NULL, :first_name, :last_name, :email, :password)
    ");
    
    $parameters = [
        'first_name' => $post["first_name"],
        'last_name' => $post["last_name"],
        'email' => $post["email"],
        'password' => $hash
    ];
    
    $query -> execute($parameters);
    
    $id = $db -> lastInsertId();
    
    header('Location: ../../index.php?route=home');
?>