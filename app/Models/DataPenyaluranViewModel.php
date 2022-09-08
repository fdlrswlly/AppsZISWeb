<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPenyaluranViewModel extends Model
{
    protected $table = 'query_viewpenyaluran';
    //protected $primaryKey = 'id_penyaluran';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['id_penyaluran','Nama_mustahiq','nama_kategori_asnaf','tgl_penerimaan','nama_jenis_zakat','jumlah_yg_diterima'];

    public function search($x)
    {
        return $this->table('query_viewpenyaluran')->like('id_penyaluran', $x)->orLike('Nama_mustahiq', $x)->orLike('nama_kategori_asnaf', $x)->orLike('tgl_penerimaan', $x)->orLike('nama_jenis_zakat', $x);
    }
}