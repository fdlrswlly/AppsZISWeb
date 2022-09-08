<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\LaporanMasukPerMuzzakiModel;
use TCPDF;


class Laporan extends BaseController
{
    public function laporanmasukperzis()
    {
        $a = new LaporanModel();
        $b = $a->findAll();
        $data = ['dataLaporan' => $b];
        echo view('laporan/laporanmasukperzis', $data);
    }
    public function laporanmasukpermuzzaki()
    {
        $a = new LaporanMasukPerMuzzakiModel();
        if (isset($_POST['cobaaa'])) {
            $bln = (int)$this->request->getVar('cobaaa');
            if($bln != "Tampilkan Semua") {
            $cek = $a->where("DATE_FORMAT(q_laporan_masuk_per_bulan.tgl_pembayaran,'%m')", $bln);
                $b = $cek->findAll();
            }else{
                $b = $a->findAll();
            }
            
        } else {
            $bln = 2;
            $b = $a->findAll();
        }
        $data = ['laporan' => $b,'cek' => $bln];
        return view('laporan/laporanmasukpembayaran', $data);
    }
    public function laporankeluar()
    {
        $a = new LaporanModel();
        $b = $a->laporankeluar();
        $data = ['laporankeluar' => $b];
        return view('laporan/laporankeluar', $data);
    }
    public function laporanpenyaluran()
    {
        $a = new LaporanModel();
        $b = $a->laporanpenyaluran();
        $data = ['laporanpenyaluran' => $b];
        return view('laporan/laporanpenyaluran', $data);
    }
    public function cetaklaporan()
    {
        $a = new LaporanModel();
        $b = $a->findAll();
        $data = ['dataLaporan' => $b];
        $html = view('laporan/cetaklaporan', $data);
        // create new PDF document
        $pdf = new TCPDF("P", PDF_UNIT, "A4", true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Yayasan Miqat Ahsani Taqwim');
        $pdf->SetTitle('Laporan Pemasukan ZIS');
        $pdf->SetSubject('Laporan Pemasukan ZIS');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('laporan_pemasukan.pdf', 'I');
    }
        public function cetaklaporanmuzzaki()
        {
        $a = new LaporanMasukPerMuzzakiModel();
        if (isset($_POST['cobaaa'])) {
            $bln = (int)$this->request->getVar('cobaaa');
            if ($bln != "Tampilkan Semua") {
                $cek = $a->where("DATE_FORMAT(q_laporan_masuk_per_bulan.tgl_pembayaran,'%m')", $bln);
                $b = $cek->findAll();
            } else {
                $b = $a->findAll();
            }
        } else {
            $bln = 2;
            $b = $a->findAll();
        }
        $data = ['laporan' => $b, 'cek' => $bln];
        $html =  view('laporan/cetaklaporanmuzzaki', $data);
            // create new PDF document
            $pdf = new TCPDF("L", PDF_UNIT, "A4", true, 'UTF-8', false);

            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Yayasan Miqat Ahsani Taqwim');
            $pdf->SetTitle('Laporan Penyaluran Mustahiq');
            $pdf->SetSubject('Laporan Penyaluran Mustahiq');

            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $pdf->AddPage();

            // output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

            $this->response->setContentType('application/pdf');
            //Close and output PDF document
            $pdf->Output('laporan_penyaluran.pdf', 'I');
        }
    public function cetaklaporanpenyaluran()
    {
        $a = new LaporanModel();
        $b = $a->laporanpenyaluran();
        $data = ['laporanpenyaluran' => $b];
        $html = view('laporan/cetaklaporanpenyaluran', $data);
        // create new PDF document
        $pdf = new TCPDF("P", PDF_UNIT, "A4", true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Yayasan Miqat Ahsani Taqwim');
        $pdf->SetTitle('Laporan Penyaluran Mustahiq');
        $pdf->SetSubject('Laporan Penyaluran Mustahiq');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('laporan_penyaluran.pdf', 'I');
    }
}