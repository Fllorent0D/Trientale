<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 14/07/15
 * Time: 10:04
 */
use Core\Helpers\Form;
use Core\Helpers\Html;
?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Importer un zip</h4>
            </div>
            <div class="panel-body">
                <?= Form::start("admin/galleries/zipimport", 'POST', ['class' => 'form-default', 'enctype' => 'multipart/form-data']) ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['title']))? "has-error" : ""; ?>">
                            <label>Nom de la galerie</label>
                            <?= Form::input('text','title','',['class'=>'form-control', 'value' => (isset($new->title))? $new->title : ""]); ?>
                            <?= (isset($error['title']))? "<label class=\"text-danger\">".$error['title']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['category']))? "has-error" : ""; ?>">
                            <label>Catégorie</label>
                            <?= Form::input('text','category','',['class'=>'form-control', 'value' => (isset($new->category))? $new->category : ""]); ?>
                            <?= (isset($error['category']))? "<label class=\"text-danger\">".$error['category']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group btn btn-block btn-file <?= (isset($error['zip']))? "has-error" : ""; ?>">
                            <label>Fichier zip</label>
                            <?= Form::input('file','zip','',['class'=>'form-control']); ?>
                        </div>
                        <?= (isset($error['zip']))? "<label class=\"text-danger\">".$error['zip']."</label>":""; ?>

                    </div>
                </div>
                <?= Form::end("Importer", ["class" => "btn btn-block btn-primary"]); ?>
            </div>

        </div>

    </div>
</div>