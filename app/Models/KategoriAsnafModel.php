<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriAsnafModel extends Model
{
    protected $table = 'tb_kategori_asnaf';
    protected $id = 'id_asnaf';
    protected $returnType = 'array';
    protected $allowedFields = ['id_asnaf','nama_kategori_asnaf'];

    public function search($x)
    {
        return $this->table('tb_kategori_asnaf')->like('id_asnaf', $x)->orLike('nama_kategori_asnaf', $x);
    }
}
