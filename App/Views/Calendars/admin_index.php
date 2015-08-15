<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 8/07/15
 * Time: 14:31
 */
use Core\Helpers\Html;
use Core\Helpers\Form;
use Core\Helpers\Date;
use Core\Helpers\Calendar;
?>
<div class="modal fade slide-top disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <h4>Ajouter un événement</h4>
            </div>
            <div class="modal-body">


                <?= Form::start($this->Request->url, "POST", ['class' => 'form-default']); ?>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group <?= (isset($error['date']))? "has-error" : ""; ?>">
                            <label>Date</label>
                            <?= Form::input('date','date','',['class'=>'form-control', 'placeholder' => 'YYYY-MM-DD', 'value' => (isset($new->date))? $new->date : $date->format('Y')."-".$date->format("m")."-"]); ?>
                        </div>
                        <?= (isset($error['date']))? "<label class=\"text-danger\">".$error['date']."</label>":""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['category']))? "has-error" : ""; ?>">
                            <label>Catégorie</label>
                            <?= Form::input('text','category','',['class'=>'form-control', 'value' => (isset($new->category))? $new->category : ""]); ?>
                        </div>
                        <?= (isset($error['category']))? "<label class=\"text-danger\">".$error['category']."</label>":""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['section']))? "has-error" : ""; ?>">
                            <label>Section</label>
                            <?= Form::input('text','section','',['class'=>'form-control', 'value' => (isset($new->section))? $new->section : ""]); ?>
                        </div>
                        <?= (isset($error['section']))? "<label class=\"text-danger\">".$error['section']."</label>":""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['guide']))? "has-error" : ""; ?>">
                            <label>Guide</label>
                            <?= Form::input('text','guide','',['class'=>'form-control', 'value' => (isset($new->guide))? $new->guide : ""]); ?>
                        </div>
                        <?= (isset($error['guide']))? "<label class=\"text-danger\">".$error['guide']."</label>":""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['description']))? "has-error" : ""; ?>">
                            <label>Description</label>
                            <?= Form::textarea('description',['class'=>'form-control', 'rows' => 10], (isset($new->description))? $new->description : ""); ?>
                        </div>
                        <?= (isset($error['description']))? "<label class=\"text-danger\">".$error['description']."</label>":""; ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['place']))? "has-error" : ""; ?>">
                            <label>Rendez-vous</label>
                            <?= Form::textarea('place',['class'=>'form-control', 'rows' => 5], (isset($new->place))? $new->place : ""); ?>
                        </div>
                        <?= (isset($error['place']))? "<label class=\"text-danger\">".$error['place']."</label>":""; ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group <?= (isset($error['color']))? "has-error" : ""; ?>">
                            <label>Couleur</label>
                            <?= Form::select('color', '', ['primary' => 'Bleu','info'=> 'Bleu clair', 'danger' => 'Rouge', 'success' => "Vert", 'warning' => 'Orange', 'default' => 'Gris'], 'primary'); ?>
                        </div>
                        <?= (isset($error['color']))? "<label class=\"text-danger\">".$error['color']."</label>":""; ?>

                    </div>
                </div>
                <?= Form::end('Ajouter', ['class' => 'btn btn-primary btn-block']); ?>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>





<div class="container-fluid container-fixed-lg">
    <div class="col-md-12">
        <div class="panel">
            <dev class="panel-heading text-center">
                <h2><?= ucfirst(\Core\Helpers\Date::dateToFr($date->format('Y-m-d H:i:s'), '%B %Y')) ?></h2>
                <div class="btn-group" role="group">
                    <?= Html::link(['calendars', 'index', "admin"], Html::fa('angle-left')." ".ucfirst(Date::dateToFr($date->modify('-1 month')->format('Y-m-d H:i:s'), '%B')) ,[$date->format('m'), $date->format('Y')], ['class' => 'btn btn-default']); ?>
                    <?= Html::link(['calendars', 'index', "admin"], ucfirst(Date::dateToFr($date->modify('+2 month')->format('Y-m-d H:i:s'), '%B')) . " " .Html::fa('angle-right') ,[$date->format('m'), $date->format('Y')], ['class' => 'btn btn-default']); ?>
                </div>
            </dev>
            <div class="panel-body">
                <?php
                $date->modify('-1 month');
                Calendar::drawCalendar($date->format("m"),$date->format("Y") , $calendrier);

                ?>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10%">Date</th>
                        <th style="width: 10%">Catégorie</th>
                        <th style="width: 10%">Section</th>
                        <th style="width: 10%">Guide</th>
                        <th style="width: 30%">Description</th>
                        <th style="width: 25%">Rendez-vous</th>
                        <th style="width: 5%"></th>
                        <th style="width: 5%"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="8" class="text-center">
                            <a href="#" class="text-primary" data-toggle="modal" data-target="#modalSlideUp"><?= Html::fa('plus') ?> Ajouter un événement</a>
                        </td>
                    </tr>
                    <?php foreach ($events as $event) : ?>
                        <tr>
                            <td><?= $event->date; ?></td>
                            <td><?= $event->category; ?></td>
                            <td><?= $event->section; ?></td>
                            <td><?= $event->guide; ?></td>
                            <td><?= \Core\Helpers\Text::cut($event->description, 125); ?></td>
                            <td><?= \Core\Helpers\Text::cut($event->place, 125); ?></td>
                            <td><?= Html::link(['visites', 'delete','admin'], Html::fa('times'), [$event->id], ["class" => "label label-danger" ,"data-toggle" => "tooltip", "data-placement" => "top", "title" => "Supprimer la visite"]) ?></td>
                            <td><a href="<?= Html::getFile('visites'. DS . $event->file); ?>" class="label label-warning" data-toggle = "tooltip" data-placement = "top" title = "Modifier"><?= Html::fa('pencil'); ?></a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= isset($error)? '<script type="text/javascript">$(window).load(function(){$(\'#modalSlideUp\').modal(\'show\');});</script>' :""; ?>