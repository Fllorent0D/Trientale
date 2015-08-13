<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 16:32
 */
use Core\Helpers\Date;
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                <?= $visite->title; ?>
            </h2>
            <p class="lead">
                Guide : <?= $visite->guide; ?>
            </p>
            <p><i class="fa fa-clock-o"></i> <?= Date::dateToFr($visite->date, "Le %d %B %Y"); ?></p>

            <a class="btn btn-warning" href="<?= \Core\Helpers\Html::getFile('visites'. DS . $visite->file);?>">Télécharger le pdf <i class="fa fa-download"></i></a>

            <hr>
            <p><?= htmlentities($visite->text); ?></p>

        </div>

    </div>

</div>