<?php

namespace App\Controllers;
use App\Models\MuzzakiModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new MuzzakiModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function login()
    {
        //menampilkan halaman login
        if (session()->get('nama_muzzaki')) {
            return redirect()->to('home/home');
        }
        return view('login_user');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        //simpan ke database
        $this->userModel->save([
            'Nama_muzzaki' => $data['Nama_muzzaki'],
            'Jk_muzzaki' => $data['Jk_muzzaki'],
            'Alamat' => $data['Alamat'],
            'No_Telp' => $data['No_Telp'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        //arahkan ke halaman login
        return redirect()->to('/auth/login');

    }
    public function valid_login()
    {
         //ambil data dari form
         $data = $this->request->getPost();
        
         //ambil data user di database yang usernamenya sama 
         $user = $this->userModel->where('email', $data['email'])->first();
         //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != ($data['password'])){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('login/login_user');
            }
            else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'email' => $user['email'],
                    'nama_muzzaki' => $user['Nama_muzzaki'],
                    'id_muzzaki' => $user['id_muzzaki']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to('Home/home');
            }
    }
    else{
        //jika username tidak ditemukan, balikkan ke halaman login
        if (!session('email')) {
            echo 'email', 'email tidak ditemukan';
            return redirect()->to('/auth/login');
    }
    
}
    }
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/Home/home');
    }
}