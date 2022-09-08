<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>DATA DANA PENYALURAN</title>
<?php //dd($id_penyaluran);
?>
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
                    <h2>Masukkan Data Dana Penyaluran</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/Penyaluran/simpan" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="id_penyaluran" value="<?php echo($id_penyaluran);?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Mustahiq <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="Nama_mustahiq" placeholder="Masukkan Nama Mustahiq">
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('Nama_mustahiq');
                                                                        ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="tb_kategori_asnaf">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <?php foreach ($dropdown as $row) { ?>
                                            <option value="<?= $row['id_asnaf']; ?>"><?= $row['nama_kategori_asnaf']; ?>
                                            </option>
                                        <?php  }
                                        ?>
                                    </select>
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tb_kategori_asnaf');
                                                                        ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Tgl.Pengajuan<span class="required">*</span></label>
                                    <input type="form" class="form-control" name="tgl_pengajuan" value="<?php echo date("Y-m-d"); ?>" readonly>
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tgl_pengajuan');
                                                                        ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Tgl.Penerimaan<span class="required">*</span></label>
                                    <input type="date" class="form-control" name="tgl_penerimaan">
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tgl_penerimaan');
                                                                        ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Zakat</label>
                                    <select id="nama_jenis_zakat" class="form-control" name="tb_jenis_zakat" onchange="pilih()">
                                        <option value="" disabled selected>Pilih Jenis Zakat</option>
                                        <?php foreach ($dropdownjeniszakat as $row) { ?>
                                            <option value="<?= $row['id_zakat']; ?>"><?= $row['nama_jenis_zakat']; ?>
                                            </option>
                                        <?php  }
                                        ?>
                                    </select>
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tb_jenis_zakat');
                                                                        ?></small>
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
                                        <input type="number" class="form-control" name="jumlah_yg_dikeluarkan">
                                    </div>
                                    <small class="form-text text-muted"><?php echo $pesan_validasi->getError('jumlah_yg_dikeluarkan');
                                                                        ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Bukti Penyaluran<span class="required">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" onchange="ambilNama()">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                        Simpan</button>
                                    <a href="./datapenyaluran" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
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
        <?php foreach ($dropdownjeniszakat as $bg) { ?>
            if (<?= $bg['id_zakat'] ?> == x) {
                y.value = <?= $bg['saldo']; ?>
            }
        <?php } ?>
    }
</script>
<?php echo view('parsial/footer'); ?>