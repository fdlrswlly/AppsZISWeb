<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class BankModel extends Model
{
    protected $table = 'tb_bank';
    protected $primaryKey = 'id_bank';
    protected $returnType = 'array';
    protected $allowedFields = ['id_bank', 'nama_bank','no_rekening'];
    
    public function dropdownbank()
    {
        return $this->db->table('tb_bank')->get()->getResultArray();
    }
}