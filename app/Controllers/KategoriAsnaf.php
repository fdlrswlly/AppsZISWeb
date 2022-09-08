<?php

namespace App\Controllers;
use App\Models\KategoriAsnafModel;
class KategoriAsnaf extends BaseController
{
    public function index()
    {
        
    }
    
    public function datakategoriasnaf()
    {
        $a = new KategoriAsnafModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $a->search($pencarian);
        } else {
            $hasil = $a;
        }
        //$b = $a->findAll();
        $data = [
            'dataAsnaf' => $a->paginate(5, 'asn_pages'),
            'pager' => $a->pager
        ];  
        //$b = $a->findAll();
        //$data = ['dataKategoriAsnaf' => $b];
        echo view('KategoriAsnaf/kategori_asnaf', $data);
    }
}
