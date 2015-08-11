<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 13/07/15
 * Time: 21:35
 */

namespace App\Models;


use Core\Lib\Debug;
use Core\Models\Behaviors\Validator;

class Gallery extends AppModel{
    use Validator;

    public $table = "galleries";

    public $validationRules = [
        "title" => [["ruleName" => "required", "message" => "Vous devez rentrer un nom de gallerie"]],
        "category" => [["ruleName" => "required", "message" => "Vous devez rentrer une catégorie pour votre gallerie"]]

    ];
    public function getGalleries()
    {
        $galleries = $this->get();

        foreach($galleries as $k => $gallery)
        {

            $galleries[$k]->photos = $this->get(["where" => ["gallery_id" => $gallery->id]], 'photos');
            if(empty($gallery->thumbnail)) {
                $galleries[$k]->thumbnail = $galleries[$k]->photos[0]->file;
            }
        }

        return $galleries;
    }
}