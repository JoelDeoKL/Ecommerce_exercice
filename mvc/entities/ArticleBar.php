<?php

/**
 * Description of BarArticle
 *
 * @author mwamb
 */
class ArticleBar {
    private $id;
    private $code;
    private $designation;
    private $prix_vente_bouteille;
    private $prix_vente_casier;
    private $bar_casiertype;
    private $bar_fournisseur;
    
    public function __construct($id, $code, $designation, $prix_vente_bouteille, $prix_vente_casier, BarCasierType $bar_casiertype, BarFournisseur $bar_fournisseur) {
        $this->id = $id;
        $this->code = $code;
        $this->designation = $designation;
        $this->prix_vente_bouteille = $prix_vente_bouteille;
        $this->prix_vente_casier = $prix_vente_casier;
        $this->bar_casiertype = $bar_casiertype;
        $this->bar_fournisseur = $bar_fournisseur;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function getPrixVenteBouteille() {
        return $this->prix_vente_bouteille;
    }

    public function getPrixVenteCasier() {
        return $this->prix_vente_casier;
    }

    public function getBarCasiertype() {
        return $this->bar_casiertype;
    }

    public function getBarFournisseur() {
        return $this->bar_fournisseur;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function setPventeBouteille($prix_vente_bouteille) {
        $this->prix_vente_bouteille = $prix_vente_bouteille;
    }

    public function setPrixVenteCasier($prix_vente_casier) {
        $this->prix_vente_casier = $prix_vente_casier;
    }

    public function setBarCasiertype($bar_casiertype) {
        $this->bar_casiertype = $bar_casiertype;
    }

    public function setBarFournisseur($bar_fournisseur) {
        $this->bar_fournisseur = $bar_fournisseur;
    }

}
