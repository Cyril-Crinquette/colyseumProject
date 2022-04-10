<div class="container">
    <div class="pt-5 text-white">
        <div class="py-5 mt-5">
            <h1 class="display-4 text-center">Programmation</h1>
            <p class="lead mb-0 text-center">
                Sur cette page, veuillez retrouver la programmation du Colyseum. <br>
                Vous aurez accès aux titres de tous les spectacles des différents artistes, ainsi qu'aux dates et heures
                de leurs shows respectifs. <br>
                L'affichage sera généré automatiquement lors de toute modification de la base de données.
            </p>
        </div>
        <?php foreach ($shows as $show) { ?>
            <div class="showDescription">
                <p>
                    <?=$show->title;?> par <?=$show->performer;?>, le <?=$show->date;?> à <?=$show->startTime;?>
                </p>
            </div>
        <?php } ?>
    </div>
</div>