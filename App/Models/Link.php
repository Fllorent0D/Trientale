<?php

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Link extends AppModel
{
    use Validator;

    public $validationRules =[
        "title" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un titre"]
        ],
        "link" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un lien"]
        ]
    ];

}