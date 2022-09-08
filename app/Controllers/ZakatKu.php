<?php

namespace App\Controllers;

use App\Models\BankModel;
use App\Models\HomeModel;
use App\Models\DataPembayaranZISModel;
use App\Models\TransaksiZISModel;
use App\Models\UpdatePembayaranViewModel;

use TCPDF;

class Zakatku extends BaseController
{
    public function index()
    {
        $a = new HomeModel();
        $b = new DataPembayaranZISModel();
        $f = new TransaksiZISModel();
        //$k = new TransaksiZISModel();
        //$j = $k->find($id);
        $session = session();
        $kin = $session->get('nama_muzzaki');
        $c = $b->where('nama_muzzaki',$kin)->find();
        //$notrx = $this->$b->get('no_transaksi');
        //$status = $b->where('status','Lunas')->find();
        //$d = $this->$b->where('no_transaksi', $notrx)->find();
        //$d = $b->where('status',$status)->find();
       
        $data = [
        'total_zakat' => $a->total_zakat(),
        'total_penyaluran' => $a->total_penyaluran(),
        'dataPembayaran' => $c,
        //'dropdown' => $f->dropdownjeniszis(),
        //'tampilbukti' => $k
        //'v_status' => $d
        //'v_status' => $b->v_status($notrx)
        ];

        //var_dump($kin);
        //var_dump($notrx);
       echo view('Zakatku', $data);
    }
    public function datatrx()
    {
        $a = new UpdatePembayaranViewModel();
        //$b = new DataPembayaranZISModel();
        //$f = new TransaksiZISModel();
        $z = new HomeModel();
        $session = session();
        $kin = $session->get('nama_muzzaki');
        $c = $a->where('nama_muzzaki', $kin)->find();
        $data = [
            'total_zakat' => $z->total_zakat(),
            'total_penyaluran' => $z->total_penyaluran(),
            'dataPembayaran' => $c
        ];
        echo view('update_transaksi', $data);
    }

    public function edit_trx($id)
    {
        $a = new HomeModel();
        $b = new TransaksiZISModel();
        $c = $b->find($id);

        $data = [
            'total_zakat' => $a->total_zakat(),
            'total_penyaluran' => $a->total_penyaluran(),
            'x' => $c,
            'dropdown' => $b->dropdownjeniszis(),
            'dropdownbank' => $b->dropdownbank(),
            'pesan_validasi' => \Config\Services::validation()
            //'dataPembayaran' => $c,
        ];
        echo view('tampiltrx', $data);

        // dd($data);
     }
    public function proses_edit($id)
    {
        $atur = $this->validate([
            'tb_bank' => [
                'label' => 'Bank Yang Dituju',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Pilih {field}'
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'mime_in[foto, image/jpg,image/jpeg,image/png]|max_size[foto,5024]|is_image[foto]',
                'errors' => [
                    'mime_in' => 'File yang diupload bukan gambar',
                    'is_image' => 'File yang diupload bukan gambar',
                    'max_size' => 'Ukuran {fields} terlalu besar'
                ]
            ]
        ]);
        if (!$atur) {
            $validasi = \Config\Services::validation();
            return redirect()->to('Zakatku/edit_trx')->withInput();
        }
        $a = new TransaksiZISModel();
        $ambilfoto = $this->request->getFile('foto');
        if ($ambilfoto->getError() == 4) {
            $namafoto = $this->request->getVar('fotoLama');
        } else {
            $ambilfoto->move('foto');
            $namafoto = $ambilfoto->getName();
        }
        $a->update($id, [
            'id_transaksi' => $this->request->getVar('id_transaksi'),
            'id_bank' => $this->request->getVar('tb_bank'),
            'bukti_pembayaran'=>$namafoto,
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('Zakatku/index');
    }
    public function cetakbukti($id)
    {
        //$id = $this->request->uri->getSegment(3);
        $a = new DataPembayaranZISModel();
        $b = $a->find($id);
        $data = ['transaksi' => $b];
        $html = view('cetakbukti', $data);
        // create new PDF document
        $pdf = new TCPDF("L", PDF_UNIT, "A4", true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Yayasan Miqat Ahsani Taqwim');
        $pdf->SetTitle('Bukti Pembayaran ZIS');
        $pdf->SetSubject('Bukti Pembayaran ZIS');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('bukti_pembayaran.pdf', 'I');

    }
    public function test()
    {
        
        $b = new BankModel();
        $z = $this->request->getVar('no_rekening');
        $d = $b->findAll();
        $c = $b->find($z);
        $data1 = ['tampil' => $z];
        $data = [
            
            
            'dropdownbank' => $b->dropdownbank(),
            'tampil' => $c,
            //'hasil' => $d
            
            //'dataPembayaran' => $c,
        ];
        echo view('test', $data);

        // dd($data);
    }
    public function test1()
    {
        $a = new BankModel();
        $b = $this->request->getVar('pilihbank');
        $data1 = ['tampil' => $b];
        echo view('test', $data1);
    }

 
}
