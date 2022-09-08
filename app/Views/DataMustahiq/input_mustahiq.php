<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Tambah Mustahiq</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Mustahiq</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan Data Mustahiq</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataMustahiq/simpan" method="post"
                        enctype="multipart/form-data">
                        <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');
                            ?>
                        </div>!-->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Mustahiq <span class="required">*</span></label>
                                <input type="text" id="text-input" name="Nama_mustahiq" placeholder="Masukkan Nama"
                                    class="form-control">
                                <small
                                    class="form-text text-muted"><?php echo $pesan_validasi->getError('Nama_mustahiq'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin<span class="required">*</span></label>
                                <select class="form-control" name="Jk_mustahiq">
                                    <option>Choose option</option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                               <small class="form-text text-muted"><?php echo $pesan_validasi->getError('Jk_mustahiq'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Alamat<span class="required">*</span></label>
                                <textarea name="Alamat" rows="9" placeholder="Masukkan Alamat"
                                    class="form-control"></textarea>
                                <small
                                    class="form-text text-muted"><?php echo $pesan_validasi->getError('Alamat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="tb_kategori_asnaf">
                                    <option value="" disabled selected>Choose option</option>
                                    <?php foreach ($dropdown as $row) { ?>
                                    <option value="<?= $row['id_asnaf']; ?>"><?= $row['nama_kategori_asnaf']; ?>
                                    </option>
                                    <?php  }
                                    ?>
                                </select>
                                <small
                                    class="form-text text-muted"><?php echo $pesan_validasi->getError('tb_kategori_asnaf'); ?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                    Simpan</button>
                                <a href="./datamustahiq" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>