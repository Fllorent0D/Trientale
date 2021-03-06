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
use Core\Helpers\CSRFTool;

class CarnetsController extends AppController {

    public function index()
    {
        $d["carnets"] = $this->Carnet->getByYears();
        $this->set($d);
    }
    public function download($id)
    {
        $file = $this->Carnet->getFirst(['where' => ["id" => $id], 'fields' => 'file'])->file;
        $path = getcwd()."/files/carnets/". $file;

        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . $file);
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Description: File Transfer");
        header("Content-Length: " . filesize($path));
        flush();
        $fp = fopen($path, "r");
        while (!feof($fp))
        {
            echo fread($fp, 65536);
            flush();
        }
        fclose($fp);
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
        $d["carnets"] = $this->Carnet->get(["order" => "annee DESC, numero DESC"]);

        $this->set($d);
    }

    public function admin_delete($id)
    {
        if(is_numeric($id))
        {
            if(CSRFTool::check())
            {
                $user = $this->Carnet->getFirst(["where" => ["id" => $id]]);
                //Debug::debug($user);
                if(empty($user))
                {
                    $this->Session->setFlash("Ce carnet n'existe pas", "danger");
                }
                else
                {
                    $this->Carnet->delete($user->id);
                    unlink(BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS . 'carnets' . DS . $user->file);

                    $this->Session->setFlash("Ce carnet a été supprimé", "success");
                }
                CSRFTool::removeToken();
            }
            else
            {
                $this->Session->setFlash("Votre clé CSRF n'est pas valide. Merci de rafraichir la page et de recommencer", "danger");

            }

        }
        else
        {
            $this->Session->setFlash("Ce carnet n'existe pas", "danger");
        }
        $this->redirect("admin/carnets/index");

    }
} 