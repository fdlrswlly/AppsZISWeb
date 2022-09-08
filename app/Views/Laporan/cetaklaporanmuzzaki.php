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
        <p>Laporan Pemasukan Pembayaran Muzzaki</p>
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
    <?php $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $i = 1; ?>
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th class="column-title">No. Transaksi</th>
                <th class="column-title">Nama Muzzaki</th>
                <th class="column-title">Jenis Zakat</th>
                <th class="column-title">Tgl.Pembayaran</th>
                <th class="column-title">Jumlah Bayar</th>
                <th class="column-title">Bank Yang Dituju</th>
                <th class="column-title">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $x) :
            ?>
                <tr>
                    <td><?= $x['no_transaksi']; ?></td>
                    <td><?= $x['nama_muzzaki']; ?></td>
                    <td><?= $x['nama_jenis_zakat']; ?></td>
                    <td><?= $x['tgl_pembayaran']; ?></td>
                    <td>Rp.<?php $number =  $x['jumlah_bayar'];
                            $format = number_format($number, 0, ",", ".");
                            echo $format; ?></td>
                    <td><?= $x['nama_bank']; ?></td>
                    <td><?= $x['status']; ?></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
        <?php $i++;?>
    </table>
    <br>
</body>

</html>