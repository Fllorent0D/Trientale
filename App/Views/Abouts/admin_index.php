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
                    <h4>Ajouter une nouvelle section</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                    </div>

                    <?= Form::start('admin/abouts/index', "POST", ['class' => 'form-default']); ?>
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
                            <div class="form-group <?= (isset($error['text']))? "has-error" : ""; ?>">
                                <label>Texte</label>
                                <?= Form::textarea('text', ['class' => 'form-control', 'rows' => '30'], (isset($post->text))? $post->text : '' ); ?>
                                <?= (isset($error['text']))? "<label class=\"text-danger\">".$error['text']."</label>":""; ?>

                            </div>
                        </div>
                    </div>

                    <?= Form::end('Creer la section', ['class' => 'btn btn-primary btn-block']); ?>
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
                        <th>Texte</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($abouts as $about) : ?>
                        <tr>
                            <td><?= $about->place + 1; ?></td>
                            <td><?= $about->title; ?></td>
                            <td><?= \Core\Helpers\Text::cut($about->text, 100); ?></td>
                            <td>
                                <?= Html::link(['users', 'modify','admin'], Html::fa('pencil'), [$about->id], ["class" => "text-success" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Modifier cette section"]) ?>
                                <?= Html::link(['users', 'delete','admin'], Html::fa('times'), [$about->id], ["class" => "text-danger" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Supprimer cette section"]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter une section </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>