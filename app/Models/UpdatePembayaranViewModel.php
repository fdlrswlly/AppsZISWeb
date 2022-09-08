<?php

namespace App\Models;

use CodeIgniter\Model;

class UpdatePembayaranViewModel extends Model
{
    protected $table = 'query_updatetrx';
    protected $primaryKey = 'id_transaksi';
    protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';
    protected $allowedFields = ['id_transaksi', 'no_transaksi', 'nama_muzzaki', 'nama_jenis_zakat', 'nama_bank', 'jumlah_bayar', 'bukti_pembayaran', 'status'];
}
