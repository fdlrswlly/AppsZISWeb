<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisZakatModel extends Model
{
    protected $table = 'tb_jenis_zakat';
    protected $id = 'id_zakat';
    protected $returnType = 'array';
    protected $allowedFields = ['id_zakat','nama_jenis_zakat','total_masuk','total_keluar','saldo'];
}
