<?php

namespace App\Controllers;


class HomeController extends AppController
{
    /**
     * Fonction d'accueil
     */
    public function index()
    {
        $this->loadModel("Calendar");
        $d["calendrier"] = $this->Calendar->getEvent(date("m"), date("Y"));
        $this->set($d);
        // Votre code ici.
    }

    public function page()
    {
        return 0;
    }
    public function admin_index()
    {
        return 0;
    }
    public function calendar()
    {
        return 0;
    }
}