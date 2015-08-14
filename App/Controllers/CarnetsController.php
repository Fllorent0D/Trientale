<?php
/**
 * Created by PhpStorm.
 * User: Florent Cardoen
 * Date: 9/07/2015
 * Time: 18:52
 */

namespace App\Controllers;

use Core\Helpers\Html;
use Core\Helpers\Text;
use Core\Helpers\Uploader;
use Core\Lib\Debug;

class CarnetsController extends AppController {

    public function index()
    {
        $d["carnets"] = $this->Carnet->get(["order" => "annee DESC, numero"]);
        $this->set($d);
    }

    public function admin_index(){
        $d = [];
        if ($this->Request->isPost) {
            $d['new'] = $this->Request->data;

            if ($this->Carnet->validate($d['new'])) {
                if(!empty($_FILES['pdf']['tmp_name'])) {
                    $carnet = $this->Carnet->get(["where" => ["annee" => $d["new"]->annee, "numero" => $d["new"]->numero]]);
                    if(empty($carnet))
                    {
                        $name = $d["new"]->annee . "_".$d["new"]->numero;
                        $name = Text::toSlug($name);
                        $dest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."carnets" . DS;
                        Uploader::upload($_FILES['pdf'], $name, $dest);
                        $d['new']->file = $name . Uploader::getExtension($_FILES['pdf']['name']);
                        $this->Carnet->create($d['new']);
                        $this->Session->setFlash('Ce carnet a bien été ajouté.');
                    }
                    else
                        $d['error']["pdf"] = "Ce carnet existe déjà";
                } else {
                    $d['error']['pdf'] = "Veuillez selectionner un fichier";
                }
            } else {
                $d['error'] = $this->Carnet->getErrors();
            }
        }
        //Debug::debug($d);
        $d["carnets"] = $this->Carnet->get(["order" => "annee DESC, numero"]);

        $this->set($d);
    }

    public function admin_delete($id)
    {
        if(is_numeric($id))
        {
            $user = $this->Carnet->getFirst(["where" => ["id" => $id]]);
            //Debug::debug($user);
            if(empty($user))
            {
                $this->Session->setFlash("Ce carnet n'existe pas", "danger");
                $this->redirect("admin/carnets/index");
            }
            else
            {
                $this->Carnet->delete($user->id);
                unlink(BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS . 'carnets' . DS . $user->file);

                $this->Session->setFlash("Ce carnet a été supprimé", "success");
                $this->redirect("admin/carnets/index");
            }
        }
        else
        {
            $this->Session->setFlash("Ce carnet n'existe pas", "danger");
            $this->redirect("admin/carnets/index");
        }

    }
} 