<?php

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Slider extends AppModel
{
    use Validator;

    public $validationRules = [
        "text" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un titre"]
        ]

    ];

}