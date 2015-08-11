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
    <div class="row">
        <div class="panel panel-default col-md-6 col-md-offset-3">
            <div class="panel-heading">
                <h4>Importer via FTP</h4>
            </div>
            <div class="panel-body">
                <p>Placer le fichier zip qui contient les photos dans le dossier 'Import' à la racine de l'application. Rafraichissez la page dès que c'est fait votre fichier devrait apparaitre dans une liste ci-dessous. Pro tip mettre un nom simple au fichier</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-default col-md-6 col-md-offset-3">
            <div class="panel-body">

                <?= Form::start('admin/galleries/ftpimport', "POST", ['class' => 'form-default']); ?>
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
                        <div class="form-group <?= (isset($error['zip']))? "has-error" : ""; ?>">
                            <?= Form::select('zip', 'Fichier à importer', $files); ?>
                            <?= (isset($error['zip']))? "<label class=\"text-danger\">".$error['zip']."</label>":""; ?>
                        </div>
                    </div>
                </div>




                <?= Form::end("Importer", ['class' => 'btn btn-block btn-primary']) ?>
            </div>
        </div>
    </div>
</div>