<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Send Email</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kirim Email</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Kirim Email disini</h2>
                    <div class="container mt-5">
                        <div class="card-body">
                            <form action="<?= site_url('email') ?>" method="post">
                                <div class="form-group">
                                    <label>Email Tujuan <span class="required">*</span></label>
                                    <input type="text" id="text-input" name="email_tujuan" class="form-control">
                                    <!-- <small class="form-text text-muted"><?php //echo $pesan_validasi->getError('Nama_mustahiq'); 
                                                                                ?></small> -->
                                </div>
                                <div class="form-group">
                                    <label>Subject <span class="required">*</span></label>
                                    <input type="text" id="text-input" name="subject" class="form-control">
                                    <!-- <small class="form-text text-muted"><?php //echo $pesan_validasi->getError('Nama_mustahiq'); 
                                                                                ?></small> -->
                                </div>
                                <div class="form-group">
                                    <label>Pesan <span class="required">*</span></label>
                                    <textarea rows=6 type="text" id="text-input" name="pesan" class="form-control"></textarea>
                                    <!-- <small class="form-text text-muted"><?php //echo $pesan_validasi->getError('Nama_mustahiq'); 
                                                                                ?></small> -->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo view('parsial/footer'); ?>