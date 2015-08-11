<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 29/07/15
 * Time: 15:53
 */

namespace App\Controllers;


class MessagesController extends AppController {

    public function admin_index()
    {
        $this->layout = "email";
    }
}