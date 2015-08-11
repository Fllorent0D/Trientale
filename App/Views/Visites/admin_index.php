<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 8/07/15
 * Time: 14:31
 */
use Core\Helpers\Html;
use Core\Helpers\Form;
?>
<div class="modal fade slide-top disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Ajouter une visite</h4>
            </div>
            <div class="modal-body">


                <?= Form::start('admin/visites/index', "POST", ['class' => 'form-default', 'enctype' => 'multipart/form-data']); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group btn btn-block btn-file <?= (isset($error['pdf']))? "has-error" : ""; ?>">
                            <label>Fichier pdf</label>
                            <?= Form::input('file','pdf','',['class'=>'form-control']); ?>
                            <?= Form::input('hidden','proute','',['class'=>'form-control']); ?>

                        </div>
                        <?= (isset($error['pdf']))? "<label class=\"text-danger\">".$error['pdf']."</label>":""; ?>

                    </div>
                </div>
                <?= Form::end('Ajouter', ['class' => 'btn btn-primary btn-block']); ?>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>





<div class="container-fluid container-fixed-lg">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h4>Visites</h4>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 15%">Date</th>
                        <th style="width: 25%">Titre</th>
                        <th style="width: 35%">Texte</th>
                        <th style="width: 20%">Guide</th>
                        <th style="width: 3%"></th>
                        <th style="width: 7%"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="6" class="text-center">
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter une visite</a>
                        </td>
                    </tr>
                    <?php foreach ($visites as $visite) : ?>
                        <tr>
                            <td><?= $visite->date; ?></td>
                            <td><?= $visite->title; ?></td>
                            <td><?= \Core\Helpers\Text::cut($visite->text, 125); ?></td>
                            <td><?= $visite->guide; ?></td>
                            <td>
                                <?= Html::link(['visites', 'delete','admin'], Html::fa('times'), [$visite->id], ["class" => "label label-danger" ,"data-toggle" => "tooltip", "data-placement" => "top", "title" => "Supprimer la visite"]) ?>
                            </td>
                            <td><a href="<?= Html::getFile('visites'. DS . $visite->file); ?>" class="label label-success" data-toggle = "tooltip" data-placement = "top" title = "Afficher le pdf"><?= Html::fa('eye'); ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>