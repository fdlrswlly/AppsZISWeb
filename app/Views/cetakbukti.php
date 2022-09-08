<html>

    <head>
        <title>Cetak Bukti</title>
    </head>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #000000;
        text-align: center;

    }
    </style>

    <body>
        <div style="font-size: 30px; color: '#000000'"><i>Yayasan Miqat Ahsani Taqwim</i></div>
        <h4>Jl. Margasari, Kecamatan Pasawahan, Kabupaten Purwakarta</h4>
        <hr>
        <hr>
        <center>
            <p>Bukti Pembayaran Zakat Infaq dan Sedekah: </p>
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
        <table cellpadding="2">
            <tr>
                <th><strong>No.Transaksi</strong></th>
                <th><strong>Nama</strong></th>
                <th><strong>Jenis Zakat</strong></th>
                <th><strong>Tgl.Pembayaran</strong></th>
                <th><strong>Jumlah Bayar</strong></th>
                <th><strong>Bank Yang Dituju</strong></th>
                <th><strong>Status</strong></th>
            </tr>
            <tr>
                <td><?php echo $transaksi['no_transaksi']
                ?></td>
                <td><?php echo $transaksi['nama_muzzaki'];
                ?></td>
                <td><?php echo $transaksi['nama_jenis_zakat'];
                ?></td>
                <td><?php echo $transaksi['tgl_pembayaran'];
                ?></td>
                <td>Rp. <?php $number =  $transaksi['jumlah_bayar'];
                    $format = number_format($number, 0, ",", ".");
                    echo $format;
                    ?></td>
                <td><?php echo $transaksi['nama_bank']; ?></td>
                <td><?php echo $transaksi['status']; ?></td>
            </tr>
        </table>
        <br>
        <p>Terimakasih atas partisipasi anda untuk telah menyalurkan sedikit hartanya<br>
Jazakumullah Khairan Katsiran<br></p>
    </body>

</html>