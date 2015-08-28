<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 15/07/15
 * Time: 14:30
 */
use Core\Helpers\Html;
use Core\Lib\Debug;
use Core\Helpers\Form;

?>
<?= Form::start($this->Request->url,"POST", ["class" => "form-default"]) ?>
<div class="row">
    <div class="col-md-2 col-md-offset-5">
    </div>
</div>
<div class="row">
    <?php foreach($photos as $photo) : ?>
        <div class="col-md-6" >
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="col-md-4">
                        <img src="<?= Html::getFile('galleries/'.$galerie->slug. DS.'thumbnails' . DS. $photo->file); ?>" class="img-responsive">
                    </div>
                    <div class="col-md-2">
                        <?= Html::link(['photos', 'delete', 'admin'], Html::fa('times'). " Supprimer",[$photo->id] ,["class" => "label label-danger"], true) ?>
                        <?= Html::link(['photos', 'thumbnail', 'admin'], Html::fa('picture-o'). " Miniature",[$photo->id] ,["class" => "label label-info"], true) ?>
                    </div>
                    <div class="col-md-6">
                        <?= Form::textarea($photo->id, ["class" => "form-control", "rows" => "7", "placeholder" => "Commentaire..."], $photo->comment); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <input type="submit" value="Sauvegarder" class="btn btn-primary btn-block">
</div>
</form>

