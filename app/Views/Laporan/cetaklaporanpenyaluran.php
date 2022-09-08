<html>

<head>
    <title>Cetak Laporan Penyaluran</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #000000;
        text-align: left;

    }
</style>

<body>
    <div style="font-size: 30px; color: '#000000'"><i>Yayasan Miqat Ahsani Taqwim</i></div>
    <h4>Jl. Margasari, Kecamatan Pasawahan, Kabupaten Purwakarta</h4>
    <hr>
    <hr>
    <center>
        <p>Laporan Penyaluran Kepada Mustahiq</p>
    </center>
    <!-- <p> 
        No.Transaksi : <?php //echo $transaksi['no_transaksi'] 
                        ?><br>
        Nama Muzzaki : <?php //echo $transaksi['nama_muzzaki'] 
                        ?><br>
        Jenis Zakat : <?php //echo $transaksi['nama_jenis_zakat'] 
                        ?><br>
        Tgl.Pembayaran : <?php //echo $transaksi['tgl_pembayaran']; 
                            ?><br>
        Jumlah Bayar : <?php //$number =  $transaksi['jumlah_bayar'];
                        //$format = number_format($number, 0, ",", ".");
                        //echo $format;  
                        ?><br>
        Bank Yang Dituju : <?php //echo $transaksi['nama_bank'] 
                            ?><br>
        Status : <?php //echo $transaksi['status'] 
                    ?><br>
    </p> -->
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th width = "10%">No.</th>
                <th>Nama Mustahiq</th>
                <th>Kategori Asnaf</th>
                <th>Tgl.Penerimaan</th>
                <th>Jumlah Yang Diterima</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporanpenyaluran as $x) : 
            ?>
            <tr>
                <td width = "10%"><?= $x['id_penyaluran']; ?></td>
                <td><?= $x['Nama_mustahiq']; ?></td>
                <td><?= $x['nama_kategori_asnaf']; ?></td>
                <td><?= $x['tgl_penerimaan']; ?></td>
                <td>Rp.<?php $number =  $x['jumlah_yg_dikeluarkan'];
                        $format = number_format($number, 0, ",", ".");
                        echo $format; ?></td>
                <td></td>
            </tr>
            <?php endforeach; 
            ?>
        </tbody>
    </table>
    <br>
</body>

</html>