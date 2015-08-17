<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:11
 */

namespace App\Controllers;
use Core\Lib\Debug;

class SettingsController extends AppController
{
    public function admin_email()
    {
        $d = [];
        if($this->Request->isPost)
        {
            if($this->Setting->Validate($this->Request->data))
            {
                foreach($this->Request->data as $key => $value)
                {
                    $this->Setting->updateValue($key, $value);
                }
            }
            else
            {
                $d["error"] = $this->Setting->getErrors();
            }

        }
        $d["settings"] = $this->Setting->getSettings();
        $this->set($d);
    }
    public function admin_changelog()
    {

    }

}