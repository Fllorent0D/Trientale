<?php

namespace App\Controllers;


class MembersController extends AppController
{
    public function index($id = null)
    {
        $d["owner"] = $id;
        $d["membres"] = $this->Member->get(["order" => "nom"]);
        $this->loadModel('Picasa');
        $d["galeries"] = $this->Picasa->get(["where" => ["owner" => $id], "order" => "id DESC"]);
        $this->set($d);
    }
    public function admin_index($id = null)
    {
        if($this->Request->isPost)
        {
            if(!empty($this->Request->data->nom))
            {
                $new = new \stdClass();
                $new->nom = $this->Request->data->nom;
                $this->Member->create($new);
                $id = $this->Member->getLast()->id;
            }
        }
        $d["owner"] = $id;
        $d["membres"] = $this->Member->get(["order" => "nom"]);
        $this->loadModel('Picasa');
        $d["galeries"] = $this->Picasa->get(["where" => ["owner" => $id], "order" => "id DESC"]);
        $this->set($d);
    }
}