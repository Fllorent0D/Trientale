<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 14/08/15
 * Time: 19:53
 */

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Message extends AppModel
{
    use Validator;

    public $validationRules = [
        "email" =>
        [
            ["ruleName" => "isMail", "message" => "Vous n'avez pas rentré une adresse email valide"],
            ["ruleName" => "required", "message" => "Vous devez rentrer une adresse email"]
        ],
        "name" =>
        [
            ["ruleName" => "required", "message" => "Vous devez rentrer un nom"]
        ],
        "message" =>
        [
            ["ruleName" => "required", "message" => "Vous devez rentrer un message"]
        ],
        "subject" =>
        [
            ['ruleName' => "required", "message" => "Vous devez écrire un sujet"]
        ]
    ];
}