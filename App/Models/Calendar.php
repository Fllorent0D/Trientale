<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 21:16
 */

namespace App\Models;


use Core\Lib\Debug;
use Core\Models\Behaviors\Validator;

class Calendar extends AppModel {
    use Validator;

    public $validationRules = [
        "date" => [
            ['ruleName'=>'required', 'message'=>'Vous n‘avez pas saisi de date'],
        ],
        "category" => [
            ['ruleName' => 'required', 'message' => 'Vous n\'avez pas saisi de catégorie']
        ],
        "section" => [
            ["ruleName" => 'required', 'message' => 'Vous n\'avez pas saisi de section'],
        ],
        "guide" => [
            ["ruleName" => 'required', "message" => 'Vous n\'avez pas saisi de guide']
        ],
        "description" => [
            ["ruleName" => 'required', "message" => 'Vous n\'avez pas saisi de description']
        ],
        "place" => [
            ["ruleName" => 'required', "message" => 'Vous n\'avez pas saisi de lieu de rendez-vous']
        ]

    ];

    public function getEvent($month, $year)
    {
        $rawEvents = $this->get(["where" => ["YEAR(date)" => $year, "MONTH(date)" => $month]]);
        $result = [];
        foreach($rawEvents as $event)
        {
            array_push($result, ["date" => $event->date, "title" => $event->category,"color"=> $event->color ,"link" => "calendars/event/".$event->id]);
        }
        return $result;
    }

}