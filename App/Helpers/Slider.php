<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 4/07/2015
 * Time: 13:06
 */
namespace App\Helpers;

class Slider {
    static  function getUrl($src)
    {
        return WEBROOT . "img" . DS . "backgrounds/".$src;
    }

    static function createSlide($slide)
    {
        $return = "<article class=\"slide\" id=\"". (($slide->center)? "ideas" : "showcasing") ."\" style=\"background: url('".self::getImg($slide->background)."') repeat-x top center\">";
        $return.= "<div class=\"info\">";
        $return.= "<h2>".$slide->text."</h2>";
        if(isset($slide->photo))
        {
            $return.= "<img class=\"asset left".$slide->l." sp".$slide->sp." t".$slide->t." z3\" src=\"".self::getImg($slide->photo)."\" />";
        }
        if(!empty($slide->action))
        {
            $return.= "<a href=\"".$slide->action."\">Lire plus</a>";
        }
        $return.="</div>";
        $return.="</article>";
        return $return;
    }

    static function getImg($name)
    {
        return WEBROOT . "files" . DS . "sliders/".$name;

    }


}
