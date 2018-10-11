<?php
require '../autoload.php';

$cin = htmlentities($_GET['cin']);

$utilisateur=new Utilisateur();
$utilisateur->delete($cin);
header('location:../MesUtulisateurs.php');