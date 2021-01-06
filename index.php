<?php

require 'model/Autoloader.php';
Model\Autoloder::register();

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 'articles';
    }

    ob_start();
    if($page ==='articles'){
        require 'views/articles.php';
    }
    elseif($page === 'articleAdd'){
        require 'views/articleAdd.php';
    }elseif($page === 'panier'){
        require 'views/panier.php';
    }elseif($page === 'stockAdm'){
        require 'views/stockAdm.php';
    }elseif($page === 'stockVendeur'){
        require 'views/stockVendeur.php';
    }elseif($page === 'inscription'){
        require 'views/inscription.php';
    }else{
        require 'views/articles.php';
    }
    $content = ob_get_clean();
    require 'views/layout/layout.php';