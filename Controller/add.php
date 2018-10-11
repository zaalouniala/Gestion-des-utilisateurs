<?php
require '../autoload.php';


if (isset($_POST['ajouter'])) {
    if (!empty($_POST['cin'])and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email'])){
        $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];



        $utilisateur = new Utilisateur();


        $utilisateur->add($cin, $nom, $prenom, $email);
        header('location:../MesUtulisateurs.php');
    }


}