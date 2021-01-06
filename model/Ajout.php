<?php

require 'Database.php';

class Ajout extends Database{

    private $designation;
    private $quantite;
    private $prix_achat;

    public function __construct($designation, $quantite, $prix_achat){
        $this->designation = $designation;
        $this->quantite = $quantite;
        $this->prix_achat = $prix_achat;
    }

    public function verification(){
        $resultat = $this->getDb()->prepare('SELECT * FROM stock_depot WHERE designation = :designation');
        $resultat->execute(array(
            'designation' => $this->designation
        ));
        $resultat = $resultat->fetch();
        
        return $resultat["id_stockD"];
    }

    public function identification(){
        session_start();
        $email = $_SESSION["email"];
        $info = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
        $info->execute(array(
            'email' => $email
        ));
        $info = $info->fetch();
        if($info["niveau"] == 1){
            return $info["id_user"];
        }else{
            var_dump("Vous n'est pas autoriser à ajouter un article");
        }
    }

    public function ajout(){
        $id_user = $this->identification();
        $ajout = $this->getDb()->prepare("INSERT INTO stock_depot(designation, prix_achat, quantite_entrer, quantite_finale, id_user)
                                            VALUES(:designation, :prix_achat, :quantite_entrer, :quantite_finale, :id_user)");
        $ajout->execute(array(
            'designation' => $this->designation,
            'prix_achat' => $this->prix_achat,
            'quantite_entrer' => $this->quantite,
            'quantite_finale' => $this->quantite,
            'id_user' => $id_user
        ));
    }

    public function modification(){
        return true;
    }
}