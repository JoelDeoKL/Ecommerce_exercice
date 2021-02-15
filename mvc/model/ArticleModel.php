<?php

require_once("entities/Article.php");
require_once("model/tm_models/MainModel.php");

class ArticleModel extends MainModel{

    public static function insert(Article $article){

        $query = "INSERT INTO article SET designation=?, prix_unitaire=?, prix_total=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$article->getDesignation(), $article->getPrixUnitaire(), $article->getPrixTotal()])){
            return true;
        }
        return false;
    }

    public static function change(Article $article){

        $query = "UPDATE article SET designation= :designation, prix_unitaire= :prix_unitaire, prix_total= :prix_totale WHERE id_article= :id_article";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([
            'designation' => $article->getDesignation(),
            'prix_unitaire' => $article->getPrixUnitaire(),
            'prix_totale' => $article->getPrixTotal(),
            'id_article' => $article->getIdArticle()
            ])){
            return true;
        }
        return false;
    }

    public static function getArticles(){
        $query = "SELECT * FROM article ORDER BY designation ASC";
        $sql = self::pdo()->prepare($query);
        $sql->execute();
        $data = array();
        if($sql != null){
            while($res = $sql->fetch(PDO::FETCH_OBJ)){
                $data[] = new Article($res->id_article, $res->designation, $res->prix_unitaire, $res->prix_total);
            }
        }
        return $data;
    }

    public function getArticle($id){
        $id = $id;
        $query = "SELECT * FROM article WHERE id_article = :id_article";
        $sql = self::pdo()->prepare($query);
        $sql->execute([':id_article' => $id]);
        $data = array();
        if($sql != null){
            while($res = $sql->fetch(PDO::FETCH_OBJ)){
                $data[] = new Article($res->id_article, $res->designation, $res->prix_unitaire, $res->prix_total);
            }
        }
        return $data;
    }

}