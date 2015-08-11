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
} 