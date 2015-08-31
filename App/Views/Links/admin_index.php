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
                    <h4>Ajouter un nouveau lien</h4>
                </div>
                <div class="modal-body">

                    <?= Form::start('admin/links/index', "POST", ['class' => 'form-default']); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['title']))? "has-error" : ""; ?>">
                                <label>Titre</label>
                                <?= Form::input('text','title','',['class'=>'form-control', 'value' => (isset($post->title))? $post->title : ""]); ?>
                                <?= (isset($error['title']))? "<label class=\"text-danger\">".$error['title']."</label>":""; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group"  >
                                <label>Lien</label>
                                <div class="input-group <?= (isset($error['link']))? "has-error" : ""; ?>" >
                                    <span class="input-group-addon" id="sizing-addon1">http://</span>
                                    <?= Form::input('text','link','',['class'=>'form-control','aria-describedby' => "sizing-addon1", 'value' => (isset($post->link))? $post->link : ""]); ?>

                                </div>
                                <?= (isset($error['link']))? "<label class=\"text-danger\">".$error['link']."</label>":""; ?>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['comment']))? "has-error" : ""; ?>">
                                <label>Commentaire</label>

                                <?=Form::textarea('comment', ["class" => "form-control", "rows" => "3"], (isset($post->comment))? $post->comment : ""); ?>
                                <?= (isset($error['comment']))? "<label class=\"text-danger\">".$error['comment']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <?= Form::end('Creer le lien', ['class' => 'btn btn-primary btn-block']); ?>
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
                        <th>Lien</th>
                        <th>Commentaire</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($links as $link) : ?>
                        <tr>
                            <td><?= $link->id ?></td>
                            <td><?= $link->title ?></td>
                            <td><?= $link->comment; ?></td>
                            <td><a href="http://<?= $link->link ?>">Lien <?= Html::fa('external-link'); ?></a></td>
                            <td><?= Html::link(['users', 'delete','admin'], Html::fa('times'), [$link->id], ["class" => "text-danger" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Supprimer ce compte"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter un lien</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>