<?php

class ArticleController extends Tm_Controller{

    public function liste(){
        if(isset($_POST['add_article'])){
            $this->add();
        }
        $articles = $this->getAllArticle();
        $this->load->view("article/liste_article", compact("articles"));
    }

    public function add(){
        $this->load->model("ArticleModel");
        extract($_POST);
        $article = new Article(null, $designation, $prix_unitaire, $prix_total);

        ArticleModel::insert($article);
       
    }

    public function modifier($id){
        if(isset($_POST['update_article'])){
            $this->update();
        }
        $articles = $this->getArticleId($id);
        $this->load->view("article/edit_article", compact("articles"));
    }

    public function update(){
        $this->load->model("ArticleModel");
        $id_article = $_POST['id_article'];
        $designation = $_POST['designation'];
        $prix_unitaire = $_POST['prix_unitaire'];
        $prix_total = $_POST['prix_total'];
        $article = new Article($id_article, $designation, $prix_unitaire, $prix_total);

        ArticleModel::change($article);
    }

    public function create(){
        //
    }

    public function getAllArticle(){
        $this->load->model("ArticleModel");
        return ArticleModel::getArticles();
    }

    public function getArticleId($id){
        $this->load->model("ArticleModel");
        return ArticleModel::getArticle($id);
    }
}
    
// Apres avoir créer un formulaire le controller interreser sera celui qui porte les
// champs de ce dit formulaire et dans ce cas on ne va plus extract()

// Comment mettre un redirect juste apres l'éxécution d'un formulaire

// Ou est-ce que la fonction liste() est appeler