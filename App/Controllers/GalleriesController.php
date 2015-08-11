<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 13/07/15
 * Time: 21:34
 */

namespace App\Controllers;


use Core\Lib\Debug;
use Core\Helpers\Text;
use Core\Helpers\Uploader;

class GalleriesController extends AppController {

    public $model = "Gallery";
    public function index()
    {
        $d["galleries"] = $this->Gallery->getGalleries();
        $this->set($d);
    }


    public function admin_index()
    {
        $d["galleries"] = $this->Gallery->getGalleries();
        $this->set($d);
    }


    public function admin_zipimport()
    {
        $d = [];
        if ($this->Request->isPost) {
            $d['new'] = $this->Request->data;

            if ($this->Gallery->validate($d['new']))
            {
                if(!empty($_FILES['zip']['tmp_name']))
                {
                    if(Uploader::getExtension($_FILES['zip']['name']) == ".zip")
                    {
                        $name = Text::toSlug($d["new"]->title); //On génére un nom de dossier qui ne possera pas de problemes
                        $d['new']->slug = $name;

                        $tmpdest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."galleries" . DS . 'tmp' . DS; //Chemin TMP
                        $galdest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."galleries" . DS . $name . DS; //Chemin Galerie

                        Uploader::upload($_FILES['zip'], $name, $tmpdest); //On upload le zip
                        mkdir($galdest); //Crée le dossier de la galerie

                        if($this->extractZip($tmpdest . $name . '.zip', $galdest)) //Extrait le zip
                        {
                            $this->Gallery->create($d['new']); //On cree la galerie

                            $photos = $this->importPhotos($galdest);

                            $this->Session->setFlash("Vous venez creer la galerie '".$d["new"]->title."' et d'importer ".$photos." photos");
                            $this->redirect("admin/galleries/index");
                        }
                        else
                        {
                            $d['error']['zip'] = "Impossible d'ouvrir le fichier zip";
                        }

                    }
                    else
                    {
                        $d['error']['zip'] = "Ce fichier n'est pas un fichier zip";
                    }
                }
                else
                {
                    $d['error']['zip'] = "Veuillez selectionner un fichier";
                }
            }
            else
            {
                $d['error'] = $this->Gallery->getErrors();
            }
        }
        $this->set($d);
    }

    public function admin_ftpimport()
    {
        $files = glob(BASE . DS . 'Import/*');
        foreach($files as $v)
        {
            $d["files"][basename($v)] = basename($v);
        }
        if ($this->Request->isPost) {
            $d['new'] = $this->Request->data;

            if ($this->Gallery->validate($d['new']))
            {

                $name = Text::toSlug($d["new"]->title); //On génére un nom de dossier qui ne possera pas de problemes
                $d['new']->slug = $name;

                $galdest = BASE . DS . 'App' . DS . 'Webroot' . DS . 'files' . DS ."galleries" . DS . $name . DS; //Chemin Galerie
                $zipfile = BASE . DS . 'Import' . DS . $d['new']->zip;

                mkdir($galdest); //Crée le dossier de la galerie

                if($this->extractZip($zipfile, $galdest)) //Extrait le zip
                {
                    unset($d["new"]->zip);
                    $this->Gallery->create($d['new']); //On cree la galerie

                    $photos = $this->importPhotos($galdest);

                    $this->Session->setFlash("Vous venez creer la galerie '".$d["new"]->title."' et d'importer ".$photos." photos");
                    $this->redirect("admin/galleries/index");
                }
                else
                {
                    $d['error']['zip'] = "Impossible d'ouvrir le fichier zip";
                }


            }
            else
            {
                $d['error'] = $this->Gallery->getErrors();
            }
        }


        $this->set($d);
    }


    private function extractZip($path, $extractTo)
    {
        $zip = New \ZipArchive();
        if($zip->open($path))
        {
            $zip->extractTo($extractTo);
            $zip->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    private function importPhotos($folder)
    {
        $this->loadModel("Photo");

        $lastrecord = $this->Gallery->getLast();

        $files = glob($folder.'*');
        $img = ['.jpg', '.png', '.JPG', '.PNG', '.TIFF', '.gif', '.jpeg', '.JPEG'];
        $counter = 0;

        $pic = new \stdClass();

        foreach($files as $file)
        {
            if(in_array(Uploader::getExtension($file), $img))
            {
                $counter++;
                $name = $counter.Uploader::getExtension($file);
                rename($file, $folder.$counter.Uploader::getExtension($file));
                $pic->file = $name;
                $pic->gallery_id = $lastrecord->id;
                $this->Photo->create($pic);
            }

        }
        return $counter;
    }
}