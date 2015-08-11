<?php
use Core\Helpers\Html;
use Core\Helpers\Form;
?>
<div class="bg-pic">

    <?= Html::img("login.jpg","Trientalis", []); ?>


    <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
            Administration</h2>
        <p class="small">
            Made by Cardoen Florent
        </p>
    </div>

</div>


<div class="login-container bg-white">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <?= Html::img('admin_logo.png', 'logo'); ?>
        <p class="p-t-35">Utiliser votre identifiant pour administrer le site</p>

        <?= Form::start('users/connect', "POST", ['class' => 'p-t-12', 'role' => 'form']); ?>

        <div class="form-group form-group-default">
            <label>Identifiant</label>
            <div class="controls">
                <?= Form::input('text','login','',['class'=>'form-control', 'value' => isset($post->login)? $post->login : '']); ?>
            </div>
        </div>


        <div class="form-group form-group-default">
            <label>Mot de passe</label>
            <div class="controls">
                <?= Form::input('password','password','',['class'=>'form-control']); ?>
            </div>
        </div>
        <div class="pull-left">
            <div class="checkbox check-success  ">
                <?= Form::input('checkbox','remember','',['class'=>'form-control', 'value' => 0]); ?>
                <label for="remember">Se souvenir de moi</label>
            </div>
        </div>

        <?= Form::end('Se connecter', ['class' => 'btn btn-success btn-block']); ?>
        <br>
        <?= $this->Session->flash(); ?>


    </div>
</div>

