<h4>La liste des artickes enregistrés</h4>

<form action="#" method="POST">
    <?php foreach($articles as $article){ ?>
        <div>
            <input type="hidden" value="<?= $article->getIdArticle();?>" name="id_article" id="id_article">
        </div>
        <div>
            <label>Nom article</label>
            <input type="text" value="<?= $article->getDesignation();?>" name="designation" id="designation">
        </div>
        <div>
            <label>Prix unitaire</label>
            <input type="number" value="<?= $article->getPrixUnitaire();?>" name="prix_unitaire" id="prix_unitaire">
        </div>
        <div>
            <label>Prix total</label>
            <input type="number" value="<?= $article->getPrixTotal();?>" name="prix_total" id="prix_total">
        </div>
        <input type="submit" value="Modifier" name="update_article">
    <?php } ?>
</form>
