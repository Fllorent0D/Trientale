<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 15/07/15
 * Time: 14:29
 */

namespace App\Controllers;


class PhotosController extends AppController{
    public function admin_viewer($gallery_id = NULL)
    {
        if(!isset($gallery_id))
            $this->redirect("admin/galleries/index");


        $this->loadModel('Gallery');
        $d['galerie'] = $this->Gallery->getFirst(['where' => ['id' => $gallery_id]]);
        if(empty($d['galerie']))
            $this->redirect("admin/galleries/index");

        $d['photos'] = $this->Photo->get(['where' => ['gallery_id' => $gallery_id] ]);
        $this->set($d);

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