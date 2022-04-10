
<div class="container">
    <div class="pt-5 text-white">
        <div class="py-5 mt-5">
            <h1 class="display-4 text-center">Liste des clients</h1>
            <p class="lead mb-0 text-center">
                Sur cette page, veuillez retrouver la liste des clients du Colyseum dont le nom commence par "M". <br>
                Vous aurez alors accès à leur nom et prénom, la liste s'affichera par ordre alphabétique. <br>
                L'affichage sera généré automatiquement lors de toute modification de la base de données.
            </p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <th scope="col"><?=$customer->id;?> </th>
                        <td scope="col"><?=$customer->lastName;?></td>
                        <td scope="col"><?=$customer->firstName;?></td>
                    </tr>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>