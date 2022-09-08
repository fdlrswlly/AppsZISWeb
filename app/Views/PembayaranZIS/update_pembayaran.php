<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Update Pembayaran</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Pembayaran</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cek Transaksi</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/BayarZakat/proses_edit/<?php echo $x['id_transaksi']; ?>" method="post" enctype="multipart/form-data">
                        <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');
                            ?>
                        </div>!-->
                        <div class="card-body">
                            <input type="hidden" id="text-input" name="id_transaksi" placeholder="Masukkan Nama" class="form-control" value="<?php echo $x['id_transaksi']; ?>">
                            <div class="form-group">
                                <label for="text-input" class=" form-control-label">No.Transaksi <span class="required">*</span></label>
                                <input type="text" id="text-input" name="no_transaksi" class="form-control" value="<?php echo $x['no_transaksi']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="text-input" class=" form-control-label">Nama Muzzaki <span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_muzzaki" placeholder="Masukkan Nama" class="form-control" value="<?php echo $x['nama_muzzaki']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jenis Zakat<span class="required">*</span></label>
                                <select name="tb_jenis_zakat" class="form-control" disabled>
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
                                <label>Tanggal Pembayaran</label>
                                <input type="date" class="form-control" name="tgl_pembayaran" value="<?php echo $x['tgl_pembayaran']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <div class="input input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <?php
                                    $number = $x['jumlah_bayar'];
                                    $format = number_format($number, 2, ",", ".");; ?>
                                    <p type="number" class="form-control" readonly><?php echo $format; ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bank Yang Dituju<span class="required">*</span></label>
                                <select name="tb_bank" class="form-control" disabled>
                                    <?php foreach ($dropdownbank as $z) {
                                        if ($x['id_bank'] == $z['id_bank']) { ?>
                                            <option value="<?= $z['id_bank']; ?>" selected><?= $z['nama_bank']; ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?= $z['id_bank']; ?>"><?= $z['nama_bank']; ?>
                                            </option>
                                    <?php }
                                    } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bukti Pembayaran</label>
                                <br>
                                <img src="<?php echo base_url('foto') . "/" . $x['bukti_pembayaran']; ?>" alt="foto" width="400px" height="auto">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="<?= $x['status']; ?>"><?php echo $x['status']; ?></option>
                                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Ditolak">Ditolak</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                    Simpan</button>
                                <a href="/BayarZakat/datatransaksi" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>