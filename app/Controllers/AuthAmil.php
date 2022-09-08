<?php

namespace App\Controllers;
use App\Models\AmilModel;

class AuthAmil extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new AmilModel();
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function login()
    {
        //menampilkan halaman login
        if (session()->get('Nama_amil')) {
            return redirect()->to('home/dashboard');
        }
        return view('login');
    }
    public function valid_login()
    {
         //ambil data dari form
         $data = $this->request->getPost();
        
         //ambil data user di database yang usernamenya sama 
         $user = $this->userModel->where('Nama_amil', $data['Nama_amil'])->first();
         //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != ($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('login');
            }
            else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'Nama_amil' => $user['Nama_amil'],
                    //'Nama_muzzaki' => $user['Nama_muzzaki'],
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('Home/dashboard');
            }
    }
    else{
        //jika username tidak ditemukan, balikkan ke halaman login
        if (!session('Nama_amil')) {
            echo 'Nama_amil', 'Nama Amil tidak ditemukan';
            return redirect()->to('/authamil/login');
    }
    
}
    }
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/authamil/login');
    }
}