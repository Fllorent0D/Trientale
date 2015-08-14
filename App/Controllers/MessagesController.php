<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 29/07/15
 * Time: 15:53
 */

namespace App\Controllers;


use Core\Lib\Debug;

class MessagesController extends AppController {

    public function admin_index($id = null)
    {
        if(isset($id))
        {
            $content = $this->Message->getFirst(['where' => ['id' => $id]]);
            if(!empty($content))
            {
                $d['content'] = $content;
                if($content->new)
                {
                    $content->new = false;
                    $this->Message->update($content->id, $content);
                }
            }


        }

        $d['messages'] = $this->Message->get(['order' => 'id DESC']);
        $this->set($d);
    }

}