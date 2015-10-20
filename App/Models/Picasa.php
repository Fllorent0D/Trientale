<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 20/10/15
 * Time: 11:44
 */

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Picasa extends AppModel
{
    use Validator;
    public $validationRules = [
        "nom" =>[
            ["ruleName" => "required", "message" => "Un nom est requis"]
        ],
        "link" => [
            ["ruleName" => "required", "message" => "Un lien est requis"]
        ]
    ];

}