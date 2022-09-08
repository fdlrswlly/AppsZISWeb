<?php

namespace App\Models;

use CodeIgniter\Model;

class MuzzakiModel extends Model
{
    protected $table = 'tb_muzzaki';
    protected $primaryKey = 'id_muzzaki';
    protected $returnType = 'array';
    protected $allowedFields = ['id_muzzaki','Nama_muzzaki','Jk_muzzaki','Alamat','No_Telp','email','password'];
    
    public function search($x)
        {
            return $this->table('tb_muzzaki')->like('id_muzzaki', $x)->orLike('Nama_muzzaki', $x)->orLike('Jk_muzzaki', $x)->orLike('Alamat', $x)->orLike('No_Telp', $x);
        }
}
