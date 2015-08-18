<?php

namespace App\Controllers;


use Core\Lib\Debug;

class GlossairesController extends AppController
{
    public function admin_index()
    {
        if($this->Request->isPost)
        {
            if($this->Glossaire->Validate($this->Request->data))
            {

                $this->Glossaire->create($this->Request->data);
                $this->Session->setFlash("Le mot a été ajouté");
            }
            else
            {
                $d["error"] = $this->Glossaire->getErrors();
                $d["new"] = $this->Request->data;
            }
        }


        $d['mots'] = $this->Glossaire->get(['order' => 'word']);
        $this->set($d);
    }
    public function index()
    {
        $d["mots"] = $this->Glossaire->get(['order' => 'word']);
        $this->set($d);
    }

}