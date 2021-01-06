<?php

require 'Database.php';

class Connexion extends Database{

    private $email;
    private $mdp;

    public function __construct($email, $mdp){
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function niveau(){
        try{
            $infos = $this->getDb()->prepare('SELECT * FROM users WHERE email = :email');
            $infos->execute(array(
                'email' => $this->email
            ));
            $info = $infos->fetch();
            
            if($info['email'] == $this->email && password_verify($this->mdp, $info['mdp'])){
                session_start();
                $_SESSION['nom'] = $info['nom'];
                $_SESSION['email'] = $info['email'];
                if($info['niveau'] == 1){
                    header('location:../index.php?page=stockAdm');
                }else{
                    header('Location: ../index.php?page=stockVendeur');
                }
            }else{
                header('Location: ../index.php?page=inscription');   
            }

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}