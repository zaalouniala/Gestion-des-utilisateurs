<?php

require 'ConnexionPDO.php';

class Utilisateur
{
    private $cin;
    private $nom;
    private $prenom;
    private $email;
    private $cnxPDO;

    /**
     * Utilisateur constructor.
     * @param $cin
     * @param $nom
     * @param $prenom
     * @param $email
     */
    public function __construct($cin=null, $nom=null, $prenom=null, $email=null)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->cnxPDO=ConnexionPDO::getInstance();
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    public function show() {

        $requete= "SELECT * FROM utilisateur";
        $req=$this->cnxPDO->prepare($requete);

        $reponse=$req->execute(array(

        ));
        if (!$reponse) {
            return null;
        } else {
        }
            $personnes=$req->fetchAll( PDO::FETCH_OBJ);
            return $personnes;
    }
    public function delete($cin){


        $requete= "DELETE  FROM utilisateur WHERE cin=:cin";
        $req=$this->cnxPDO->prepare($requete);
        $req->execute(
            array(
            'cin'=>$cin,
        ));

    }




    public function add($cin, $nom, $prenom, $email) {
    $requete = "INSERT INTO utilisateur (cin,nom, prenom,email) VALUES (:cin,:nom,:prenom,:email)";
    $req = $this->cnxPDO->prepare($requete);

    $req->execute(
        array(
            'cin'=>$cin,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,

        ));
    }
    public function Update($cin, $nom, $prenom, $email) {

//var_dump($cin.'//'.$nom.'//'.$prenom.'//'.$email);
//exit();
        session_start() ;

    $requete = "UPDATE `utilisateur` SET cin=:cin, nom = :nom, prenom = :prenom, email = :email WHERE cin = :cin1";
    $req = $this->cnxPDO->prepare($requete);
  $req->execute(
        array(
            'cin'=>$cin,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'cin1'=>$_SESSION['cin']

        ));
        session_unset();
    }
}
