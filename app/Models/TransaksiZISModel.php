<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class TransaksiZISModel extends Model
{
    protected $table = 'tb_transaksi_zakat';
    protected $primaryKey = 'id_transaksi';
    protected $returnType = 'array';
    protected $allowedFields = ['id_transaksi','no_transaksi','nama_muzzaki','id_zakat','id_bank','tgl_pembayaran','jumlah_bayar','bukti_pembayaran','status'];

   
public function joinjeniszakatxtransaksi()
{
    return $this->db->table('tb_transaksi_zakat')
    ->join('tb_jenis_zakat', 'tb_transaksi_zakat.id_zakat=tb_jenis_zakat.id_zakat')
    ->join('tb_bank', 'tb_transaksi_zakat.id_bank=tb_bank.id_bank')
    ->get()->getResultArray();
}

public function dropdownbank()
{
    return $this->db->table('tb_bank')->get()->getResultArray();
}
public function dropdownjeniszis()
{
    return $this->db->table('tb_jenis_zakat')->get()->getResultArray();
}
    public function noTransaksi()
    {
        $kode = $this->db->table('tb_transaksi_zakat')
        ->select('RIGHT(no_transaksi,4) as no_transaksi', false)
            ->orderBy('no_transaksi', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['no_transaksi'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['no_transaksi']) + 1;
        }

        $tgl = date('Ymd');
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $no_transaksi = $tgl . $batas;
        return $no_transaksi;
    }
/*public function tampildatatransaksiperid()
{
    return $this->db->table('tb_transaksi_zakat')
    ->select('')
}*/

    
}