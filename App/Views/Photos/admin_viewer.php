<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 15/07/15
 * Time: 14:30
 */
use Core\Helpers\Html;
use Core\Lib\Debug;

?>
    <div class="row">
        <?php foreach($photos as $photo) : ?>
            <div class="col-md-3" >
                <div class="panel">
                    <div class="panel-body">
                        <img src="<?= Html::getFile('galleries/'.$galerie->slug. DS.'thumbnails' . DS. $photo->file); ?>" class="img-responsive">
                    </div>
                    <div class="panel-footer">
                        <a href="" class="label label-danger"><?= Html::fa('times'); ?></a>
                        <a href="" class="label label-info"><?= Html::fa('picture-o'); ?></a>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


