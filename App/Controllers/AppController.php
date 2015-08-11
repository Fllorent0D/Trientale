<?php

namespace App\Controllers;

use Core\Controllers\Controller;
use Core\Lib\Debug;

class AppController extends Controller
{
    public $components = ['Auth'];

    public function beforeRender(){

        if(isset($this->Request->prefixe) && $this->Request->prefixe == "admin"){
            if(!$this->Auth->isLogged()) {
                $this->Session->setFlash('Vous devez être connecté pour effectuer cette action !','danger');
                $this->redirect('users/connect');
            }
            $this->layout = 'admin';
        }


    }
}