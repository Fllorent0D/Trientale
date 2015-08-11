<?php

namespace App\Models;


use Core\Models\Behaviors\Validator;

class User extends AppModel
{
    use Validator;

    public $validationRules = [
        "password" => [
            ['ruleName'=>'required', 'message'=>'Vous n‘avez pas saisi de mot de passe'],
        ],
        "login" => [
            ['ruleName' => 'required', 'message' => 'Vous n\'avez pas saisi d\'identifiant']
        ],
        "email" => [
            ["ruleName" => 'required', 'message' => 'Vous n\'avez pas saisi d\'email'],
            ["ruleName" => 'isMail', "message" => "L'adresse email n'est pas valide"]
        ],
        "nom" => [
            ["ruleName" => 'required', "message" => 'Vous n\'avez pas saisi de nom']
        ]

    ];

}