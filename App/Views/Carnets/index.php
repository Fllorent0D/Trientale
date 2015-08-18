<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 9/07/2015
 * Time: 23:57
 */
use Core\Helpers\Html;
$trimestre = [1 => "1er", 2 => "2ème", 3=>"3ème", 4=>"4ème"];
?>
<div class="container">
    <div class="row">
        <?php foreach($carnets as $annee => $carnets) : ?>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Carnets <?= $annee; ?></h4>
                    </div>
                    <ul class="list-group">
                        <?php foreach($carnets as $carnet): ?>
                        <li class="list-group-item"><?= $trimestre[$carnet->numero] ?> trimestre <span class="pull-right"><a href="<?= Html::getFile('carnets' .DS .$carnet->file); ?>" class="btn btn-warning btn-xs">Lire</a> <?= Html::link(['carnets', 'download'], "Télécharger", [$carnet->id], ["class" => "btn btn-info btn-xs"]); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
