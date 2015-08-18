<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 18/08/15
 * Time: 16:56
 */?>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-<?= $event->color ?>">
            <div class="panel-heading">
                <h2 class="panel-title"><?= $event->category ?></h2>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <h4 class="text-<?= $event->color ?>">Date</h4>
                    <p><?= $event->date ?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="text-<?= $event->color ?>">Section</h4>
                    <p><?= $event->section ?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="text-<?= $event->color ?>">Guide</h4>
                    <p><?= $event->guide ?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="text-<?= $event->color ?>">Description</h4>
                    <p><?= $event->description ?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="text-<?= $event->color ?>">Rendez-vous</h4>
                    <p><?= $event->place ?></p>
                </li>
            </ul>

        </div>
    </div>
</div>
