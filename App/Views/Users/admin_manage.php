<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 8/07/15
 * Time: 14:31
 */
use Core\Helpers\Html;
use Core\Helpers\Form;
?>

<div class="modal fade slide-top disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Ajouter un nouvel utilisateur</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                </div>

                <?= Form::start('admin/users/manage', "POST", ['class' => 'form-default']); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['login']))? "has-error" : ""; ?>">
                                <label>Identifiant</label>
                                <?= Form::input('text','login','',['class'=>'form-control', 'value' => (isset($post->login))? $post->login : ""]); ?>
                                <?= (isset($error['login']))? "<label class=\"text-danger\">".$error['login']."</label>":""; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['password']))? "has-error" : ""; ?>">
                                <label>Mot de passe</label>
                                <?= Form::input('password','password','',['class'=>'form-control', 'value' => (isset($post->password))? $post->password : ""]); ?>
                                <?= (isset($error['password']))? "<label class=\"text-danger\">".$error['password']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['nom']))? "has-error" : ""; ?>">
                                <label>Nom Prenom</label>
                                <?= Form::input('text','nom','',['class'=>'form-control', 'value' => (isset($post->nom))? $post->nom : ""]); ?>
                                <?= (isset($error['nom']))? "<label class=\"text-danger\">".$error['nom']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group <?= (isset($error['email']))? "has-error" : ""; ?>">
                                <label>Email</label>
                                <?= Form::input('text','email','',['class'=>'form-control', 'value' => (isset($post->email))? $post->email : ""]); ?>
                                <?= (isset($error['email']))? "<label class=\"text-danger\">".$error['email']."</label>":""; ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Rôle</label>
                                <?= Form::input('text','role','',['class'=>'form-control', 'value' => (isset($post->role))? $post->role : ""]); ?>
                            </div>
                        </div>
                    </div>
                <?= Form::end('Creer le compte', ['class' => 'btn btn-primary btn-block']); ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<div class="container-fluid container-fixed-lg">

    <div class="panel panel-transparent">
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom Prenom</th>
                    <th>Identifiant</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->nom; ?></td>
                    <td><?= $user->login; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->role; ?></td>
                    <td><?= Html::link(['users', 'delete','admin'], Html::fa('times'), [$user->id], ["class" => "text-danger" ,"data-toggle" => "tooltip", "data-placement" => "right", "title" => "Supprimer ce compte"]) ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="6" class="text-center">
                        <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter un utilisateur</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>