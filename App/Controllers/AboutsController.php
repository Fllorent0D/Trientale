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
        $d['abouts'] = $this->About->get(["where" => ["category" => "trientale"]]);
        $this->set($d);

    }
    public function reserves()
    {
        $d['abouts'] = $this->About->get(["where" => ["category" => "reserves"]]);
        $this->set($d);
        $this->view = "trientale";
    }
    public function admin_index()
    {
        if($this->Request->isPost)
        {
            if($this->About->Validate($this->Request->data))
            {
                $new = new \stdClass();
                $new->title = $this->Request->data->title;
                $new->text = nl2br(htmlentities($this->Request->data->text, ENT_QUOTES, 'UTF-8'));
                //$new->text = nl2br($this->Request->data->text);
                $last = $this->About->getLast(['order' => 'place']);
                if(empty($last))
                {
                    $new->place = 0;
                }
                else
                {
                    $new->place = $last->place + 1;
                }
                $new->category = "trientale";
                $this->About->create($new);
            }
            else
            {
                $d['error'] = $this->About->getErrors();
            }
        }

        $d["abouts"] = $this->About->get(['where' => ['category' => 'trientale'], 'order' => 'place']);
        $this->set($d);
    }
    public function admin_reserves()
    {
        if($this->Request->isPost)
        {
            if($this->About->Validate($this->Request->data))
            {
                $new = new \stdClass();
                $new->title = $this->Request->data->title;
                $new->text = nl2br(htmlentities($this->Request->data->text, ENT_QUOTES, 'UTF-8'));
                $last = $this->About->getLast(['order' => 'place']);
                if(empty($last))
                {
                    $new->place = 0;
                }
                else
                {
                    $new->place = $last->place + 1;
                }
                $new->category = "reserves";
                $this->About->create($new);
            }
            else
            {
                $d['error'] = $this->About->getErrors();
            }
        }

        $d["abouts"] = $this->About->get(['where' => ["category" => "reserves"],'order' => 'place']);
        $this->set($d);
    }

}