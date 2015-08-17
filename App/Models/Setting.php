<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:13
 */

namespace App\Models;


use Core\Models\Behaviors\Validator;

class Setting extends AppModel
{
    use Validator;

    public $validationRules = [
        "smtp_host" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un hôte"]
        ],
        "smtp_user" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un utilisateur"]
        ],
        "smtp_pwd" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer un mot de passe"]
        ],
        "mail_name" =>[
            ["ruleName" => "required", "message" => "Vous devez rentrer un nom"]
        ],
        "mail_signature" => [
            ["ruleName" => "required", "message" => "Vous devez rentrer une signature"]
        ]

    ];

    public function getValue($key)
    {
        return $this->getFirst(['where' => ['name' => $key], 'fields' => 'name'])->name;
    }


    public function updateValue($key, $value)
    {
        $request = $this->bdd->prepare("UPDATE settings SET value = ? WHERE name = ?");
        $request->execute([$value, $key]);
    }
    public function getSettings()
    {
        $settings = $this->get(['fields' => 'name, value']);

        foreach($settings as $key => $value)
        {
            $return[$value->name] = $value->value;
        }
        return $return;


    }

}