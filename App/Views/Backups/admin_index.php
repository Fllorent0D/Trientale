<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 17/08/15
 * Time: 19:00
 */
use Core\Helpers\Form;
?>


<div class="row">
    <div class="col-md-2 col-md-offset-5">
        <div class="panel">
            <div class="panel-heading text-center">
                <h4>Sauvegarder</h4>
            </div>
            <div class="panel-body">
                <?= Form::start('admin/backups/save', 'POST', ['class' => 'form-default']) ?>
                <div class="row">
                    <div class="pull-left">
                        <div class="checkbox check-success  ">
                            <?= Form::input('checkbox','file','',['class'=>'form-control', 'checked' => 'checked']); ?>
                            <label for="file">Sauver les fichiers</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pull-left">
                        <div class="checkbox check-success  ">
                            <?= Form::input('checkbox','database','',['class'=>'form-control', 'checked' => 'checked']); ?>
                            <label for="database">Sauver la base de données</label>
                        </div>
                    </div>
                </div>
                <?= Form::end("Démarrer", ["class" => 'btn btn-info btn-block']); ?>

            </div>
        </div>


    </div>
</div>
