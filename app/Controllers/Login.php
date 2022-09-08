<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login_user()
    {
        return view('login_user');
    }
    public function register()
    {
        return view('register');
    }

}