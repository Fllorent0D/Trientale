<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 16:11
 */
use Core\Helpers\Html;

?>
<div class="container">
    <div class="row">
        <div class="col-md-10">

            <?php foreach($links as $link) : ?>
                <h3><a href="http://<?= $link->link ?>" target="_blank"><?= $link->title ?></a></h3>
                <p><?= $link->comment ?></p>
                <hr>
            <?php endforeach; ?>

        </div>


    </div>
</div>

