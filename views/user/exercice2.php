
<div class="container">
    <div class="pt-5 text-white">
        <div class="py-5 mt-5">
            <h1 class="display-4 text-center">Types de spectacles</h1>
            <p class="lead mb-0 text-center">
                Sur cette page, veuillez retrouver la liste des différents types de spectacle que propose le Colyseum. <br>
                L'affichage sera généré automatiquement lors de toute modification de la base de données.
            </p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type de spectacle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td scope="col"><?=$customer->id;?> </td>
                        <td scope="col"><?=$customer->type;?></td>
                    
                    </tr>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>