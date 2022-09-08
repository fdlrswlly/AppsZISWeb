<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Laporan Keluar</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Keluar</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix">
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <a href="<?php echo base_url(''); ?>" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i class="fa fa-print"></i></span>
                            <span class="text">Cetak</span>
                        </a>
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No.</th>
                                <th class="column-title">Nama Mustahiq</th>
                                <th class="column-title">Tgl. Pengajuan</th>
                                <th class="column-title">Tgl. Penerimaan</th>
                                <th class="column-title">Jumlah Yang Dikeluarkan</th>
                                <th class="column-title">Saldo ZIS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($laporankeluar as $x) : ?>
                                    <td><?= $x['id_penyaluran']; ?></td>
                                    <td><?= $x['Nama_mustahiq']; ?></td>
                                    <td><?= $x['tgl_pengajuan']; ?></td>
                                    <td><?= $x['tgl_penerimaan']; ?></td>
                                    <td>Rp.<?php $number =  $x['jumlah_yg_dikeluarkan'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format; ?></td>
                                    <td>Rp.<?php $number =  $x['saldo'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('parsial/footer'); ?>