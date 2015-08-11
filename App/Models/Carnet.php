<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 9/07/2015
 * Time: 20:42
 */

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Carnet extends AppModel {
    use Validator;

    public $validationRules = [
        "annee" => [["ruleName" => "required", "message" => "Vous devez rentrer une annee"], ["ruleName" => "isInt", "message" => "L'annee doit être un nombre"]],
        "numero" => [["ruleName" => "required", "message" => "Vous devez rentrer un numero"], ["ruleName" => "isInt", "message" => "Le numero doit être un nombre"]]
    ];

} 