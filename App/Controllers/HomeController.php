<?php

namespace App\Controllers;


use Core\Helpers\Uploader;
use Core\Lib\Debug;
use Core\Helpers\Text;
class HomeController extends AppController
{
    protected $hasModel = false;
    public function index()
    {
        $this->loadModel("Calendar");
        $d["calendrier"] = $this->Calendar->getEvent(date("m"), date("Y"));
        $this->set($d);
        // Votre code ici.
    }

    public function admin_index()
    {
        $this->loadModel('Slider');

        if($this->Request->isPost)
        {
            $d["post"] = $this->Request->data;
            if($this->Slider->Validate($d["post"]))
            {
                if(!empty($_FILES['background']['tmp_name']))
                {
                    //Background
                    $name = $d["post"]->text . "_background";
                    $name = Text::toSlug($name);
                    $dest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."sliders" . DS;
                    $d["post"]->background = $name.Uploader::getExtension($_FILES["background"]["name"]);
                    Uploader::upload($_FILES['background'], $name, $dest);

                    //Photo si existe
                    if(isset($_FILES["photo"]["tmp_name"]))
                    {
                        $name = $d["post"]->text . "_photo";
                        $name = Text::toSlug($name);
                        $d["post"]->photo = $name.Uploader::getExtension($_FILES["photo"]["name"]);
                        Uploader::upload($_FILES['photo'], $name, $dest);
                    }

                    //Place
                    $last = $this->Slider->getFirst(["order" => "place DESC"]);
                    $d["post"]->place = $last->place + 1;

                    //Centre
                    if($d["post"]->center)
                    {
                        $d["post"]->l = -75;
                        $d["post"]->sp = 600;
                        $d["post"]->t = -100;
                    }
                    else
                    {
                        $d["post"]->l = -100;
                        $d["post"]->sp = 900;
                        $d["post"]->t = -50;
                    }
                    //Action

                    if(!isset($d["post"]->action))
                        $d["post"]->action = NULL;



                    $this->Slider->create($d["post"]);
                    unset($d["post"]);
                    $this->Session->setFlash("Votre slide à été ajoutée");


                }
                else
                {
                    $d["error"]["background"] = "Vous devez rentrer un fond";
                }

            }
            else
            {
                $d["error"] = $this->Slider->getErrors();
            }

        }

        $d["sliders"] = $this->Slider->get();
        $this->set($d);

    }

}