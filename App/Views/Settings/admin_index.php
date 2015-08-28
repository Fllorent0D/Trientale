<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:21
 */
use Core\Helpers\Form;
use Core\Helpers\Text;

?>

<div class="row">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <h3>Réglages Mail</h3>
            </div>
            <div class="panel-body">
                <h4>Signature</h4>

                <?= Form::start("admin/settings/index/", "POST", ['class' => 'form-default']); ?>
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
                            <?= Form::textarea('mail_signature',['class'=>'form-control', 'rows' => 5], (isset($settings['mail_signature']))? Text::br2nl($settings['mail_signature']) : ""); ?>
                        </div>
                        <?= (isset($error['mail_signature']))? "<label class=\"text-danger\">".$error['mail_signature']."</label>":""; ?>

                    </div>
                </div>
                <div class="row">
                    <h4>SMTP</h4>

                </div>

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
                <?= Form::end("Enregistrer", ['class' => 'btn btn-info pull-right']); ?>
            </div>


        </div>

    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <h3>Pied de page</h3>
            </div>
            <div class="panel-body">
                <?= Form::start("admin/settings/index/", "POST", ['class' => 'form-default']); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['footer_title']))? "has-error" : ""; ?>">
                            <label>Titre</label>
                            <?= Form::input('text','footer_title','',['class'=>'form-control', 'value' => (isset($settings['footer_title']))? $settings['footer_title'] : ""]); ?>
                            <?= (isset($error['footer_title']))? "<label class=\"text-danger\">".$error['footer_title']."</label>":""; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['footer_text']))? "has-error" : ""; ?>">
                            <label>Texte</label>
                            <?= Form::textarea('footer_text',['class'=>'form-control', 'rows' => 15], (isset($settings['footer_text']))? Text::br2nl($settings['footer_text']) : ""); ?>
                        </div>
                        <?= (isset($error['footer_text']))? "<label class=\"text-danger\">".$error['footer_text']."</label>":""; ?>

                    </div>
                </div>

                <?= Form::end("Enregistrer", ['class' => 'btn btn-info pull-right']); ?>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <h3>Google Analytics</h3>
            </div>
            <div class="panel-body">
                <?= Form::start("admin/settings/index/", "POST", ['class' => 'form-default']); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['google_analytics_id']))? "has-error" : ""; ?>">
                            <label>Code de suivi</label>
                            <?= Form::input('text','google_analytics_id','',['class'=>'form-control', 'value' => (isset($settings['google_analytics_id']))? $settings['google_analytics_id'] : ""]); ?>
                            <?= (isset($error['google_analytics_id']))? "<label class=\"text-danger\">".$error['google_analytics_id']."</label>":""; ?>
                        </div>
                    </div>
                </div>

                <?= Form::end("Enregistrer", ['class' => 'btn btn-info pull-right']); ?>
            </div>
        </div>

    </div>
</div>