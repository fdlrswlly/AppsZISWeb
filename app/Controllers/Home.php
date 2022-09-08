<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }
    public function index()
    {
        
    }
    /*public function tampiltotalzakat()
    {
        $a = new TransaksiZISModel();
        $data = ['tampiltotalzakat'=>$a->totalzakat()];
        return view('sidebar_user', $data);
    }*/
    
    public function dashboard()
    {
        $data = array(
            'total_muzzaki' => $this->HomeModel->total_muzzaki(),
            'total_mustahiq' => $this->HomeModel->total_mustahiq(),
            'total_zakat' => $this->HomeModel->total_zakat()
        );
        return view('Dashboard', $data);
    }

    public function home()
    {
        $data = array(
            'total_zakat' => $this->HomeModel->total_zakat(),
            'total_penyaluran' => $this->HomeModel->total_penyaluran()
        );
        return view('Home', $data);
    }

    

}
