<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 19/07/15
 * Time: 09:39
 */

namespace App\Controllers;


use Core\Lib\Debug;

class AboutsController extends AppController {
    public function trientale()
    {
        $d['abouts'] = $this->About->get();
        $this->set($d);

    }
    public function admin_index()
    {
        if($this->Request->isPost)
        {
            if($this->About->Validate($this->Request->data))
            {
                $new = new \stdClass();
                $new->title = $this->Request->data->title;
                $new->text = nl2br($this->Request->data->text);
                $last = $this->About->getLast(['order' => 'place']);
                if(empty($last))
                {
                    $new->place = 0;
                }
                else
                {
                    $new->place = $last->place + 1;
                }

                $this->About->create($new);
            }
            else
            {
                $d['error'] = $this->About->getErrors();
            }
        }

        $d["abouts"] = $this->About->get(['order' => 'place']);
        $this->set($d);
    }

}