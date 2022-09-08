<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Edit Mustahiq</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Mustahiq</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Data Mustahiq</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataMustahiq/proses_edit/<?php echo $x['id_mustahiq']; ?>"
                        method="post" enctype="multipart/form-data">
                        <!--<div class="card-body">
                        <div class="form-group">
                            <label>No. Surat <span class="required">*</span></label>
                            <input type="hidden" class="form-control" name="id_surat" placeholder="Masukan Nomor Surat">
                            <?php //echo $pesan_validasi->getError('id_surat');
                            ?>
                        </div>!-->
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" id="text-input" name="id_mustahiq" placeholder="Masukkan Nama"
                                    class="form-control" value="<?php echo $x['id_mustahiq']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Mustahiq <span class="required">*</span></label>
                                <input type="text" id="text-input" name="Nama_mustahiq" placeholder="Masukkan Nama"
                                    class="form-control" value="<?php echo $x['Nama_mustahiq']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin<span class="required">*</span></label>
                                <select class="form-control" name="Jk_mustahiq">
                                    <option value="<?= $x['Jk_mustahiq']; ?>"><?php echo $x['Jk_mustahiq']; ?></option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat<span class="required">*</span></label>
                                <input name="Alamat" placeholder="Masukkan Alamat" class="form-control"
                                    value="<?php echo $x['Alamat']; ?>"></input>
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

                                    <?php }}  ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                    Simpan</button>
                                <a href="/DataMustahiq/datamustahiq" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>