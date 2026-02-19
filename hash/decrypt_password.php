<?php

    $password_2 = $_POST["password_2"];
    $password_hash = $_POST["password_hash"];
    
    $isPasswordCorrect = password_verify($password_2, $password_hash);
    
    if($isPasswordCorrect===true){
        echo "Mot de passe correct";
    }
    else{
        echo "Mot de passe erroné";
    }
?>