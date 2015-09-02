<?php

namespace App\Controllers;


use Core\Lib\Debug;

class LinksController extends AppController
{
    public function admin_index()
    {
        if($this->Request->isPost)
        {
            if($this->Link->Validate($this->Request->data))
            {
                //$post = new \stdClass();
                if($this->Link->create($this->Request->data))
                {
                    $this->Session->setFlash("Votre lien a été ajouté");
                }
                else
                {
                    $d["post"] = $this->Request->data;
                    $this->Session->setFlash("Erreur lors de l'ajout dans la base de données", "danger");
                }

            }
            else
            {
                $d["post"] = $this->Request->data;
                $d["error"] = $this->Link->getErrors();
            }
        }


        $d["links"] = $this->Link->get();
        $this->set($d);
    }
    public function index()
    {
        $d["links"] = $this->Link->get();
        $this->set($d);
    }

}