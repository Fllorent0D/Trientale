<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/07/15
 * Time: 13:29
 */
use Core\Helpers\Html;
?>
<div id="portfolio">
    <div class="container">
        <h3><?= $galerie->title; ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div class="grid js-masonry" data-masonry-options='{ "itemSelector": ".grid-item" }'>
                    <?php foreach($photos as $photo) : ?>
                    <div class="col-md-4 grid-item photo">
                        <img src="<?= Html::getFile('galleries'. DS . $galerie->slug . DS . $photo->file); ?>" class="img-responsive" data-lightbox="album" class="mask"/>
                        <a href="<?= Html::getFile('galleries'. DS . $galerie->slug . DS . $photo->file); ?>" data-lightbox="album" class="mask">
                            <i class="fa fa-expand"></i>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){

        var $container = $('#gallery_container'),
            $filters = $("#filters a");

        $container.imagesLoaded( function(){
            $container.isotope({
                itemSelector : '.photo',
                masonry: {
                    columnWidth: 150
                }
            });
        });

    });
    lightbox.option({
        'resizeDuration': 300,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices' :true,
        'showImageNumberLabel' :false
    })
</script>
