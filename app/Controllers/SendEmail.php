<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SendEmail extends BaseController
{
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $email_tujuan = $this->request->getVar('email_tujuan');
            $subject = $this->request->getVar('subject');
            $pesan = $this->request->getVar('pesan');

            $email = service('email');
            $email->setTo($email_tujuan);
            $email->setFrom('admin@ezis.com','Admin ZIS Yayasan Miqat Ahsani Taqwim');

            $email->setSubject($subject);
            $email->setMessage($pesan);

            if ($email->send()) {
                //sukses terkirim
                echo "<div class='alert alert-info'>Email berhasil dikirim' </div>";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }


        } else {
            //get
            return view('email');
        }
    }
}
