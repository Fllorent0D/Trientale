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

    public function admin_index($month = null, $year = null)
    {
        if($month == null)
            $month = date("m");
        if($year == null)
            $year = date("Y");

        $date = new \DateTime();
        $date->setDate($year,$month, 1);
        $date->setTime(0, 0, 0);


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
        $d['date'] = $date;
        $d['events'] = $this->Calendar->get(["where" => ["YEAR(date)" => $date->format("Y"), "MONTH(date)" => $date->format("m")]]);
        $d['calendrier'] = $this->Calendar->getEvent($date->format("m"), $date->format("Y"));

        $this->set($d);
    }

    public function event($id = null)
    {
        if(is_null($id) OR !is_numeric($id))
            $this->redirect('home/index');


        $d["event"] = $this->Calendar->getFirst(["where" => ["id" => $id]]);
        $this->set($d);
    }





}