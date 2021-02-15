<h4>La liste des artickes enregistrés</h4>

<form action="#" method="POST">
    <div>
        <label>Nom article</label>
        <input type="text" name="designation" id="designation">
    </div>
    <div>
        <label>Prix unitaire</label>
        <input type="number" name="prix_unitaire" id="prix_unitaire">
    </div>
    <div>
        <label>Prix total</label>
        <input type="number" name="prix_total" id="prix_total">
    </div>
    <input type="submit" value="Ajouter" name="add_article">
</form>

<br>
<div>

    <table>
        <thead>
            <tr>
                <th>Designation</th>
                <th>Prix Unitaire</th>
                <th>Prix Totale</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($articles as $article) {?>
                <tr>
                    <td><?= $article->getDesignation();?></td>
                    <td><?= $article->getPrixUnitaire();?></td>
                    <td> <?= $article->getPrixTotal();?></td>
                    <td><a href="index.php?m=tm-article.modifier.<?= $article->getIdArticle()?>" class="btn btn-default">Editer</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>