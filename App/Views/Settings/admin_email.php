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
                        <div class="form-group <?= (isset($error['smtp_host']))? "has-error" : ""; ?>">
                            <label>Hôte</label>
                            <?= Form::input('text','smtp_host','',['class'=>'form-control', 'value' => (isset($settings['smtp_host']))? $settings['smtp_host'] : ""]); ?>
                            <?= (isset($error['smtp_host']))? "<label class=\"text-danger\">".$error['smtp_host']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['smtp_port']))? "has-error" : ""; ?>">
                            <label>Port</label>
                            <?= Form::input('text','smtp_port','',['class'=>'form-control', 'value' => (isset($settings['smtp_port']))? $settings['smtp_port'] : ""]); ?>
                            <?= (isset($error['smtp_port']))? "<label class=\"text-danger\">".$error['smtp_port']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['smtp_user']))? "has-error" : ""; ?>">
                            <label>Identifiant</label>
                            <?= Form::input('text','smtp_user','',['class'=>'form-control', 'value' => (isset($settings['smtp_user']))? $settings['smtp_user'] : ""]); ?>
                            <?= (isset($error['smtp_user']))? "<label class=\"text-danger\">".$error['smtp_user']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['smtp_pwd']))? "has-error" : ""; ?>">
                            <label>Mot de passe</label>
                            <?= Form::input('password','smtp_pwd','',['class'=>'form-control', 'value' => (isset($settings['smtp_pwd']))? $settings['smtp_pwd'] : ""]); ?>
                            <?= (isset($error['smtp_pwd']))? "<label class=\"text-danger\">".$error['smtp_pwd']."</label>":""; ?>
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
                        <div class="form-group <?= (isset($error['mail_name']))? "has-error" : ""; ?>">
                            <label>Nom</label>
                            <?= Form::input('text','mail_name','',['class'=>'form-control', 'value' => (isset($settings['mail_name']))? $settings['mail_name'] : ""]); ?>
                            <?= (isset($error['mail_name']))? "<label class=\"text-danger\">".$error['mail_name']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['mail_signature']))? "has-error" : ""; ?>">
                            <label>Signature</label>
                            <?= Form::textarea('mail_signature',['class'=>'form-control', 'rows' => 5], (isset($settings['mail_signature']))? $settings['mail_signature'] : ""); ?>
                        </div>
                        <?= (isset($error['mail_signature']))? "<label class=\"text-danger\">".$error['mail_signature']."</label>":""; ?>

                    </div>
                </div>

                <?= Form::end("Enregistrer", ['class' => 'btn btn-info']); ?>
            </div>
        </div>

    </div>
</div>
