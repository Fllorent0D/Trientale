<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/07/15
 * Time: 13:06
 */
    use Core\Helpers\Html;

?>

<div id="blog">
    <div class="container">
        <h3>Galeries</h3>

        <!-- Post Row -->
        <div class="row post_row">
            <!-- Post -->
            <div class="row">
                <?php foreach ($galleries as $gallery) : ?>
                <div class="col-md-4">
                    <div class="post">
                        <div class="img">
                            <?= Html::link(['photos', 'index'], '<img src="'.Html::getFile('galleries'. DS .$gallery->slug . DS . $gallery->thumbnail).'" alt="thumbnail" class="img-responsive" />', [$gallery->id]);  ?>
                        </div>
                        <div class="text">
                            <h5><?= Html::link(['photos', 'index'], $gallery->title, [$gallery->id]);  ?></h5>
                            <span class="date"><?=count($gallery->photos);  ?> photos</span>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>