<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 20:27
 */

namespace Core\Helpers;


use Core\Lib\Debug;

class Calendar {

    // ["date" => ["title"=>"Titre", "color" => "danger", "link" => ""]
    static function drawCalendar($month, $year, $event = [])
    {

        $curday = date("d");
        $curmonth = date("m");
        $curyear = date("Y");
        $days = cal_days_in_month(CAL_GREGORIAN,$month,$year); // Nombre de jours
        $lastmonth = date("t", mktime(0,0,0,$month-1,1,$year)); // Les derniers jours du mois avant
        $start = date("N", mktime(0,0,0,$month,1,$year)); // Début du mois demandé
        $finish = date("N", mktime(0,0,0,$month,$days,$year)); // Dernier jour du mois
        $laststart = $start - 1;

        $counter = 1;
        $nextMonthCounter = 1;

        if($start > 5)
            $rows = 6;
        else
            $rows = 5;

        echo '<table class="table table-bordered" style="table-layout: fixed;">
                <thead>
                <tr>
                    <th style="text-align: right;">Lun.</th>
                    <th style="text-align: right;">Mar.</th>
                    <th style="text-align: right;">Mer.</th>
                    <th style="text-align: right;">Jeu.</th>
                    <th style="text-align: right;">Ven.</th>
                    <th style="text-align: right;">Sam.</th>
                    <th style="text-align: right;">Dim.</th>
                </tr>
                </thead>
                <tbody>';
        for($i = 1; $i <= $rows; $i++)
        {
            echo '<tr class="week" style="height : 100px;">';
            for($x = 1; $x <= 7; $x++)
            {
                $class ="";
                $tclass = "";
                $button = "";

                if(($counter - $start) < 0)
                {
                    $date = ($lastmonth - $laststart) + $counter;
                    $class = 'class="active"';
                }
                else if(($counter - $start) >= $days)
                {
                    $date = $nextMonthCounter;
                    $nextMonthCounter++;
                    $class = 'class="active"';
                }
                else
                {
                    $date = $counter - $start + 1;
                    if($curday == $date && $curmonth == $month && $curyear == $year)
                        $tclass = 'class="badge badge-default"';
                    $ldate = $year . '-'.str_pad($month, 2, 0, STR_PAD_LEFT) .'-'.str_pad($date, 2, 0, STR_PAD_LEFT);
                    foreach ($event as $key => $val)
                    {
                        if ($val['date'] === $ldate)
                            $button .= '<a href="'.$val["link"].'" class="label label-'.$val['color'].'">'.$val["title"].'</a><br>';

                    }

                }


                echo '<td '.$class.'><div style="text-align: right;"><span '.$tclass.'>'.$date.'</span></div>'.$button.'</td>';

                $counter++;
            }
            echo '</tr>';
        }
        echo "</table>";
    }

}


