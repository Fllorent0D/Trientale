<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 19/07/15
 * Time: 09:40
 */

namespace App\Models;


use Core\Models\Behaviors\Validator;

class About extends AppModel{
    use Validator;


    public $validationRules = [
        "title" => [["ruleName" => "required", "message" => "Vous devez rentrer un titre"]],
        "text" => [["ruleName" => "required", "message" => "Vous devez rentrer du texte"]]
    ];


}