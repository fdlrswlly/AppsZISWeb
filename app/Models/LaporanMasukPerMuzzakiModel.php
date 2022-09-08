<?php

namespace App\Models;

use CodeIgniter\Model;


class LaporanMasukPerMuzzakiModel extends Model
{
    protected $table = 'q_laporan_masuk_per_bulan';
    //protected $primaryKey = 'id_laporan';
    protected $returnType = 'array';
    protected $allowedFields = ['id_transaksi', 'no_transaksi', 'nama_muzzaki', 'nama_jenis_zakat', 'tgl_pembayaran', 'nama_bank', 'jumlah_bayar', 'status'];

}