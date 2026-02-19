<?php
    session_start();
    
    require "connexion.php";
    
    if(isset($_GET["route"])){
        $route = $_GET["route"];
    }
    else{
        $route = null;
    }
    
    require "phtml/layout.phtml";
?>