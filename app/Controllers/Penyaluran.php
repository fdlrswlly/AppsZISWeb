<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataPenyaluranViewModel;
//use App\Models\DataPenyaluranViewModel;
use App\Models\PenyaluranModel;

class Penyaluran extends BaseController
{
    public function __construct()
    {
        $this->PenyaluranModel = new PenyaluranModel();
    }
    public function index()
    {
        return view('Penyaluran/penyaluran');
    }

    public function input()
    {
        $id_penyaluran = $this->PenyaluranModel->idPenyaluran();
        $a = new PenyaluranModel();
        $data = [
            'dropdownjeniszakat' => $a->dropdownjeniszakat(),
            'dropdown'=>$a->dropdownasnaf(),
            'id_penyaluran' => $id_penyaluran,
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('Penyaluran/input_penyaluran', $data);
    }
    public function simpan()
    {
        $atur = $this->validate([
            'Nama_mustahiq' => [
                'label' => 'Nama Mustahiq',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tb_kategori_asnaf' => [
                'label' => 'Kategori Asnaf',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tgl_pengajuan' => [
                'label' => 'Tgl. Pengajuan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tgl_penerimaan' => [
                'label' => 'Tgl. Penerimaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tb_jenis_zakat' => [
                'label' => 'Jenis Zakat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'jumlah_yg_dikeluarkan' => [
                'label' => 'Jumlah Yang Dikeluarkan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);
        if (!$atur) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/Penyaluran/input')->withInput();
        }
        $a = new PenyaluranModel();
        $ambilfile = $this->request->getFile('file');
        $ambilfile->move('file');
        $namaFile = $ambilfile->getName();
        $a->insert([
            'id_penyaluran' => $this->request->getVar('id_penyaluran'),
            'Nama_mustahiq' => $this->request->getVar('Nama_mustahiq'),
            'id_asnaf' => $this->request->getVar('tb_kategori_asnaf'),
            'id_zakat' => $this->request->getVar('tb_jenis_zakat'),
            'tgl_pengajuan' => $this->request->getVar('tgl_pengajuan'),
            'tgl_penerimaan' => $this->request->getVar('tgl_penerimaan'),
            'jumlah_yg_dikeluarkan' => $this->request->getVar('jumlah_yg_dikeluarkan'),
            'bukti_penyaluran' => $namaFile
        ]);
        return redirect()->to('Penyaluran/datapenyaluran');
    }

    public function datapenyaluran()
    {
        $a = new DataPenyaluranViewModel();
        $data['dataPenyaluran'] = $a->paginate(5, 'penyaluran_pages');
        $data['pager'] = $a->pager;
        $data['links'] = $data['pager']->links();
        //$b = $a->findAll();
        //$data = [
          //  'dataPenyaluran' => $b,
        //];
        echo view('Penyaluran/penyaluran', $data);
    }
    public function edit($id)
    {
        $a = new PenyaluranModel();
        $b = $a->find($id);

        $data = [
            'dropdown' => $a->dropdownasnaf(),
            'dropdownzakat' => $a->dropdownjeniszakat(),
            'x' => $b
        ];
        echo view('Penyaluran/edit_penyaluran', $data);

    }
    public function proses_edit($id)
    {
        $a = new PenyaluranModel();
        $ambilfoto = $this->request->getFile('foto');
        if ($ambilfoto->getError() == 4) {
            $namafoto = $this->request->getVar('fotoLama');
        } else {
            $ambilfoto->move('foto');
            $namafoto = $ambilfoto->getName();
        }
        $a->update($id, [
            'id_penyaluran' => $this->request->getVar('id_penyaluran'),
            'Nama_mustahiq' => $this->request->getVar('Nama_mustahiq'),
            'id_asnaf' => $this->request->getVar('tb_kategori_asnaf'),
            'id_zakat' => $this->request->getVar('tb_jenis_zakat'),
            'tgl_pengajuan' => $this->request->getVar('tgl_pengajuan'),
            'tgl_penerimaan' => $this->request->getVar('tgl_penerimaan'),
            'jumlah_yg_dikeluarkan' => $this->request->getVar('jumlah_yg_dikeluarkan'),
            'bukti_penyaluran' => $namafoto
        ]);
        return redirect()->to('Penyaluran/datapenyaluran');
    }
    public function hapus($id)
    {
        $a = new PenyaluranModel();
        $a->delete($id);
        $data['dataPenyaluran'][] = $a;
        return redirect()->to('../Penyaluran/datapenyaluran');
    }
}
