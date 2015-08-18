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
        <div class="panel panel-transparent">
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 20%">Mot</th>
                        <th style="width: auto">Définition</th>
                        <th style="width: 15%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?= Form::start('admin/glossaires/index', 'POST', ['class' => 'form-default']); ?>
                        <td>
                            <div class="form-group <?= (isset($error['word']))? "has-error" : ""; ?>">
                                <?= Form::input('text', 'word', false, ['class' => 'form-control'], (isset($new->word))? $new->word : "", 'Mot'); ?>
                                <?= (isset($error['word']))? "<label class=\"text-danger\">".$error['word']."</label>":""; ?>

                            </div>
                        </td>
                        <td>
                            <div class="form-group <?= (isset($error['definition']))? "has-error" : ""; ?>">
                                <?= Form::textarea('definition', ["class" => 'form-control', 'rows' => 5, 'placeholder' => 'Définition'],(isset($new->definition))? $new->definition : "") ?>
                                <?= (isset($error['definition']))? "<label class=\"text-danger\">".$error['definition']."</label>":""; ?>
                            </div>
                        </td>
                        <td>
                            <?= Form::end("Ajouter", ['class' => 'form-control']); ?>
                        </td>

                    </tr>
                    <?php foreach ($mots as $mot) : ?>
                        <tr>
                            <td><?= $mot->word; ?></td>
                            <td><?= $mot->definition; ?></td>
                            <td><?= Html::link(['users', 'delete','admin'], Html::fa('times'), [$mot->id], ["class" => "text-danger" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Supprimer ce mot"]) ?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>