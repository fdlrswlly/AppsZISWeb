<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function total_muzzaki()
    {
        return $this->db->table('tb_muzzaki')->countAll();
    }
    public function total_mustahiq()
    {
        return $this->db->table('tb_mustahiq')->countAll();
    }
    public function total_zakat()
    {
        $query = "SELECT SUM(jumlah_bayar) as total_zakatt FROM tb_transaksi_zakat";
        return $this->db->query($query)->getResultArray();
    }
    public function total_penyaluran()
    {
        $query = "SELECT SUM(jumlah_yg_dikeluarkan) as total_penyaluran FROM tb_penyaluran";
        return $this->db->query($query)->getResultArray();
    }
}