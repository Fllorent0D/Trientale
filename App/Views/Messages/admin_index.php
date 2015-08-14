<?php

    use Core\Helpers\Form;


?>
<div class="container-fluid container-fixed-lg">
    <div class="row">
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <?= \Core\Helpers\Html::link([$this->Request->controller, $this->Request->action, $this->Request->prefixe],"<span class=\"badge-primary pull-right\">".\Core\Helpers\Html::fa('refresh')."</span>", $this->Request->params); ?>
                    <h3 class="text-center">Boite de réception</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <?php foreach($messages as $message) : ?>
                            <a href="<?= ROOT ?>admin/messages/index/<?= $message->id ?>" class="list-group-item <?= (isset($content) AND $message->id == $content->id)? "active" :""; ?>">
                                <?= ($message->new)?"<span class=\"badge badge-info\">Nouveau</span>" : "" ; ?>
                                <h4 class="list-group-item-heading"><?= htmlspecialchars_decode(html_entity_decode($message->name)); ?></h4>
                                <p class="list-group-item-text"><?= htmlspecialchars_decode(html_entity_decode(\Core\Helpers\Text::cut($message->message, 75))); ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php if(isset($content)): ?>
            <div class="row">
                <div class="panel">
                    <div class="panel-body">
                        <h3>Nom : <?= htmlspecialchars_decode(html_entity_decode($content->name)); ?></h3>
                        <h4>Email : <?= $content->email; ?></h4>
                        <p><?= htmlspecialchars_decode(html_entity_decode(nl2br($content->message))); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3>Répondre</h3>
                    </div>
                    <div class="panel-body">
                        <?= Form::start("admin/messages/index/".$content->id, "POST", ['class' => 'form-default']); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group <?= (isset($error['subject']))? "has-error" : ""; ?>">
                                    <label>Sujet</label>
                                    <?= Form::input('text','subject','',['class'=>'form-control', 'value' => (isset($reply->subject))? $reply->subject : ""]); ?>
                                    <?= (isset($error['subject']))? "<label class=\"text-danger\">".$error['subject']."</label>":""; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group <?= (isset($error['place']))? "has-error" : ""; ?>">
                                    <label>Message</label>
                                    <?= Form::textarea('message',['class'=>'form-control', 'rows' => 5], (isset($reply->message))? $reply->message : ""); ?>
                                </div>
                                <?= (isset($error['message']))? "<label class=\"text-danger\">".$error['message']."</label>":""; ?>

                            </div>
                        </div>
                        <?= Form::end("Répondre", ['class' => 'btn btn-info']); ?>
                    </div>
                </div>
            </div>
            <?php else: ?>

                <div class="row">
                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="text-center padding-100">Aucun message sélectionné</h3>

                        </div>
                    </div>
                </div>


            <?php endif; ?>

        </div>
    </div>

</div>
