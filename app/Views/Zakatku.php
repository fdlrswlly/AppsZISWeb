<?php echo view("parsial/navbar"); ?>
<title>ZIS KU</title>
<?php //dd($no_transaksi);
?>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">ZIS Ku</h2>
                <p class="card-text">Lihat riwayat pembayaran ZIS anda disini</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <div class="row">
                <div class="col-lg-15">
                    <!-- <Table data   -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <center>No. Transaksi</center>
                                </th>
                                <th>
                                    <center>Nama Muzzaki</center>
                                </th>
                                <th>
                                    <center>Jenis Zakat</center>
                                </th>
                                <th>
                                    <center>Jumlah Bayar</center>
                                </th>
                                <th>
                                    <center>Status</center>
                                </th>
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
                                            $format = number_format($number, 2, ",", ".");
                                            echo $format;  ?></td>
                                    <td><?php if ($x['status'] == "Menunggu Konfirmasi") { ?>
                                            <p class='btn btn-primary btn-sm'><b>Menunggu Konfirmasi</b></p>
                                        <?php } elseif (($x['status'] == "Lunas")) { ?>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#bukti<?= $x['no_transaksi']; ?>">
                                                <b>Lunas</b>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="bukti<?= $x['no_transaksi']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>No Transaksi: <?php echo $x['no_transaksi'] ?></p>
                                                            <p>Nama : <?php echo $x['nama_muzzaki'] ?></p>
                                                            <p>Jenis Zakat: <?php echo $x['nama_jenis_zakat'] ?></p>
                                                            <p>Tgl. Pembayaran: <?php echo $x['tgl_pembayaran'] ?></p>
                                                            <p>Jumlah Bayar: Rp. <?php $number =  $x['jumlah_bayar'];
                                                                                    $format = number_format($number, 2, ",", ".");
                                                                                    echo $format;  ?></p>
                                                            <p>Bank Yang Dituju: <?php echo $x['nama_bank'] ?></p>
                                                            <p>Status Pembayaran: <b><?php echo $x['status'] ?></b></p>
                                                            <center><b>Terima Kasih Atas Partisipasinya Untuk Membayar Zakat
                                                                    Infaq dan Sedekahnya</b></center>
                                                            <center><b>Jazakumullah Khairan Katsiran</b></center>
                                                            <center><b>Yayasan Miqat Ahsani Taqwim<b></center>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><b>Close</b></button>
                                                                <a href="/Zakatku/cetakbukti/<?php echo $x['id_transaksi']; ?>" class="btn btn-primary"> Cetak</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                            <?php } else { ?>
                                                <p class='btn btn-danger'>Ditolak</p>
                                            <?php } ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php //echo $pager->links('pembayaran_pages', 'pagination_custom'); ?>
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

<?php echo view("parsial/footer_user"); ?>