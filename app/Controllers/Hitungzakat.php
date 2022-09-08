<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Hitungzakat extends BaseController
{
    public function index()
    {
        
    }
    
    public function hitungzakatfitrah()
    {
        $a = new HomeModel();
        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran()
        ];
        return view('hitungzakatfitrah', $data);
    }
    public function hitungzakatperhiasan()
    {
        $a = new HomeModel();
        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran()
        ];
        return view('hitungzakatperhiasan', $data);
    }

    public function hitungzakatpenghasilan()
    {
        $a = new HomeModel();
        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran()
        ];
        return view('hitungzakatpenghasilan', $data);
    }
    public function hitungzakattabungan()
    {
        $a = new HomeModel();
        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran()
        ];
        return view('hitungzakattabungan', $data);
    }
    public function hitungzakatrikaz()
    {
        $a = new HomeModel();
        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran()
        ];
        return view('hitungzakatrikaz', $data);
    }
}
?>