<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 18/08/15
 * Time: 11:30
 */?>
<div class="container">
    <h3>Glossaire</h3>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach($mots as $mot) : ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading_<?= $mot->id ?>">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?= $mot->id ?>" aria-expanded="false" aria-controls="collapse_<?= $mot->id ?>">
                            <?= $mot->word ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse_<?= $mot->id ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?= $mot->id ?>">
                    <div class="panel-body">
                        <?= $mot->definition ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

