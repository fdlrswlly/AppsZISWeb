<?php

namespace App\Models;

use CodeIgniter\Model;

class AmilModel extends Model
{
    protected $table = 'tb_amil';
    protected $id = 'id_amil';
    protected $returnType = 'array';
    protected $allowedFields = ['id_amil','Nama_amil','password'];
}
