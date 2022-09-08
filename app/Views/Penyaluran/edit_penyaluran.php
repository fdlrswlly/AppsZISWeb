<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>DATA DANA PENYALURAN</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DATA DANA PENYALURAN ZIS</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubah Data Dana Penyaluran</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/Penyaluran/proses_edit/<?php echo $x['id_penyaluran'];?>" method="post" enctype="multipart/form-data">
                        <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');
                            ?>
                        </div>!-->
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="id_penyaluran" value="<?= $x['id_penyaluran']; ?>">
                                <label>Nama Mustahiq <span class="required">*</span></label>
                                <input type="text" class="form-control" name="Nama_mustahiq" placeholder="Masukkan Nama Mustahiq" value="<?= $x['Nama_mustahiq']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="tb_kategori_asnaf" class="form-control">
                                    <?php foreach ($dropdown as $z) {
                                        if ($x['id_asnaf'] == $z['id_asnaf']) { ?>
                                            <option value="<?= $z['id_asnaf']; ?>" selected><?= $z['nama_kategori_asnaf']; ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?= $z['id_asnaf']; ?>"><?= $z['nama_kategori_asnaf']; ?>
                                            </option>

                                    <?php }
                                    }  ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tgl.Pengajuan<span class="required">*</span></label>
                                <input type="form" class="form-control" name="tgl_pengajuan" value="<?php echo $x['tgl_pengajuan']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tgl.Penerimaan<span class="required">*</span></label>
                                <input type="date" class="form-control" name="tgl_penerimaan" value="<?= $x['tgl_penerimaan']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Zakat</label>
                                <select id="nama_jenis_zakat" name="tb_jenis_zakat" class="form-control" onchange="pilih()">
                                    <?php foreach ($dropdownzakat as $z) {
                                        if ($x['id_zakat'] == null) { ?>
                                            <option value="<?= $z['id_zakat']; ?>"><?= $z['nama_jenis_zakat']; ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?= $z['id_zakat']; ?>" selected><?= $z['nama_jenis_zakat']; ?>
                                            <?php } ?>
                                            </option>
                                        <?php } ?>
                                        <!-- <input type="text" value="<?php //echo $z['no_rekening'];
                                                                        ?>"> -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Saldo</label>
                                <input type="text" class="form-control" id='saldo' name='saldo' readonly>
                                <small class="form-text text-muted"><?php //echo $pesan_validasi->getError('Nama_mustahiq'); 
                                                                    ?></small>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Yang Dikeluarkan<span class="required">*</span></label>
                                <div class="input input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" name="jumlah_yg_dikeluarkan" value="<?= $x['jumlah_yg_dikeluarkan']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bukti Penyaluran<span class="required">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" onchange="ambilNama()">
                                    <label class="custom-file-label" for="customFile"><?php echo $x['bukti_penyaluran'];?></label>
                                </div>
                                <input type="hidden" name="fotoLama" value="<?php echo $x['bukti_penyaluran'];?>">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                Simpan</button>
                            <a href="/Penyaluran/datapenyaluran" class="btn btn-danger"><i class="fa fa-ban"></i>
                                Cancel</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function pilih() {
        var x = document.getElementById('nama_jenis_zakat').value;
        var y = document.getElementById('saldo');
        <?php foreach ($dropdownzakat as $bg) { ?>
            if (<?= $bg['id_zakat'] ?> == x) {
                y.value = <?= $bg['saldo']; ?>
            }
        <?php } ?>
    }
</script>
<?php echo view('parsial/footer'); ?>