<?php

namespace App\Models;

use CodeIgniter\Model;


class LaporanModel extends Model
{
    protected $table = 'query_totalZIS';
    //protected $primaryKey = 'id_laporan';
    protected $returnType = 'array';
    protected $allowedFields = ['id_zakat','nama_jenis_zakat','Name_exp_3'];

    /*public function laporanmasuk()
    {
        $query = "SELECT id_zakat, nama_jenis_zakat, (SELECT SUM(jumlah_bayar) as 'jumlah_zakat' 
        FROM tb_transaksi_zakat WHERE tb_transaksi_zakat.id_zakat=tb_jenis_zakat.id_zakat) FROM tb_jenis_zakat";
        return $this->db->query($query)->getResultArray();
    }*/

    /*public function laporanpembayaran()
    {
        $query = "SELECT tb_transaksi_zakat.id_transaksi, tb_transaksi_zakat.no_transaksi,tb_transaksi_zakat.nama_muzzaki, DATE_FORMAT(tb_transaksi_zakat.tgl_pembayaran,'%d %M %Y') as tgl_pembayaran, tb_transaksi_zakat.jumlah_bayar,tb_transaksi_zakat.bukti_pembayaran, tb_transaksi_zakat.`status`, tb_jenis_zakat.nama_jenis_zakat,tb_bank.nama_bank
        FROM tb_transaksi_zakat JOIN tb_jenis_zakat ON tb_transaksi_zakat.id_zakat = tb_jenis_zakat.id_zakat JOIN tb_bank ON tb_transaksi_zakat.id_bank = tb_bank.id_bank ";
        return $this->db->query($query)->getResultArray();
    }*/
    public function laporankeluar()
    {
        $query = "SELECT id_penyaluran, Nama_mustahiq, tb_kategori_asnaf.nama_kategori_asnaf, tb_jenis_zakat.nama_jenis_zakat, tb_penyaluran.tgl_pengajuan, tb_penyaluran.tgl_penerimaan, tb_penyaluran.jumlah_yg_dikeluarkan, 
        tb_jenis_zakat.saldo FROM tb_penyaluran JOIN tb_jenis_zakat ON tb_penyaluran.id_zakat = tb_jenis_zakat.id_zakat JOIN tb_kategori_asnaf ON tb_penyaluran.id_asnaf = tb_kategori_asnaf.id_asnaf ORDER BY id_penyaluran ASC";
        return $this->db->query($query)->getResultArray();
    }

    public function laporanpenyaluran()
    {
        $query = "SELECT id_penyaluran, Nama_mustahiq, tb_kategori_asnaf.nama_kategori_asnaf, tb_penyaluran.tgl_penerimaan, tb_penyaluran.jumlah_yg_dikeluarkan 
        FROM tb_penyaluran JOIN tb_kategori_asnaf ON tb_penyaluran.id_asnaf = tb_kategori_asnaf.id_asnaf";
        return $this->db->query($query)->getResultArray();
    }
    
}