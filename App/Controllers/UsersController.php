<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 8/07/15
 * Time: 08:31
 */

namespace App\Controllers;


use Core\Lib\Debug;

class UsersController extends AppController{

    public function connect()
    {
        $this->layout ="login";
        $d["post"] = [];
        if ($this->Request->isPost) {
            if ($this->Auth->login($this->User, $this->Request->data, isset($this->Request->data->remember)? $this->Request->data->remember : ""))
            {
                $this->Session->setFlash("Connecté");
                $this->redirect("admin/home/index");
            } else {
                $d["post"] = $this->Request->data;
                $this->Session->setFlash("Verifiez vos informations de connexion", "danger");
            }
        } elseif ($this->Auth->isLogged()) {
            $this->redirect("admin/home/index");
        }
        $this->set($d);
    }


    public function index()
    {
        $this->redirect("users/connect");
    }
    public function logout()
    {
        $this->Auth->logout(true);
        $this->Session->setFlash("Déconnecté");
        $this->redirect("users/connect");
    }

    public function admin_delete($id)
    {
        if(is_numeric($id))
        {
            $user = $this->User->get(["where" => ["id" => $id]]);
            if(empty($user))
            {
                $this->Session->setFlash("Ce compte n'existe pas", "danger");
                $this->redirect("admin/users/manage");
            }
            else
            {
                $this->User->delete($id);
                $this->Session->setFlash("Ce compte a été supprimé", "success");
                $this->redirect("admin/users/manage");
            }
        }
        else
        {
            $this->Session->setFlash("Ce compte n'existe pas", "danger");
            $this->redirect("admin/users/manage");
        }
    }

    public function admin_manage()
    {
        if($this->Request->isPost)
        {
            if($this->User->Validate($this->Request->data))
            {
                $user = new \stdClass();
                $user->login  = $this->Request->data->login;
                $user->password = $this->Request->data->password;
                $user->role = $this->Request->data->role;
                $user->nom = $this->Request->data->nom;
                $user->email = $this->Request->data->email;
                $this->Auth->register($this->User, $user);
                $this->Session->setFlash("Ce compte a été ajouté", "success");

            }
            else
            {
                $d['error'] = $this->User->getErrors();
                $d['post'] = $this->Request->data;
            }

        }
        $d["users"] = $this->User->get();
        $this->set($d);

    }

}