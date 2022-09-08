<?php

namespace App\Models;

use CodeIgniter\Model;

class MustahiqModel extends Model
{
    protected $table = 'tb_mustahiq';
    protected $primaryKey = 'id_mustahiq';
    protected $returnType = 'array';
    protected $allowedFields = ['id_mustahiq','id_asnaf','Nama_mustahiq','Jk_mustahiq','Alamat'];
    public function search($x)
    {
        return $this->table('query_join_mustahiqxasnaf')->like('id_mustahiq', $x)->orLike('Nama_mustahiq', $x)->orLike('Jk_mustahiq', $x)->orLike('alamat', $x)->orLike('nama_kategori_asnaf', $x);
    }

    public function joinmustahiqxasnaf()
    {
        return $this->db->table('tb_mustahiq')
        ->join('tb_kategori_asnaf','tb_mustahiq.id_asnaf=tb_kategori_asnaf.id_asnaf')
        ->get()->getResultArray();
    }
    public function dropdownasnaf()
    {
        return $this->db->table('tb_kategori_asnaf') ->get()->getResultArray();
    }
    
}
