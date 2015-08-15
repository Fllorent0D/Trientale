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

                if($this->Request->isPost)
                {
                    if($this->Message->Validate($this->Request->data))
                    {
                        $mail = new \PHPMailer();
                        $mail->isSMTP();
                        $mail->Host = 'mail.shost.ca';
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Username = 'florent@floca.be';                 // SMTP username
                        $mail->Password = 'fca-1995';                           // SMTP password
                        $mail->Port = 587;
                        $mail->addAddress($content->email, $content->name);
                        $mail->Subject = $this->Request->data->subject ;
                        $mail->Body = $this->Request->data->message;
                        if(!$mail->send())
                        {
                            $this->Session->setFlash("Le mail n'a pas été envoyé. Erreur : " . $mail->ErrorInfo, "danger");
                            $d['reply'] = $this->Request->data;
                        } else
                        {
                            $this->Session->setFlash("L'email a été envoyé!");
                            $d['info'] = "L'email a été envoyé";

                        }
                    }
                    else
                    {
                        $d['error'] = $this->Message->getErrors();
                        $d['reply'] = $this->Request->data;

                    }

                }

            }


        }

        $d['messages'] = $this->Message->get(['order' => 'id DESC']);
        $this->set($d);
    }

}