<?php

namespace App\Controllers;
use App\Models\MustahiqModel;
use App\Models\DataMustahiqModel;
class DataMustahiq extends BaseController
{
    public function index()
    {
        
    }
    public function input()
    {
        session();
        $a = new MustahiqModel();
        $data = [
            'dropdown'=>$a->dropdownasnaf(),
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('DataMustahiq/input_mustahiq', $data);
    }
    public function simpan()
    {
        $atur=$this->validate([
        'Nama_mustahiq' => [
        'label' => 'Nama Mustahiq',
        'rules' => 'required',
        'errors' => [
                'required' => '{field} tidak boleh kosong'
        ]
        ],
        'Jk_mustahiq' => [
            'label' => 'Jenis Kelamin',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} tidak boleh kosong'
        ]
        ],
        'Alamat' => [
            'label' => 'Alamat',
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
]);
    if (!$atur){
        $validasi = \Config\Services::validation();
        return redirect()->to('/DataMustahiq/input')->withInput();
    }
        $a = new MustahiqModel();
        $a->insert([
            'id_mustahiq'=>$this->request->getVar('id_mustahiq'),
            'id_asnaf'=>$this->request->getVar('tb_kategori_asnaf'),
            'Nama_mustahiq'=>$this->request->getVar('Nama_mustahiq'),
            'Jk_mustahiq'=>$this->request->getVar('Jk_mustahiq'),
            'Alamat'=>$this->request->getVar('Alamat')
        ]);
        return redirect()->to('DataMustahiq/datamustahiq');
    }
    public function datamustahiq()
    {
        $a = new MustahiqModel();
        $b = new DataMustahiqModel();
        $pencarian = $this->request->getVar('cari');
        if ($pencarian) {
            $hasil = $b->search($pencarian);
        } else {
            $hasil = $b;
        }
        /*$data = [//'dataMustahiq' => $a
            'joinmustahiqxasnaf'=>$a->joinmustahiqxasnaf()
        ];*/
        $data['dataMustahiq'] = $b->paginate(5, 'mtq_pages');
        $data['pager'] = $b->pager;
        $data['links'] = $data['pager']->links();
        //$b = $a->findAll();
        echo view('DataMustahiq/mustahiq', $data);
    }
    public function edit($id)
{
        $a = new MustahiqModel();
        $b = $a->find($id);

        $data = [
            'dropdown' => $a->dropdownasnaf(),
            'x' => $b
        ];
        echo view('DataMustahiq/edit_mustahiq', $data);

}
public function proses_edit($id)
{
    $a = new MustahiqModel();
    //$id = $this->request->getVar('id');
    $a->update($id, [
        'id_mustahiq' => $this->request->getVar('id_mustahiq'),
        'Nama_mustahiq'=> $this->request->getVar('Nama_mustahiq'),
        'Jk_mustahiq'=> $this->request->getVar('Jk_mustahiq'),
        'Alamat'=> $this->request->getVar('Alamat'),
        'id_asnaf'=> $this->request->getVar('tb_kategori_asnaf')
    ]);
    return redirect()->to('DataMustahiq/datamustahiq');
}
public function hapus($id)
{
    $a = new MustahiqModel();
    $a->delete($id);
    $data['dataMustahiq'][]= $a;
    return redirect()->to('../DataMustahiq/datamustahiq');
}
}