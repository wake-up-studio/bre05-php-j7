<?php
    session_start();
    
    require "../../connexion.php";
    
    if(isset($_POST)){
        $post = $_POST;
    }
    //Je récupère la base de données et je vérifie que le form me renvoie quelque chose
    
    $email = $post["email"];
    $password = $post["password"];
    //Je créé des variables qui récupère l'email et le password du form
    
    $query = $db -> prepare("SELECT * FROM users WHERE email = :email");
    
    $parameters = [
        "email" => $email
    ];
    
    $query -> execute($parameters);
    $user = $query ->fetch(PDO::FETCH_ASSOC);
    //Je crée la variable $user qui résulte de ma lecture du tableau users
    
    if($user=== false){
        echo "<h2>Email incorrect</h2>";
    }
    //Si user ne renvoie rien (c'est à dire que les mails ne matchent pas), renvoie une erreur
    
    else{
        $hash = $user["password"];
        $isPasswordCorrect = password_verify($password, $hash);
        //On vérifie si le password tapé et celui chiffré de l'user correspondent
        
        if($isPasswordCorrect === false){
            echo "<h2>Mot de Passe incorrect</h2>";
        }
        else{
            $_SESSION["user"] = $user["first_name"]." ".$user["last_name"];
            header('Location: ../../index.php?route=home');
        }
    }
?>