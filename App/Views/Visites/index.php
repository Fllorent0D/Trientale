<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 16:11
 */
    use Core\Helpers\Html;
    use Core\Helpers\Text;
    use Core\Helpers\Date;
?>
<div class="container">
    <div class="row">
        <?php foreach($visites as $visite) : ?>
            <div class="col-md-10">
                <h2>
                    <?= Html::link(['visites', 'lire'], $visite->title , [$visite->id])?>
                </h2>
                <p class="lead">
                    Guide : <?= Html::link(['visites', 'guide'], $visite->guide , [$visite->id])?>
                </p>
                <p><i class="fa fa-clock-o"></i> <?= Date::dateToFr($visite->date, "Le %d %B %Y") ;?></p>
                <hr>
                <p><?= Text::cut($visite->text, 600); ?></p>
                <?= Html::link(['visites', 'lire'], "Lire la suite ".Html::fa('chevron-right') , [$visite->id], ['class' => 'btn btn-primary'])?>
                <a class="btn btn-warning" href="<?= \Core\Helpers\Html::getFile('visites'. DS . $visite->file);?>">Télécharger le pdf <i class="fa fa-download"></i></a>

                <hr>
            </div>
        <?php endforeach; ?>
        <div>
    </div>
</div>

