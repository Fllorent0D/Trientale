<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/07/15
 * Time: 13:29
 */
use Core\Helpers\Html;
$col = 4;
?>
<div id="portfolio">
    <div class="container">
        <h3><?= $galerie->title; ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <?php for($i = 0; $i < $col; $i++) : ?>
                        <div class="col-md-<?= 12/$col ?>">
                            <?php for($j = $i; $j < count($photos); $j+=$col): ?>
                            <div class="row image">
                                <a href="<?= Html::getFile('galleries'. DS . $galerie->slug . DS . $photos[$j]->file); ?>" data-lightbox="album" <?= (isset($photos[$j]->comment))? 'data-title="'.$photos[$j]->comment.'"':"" ?>>
                                    <img src="<?= Html::getFile('galleries'. DS . $galerie->slug . DS.'thumbnails' .DS. $photos[$j]->file); ?>" class="img-responsive" data-lightbox="album" />

                                </a>
                            </div>
                            <?php endfor; ?>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    lightbox.option({
        'resizeDuration': 300,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices' :true,
        'showImageNumberLabel' :false
    })
</script>
