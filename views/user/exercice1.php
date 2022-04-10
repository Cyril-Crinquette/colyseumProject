
<div class="container">
    <div class="pt-5 text-white">
        <div class="py-5 mt-5">
            <h1 class="display-4 text-center">Liste des clients</h1>
            <p class="lead mb-0 text-center">
                Sur cette page, veuillez retrouver la liste de tous les clients du Colyseum. <br>
                Vous aurez accès à leur identifiant, nom, prénom, date de naissance et également à leur numéro de carte membre. <br>
                L'affichage sera généré automatiquement lors de toute modification de la base de données.
            </p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td scope="col"><?=$customer->id;?> </th>
                        <td scope="col"><?=$customer->lastName;?></td>
                        <td scope="col"><?=$customer->firstName;?></td>
                        <td scope="col"><?=$customer->birthDate;?></td>
                        <td scope="col"><?=$customer->cardNumber;?></td>
                    </tr>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>