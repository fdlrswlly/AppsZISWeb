<?php

namespace App\Controllers;
use App\Models\JenisZakatModel;
class JenisZakat extends BaseController
{
    public function index()
    {
        
    }
    
    public function datajeniszakat()
    {
        $a = new JenisZakatModel();
        $b = $a->findAll();
        $data = ['dataJenisZakat' => $b];
        echo view('JenisZakat/jenis_zakat', $data);
    }
}
