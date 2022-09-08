<?php echo view("parsial/navbar"); ?>
<title>Lengkapi Pembayaran</title>
<?php //dd($no_transaksi);
?>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Pembayaran ZIS</h2>
                <p class="card-text">Lihat riwayat pembayaran zakat anda disini</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <div class="row">
                <div class="col-lg-15">
                    <!-- <Table data   -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No. Transaksi</th>
                                <th>Nama Muzzaki</th>
                                <th>Jenis Zakat</th>
                                <th>Jumlah Bayar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataPembayaran as $x) : ?>
                                <tr>
                                    <?php //$no_transaksi = $x['no_transaksi']; 
                                    ?>
                                    <td><?php echo $x['no_transaksi'] ?></td>
                                    <td><?php echo $x['nama_muzzaki']; ?></td>
                                    <td><?php echo $x['nama_jenis_zakat']; ?></td>
                                    <td>Rp. <?php $number =  $x['jumlah_bayar'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format;  ?></td>
                                    <td><?php if ($x['status'] == "Upload File") { ?>
                                            <a href="edit_trx/<?php echo $x['id_transaksi']; ?>" class="btn btn-primary btn-sm">
                                                Upload File</a></a>
                                    </td>
                                </tr>
                        <?php }
                                    endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php echo view("parsial/sidebar_user"); ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
</div>
<?php echo view("parsial/footer_user"); ?>
</div>