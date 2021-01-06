<?php

require '../model/Autoloader.php';
Model\Autoloader::register();

    $designation = $_POST["designation"];
    $quantite = $_POST["quatite"];
    $prix_achat = $_POST["prix_achat"];

    echo $designation. $quantite . $prix_achat;
    // $ajout = new Ajout($designation, $quantite, $prix_achat);

    // $id = $ajout->verification();
    // if(isset($id)){
    //     $ajout->modification();
    // }else{
    //     $ajout->ajout();
    // }