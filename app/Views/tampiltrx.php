<?php echo view("parsial/navbar"); ?>
<title>Konfirmasi Pembayaran ZIS</title>
<script type=""></script>
<?php //dd($no_transaksi);
?>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Konfirmasi Pembayaran ZIS</h2>
                <p class="card-text">Silahkan lakukan konfirmasi Pembayaran ZIS jika sudah melakukan Transfer</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <form action="<?php echo base_url() ?>/Zakatku/proses_edit/<?php echo $x['id_transaksi']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <!--<label>ID. Transaksi</label>!-->
                            <input type="hidden" class="form-control" value="<?php echo $x['id_transaksi']; ?>" name="id_transaksi">
                        </div>
                        <div class="form-group">
                            <label>No. Transaksi</label>
                            <input type="text" class="form-control" value="<?php echo $x['no_transaksi']; ?>" name="no_transaksi" readonly>
                        </div>
                        <div class="form-group">
                            <label>Jenis ZIS</label>
                            <select name="tb_jenis_zakat" class="form-select" disabled>
                                <?php foreach ($dropdown as $z) {
                                    if ($x['id_zakat'] == $z['id_zakat']) { ?>
                                        <option value="<?= $z['id_zakat']; ?>" selected><?= $z['nama_jenis_zakat']; ?>
                                        </option>
                                    <?php } else { ?>
                                        <option value="<?= $z['id_zakat']; ?>"><?= $z['nama_jenis_zakat']; ?>
                                        </option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_muzzaki" value="<?= $x['nama_muzzaki']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pembayaran</label>
                            <input type="date" class="form-control" name="tgl_pembayaran" value="<?= $x['tgl_pembayaran']; ?>" readonly>
                            <br>
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <div class="input input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" name='jumlah_bayar' placeholder="" value="<?= $x['jumlah_bayar']; ?>" readonly>
                                </div>
                                <br>

                                <fieldset>

                                    <legend>Pilih Bank dan Upload Bukti</legend>
                                    <div class="form-group">
                                        <label>Bank Yang Dituju</label>
                                        <select id="nama_bank" name="tb_bank" class="form-select" onchange="pilih()">
                                            <option value="">Pilih Bank Yang Dituju</option>
                                            <?php foreach ($dropdownbank as $z) {
                                                if ($x['id_bank'] == null) { ?>
                                                    <option value="<?= $z['id_bank']; ?>"><?= $z['nama_bank']; ?>
                                                    </option>
                                                <?php } else { ?>
                                                    <option value="<?= $z['id_bank']; ?>" selected><?= $z['nama_bank']; ?>
                                                    <?php } ?>
                                                    </option>
                                                <?php } ?>
                                                <!-- <input type="text" value="<?php //echo $z['no_rekening'];
                                                                                ?>"> -->
                                        </select>
                                        <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tb_bank');
                                                                            ?></small>
                                    </div>
                                    <div>
                                        <label>No. Rekening</label>
                                        <input id='no_rek' type="text" class="form-control" name='no_rekening' placeholder="" value="" readonly>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Bukti Pembayaran</label>
                                <div class="custom-file">
                                    <input class="custom-file-input" <?php echo ($pesan_validasi->hasError('bukti_pembayaran')) ? 'is-invalid' : '' ?>) type="file" name="foto" onchange="ambilNama()">
                                    <small><?= $pesan_validasi->getError('bukti_pembayaran'); ?></small>
                                </div>
                                <input type="hidden" name="fotoLama" value="<?= $x['bukti_pembayaran']; ?>">
                                <label class="custom-file-label" for="customFile"><?= $x['bukti_pembayaran']; ?></label>
                                <br>
                                </script>
                                <input type="hidden" name="status" value="Menunggu Konfirmasi">
                            </div>
                            <button class="btn btn-primary" value="" type="submit">Konfirmasi</button>
                        </div>
                    </form>
                    </fieldset>
                </div>
            </div>
        </div>
        <?= view('parsial/sidebar_user'); ?>
    </div>
</div>
<script>
    function pilih() {
        var x = document.getElementById('nama_bank').value;
        var y = document.getElementById('no_rek');
        <?php foreach ($dropdownbank as $bg) { ?>
            if (<?= $bg['id_bank'] ?> == x) {
                y.value = <?= $bg['no_rekening']; ?>
            }
        <?php } ?>
    }
</script>
<?php echo view('parsial/footer_user'); ?>