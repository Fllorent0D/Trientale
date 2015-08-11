<?php
use Core\Helpers\Form;
?>

<div id="main-wrapper">
    <div class="row">
        <?= Form::start('users/register', "POST", ['class' => 'col-md-6']); ?>
        <div class="form-group">
            <?= Form::input('text','login','Login',['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
            <?= Form::input('password','password','Password',['class'=>'form-control']); ?>
        </div>
        <div class="form-group">
            <?= Form::input('text','role','Role',['class'=>'form-control']); ?>
        </div>

        <?= Form::end('Creer le compte', ['class' => 'btn btn-default']); ?>
    </div>
</div>