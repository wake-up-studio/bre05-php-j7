<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="nickname.php">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo"/>
            <input type="submit" value="Submit"/>
        </form>
        <a href="logout.php">Déconnexion</a>
    </body>
</html>