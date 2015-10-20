<?php
use Core\Helpers\Form;
use Core\Helpers\Html;
?>
<div class="modal fade slide-top disable-scroll" id="newgalery" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Ajouter une galerie</h4>
            </div>
            <div class="modal-body">
                <?= Form::start('admin/picasas/ajouter', "POST", ['class' => 'form-default']); ?>
                <?= Form::input('hidden', "owner", false, [], $owner); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['nom']))? "has-error" : ""; ?>">
                            <label>Nom</label>
                            <?= Form::input('text','nom','',['class'=>'form-control', 'value' => (isset($post->nom))? $post->nom : ""]); ?>
                            <?= (isset($error['nom']))? "<label class=\"text-danger\">".$error['nom']."</label>":""; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group"  >
                            <label>Lien</label>
                            <div class="input-group <?= (isset($error['link']))? "has-error" : ""; ?>" >
                                <span class="input-group-addon" id="sizing-addon1">http://</span>
                                <?= Form::input('text','link','',['class'=>'form-control','aria-describedby' => "sizing-addon1", 'value' => (isset($post->link))? $post->link : ""]); ?>
                            </div>
                            <?= (isset($error['link']))? "<label class=\"text-danger\">".$error['link']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['description']))? "has-error" : ""; ?>">
                            <label>Description</label>
                            <?= Form::textarea('description', ['class' => 'form-control', 'rows' => '15'], (isset($post->description))? $post->description : '' ); ?>
                            <?= (isset($error['description']))? "<label class=\"text-danger\">".$error['description']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <?= Form::end('Ajouter la galerie', ['class' => 'btn btn-primary btn-block']); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-top disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Ajouter un nouveau membre</h4>
            </div>
            <div class="modal-body">

                <?= Form::start('admin/members/index', "POST", ['class' => 'form-default']); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['nom']))? "has-error" : ""; ?>">
                            <label>Nom</label>
                            <?= Form::input('text','nom','',['class'=>'form-control', 'value' => (isset($post->nom))? $post->nom : ""]); ?>
                            <?= (isset($error['nom']))? "<label class=\"text-danger\">".$error['nom']."</label>":""; ?>
                        </div>
                    </div>
                </div>

                <?= Form::end('Creer le lien', ['class' => 'btn btn-primary btn-block']); ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid container-fixed-lg">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="text-center">Membres</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <?php foreach($membres as $membre) : ?>
                            <a href="<?= ROOT ?>admin/members/index/<?= $membre->id ?>" class="list-group-item <?= (isset($owner) AND $membre->id == $owner)? "active" :""; ?>">
                                <h4 class="list-group-item-heading"><?= htmlspecialchars_decode(html_entity_decode($membre->nom)); ?></h4>
                            </a>
                        <?php endforeach; ?>
                            <a class="list-group-item" data-toggle="modal" data-target="#modalSlideUp">
                                <h4 class="list-group-item-heading"><i class="fa fa-plus"></i> Nouveau membre</h4>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 panel">
            <?php if(!is_null($owner)): ?>
                <div class="panel-heading">
                    <a class="btn btn-info" data-toggle="modal" data-target="#newgalery">Ajouter une galerie</a>
                </div>
                <div class="panel-body">
                    <?php foreach($galeries as $galery): ?>
                        <div class="col-md-4">
                            <div class="well">
                                <h4><?= $galery->nom ?></h4>
                                <p><?= $galery->description ?></p>
                                <a href="<?= $galery->link?>" class="btn btn-primary">Voir</a>
                                <?= Html::link(["picasas", "delete", "admin"], "Supprimer", [$galery->id], ["class" => "btn btn-danger"]); ?>
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
