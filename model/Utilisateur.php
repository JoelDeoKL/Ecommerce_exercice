<?php

require 'Database.php';

class Utilisateur extends Database{

    private $nom;
    private $postnom;
    private $email;
    private $mdp;
    private $niveau;

    public function __construct($nom, $postnom, $email, $mdp, $niveau){
        $this->nom = $nom;
        $this->postnom = $postnom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->niveau = $niveau;
    }
    
    public function verification(){

        try{
            $infos = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
            $infos->execute(array(
                'email' => $this->email
            ));
            while($info = $infos->fetch()){
                if($info['email'] == $this->email && password_verify($this->mdp, $info['mdp'])){
                    $infos->closeCursor();
                    return true;
                }
            }
            
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        return false;

    }

    public function inscription(){
        try{

            $requette = $this->getDb()->prepare('INSERT INTO users (nom, postnom, email, mdp, niveau) VALUES (:nom, :postnom, :email, :mdp, :niveau)');
            $requette->execute(array(
                'nom' => $this->nom,
                'postnom' => $this->postnom,
                'email' => $this->email,
                'mdp' => $this->mdp,
                'niveau' => $this->niveau
            ));

            session_start();
            $_SESSION['nom'] = $this->nom;
            $_SESSION['email'] = $this->email;
            if($this->niveau == 1){
                header('location:../index.php?page=stockAdm');
            }else{
                header('Location: ../index.php?page=stockVendeur');
            }
            
        }catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
    }

}