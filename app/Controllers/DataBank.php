<?php

namespace App\Controllers;
use App\Models\BankModel;

class DataBank extends BaseController
{
    public function index()
    {
        //return view('DataBank/bank.php');
    }
    public function input()
    {

        session();
        $a = new BankModel();
        $data = [
            //'dropdown' => $a->dropdownasnaf(),
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('DataBank/input_bank', $data);
    }
    public function simpan()
    {
        $atur = $this->validate([
            'nama_bank' => [
                'label' => 'Nama Bank',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong, harap diisi!'
                ]
            ],
            'no_rekening' => [
                'label' => 'No Rekening',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong. harap diisi!'
                ]
            ]
        ]);
        if (!$atur) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/DataBank/input')->withInput();
        }
        $a = new BankModel();
        $a->insert([
            'id_bank'=>$this->request->getVar('id_bank'),
            'nama_bank'=>$this->request->getVar('no_rekening')
        ]);
        return redirect()->to('DataBank/databank');
    }
    public function databank()
    {
        $a = new BankModel();
        $b = $a->findAll();
        $data = ['dataBank' => $b];
        echo view('DataBank/bank', $data);
    }
    public function edit($id)
    {
        $a = new BankModel();
        $b = $a->find($id);
        $data = ['x'=>$b];
        echo view('DataBank/edit_bank', $data); 
    }
}