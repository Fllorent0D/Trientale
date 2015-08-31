<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 31/08/15
 * Time: 11:31
 */
use Core\Helpers\Html;
use Core\Helpers\Calendar;
?>
<div class="container">
    <div class="text-center">
        <div class="row">
            <h2><?= ucfirst(\Core\Helpers\Date::dateToFr($date->format('Y-m-d H:i:s'), '%B %Y')) ?></h2>
        </div>
        <div class="row">
            <div class="btn-group" role="group">
                <?= Html::link(['calendars', 'index'], Html::fa('arrow-left')." Mois précédent" ,[$date->modify('-1 month')->format('m'), $date->format('Y')], ['class' => 'btn btn-default']); ?>
                <?= Html::link(['calendars', 'index'],"Mois suivant " .Html::fa('arrow-right') ,[$date->modify('+2 month')->format('m'), $date->format('Y')], ['class' => 'btn btn-default']); ?>
            </div>
        </div>
    </div>

    <?php
    $date->modify('-1 month');
    Calendar::drawCalendar($date->format("m"),$date->format("Y") , $calendrier);
    ?>

</div>
