
<?php
require 'autoload.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajouter Utilisateur</title>
</head>
<body>
<form action="Controller/add.php" method="post">
    <table>
        <tr>
        <tr>
            <td><label for="id">cin :</label></td>
            <td><input type="number" name="cin" id="cin" value=""></td>
        </tr>
        <tr>
            <td><label for="nom">NOM :</label></td>
            <td><input type="text" name="nom" id="nom" value=""></td>
        </tr>
        <tr>
            <td><label for="prenom">Prénom :</label></td>
            <td><input type="text" name="prenom" id="prenom" value=""></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" name="email" id="email" value=""></td>
        </tr>

        <tr>
            <td><input type="submit" name="ajouter" value="ajouter">
        </tr>
    </table>
</form>

</body>
</html>
