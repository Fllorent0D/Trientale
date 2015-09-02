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
                    <h4>Ajouter une slide</h4>
                </div>
                <div class="modal-body">

                    <?= Form::start('admin/home/index', "POST", ['class' => 'form-default', 'enctype' => 'multipart/form-data']); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['text']))? "has-error" : ""; ?>">
                                <label>Texte</label>
                                <?= Form::input('text','text','',['class'=>'form-control', 'value' => (isset($post->text))? $post->text : ""]); ?>
                                <?= (isset($error['text']))? "<label class=\"text-danger\">".$error['text']."</label>":""; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group btn btn-block btn-file <?= (isset($error['background']))? "has-error" : ""; ?>">
                                <label>Fond</label><small>1080x200</small>
                                <?= Form::input('file','background','',['class'=>'form-control']); ?>
                            </div>
                            <?= (isset($error['background']))? "<label class=\"text-danger\">".$error['background']."</label>":""; ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group btn btn-block btn-file <?= (isset($error['photo']))? "has-error" : ""; ?>">
                                <label>Photo assosiée</label><small>100x100</small>
                                <?= Form::input('file','photo','',['class'=>'form-control']); ?>
                            </div>
                            <?= (isset($error['photo']))? "<label class=\"text-danger\">".$error['photo']."</label>":""; ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['action']))? "has-error" : ""; ?>">
                                <label>Action</label>
                                <div class="input-group <?= (isset($error['link']))? "has-error" : ""; ?>" >
                                    <span class="input-group-addon" id="sizing-addon1">http://</span>
                                    <?= Form::input('text','action','',['class'=>'form-control', 'value' => (isset($post->action))? $post->action : ""]); ?>
                                </div>
                                <?= (isset($error['action']))? "<label class=\"text-danger\">".$error['action']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['center']))? "has-error" : ""; ?>">
                                <label>Alignement</label>
                                <?= Form::select('center', false, ['0' => 'Gauche', '1' => 'Centrer'], (isset($post->align))? $post->align : false) ?>
                                <?= (isset($error['center']))? "<label class=\"text-danger\">".$error['center']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <?= Form::end('Creer le compte', ['class' => 'btn btn-primary btn-block']); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">

        <div class="panel panel-transparent">
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Photo</th>
                        <th>Fond</th>
                        <th>Action</th>
                        <th>Alignement</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($sliders as $slide) : ?>
                        <tr>
                            <td><?= $slide->text ?></td>
                            <td>photo</td>
                            <td>photo</td>
                            <td><?= $slide->action; ?></td>
                            <td><?= $slide->align; ?></td>
                            <td><?= Html::link(['users', 'delete','admin'], Html::fa('times'), [$slide->id], ["class" => "text-danger" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Supprimer cette slide"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter une slide</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>