<?php echo view("parsial/navbar"); ?>
<title>Bayar ZIS</title>
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
                <p class="card-text">Bayar Zakat Infaq dan Sedekah disini</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <form action="<?php echo base_url() ?>/BayarZakat/simpan" method="post" enctype="multipart/form-data">
                        <!-- Blog post-->
                        <div class="form-group">
                            <!--<label>ID. Transaksi</label>!-->
                            <input type="hidden" class="form-control" value="" name="id_transaksi">
                        </div>
                        <div class="form-group">
                            <!-- <<label>No. Transaksi</label> -->
                            <input type="hidden" class="form-control" value="<?php echo ($no_transaksi); ?>" name="no_transaksi" readonly>
                        </div>
                        <div class="form-group">
                            <label>Jenis ZIS</label>
                            <select name="tb_jenis_zakat" class="form-select">
                                <option value="" disabled selected>Pilih Jenis ZIS</option>
                                <?php
                                foreach ($dropdownjeniszakat as $row) { ?>
                                    <option value="<?= $row['id_zakat']; ?>"><?= $row['nama_jenis_zakat']; ?>
                                    </option>
                                <?php } ?>
                            </select><small><?php echo $pesan_validasi->getError('tb_jenis_zakat'); ?></small>
                        </div>
                        <?php $session = session() ?>
                        <div class="form-group">
                            <label>Nama Muzzaki</label>
                            <input type="text" class="form-control" value="<?php echo $session->get('nama_muzzaki') ?>" name="nama_muzzaki" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pembayaran</label>
                            <input type="date" class="form-control" name="tgl_pembayaran">
                            <small><?php echo $pesan_validasi->getError('tgl_pembayaran'); ?></small>
                            <br>
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <div class="input input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" name='jumlah_bayar' placeholder="" 
                                    value="<?php if (empty($_SESSION['a'])) {
                                        echo 0;
                                    } else {
                                        echo $_SESSION['a'];
                                    }?>">
                                </div><small><?php echo $pesan_validasi->getError('jumlah_bayar'); ?></small>
                            </div>
                            <br>
                            <!-- <div class="form-group">
                                <label>Bank Yang Dituju</label>
                                <select name="tb_bank" class="form-select">
                                    <option value="" disabled selected>Pilih Bank</option>
                                    <?php
                                    //foreach ($dropdownbank as $row) { ?>
                                        <option value=" ">
                                        </option> -->
                                    <?php //} ?>
                                <!-- </select><small><?php //echo $pesan_validasi->getError('tb_bank'); ?></small> -->
                            <!-- </div> -->
                            <!-- <div class="form-group"> 
                                <label>Bukti Pembayaran</label>
                                <div class="custom-file">
                                    <input class="custom-file-input" <?php //echo ($pesan_validasi->hasError('bukti_pembayaran')) ? 'is-invalid' : '' ?>) type="file" name="foto" onchange="ambilNama()">
                                </div> <small><?php //echo $pesan_validasi->getError('bukti_pembayaran'); ?></small>
                                <br> -->
                                <input type="hidden" name="status" value="Upload File">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            <!-- </div>  -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php echo view('parsial/sidebar_user'); ?>
</div>
<?php echo view('parsial/footer_user'); ?>