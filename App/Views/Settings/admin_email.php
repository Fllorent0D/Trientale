<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:21
 */
use Core\Helpers\Form;
?>

<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <h3>Réglages SMTP</h3>
            </div>
            <div class="panel-body">
                <?= Form::start("admin/settings/email/", "POST", ['class' => 'form-default']); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['host']))? "has-error" : ""; ?>">
                            <label>Hôte</label>
                            <?= Form::input('text','host','',['class'=>'form-control', 'value' => (isset($smpt->host))? $smpt->host : ""]); ?>
                            <?= (isset($error['host']))? "<label class=\"text-danger\">".$error['host']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['user']))? "has-error" : ""; ?>">
                            <label>Identifiant</label>
                            <?= Form::input('text','user','',['class'=>'form-control', 'value' => (isset($smpt->user))? $smpt->user : ""]); ?>
                            <?= (isset($error['user']))? "<label class=\"text-danger\">".$error['user']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['pwd']))? "has-error" : ""; ?>">
                            <label>Mot de passe</label>
                            <?= Form::input('password','pwd','',['class'=>'form-control', 'value' => (isset($smpt->pwd))? $smpt->pwd : ""]); ?>
                            <?= (isset($error['pwd']))? "<label class=\"text-danger\">".$error['pwd']."</label>":""; ?>
                        </div>
                    </div>
                </div>

                <?= Form::end("Enregistrer", ['class' => 'btn btn-info']); ?>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <h3>Signature</h3>
            </div>
            <div class="panel-body">
                <?= Form::start("admin/settings/email/", "POST", ['class' => 'form-default']); ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['signature']))? "has-error" : ""; ?>">
                            <label>Signature</label>
                            <?= Form::textarea('message',['class'=>'form-control', 'rows' => 5], (isset($reply->message))? $reply->message : ""); ?>
                        </div>
                        <?= (isset($error['message']))? "<label class=\"text-danger\">".$error['message']."</label>":""; ?>

                    </div>
                </div>

                <?= Form::end("Enregistrer", ['class' => 'btn btn-info']); ?>
            </div>
        </div>

    </div>
</div>
