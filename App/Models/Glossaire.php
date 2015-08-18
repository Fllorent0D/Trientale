<?php

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Glossaire extends AppModel
{
    use Validator;

    public $validationRules = [
        "word" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un mot"]
        ],
        "definition" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer une définition"]
        ]
    ];

}