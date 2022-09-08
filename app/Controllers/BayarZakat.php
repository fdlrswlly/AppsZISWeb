<?php

namespace App\Controllers;
use App\Models\TransaksiZISModel;
use App\Models\DataPembayaranZISModel;
use App\Models\HomeModel;

class BayarZakat extends BaseController
{
    public function __construct()
    {
        $this->TransaksiZISModel = new TransaksiZISModel();
    }
    public function index()
    {
        //return view('PembayaranZIS/pembayaran_zis');
    }
    //bayar zakat khusus muzzaki
    public function input()
    {
        $no_transaksi = $this->TransaksiZISModel->noTransaksi();
        $a = new TransaksiZISModel();
        $b = new HomeModel();
        $data = [
            'dropdownjeniszakat'=>$a->dropdownjeniszis(),
            'dropdownbank' => $a->dropdownbank(),
            'no_transaksi'=>$no_transaksi,
            'total_zakat' => $b->total_zakat(),
            'total_penyaluran' => $b->total_penyaluran(),
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('bayarzakat', $data);
    }
    public function simpan()
    {
        $atur = $this->validate([
            'tb_jenis_zakat' => [
                'label' => 'Jenis Zakat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tgl_pembayaran' => [
                'label' => 'Tanggal Pembayaran',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'jumlah_bayar' => [
                'label' => 'Jumlah Bayar',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ], 
        ]);
        if (!$atur) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/BayarZakat/input')->withInput();
        }
        $a = new TransaksiZISModel();
        /*$ambilfoto = $this->request->getFile('foto');
        $ambilfoto->move('foto');
        $namafoto = $ambilfoto->getName();*/
        $a->insert([
            'id_transaksi'=>$this->request->getVar('id_transaksi'),
            'id_zakat'=>$this->request->getVar('tb_jenis_zakat'),
            //'id_bank' => $this->request->getVar('tb_bank'),
            'no_transaksi'=>$this->request->getVar('no_transaksi'),
            'nama_muzzaki'=>$this->request->getVar('nama_muzzaki'),
            'tgl_pembayaran'=>$this->request->getVar('tgl_pembayaran'),
            'jumlah_bayar'=>$this->request->getVar('jumlah_bayar'),
            //'bukti_pembayaran'=> $namafoto,
            'status'=>$this->request->getVar('status')
        ]);
        return redirect()->to('Zakatku/datatrx');
    }
    //khusus amil
    public function datatransaksi()
    {
        $a = new TransaksiZISModel();
        $b = new DataPembayaranZISModel();
        $c = new HomeModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $b->search($pencarian);
        } else {
            $hasil = $b;
        }
        //$data = [//'dataMustahiq' => $a
        //  'joinjeniszakatxtransaksi'=>$a->joinjeniszakatxtransaksi()
        //];
        $data['dataPembayaran'] = $b->paginate(5, 'trx_pages');
        $data['pager'] = $b->pager;
        $data['links'] = $data['pager']->links();
        $data['total_zakat'] = $c->total_zakat();
        $data['total_penyaluran'] = $c->total_penyaluran();
        //$b = $a->findAll();
        echo view('PembayaranZIS/pembayaran_zis', $data);
    }
    public function edit($id)
    {
        $a = new TransaksiZISModel();
        $b = $a->find($id);

        $data = [
            'dropdown' => $a->dropdownjeniszis(),
            'dropdownbank' => $a->dropdownbank(),
            'x' => $b
        ];
        echo view('PembayaranZIS/update_pembayaran', $data);

    }
    public function proses_edit($id)
    {
        $a = new TransaksiZISModel();
        $a->update($id, [
            'id_transaksi' => $this->request->getVar('id_transaksi'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('BayarZakat/datatransaksi');

    }
}
?>