<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 13/07/15
 * Time: 21:45
 */
use Core\Helpers\Html;
?>
<div class="modal fade slide-top disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Chosir la méthode d'importation <small>expérimental</small></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <?= Html::link(['galleries', 'zipimport', 'admin'], Html::fa('cloud-upload')." Importer un zip",[], ["class" => "btn btn-info btn-block"]); ?>
                    </div>
                    <div class="col-md-4">
                        <?= Html::link(['galleries', 'ftpimport', 'admin'], Html::fa('download'). " Importer via FTP",[], ["class" => "btn btn-info btn-block"]); ?>
                    </div>
                    <div class="col-md-4">
                        <?= Html::link(['galleries', 'empty', 'admin'], Html::fa('folder-open-o')." Galerie vide",[], ["class" => "btn btn-info btn-block"]); ?>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <small>Max 20 Mb</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<div class="container container-fixed-lg">
    <div class="col-md-3">
        <div class="panel text-center">
            <div class="panel-heading">
                <h4>Ajouter une galerie</h4>
            </div>
            <div class="panel-body">
                <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus-circle fa-5x'); ?></a>

            </div>
        </div>
    </div>
    <?php foreach($galleries as $gall) : ?>
    <div class="col-md-3">
        <div class="panel">
            <div class="panel-heading">
                <h4><?= $gall->title; ?></h4>
            </div>
            <div class="panel-body">
                <?= Html::link(['photos', 'viewer', 'admin'], '<img src="'.Html::getFile('galleries'. DS .$gall->slug . DS . $gall->thumbnail).'" alt="thumbnail" class="img-responsive" />', [$gall->id]);  ?>

            </div>
            <div class="panel-footer">
                <?= Html::link(['photos', 'viewer', 'admin'], "Afficher", [$gall->id], ["class" => "label label-info"]) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>