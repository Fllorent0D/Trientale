<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:44
 */

namespace App\Models;
use Core\Helpers\Dumper;

class Backup extends AppModel
{
    public function exportDB()
    {
        return Dumper::exportDB($this->bdd);
    }
}