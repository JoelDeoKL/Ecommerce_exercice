<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-12 col-12">
				<div class="checkout-form">
					<h2>Enregister un nouvel article</h2>
					<!-- Form -->
                    <form action="controller/AjoutController.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Designation<span>*</span></label>
                                    <input type="text" name="designation" id="designation" required='required' class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Quantité<span>*</span></label>
                                    <input type="number" id="quantite" name="quantite" required='required' class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Prix d'Achat<span>*</span></label>
                                    <input type="number" id="prix_achat" name="prix_achat" required='required' class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Ajouter" class="btn btn-success float-right">
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
