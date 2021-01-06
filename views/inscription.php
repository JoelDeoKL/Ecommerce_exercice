<?php
    // require 'controller/UserController.php';
    // $user = new UserController();
    // $envoi = $user->inscriptionConroller();
?>

<section class="shop checkout section">
    <div class="container" style="padding-top:100px; padding-bottom:100px;">
        <div class="row"> 
			<div class="col-lg-4 col-4">
				<div class="checkout-form">
					<h2>Inscrivez-vous</h2>
					<!-- Form -->
                    <h1>Inscription</h1>
                    <form action="controller/UserController.php" class="form-control" method="POST">
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="nom" class="">Nom</label>
                                <input type="text" id="nom" name="nom" class="form-control"> 
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="postnom" class="">Postnom</label>
                                <input type="text" id="postnom" name="postnom" class="form-control">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="email" class="">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="password" class="">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="password" class="">Confirmer Mot de passe</label>
                                <input type="password" id="password" name="confirm" class="form-control">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="md-form mb-0">
                                <label for="password" class="">Niveau</label>
                                <select name="niveau" id="niveau">
                                    <option value="1">Administrateur</option>
                                    <option value="0">Vendeur</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="mt-2">En cliquant sur s'inscrire vous acceptez nos  <a href="">conditions générales d'utilisation</a>.</p>
                            <div class="text-center mb-4 pt-3">
                                <button class="shadow-md btn kay-item rounded" type="submit">S'inscrire</button>
                            </div>
                            <p>Vous avez un compte ? | <a href="">Vous connecter</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
