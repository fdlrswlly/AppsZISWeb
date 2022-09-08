<?php

namespace App\Controllers;

class UserMuzzaki extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/authamil/login');
        }

        return view('Home/dashboard');
    }
    
}