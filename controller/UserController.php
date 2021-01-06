<?php

require '../model/Autoloader.php';
Model\Autoloder::register();


    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $email = $_POST['email'];
    $psw = $_POST['password'];
    $mdp = password_hash($psw, PASSWORD_BCRYPT);
    $confirm = $_POST['confirm'];
    $niveau = $_POST['niveau'];

    $user = new Utilisateur($nom, $postnom, $email, $mdp, $niveau);

    if($user->verification()){
        header('Location: ../index.php?page=inscription');
    }
    else{
        if($psw === $confirm){
            $user->inscription();
        }
        else{
        header('Location: ../index.php?page=inscription');
        }
    }
   













    // <?php

    // require '../model/Autoloader.php';
    // Model\Autoloder::register();
    
    // class UserContoller{
    
    //     public function inscriptionConroller(){
    //         $nom = $_POST['nom'];
    //         $postnom = $_POST['postnom'];
    //         $email = $_POST['email'];
    //         $psw = $_POST['password'];
    //         $mdp = password_hash($psw, PASSWORD_BCRYPT);
    //         $confirm = $_POST['confirm'];
    //         $niveau = $_POST['niveau'];
    
    //         $user = new Utilisateur($nom, $postnom, $email, $mdp, $niveau);
    
    //         if($user->verification()){
    //             header('Location: ../index.php?page=inscription');
    //         }
    //         else{
    //             if($psw === $confirm){
    //                 var_dump($user->inscription());
    
    //             }
    //             else{
    //             header('Location: ../index.php?page=inscription');
    //             }
    //         }
       
    //     }
    // }
    