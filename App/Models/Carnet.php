<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 9/07/2015
 * Time: 20:42
 */

namespace App\Models;


use Core\Lib\Debug;
use Core\Models\Behaviors\Validator;

class Carnet extends AppModel {
    use Validator;

    public $validationRules = [
        "annee" => [["ruleName" => "required", "message" => "Vous devez rentrer une annee"], ["ruleName" => "isInt", "message" => "L'annee doit être un nombre"]],
        "numero" => [["ruleName" => "required", "message" => "Vous devez rentrer un numero"], ["ruleName" => "isInt", "message" => "Le numero doit être un nombre"]]
    ];
    public function getByYears()
    {
        $annees = $this->bdd->prepare("SELECT DISTINCT annee FROM carnets ORDER BY annee DESC");
        $annees->execute();
        $annees = $annees->fetchAll();
        $return = [];

        foreach($annees as $annee)
        {
            $req = $this->bdd->prepare("SELECT * FROM carnets WHERE annee = ".$annee->annee ." ORDER BY numero ASC");
            $req->execute();
            $return[$annee->annee] = $req->fetchAll();
        }
        return $return;
    }


} 