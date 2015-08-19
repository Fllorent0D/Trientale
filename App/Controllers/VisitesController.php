<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 10/07/15
 * Time: 20:35
 */

namespace App\Controllers;

use Core\Helpers\Uploader;
use Core\Lib\Debug;
use \Smalot\PdfParser\Parser;
use Core\Helpers\Text;
use DateTime;

class VisitesController extends AppController {
    public function index()
    {
        $d["visites"] = $this->Visite->paginate(['order' => 'date DESC'], 5);
        $this->set($d);
    }
    public function lire($id)
    {
        if(is_numeric($id))
        {
            $d["visite"] = $this->Visite->getFirst(["where" => ["id" => $id]]);
            if(!empty($d["visite"]))
                $this->set($d);
            else
                $this->redirect("visites/index");
        }
        else
        {
            $this->redirect("visites/index");
        }
    }
    public function admin_index()
    {
        $d = [];

        if ($this->Request->isPost) {
            $d['new'] = $this->Request->data;
                if(!empty($_FILES['pdf']['tmp_name']))
                {
                    $dest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."visites" . DS;
                    Uploader::upload($_FILES['pdf'], 'tmp', $dest);

                    $parser = new Parser();
                    $pdf = $parser->parseFile(BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."visites" . DS . 'tmp.pdf');
                    $text = $pdf->getText();
                    $text = explode("\n",$text, 4);

                    $date = trim($text[1]);
                    $date = explode(" ", $date);

                    $mois_fr = Array("janvier" => "1", "février"=> "2", "mars"=> "3", "avril"=> "4", "mai"=> "5", "juin"=> "6", "juillet"=> "7", "août"=> "8", "septembre"=> "9", "octobre"=> "10", "novembre"=> "11", "décembre"=> "12");
                    $datetime = new DateTime();
                    $datetime->setDate($date[3], $mois_fr[$date[2]], $date[1]);
                    $datetime->setTime(0, 0, 0);

                    $new = new \stdClass();
                    $new->title = $text[0];
                    $new->guide = str_replace(['Guides : ', 'Guide : ', 'Responsables : ', 'Responsable : '], "" ,$text[2]);
                    $new->text = nl2br($text[3]);
                    $new->date = date("Y-m-d", $datetime->getTimestamp());
                    $new->file = Text::toSlug($new->date.'_'.$new->title) . Uploader::getExtension($_FILES['pdf']['name']);

                    rename($dest.'tmp.pdf', $dest.$new->file);

                    $this->Visite->create($new);
                    $this->Session->setFlash('Cette visite a bien été ajouté.');
                }
                else
                {
                    $d['error']['pdf'] = "Veuillez selectionner un fichier";
                }
            }

        //Debug::debug($d);
        $d["visites"] = $this->Visite->get(["order" => "date DESC"]);

        $this->set($d);

    }
}