<?php
require '../autoload.php';
session_start();
if (!empty($_GET['cin'])and !empty($_GET['nom']) and !empty($_GET['prenom']) and !empty($_GET['email']) ){
    $_SESSION['cin'] = htmlentities($_GET['cin']);
    $_SESSION['nom']  = htmlentities($_GET['nom']);
    $_SESSION['prenom'] = htmlentities($_GET['prenom']);
    $_SESSION['email'] = htmlentities($_GET['email']);
    header("location:../formUpdate.php");


}