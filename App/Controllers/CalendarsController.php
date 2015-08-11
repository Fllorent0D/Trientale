<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 11/07/15
 * Time: 21:16
 */

namespace App\Controllers;


use Core\Lib\Debug;

class CalendarsController extends AppController{

    public function admin_index()
    {

        if($this->Request->isPost)
        {
            $d['new'] = $this->Request->data;

            if($this->Calendar->Validate($this->Request->data))
            {
                $event = new \stdClass();
                $event = $this->Request->data;
                $event->description = nl2br($event->description);
                $event->place = nl2br($event->place);
                $this->Calendar->create($event);
            }
            else
            {
                $d['error'] = $this->Calendar->getErrors();
                $d['post'] = $this->Request->data;
            }

        }
        $d['events'] = $this->Calendar->get();
        $d['calendrier'] = $this->Calendar->getEvent(date("m"), date("Y"));

        $this->set($d);
    }


}