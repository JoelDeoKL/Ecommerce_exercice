<?php
    session_start();
    $nom = $_SESSION["nom"];
    if(isset($_SESSION["nom"]) && isset($_SESSION["email"])){
        session_destroy();
        header('Location: ../index.php?page=articles');
        exit();
    }