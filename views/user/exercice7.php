<div class="container">
    <div class="pt-5 text-white">
        <div class="py-5 mt-5">
            <h1 class="display-4 text-center">Liste des clients</h1>
            <p class="lead mb-0 text-center">
                Sur cette page, veuillez retrouver la liste de tous les clients du Colyseum. <br>
                Vous aurez accès à leur identifiant, nom, prénom, date de naissance et également à leur numéro de carte
                membre. <br>
                L'affichage sera généré automatiquement lors de toute modification de la base de données.
            </p>
        </div>
        <div class="card-deck">
            <?php foreach($customers as $customer) { ?>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$customer->lastName;?></h5>
                        <h4><?=$customer->firstName;?></h4>
                        <h4><?=$customer->birthDate;?></h4>
                        <h4><?=$customer->fidelity;?></h4>
                        <h4><?=$customer->numberCard;?></h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                            content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?=$customer->id;?></small>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
