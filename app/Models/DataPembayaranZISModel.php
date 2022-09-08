<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPembayaranZISModel extends Model
{
    protected $table = 'query_pembayaranzis';
    protected $primaryKey = 'id_transaksi';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['id_transaksi','no_transaksi','nama_muzzaki','nama_jenis_zakat','nama_bank','jumlah_bayar','bukti_pembayaran','status'];
    public function search($x)
    {
        return $this->table('query_pembayaranzis')->like('id_transaksi', $x)->orLike('no_transaksi', $x)->orLike('nama_muzzaki', $x)->orLike('nama_jenis_zakat', $x)->orLike('nama_bank', $x);
    }
    public function update_transaksi($nama_muzzaki)
    {
        /*$query = "SELECT tb_transaksi_zakat.id_transaksi, tb_transaksi_zakat.no_transaksi,tb_transaksi_zakat.nama_muzzaki, tb_transaksi_zakat.tgl_pembayaran, tb_transaksi_zakat.jumlah_bayar,tb_transaksi_zakat.bukti_pembayaran, tb_transaksi_zakat.`status`, tb_jenis_zakat.nama_jenis_zakat,tb_bank.nama_bank
                  FROM tb_transaksi_zakat
                  JOIN tb_jenis_zakat ON tb_transaksi_zakat.id_zakat = tb_jenis_zakat.id_zakat JOIN tb_bank ON tb_transaksi_zakat.id_bank = tb_bank.id_bank
                  WHERE no_transaksi = $no_transaksi";
        return $this->db->query($query)->getResultArray();*/
    //return $this->table('query_pembayaranzis')->where('id_transaksi', $id_transaksi);
    }
    public function dropdownjeniszis()
    {
        return $this->db->table('tb_jenis_zakat')->get()->getResultArray();
    }
    public function dropdownbank()
    {
        return $this->db->table('tb_bank')->get()->getResultArray();
    }
}
