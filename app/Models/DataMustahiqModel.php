<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMustahiqModel extends Model
{
    protected $table = 'query_join_mustahiqxasnaf';
    //protected $primaryKey = 'id_mustahiq';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    //protected $allowedFields = ['id_surat','no_surat','nama_kategori','tgl_surat','perihal','pengirim','status','keterangan','file'];
    protected $allowedFields = ['id_mustahiq','Nama_mustahiq','Jk_mustahiq','alamat','nama_kategori_asnaf'];

    public function search($x)
    {
        return $this->table('query_join_mustahiqxasnaf')->like('id_mustahiq', $x)->orLike('Nama_mustahiq', $x)->orLike('Jk_mustahiq', $x)->orLike('alamat', $x)->orLike('nama_kategori_asnaf', $x);
    }

  
}



?>