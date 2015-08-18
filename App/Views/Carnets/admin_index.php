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

    <div class="container-fluid container-fixed-lg">
        <div class="row">

            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Carnets</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Annee</th>
                                <th>Numero</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($carnets as $carnet) : ?>
                                <tr>
                                    <td><?= $carnet->annee; ?></td>
                                    <td><?= $carnet->numero; ?></td>
                                    <td>
                                        <?= Html::link(['carnets', 'delete','admin'], Html::fa('times'), [$carnet->id], ["class" => "label label-danger" ,"data-toggle" => "tooltip", "data-placement" => "top", "title" => "Supprimer le carnet"]) ?>
                                        <a href="<?= Html::getFile('carnets'. DS . $carnet->file); ?>" class="label label-success" data-toggle = "tooltip" data-placement = "top" title = "Afficher le carnet"><?= Html::fa('eye'); ?></a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Ajouter un nouveau carnet</h4>
                    </div>
                    <div class="panel-body">
                        <?= Form::start('admin/carnets/index', "POST", ['class' => 'form-default', 'enctype' => 'multipart/form-data']); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group <?= (isset($error['annee']))? "has-error" : ""; ?>">
                                    <label>Annee</label>
                                    <?= Form::input('number','annee','',['class'=>'form-control', 'value' => (isset($new->annee))? $new->annee : date("Y")]); ?>
                                    <?= (isset($error['annee']))? "<label class=\"text-danger\">".$error['annee']."</label>":""; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group <?= (isset($error['password']))? "has-error" : ""; ?>">
                                    <label>Numero</label>
                                    <?= Form::input('number','numero','',['class'=>'form-control', 'value' => (isset($new->numero))? $new->numero : 1]); ?>
                                    <?= (isset($error['numero']))? "<label class=\"text-danger\">".$error['numero']."</label>":""; ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group btn btn-block btn-file <?= (isset($error['pdf']))? "has-error" : ""; ?>">
                                    <label>Fichier pdf</label>
                                    <?= Form::input('file','pdf','',['class'=>'form-control']); ?>
                                </div>
                                <?= (isset($error['pdf']))? "<label class=\"text-danger\">".$error['pdf']."</label>":""; ?>

                            </div>
                        </div>
                        <?= Form::end('Ajouter', ['class' => 'btn btn-primary btn-block']); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
