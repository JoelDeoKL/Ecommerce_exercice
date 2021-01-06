<?php

require '../model/Autoloader.php';
Model\Autoloder::register();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $connexion = new Connexion($email, $password);
    
    $connexion->niveau();