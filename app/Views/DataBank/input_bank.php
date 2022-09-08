<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Tambah Data Bank Yayasan</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Data Bank Yayasan</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan Data Bank</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataBank/simpan" method="post" enctype="multipart/form-data">
                        <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');
                            ?>
                        </div>!-->
                            <div class="form-group">
                                <label>Nama Bank <span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_bank" placeholder="Masukkan Nama Bank"
                                    class="form-control">
                                <small
                                    class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_bank'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>No.Rekening <span class="required">*</span></label>
                                <input type="text" id="text-input" name="no_rekening"
                                    placeholder="Masukkan No. Rekening" class="form-control">
                                <small
                                    class="form-text text-muted"><?php echo $pesan_validasi->getError('no_rekening'); ?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                    Simpan</button>
                                <a href="/DataBank/databank" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>