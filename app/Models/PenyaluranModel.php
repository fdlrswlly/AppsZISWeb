<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class PenyaluranModel extends Model
{
    protected $table = 'tb_penyaluran';
    protected $primaryKey = 'id_penyaluran';
    protected $returnType = 'array';
    protected $allowedFields = ['id_penyaluran','Nama_mustahiq','id_asnaf','id_zakat','tgl_pengajuan','tgl_penerimaan','jumlah_yg_dikeluarkan','bukti_penyaluran'];

    
    public function dropdownasnaf()
    {
        return $this->db->table('tb_kategori_asnaf')->get()->getResultArray();
    }

    public function dropdownjeniszakat()
    {
        return $this->db->table('tb_jenis_zakat')->get()->getResultArray();
    }
    public function idpenyaluran()
    {
        $kode = $this->db->table('tb_penyaluran')
        ->select('RIGHT(id_penyaluran,3) as id_penyaluran', false)
            ->orderBy('id_penyaluran', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['id_penyaluran'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['id_penyaluran']) + 1;
        }

        $inisial = "MST";
        $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        $id_penyaluran = $inisial . $batas;
        return $id_penyaluran;
    }
}
