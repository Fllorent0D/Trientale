<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 9/07/2015
 * Time: 23:57
 */
use Core\Helpers\Html;
?>
<div class="container">
    <div class="row">
        <?php foreach($carnets as $carnet) : ?>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Carnet <?= $carnet->annee ?> n°<?= $carnet->numero ?></h4>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-primary btn-sm">Télécher le pdf</a>
                        <a href="<?= Html::getFile('carnets' .DS .$carnet->file); ?>" class="btn btn-warning btn-sm">Lire le carnet</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
