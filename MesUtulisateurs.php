<?php


require 'autoload.php';
$utilisateurs = new Utilisateur();
$utilisateurs = $utilisateurs->show();
?>

<html>
<head>
    <title>Listes des utilisateurs:</title>
    <link rel="stylesheet" a href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="card-body">
    <a href="ajout.php"><h3>Ajouter un utulistateur</h3></a>
    <table class="table table-borderless">
        <tr>
        <th>cin:</th>
        <th>Nom:</th>
        <th>Prénom:</th>
        <th>email:</th>
        <th>Actions:</th>
        </tr>
        <?php
        foreach ($utilisateurs as $utilisateur) {
            ?>
            <tr>
                <td><?= $utilisateur->cin; ?></td>
                <td><?= $utilisateur->nom; ?></td>
                <td><?= $utilisateur->prenom; ?></td>
                <td><?= $utilisateur->email; ?></td>
                <td>
                    <a href="Controller/preUpdate.php?cin=<?= $utilisateur->cin; ?> &nom=<?= $utilisateur->nom; ?>&prenom=<?= $utilisateur->prenom; ?>&email=<?= $utilisateur->email; ?>">
                        <span class="glyphicon glyphicon-upload"></span>
                    </a>

                    <a href="Controller/delete.php?cin=<?= $utilisateur->cin; ?>">
                       <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>

            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
