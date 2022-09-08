<html>

<head>
    <title>Cetak Bukti</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
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
        <p>Laporan Pemasukan Zakat Infaq dan Sedekah </p>
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
                <th width="10%" text-align="center"><strong>No.</strong></th>
                <th><strong>Jenis Zakat</strong></th>
                <th><strong>Total</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataLaporan as $x) : ?>
                <tr>

                    <td width="10%"><?php echo $x['id_zakat']; ?>
                    </td>
                    <td><?php echo $x['nama_jenis_zakat']; ?></td>
                    <td>Rp. <?php $number =  $x['Name_exp_3'];
                            $format = number_format($number, 0, ",", ".");
                            echo $format; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</body>

</html>