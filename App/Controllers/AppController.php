<?php

namespace App\Controllers;

use Core\Controllers\Controller;
use Core\Lib\Debug;

class AppController extends Controller
{
    public $components = ['Auth'];

    public function beforeRender(){
        if(isset($this->Request->prefixe) && $this->Request->prefixe == "admin")
        {
            if(!$this->Auth->isLogged()) {
                $this->Session->setFlash('Vous devez être connecté pour effectuer cette action !','danger');
                $this->redirect('users/connect');
            }
            $pages = [
                "links" => "Liens",
                "home" => "Accueil Administration",
                "backups" => "Backup",
                "calendars" => "Calendrier",
                "carnets" => "Carnets",
                "galleries" => "Galeries",
                "glossaires" => "Glossaire",
                "home"=> "Accueil",
                "members" => "Membres",
                "messages" => "Messagerie",
                "photos" => "Photos",
                "settings" => "Réglages",
                "users" => "Utilisateurs",
                "visites" => "Comptes Rendus",
                "abouts" => "A propos"
                ];
            $d["pageTitle"] = $pages[$this->Request->controller];
            $this->layout = 'admin';
        }
        else
        {
            $this->loadModel("Message");
            if($this->Request->isPost AND $this->Request->controller != "users")
            {
                if($this->Message->Validate($this->Request->data))
                {
                    //$this->Request->data->message = nl2br($this->Request->data->message);
                    $this->Request->data->message = htmlspecialchars($this->Request->data->message);
                    $this->Request->data->name = htmlspecialchars($this->Request->data->name);
                    $this->Message->create($this->Request->data);
                    $d['contactInfo'] = "Votre message est bien envoyé";
                }
                else
                {
                    $d['contactData'] = $this->Request->data;
                    $d['contactErrors'] = $this->Message->getErrors();
                }
            }

        }
        $this->loadModel("Setting");
        $d["settings_app"] = $this->Setting->getSettings();

        $this->set($d);



    }

}