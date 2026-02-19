<?php
    session_start();

    $_SESSION["pseudo"] = $_GET['pseudo'];
    
    var_dump($_SESSION);
?>