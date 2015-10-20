<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="text-center">Membres</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <?php foreach($membres as $membre) : ?>
                            <?= \Core\Helpers\Html::link(["members", "index"], '<h4 class="list-group-item-heading">'. htmlspecialchars_decode(html_entity_decode($membre->nom)).'</h4>',[$membre->id], ["class" => "list-group-item ".((isset($owner) AND $membre->id == $owner)? "active" :"")] ) ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 panel">
            <?php if(!is_null($owner)): ?>
                <div class="panel-body">
                    <?php foreach($galeries as $galery): ?>
                        <div class="col-md-6">
                            <div class="well">
                                <h4><?= $galery->nom ?></h4>
                                <p><?= $galery->description ?></p>
                                <a href="//<?= $galery->link?>" class="btn btn-primary" target="_blank">Afficher</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="text-center padding-100">Aucun membre sélectionné</h3>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
