<?php
require 'autoload.php';

session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier Utilisateur</title>
</head>
<body>
<form action="Controller/update.php" method="post">
    <table>
        <tr>
        <tr>
            <td><label for="id">cin :</label></td>
            <td><input type="number" name="cin" id="cin" value="<?php echo  $_SESSION['cin']; ?>"></td>
        </tr>
        <tr>
            <td><label for="nom">NOM :</label></td>
            <td><input type="text" name="nom" id="nom" value="<?php echo  $_SESSION['nom']; ?>"></td>
        </tr>
        <tr>
            <td><label for="prenom">Prénom :</label></td>
            <td><input type="text" name="prenom" id="prenom" value="<?php echo  $_SESSION['prenom']; ?>"></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" name="email" id="email" value="<?php echo  $_SESSION['email']; ?>"></td>
        </tr>

        <tr>
            <td><input type="submit" name="update" value="update">
        </tr>
    </table>
</form>

</body>
</html>
<?php


?>