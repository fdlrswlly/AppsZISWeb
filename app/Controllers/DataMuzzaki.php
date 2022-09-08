<?php

namespace App\Controllers;
use App\Models\MuzzakiModel;
class DataMuzzaki extends BaseController
{
    public function index()
    {
        
    }
    
    public function datamuzzaki()
    {
        $a = new MuzzakiModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $a->search($pencarian);
        } else {
            $hasil = $a;
        }
        //$b = $a->findAll();
        $data = [
                    'dataMuzzaki' => $a->paginate(5, 'mzk_pages'),
                    'pager' => $a->pager
                ];  
        echo view('DataMuzzaki/muzzaki', $data);
    }
}
