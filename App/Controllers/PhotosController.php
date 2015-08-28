<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 15/07/15
 * Time: 14:29
 */

namespace App\Controllers;


use Core\Helpers\CSRFTool;
use Core\Lib\Debug;

class PhotosController extends AppController{
    public function admin_viewer($gallery_id = NULL)
    {
        if($this->Request->isPost)
        {
            $comments = $this->Request->data;
            foreach($comments as $id => $comment)
            {
                if(!empty($comment))
                {
                    $data = new \stdClass();
                    $data->comment = $comment;
                    $this->Photo->update($id, $data);
                }
            }
            $this->Session->setFlash("Commentaires mis à jour");
        }

        if(!isset($gallery_id))
            $this->redirect("admin/galleries/index");


        $this->loadModel('Gallery');
        $d['galerie'] = $this->Gallery->getFirst(['where' => ['id' => $gallery_id]]);
        if(empty($d['galerie']))
            $this->redirect("admin/galleries/index");

        $d['photos'] = $this->Photo->get(['where' => ['gallery_id' => $gallery_id] ]);
        $this->set($d);

    }
    public function admin_thumbnail($id = null)
    {
        if(isset($id) && is_numeric($id))
        {
            if(CSRFTool::check())
            {
                $photo = $this->Photo->getFirst(["where" => ["id" => $id]]);
                if(!empty($photo))
                {
                    $data = new \stdClass();
                    $this->loadModel('Gallery');
                    $album = $this->Gallery->getFirst(["where" => ["id" => $photo->gallery_id]]);
                    if(!empty($album))
                    {
                        $data = new \stdClass();
                        $data->thumbnail = $photo->file;
                        $this->Gallery->update($album->id, $data);
                        $this->redirect('admin/photos/viewer/'.$album->id);
                        $this->Session->setFlash("La miniature à bien été mise à jour");
                    }
                    else
                    {
                        $this->Session->setFlash("Cette photo n'est contenue dans aucun album.", "danger");
                    }
                }
                else
                {
                    $this->Session->setFlash("Cette photo n'existe pas.", "danger");
                }
            }
            else
            {
                $this->Session->setFlash("Votre clé CSRF n'est pas valide. Merci de rafraichir la page et de recommencer", "danger");
            }
        }
        $this->redirect('admin/galleries/index');

    }
    public function admin_delete($id)
    {
        if(isset($id) && is_numeric($id))
        {
            if(CSRFTool::check())
            {
                $photo = $this->Photo->getFirst(["where" => ["id" => $id]]);
                if(!empty($photo))
                {
                    $this->Photo->delete($photo->id);
                    $this->Session->setFlash("Votre photo à bien été suprimée");
                    $this->redirect('admin/photos/viewer/'.$photo->gallery_id);
                }
                else
                {
                    $this->Session->setFlash("Cette photo n'existe pas.", "danger");
                }
            }
            else
            {
                $this->Session->setFlash("Votre clé CSRF n'est pas valide. Merci de rafraichir la page et de recommencer", "danger");
            }
        }
        $this->redirect('admin/galleries/index');
    }
    public function index($gallery_id = null)
    {

        if(!isset($gallery_id))
            $this->redirect("galleries/index");

        $this->loadModel('Gallery');
        $d['galerie'] = $this->Gallery->getFirst(['where' => ['id' => $gallery_id]]);
        if(empty($d['galerie']))
            $this->redirect("galleries/index");

        $d['photos'] = $this->Photo->get(['where' => ['gallery_id' => $gallery_id] ]);
        $this->set($d);
    }
}