<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 20/10/15
 * Time: 11:37
 */

namespace App\Controllers;


use Core\Lib\Debug;

class PicasasController extends AppController
{
    public function admin_ajouter()
    {
        $this->needRender = false;
        $red = "";
        if($this->Request->isPost)
        {
            $d["post"] = $this->Request->data;
            if($this->Picasa->Validate($d["post"]))
            {
                $new = new \stdClass();
                $new = $d["post"];
                $this->Picasa->create($new);

            }

        }
        $this->redirect("admin/members/index/".$d["post"]->owner);
    }
    public function admin_delete($id = null)
    {
        if(isset($id) && is_numeric($id))
        {
            $this->Picasa->delete($id);
        }
        $this->redirect("admin/members/index");
    }
}